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
				<!-- Add some content or design here -->
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->

<section class="untree_co-section before-footer-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-12">
				<h3 align="center">Sản phẩm đã thêm</h3>
			</div>
			<form class="col-md-12" method="post" action="index.php?act=updateCart">
				<div class="site-blocks-table">
					<table class="table">
						<thead>
							<tr>
								<th class="product-thumbnail">Hình ảnh</th>
								<th class="product-name">Sản phẩm</th>
								<th class="product-price">Giá tiền</th>
								<th class="product-quantity">Số lượng</th>
								<th class="product-total">Tổng tiền</th>
								<th class="product-remove">Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
								$i = 0;
								$tongall = 0;
								
								foreach ($_SESSION['cart'] as $item) {
									$sp = getonesp($item[0]);
									$tongtien = $item[3] * $item[4];
									$tongall += $tongtien;
									echo "<tr>
									<td class='product-thumbnail'>
										<img src='./" . ltrim($item[2], '.') . "' alt='Image' class='img-fluid' width='100px'>
									</td>
									<td class='product-name'>" . $item[1] . "</td>
									<td>" . number_format($item[3], 0, ',', '.') . " VNĐ</td>
									<td>
										<input type='number' name='quantity[$i]' value='{$item[4]}' style='max-width:50px;' min='0'>
										<input type='hidden' name='sluong[$i]' value='{$sp[0]['soluong']}'>
									</td>
									<td>" . number_format($tongtien, 0, ',', '.') . " VNĐ" . "</td>
									<td><a href='index.php?act=delcart&i=$i' class='btn btn-black btn-sm'>Xóa</a></td>
									</tr>";
									$i++;
								}
							}
							?>
						</tbody>
					</table>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="row mb-5">
							<div class="col-md-4">
								<a class="btn btn-outline-black btn-sm btn-block" href="index.php?act=shop">Tiếp tục mua sắm</a>
							</div>
							<div class="col-md-4">
								<input type="submit" class="btn btn-outline-black btn-sm btn-block" name="modifyQua" value="Cập nhật đơn hàng">
							</div>
						</div>
			</form>
			<form action="index.php?act=thanhtoan" method="post">
				<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
				<div class="row">
					<div class="col-md-12">
						<label class="text-black h4" for="coupon">Địa chỉ nhận hàng</label>
						<p>Vui lòng nhập địa chỉ nhận hàng.</p>
					</div>
					<div class="col-md-8 mb-3 mb-md-0">
						<input type="text" class="form-control py-3" name="address" placeholder="Địa chỉ">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label class="text-black h4" for="coupon">Phương thức thanh toán</label>
						<p>Vui lòng chọn phương thức thanh toán.</p>
					</div>
					<div class="col-md-8 mb-3 mb-md-0">
						<select name="payment" class="form-control">
							<option value="1">Thanh toán khi nhận hàng</option>
							<option value="2">Chuyển khoản ngân hàng</option>
							<option value="3">Thanh toán bằng VN-pay</option>
						</select>
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
						<div class="col-md-12">
							<span class="text-black">Tổng phụ</span>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-md-12">
							<span class="text-black">Tổng cộng: <?= number_format($tongall, 0, ',', '.') ?> VND</span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<?php
							if (!$_SESSION['id']) {
								echo '<input type="submit" name="thanhtoan" class="btn btn-black btn-lg py-3 btn-block" value="Đăng nhập để thanh toán">';
							} else echo '<input type="submit" name="thanhtoan" class="btn btn-black btn-lg py-3 btn-block" value="Tiến hành thanh toán">';
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>
	</div>
	</div>
</section>

<?php
include "view/footer.php";
?>