<?php
include "view/header.php";
?>

<!-- Start Product Section -->
<section class="blog-posts">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div>
          <img src="<?php echo './images/' . $kq[0]['img'] . '' ?>" alt="" class="img-fluid wc-image">
        </div>
      </div>
      <div class="col-md-5">
        <div class="sidebar-item recent-posts">
          <div class="sidebar-heading">
            <h2 class="section-title"><?php echo $kq[0]['tensp'] ?></h2>
          </div>
          <div class="content">
            <p style="color: black; font-size: 16px;"><b>Danh Mục: </b><?php echo $tendm ?> </p>
            <p style="color: black; font-size: 25px; margin: 0;"><?php echo '<strong class="product-price">' . $kq[0]['gia'] . '₫</strong>	'; ?></p>
          </div>
        </div>
        <br>
        <br>
        <div class="contact-us">
          <div class="sidebar-item contact-form">
            <div class="sidebar-heading">
              <h2 class="section-title">Thêm vào giỏ</h2>
            </div>
            <div class="content">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-md-6 col-sm-12 quantity">
                    <fieldset>
                      <label for="">Số lượng</label>
                      <input type="number" value="1" required style="max-width:100px">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button class="btn btn-primary btn-radius me-2 my-2" type="submit" id="add-to-cart" class="main-button">Thêm vào giỏ</button>
                      <button class="btn btn-primary btn-radius me-2 my-2" type="submit" id="buy-nơ" class="main-button">Mua ngay</button>
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

<div class="section contact-us description">
  <div class="container">
    <div class="sidebar-item recent-posts">
      <div class="sidebar-heading">
        <h2>Description</h2>
      </div>
      <div class="content">
        <p>Sản phẩm A là một sản phẩm vô cùng phổ thông, được thiết kế và gia công bằng gỗ xoan cao cấp, có khả năng chống ẩm mốc cao</p>
      </div>
    </div>
  </div>
</div>
<?php
include "view/footer.php";
?>