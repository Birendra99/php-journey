<?php

// array is a collection of data and store multiple data in a single variable.
// ------------>Types of Array<-------------
// Indexed Arrays
// Associative arrays // key values pair arrays
// Multidimensional Arrays

$users=["Sam","Ram","Peter","Harry"];
// echo $users; this cannot be happen it shows error 
echo $users[0];

echo "<br/>";
echo count($users);
echo "<br/>";
// herre we used for loop to display all the values

for($user=0; $user<count($users); $user++){
    echo $users[$user];
    echo "<br/>";
}



echo "<br/>";

$companys=array("Google","Microsoft","Facebook","EdTech");

for($company=0; $company<count($companys); $company++){
    echo $companys[$company]."<br/>";
}

echo count($companys);


?>