<?php 

// // $Files is a super global files 
// print_r($_FILES);
// if($_FILES['fileUpload']){
//     $path=$_FILES['fileUpload']['name'];
//     // echo $path;

//     $upload_path="./upload-files ". $path; // shows the destination of files uploaded

   

//     echo $upload_path;
// }

// print_r($_FILES);
if($_FILES['fileUpload']){
 $path=$_FILES['fileUpload']['name'];
 $upload_path="./upload-files ". $path;
 move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path)
 || die("Failed To Upload");
}
else{
    die("No file found");
}
?>