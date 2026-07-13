<?php
$products = [
    'product_1' => [
        'price' => '200',
        'img' => '0.jpg',
        'description' => 'This card has supporting text below as a natural lead-in to additional content.'
    ],
    'product_2' => [
        'price' => '250',
        'img' => '3.jpg',
        'description' => 'This card has supporting text below as a natural lead-in to additional content.'
    ],
    'product_3' => [
        'price' => '150',
        'img' => '2.jpg',
        'description' => 'This card has supporting text below as a natural lead-in to additional content.'
    ],
    'product_4' => [
        'price' => '300',
        'img' => '1.jpg',
        'description' => 'This card has supporting text below as a natural lead-in to additional content.'
    ],
    'product_5' => [
        'price' => '350',
        'img' => '4.jpg',
        'description' => 'This card has supporting text below as a natural lead-in to additional content.'
    ],
    'product_6' => [
        'price' => '400',
        'img' => '5.jpg',
        'description' => 'This card has supporting text below as a natural lead-in to additional content.'
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="./home.php">Brand New</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link text-body" aria-current="page" href="./home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="./product.php">All products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="./accountCheck.php">Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="./logout.php">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- cards -->
    <div class="row row-cols-1 row-cols-md-3 g-4  m-auto">
        <?php foreach ($products as $productName => $product) { ?>
            <div class="col">
                <div class="card h-100">
                    <img src="images/<?php echo $product['img']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $product['description']; ?></h5>
                        <p class="card-text"> <?php echo $product['price']; ?>$</p>
                    </div>

                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>