<html>
<head>
<style>
table {
    border-collapse: collapse;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
th,td
{
	width : 10%;
}
th {
    background-color: #708090;
    color: white;
}
tr:hover{background-color:#f5f5f5}
tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<?php
$status = "0";
$d=mysqli_connect("localhost","root","","secondopinion");
$s=mysqli_query($d,"select * from doc where verify='$status'");
echo "<table><tr><th>FIRST NAME</th><th>LAST NAME</th><th>ADDRESS</th><th>CITY</th><th>ZIP</th><th>COUNTRY</th><th>MOBILE NUMBER</th><th>EMAIL</th><th>QUALIFICATION</th><th>SPECIFICATION</th><th>COLLEGE</th><th>SCHOOL</th><th>YEARS OF EXPERIENCE</th><th>RESUME</th><th>TO APPROVE</th></tr>";
while($m=mysqli_fetch_row($s))
{$x=$m['12'];
	//$file = "C:\wamp64\www\ospproject\php\upload\\".$x;
    $file = $x;
	//echo $m['12'];
	$file2 = $m[13];	echo "<tr>";
	echo "<td>";
	echo $m[0];
	echo "</td>";
	echo "<td>";
	echo $m[1];
	echo "</td>";
	echo "<td>";
	echo $m[2];
	echo "</td>";
	echo "<td>";
	echo $m[3];
	echo "</td>";
	echo "<td>";
	echo $m[4];
	echo "</td>";
	echo "<td>";
	echo $m[14];
	echo "</td>";
	echo "<td>";
	echo $m[5];
	echo "</td>";
	echo "<td>";
	echo $m[6];
	echo "</td>";
	echo "<td>";
	echo $m[7];
	echo "</td>";
	echo "<td>";
	echo $m[8];
	echo "</td>";
	echo "<td>";
	echo $m[9];
	echo "</td>";
	echo "<td>";
	echo $m[10];
	echo "</td>";
	echo "<td>";
	echo $m[11];
	echo "</td>";
	echo "<td>";
    echo "<a href='../php/upload/".$file."'>Download</a> ";

    echo "</td>";
	echo "<td>";
	echo "<a href='approve.php?nama2=".$file2."'>Approve</a> ";
	echo "</td";
	echo "</tr>";
	

}
echo "</table>";
mysqli_close($d);
?>

</body>
</html>