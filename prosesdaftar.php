<?php
include 'koneksi.php';

$nama = $_POST['first_name']. " " . $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm_pw'];

if ($password != $confirm) {
    echo "Konfirmasi Password Berbeda, Silahkan ulangi lagi! <a href='daftar.php></a>";
    exit;
}
$query= mysqli_query($konek, "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')") or die(mysqli_error($konek));

if ($query) {
    echo "Proses pendaftaran berhasil";

}else {
    echo "Proses pendaftaran gagal!";
}
?>