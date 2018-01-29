<?php
$conn=mysqli_connect("localhost","root","","recruitment") or die('conn was not established');
        if($conn){
            echo "conn suc";

        }
        else{
            echo "conn un succ";
        }
        $message = $_POST['text'];
        $sender = 'nishant';
        $q1 = "insert into chat values(null,'$message',CURRENT_TIMESTAMP,'$sender')";
        $run = mysqli_query($conn,$q1);
        header("Location:/ospproject/create_discussion.php");
    ?>