<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        #textarea{
            position: absolute;
            top:15%;
            left:20%;
            width: 80%;

        }
        body{
            width: 100%;
        }
        .container{
            position: relative;
            right:15%;
            top: 110%;
            width: 70%;
        }
        #post{
            position: relative;
            width: 100%;
            bottom:0%;
            left: 50%;

        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<div id="textarea">
    <form action="post_blog.php?id=<?php echo $_GET['id']."&mail=".$_GET['mail']?>"  method="post" >
        <textarea name="text" id="" cols="120" rows="15">


    </textarea>
        <br>
        <br>


        <input align="center" type="submit"  class="btn btn-lg btn-primary" value="post">


        <br>
        <br>
        <br>



    </form>
    <!-- Static navbar -->

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
                <img src="'.$folder . '/' . $result.'" alt="...">
                <div class="caption">
                    <p><a href="remove.php?name='.$result.'&mail='.$_GET['mail'].'&id='.$_GET['id'].'" class="btn btn-danger btn-xs" role="button">Remove</a></p>
                </div>
            </div>
        </div>';
                    }
                }
                ?>
            </div>



            <div class="row">
                <div class="col-lg-7">
                    <form class="well" action="upload.php?id=<?php echo $_GET['id']."&mail=".$_GET['mail']?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="file">Select a file to upload</label>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <p class="help-block">Only jpg,jpeg,png and gif file with maximum size of 1 MB is allowed.</p>
                        </div>
                        <input type="submit" class="btn btn-lg btn-primary" value="Upload">
                    </form>
                </div>
            </div>
        </div> <!-- /container -->

    </div>
<div id="post">
    <form  action="post_blog.php?id=<?php echo $_GET['id']."&mail=".$_GET['mail']?>" method="post" enctype="multipart/form-data">

    </form>

</div>
</body>
</html>