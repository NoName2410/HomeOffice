<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
function addtocart($idsp,$iddh,$slm){
    $conn = connectdb();
    $sql = "INSERT INTO tbl_chitietdonhang (idsp, iddh, slm) VALUES ('$idsp','$iddh','$slm')";
    $conn->exec($sql);
}
function taodonhang($id,$payment,$address){
    $conn = connectdb();
    $sql = "INSERT INTO tbl_donhang (idkh, payment, address, status) VALUES ('$id','$payment','$address','1')";
    $conn->exec($sql);
    $lastid= $conn->lastInsertId();
    return $lastid;
}
function statusdh($id)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_donhang
    SET status= 0
    WHERE id=" . $id . ";";
    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
}
function updatedh($id, $idkh, $payment, $address,$status)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_donhang
    SET idkh='" . $idkh . "', payment='" . $payment . "', address='" . $address . "', status='" . $status . "'
    WHERE id=" . $id . ";";
    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
}
function getonedh($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_donhang WHERE id = " . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function deldh($id){
    $conn = connectdb();
    $sql = "DELETE FROM tbl_donhang WHERE id=".$id;
    $sql1 = "DELETE FROM tbl_chitietdonhang WHERE id=".$id;
    $conn->exec($sql);
}

function delctdh($id){
    $conn = connectdb();
    $sql = "DELETE FROM tbl_chitietdonhang WHERE iddh=".$id;
    $conn->exec($sql);
}
// function insert_dh($idkh, $payment, $address,$status){
//     $conn = connectdb();
//     $sql = "INSERT INTO tbl_donhang (idkh, payment, address, status) VALUES ('$idkh','$payment','$address','$status')";
//     $conn->exec($sql);
// }
function getall_dh()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_donhang");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function get_cart($iddh){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_chitietdonhang WHERE iddh = ".$iddh.""  );
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

