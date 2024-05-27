<?php
session_start();
ob_start();
include "model/connectdb.php";
include "model/user.php";
include "model/sanpham.php";
$spshop=getall_sp();
switch ($_GET['act']) {
	case 'login':
		if ((isset($_POST['login'])) && ($_POST['login'])) {
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$kq = getuserinfo($user, $pass);
			$role = $kq[0]['role'];
			if ($role == 1) {
				$_SESSION['role'] = $role;
				header('location: admin/index.php');
			} else {
				$_SESSION['role'] = $role;
				$_SESSION['id'] = $kq[0]['id'];
				$_SESSION['user'] = $kq[0]['user'];
				header("location: index.php");
			}
		}
		include "login.php";
		break;
	case 'signup':
		include "signup.php";
		break;
	case 'shop':
		include "shop.php";
		break;
	case 'about':
		include "about.php";
		break;
	case 'services':
		include "services.php";
		break;
	case 'blog':
		include "blog.php";
		break;
	case 'contact':
		include "contact.php";
		break;
	case 'cart':
		include "cart.php";
		break;
	case 'thoat':
		if (isset($_SESSION['role'])) {
			unset($_SESSION['role']);
			unset($_SESSION['iduser']);
			unset($_SESSION['username']);
		}
		header('location: login.php');
		break;
	default:
		include "view/header.php";
		include "view/hero.php";
		include "view/product.php";
		include "view/whychooseus.php";
		include "view/wehelp.php";
		include "view/popularproduct.php";
		include "view/testimonialslider.php";
		include "view/blogsection.php";
		include "view/footer.php";
		break;
}
