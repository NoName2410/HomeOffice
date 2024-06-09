<?php
session_start();
ob_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
include "model/connectdb.php";
include "model/user.php";
include "donhang.php";
include "model/validation.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/donhang.php";
switch ($_GET['act']) {
	case 'login':
		if ((isset($_POST['login'])) && ($_POST['login'])) {
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			if (checkuser($user, $pass) == 1 || checkuser($user, $pass) == 0) {
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
			} else $accError = "Tài khoản hoặc mật khẩu không chính xác!";
		}
		include "login.php";
		break;
	case 'signup':
		if ((isset($_POST['signup'])) && ($_POST['signup'])) {
			$conn = connectdb();
			$name = $_POST['name'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			if (stringValidation($name))
				$nameError = "Không được chứa ký tự đặc biệt!";
			if (stringValidation($address))
				$addressError = "Không được chứa ký tự đặc biệt!";
			if (!stringValidation($user))
				$userError = "Không được chứa ký tự đặc biệt!";
			if (!emailValidation($email)) $emailError = "Email không đúng định dạng!";
			if (!passwordValidation($pass)) $passError = "Mật khẩu phải gồm 1 chữ thường, 1 chữ hoa, 1 ký tự đặc biệt, 6-12 ký tự!";

			if (!$nameError && !$addressError && !$emailError && !$userError && !$passError) {
				$sql = "INSERT INTO tbl_user (name,address,email,user,pass) VALUES ('" . $name . "','" . $address . "','" . $email . "','" . $user . "','" . $pass . "')";
				$conn->exec($sql);
				header("location: login.php");
			}
		}
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
	case 'product-detail':
		if (isset($_GET['id']) && ($_GET['id'] > 0)) {
			$kq = getonesp($_GET['id']);
			$dsdm = getall_dm();
			$iddmcur = $kq[0]['iddm'];
			if (isset($dsdm)) {
				foreach ($dsdm as $dm) {
					if ($dm['id'] == $iddmcur)
						$tendm = $dm['tendm'];
				}
			}
		}
		include "product-detail.php";
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
		if (isset($_POST['add_to_cart']) && $_POST['add_to_cart']) {
			$tensp = $_POST['tensp'];
			$img = $_POST['img'];
			$gia = $_POST['gia'];
			$id = $_POST['id'];
			$soluong = $_POST['soluong'];
			$fg = 0;
			$i = 0;
			if (!isset($_SESSION['cart'])) {
				$_SESSION['cart'] = array();
			}
			foreach ($_SESSION['cart'] as $item) {
				if ($item[1] === $tensp) {
					$slnew = $item[4] + $soluong;
					$_SESSION['cart'][$i][4] = $slnew;
					$fg = 1;
					break;
				}
				$i++;
			}
			if ($fg == 0) {
				$item = array($id, $tensp, $img, $gia, $soluong);
				$_SESSION['cart'][] = $item;
			}
			header("Location:index.php?act=cart");
			exit();
		}
		include "cart.php";
		break;
	case 'delcart':
		echo $_GET['i'];
		if (isset($_GET['i'])) {
			if ((isset($_SESSION['cart'])) && (count($_SESSION['cart']) > 0))
				array_splice($_SESSION['cart'], $_GET['i'], 1);
		}
		if (isset($_SESSION['cart']) && (count($_SESSION['cart']) > 0)) {
			header('location:index.php?act=cart');
		} else {
			header('location:index.php');
		}
		include "cart.php";
		break;
	case 'thanhtoan':
		if (isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {
			if (!$_SESSION['id']) {
				header("Location:index.php?act=login");
			} else {
				$address = $_POST['address'];
				$payment = $_POST['payment'];
				$id = $_POST['id'];
				$iddh = taodonhang($id, $payment, $address);
				if (isset($_SESSION['cart']) && (count($_SESSION['cart']) > 0)) {
					foreach ($_SESSION['cart'] as $item) {
						addtocart($item[0], $iddh, $item[4]);
					}
					unset($_SESSION['cart']);
				}
			}
		}
		include "thankyou.php";
		break;
	case 'checkout':
		include "checkout.php";
		break;
	case 'thankyou':
		include "thankyou.php";
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
