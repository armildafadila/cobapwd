<?php
session_start();
include 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * from users WHERE email='$email' AND password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";
    header("location:kelas10.html");

} else {
    header("location:masuk.php");
} ?>