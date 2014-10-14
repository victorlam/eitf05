<?php
include 'settings.php';
include 'header.html';
include 'signup.html';

if (count($_POST) > 0) {
    $username = mysqli_real_escape_string($con, stripslashes($_POST['username']));
    $password = password_hash(mysqli_real_escape_string($con, stripslashes($_POST['password'])), PASSWORD_BCRYPT);
    $address = mysqli_real_escape_string($con, stripslashes($_POST['address']));

    $query = mysqli_query($con, "INSERT INTO `customers` (`USERNAME`, `PASSWORD`, `ADDRESS`) VALUES
('$username', '$password', '$address');");

    if ($query) {
        $_SESSION['username'] = $username;
        header("location: index.php");
    } else {
        echo "Användarnamnet används redan.";
    }
}
?>