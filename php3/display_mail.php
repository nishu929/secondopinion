
<!DOCTYPE html>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
<section class="mbr-section article" id="msg-box3-7" style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 120px;">


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <?php
                include ("connect.php");
                $id=$_GET['id'];
                $q1 = "select * from doctor_message where id='".$id."'";
                $result = mysqli_query($conn,$q1);
                while ($row = mysqli_fetch_array($result)){
//print_r($result);
                    ?>
                    <h3 class="mbr-section-title display-2"><?php echo $row['subject']?></h3>
                    <div class="lead"><p><?php echo $row['text']?></p></div>


                    <div><a class="btn btn-warning" href="uploads/<?php echo $row['attachment']?>" target="_blank">open attachment</a></div>

                <?php }?>
            </div>
        </div>
    </div>

</section>


<section class="engine"><a rel="external" href="https://mobirise.com">https://mobirise.com/</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smooth-scroll/smooth-scroll.js"></script>
<script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
<script src="assets/theme/js/script.js"></script>


<input name="animation" type="hidden">
</body>
</html>