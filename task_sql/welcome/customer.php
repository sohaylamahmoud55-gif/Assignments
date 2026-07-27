<?php

require '../login/check.php';
require "../database.php";

$query = "SELECT * FROM `data` WHERE money > 20000";
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
    <a href="../login/logout.php" class="btn btn-danger mt-3">Logout</a>
    <table class="table table-dark table-striped">

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
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?= $i++ ?></td>
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
</body>

</html>