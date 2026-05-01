<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MathPartner</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="hal1.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container">
    
     <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="baru.png" alt="Logo" width="90" height="auto" class="d-inline-block align-text-top">
      <span class="text-judul">MathPartner</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ms-4">
      <ul class="navbar-nav">

        <a style="color: #4f7726;" class="nav-link active" href="tentang.html">Tentang</a>
        <a style="color: #4f7726;" class="nav-link" href="#">Keunggulan</a>
        <a style="color: #4f7726;" class="nav-link" href="#">Testimoni</a>
        <li class="nav-item dropdown list-unstyled">
          <a style="color: #4f7726;" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Kelas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="">Kelas 10</a></li>
            <li><a class="dropdown-item" href="#">Kelas 11</a></li>
            <li><a class="dropdown-item" href="#">Kelas 12</a></li>
          </ul>
        </li>

        </ul>

        <div class="d-flex ms-auto gap-3">
        <a href="daftar.php" class="btn btn-outline-success">Daftar</a>        
        <a href="masuk.php" class="btn btn-outline-success">Masuk</a>        
    </div>
    </div>

</nav>
<div class="d-flex justify-content-center">
  <div class="card p-3">
        <div class="card-header">
         <div class="text-regist">Registrasi Pengguna Baru</div>
         <p class="desk-regist">Selamat datang di MathPartner, buat akun sekarang untuk mengakses fitur-fitur menarik di MathPartner</p>
    </div>
    <div class="card-body">
<form class="form" action="prosesdaftar.php" method="POST">
        
        <div class="flex">

        <label>
            <span class="juduldaftar">Nama Lengkap</span>

            <input required="" placeholder="First Name" type="text" class="form-control">
        </label>
        <label>
          <br>
            <input required="" placeholder="Last name" type="text" class="form-control">
        </label>
    </div>  
            
    <label>
        <span class="juduldaftar">Email</span>
        <input required="" placeholder="Email" type="email"  class="form-control">
    </label> 
        
    <label>
        <span class="juduldaftar">Password</span>
        <input required="" placeholder="Password" type="password"  class="form-control">
    </label>
    <label>
        <span class="juduldaftar">Confirm password</span>
        <input required="" placeholder="Konfirmasi Password" type="password"  class="form-control">
    </label>
    <br>
    <button class="submit">Tambahkan pengguna baru</button>
    <p class="signin">Sudah mempunyai akun ? <a href="masuk.php">Masuk</a> </p>
</form>
</div>
</div>
</div>
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ps-4">
                    <div class="d-flex align-items-center">
                     <img src="baru.png" alt="Logo" width="90" height="auto" class="me-2">
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