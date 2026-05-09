<?php
include 'koneksi.php';
include 'fungsi.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MathPartner</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  
  <style>
    .btn-hijau-custom {
    background-color: #4f7726;
    color: white;
    border: none;
}
.card-bawah,
.card{
    width: 600px;
    border: none;
    border-radius: 15px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.20);
}
.card-bawah {
    margin-top: -40px;
    padding: 20px;
    background-color: white;

  }

.card-header{
    background-color: white;
    border: none;
    padding: 30px;
}

.baris-soal{
    display: flex;
    align-items: center;
    margin-bottom: 25px;
}

.text-atas{
    width: 320px;
    font-size: 22px;
    font-weight: bold;
    color: #4f7726;

}

.isi-atas,
.isi-bawah{
    font-size: 22px;
    color: #4f7726;
}

.isi-bawah{
    color: #4f7726;
    font-weight: bold;
}
.card-body {
  padding: 10px;
  background-color: white;
}
.opsi-hover{
  transition:0.3s;
  cursor: pointer;

}
.opsi-hover:hover{
  transform: translateY(-3px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.radio-warna{
  accent-color: #4f7726;
}
.opsi-pilihan:has(input:checked) {
  border-color: #4f7726;
  background-color: #edf5e6;
}
b{
}
  </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container">
    
     <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="foto/baru.png" alt="Logo" width="90" height="auto" class="d-inline-block align-text-top">
      <span class="text-judul">MathPartner</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ms-4">
      <ul class="navbar-nav">

        <a style="color: #4f7726;" class="nav-link active" href="tentang.html">Tentang</a>
        <a style="color: #4f7726;" class="nav-link" href="keunggulan.html">Keunggulan</a>
        <a style="color: #4f7726;" class="nav-link" href="testimoni.html">Testimoni</a>
        <li class="nav-item dropdown list-unstyled">
          <a style="color: #4f7726;" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Kelas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="masuk.php">Kelas 10</a></li>
            <li><a class="dropdown-item" href="masuk.php">Kelas 11</a></li>
            <li><a class="dropdown-item" href="masuk.php">Kelas 12</a></li>
          </ul>
        </li>

        </ul>

        <div class="d-flex ms-auto gap-3">
        <a href="daftar.php" class="btn btn-hijau-custom">Daftar</a>        
        <a href="masuk.php" class="btn btn-hijau-custom">Masuk</a>        
    </div>
    </div>

</nav>
<div class="d-flex justify-content-center mt-4">
  <div class="card p-3">
        <div class="card-header">
          <div class="baris-soal">
          <span class= "text-atas">Materi</span>
          <span class="isi-atas">FUNGSI</span>
          </div>
        <hr>

          <div class="baris-soal">
          <span class="text-atas">Kelas</span>
          <span class="isi-bawah"> 10 </span>
    </div>      
    </div>
</div>
</div>

<div class="d-flex justify-content-center">
  <div class="card-bawah p-3">
        <div class="card-bodyr">
          <form class="form" action="hasil.php" method="POST">
            <?php
            $nomor = 1;
            foreach($materi_fungsi as $kode => $data) {
            ?>
             <h6>Soal Nomor <?=$nomor; ?> / 5</h6>
             <hr>
             <p> 
              <?= $data['soal']; ?>
             </p>
             <?php
             foreach($data['opsi'] as $huruf => $opsi) {
              ?>
              <div class="opsi">
                <label class="border rounded p-4 mb-3 d-block shadow-sm opsi-hover opsi-pilihan">
                <input type="radio" name="jawaban[<?= $kode;?>]" value ="<?= $huruf; ?>" class="radio-warna">
                <b>                  
                <?=$huruf; ?>.
                </b>
                <?= $opsi; ?>
                
              </div>
</label>
           <?php } ?>
           <?php
           $nomor++;

            }
            ?>
    <button type="submit" class="btn btn-hijau-custom w-100">Kirim Jawaban</button>



</form>
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
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>