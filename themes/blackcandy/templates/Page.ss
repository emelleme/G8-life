<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en">
	<head>
		<% base_tag %>
		<meta name="google-site-verification" content="QL2VPen-LAvSsSkszPmvbrVDyc_7NGazCUJ5flktdD4" />
		<title><% if MetaTitle %>$MetaTitle<% else %>$Title<% end_if %></title>
		$MetaTags(false)
		<link rel="shortcut icon" href="/favicon.ico" />
		
		<% require themedCSS(style) %> 
		<% require themedCSS(typography) %> 
		<% require themedCSS(form) %> 
		<% require themedCSS(social-slider) %> 
		<% require javascript(http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js) %>
		<% require javascript(mysite/javascript/social-slider.js) %>
		
		<!--[if IE 6]>
			<style type="text/css">
			 @import url(themes/blackcandy/css/ie6.css);
			</style> 
		<![endif]-->
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17638061-1']);
  _gaq.push(['_setDomainName', '.g8-life.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</head>
<body style="text-align: center;">
<table align="center"  cellpadding="0" cellspacing="0">
	<tr>
		$Layout
	</tr>
</table>
<!-- Social Slider -->
<% require javascript(mysite/javascript/socialslider-config.js) %>
<% include SocialSlider %>
</body>
</html>
