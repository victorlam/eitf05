<?php
include 'settings.php';
include 'header.html';
include 'receipt.html';


if (count($_POST) > 0) {
    $creditcard =isset($_POST['creditcard']) ? filter_input(INPUT_POST, 'creditcard', FILTER_SANITIZE_NUMBER_INT) : "";
    $cvc =isset($_POST['cvc']) ? filter_input(INPUT_POST, 'cvc', FILTER_SANITIZE_NUMBER_INT) : "";
    echo "<p>Betalas med kort nummer ";
    echo $creditcard;
    echo " CVC ";
    echo $cvc;
    echo "</p>";

    echo "<p>Tack för ditt köp och välkommen åter!</p>";
    unset($_SESSION['cart']);
}




 ?>