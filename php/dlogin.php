<?php
include("connect.php");
$name = $_POST['e-mail'];
$password = $_POST['password'];



$sql="select email,password from doc;";

$result  = mysqli_query($conn,$sql);
$flag=0;
$message="username incorrect";

while ($list = mysqli_fetch_array($result)){


    if($list[0]==$name){
        $flag=1;
        $message="password is incorrect";

        if($list[1]==$password){

            $message="successful";
        }
        else{
            $flag=0;
        }


    }

}

if($flag==0){
    header("location:password_incorrect.html");
}
else {
    header("location:../project/logindoc.php?mail=" . $name);
}
?>


<a href="http://localhost/ospproject/php4/blog-initialise?mail=<?php echo $name;?>">create blog</a>
<a href="http://localhost/ospproject/php6/index.php?mail=<?php echo $name;?>">create disscussion</a>