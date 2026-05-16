<?php
include 'koneksi.php';
session_start();

if(isset($_SESSION['nilai'])) {
    $nilai = $_SESSION['nilai'];
    $jumlah_benar = $_SESSION['benar'];
    $jumlah_salah = $_SESSION['salah'];
    $id_materi = $_SESSION['id_materi'];

    $query = "SELECT nama_materi FROM materi WHERE id_materi = '$id_materi'";
    $hasil_materi = mysqli_query($koneksi, $query);
    $data_materi = mysqli_fetch_assoc($hasil_materi);
    $nama_materi = $data_materi['nama_materi'] ?? 'Materi Tidak Dikenal';
}
else{
    header("Location: index.html");
    exit;
}

$nama_user = $_SESSION['nama'] ?? 'peserta';

if($nilai >= 80){
    $status = "HEBAT";
    $pesan = "Keren banget! Kamu udah paham materinya 😎✨";
}
elseif($nilai >= 70){
    $status = "Cukup baik";
    $pesan = "Bagusss! Tinggal sedikit lagi buat jadi master matematika 📚😆";
}
else{
    $status = "Belajar lagi";
    $pesan = "Jangan pantang menyerah yaa 💪😊 Coba latihan lagi biar makin jago!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil - MathPartner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .btn-hijau-custom {
            background-color: #4f7726;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
        }
        .btn-hijau-custom:hover {
            background-color: #3d5a1e;
            color: white;
        }
        .card{
            width: 400px;
            margin: 50px auto;
            border: none;
            border-radius: 20px;
        }
        .card-header{
            text-align: center;
            background-color: #4f7726;
            color: white;
            border-radius: 20px 20px 0 0;
        }
        .nilai-besar {
            font-size: 60px;
            font-weight: bold;
            color: #4f7726;
        }
        .footer {
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

<!-- HASIL -->
<div class="container">
    <div class="card shadow">
        <div class="card-header">
            <h5 class="fw-bold mb-1">Hallo!</h5>
            <p>Hasil Pengerjaan Materi <strong><?= $nama_materi ?></strong></p>
        </div>
        <div class="card-body text-center">
            <p class="alert alert-info"><?= $pesan ?></p>

            <h1 class="nilai-besar"><?= $nilai ?></h1>
            <p>Nilai Kamu</p>

            <hr>

            <div class="row">
                <div class="col-6">
                    <h3 class="text-success"><?= $jumlah_benar ?></h3>
                    <p>Benar ✅</p>
                </div>
                <div class="col-6">
                    <h3 class="text-danger"><?= $jumlah_salah ?></h3>
                    <p>Salah ❌</p>
                </div>
            </div>

            <hr>

            <div class="d-flex justify-content-center gap-3 mt-3">
                <a href="pembahasan.php" class="btn-hijau-custom">Lihat Pembahasan</a>
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