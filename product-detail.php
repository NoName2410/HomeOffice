<?php
  include "model/sanpham.php";
  include "model/danhmuc.php";
  include "model/connectdb.php";
	include "view/header.php";
  if(isset($_GET['id'])&&($_GET['id']>0)){
    $kq=getonesp($_GET['id']);
    $dsdm = getall_dm();
    $iddmcur = $kq[0]['iddm'];
      if(isset($dsdm)){
        foreach($dsdm as $dm){
          if($dm['id'] == $iddmcur)
            $tendm = $dm['tendm'];
        } 
     }
  }
?>

<!-- Start Product Section -->

<section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div>
              <img src="<?php echo'./images/'.$kq[0]['img'].'' ?>" alt="" class="img-fluid wc-image">
            </div>
          </div>
          <div class="col-md-5">
            <div class="sidebar-item recent-posts">
              <div class="sidebar-heading">
                <h2 class="section-title"><?php echo $kq[0]['tensp'] ?></h2>
              </div>
              <div class="content">
                <p class="category"><b>Danh Mục: </b><?php echo $tendm ?></p>
                <div><?php echo'<strong class="product-price">'.$kq[0]['gia'].'₫</strong>';?></div>
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
                          <input type="text" value="1" required="">
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
        <h2>Mô tả</h2>
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