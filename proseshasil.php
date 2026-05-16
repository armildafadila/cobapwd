<?php
include 'koneksi.php';
$id_users= $_POST['id_users'];
$id_materi = $_POST['id_materi'];
$jumlah_benar = 0;
$jumlah_salah = 0;

$hasil = mysqli_query($koneksi, "SELECT * FROM soal");
while($data = mysqli_fetch_assoc($hasil)){
    $id_soal = $data['id_soal'];
    $jawaban_user = $_POST['jawaban'][$id_soal];
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

// ambil id baru
$id_hasil = mysqli_insert_id($koneksi); 
header("Location: hasil.php?id_hasil=$id_hasil");
exit;

?>