<?php

require "./database.php";

$query = "SELECT e.first_name AS employee, m.first_name AS manager
          FROM data e LEFT JOIN data m ON e.manager_id = m.id";
$result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./css/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <a href="./login/logout.php" class="btn btn-danger mt-3">Logout</a>
    <table class="table table-dark table-striped ">
        <thead>
            <th>index</th>
            <th>employee</th>
            <th>manager</th>
        </thead>
        <tbody>

            <?php
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?php echo $row['employee'] ?></td>
                    <td><?= $row['manager'] ?? 'No Manager' ?></td>

                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>

</html>