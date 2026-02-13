<?php

// JSON STANDS JAVASCRIPT OBJECT NOTATION
// IT IS A TEXT-BASED DATA EXCHANGE FORMAT FOR STURCTURING DATA
// IT IS MAINLY USED TO EXCHANGE DATA BETWEEN A SERVER AND A WEB APPLICATION.


// $user=["name"=>"Ram","Age"=>23,"Address"=>"Kathmandu"];
// // print_r($user);
// $user=json_encode($user);
// // print_r($user);

$data='{"name":"Ram","Age":23,"Address":"Kathmandu"}';
$dataArray=json_decode($data,true);
print_r($dataArray);


?>