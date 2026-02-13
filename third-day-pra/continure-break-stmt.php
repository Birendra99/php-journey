<?php

$num=5;

for($i=1; $i<=10; $i++){
    echo "$i </br>";

    if($i==$num){
        break;
    }
}

echo "</br>";

for($i=1; $i<=15; $i++){

    

    if($i==$num){
        
        continue;
    }
    echo "$i <br/>";
}



?>