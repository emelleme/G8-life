<?php
class RegistrationForm extends Form {
 
   function __construct($controller, $name) {
		$name = "registrant";
      $registrantname = new TextField($name = 'name');
		$registrantname->removeExtraClass('text');
		
		$registrantaddy = new TextField($name = 'address');
		$registrantaddy->removeExtraClass('text');
		
		$registrantunit = new TextField($name = 'unit');
		$registrantunit->removeExtraClass('text');
		
		$registrantzip = new TextField($name='zip');
		$registrantzip->removeExtraClass('text');
		
		$registrantemail = new TextField($name='email');
		$registrantemail->removeExtraClass('text');
		
		$registrantphone = new TextField($name='phone');
		$registrantphone->removeExtraClass('text');
		
		$disclaimer = new CheckboxField($name='disclaimer',$Title = 'I have read the Disclaimer and agree to the Terms of Use');
	
		$fields = new FieldSet(
			$registrantname,
			$registrantaddy,
			$registrantunit,
			$registrantzip,
			$registrantemail,
			$registrantphone,
			$disclaimer
			);
 
      $actions = new FieldSet(new FormAction("signup", "Submit"));
 
      parent::__construct($controller, $name, $fields, $actions);
   }
   
   function FormAction() {
   		$attr = 'home/signup';
   		return $attr;
	}
 
   function forTemplate() {
      return $this->renderWith(array(
         $this->class,
         'Form'
      ));
   }
 
   function signup($data, $form) {
      // do stuff here
   }
 
}
