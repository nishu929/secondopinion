<?php
$conn=mysqli_connect("localhost","root","","secondopinion") or die('conn was not established');
        if($conn){
            echo "conn suc";

        }
        else{
            echo "conn un succ";
        }
        $message = $_POST['text'];
        $sender = $_GET['mail'];
        $type = "text";
        $q1 = "insert into disscussion".$_GET['id']." values(null,'$type','$message','$sender')";
        $run = mysqli_query($conn,$q1);
header("location:discussion.php?id=".$_GET['id']."&mail=".$_GET['mail']);
    ?>