<!DOCTYPE html>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
<?php
$conn=mysqli_connect("localhost","root","","secondopinion") or die('conn was not established');
if($conn){

}
else{
    echo "conn un succ";
}
$id=$_GET['id'];
$query="select * from blog where id='".$id."';";
$result  = mysqli_query($conn,$query);

while ($list = mysqli_fetch_array($result)){

    ?>

<section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background" id="header1-3" style="background-image: url(assets/images/jumbotron.jpg);">



    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

                    <h1 class="mbr-section-title display-1"><?php echo "Title  ". $list[0];?></h1>
                    <h4 ><?php echo "By  ". $list[1];?></h4>
                    <p ><?php echo "on  ". $list[3];?></p>

                    <br>

                    <p class="mbr-section-lead lead"><?php echo $list[2];?></p>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>



</section>
<div class="container"  >

    <div class="row">
        <?php
        //scan "uploads" folder and display them accordingly
        $folder = "uploads".$_GET['id']."/";
        if( is_dir($folder) === false )
        {
            mkdir($folder);
        }
        $results = scandir($folder);
        foreach ($results as $result) {
            if ($result === '.' or $result === '..') continue;

            if (is_file($folder . '/' . $result)) {
                echo '
                <div class="col-md-4">
            <div class="thumbnail">
                <a href="'.$folder . '/' . $result.'"  target="_blank"><img src="'.$folder . '/' . $result.'" alt="..."></a>
                <div class="caption">
                   
                </div>
            </div>
        </div>';
            }
        }
        ?>
    </div>




</div> <!-- /container -->

<section class="engine"><a rel="external" href="https://mobirise.com">Mobirise Web Site Builder</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smooth-scroll/smooth-scroll.js"></script>
<script src="assets/jarallax/jarallax.js"></script>
<script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
<script src="assets/theme/js/script.js"></script>


<input name="animation" type="hidden">
</body>
</html>
