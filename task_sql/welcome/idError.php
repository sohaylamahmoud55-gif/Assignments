<?php
require "../database.php";
session_start();

if ($_SERVER['REQUEST_METHOD']  == 'POST') {

    $id = $_POST['id'];

    $errors = [];
    if (!isset($_POST['id']) || $_POST['id'] === "") {
        $errors[] = "Please enter a value";
    } 
    elseif ($id < 1 || $id > 200) {
        $errors[] = "Please enter an ID between 1 and 200.";
    } 
    if ($errors) {
        $_SESSION['errors'] = $errors;
        header('location:idForm.php');
        exit();
    }
    $_SESSION['id'] = $id;
    header('location:idFound.php');
    exit();
        
}
