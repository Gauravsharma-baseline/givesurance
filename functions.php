<?php
   class handleFunctions {
	   
    /*  $trelloListId	= '5d2901e0207a1126d1d915ea' ;
     $trelloApiKey	= '1164815231d570ac9de8d17de3ec7715' ;
     $trelloToken	= 'ceb1f6872aac2666dd8a92332305e2ade498f18ad27f829a5cec641d925d9957' ; */
	
    function getDataFromSafer($odt){
		$response=$this->saferSearch($odt);
		if($response){
			if(strpos(strip_tags($response), 'INACTIVE in the SAFER database.') !== false) {
					return 0;
					die();
					
			}else{
				   $dom = new DOMDocument;
					$dom->loadHTML($response);
					foreach($dom->getElementsByTagName('table') as $node)
					{
						$array[] = $dom->saveHTML($node);
					}
					
					$Carrier_Information= $array[6];
					$Operation_Classification=$array[7];
					$Carrier_Operation=$array[11];
					$Cargo_Carried=$array[15];
					
					$Operation_Classification_main=array();
					$Carrier_Operation_main=array();
					$Cargo_Carried_main=array();
					
					
					$DOM = new DOMDocument();
					$DOM->loadHTML($Carrier_Information);
					$Header = $DOM->getElementsByTagName('th');
					$Detail = $DOM->getElementsByTagName('td');
					foreach($Header as $NodeHeader) 
					{
						$aDataTableHeaderHTML[] = trim($NodeHeader->textContent);
					}
					 
					foreach($Detail as $NodeDetail)  
					{
						$aDataTableDetailHTML[] = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', trim($NodeDetail->textContent));
					}
					
					if (strpos($aDataTableDetailHTML[0], '    ') !== false) {
						$Entity_Type=trim(preg_replace('/\s+/', '', $aDataTableDetailHTML[0]));

						}else{
							$Entity_Type =$aDataTableDetailHTML[0];
						}
					
					 
					 $operating_status  =$aDataTableDetailHTML[1];
					 $Out_of_Service_date=$aDataTableDetailHTML[2];
					 $legal_name  =$aDataTableDetailHTML[3];
					 $dba_name  =$aDataTableDetailHTML[4];
					 
					if (strpos($aDataTableDetailHTML[5], '    ') !== false) {
						$physical_address=trim(preg_replace('/\s+/', ' ', $aDataTableDetailHTML[5]));

						}else{
							$physical_address  =$aDataTableDetailHTML[5];
						}
					 
					 if (strpos($aDataTableDetailHTML[7], '    ') !== false) {
						$mailing_address=trim(preg_replace('/\s+/', ' ', $aDataTableDetailHTML[7]));

						}else{
							$mailing_address  =$aDataTableDetailHTML[7];
						}
					 
					 $phone  =$aDataTableDetailHTML[6];
					
					 $usdot_number  =$aDataTableDetailHTML[8];
					 $mc_mx_ff_nmumber =$aDataTableDetailHTML[9];
					 $state_carrier_ID_Number  =$aDataTableDetailHTML[10];
					 $duns_Number  =$aDataTableDetailHTML[11];
					 $power_units  =$aDataTableDetailHTML[12];
					 $drivers  =$aDataTableDetailHTML[13];
					 $MCS_150_Form_Date  =$aDataTableDetailHTML[14];
					 $MCS_150_Mileage_year  =$aDataTableDetailHTML[15];
					 $o_c  = $aDataTableDetailHTML[17];
					 
					
					 
					
					/*******************************************Operation_Classification start*****************************/
					$DOM = new DOMDocument();
					$DOM->loadHTML($Operation_Classification);
					$Operation_Classificationhead = $DOM->getElementsByTagName('th');
					$DetailOperationClassification = $DOM->getElementsByTagName('td');
					 
					foreach($DetailOperationClassification as $NodeDetail)
					{
						$DetailOperation_ClassificationHTML[] = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', trim($NodeDetail->textContent));
					}
					
					foreach($DetailOperation_ClassificationHTML as $key=>$nDetailOperation_ClassificationHTML){
						if($nDetailOperation_ClassificationHTML=='X'){
						
						 array_push($Operation_Classification_main,$DetailOperation_ClassificationHTML[$key+1]);
					   }
					} 
					
					
					
					/* echo '<pre>';
					print_r($Operation_Classification_main); 
					echo '<pre>'; */
					/*******************************************Carrier_Operation*************************************/
					$DOM = new DOMDocument();
					$DOM->loadHTML($Carrier_Operation);
					$DetailCarrier_Operation = $DOM->getElementsByTagName('td');
					foreach($DetailCarrier_Operation as $NodeDetail)
					{
						$DetailCarrier_OperationHTML[] = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', trim($NodeDetail->textContent));
					}
					foreach($DetailCarrier_OperationHTML as $key=>$nDetailCarrier_OperationHTML){
						if($nDetailCarrier_OperationHTML =='X'){
						
						 array_push($Carrier_Operation_main,$DetailCarrier_OperationHTML[$key+1]);
					   }
					}
					/* echo '<pre>';
					print_r($Carrier_Operation_main); 
					echo '<pre>'; */
					
					
					
					/*******************************************Cargo_Carried*************************************/
					$DOM = new DOMDocument();
					$DOM->loadHTML($Cargo_Carried);
					
					$DetailCargo_Carried = $DOM->getElementsByTagName('td');
					
					 
					foreach($DetailCargo_Carried as $NodeDetail)  //#Get data name of the table
					{
						$DetailCargo_CarriedHTML[] = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', trim($NodeDetail->textContent));
					}
					foreach($DetailCargo_CarriedHTML as $key=>$nDetailCargo_CarriedHTML){
						if($nDetailCargo_CarriedHTML =='X'){
						
						 array_push($Cargo_Carried_main,$DetailCargo_CarriedHTML[$key+1]);
					   }
					} 
					
					return $saferData[]= array('Entity_Type'=>$Entity_Type,'operating_status'=>$operating_status,'Out_of_Service_date'=>$Out_of_Service_date, 'legal_name'=>$legal_name,'dba_name'=>$dba_name,'physical_address'=>$physical_address,'phone'=>$phone,'mailing_address'=>$mailing_address,'usdot_number'=>$usdot_number,'mc_mx_ff_nmumber'=>$mc_mx_ff_nmumber,'state_carrier_ID_Number'=>$state_carrier_ID_Number,'duns_Number'=>$duns_Number,'power_units'=>$power_units,'drivers'=>$drivers, 'MCS_150_Form_Date'=>$MCS_150_Form_Date, 'MCS_150_Mileage_year'=>$MCS_150_Mileage_year,'Operation_Classification'=>implode(",",$Operation_Classification_main),'Carrier_Operation'=>implode(",",$Carrier_Operation_main),'Cargo_Carried'=>implode(",",$Cargo_Carried_main));
					
					
					
					
			}
		}
	}
	
	function saferSearch($odt){
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://safer.fmcsa.dot.gov/query.asp?query_type=queryCarrierSnapshot&query_param=USDOT&query_string=".$odt."",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		  
		   "User-Agent:Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36",
			"cache-control: no-cache",
		  
		  ),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		if ($err) {
		 return 0;
		} else {
		  return $response;
		}
      
	}
	function getUnbounceData(){
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.unbounce.com/pages/601812a5-e1dc-43f4-b3fb-418fae0ec736/leads?secure=true",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
			"authorization: Basic YWQ2ZjU0MTgzY2RhMGNjYTBiMTA5NzVjNDQ0MzBkMGY6QnJpZ2h0MjAyMCE=",
			"cache-control: no-cache"
			
		  ),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}	
		
		
	}
	function getTrelloData($url){
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL =>$url,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json',
        'Accept: application/json'
		  ),
		));
		$response = curl_exec($curl);
		
		$err = curl_error($curl);
		curl_close($curl);
		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
			
		 $response;
		 
		return $data = json_decode($response, true);
		
		}
		
		 
	}
	function updateTrelloCardCustomFields($url,$data){
			$curl = curl_init();
			curl_setopt_array($curl, array(
			  CURLOPT_URL => $url,
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "PUT",
			  CURLOPT_POSTFIELDS => $data,
			  CURLOPT_HTTPHEADER => array(
				"cache-control: no-cache",
				"content-type: application/json"
			  ),
			));
			$response = curl_exec($curl);
			$err = curl_error($curl);
			curl_close($curl);
			if ($err) {
			  return $err;
			} else {
			$d=json_decode($response, true);
			 if(empty($d['id'])){
				return $d ;
			 }
			}
	}
	
	
	function zoho_auth($url,$method,$data){
		$ch = curl_init('https://accounts.zoho.com/oauth/v2/'.$url);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		if($method == "POST"){
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);	
		}
		echo $response = curl_exec($ch);
		  
		return json_decode($response,true);
		curl_close($ch); 
	}
	function zoho_curl($url,$method,$data,$access_token){
		$ch = curl_init('https://www.zohoapis.com/crm/v2/'.$url);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		if($method == "POST"){
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);	
		}
		if($method == "PUT" ){
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);	
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);	
		}
		

		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Zoho-oauthtoken '.$access_token));
		 echo  $response = curl_exec($ch);
		 $err = curl_error($curl);
			curl_close($curl);
			if ($err) {
			  return $err;
			} else {
			return json_decode($response,true);
			}
	}
		
}
?>
