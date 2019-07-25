<html>
<head>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="css/style2.css" rel="stylesheet" type="text/css">
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"-->

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
<li class='generalLI'>General</li>
<li class='vehiclesLI'>Vehicles</li>
<li class='driversLI'>Drivers</li>
<li class='violationsLI'>Violations</li>
<li class='underwritingLI'>Underwriting</li>
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
 <div class="radio">
 <input type="radio" name="selectType" placeholder="DOT" value='1' class='checkType' checked='checked'/> 
<label for="y">DOT</label>
 </div>
 <div class="radio">
 <input type="radio" name="selectType" placeholder="MC" value='2' class='checkType'/>
<label for="z">MC</label>
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
<div class='main_form'>
<div class='left'>
<input type="text" name="Entity_Type" class='Entity_Type' placeholder="Entity Type" />
<input type="text" name="Operating_Status" class='Operating_Status'  placeholder="Operating Status" />
<input type="text" name="Legal_Name" class='Legal_Name'  placeholder="Legal Name" />
<input type="text" name="DBA_Name" class='DBA_Name'  placeholder="DBA Name" />
<input type="date" name="Out_of_Service_Date" class='Out_of_Service_Date'  placeholder="Out of Service Date" />
<input type="text" name="State_Carrier_ID_Number" class='State_Carrier_ID_Number'  placeholder="State Carrier ID Number" />
<input type="text" name="DUNS_Number" class='DUNS_Number'  placeholder="DUNS Number" />
</div>
<div class='right'>

<input type="text" name="Power_Units" class='Power_Units'   placeholder="Power Units" />
<input type="text" name="Drivers" class='Drivers'  placeholder="Drivers" />
<input type="text" name="MCS-150_Form_Date" class='MCS_150_Form_Date'  placeholder="MCS-150 Form Date" />
<input type="text" name="Operation_Classification" class='Operation_Classification'  placeholder="Operation Classification" />
<input type="text" name="Carrier_Operation" class='Carrier_Operation'  placeholder="Carrier Operation" />
<input type="text" name="Cargo_Carried" class='Cargo_Carried'  placeholder="Cargo Carried" />
</div>

</div>
<div class='previous_next_buttons'>
<input type="button" name="previous" class="previous_Insurance action-button" value="Previous" />
<input type="button" name="next" class="action-button safer_data_next" value="Next" />

</div>

</fieldset>
<fieldset class='sixth'>
	<div class='main_form'>
		<div class='left'>
			<h2 class="fs-title">Policy</h2>
			<h3 class="fs-subtitle"></h3>
				<div class="form-row">
					<div class="form-holder w-100">
					 <label>Agent Code:</label>				
					 <select><option selected="selected" value="77743">77743 (GIVESURANCE INS SVCS)</option>
				 </select>
					</div>

				</div>
				<div class="form-row">
					<div class="form-holder w-100">
				   <label>Policy Effective Date:</label><input type="text" class="form-control" value="<?php echo date('y-m-d');?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Is the customer currently insured with Progressive Commercial Auto?</label>
					 <div class='radio'>
						<input type="radio" name="q">
						<label>Yes</label>
						</div>
						 <div class='radio'>
						<input type="radio" name="q" checked>
						<label>No</label>
						</div>
					</div>	
				</div>	
				<h2 class="fs-title">Business Type</h2>		
				<div class="form-row">
					<div class="form-holder w-100">	
					<label>Business Type</label>
					<input type="text" class="form-control" placeholder="Business Type:">
					
					<div id="changeBsns">
							<a href="#" onclick="resetBsnsType(this)" tabindex="0">Change Business Type</a>
						</div>
					</div>	
				</div>		
				<div class="form-row">
					<div class="form-holder w-100">			
						<label>Does the insured ever transport passengers for hire?</label>
						 <div class='radio'>
						
						 <input type="radio" name="w">
						  <label>Yes</label>
						 </div>
						  <div class='radio'>
						   
						<input type="radio" name="w" >
						<label>NO</label>
						</div>
					</div>	
				</div>		
						
				<h2 class="fs-title">Business Organization Structure</h2>
				<div class="form-row">
					<div class="form-holder w-100">	
					  <label>Structure:</label>
						<div class='radio'>
						
						 <input type="radio" name="Structure">
						 <label>Individual/Sole Proprietor</label>
						 </div>
						 <div class='radio'>
						 
						<input type="radio" name="Structure" >
						<label>Partnership</label>
						</div>
						 <div class='radio'>
						 
						<input type="radio" name="Structure" >
						<label>Corporation or LLC</label>
						</div>
					</div>	
				</div>			
				<div class="form-row">		
				   <div class="form-holder w-100">
					<label>Do you have a DBA?</label>
					<div class='radio'>
					
					<input type="radio" name="DBA">
					<label>Yes</label>
					</div>
					<div class='radio'>
					
						<input type="radio" name="DBA" >
						<label>NO</label>
					</div>
					</div>
				</div>
				 <h2 class="fs-title">US Department of Transportation (USDOT) Registration</h2>
				<div class="form-row">	
					<div class="form-holder w-100">
					
					<label>USDOT# associated with the insured's business  :  </label>
					<input type="text" class="form-control" name="firstname" value="3298365" readonly/>  
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
						<label>USDOT Assigned to: </label>
						<input type="text" class="form-control" name="firstname" value="HAUL OF DUTY INC 120 E STREET RD APT G1-1 WARMINSTER, PA 18974" readonly/>  
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Does the information assigned to this USDOT# match the insured's business?</label>	
					<div class='radio'>
					
					<input type="radio" name="Does" checked>
					<label>Yes</label>	
					</div>
					<div class='radio'>
					
					<input type="radio" name="Does" >
					<label>NO</label>	
					</div>
					</div>
				</div>
				<h2 class="fs-title">Named Insured(s)</h2>
				<div class="form-row">
					<div class="form-holder w-100">
						<label>First Name:</label>
							<input type="text" class="form-control" name="firstname" placeholder="First Name..">
						<label>Middle Initial:</label>
							<input type="text" class="form-control" name="middleinitial" placeholder="Middle Initial:..">
						<label>Last Name:</label>
							<input type="text" class="form-control" name="lastname" placeholder="Last Name:.">
						</div>	
				</div>	
				<div class="form-row">
					<div class="form-holder w-100 ">
						<label>Suffix:</label>
						<select class="form-control">
						  <option value="none">--None--</option>
						  <option value="jr">jr</option>
						  <option value="Sr">Sr</option>
						  <option value="|">|</option>
						  <option value="||">||</option>
						  <option value="|||">|||</option>
						  <option value="|V">|V</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100 ">
					<label>Date of Birth:</label>
					<input type="date" class="form-control" name="dob">
					<label>Designate Spouse as a Named Insured?</label>
					<div class='radio'>
						<input type="radio" name="Spouse" class="checkType"><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Spouse" class="checkType"><label>No</label>
					</div>
					</div>
				</div>
			</div>
			<div class='right'>
				 <h2 class='fs-title'>Contact Information</h2>
				 <h3 class='fs-subtitle' ></h3>
				 <div class="form-row">
					<div class="form-holder w-100">
					<label>Insured's Phone:</label>
						<input type="text" class="form-control" name="mobile">
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">				
						<label>E-mail Address:</label>
						<input type="email" class="form-control" name="email">
					</div>
				</div>	
				<div class="form-row">
					<div class="form-holder w-100">		
					<label>Mailing Address:</label>
						<input type="text" class="form-control" name="emailaddress" placeholder=" 1331 BRIARWOOD BLVD " >
						</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">					
					<label>City:</label>
						<input type="text" class="form-control" name="city" placeholder="GOSHEN" >
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">	
					<label>State:</label>
					<select class="form-control">
  				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option selected="selected" value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="PR">Puerto Rico</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VI">Virgin Islands</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="DC">Washington DC</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
				</select>
				</div>
			</div>
			<div class="form-row">
					<div class="form-holder w-100">	
			<label>ZIP Code:</label>
			<input type="text" class="form-control" name="zipcode" placeholder="46526-0000" >	
				  <div class="form-holder w-100">
				 <h3 style="margin-bottom: 16px; margin-top:16px;">Financial Responsibility</h3>			
				 <h4 style="margin-bottom: 16px; margin-top:16px;">Company Owner Information</h4>			
				<label>First Name:<label><input type="text" class="form-control" name="firstname" placeholder="First Name..">
				<label>Middle Initial:<label><input type="text" class="form-control" name="middleinitial" placeholder="Middle Initial:..">
				<label>Last Name:<label><input type="text" class="form-control" name="lastname" placeholder="Last Name:.">
				<div class="form-holder w-100 ">
				<label>Suffix:<label>
				<select class="form-control">
				<option value="none">--None--</option>
				<option value="jr">jr</option>
				<option value="Sr">Sr</option>
				<option value="|">|</option>
				<option value="||">||</option>
				<option value="|||">|||</option>
				<option value="|V">|V</option>
				</select>
				</div>
				<label>Date of Birth:<label>
				<input type="date" class="form-control" name="dob">
				<label>Home Address:<label><input type="text" class="form-control" name="homeddress">
						
						<label>City:<label>
			<input type="text" class="form-control" name="coumpanycity" >
			<label>State:<label>
       <select class="form-control">
  				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="PR">Puerto Rico</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VI">Virgin Islands</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="DC">Washington DC</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
				</select>
			<label>ZIP Code:<label>
			<input type="text" class="form-control" name="zipcode"  >
			<label>Social Security Number:<label>
			</div>
						
						</div>
					
						
</div>
</div>
</div>

<div class='previous_next_buttons'>
<input type="button" name="previous" class="previous_general  action-button" value="Previous" />
<input type="button" name="next" class="action-button general_data_next" value="Next" />
</div>
</fieldset>
<fieldset class='seventh'>
<h2 class="fs-title">Policy</h2>
<h3 class="fs-subtitle"></h3>
<select><option selected="selected" value="77743">77743 (GIVESURANCE INS SVCS)</option>
  </select>
 <input type="date" class="form-control" value="<?php echo date('d/m/y');?>">
 <label>Is the customer currently insured with Progressive Commercial Auto?</label>
                            <input type="radio" name="q">Yes
							<input type="radio" name="q" checked>No
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
<input type="button" name="previous" class="previous_vehicles action-button" value="Previous" />
<input type="button" name="next" class="action-button vehicles_data_next" value="Next" />
</fieldset>
<fieldset class='eigth'>
<h2 class="fs-title">Policy</h2>
<h3 class="fs-subtitle"></h3>
<select><option selected="selected" value="77743">77743 (GIVESURANCE INS SVCS)</option>
  </select>
 <input type="date" class="form-control" value="<?php echo date('d/m/y');?>">
 <label>Is the customer currently insured with Progressive Commercial Auto?</label>
                            <input type="radio" name="q">Yes
							<input type="radio" name="q" checked>No
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
<input type="button" name="previous" class="previous_drivers action-button" value="Previous" />
<input type="button" name="next" class="action-button drivers_data_next" value="Next" />
</fieldset>
<fieldset class='ninth'>
<h2 class="fs-title">Policy</h2>
<h3 class="fs-subtitle"></h3>
<select><option selected="selected" value="77743">77743 (GIVESURANCE INS SVCS)</option>
  </select>
 <input type="date" class="form-control" value="<?php echo date('d/m/y');?>">
 <label>Is the customer currently insured with Progressive Commercial Auto?</label>
                            <input type="radio" name="q">Yes
							<input type="radio" name="q" checked>No
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
<input type="button" name="previous" class="previous_violations action-button" value="Previous" />
<input type="button" name="next" class="action-button violations_data_next" value="Next" />
</fieldset>
<fieldset class='tenth'>
<h2 class="fs-title">Policy</h2>
<h3 class="fs-subtitle"></h3>
<select><option selected="selected" value="77743">77743 (GIVESURANCE INS SVCS)</option>
  </select>
 <input type="date" class="form-control" value="<?php echo date('d/m/y');?>">
 <label>Is the customer currently insured with Progressive Commercial Auto?</label>
                            <input type="radio" name="q">Yes
							<input type="radio" name="q" checked>No
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
<input type="button" name="previous" class="previous_Underwriting action-button" value="Previous" />
<input type="button" name="submit" class="action-button submit" value="Submit" />
</fieldset>

</form>

<!-- jQuery --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- jQuery easing plugin --> 
<script src="js/jquery.easing.min.js" type="text/javascript"></script> 
<script src="js/script.js" type="text/javascript"></script> 


</body>
</html>
