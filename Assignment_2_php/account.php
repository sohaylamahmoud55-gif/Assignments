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
    <nav class="navbar navbar-expand-lg  navbar-light bg-light">
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

    <!-- errors -->
    <?php
    session_start();
    if (isset($_SESSION['errors'])) {
        foreach ($_SESSION['errors'] as $error) {
    ?>
            <div class="w-75 m-auto my-2 alert alert-danger"><?= $error ?></div>
    <?php
        }
        unset($_SESSION['errors']);
    }
    ?>

    <!-- form  -->
    <form class="w-75 m-auto mt-5" method="post" action="./error_acoount.php">
        <!-- username -->
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">User Name</label>
            <div class="col-sm-10">
                <input name="username" type="text" class="form-control" value="<?= $_SESSION['username'] ?? '' ?>">
            </div>
        </div>
        <!-- password -->
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input name="password" type="password" class="form-control" value="<?= $_SESSION['password'] ?? '' ?>">
            </div>
        </div>
        <!-- email -->
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input name="email" type="email" class="form-control" value="<?= $_SESSION['email'] ?? '' ?>">
            </div>
        </div>
        <!-- phone number -->
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
                <input name="phoneNumber" type="text" class="form-control" value="<?= $_SESSION['phoneNumber'] ?? '' ?>">
            </div>
        </div>
        <!-- facebook -->
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Facebook Account URL</label>
            <div class="col-sm-10">
                <input name="facebook_url" type="text" class="form-control" value="<?= $_SESSION['facebook_url'] ?? '' ?>">
            </div>
        </div>
        <!-- twitter -->
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Twitter Account URL</label>
            <div class="col-sm-10">
                <input name="twitter_url" type="text" class="form-control" value="<?= $_SESSION['twitter_url'] ?? '' ?>">
            </div>
        </div>
        <!-- instagrame -->
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Instagram Account URL</label>
            <div class="col-sm-10">
                <input name="instagram_url" type="text" class="form-control" value="<?= $_SESSION['instagram_url'] ?? '' ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
        <a href="logout.php" class="btn btn-primary">logout</a>
    </form>
</body>

</html>