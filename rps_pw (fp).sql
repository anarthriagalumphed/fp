-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 05:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rps_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rps`
--

CREATE TABLE `tbl_rps` (
  `id_rps` int(11) NOT NULL,
  `nomor` int(11) NOT NULL,
  `nama_prodi` varchar(255) CHARACTER SET latin1 NOT NULL,
  `kode_matkul` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nama_matkul` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nama_dosen_penyusun` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nik_dosen_penyusun` int(50) NOT NULL,
  `tgl_dosen` date NOT NULL,
  `tgl_berlaku` date NOT NULL,
  `detail_penilaian` varchar(255) NOT NULL,
  `semester` varchar(255) CHARACTER SET latin1 NOT NULL,
  `bobot_sks` varchar(255) NOT NULL,
  `gambaran_umum` varchar(255) CHARACTER SET latin1 NOT NULL,
  `capaian_pembelajaran` varchar(255) CHARACTER SET latin1 NOT NULL,
  `prasyarat_dan_pengetahuan_awal` varchar(255) CHARACTER SET latin1 NOT NULL,
  `kemampuan_akhir_yang_diharapkan` varchar(255) CHARACTER SET latin1 NOT NULL,
  `indikator` varchar(255) CHARACTER SET latin1 NOT NULL,
  `bahan_kajian` varchar(255) CHARACTER SET latin1 NOT NULL,
  `metode_pembelajaran` varchar(255) CHARACTER SET latin1 NOT NULL,
  `metode_penilaian` varchar(255) CHARACTER SET latin1 NOT NULL,
  `bahan_ajar` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tugas_aktivitas` varchar(255) CHARACTER SET latin1 NOT NULL,
  `kemampuan_akhir_yang_diharapkan_atau_evaluasi` varchar(255) CHARACTER SET latin1 NOT NULL,
  `waktu` varchar(255) CHARACTER SET latin1 NOT NULL,
  `bobot` varchar(255) CHARACTER SET latin1 NOT NULL,
  `kriteria_penilaian` varchar(255) CHARACTER SET latin1 NOT NULL,
  `indikator_penilaian` varchar(255) CHARACTER SET latin1 NOT NULL,
  `referensi` varchar(255) CHARACTER SET latin1 NOT NULL,
  `minggu_atau_pertemuan` varchar(255) CHARACTER SET latin1 NOT NULL,
  `kemampuan_akhir_yang_diharapkan_2` varchar(255) CHARACTER SET latin1 NOT NULL,
  `indikator_2` varchar(255) CHARACTER SET latin1 NOT NULL,
  `topik_dan_subtopik` varchar(255) CHARACTER SET latin1 NOT NULL,
  `aktifitas_dan_strategi_pembelajaran` varchar(255) CHARACTER SET latin1 NOT NULL,
  `penilaian` varchar(255) CHARACTER SET latin1 NOT NULL,
  `revisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rps`
--

INSERT INTO `tbl_rps` (`id_rps`, `nomor`, `nama_prodi`, `kode_matkul`, `nama_matkul`, `nama_dosen_penyusun`, `nik_dosen_penyusun`, `tgl_dosen`, `tgl_berlaku`, `detail_penilaian`, `semester`, `bobot_sks`, `gambaran_umum`, `capaian_pembelajaran`, `prasyarat_dan_pengetahuan_awal`, `kemampuan_akhir_yang_diharapkan`, `indikator`, `bahan_kajian`, `metode_pembelajaran`, `metode_penilaian`, `bahan_ajar`, `tugas_aktivitas`, `kemampuan_akhir_yang_diharapkan_atau_evaluasi`, `waktu`, `bobot`, `kriteria_penilaian`, `indikator_penilaian`, `referensi`, `minggu_atau_pertemuan`, `kemampuan_akhir_yang_diharapkan_2`, `indikator_2`, `topik_dan_subtopik`, `aktifitas_dan_strategi_pembelajaran`, `penilaian`, `revisi`) VALUES
(51, 0, 'TEKNIK INFORMATIKA ', 'DT105', 'PERANCANGAN WEB II', 'Firman Asharudin, M.Kom', 190302315, '2023-01-19', '2023-01-19', 'aa', '3', '4', 'aaa', 'aaa', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(54, 0, 'TEKNIK INFORMATIKA', 'DT032', 'METODOLOGI PENELITIAN', 'Ria Andriani, M.Kom', 190302458, '2023-01-12', '2023-01-10', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(80, 0, 'D3 Teknik Informatika', 'DT152', 'STRUKTUR DATA', 'Ahlihi Masruro, M.Kom', 190302148, '2023-01-24', '2023-01-23', '▪ Presensi 10% ▪ Ujian Mid Semester 30 % ▪ Ujian Akhir Semester 40 % ▪ Tugas 20 %', 'Ganjil (3)', '4 SKS ( 2 Teori & 2 Praktikum)', 'Perkuliahan diselenggarakan sebanyak 28 kali pertemuan dalam satu semester, yang terdiri dari 14 kali pertemuan teori dan 14 pertemuan praktikum. Ditambah 2 kali pertemuan yang dikhususkan untuk pelaksanaan UTS (Ujian Tengah Semester) dan UAS (Ujian Akhir', 'Perkuliahan diselenggarakan sebanyak 28 kali pertemuan dalam satu semester, yang terdiri dari 14 kali pertemuan teori dan 14 pertemuan praktikum. Ditambah 2 kali pertemuan yang dikhususkan untuk pelaksanaan UTS (Ujian Tengah Semester) dan UAS (Ujian Akhir', 'Mahasiswa telah memahami logika dalam pemrograman • Telah mengambil matakuliah algoritma dan pemrograman', 'Mampu memahami penggunaan struktur data larik / array.', 'Mahasiswa mampu memahami dan menggunakan array.', '1. Konsep penyimpanan data di memori. 2. Konsep pengorganisasian data dalam array 3. Pengaksesan array 4. Array multidimensi 5. Contoh Soal', 'Ceramah, Diskusi, latihan, Tanya Jawab, Tugas', 'tugas', '1,2,3', 'Tugas membuat penerapan struktur data array dalam penyusunan solusi.', 'Mampu membuat struktur data array untuk menyelesaikan solusi', 'Minggu ke-2 tugas diberikan Durasi waktu 1 hari untuk pengumpulan', '20% ', 'Laporan penerapan array. ', 'Mengumpulkan laporan mengenai penerapan array.', 'Ref.1 : Al Sweigart; Automate The Boring stuff With Python; No Starch, San Fransisco, 2015 Ref.2 : Bradley N. Miller, David L. Ranum ; Problem Solving with Algorithms and Data Structures using Python; http://interactivepython.org;2018 Ref.3 : Utami, E. da', '1', 'Mampu memahami penggunaan struktur data larik / array.', 'Mahasiswa mampu memahami dan menggunakan array.', '1. Konsep penyimpanan data di memori. 2. Konsep pengorganisasian data dalam array 3. Pengaksesan array 4. Array multidimensi 5. Contoh Soal', 'Ceramah, Diskusi, latihan, Tanya Jawab', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_rps`
--
ALTER TABLE `tbl_rps`
  ADD PRIMARY KEY (`id_rps`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_rps`
--
ALTER TABLE `tbl_rps`
  MODIFY `id_rps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
