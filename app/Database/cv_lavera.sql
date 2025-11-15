-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2025 at 10:40 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_lavera`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id_biodata` int NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `status_studi` varchar(100) NOT NULL,
  `ringkasan_diri` text,
  `email` varchar(100) NOT NULL,
  `link_linkedin` varchar(255) DEFAULT NULL,
  `link_whatsapp` varchar(255) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id_biodata`, `nama_lengkap`, `status_studi`, `ringkasan_diri`, `email`, `link_linkedin`, `link_whatsapp`, `lokasi`) VALUES
(1, 'Shinta Lavera', 'Mahasiswa Aktif Semester 5', 'Mahasiswa Teknik Informatika UMMI yang fokus pada pengembangan aplikasi web berbasis CodeIgniter 4. Terampil dalam merancang database MySQL/MariaDB, serta desain UI/UX responsif. Antusias dalam proyek berbasis tim.', 'shinver32@gmail.com', 'https://www.linkedin.com/in/shinta-lavera-492994293?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app', 'https://wa.me/6285846522062', 'Sukabumi, Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `id_keahlian` int NOT NULL,
  `id_biodata` int DEFAULT NULL,
  `nama_skill` varchar(100) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`id_keahlian`, `id_biodata`, `nama_skill`, `kategori`, `level`) VALUES
(1, 1, 'CodeIgniter 4 (CI4)', 'Framework PHP', 'Expert'),
(2, 1, 'MySQL / MariaDB', 'Database', 'Expert'),
(3, 1, 'Bootstrap 5', 'CSS Framework', 'Expert'),
(4, 1, 'PHP Native', 'Bahasa Pemrograman', 'Intermediate'),
(5, 1, 'JavaScript (Dasar)', 'Bahasa Pemrograman', 'Intermediate'),
(6, 1, 'Git & GitHub', 'Tools', 'Intermediate');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int NOT NULL,
  `id_biodata` int DEFAULT NULL,
  `instansi` varchar(150) NOT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `tahun_mulai` year DEFAULT NULL,
  `tahun_selesai` varchar(50) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `id_biodata`, `instansi`, `jurusan`, `tahun_mulai`, `tahun_selesai`, `keterangan`) VALUES
(1, 1, 'Universitas Muhammadiyah Sukabumi (UMMI)', 'S1 Teknik Informatika', '2023', 'Sekarang', 'IPK Sementara 3.7/4.00.'),
(2, 1, 'SMA Negeri 1 Pelabuhanratu', 'MIPA (Matematika Ilmu Pengetahuan Alam)', '2020', '2023', 'Lulus dengan pendidikan ilmu pengetahun alam.');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id_pengalaman` int NOT NULL,
  `id_biodata` int DEFAULT NULL,
  `jenis` varchar(50) NOT NULL,
  `nama_tempat` varchar(150) NOT NULL,
  `posisi` varchar(100) DEFAULT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `deskripsi_singkat` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id_pengalaman`, `id_biodata`, `jenis`, `nama_tempat`, `posisi`, `tahun`, `deskripsi_singkat`) VALUES
(1, 1, 'Organisasi', 'Himpunan Mahasiswa Teknik Informatika', 'Anggota Konsumsi', '2024 - Sekarang', 'Memberikan pelayanan konsumsi yang terstruktur dan higienis, serta memastikan setiap kebutuhan detil acara (seperti ketersediaan air minum dan makanan snack) terpenuhi tepat waktu.'),
(2, 1, 'Proyek Kelas', 'UKM Library Loverrs Community (LLC)', 'Anggota Divisi PSDM', 'Semester 4 (2024)', 'Mengembangkan potensi dan meningkatkan kompetensi anggota melalui berbagai program pengembangan diri.'),
(3, 1, 'Proyek Mandiri', 'Website CV Fungsional', 'Full-Stack Developer', '2025', 'Membuat aplikasi web CV dinamis menggunakan CodeIgniter 4 (CI4) dengan frontend Bootstrap.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id_keahlian`),
  ADD KEY `id_biodata` (`id_biodata`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `id_biodata` (`id_biodata`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`),
  ADD KEY `id_biodata` (`id_biodata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id_biodata` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id_keahlian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id_pengalaman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD CONSTRAINT `keahlian_ibfk_1` FOREIGN KEY (`id_biodata`) REFERENCES `biodata` (`id_biodata`);

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_ibfk_1` FOREIGN KEY (`id_biodata`) REFERENCES `biodata` (`id_biodata`);

--
-- Constraints for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `pengalaman_ibfk_1` FOREIGN KEY (`id_biodata`) REFERENCES `biodata` (`id_biodata`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
