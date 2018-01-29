<?php
include("connect.php");
$name = $_POST['mail'];
$password = $_POST['password'];


$sql="select mail,password from patient;";

$result  = mysqli_query($conn,$sql);
$flag=0;
$message="username incorrect";

while ($list = mysqli_fetch_array($result)){


    if($list[0]==$name){
        $message="password is incorrect";
        $flag=1;
        if($list[1]==$password){
            $flag=1;
            echo $flag;
        }
        else{
            $flag=0;
            $message="password is incorrect";
        }


    }

}

if($flag==0){
    echo  $message;
    header("location:password_incorrect.html");
}
else {
    header("location:../project/loginuser.php?mail=" . $name);
}

?>

