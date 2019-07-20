<?php
/*$data = file_get_contents("php://input");
file_put_contents('zohoinput.txt',$data)  ;
file_put_contents('zohorequest.txt',$_REQUEST)  ;
file_put_contents('zohopost.txt',$_POST)  ;
*/
$get_string=file_get_contents('zohoinput.txt');
parse_str($get_string, $get_array);
echo '<pre>';
print_r($get_array);


?>
