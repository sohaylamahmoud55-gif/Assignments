<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="./home.php">SQL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link text-body" aria-current="page" href="./customer.php">Customers(>20K) DATA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-body" href="./idForm.php">Search By ID</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-body" href="./totalOrder.php">total orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-body" href="./totalPrice.php">total pieces</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Remaining pages
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="../product_form/prodForm.php">product > (number)</a></li>
                        <li><a class="dropdown-item" href="../search product_ID/productID_form.php">search for product by id</a></li>
                        <li><a class="dropdown-item" href="../richest_customer/richest_form.php">richest customers</a></li>
                        <li><a class="dropdown-item" href="../searchBycity/selectCity.php">search for customer by city</a></li>
                        <li><a class="dropdown-item" href="../searchByname/searchByNam.php">search for customer by name</a></li>
                        <li><a class="dropdown-item" href="../self_join.php">employees</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>