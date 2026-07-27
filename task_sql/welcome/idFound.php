<?php

session_start();
require "../database.php";

$id = $_SESSION['id'];
$query = "SELECT * FROM `data` WHERE id = $id";
$result = mysqli_query($connection, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../css/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <!-- navbar -->
    <?php require "./nav.php"; ?>
    <!-- table -->
    <table class="table table-dark table-striped ">
        <thead>
            <th>index</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>email</th>
            <th>gender</th>
            <th>money</th>
            <th>city</th>
        </thead>
        <tbody>

            <?php
            if ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?php echo $row['first_name'] ?></td>
                    <td><?php echo $row['last_name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['money'] ?></td>
                    <td><?php echo $row['city'] ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    <a href="../login/logout.php" class="btn btn-danger">Logout</a>
</body>

</html>