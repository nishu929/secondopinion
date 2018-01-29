<!DOCTYPE html>
<html>
<title>aboutus</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">
<!-- Navbar -->


</div>
<!-- Pricing Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="pricing">
    <h2>PRICING</h2>
    <p>Choose a pricing plan that fits your needs.</p>
    <p><a href="specialities.html">See our specialities</a></p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Basic</p>
        </li>
        <li class="w3-padding-16"><b>5</b> Conversations</li>
        <li class="w3-padding-16"><b>1</b> Domain</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
            <h2 class="w3-wide"><b>Rs</i>500</b></h2>
          <span class="w3-opacity">for 1 month</span>
        </li>
          <a class="w3-theme-l5 w3-padding-24"></a>
          <a href="index.php?amount=500&mail=<?php echo $_GET['mail'];?>"><button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Buy</button></a>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">Pro</p>
        </li>
        <li class="w3-padding-16"><b>5</b> Conversations</li>
        <li class="w3-padding-16"><b>4</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><b>Rs 2000</b></h2>
          <span class="w3-opacity">for 3 months</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <a href="index.php?amount=2000&mail=<?php echo $_GET['mail'];?>"></ahref><button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i>Buy</button></a>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Premium</p>
        </li>
        <li class="w3-padding-16"><b>5</b> Conversations</li>
        <li class="w3-padding-16"><b>10</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><b>Rs 3500</b></h2>
          <span class="w3-opacity">for 6 months</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <a href="index.php?amount=3500&mail=<?php echo $_GET['mail'];?>"><button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i>Buy</button></a>
        </li>
      </ul>
    </div>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i> #301,1210,100 feet Road,Indiranagar,Bangalore 560008</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +91 9585584547</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>sakshi.tayal2015@vit.ac.in</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="../php7/complain.php" method='post' >
      <div class="w3-group">      
        <label class="w3-label">Name</label>
        <input class="w3-input"  type="text" name="name" required>
      </div>
      <div class="w3-group">      
        <label class="w3-label">Email</label>
        <input class="w3-input" type="text" name="mail" required>
      </div>
      <div class="w3-group">      
        <label class="w3-label">Message</label>
        <input class="w3-input" type="text" name="message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label class="w3-validate">I Like it!</label>
      <button type="submit" class="w3-button w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-btn-floating w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>
</body>
</html>
