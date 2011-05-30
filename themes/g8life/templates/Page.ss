<html lang="en"> 
	<head> 
		<% base_tag %>
		<title><% if MetaTitle %>$MetaTitle<% else %>$Title<% end_if %></title>
		$MetaTags(false)
		<% require themedCSS(style-life) %> 
		<% require themedCSS(form) %> 
		<% require themedCSS(social-slider) %> 
		<% require javascript(mysite/javascript/social-slider.js) %>
		<script type="text/javascript" src="http://fast.fonts.com/jsapi/6d1bab03-0502-4f33-a32a-c05271642469.js"></script>
		<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
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
<body> 
<!-- Begin Wrapper --> 
<div id="wrapper"> 
  <!-- Begin Header --> 
  <!-- End Header --> 
  <!-- Begin Navigation --> 
  <div id="navigation"> 
  		<ul id="nav">
		<% control Menu(1) %>	  
  		<li><a id="$URLSegment" href="$Link" title="Go to the $Title.XML page" class="$LinkingMode $URLSegment">$MenuTitle.XML</a></li>
   	<% end_control %>
		</ul>
		<p id="sub-nav">
		<% control Menu(2) %>	  
  		<span><a id="$URLSegment" href="$Link" title="Go to the $Title.XML page" class="$LinkingMode $URLSegment">$MenuTitle.XML</a></span>
   	<% end_control %>
		</p>
   </div> 
  
  <!-- End Navigation --> 
  <!-- Begin Left Column --> 
  <div id="leftcolumn"> <a href="home"><img src="themes/g8life/images/g8-life.jpg"></a>
  
  <div id="icons">
  <p><a class="facebook" href="http://g8-life.com/facebook" alt="Like us on Facebook!">Facebook</a></p>
  
  <p><a class="twitter" href="http://g8-life.com/twitter" alt="Follow us on Twitter!">Twitter</a></p>
  
  <p><a class="blog" href="http://blog.g8-life.com" alt="Subscribe to our blog!">Blog</a></p>
  </div>
  
  <div id="info"><p>G8 Life<br>2424 East York Street<br>Suite 202<br>Philadelphia, PA 19125<br>Direct:(215)870-5041<br>Fax:(215)689-0870<br>info@g8-life.com</p></div>
  </div> 
  <!-- End Left Column --> 
  <!-- Begin Right Column -->
 	<div id="rightcolumn">
 	$Layout
 	</div>
	
  <!-- End Right Column --> 
 </div> 
<!-- End Wrapper --> 
<!-- Social Slider -->
<% require javascript(mysite/javascript/socialslider-config.js) %>
<% include SocialSlider %>
</body> 
</html>
