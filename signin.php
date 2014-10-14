<?php
include 'settings.php';
include 'header.html';
include 'signin.html';

if (count($_POST) > 0) {
    $username = mysqli_real_escape_string($con, stripslashes($_POST['username']));
    $password = mysqli_real_escape_string($con, stripslashes($_POST['password']));

    $query = mysqli_query($con, "select * from customers where USERNAME='$username'");
    $rows = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);

    require_once('recaptchalib.php');
    $privatekey = "6Lfo3fsSAAAAAFoITL5y6mXshjG5xxJ0qJcOU-Wv";
    $resp = recaptcha_check_answer($privatekey,
        $_SERVER["REMOTE_ADDR"],
        $_POST["recaptcha_challenge_field"],
        $_POST["recaptcha_response_field"]);

    if (!$resp->is_valid) {
        // What happens when the CAPTCHA was entered incorrectly
        die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
            "(reCAPTCHA said: " . $resp->error . ")");
    } else {
        if ($rows == 1 && password_verify($password, $row['PASSWORD'])) {
            $_SESSION['username'] = $username;
            header("location: index.php");
        } else {
            $error = "Ogiltiga användaruppgifter!";
            echo $error;
        }
    }
}
?>