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
            <a class="navbar-brand" href="index.php">HomeOffice<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Trang chủ</a>
                    </li>
                    <li><a class="nav-link" href="index.php?act=shop">Sản phẩm</a></li>
                    <li><a class="nav-link" href="index.php?act=about">Về chúng tôi</a></li>
                    <li><a class="nav-link" href="index.php?act=contact">Liên hệ</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <?php
                    if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
                        echo '<li><a class="nav-link" href="index.php?act=userinfo">'.$_SESSION['user'].'</a></li>
                        <li style="margin-right: 20px;"><a class="nav-link" href="index.php?act=cart"><img src="images/cart.svg"></a></li>
                        <li style="margin-right: 20px;"><a class="nav-link" href="index.php?act=thoat" name="exit">Logout</a></li>';
                    } else {
                    ?>
                        <li style="margin-right: 20px;"><a class="nav-link" href="login.php">Đăng nhập</a></li>
                        <li style="margin-right: 20px;"><a class="nav-link" href="signup.php">Đăng ký</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>

    </nav>
    <!-- End Header/Navigation -->