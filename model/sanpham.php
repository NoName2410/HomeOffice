<?php
function showsp($idcat=0,$keyword=""){
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_sanpham WHERE 1";
    if($keyword != ""){
        $sql.= " AND tensp LIKE '%".$keyword."%'";
    }
    if($idcat > 0){
        $sql.= " AND iddm=".$idcat;
    }
    $sql.= " order by id desc";
    $conn = connectdb();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}
function updatesp($id, $tensp, $img, $gia,$iddm,$soluong,$mota)
{
    $conn = connectdb();
    if($img==""){
        $sql = "UPDATE tbl_sanpham
        SET tensp='" . $tensp . "', gia='" . $gia . "', iddm='" . $iddm . "', soluong='" . $soluong . "', mota='" . $mota . "'
        WHERE id=" . $id . ";";
    }else{
        $sql = "UPDATE tbl_sanpham
        SET tensp='" . $tensp . "', gia='" . $gia . "', iddm='" . $iddm . "', img='" . $img . "', soluong='" . $soluong . "', mota='" . $mota . "'
        WHERE id=" . $id . ";";
    }
    

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
}
function getonesp($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham WHERE id = " . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function delsp($id){
    $conn = connectdb();
    $sql = "DELETE FROM tbl_sanpham WHERE id=".$id;
    $conn->exec($sql);
}
function insert_sp($iddm,$tensp,$gia,$img,$soluong,$mota){
    $conn = connectdb();
    $sql = "INSERT INTO tbl_sanpham (iddm, tensp, gia, img,soluong,mota) VALUES ('$iddm','$tensp','$gia','$img','$soluong','$mota')";
    $conn->exec($sql);
}
function getall_sp()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham order by id DESC");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

