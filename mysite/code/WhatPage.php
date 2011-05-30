<?php
class WhatPage extends Page {

	public static $db = array(
	);
}

class WhatPage_Controller extends Page_Controller {

	 
	public static $allowed_actions = array (
	);

	public function init() {
		parent::init();

		// Note: you should use SS template require tags inside your templates 
		// instead of putting Requirements calls here.  However these are 
		// included so that our older themes still work
		
	}
}
