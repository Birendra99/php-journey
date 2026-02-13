<?php

$users=["Sam","RAm","Hair","RAvi","Kam","Sam","Ram"];
echo is_array($users); // it gives one if it is a array 

$nums="134";
echo "<br>";
echo is_array($nums); // it gives ntg

echo count($users);

echo "<br>";

unset($users[2]);
print_r($users);

array_push($users,"Sita");
echo "<br>";
print_r($users);
 echo "<br>";

 array_pop($users);
 print_r($users);

 echo "<br>";

 $com_details=["Name"=>"Google","Located"=>"USA","FOUNDER"=>"LARRY"];
 print_r(array_keys($com_details));

 echo "<br> <br> Array To String <br>";

 echo implode($users);
 echo "<br>";



 $str="Hello, Good Morning Students.";
 echo "$str <br>";

 $data=array_unique($users);
 print_r($data);







?>