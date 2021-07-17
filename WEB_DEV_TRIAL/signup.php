<html>
<head>
<?php
require_once 'C:\xampp\htdocs\Codes\WEB DEVELOPMENT TRIAL\linking.php';
session_start();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel ="stylesheet" href="design.css">
<style>

#signup{
padding:20px;
margin:20px;
width:30%;
background-color:#ffff66;
opacity:0.7;
border : 5px solid #555555;
font-weight: 1000;
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

#time{
	display:none;
}

body{
	background-image: url('forest4.jpg');
	background-size: cover;
	background-repeat : no-repeat;
}
</style>
</head>

<body>
<button class = "btns" onclick = "window.location.href = 'WEBDEVELOPMENT.php'"><i class="fa fa-home"></i>Home</button>
<button class = "btns">Somewhere</button>
<button class = "btns" onclick = "window.location.href='signup.php'"> Sign Up</button>
<button class = "btns"><?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) echo"<a style = 'text-decoration:none; color:black' href = login.php>Login</a>"; else echo "<a style = 'text-decoration:none; color:black' href = logout.php>Logout</a>"; ?></button>
<button class = "btns" id="time" style = "float:right;font-size:12;text-align:center;display:<?php if(isset($_SESSION['loggedin'])) echo 'block'; else echo 'none'; ?>" > <?php
                                     date_default_timezone_set("Asia/Calcutta");
                                     $x = date("Y/m/d");
                                     $y = date("h:i:sa");
                                     echo "Current User-".$_SESSION['username'];
									 echo "<br>$x<br>$y";?>
									 </button>
<br><br><br>
<br><center><span style = "color:white;font-size:25px";>SIGN UP</span></center>
<center><div id = "signup">

<form method = "post" action = 'signup.php'>
<b>Username <b> <br><br><input class = 'inp' type ="text" name="username" required placeholder = "Enter Username" /><br><br>
Password  <br><br><input class = 'inp' type = 'password' name= 'password' required placeholder = "Enter Password"/><br><br>
Confirm Password  <br><br><input class = 'inp' type = 'password' name= 'confirmpassword' required placeholder = "Repeat Password"/><br><br>
<div id = 'problem' style = "color:blue;display:none"> Passwords Do Not Match</div><br>
<input type = 'submit' id='created' value = 'SIGN UP'/>
</form>
</div></center>
<?php

if(isset($_POST["username"]))
{
$username=$_POST["username"];
$password=$_POST["password"];
$confirm=$_POST["confirmpassword"];

if($password != $confirm)
  {
  echo "<script> document.getElementById('problem').style.display = 'block'; </script>";
  }
else
    {
      $lol = "SELECT * FROM Details WHERE Username = '$username';";
      $check = mysqli_query($conn,$lol);
      $count = mysqli_num_rows($check);
      
	  if($count==0)
         {
               $command = "INSERT INTO Details (Username,Password) VALUES('$username','$password')";
               $doing =mysqli_query($conn,$command);
  
               
			   if($doing)
                      {echo "<script>
                       window.alert('Details have been saved');
                       </script>";
                       }
  
               else
	                 echo "<script> alert('no'); </script>";
          }
      else
          {echo "<script> alert('Username already exists!'); </script>";
           }
}
}
?>

</body>
</html>








UPDATED CODE:::





<?php
require_once '/storage/ssd3/303/17151303/public_html/linking.php';
session_start();
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel ="stylesheet" href="design.css">
<style>
#signup{
padding:20px;
margin:20px;
width:30%;
background-color:#ffff66;
opacity:1;
border : 5px solid #555555;
font-weight: 1000;
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

#time{
	display:none;
}

/*body{
	background-image: url('forest4.jpg');
	background-size: cover;
	background-repeat : no-repeat;
}*/
</style>
</head>

<body>
<button class = "btns" onclick = "window.location.href = 'index.php'"><i class="fa fa-home"></i>Home</button>
<button class = "btns">Somewhere</button>
<button class = "btns" onclick = "window.location.href='signup.php'"> Sign Up</button>
<button class = "btns"><?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) echo"<a style = 'text-decoration:none; color:black' href = login.php>Login</a>"; else echo "<a style = 'text-decoration:none; color:black' href = logout.php>Logout</a>"; ?></button>
<button class = "btns" id="time" style = "float:right;font-size:12;text-align:center;display:<?php if(isset($_SESSION['loggedin'])) echo 'block'; else echo 'none'; ?>" > <?php
                                     date_default_timezone_set("Asia/Calcutta");
                                     $x = date("Y/m/d");
                                     $y = date("h:i:sa");
                                     echo "Current User-".$_SESSION['username'];
									 echo "<br>$x<br>$y";?>
									 </button>
<br><br><br>
<br><center><span style = "color:white;font-size:25px";>SIGN UP</span></center>
<center><div id = "signup">

<form method = "post" action = 'signup.php'>
<b>Username <b> <br><br><input class = 'inp' type ="text" name="username" required placeholder = "Enter Username" /><br><br>
Password  <br><br><input class = 'inp' type = 'password' name= 'password' required placeholder = "Enter Password"/><br><br>
Confirm Password  <br><br><input class = 'inp' type = 'password' name= 'confirmpassword' required placeholder = "Repeat Password"/><br><br>
<div id = 'problem' style = "color:blue;display:none"> Passwords Do Not Match</div><br>
<input type = 'submit' id='created' value = 'SIGN UP'/>
</form>
</div></center>
<?php

if(isset($_POST["username"]))
{
$username=$_POST["username"];
$password=$_POST["password"];
$confirm=$_POST["confirmpassword"];

if($password != $confirm)
  {
  echo "<script> document.getElementById('problem').style.display = 'block'; </script>";
  }
else
    {
      $lol = "SELECT * FROM Details WHERE Username = '$username';";
      $check = mysqli_query($conn,$lol);
      $count = mysqli_num_rows($check);
      
	  if($count==0)
         {
               $command = "INSERT INTO Details (Username,Password) VALUES('$username','$password')";
               $doing =mysqli_query($conn,$command);
  
               
			   if($doing)
                      {echo "<script>
                       window.alert('Details have been saved');
                       </script>";
                       }
  
               else
	                 echo "<script> alert('no'); </script>";
          }
      else
          {echo "<script> alert('Username already exists!'); </script>";
           }
}
}
?>

</body>
</html>
