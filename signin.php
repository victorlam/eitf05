<?php
include 'settings.php';
include 'header.html';
include 'signin.html';


if (count($_POST) > 0) {
    $username = mysqli_real_escape_string($con,stripslashes($_POST['username']) );
    $password = mysqli_real_escape_string($con,stripslashes($_POST['password']) );

    $query = mysqli_query($con, "select * from customers where USERNAME='$username'");
    $rows = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);



    if ($rows == 1 && password_verify( $password,$row['PASSWORD'] )) {
        $_SESSION['username'] = $username;
        header("location: index.php");
    } else {
        $error = "Ogiltiga användaruppgifter!";
        echo $error;
    }
}
?>