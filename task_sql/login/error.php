<?php

session_start();
require 'validate.php';
require '../database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $errors = [];
    foreach ($validates as $validate_name => $validate_value) {

        $value = filter_input(INPUT_POST, $validate_name, $validate_value['filter'], $validate_value['my_options'] ?? null);

        if (empty($_POST[$validate_name])) {
            $errors[$validate_name] = "You must fill " . $validate_name;
        } elseif ($value == false) {
            $errors[$validate_name] = $validate_value['error'];
        }
    }
    if (empty($errors)) {

        $query = "SELECT * FROM data WHERE email='$email' AND password='$password'";

        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) == 0) {
            $errors[] = "Email or Password Incorrect";
        }
    }

    if ($errors) {
        $_SESSION['errors'] = $errors;
        header('location:login.php');
        exit();
    }
    $_SESSION['login'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header('location:../welcome/home.php');
    exit();
}
