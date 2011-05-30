<?php
/**
 * Decorator designed to add subsites support to LeftAndMain
 * 
 * @package subsites
 */
class LeftAndMainSubsites extends Extension {
	static $allowed_actions = array(
		'changesubsite',
	);
	
	function augmentInit() {
		Requirements::css('subsites/css/LeftAndMain_Subsites.css');
		Requirements::javascript('subsites/javascript/LeftAndMain_Subsites.js');
		Requirements::javascript('subsites/javascript/VirtualPage_Subsites.js');
	}
	
	/**
	 * Set the title of the CMS tree
	 */
	function getCMSTreeTitle() {
		$subsite = Subsite::currentSubSite();
		return $subsite ? htmlspecialchars($subsite->Title, ENT_QUOTES) : 'Site Content';
	}
	
	function updatePageOptions(&$fields) {
		$fields->push(new HiddenField('SubsiteID', 'SubsiteID', Subsite::currentSubsiteID()));
	}


	public function changesubsite() {
		$id = $_REQUEST['SubsiteID'];

		Subsite::changeSubsite($id==-1 ? 0 : $id);
		
		if ($id == '-1') Cookie::set('noSubsiteFilter', 'true', 1);
		else Cookie::set('noSubsiteFilter', 'false', 1);
		
		if(Director::is_ajax()) {
			$tree = $this->owner->SiteTreeAsUL();
			$tree = ereg_replace('^[ \t\r\n]*<ul[^>]*>','', $tree);
			$tree = ereg_replace('</ul[^>]*>[ \t\r\n]*$','', $tree);
			return $tree;
		} else
			return array();
	}
	
	public function Subsites() {
		$accessPerm = 'CMS_ACCESS_'. $this->owner->class;
		
		switch($this->owner->class) {
			case "AssetAdmin":
				$subsites = Subsite::accessible_sites($accessPerm, true, "Shared files & images");
				break;
				
			case "SecurityAdmin":
				$subsites = Subsite::accessible_sites($accessPerm, true, "Groups accessing all sites");
				if($subsites->find('ID',0)) {
					$subsites->push(new ArrayData(array('Title' => 'All groups', 'ID' => -1)));
				}
				break;
				
			case "CMSMain":
				// If there's a default site then main site has no meaning
				$showMainSite = !DataObject::get_one('Subsite',"\"DefaultSite\"=1 AND \"IsPublic\"=1");
				$subsites = Subsite::accessible_sites($accessPerm, $showMainSite);
				break;
				
			default: 
				$subsites = Subsite::accessible_sites($accessPerm);
				break;	
		}

		return $subsites;
	}
	
	public function SubsiteList() {
		if ($this->owner->class == 'AssetAdmin') {
			// See if the right decorator is there....
			$file = new File();
			if (!$file->hasExtension('FileSubsites')) {
				return false;
			}
		}
		
		$list = $this->Subsites();
		
		$currentSubsiteID = Subsite::currentSubsiteID();
		
		if($list->Count() > 1) {
			$output = '<select id="SubsitesSelect">';
		
			foreach($list as $subsite) {
				$selected = $subsite->ID == $currentSubsiteID ? ' selected="selected"' : '';
		
				$output .= "\n<option value=\"{$subsite->ID}\"$selected>".htmlspecialchars($subsite->Title, ENT_QUOTES)."</option>";
			}
		
			$output .= '</select>';
		
			Requirements::javascript('subsites/javascript/LeftAndMain_Subsites.js');
			return $output;
		} else if($list->Count() == 1) {
			return $list->First()->Title;
		}
	}
	
	public function CanAddSubsites() {
		return Permission::check("ADMIN", "any", null, "all");
	}

	/**
	 * Alternative security checker for LeftAndMain.
	 * If security isn't found, then it will switch to a subsite where we do have access.
	 */
	public function alternateAccessCheck() {
		$className = $this->owner->class;

		// Switch to the subsite of the current page
		if ($this->owner->class == 'CMSMain' && $currentPage = $this->owner->currentPage()) {
			if (Subsite::currentSubsiteID() != $currentPage->SubsiteID) {
				Subsite::changeSubsite($currentPage->SubsiteID);
			}
		}
		
		// Switch to a subsite that this user can actually access.
		$member = Member::currentUser();
		if ($member && $member->isAdmin()) return true;	//admin can access all subsites
				
		$sites = Subsite::accessible_sites("CMS_ACCESS_{$this->owner->class}")->toDropdownMap();
		if($sites && !isset($sites[Subsite::currentSubsiteID()])) {
			$siteIDs = array_keys($sites);
			Subsite::changeSubsite($siteIDs[0]);
			return true;
		}
		
		// Switch to a different top-level menu item
		$menu = CMSMenu::get_menu_items();
		foreach($menu as $candidate) {
			if($candidate->controller != $this->owner->class) {
					
				$sites = Subsite::accessible_sites("CMS_ACCESS_{$candidate->controller}")->toDropdownMap();
				if($sites && !isset($sites[Subsite::currentSubsiteID()])) {
					$siteIDs = array_keys($sites);
					Subsite::changeSubsite($siteIDs[0]);
					$cClass = $candidate->controller;
					$cObj = new $cClass();
					Director::redirect($cObj->Link());
					return null;
				}
			}
		}
		
		// If all of those fail, you really don't have access to the CMS		
		return null;
	}
	
	function augmentNewSiteTreeItem(&$item) {
		$item->SubsiteID = isset($_POST['SubsiteID']) ? $_POST['SubsiteID'] : Subsite::currentSubsiteID();	
	}
	
	function onAfterSave($record) {
		if($record->hasMethod('NormalRelated') && ($record->NormalRelated() || $record->ReverseRelated())) {
			FormResponse::status_message('Saved, please update related pages.', 'good');
		}
	}
}
	
	

?>
