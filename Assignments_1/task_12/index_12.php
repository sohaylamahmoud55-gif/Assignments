<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $price = $_POST['price'];
    $pieces = $_POST['pieces'];
    $errors = [];
    if (!is_numeric($price) || !is_numeric($pieces)) {
        $errors[] = "Please enter numbers only";
    }
    if ($price < 0 || $pieces < 0) {
        $errors[] = "please enter a positive number";
    }
    if ($errors) {
        $_SESSION['errors'] = $errors;
        header('location:home.php');
        exit();
    }
    $total = $pieces * $price;
    echo "the total price before discount: " . $total . "<br>";
    if ($total < 1000) {
        $discount = ($total * 10) / 100;
    } else {
        $discount = ($total * 15) / 100;
    }
    echo "the total price after discount: " . ($total - $discount);
}
