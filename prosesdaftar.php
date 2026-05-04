<?php
include 'koneksi.php';

$nama = $_POST['first_name']. " " . $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm_pw'];

if ($password != $confirm) {
    echo "<script>
    alert('Konfirmasi Password Berbeda, Silahkan ulangi lagi!');
    window.location ='daftar.php'; </script>";
    exit;
}
$query= mysqli_query($koneksi, "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')") or die(mysqli_error($koneksi));

if ($query) {
echo "<script>
    alert('Proses Pendaftaran berhasil! ');
    window.location ='kelas10.html'; </script>";
}else {
    echo "Proses pendaftaran gagal!";
}
?>