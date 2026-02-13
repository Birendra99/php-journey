<?php
// print_r($_GET);
// print_r($_REQUEST);  echo "<br> <br>";
// print_r($_REQUEST['password']);
 
// foreach($_REQUEST as $data){
//     echo $data;
//     echo "<br> <br>";
// }
//  foreach($_REQUEST as $key =>$data){
//     echo $key. " is: ".$data;
//     echo "</br></br>";
//  }

        if($_REQUEST){

            foreach($_REQUEST as $key=> $data){

                echo $key ." is ".$data.". <br> ";
            }
        }
 
?>