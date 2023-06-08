<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../Config/connect.php';

$username = $_POST['username'];

$data = mysqli_query($conn, "SELECT * FROM `user` WHERE username='$username'");
$check = mysqli_num_rows($data);

if ($check <= 0) {
    header("location:../index.php?pesan=pw/unameSalah");
    exit;
}

$data = mysqli_fetch_assoc($data);
echo "Debugging here";

if ($data['username'] == $username) {
    header("location:../Page/reset.php");
    exit;
}
?>
?>