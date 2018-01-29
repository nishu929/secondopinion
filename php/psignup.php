<?php
include("connect.php");
$Fname = $_POST['p1'];
$Lname = $_POST['p2'];
$phone = $_POST['p7'];
$mail  = $_POST['p8'];
$time = time();
$otp=rand(1000,9000);
$address = $_POST['p3'];
$city = $_POST['p4'];
$zip = $_POST['p5'];
$country = $_POST['p6'];
$blood=$_POST['p9'];
$password = $_POST['p10'];


$q1="select mail from patient;";
$result = mysqli_query($conn,$q1);
$flag=1;
print_r($result);
while ($row=mysqli_fetch_array($result)){

    if($row[0]==$mail){
        $flag=0;
        header("location:error_dexists.php");

    }


}
if($flag==0) {
    header("location:error_dexists.php");

}
else {

    echo $otp;
    $insert_otp = "INSERT INTO `patient_otp`( `mail`,  `otp`,`time`) VALUES ('$mail','$otp','$time');";
    $run = mysqli_query($conn,$insert_otp);


    if(mail($mail,'verify your account','hey , your otp for your sign up process is '.$otp.' ','From: wegivesecondopinion@gmail.com' . "\r\n" .'MIME-Version: 1.0' . "\r\n" .'Content-type: text/html; charset=utf-8')){
        echo 'otp sent to your mail';
    }
    else{
        echo'not sent successfuly';
    }


//echo $url. "<br>";
    $insert = "INSERT INTO `patient`(`fname`, `lname`, `add`, `city`, `zip`, `country`, `mob`, `mail`, `blood`, `id` ,`password`) VALUES ('$Fname','$Lname','$address','$city','$zip','$country','$phone','$mail','$blood',NULL,'$password');";
    $run = mysqli_query($conn,$insert);



    if($run){
      echo $url;
         header("location:potp_check.php?mail=".$mail);

    }else{
        echo"<h2>unsuc</h2>";
    }

}


?>