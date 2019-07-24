<html>
<head>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="style2.css" rel="stylesheet" type="text/css">

<title>Customer with DOt</title>
</head>
<body>

<h1 style="margin-top:20px" align="center">Customer with DOT</h1>
<!-- multistep form -->
<form id="msform">
<!-- progressbar -->
<ul id="progressbar">
<li class="phoneli active">Phone Number </li>
<li class='dotLi'>DOT & MC</li>
<li  class='physicalLi'>Verify Phyical Address</li>
<li class='mailingLi'>Verify Mailing Address</li>
<li class='insuranceLi'>Verify Insurance Data</li>
</ul>
<!-- fieldsets -->
<fieldset class='first'>
<h2 class="fs-title">Enter Phone Number</h2>
<h3 class="fs-subtitle"></h3>
<input type="text" name="phone" placeholder="Phone Number" required class='phoneNumber' />
<input type="hidden" name="contactId" placeholder="Phone Number" required class='contactId' />
<input type="button" name="next" class="action-button phone_number_next" value="Next" />
</fieldset>
<fieldset class='second'>
<h2 class="fs-title">Enter DOT & MC</h2>
<h3 class="fs-subtitle"></h3>
<div class='header_search'>
<label for="y"><input type="radio" name="selectType" placeholder="DOT" value='1' class='checkType' checked='checked'/> DOT</label>
<label for="z"><input type="radio" name="selectType" placeholder="MC" value='2' class='checkType'/>MC</label>
</div>
<input type="text" name="searchedNumber" placeholder="Enter DOT Number" class="searchedNumber" />
<input type="button" name="previous" class="previous_doT action-button" value="Previous" />
<input type="button" name="next" class="action-button dot_number_next" value="Next" />
</fieldset>
<fieldset class='third'>
<h2 class="fs-title">Is this your Physcial Address</h2>
<h3 class="fs-subtitle"></h3>
<input type="text" name="physical_addresss" class='physical_address' placeholder="addresss" />
<input type="text" name="physical_street" class='physical_street' placeholder="Street Address" />
<input type="text" name="physical_street1" class='physical_street1'  placeholder="Address Line 2" />
<input type="text" name="physical_city" class='physical_city' placeholder="City" />
<input type="text" name="physical_state" class='physical_state' placeholder="State/Region/Province" />
<input type="text" name="physical_Postal" class='physical_Postal' placeholder="Postal / Zip Code" />

<input type="button" name="previous" class="previous_physical action-button" value="Previous" />
<input type="button" name="next" class="action-button physical_address_next" value="Next" />

</fieldset>
<fieldset class='fourth'>
<h2 class="fs-title">Is this your Mailing Address</h2>
<h3 class="fs-subtitle"></h3>
<input type="text" name="mailing_addresss" class='mailing_address' placeholder="addresss" />
<input type="text" name="mailing_street" class='mailing_street' placeholder="Street Address" />
<input type="text" name="mailing_street1" class='mailing_street1'  placeholder="Address Line 2" />
<input type="text" name="mailing_city" class='mailing_city' placeholder="City" />
<input type="text" name="mailing_state" class='mailing_state' placeholder="State/Region/Province" />
<input type="text" name="mailing_Postal" class='mailing_Postal' placeholder="Postal / Zip Code" />
<input type="button" name="previous" class="previous_mailing action-button" value="Previous" />
<input type="button" name="next" class="action-button mailing_address_next" value="Next" />
</fieldset>
<fieldset class='fifth'>
<h2 class="fs-title">Additional Insurance Data</h2>
<h3 class="fs-subtitle"></h3>
<input type="text" name="Entity_Type" class='Entity_Type' placeholder="Entity Type" />
<input type="text" name="Operating_Status" class='Operating_Status'  placeholder="Operating Status" />
<input type="text" name="Legal_Name" class='Legal_Name'  placeholder="Legal Name" />
<input type="text" name="DBA_Name" class='DBA_Name'  placeholder="DBA Name" />
<input type="date" name="Out_of_Service_Date" class='Out_of_Service_Date'  placeholder="Out of Service Date" />
<input type="text" name="State_Carrier_ID_Number" class='State_Carrier_ID_Number'  placeholder="State Carrier ID Number" />
<input type="text" name="DUNS_Number" class='DUNS_Number'  placeholder="DUNS Number" />
<input type="text" name="Power_Units" class='Power_Units'   placeholder="Power Units" />
<input type="text" name="Drivers" class='Drivers'  placeholder="Drivers" />
<input type="text" name="MCS-150_Form_Date" class='MCS_150_Form_Date'  placeholder="MCS-150 Form Date" />
<input type="text" name="Operation_Classification" class='Operation_Classification'  placeholder="Operation Classification" />
<input type="text" name="Carrier_Operation" class='Carrier_Operation'  placeholder="Carrier Operation" />
<input type="text" name="Cargo_Carried" class='Cargo_Carried'  placeholder="Cargo Carried" />

<input type="button" name="previous" class="previous_Insurance action-button" value="Previous" />
<input type="submit" name="submit" class="submit action-button" value="Submit" />
</fieldset>
</form>

<!-- jQuery --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- jQuery easing plugin --> 
<script src="js/jquery.easing.min.js" type="text/javascript"></script> 
<script src="script.js" type="text/javascript"></script> 


</body>
</html>
