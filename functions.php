<?php
error_reporting(E_ERROR | E_PARSE);
error_reporting(0);
   class handleFunctions {
	   
    /*  $trelloListId	= '5d2901e0207a1126d1d915ea' ;
     $trelloApiKey	= '1164815231d570ac9de8d17de3ec7715' ;
     $trelloToken	= 'ceb1f6872aac2666dd8a92332305e2ade498f18ad27f829a5cec641d925d9957' ; */
	
	function pgConnect(){
		$con = pg_connect ("host=ec2-54-243-47-196.compute-1.amazonaws.com dbname=da75gbsng1e37m user=ikheqtaxeqwazi password=800c91378dbd23c1752ef5722ad7c40a4f727966939b44d58361184792659ebd");
		if($con) {
		return $con;
		} else {
			return 0;
		}	
		
		
	}
	 function businessCategories(){
		$conn = $this->pgConnect();
		$query = "SELECT * FROM public.business_type";	
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$rows = pg_num_rows($rs);
		if($rows>=1){
			$response=array();	
			while ($row = pg_fetch_assoc($rs)) {
			 $response[]=$row;
			}
		}else{
		$response=0	;
			
		}

		pg_close($conn);
		return $response;
		
	} 
	function businessSubCategories($id){
		$conn = $this->pgConnect();
		$query = "SELECT * FROM public.subcategory_business where category_id=$id";	
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$rows = pg_num_rows($rs);
		if($rows>=1){
			$response=array();	
			while ($row = pg_fetch_assoc($rs)) {
			 $response[]=$row;
			}
		}else{
		$response=0	;
			
		}

		pg_close($conn);
		return $response;
		
	} 
	
	function vehicle_type(){
		$conn = $this->pgConnect();
		$query = "SELECT * FROM public.vehicle";	
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$rows = pg_num_rows($rs);
		if($rows>=1){
			$response=array();	
			while ($row = pg_fetch_assoc($rs)) {
			 $response[]=$row;
			}
		}else{
		$response=0	;
			
		}
		pg_close($conn);
		return $response;
				
	} 
	function VehicleCategory($id){
		$conn = $this->pgConnect();
		$query = "SELECT * FROM public.category where vehicale_id=$id";
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$rows = pg_num_rows($rs);
		if($rows>=1){
			$response=array();	
			while ($row = pg_fetch_assoc($rs)) {
			 $response[]=$row;
			}
		}else{
		$response=0	;
			
		}
		pg_close($conn);
		return $response;
				
	} 
	function VehicleSubCategory($id){
		$conn = $this->pgConnect();
		$query = "SELECT * FROM public.subcategory_vehicle where category_id=$id";
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$rows = pg_num_rows($rs);
		if($rows>=1){
			$response=array();	
			while ($row = pg_fetch_assoc($rs)) {
			 $response[]=$row;
			}
		}else{
		$response=0	;
			
		}
		pg_close($conn);
		return $response;
				
	}
	
	
	function Vehicleyears($cat){
		$conn = $this->pgConnect();
		$query = "SELECT * FROM public.year where category_id=$cat";	
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$rows = pg_num_rows($rs);
		if($rows>=1){
		$response=array();	
		while ($row = pg_fetch_assoc($rs)) {
		 $response[]=$row;
		}
		}else{
		$response=0	;
			
		}
		pg_close($conn);
		return $response;
				
	} 
	function VehicleMake($vehicle_cat){
		$conn = $this->pgConnect();
		$query = "SELECT * FROM public.make WHERE category_id=$vehicle_cat";	
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$rows = pg_num_rows($rs);
		if($rows>=1){
		$response=array();	
		while ($row = pg_fetch_assoc($rs)) {
		 $response[]=$row;
		}
		}else{
		$response=0	;
			
		}
		pg_close($conn);
		return $response;
				
	}
	function VehiclesubMake($vehicle_cat){
		$conn = $this->pgConnect();
		$query = "SELECT * FROM public.make WHERE sub_category_id=$vehicle_cat";	
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$rows = pg_num_rows($rs);
		if($rows>=1){
		$response=array();	
		while ($row = pg_fetch_assoc($rs)) {
		 $response[]=$row;
		}
		}else{
		$response=0	;
			
		}
		pg_close($conn);
		return $response;
				
	}

	function VehicleModel($vehicle_cat,$year,$vehicle_make){
		$conn = $this->pgConnect();
		$query = "SELECT * FROM public.model WHERE category_id=$vehicle_cat AND year_id=$year AND make_id=$vehicle_make";	
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$rows = pg_num_rows($rs);
		if($rows>=1){
		$response=array();	
		while ($row = pg_fetch_assoc($rs)) {
		 $response[]=$row;
		}
		}else{
		$response=0	;
			
		}
		pg_close($conn);
		return $response;
				
	} 
	function VehicleBodyStyle($vehicle_cat,$year,$vehicle_make,$vehicle_model){
		$conn = $this->pgConnect();
		$query = "SELECT * FROM public.body_style WHERE category_id=$vehicle_cat AND year_id=$year AND make_id=$vehicle_make AND model_id=$vehicle_model";	
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$rows = pg_num_rows($rs);
		if($rows>=1){
		$response=array();	
		while ($row = pg_fetch_assoc($rs)) {
		 $response[]=$row;
		}
		}else{
		$response=0	;
			
		}
		pg_close($conn);
		return $response;
				
	} 	
	function VehicleLosspayee(){
		$conn = $this->pgConnect();
		$query = "SELECT * FROM public.loss_payee ORDER BY id DESC";	
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$rows = pg_num_rows($rs);
		if($rows>=1){
		$response=array();	
		while ($row = pg_fetch_assoc($rs)) {
		 $response[]=$row;
		}
		}else{
		$response=0	;
			
		}
		pg_close($conn);
		return $response;
				
	}
	function insertviolation($contact_id,$accident_violation,$date){
		$conn = $this->pgConnect();
		$query = "INSERT INTO public.violation(contact_id, accident_violation, date)VALUES('".$contact_id."', '".$accident_violation."', '".$date."')";
		$result = pg_query($query); 
					
		if($result){
			$response= 1;
		}else{
		$response=0	;
			
		}

		pg_close($conn);
		return $response;
		
	} 

	
	function GetContactcommoditeies($contact_id,$field){
		$conn = $this->pgConnect();
		$query = "SELECT * FROM public.contact_commodities where contact_id=".$contact_id." AND name='".$field."'";		
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$rows = pg_num_rows($rs);
		if($rows>=1){
		$response=array();	
		while ($row = pg_fetch_assoc($rs)) {
		 $response[]=$row;
		}
		}else{
		$response=0	;
			
		}
		pg_close($conn);
		return $response;
	}

	function insertcommoditiesconatctdata($contact_id,$field,$values){
		$conn = $this->pgConnect();
		if($field!=''){
		$query = "SELECT * FROM public.contact_commodities where contact_id=".$contact_id." AND name='".$field."'";	
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$rows = pg_num_rows($rs);
		if($rows==1){
			$query = "UPDATE  public.contact_commodities SET value='".$values."' WHERE contact_id=".$contact_id." AND name='".$field."'";
			$result = pg_query($conn, $query) or die("Cannot execute query: $query\n");
			
		}else{
			  $query = "INSERT INTO public.contact_commodities(contact_id, name,value)VALUES('".$contact_id."', '".$field."','".$values."')";
			$result = pg_query($query);
		}
		
		 pg_close($conn);
		if($result){
		
		 $response=1;
		}else{
		$response=0	;
			
		}
		}
		return $response;
	}

	function GetContactData($contact_id){
		$conn = $this->pgConnect();
		$query = "SELECT * FROM public.zoho_contact_data where contactid=$contact_id";	
		$rs = pg_query($conn, $query);
		$rows = pg_num_rows($rs);
		if($rows==1){
		$response=array();	
		while ($row = pg_fetch_assoc($rs)) {
		 $response[]=$row;
		}
		}else{
		$response=0	;
			
		}
		pg_close($conn);
		return $response;
	}	




	function insertintroconatctdata($contact_id,$data){
		$conn = $this->pgConnect();
		$date=date("Y-m-d", strtotime($data['When_do_you_need_policy']));
		$query = "SELECT * FROM public.zoho_contact_data where contactid=$contact_id";	
		$rs = pg_query($conn, $query);
		$rows = pg_num_rows($rs);
		if($rows==1){
		 $query = "UPDATE  public.zoho_contact_data SET when_do_you_need_policy_by='".$date."',are_you_the_owner='".$data['Are_you_the_owner']."',how_many_vehicles=".$data['how_many_vehicles'].",is_the_owner_also_the_driver='".$data['Is_the_owner_driver']."' WHERE contactid=$contact_id";	
			$result = pg_query($conn, $query);
			 
		}
		elseif($data['When_do_you_need_policy']!='' || $data['Are_you_the_owner']!='' || $data['Is_the_owner_driver']!='' ||   $data['how_many_vehicles']!=''){
			  $query = "INSERT INTO public.zoho_contact_data(contactid, is_the_owner_also_the_driver,when_do_you_need_policy_by,are_you_the_owner,how_many_vehicles)VALUES('".$contact_id."', '".$data['Is_the_owner_driver']."','".$date."','".$data['Are_you_the_owner']."','".$data['how_many_vehicles']."')";
			$result = pg_query($query); 
			 
			
		} 
		if($result){
			$response= 1;
		}else{
		$response=0	;
			
		} 

		pg_close($conn);
		return $response;
		
		 
	}
	
	
	
	function businessviolation($contact_id){
		$conn = $this->pgConnect();
		$query =  "SELECT * FROM public.violation where contact_id=$contact_id";	
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$rows = pg_num_rows($rs);
		if($rows>=1){
			$response=array();	
			while ($row = pg_fetch_assoc($rs)) {
			 $response[]=$row;
			
			}
		}else{
		$response=0	;
			
		}

		pg_close($conn);
		return $response;
		
	}
	function updateviolation($contact_id,$Accident_id,$Accident_date,$Accident){
		$conn = $this->pgConnect();
		$query =  "update  public.violation SET accident_violation='".$Accident."', date='".$Accident_date."' where id=$Accident_id";	
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		
		if($rs){
			
			 $response=1;
			
			
		}else{
		$response=0	;
			
		}

		pg_close($conn);
		return $response;
		
	}	
	function deleteviolation($violationId){
		$conn = $this->pgConnect();
		$query =  "Delete  FROM public.violation where id=$violationId";	
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		
		if($rs){
			
			 $response=1;
			
			
		}else{
		$response=0	;
			
		}

		pg_close($conn);
		return $response;
		
	} 
	
	

    function getDataFromSafer($odt){
		$response=$this->saferSearch($odt);
	
		if($response){
			if(strpos(strip_tags($response), 'Record Not Found') !== false) {
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
					 $mc_mx_ff_nmumberr = explode("MC-",trim(preg_replace('/\s\s+/', ' ', $aDataTableDetailHTML[10])));
					 $mc_mx_ff_nmumber = $mc_mx_ff_nmumberr[1];
					 $state_carrier_ID_Number  = $aDataTableDetailHTML[9];
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
					
					$zipcode_Physical = preg_match("/\b[A-Z]{2}\s+\d{5}(-\d{4})?\b/", $physical_address, $zipcode_physical_zip);
					$pZip=preg_replace("/[^0-9]/", "", $zipcode_physical_zip[0] );
					$p_state=preg_replace('/[0-9]+/', '', $zipcode_physical_zip[0]);
					 $zipcode_mailing = preg_match("/\b[A-Z]{2}\s+\d{5}(-\d{4})?\b/", $mailing_address, $zipcode_mailing_zip);
					
					 $mZip=preg_replace("/[^0-9]/", "", $zipcode_mailing_zip[0] );
					   $m_state=preg_replace('/[0-9]+/', '', $zipcode_mailing_zip[0]);
					 $street_address_p=explode(',',$physical_address);
					 $street_address_p=$street_address_p[0];
					  $street_address_m=explode(',',$mailing_address);
					 $street_address_m=$street_address_m[0];
					 
					
					 
					
					return $saferData[]= array('Entity_Type'=>$Entity_Type,'operating_status'=>$operating_status,'Out_of_Service_date'=>$Out_of_Service_date, 'legal_name'=>$legal_name,'dba_name'=>$dba_name,'physical_address'=>$physical_address,'physical_zip'=>$pZip,'mailing_zip'=>$mZip,'p_street_address'=>$street_address_p,'m_street_address'=>$street_address_m,'phone'=>$phone,'mailing_address'=>$mailing_address,'p_state'=>$p_state,'m_state'=>$m_state,'usdot_number'=>$usdot_number,'mc_mx_ff_nmumber'=>$mc_mx_ff_nmumber,'state_carrier_ID_Number'=>$state_carrier_ID_Number,'duns_Number'=>$duns_Number,'power_units'=>$power_units,'drivers'=>$drivers, 'MCS_150_Form_Date'=>$MCS_150_Form_Date, 'MCS_150_Mileage_year'=>$MCS_150_Mileage_year,'Operation_Classification'=>implode(",",$Operation_Classification_main),'Carrier_Operation'=>implode(",",$Carrier_Operation_main),'Cargo_Carried'=>implode(",",$Cargo_Carried_main));
					
					
					
					
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
		$response = curl_exec($ch);
		  
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
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);			
		}
		if($method == "PUT" ){
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);	
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);	
		}
		

		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Zoho-oauthtoken '.$access_token));
		  $response = curl_exec($ch);
		 $err = curl_error($ch);
			curl_close($ch);
			if ($err) {
			  return $err;
			} else {
			return json_decode($response,true);
			}
	}
	
	//function for search business type
	function business_search($data){
		$conn = $this->pgConnect();
		$query = "SELECT * FROM public.business_type WHERE category LIKE '".$data."%'";	
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$rows = pg_num_rows($rs);
		if($rows>=1){
			$response=array();	
			while ($row = pg_fetch_assoc($rs)) {
			 $response[]=$row;
			}
		}else{
		$response=0	;
			
		}
		pg_close($conn);
		return $response;
	}
		
}
		

?>
