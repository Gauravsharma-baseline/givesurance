<?php
include('functions.php');
 $trelloListId	= '5d2901e0207a1126d1d915ea' ;
$trelloApiKey	= '1164815231d570ac9de8d17de3ec7715' ;
$trelloToken	= 'ceb1f6872aac2666dd8a92332305e2ade498f18ad27f829a5cec641d925d9957' ;
$trelloboard	= '5d28c82085d34435e9d1869f' ;
$handleFunctionsObject = new handleFunctions;


$data = file_get_contents("php://input");
file_put_contents('zohoinput.txt',$data)  ;
file_put_contents('zohorequest.txt',$_REQUEST)  ;
file_put_contents('zohopost.txt',$_POST)  ;

$get_string=file_get_contents('zohoinput.txt');
parse_str($get_string, $get_array);
/* echo '<pre>';
print_r($get_array); */

if(!empty($get_array['email'])){
 $email=$get_array['email'];
	$trelloLists = $handleFunctionsObject->getTrelloData('https://api.trello.com/1/lists/'.$trelloListId.'/cards?key='.$trelloApiKey.'&token='.$trelloToken.'');
	 
	foreach($trelloLists as $trallolist){
		$check = explode("_",$trallolist['name']);
		if($check[2]==$email){
			$card_id=$trallolist['id'];
	} 
	}
	if(!empty($card_id)){
		
		$getcustomefiledData = $handleFunctionsObject->getTrelloData('https://api.trello.com/1/boards/'.$trelloboard.'/customFields?key='.$trelloApiKey.'&token='.$trelloToken.'');
		
		
		foreach($getcustomefiledData as $key => $value){
			if($value['name'] == 'ZohoContactUrl')
			{
				
				$contact_url='https://crm.zoho.com/crm/org693143281/tab/Contacts/'$get_array['ContactId'];
				$url='https://api.trello.com/1/cards/'.$_POST['cardId'].'/customField/'.$value ['id'].'/item?key='.$trelloApiKey.'&token='.$trelloToken.'';
				$data='{
				  "value": {"text": "'.$contact_url.'"},
				  "key": "'.$trelloApiKey.'",
				  "token": "'.$trelloToken.'"
				}';

				$getcustomefiledData = $handleFunctionsObject->updateTrelloCardCustomFields($url,$data);
				
			}
		}
	}


	
	
}	


?>
