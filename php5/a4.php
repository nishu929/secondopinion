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
<body>
<fieldset>
<legend>CHOOSE THE SPECIALISATION</legend>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<select name="task">
  <option value="ALL">ALL SPECIALISATIONS</option>
  <option value="generalmedicine">GENERAL MEDICINE</option>
  <option value="gynaecology">GYNAECOLOGY</option>
  <option value="dietmanagement">DIET MANAGEMENT</option>
  <option value="neurology">NEUROLOGY</option>
  <option value="psychiatry">PSYCHIATRY</option>
  <option value="paediatrics">PAEDIATRICS</option>
  <option value="orthopedics">ORTHOPEDICS</option>
  <option value="endocrinology">ENDOCRINOLOGY</option>
</select><br><br>
<input type="submit" value="SEARCH">
</fieldset>
</form>
<?php
$d=mysqli_connect("localhost","root","","secondopinion");
$selectOption = "ALL";
$status = "1";
if($_POST)
$selectOption = $_POST['task'];
if($selectOption == "ALL")
$s=mysqli_query($d,"select * from doc where verify=$status");
else
$s=mysqli_query($d,"select * from doc where spec ='".$selectOption."'"."and verify='".$status."';");
echo "<table><tr><th>FIRST NAME</th><th>LAST NAME</th><th>ADDRESS</th><th>CITY</th><th>ZIP</th><th>COUNTRY</th><th>MOBILE NUMBER</th><th>EMAIL</th><th>QUALIFICATION</th><th>SPECIFICATION</th><th>COLLEGE</th><th>SCHOOL</th><th>YEARS OF EXPERIENCE</th><th>DOWNLOAD RESUME</th></tr>";
while($m=mysqli_fetch_row($s))
{
    $x=$m['12'];
    //$file = "C:\wamp64\www\ospproject\php\upload\\".$x;
    $file = $x;

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
	//echo "<a href='download.php?nama=".$file."'>Download</a> ";
    echo "<a href='../php/upload/".$file."'>Download</a> ";
    echo "</td>";
	echo "</tr>";

}
echo "</table>";
mysqli_close($d);
?>

</body>
</html>