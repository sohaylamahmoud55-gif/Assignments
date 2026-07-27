<?php
// require '../welcome/nav.php';

session_start();
require "../database.php";
$num = $_SESSION['num'];

// 3700 >= SUM(quantity) >= 100

$query = "SELECT product, SUM(quantity) AS total_quantity FROM products
          GROUP BY product HAVING SUM(quantity) > $num ORDER BY total_quantity DESC";
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
    <a href="../login/logout.php" class="btn btn-danger mt-3">Logout</a>
    
    <table class="table table-dark table-striped ">
        <thead>
            <th>index</th>
            <th>product</th>
            <th>quantity</th>
        </thead>
        <tbody>

            <?php
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?php echo $row['product'] ?></td>
                    <td><?= $row['total_quantity'] ?></td>

                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>

</html>