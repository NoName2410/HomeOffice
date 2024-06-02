<?php
session_start();
ob_start();
if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
    include "../model/connectdb.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/user.php";
    include "../model/donhang.php";

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
                    $uutien = $_POST['uutien'];
                    $hienthi = $_POST['hienthi'];
                    themdm($tendm, $uutien, $hienthi);
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
                    $uutien = $_POST['uutien'];
                    $hienthi = $_POST['hienthi'];
                    updatedm($id, $tendm, $uutien, $hienthi);
                    $kq = getall_dm();
                    include "views/danhmuc.php";
                }
                break;
            case 'delsp':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delsp($id);
                }
                $dsdm = getall_dm();
                $kq = getall_sp();
                include "views/sanpham.php";
                break;
            case 'sanpham':
                $dsdm = getall_dm();
                $kq = getall_sp();
                include "views/sanpham.php";
                break;
            case 'addsp':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $gia=$_POST['gia'];

                    $target_dir = "../uploaded/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $img = $target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    if($uploadOk==1){
                        move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                        //if($_FILES['hinh']['name']!="") $img=$_FILES['hinh']['name']; else $img="";
                        insert_sp($iddm,$tensp,$gia,$img);
                    }
                    
                }
                $dsdm = getall_dm();
                $kq = getall_sp();
                include "views/sanpham.php";
                break;
            case 'updatespform':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $spct=getonesp($_GET['id']);
                    $kq = getall_sp();
                    $dsdm = getall_dm();
                    include "views/updatespform.php";
                }
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $gia = $_POST['gia'];
                    $id = $_POST['id'];
                    if($_FILES["hinh"]["name"]!=""){
                        $target_dir = "../uploaded/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        $img = $target_file;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        // Allow certain file formats
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif" ) {
                            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }
                        if($uploadOk==1){
                            move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                            //if($_FILES['hinh']['name']!="") $img=$_FILES['hinh']['name']; else $img="";
                            //insert_sp($iddm,$tensp,$gia,$img);
                            
                        }
                    }else{
                        $img = "";
                    }
                    
                    updatesp($id, $tensp, $img, $gia,$iddm);
                    $kq = getall_sp();
                    $dsdm = getall_dm();
                    include "views/sanpham.php";
                }
                break;
            case 'taikhoan':
                $kq = getall_tk();
                include "views/user.php";
                break;
            case 'addtk':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $role = $_POST['role'];
                    themtk($name,$address,$email,$user,$pass,$role);
                }
                $kq = getall_tk();
                include "views/user.php";
                break;
            case 'deltk':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    deltk($id);
                }
                $kq = getall_tk();
                include "views/user.php";
                break;
            case 'updatetkform':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $kqone = getonetk($id);
                    $kq = getall_tk();
                    include "views/updatetkform.php";
                }
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $role = $_POST['role'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    updatetk($id, $name, $address, $email, $user, $pass, $role);
                    $kq = getall_tk();
                    include "views/user.php";
                }
                break;
            case 'donhang':
                $kq = getall_dh();
                $user = getall_tk();
                include "views/donhang.php";
                break;
            // case 'adddh':
            //     if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
            //         $idkh = $_POST['idkh'];
            //         $payment = $_POST['payment'];
            //         $address = $_POST['address'];
            //         $status = $_POST['status'];
            //         insert_dh($idkh, $payment, $address,$status);
            //     }
            //     $kq = getall_dh();
            //     include "views/donhang.php";
            //     break;
            case 'deldh':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    deldh($id);
                }
                $kq = getall_dh();
                include "views/donhang.php";
                break;
            case 'statusdh':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    statusdh($id);
                }
                $kq = getall_dh();
                include "views/donhang.php";
                break;
            case 'updatedhform':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $kqone = getonedh($id);
                    $kq = getall_dh();
                    $user = getall_tk();
                    include "views/updatedhform.php";
                }
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $idkh = $_POST['idkh'];
                    $payment = $_POST['payment'];
                    $address = $_POST['address'];
                    $status = $_POST['status'];
                    updatedh($id, $idkh, $payment, $address,$status);
                    $kq = getall_dh();
                    $user = getall_tk();
                    include "views/donhang.php";
                }
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
    header('location: ../login.php');
}
