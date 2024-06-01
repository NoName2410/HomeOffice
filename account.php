<?php
include "view/header.php";
?>

<!-- Start Hero Section -->
<div class="hero">
    <div class="container relative">
        <div class="row justify-content-between">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card border-0 shadow">
                    <div class="card body">
                        <h2 style="font: black; text-align: center; padding-top:20px;">Thông tin tài khoản</h2>
                        <form action="index.php?act=account" method="post">
                            <input style="margin:0 auto;max-width:500px;" type="text" name="name" required class="form-control my-4 py-2" placeholder="Họ tên" value="<?= $kqone[0]['name'] ?>">
                            <input type="hidden" value="<?= $kqone[0]['id'] ?>">
                            <input style="margin:0 auto;max-width:500px;" type="text" name="address" required class="form-control my-4 py-2" placeholder="Địa chỉ" value="<?= $kqone[0]['address'] ?>">
                            <input style="margin:0 auto;max-width:500px;" type="email" name="email" required class="form-control my-4 py-2" placeholder="Email" value="<?= $kqone[0]['email'] ?>">
                            <input style="margin:0 auto;max-width:500px;" type="text" name="user" required class="form-control my-4 py-2" placeholder="Username" value="<?= $kqone[0]['user'] ?>">
                            <input style="margin:0 auto;max-width:500px;" type="password" name="pass" required class="form-control my-4 py-2" placeholder="Password" value="<?= $kqone[0]['pass'] ?>">
                            <div class="text-center mt-3" style="padding-bottom: 20px;">
                                <input class="btn btn-primary" type="submit" name="capnhat" value="Cập nhật">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->


<?php
include "view/footer.php";
?>