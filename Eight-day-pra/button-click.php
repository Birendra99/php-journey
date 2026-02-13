<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call PHP Function</title>
</head>
<body>

   <div>
    <!-- <form action="" method="post">
         -->
    <form action="" method="get">
        <button name="button" value="btn1"> Call Function</button>
    </form>
   </div>
    
</body>
</html>

<?php

// if(isset($_POST['button'])){
//     btn_click_test();
// echo "<br><br> From Get Methods";

// }

function btn_click_test(){
    echo "Function Called ON Button Click";
}

// if(isset($_GET['button'])){
//     btn_click_test(); ;
//    echo "<br><br> From Get Methods";
// }

if(isset($_REQUEST['button'])){
    btn_click_test();
    echo "<br> fRom REquest.";
}


?>