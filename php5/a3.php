<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
th {
    background-color: #708090;
    color: white;
}
tr:hover{background-color:#f5f5f5}
tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body style="font-size:30;">
<?php
$d=mysqli_connect("localhost","root","","secondopinion");
$s=mysqli_query($d,"select * from patient");
echo "<table><tr><th>FIRST NAME</th><th>LAST NAME</th><th>ADDRESS</th><th>CITY</th><th>ZIP</th><th>COUNTRY</th><th>MOBILE NUMBER</th><th>EMAIL</th><th>BLOOD GROUP</th>";
while($m=mysqli_fetch_row($s))
{
	
	echo "<tr>";
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
	echo "</tr>";

}
echo "</table>";
mysqli_close($d);
?>
</body>
</html>