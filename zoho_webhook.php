<?php
$data = file_get_contents("php://input");
file_put_contents('zoho1.txt',$data)  ;
file_put_contents('zoho.txt',$_REQUEST)  ;
?>
