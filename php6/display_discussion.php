<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <title>Discussion portal</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="font/font.css">
    <link href="style.css" rel="stylesheet" media="screen">
    <link href="responsive.css" rel="stylesheet" media="screen">
</head>


<body>
<div class="fix header_area">
    <div class="fix wrap header">
        <div class="logo floatleft">
            <h1>Second Opinion disscussion portal</h1>
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


$q1 = "select * from disini";
$result  = mysqli_query($conn,$q1);

while ($list = mysqli_fetch_array($result)){





?>
                        <div class="fix single_content_info">
                            <h1>&nbsp&nbsp&nbsp&nbspTopic&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $list[0]?></h1>
                            <br>
                            <p class="author">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTitel&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $list[1]?></p>
                            <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspby&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $list[2]?></p>
                            <div class="fix post-meta">
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="discussion.php?id=<?php echo $list[0];?>&mail=<?php echo $_GET['mail'];?>">see more .... </a>
                            </div>
                        </div>

    <br>

    <br>

    <br>

    <br>

    <br>

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
