<?php

$users=[
    ["Name"=>"Ram","Age"=>23,"Address"=>"Tikapur"],
    ["Name"=>"Hari","Age"=>22,"Address"=>"Lamki"]
];

echo "<table border='1'>";



foreach($users as $user){

    echo "<tr>";

    foreach($user as $data){
        echo " <td> $data </td>";
    }
    
   echo "</tr>";

    // echo "<br/>";
}

echo "</table>";

?>