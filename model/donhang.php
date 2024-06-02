<?php
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

