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
				    $contactId=$check_token_valid['data'][0]['id'];
					$dot=$check_token_valid['data'][0]['USDOT_associated_with_the_insured_s_business'];
					$response=array('contactId'=>$contactId,'Dot'=>$dot);
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
					$response=array('contactId'=>$contactId,'Dot'=>'');
					}else{
						 $response=0;
					}  
				} 
			} else{
			 	if(!empty($check_token_valid['data'][0]['id'])){
				    $contactId=$check_token_valid['data'][0]['id'];
					$dot=$check_token_valid['data'][0]['USDOT_associated_with_the_insured_s_business'];
					$response=array('contactId'=>$contactId,'Dot'=>$dot);
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
					$response=array('contactId'=>$contactId,'Dot'=>'');
					}else{
						$response=0;
					}  
				} 
				
			}
			
			echo json_encode($response);
	}
 
	if(ISSET($_POST['getSaferData']) && $_POST['getSaferData']=='success' &&  $_POST['checkType']=='1'){
		@$response=$handleFunctionsObject->getDataFromSafer($_POST['searchedNumber']);
		if($response==0){
			echo 0;	
		}else{
		
			 $contacturl = "Contacts/".$_POST['contactId'];
			 $Contactdata = '{
			"data": [{
            "USDOT_associated_with_the_insured_s_business":  "'.$response['usdot_number'].'" 
            
			}]}'; 
			
			@$zohoResponse =  $handleFunctionsObject->zoho_curl($contacturl,"PUT",$Contactdata,$old_access_token);
		
			if($zohoResponse['data'][0]['code'] == "SUCCESS"){
				echo json_encode($response);
			}
			
			
		}
	}
	if(ISSET($_POST['physical_address']) && $_POST['physical_address']=='success'){
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
	if(ISSET($_POST['mailing_address']) && $_POST['mailing_address']=='success'){
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
	if(ISSET($_POST['safer_data_next']) && $_POST['safer_data_next']=='success'){
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
	if(ISSET($_POST['general_data_next']) && $_POST['general_data_next']=='success'){
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

	if(ISSET($_POST['vehicles_data_next']) && $_POST['vehicles_data_next']=='success'){
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

