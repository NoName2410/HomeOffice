<?php
function checkuser($user, $pass)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user='" . $user . "' AND pass='" . $pass . "'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    if (count($kq) > 0) return $kq[0]['role'];
    else return 0;
}
function getuserinfo($user, $pass)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user='" . $user . "' AND pass='" . $pass . "'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    if (count($kq) > 0) return $kq[0]['role'];
    else $kq;
}

function updatetk($id, $user)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_user SET user='" . $user . "' WHERE id=" . $id;

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
}

function getonetk($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE id = " . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function deltk($id)
{
    $conn = connectdb();
    $sql = "DELETE FROM tbl_user WHERE id=" . $id;

    // use exec() because no results are returned
    $conn->exec($sql);
}

function getall_tk()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
