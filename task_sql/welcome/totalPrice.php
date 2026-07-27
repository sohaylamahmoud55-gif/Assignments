<?php

require '../login/check.php';
require "../database.php";

$query = "SELECT product, quantity AS total_quantity, (quantity * price) AS total_price
          FROM products GROUP BY product ORDER BY total_quantity DESC , total_price DESC";
$result = mysqli_query($connection, $query);

//in products database table 
//(price colume represent the price of one piece)
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
            <th>product</th>
            <th>Sold Pieces</th>
            <th>Total price</th>
        </thead>
        <tbody>
            <?php
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?php echo $row['product'] ?></td>
                    <td><?php echo $row['total_quantity'] ?></td>
                    <td><?php echo $row['total_price'] ?></td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>