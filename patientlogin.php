<?php
$uname1= $_POST['su'];
$pass1= $_POST['sp'];
$con=mysqli_connect ("localhost","root","","library");
$query="select * from studentlogin where username='$uname1' and password='$pass1'";
$res=mysqli_query($con,$query);
if($res)
    {
	$row=mysqli_fetch_array($res,MYSQL_ASSOC);
       if($row['password']==$pass1&&$row['username']==$uname1)
    {  
		
       include("smain.html"); }
    else{
	print "<script>";
    print "alert('Incorrect username or password')";
    print "</script>";
   include("a.html"); }
  }
 ?>