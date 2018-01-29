
<?php
include("connect.php");
$name=$_GET['mail'];
$id=$_GET['id'];
$q1 = "UPDATE `blog` SET `text`='".$_POST['text']."' ,`flag`='yes' WHERE `id`=$id";
$result  = mysqli_query($conn,$q1);
header("location:../project/logindoc.php?mail=".$name);
?>

