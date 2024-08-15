	<!-- Start Header/Navigation -->
	<?php
	include "view/header.php";
	?>
	<!-- End Header/Navigation -->

	<!-- Start Hero Section -->
	<div class="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="intro-excerpt">
						<h1>BLOG</h1>
						<p class="mb-4">Những bài viết mới nhất về những đồ nội thất mà bạn đang quan tâm, những trick để trang trí nhà cửa và còn nhiều hơn thế nữa đang chờ đợi bạn !!!</p>
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
						<a href="blog/blog1.php" class="post-thumbnail"><img src="images/post-1.jpg" alt="Image" class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#">Trang trí phòng khách hiện đại </a></h3>
							<div class="meta">
								<span>by <a href="#">Nguyễn Chiến</a></span> <span>on <a href="#"><?php echo date("d/m/Y"); ?></a></span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4 mb-5">
					<div class="post-entry">
						<a href="blog/blog2.php" class="post-thumbnail"><img src="images/post-2.jpg" alt="Image" class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#">Lựa chọn bàn ghế phù hợp cho phòng ăn</a></h3>
							<div class="meta">
								<span>by <a href="#">Thanh Bình</a></span> <span>on <a href="#"><?php echo date("d/m/Y"); ?></a></span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4 mb-5">
					<div class="post-entry">
						<a href="blog/blog3.php" class="post-thumbnail"><img src="images/post-3.jpg" alt="Image" class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#">Sắp xếp nội thất cho những căn phòng nhỏ</a></h3>
							<div class="meta">
								<span>by <a href="#">Đức Lương</a></span> <span>on <a href="#"><?php echo date("d/m/Y"); ?></a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Blog Section -->

	<?php
	include "view/footer.php";
	?>