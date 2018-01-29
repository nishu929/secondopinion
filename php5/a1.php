<html><head></head>
<body style="font-size:30;">
<b><center>WELCOME</center></b>
	<img src="l7.jpg" height="40%" width="100%">
	<hr>
<font size="4">
<?php

$totaldoctors = 0;
$totalpatients = 0;
$totalcomplaints = 0;
$d=mysqli_connect("localhost","root","","secondopinion");
$s=mysqli_query($d,"select * from doc");

while($m=mysqli_fetch_row($s))
{
	$totaldoctors++;
}
echo "NO OF DOCTORS REGISTERED-";
echo $totaldoctors;
$s=mysqli_query($d,"select * from patient");
while($m=mysqli_fetch_row($s))
{
	$totalpatients++;
}
echo "<br><br>NO OF PATIENTS REGISTERED-";
echo $totalpatients;
$s=mysqli_query($d,"select * from nonuser_complain");
while($m=mysqli_fetch_row($s))
{
	$totalcomplaints++;
}
echo "<br><br> NO OF COMPLAINTS-";
echo $totalcomplaints;

mysqli_close($d);
?>
<br>
</font>
</body>
</html>