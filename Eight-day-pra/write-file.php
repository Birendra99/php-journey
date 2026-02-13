<?php

// $fileName="textFiles/Dummy.txt";
// $content="This is a dummy File";

// $file=fopen($fileName,"w") or die("Unable to create file");
// fwrite($file,$content);
// fclose($file);
// echo "File Created";

if (isset($_POST['fileName'])){

    $fileName="textFiles/".$_POST['fileName'];
    $content=$_POST['content'];
    $file=fopen($fileName,"w") or die("Unable to Create File");
    fwrite($file,$content);
    fclose($file);
    echo "File is Created Success";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Practise</title>
</head>
<body>
        <form action="" method="post">
            <input type="text" placeholder="Enter File Name" name="fileName"><br><br>
            <textarea name="content" id="content" placeholder="Enter The Content"></textarea><br><br>
            <button name="Button" >create File </button>
        </form>
    
</body>
</html>