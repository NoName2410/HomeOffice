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
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="css/tiny-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
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
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li><a class="nav-link" href="index.php?act=shop">Shop</a></li>
					<li><a class="nav-link" href="index.php?act=about">About us</a></li>
					<li><a class="nav-link" href="index.php?act=services">Services</a></li>
					<li><a class="nav-link" href="index.php?act=blog">Blog</a></li>
					<li><a class="nav-link" href="index.php?act=contact">Contact us</a></li>
				</ul>

				<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
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

	<!-- Start Hero Section -->
	<div class="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="intro-excerpt">
						<h1>Blog</h1>
						<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
						<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="hero-img-wrap">
						<img src="images/couch.png" class="img-fluid">
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

				<div class="col-12 col-sm-6 col-md-4 mb-5">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="images/post-1.jpg" alt="Image" class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#">First Time Home Owner Ideas</a></h3>
							<div class="meta">
								<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4 mb-5">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="images/post-2.jpg" alt="Image" class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#">How To Keep Your Furniture Clean</a></h3>
							<div class="meta">
								<span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4 mb-5">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="images/post-3.jpg" alt="Image" class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
							<div class="meta">
								<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4 mb-5">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="images/post-1.jpg" alt="Image" class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#">First Time Home Owner Ideas</a></h3>
							<div class="meta">
								<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4 mb-5">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="images/post-2.jpg" alt="Image" class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#">How To Keep Your Furniture Clean</a></h3>
							<div class="meta">
								<span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4 mb-5">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="images/post-3.jpg" alt="Image" class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
							<div class="meta">
								<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4 mb-5">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="images/post-1.jpg" alt="Image" class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#">First Time Home Owner Ideas</a></h3>
							<div class="meta">
								<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4 mb-5">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="images/post-2.jpg" alt="Image" class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#">How To Keep Your Furniture Clean</a></h3>
							<div class="meta">
								<span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4 mb-5">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="images/post-3.jpg" alt="Image" class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
							<div class="meta">
								<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Blog Section -->



	<?php
		include "view/testimonialslider.php";
		include "view/footer.php";
	?>