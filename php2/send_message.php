<?php
//PHP 2 USER
include ("connect.php");
$doctor=$_POST['doctor'];
$sender = $_GET['mail'];
//$attachment = "url";
$url=basename( $_FILES["file"]["name"]);


$target_dir = "../php3/uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    //echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    //header("Location:/ospproject/blog_create.php");
} else {
    echo "Sorry, there was an error uploading your file.";
}
$subject=$_POST['subject'];
$text=$_POST['message'];

$q2 = "select max(date) from p_subscription where p_mail = '".$sender."'";
$q3 = "select package from p_subscription where p_mail = '".$sender."'";
$r3 = mysqli_query($conn,$q3);
$ans3 = mysqli_fetch_array($r3);
$r2 = mysqli_query($conn,$q2);
$ans = mysqli_fetch_array($r2);
$package = $ans3['0'];
//print_r($ans['max(date)']);
//echo date("d/m/Y", strtotime($ans['max(date)']));
$date = strtotime($ans['max(date)']);

//$package = $ans['package'];
function time_elapsed_A($secs){
    $bit = array(
        'y' => $secs / 31556926 % 12,
        'w' => $secs / 604800 % 52,
        'd' => $secs / 86400 % 7,
        'h' => $secs / 3600 % 24,
        'm' => $secs / 60 % 60,
        's' => $secs % 60
    );

    foreach($bit as $k => $v)
        if($v > 0)$ret[] = $v . $k;
return $bit;
   // return join(' ', $ret);
}

//$x= strtotime($date);
//echo time();
//echo '<br>';
//echo time()-$date;
//echo $date;
//echo time();
//echo time_elapsed_A(time());
//echo '<br>';
if($package==500){
    $ws = 4;

}
if($package==2000){
    $ws=12;
}
if($package==3500){
    $ws=24;
}







$x= time_elapsed_A(time()-$date);
$d = $x['d'];
$w =  $x['w'];
$y = $x['y'];

if($y==0 and $w<$ws){
    $q1= "insert into doctor_message values(NULL ,'$url','$subject','$text','$sender','$doctor','no',CURRENT_TIMESTAMP)";
    $result= mysqli_query($conn,$q1);
    header("location:../project/loginuser.php?mail=".$sender);

}
else{
    echo "invalid";
}


?>