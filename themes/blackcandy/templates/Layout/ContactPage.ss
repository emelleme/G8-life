	<td style="width:124px; text-align:right" valign="top"><a href="home">
		<img src="themes/blackcandy/images/logo.png" border="0"></a>
		</td>
		
		<td>
		
		<div id="general">

			<div id="top-buttons">
				<a href="what-is-g8">
				<img id="top1" src="themes/blackcandy/images/house.png" border="0" />
				</a>
				
				<a href="who-is-g8">
				<img id="top2" src="themes/blackcandy/images/current.png" border="0">
				</a>
				
				<a href="about">
				<% if URLSegment != about %>
				<img id="top3" src="themes/blackcandy/images/about.png" border="0">
				<% else %>
				<img id="top3" src="themes/blackcandy/images/m-about-b.png" border="0">
				<% end_if %>
				</a>
				
				<a href="faq">
				<% if URLSegment != faq %>
				<img id="top4" src="themes/blackcandy/images/faq.png" border="0">
				<% else %>
				<img id="top4" src="themes/blackcandy/images/m-faq-b.png" border="0">
				<% end_if %>
				</a>
				
				<a href="contact">
				<img id="top5" src="themes/blackcandy/images/m-contact-b.png" border="0">
				</a>
		</div>
	    <div>
			<% if HeaderImage %>
	<div id="header-img">
	$HeaderImage
	</div>
	<% end_if %>
	
	
	<div id="content" style="width: 710px;">
	<% if TitleImage %>
	<div id="imgtitle1" style="margin-top: 0px;">
	$TitleImage
	</div>
	<% end_if %>
	
	<div id="txt">
	  $Content
	</div>
	</div>

			
		</div>
		</div>
		</td>
