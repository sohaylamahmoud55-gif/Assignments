<?php
session_start();

if (isset($_SESSION['email'])) {
    header("Location: account.php");
} else {
    header("Location: form.php");
}

exit();
