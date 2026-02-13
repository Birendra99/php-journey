<?php 


// -------->Casting Type <----------
// -> String - Converts to data type String 
// -> int - Converts to data Type integer 
// -> float - Converts to data type float 
// -> book - Converts to data type boolean 
// -> array - Converts to data type Array
// -> Object Converts to data type Object 
// -> unset - Converts to data type NULL -->> deprecated

$a=5;
$b= (String)$a;

var_dump($b);
echo "$b </br>";

$c="300";
$d=(int)$c;
echo "$d <br>";

$e="Ram";
$f=(bool)$e;
echo "$f </br>";
$nums=3;

$nums_array=(array)$nums;
var_dump($nums_array);
echo "<br/>";
$x=2;
$y=(Object) $x;
var_dump($y);


?>