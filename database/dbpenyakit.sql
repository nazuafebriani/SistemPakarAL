-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2025 pada 18.03
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpenyakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `kd_gejala` varchar(3) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kd_gejala`, `gejala`) VALUES
(1, 'A1', 'Nyeri atau perih pada lambung'),
(2, 'A2', 'Perut Kembung'),
(3, 'A3', 'Nafsu makan berkurang'),
(4, 'A4', 'Mual'),
(5, 'A5', 'Sembelit'),
(6, 'A6', 'Diare'),
(7, 'A7', 'Berat badan menurun'),
(8, 'A8', 'BAB berwarna hitam'),
(9, 'A9', 'Demam'),
(10, 'A10', 'Rasa makanan kembali'),
(11, 'A11', 'BAB Cair'),
(12, 'A12', 'Kejang Perut'),
(13, 'A13', 'Nyeri Pada Ulu Hati'),
(14, 'A14', 'Perasaan Kenyang Berlebihan'),
(15, 'A15', 'Nyeri pada Tukak Lambung'),
(16, 'A16', 'Muntah'),
(17, 'A17', 'Rasa terbakar di bagian dada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `kd_penyakit` varchar(3) NOT NULL,
  `persentase` double NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `id_pasien`, `kd_penyakit`, `persentase`, `tanggal`) VALUES
(1, 3, 'B2', 11.54, '2025-05-01 19:01:59'),
(2, 4, 'B1', 80, '2025-05-01 19:09:50'),
(3, 8, 'B2', 92, '2025-05-02 11:44:02'),
(4, 9, 'B1', 28.57, '2025-05-02 18:25:46'),
(5, 9, 'B5', 64.29, '2025-05-02 18:25:46'),
(6, 9, 'B1', 28.57, '2025-05-02 18:29:17'),
(7, 9, 'B5', 64.29, '2025-05-02 18:29:17'),
(8, 9, 'B1', 28.57, '2025-05-02 18:34:33'),
(9, 9, 'B5', 64.29, '2025-05-02 18:34:33'),
(10, 9, 'B1', 28.57, '2025-05-02 18:35:23'),
(11, 9, 'B5', 64.29, '2025-05-02 18:35:23'),
(12, 9, 'B1', 28.57, '2025-05-02 18:35:28'),
(13, 9, 'B5', 64.29, '2025-05-02 18:35:28'),
(14, 9, 'B1', 28.57, '2025-05-02 18:37:00'),
(15, 9, 'B5', 64.29, '2025-05-02 18:37:00'),
(16, 9, 'B1', 28.57, '2025-05-02 18:41:11'),
(17, 9, 'B5', 64.29, '2025-05-02 18:41:11'),
(18, 11, 'B1', 80, '2025-05-02 18:54:47'),
(19, 12, 'B7', 90, '2025-05-02 18:59:55'),
(20, 13, 'B2', 18.27, '2025-05-08 02:54:57'),
(21, 13, 'B3', 8.77, '2025-05-08 02:54:57'),
(22, 14, 'B5', 90, '2025-05-08 20:31:44'),
(23, 15, 'B1', 28.57, '2025-05-08 20:34:00'),
(24, 15, 'B6', 51.43, '2025-05-08 20:34:00'),
(25, 16, 'B2', 13.64, '2025-05-09 20:54:49'),
(26, 16, 'B4', 40.91, '2025-05-09 20:54:49'),
(27, 16, 'B5', 32.73, '2025-05-09 20:54:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(11) NOT NULL,
  `kd_penyakit` varchar(3) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `definisi` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `kd_penyakit`, `nama_penyakit`, `definisi`, `solusi`) VALUES
(1, 'B1', 'Gastritis', 'Gastritis merupakan suatu inflamasi dengan atau tanpa edema pada lapisan mukosa lambung yang terjadi secara akut maupun kronis. Kasus gastritis sering dikaitkan dengan infeksi Helicobacter pylori. Gastritis perlu dibedakan dari dispepsia yang merupakan istilah untuk menggambarkan sekumpulan gejala saluran cerna atas tanpa adanya gangguan organik', 'Mengonsumsi obat Tonitidin, Cimetidin, Famotidin, juga obat SitroProtektif; atau terapi yang melibatkan Proton Pump Inhibitor (PPI) seperti Omeprazole dengan Clarithromycin dan Amoxicillin atau Metroniclazole'),
(2, 'B2', 'Dispepsia', 'Dispepsia menjadi suatu kondisi yang dapat mengakibatkan munculnya rasa tidak nyaman pada perut bagian atas karena masalah asam lambung atau penyakit mag. Meski demikian, dispepsia sebenarnya bukan mengindikasikan suatu penyakit, melainkan gejala dari masalah kesehatan yang terjadi pada pencernaan, salah satunya adalah penyakit asam lambung naik atau yang dikenal gastroesophageal reflux disease (GERD).', 'Mengonsumsi Antasida seperti Ronitidin, Cimetidin, Famotidin, dan melibatkan terapi PPI yang mencakup Omeprazole dan Lansoprazole'),
(3, 'B3', 'Kanker Lambung', 'Kanker lambung termasuk dalam lima besar jenis kanker tersering dengan mortalitas terbanyak ketiga di seluruh dunia. Penyebab kanker lambung adalah multifaktorial, di mana dipengaruhi oleh faktor lingkungan, genetik, serta infeksi bakteri Helicobacter pylori dan virus Epstein-barr. Risiko kanker lambung ditemukan lebih tinggi pada laki-laki dibandingkan perempuan.Kanker lambung adalah kanker yang terjadi akibat pertumbuhan sel lambung yang tidak normal dan tidak terkendali. Pertumbuhan sel abnormal ini terjadi karena sel di lambung mengalami perubahan genetik.', 'Dianjurkan untuk langsung melakukan Kemoterapi, Neodjuran atau Adjuran, Radioterapi dan terapis suportif'),
(4, 'B4', 'Gerd', 'Gastroesophageal reflux disease atau GERD adalah kondisi yang ditimbulkan oleh adanya refluks isi lambung ke dalam esofagus yang menyebabkan gejala atau komplikasi medis.', 'Modifikasi gaya hidup dan menjaga pola makan.'),
(5, 'B5', 'Gastroenteritis', 'Gastroenteritis adalah peradangan pada lambung dan usus, yang sering dikenal sebagai flu perut atau muntaber. Kondisi ini ditandai dengan gejala seperti diare, mual, muntah, dan sakit perut.', 'Dianjurkan untuk banyak mengonsumsi air agar tidak dehidrasi, dan dianjurkan untuk meminum cairan rehidrasi, Antibiotik bila diperlukan Zink dan Nutrisi.'),
(6, 'B6', 'Gastroparesis', 'Gastroparesis adalah kondisi kronis yang ditandai dengan keterlambatan pengosongan lambung tanpa adanya obstruksi mekanik. Gastroparesis ditandai dengan mual, muntah, kembung, rasa cepat penuh, serta nyeri perut bagian atas.', 'Menjaga pola makan, dan melakukan terapi seperti Prokinenk, Anriemetik dan Gastric Electrical Stimulation (GES), jika tidak ada perubahan'),
(7, 'B7', 'Tukak Lambung', 'Tukak lambung adalah peradangan pada lambung yang terjadi karena adanya luka terbuka atau ulkus pada lapisan dinding lambung. Normalnya, lambung memiliki dinding pelindung yang dilapisi oleh lendir tebal untuk melindungi jaringan dinding dari kuatnya efek cairan asam lambung. ', 'Modifikasi gaya hidup dan melakukan terapi Medikamentosa, terapi Proton Pump Inhibitor (PPI), seperti Omeprazole, dan Claraithromycin dan Amoxcillin atau Metanidazole.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rules`
--

CREATE TABLE `tb_rules` (
  `id_penyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `cf` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_rules`
--

INSERT INTO `tb_rules` (`id_penyakit`, `id_gejala`, `cf`) VALUES
(1, 1, 0.8),
(1, 2, 0.7),
(1, 3, 0.8),
(1, 4, 0.7),
(1, 13, 0.8),
(2, 1, 0.6),
(2, 2, 0.8),
(2, 4, 0.7),
(2, 5, 0.6),
(2, 6, 0.5),
(2, 14, 0.8),
(3, 3, 0.9),
(3, 4, 0.8),
(3, 7, 0.9),
(3, 8, 0.8),
(3, 12, 0.6),
(4, 1, 0.7),
(4, 2, 0.6),
(4, 4, 0.7),
(4, 9, 0.3),
(4, 10, 0.9),
(4, 12, 0.5),
(4, 17, 0.9),
(5, 1, 0.6),
(5, 4, 0.8),
(5, 6, 0.9),
(5, 9, 0.8),
(5, 10, 0.4),
(5, 12, 0.8),
(5, 16, 0.9),
(6, 2, 0.8),
(6, 3, 0.7),
(6, 7, 0.6),
(6, 10, 0.5),
(6, 12, 0.7),
(7, 1, 0.9),
(7, 3, 0.6),
(7, 4, 0.7),
(7, 8, 0.9),
(7, 15, 0.9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_ip` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `pekerjaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_pasien`, `nama`, `kelamin`, `umur`, `alamat`, `no_ip`, `tanggal`, `pekerjaan`) VALUES
(1, 'Inka Triamanda', 'Perempuan', '19', 'Jl.Mega', '::1', '2025-05-01', 'Mahasiswa'),
(2, 'Nazua Febriani', 'Perempuan', '19', 'medan', '::1', '2025-05-01', 'Mahasiswa'),
(3, 'Phelia', 'Perempuan', '19', 'Ringroad', '::1', '2025-05-01', 'Mahasiswa'),
(4, 'moza', 'Laki-laki', '22', 'medan', '::1', '2025-05-01', 'Mahasiswa'),
(5, 'Alpha George', 'Laki-laki', '23', 'Mega sari', '::1', '2025-05-01', 'Mahasiswa'),
(6, 'Fenzyy', 'Perempuan', '12', 'Batubara', '::1', '2025-05-02', 'Mahasiswa'),
(7, 'Todoroki', 'Perempuan', '13', 'medan', '::1', '2025-05-02', 'Wirausaha'),
(8, 'Ulan', 'Laki-laki', '15', 'medan', '::1', '2025-05-02', 'Mahasiswa'),
(9, 'Zody Indra', 'Laki-laki', '20', 'Pangkalan Bun', '::1', '2025-05-02', 'Mahasiswa'),
(10, 'Walid', 'Laki-laki', '29', 'Batubara', '::1', '2025-05-02', 'Ustad'),
(11, 'Lala', 'Perempuan', '15', 'Kumai', '::1', '2025-05-02', 'Pelajar'),
(12, 'ucok', 'Laki-laki', '10', 'Batubara', '::1', '2025-05-02', 'Pelajar'),
(13, 'Ella', 'Laki-laki', '23', 'Cipayung', '::1', '2025-05-08', 'CEO'),
(14, 'Azhar Aswatdi', 'Laki-laki', '23', 'Medan', '::1', '2025-05-08', 'Mahasiwa'),
(15, 'Nurul Rezeki', 'Perempuan', '21', 'BatuBara', '::1', '2025-05-08', 'Mahasiwa'),
(16, 'Dodo', 'Laki-laki', '25', 'Tembung', '::1', '2025-05-09', 'Sales');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_pasien`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
