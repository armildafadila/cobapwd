<?php
include 'koneksi.php';
session_start();

if(!isset($_SESSION['nilai'])){
    header("Location: index.html");
    exit;
}

$nilai = $_SESSION['nilai'];
$jumlah_benar = $_SESSION['benar'];
$jumlah_salah = $_SESSION['salah'];
$id_materi = $_SESSION['id_materi'];

$query_materi = "SELECT nama_materi FROM materi WHERE id_materi = '$id_materi'";
$hasil_materi = mysqli_query($koneksi, $query_materi);
$data_materi = mysqli_fetch_assoc($hasil_materi);
$nama_materi = $data_materi['nama_materi'];

$query_soal = "SELECT * FROM soal WHERE id_materi = '$id_materi'";
$hasil_soal = mysqli_query($koneksi, $query_soal);

$nama_user = $_SESSION['nama'] ?? 'Siswa';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas 10</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="style.css">

     <style>
       h2 {
        text-align: left;
        margin-top: 20px;
        font-weight: bold;
        color: #4f7726;

    }

    .btn-hijau-custom {
      background-color: #4f7726;
      color: white;
      border: none;
    }
    .card{
      width: 100%;
      max-width: 850px;
      margin: auto;
      border: none;
    }
    
    .card-title{
      color: #4f7726;
      font-weight: bold;
      text-align: center;
    }

    .card-text{
      text-align: center;
    }

    .card-body{
      display: flex;
      flex-direction: column;
    }

    .card-body .btn{
      margin-top: auto;
    }

    .card-img-top {
      height: 220px;
      padding: 10px;
      object-fit: contain;
    }
    .footer{
      margin-top: 80px;
    }
     </style>
</head>
<body>
  
    <nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container ">
    
     <a class="navbar-brand d-flex align-items-center" href="index.html">
      <a href="index.html">
      <img src="foto/baru.png" alt="Logo" width="90" height="auto" class="d-inline-block align-text-top"></a>
      <span class="text-judul">MathPartner</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ms-4">
      <ul class="navbar-nav">

         <a class="nav-link active" href="index.html">Beranda</a>
        <a class="nav-link active" href="kelas10.php">Kelas 10</a>
        <a class="nav-link" href="kelas11.php">Kelas 11</a>
        <a class="nav-link" href="kelas12.php">Kelas 12</a>
        
    </div>
</nav>

<div class="container mt-4">
    <div class="card shadow mb-4">
        <div class="card-header bg btn-hijau-custom text-white">
            <h4>PEMBAHASAN SOAL</h4>
            <p>Materi: <strong><?= $nama_materi ?></strong></p>
            <p>Nilai: <?= $nilai ?> | Benar: <?= $jumlah_benar ?> | Salah: <?= $jumlah_salah ?></p>
        </div>
        <div class="card-body">
            <?php
            $nomor = 1;
            while($soal = mysqli_fetch_assoc($hasil_soal)) {
            ?>
            <div class="card card-soal mb-4 shadow">
                <div class="card-header bg-white">
                    <strong>Soal <?= $nomor ?></strong>
                </div>
                <div class="card-body">
                    <p><?= $soal['pertanyaan'] ?></p>
                    <hr>
                    <p><strong>Kunci Jawaban:</strong> <?= $soal['jawaban_benar'] ?></p>
                    <p><strong>Pembahasan:</strong> <?= $soal['pembahasan'] ?></p>
                </div>
            </div>
            <?php
            $nomor++;
            }
            ?>
            <div class="text-center mt-4">
                <a href="index.html" class="btn btn-hijau-custom">Kembali</a>
            </div>
        </div>
    </div>
</div>


<br>
<footer class="footer">
        <div class="container">
  <div class="row justify-content-between">                
    <div class="col-md-4 ps-4">
      <div class="d-flex align-items-center">
        <img src="foto/baru.png" alt="Logo" width="90" height="auto" class="me-2">
          <h4 class="fw-bold m-0">MathPartner</h4>
      </div>
        <p class="m-0" style="font-size: medium;">Website latihan matematika untuk siswa SMA dengan soal terstruktur</p>
      </div>
        <div class="col-md-2">
          <h4 class="fw-bold m-0 mt-3">Kontak Kami</h4>
            <ul class="list">
            <li class="text-tabel">Email: mathpartner@gmail.com</li>
            <li class="text-tabel">Telepon: 081234567890</li>
            </ul>

          </div>
            <div class="col-md-3">
              <h4 class="fw-bold m-0 mt-3">Ikuti Sosial Media</h4>
                <ul class="list">
                  <li class="text-tabel">Instagram: @mathpartner</li>
                  <li class="text-tabel">Youtube: @mathpartner</li>
                  <li class="text-tabel">Tiktok: @mathpartner</li>
                </ul>
                </div>
                
                <hr>
        </div>
        <br>
        </footer>
        <div class="footer-bawah">
        <p>© 2026 PT MathPartner. All rights reserved.</p>
        <p>Terms of Service | Policy | Service Level Agreement</p>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>