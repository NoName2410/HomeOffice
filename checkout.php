<?php
include "view/header.php";
?>

<div class="untree_co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mb-5 mb-md-0">
				<h2 class="h3 mb-3 text-black">Chi tiết hóa đơn</h2>
				<div class="p-3 p-lg-5 border bg-white">
					<div class="form-group">
						<label style="padding-top: 10px;" for="c_country" class="text-black">Tỉnh/Thành phố<span class="text-danger">*</span></label>
						<select id="c_country" class="form-control">
							<option value="1">Chọn tỉnh/thành phố của bạn</option>
							<option value="2">An Giang</option>
							<option value="3">Bà Rịa - Vũng Tàu</option>
							<option value="4">Bắc Giang</option>
							<option value="5">Bắc Kạn</option>
							<option value="6">Bạc Liêu</option>
							<option value="7">Bắc Ninh</option>
							<option value="8">Bến Tre</option>
							<option value="9">Bình Định</option>
							<option value="10">Bình Dương</option>
							<option value="11">Bình Phước</option>
							<option value="12">Bình Thuận</option>
							<option value="13">Cà Mau</option>
							<option value="14">Cần Thơ</option>
							<option value="15">Cao Bằng</option>
							<option value="16">Đà Nẵng</option>
							<option value="17">Đắk Lắk</option>
							<option value="18">Đắk Nông</option>
							<option value="19">Điện Biên</option>
							<option value="20">Đồng Nai</option>
							<option value="21">Đồng Tháp</option>
							<option value="22">Gia Lai</option>
							<option value="23">Hà Giang</option>
							<option value="24">Hà Nam</option>
							<option value="25">Hà Nội</option>
							<option value="26">Hà Tĩnh</option>
							<option value="27">Hải Dương</option>
							<option value="28">Hải Phòng</option>
							<option value="29">Hậu Giang</option>
							<option value="30">Hòa Bình</option>
							<option value="31">Hưng Yên</option>
							<option value="32">Khánh Hòa</option>
							<option value="33">Kiên Giang</option>
							<option value="34">Kon Tum</option>
							<option value="35">Lai Châu</option>
							<option value="36">Lâm Đồng</option>
							<option value="37">Lạng Sơn</option>
							<option value="38">Lào Cai</option>
							<option value="39">Long An</option>
							<option value="40">Nam Định</option>
							<option value="41">Nghệ An</option>
							<option value="42">Ninh Bình</option>
							<option value="43">Ninh Thuận</option>
							<option value="44">Phú Thọ</option>
							<option value="45">Phú Yên</option>
							<option value="46">Quảng Bình</option>
							<option value="47">Quảng Nam</option>
							<option value="48">Quảng Ngãi</option>
							<option value="49">Quảng Ninh</option>
							<option value="50">Quảng Trị</option>
							<option value="51">Sóc Trăng</option>
							<option value="52">Sơn La</option>
							<option value="53">Tây Ninh</option>
							<option value="54">Thái Bình</option>
							<option value="55">Thái Nguyên</option>
							<option value="56">Thanh Hóa</option>
							<option value="57">Thừa Thiên Huế</option>
							<option value="58">Tiền Giang</option>
							<option value="59">TP Hồ Chí Minh</option>
							<option value="60">Trà Vinh</option>
							<option value="61">Tuyên Quang</option>
							<option value="62">Vĩnh Long</option>
							<option value="63">Vĩnh Phúc</option>
							<option value="64">Yên Bái</option>
						</select>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label style="padding-top: 10px;" for="c_fname" class="text-black">Tên <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_fname" name="c_fname">
						</div>
						<div class="col-md-6">
							<label style="padding-top: 10px;" for="c_lname" class="text-black">Họ <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_lname" name="c_lname">
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-12">
							<label style="padding-top: 10px;" for="c_address" class="text-black">Địa chỉ <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_address" name="c_address" placeholder="Tên đường">
						</div>
					</div>

					<div class="form-group mt-3">
						<input type="text" class="form-control" placeholder="Căn hộ, đơn vị, ... (không bắt buộc)">
					</div>

					<div class="form-group row">
						<div class="col-md-12">
							<label style="padding-top: 10px;" for="c_postal_zip" class="text-black">Mã bưu chính/Zip <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip" placeholder="000001">
						</div>
					</div>

					<div class="form-group row mb-5">
						<div class="col-md-6">
							<label style="padding-top: 10px;" for="c_email_address" class="text-black">Địa chỉ email <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_email_address" name="c_email_address" placeholder="Địa chỉ email">
						</div>
						<div class="col-md-6">
							<label style="padding-top: 10px;" for="c_phone" class="text-black">Số điện thoại <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
						</div>
					</div>

					<div class="form-group">
						<label style="padding-top: 10px;" for="c_ship_different_address" class="text-black" data-bs-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Giao tới địa điểm khác?</label>
						<div class="collapse" id="ship_different_address">
							<div class="py-2">

								<div class="form-group">
									<label style="padding-top: 10px;" for="c_diff_country" class="text-black">Tỉnh/Thành phố <span class="text-danger">*</span></label>
									<select id="c_diff_country" class="form-control">
										<option value="1">Chọn tỉnh/thành phố của bạn</option>
										<option value="2">An Giang</option>
										<option value="3">Bà Rịa - Vũng Tàu</option>
										<option value="4">Bắc Giang</option>
										<option value="5">Bắc Kạn</option>
										<option value="6">Bạc Liêu</option>
										<option value="7">Bắc Ninh</option>
										<option value="8">Bến Tre</option>
										<option value="9">Bình Định</option>
										<option value="10">Bình Dương</option>
										<option value="11">Bình Phước</option>
										<option value="12">Bình Thuận</option>
										<option value="13">Cà Mau</option>
										<option value="14">Cần Thơ</option>
										<option value="15">Cao Bằng</option>
										<option value="16">Đà Nẵng</option>
										<option value="17">Đắk Lắk</option>
										<option value="18">Đắk Nông</option>
										<option value="19">Điện Biên</option>
										<option value="20">Đồng Nai</option>
										<option value="21">Đồng Tháp</option>
										<option value="22">Gia Lai</option>
										<option value="23">Hà Giang</option>
										<option value="24">Hà Nam</option>
										<option value="25">Hà Nội</option>
										<option value="26">Hà Tĩnh</option>
										<option value="27">Hải Dương</option>
										<option value="28">Hải Phòng</option>
										<option value="29">Hậu Giang</option>
										<option value="30">Hòa Bình</option>
										<option value="31">Hưng Yên</option>
										<option value="32">Khánh Hòa</option>
										<option value="33">Kiên Giang</option>
										<option value="34">Kon Tum</option>
										<option value="35">Lai Châu</option>
										<option value="36">Lâm Đồng</option>
										<option value="37">Lạng Sơn</option>
										<option value="38">Lào Cai</option>
										<option value="39">Long An</option>
										<option value="40">Nam Định</option>
										<option value="41">Nghệ An</option>
										<option value="42">Ninh Bình</option>
										<option value="43">Ninh Thuận</option>
										<option value="44">Phú Thọ</option>
										<option value="45">Phú Yên</option>
										<option value="46">Quảng Bình</option>
										<option value="47">Quảng Nam</option>
										<option value="48">Quảng Ngãi</option>
										<option value="49">Quảng Ninh</option>
										<option value="50">Quảng Trị</option>
										<option value="51">Sóc Trăng</option>
										<option value="52">Sơn La</option>
										<option value="53">Tây Ninh</option>
										<option value="54">Thái Bình</option>
										<option value="55">Thái Nguyên</option>
										<option value="56">Thanh Hóa</option>
										<option value="57">Thừa Thiên Huế</option>
										<option value="58">Tiền Giang</option>
										<option value="59">TP Hồ Chí Minh</option>
										<option value="60">Trà Vinh</option>
										<option value="61">Tuyên Quang</option>
										<option value="62">Vĩnh Long</option>
										<option value="63">Vĩnh Phúc</option>
										<option value="64">Yên Bái</option>
									</select>
								</div>


								<div class="form-group row">
									<div class="col-md-6">
										<label style="padding-top: 10px;" for="c_diff_fname" class="text-black">Tên <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
									</div>
									<div class="col-md-6">
										<label style="padding-top: 10px;" for="c_diff_lname" class="text-black">Họ <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
									</div>
								</div>

								<div class="form-group row  mb-3">
									<div class="col-md-12">
										<label style="padding-top: 10px;" for="c_diff_address" class="text-black">Địa chỉ <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="c_diff_address" name="c_diff_address" placeholder="Tên đường">
									</div>
								</div>

								<div class="form-group">
									<input type="text" class="form-control" placeholder="Căn hộ, đơn vị, ... (không bắt buộc)">
								</div>

								<div class="form-group row">
									<div class="col-md-12">
										<label style="padding-top: 10px;" for="c_diff_postal_zip" class="text-black">Mã bưu chính / Zip <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="c_diff_postal_zip" name="c_diff_postal_zip" placeholder="000001">
									</div>
								</div>

								<div class="form-group row mb-5">
									<div class="col-md-6">
										<label style="padding-top: 10px;" for="c_diff_email_address" class="text-black">Địa chỉ Email <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address" placeholder="Địa chỉ email">
									</div>
									<div class="col-md-6">
										<label style="padding-top: 10px;" for="c_diff_phone" class="text-black">Số điện thoại <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone" placeholder="Số điện thoại">
									</div>
								</div>

							</div>

						</div>
					</div>

					<div class="form-group">
						<label style="padding-top: 10px;" for="c_order_notes" class="text-black">Ghi chú</label>
						<textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Viết ghi chú tại đây ..."></textarea>
					</div>

				</div>
			</div>
			<div class="col-md-6">

				<div class="row mb-5">
					<div class="col-md-12">
						<h2 class="h3 mb-3 text-black">Mã giảm giá</h2>
						<div class="p-3 p-lg-5 border bg-white">

							<label style="padding-top: 10px;" for="c_code" class="text-black mb-3">Nhập mã giảm giá vào đây, nếu bạn có.</label>
							<div class="input-group w-75 couponcode-wrap">
								<input type="text" class="form-control me-2" id="c_code" placeholder="Mã giảm giá" aria-label="Coupon Code" aria-describedby="button-addon2">
								<div class="input-group-append">
									<button class="btn btn-black btn-sm" type="button" id="button-addon2">Áp dụng</button>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="row mb-5">
					<div class="col-md-12">
						<h2 class="h3 mb-3 text-black">Đơn hàng của bạn</h2>
						<div class="p-3 p-lg-5 border bg-white">
							<table class="table site-block-order-table mb-5">
								<thead>
									<th>Sản phẩm</th>
									<th>Tổng tiền</th>
								</thead>
								<tbody>
									<tr>
										<td>Top Up T-Shirt <strong class="mx-2">x</strong> 1</td>
										<td>$250.00</td>
									</tr>
									<tr>
										<td>Polo Shirt <strong class="mx-2">x</strong> 1</td>
										<td>$100.00</td>
									</tr>
									<tr>
										<td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
										<td class="text-black">$350.00</td>
									</tr>
									<tr>
										<td class="text-black font-weight-bold"><strong>Order Total</strong></td>
										<td class="text-black font-weight-bold"><strong>$350.00</strong></td>
									</tr>
								</tbody>
							</table>

							<div class="border p-3 mb-3">
								<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

								<div class="collapse" id="collapsebank">
									<div class="py-2">
										<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
									</div>
								</div>
							</div>

							<div class="border p-3 mb-3">
								<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

								<div class="collapse" id="collapsecheque">
									<div class="py-2">
										<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
									</div>
								</div>
							</div>

							<div class="border p-3 mb-5">
								<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

								<div class="collapse" id="collapsepaypal">
									<div class="py-2">
										<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
									</div>
								</div>
							</div>

							<div class="form-group">
								<button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='index.php?act=thankyou'">Đặt hàng</button>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- </form> -->
	</div>
</div>

<?php
include "view/footer.php";
?>