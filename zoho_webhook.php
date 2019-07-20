<?php
$data = file_get_contents("php://input");
file_put_contents('zoho1.txt',$data)  ;
file_put_contents('zoho.txt',$_REQUEST)  ;
file_put_contents('zoho.txt',$_POST)  ;
file_put_content('test.txt','gjfhef');

?>
