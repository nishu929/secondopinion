<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
            background-color: #4CAF50;
            color: white;
        }
        .myButton {
            -moz-box-shadow: 0px 10px 14px -7px #3e7327;
            -webkit-box-shadow: 0px 10px 14px -7px #3e7327;
            box-shadow: 0px 10px 14px -7px #3e7327;
            background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77b55a), color-stop(1, #72b352));
            background:-moz-linear-gradient(top, #77b55a 5%, #72b352 100%);
            background:-webkit-linear-gradient(top, #77b55a 5%, #72b352 100%);
            background:-o-linear-gradient(top, #77b55a 5%, #72b352 100%);
            background:-ms-linear-gradient(top, #77b55a 5%, #72b352 100%);
            background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77b55a', endColorstr='#72b352',GradientType=0);
            background-color:#77b55a;
            -moz-border-radius:4px;
            -webkit-border-radius:4px;
            border-radius:4px;
            border:1px solid #4b8f29;
            display:inline-block;
            cursor:pointer;
            color:#ffffff;
            font-family:Arial;
            font-size:13px;
            font-weight:bold;
            padding:6px 12px;
            text-decoration:none;
            text-shadow:0px 1px 0px #5b8a3c;
        }
        .myButton:hover {
            background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #72b352), color-stop(1, #77b55a));
            background:-moz-linear-gradient(top, #72b352 5%, #77b55a 100%);
            background:-webkit-linear-gradient(top, #72b352 5%, #77b55a 100%);
            background:-o-linear-gradient(top, #72b352 5%, #77b55a 100%);
            background:-ms-linear-gradient(top, #72b352 5%, #77b55a 100%);
            background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#72b352', endColorstr='#77b55a',GradientType=0);
            background-color:#72b352;
        }
        .myButton:active {
            position:relative;
            top:1px;
        }
    </style>
</head>
<body>
<br>
<br>
<br>
<br>
<br>

<h2 align="center">New Message</h2>

<table>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Savings</th>
        <th>Savings</th>

    </tr>
    <?php
    include ("connect.php");
    $q1 = "select * from patient_message where recever='".$_GET['mail']."' and m_read='no';";
    $result = mysqli_query($conn,$q1);
    while ($row = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo$row['7']?></td>
        <td><?php echo$row['2']?></td>
        <td><?php echo$row['4']?></td>
        <td><a href="display_mail.php?mail=<?php echo $_GET['mail']?>&id=<?php echo $row['0']?>" class="myButton">Read</a></td>
        <?php } ?>
</table>

</body>
</html>
