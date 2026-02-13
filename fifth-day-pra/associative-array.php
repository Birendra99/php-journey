<?php

// Associative array doesnot have indexed
// it is a key values pair

$userDetails=[
"name"=>"Sam",
"age"=>23,
"City"=>"Kathmandu",
"State"=>"Bagmati"

];
echo "The user name is ".$userDetails["name"]."<br/>";
echo $userDetails["age"]; 
echo "<br/>";

// foreach($userDetails as $data){
//     echo $data."<br/>";
// }
echo "for each <br/>";
foreach($userDetails as $key=>$data){
    
    echo $key.":";
    echo $data ."<br/>";
}

echo "Here is for each with endforeach <br/>";


$company=[
    "name"=>"Facebook",
    "Founder"=>"Mark Zukerburg"
];

foreach($company as $key=>$data):
    echo "$key is: $data </br>";
endforeach



?>