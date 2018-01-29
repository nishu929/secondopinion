<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Patient Profile </title>
  <link rel="shortcut icon" href="http://designshack.net/favicon.ico">
    <style>
        body {
            font-family: 'Abel';font-size: 66px;
        }
    </style>
  <link rel="icon" href="http://designshack.net/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>

<body>
  
  
  <div id="w">
    <div id="content" class="clearfix">
      <div id="userphoto"><img src="images/avatar.png" alt="default avatar" ></div>
      <h1>Your Profile</h1>

      <nav id="profiletabs">
        <ul class="clearfix">
          <li><a href="#bio" class="sel">Bio</a></li>
          
        </ul>
      </nav>
      
      <section id="bio">
        
<table border = 'solid' style="margin-left:40px;">

<?php
$conn = mysqli_connect('localhost','root' ,'','secondopinion') or die (mysqli_error());
$mail = $_GET['mail'];


$q1 = "select * from patient where mail = '".$mail."';";
$run = mysqli_query($conn,$q1);

  while ($list = mysqli_fetch_array($run)){
  

      echo"First Name" ."  ". $list[0]."<br>";
      echo "Last Name" ."  " .$list[1]."<br>";
      echo "Address"   ."  " .$list[2]."<br>";
      echo "City"      ."  " .$list[3]."<br>";
      echo "Pincode"   ."  " .$list[4]."<br>";
      echo "Country"   ."  " .$list[5]."<br>";
      echo "Mobile no" ."  ".$list[6]."<br>";
      echo "Blood Group"."   ".$list[8]."<br>";
 }?>

</table>
      </section>
      
          
        <section id="settings" class="hidden">
        <p>Edit your user settings:</p>
        <?php
$conn = mysqli_connect('localhost','root' ,'','secondopinion') or die (mysqli_error());

if(isset($_GET['mail'])){
    $mail = $_GET['mail'];
$q1 = "select * from patient where mail = '".$mail."';";
$run = mysqli_query($conn,$q1);

  while ($list = mysqli_fetch_array($run)){
  ?>

        
        <p class="setting"><span>E-mail Address <img src="images/edit.png" alt="*Edit*"><?php echo $list[7]?></span> </p></br>
        
        <p class="setting"><span>Password<img src="images/edit.png" alt="*Edit*"><?php echo $list[9]?></span> </p>
        
        <p class="setting"><span> Current Package <img src="images/edit.png" alt="*Edit*"><?php echo $list[10]?></span> </p>

<?php }}?>

        
      </section>
    </div><!-- @end #content -->
  </div><!-- @end #w -->
<script type="text/javascript">
$(function(){
  $('#profiletabs ul li a').on('click', function(e){
    e.preventDefault();
    var newcontent = $(this).attr('href');
    
    $('#profiletabs ul li a').removeClass('sel');
    $(this).addClass('sel');
    
    $('#content section').each(function(){
      if(!$(this).hasClass('hidden')) { $(this).addClass('hidden'); }
    });
    
    $(newcontent).removeClass('hidden');
  });
});
</script>
</body>
</html>