<?php
$users=[
    ["Ram",23,"Kathmandu"],
    ["Sita",22,"Lalitpur"],
    ["Hari",33,"Koteshwor"]
];
// echo "<pre>";
// print_r($users);
// echo "<pre/>";

for($user=0; $user<count($users); $user++){
    // print_r($users[$user]);
    echo "<br/>";

    for($data=0; $data<count($users[$user]); $data++){
        echo $users[$user][$data];
        echo "<br/>";

    }
}

// Simple square pattern 

echo "Pattern Practise <br/>";

for($a=1; $a<=5; $a++){
    for($b=1; $b<=5; $b++){
        echo "*";
    }
    echo "<br/>";
}

// Right angled Triangle

echo "Right angled Triangle Pattern"

for($a=1; $a<=5; $a++){
    for($b=1; $b<=$a; $b++){
        echo "*";
    }
    echo "<br/>";
}



?>