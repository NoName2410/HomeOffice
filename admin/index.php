<?php
session_start();
ob_start();
if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
    include "../model/connectdb.php";
}
else{
    header('location: login.php');
}
?>

