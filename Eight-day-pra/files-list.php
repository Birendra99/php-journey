<?php

$path="textFiles";
// $items=scandir($path);
// print_r($items);

$items=scandir($path);
$items=array_diff($items,array(".",".."));
// print_r($items);
foreach($items as $item){
    // echo $item."<br>";
    echo "<a href=./textFiles/$item>$item</a> <br>";
}


?>