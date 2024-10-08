<?php
include "view/header.php"
?>
<!-- Start Hero Section -->
<div class="hero">
    <div class="container relative">
        <div class="row justify-content-between">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card border-0 shadow">
                    <div class="card body">
                        <svg class="mx-auto my-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                        <?php
                            // Ensure $accError is defined before using it
                            $nameError = isset($nameError) ? $nameError : '';
                            $addressError = isset($addressError) ? $addressError : '';
                            $emailError = isset($emailError) ? $emailError : '';
                            $userError = isset($userError) ? $userError : '';
                            $passError = isset($passError) ? $passError : '';
                        ?>
                        <form action="index.php?act=signup" method="post">
                            <input style="margin:0 auto;max-width:500px;" type="text" name="name" required class="form-control my-4 py-2" placeholder="Họ tên*">
                            <span style="color:red;display: block;text-align: center;"><?php echo "$nameError" ?></span>
                            <input style="margin:0 auto;max-width:500px;" type="text" name="address" required class="form-control my-4 py-2" placeholder="Địa chỉ*">
                            <span style="color:red;display: block;text-align: center;"><?php echo "$addressError" ?></span>
                            <input style="margin:0 auto;max-width:500px;" type="email" name="email" required class="form-control my-4 py-2" placeholder="Email*">
                            <span style="color:red;display: block;text-align: center;"><?php echo "$emailError" ?></span>
                            <input style="margin:0 auto;max-width:500px;" type="text" name="user" required class="form-control my-4 py-2" placeholder="Username*">
                            <span style="color:red;display: block;text-align: center;"><?php echo "$userError" ?></span>
                            <input style="margin:0 auto;max-width:500px;" type="password" name="pass" required class="form-control my-4 py-2" placeholder="Password*">
                            <span style="color:red;display: block;text-align: center;"><?php echo "$passError" ?></span>
                            <div class="text-center mt-3">
                                <input class="btn btn-primary" type="submit" name="signup" value="Sign up">
                                <a href="index.php?act=login" class="nav-link">Khách hàng cũ? Đăng nhập ngay!</a>
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
include "view/footer.php"
?>