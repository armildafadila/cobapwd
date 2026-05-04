<?php
session_start();
include 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * from users WHERE email='$email' AND password='$password'");
$result = mysqli_query($koneksi, $data);
$cek = mysqli_num_rows($data);

if($cek > 0) {
    $_SESSION['email'] = $email;
    header("location:kelas10.php");

} else {
    header("location: masuk.php?error=1");
    exit;
} ?>