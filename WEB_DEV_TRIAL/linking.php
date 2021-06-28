<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "home";

$conn= mysqli_connect($servername,$username,$password,$dbname);
if(mysqli_connect_errno())
{echo "There's a mistake!".mysqli_error();}

?>