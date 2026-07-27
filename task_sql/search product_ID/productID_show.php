<?php

session_start();
require "../database.php";
$id = $_SESSION['id'];

$query = "SELECT products.order_id, products.product, products.quantity,
          data.first_name, data.last_name, data.money
          FROM products JOIN data ON products.customer_id = data.id
          WHERE products.product_id = $id ORDER BY data.money DESC";

$result = mysqli_query($connection, $query);

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
    <table class="table table-dark table-striped">
        <thead>
            <th>Number of Orders</th>
            <th>Order ID</th>
            <th>Product</th>
            <th>Customer</th>
            <th>Quantity</th>
            <th>Money</th>
        </thead>
        <tbody>

            <?php
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $row['order_id'] ?></td>
                    <td><?= $row['product'] ?></td>
                    <td><?= $row['first_name'] . " " . $row['last_name'] ?></td>
                    <td><?= $row['quantity'] ?></td>
                    <td><?= $row['money'] ?></td>
                </tr>

            <?php } ?>

        </tbody>
    </table>
    <a href="../login/logout.php" class="btn btn-danger">Logout</a>
</body>

</html>