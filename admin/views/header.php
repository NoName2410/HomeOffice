<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">
    <title>Admin page</title>
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="../css/tiny-slider.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
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
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Dashboard</a>
                    </li>
                    <li><a class="nav-link" href="index.php?act=danhmuc">Bảo trì danh mục</a></li>
                    <li><a class="nav-link" href="index.php?act=sanpham">Bảo trì sản phẩm</a></li>
                    <li><a class="nav-link" href="index.php?act=tintuc">Bảo trì tin tức</a></li>
                    <li><a class="nav-link" href="index.php?act=taikhoan">Quản lý tài khoản</a></li>
                    <li><a class="nav-link" href="index.php?act=donhang">Quản lý đơn hàng</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link active" href="login.php"><img src="../images/user.svg"></a></li>
                    <li><a class="nav-link active" href="#" name="exit"><img src="../images/logout.svg"></a></li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- End Header/Navigation -->