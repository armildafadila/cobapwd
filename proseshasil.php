<?php
include 'koneksi.php';
session_start();

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
$jawaban_user = $_POST['jawaban'];
$id_materi = $_POST['id_materi'];
$id_users = $_POST['id_users'];

$query = "SELECT * FROM soal WHERE id_materi = '$id_materi'";
$ambil_data = mysqli_query($koneksi, $query);

$jumlah_soal = 0;
$benar = 0;

while($data = mysqli_fetch_assoc($ambil_data)){
    $jumlah_soal ++;

    // ambil dari id_soal dan id_materi
    $id_soal = $data['id_soal'];
    $kunci = $data['jawaban_benar'];

    if(isset($jawaban_user[$id_soal])) {
        $jawaban_peserta = $jawaban_user[$id_soal];

        if($jawaban_peserta == $kunci){
            $benar ++;
        }
    }

}


$salah = $jumlah_soal - $benar;
$nilai = ($benar / $jumlah_soal) * 100;
$skor_bulat = round($nilai);

$_SESSION['total'] = $jumlah_soal;
$_SESSION['benar'] = $benar;
$_SESSION['salah'] = $salah;
$_SESSION['nilai'] = $skor_bulat;
$_SESSION['id_materi'] = $id_materi;

header("Location: hasil.php");
?>