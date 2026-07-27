<?php
require "../database.php";
session_start();

if ($_SERVER['REQUEST_METHOD']  == 'POST') {

    $num = $_POST['num'];

    $errors = [];
    if (!isset($_POST['num']) || $_POST['num'] === "") {
        $errors[] = "Please enter a value";
    } 
    elseif ($num < 100 || $num > 3500) {
        $errors[] = "Please enter a Number between 100 and 3500.";
    } 
    if ($errors) {
        $_SESSION['errors'] = $errors;
        header('location:prodForm.php');
        exit();
    }
    $_SESSION['num'] = $num;
    header('location:prodshow.php');
    exit();
        
}
