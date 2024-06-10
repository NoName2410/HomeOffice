<?php
include "view/header.php";
?>

<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>Phong Cách Hiện Đại</h1>
					<p class="mb-4 hero-content">Sáng tạo một không gian sống đẹp và tiện nghi với các sản phẩm chất lượng của Come Home.
						Đến với Come Home, bạn luôn có thể dễ dàng tìm thấy bất kỳ sản phẩm cần thiết phù hợp với nhu cầu và ngân sách của bạn.
						Chúng tôi luôn đặt chất lượng và sự thoải mái tiện dụng của sản phẩm lên hàng đầu.</p>
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


<!-- Start Product -->
<div class="untree_co-section product-section before-footer-section">
	<div class="container">
		<div class="row">
			<?php
			foreach ($spshop as $sp) {
				echo '
						<div class="col-12 col-md-4 col-lg-3 mb-5">
							<a class="product-item" href="index.php?act=product-detail&id=' . $sp['id'] . '">
								<img src="./images/' . $sp['img'] . '" class="img-fluid product-thumbnail">
								<h3 class="product-title">' . $sp['tensp'] . '</h3>
								<strong class="product-price">' . number_format($sp['gia'], 0, ',', '.') . ' VNĐ</strong>			
								<span class="icon-cross">
									<img src="images/cross.svg" class="img-fluid">
								</span>
							</a>
						</div>
					';
			}
			?>
		</div>
	</div>
</div>
<!-- End Product -->

<?php
include "view/footer.php";
?>