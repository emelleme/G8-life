<?php
class SolarPage extends SiteTree {

	public static $db = array(
	);

	public static $has_one = array(
	);

}
class SolarPage_Controller extends ContentController {

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
	
	public function Form() {
		$form = new RegistrationForm($this,'registrant');
		$form->setHTMLID('registrant');
		$form->unsetValidator();
		return $form;
	}
	
	public function signup() {
	if(@isset($_POST['first_name'])){
	    	$payload = $_POST;
	    	$firstname = $_POST['first_name'];
	    	$lastname = $_POST['last_name'];
	    	$address = $_POST['address'];
	    	$city = $_POST['city'];
	    	$zip = $_POST['zip'];
	    	$state = $_POST['state'];
	    	$proptype = $_POST['property_type'];
	    	$rooftype = $_POST['roof_type'];
	    	$electric = $_POST['electric_bill'];
	    	$starttime = $_POST['start_time'];
	    	$comments = $_POST['comments'];
	    	$email = $_POST['email'];
	    	$phone = $this->validate_usphone($_POST['phone']);
	    }else{
	    	var_dump( $_POST);
	    	exit;
	    } 
	    
	    $d = array(
	    'Email' => $email,
	    'FirstName' => $firstname,
	    'LastName' => $lastname,
	    'Address' => $address,
	    'City' => $city,
	    'State' => $state,
	    'PropertyType' => $proptype,
	    'RoofType' => $rooftype,
	    'Electric' => $electric,
	    'StartTime' => $starttime,
	    'Comments' => $comments,
	    'Phone' => $phone,
	    'Zip' => $zip
	    );
	    
	    $email = new Email('g8life@emelle.me','lloyd@emelle.me, info@g8-life.com', 'G8-Solar Form Submission');
	    $email->setTemplate('RegistrationEmail');
	    $email->populateTemplate($d);
	    $email->send();
		//var_dump($payload);
		return $this->customise($d)->renderWith('RegistrationComplete');
	    //return $this->customise($data)->renderWith('RegistrationAjax');
	}
	
	
	
	public function emailtest(){
		return $this->renderWith('RegistrationEmail');
	}
	
	private function validate_usphone($phonenumber,$useareacode=true)
{
	if ( preg_match("/^[ ]*[(]{0,1}[ ]*[0-9]{3,3}[ ]*[)]{0,1}[-]{0,1}[ ]*[0-9]{3,3}[ ]*[-]{0,1}[ ]*[0-9]{4,4}[ ]*$/",$phonenumber) || (preg_match("/^[ ]*[0-9]{3,3}[ ]*[-]{0,1}[ ]*[0-9]{4,4}[ ]*$/",$phonenumber) && !$useareacode)) return eregi_replace("[^0-9]", "", $phonenumber);
	return false;
}

	private function getRealIpAddr() {
		if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
		{
		  $ip= $_SERVER['HTTP_CLIENT_IP'];
		}
		else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
		{
		  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
		  $ip=$_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}
}
