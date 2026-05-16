<?php
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
  </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container">
    
     <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="foto/baru.png" alt="Logo" width="90" height="auto" class="d-inline-block align-text-top">
      <span class="text-judul">MathPartner</span>
    </a>

</nav>
<div class="d-flex justify-content-center">
  <div class="card p-3">
        <div class="card-header">
         <div class="text-regist">Masuk</div>
         <p class="desk-regist">Selamat datang di MathPartner, masukan email dan password untuk akses MathPartner</p>
    </div>
    <div class="card-body">
    <form class="form" action="proseslogin.php" method="POST">
         <div class="flex">
   <?php
         if(isset($_SESSION['login_error'])) {
          echo "<div class='alert alert-danger w-100'>".$_SESSION['login_error']."</div>";
          unset($_SESSION['login_error']);
         }
          if(isset($_SESSION['email_error'])) {
          echo "<div class='alert alert-danger w-100'>".$_SESSION['email_error']."</div>";
          unset($_SESSION['email_error']);
         }
         ?>
        
    </div>  
            
    <label>
        <span class="juduldaftar">Email</span>
        <input required="" placeholder="Email" type="email"  class="form-control" name="email">
    </label> 
        
    <label>
        <span class="juduldaftar">Password</span>
        <input required="" placeholder="Password" type="password"  class="form-control" name="password">
    </label>
    
    <br>
    <a class="submit text-center" href="kelas10.php">Masuk</a>
    <p class="signin">Belum mempunyai akun ? <a href="daftar.php">Daftar pengguna baru</a> </p>
</div>
</form>
</div>
</div>
</div>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
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