<?php
include 'settings.php';
if(isset($_SESSION['username'])){
    unset($_SESSION["username"]);
    header('Location: signout.php');
    exit();
}

include 'header.html';
include 'signout.html';
 ?>