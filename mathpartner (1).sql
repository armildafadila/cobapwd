-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Bulan Mei 2026 pada 01.13
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mathpartner`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_users` int(11) DEFAULT NULL,
  `id_materi` int(11) DEFAULT NULL,
  `jumlah_benar` int(11) DEFAULT NULL,
  `jumlah_salah` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `nama_materi` varchar(100) DEFAULT NULL,
  `kelas` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id_materi`, `nama_materi`, `kelas`, `deskripsi`, `gambar`, `link`) VALUES
(1, 'Fungsi', 10, 'Latihan soal fungsi untuk menguji pemahaman hubungan antara nilai x dan y melalui berbagai bentuk soal dan grafik.', 'fungsi.png', 'materifungsi.php'),
(2, 'Trigonometri', 10, 'Latihan soal trigonometri untuk menguji pemahaman tentang hubungan sudut dan sisi pada segitiga serta penerapannya dalam berbagai bentuk soal.', 'trigonometri.png', 'materitrigonometri.php'),
(3, 'Barisan dan Deret', 10, 'Latihan soal barisan dan deret untuk menguji pemahaman pola bilangan serta cara menentukan suku dan jumlahnya.', 'barisanderet.png', 'materibarisan.php'),
(4, 'Turunan', 11, 'Latihan soal turunan untuk menguji pemahaman perubahan nilai serta menentukan gradien dan nilai maksimum atau minimum', 'turunan (2).png', 'materiturunan.php'),
(5, 'Matriks', 11, 'Latihan soal matriks untuk menguji pemahaman operasi, determinan, dan invers pada susunan bilangan.', 'matriks.png', 'materimatriks.php'),
(6, 'Program Linear', 11, 'Latihan soal program linear untuk menguji pemahaman sistem pertidaksamaan dan menentukan nilai optimum.', 'programlineare.png', 'materiprogramlinear.php'),
(7, 'Integral', 12, 'Latihan soal integral untuk menguji pemahaman luas daerah serta hubungan dengan turunan.', 'integral.png', 'materiintegral.php'),
(8, 'Dimensi Tiga', 12, 'Latihan soal dimensi tiga untuk menguji pemahaman jarak dan sudut dalam bangun ruang.', 'dimensi3 (2).png', 'materidimensitiga.php'),
(9, 'Peluang', 12, 'Latihan soal peluang untuk menguji pemahaman kemungkinan kejadian serta perhitungan kombinasi dan permutasi.', 'peluang.png', 'materipeluang.php');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `id_materi` int(11) DEFAULT NULL,
  `pertanyaan` text DEFAULT NULL,
  `opsi_a` varchar(255) DEFAULT NULL,
  `opsi_b` varchar(255) DEFAULT NULL,
  `opsi_c` varchar(255) DEFAULT NULL,
  `opsi_d` varchar(255) DEFAULT NULL,
  `opsi_e` varchar(255) DEFAULT NULL,
  `jawaban_benar` char(1) DEFAULT NULL,
  `pembahasan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_soal`, `id_materi`, `pertanyaan`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `jawaban_benar`, `pembahasan`) VALUES
(1, 1, 'Diketahui fungsi f(x)=2x+3. Nilai dari f(4) adalah', '8', '10', '11', '13', '15', 'C', 'f(4) = 2(4) + 3 = 8 + 3 = 11'),
(2, 1, 'Diketahui fungsi f(x)=x²−5x+6. Nilai dari f(2) adalah', '0', '1', '2', '3', '4', 'A', 'Substitusikan x = 2 ke fungsi. f(2) = (2)^2 - 5(2) + 6 = 4 - 10 + 6 = 0'),
(3, 1, 'Jika f(x)=3x−7, maka nilai f(−2) adalah', '-13', '-12', '-11', '-10', '-9', 'A', 'f(-2) = 3(-2) - 7 = -6 - 7 = -13'),
(4, 1, 'Diketahui fungsi f(x) = (x + 4) / 2. Nilai dari f(6) adalah', '3', '4', '5', '6', '7', 'C', 'f(6) = (6 + 4) / 2 = 10 / 2 = 5'),
(5, 1, 'Diketahui fungsi f(x) = x² + 2x - 8. Nilai dari f(3) adalah', '5', '6', '7', '8', '9', 'C', 'f(3) = (3)^2 + 2(3) - 8 = 9 + 6 - 8 = 7'),
(6, 3, 'Barisan 2, 5, 8, 11, ... memiliki beda sebesar', '1', '2', '3', '4', '5', 'C', 'Beda barisan aritmetika diperoleh dari selisih dua suku berurutan. 5 - 2 = 3'),
(7, 3, 'Suku ke-10 dari barisan aritmetika 3, 7, 11, 15, ... adalah', '35', '36', '37', '38', '39', 'E', 'Un = a + (n-1)b = 3 + (10-1)(4) = 3 + 36 = 39'),
(8, 3, 'Jumlah 5 suku pertama dari barisan 2, 4, 6, 8, ... adalah', '20', '25', '30', '35', '40', 'C', 'S5 = n/2 × (a + Un) = 5/2 × (2 + 10) = 5/2 × 12 = 30'),
(9, 3, 'Barisan geometri 3, 6, 12, 24, ... memiliki rasio sebesar', '2', '3', '4', '5', '6', 'A', 'Rasio diperoleh dari pembagian dua suku berurutan. 6 ÷ 3 = 2'),
(10, 3, 'Suku ke-6 dari barisan geometri 2, 4, 8, 16, ... adalah', '32', '64', '128', '256', '512', 'B', 'Un = a × r^(n-1) = 2 × 2^(6-1) = 2 × 32 = 64'),
(11, 2, 'Nilai sin 30° adalah', '1/2', '√2/2', '√3/2', '1', '0', 'A', 'sin 30° = 1/2'),
(12, 2, 'Nilai cos 60° adalah', '0', '1/2', '√2/2', '√3/2', '1', 'B', 'cos 60° = 1/2'),
(13, 2, 'Nilai tan 45° adalah', '0', '1/2', '1', '√2', '√3', 'C', 'tan 45° = 1'),
(14, 2, 'Jika diketahui segitiga siku-siku dengan sisi depan = 3 dan sisi miring = 5, maka nilai sin θ adalah', '3/5', '4/5', '5/3', '3/4', '4/3', 'A', 'sin θ = sisi depan / sisi miring = 3/5'),
(15, 2, 'Nilai cos 0° adalah', '0', '1/2', '√2/2', '1', '-1', 'D', 'cos 0° = 1'),
(16, 4, 'Turunan pertama dari f(x)=3x²+2x−5 adalah', '6x + 2', '3x + 2', '6x − 5', '2x + 3', '6x² + 2', 'A', 'f\'(x) = d/dx(3x²) + d/dx(2x) − d/dx(5) = 6x + 2'),
(17, 4, 'Turunan pertama dari f(x)=5x³ adalah', '10x', '15x²', '5x²', '20x³', '15x³', 'B', 'f\'(x) = 3 × 5x^(3-1) = 15x²'),
(18, 4, 'Jika f(x)=7x−4, maka f\'(x) adalah', '0', '4', '7', '11', 'x', 'C', 'Turunan dari ax + b adalah a, sehingga turunan 7x − 4 adalah 7'),
(19, 4, 'Turunan pertama dari f(x)=x²−8x+6 adalah', '2x + 8', 'x − 8', '2x − 8', '2x + 6', 'x² − 8', 'C', 'f\'(x) = 2x − 8'),
(20, 4, 'Turunan pertama dari f(x)=4x² adalah', '4x', '8x', '6x', '8x²', '2x', 'B', 'f\'(x) = 2 × 4x^(2-1) = 8x'),
(21, 5, 'Diketahui matriks A = [2 3]. Ordo matriks A adalah', '1 × 1', '1 × 2', '2 × 1', '2 × 2', '3 × 1', 'B', 'Matriks memiliki 1 baris dan 2 kolom, sehingga ordonya adalah 1 × 2'),
(22, 5, 'Hasil penjumlahan matriks [1 2] + [3 4] adalah', '[4 6]', '[3 8]', '[4 4]', '[1 6]', '[2 8]', 'A', 'Penjumlahan matriks dilakukan dengan menjumlahkan elemen yang bersesuaian. 1+3=4 dan 2+4=6'),
(23, 5, 'Determinan matriks [2 1; 3 4] adalah', '5', '6', '7', '8', '9', 'A', 'Determinan matriks 2×2 adalah ad − bc = (2×4) − (1×3) = 8 − 3 = 5'),
(24, 5, 'Transpose dari matriks [1 2; 3 4] adalah', '[1 3; 2 4]', '[1 2; 3 4]', '[4 3; 2 1]', '[2 1; 4 3]', '[3 1; 4 2]', 'A', 'Transpose diperoleh dengan menukar baris menjadi kolom'),
(25, 5, 'Jika A = [2 0; 0 2], maka invers matriks A adalah', '[1/2 0; 0 1/2]', '[2 0; 0 2]', '[0 1/2; 1/2 0]', '[1 0; 0 1]', '[−1/2 0; 0 −1/2]', 'A', 'Invers matriks diagonal diperoleh dengan membalik nilai diagonalnya'),
(26, 6, 'Program linear digunakan untuk menentukan', 'Bilangan prima', 'Nilai optimum', 'Faktor persekutuan', 'Akar persamaan', 'Keliling bangun', 'B', 'Program linear digunakan untuk mencari nilai maksimum atau minimum dari suatu fungsi objektif'),
(27, 6, 'Daerah himpunan penyelesaian pada program linear diperoleh dari', 'Persamaan kuadrat', 'Sistem pertidaksamaan', 'Operasi matriks', 'Barisan geometri', 'Integral', 'B', 'Daerah penyelesaian diperoleh dari grafik sistem pertidaksamaan'),
(28, 6, 'Fungsi objektif dari suatu program linear adalah Z = 2x + 3y. Jika x=2 dan y=4 maka nilai Z adalah', '8', '10', '14', '16', '18', 'D', 'Z = 2(2) + 3(4) = 4 + 12 = 16'),
(29, 6, 'Tujuan menggambar grafik pada program linear adalah untuk menentukan', 'Banyak variabel', 'Titik potong', 'Daerah penyelesaian', 'Nilai rata-rata', 'Determinan', 'C', 'Grafik digunakan untuk menentukan daerah himpunan penyelesaian'),
(30, 6, 'Nilai optimum dalam program linear biasanya terletak pada', 'Sembarang titik', 'Titik pusat', 'Titik pojok', 'Titik tengah', 'Titik diagonal', 'C', 'Nilai maksimum atau minimum program linear berada di titik pojok daerah penyelesaian'),
(31, 7, 'Hasil dari ∫ 2x dx adalah', 'x² + C', '2x² + C', 'x + C', '2 + C', 'x²', 'A', '∫ 2x dx = x² + C'),
(32, 7, 'Hasil dari ∫ 5 dx adalah', '5x + C', 'x + C', '5 + C', '5x² + C', '0', 'A', 'Integral konstanta a adalah ax + C'),
(33, 7, 'Integral dari x² dx adalah', 'x³ + C', '2x + C', '1/3 x³ + C', '3x² + C', 'x² + C', 'C', '∫ x² dx = x^(2+1)/(2+1) + C = 1/3 x³ + C'),
(34, 7, 'Hasil dari ∫ 3x² dx adalah', 'x³ + C', '3x³ + C', '9x + C', '6x + C', 'x² + C', 'A', '∫ 3x² dx = 3(x³/3) + C = x³ + C'),
(35, 7, 'Simbol ∫ pada integral disebut', 'Sigma', 'Limit', 'Integral', 'Turunan', 'Variabel', 'C', 'Simbol ∫ dibaca integral'),
(36, 8, 'Dimensi tiga mempelajari tentang', 'Bangun datar', 'Bangun ruang', 'Bilangan', 'Pertidaksamaan', 'Persamaan kuadrat', 'B', 'Dimensi tiga membahas bangun ruang beserta jarak dan sudut di dalamnya'),
(37, 8, 'Jumlah rusuk pada kubus adalah', '6', '8', '10', '12', '14', 'D', 'Kubus memiliki 12 rusuk'),
(38, 8, 'Diagonal ruang pada kubus dengan panjang rusuk s adalah', 's√2', 's√3', '2s', '3s', 's²', 'B', 'Rumus diagonal ruang kubus adalah s√3'),
(39, 8, 'Jumlah sisi pada balok adalah', '4', '5', '6', '8', '12', 'C', 'Balok memiliki 6 sisi'),
(40, 8, 'Jarak antara dua titik dalam dimensi tiga biasanya dihitung menggunakan', 'Rumus phytagoras', 'Rumus integral', 'Rumus turunan', 'Rumus peluang', 'Rumus matriks', 'A', 'Perhitungan jarak dalam dimensi tiga menggunakan konsep teorema Pythagoras'),
(41, 9, 'Peluang munculnya angka saat melempar sebuah koin adalah', '1/4', '1/3', '1/2', '2/3', '1', 'C', 'Sebuah koin memiliki 2 kemungkinan, yaitu angka dan gambar. Peluang muncul angka adalah 1 dari 2 kejadian'),
(42, 9, 'Jika sebuah dadu dilempar, peluang muncul mata dadu 6 adalah', '1/2', '1/3', '1/4', '1/6', '1/8', 'D', 'Dadu memiliki 6 sisi dan hanya satu sisi bernilai 6, sehingga peluangnya 1/6'),
(43, 9, 'Rumus peluang suatu kejadian adalah', 'Jumlah kejadian / jumlah percobaan', 'Banyak kejadian yang diinginkan / banyak seluruh kejadian', 'Jumlah data / banyak data', 'Banyak data / jumlah kejadian', 'Jumlah kejadian × banyak percobaan', 'B', 'Peluang dirumuskan sebagai banyak kejadian yang diinginkan dibagi banyak seluruh kejadian'),
(44, 9, 'Dalam sebuah kantong terdapat 3 bola merah dan 2 bola biru. Peluang mengambil bola merah adalah', '1/5', '2/5', '3/5', '4/5', '5/5', 'C', 'Jumlah seluruh bola = 5 dan bola merah = 3, sehingga peluangnya 3/5'),
(45, 9, 'Nilai peluang suatu kejadian berada di antara', '0 sampai 1', '1 sampai 10', '-1 sampai 1', '0 sampai 100', '-10 sampai 10', 'A', 'Nilai peluang selalu berada di antara 0 dan 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `nama`, `email`, `password`) VALUES
(6, 'rafifah nuraini', 'nurainirafifah21@gmail.com', 'aini'),
(13, 'dea markona', 'natasyad610@gmail.com', '123'),
(14, 'najwa markoja', '124250034@student.upnyk.ac.id', '1234'),
(18, 'fairus nadhir', 'fairusnadhir@gmail.com', 'pai'),
(19, 'milda putri', 'mildaupil@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `hasil_ibfk_2` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id_materi`);

--
-- Ketidakleluasaan untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id_materi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
