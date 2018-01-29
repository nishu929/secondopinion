<?php
include("connect.php");
$Fname = $_POST['p1'];
$Lname = $_POST['p2'];
$phone = $_POST['p7'];
$mail=$_POST['p8'];
$time = time();
$address = $_POST['p3'];
$city = $_POST['p4'];
$zip = $_POST['p5'];
$country = $_POST['p6'];
$qualification = $_POST['p9'];
$spec = $_POST['p10'];
$coll = $_POST['p11'];
$school = $_POST['p12'];
$exp = $_POST['p13'];
$resume="jk";
$password = $_POST['password'];
$otp=rand(1000,9000);
//echo $otp;

$q1="select email from doc";
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
else{

    $insert_otp = "INSERT INTO `doc_otp`( `mail`,  `otp`,`time`) VALUES ('$mail','$otp','$time');";
    $run = mysqli_query($conn,$insert_otp);


    if(mail($mail,'verify your account','mam, yout otp for your sign up process is '.$otp.' ','From: wegivesecondopinion@gmail.com' . "\r\n" .'MIME-Version: 1.0' . "\r\n" .'Content-type: text/html; charset=utf-8')){
        echo 'otp sent to your mail';
    }
    else{
        echo'not sent successfuly';
    }











//$password = $_POST['password'];
    $url=basename( $_FILES["file"]["name"]);
    echo $url. "<br>";

//$insert = "INSERT INTO `doc`(`fname`, `lname`, `add`, `city`, `zip`, `country`, `mob`, `email`, `qual`, `spec`, `college`, `school`, `exp`, `resume`) VALUES ('$Fname','$Lname','$address','$city','$zip','$country','$phone','$mail','$qualification','$spec','$coll','$school','$exp','$resume')";
    $insert = "INSERT INTO `doc`(`fname`, `lname`, `add`, `city`, `zip`, `country`, `mob`, `email`, `qual`, `spec`, `college`, `school`, `exp`, `resume`,`id`,`password`) VALUES ('$Fname','$Lname','$address','$city','$zip','$country','$phone','$mail','$qualification','$spec','$coll','$school','$exp','$url',NULL,'$password' );";
//$insert = "INSERT INTO `doc` (`fname`, `lname`, `add`, `city`, `zip`, `mob`, `email`, `qual`, `spec`, `college`, `school`, `exp`, `resume`, `id`, `country`) VALUES ('sakshi', 'tayal', 'jklakshmi', 'sirohi', '37019', '0777887662', 'nishantpatel929@gmail.com', 'doctor', 'neurology', 'nisant', 'nishant', '6', 'string', NULL, 'india');";
    $run = mysqli_query($conn,$insert);




    $targetfolder = "upload/";

    $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
        //header("Location:/ospproject/blog_create.php");

        if($run){

            header("location:dotp_check.php?mail=".$mail);

        }else{
            echo"<h2>unsuc</h2>";
        }

    } else {
        echo "Sorry, there was an error uploading your file.";
    }


}
?>