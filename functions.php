<?php
   class handleFunctions {
      /* Member functions */
    function getDataFromSafer($odt){
		$response=$this->saferSeachsaferSeach($odt);
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
				$Operation_Classification=$array[8];
				$Operation_Classification1=$array[7];
				$Carrier_Operation=$array[11];
				$Cargo_Carried=$array[15];
				echo '<pre>';
				print_r(strip_tags($Operation_Classification1));
				echo '<pre>';
				
				
				
				$DOM = new DOMDocument();
				$DOM->loadHTML($Carrier_Information);
				$Header = $DOM->getElementsByTagName('th');
				$Detail = $DOM->getElementsByTagName('td');

				
				foreach($Header as $NodeHeader) //#Get header name of the table
				{
					$aDataTableHeaderHTML[] = trim($NodeHeader->textContent);
				}
				 
				foreach($Detail as $NodeDetail)  //#Get data name of the table
				{
					$aDataTableDetailHTML[] = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', trim($NodeDetail->textContent));
				}
				
				
				
				
			echo '**********************main start***************************';
				 $carrier  =$aDataTableDetailHTML[0];
				
				 $operating_status  =$aDataTableDetailHTML[1];
				
				 $legal_name  =$aDataTableDetailHTML[2];

				 $dba_name  =$aDataTableDetailHTML[3];
				 
				 $physical_address  =$aDataTableDetailHTML[4];
				 
				 $phone  =$aDataTableDetailHTML[5];
				 
				 $mailing_address  =$aDataTableDetailHTML[7];
				 
				 $usdot_number  =$aDataTableDetailHTML[8];
				 
				 $mc_mx_ff_nmumber =$aDataTableDetailHTML[9];
				 
				 $state_carrier_ID_Number  =$aDataTableDetailHTML[10];
				 
				 $duns_Number  =$aDataTableDetailHTML[11];
				 
				 $power_units  =$aDataTableDetailHTML[12];
				 
				 $drivers  =$aDataTableDetailHTML[13];
				 
				 $MCS_150_Form_Date  =$aDataTableDetailHTML[14];
				 
				 $MCS_150_Mileage_year  =$aDataTableDetailHTML[15];
				 
				 $o_c  = $aDataTableDetailHTML[17];
				echo '******************main end*******************************'; 
				
				$DOM = new DOMDocument();
				$DOM->loadHTML($Operation_Classification);
				$Operation_Classificationhead = $DOM->getElementsByTagName('th');
				$DetailOperationClassification = $DOM->getElementsByTagName('td');

				
				foreach($Operation_Classificationhead as $NodeHeader) //#Get header name of the table
				{
					$OperationClassificationHeaderHTML[] = trim($NodeHeader->textContent);
				}
				 
				foreach($DetailOperationClassification as $NodeDetail)  //#Get data name of the table
				{
					$DetailOperation_ClassificationHTML[] = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', trim($NodeDetail->textContent));
				}
				
				
				/* 
				echo '<pre>';
				print_r($DetailOperation_ClassificationHTML); 
				echo '<pre>';
				  */
				$oc1['oc1']=array($DetailOperation_ClassificationHTML[0].$DetailOperation_ClassificationHTML[1],$DetailOperation_ClassificationHTML[2].$DetailOperation_ClassificationHTML[3],$DetailOperation_ClassificationHTML[4].$DetailOperation_ClassificationHTML[5],$DetailOperation_ClassificationHTML[6].$DetailOperation_ClassificationHTML[6]);
				echo '<pre>';
				
				print_r($oc1); 
				echo '<pre>';
				
				$DOM = new DOMDocument();
				$DOM->loadHTML($Carrier_Operation);
				$Carrier_OperationHead = $DOM->getElementsByTagName('th');
				$CarrierOperationData = $DOM->getElementsByTagName('td');

				
				foreach($Carrier_OperationHead as $NodeHeader) //#Get header name of the table
				{
					$CarrierOperationDataHeaderHTML[] = trim($NodeHeader->textContent);
				}
				 
				foreach($CarrierOperationData as $NodeDetail)  //#Get data name of the table
				{
					$DetailCarrierOperationDataHTML[] = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', trim($NodeDetail->textContent));
				}
				
				echo '<pre>';
				
				print_r($DetailCarrierOperationDataHTML); 
				echo '<pre>';
			}
		}
	}
	
	function saferSeachsaferSeach($odt){
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
	function getTrelloData(){
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.trello.com/1/boards/5d28c82085d34435e9d1869f/cards?key=1164815231d570ac9de8d17de3ec7715&token=ceb1f6872aac2666dd8a92332305e2ade498f18ad27f829a5cec641d925d9957",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
			"postman-token: eee3193f-a04d-5977-9169-bdef9abe1d16"
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
}
?>