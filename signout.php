<?php
include 'settings.php';
if (isset($_SESSION['username'])) {
    unset($_SESSION["username"]);
    session_destroy();
    header('Location: signout.php');
    exit();
}
include 'header.html';
include 'signout.html';
?>