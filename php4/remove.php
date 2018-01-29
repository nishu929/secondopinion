<?php
// get correct file path
include("connect.php");

$id=$_GET['id'];
$mail= $_GET['mail'];
$fileName = $_GET['name'];
$filePath = 'uploads'.$id."/".$fileName;
//echo $filePath;
$sql="DELETE FROM `blog_pictures` where url ='".$fileName."'";

$result  = mysqli_query($conn,$sql);
// remove file if it exists
if ( file_exists($filePath) ) {
    unlink($filePath);
    header("Location:/ospproject/php4/blog_create.php?id=".$id."&mail=".$mail);
}
?>