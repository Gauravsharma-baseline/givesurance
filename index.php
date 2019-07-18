<?php
error_reporting(E_ERROR | E_PARSE);
include('functions.php');
$handleFunctionsObject = new handleFunctions;
if(ISSET($_POST['queryCarrierSnapshot']) && !empty($_POST['odtNumber'])){
	$response=$handleFunctionsObject->getDataFromSafer($_POST['odtNumber']);
	if($response==0){
		$message='The record matching USDOT Number = '.$_POST['odtNumber'].' is INACTIVE in the SAFER database';	
	}else{
	echo '<pre>';
	print_r($response);
	echo '<pre>';
	}
}

 
if(ISSET($_GET['u']) && !empty($_GET['u'])){
 $email=$_GET['u'];
	
}

$trelloLists = $handleFunctionsObject->getTrelloData('https://api.trello.com/1/lists/5d2901e0207a1126d1d915ea/cards?key=1164815231d570ac9de8d17de3ec7715&token=ceb1f6872aac2666dd8a92332305e2ade498f18ad27f829a5cec641d925d9957');
 
foreach($trelloLists as $trallolist){
	$check = explode("_",$trallolist['name']);
	if($check[2]==$email){
		$card_id=$trallolist['id'];
} 
}

	


$getcustomefiledData = $handleFunctionsObject->getTrelloData('https://api.trello.com/1/boards/5d28c82085d34435e9d1869f/customFields?key=1164815231d570ac9de8d17de3ec7715&token=ceb1f6872aac2666dd8a92332305e2ade498f18ad27f829a5cec641d925d9957');

foreach($getcustomefiledData as $key => $value){

if($value['name'] == 'Phone Number')
{
$customFieldId = $value ['id'];

}

if($value['name']=='Drivers')
{
 $customFieldId=$value ['id'];
}

}




?>



<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="container">
    <div class="row">
		<div class="col-md-3">
		 </div>
        <div class="col-md-6">
    		<form method='POST'>
			<div id="contact-form" class="form-container" data-form-container style="color: rgb(46, 125, 50); background: rgb(200, 230, 201);">
			<div class="row">
				<?php if(ISSET($message)){
					echo ' 
					<div class="alert alert-warning">
						<strong>Warning!</strong>'.$message.'
						<button type="button" class="close" data-dismiss="alert">&times;</button>
					</div>
					';
				}
				?>
				<div class="form-title">
					<span>Please fill your ODT Number </span>
				</div>
			</div>
			<div class="input-container">
				<div class="row">
					<span class="req-input valid" >
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input your post title."> </span>
						<input type="text" data-min-length="6" placeholder="Enter Dot Number" name='odtNumber' >
						<input type="hidden" data-min-length="6" name='customerEmail' value='<?php echo $email ;?>'>
					</span>
				</div>
				<div class="row submit-row">
					<button type="submit" class="btn btn-block submit-form valid" name='queryCarrierSnapshot'>Submit</button>
				</div>
			</div>
			</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>
