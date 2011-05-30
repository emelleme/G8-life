jQuery(document).ready(function () {
	var hideDelay=200;
	var hideDelayTimer=null;
	jQuery("#socialslider").hover(function(){
		if(hideDelayTimer)clearTimeout(hideDelayTimer);
		jQuery("#socialslider").animate({left:'0'},"fast");
	}, function(){
		if(hideDelayTimer)clearTimeout(hideDelayTimer);
		hideDelayTimer=setTimeout(function(){hideDelayTimer=null;jQuery("#socialslider").animate({left:'-86'},"fast");},hideDelay);
	}
	);
});
