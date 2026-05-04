<?php
session_start();
include 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * from users WHERE email='$email'");
if (mysqli_num_rows($data) > 0) {
    $user = mysqli_fetch_assoc($data); 
    if ($password == $user['password']) {
    header("Location: kelas10.php"); // masuk ke kelas10
    exit;
    }
} else {
    header("Location: masuk.php?error=password");
    exit;
}
?>
