<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>HomeOffice</title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="index.php">Furni<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li><a class="nav-link" href="index.php?act=shop">Shop</a></li>
                    <li><a class="nav-link" href="index.php?act=about">About us</a></li>
                    <li><a class="nav-link" href="index.php?act=services">Services</a></li>
                    <li><a class="nav-link" href="index.php?act=blog">Blog</a></li>
                    <li><a class="nav-link" href="index.php?act=contact">Contact us</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <!-- <li style="margin-right: 20px;"><a class="nav-link" href="login.php">Login</a></li>
                    <li style="margin-right: 20px;"><a class="nav-link" href="signup.php">Signup</a></li> -->

                    <?php
                    if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
                        echo '<li><a class="nav-link" href="index.php?act=userinfo"><img src="images/user.svg"></a></li>';
                        echo '
                        <li style="margin-right: 20px;"><a class="nav-link" href="cart.php"><img src="images/cart.svg"></a></li>
                        <li style="margin-right: 20px;"><a class="nav-link" href="index.php?act=thoat" name="exit">Logout</a></li>';
                    } else {
                    ?>
                        <li style="margin-right: 20px;"><a class="nav-link" href="login.php">Login</a></li>
                        <li style="margin-right: 20px;"><a class="nav-link" href="signup.php">Signup</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>

    </nav>
    <!-- End Header/Navigation -->