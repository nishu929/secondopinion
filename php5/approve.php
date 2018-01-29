<?php
$name= $_GET['nama2'];
$d=mysqli_connect("localhost","root","","secondopinion");
$query="UPDATE `doc` SET `verify` = '1' WHERE `doc`.`id` =". $name;
$s=mysqli_query($d,$query);
echo "<script>alert('doctor has been approved');</script>";
?>