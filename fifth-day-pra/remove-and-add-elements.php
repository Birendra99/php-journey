<?php

$numbers=[1,2,3,4,5,6,7];
// print_r($numbers);

array_push($numbers,22);
array_push($numbers,56);
array_push($numbers,"Ram");

foreach($numbers as $nums){
    echo "$nums </br>";
}

array_pop($numbers);
array_pop($numbers);

foreach($numbers as $num){
    echo "$num </br>";
}

$users=["Ram","Sam","Gita","Hari","Rita"];

foreach($users as $user){

    echo "$user <br/>";
}

echo "<hr>";
echo "After spice or removing multiple data <br/>";
array_splice($users,-3);

foreach($users as $user ){
    echo "$user </br>";
}




?>