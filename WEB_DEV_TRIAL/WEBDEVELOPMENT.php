<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel ="stylesheet" href="design.css">
<?php
session_start();
?>
<style>
.intro{
background-color:mediumaquamarine;
margin:40px;
font-family:Lucida Handwriting;
padding:30px;
opacity:0.6;
border : 5px solid #555555;
font-weight:1000;}

#time{
display:none;}
</style>
</head>

<body>
<button class = "btns"><i class="fa fa-home"></i><center>HOME</center></button>
<button class = "btns"><center>Somewhere</center></button>
<button class = "btns" onclick = "window.location.href='signup.php'"> Sign Up</button>
<button class = "btns"><?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) echo"<a style = 'text-decoration:none; color:black' href = login.php>Login</a>"; else echo "<a style = 'text-decoration:none; color:black' href = logout.php>Logout</a>"; ?> </button>
<button class = "btns" id="time" style = "padding-left:30px;text-align:left;float:right;font-size:12;display:<?php if(isset($_SESSION['loggedin'])) echo 'block'; else echo 'none'; ?>" >
<i class = 'fa fa-user' style ="padding-left:60px;"></i>
<?php
date_default_timezone_set("Asia/Calcutta");
$x = date("Y/m/d");
$y = date("h:i:sa");
if(isset($_SESSION["loggedin"]))
{echo $_SESSION['username'];
print("<br>"."Date:$x  Time: $y");}?></button><br><br><br><br>
<div class = "intro"><center>
Welcome! There's  nothing  here  except  for  a  login  page , so  please  feel  free  to  try  it  out..
</center></div>
<div class = "intro" >
STEP 1: SIGN UP With A Username And Password <br><br> STEP 2: Login With Your Registered Credentials
</div>
<?php
if(isset($_SESSION["loggedin"]))
	echo "<script> document.getElementByClassName('btns').style.width = '20%'; </script>";
?>
</body>
</html>