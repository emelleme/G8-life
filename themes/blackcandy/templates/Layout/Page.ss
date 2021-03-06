	<td style="width:124px; text-align:right" valign="top"><a href="home">
		<img src="themes/blackcandy/images/logo.png" border="0"></a>
		
		<% if URLSegment = what-is-g8 %>
		<% include WhatisG8_sub %>
		<% end_if %>
		
		<% if URLSegment = mission-and-vision %>
		<% include WhatisG8_sub %>
		<% end_if %>
		
		<% if URLSegment = who-is-g8 %>
		<% include WhoisG8_sub %>
		<% end_if %>
		
		<% if URLSegment = about %>
		<% include About_sub %>
		<% end_if %>
		
		<% if URLSegment = faq %>
		<% include FAQ_sub %>
		<% end_if %>
		
		<% if URLSegment = contact %>
		<% include Contact_sub %>
		<% end_if %>
		
		</td>
		<td>

		<div id="general">

			<div id="top-buttons">
			
				<a href="what-is-g8">
				<% if URLSegment != what-is-g8 %>
				<img id="top1" src="themes/blackcandy/images/house.png" border="0" />
				<% else %>
				<img id="top1" src="themes/blackcandy/images/m-house-b.png" border="0" />
				<% end_if %>
				</a>
				
				<a href="who-is-g8">
				<% if URLSegment != who-is-g8 %>
				<img id="top2" src="themes/blackcandy/images/current.png" border="0">
				<% else %>
				<img id="top2" src="themes/blackcandy/images/m-current-b.png" border="0">
				<% end_if %>
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
				<% if URLSegment != contact %>
				<img id="top5" src="themes/blackcandy/images/contact.png" border="0">
				<% else %>
				<img id="top5" src="themes/blackcandy/images/m-contact-b.png" border="0">
				<% end_if %>
				</a>
			</div>
	    <div>
			<% if HeaderImage %>
	<div id="header-img">
	$HeaderImage
	</div>
	<% end_if %>
	
	<% if SquareImage %>
	<div id="square">
	$SquareImage
	</div>
	<% end_if %>
	
	<div id="content" style="width: 710px;">
	<% if TitleImage %>
	<div id="imgtitle1">
	$TitleImage
	</div>
	<% end_if %>
	
	<div id="txt" style="width: 700px; text-align: left;">
	  $Content
	  $Form
	</div>
	</div>

			
		</div>
		</div>
		</td>
