<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        #o_frame{
            background-color: antiquewhite;
            width: 80%;
            height: 70%;
            position: absolute;
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
            position: absolute;
            left: 1%;
            bottom: 1%;
        }
        #submit_button{
            width: 20%;
            height: 50px;
            position: absolute;
            left: 79%;
            bottom: 2%;
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
    </style>
</head>
<body>
<?PHP
        $conn=mysqli_connect("localhost","root","","recruitment") or die('conn was not established');
        if($conn){

        }
        else{
            echo "conn un succ";
        }
$exists = mysqli_query($conn,"select 1 from chat2");

if($exists !== FALSE)
{
}else{
   $q1 = "CREATE TABLE `chat2` (
                        `id` int(10) NOT NULL,
                            `message` varchar(700) DEFAULT NULL,
                            `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
                               `sender` varchar(200) NOT NULL
                           ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
                           ";
                $q2 = "ALTER TABLE `chat` ADD PRIMARY KEY (`id`);";
                $q3 = "ALTER TABLE `chat` MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;";
                $result = mysqli_query($conn,$q1);
                $result2 = mysqli_query($conn,$q2);
                $result3 = mysqli_query($conn,$q3);


}






        ?>
<div id="o_frame">
<script>
    $('#chat_rec').scrollTop($('#chat_rec')[0].scrollHeight);

    </script>
<iframe src="chathistory.php" name="targetframe"  scrolling="yes" frameborder="0" id="chat_rec" >
    </iframe>

    <div id="input">
        <form action="sendmessage.php" method="post">
            <input type="text" name="text" id="text">
            <input type="submit" id="submit_button">
        </form>
    </div>
</div>
</body>
</html>