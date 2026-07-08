<?php
        session_start();
        if (isset($_SESSION['errors'])) {
            foreach ($_SESSION['errors'] as $error) {
        ?>
        <div class="alert alert-danger w-75 m-auto mt-3">
            <?php
                echo $error . "<br>"; ?>
        </div>
<?php
            }
            unset($_SESSION['errors']);
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <form class="w-75 m-auto my-4" action="./index_12.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product price</label>
            <input name="price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Number of pieces</label>
            <input name="pieces" type="number" class="form-control" id="exampleInputPassword1">
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>