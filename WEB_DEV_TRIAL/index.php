<?php
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel ="stylesheet" href="design.css">
<style>
.intro{
position:inherit;
background-color:mediumaquamarine;
margin-top:5vw;
margin-bottom:5vw;
margin-left : 10vw;
margin-right:10vw;
font-family:Lucida Handwriting;
padding:2%;
text-align:center;
opacity:1;
border : 5px solid #555555;
font-weight:1000;}
#hiding {
    display:block;
    background-color:white;
    opacity:1;
    color:black;
    width:90vw;
    height:90vh;
    /*padding:5%;*/
    text-align:center;
    font-size : 2vw;
}

#time{
display:none;}
</style>
</head>
<?php 
if (isset($_SESSION['loggedin']) and $_SESSION['welcomed'] == false)
{
echo "<body onload = 'setInterval(move,300)'> 
<div id = 'hiding' style = 'display:block' >";
echo "<h1>Welcome," , $_SESSION['username'] , "</h1> 
</div>";
$_SESSION['welcomed'] = true;
}
else
echo "<body>";
?>
<div id = "remaining" <?php if(isset($_SESSION['loggedin']) and $_SESSION['welcomed'] == false) echo "style = 'display:none'";  ?>   >
<button class = "btns"><i class="fa fa-home"></i><center>HOME</center></button>
<button class = "btns"><center>Somewhere</center></button>
<button class = "btns" onclick = "window.location.href='signup.php'"> Sign Up</button>
<button class = "btns"><?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) echo"<a style = 'text-decoration:none; color:black' href = 'login.php'>Login</a>"; else echo "<a style = 'text-decoration:none; color:black' href = logout.php>Logout</a>"; ?> </button>
<?php if(isset($_SESSION['loggedin']))
{echo "
<button class = 'btns' id='time' style = 'padding-left':30px;'text-align':'left';'float:right' >
<i class = 'fa fa-user' style ='padding-left:60px;'></i>";
date_default_timezone_set('Asia/Calcutta');
$x = date('Y/m/d');
$y = date('h:i:sa');

echo $_SESSION["username"].
"<br>"."Date:".$x."Time:".$y."</button>";
}
else;
?>
<br><br><br><br>
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
</div>
<script>

var opacity=0;
    var intervalID=0;
    
function move()
{
          var hid=document.getElementById("hiding");
          opacity =
 Number(window.getComputedStyle(hid).getPropertyValue("opacity"))
  
            if(opacity>0.5){
                   opacity=opacity-0.1;
                           hid.style.opacity=opacity
            }
            else{
                clearInterval(intervalID);
                hid.style["display"] = "none";
                document.getElementById("remaining").style.display = "block";
            }
         
    //location.replace("index.php");
}
</script>
</body>
</html>