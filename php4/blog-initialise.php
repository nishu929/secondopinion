<?php
include("connect.php");
$name = $_GET['mail'];



$sql="insert into blog values (null,'$name',null,now(),'no');";

$result  = mysqli_query($conn,$sql);
$flag=0;

$sql1="select id from blog where mail ='".$name."'";

$result1  = mysqli_query($conn,$sql1);
$flag=0;

while ($list = mysqli_fetch_array($result1)) {//to get last id with doctors mail
    $id = $list['0'];
}
//echo "location:blog_create.php?id=".$id;
header("location:blog_create.php?id=".$id."&mail=".$name);

?>