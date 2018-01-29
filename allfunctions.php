<?php
/**
 * Created by PhpStorm.
 * User: nisha
 * Date: 22-Sep-17
 * Time: 11:04 PM
 */
$conn=mysqli_connect("localhost","root","","recruitment") or die('conn was not established');
if($conn){

}
else{
    echo "conn un succ";
}



?>


<?php

$q1 = "select * from chat;";
$result = mysqli_query($conn,$q1);
while($row = mysqli_fetch_array($result)){ }
?>




