<?php

include ("connect.php");
$id=$_GET['id'];
$q2 = "UPDATE `nonuser_complain` SET `solved`='yes' WHERE id ='".$id."'";
$result2 = mysqli_query($conn,$q2);
header("location:portal.php")
?>