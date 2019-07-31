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
		/* $contacturl = "Contacts/".$_POST['contactId'];
			 $Contactdata = '{
			"data": [{
            "Mailing_Address":  "'.$_POST['mailingaddress'].'" ,
            "ZIP_Code_Two":  "'.$_POST['mailing_Postal'].'" ,
            "State_Two":  "'.$_POST['mailing_state'].'" ,
            "City_Two":  "'.$_POST['mailing_city'].'" ,
            
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
		
			if($zohoResponse['data'][0]['code'] == "SUCCESS"){
				echo json_encode($zohoResponse);
			} */
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
            "City_Two":  "'.$_POST['mailing_city'].'" ,
            
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
		/* echo '<pre>';
			print_r($form_data);
		echo '<pre>'; */
			 $Contactdata = '{
			"data": [{
            "Agent_Code":  "'.$form_data['agent_code'].'" ,
            "Policy_Effective_Date":  "'.$form_data['Policy_Effective'].'" ,
            "Is_the_customer_currently_insured_with_Progressive":  "'.$form_data['customer_Progressive_Commercial'].'" ,
            "Are_any_listed_vehicles_used_to_haul_steel":  " " ,
            "Is_the_customer_currently_insured_with_Progressive":  "'.$form_data['customer_Progressive_Commercial'].'" ,
            "Is_the_customer_currently_insured_with_Progressive":  "'.$form_data['customer_Progressive_Commercial'].'" ,
            "Structure":  "'.$form_data['Business_Organization_Structure'].'" ,
            "Do_you_have_a_DBA":  "'.$form_data['have_DBA'].'" ,
            "USDOT_Assigned_to":  "'.$form_data['USDOT_Assigned_to'].'" ,
            "Does_the_information_assigned_to_this_USDOT_match":  "'.$form_data['is_match_USDOT'].'" ,
            "First_Name1":  "'.$form_data['Insured_first_name'].'" ,
            "Middle_Initial":  "'.$form_data['Insured_Middle_name'].'" ,
            "Last_Name1":  "'.$form_data['Financial_First_name'].'" ,
            "First_Name_Two":  "'.$form_data['Financial_Middle_name'].'" ,
            "Last_Name_Two":  "'.$form_data['Financial_Last_name'].'" ,
            "Suffix_Two":  "'.$form_data['Financial_Suffix'].'" ,
             "Involved_in_the_daily_operation_of_the_business":  "'.$form_data['is_Involved_daily_operation'].'" ,
            "Social_Security_Number":  "'.$form_data['social_security_number'].'" ,
            "Is_it_OK_if_I_continue":  "'.$form_data['OK_if_I_continue'].'" 
            
            
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
			if($zohoResponse['data'][0]['code'] == "SUCCESS"){
				echo json_encode($zohoResponse);
			} 
	}

	if(ISSET($_POST['vehicles_data_next']) && $_POST['vehicles_data_next']=='success'){
		$contacturl = "Contacts/".$_POST['contactId'];
		parse_str($_POST['dataform'], $form_data);
		/* echo '<pre>';
			print_r($form_data);
		echo '<pre>'; */
			 $Contactdata = '{
			"data": [{
            "Agent_Code":  "'.$form_data['agent_code'].'" ,
            "Policy_Effective_Date":  "'.$form_data['Policy_Effective'].'" ,
            "Is_the_customer_currently_insured_with_Progressive":  "'.$form_data['customer_Progressive_Commercial'].'" ,
            "Are_any_listed_vehicles_used_to_haul_steel":  "'.$form_data['mailing_city'].'" ,
            "Is_the_customer_currently_insured_with_Progressive":  "'.$form_data['customer_Progressive_Commercial'].'" ,
            "Is_the_customer_currently_insured_with_Progressive":  "'.$form_data['customer_Progressive_Commercial'].'" ,
            "Structure":  "'.$form_data['Business_Organization_Structure'].'" ,
            "Do_you_have_a_DBA":  "'.$form_data['have_DBA'].'" ,
            "USDOT_Assigned_to":  "'.$form_data['USDOT_Assigned_to'].'" ,
            "Does_the_information_assigned_to_this_USDOT_match":  "'.$form_data['is_match_USDOT'].'" ,
            "First_Name1":  "'.$form_data['Insured_first_name'].'" ,
            "Middle_Initial":  "'.$form_data['Insured_Middle_name'].'" ,
            "Last_Name1":  "'.$form_data['Financial_First_name'].'" ,
            "First_Name_Two":  "'.$form_data['Financial_Middle_name'].'" ,
            "Last_Name_Two":  "'.$form_data['Financial_Last_name'].'" ,
            "Suffix_Two":  "'.$form_data['Financial_Suffix'].'" ,
            "Involved_in_the_daily_operation_of_the_business":  "'.$form_data['is_Involved_daily_operation'].'" ,
            "Social_Security_Number":  "'.$form_data['social_security_number'].'" ,
            "Is_it_OK_if_I_continue":  "'.$form_data['OK_if_I_continue'].'" ,
            //"Insured_s_Phone":  "'.$form_data['Is_it_OK_if_I_continue'].'" 
            
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
		
			if($zohoResponse['data'][0]['code'] == "SUCCESS"){
				echo json_encode($zohoResponse);
			} 
	}

	if(ISSET($_POST['drivers_data_next']) && $_POST['drivers_data_next']=='success'){
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
	if(ISSET($_POST['violations_data_next']) && $_POST['violations_data_next']=='success'){
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
	
	if(ISSET($_POST['violations_data_next']) && $_POST['violations_data_next']=='success'){
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
		$age = (date('Y') - date('Y',strtotime($driverDOb)));
		
		$new_array=array(
		"License_Number"=>$form_data['new_driver_licence'],"SR22"=>$form_data['new_driver_SR22'],"Name1"=>$drivername,"Age"=>"".$age."","DOB_Three"=>$driverDOb,"License_State"=>$form_data['new_driver_license_state'],"Points"=>"0"
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
	
	if(ISSET($_POST['get_driver_data']) && $_POST['get_driver_data']=='success'){
		
		/* $contacturl = "Contacts/".$_POST['contactId'];
		 $data = "";
		$contactdata =  $handleFunctionsObject->zoho_curl($contacturl,"GET",$data,$old_access_token);
		$driversData = $contactdata['data'][0]['Drivers1'];
		$drivername = $form_data['new_driver_first']. ' '.$form_data['new_driver_middle'].' '.$form_data['new_driver_last'];
		$driverDOb=date("Y-m-d", strtotime($form_data['new_driver_dob']));
		$age = (date('Y') - date('Y',strtotime($driverDOb)));
		
		$new_array=array(
		"License_Number"=>$form_data['new_driver_licence'],"SR22"=>$form_data['new_driver_SR22'],"Name1"=>$drivername,"Age"=>"".$age."","DOB_Three"=>$driverDOb,"License_State"=>$form_data['new_driver_license_state'],"Points"=>"0"
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
			} */
	}
	
	if(ISSET($_POST['get_make']) && $_POST['get_make']=='success'){
		if($_POST['vehicle_subcat']==''){
		$response_vehicles_Make=$handleFunctionsObject->VehicleMake($_POST['vehicle_cat']);
		
		if($response_vehicles_Make!=0){ ?>
			<option value=""></option>
						<?php					
							foreach($response_vehicles_Make as $responsedata){?>	
							<option value="<?php echo $responsedata['id'];?>"><?php echo $responsedata['make'];?></option>
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
							<option value="<?php echo $responsedata['id'];?>"><?php echo $responsedata['make'];?></option>
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
							<option value="<?php echo $responsedata['id'];?>"><?php echo $responsedata['category'];?></option>
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
							<option value="<?php echo $responsedata['id'];?>" 
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
							<option value="<?php echo $responsedata['id'];?>"><?php echo $responsedata['model_name'];?></option>
						<?php }
						?>
					
			<?php 
		}else{
		echo $response_vehicles_model;
			
		 }
	}
	
	if(ISSET($_POST['get_business_sub']) && $_POST['get_business_sub']=='success'){
		$businessSubCategories=$handleFunctionsObject->businessSubCategories($_POST['business_cat']);
		
		if($businessSubCategories!=0){ ?>
			<option value=""></option>
						<?php					
							foreach($businessSubCategories as $responsedata){?>	
							<option value="<?php echo $responsedata['id'];?>"><?php echo $responsedata['sub_category'];?></option>
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
							<option value="<?php echo $responsedata['id'];?>"><?php echo $responsedata['sub_category'];?></option>
						<?php }
						?>
					
		<?php }else{		
				echo $VehicleSubCategory;
		 }
	} 

