<?php
include "view/header.php";
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
                <p style="color: black; font-size: 16px;"><b>Danh Mục: </b><?php echo $tendm ?> </p>
                <p  style="color: black; font-size: 25px; margin: 0;"><?php echo'<strong class="product-price">'.$kq[0]['gia'].'₫</strong>	';?></p>
              </div>
            </div>
                </div>
                <div class="content">
                  <form id="contact" action="index.php?act=cart" method="post">
                    <div class="row">
                      <div class="col-md-6 col-sm-12 quantity">
                        <fieldset>
                          <label for="">Số lượng</label>
                          <input type="text" value="1" required="">Số lượng còn: <?php echo $kq[0]['soluong'] ?>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button class="btn btn-primary btn-radius me-2 my-2" type="submit" id="add-to-cart" class="main-button">Thêm vào giỏ</button>
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
   </div>
    </div>
  </div>
</section>

<div class="section contact-us description">
  <div class="container">
    <div class="sidebar-item recent-posts">
        <div class="sidebar-heading">
        <h2>Mô tả sản phẩm</h2>
        </div>
        <div class="content">
          <p><?php echo $kq[0]['mota'] ?></p>
        </div>
    </div>
    </div>
  </div>
</div>
<?php
include "view/footer.php";
?>