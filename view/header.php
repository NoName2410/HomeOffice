<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>HomeOffice</title>
    <style>
        /* Submenu CSS */
.dropdown:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    display: none;
    position: absolute;
    top: 0;
    left: 100%;
    margin-top: 0;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

/* Change background color and text color for dropdown items */
.navbar-dark .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link:hover {
    color: #347858;
}

.dropdown-menu {
    background-color: #347858; /* Bootstrap primary blue */
    border: none;
}

.dropdown-item {
    color: #347858;
}

.dropdown-item:hover,
.dropdown-item:focus {
    color: #347858; /* Text color on hover */
    background-color: #347858; /* Light background color on hover */
}

.dropdown-submenu .dropdown-menu {
    background-color: #347858;
}

/* Ensure the dropdown works correctly on smaller screens */
@media (max-width: 991.98px) {
    .dropdown-menu {
        display: none !important;
    }

    .dropdown-menu.show {
        display: block !important;
    }
}
    </style>

</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
        <div class="container">
            <a class="navbar-brand" href="index.php">HomeOffice<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.php?act=shop" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Sản phẩm
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Danh mục 1</a></li>
                            <li><a class="dropdown-item" href="#">Danh mục 2</a></li>
                            <li><a class="dropdown-item" href="#">Danh mục 3</a></li>
                            <li><a class="dropdown-item" href="#">Danh mục 4</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=contact">Liên hệ</a>
                    </li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <?php
                    if (isset($_SESSION['id']) && ($_SESSION['id'] != "")) {
                        echo '<li class="nav-item"><a class="nav-link" href="index.php?act=account">' . $_SESSION['name'] . '</a></li>
                        <li class="nav-item" style="margin-right: 20px;"><a class="nav-link" href="index.php?act=cart"><img src="images/cart.svg"></a></li>
                        <li class="nav-item" style="margin-right: 20px;"><a class="nav-link" href="index.php?act=thoat" name="exit">Logout</a></li>';
                    } else {
                    ?>
                        <li class="nav-item" style="margin-right: 20px;"><a class="nav-link" href="login.php">Đăng nhập</a></li>
                        <li class="nav-item" style="margin-right: 20px;"><a class="nav-link" href="signup.php">Đăng ký</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header/Navigation -->

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
