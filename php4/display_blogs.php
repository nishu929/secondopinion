<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <title>Blog</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="font/font.css">
    <link href="style.css" rel="stylesheet" media="screen">
    <link href="responsive.css" rel="stylesheet" media="screen">
    <style>
        #oneimage{
            height: 200px;
            width: 300px;
        }
    </style>
</head>


<body>
<div class="fix header_area">
    <div class="fix wrap header">
        <div class="logo floatleft">
            <h1>Second Opinion Blog</h1>
        </div>
        <div class="manu floatright">

        </div>
    </div>
</div>

<div class="fix content_area">

    <br>

    <br>

    <br>

    <br>

    <br>


    <div class="fix wrap content_wrapper">
        <div class="fix content">
            <div class="fix main_content floatleft">
                <div class="fix single_content_wrapper">


<?php
include("connect.php");


$q1 = "select * from blog where flag = 'yes'";
$result  = mysqli_query($conn,$q1);

while ($list = mysqli_fetch_array($result)){





?>

    <?php
    //scan "uploads" folder and display them accordingly
    $folder = "uploads".$list[0]."/";

    $results = scandir($folder);
    $a="images/home_featured.png";
    foreach ($results as $r) {
        if ($r === '.' or $r === '..') continue;

        if (is_file($folder . '/' . $r)) {
            $a= $folder .'' . $r;
            //                        <img src="images/home_featured.png" alt=""/>

        }
    }
    ?>


                    <div class="fix single_content floatleft">

                            <img style="max-width:100%;height: 100%;width: 100%;" src="<?php echo $a;?>" alt="" />


                        <div class="fix single_content_info">
                            <h1><?php echo $list[0]?></h1>
                            <p class="author"><?php echo $list[1]?></p>
                            <div class="fix post-meta">
                                <a href="seemore.php?id=<?php echo $list[0];?>">see more .... </a>
                            </div>
                        </div>

                    </div>


<?php } ?>

                </div>

                <div class="pagination fix">
                    <a href="">1</a>
                    <a href="">1</a>
                    <a href="">1</a>
                    <a href="">1</a>
                    <a href="">1</a>
                    <a href="">1</a>
                </div>
            </div>

        </div>
    </div>

</div>
<script type="text/javascript" src="js/placeholder_support_IE.js"></script>
<script type="text/javascript" src="js/selectnav.min.js"></script>
<script type="text/javascript">
    selectnav('nav-top', {
        label: '-Navigation-',
        nested: true,
        indent: '-'
    });

    selectnav('nav-bottom', {
        label: '-Navigation-',
        nested: true,
        indent: '-'
    });
</script>

</body>
</html>
