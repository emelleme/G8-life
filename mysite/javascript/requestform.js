$(document).ready(function(){
	//Load the Request form 

//On Click of Continue, submit form and check address
$("#registrant").submit(function(e) {
	var form = $(this);
	//$("#apple").html('<p>Saving your information...<br><img src="themes/solar/images/ajax-loader.gif" /></p>');
	// client-side validation OK.
	if (!e.isDefaultPrevented()) {
		$("#apple").overlay({

		// custom top position

		// some mask tweaks suitable for facebox-looking dialogs
		mask: {

			// you might also consider a "transparent" color for the mask
			color: '#000',

			// load mask a little faster
			loadSpeed: 200,

			// very transparent
			opacity: 0.5
		},
		effect: 'apple',

		// disable this for modal dialog-type of overlays
		closeOnClick: false,
		
		// load it immediately after the construction
		load: true
		//Submit form data with Ajax
		});
		
		$.post(jQuery(this).attr("action"),$('#registrant').serialize(), function(data){
			$('#apple').html(data);
		});
		// prevent default form submission logic
		e.preventDefault();
	}
});
});

function loadForm(){
	$("#apple").overlay({

		// custom top position

		// some mask tweaks suitable for facebox-looking dialogs
		mask: {

			// you might also consider a "transparent" color for the mask
			color: '#000',

			// load mask a little faster
			loadSpeed: 200,

			// very transparent
			opacity: 0.5
		},

		// disable this for modal dialog-type of overlays
		closeOnClick: true,
		
		// load it immediately after the construction
		load: true
		//Submit form data with Ajax
		});
}
