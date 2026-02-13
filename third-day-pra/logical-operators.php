<?php
 $a=2;
 $b=3;
 $c=5;

 if($a>$b and $a>$c){
    echo $a. " is greater than ".$b ." and ".$c;
 }
 elseif($b>$a and $b>$c){
    echo $b. " is greater than the ".$a. " and ".$c;

 }
 else{
    echo $c. " is greater than teh ".$a. " and ".$b;
 }


?>