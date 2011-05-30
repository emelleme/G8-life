<form $FormAttributes>
<div style="float:left">
<h3>Basic Information</h3>
<fieldset>	
			<label class="field-first">First Name &#42;<input type="text" name="first_name" id="first_name" value="" /></label>
			<label class="field-last">Last Name &#42;<input type="text" name="last_name" value="" /></label>
			<label class="field-address">Home Address &#42;<input type="text" name="address" value="" /></label>
			<label class="field-city">City &#42;<input type="text" name="city" value="" /></label>
			<label class="field-state">State &#42;<select name="state"><option>AL</option><option>AK</option><option>AR</option><option>AZ</option><option>CA</option><option>CO</option><option>CT</option><option>DC</option><option>DE</option><option>FL</option><option>GA</option><option>HI</option><option>ID</option><option>IA</option><option>IL</option><option>IN</option><option>KS</option><option>KY</option><option>LA</option><option>MA</option><option>MD</option><option>ME</option><option>MI</option><option>MO</option><option>MN</option><option>MS</option><option>MT</option><option>NC</option><option>ND</option><option>NE</option><option>NH</option><option>NJ</option><option>NM</option><option>NY</option><option>NV</option><option>OH</option><option>OK</option><option>OR</option><option>PA</option><option>RI</option><option>SC</option><option>SD</option><option>TN</option><option>TX</option><option>UT</option><option>VA</option><option>VT</option><option>WA</option><option>WI</option><option>WV</option><option>WY</option></select></label>
			<label class="field-zip">Zip Code &#42;<input type="text" name="zip" value="" /></label><br style="clear: left;" />                     
			<label class="field-email">Email &#42;<input type="text" name="email" value="" /></label>
			<label class="field-phone">Phone<input type="text" name="phone" value="" /></label>
</fieldset>
</div>


<div style="float:right">
<fieldset>
	<h3>Property Information</h3>
	<label class="field-email">Property Type &#42;<input type="text" name="property_type" value="" /></label>
	
	<label class="field-phone">Avg. Electric Bill<input type="text" name="electric_bill" value="" /></label>
	<label class="field-starttime">Time Frame to Start &#42;<input type="text" name="star_time" value="" /></label>
	<label class="field-roof">Roof Type &#42;<select name="roof_type"><option>Flat</option><option>Pitched</option></select></label>
	<label class="field-describe">Comments<br /><textarea name="comments" cols="40" rows="5"></textarea></label>

	<label>Click &#8220;Submit&#8221; below!</label>
	$dataFieldByName(SecurityID)
	<% if Actions %>
		<% control Actions %>
		$Field
		<% end_control %>
   <% end_if %>
	<input type="hidden" name="submitted" value="TRUE" />
</fieldset>
</form>
