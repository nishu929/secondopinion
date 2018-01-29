<?php
include("connect.php");
$Fname = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];
$insert = "INSERT INTO `nonuser_complain`(`id`, `name`, `mail`, `message`) VALUES (null,'$Fname','$mail','$message');";
$run = mysqli_query($conn,$insert);
echo "<script type='text/javascript'>prompt('message');</script>";
header("location:http://localhost/ospproject/PROJECT/homepage.html");
