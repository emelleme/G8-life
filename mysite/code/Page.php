<?php
class Page extends SiteTree {

	public static $db = array(
	);

	public static $has_one = array(
		'HeaderImage' => 'Image',
		'SquareImage' => 'Image',
		'TitleImage' => 'Image'
	);
	
	public function getCMSFields() {
	$fields = parent::getCMSFields();
	
/*	
	$fields->addFieldToTab('Root.Content.Main', new FileIFrameField('HeaderImage', 'Header Image'), 
'Content');
$fields->addFieldToTab('Root.Content.Main', new FileIFrameField('SquareImage', 'Square Image'), 
'Content');
$fields->addFieldToTab('Root.Content.Main', new FileIFrameField('TitleImage', 'Title Image'), 
'Content');
*/
	
	return $fields;
  }

}
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	public static $allowed_actions = array (
	);

	public function init() {
		parent::init();

		// Note: you should use SS template require tags inside your templates 
		// instead of putting Requirements calls here.  However these are 
		// included so that our older themes still work
		
	}
	
	
}
