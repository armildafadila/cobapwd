<?php
$nilai = $_GET['nilai'];
if($nilai >= 80){
    $pesan = "Mantap! Pemahaman kamu udah bagus 🎉";
}
elseif($nilai >= 60){
    $pesan = "Bagus, tapi masih perlu belajar lagi.";
}
else{
    $pesan = "Yuk belajar lagi dan coba ulang lagi!";
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
<div class="d-flex justify-content-center align-items-center vh-100">

    <div class="card p-4 shadow" style="width: 400px; border-radius: 20px;">

        <div class="card-body text-center">

            <h1 class="mb-3">Hasil Quiz</h1>

            <h2 class="mb-3">Nilai Kamu : <?= $nilai; ?></h2>

            <p><?= $pesan; ?></p>

            <div class="mt-4">

                <a href="pembahasan.php" class="btn btn-success">
                    Lihat Pembahasan
                </a>

                <a href="materifungsi.php" class="btn btn-secondary">
                    Coba Lagi
                </a>

            </div>

        </div>

    </div>

</div>
</body>
</html>