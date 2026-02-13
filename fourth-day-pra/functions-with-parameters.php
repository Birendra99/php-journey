<?php 
// Parameter functions is that when we passed the arguments to call the functions.


function sum($a,$b){
   echo $a+$b;
   echo "</br>";
}

sum(3,4);

function printDetails($name,$address,$age){
    echo "Name: $name";
    echo "<br/>";
    echo "Address: $address <br/>";
    echo "Age: $age </br>";
}

printDetails("Sam","Kathmandu",22);



?>