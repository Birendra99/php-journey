<?php

function getCompaneyName(){
    $name="Microsoft"; // this is local variable 
    echo "$name </br>";
}

// echo "$name";

getCompaneyName();

$comp_name="Facebook";

function getCompName(){

    // $comp_name="Meta"; 
    global $comp_name;
    echo "$comp_name";
    echo "<br/>";
}

getCompName();
echo "$comp_name <br/>";


?>