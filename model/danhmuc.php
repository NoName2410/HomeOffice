<?php

function themdm($tendm, $uutien, $hienthi)
{
    $conn = connectdb();
    $sql = "INSERT INTO tbl_danhmuc (tendm,uutien,hienthi) VALUES ('" . $tendm . "','" . $uutien . "','" . $hienthi . "')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

function updatedm($id, $tendm, $uutien, $hienthi)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_danhmuc
    SET tendm='" . $tendm . "', uutien='" . $uutien . "', hienthi='" . $hienthi . "'
    WHERE id=" . $id . ";";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
}

function getonedm($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id = " . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function deldm($id)
{
    $conn = connectdb();
    $sql = "DELETE FROM tbl_danhmuc WHERE id=" . $id;

    // use exec() because no results are returned
    $conn->exec($sql);
}

function getall_dm()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
