<?php
// Force SSL protected connection
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}


// Create database connection
$con=mysqli_connect("localhost","eitf05","eitf05","eitf05");
$con->select_db("eitf05");
// Prevent site from loading without database support
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
   exit();
}
session_start();
if(isset($_SESSION['username'])){
    echo "Du är inloggad som: " . $_SESSION['username'];
    echo "";
}


?>