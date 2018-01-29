
<?PHP
include("connect.php");
$id=$_GET['id'];


$exists = mysqli_query($conn,"select 1 from disscussion$id");

if($exists){

}
else {
    $q1 = "CREATE TABLE `disscussion$id` (
  `id` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,

  `mail` varchar(200) NOT NULL
);";
    $q2 = "ALTER TABLE `disscussion$id`  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
";

    $q3 = "ALTER TABLE `disscussion$id`  ADD PRIMARY KEY (`id`);";


    $result = mysqli_query($conn, $q1);
    $result2 = mysqli_query($conn, $q3);
    $result3 = mysqli_query($conn, $q2);


}

header("location:discussion.php?id=".$id."&mail=".$_GET['mail']);



        ?>

