<?php
include 'koneksi.php';
$id_users = $_POST['id_users'];
$id_materi = $_POST['id_materi'];
$jumlah_benar = 0;
$jumlah_salah = 0;

$hasil = mysqli_query($koneksi, "SELECT * FROM soal");
while($data = mysqli_fetch_assoc($hasil)){
    $id = $data['id_soal'];
    if(isset($_POST['jawaban'][$id])){
        $jawaban_user = $_POST['jawaban'][$id];
    } else {
        $jawaban_user = '';
    }
    $jawaban_benar = $data['jawaban'];
    if($jawaban_user == $jawaban_benar){
        $jumlah_benar++;
    } else {
        $jumlah_salah++;
    }
}

$nilai = $jumlah_benar * 20;
$tanggal = date('Y-m-d');

mysqli_query($koneksi, "INSERT INTO hasil VALUES(
    '',
    '$id_users',
    '$id_materi',
    '$jumlah_benar',
    '$jumlah_salah',
    '$nilai',
    '$tanggal'
)");
header("Location: hasil.php?nilai=$nilai");
exit;

?>