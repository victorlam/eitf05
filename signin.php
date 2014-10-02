<?php
include 'settings.php';
include 'header.html';
include 'signin.html';


if (count($_POST) > 0) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = stripslashes($username);
    $password = stripslashes($password);

    $query = mysqli_query($con, "select * from customers where PASSWORD='$password' AND USERNAME='$username'");
    $rows = mysqli_num_rows($query);

    if ($rows == 1) {
        $_SESSION['username'] = $username;
        header("location: index.php");
    } else {
        $error = "Ogiltiga användaruppgifter!";
        echo $error;
    }
}
?>