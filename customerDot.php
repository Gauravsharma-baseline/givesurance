 <?php
include('functions.php');
$handleFunctionsObject = new handleFunctions;
?>
<html>
<head>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="css/style2.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<title>Customer with DOt</title>
</head>
<body>

<h1 style="margin-top:20px" align="center">Customer with DOT</h1>
<!-- multistep form -->
<form id="msform">
<!-- progressbar -->
<ul id="progressbar">
<li class="phoneli active">Phone Number </li>
<li class='dotLi'>DOT</li>
<li class='MCLi'>MC</li>
<li  class='physicalLi'>Verify Phyical Address</li>
<li class='mailingLi'>Verify Mailing Address</li>
<li class='insuranceLi'>Verify Insurance Data</li>
<li class='generalLI'>General</li>
<li class='vehiclesLI'>Vehicles</li>
<li class='driversLI'>Drivers</li>
<li class='violationsLI'>Violations</li>
<li class='underwritingLI'>Underwriting</li>
<li class='pdfLI'>Additional PDF</li>
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
		<h2 class="fs-title">Enter DOT</h2>
		<h3 class="fs-subtitle"></h3>
		<input type="text" name="searchedNumber" placeholder="Enter DOT Number" class="searchedNumber" />
		<input type="hidden" name="dot" placeholder="Enter DOT Number" class="dot" />
		<input type="button" name="previous" class="previous_doT action-button" value="Previous" />
		<input type="button" name="next" class="action-button dot_number_next" value="Next" />
	</fieldset>
	<fieldset class='first_2'>
		<h2 class="fs-title">Enter MC</h2>
		<h3 class="fs-subtitle"></h3>
		<input type="text" name="searchedNumber" placeholder="Enter MC Number" class="mc" />
		<input type="button" name="previous" class="previous_first_2 action-button" value="Previous" />
		<input type="button" name="next" class="action-button first_2_next" value="Next" />
	</fieldset>
	<fieldset class='third'>
<h2 class="fs-title">Is this your Physcial Address</h2>
<h3 class="fs-subtitle"></h3>
<div class='main_form'>
	<div class='row'>
	<div class='col-md-6'>
		<div class="form-row">
			<div class="form-holder w-100">
				<label>Addresss:</label>
				<input type="text" name="physical_addresss" class='physical_address' placeholder="addresss" />
			</div>
		</div>
		<div class="form-row">
			<div class="form-holder w-100">
				<label>Street Address:</label>
		<input type="text" name="physical_street" class='physical_street' placeholder="Street Address" />
		</div>
		</div>
		<div class="form-row">
			<div class="form-holder w-100">
				<label>Address Line 2:</label>
				<input type="text" name="physical_street1" class='physical_street1'  placeholder="Address Line 2" />
				</div>
		</div>
	</div>
	<div class='col-md-6'>
		<div class="form-row">
			<div class="form-holder w-100">
				<label>City:</label>
			<input type="text" name="physical_city" class='physical_city' placeholder="City" />
			</div>
		</div>
		<div class="form-row">
			<div class="form-holder w-100">
				<label>State/Region/Province:</label>
				<input type="text" name="physical_state" class='physical_state' placeholder="State/Region/Province" />
			</div>
		</div>
		<div class="form-row">
			<div class="form-holder w-100">
				<label>State/Region/Province:</label>
				<input type="text" name="physical_Postal" class='physical_Postal' placeholder="Postal / Zip Code" />
				</div>
		</div>
		</div>
	</div>
	</div>
		<div class='previous_next_buttons'>
			<input type="button" name="previous" class="previous_physical action-button" value="Previous" />
			<input type="button" name="next" class="action-button physical_address_next" value="Next" />
		</div>
</fieldset>
<fieldset class='fourth'>
<h2 class="fs-title">Is this your Mailing Address</h2>
<h3 class="fs-subtitle"></h3>
<div class='main_form'>
<div class='row'>
	<div class='col-md-6'>
	<div class="form-row">
		<div class="form-holder w-100">
			<label>Addresss</label>
			<input type="text" name="mailing_addresss" class='mailing_address' placeholder="addresss" />
		</div>
		</div>
	<div class="form-row">
		<div class="form-holder w-100">
			<label>Street Address:</label>
		<input type="text" name="mailing_street" class='mailing_street' placeholder="Street Address" />
		</div>
	</div>
	<div class="form-row">
		<div class="form-holder w-100">
			<label>Address Line 2:</label>
		<input type="text" name="mailing_street1" class='mailing_street1'  placeholder="Address Line 2" />
		</div>
	</div>
	</div>
	<div class='col-md-6'>
	<div class="form-row">
		<div class="form-holder w-100">
			<label>City:</label>
		<input type="text" name="mailing_city" class='mailing_city' placeholder="City" />
		</div>
	</div>
	<div class="form-row">
		<div class="form-holder w-100">
			<label>State/Region/Province</label>
			<input type="text" name="mailing_state" class='mailing_state' placeholder="State/Region/Province" />
		</div>
	</div>
	<div class="form-row">
		<div class="form-holder w-100">
			<label>Postal / Zip Code:</label>
		<input type="text" name="mailing_Postal" class='mailing_Postal' placeholder="Postal / Zip Code" />
		</div>
	</div>
	</div>
	</div>
</div>
<div class='previous_next_buttons'>
<input type="button" name="previous" class="previous_mailing action-button" value="Previous" />
<input type="button" name="next" class="action-button mailing_address_next" value="Next" />
</div>
</fieldset>
<fieldset class='fifth'>
<h2 class="fs-title">Additional Insurance Data</h2>
<h3 class="fs-subtitle"></h3>
<div class='main_form'>
<div class='row'>
<div class='col-md-6 left'>
 <div class="form-row">
	<div class="form-holder w-100">
		<label>Entity Type:</label>
	<input type="text" name="Entity_Type" class='Entity_Type' placeholder="Entity Type" />
	</div>
</div>
 <div class="form-row">
	<div class="form-holder w-100">
	<label>Operating Status</label>
<input type="text" name="Operating_Status" class='Operating_Status'  placeholder="Operating Status" />
</div>
</div>
 <div class="form-row">
	<div class="form-holder w-100">
	<label>Legal Name</label>
<input type="text" name="Legal_Name" class='Legal_Name'  placeholder="Legal Name" />
</div>
</div>
 <div class="form-row">
	<div class="form-holder w-100">
	<label>DBA Name</label>
<input type="text" name="DBA_Name" class='DBA_Name'  placeholder="DBA Name" />
</div>
</div>
 <div class="form-row">
	<div class="form-holder w-100">
	<label>Out of Service Date</label>
<input type="date" name="Out_of_Service_Date" class='Out_of_Service_Date'  placeholder="Out of Service Date" />
</div>
</div>
 <div class="form-row">
	<div class="form-holder w-100">
	<label>State Carrier ID Number</label>
<input type="text" name="State_Carrier_ID_Number" class='State_Carrier_ID_Number'  placeholder="State Carrier ID Number" />
</div>
</div>
 <div class="form-row">
	<div class="form-holder w-100">
	<label>DUNS Number</label>
<input type="text" name="DUNS_Number" class='DUNS_Number'  placeholder="DUNS Number" />
</div>
</div>

</div>
<div class='col-md-6 right'>
<div class="form-row">
	<div class="form-holder w-100">
	<label>Power Units</label>
<input type="text" name="Power_Units" class='Power_Units'   placeholder="Power Units" />
</div>
</div>
<div class="form-row">
	<div class="form-holder w-100">
	<label>Drivers</label>
<input type="text" name="Drivers" class='Drivers'  placeholder="Drivers" />
</div>
</div>
<div class="form-row">
	<div class="form-holder w-100">
	<label>MCS-150 Form Date</label>
<input type="text" name="MCS-150_Form_Date" class='MCS_150_Form_Date'  placeholder="MCS-150 Form Date" />
</div>
</div>
<div class="form-row">
	<div class="form-holder w-100">
	<label>Operation Classification</label>
<input type="text" name="Operation_Classification" class='Operation_Classification'  placeholder="Operation Classification" />
</div>
</div>
<div class="form-row">
	<div class="form-holder w-100">
	<label>Carrier Operation</label>
<input type="text" name="Carrier_Operation" class='Carrier_Operation'  placeholder="Carrier Operation" />
</div>
</div>
<div class="form-row">
	<div class="form-holder w-100">
	<label>Cargo Carried</label>
<input type="text" name="Cargo_Carried" class='Cargo_Carried'  placeholder="Cargo Carried" />
</div>
</div>
</div>
</div>

</div>
<div class='previous_next_buttons'>
<input type="button" name="previous" class="previous_Insurance action-button" value="Previous" />
<input type="button" name="next" class="action-button safer_data_next" value="Next" />

</div>

</fieldset>
<fieldset class='sixth'>
	<div class='row main_form'>
		<div class='col-md-6 left'>
			<div class='main_field_div'>
			<h2 class="fs-title">Policy</h2>
			<h3 class="fs-subtitle"></h3>
				<div class="form-row">
					<div class="form-holder w-100">
					 <label>Agent Code:</label>				
					 <select id='agent_code' name='agent_code'><option selected="selected" value="77743 (GIVESURANCE INS SVCS)">77743 (GIVESURANCE INS SVCS)</option>
					</select>
					</div>

				</div>
				<div class="form-row">
					<div class="form-holder w-100">
				   <label>Policy Effective Date:</label>
					<input type="text" class="form-control datepicker" value="<?php echo date('Y-m-d');?>" id='Policy_Effective' name='Policy_Effective'>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Is the customer currently insured with Progressive Commercial Auto?</label>
					 <div class='radio'>
						<input type="radio" name="customer_Progressive_Commercial" class='customer_Progressive_Commercial'  value='Yes'>
						<label>Yes</label>
						</div>
						 <div class='radio'>
						<input type="radio" name="customer_Progressive_Commercial" checked class='customer_Progressive_Commercial'  value='No'>
						<label>No</label>
						</div>
					</div>	
				</div>	
			</div>
			<div class='main_field_div'>
				<h2 class="fs-title">Business Type</h2>		
				<div class="form-row">
					<div class="form-holder w-100">	
					<label>Business Type</label>
					<?php
					$response=$handleFunctionsObject->businessCategories();
					?>
					<select class="form-control" id='Business_type' name='Business_type'>
						<?php foreach($response as $business){
					if($business['category']!=''){
					?>
						  <option value="<?php $business['category'];?>"><?php echo $business['category'];?></option>
						 <?php 
					} else{
						echo '<option value="other">other</option>';
					}
					} 
					?>
						</select>
					
					</div>	
				</div>		
				<div class="form-row">
					<div class="form-holder w-100">			
						<label>Does the insured ever transport passengers for hire?</label>
						 <div class='radio'>
						
						 <input type="radio" name="Is_insured_transport_passengers" class='Is_insured_transport_passengers' value='Yes'>
						  <label>Yes</label>
						 </div>
						  <div class='radio'>
						   
						<input type="radio" name="Is_insured_transport_passengers" class='Is_insured_transport_passengers' value='No'>
						<label>No</label>
						</div>
					</div>	
				</div>		
			</div>
			<div class='main_field_div'>	
						
				<h2 class="fs-title">Business Organization Structure</h2>
				<div class="form-row">
					<div class="form-holder w-100">	
					  <label>Structure:</label>
						<div class='radio'>
						
						 <input type="radio" name="Business_Organization_Structure" class='Business_Organization_Structure' value='Individual/Sole Proprietor' checked>
						 <label>Individual/Sole Proprietor</label>
						 </div>
						 <div class='radio'>
						 
						<input type="radio" name="Business_Organization_Structure" class='Business_Organization_Structure' value='Partnership'>
						<label>Partnership</label>
						</div>
						 <div class='radio'>
						 
						<input type="radio" name="Business_Organization_Structure" class='Business_Organization_Structure' value='Corporation or LLC'>
						<label>Corporation or LLC</label>
						</div>
					</div>	
				</div>			
				<div class="form-row" id='is_DBA'>		
				   <div class="form-holder w-100">
					<label>Do you have a DBA?</label>
					<div class='radio'>
					
					<input type="radio" name="have_DBA" class='have_DBA'  value='Yes' checked>
					<label>Yes</label>
					</div>
					<div class='radio'>
					
						<input type="radio" name="have_DBA" class='have_DBA' value='No'>
						<label>No</label>
					</div>
					</div>
				</div>
				<div class="form-row" id='DBA_NAME_DIV'>	
					<div class="form-holder w-100">
					<label>DBA</label>
					<input type="text" class="form-control dot"  name='DBA_NAME' >  
					</div>
				</div>



			</div>
			<div class='main_field_div' id='US_Department_of_Transportation'>	
				 <h2 class="fs-title">US Department of Transportation (USDOT) Registration</h2>
				<div class="form-row">	
					<div class="form-holder w-100">
					
					<label>USDOT# associated with the insured's business  :  </label>
					<input type="text" class="form-control dot"  name='USDOT_associated' value="3298365" readonly/>  
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
						<label>USDOT Assigned to: </label>
						<input type="text" class="form-control mailing_address" id='USDOT_Assigned_to' value="HAUL OF DUTY INC 120 E STREET RD APT G1-1 WARMINSTER, PA 18974" readonly/ name='USDOT_Assigned_to'>  
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Does the information assigned to this USDOT# match the insured's business?</label>	
					<div class='radio'>
					
					<input type="radio" name="is_match_USDOT" checked class='is_match_USDOT'  value='Yes'>
					<label>Yes</label>	
					</div>
					<div class='radio'>
					
					<input type="radio" name="is_match_USDOT" class='is_match_USDOT'  value='No'>
					<label>No</label>	
					</div>
					</div>
				</div>
			</div>
			<div class='main_field_div'>
				<h2 class="fs-title">Named Insured(s)</h2>
				<div class="form-row">
					<div class="form-holder w-100">
						<label>First Name:</label>
							<input type="text" class="form-control" name="Insured_first_name" placeholder="First Name.." id='Insured_first_name'>
						<label>Middle Initial:</label>
							<input type="text" class="form-control" name="Insured_Middle_name" placeholder="Middle Initial:.." id='Insured_Middle_name'>
						<label>Last Name:</label>
							<input type="text" class="form-control" name="Insured_Last_name" placeholder="Last Name:." id='Insured_Last_name'>
						</div>	
				</div>	
				<div class="form-row">
					<div class="form-holder w-100 ">
						<label>Suffix:</label>
						<select class="form-control" id='Insured_Suffix' name='Insured_Suffix'>
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
					<input type="text" class="form-control datepicker" name="Insured_DOB" id='Insured_DOB' value='<?php echo date('Y-m-d');?>'>
					<label>Designate Spouse as a Named Insured?</label>
					<div class='radio'>
						<input type="radio" name="Insured_Designate_Spouse" class='Insured_Designate_Spouse' value='Yes'><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Insured_Designate_Spouse" class='Insured_Designate_Spouse' value='No'><label>No</label>
					</div>
					</div>
				</div>
			</div>
			</div>
			<div class='col-md-6 right'>
				<div class='main_field_div' id='Spouse_Information_div'>
				<h2 class="fs-title">Spouse Information</h2>
				<div class="form-row">
					<div class="form-holder w-100">
						<label>First Name:</label>
							<input type="text" class="form-control" name="Spouse_first_name" placeholder="First Name.." id='Spouse_first_name'>
						<label>Middle Initial:</label>
							<input type="text" class="form-control" name="Spouse_Middle_name" placeholder="Middle Initial:.." id='Spouse_Middle_name'>
						<label>Last Name:</label>
							<input type="text" class="form-control" name="Spouse_Last_name" placeholder="Last Name:." id='Spouse_Last_name'>
						</div>	
				</div>	
				<div class="form-row">
					<div class="form-holder w-100 ">
						<label>Suffix:</label>
						<select class="form-control" id='Spouse_Suffix' name='Spouse_Suffix'>
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
					<input type="text" class="form-control datepicker" name="Spouse_DOB" id='Spouse_DOB' <?php echo date('Y-m-d');?>>
					
					</div>
				</div>
			</div>
				<div class='main_field_div'>
				 <h2 class='fs-title'>Contact Information</h2>
				 <h3 class='fs-subtitle' ></h3>
				 <div class="form-row">
					<div class="form-holder w-100">
					<label>Insured's Phone:</label>
						<input type="text" class="form-control" name="Contact_Insured_phone" id='Contact_Insured_phone'>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">				
						<label>E-mail Address:</label>
						<input type="email" class="form-control" name="Contact_Insured_email" id='Contact_Insured_email'>
					</div>
				</div>	
				<div class="form-row">
					<div class="form-holder w-100">		
					<label>Mailing Address:</label>
						<input type="text" class="form-control" name="Contact_Insured_Mailing" placeholder="" id='Contact_Insured_Mailing'>
						</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">					
					<label>City:</label>
						<input type="text" class="form-control" name="Contact_Insured_City" placeholder=""  id='Contact_Insured_City' >
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">	
					<label>State:</label>
					<select class="form-control"  id='Contact_Insured_State' name='Contact_Insured_State'>
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
			<input type="text" class="form-control" name="Contact_Insured_ZIP_code" placeholder="46526-0000"  id='Contact_Insured_ZIP_code'>
				</div>
			</div>
			</div>
			<div class='main_field_div'>
			<h2 class='fs-title'>Financial Responsibility</h2>			
				<h3 class="fs-subtitle">President/CEO</h3>	
			<div class="form-row">
				  <div class="form-holder w-100">
				 		
				<label>First Name:</label>
				<input type="text" class="form-control" name="Financial_First_name" placeholder="First Name.." id='Financial_First_name'>
			</div>
			</div>	
			<div class="form-row">
				  <div class="form-holder w-100">
				<label>Middle Initial:</label>
				<input type="text" class="form-control" name="Financial_Middle_name" placeholder="Middle Initial:.."id='Financial_Middle_name'>
			</div>
			</div>		
			<div class="form-row">
				  <div class="form-holder w-100">	
				<label>Last Name:</label><input type="text" class="form-control" name="Financial_Last_name" placeholder="Last Name:."id='Financial_Last_name'>
			</div>
			</div>	
			<div class="form-row">	
				<div class="form-holder w-100 ">
				<label>Suffix:</label>
					<select class="form-control" id='Financial_Suffix' name='Financial_Suffix'>
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

			<div class="form-row" id='is_Involved_daily_operation'>	
				<div class="form-holder w-100 ">
				<label>Involved in the daily operation of the business?</label>
					<div class='radio'>
						<input type="radio" name="is_Involved_daily_operation" class='is_Involved_daily_operation' value='Yes' checked>
						<label>Yes</label>
					</div>
					<div class='radio'>
						<input type="radio" name="is_Involved_daily_operation" class='is_Involved_daily_operation' value='No'><label>No</label>
					</div>
				
				</div>
			</div>

			<div class="form-row">	
				<div class="form-holder w-100 ">
				<label>Date of Birth:</label>
				<input type="text" class="form-control datepicker" name="Financial_dob" value="<?php echo date("Y-m-d");?>" id='Financial_dob'>
				</div>
			</div>	
			<div class="form-row">	
				<div class="form-holder w-100 ">
					<label>Home Address:</label><input type="text" class="form-control" name="Financial_Home_address" id='Financial_Home_address'>
				</div>
			</div>				
			<div class="form-row">	
				<div class="form-holder w-100 ">		
				<label>City:</label>
					<input type="text" class="form-control" name="Financial_City" id='Financial_City'>
					</div>
			</div>	
			<div class="form-row">	
				<div class="form-holder w-100 ">	
				<label>State:</label>
					<select class="form-control" id='Financial_State' name='Financial_State'>
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
				</div>
			</div>
			<div class="form-row">	
				<div class="form-holder w-100 ">
			<label>ZIP Code:</label>
			<input type="text" class="form-control" name="Financial_zipcode" id='Financial_zipcode' >
				</div>
			</div>
			<div class="form-row">	
				<div class="form-holder w-100 ">
					<label>Social Security Number:</label>
					<input type="text" class="form-control" name="social_security_number"  id='Financial_social_security_number' >
				</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="confirmation_div">	
				<div class="form-holder w-100 ">
					<label>Is it OK if I continue?:</label>
					<div class='radio'>
						<input type="radio" name="OK_if_I_continue" class='OK_if_I_continue' value='Yes (most accurate quote)'checked><label>Yes(most accurate quote)</label>
					</div>
					<div class='radio'>
						<input type="radio" name="OK_if_I_continue" class='OK_if_I_continue' value='Yes, but do not order credit (approximate quote)'><label>Yes, but do not order credit (approximate quote)</label>
					</div>
					<div class='radio'>
						<input type="radio" name="OK_if_I_continue" class='OK_if_I_continue' value='No, do not continue'><label>No, do not continue</label>
					</div>
				</div>
		</div>
		<div class='previous_next_buttons'>
			<input type="button" name="previous" class="previous_general  action-button" value="Previous" />
			<input type="button" name="next" class="action-button general_data_next" value="Next" />
		</div>
	</fieldset>
	<fieldset class='seventh'>
		<h2 class="fs-title">Vehicles</h2>
		<h3 class="fs-subtitle"></h3>
		<div class='main_form'>
		<table class="table" id="dtVehiclesTable">
			<thead>
			<tr>
				  <td class="td-padding">Vehicle</td>
				  <td class="td-padding"><button id='add_vehicles' type='button' data-toggle="modal" data-target="#vehiles_add_modal">Add</button></td>
				  <td class="text-center td-padding">Year Make Model</td>
				  <td class="text-right">VIN</td>
				  <td class="text-right">Category</td>
				  <td class="text-right">Radius</td>
				  <td class="text-right">Value</td>
				  <td class="text-right">Loss Payee</td>
				  <td class="text-right"></td>
				</tr>
			</thead>
			  <tbody>
				
				
			  </tbody>
		</table>
		
		</div>

		<div class='previous_next_buttons'>
			<input type="button" name="previous" class="previous_vehicles action-button" value="Previous" />
			<input type="button" name="next" class="action-button vehicles_data_next" value="Next" />
		</div>
	</fieldset>
<fieldset class='eigth'>
<h2 class="fs-title">Drivers</h2>
		<h3 class="fs-subtitle"></h3>
		<div class='main_form'>
		<table class="table" id="dtDriverTable">
			<thead>
			<tr>
				  <td class="td-padding">Drivers</td>
				  <td class="td-padding"><button id='add_drivers' type='button' data-toggle="modal" data-target="#Driver_add_modal">Add</button></td>
				  <td class="text-center td-padding">Name</td>
				  <td class="text-right">Age</td>
				  <td class="text-right">Date Of Birth</td>
				  <td class="text-right">License Number</td>
				  <td class="text-right">License State</td>
				  <td class="text-right">SR22</td>
				  <td class="text-right">Points</td>
				  <td class="text-right"></td>
				</tr>
			</thead>
			  <tbody>
			  </tbody>
		</table>
		
		</div>

		<div class='previous_next_buttons'>
	<input type="button" name="previous" class="previous_drivers action-button" value="Previous" />
	<input type="button" name="next" class="action-button drivers_data_next" value="Next" />
</div>
</fieldset>
<fieldset class='ninth'>
<h2 class="fs-title">Voilations</h2>
<div class='infoDiv'>Enter all accidents (both at fault and not at fault) and violations for the last 35 months. If date of accident or violation is unknown, please leave the date blank, our systems will reconcile.</div>
<h3 class="fs-subtitle">Driver 1: ERRON WILLIAMSON</h3>
	<div class='main_form'>
	
	<div class='row'>
	<table class="table" >
			<thead>
			<tr>
				  <td class="td-padding">Accident/Violation:</td>
				  <td class="text-center td-padding">Date</td>
				  <td class="td-padding"><button id='voilation_add'>Add</button></td>
				</tr>
			</thead>
			 <tbody>
				<tr>
				  <td class="td-padding"><select>
					<option selected="selected" value=""></option>
					<option value="AAF">AAF - At Fault Accident</option>
					<option value="BOT">BOT - Open Bottle/Container</option>
					<option value="CRD">CRD - Careless/Improper Op of Vehicle</option>
					<option value="DEQ">DEQ - Defective Equipment</option>
					<option value="DEV">DEV - Disregard Traffic Device/Sign</option>
					<option value="DR">DR  - Drag Racing</option>
					<option value="DWI">DWI - Driving Under the Influence</option>
					<option value="EQP">EQP - Equipment Violations</option>
					<option value="FAR">FAR - False Report to Official/Perjury</option>
					<option value="FEL">FEL - Auto Theft / Felony</option>
					<option value="FLE">FLE - Flee/Elude Police</option>
					<option value="FRA">FRA - Failure to Report Accident</option>
					<option value="FTC">FTC - Following Too Close</option>
					<option value="FTY">FTY - Failure to Yield</option>
					<option value="HOM">HOM - Homicide/Assault w/ Vehicle</option>
					<option value="IBK">IBK - Improper Backing</option>
					<option value="IP">IP  - Improper Passing</option>
					<option value="IT">IT  - Improper Turn/U-Turn</option>
					<option value="LIC">LIC - License/Credentials Violation</option>
					<option value="LTS">LTS - Leaving the Scene</option>
					<option value="MMV">MMV - Other Minor Moving Violations</option>
					<option value="NAF">NAF - Not At Fault Accident</option>
					<option value="REF">REF - Refusal to Test</option>
					<option value="RKD">RKD - Reckless Driving</option>
					<option value="SAF">SAF - Safety Violation</option>
					<option value="SCH">SCH - Passing School Bus</option>
					<option value="SPD">SPD - Speeding</option>
					<option value="SUS">SUS - Driving w/ Susp/Rev/Canc License</option>
					<option value="WOC">WOC - Operate w/o Owner's Consent</option>
					<option value="WSR">WSR - Wrong Side of Road</option>
				 </select>
				</td>
				 <td class="text-center td-padding"> <input type='text' value='<?php echo date('Y-m-d');?>' placeholder='' class='datepicker'>				
					</td>
				  <td class="td-padding"><button id='delete_voilation'>Delete</button></td>
				</tbody> 
				</table> 
	
		</div>
	</div>
	
		<div class='previous_next_buttons'>
<input type="button" name="previous" class="previous_violations action-button" value="Previous" />
<input type="button" name="next" class="action-button violations_data_next" value="Next" />
</div>
</fieldset>
<fieldset class='tenth'>
	<h2 class="fs-title">Underwriting</h2>
	<h3 class="fs-subtitle"></h3>
	<div class='main_form'>
		<div class='col-md-6 left'>
			<div class='main_field_div'>
			<h2 class="fs-title">Proof of Prior Insurance</h2>
			<h3 class="fs-subtitle"></h3>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Currently Insured?</label>
					 <div class='radio'>
						<input type="radio" name="Spouse" class="currently_insured"><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Spouse" class="currently_insured"><label>No</label>
					</div>
					</div>

				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					 <label>Agent Code:</label>	
					 <select>
					 <option selected="selected" value=""></option>
					<option value="001">Not Listed</option>
					<option value="003">Acadia Insurance Company</option>
					<option value="004">Acceleration National Ins Co</option>
					<option value="006">Acceptance Insurance Company</option>
					<option value="007">Addison Insurance Company</option>
					<option value="008">Admiral Insurance Company</option>
					<option value="009">Ag Security Insurance Company</option>
					<option value="014">AIG Hawaii Insurance Company Inc</option>
					<option value="020">Allied Mutual Insurance Co</option>
					<option value="021">Allstate Indemnity Company</option>
					<option value="022">Allstate Insurance Company</option>
					<option value="032">American Economy Insurance Company</option>
					<option value="045">American International Grp</option>
					<option value="046">American International Ins Company</option>
					<option value="052">American Mercury Insurance Company</option>
					<option value="053">American Mercury Lloyds Insurance Co</option>
					<option value="058">American National Fire Ins Co</option>
					<option value="069">American States Insurance Co of Tx</option>
					<option value="070">American States Insurance Company</option>
					<option value="077">Amica Mutual Insurance Company</option>
					<option value="108">Beacon National Insurance Co</option>
					<option value="113">Bituminous Casualty Corp</option>
					<option value="126">Canal Indemnity Co</option>
					<option value="131">Carolina Casualty Insurance Co</option>
					<option value="142">Charter Oak Fire Insurance Co</option>
					<option value="151">Church Mutual Insurance Co</option>
					<option value="164">Clarendon America Insurance Co</option>
					<option value="170">Colonial County Mutual Ins Co</option>
					<option value="195">Consumers Cnty Mutual Ins Co</option>
					<option value="196">Continental Casualty Co</option>
					<option value="200">Continental Western Insurance Co</option>
					<option value="256">Farm Bureau Mutual Insurance Co</option>
					<option value="261">Farmers Ins Grp</option>
					<option value="262">Farmers Insurance Exchange</option>
					<option value="263">Farmers Mutual Insurance Co of Ne</option>
					<option value="268">Federal Insurance Company</option>
					<option value="279">Financial Indemnity Company</option>
					<option value="282">Firemans Fund County Mutual Ins Co</option>
					<option value="307">Gainsco County Mutual Ins Co</option>
					<option value="311">GEICO General Insurance Co</option>
					<option value="320">General Insurance Co of America</option>
					<option value="331">Germania Insurance Company</option>
					<option value="345">Great American Insurance Co</option>
					<option value="350">Great Texas County Mutual Ins Co</option>
					<option value="351">Great West Casualty Co</option>
					<option value="369">Harford Mutual Insurance Co</option>
					<option value="374">Hartford Casualty Insurance Co</option>
					<option value="390">Home State County Mutual Ins Co</option>
					<option value="444">Liberty Mutual Insurance Co</option>
					<option value="446">Lincoln General Insurance Co</option>
					<option value="458">Maryland Casualty Company</option>
					<option value="468">Mercury Casualty Co</option>
					<option value="471">Metropolitan Property &amp; Cas Ins Co</option>
					<option value="476">Mid-Century Insurance Co</option>
					<option value="477">Mid-Continent Casualty Co</option>
					<option value="508">National American Insurance Co</option>
					<option value="510">National Casualty Company</option>
					<option value="517">National Fire &amp; Marine Insurance Co</option>
					<option value="520">National Interstate Insurance Co</option>
					<option value="521">National Liability &amp; Fire Ins Co</option>
					<option value="530">Nationwide Mutual Insurance Co</option>
					<option value="562">Northland Insurance Company</option>
					<option value="567">Oak Brook County Mutual Ins Co</option>
					<option value="571">Ohio Casualty Insurance Co</option>
					<option value="574">Oklahoma Surety Company</option>
					<option value="575">Old American Cty Mutual Fire Ins Co</option>
					<option value="578">Old Republic Insurance Co</option>
					<option value="621">Phoenix Insurance Company</option>
					<option value="631">Progressive Ins Co - Personal Auto Policy</option>
					<option value="647">Republic Western Ins Co</option>
					<option value="657">Safeco Ins Co Of America</option>
					<option value="664">Sagamore Insurance Co</option>
					<option value="667">Scottsdale Insurance Company</option>
					<option value="678">Sentry Insurance a Mutual Co</option>
					<option value="689">Southern Farm Bureau Cas Ins Co</option>
					<option value="690">Southern Fire &amp; Casualty Co</option>
					<option value="691">Southern General Ins Co</option>
					<option value="694">Southern Mutual Church Insurance Co</option>
					<option value="719">State &amp; County Mutual Fire Ins Co</option>
					<option value="715">State Farm Cty Mutual Ins Co of Tx</option>
					<option value="718">State Farm Mutual Auto Ins Co</option>
					<option value="727">Texas Farm Bureau Mutual Ins Co</option>
					<option value="758">Travelers Insurance Group</option>
					<option value="762">Trinity Universal Group</option>
					<option value="766">Truck Insurance Exchange</option>
					<option value="769">Twin City Fire Insurance Co</option>
					<option value="778">Union Insurance Company</option>
					<option value="779">Union Standard Ins Co</option>
					<option value="785">United Fire &amp; Casualty Co</option>
					<option value="790">United Services Auto Assoc (USAA)</option>
					<option value="794">Universal Underwriters Insurance Co</option>
					<option value="812">Victoria Automobile Insurance Co</option>
					<option value="843">Westport Insurance Corp</option>
					<option value="847">Windsor Insurance Company</option>
					<option value="858">Zurich Ins Co Grp</option>
				 </select>
					</div>

				</div>
				 <div class="form-row">
					<div class="form-holder w-100">
					<label>Current Policy Number:</label>
						<input type="text" class="form-control" name="mobile" class='current_policy_no'>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Current Policy Effective Date:</label>
						<input type="text" class="form-control datepicker" name="dob" value="<?php echo date("y-m-d");?>" class='current_policy_Effective'>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Current Policy Expiration Date:</label>
						<input type="text" class="form-control datepicker" name="dob" value="<?php echo date("y-m-d");?>" class='current_policy_Expiration'>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Current Liability Limit:</label>
					 <select class='Current_Liability'>
							<option selected="selected" value=""></option>
					<option value="98">Phys Dam Only</option>
					<option value="99">Non Truck Liab</option>
					<option value="01">State Min</option>
					<option value="02">25/50</option>
					<option value="03">50/100</option>
					<option value="04">100 CSL</option>
					<option value="05">100/300</option>
					<option value="06">300 CSL</option>
					<option value="07">350 CSL</option>
					<option value="08">250/500</option>
					<option value="09">500 CSL</option>
					<option value="10">750 CSL</option>
					<option value="11">1 Million CSL</option>
					</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Has insured had continuous coverage for at least one year?</label>
					 <div class='radio'>
						<input type="radio" name="Spouse" class="currently_insured"><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Spouse" class="currently_insured"><label>No</label>
					</div>
					</div>

				</div>
				<div class='main_field_div'>
			<h2 class="fs-title">Proof of Prior Insurance</h2>
			<h3 class="fs-subtitle"></h3>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Does the insured have General Liability Insurance(GL) or a Business Owner's Policy(BOP)?</label>
					 <select class='Proof_Insurance'>
					 <option value="General Liability Insurance" >General Liability Insurance</option>
					<option selected="selected" value="Business Owners Policy">Business Owners Policy</option>
					<option value="Neither">Neither</option>
					</select>
					</div>

				</div>	
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Year current business was established (YYYY - enter 9999 if unknown or not applicable):</label>
					<input type="text" class="form-control" name="Year_current" class='current_policy_no' value='9999'>
					</div>

				</div>	
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Number of Additional Insureds:</label>
					 <select class='Additional_Insureds'>
						<option selected="selected" value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
					</div>

				</div>	
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Number of Additional Insureds:</label>
					 <select class='Additional_Insureds'>
						<option selected="selected" value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
					</div>

				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Number of Waivers of Subrogation:</label>
					 <select class='Waivers_Subrogation'>
						<option selected="selected" value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
					</div>

				</div>					
				
			</div>
				
				
				</div>
				
		</div>
		
		<div class='col-md-6 right'>
				<div class='main_field_div'>
				<h2 class="fs-title">Electronic Logging Device (ELD)</h2>
			<h3 class="fs-subtitle"></h3>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Is the customer required to maintain hours of service records using an Electronic Logging Device (ELD)?</label>
					<div class='radio'>
						<input type="radio" name="Spouse" class="currently_insured"><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Spouse" class="currently_insured"><label>No</label>
					</div>
					</div>
					</div>

			</div>
			
			<div class='main_field_div'>
				<h2 class="fs-title">Policy Filings</h2>
			<h3 class="fs-subtitle"></h3>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Are any state or federal filings required?</label>
					 <div class='radio'>
						<input type="radio" name="Spouse" class="currently_insured"><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Spouse" class="currently_insured"><label>No</label>
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Do we insure all commercial vehicles the insured owns?</label>
					 <div class='radio'>
						<input type="radio" name="Spouse" class="currently_insured"><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Spouse" class="currently_insured"><label>No</label>
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Do we insure all vehicles that the insured uses in their business?</label>
					 <div class='radio'>
						<input type="radio" name="Spouse" class="currently_insured"><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Spouse" class="currently_insured"><label>No</label>
					</div>
					</div>
				</div>
			</div>
			<div class='main_field_div'>
				<h2 class="fs-title">Filing Types</h2>
			<h3 class="fs-subtitle"></h3>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Federal:</label>
					 <div class='radio'>
						<input type="radio" name="Spouse" class="currently_insured"><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Spouse" class="currently_insured"><label>No</label>
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>MCS90</label>
					 <div class='radio'>
						<input type="radio" name="Spouse" class="currently_insured"><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Spouse" class="currently_insured"><label>No</label>
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>State:</label>
					 <select name="fil_puc_cnt" id="fil_puc_cnt" class="AddIControl all a">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>State Cargo (Form H):</label>
					<select name="fil_formh_cnt" id="fil_formh_cnt" class="AddIControl all a">

						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option><option value="8">8</option><option value="9">9</option></select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Other:</label>
					 <select name="fil_othr_cnt" id="fil_othr_cnt" class="AddIControl all a">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					</select>
					</div>
				</div>
			</div>
				
				
			</div>
		</div>
	</div>
	<div class='previous_next_buttons'>
		<input type="button" name="previous" class="previous_Underwriting action-button" value="Previous" />
		<input type="button" name="submit" class="action-button submit" value="Submit" />
	</div>
</fieldset>

</form>

<!-- jQuery --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script> 
<!-- jQuery easing plugin --> 
<script src="js/jquery.easing.min.js" type="text/javascript"></script> 
<script src="js/script.js" type="text/javascript"></script> 

<div id="Driver_add_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Driver</h4>
      </div>
	  
      <div class="modal-body">
	  <form id="Add_new_Driver_form" method="POST" action="#" novalidate="novalidate">
		<div class="row">
		<div class="col-xs-12">
		  <div class="well">
					<div class="form-group">
					  <label for="username" class="control-label">First Name</label>
						<input type="text" class="form-control" name="new_driver_first" id='new_driver_first'>
					
					</div>
					<div class="form-group">
					  <label for="username" class="control-label">Middle Initial</label>
						<input type="text" class="form-control" name="new_driver_middle" id='new_driver_middle'>
					
					</div>
					<div class="form-group">
					  <label for="username" class="control-label">Last Name</label>
						<input type="text" class="form-control" name="new_driver_last" id='new_driver_last'>
					
					</div>
					<div class="form-group">
					  <label for="username" class="control-label">Date of Birth/Age</label>
						<input type="text" class="form-control datepicker" name="new_driver_dob" id='new_driver_dob'>
					
					</div>
					<div class="form-group">
					  <label for="username" class="control-label">Marital Status</label>
					
					 <div class='radio'>
						<input type="radio" name="new_driver_marital_status" class="form-control new_driver_marital_status" >
						<label>Married</label>
					</div>
					 <div class='radio'>
						<input type="radio" name="new_driver_marital_status" class="form-control new_driver_marital_status" checked >
						<label>Single</label>
					</div>
					
					  </div>
					<div class="form-group">
					  <label for="username" class="control-label">License State</label>
					  <select name='new_driver_license_state' class='form-control'>
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
										<option value="IT">International</option>
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
										<option value="AB">Alberta</option>
										<option value="BC">British Columbia</option>
										<option value="MB">Manitoba</option>
										<option value="NB">New Brunswick</option>
										<option value="NL">Newfoundland</option>
										<option value="NT">Northwest Territories</option>
										<option value="NS">Nova Scotia</option>
										<option value="ON">Ontario</option>
										<option value="PE">Prince Edward Island</option>
										<option value="QC">Quebec</option>
										<option value="SK">Saskatchewan</option>
										<option value="YT">Yukon Territory</option>

									</select>
					
							</div>
							<div class="form-group">
								<label for="username" class="control-label">License Number</label>
								<input type="text" class="form-control" name="new_driver_licence" id='new_driver_licence'>
					
							</div>
							<div class="form-group">
								<label for="username" class="control-label">Commercial Driver's License (CDL)</label>
								<select name="new_driver_commercial_" id="new_driver_commercial_" class='form-control'>
										<option selected="selected" value="No">No</option>
										<option value="Yes">Yes</option>

								</select>
					
							</div>
							
							<div class="form-group">
								<label for="username" class="control-label">Is an SR22 required?</label>
								<div class='radio'>
									<input type="radio" name="new_driver_SR22" class="form-control new_driver_SR22" value='Yes'>
									<label>Yes</label>
								</div>
								 <div class='radio'>
									<input type="radio" name="new_driver_SR22" class="form-control new_driver_SR22" checked value='No'>
									<label>No</label>
								</div>
					
							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-success" id='new_drive_add_button'>Add</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
		</form>
	</div>
	</div>
</div>


<div id="Driver_Edit_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Driver</h4>
      </div>
	  
      <div class="modal-body">
	  <form id="Edit_Driver_form" method="POST" action="#" novalidate="novalidate">
		<div class="row">
		<div class="col-xs-12">
		  <div class="well">
					<div class="form-group">
					  <label for="username" class="control-label">First Name</label>
						<input type="text" class="form-control" name="new_driver_first" id='new_driver_first'>
					
					</div>
					<div class="form-group">
					  <label for="username" class="control-label">Middle Initial</label>
						<input type="text" class="form-control" name="new_driver_middle" id='new_driver_middle'>
					
					</div>
					<div class="form-group">
					  <label for="username" class="control-label">Last Name</label>
						<input type="text" class="form-control" name="new_driver_last" id='new_driver_last'>
					
					</div>
					<div class="form-group">
					  <label for="username" class="control-label">Date of Birth/Age</label>
						<input type="text" class="form-control datepicker" name="new_driver_dob" id='new_driver_dob'>
					
					</div>
					<div class="form-group">
					  <label for="username" class="control-label">Marital Status</label>
					
					 <div class='radio'>
						<input type="radio" name="new_driver_marital_status" class="form-control new_driver_marital_status" >
						<label>Married</label>
					</div>
					 <div class='radio'>
						<input type="radio" name="new_driver_marital_status" class="form-control new_driver_marital_status" checked >
						<label>Single</label>
					</div>
					
					  </div>
					<div class="form-group">
					  <label for="username" class="control-label">License State</label>
					  <select name='new_driver_license_state' class='form-control'>
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
										<option value="IT">International</option>
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
										<option value="AB">Alberta</option>
										<option value="BC">British Columbia</option>
										<option value="MB">Manitoba</option>
										<option value="NB">New Brunswick</option>
										<option value="NL">Newfoundland</option>
										<option value="NT">Northwest Territories</option>
										<option value="NS">Nova Scotia</option>
										<option value="ON">Ontario</option>
										<option value="PE">Prince Edward Island</option>
										<option value="QC">Quebec</option>
										<option value="SK">Saskatchewan</option>
										<option value="YT">Yukon Territory</option>

									</select>
					
							</div>
							<div class="form-group">
								<label for="username" class="control-label">License Number</label>
								<input type="text" class="form-control" name="new_driver_licence" id='new_driver_licence'>
					
							</div>
							<div class="form-group">
								<label for="username" class="control-label">Commercial Driver's License (CDL)</label>
								<select name="new_driver_commercial_" id="new_driver_commercial_" class='form-control'>
										<option selected="selected" value="No">No</option>
										<option value="Yes">Yes</option>

								</select>
					
							</div>
							
							<div class="form-group">
								<label for="username" class="control-label">Is an SR22 required?</label>
								<div class='radio'>
									<input type="radio" name="new_driver_SR22" class="form-control new_driver_SR22" value='Yes'>
									<label>Yes</label>
								</div>
								 <div class='radio'>
									<input type="radio" name="new_driver_SR22" class="form-control new_driver_SR22" checked value='No'>
									<label>No</label>
								</div>
					
							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-success" id='new_drive_add_button'>Add</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
		</form>
	</div>
	</div>
</div>


<div id="vehiles_add_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New vehicle</h4>
      </div>
      <div class="modal-body">
		<div class="row">
		<div class="col-xs-12">
		 <div class='well'>
			  <form id="loginForm" method="POST" action="#" novalidate="novalidate">
					<div class="form-group">
					  <label for="username" class="control-label">Type</label>
					<?php 
						$response_vehicles= $handleFunctionsObject->vehicle_type();
						foreach($response_vehicles as $responsedata){?>
					 <div class='radio'>
						<input type="radio" name="vahicle_type" class="vahicle_type" 
							data_id="<?php echo $responsedata['id'];?>" <?php if($responsedata['id']==1){echo 'checked';}?>>
						<label><?php echo $responsedata['category_type'];?></label>
					</div>
					<?php }
						?>
					  </div>
					<div class="form-group">
					  <label for="VIN" class="control-label">VIN</label>
					  <input type="text" class="form-control" id="vehicle_VIN" name="vehicle_VIN" value="" required="">
					  <span class="help-block"></span>
					</div>
					<div class="form-group">
					  <label for="VIN" class="control-label">Category</label>
					<select name="C2VehicleDetails" id="C2VehicleDetails" class="form-control vehShortDropDownList ctrl-short-left all a">
						<?php $response_vehicles_cat= $handleFunctionsObject->VehicleCategory(1);					
							foreach($response_vehicles_cat as $responsedata){?>	
							<option value="<?php echo $responsedata['id'];?>"><?php echo $responsedata['category'];?></option>
						<?php }
						?>
					</select>
					</div>
					<div class="form-group">
					  <label for="VIN" class="control-label">Year</label>
					<select name="C2VehicleDetails" id="C2VehicleDetails" class="form-control vehShortDropDownList ctrl-short-left all a">
						<?php $response_vehicles_year= $handleFunctionsObject->Vehicleyears();					
							foreach($response_vehicles_year as $responsedata){?>	
							<option value="<?php echo $responsedata['id'];?>"><?php echo $responsedata['year'];?></option>
						<?php }
						?>
					</select>
					</div>
					<div class="form-group">
					  <label for="VIN" class="control-label">Make</label>
					<select name="C2VehicleDetails" id="C2VehicleDetails" class="form-control vehShortDropDownList ctrl-short-left all a">
						<?php $response_vehicles_Make = $handleFunctionsObject->VehicleMake();					
							foreach($response_vehicles_Make as $responsedata){?>	
							<option value="<?php echo $responsedata['id'];?>"><?php echo $responsedata['make'];?></option>
						<?php }
						?>
					</select>
					</div>
				 
				 
				  <button type="submit" class="btn btn-success btn-block">Add</button>
				 
			  </form>
			</div>
		</div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  
</div>
</div>



</body>
</html>
