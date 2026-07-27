<?php
require "../database.php";
session_start();
require "./validation.php";

if ($_SERVER['REQUEST_METHOD']  == 'POST') {

    $username = $_POST['username'];
    $query = "SELECT * FROM `data` WHERE first_name = '$username'";
    $result = mysqli_query($connection, $query);

    $errors = [];
    foreach ($valid as $validate_name => $validate_value) {

        $value = filter_input(INPUT_POST, $validate_name, $validate_value['filter'], $validate_value['my_options'] ?? null);
        if (!isset($_POST['username']) || $_POST['username'] === "") {
            $errors[] = "You must fill " . $validate_name;
        } elseif ($value == false) {
            $errors[$validate_name] = $validate_value['error'];
        } elseif (mysqli_num_rows($result) == 0) {
            $errors[] = "Username not found";
        }
    }
    if ($errors) {
        $_SESSION['errors'] = $errors;
        header('location:searchByNam.php');
        exit();
    }
    $_SESSION['username'] = $username;
    header('location:foundName.php');
    exit();
}
