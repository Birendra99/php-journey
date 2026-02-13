<?php

// In php varaiable functions are allows to store functions in a variable and then call that functions using that variable.

function greet(){
    echo "Hello, Good Morning";
}

$morn="greet"; // store functions in a variable.

$morn();

echo "<br/>";

function add($a,$b){
    return $a+$b;
}

$res="add"; // store functions in a variable.

echo $res(2,3);

echo "<br/>";

function sub($x,$y){
    return $x-$y;
}

$operations="sub";

echo $operations(5,2);




?>