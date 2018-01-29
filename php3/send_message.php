<?php
include ("connect.php");
$doctor=$_POST['patient'];
$sender = $_GET['mail'];
//$attachment = "url";
$url=basename( $_FILES["file"]["name"]);
$subject=$_POST['subject'];
$text=$_POST['message'];
$q1= "insert into patient_message values(NULL ,'$url','$subject','$text','$sender','$doctor','no',CURRENT_TIMESTAMP)";
$result= mysqli_query($conn,$q1);

$target_dir = "../php2/uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    //echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    //header("Location:/ospproject/blog_create.php");



} else {
    echo "Sorry, there was an error uploading your file.";
}

header("location:../project/logindoc.php?mail=".$sender);

?>