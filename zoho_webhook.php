<?php
$data = file_get_contents("php://input");
file_put_contents('zohoinput.txt',$data)  ;
file_put_contents('zohorequest.txt',$_REQUEST)  ;
file_put_contents('zohopost.txt',$_POST)  ;

//$contact_id=file_get_contents(''zoho.txt');

?>
