<?php
include "view/header.php";
?>

<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>GIỎ HÀNG</h1>
				</div>
			</div>
			<div class="col-lg-7">

			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section before-footer-section">
	<div class="container">
		<div class="row mb-5">
			<form class="col-md-12" method="post">
				<div class="site-blocks-table">
					<tr>
						<th>Sản phẩm đã thêm</th>
					</tr>
					<table class="table">
						<thead>
							<tr>
								<th class="product-thumbnail">Hình ảnh</th>
								<th class="product-name">Sản phẩm</th>
								<th class="product-price">Giá tiền</th>
								<th class="product-quantity">Số lượng</th>
								<th class="product-total">Tổng tiền</th>
								<th class="product-remove">Xóa </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="product-thumbnail">
									<img src="images/product-1.png" alt="Image" class="img-fluid">
								</td>
								<td class="product-name">
									<h2 class="h5 text-black">Product 1</h2>
								</td>
								<td>$49.00</td>
								<td>
									<div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
										<div class="input-group-prepend">
											<button class="btn btn-outline-black decrease" type="button">&minus;</button>
										</div>
										<input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
										<div class="input-group-append">
											<button class="btn btn-outline-black increase" type="button">&plus;</button>
										</div>
									</div>

								</td>
								<td>$49.00</td>
								<td><a href="#" class="btn btn-black btn-sm">X</a></td>
							</tr>

							<tr>
								<td class="product-thumbnail">
									<img src="images/product-2.png" alt="Image" class="img-fluid">
								</td>
								<td class="product-name">
									<h2 class="h5 text-black">Product 2</h2>
								</td>
								<td>$49.00</td>
								<td>
									<div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
										<div class="input-group-prepend">
											<button class="btn btn-outline-black decrease" type="button">&minus;</button>
										</div>
										<input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
										<div class="input-group-append">
											<button class="btn btn-outline-black increase" type="button">&plus;</button>
										</div>
									</div>

								</td>
								<td>$49.00</td>
								<td><a href="#" class="btn btn-black btn-sm">X</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</form>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="row mb-5">
					<div class="col-md-6 mb-3 mb-md-0">
						<button class="btn btn-black btn-sm btn-block">Cập nhật giỏ hàng</button>
					</div>
					<div class="col-md-6">
						<button class="btn btn-outline-black btn-sm btn-block">Tiếp tục mua sắm</button>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label class="text-black h4" for="coupon">Mã giảm giá</label>
						<p>Nhập mã giảm giá, nếu bạn có.</p>
					</div>
					<div class="col-md-8 mb-3 mb-md-0">
						<input type="text" class="form-control py-3" id="coupon" placeholder="Mã giảm giá">
					</div>
					<div class="col-md-4">
						<button class="btn btn-black">Áp dụng</button>
					</div>
				</div>
			</div>
			<div class="col-md-6 pl-5">
				<div class="row justify-content-end">
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-12 text-right border-bottom mb-5">
								<h3 class="text-black h4 text-uppercase">Tổng tiền</h3>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-md-6">
								<span class="text-black">Tổng phụ</span>
							</div>
							<div class="col-md-6 text-right">
								<strong class="text-black"></strong>
							</div>
						</div>
						<div class="row mb-5">
							<div class="col-md-6">
								<span class="text-black">Tổng cộng</span>
							</div>
							<div class="col-md-6 text-right">
								<strong class="text-black"></strong>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<a href="index.php?act=checkout" class="btn btn-black btn-lg py-3 btn-block">Tiến hành thanh toán</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include "view/footer.php";
?>