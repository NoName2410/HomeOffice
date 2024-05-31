<?php
	include "view/header.php";
?>

<!-- Start Product Section -->

<section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div>
              <img src="assets/images/product-1-720x480.jpg" alt="" class="img-fluid wc-image">
            </div>

            <br>

            <div class="row">
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-1-720x480.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-2-720x480.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-3-720x480.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>

              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-4-720x480.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-5-720x480.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-6-720x480.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-5">
            <div class="sidebar-item recent-posts">
              <div class="sidebar-heading">
                <h2>Info</h2>
              </div>

              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed velit eveniet quibusdam animi eos, cum! Alias, dicta. Minima repudiandae sequi iste, nostrum! Neque temporibus officiis harum esse aperiam voluptate? Quibusdam.</p>
              </div>
            </div>

            <br>
            <br>
          
            <div class="contact-us">
              <div class="sidebar-item contact-form">
                <div class="sidebar-heading">
                  <h2>Add to Cart</h2>
                </div>

                <div class="content">
                  <form id="contact" action="" method="post">
                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <label for="">Extra 1</label>
                          <select>
                            <option value="0">Extra A</option>
                            <option value="0">Extra B</option>
                            <option value="0">Extra C</option>
                            <option value="0">Extra D</option>
                          </select>
                        </fieldset>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <label for="">Quantity</label>
                          <input type="text" value="1" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="main-button">Add to Cart</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <br>
          </div>
        </div>
      </div>
    </section>

<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
						<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
						<p><a href="shop.html" class="btn">Explore</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="images/product-1.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="images/product-2.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Kruzo Aero Chair</h3>
							<strong class="product-price">$78.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="images/product-3.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Ergonomic Chair</h3>
							<strong class="product-price">$43.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

<?php
	include "view/footer.php";
?>    