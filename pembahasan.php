<?php
include 'koneksi.php';
session_start();

// Cek apakah ada id_hasil dari URL
if(!isset($_GET['id_hasil'])) {
    echo "<script>alert('ID Hasil tidak ditemukan'); window.location='riwayat.php';</script>";
    exit();
}

$id_hasil = $_GET['id_hasil'];

// Ambil data hasil
$query_hasil = mysqli_query($koneksi, "SELECT * FROM hasil WHERE id_hasil = '$id_hasil'");
$data_hasil = mysqli_fetch_assoc($query_hasil);

if(!$data_hasil) {
    echo "<script>alert('Data hasil tidak ditemukan'); window.location='riwayat.php';</script>";
    exit();
}

$id_materi = $data_hasil['id_materi'];

// Ambil semua soal berdasarkan id_materi
$query_soal = mysqli_query($koneksi, "SELECT * FROM soal WHERE id_materi = '$id_materi' ORDER BY id_soal ASC");

// Ambil jawaban user dari tabel jawaban_user
$query_jawaban_user = mysqli_query($koneksi, "SELECT * FROM jawaban_user WHERE id_hasil = '$id_hasil'");
$jawaban_user = [];
while($row = mysqli_fetch_assoc($query_jawaban_user)) {
    $jawaban_user[$row['id_soal']] = $row['jawaban_user'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MathPartner - Pembahasan Soal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-hijau-custom {
            background-color: #4f7726;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
        }
        .btn-outline-hijau {
            border: 2px solid #4f7726;
            color: #4f7726;
            background: white;
            padding: 10px 25px;
            border-radius: 8px;
        }
        .card-pembahasan {
            width: 800px;
            max-width: 95%;
            border: none;
            border-radius: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.20);
            margin-bottom: 30px;
        }
        .card-header-pembahasan {
            background-color: #f8f9fa;
            border-bottom: 3px solid #4f7726;
            padding: 15px 20px;
            border-radius: 15px 15px 0 0;
        }
        .jawaban-benar {
            background-color: #d4edda;
            padding: 10px 15px;
            border-radius: 8px;
            margin-top: 10px;
            border-left: 4px solid #28a745;
        }
        .jawaban-salah {
            background-color: #f8d7da;
            padding: 10px 15px;
            border-radius: 8px;
            margin-top: 10px;
            border-left: 4px solid #dc3545;
        }
        .opsi-user {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 10px 15px;
            margin-top: 10px;
            border-radius: 8px;
        }
        .pembahasan {
            background-color: #e2f0d9;
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
        }
        .badge-benar {
            background-color: #28a745;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 13px;
            margin-left: 10px;
        }
        .badge-salah {
            background-color: #dc3545;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 13px;
            margin-left: 10px;
        }
        .opsi-normal {
            padding: 8px 12px;
            margin: 5px 0;
            border-radius: 8px;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg" style="background-color: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="foto/baru.png" alt="Logo" width="90">
            <span class="fw-bold" style="color: #4f7726;">MathPartner</span>
        </a>
    </div>
</nav>

<div class="container d-flex flex-column align-items-center mt-4">
    <div class="text-center mb-4">
        <h3 style="color: #4f7726;">📖 Pembahasan Soal</h3>
        <p>Nilai: <strong><?= $data_hasil['nilai'] ?></strong> | Benar: <?= $data_hasil['jumlah_benar'] ?> | Salah: <?= $data_hasil['jumlah_salah'] ?></p>
    </div>

    <?php 
    $nomor = 1;
    while($soal = mysqli_fetch_assoc($query_soal)) {
        $id_soal = $soal['id_soal'];
        $jawaban_benar = $soal['jawaban_benar'];
        $pilihan_user = isset($jawaban_user[$id_soal]) ? $jawaban_user[$id_soal] : '';
        $is_benar = ($pilihan_user == $jawaban_benar);
        
        $kolom_benar = 'opsi_' . strtolower($jawaban_benar);
        $teks_jawaban_benar = $soal[$kolom_benar];
        
        $teks_pilihan_user = '';
        if($pilihan_user) {
            $kolom_user = 'opsi_' . strtolower($pilihan_user);
            $teks_pilihan_user = $soal[$kolom_user];
        }
        ?>

        <div class="card card-pembahasan">
            <div class="card-header-pembahasan">
                <strong>Soal <?= $nomor ?></strong>
                <?php if($is_benar): ?>
                    <span class="badge-benar">✓ Benar</span>
                <?php else: ?>
                    <span class="badge-salah">✗ Salah</span>
                <?php endif; ?>
            </div>
            <div class="card-body">
                <p><strong>Pertanyaan:</strong><br><?= nl2br($soal['pertanyaan']) ?></p>
                
                <div class="mb-2">
                    <strong>Pilihan:</strong><br>
                    <div class="opsi-normal"><strong>A.</strong> <?= $soal['opsi_a'] ?></div>
                    <div class="opsi-normal"><strong>B.</strong> <?= $soal['opsi_b'] ?></div>
                    <div class="opsi-normal"><strong>C.</strong> <?= $soal['opsi_c'] ?></div>
                    <div class="opsi-normal"><strong>D.</strong> <?= $soal['opsi_d'] ?></div>
                    <?php if($soal['opsi_e']): ?>
                        <div class="opsi-normal"><strong>E.</strong> <?= $soal['opsi_e'] ?></div>
                    <?php endif; ?>
                </div>

                <div class="opsi-user">
                    <strong>Jawaban kamu:</strong> <?= $pilihan_user ?>. <?= $teks_pilihan_user ?>
                </div>

                <div class="jawaban-benar">
                    <strong>Jawaban benar:</strong> <?= $jawaban_benar ?>. <?= $teks_jawaban_benar ?>
                </div>

                <div class="pembahasan">
                    <strong>Pembahasan:</strong><br>
                    <?= !empty($soal['pembahasan']) ? nl2br($soal['pembahasan']) : '<i>Belum ada pembahasan</i>' ?>
                </div>
            </div>
        </div>

    <?php $nomor++; } ?>

    <div class="mt-3 mb-5">
        <a href="hasil.php?id_hasil=<?= $id_hasil ?>" class="btn btn-outline-hijau">← Kembali</a>
        <a href="latihan.php" class="btn btn-hijau-custom ms-2">Latihan Baru →</a>
    </div>
</div>

</body>
</html>