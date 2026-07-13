<?php
session_start();
require 'validate.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phoneNumber'];
    $facebook = $_POST['facebook_url'];
    $twitter = $_POST['twitter_url'];
    $instagram = $_POST['instagram_url'];

    $errors = [];
    foreach ($valid as $validate_name => $validate_value) {

        $value = filter_input(INPUT_POST, $validate_name, $validate_value['filter'], $validate_value['my_options'] ?? null);
        if (empty($_POST[$validate_name])) {
            $errors[$validate_name] = "You must fill " . $validate_name;
        } 
        elseif ($value == false) {
            $errors[$validate_name] = $validate_value['error'];

        } 
        elseif ($validate_name == "facebook_url" && $value && !str_contains($value, "facebook.com")) {
            $errors['facebook_url'] = $validate_value['error'];
        } 
        elseif (
            $validate_name == "twitter_url" && $value && !str_contains($value, 'twitter.com') &&
            !str_contains($value, 'x.com')) {
            $errors['twitter_url'] = $validate_value['error'];
        } 
        elseif ($validate_name == "instagram_url" && $value && !str_contains($value, 'instagram.com')) {
            $errors['instagram_url'] = $validate_value['error'];
        }
    }
    if ($errors) {
        $_SESSION['errors'] = $errors;
        header('location:account.php');
        exit();
    }
    $_SESSION['account_completed'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $email;
    $_SESSION['phoneNumber'] = $phone;
    $_SESSION['facebook_url'] = $facebook;
    $_SESSION['twitter_url'] = $twitter;
    $_SESSION['instagram_url'] = $instagram;

    header('location:home.php');
    exit();
}
