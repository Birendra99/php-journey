<?php

$users=array("Harry","Sam","Binod","Ram");

echo count($users)."<br/>";

foreach($users as $user){

    if($user=="Sam"){
        continue;
    }
    echo $user."<br/>";
}

$companys=array("Microsoft","Bajra","Udemy","Facebook");

echo "The length of companrys is :" .count($companys)."<br/>";

foreach($companys as $company):
    echo $company."<br/>";

endforeach


?>