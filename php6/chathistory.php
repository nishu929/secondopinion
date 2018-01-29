    <html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <style>
    #message{
                width: 100%;
                height: 50px;
            }
            #innermessage{
                width: 40%;
                position:relative;
                height: 50px;
                overflow-wrap: break-word;

            }
    </style>
    <body>

    <div id="chat_rec">
        <?php
        $conn=mysqli_connect("localhost","root","","secondopinion") or die('conn was not established');
                if($conn){

                }
                else{
                    echo "conn un succ";
                }
        $q1 = "select * from disscussion".$_GET['id'].";";
        $result = mysqli_query($conn,$q1);
        while($row = mysqli_fetch_array($result)){
            ?>
<div id="message">
    <div id='innermessage' style='<?php

    if($row[3]=='nishant'){
    echo 'left:5%;';
    }
    else{
       echo 'left:55%;';
    }

    ?>'>
            <p > <?php echo $row[3].": "?><?php echo $row[2];?><p>
    </div>
</div>

            <?php
        }



        ?>
    </div>
    <script>
        $('#chat_rec').scrollTop($('#chat_rec')[0].scrollHeight);

        </script>
    </body>
    </html>