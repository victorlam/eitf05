<?php
include 'settings.php';
include 'header.html';
include 'cart.html';
$id = isset($_GET['product']) ? filter_input(INPUT_GET, 'product', FILTER_SANITIZE_NUMBER_INT) : "";
$action = isset($_GET['action']) ? filter_input(INPUT_GET, 'action', FILTER_SANITIZE_NUMBER_INT) : "";
// 1= add 2 = remove

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if ($action == 1) {
    if (!in_array($id, $_SESSION['cart'])) {
        array_push($_SESSION['cart'], $id);
        header('Location: cart.php');
    }
} elseif ($action == 2 && in_array($id, $_SESSION['cart'])) {
    unset($_SESSION['cart'][array_search($id, $_SESSION['cart'])]);
    header('Location: cart.php');
}









?>