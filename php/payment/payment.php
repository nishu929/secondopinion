<?php
include("connect.php");
$mail= $_GET['mail'];
$amount = $_GET['amount'];
$r = rand(10000000,99999999);
$insert = "INSERT INTO `p_subscription` (`id`, `p_mail`, `package`, `t_id`, `date`) VALUES (NULL, '$mail', '$amount','$r', now());";
$run = mysqli_query($conn,$insert);
echo "<script type='text/javascript'>prompt('message');</script>";

if(mail($mail,'payment done sucssesful','payment of rs :'.$amount.' is done sucssesfully your transection id is  '.$r,'From: wegivesecondopinion@gmail.com' . "\r\n" .'MIME-Version: 1.0' . "\r\n" .'Content-type: text/html; charset=utf-8')){
    echo 'otp sent to your mail';
}
else{
    echo'not sent successfuly';
}
if(mail('wegivesecondopinion@gmail.com','$mail','payment of rs :'.$amount.' is done sucssesfully users transection id is  '.$r,'From: wegivesecondopinion@gmail.com' . "\r\n" .'MIME-Version: 1.0' . "\r\n" .'Content-type: text/html; charset=utf-8')){
    echo 'otp sent to your mail';
}
else{
    echo'not sent successfuly';
}

header("location:../thankyou.php?mail=$mail");
//header("location:http://localhost/ospproject/PROJECT/loginuser.php?mail=$mail");
?>

