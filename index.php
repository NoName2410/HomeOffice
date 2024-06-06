<?php
session_start();
ob_start();
include "model/connectdb.php";
include "model/user.php";
include "model/sanpham.php";
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
				$_SESSION['name'] = $kq[0]['name'];
				$_SESSION['address'] = $kq[0]['address'];
				$_SESSION['email'] = $kq[0]['email'];
				$_SESSION['pass'] = $kq[0]['pass'];
				header("location: index.php");
			}
		}
		include "login.php";
		break;
	case 'signup':
		include "signup.php";
		break;
	case 'account':
		if (isset($_SESSION['id'])) {
			$id = $_SESSION['id'];
			$kqone = getonetk($id);
			if (isset($_POST['capnhat'])) {
				$name = $_POST['name'];
				$address = $_POST['address'];
				$email = $_POST['email'];
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				updatetk($id, $name, $address, $email, $user, $pass, 0);
				$_SESSION['user'] = $user;
				$_SESSION['name'] = $name;
				$_SESSION['address'] = $address;
				$_SESSION['email'] = $email;
				$_SESSION['pass'] = $_POST['pass'];
				header("location: index.php");
			}
			include "account.php";
		}
		break;
	case 'shop':
		$spshop = getall_sp();
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
			unset($_SESSION['id']);
			unset($_SESSION['user']);
			unset($_SESSION['adress']);
			unset($_SESSION['name']);
			unset($_SESSION['email']);
			unset($_SESSION['pass']);
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
