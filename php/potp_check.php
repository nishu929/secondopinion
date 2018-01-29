<head>
    <style>
        .be-detail-header { border-bottom: 1px solid #edeff2; margin-bottom: 50px; }

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<?php
include("connect.php");

$mail = $_GET['mail'];
if(isset($_POST['sub'])){
    $otp=$_POST['otp'];
    $q1="select otp , time from patient_otp where mail ='".$mail."'";
    $result = mysqli_query($conn,$q1);
    while ($row=mysqli_fetch_array($result)){
        //echo "******".$row[1].$row[0]."########".gmdate("Y-m-d\TH:i:s\Z", time()).date('H:m:s \m \i\s\ \m\o\n\t\h');
        if($otp==$row[0]){
            $x=time_elapsed_A(time()-$row[1]);
            $y=explode(" ",$x);
            if((int)$y[1]<5 and (int)$y[0]==0){
                header("Location:payment/aboutus.php?mail=".$mail);
            }
            else{
                echo 'nope';
            }
        }
        else{
           echo "otp is not correct".time_elapsed_A(time()-$row[1]);


           // echo substr($x,0,1);
        }
    }

}
function time_elapsed_A($secs){
    $bit = array(

        'h' => $secs / 3600 % 24,
        'm' => $secs / 60 % 60,
       // 's' => $secs % 60
    );

    foreach($bit as $k => $v)
        $ret[] = $v;

    return join(' ', $ret);
}

?>
<body>
<div class="container be-detail-container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <br>
            <img src="https://cdn2.iconfinder.com/data/icons/luchesa-part-3/128/SMS-512.png" class="img-responsive" style="width:200px; height:200px;margin:0 auto;"><br>

            <h1 class="text-center">Verify your email id</h1><br>
            <p class="lead" style="align:center"></p><p> Thanks for giving your details. An OTP has been sent to your Mail id. Please enter the 4 digit OTP below for Successful Registration</p>  <p></p>
            <br>

            <form method="post" id="veryfyotp" action="potp_check.php?mail=<?php echo $_GET['mail'];?>">
                <div class="row">
                    <div class="form-group col-sm-8">
                        <span style="color:red;"></span>                    <input type="text" class="form-control" name="otp" placeholder="Enter your OTP number" required="">
                    </div>
                    <button type="submit" name="sub" class="btn btn-primary  pull-right col-sm-3">Verify</button>
                </div>
            </form>
            <br><br>
        </div>
    </div>
</div>
</body>
