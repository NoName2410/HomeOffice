<?php
function checkuser($user, $pass)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user='" . $user . "' AND pass='" . $pass . "'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    if (count($kq) > 0) return $kq[0]['role'];
    else return -1;
}
function getuserinfo($user, $pass)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user='" . $user . "' AND pass='" . $pass . "'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq ? $kq : null;
}

function themtk($name, $address, $email, $user, $pass, $role)
{
    $conn = connectdb();
    $sql = "INSERT INTO tbl_user (name,address,email,user,pass,role) VALUES ('" . $name . "','" . $address . "','" . $email . "','" . $user . "','" . $pass . "','" . $role . "')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

function updatetk($id, $name, $address, $email, $user, $pass, $role)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_user SET name='".$name."',address='".$address."',email='".$email."', user='" . $user . "', pass='" . $pass . "', role='" . $role . "' WHERE id=" . $id;

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
