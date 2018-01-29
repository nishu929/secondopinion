<?php
include ("connect.php");
$id=$_GET['id'];
$q1 = "select * from disini where id ='".$id."';";
$result = mysqli_query($conn,$q1);
$mail = $_GET['mail'];
while ($row = mysqli_fetch_array($result)) {
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset = "utf-8">
    <link rel="stylesheet" type="text/css" href="css_1/main1.css">
    <link rel="stylesheet" type="text/css" href="css_1/forum_css.css">
    <script type="text/javascript" src="jquery-3.1.0.min.js">
    </script>
    <script type="text/javascript" src="script.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        #o_frame{
            background-color: antiquewhite;
            width: 80%;
            height: 70%;
            position: relative;
            left: 10%;
            top: 10%;
        }
        #chat_rec{
            width:100%;
            height: 80%;
        }
        #input{
            width: 100%;
            height: 15%;
        }
        #text{
            width: 77%;
            height: 50px;
            font-size: 30px;
            position: relative;
            left: 1%;
            bottom: 1%;
        }
        #submit_button{
            width: 20%;
            height: 50px;
            position: relative;
            left: 1%;
            bottom: 10%;
        }
        #message{
            width: 100%;
            height: 50px;
        }
        #innermessage{
            width: 40%;
            position:relative;
            height: 50px;

        }
        #embed{
            position: relative;
            top : 100%;
            left: 20%;

        }
    </style>
</head>
<body>
<!--

<div class ="header">
<div class = "logo">
    <img src = "css_1/logo.png" width="" />
    <hr />
</div>
<nav>
    <ul>
        <a href="main.html"><li>Home</li></a>
        <a href="file.html"><li>File-sharing</li></a>
        <a href="social.html"><li>Social Networking</li></a>
        <a href="#"><li> Forum</li></a>
        <a href="competition.html"><li>Competition</li></a>
        <a href="contact.html"><li>Contact</li></a>
    </ul>

</nav>
-->
</div>

<div id="subheader">
    <div class="span12">
        <h1>Forum</h1>
        <span><?php echo $row[1];?> </span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<nbsp></nbsp>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span><?php echo "      By   | ".$row[2];?></span>

    </div>
</div>
<br />
<hr />
<br />
<!--
    <p></p>
    <p><?php echo $row[2];?></p>
    <p><?php echo $row[3];?></p>
    <p><?php echo $row[4];?></p>
-->

    <embed src="uploads/<?php echo $row[5];?>" width="800px" height="600px" id="embed" />
<br />
<br />
<hr />
<br />
<?php } ?>
    <div id="o_frame">
        <script>
            $('#chat_rec').scrollTop($('#chat_rec')[0].scrollHeight);

        </script>
        <iframe src="chathistory.php?mail=<?php echo $mail?>&id=<?php echo $id;?>" name="targetframe"  scrolling="yes" frameborder="0" id="chat_rec" >
        </iframe>

        <div id="input">
            <form action="sendmessage.php?mail=<?php echo $mail?>&id=<?php echo $id;?>" method="post" >
                <input type="text" name="text" id="text">
                <input type="submit" id="submit_button">
            </form>
        </div>
    </div>
</body>
</html>