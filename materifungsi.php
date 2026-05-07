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

    .baris-soal {
      display: flex;
      align-items: center;
      gap: 300px; 
    }
    .text-atas {
      width:320px;
      font-size:22px;
      font-weight:bold;
    }
    .isi-teks {
      font-size:22px;
      font-weight:600;
     color:#4f7726;
      letter-spacing:1px;
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
<div class="d-flex justify-content-center">
  <div class="card p-3">
        <div class="card-header">
          <div class="baris-soal">
          <span class= "text-atas">Materi</span>
          <span class="isi-atas">FUNGSI</span>
          </div>
        
          <div class="baris-soal">
          <span class="text-atas">Kelas</span>
          <span class="isi-bawah"> 10 </span>
    </div>      
    </div>
<form class="form" action="hasil.php" method="POST">
    
        
        <div class="flex">
