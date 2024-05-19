<?php
session_start();
ob_start();
if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
    include "../model/connectdb.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";

    include "views/header.php";
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'danhmuc':
                $kq = getall_dm();
                include "views/danhmuc.php";
                break;
            case 'adddm':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tendm = $_POST['tendm'];
                    themdm($tendm);
                }
                $kq = getall_dm();
                include "views/danhmuc.php";
                break;
            case 'deldm':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    deldm($id);
                }
                $kq = getall_dm();
                include "views/danhmuc.php";
                break;
            case 'updatedmform':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $kqone = getonedm($id);
                    $kq = getall_dm();
                    include "views/updatedmform.php";
                }
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $tendm = $_POST['tendm'];
                    updatedm($id, $tendm);
                    $kq = getall_dm();
                    include "views/danhmuc.php";
                }
                break;
            case 'sanpham':
                include "views/sanpham.php";
                break;
            case 'tintuc':
                include "views/tintuc.php";
                break;
            case 'taikhoan':
                include "views/taikhoan.php";
                break;
            case 'donhang':
                include "views/donhang.php";
                break;
            case 'thoat':
                if(isset($_SESSION['role'])) unset($_SESSION['role']);
                header('location: login.php');
                break;
            default:
                include "views/dashboard.php";
                break;
        }
    } else {
        include "views/dashboard.php";
    }
    include "views/footer.php";
} else {
    header('location: login.php');
}
