<?php
session_start();
include 'koneksi.php';

$nama = $_POST['first_name']. " " . $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm_pw'];

if ($password != $confirm) {
   $_SESSION['error'] = "Password tidak sama";
   header("Location: daftar.php");
   exit();
}

$cek = mysqli_query($koneksi, "SELECT * FROM users WHERE email = '$email'");

if(mysqli_num_rows($cek)>0) {
   $_SESSION['error'] = "Email sudah terdaftar, silahkan login";
   header("Location: masuk.php");
    exit;
}
$query= mysqli_query($koneksi, "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')") or die(mysqli_error($koneksi));

if ($query) {
echo "<script>
    alert('Proses Pendaftaran berhasil! ');
    window.location ='kelas10.php'; </script>";
}else {
    echo "Proses pendaftaran gagal!";
}
?>