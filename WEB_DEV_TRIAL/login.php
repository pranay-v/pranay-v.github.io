<html>
<head>
<?php
require_once 'C:\xampp\htdocs\Codes\WEB DEVELOPMENT TRIAL\linking.php';
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: WEBDEVELOPMENT.php");
    exit;
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel ="stylesheet" href="design.css">
<style>
#signup{
padding:20px;
width:30%;
background-color:#ffff66;
opacity:0.7;
}
#created{
border-radius:20%;
color:white;
background-color:green;
width:100px;
}

.inp{
	height:35px;
}

</style>
</head>

<body>
<!--<button class = "btns" onclick = "window.location.href = 'WEBDEVELOPMENT.php'"><i class="fa fa-home"></i>Home</button>
<button class = "btns">Somewhere</button>
<button class = "btns" onclick = "window.location.href='signup.php'"> Sign Up</button>
<button class = "btns" onclick ="window.location.href = 'login.php'" > Login </button>
<button class = "btns" id = "time"  style = "font-size:12;text-align:center;display:<?php if(isset($_SESSION['loggedin'])) echo 'block'; else echo 'none'; ?> "> <?php
                                     date_default_timezone_set("Asia/Calcutta");
                                     $x = date("Y/m/d");
                                     $y = date("h:i:sa");
                                     echo "$x <br> $y";?></button> -->
<br><br><br>
<center><div style = "background-color:#271f89;width:355px;height:40px;padding-top:20px;color:white"><b> LOGIN </b></div></center>
<center><div id = "signup">
<form method = "post" action = 'login.php'>
<b>Username <b> <br><br><input class = 'inp' type ="text" name="username" required placeholder = "Enter Username" /><br><br>
Password  <br><br><input class = 'inp' type = 'password' name= 'password' required placeholder = "Enter Password"/><br><br>
<div id = 'problem' style = "color:blue;display:none"> Username and Password Do Not Match</div><br>
<input type = 'submit' id='created' value = 'LOGIN'/>
</form>
</div></center>

<?php

if(isset($_POST["username"]))
{
$username=$_POST["username"];
$password=$_POST["password"];

 $command = "SELECT COUNT(Password) FROM Details WHERE Password = '".$password. "' and Username = '".$username."'";
 $result = mysqli_query($conn,$command);
 if($command)
{
	  //$rows = mysqli_num_rows($result);
	  $row = mysqli_fetch_array($result,MYSQLI_NUM);
	  
  if($row[0]!=0) 
  {
  session_start();
  $_SESSION["loggedin"] = true;
  $_SESSION["id"] = $password;
  $_SESSION["username"] = $username;
  header("location: WEBDEVELOPMENT.php");
  echo "<script>
  window.alert('Logged in!');
  </script>";
  }

  else
   {echo "<script>
  document.getElementById('problem').style.display = 'block';
  </script>";
  } 


}

}

?>

</body>
</html>