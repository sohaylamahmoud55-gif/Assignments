<?php
session_start();
if (isset($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $error) {
?>
        <div class="w-75 m-auto my-2 alert alert-danger"><?= $error ?></div>
<?php
    }
    unset($_SESSION['errors']);
}

// email-> ngwythero@stumbleupon.com or any one from data table
// password-> Pass1234 for all users
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <form action="./error.php" method="post" class="w-75 m-auto mt-3">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">email</label>
            <input type="text" name="email" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">login</button>
    </form>
</body>

</html>