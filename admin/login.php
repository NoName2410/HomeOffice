<?php
    session_start();
    ob_start();
    include "../model/connectdb.php";
    include "../model/user.php";
    
    if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $role = checkuser($user,$pass);
        $_SESSION['role'] = $role;
        if($role==1) header('location: index.php');
        else {
            $txt_error = "Username hoặc Password không tồn tại!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="view/style.css">
</head>
<body>
    <h2>LOGIN</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <!-- Text -->
        <input type="text" name="user">
        <input type="text" name="pass">
        <input type="submit" name="dangnhap" value="Đăng nhập">
        <?php
            if(isset($txt_error)&&$txt_error!=""){
                echo "<font color='red'>".$txt_error."</font>";
            }
        ?>
    </form>
</body>
</html>