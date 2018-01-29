<?php
include("connect.php");
$title=$_POST['title'];
$mail=$_GET['mail'];
$phone=$_POST['phone'];
$content=$_POST['message'];
$url=basename( $_FILES["file"]["name"]);
$targetfolder = "upload/";

$targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    //echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    //header("Location:/ospproject/blog_create.php");

    if($run){


    }else{
        echo"<h2>unsuc</h2>";
    }

} else {
    echo "Sorry, there was an error uploading your file.";
}


$sql="INSERT INTO `disini`(`id`, `title`, `mail`, `content`, `phone`, `file`) VALUES (NULL,'$title','$mail','$content','$phone','$url');";

$result  = mysqli_query($conn,$sql);
$flag=0;

$sql1="select id from disini where mail ='".$mail."' and title = '".$title."'";

$result1  = mysqli_query($conn,$sql1);
$flag=0;

while ($list = mysqli_fetch_array($result1)) {//to get last id with doctors mail
    $id = $list['0'];
}
//echo "location:blog_create.php?id=".$id;
header("location:create_discussion.php?id=".$id."&mail=".$mail);

?>