<?php
	include "view/header.php";
?>

<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>Shop</h1>
				</div>
			</div>
			<div class="col-lg-7">

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
				foreach($spshop as $sp){
					echo'
						<div class="col-12 col-md-4 col-lg-3 mb-5">
							<a class="product-item" href="#">
								<img src="./images/'.$sp['img'].'" class="img-fluid product-thumbnail">
								<h3 class="product-title">'.$sp['tensp'].'</h3>
								<strong class="product-price">'.$sp['gia'].'₫</strong>
			
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