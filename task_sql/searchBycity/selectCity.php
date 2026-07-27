<?php

require '../login/check.php';
require "../database.php";

$query = "SELECT DISTINCT city FROM data ORDER BY city";
$result = mysqli_query($connection, $query);

//the city that has big amount of customers
//(Al Mazār, London, Qiandian, San Vicente, Sydney)
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
    <form class="w-75 m-auto mt-3" method="post" action="./foundCity.php">
        <select name="city" class="form-select">

            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                <option value="<?= $row['city'] ?>">
                    <?= $row['city'] ?>
                </option>

            <?php } ?>
        </select>
        <button type="submit" class="btn btn-primary mt-3">
            Search
        </button>
    </form>


    </select>
</body>

</html>