<?php

require '../login/check.php';

// session_start();
if (isset($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $error) {
?>
        <div class="w-75 m-auto my-2 alert alert-danger"><?= $error ?></div>
<?php
    }
    unset($_SESSION['errors']);
}
// search by using 
//(9,22,23,25,30,40,44,79,80,88,152)
//the only numbers that have 2 order
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
    <form action="./productID_error.php" method="post" class="w-75 m-auto mt-3">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">product ID</label>
            <input type="number" name="id" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">search</button>
    </form>
</body>

</html>