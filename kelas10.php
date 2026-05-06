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
      <a href="halaman1.html">
      <img src="baru.png" alt="Logo" width="90" height="auto" class="d-inline-block align-text-top"></a>
      <span class="text-judul">MathPartner</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ms-4">
      <ul class="navbar-nav">

         <a class="nav-link active" href="halaman1.html">Beranda</a>
        <a class="nav-link active" href="kelas10.php">Kelas 10</a>
        <a class="nav-link" href="kelas11.php">Kelas 11</a>
        <a class="nav-link" href="kelas12.php">Kelas 12</a>
        
    </div>

</nav>
<div class="container">
  <div class="row align-items-center">

  <div class="col-md-6">
    <h2>Pilih Materi</h2>
    </div>

    <div class="col-md-4">
      <div class="input-group">
        <input class="form-control" type="text" placeholder="Cari Materi"> 
        <button class="btn btn-success" type="button">
        🔍
        </button>
      </div>
      </div>

    </div>
</div>

<div class="container mt-4">
  <div class="row g-4">


  <div class="col-md-4">
    <div class="card">
    <img src="fungsi.png" class="card-img-top" alt="fungsi">
    <div class="card-body">
    <h5 class="card-title" style="font-weight: bold;">FUNGSI</h5>
    <p class="card-text">Latihan soal fungsi untuk menguji pemahaman hubungan antara nilai x dan y melalui berbagai bentuk soal dan grafik.</p>
    <a href="#" class="btn btn-hijau-custom">Kerjakan Soal</a>
    </div>
  </div>
</div>


<div class="col-md-4">
  <div class="card">
  <img src="barisanderet.png" class="card-img-top" alt="baris">
  <div class="card-body">
    <h5 class="card-title" style="font-weight: bold;">BARISAN & DERET</h5>
    <p class="card-text">Latihan soal barisan dan deret untuk menguji pemahaman pola bilangan serta cara menentukan suku dan jumlahnya.</p>
    <a href="#" class="btn btn-hijau-custom">Kerjakan Soal</a>
    </div>
  </div>
</div>


<div class="col-md-4">
  <div class="card">
  <img src="trigonometri.png" class="card-img-top" alt="trigonometri">
  <div class="card-body">
    <h5 class="card-title" style="font-weight: bold;">TRIGONOMETRI</h5>
    <p class="card-text">Latihan soal trigonometri untuk menguji pemahaman tentang hubungan sudut dan sisi pada segitiga serta penerapannya dalam berbagai bentuk soal.</p>
    <a href="#" class="btn btn-hijau-custom">Kerjakan Soal</a>
    </div>
  </div>
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