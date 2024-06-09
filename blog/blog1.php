<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
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
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMt23cez/3paNdF+ZiBdbCBF1Z6KNNFjc4xJ6mj" crossorigin="anonymous">
	<link href="../css/tiny-slider.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
</head>

<body>

	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

		<div class="container">
			<a class="navbar-brand" href="../index.php">HomeOffice<span>.</span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li class="nav-item">
					<a class="nav-link" href="../index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="../index.php?act=shop" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Sản phẩm
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Danh mục 1</a></li>
                            <li><a class="dropdown-item" href="#">Danh mục 2</a></li>
                            <li><a class="dropdown-item" href="#">Danh mục 3</a></li>
                            <li><a class="dropdown-item" href="#">Danh mục 4</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="../index.php?act=blog">Blog</a></li>
                    <li><a class="nav-link" href="../index.php?act=contact">Liên hệ</a></li>
                </ul>

				<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<?php
					if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
						echo '<li><a class="nav-link" href="index.php?act=userinfo">' . $_SESSION['user'] . '</a></li>
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

	<!-- Start Hero Section -->
	<div class="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="intro-excerpt">
						<h1>Blog</h1>
						<p class="mb-4">Những bài viết mới nhất về những đồ nội thất mà bạn đang quan tâm,những trick để trang trí nhà cửa và còn nhiều hơn thế nữa đang chờ đợi bạn !!!</p>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="hero-img-wrap">
						<img src="../images/couch.png" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Hero Section -->



	<!-- Start Blog Section -->
	<div class="blog-section">
		<div class="container">
			<div class="row">
				<section class="post-detail-header">
					<h2>Bài Viết 1: Trang trí phòng khách hiện đại</h2>
					<p class="date"><?php echo date("d/m/Y"); ?></p>
				</section>
				<section class="post-detail">
					<img src="../images/post-1.jpg" alt="Lựa chọn bàn ghế cho phòng ăn">
					<p>Phòng khách là nơi thể hiện phong cách của gia chủ. Trong bài viết này, chúng tôi sẽ chia sẻ những cách để trang trí phòng khách theo phong cách hiện đại...</p>
					<p>...</p>
				</section>
			</div>
		</div>

	</div>
	<!-- End Blog Section -->

	<!-- Start Footer Section -->
	<footer class="footer-section">
		<div class="container relative">

			<div class="sofa-img">
				<img src="../images/sofa.png" alt="Image" class="img-fluid">
			</div>


			<div class="row g-5 mb-5">
				<div class="col-lg-4">
					<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
					<p class="mb-4">Chúng tôi luôn muốn đem đến cho bạn một trải nghiệm tốt nhất.Cảm ơn vì đã luôn tin tưởng và ủng hộ Furni !!!</p>

					<ul class="list-unstyled custom-social">
						<li><a href="https://www.facebook.com/giantbox.vn"><span class="fa fa-brands fa-facebook-f"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
					</ul>
				</div>

				<div class="col-lg-8">
					<div class="row links-wrap">
						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">About us</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>

			<div class="border-top copyright">
				<div class="row pt-4">
					<div class="col-lg-6">
						<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> <!-- License information: https://untree.co/license/ -->
						</p>
					</div>

					<div class="col-lg-6 text-center text-lg-end">
						<ul class="list-unstyled d-inline-flex ms-auto">
							<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>

				</div>
			</div>

		</div>
	</footer>
	<!-- End Footer Section -->


	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>