<?php
// print_r($_POST);
if(isset($_POST['name'])){

    echo "User name is ".$_POST['name'];
    echo "<br>";
    echo "User Email is ".$_POST['email']."<br>";
    echo "User Password is ". $_POST['password']."<br>";
    echo "User Skills is ". implode(", ",$_POST['skills']);
    echo "<br>";
    echo "User gender is ". $_POST['gender']. "<br>";
    echo "User City is ". $_POST['city']."<br>";
    echo "User BIo is ". $_POST['bio'];
    echo "<br>";
}

?>