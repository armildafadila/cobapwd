<?php
include 'koneksi.php';

$id_hasil = $_GET['id_hasil'];

$query = mysqli_query($koneksi, "SELECT * FROM hasil WHERE id_hasil = '$id_hasil'");
$data = mysqli_fetch_assoc($query);

$nilai = $data['nilai'];
$jumlah_benar = $data['jumlah_benar'];
$jumlah_salah = $data['jumlah_salah'];

$id_users = $data['id_users'];
$id_materi = $data['id_materi'];


if($nilai >= 80){
    $status = "HEBAT";
    $pesan = "KEREN";
}

elseif($nilai >= 70){
    $status = "Cukup baik";
    $pesan = "bagusss";
}

else{
    $status = "beljaar lagi";
    $pesan = "ggagag";
}

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
      max-width: 300px;
      margin: auto;
      height: 100%;
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

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      
     }

    .card-img-top {
      height: 220px;
      padding: 10px;
      object-fit: contain;
    }

    .container{
      margin-top: 40px;
    }

    .footer{
      margin-top: 80px;
    }
     </style>
</head>
<body>
  
    <nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container ">
    
     <a class="navbar-brand d-flex align-items-center" href="#">
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


<!-- Hasilll -->
 <div class="container">
 <div class="card shadow" >

 <!-- header -->

  <div class="card-header text-center bg-white py-3">

    <h5 class="fw-bold mb-1">Hallo, <?= $id_users ?>!</h5>
    <p>Hasil Pengerjaan soal  <strong><?= $id_materi?></strong></p>
        </div>


     <p class="pesan text-danger text-center"><?= $pesan ?></p>
        <div class="text-center">

    <h1 class="fw-bold text-success">
        <?= $nilai ?>
    </h1>

    <p>Nilai Kamu</p>

</div>

<hr>

<div class="row text-center">

    <div class="col-6">

        <h3 class="text-success">
            <?= $jumlah_benar ?>
        </h3>

        <p>Benar</p>

    </div>

    <div class="col-6">

        <h3 class="text-danger">
            <?= $jumlah_salah ?>
        </h3>

        <p>Salah</p>

    </div>

</div>

<hr>

     <!-- klo mau nambahin ratting tapi nnti aja -->
   

<!-- d-flex justify dll (biar button nya di tengah) -->
 <div class="d-flex justify-content-center">
    <a href="index.php" class="btn btn-primary w-50">Coba Artis Lainya</a>
 </div>
</div>
 </div>
 </div>

<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ps-4">
                    <div class="d-flex align-items-center">
                     <img src="foto/baru.png" alt="Logo" width="90" height="auto" class="me-2">
                <h4 class="fw-bold m-0">MathPartner</h4>
                </div>
                <p class="m-0" style="font-size: medium;">Website latihan matematika untuk siswa SMA dengan soal terstruktur</p>
                </div>
                <div class="col-md-3">
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
    
  </body>
</html>