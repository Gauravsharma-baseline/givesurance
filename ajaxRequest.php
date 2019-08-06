 <?php
include('functions.php');
$zoho_client_id='1000.G5ADCREZLWKQ37764DHC3ZZXAW4VEH';
$zoho_client_secret='88c42ac4b05a8e341731956a233d89cb0399e7f3cb';
$handleFunctionsObject = new handleFunctions;
$old_access_token = file_get_contents("access_token.txt");
$refresh_token = file_get_contents("refresh_token.txt");
	if(ISSET($_POST['getZohoContact']) && $_POST['getZohoContact']=='success'){
		//$response=array();
		$phone_number=preg_replace("/[^0-9]/", "", $_POST['phone_number'] );
			 $url = "Contacts/search?phone=$phone_number";
			$data = "";
			$check_token_valid =  $handleFunctionsObject->zoho_curl($url,"GET",$data,$old_access_token);
			if(ISSET($check_token_valid['code']) && $check_token_valid['code'] == "INVALID_TOKEN"){
				$url = "token";
				$data = array("refresh_token"=>$refresh_token,"client_id"=>"".$zoho_client_id."","client_secret"=>"".$zoho_client_secret."","grant_type"=>"refresh_token");
				$get_new_token = $handleFunctionsObject-> zoho_auth($url,"POST",$data);
				if(isset($get_new_token['access_token'])){
					file_put_contents("access_token.txt",$get_new_token['access_token']);
				}
				if(isset($get_new_token['refresh_token'])){
					file_put_contents("refresh_token.txt",$get_new_token['refresh_token']);
				}
				$old_access_token = file_get_contents("access_token.txt");
				 $url = "Contacts/search?phone=$phone_number";
				$data = "";
				$check_token_valid =  $handleFunctionsObject->zoho_curl($url,"GET",$data,$old_access_token);
				
				 if(!empty($check_token_valid['data'][0]['id'])){
				    $contactId = $check_token_valid['data'][0]['id'];
					$dot = $check_token_valid['data'][0]['USDOT_associated_with_the_insured_s_business'];
					$mc	=	$check_token_valid['data'][0]['MC_MX_FF_Number_s'];
					$url = "Contacts/$contactId";
					$data = "";
					$contactdata =  $handleFunctionsObject->zoho_curl($url,"GET",$data,$old_access_token);	
					$response	=	array('contactId'=>$contactId,'Dot'=>$dot,'MC'=>$mc,'conatctData'=>$contactdata['data'][0]);
				}else{
					$url = "Contacts";
					$Contactdata = '{
					"data": [{
					"Phone":  "'.$phone_number.'" ,
					"Last_Name":  "custom" ,
					
					}]}';
					@$contactresponse =  $handleFunctionsObject->zoho_curl($url,"POST",$Contactdata,$old_access_token);
					  if(!empty($contactresponse['data'][0]['details']['id'])){
				    $contactId=$contactresponse['data'][0]['details']['id'];
				   
					$response=array('contactId'=>$contactId,'Dot'=>'','MC'=>'','conatctData'=>'');
					}else{
						 $response=0;
					}  
				} 
			} else{
			 	if(!empty($check_token_valid['data'][0]['id'])){
				    $contactId=$check_token_valid['data'][0]['id'];
					$dot=$check_token_valid['data'][0]['USDOT_associated_with_the_insured_s_business'];
					$mc=$check_token_valid['data'][0]['MC_MX_FF_Number_s'];
					$url = "Contacts/$contactId";
					$data = "";
					$contactdata =  $handleFunctionsObject->zoho_curl($url,"GET",$data,$old_access_token);	
					$response=array('contactId'=>$contactId,'Dot'=>$dot,'MC'=>$mc,'conatctData'=>$contactdata['data'][0]);
				}else{
					$url = "Contacts";
					$Contactdata = '{
					"data": [{
					"Phone":  "'.$phone_number.'" ,
					"Last_Name":  "custom"
					
					}]}';
					@$contactresponse =  $handleFunctionsObject->zoho_curl($url,"POST",$Contactdata,$old_access_token);
					  if(!empty($contactresponse['data'][0]['details']['id'])){
						   $contactId=$contactresponse['data'][0]['details']['id'];
					$response=array('contactId'=>$contactId,'Dot'=>'','MC'=>'','conatctData'=>'');
					}else{
						$response=0;
					}  
				} 
				
			}
			
			echo json_encode($response);
	}
 
	if(ISSET($_POST['getSaferData']) && $_POST['getSaferData']=='success'){
		@$response=$handleFunctionsObject->getDataFromSafer($_POST['searchedNumber']);
		if($response==0){
			echo 0;	
		}else{
		
			 $contacturl = "Contacts/".$_POST['contactId'];
			 $Contactdata = '{
			"data": [{
            "USDOT_associated_with_the_insured_s_business":  "'.$_POST['searchedNumber'].'" 
            
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
		
			if($zohoResponse['data'][0]['code'] == "SUCCESS"){
				echo json_encode($response);
			}
			
			
		}
	}
	if(ISSET($_POST['getMcData']) && $_POST['getMcData']=='success'){
		 $contacturl = "Contacts/".$_POST['contactId'];
			 $Contactdata = '{
			"data": [{
            "MC_MX_FF_Number_s":  "'.$_POST['604145'].'" 
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
		
			if($zohoResponse['data'][0]['code'] == "SUCCESS"){
				echo json_encode($zohoResponse);
			} 
			echo json_encode($_POST);
	}
	if(ISSET($_POST['physical_address']) && $_POST['physical_address']=='success'){
		 $contacturl = "Contacts/".$_POST['contactId'];
			 $Contactdata = '{
			"data": [{
            "Home_Address":  "'.$_POST['physicaladdress'].'" 
            
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
		
			if($zohoResponse['data'][0]['code'] == "SUCCESS"){
				echo json_encode($zohoResponse);
			}
	}
	if(ISSET($_POST['mailing_address']) && $_POST['mailing_address']=='success'){
		$contacturl = "Contacts/".$_POST['contactId'];
			 $Contactdata = '{
			"data": [{
            "Mailing_Address":  "'.$_POST['mailingaddress'].'" ,
            "ZIP_Code_Two":  "'.$_POST['mailing_Postal'].'" ,
            "State_Two":  "'.$_POST['mailing_state'].'" ,
            "City_Two":  "'.$_POST['mailing_city'].'" 
            
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
		
			if($zohoResponse['data'][0]['code'] == "SUCCESS"){
				echo json_encode($zohoResponse);
			}
	}
	if(ISSET($_POST['safer_data_next']) && $_POST['safer_data_next']=='success'){
		 $contacturl = "Contacts/".$_POST['contactId'];
			/*  $Contactdata = '{
			"data": [{
            "Mailing_Address":  "'.$_POST['mailingaddress'].'" ,
            "ZIP_Code_Two":  "'.$_POST['mailingaddress'].'" ,
            "State_Two":  "'.$_POST['mailing_state'].'" ,
            "City_Two":  "'.$_POST['mailing_city'].'" ,
            
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
		
			if($zohoResponse['data'][0]['code'] == "SUCCESS"){
				echo json_encode($zohoResponse);
			} */
		 
		 echo json_encode($_POST);
		 
	}
	if(ISSET($_POST['general_data_next']) && $_POST['general_data_next']=='success'){
		$contacturl = "Contacts/".$_POST['contactId'];
		parse_str($_POST['dataform'], $form_data);
		/*  echo '<pre>';
			print_r($form_data);
		echo '<pre>'; */
			  $Contactdata = '{
			"data": [{
            "Agent_Code":  "'.$form_data['agent_code'].'" ,
            "Policy_Effective_Date":  "'.$form_data['Policy_Effective'].'" ,
            "Is_the_customer_currently_insured_with_Progressive":  "'.$form_data['customer_Progressive_Commercial'].'" ,
            "Structure":  "'.$form_data['Business_Organization_Structure'].'" ,
            "Do_you_have_a_DBA":  "'.$form_data['have_DBA'].'" ,
            "USDOT_Assigned_to":  "'.$form_data['USDOT_Assigned_to'].'" ,
            "Does_the_information_assigned_to_this_USDOT_match":  "'.$form_data['is_match_USDOT'].'" ,
            "First_Name1":  "'.$form_data['Insured_first_name'].'" ,
            "Middle_Initial":  "'.$form_data['Insured_Middle_name'].'" ,
			"DOB":  "'.$form_data['Insured_DOB'].'" ,
            "Last_Name1":  "'.$form_data['Insured_Last_name'].'" ,
            "Suffix":  "'.$form_data['Insured_Suffix'].'" ,
            "First_Name_Two":  "'.$form_data['Financial_First_name'].'" ,
            "Last_Name_Two":  "'.$form_data['Financial_Last_name'].'" ,
            "Suffix_Two":  "'.$form_data['Financial_Suffix'].'" ,
			"ZIP_Code":  "'.$form_data['Financial_zipcode'].'" ,
			"City":  "'.$form_data['Financial_City'].'" ,
			"State":  "'.$form_data['Financial_State'].'" ,
			"Home_Address":  "'.$form_data['Financial_Home_address'].'" ,
			"Social_Security_Number":  "'.$form_data['social_security_number'].'" ,
            "Involved_in_the_daily_operation_of_the_business":  "'.$form_data['is_Involved_daily_operation'].'" ,
            "Designate_Spouse_as_a_Named_Insured":  "'.$form_data['Insured_Designate_Spouse'].'" ,
            "Specify_Commodities_Hauled":  "'.$form_data['Specify_Commodities_Hauled'].'" ,
            "Are_any_listed_vehicles_used_to_haul_steel":  "'.$form_data['is_vehicles_haul_steel'].'" ,
            "listed_vehicles_or_the_load_require_a_placard":  "'.$form_data['is_vehicles_placard'].'" ,
            "Insured_s_Phone":  "'.$form_data['Contact_Insured_phone'].'" ,
            "Mailing_Address":  "'.$form_data['Contact_Insured_Mailing'].'" ,
            "State_Two":  "'.$form_data['Contact_Insured_State'].'" ,
            "ZIP_Code_Two":  "'.$form_data['Contact_Insured_ZIP_code'].'" ,
            "City_Two":  "'.$form_data['Contact_Insured_City'].'", 
            "E_mail_Address":  "'.$form_data['Contact_Insured_email'].'", 
            "Date_Two":  "'.$form_data['Financial_dob'].'" ,
            "Yrs_in_Trucking_Industry":  "'.$form_data['Yrs_in_Trucking_Industry'].'" ,
            "Yrs_in_business":  "'.$form_data['Yrs_in_business'].'" ,
            "If_New_Venture_Please_list_previous_industry_emplo":  "'.$form_data['previous_industry_employment'].'" ,
            "Payment_Options":  "'.$form_data['payment_option_value'].'" 
            
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
			if(($zohoResponse) && $zohoResponse['data'][0]['code'] == "SUCCESS"){
				echo json_encode($zohoResponse);
			}elseif (ISSET($zohoResponse['code']) && $zohoResponse['code'] == "INVALID_TOKEN"){
				$url = "token";
				$data = array("refresh_token"=>$refresh_token,"client_id"=>"".$zoho_client_id."","client_secret"=>"".$zoho_client_secret."","grant_type"=>"refresh_token");
				$get_new_token = $handleFunctionsObject-> zoho_auth($url,"POST",$data);
				if(isset($get_new_token['access_token'])){
					file_put_contents("access_token.txt",$get_new_token['access_token']);
				}
				if(isset($get_new_token['refresh_token'])){
					file_put_contents("refresh_token.txt",$get_new_token['refresh_token']);
				}
				$old_access_token = file_get_contents("access_token.txt");
				@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
				if($zohoResponse['data'][0]['code'] == "SUCCESS"){
				echo json_encode($zohoResponse);
				}
			}
			else{
				echo 0;
			} 
			
	}

	if(ISSET($_POST['delete_voilation_next']) && $_POST['delete_voilation_next']=='success'){
		$contactid = $_POST['contactId'];
		$violation_id = $_POST['violation_id'];
					$data = "";
					$contactdata =  $handleFunctionsObject->deleteviolation($violation_id);
			
				echo $contactdata;
			 
	}
	
	if(ISSET($_POST['vehicles_data_next']) && $_POST['vehicles_data_next']=='success'){
		$contacturl = "Contacts/".$_POST['contactId'];
			$data = "";
			$contactdata =  $handleFunctionsObject->zoho_curl($contacturl,"GET",$data,$old_access_token);
			if(ISSET($check_token_valid['code']) && $check_token_valid['code'] == "INVALID_TOKEN"){
			$url = "token";
			$data = array("refresh_token"=>$refresh_token,"client_id"=>"".$zoho_client_id."","client_secret"=>"".$zoho_client_secret."","grant_type"=>"refresh_token");
				$get_new_token = $handleFunctionsObject-> zoho_auth($url,"POST",$data);
				if(isset($get_new_token['access_token'])){
					file_put_contents("access_token.txt",$get_new_token['access_token']);
				}
				if(isset($get_new_token['refresh_token'])){
					file_put_contents("refresh_token.txt",$get_new_token['refresh_token']);
				}
				$old_access_token = file_get_contents("access_token.txt");
				
			}
			echo 1;
	}

	if(ISSET($_POST['drivers_data_next']) && $_POST['drivers_data_next']=='success'){
			$contacturl = "Contacts/".$_POST['contactId'];
			$data = "";
			$contactdata =  $handleFunctionsObject->zoho_curl($contacturl,"GET",$data,$old_access_token);
			if(ISSET($check_token_valid['code']) && $check_token_valid['code'] == "INVALID_TOKEN"){
			$url = "token";
			$data = array("refresh_token"=>$refresh_token,"client_id"=>"".$zoho_client_id."","client_secret"=>"".$zoho_client_secret."","grant_type"=>"refresh_token");
				$get_new_token = $handleFunctionsObject-> zoho_auth($url,"POST",$data);
				if(isset($get_new_token['access_token'])){
					file_put_contents("access_token.txt",$get_new_token['access_token']);
				}
				if(isset($get_new_token['refresh_token'])){
					file_put_contents("refresh_token.txt",$get_new_token['refresh_token']);
				}
				$old_access_token = file_get_contents("access_token.txt");
				
			}		
			$d= $handleFunctionsObject->businessviolation($_POST['contactId']);
			if($d!=0){
				$i=0;
				foreach($d as $ddd){
					$dd=$ddd['accident_violation'];
				?>
				<tr id='tr_id_<?php echo $ddd['id'];?>' data-id ='<?php echo $ddd['id'];?>' class='tr_violation'>
				  <td class="td-padding">
				  <select id='select_Accident_<?php echo $i;?>'>
					<option value="AAF" <?php if($dd=='AAF'){echo 'selected';}?>>AAF - At Fault Accident</option>
					<option value="BOT" <?php if($dd=='BOT'){echo 'selected';}?>>BOT - Open Bottle/Container</option>
					<option value="CRD" <?php if($dd=='CRD'){echo 'selected';}?>>CRD - Careless/Improper Op of Vehicle</option>
					<option value="DEQ" <?php if($dd=='DEQ'){echo 'selected';}?>>DEQ - Defective Equipment</option>
					<option value="DEV" <?php if($dd=='DEV'){echo 'selected';}?>>DEV - Disregard Traffic Device/Sign</option>
					<option value="DR" <?php if($dd=='DR'){echo 'selected';}?>>DR  - Drag Racing</option>
					<option value="DWI" <?php if($dd=='DWI'){echo 'selected';}?>>DWI - Driving Under the Influence</option>
					<option value="EQP" <?php if($dd=='EQP'){echo 'selected';}?>>EQP - Equipment Violations</option>
					<option value="FAR" <?php if($dd=='FAR'){echo 'selected';}?>>FAR - False Report to Official/Perjury</option>
					<option value="FEL" <?php if($dd=='FEL'){echo 'selected';}?>>FEL - Auto Theft / Felony</option>
					<option value="FLE" <?php if($dd=='FLE'){echo 'selected';}?>>FLE - Flee/Elude Police</option>
					<option value="FRA" <?php if($dd=='FRA'){echo 'selected';}?>>FRA - Failure to Report Accident</option>
					<option value="FTC" <?php if($dd=='FTC'){echo 'selected';}?>>FTC - Following Too Close</option>
					<option value="FTY" <?php if($dd=='FTY'){echo 'selected';}?>>FTY - Failure to Yield</option>
					<option value="HOM" <?php if($dd=='HOM'){echo 'selected';}?>>HOM - Homicide/Assault w/ Vehicle</option>
					<option value="IBK" <?php if($dd=='IBK'){echo 'selected';}?>>IBK - Improper Backing</option>
					<option value="IP" <?php if($dd=='IP'){echo 'selected';}?>>IP  - Improper Passing</option>
					<option value="IT" <?php if($dd=='IT'){echo 'selected';}?>>IT  - Improper Turn/U-Turn</option>
					<option value="LIC" <?php if($dd=='LIC'){echo 'selected';}?>>LIC - License/Credentials Violation</option>
					<option value="LTS" <?php if($dd=='LTS'){echo 'selected';}?>>LTS - Leaving the Scene</option>
					<option value="MMV" <?php if($dd=='MMV'){echo 'selected';}?>>MMV - Other Minor Moving Violations</option>
					<option value="NAF" <?php if($dd=='NAF'){echo 'selected';}?>>NAF - Not At Fault Accident</option>
					<option value="REF" <?php if($dd=='REF'){echo 'selected';}?>>REF - Refusal to Test</option>
					<option value="RKD" <?php if($dd=='RKD'){echo 'selected';}?>>RKD - Reckless Driving</option>
					<option value="SAF" <?php if($dd=='SAF'){echo 'selected';}?>>SAF - Safety Violation</option>
					<option value="SCH" <?php if($dd=='SCH'){echo 'selected';}?>>SCH - Passing School Bus</option>
					<option value="SPD" <?php if($dd=='SPD'){echo 'selected';}?>>SPD - Speeding</option>
					<option value="SUS" <?php if($dd=='SUS'){echo 'selected';}?>>SUS - Driving w/ Susp/Rev/Canc License</option>
					<option value="WOC" <?php if($dd=='WOC'){echo 'selected';}?>>WOC - Operate w/o Owner's Consent</option>
					<option value="WSR" <?php if($dd=='WSR'){echo 'selected';}?>>WSR - Wrong Side of Road</option>
				 </select>
				</td>
				 <td class="text-center td-padding"> <input type="text" value="<?php echo $ddd['date'];?>" placeholder="" class='datepicker' id='Accident_date_<?php echo $i;?>'>				
					</td>
				  <td class="td-padding"><td class='td-padding'><button class='delete_voilation btn' data-id="<?php echo $i;?>" data-contact_id='<?php echo $ddd['id'];?>' type='button'>Delete</button></td>
				</tr>
				
				
			<?php	
			$i++;	
			}
			}else{?>
				<tr>
				  <td class="td-padding">
				  <select id="select_Accident_0">
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
				 <td class="text-center td-padding"> <input type="text" value="2019-08-03" placeholder="" class="datepicker hasDatepicker" id="Accident_date_0">				
					</td>
				  <td class="td-padding"></td>
				</tr>
				
			<?php }
						
					
			
	}
	
	
	if(ISSET($_POST['violations_data_next']) && $_POST['violations_data_next']=='success'){
		 $form_data=json_decode($_POST['voilationsdata']);
		$form_data = json_decode(json_encode($form_data), true);
		/* echo '<pre>';
		print_R($form_data);
		 echo '</pre>'; */
		if($form_data){
			foreach($form_data as $d){
				$d= $handleFunctionsObject->insertviolation($_POST['contactId'],trim($d['Accident']),trim($d['Accident_date']));
				
			}
			
			if($d==1){
				echo json_encode($form_data);
			}
			
		}
		
			
	}
	if(ISSET($_POST['underwriting_data_next']) && $_POST['underwriting_data_next']=='success'){
		$contacturl = "Contacts/".$_POST['contactId'];
		parse_str($_POST['dataform'], $form_data);
		/*   echo '<pre>';
			print_r($form_data);
		echo '<pre>';  */ 
			   $Contactdata = '{
			"data": [{
            "Proof_of_Prior_Insurance":  "'.$form_data['currently_insured'].'" ,
            "Does_the_insured_have_General_Liability_Insurance":  "'.$form_data['Proof_Insurance'].'" ,
            "Number_of_Additional_Insureds":  "'.$form_data['Additional_Insureds'].'" ,
            "Number_of_Waivers_of_Subrogation":  "'.$form_data['Waivers_Subrogation'].'" ,
            "Is_the_customer_required_to_maintain_hours":  "'.$form_data['customer_required_to_maintain_hours'].'" ,
            "Year_current_business_was_established":  "'.$form_data['Year_current_business'].'" ,
            "Are_any_state_or_federal_filings_required":  "'.$form_data['federal_filings_required'].'" ,
            "Do_we_insure_all_commercial_vehicles_the_insured":  "'.$form_data['commercial_vehicles'].'" ,
            "Do_we_insure_all_vehicles_that_the_insured_uses":  "'.$form_data['insured_uses_business'].'" ,
            "Federal":  "'.$form_data['Federal'].'" ,
            "Federal_Cargo_BMC_34":  "'.$form_data['Federal_Cargo'].'" ,
            "How_often_are_MVRs_reviewed":  "'.$form_data['MVRs_reviewed'].'" ,
            "Are_all_vehicles_listed_owned_registered_to_appl":  "'.$form_data['vehicles_listed_owned'].'" ,
            "Any_vehicles_titled_to_an_individual_instead_of_bs":  "'.$form_data['individual_instead_of_business'].'" ,
			 "CA_Authority_Number":  "'.$form_data['CA_Authority_Number'].'" ,
            "Others":  "'.$form_data['fil_othr_cnt'].'", 
            "State_Cargo_Form_H":  "'.$form_data['fil_formh_cnt'].'" ,
			"MCS90":  "'.$form_data['MCS90_val'].'",
			"State_FT":  "'.$form_data['fil_State'].'", 			
            "Details":  "'.trim($form_data['explanations']).'", 
			
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
			if($zohoResponse['data'][0]['code'] == "SUCCESS"){
				echo json_encode($zohoResponse);
			} 
					
	}
	
	if(ISSET($_POST['OperationDescription']) && $_POST['OperationDescription']=='success'){
		$contacturl = "Contacts/".$_POST['contactId'];
		parse_str($_POST['dataform'], $form_data);
		/*  echo '<pre>';
			print_r($form_data);
		echo '<pre>'; */ 
			   $Contactdata = '{
			"data": [{
            "Radious_0_50_miles":  "'.$form_data['percentage_one'].'" ,
            "Radious_50_200_miles":  "'.$form_data['percentage_two'].'" ,
            "Radious_200_miles":  "'.$form_data['percentage_three'].'" ,
            "EstimateAverage_Radius":  "'.$form_data['Estimates_one'].'" ,
            "Estimate_Longest_Radius":  "'.$form_data['Estimates_two'].'" ,
            "Estimate_Furthest_City":  "'.$form_data['Estimates_three'].'" ,
            "Percent_Incoming":  "'.$form_data['percent_incoming'].'" ,
            "Percent_Outgoing":  "'.$form_data['percent_outgoing'].'" ,
            "Contract_Percentage":  "'.$form_data['Business_one_name'].'" ,
            "Private_Percentage":  "'.$form_data['Business_Private'].'" ,
            "Brokered_Loards_Percentage":  "'.$form_data['Brokered_Loads_name'].'" ,
            "Other_Percentage":  "'.$form_data['Business_Other'].'" ,
            "Non_Trucking":  "'.$form_data['Non_Trucking'].'" ,
            "Household_or_Commercial_Mover":  "'.$form_data['Operations_radio'].'" 
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
			if($zohoResponse['data'][0]['code'] == "SUCCESS"){
				echo json_encode($zohoResponse);
			}  
	}
	
	
		if(ISSET($_POST['InsuranceHistory']) && $_POST['InsuranceHistory']=='success'){
		/* @$response=$handleFunctionsObject->getDataFromSafer($_POST['searchedNumber']);
		if($response==0){
			echo 0;	
		}else{
			/* echo '<pre>';
			print_r($response);
			echo '</pre>'; 
			$contacturl = "Contacts/".$_POST['contactId'];
			
			 $Contactdata = '{
			"data": [{
            "USDOT_associated_with_the_insured_s_business":  "'.$response['usdot_number'].'" 
            
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
			echo json_encode($response);
			
		} */
		echo json_encode($_POST);
	}
	
	if(ISSET($_POST['Coverage_Limit_Information']) && $_POST['Coverage_Limit_Information']=='success'){
		$contacturl = "Contacts/".$_POST['contactId'];
		parse_str($_POST['dataform'], $form_data);
		/*  echo '<pre>';
			print_r($form_data);
		echo '<pre>'; */ 
			   $Contactdata = '{
			"data": [{
            "Auto_Liability":  "'.$form_data['Auto_Liability'].'" ,
            "AL_Deductible":  "'.$form_data['AL_Deductible_text'].'" ,
            "UM_UIM1":  "'.$form_data['UM_UIM_value'].'" ,
            "UM_PD":  "'.$form_data['UM_Pd_value'].'" ,
            "Medical_Payment":  "'.$form_data['Medical_Payments'].'" ,
            "PIP":  "'.$form_data['PIP'].'",
            "Per_vehicle":  "'.$form_data['Motor_Truck_Cargo'].'",
            "Aggregate":  "'.$form_data['Aggregate'].'",
            "Rejected":  "'.$form_data['Motor_Truck_Rejected'].'",
            
            
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
			if($zohoResponse['data'][0]['code'] == "SUCCESS"){
				echo json_encode($zohoResponse);
			} echo json_encode($zohoResponse); 
	}	
	if(ISSET($_POST['Commodities_next']) && $_POST['Commodities_next']=='success'){
		$contacturl = "Contacts/".$_POST['contactId'];
		parse_str($_POST['dataform'], $form_data);
		/*  echo '<pre>';
			print_r($form_data);
		echo '<pre>'; */ 
			   $Contactdata = '{
			"data": [{
            "Household_Goods":  "'.$form_data['Household_perid_two'].'" ,
            "Metal_sheets_coils_rolls":  "'.$form_data['Household_perid_second'].'" ,
            "Motor_Vehicles":  "'.$form_data['Motor_perid_second'].'" ,
            "Drivo_Tow_away":  "'.$form_data['Drive_perid_second'].'" ,
            "Building_Materials":  "'.$form_data['Building_perid_second'].'" ,
            "Mobile_Homes":  "'.$form_data['Mobile_perid_second'].'" ,
            "Machinery_Large_Objects":  "'.$form_data['Machinery_perid_second'].'" ,
            "Auto_Parts_Tires":  "'.$form_data['Auto_second'].'" ,
            "US_Mail":  "'.$form_data['US_perid_second'].'" ,
            "Single_Line_48":  "'.$form_data['Freshs_second'].'" ,
            "Single_Line_49":  "'.$form_data['Drys_second'].'" ,
            "Single_Line_46":  "'.$form_data['Refrigerateds_second'].'" ,
            "Single_Line_47":  "'.$form_data['Intermodals_second'].'" ,
            "Single_Line_44":  "'.$form_data['Beveragess_second'].'" ,
            "Single_Line_45":  "'.$form_data['Plastics_second'].'" ,
            "Single_Line_42":  "'.$form_data['Grainss_second'].'" ,
            "Single_Line_43":  "'.$form_data['Livestocks_second'].'" ,
            "Single_Line_40":  "'.$form_data['Agriculturals_second'].'" ,
            "Single_Line_41":  "'.$form_data['Liquidss_second'].'", 
            "Logs_Poles_Beams_Lumber":  "'.$form_data['Logs_id_second'].'", 
            "Single_Line_37":  "'.$form_data['Garbages_second'].'", 
            "Single_Line_50":  "'.$form_data['Meatss_second'].'", 
            "Sand_Gravel":  "'.$form_data['Sands_second'].'", 
            "Department_Store_Merchandise":  "'.$form_data['Departments_second'].'", 
            "Single_Line_39":  "'.$form_data['Passengerss_second'].'", 
            "Single_Line_36":  "'.$form_data['Chemicalss_second'].'", 
            "Single_Line_35":  "'.$form_data['Papers_second'].'", 
            "Oilfield_Equipment":  "'.$form_data['Oilfieldss_second'].'", 
            "Single_Line_38":  "'.$form_data['Electronicss_second'].'", 
            "Others":  "'.$form_data['Other'].'" 
            
            
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
			if($zohoResponse['data'][0]['code'] == "SUCCESS"){
				echo json_encode($zohoResponse);
			} 
	}	
	if(ISSET($_POST['CargoRelated_next']) && $_POST['CargoRelated_next']=='success'){
		/* @$response=$handleFunctionsObject->getDataFromSafer($_POST['searchedNumber']);
		if($response==0){
			echo 0;	
		}else{
			/* echo '<pre>';
			print_r($response);
			echo '</pre>'; 
			$contacturl = "Contacts/".$_POST['contactId'];
			
			 $Contactdata = '{
			"data": [{
            "USDOT_associated_with_the_insured_s_business":  "'.$response['usdot_number'].'" 
            
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
			echo json_encode($response);
			
		} */
		echo json_encode($_POST);
	}

		if(ISSET($_POST['PDFData_next']) && $_POST['PDFData_next']=='success'){
		$contacturl = "Contacts/".$_POST['contactId'];
		parse_str($_POST['dataform'], $form_data);
		/*  echo '<pre>';
			print_r($form_data);
		echo '<pre>'; 
		/* "policy":  "'.$form_data['Policy_Surety_Number'].'" ,
		*/ 
			   $Contactdata = '{
			"data": [{
            "Form":  "'.$form_data['Form'].'" ,
            "Type":  "'.$form_data['Type'].'" ,
            "Posted_Date":  "'.$form_data['Posted'].'" ,  
            "Coverage_From":  "'.$form_data['Coverage'].'" ,
            "To":  "'.$form_data['To'].'" ,
            "Cancellation_Date":  "'.$form_data['Cancellation'].'" ,
            "Effective_Date":  "'.$form_data['Effective'].'" ,
			"policy":  "'.$form_data['Policy_Surety_Number'].'" ,
            "Insurance_Carrier":  "'.$form_data['Insurence'].'" 
           
            
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
			if($zohoResponse['data'][0]['code'] == "SUCCESS"){
				echo json_encode($zohoResponse);
			} 
	}
	
	if(ISSET($_POST['CargoFinal_next']) && $_POST['CargoFinal_next']=='success'){
		/* @$response=$handleFunctionsObject->getDataFromSafer($_POST['searchedNumber']);
		if($response==0){
			echo 0;	
		}else{
			/* echo '<pre>';
			print_r($response);
			echo '</pre>'; 
			$contacturl = "Contacts/".$_POST['contactId'];
			
			 $Contactdata = '{
			"data": [{
            "USDOT_associated_with_the_insured_s_business":  "'.$response['usdot_number'].'" 
            
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
			echo json_encode($response);
			
		} */
		echo json_encode($_POST);
	}


	
	if(ISSET($_POST['new_drive_add']) && $_POST['new_drive_add']=='success'){
		parse_str($_POST['dataform'], $form_data);
		$contacturl = "Contacts/".$_POST['contactId'];
		 $data = "";
		$contactdata =  $handleFunctionsObject->zoho_curl($contacturl,"GET",$data,$old_access_token);
		$driversData = $contactdata['data'][0]['Drivers1'];
		$drivername = $form_data['new_driver_first']. ' '.$form_data['new_driver_middle'].' '.$form_data['new_driver_last'];
		$driverDOb=date("Y-m-d", strtotime($form_data['new_driver_dob']));
		$merital_status=$form_data['new_driver_marital_status'];
		$new_driver_Exp=$form_data['new_driver_Exp'];
		$Date_of_Hire=$form_data['new_driver_hire_date'];
		$points=$form_data['new_driver_points'];
		$Owner_Driver=$form_data['add_driver_Owner'];
		$add_driver_Backup=$form_data['add_driver_Backup'];
		$age = (date('Y') - date('Y',strtotime($driverDOb)));
		$DOB_Age_MaritalStatus_Points_LicenceNo=$driverDOb.','.$age .','.$merital_status.','.$points.','.$form_data['new_driver_licence'];
		$new_array=array(
		"DOB_Age_MaritalStatus_Points_LicenceNo"=>$DOB_Age_MaritalStatus_Points_LicenceNo,"SR22"=>$form_data['new_driver_SR22'],"Name1"=>$drivername,"Back_up_Driver"=>"".$add_driver_Backup."","Owner_Driver"=>$Owner_Driver,"License_State"=>$form_data['new_driver_license_state'],"Experience_Years"=>"".$new_driver_Exp."","Hire_Date"=>"".$Date_of_Hire.""
		) ;
		$driversData[]=$new_array;
			$dd=json_encode($driversData);
			  $Contactdata = '{
			"data": [{
           "Drivers1":'.$dd.'
            
			}]}';
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token); 
			if($zohoResponse['data'][0]['code']=='SUCCESS'){
				$id=$zohoResponse['data'][0]['details']['id'];
				$new_array['driverId'] = $id;
			echo json_encode($new_array);
			}else{
				echo 0;
			}
	}
	
	if(ISSET($_POST['update_driver']) && $_POST['update_driver']=='success'){
		parse_str($_POST['dataform'], $form_data);
		$contacturl = "Contacts/".$_POST['contactId'];
		 $data = "";
		$contactdata =  $handleFunctionsObject->zoho_curl($contacturl,"GET",$data,$old_access_token);
		$driversData = $contactdata['data'][0]['Drivers1'];
		$key = array_search($form_data['id_driver_to_update'], array_column($driversData, 'id'));

		 $drivername = $form_data['edit_driver_first']. ' '.$form_data['edit_driver_middle'].' '.$form_data['edit_driver_last'];
		$driverDOb=date("Y-m-d", strtotime($form_data['edit_driver_dob']));
		$merital_status=$form_data['edit_driver_marital_status'];
		$new_driver_Exp=$form_data['edit_driver_Exp'];
		$Date_of_Hire=$form_data['edit_driver_hire_date'];
		$points=$form_data['edit_driver_points'];
		$Owner_Driver=$form_data['edit_driver_Owner'];
		$add_driver_Backup=$form_data['edit_driver_Backup'];
		$age = (date('Y') - date('Y',strtotime($driverDOb)));
		$DOB_Age_MaritalStatus_Points_LicenceNo=$driverDOb.','.$age .','.$merital_status.','.$points.','.$form_data['edit_driver_licence'];
		$new_array=array(
		"DOB_Age_MaritalStatus_Points_LicenceNo"=>$DOB_Age_MaritalStatus_Points_LicenceNo,"SR22"=>$form_data['edit_driver_SR22'],"Name1"=>$drivername,"Back_up_Driver"=>"".$add_driver_Backup."","Owner_Driver"=>$Owner_Driver,"License_State"=>$form_data['edit_driver_license_state'],"Experience_Years"=>"".$new_driver_Exp."","Hire_Date"=>"".$Date_of_Hire.""
		) ;
		$driversData[0]=$new_array;
			$dd=json_encode($driversData);
			  $Contactdata = '{
			"data": [{
           "Drivers1":'.$dd.'
            
			}]}';
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token); 
			if($zohoResponse['data'][0]['code']=='SUCCESS'){
				$contacturl = "Contacts/".$_POST['contactId'];
				$data = "";
				$contactdata =  $handleFunctionsObject->zoho_curl($contacturl,"GET",$data,$old_access_token);
			echo json_encode($contactdata['data'][0]);
			}else{
				echo 0;
			}
	}
	
	if(ISSET($_POST['new_vehicle_add']) && $_POST['new_vehicle_add']=='success'){
		parse_str($_POST['dataform'], $form_data);
		$contacturl = "Contacts/".$_POST['contactId'];
		 $data = "";
		$contactdata =  $handleFunctionsObject->zoho_curl($contacturl,"GET",$data,$old_access_token);
		$VehiclesData = $contactdata['data'][0]['Vehicles'];
		
		if($form_data['C2VehicleDetails_subcategory']!=''){
			$category=$form_data['C2VehicleDetails_subcategory'];
			}else{
		$category=$form_data['C2VehicleDetails_category'];
		}
		if($form_data['C2VehicleDetails_make_name']!=''){
			$make=$form_data['C2VehicleDetails_make_name'];
			}else{
		$make=$form_data['C2VehicleDetails_make'];
		}
		if($form_data['C2VehicleDetails_model_name']!=''){
			$model =$form_data['C2VehicleDetails_model_name'];
			}else{
			$model=$form_data['C2VehicleDetails_model'];
		}	
		
		
		$Year_Make_Model1=$form_data['C2VehicleDetails_year'].','.$make.','.$model;
		$Longest_Trip_City_of_Destination=$form_data['vehicle_Longest_tip'].','.$form_data['vehicle_Destination_City'];

		$new_array=array(
		"Gross_Weight"=>$form_data['vehicle_Gross_weight'],"Year_Make_Model1"=>$Year_Make_Model1,"Value"=>$form_data['vehicle_modifications'],"VIN"=>"".$form_data['vehicle_VIN']."","Loss_Payee"=>$form_data['C2VehicleDetails_Loss'],"Category"=>$category,"Longest_Trip_City_of_Destination"=>"".$Longest_Trip_City_of_Destination."","Radius"=>$form_data['C2VehicleDetails_Radius']
		) ;
		$VehiclesData[]=$new_array;
			$dd=json_encode($VehiclesData);
			  $Contactdata = '{
			"data": [{
           "Vehicles":'.$dd.'
            
			}]}';
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token); 
			if($zohoResponse['data'][0]['code']=='SUCCESS'){
				$id=$zohoResponse['data'][0]['details']['id'];
				$new_array['vehicleId'] = $id;
			echo json_encode($new_array);
			}else{
				echo 0;
			} 
	}







	if(ISSET($_POST['get_make']) && $_POST['get_make']=='success'){
		if($_POST['vehicle_subcat']==''){
		$response_vehicles_Make=$handleFunctionsObject->VehicleMake($_POST['vehicle_cat']);
		
		if($response_vehicles_Make!=0){ ?>
			<option value=""></option>
						<?php					
							foreach($response_vehicles_Make as $responsedata){?>	
							<option data-id="<?php echo $responsedata['id'];?>" value="<?php echo $responsedata['make'];?>"><?php echo $responsedata['make'];?></option>
						<?php }
						?>
					
		<?php }else{
			
							
				echo $response_vehicles_Make;
						
					
		 }
		}else{
			$response_vehicles_subMake=$handleFunctionsObject->VehiclesubMake($_POST['vehicle_subcat']);
		
		if($response_vehicles_subMake!=0){ ?>
			<option value=""></option>
						<?php					
							foreach($response_vehicles_subMake as $responsedata){?>	
							<option data-id="<?php echo $responsedata['id'];?>" value="<?php echo $responsedata['make'];?>"><?php echo $responsedata['make'];?></option>
						<?php }
						?>
					
		<?php }else{
			
							
				echo $response_vehicles_subMake;
						
					
		 }
			
			
		}
	}
	if(ISSET($_POST['get_vehicle_category']) && $_POST['get_vehicle_category']=='success'){
		$response_vehicles_cat=$handleFunctionsObject->VehicleCategory($_POST['vehicle_type']);
		if($response_vehicles_cat!=0){?>
			<option value=""></option>
						<?php 					
							foreach($response_vehicles_cat as $responsedata){?>	
							<option data-id="<?php echo $responsedata['id'];?>" value="<?php echo $responsedata['category'];?>"><?php echo $responsedata['category'];?></option>
						<?php }
						?>
					
			<?php 
		}else{?>
		<option value="N/A">N/A</option>
			
		<?php }
	}
	
	if(ISSET($_POST['get_year']) && $_POST['get_year']=='success'){
		$category=$_POST['vehicle_cat'];
		
		$response_vehicles_year=$handleFunctionsObject->Vehicleyears($category);
		if($response_vehicles_year!=0){?>
			<option value=""></option>
						<?php 					
							foreach($response_vehicles_year as $responsedata){?>	
							<option data-id="<?php echo $responsedata['id'];?>" value="<?php echo $responsedata['year'];?>" 
							<?php if(ISSET($_POST['vehicle_year']) && $_POST['vehicle_year']!='' && $_POST['vehicle_year']==$responsedata['id']){echo 'selected';} ?>><?php echo $responsedata['year'];?></option>
						<?php }
						?>
					
			<?php 
		}else{?>
		<option value="N/A">N/A</option>
			
		<?php }
	}
	
	if(ISSET($_POST['get_vehicle_model']) && $_POST['get_vehicle_model']=='success'){
		$vehicle_make=$_POST['vehicle_make'];
		$year = $_POST['vehicle_year'];
		$vehicle_cat=$_POST['vehicle_cat'];
		$response_vehicles_model=$handleFunctionsObject->VehicleModel($vehicle_cat,$year,$vehicle_make);
		if($response_vehicles_model!=0){?>
			<option value=""></option>
						<?php 					
							foreach($response_vehicles_model as $responsedata){?>	
							<option data-id="<?php echo $responsedata['id'];?>" value="<?php echo $responsedata['model_name'];?>"><?php echo $responsedata['model_name'];?></option>
						<?php }
						?>
					
			<?php 
		}else{
		echo $response_vehicles_model;
			
		 }
	}
	
	if(ISSET($_POST['get_vehicle_body']) && $_POST['get_vehicle_body']=='success'){
		$vehicle_make=$_POST['vehicle_make'];
		$year = $_POST['vehicle_year'];
		$vehicle_cat=$_POST['vehicle_cat'];
		$vehicle_model=$_POST['vehicle_model'];
		$response_VehicleBodyStyle=$handleFunctionsObject->VehicleBodyStyle($vehicle_cat,$year,$vehicle_make,$vehicle_model);
		if($response_VehicleBodyStyle!=0){?>
			<option value=""></option>
						<?php 					
							foreach($response_VehicleBodyStyle as $responsedata){?>	
							<option data-id="<?php echo $responsedata['id'];?>" value="<?php echo $responsedata['body_style'];?>"><?php echo $responsedata['body_style'];?></option>
						<?php }
						?>
					
			<?php 
		}else{?>
		 <option value="N/A">N/A</option>
			
		 <?php }
	}
	
	
	
	
	
	
	
	
	if(ISSET($_POST['get_business_sub']) && $_POST['get_business_sub']=='success'){
		$businessSubCategories=$handleFunctionsObject->businessSubCategories($_POST['business_cat']);
		
		if($businessSubCategories!=0){ ?>
			<option value=""></option>
						<?php					
							foreach($businessSubCategories as $responsedata){?>	
							<option data-id="<?php echo $responsedata['id'];?>" value="<?php echo $responsedata['sub_category'];?>"><?php echo $responsedata['sub_category'];?></option>
						<?php }
						?>
					
		<?php }else{		
				echo $businessSubCategories;
		 }
	} 
	if(ISSET($_POST['get_vehicle_sub']) && $_POST['get_vehicle_sub']=='success'){
		$VehicleSubCategory=$handleFunctionsObject->VehicleSubCategory($_POST['vehicle_cat']);
		
		if($VehicleSubCategory!=0){ ?>
		
			<option value=""></option>
						<?php					
							foreach($VehicleSubCategory as $responsedata){?>	
							<option data-id="<?php echo $responsedata['id'];?>" value="<?php echo $responsedata['sub_category'];?>"><?php echo $responsedata['sub_category'];?></option>
						<?php }
						?>
					
		<?php }else{		
				echo $VehicleSubCategory;
		 }
	} 

