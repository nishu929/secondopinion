<html>
<head>
<script>
function chemmk()
{
var b=document.f1.p8.value;
var c = /^([a-z0-9_\-\.]{2-10})+@([a-z0-9_\-\.]{3-8})+\.([a-z]{2-4})$/;
if(!b.match(c)){
    alert('Please enter your valid email-id');

}
}
</script>
<style>
body {
    background-image: url("MYHTML3.jpg");
     background-size: 100% 100%;
    background-repeat: no-repeat;
}
</STYLE>
<style>
form
{
    width: 40%;
    padding: 4% 4%;
    font-family: "Tw Cen MT";
    left: 25%;
    
    font-size: 24px; 
    font-family: "Tw Cen MT";
    background-color: rgba(255,255,255,0.5);
    box-shadow: 0 0 1px rgba(0,0,0,7);
    overflow: hidden;
}



input 
{
    width: 100%;
    outline: none;
    font-size: 20px;
    font-family: "Tw Cen MT";
    padding: 4px 8px;
    background: rgba(255,255,255,.4); 
    border-radius: 2px;
    border: none;
    box-shadow: 0 0 6px rgba(0,0,0,.2);
    transition:ease-out .1s;
}
input#i
{
    width:25%;
}
button
{
    padding: 2px 8px;
    font-family: "Tw Cen MT";
    font-size: 34px;
    border: none;
    margin-top: 10px;
    box-shadow: 0 0 6px rgba(0,0,0,.2);
    background: rgba(255,255,255,.4);
    transition: ease-out .1s;
    border-radius: 2px;
}

button:hover
{
    box-shadow: 0 0 10px rgba(255,255,255,1); 
    background: rgba(0,30,60,.3);
    color: white;
    cursor: pointer;
}


input:focus
{
    background: rgba(0,30,60,.3);
    color: white;
    box-shadow: 0 0 10px rgba(255,255,255,1); 
}

</style>

    <title> SIGNUP </title>
    <link rel="stylesheet" type="text/css" href="contact.css">

    <body>
<center><h1>SIGN UP HERE</h1>
                <hr>

<form name="f1" method="post" action="php/dsignup.php" enctype="multipart/form-data" >

               
<table>
<tr><td><h2>PERSONAL DETAILS</h2> </td></tr>
<td>FIRST NAME:</td>
<td><input type="text" id="p1" name="p1" required autofocus></td></tr><br>
<tr>
<td>LAST NAME:</td>
<td>
<input type="text" id="p2" name="p2" required autofocus></td></tr>
<tr>
<td>ADDRESS:</td>
<td><input type="text" id="p3" name="p3" required autofocus></td></tr>
<tr>
<td>CITY:</td>
<td><input type="text" id="p4" name="p4" required autofocus></td></tr>
<tr>
<td>ZIP CODE:</td>
<td>  <input type="text" id="p5" name="p5" pattern="[0-9]{6}" required autofocus ></td></tr>
<tr>
<td> COUNTRY:</td>
<td><input type="text" id="p6" name="p6" required autofocus></td></tr>
<tr>
<td> MOBILE NO: </td>
<td><input type="text" id="p7" name="p7" pattern="[0-9]{10}" required autofocus></td></tr>
<tr>
<td> EMAIL ID: </td>
<td> <input type="text" id="p8" name="p8" required autofocus></td></tr>
    <td> password: </td>
    <td> <input type="password" id="password" name="password" required autofocus></td></tr>
    <td> re enter password: </td>
    <td> <input type="password" id="p19" name="p19" required autofocus></td></tr>

    </table>
<table>
<tr><td><h2>EDUCATION DETAILS</h2> </td></tr>
<td>QUALIFICATION:</td>
<td><input type="text" id="p9" name="p9" required autofocus></td></tr><br>
<tr>
<td>SPECILAIZATION:</td>
<td>

<input type="text" id="p10" name="p10" required autofocus></td></tr>
<tr>
<td>NAME OF COLLEGE/UNIVERSITY</td>
<td><input type="text" id="p11" name="p11" required autofocus></td></tr>
<tr>
<td>NAME OF SCHOOL</td>
<td><input type="text" id="p12" name="p12" required autofocus></td></tr>
<tr>
<td>YEARS OF EXPERIENCE</td>
<td> <input type="text" id="p13" name="p13"  required autofocus ></td></tr>
<tr><td>UPLOAD RESUME</td><td><input type="file" name="file"></td></tr></table>
<input type="submit" value="SUBMIT" onclick="" id="i">
        </form>
        
     </center>   
    </body>
</html>