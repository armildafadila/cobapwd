<?php
session_start();
include 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * from users WHERE email='$email'");
if (mysqli_num_rows($data) > 0) {
    $user = mysqli_fetch_assoc($data);
    if ($password == $user['password']) {
        $_SESSION['email'] = $user['email'];
        echo "<script>
        alert('Login berhasil!');
        window.location='kelas10.php';
        </script>";

    } else {
         echo "<script>
        alert('Password salah!');
        window.location='masuk.php';
        </script>";
    } 
    }else {
    echo "<script>
    alert('Email tidak ditemukan!');
    window.location='masuk.php';
    </script>";
}

?>
    
