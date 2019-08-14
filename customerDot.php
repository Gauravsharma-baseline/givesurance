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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jQuery --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script> 
<!-- jQuery easing plugin --> 
<link href="https://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"
    rel="stylesheet" type="text/css" />
<script src="https://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"
<script src="js/jquery.easing.min.js" type="text/javascript"></script> 
<script src="js/script.js" type="text/javascript"></script> 
<title>Customer with DOt</title>
</head>
<body>

<h1 style="margin-top:20px" align="center">Givesurance Fleetsured</h1>
<!-- multistep form -->
<form id="msform">
<!-- progressbar -->
<ul id="progressbar">
<li class="phoneli active">Phone Number </li>
<li class="IntroLi">Intro</li>
<li class='dotLi'>DOT</li>
<li class='MCLi'>MC</li>
<!--li  class='physicalLi'>Verify Phyical Address</li>
<li class='mailingLi'>Verify Mailing Address</li>
<li class='insuranceLi'>Verify Insurance Data</li-->
<li class='generalLI'>General</li>
<li class='vehiclesLI'>Vehicles</li>
<li class='driversLI'>Drivers</li>
<li class='violationsLI'>Violations</li>
<li class='underwritingLI'>Underwriting</li>
<li class='CoverageLI'>Coverage Limit Information</li>
<li class='OperationDescription'>Operation Description</li>
<!--li class='InsuranceHistory'>Insurance History</li-->
<li class='CommoditiesLI'>Commodities</li>
<!--li class='CargoRelatedLI'>Cargo Related</li>
<li class='CargoFinal'>Cargo Final</li>
<li class='PDFData'>FMCSA </li-->
</ul>
<!-- fieldsets -->
<div class="overlay">
    <div id="loading-img"></div>
</div>
	<fieldset class='first'>
	<h2 class="fs-title">Hi my name is (YOUR NAME) and I will be assisting you today.
	In case we get disconnected, what is the best phone number to reach you?</h2>
	<h3 class="fs-subtitle"></h3>
		<input type="text" name="phone" placeholder="Phone Number" required class='phoneNumber' oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
		<input type="hidden" name="contactId" placeholder="Phone Number" required class='contactId' />
		<input type="button" name="next" class="action-button phone_number_next" value="Next" />
		
	</fieldset>
	<fieldset class='first_1'>
	<h2 class="fs-title">Intro</h2>
	<h3 class="fs-subtitle"></h3>
	<div class='row'>
		<div class='col-md-6'>
		<div class="form-row">
			<div class="form-holder w-100">
				<label>When do you need policy by?</label>
				<input type="text" name="When_do_you_need_policy" class='When_do_you_need_policy datepicker'  placeholder='<?php echo date('m/d/Y');?>' value=''>
					
			</div>	
		</div>
		<div class="form-row">
			<div class="form-holder w-100">
			<label>Are you the owner?</label>
			 <div class='radio'>
				<input type="radio" name="Are_you_the_owner" class='Are_you_the_owner'  value='Yes'>
				<label>Yes</label>
				</div>
				 <div class='radio'>
				<input type="radio" name="Are_you_the_owner"  class='Are_you_the_owner'  value='No'>
				<label>No</label>
				</div>
			</div>	
		</div>
		</div>
		<div class='col-md-6'>
		<div class="form-row">
			<div class="form-holder w-100">
			<label>How many vehicles do you need to add?</label>
			 <select class="form-control how_many_vehicles" id='how_many_vehicles' name='how_many_vehicles'>
			 <option value=''>Select</option>
			 <option value=1>1</option>
			 <option value=2>2</option>
			 <option value=3>3</option>
			 <option value=4>4</option>
			 <option value=5>5</option>
			 <option value=6>6</option>
			 <option value=7>7</option>
			 <option value=8>8</option>
			 <option value=9>9</option>
			 <option value=9>10</option>
			 </select>
			</div>	
		</div>
		<div class="form-row">
			<div class="form-holder w-100">
			<label>Is the owner also the driver?</label>
			 <div class='radio'>
				<input type="radio" name="Is_the_owner_driver" class='Is_the_owner_driver'  value='Yes'>
				<label>Yes</label>
				</div>
				 <div class='radio'>
				<input type="radio" name="Is_the_owner_driver"  class='Is_the_owner_driver'  value='No'>
				<label>No</label>
				</div>
			</div>	
		</div>
		</div>
		<input type="button" name="previous" class="previous_Intro action-button" value="Previous" />
		<input type="button" name="next" class="action-button Intro_next" value="Next" />
		</div>
	</fieldset>
	<fieldset class='second'>
		<h2 class="fs-title">What is your DOT number? If you dont have a DOT number please put 9999999999</h2>
		<h3 class="fs-subtitle"></h3>
		<div role="alert" id='dot_alert' style='display:none;color:red';>
		DOT Number must start with DOT
		</div>
		<input type="text" name="searchedNumber" placeholder="Enter DOT Number" class="searchedNumber" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
		<input type="hidden" name="dot" placeholder="Enter DOT Number" class="dot" />
		<input type="button" name="previous" class="previous_doT action-button" value="Previous" />
		<input type="button" name="next" class="action-button dot_number_next" value="Next" />
	</fieldset>
	<fieldset class='first_2'>
		<h2 class="fs-title">Enter MC</h2>
		<h3 class="fs-subtitle"></h3>
		<input type="text" name="mc_number" placeholder="Enter MC Number" class="mc" id='mc_number' />
		<input type="button" name="previous" class="previous_first_2 action-button" value="Previous" />
		<input type="button" name="next" class="action-button first_2_next" value="Next" />
	</fieldset>
	<!--fieldset class='third'>
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

</fieldset--->
<fieldset class='sixth'>
	<div class='row main_form'>
		<div class='col-md-6 left'>
			<div class='main_field_div'>
			<h2 class="fs-title">Policy</h2>
			<h3 class="fs-subtitle"></h3>
				<!--div class="form-row">
					<div class="form-holder w-100">
					 <label>Agent Code:</label>				
					 <select id='agent_code' name='agent_code'><option selected="selected" value="77743 (GIVESURANCE INS SVCS)">77743 (GIVESURANCE INS SVCS)</option>
					</select>
					</div>

				</div-->
				<div class="form-row">
					<div class="form-holder w-100">
				   <label>Policy Effective Date:</label>
					<input type="text" class="form-control  Policy_Effective_datee" id='Policy_Effective' name='Policy_Effective' readonly>
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
					<input type="text" class="form-control search_business" value="" id='search_business_type' name='Business_type' placeholder='Search...'>
					<div id="business_response">
						<?php
						$response=$handleFunctionsObject->businessCategories();
						foreach($response as $business){
							if($business['category']!=''){  ?>
								<ul>
								<li data-id="<?php echo $business['description'];?>" class="Business_types_select"><?php echo $business['category']; ?></li>
								</ul>
								<?php 
							}
						}
						?>
					
					</div>
					
					</div>	
				</div>	
				
				<div class="form-row business_sub_type_enter" id='business_sub_type_enter' style="display:none;">
					<div class="form-holder w-100">	
					<p class='enter_business_sub' id='enter_business_sub'></p>
					</div>	
				</div>
				<div class="form-row">
					<div class="form-holder w-100">			
						<label>Are any listed vehicles used to haul steel?</label>
						 <div class='radio'>
						
						 <input type="radio" name="is_vehicles_haul_steel" class='is_vehicles_haul_steel'  value='Yes'>
						  <label>Yes</label>
						 </div>
						  <div class='radio'>
						   
						<input type="radio" name="is_vehicles_haul_steel" class='is_vehicles_haul_steel' value='No'>
						<label>No</label>
						</div>
					</div>	
				</div>	
				<div class="form-row" id='Specify_Commodities_Hauled_select_div'>	
					<div class="form-holder w-100">
					<label>Specify Commodities Hauled</label>
					<select  multiple="multiple" id='Specify_Commodities_Hauled_select' name='Specify_Commodities_Hauled[]'>
					  <option value="">Choose Commodities Hauled</option>
					  <option value="Household Goods">Household Goods</option>
					  <option value="Drive/Tow away">Drive/Tow away</option>
					  <option value="Mobile Homes">Mobile Homes</option>
					  <option value="Oilfield Equipment">Oilfield Equipment</option>
					  <option value="Dry Bulk">Dry Bulk</option>
					  <option value="Paper Products">Paper Products</option>
					  <option value="Livestock">Livestock</option>
					  <option value="Chemicals">Chemicals</option>
					  <option value="Passengers">Passengers</option>
					  <option value="Department Store Merchandise">Department Store Merchandise</option>
					  <option value="Metal: sheets, coils, rolls">Metal: sheets, coils, rolls</option>
					  <option value="Logs, Poles, Bearms, Lumber">Logs, Poles, Bearms, Lumber</option>
					  <option value="Machinery, Large Objects">Machinery, Large Objects</option>
					  <option value="Fresh Produce">Fresh Produce</option>
					  <option value="Intermodal Containers">Intermodal Containers</option>
					  <option value="Plastic Products">Plastic Products</option>
					  <option value="Grain, Feed, Hay">Grain, Feed, Hay</option>
					  <option value="Garbage/Refuse">Garbage/Refuse</option>
					  <option value="Agricultural/Farm Supplies">Agricultural/Farm Supplies</option>
					  <option value="Auto Parts / Tires">Auto Parts / Tires</option>
					  <option value="Motor Vehicles">Motor Vehicles</option>
					  <option value="Building Materials">Building Materials</option>
					  <option value="US Mail">US Mail</option>
					  <option value="Meats">Meats</option>
					  <option value="Refrigerated Food">Refrigerated Food</option>
					  <option value="Beverages">Beverages</option>
					  <option value="Liquids/Gases">Liquids/Gases</option>
					  <option value="Electronics">Electronics</option>
					  <option value="Sand/Gravel">Sand/Gravel</option>
					  <option value="Other">Other</option>
					</select>
					</div>
				</div>
				
				<div class="form-row">
					<div class="form-holder w-100">			
						<label>listed vehicles or the load require a placard?</label>
						 <div class='radio'>
						
						 <input type="radio" name="is_vehicles_placard" class='is_vehicles_placard'  value='Yes'>
						  <label>Yes</label>
						 </div>
						  <div class='radio'>
						   
						<input type="radio" name="is_vehicles_placard" class='is_vehicles_placard' value='No'>
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
					
					<input type="radio" name="have_DBA" class='have_DBA'  value='Yes'>
					<label>Yes</label>
					</div>
					<div class='radio'>
					
						<input type="radio" name="have_DBA" class='have_DBA' value='No'>
						<label>No</label>
					</div>
					</div>
				</div>  
				<div class="form-row" id='DBA_NAME_DIV' style='display:none'>	
					<div class="form-holder w-100">
					<label>DBA</label>
					<input type="text" class="form-control DBA_NAME"  name='DBA_NAME' >  
					</div>
				</div>



			</div>
			<div class='main_field_div' id='US_Department_of_Transportation'>	
				 <h2 class="fs-title">US Department of Transportation (USDOT) Registration</h2>
				<div class="form-row">	
					<div class="form-holder w-100">
					
					<label>USDOT# associated with the insured's business  :  </label>
					<input type="text" class="form-control dot"  name='USDOT_associated' readonly/>  
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
						<label>USDOT Assigned to: </label>
						<input type="text" class="form-control mailing_address" id='USDOT_Assigned_to' value=""  name='USDOT_Assigned_to'>  
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Does the information assigned to this USDOT# match the insured's business?</label>	
					<div class='radio'>
					
					<input type="radio" name="is_match_USDOT" checked class='is_match_USDOT'  value='Yes' checked>
					<label>Yes</label>	
					</div>
					<div class='radio'>
					
					<input type="radio" name="is_match_USDOT" class='is_match_USDOT'  value='No'>
					<label>No</label>	
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Yrs. in business</label>	
					<input type="number" class="form-control Yrs_in_business" id='Yrs_in_business' value="" name='Yrs_in_business' min='0'> 
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Yrs. in Trucking Industry</label>	
					<input type="number" class="form-control Yrs_in_Trucking_Industry" id='Yrs_in_Trucking_Industry' value=""  name='Yrs_in_Trucking_Industry' min='0'> 
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>If New Venture Please list previous industry employment and roles for Owner</label>	
					<input type="text" class="form-control previous_industry_employment" id='previous_industry_employment' value=""  name='previous_industry_employment'> 
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>List Filing(s) Required</label>	
					<select class="form-control List_Filing" id='List_Filing' name='List_Filing'>
					<option  value='' selected='selected'>Select Filing</option> 
					<option  value='Federal'>Federal</option> 
					<option  value='State'>State</option> 
					<option  value='Both'>Both</option> 
					<option  value='Other'>Other</option> 
					</select>
					</div>
				</div>
				<div class="form-row customer_in_div" style='display:none;'>
					<div class="form-holder w-100">
					<label>Select State</label>	
					<select class="form-control List_Filing_state" id='List_Filing_state' name='List_Filing_state'>
					<option  value='' selected='selected'>Select State</option> 
					<option  value='CA'>CA</option> 
					<option  value='TX'>TX</option> 
					</select>
					
					</div>
				</div>
				<div class="form-row customer_state_div_value" style='display:none;'>
					
				</div>
				</div>
			
			
			</div>
			<div class='col-md-6 right'>
				<div class='main_field_div' id='Spouse_Information_div' style='display:none'>
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
						  <option selected value="none">None</option>
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
					<input type="text" class="form-control datepickerDOB" name="Spouse_DOB" id='Spouse_DOB' value='<?php echo date('m/d/Y');?>' placeholder='<?php echo date('m/d/Y');?>'>
					
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
						  <option selected value="none">--None--</option>
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
					<input type="text" class="form-control datepickerDOB" name="Insured_DOB" id='Insured_DOB' value='<?php echo date('m/d/Y');?>' placeholder='<?php echo date('m/d/Y');?>'>
					<label>Designate Spouse as a Named Insured?</label>
					<div class='radio'>
						<input type="radio" name="Insured_Designate_Spouse" class='Insured_Designate_Spouse' value='Yes'><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Insured_Designate_Spouse" class='Insured_Designate_Spouse' value='No'checked><label>No</label>
					</div>
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
						<input type="hidden" class="form-control" name="Contact_Insured_phone_hidden" id='Contact_Insured_phone_hidden'>
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
				<select class="form-control"  id="Contact_Insured_State" name="Contact_Insured_State">
  				<option Selected='selected'>Select State</option>
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
			<!--div class="form-row">
				  <div class="form-holder w-100">
				<label>Middle Initial:</label>
				<input type="text" class="form-control" name="Financial_Middle_name" placeholder="Middle Initial:.."id='Financial_Middle_name'>
			</div>
			</div-->		
			<div class="form-row">
				  <div class="form-holder w-100">	
				<label>Last Name:</label><input type="text" class="form-control" name="Financial_Last_name" placeholder="Last Name:."id='Financial_Last_name'>
			</div>
			</div>	
			<div class="form-row">	
				<div class="form-holder w-100 ">
				<label>Suffix:</label>
					<select class="form-control" id='Financial_Suffix' name='Financial_Suffix'>
						<option selected value="none">--None--</option>
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
				<input type="text" class="form-control datepickerDOB" name="Financial_dob" value="<?php echo date("m/d/Y");?>" id='Financial_dob' placeholder='<?php echo date('m/d/Y');?>'>
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
					<select class="form-control" id="Financial_State" name="Financial_State">
					<option value="" selected='selected'>Select State</option>
					<option value="AL" >Alabama</option>
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
			<!--div class="form-row">	
				<div class="form-holder w-100 ">
					<label>Social Security Number:</label>
					<input type="text" class="form-control" name="social_security_number"  id='Financial_social_security_number' >
				</div>
				</div-->
			</div>	
		</div>
	</div>
	<!--div class="confirmation_div">	
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
		</div-->
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
				  <td class="td-padding"><button id='add_vehicles' type='button'>Add</button></td>
				  <td class="text-center td-padding">Year Make Model</td>
				  <td class="text-right">VIN</td>
				  <td class="text-right">Category</td>
				  <td class="text-right">Radius</td>
				  <td class="text-right">Value</td>
				  <td class="text-right">Loss Payee</td>
				  <td class="text-right">Gross weight</td>
				  <td class="text-right">Longest Trip(One Way Miles)</td>
				  <td class="text-right">City of Destination(Of Longest Haul)</td>
				  <!--td class="text-right"></td-->
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
				  <td class="text-right">Marital Status</td>
				  <td class="text-right">License Number</td>
				  <td class="text-right">License State</td>
				  <td class="text-right">Years of Class A Exp</td>
				  <td class="text-right">Date of Hire</td>
				  <td class="text-right">Backup driver</td>
				  <td class="text-right">Owner</td>
				  <td class="text-right">SR22</td>
				  <td class="text-right">Points</td>
				  <!--td class="text-right"></td-->
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
<h2 class="fs-title">Violations</h2>
<div class='infoDiv'>Enter all accidents (both at fault and not at fault) and violations for the last 35 months. If date of accident or violation is unknown, please leave the date blank, our systems will reconcile.</div>
<h3 class="fs-subtitle"></h3>
	<div class='main_form'>
	
	<div class='row'>
	<table class="table" id='Violation_Table'>
			<thead>
			<tr>
				  <td class="td-padding">Accident/Violation:</td>
				  <td class="text-center td-padding datepickerDOB">Date</td>
				  <td class="td-padding"><button id='voilation_add' type='button'>Add</button></td>
				</tr>
			</thead>
			 <tbody>
				<tr>
				  <td class="td-padding">
				  <select id='select_Accident_0'>
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
				 <td class="text-center td-padding"> <input type='text' value=' 'placeholder='<?php echo date('m/d/Y');?>' class='datepicker'  id='Accident_date_0'>				
					</td>
				  <td class="td-padding"></td>
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
						<input type="radio" name="currently_insured" class="currently_insured" value="Yes"><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="currently_insured" class="currently_insured" value="No"><label>No</label>
					</div>
					</div>

				</div>
				<div id='showinsured_data' style='display:none;'>
				<div class="form-row">
					<div class="form-holder w-100">
					 <label>Agent Code:</label>	
					 <select name='Agent_Code_policy' class='Agent_Code_policy'>
					 <option selected="selected" value="" ></option>
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
						<input type="text" class="form-control Current_Policy_Number" name="Current_Policy_Number">
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Current Policy Effective Date:</label>
						<input type="text" class="form-control datepicker current_policy_Effective_date" name="current_policy_Effective_date" value="<?php echo date("m/d/Y");?>" placeholder='<?php echo date('m/d/Y');?>' >
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Current Policy Expiration Date:</label>
						<input type="text" class="form-control datepicker current_policy_Expiration_date " name="current_policy_Expiration_date" value="<?php echo date("m/d/Y");?>" placeholder='<?php echo date('m/d/Y');?>'>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Current Liability Limit:</label>
					 <select class='Current_Liability_limit' name='Current_Liability_limit'>
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
						<input type="radio" name="continuous_coverage" class="continuous_coverage" checked><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="continuous_coverage" class="continuous_coverage"><label>No</label>
					</div>
					</div>

				</div>
				</div>
				</div>
				
				<div class='main_field_div'>
			<h2 class="fs-title">Proof of Prior Insurance</h2>
			<h3 class="fs-subtitle"></h3>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Does the insured have General Liability Insurance(GL) or a Business Owner's Policy(BOP)?</label>
					 <select class='Proof_Insurance' name='Proof_Insurance'>
					 <option value="General Liability Insurance" >General Liability Insurance</option>
					<option selected="selected" value="Business Owners Policy">Business Owners Policy</option>
					<option value="Neither">Neither</option>
					</select>
					</div>

				</div>	
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Year current business was established (YYYY - enter 9999 if unknown or not applicable):</label>
					<input type="text" class="form-control" name="Year_current_business" class='Year_current_business' value='9999' ID='Year_current_business_VAL'>
					</div>

				</div>	
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Number of Additional Insureds:</label>
					 <select class='Additional_Insureds' name='Additional_Insureds'>
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
					 <select class='Waivers_Subrogation' name='Waivers_Subrogation'>
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
				
				
				
				<div class='main_field_div'>
				<h2 class="fs-title">Electronic Logging Device (ELD)</h2>
			<h3 class="fs-subtitle"></h3>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Is the customer required to maintain hours of service records using an Electronic Logging Device (ELD)?</label>
					<div class='radio'>
						<input type="radio" name="customer_required_to_maintain_hours" class="customer_required_to_maintain_hours" value='Yes' checked><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="customer_required_to_maintain_hours" class="customer_required_to_maintain_hours" value='No'><label>No</label>
					</div>
					</div>
					</div>

			</div>
				
		</div>
		
		<div class='col-md-6 right'>
				
			
			<div class='main_field_div'>
				<h2 class="fs-title">Policy Filings</h2>
			<h3 class="fs-subtitle"></h3>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Are any state or federal filings required?</label>
					 <div class='radio'>
						<input type="radio" name="federal_filings_required" class="federal_filings_required" value='Yes'checked><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="federal_filings_required" class="federal_filings_required" value='No'><label>No</label>
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Do we insure all commercial vehicles the insured owns?</label>
					 <div class='radio'>
						<input type="radio" name="commercial_vehicles" class="commercial_vehicles " value='Yes'checked><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="commercial_vehicles" class="commercial_vehicles" value='No'><label>No</label>
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Do we insure all vehicles that the insured uses?</label>
					 <div class='radio'>
						<input type="radio" name="insured_uses_business" class="insured_uses_business" value='Yes'checked><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="insured_uses_business" class="insured_uses_business" value='No'><label>No</label>
					</div>
					</div>
				</div>
				
				
				
				<div class="form-row">
					<div class="form-holder w-100">
					<label>How often are MVRs reviewed?</label>
					
						<input type="text" name="MVRs_reviewed" class="MVRs_reviewed" id='MVRs_reviewed' value='Annually '>
					</div>
				</div>
				
				<!--div class="form-row">
					<div class="form-holder w-100">
					<label>Are drivers required to pass a drug test at time of hire?</label>
					<div class='radio'>
						<input type="radio" name="required_to_pass_a_drug" class="required_to_pass_a_drug" value='Yes'checked><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="required_to_pass_a_drug" class="required_to_pass_a_drug" value='No'><label>No</label>
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Are any drivers not covered by Workers Comp? If yes, provide details.</label>
					<div class='radio'>
						<input type="radio" name="covered_by_Workers" class="covered_by_Workers" value='Yes' checked><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="covered_by_Workers" class="covered_by_Workers" value='No'><label>No</label>
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Does applicant hire drivers from driver leasing firms?</label>
					<div class='radio'>
						<input type="radio" name="driver_leasing_firms" class="driver_leasing_firms" value='Yes' checked ><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="driver_leasing_firms" class="driver_leasing_firms" value='No'><label>No</label>
					</div>
					</div>
				</div-->
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Are all vehicles listed owned and registered to applicant?</label>
					 <div class='radio'>
						<input type="radio" name="vehicles_listed_owned" class="vehicles_listed_owned" value='Yes'checked><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="vehicles_listed_owned" class="vehicles_listed_owned" value='No'><label>No</label>
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Any vehicles titled to an individual instead of business? If yes, provide details.</label>
					 <div class='radio'>
						<input type="radio" name="individual_instead_of_business" class="individual_instead_of_business" value='Yes'><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="individual_instead_of_business" class="individual_instead_of_business" value='No' checked><label>No</label>
					</div>
					</div>
				</div>
				
				<div class="form-row" id='explanations_div' style='display:none' >
					<div class="form-holder w-100">
					<label>Please provide any explanations for answers or information requested below:</label>
					<textarea name="explanations" class="explanations" id='explanations'></textarea>
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
						<input type="radio" name="Federal" class="Federal" value='Yes' checked><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Federal" class="Federal" value='No'><label>No</label>
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Federal Cargo (BMC 34)</label>
					 <div class='radio'>
						<input type="radio" name="Federal_Cargo" class="Federal_Cargo" value='Yes' checked><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Federal_Cargo" class="Federal_Cargo" value='No'><label>No</label>
					</div>
					</div>
				</div>
				
				<div class="form-row">
					<div class="form-holder w-100">
					<label>MCS90</label>
					 <div class='radio'>
						<input type="radio" name="MCS90_val" class="MCS90_val" value='Yes' checked><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="MCS90_val" class="MCS90_val" value='No'><label>No</label>
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>State:</label>
				<select name="fil_State" id="fil_State" class="fil_State">
				<option value=" ">Select State</option>
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
					<select name="fil_formh_cnt" id="fil_formh_cnt" class="fil_formh_cnt all a">

						<option value=" ">State Cargo (Form H)</option>
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
					<label>Enter State Filing Number</label>
					<input type="text" name="State_Filling_Number" class="State_Filling_Number" id='State_Filling_Number'/>
				</div>
				</div>
				
				
				<div class="form-row">
					<div class="form-holder w-100">
					<label>CA Authority Number</label>
						<input type="text" name="CA_Authority_Number" class="CA_Authority_Number" id='CA_Authority_Number'/>
					</div>
				</div>
				
				
				
				
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Other:</label>
					 <select name="fil_othr_cnt" id="fil_othr_cnt" class="Other">
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
		<input type="button" name="submit" class="action-button underwriting_data_next" value="Next" />
	</div>
</fieldset>
<fieldset class='eleventh'>
	<h2 class="fs-title">Coverage Limit Information</h2>
	<h3 class="fs-subtitle"></h3>
			<div class='main_form'>
			<div class='row'>
				<div class='col-md-6'>
				
				<div class="form-row">
					<div class="form-holder w-100">	
				<label>Non trucks</label>
				<select class="form-control select_Non_trucks" id="select_Non_trucks" name="select_Non_trucks">
  				<option value="None" Selected='selected'>None</option>
  				<option value="100k">100k</option>
				<option value="200k">200k</option>
				<option value="250k">250k</option>
				<option value="500k">500k</option>
				<option value="750k">750k</option>
				<option value="1million">1million</option>
				
				</select>
				</div>
			</div>
				
				
				
				<div class="form-row auto_Liability_none" id='auto_Liability_div'>
					<div class="form-holder w-100">
					<label>Auto Liability</label>
					
					 <div class='radio'>
						<input type="radio" name="Auto_Liability" class="Auto_Liability" value='$1M CSL' checked><label>$1M CSL</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Auto_Liability" class="Auto_Liability" value='$750 CSL'><label>$750 CSL</label>
					</div>
					<div class='radio'>	
					<input type="radio" name="Auto_Liability" class="Auto_Liability" value='CSL = Combined Single Limit'><label>CSL = Combined Single Limit</label>
						
					</div>
					</div>
				</div>
				
				<div class="form-row">
					<div class="form-holder w-100">
					 <label>Do you need $1,000,000 Combined Single Limit for Auto Liability?</label>	
					<div class='radio'>
						<input type="radio" name="Combined_Single_Limit" class="Combined_Single_Limit" value='Yes'checked><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Combined_Single_Limit" class="Combined_Single_Limit" value='No'><label>No</label>
					</div>
					</div>
				</div>
				
				<div class="form-row">
					<div class="form-holder w-100">
					 <label>AL Deductible</label>	
					 <div class='radio'>
						<input type="radio" name="AL_Deductible" class="AL_Deductible" value='$2,500' checked><label>$2,500</label>
					</div>
					<div class='radio'>
						<input type="radio" name="AL_Deductible" class="AL_Deductible" value='$500'><label>$500</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="AL_Deductible" class="AL_Deductible" value='$1,000'><label>$1,000</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="AL_Deductible" class="AL_Deductible" value='Other'><label> Other 
						<input type="text" name="AL_Deductible_text" value="" id='AL_Deductible_text' style='display:none;' value='$500'></label>
					</div>
					</div>
				</div>
				
				 <div class="form-row">
					<div class="form-holder w-100">
					<label>UM/UIM</label>
						<div class='radio'>	
						<input type="radio" name="UM_UIM" class="UM_UIM" value='Rejected' checked><label> Rejected</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="UM_UIM" class="UM_UIM" value='Minimum State Limit Accepted'><label>Minimum State Limit Accepted</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="UM_UIM" class="UM_UIM" value='Higher Limit'><label>Higher Limit 
						<input type="text" class='UM_UIM_value' name='UM_UIM_value' id='UM_UIM_value'style='display:none;' value='Rejected'></label>
					</div>
					</div>
				</div>
				 <div class="form-row">
					<div class="form-holder w-100">
					<label>UM Pd</label>
						<div class='radio'>	
						<input type="radio" name="UM_Pd" class="UM_Pd" value='Rejected' checked><label> Rejected</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="UM_Pd" class="UM_Pd" value='Minimum State Limit Accepted'><label>Minimum State Limit Accepted</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="UM_Pd"  class="UM_Pd" value='Higher Limit'><label>Higher Limit <input type="text" id='UM_Pd_value' style='display:none;' value='Rejected' name='UM_Pd_value'></label>
					</div>
					</div>
				</div>
				
				
				
				
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Medical Payments</label>
						<div class='radio'>	
						<input type="radio" name="Medical_Payments" class="Medical_Payments" value='Rejected' checked><label> Rejected</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Medical_Payments" class="Medical_Payments"value='$5,000'><label>$5,000</label>
					</div>
					</div>
				</div>
				</div>
				
				<div class='col-md-6'>
				<div class='main_field_div'>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>PIP</label>
						<div class='radio'>	
						<input type="radio" name="PIP" class="PIP" value='Rejected' checked><label> Rejected</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="PIP" class="PIP" value='Statutory Limits Accepted'><label>Statutory Limits Accepted</label>
					</div>
					</div>
				</div>
				
				
				<div class="form-row">
					<div class="form-holder w-100">
					
						<div class='txt'>	
				<h2 class="fs-title">Motor Truck Cargo</h2><label>
				</div>
						</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Do you know the limit required?</label>
						<div class='radio'>	
						<input type="radio" name="know_the_limit_required_motor" class="know_the_limit_required_motor" value='Yes' ><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="know_the_limit_required_motor" class="know_the_limit_required_motor" value='No'><label>No</label>
					</div>
					</div>
				</div>
				<div class="form-row enter_the_limit_required_motor_div" style='display:none;'>
					<div class="form-holder w-100">
					<label>Enter Limit</label>
				<select class="form-control enter_the_limit_required_motor" name="enter_the_limit_required_motor">
  				<option value="" selected='selected'>Select</option>
  				<option value="10k">10k</option>
				<option value="25k">25k</option>
				<option value="35k">35k</option>
				<option value="45k">45k</option>
				<option value="55k">55k</option>
				<option value="100k">100k</option>
				<option value="other">other</option>
						</select>
						
					
					</div>
				</div>
				<div class="form-row enter_the_limit_required_motor_other_div" style='display:none;'>
					<div class="form-holder w-100">
						<input type="text" name="enter_the_limit_required_motor_other" class="enter_the_limit_required_motor_other"/>
					
					</div>
				</div>
				
				
				
						

				
				
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Do you need a Limit of $100,000 for the Motor Truck Cargo?</label>
						<div class='radio'>	
						<input type="radio" name="need_Limit_Motor_Truck_CArgo" class="need_Limit_Motor_Truck_CArgo" value='Yes' checked><label> Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="need_Limit_Motor_Truck_CArgo" class="need_Limit_Motor_Truck_CArgo" value='No'><label>No</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="need_Limit_Motor_Truck_CArgo"  class="need_Limit_Motor_Truck_CArgo" value='Other'><label>Other</label>
					</div>
					</div>
				</div>
				<div class="form-row Motor_Truck_Cargo_limit_value_div" style='display:none;'>
					<div class="form-holder w-100">
					<label>Select Limit</label>
						<div class='radio'>	
						<input type="radio" name="need_Limit_Motor_Truck_CArgo_other" class="need_Limit_Motor_Truck_CArgo_other" value='$150,000'><label> $150,000</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="need_Limit_Motor_Truck_CArgo_other" class="need_Limit_Motor_Truck_CArgo_other" value='$250,000'><label>$250,000</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="need_Limit_Motor_Truck_CArgo_other"  class="need_Limit_Motor_Truck_CArgo_other" value='$300,000'><label>$300,000</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="need_Limit_Motor_Truck_CArgo_other"  class="need_Limit_Motor_Truck_CArgo_other" value='$500,000'><label>$500,000</label>
					</div>
					</div>
				</div>
				<div class="form-row Trailer_Interchange_coverage_div">
					<div class="form-holder w-100">
					<label>Do you need Trailer Interchange coverage?</label>
						<div class='radio'>	
						<input type="radio" name="Trailer_Interchange_coverage" class="Trailer_Interchange_coverage" value='Yes'><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Trailer_Interchange_coverage" class="Trailer_Interchange_coverage" value='No'><label>No</label>
					</div>
					</div>
				</div>
				
				<div class="form-row know_the_limit_required_div" style='display:none;'>
					<div class="form-holder w-100">
					<label>Do you know the limit required?</label>
						<div class='radio'>	
						<input type="radio" name="know_the_limit_required" class="know_the_limit_required" value='Yes' checked><label>Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="know_the_limit_required" class="know_the_limit_required" value='No'><label>No</label>
					</div>
					</div>
				</div>
				<div class="form-row enter_the_limit_required_div" style='display:none;'>
					<div class="form-holder w-100">
					<label>Enter Limit</label>
						<input type="text" name="enter_the_limit_required" class="enter_the_limit_required"/>
					
					</div>
				</div>
				</div>
				</div>
			</div>
		
		<div class='previous_next_buttons'>
		<input type="button" name="previous" class="previous_Coverage_Limit_Information action-button" value="Previous" />
		<input type="button" name="next" class="action-button Coverage_Limit_Information_next" value="Next" />
	</div>
	
</fieldset>

<fieldset class='twelve'>
	<h2 class="fs-title">Operations Description</h2>
		<h3 class="fs-subtitle"></h3>
		<div class='main_form'>
		<div class='row'>
		<div class='col-md-6'>
			<h2 class="fs-title">Radius -Percentage of Loads</h2>
				
				<div class="form-row">
					<div class="form-holder w-100">
						<label>0-50 miles</label>
						<input type="number" name="percentage_one" class="per_one" id="percentage_two_one" value="" min='0'>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
						<label>50-200 miles</label>
						<input type="number" name="percentage_two" class="per_two" id="percentage_two_id" value="" min='0'>
					</div>
				</div>
				
				<div class="form-row">
					<div class="form-holder w-100">
						<label>200+ miles</label>
							<input type="number" name="percentage_three" class="per_three" id="percentage_three_id" value="" min='0'>
					</div>
				</div>
			</div>
			
		
		<div class='col-md-6'>
				<h2 class="fs-title">Estimates</h2>	
				<div class="form-row">
					<div class="form-holder w-100">
						<label>Average Radius</label>
						<input type="number" name="Estimates_one" class="Esti_one" id="Estimates_one_id" value="" min='0'>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
						
						<label>Longest Radius</label>
						<input type="number" name="Estimates_two"  class="Esti_two" id="Estimates_two_id"  value="" min='0'>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder w-100">
						<label>Furthest City</label>
						<input type="number" name="Estimates_three"  class="Esti_three" id="Estimates_three_id"  value="" min='0'>
					</div>
				</div>
								
			</div>	
		
		</div>	
		</div>	
			
		
		<div class='main_form'>
				<div class='row'>
				<h2 class="fs-title">Carrier Type - % of Business(Should Equal 100%)</h2>
				<div class="col-md-3 input_one_b">
					<input type="checkbox" name="Business" value="" id="chk_one" class="chk_one_cl">Common<br>
					
					<input type="number" name="Business_one_name" class="Business_one" id="Business_first_id"  value="" min='0'>
				</div>
					
					<div class="col-md-3 input_three_b">
					<input type="checkbox" name="Business" value="" id="chk_thr" class="chk_three_id">Private<br>
					<input type="number" name="Business_Private" class="Business_three" id="Business_Private_id"  value="" min='0'>
					</div>
					<div class="col-md-3 input_four_b">
					<input type="checkbox" name="Non_Trucking_Business" value="" id="Non_Trucking_Business_check" class="Non_Trucking_Business_check">Non Trucking<br>
					<input type="number" name="Non_Trucking" class="Business_three" id="Non_Trucking_id"  value="" min='0'>
					</div>
					
					<div class="col-md-3 input_six_b">
					<input type="checkbox" name="Business" value="" id="Business_Other_check" class="Business_Other_check">Other<br>
					<input type="number" name="Business_Other" class="Business_three" id="Business_Other_id"  value="" min='0'>
					</div>
					
					</div>
				</div>				
					
					
					
				
				<div class="form-row">
					<div class="form-holder w-100">
					<label>Household or Commercial Mover</label>
						<div class='radio'>	
						<input type="radio" name="Operations_radio" class="Operations_radio_Mover" value='Yes'><label> Yes</label>
					</div>
					<div class='radio'>	
						<input type="radio" name="Operations_radio" class="Operations_radio_Mover" value='No'><label>No</label>
					</div>
					<div class='txt_cs'>	
						<h6>
						If Yes, you will need to complete & submit Movers Supplemental Application. 
						</h6>
					</div>
					</div>
				</div>
				
				
		
	
	<div class='previous_next_buttons'>
		<input type="button" name="previous" class="previous_OperationDescription action-button" value="Previous" />
		<input type="button" name="next" class="action-button OperationDescription_next" value="Next" />
	</div>
	
	
	
</fieldset>
<!--fieldset class='thirteen'>
	<h2 class="fs-title">Insurance History</h2>
	<div class="container-fluid">
	<div class="row">
    <div class="col-sm-4" >Policy Period (MM/YY)
	<div class="col-sm-2">
	<input type="text" name="policy_perid" value="period1" id="perid_id">
	<label>To</label>
	<input type="text" name="policy_perid_two" value="period1_two" id="perid_id_two">
	</div>
	
	<div class="col-sm-2">
	<input type="text" name="policy_perid_second" value="period1_second" id="perid_id_second">
	<label>To</label>
	<input type="text" name="policy_perid_two_second" value="period1_two_second" id="perid_id_two_second">
	</div>
	
	<div class="col-sm-2">
	<input type="text" name="policy_perid_third" value="period1_third" id="perid_id_third">
	<label>To</label>
	<input type="text" name="policy_perid_two_third" value="period1_two_third" id="perid_id_two_third">
	</div>
	
	
	</div>
    <div class="col-sm-4" >Company Name</div>
	<div>
	<input type="text" name="C_name" value="" id="C_name_input" class="input_clasompany">
	</div>
    <div class="col-sm-2">Liability Losses</div>
    <div class="col-sm-2" >Physical Damage Losses</div>
	
	
<div class='previous_next_buttons'>
		<input type="button" name="previous" class="previous_InsuranceHistory action-button" value="Previous" />
		<input type="button" name="next" class="action-button InsuranceHistory_next" value="Next" />
	</div>
	</div>
	</div>
	
	
</fieldset-->
<fieldset class='Fourteen_s'>
	<h2 class="fs-title">Commodities</h2>
	<div class="container-fluid">
	<div class="row" id='Commodities_data_div'>
		<h3>No Specify Commodities Hauled. </h2>
	
	</div>
	<div class='previous_next_buttons'>
		<input type="button" name="previous" class="previous_Commodities action-button" value="Previous" />
		<input type="button" name="next" class="action-button Commodities_next" value="Submit" />
	</div>
	
	</div>
	
	</fieldset>
<!--fieldset class='fifthteen'>
	<h2 class="fs-title">Cargo Related</h2>
	<div class="container-fluid">
	<div class="row">
	<div class="col-sm-6">
	<div class="form-row">
	<div class="form-holder w-100">
	<label>Limit Requested: </label>
	<div class="Limit">
	<input type="text" name="Limitss_second" class="Limit_second" value="" id="Limit_id_second">
	</div>
	</div>
	</div>
	<div class="form-row">
					<div class="form-holder w-100">
   
	<label>Deductible request :</label>
	<div class="Deductible">
	<input type="text" name="Deductibles_second" class="Deductible_second" value="" id="Deductible_id_second">
	</div>
	</div>
	</div>
	<div class="form-row">
					<div class="form-holder w-100">
	<label>Do you require refrigeration breakdown coverage ? </label>
	<div class="radio">
	 <input type="checkbox" name="refrigeration" value="Yes"> Yes 
	 </div>
	 <div class="radio">
  <input type="checkbox" name="refrigeration" value="No" > No 
	</div>
	</div>
	</div>
	<div class="form-row">
					<div class="form-holder w-100">
	<label>Do you require trailer interchange coverage ? </label>
	<div class="require">
	 <input type="checkbox" name="trailer" value="Yes"> Yes 
  <input type="checkbox" name="trailer" value="No" > No 
	</div>
	</div>
	</div>
	</div>
	
	<div class="col-sm-6">
	
	<div class="form-row">
					<div class="form-holder w-100">
	<label>Do you operate a Freight Brokerage  ? </label>
	<div class="radio">
	 <input type="radio" name="operate_Freight" value="Yes"> Yes 
	 </div>
	 <div class="radio">
	<input type="radio" name="operate_Freight" value="No" > No 
	</div>
	</div>
	</div>
	
	<div class="form-row">
					<div class="form-holder w-100">
	
	<label>Terminal Information :</label><br>
	Do you require coverage for cargo in terminals or at other places where vehicles are left overnight or at weekends either :<br> 
		<label> on Vehicles?   </label>
	 <input type="radio" name="on_Vehicles" value="Yes"> Yes 
	  <input type="radio" name="on_Vehicles" value="No" > No 
	  <label> off Vehicles?   </label>
	  <input type="checkbox" name="off_Vehicles" value="Yes"> Yes 
	  <input type="checkbox" name="off_Vehicles" value="No" > No 
	  </div>
	  
	   <div class='previous_next_buttons'>
		<input type="button" name="previous" class="previous_CargoRelated action-button" value="Previous" />
		<input type="button" name="next" class="action-button CargoRelated_next" value="Next" />
	</div>
	</div>
	</fieldset>
<fieldset class='Sixteen'>
	<h2 class="fs-title">Cargo Final</h2>
	<div class="container-fluid">
	<div class="col-sm-12">
	<h2 class="fs-title">Give details of the number of the vehicles for which cargo coverage is required :</h2>
	<div class="col-sm-4">
	<div class="row">
	  <label>Tractor Units<label> 
	  <input type="number" name="Tractor" value="" id="Tractor_id" class="Tractor_cls">
		</div>
		</div>
		
		<div class="col-sm-4">
	<div class="row">
	  <label>Straight Truck <label> 
	  <input type="number" name="Straight" value="" id="Straight_id" class="Straight_cls">
		</div>
		</div>
		
		<div class="col-sm-4">
	<div class="row">
	  <label>Reefer Trucks <label> 
	  <input type="number" name="Reefer" value="" id="Reefer_id" class="Reefer_cls">
		</div>
		</div>
	</div>
	<div class="col-sm-12">		
		<div class="col-sm-4">
	<div class="row">
	  <label>Tank Trucks <label> 
	  <input type="number" name="Tank" value="" id="Tank_id" class="Tank_cls">
		</div>
		</div>
		
		
		
		<div class="col-sm-4">
	<div class="row">
	  <label>Other power Unit<label> 
	  <input type="text" name="Other" value="" id="Other_id" class="Other_cls">
		</div>
		</div>
		
	
		<div class="col-sm-4">
	<div class="row">
	  <label>Refrigeration Unit 10 yrs old or less<label> 
	  <input type="text" name="Refrigeration" value="" id="Refrigeration_id" class="Refrigeration_cls">
		</div>
		</div>
	</div>
	<div class="col-sm-12">		
		
		<div class="col-sm-4">
	<div class="row">
	  <label>Refrigeration Unit more than to yrs old<label> 
	  <input type="text" name="Refrigeration_sec" value="" id="Refrigeration_id_sec" class="Refrigeration_cls_sec">
		</div>
		</div>
		
		<div class="col-sm-4">
	<div class="row">
	  <label>Flat Bed Trailers<label> 
	  <input type="text" name="Flat_Refrigeration_sec" value="" id="Flat_Refrigeration_id_sec" class="Flat_Refrigeration_cls_sec">
		</div>
		</div>
		
		<div class="col-sm-4">
	<div class="row">
	  <label>Tank Trailers<label> 
	  <input type="text" name="Tank_Refrigeration_sec" value="" id="Tank_Refrigeration_id_sec" class="Tank_Refrigeration_cls_sec">
		</div>
		</div>
	</div>
		
	<div class="col-sm-12">		
			<div class="col-sm-4">
	<div class="row">
	  <label>Double Trailers<label> 
	  <input type="text" name="Double_Refrigeration_sec" value="" id="Double_Refrigeration_id_sec" class="Double_Refrigeration_cls_sec">
		</div>
		</div>
		
		<div class="col-sm-4">
		<div class="row">
	  <label>Total Number of  Trailers<label> 
	  <input type="text" name="Total_Refrigeration_sec" value="" id="Total_Refrigeration_id_sec" class="Total_Refrigeration_cls_sec">
		</div>
		</div>
	
	</div>
	   <div class='previous_next_buttons'>
		<input type="button" name="previous" class="previous_CargoFinal action-button" value="Previous" />
		<input type="button" name="next" class="action-button CargoFinal_next" value="Next" />
		</div>
	</fieldset>
	
	
	<fieldset class='Seventeen'>
	<h2 class="fs-title">FMCSA </h2>
	<div class='row main_form'>
		<div class='col-md-6 left'>
			<div class='main_field_div'>
			<h3 class="fs-subtitle"></h3>
			<div class="form-row">
					<div class="form-holder w-100">
					 <label>Form</label>				
					 <input type="text" name="Form" value="" class="Form_one" id="Form_one">
					</div>

			</div>
				<div class="form-row">
					<div class="form-holder w-100">
					 <label>Type</label>				
					 <input type="text" name="Type" value="" class="Type_one" id="Type_one">
					</div>

				</div>
				<div class="form-row">
					<div class="form-holder w-100">
					 <label>Posted Date</label>				
					 <input type="date" name="Posted" value="" class="datepicker Posted_one" id="Posted_one">
					</div>

				</div>
				
				<div class="form-row">
					<div class="form-holder w-100">
					 <label>policy/Surety Number</label>				
					 <input type="text" name="policy" value="" class="policy_one" id="policy_one">
					</div>

				</div>
				<div class="form-row">
					<div class="form-holder w-100">
				   <label>Coverage Form</label>
					<input type="text" name="Coverage" value="" class="Coverage_class" id="Coverage_id" >
						</div>
				</div>
			</div>	
			</div>	
			<div class='col-md-6 left'>
			<div class='main_field_div'>
					
					<div class="form-row">
					<div class="form-holder w-100">
				   <label>To</label>
					<input type="text" name="To" value="" class="To_class" id="To_id" >
						</div>
					</div>	
					<div class="form-row">
					<div class="form-holder w-100">
				   <label>Cancellation Date</label>
					<input type="date" name="Cancellation" value="" class="Cancellation_class datepicker" id="Cancellation_id" >
						</div>
					</div>
					
					<div class="form-row">
					<div class="form-holder w-100">
				   <label>Effective Date</label>
					<input type="date" name="Effective" value="" class="Effective_class datepicker" id="Effective_id" >
						</div>
					</div>
					<div class="form-row">
					<div class="form-holder w-100">
				   <label>Insurence carrier</label>
					<input type="text" name="Insurence" value="" class="Insurence_class" id="Insurence_id" >
						</div>
					</div>
				</div>	
				</div>	
				</div>

	
	   <div class='previous_next_buttons'>
		<input type="button" name="previous" class="previous_PDFData action-button" value="Previous" />
		<input type="button" name="next" class="action-button PDFData_next" value="Submit" />
		</div>
		
		
		
		
		</div>
	</fieldset-->
	<fieldset class='eighteen'>
	<div class='row main_form'>
		
        <br><br> <h2 style="color:#0fad00">ThankYou</h2>
        <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
		 <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
		   <span class="swal2-success-line-tip"></span>
		   <span class="swal2-success-line-long"></span>
		   <div class="swal2-success-ring"></div> 
		   <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
		   <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
		  </div>
        
        <p style="font-size:17px;color:#5C5C5C;">Thank You for your time. We will proceed in further verification and keep you posted.</p>
		
		</div>

	</fieldset>
</form>



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
						<input type="text" class="form-control datepickerDOB" name="new_driver_dob" id='new_driver_dob'  placeholder='<?php echo date('m/d/Y');?>'>
					
					</div>
					<div class="form-group">
					  <label for="username" class="control-label">Marital Status</label>
					
					 <div class='radio'>
						<input type="radio" name="new_driver_marital_status" class="form-control new_driver_marital_status" value='Married' >
						<label>Married</label>
					</div>
					 <div class='radio'>
						<input type="radio" name="new_driver_marital_status" class="form-control new_driver_marital_status" checked value='Single'>
						<label>Single</label>
					</div>
					
					  </div>
					<div class="form-group">
					  <label for="username" class="control-label">License State</label>
					  <select name='new_driver_license_state' class='form-control'>
					  <option value=" ">Select State</option>
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
								<select name="new_driver_commercial" id="new_driver_commercial" class='form-control'>
										<option selected="selected" value="No">No</option>
										<option value="Yes">Yes</option>

								</select>
					
							</div>
							<div class="form-group">
								<label for="username" class="control-label">Years of Exp.</label>
								<input type="text" class="form-control" name="new_driver_Exp" id='new_driver_Exp'>
					
							</div>
							<div class="form-group">
							<label for="username" class="control-label">Date of Hire</label>
							<input type="text" class="form-control datepicker" name="new_driver_hire_date" id='new_driver_hire_date' placeholder='Select Date' placeholder='<?php echo date('m/d/Y');?>'>
					
							</div>
							<div class="form-group">
								<label for="username" class="control-label">Points</label>
								<input type="text" class="form-control" name="new_driver_points" id='new_driver_points'>
					
							</div>
							
							<div class="form-group">
								<label for="username" class="control-label">Backup Driver</label>
								<select name="add_driver_Backup" id="add_driver_Backup" class='form-control'>
										<option selected="selected" value="No">No</option>
										<option value="Yes">Yes</option>

							</select>
							</div>
							
							
							<div class="form-group">
								<label for="username" class="control-label">Driver Owner</label>
								<select name="add_driver_Owner" id="add_driver_Owner" class='form-control'>
										<option  value="No">No</option>
										<option selected="selected" value="Yes">Yes</option>

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
							<!--div class="form-group" id='driver_case_no'>
								<label for="username" class="control-label">Case Number</label>
								<input type="text" class="form-control" name="driver_case_no">
					
							</div-->
							
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
        <h4 class="modal-title">Edit Driver</h4>
      </div>
	  
      <div class="modal-body">
	  <form id="Edit_Driver_form" method="POST" action="#" novalidate="novalidate">
		<div class="row">
		<div class="col-xs-12">
		  <div class="well">
					<div class="form-group">
					  <label for="username" class="control-label">First Name</label>
						<input type="text" class="form-control" name="edit_driver_first" id='edit_driver_first'>
					
					</div>
					<div class="form-group">
					  <label for="username" class="control-label">Middle Initial</label>
						<input type="text" class="form-control" name="edit_driver_middle" id='edit_driver_middle'>
					
					</div>
					<div class="form-group">
					  <label for="username" class="control-label">Last Name</label>
						<input type="text" class="form-control" name="edit_driver_last" id='edit_driver_last'>
					
					</div>
					<div class="form-group">
					  <label for="username" class="control-label">Date of Birth/Age</label>
						<input type="text" class="form-control datepickerDOB" name="edit_driver_dob" id='edit_driver_dob'>
					
					</div>
					<div class="form-group">
					  <label for="username" class="control-label">Marital Status</label>
					
					 <div class='radio'>
						<input type="radio" name="edit_driver_marital_status" class="form-control edit_driver_marital_status Married" value='Married'>
						<label>Married</label>
					</div>
					 <div class='radio'>
						<input type="radio" name="edit_driver_marital_status" class="form-control edit_driver_marital_status Single"  value='Single'>
						<label>Single</label>
					</div>
					
					  </div>
					<div class="form-group">
					  <label for="username" class="control-label">License State</label>
					  <select name='edit_driver_license_state' class='form-control' id='edit_driver_license_state'>
					  	<option value="">Select State</option>
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
								<input type="text" class="form-control" name="edit_driver_licence" id='edit_driver_licence'>
					
							</div>
							<div class="form-group">
								<label for="username" class="control-label">Commercial Driver's License (CDL)</label>
								<select name="edit_driver_commercial" id="edit_driver_commercial" class='form-control'>
										<option selected="selected" value="No">No</option>
										<option value="Yes">Yes</option>

								</select>
					
							</div>
							<div class="form-group">
								<label for="username" class="control-label">Years of Exp.</label>
								<input type="text" class="form-control" name="edit_driver_Exp" id='edit_driver_Exp'>
					
							</div>
							<div class="form-group">
							<label for="username" class="control-label">Date of Hire</label>
							<input type="text" class="form-control datepicker" name="edit_driver_hire_date" id='edit_driver_hire_date' placeholder='Select Date'>
					
							</div>
							<div class="form-group">
								<label for="username" class="control-label">Points</label>
								<input type="text" class="form-control" name="edit_driver_points" id='edit_driver_points'>
					
							</div>
							
							<div class="form-group">
								<label for="username" class="control-label">Backup Driver</label>
								<select name="edit_driver_Backup" id="edit_driver_Backup" class='form-control'>
										<option selected="selected" value="No">No</option>
										<option value="Yes">Yes</option>

							</select>
							</div>
							
							
							<div class="form-group">
								<label for="username" class="control-label">Driver Owner</label>
								<select name="edit_driver_Owner" id="edit_driver_Owner" class='form-control'>
										<option  value="No">No</option>
										<option  value="Yes">Yes</option>

							</select>
							</div>
							
							<div class="form-group">
								<label for="username" class="control-label">Is an SR22 required?</label>
								<div class='radio'>
									<input type="radio" name="edit_driver_SR22" class="form-control edit_driver_SR22 SR22_Yes" value='Yes'>
									<label>Yes</label>
								</div>
								 <div class='radio'>
									<input type="radio" name="edit_driver_SR22" class="form-control edit_driver_SR22 SR22_No"  value='No'>
									<label>No</label>
								</div>
					
							</div>
						</div>
					</div>
				</div>
			</div>
			<input type='hidden' id='id_driver_to_update' name='id_driver_to_update'/>
		<div class="modal-footer">
			<button type="button" class="btn btn-success" id='update_driver_button'>Update</button>
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
	  <form id="Add_new_vehicle" method="POST" action="#" novalidate="novalidate">
      <div class="modal-body">
		<div class="row">
		<div class="col-xs-12">
		 <div class='well'>
			 
					<div class="form-group">
					  <label for="username" class="control-label">Type</label>
					<?php 
						$response_vehicles= $handleFunctionsObject->vehicle_type();
						foreach($response_vehicles as $responsedata){?>
					 <div class='radio'>
						<input type="radio" name="vahicle_type" class="vahicle_type" value='<?php echo $responsedata['category_type'];?>'
							data-id="<?php echo $responsedata['id'];?>" <?php if($responsedata['id']==1){echo 'checked';}?>>
						<label><?php echo $responsedata['category_type'];?></label>
					</div>
					<?php }
						?>
					  </div>
					<div class="form-group">
					  <label for="VIN" class="control-label">What is the Full VIN Number?</label>
					  <input type="text" class="form-control" id="vehicle_VIN" name="vehicle_VIN" value="" required="">
					  <span class="help-block"></span>
					</div>
					
					<div class="form-group vehicle_Gross_weight_div" id='vehicle_Gross_weight_div'>
					  <label for="Gross" class="control-label">Gross weight</label>
					  <input type="text" class="form-control" id="vehicle_Gross_weight" name="vehicle_Gross_weight" value="" required="">
					  <span class="help-block"></span>
					</div>
					<div class="form-group vehicle_Longest_tip_div" id='vehicle_Longest_tip_div'>
					  <label for="vehicle_Longest_tip" class="control-label">Longest Trip(One Way Miles)</label>
					  <input type="text" class="form-control" id="vehicle_Longest_tip" name="vehicle_Longest_tip" value="" required="">
					  <span class="help-block"></span>
					</div>
					<div class="form-group vehicle_Destination_City_div" id='vehicle_Destination_City_div'>
					  <label for="City of Destination" class="control-label">City of Destination(Of Longest Haul)</label>
					  <input type="text" class="form-control" id="vehicle_Destination_City" name="vehicle_Destination_City" value="" required="">
					  <span class="help-block"></span>
					</div>
					
					
					<div class="form-group">
					  <label for="VIN" class="control-label">Category</label>
					<select name="C2VehicleDetails_category" id="C2VehicleDetails_category" class="form-control C2VehicleDetails_category">
					<option value=""></option>
						<?php $response_vehicles_cat= $handleFunctionsObject->VehicleCategory(1);					
							foreach($response_vehicles_cat as $responsedata){?>	
							<option data-id="<?php echo $responsedata['id'];?>" value="<?php echo $responsedata['category'];?>"><?php echo $responsedata['category'];?></option>
						<?php }
						?>
					</select>
					</div>
					<div class="form-group category_sub " id='category_sub' style='display:none;'>
					  <label for="VIN" class="control-label">Sub Category</label>
					<select name="C2VehicleDetails_subcategory" id="C2VehicleDetails_subcategory" class="form-control C2VehicleDetails_subcategory">
					
					</select>
					</div>
					<div class="form-group">
					<label for="VIN" class="control-label">Year</label>
					<select name="C2VehicleDetails_year" id="C2VehicleDetails_year" class="form-control C2VehicleDetails_year">
							<option value=""></option>
						
					</select>
					</div>
					<div class="form-group make_div_select">
					  <label for="make" class="control-label">Make</label>
					<select name="C2VehicleDetails_make" id="C2VehicleDetails_make" class="form-control C2VehicleDetails_make">
							<option value=""></option>
					
					</select>
					</div>
					<div class="form-group make_div" style="display:none;" >
					<label for='make' class='control-label'>Enter Make</label>
					<input type='text' name='C2VehicleDetails_make_name' id='C2VehicleDetails_make_name' class='form-control C2VehicleDetails_make_name'/>
					</div>
					<div class="form-group model_div_select" >
					  <label for="VIN" class="control-label">Model</label>
					<select name="C2VehicleDetails_model" id="C2VehicleDetails_model" class="form-control C2VehicleDetails_model">
							<option value=""></option>
						
					</select>
					</div>
					<div class="form-group model_div" style="display:none;" >
					<label for='model' class='control-label'>Enter Model</label><input type='text' name='C2VehicleDetails_model_name' id='C2VehicleDetails_model_name' class='form-control C2VehicleDetails_model_name'/>
					</div>
					<div class="form-group body_div_select_body_style" >
					  <label for="Body" class="control-label">Body Style</label>
					<select name="C2VehicleDetails_body" id="C2VehicleDetails_body" class="form-control C2VehicleDetails_body">
							<option value=""></option>
						
					</select>
					</div>
					<div class="form-group Garaging_div_select" >
					  <label for="ZIP" class="control-label">Garaging ZIP Code</label>
					
					 <input type="text" class="form-control C2VehicleDetails_GaragingZIPCode" id="C2VehicleDetails_GaragingZIPCode" name="C2VehicleDetails_GaragingZIPCode" value="" required="">
					</div>
					
					
					<div class="form-group Radius_div_select" >
					  <label for="Radius" class="control-label">Radius (One Way)</label>
						<select name="C2VehicleDetails_Radius" id="C2VehicleDetails_Radius" class="form-control C2VehicleDetails_Radius">
							<option value="50">50 miles</option>
						<option selected="selected" value="100 miles">100 miles</option>
						<option value="200 miles">200 miles</option>
						<option value="300 miles">300 miles</option>
						<option value="500 miles">500 miles</option>
						<option value="999 Unlimited miles">Unlimited miles</option>
						
						</select>
					</div>
					<div class="form-group Trailer_div_select" style='display:none'>
					  <label for="Radius" class="control-label">Trailer Type</label>
						<select name="C2VehicleDetails_Trailer" id="C2VehicleDetails_Trailer" class="form-control C2VehicleDetails_Trailer">
						<option value="owned" selected="selected">Owned</option>
						<option  value="non-owned">Non-owned</option>
						
						</select>
					</div>
					<div class="form-group trailer_value_div_select" style='display:none'>
					  <label for="Trailer_Value_div" class="control-label">What is the value needed for the non-owned trailer?</label>
						<input type='text' name="trailer_value" id="trailer_value" class="form-control trailer_value"/>
					</div>
					
					
					<div class="form-group body_vehicle_used" >
					  <label for="Vehicle Sub-Type" class="control-label">Is this vehicle used for business, personal or both?</label>
					  <div class='radio'>
									<input type="radio" name="vehicle_used_for" class="form-control vehicle_used_for" value='0' checked>
									<label>Business</label>
								</div>
								
					<div class='radio'>
									<input type="radio" name="vehicle_used_for" class="form-control vehicle_used_for" value='1'>
									<label>Business/Personal</label>
								</div>
					<div class='radio'>
									<input type="radio" name="vehicle_used_for" class="form-control vehicle_used_for" value='1'>
									<label>Personal Only</label>
						</div>
					</div>
					<div class="form-group body_vehicle_used" >
					  <label for="Vehicle Sub-Type" class="control-label">Does this vehicle need comprehensive or collision coverage?</label>
					  <div class='radio'>
									<input type="radio" name="vehicle_used_comprehensive" class="form-control vehicle_used_comprehensive" value='0'>
									<label>Yes</label>
								</div>
								
					<div class='radio'>
									<input type="radio" name="vehicle_used_comprehensive" class="form-control vehicle_used_comprehensive" value='1' checked>
									<label>No</label>
								</div>
					
					</div>
					<div class="form-group body_modifications" >
					  <label for="Vehicle Sub-Type" class="control-label">What is the total value of all permanently attached equipment (including aftermarket parts, mounted equipment and modifications)?</label>
						<div class='radio'>
									<input type="radio" name="vehicle_modifications" class="form-control vehicle_modifications" value='$0 to $2,000' checked>
									<label>$0 to $2,000</label>
						</div>
						<div class='radio'>
									<input type="radio" name="vehicle_modifications" class="form-control vehicle_modifications" value='More than $2,000'>
									<label>More than $2,000</label>
						</div>
					
					</div>
					<div class="form-group body_vehicle_used" >
					  <label for="Vehicle Sub-Type" class="control-label">Loss Payee:</label>
					  <select name="C2VehicleDetails_Loss" id="C2VehicleDetails_Loss" class="form-control C2VehicleDetails_Loss">
							<?php
							$losspayee=$handleFunctionsObject->VehicleLosspayee();
							
							foreach($losspayee as $res){
								?>
							<option value="<?php echo $res['loss_payee'];?>"><?php echo $res['loss_payee'];?></option>
						
							<?php } ?>
						</select>
					</div>
					<div class='loss_payee_yes' style='display:none;'>
					<div class="form-group " >
					  <label for="Vehicle Sub-Type" class="control-label">Full Name</label>
					   <input type="text" class="form-control loss_payee_full_name" id="loss_payee_full_name" name="loss_payee_full_name" value="" required="">
					</div>
					<div class="form-group " >
					  <label for="Vehicle Sub-Type" class="control-label">Address</label>
					   <textarea class="form-control loss_payee_address" id="loss_payee_address" name="loss_payee_address" ></textarea> 
					</div>
					</div>
					<input type='hidden' id='last_vehicle_graging_zip' class='last_vehicle_graging_zip'>
					 
			</div>
		</div>
       </div>
      </div>
      <div class="modal-footer">
	  <button type="button" type='button' class="btn btn-success" id='vehicles_add_button'>Add</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		
      </div>
	  </form>
    </div>
	
  
</div>
</div>
<!--------update vehicle----------------------------->
<div id="vehicle_Edit_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Vehicle</h4>
      </div>
	  <form id="edit_vehicle" method="POST" action="#" novalidate="novalidate">
      <div class="modal-body">
		<div class="row">
		<div class="col-xs-12">
		 <div class='well'>
			 
					<div class="form-group">
					  <label for="username" class="control-label">Type</label>
					<?php 
						$response_vehicles= $handleFunctionsObject->vehicle_type();
						foreach($response_vehicles as $responsedata){?>
					 <div class='radio'>
						<input type="radio" name="vahicle_type" class="vahicle_type" value='<?php echo $responsedata['category_type'];?>' id ='<?php echo $responsedata['category_type'];?>'
							data-id="<?php echo $responsedata['id'];?>" <?php if($responsedata['id']==1){echo 'checked';}?>>
						<label><?php echo $responsedata['category_type'];?></label>
					</div>
					<?php }
						?>
					  </div>
					
					<div class="form-group">
					  <label for="VIN" class="control-label">What is the Full VIN Number?</label>
					  <input type="text" class="form-control" id="vehicle_VIN_edit" name="vehicle_VIN" value="" required="">
					  <span class="help-block"></span>
					</div>
					<div class="form-group vehicle_Gross_weight_div">
					  <label for="Gross" class="control-label">Gross weight</label>
					  <input type="text" class="form-control" id="vehicle_Gross_weight_edit" name="vehicle_Gross_weight" value="" required="">
					  <span class="help-block"></span>
					</div>
					<div class="form-group vehicle_Longest_tip_div">
					  <label for="vehicle_Longest_tip" class="control-label">Longest Trip(One Way Miles)</label>
					  <input type="text" class="form-control" id="vehicle_Longest_tip_edit" name="vehicle_Longest_tip" value="" required="">
					  <span class="help-block"></span>
					</div>
					<div class="form-group vehicle_Destination_City_div">
					  <label for="City of Destination" class="control-label">City of Destination(Of Longest Haul)</label>
					  <input type="text" class="form-control" id="vehicle_Destination_City_edit" name="vehicle_Destination_City" value="" required="">
					  <span class="help-block"></span>
					</div>
					
					
					<div class="form-group">
					  <label for="VIN" class="control-label">Category</label><p id='current_selected_cat'></p>
					<select name="C2VehicleDetails_category" id="C2VehicleDetails_category_edit" class="form-control C2VehicleDetails_category">
					<option value=""></option>
						<?php $response_vehicles_cat= $handleFunctionsObject->VehicleCategory(1);					
							foreach($response_vehicles_cat as $responsedata){?>	
							<option data-id="<?php echo $responsedata['id'];?>" value="<?php echo $responsedata['category'];?>"><?php echo $responsedata['category'];?></option>
						<?php }
						?>
					</select>
					</div>
					<div class="form-group category_sub" id='category_sub' style='display:none;'>
					  <label for="VIN" class="control-label">Sub Category</label>
					<select name="C2VehicleDetails_subcategory" id="C2VehicleDetails_subcategory_edit" class="form-control C2VehicleDetails_subcategory">
					
					</select>
					</div>
					<div class="form-group">
					<label for="VIN" class="control-label">Year</label><p id='current_selected_year'></p>
					<select name="C2VehicleDetails_year" id="C2VehicleDetails_year_edit" class="form-control C2VehicleDetails_year">
							<option value=""></option>
						
					</select>
					</div>
					<div class="form-group make_div_select">
					  <label for="make" class="control-label">Make</label><p id='current_selected_make'></p>
					<select name="C2VehicleDetails_make" id="C2VehicleDetails_make_edit" class="form-control C2VehicleDetails_make">
							<option value=""></option>
					
					</select>
					</div>
					<div class="form-group make_div" style="display:none;" >
					<label for='make' class='control-label'>Enter Make</label>
					<input type='text' name='C2VehicleDetails_make_name' id='C2VehicleDetails_make_name_edit' class='form-control C2VehicleDetails_make_name'/>
					</div>
					<div class="form-group model_div_select" >
					  <label for="VIN" class="control-label">Model</label><p id='current_selected_model'></p>
					<select name="C2VehicleDetails_model" id="C2VehicleDetails_model_edit" class="form-control C2VehicleDetails_model">
							<option value=""></option>
						
					</select>
					</div>
					<div class="form-group model_div" style="display:none;" >
					<label for='model' class='control-label'>Enter Model</label><input type='text' name='C2VehicleDetails_model_name' id='C2VehicleDetails_model_name_edit' class='form-control C2VehicleDetails_model_name'/>
					</div>
					<div class="form-group body_div_select_body_style" >
					  <label for="Body" class="control-label">Body Style</label>
					<select name="C2VehicleDetails_body" id="C2VehicleDetails_body_edit" class="form-control C2VehicleDetails_body">
							<option value=""></option>
						
					</select>
					</div>
					<div class="form-group body_div_select_graging" >
					  <label for="ZIP" class="control-label">Garaging ZIP Code</label>
					
					 <input type="text" class="form-control C2VehicleDetails_GaragingZIPCode" id="C2VehicleDetails_GaragingZIPCode_edit" name="C2VehicleDetails_GaragingZIPCode" value="" required="">
					</div>
					
					<div class="form-group Radius_div_select" >
					  <label for="Radius" class="control-label">Radius (One Way)</label>
						<select name="C2VehicleDetails_Radius" id="C2VehicleDetails_Radius_edit" class="form-control C2VehicleDetails_Radius">
							<option value="50">50 miles</option>
						<option selected="selected" value="100 miles">100 miles</option>
						<option value="200 miles">200 miles</option>
						<option value="300 miles">300 miles</option>
						<option value="500 miles">500 miles</option>
						<option value="999 Unlimited miles">Unlimited miles</option>
						
						</select>
					</div>
					<div class="form-group Trailer_div_select" style='display:none'>
					  <label for="Radius" class="control-label">Trailer Type</label>
						<select name="C2VehicleDetails_Trailer" id="C2VehicleDetails_Trailer" class="form-control C2VehicleDetails_Trailer">
						<option value="owned" selected="selected">Owned</option>
						<option  value="non-owned">Non-owned</option>
						
						</select>
					</div>
					<div class="form-group trailer_value_div_select" style='display:none'>
					  <label for="Trailer_Value_div" class="control-label">What is the value needed for the non-owned trailer?</label>
						<input type='text' name="trailer_value" id="trailer_value" class="form-control trailer_value"/>
					</div>
					<div class="form-group body_vehicle_used" >
					  <label for="Vehicle Sub-Type" class="control-label">Is this vehicle used for business, personal or both?</label>
					  <div class='radio'>
									<input type="radio" name="vehicle_used_for" class="form-control vehicle_used_for" value='Business' checked>
									<label>Business</label>
								</div>
								
					<div class='radio'>
									<input type="radio" name="vehicle_used_for" class="form-control vehicle_used_for" value='Business/Personal'>
									<label>Business/Personal</label>
								</div>
					<div class='radio'>
									<input type="radio" name="vehicle_used_for" class="form-control vehicle_used_for" value='Personal Only'>
									<label>Personal Only</label>
						</div>
					</div>
					<div class="form-group body_vehicle_used" >
					  <label for="Vehicle Sub-Type" class="control-label">Does this vehicle need comprehensive or collision coverage?</label>
					  <div class='radio'>
									<input type="radio" name="vehicle_used_comprehensive" class="form-control vehicle_used_comprehensive" value='Yes'>
									<label>Yes</label>
								</div>
								
					<div class='radio'>
									<input type="radio" name="vehicle_used_comprehensive" class="form-control vehicle_used_comprehensive" value='No' checked>
									<label>No</label>
								</div>
					
					</div>
					<div class="form-group body_modifications" >
					  <label for="Vehicle Sub-Type" class="control-label">What is the total value of all permanently attached equipment (including aftermarket parts, mounted equipment and modifications)?</label>
						<div class='radio'>
									<input type="radio" name="vehicle_modifications" class="form-control vehicle_modifications" value='$0 to $2,000' checked>
									<label>$0 to $2,000</label>
						</div>
						<div class='radio'>
									<input type="radio" name="vehicle_modifications" class="form-control vehicle_modifications" value='More than $2,000'>
									<label>More than $2,000</label>
						</div>
					
					</div>
					<div class="form-group body_vehicle_used" >
					  <label for="Vehicle Sub-Type" class="control-label">Loss Payee:</label>
					  <select name="C2VehicleDetails_Loss" id="C2VehicleDetails_Loss_edit" class="form-control C2VehicleDetails_Loss">
							
							<?php
							$losspayee=$handleFunctionsObject->VehicleLosspayee();
							
							foreach($losspayee as $res){
								?>
							<option value="<?php echo $res['loss_payee'];?>"><?php echo $res['loss_payee'];?></option>
						
							<?php } ?>
						</select>
					</div>
					<div class='loss_payee_yes' style='display:none;'>
					<div class="form-group " >
					  <label for="Vehicle Sub-Type" class="control-label">Full Name</label>
					   <input type="text" class="form-control loss_payee_full_name" id="loss_payee_full_name" name="loss_payee_full_name" value="" required="">
					</div>
					<div class="form-group " >
					  <label for="Vehicle Sub-Type" class="control-label">Address</label>
					   <textarea class="form-control loss_payee_address" id="loss_payee_address" name="loss_payee_address" ></textarea> 
					</div>
					</div>
				<input type='hidden' id='vehicle_id_to_update' name='vehicle_id_to_update'>
			  
			</div>
		</div>
       </div>
      </div>
      <div class="modal-footer">
	  <button type="button" type='button' class="btn btn-success" id='vehicles_update_button'>Update</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		
      </div>
	  </form>
    </div>
	
  
</div>
</div>

</body>
</html>
