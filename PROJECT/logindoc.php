<!DOCTYPE html>
<html> 
<head>
<title>doc-login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style>
html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft", "Roboto", sans-serif;}
.w3-sidenav a {padding:16px;}</style>
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #frame{
            position: absolute;
            width:77%;
            height: 90%;
            top:10%;
            left: 23%;

        }
    </style>
</head>
<body>
<body class="w3-light-grey">
<?php
$mail = $_GET['mail'];
?>
<!-- Navigation Bar -->
<div class="w3-top" style="background-color:#000000">
 <div class="w3-bar w3-theme-d2 w3 right-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-opennav w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="color:#ffffff;"><i class="fa fa-user" style="color:#ffffff;padding-right:5px;"></i>Profile</a>

     <a href="../php4/blog-initialise.php?mail=<?php echo $mail;?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="color:#ffffff;"><i class="fa fa-bar" style="color:#ffffff;padding-right:5px"></i>Create post</a>
     <a href="../php4/display_blogs.php?mail=<?php echo $mail;?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="color:#ffffff;"><i class="fa fa-bar" style="color:#ffffff;padding-right:5px"></i>All blog</a>

     <a href="../php6/index.php?mail=<?php echo $mail;?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="color:#ffffff;"><i class="fa fa-bar" style="color:#ffffff;padding-right:5px"></i>Create discussion</a>
     <a href="../php6/display_discussion.php?mail=<?php echo $mail;?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="color:#ffffff;"><i class="fa fa-bar" style="color:#ffffff;padding-right:5px"></i>All discussions</a>

     <a href="homepage.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="color:#ffffff;" ><i class="fa fa-sign-out" style="color:#ffffff;padding-right:5px"></i>Sign Out</a>

 </div>
</div>
<br><!-- Side Navigation -->
<br><!-- Side Navigation -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left w3-card-2" style="z-index:3;width:320px;" id="mySidenav">

  <a href="javascript:void(0)" class="w3-dark-grey w3-button w3-hover-black w3-left-align" onclick="document.getElementById('id01').style.display='block'">New Message <i class="w3-padding-left fa fa-pencil"></i></a>
  <div>
  </div>
    <a href="http://localhost/ospproject/php3/inbox.php?mail=<?php echo$mail;?>" target="iframe"><i class="fa fa-inbox w3-padding-right"></i>Inbox</a>

    <a href="http://localhost/ospproject/php3/sendbox.php?mail=<?php echo$mail;?>" target="iframe"><i class="fa fa-paper-plane w3-padding-right"></i>Sent</a>

</nav>
    Try it Yourself »

<!-- Modal that pops up when you click on "New Message" -->
<div id="id01" class="w3-modal" style="z-index:4">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-padding w3-black">
       <span onclick="document.getElementById('id01').style.display='none'" class="w3-right w3-xxlarge w3-closebtn"><i class="fa fa-remove"></i></span>
      <h2>Send Mail</h2>
    </div>
    <div class="w3-panel">
    <form method="POST" action="../php3/send_message.php?mail=<?php echo$_GET['mail']?>" enctype="multipart/form-data">
     <span style="padding-left:40px;"> Mail
  <input type="text" name="patient">
  <span style="padding-left:180px;">

<br/>
      <br/>
      <label>Attachment</label>
      <input class="w3-input w3-border w3-margin-bottom" type="file" name="file">
      <label>Subject</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text" name="subject">
      <input class="w3-input w3-border w3-margin-bottom" style="height:150px" placeholder="What's on your mind?" name="message">
      <div class="w3-section">
        <a class="w3-button w3-black" onclick="document.getElementById('id01').style.display='none'">Cancel  <i class="fa fa-remove"></i></a>
        <a class="w3-button w3-right" onclick="document.getElementById('id01').style.display='none'" > <input type="submit" value="Send"> <i class="fa fa-paper-plane"></i></a>
      </div>    
    </div>
  </div>
</div>

<!-- Overlay effect when opening the side navigation on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="Close Sidemenu" id="myOverlay"></div>

<!-- Page content -->
<div class="w3-main" style="margin-left:320px;">
<i class="fa fa-bars w3-opennav w3-hide-large w3-xlarge w3-margin-left w3-margin-top" onclick="w3_open()"></i>
<a href="javascript:void(0)" class="w3-hide-large w3-red w3-button w3-right w3-margin-top w3-margin-right" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-pencil"></i></a>

</div></div><iframe src="http://localhost/ospproject/php3/unread.php?mail=<?php echo $mail;?>" id="frame" name="iframe" ></iframe>




<script>
var openInbox = document.getElementById("myBtn");
openInbox.click();

function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

function myFunc(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show"; 
        x.previousElementSibling.className += " w3-red";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-red", "");
    }
}

openMail("Borge")
function openMail(personName) {
    var i;
    var x = document.getElementsByClassName("person");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    x = document.getElementsByClassName("test");
    for (i = 0; i < x.length; i++) {
       x[i].className = x[i].className.replace(" w3-light-grey", "");
    }
    document.getElementById(personName).style.display = "block";
    event.currentTarget.className += " w3-light-grey";
}
</script>

<script>
var openTab = document.getElementById("firstTab");
openTab.click();
</script>



</body>
</html> 
