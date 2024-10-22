-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2023 pada 12.14
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rapor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `admin`, `nip`) VALUES
(1, 'Ernawati, S.Pd', '197907162005012008');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `guru` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `id_pelajaran` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `guru`, `nip`, `id_pelajaran`) VALUES
(13, 'Agus Kholik, S.Ag', '196805051998051001', 1),
(14, 'Chamzah, S.Ag,', '196707022007011024', 1),
(15, 'Putri Nur Oviyanti, S.Pd', '198505202019031009', 1),
(16, 'Hj. Evy Rokhyati, S.Ag.', '197208052007012039', 1),
(17, 'Elvi Faridah, S.Ag.', '197304272007012036', 1),
(18, 'Miftakhul Ikhsan Fauzi, S.Pd', '198505202019031009', 1),
(19, 'Rifqi Zulfatunnisa, S.Pd', '198505202019031009', 1),
(20, 'Ahmad Faizuddin, S.Pd', '198505202019031009', 1),
(21, 'Nurfadilah, S.Ag', '197605302007102001', 1),
(25, 'Hj. Mifrotun, S.Ag', '196604011999032002', 1),
(26, 'Ashopatin, S.Pd', '197408272007102002', 1),
(27, 'Asa Rahmawati Putri, S.Pd', '197411112007102003', 1),
(30, 'Triana Rosita Dewi, S.Kom', '199403092019032018', 1),
(31, 'Nurhidayati, S.Pd', '197604042005012004', 1),
(32, 'Toto Sugiarto, S.Sos', '198902052019031009', 1),
(33, 'Hj.Mifrotun, S.Ag', '196604011999032002', 2),
(34, 'Agus Kholik, S.Ag', '196805051998051001', 2),
(35, 'Ashopatin, S.Pd', '197408272007102002', 2),
(36, 'Triana Rosita Dewi, S.Kom', '199403092019032018', 2),
(37, 'Asa Rahmawati Putri, S.Pd', '197411112007102003', 2),
(38, 'Nurhidayati, S.Pd', '197604042005012004', 2),
(39, 'Toto Sugiarto, S.Sos', '198902052019031009', 2),
(40, 'Hj. Mifrotun, S.Ag', '196604011999032002', 3),
(41, 'Agus Kholik, S.Ag', '196805051998051001', 3),
(42, 'Ashopatin, S.Pd', '197408272007102002', 3),
(43, 'Triana Rosita Dewi, S.Kom', '199403092019032018', 3),
(44, 'Asa Rahmawati Putri, S.Pd', '197411112007102003', 3),
(45, 'Nurhidayati, S.Pd', '197604042005012004', 3),
(46, 'Toto Sugiarto, S.Sos', '198902052019031009', 3),
(47, 'Guruh Respati Palguno, S.Pd', '197402242007102002', 2),
(48, 'Bekti Pujiastuti, S.Pd', '198102152005012007', 2),
(49, 'Nurfadilah, S.Ag', '197605302007102001', 2),
(50, 'Natalina Wheny Lukitasari, S.Pd', '199403092019032018', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(4) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(1, 'VII U.1'),
(2, 'VII U.2'),
(3, 'VII U.3'),
(4, 'VII U.4'),
(5, 'VII U.5'),
(6, 'VII U.6'),
(7, 'VII U.7'),
(8, 'VIII U.1'),
(9, 'VIII U.2'),
(10, 'VIII U.3'),
(11, 'VIII U.4'),
(13, 'VIII U.5'),
(14, 'VIII U.6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kompetensi`
--

CREATE TABLE `kompetensi` (
  `id_kompetensi` int(11) NOT NULL,
  `kompetensi1` text NOT NULL,
  `kompetensi2` text NOT NULL,
  `kompetensi3` text NOT NULL,
  `kompetensi4` text NOT NULL,
  `kompetensi5` text NOT NULL,
  `id_pelajaran` int(4) NOT NULL,
  `id_semester` tinyint(1) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kompetensi`
--

INSERT INTO `kompetensi` (`id_kompetensi`, `kompetensi1`, `kompetensi2`, `kompetensi3`, `kompetensi4`, `kompetensi5`, `id_pelajaran`, `id_semester`, `tahun_ajaran`) VALUES
(1, 'Kelancaran', 'Makhroj/fushohah', 'Tajwid', '-', '-', 1, 1, '2022/2023'),
(2, 'Pendalaman materi IPA yang meliputi Biologi, Fisika, dan Kimia', 'Pembahasan dan pendalaman soal Kompetensi Sains Madrasah IPA ', 'Pendalaman dan pembuatan proposal riset IPA', 'Praktikum dan penyelidikan sederhana tentang IPA', '-', 2, 1, '2022/2023'),
(3, 'Mengaplikasikan manajemen File di komputer dan perangkat digital lainnya serta membuat surat resmi', 'Mengaplikasikan google document dan membuat artikel majalah', 'Mengaplikasikan google document untuk membuat brosur dan sertifikat', 'Mengaplikasikan dan menerapkan rumus sederhana pada spreadsheet', '-', 3, 1, '2022/2023'),
(6, 'Mengaplikasikan google classroom di komputer dan perangkat digital lainnya', 'Mengaplikasikan dan membuat berbagai desain dari aplikasi canva', 'Mengaplikasikan dan membuat formulir dengan google form di komputer dan perangkat digital lainnya', '-', '-', 3, 2, '2022/2023'),
(7, 'Teknik footwork/langkah kaki pada permainan bola voli', 'Teknik dasar passing bawah dan passing atas', 'Teknik dasar servis bawah, servis atas, block dan smash', 'Latihan kekuatan atau fisik', 'Games atau pola permainan bola voli', 4, 1, '2022/2023'),
(8, 'Kelancaran ', 'Makhroj/fushohah', 'Tajwid', '-', '-', 1, 2, '2022/2023'),
(9, 'Pendalaman materi IPA yang meliputi Biologi, Fisika, dan Kimia', 'Pembahasan dan pendalaman soal Kompetensi Sains Madrasah IPA', 'Pendalaman dan pembuatan proposal riset IPA', 'Praktikum dan penyelidikan sederhana tentang IPA', '-', 2, 2, '2022/2023'),
(10, 'Teknik footwork/langkah kaki pada permainan bola voli', 'Teknik dasar passing bawah dan passing atas', 'Teknik dasar servis bawah, servis atas, block dan smash', 'Latihan kekuatan atau fisik', 'Games atau pola permainan bola voli', 4, 2, '2022/2023'),
(11, 'Teknik dasar grip/pegangan raket bulutangkis', 'Teknik dasar stroke/pukulan bulutangkis', 'Teknik dasar footwork/langkah kaki bulutangkis', 'Kondisi fisik bulutangkis', 'Permainan bulutangkis', 5, 1, '2022/2023'),
(12, 'Teknik dasar grip/pegangan raket bulutangkis', 'Teknik dasar stroke/pukulan bulutangkis', 'Teknik dasar footwork/langkah kaki bulutangkis', 'Kondisi fisik bulutangkis', 'Permainan bulutangkis', 5, 2, '2022/2023'),
(13, 'Memahami perubahan keruangan dan interaksi antarruang di Indonesia dan negara-negara ASEAN yang diakibatkan oleh faktor alam dan manusia dan pengaruhnya terhadap', 'Menganalisis pengaruh interaksi sosial dalam ruang yang berbeda terhadap kehidupan sosial budaya serta pengembangan kehidupan kebangsaan', 'Membuat peta ASEAN', 'Menyusun skala prioritas dalam pemenuhan kebutuhan', 'Menyusun sejarah singkat perjuangan bangsa Indonesia', 6, 1, '2022/2023'),
(14, 'Menganalisis keunggulan dan keterbatasan ruang dalam permintaan dan penawaran, teknologi serta pengaruhnya terhadap interaksi antar ruang bagi kegiatan ekonomi,', 'Menganalisis kronologi, perubahan, dan kesinambungan ruang dari masa penjajahan sampai tumbuhnya semangat kebangsaan', '-', '-', '-', 6, 2, '2022/2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nilai1` int(11) DEFAULT NULL,
  `nilai2` int(11) DEFAULT NULL,
  `nilai3` int(11) DEFAULT NULL,
  `nilai4` int(11) DEFAULT NULL,
  `nilai5` int(11) DEFAULT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `id_semester` tinyint(1) NOT NULL,
  `id_kompetensi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nisn`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`, `id_pelajaran`, `id_semester`, `id_kompetensi`) VALUES
(1, '0086618028', 80, 85, 80, 85, 90, 1, 1, 1),
(4, '0086618028', 90, 90, 70, 70, 70, 2, 1, 2),
(12, '0107012876', 88, 77, 77, 0, 0, 1, 1, 1),
(13, '3103555113', 75, 75, 75, 0, 0, 1, 1, 1),
(14, '0108087638', 75, 75, 75, 0, 0, 1, 1, 1),
(15, '0094363670', 75, 75, 75, 0, 0, 1, 1, 1),
(16, '0094817007', 75, 75, 75, 0, 0, 1, 1, 1),
(17, '0103259589', 85, 75, 75, 0, 0, 1, 1, 1),
(18, '0105547591', 80, 75, 75, 0, 0, 1, 1, 1),
(19, '0092673160', 80, 75, 75, 0, 0, 1, 1, 1),
(21, '0108087638', 77, 76, 76, 0, 0, 1, 2, 8),
(22, '0094363670', 77, 77, 77, 0, 0, 1, 2, 8),
(23, '0094817007', 77, 76, 76, 0, 0, 1, 2, 8),
(24, '0103259589', 90, 84, 80, 0, 0, 1, 2, 8),
(25, '0107012876', 75, 75, 75, 0, 0, 1, 2, 8),
(26, '3103555113', 90, 80, 83, 0, 0, 1, 2, 8),
(27, '0105547591', 80, 75, 75, 0, 0, 1, 2, 8),
(28, '0092673160', 80, 79, 78, 0, 0, 1, 2, 8),
(29, '0107814701', 87, 75, 75, 0, 0, 1, 1, 1),
(30, '0107814701', 79, 76, 75, 0, 0, 1, 2, 8),
(31, '0091360483', 80, 75, 75, 0, 0, 1, 1, 1),
(32, '0091360483', 87, 80, 78, 0, 0, 1, 2, 8),
(33, '0094012813', 89, 79, 79, 0, 0, 1, 1, 1),
(34, '0094012813', 80, 79, 79, 0, 0, 1, 2, 8),
(35, '0088644095', 79, 75, 75, 0, 0, 1, 1, 1),
(36, '0088644095', 95, 85, 85, 0, 0, 1, 2, 8),
(37, '3103157116', 80, 75, 75, 0, 0, 1, 1, 1),
(38, '3103157116', 89, 80, 80, 0, 0, 1, 2, 8),
(39, '0106582203', 77, 75, 75, 0, 0, 1, 1, 1),
(40, '0106582203', 77, 76, 75, 0, 0, 1, 2, 8),
(41, '3106912302', 80, 75, 75, 0, 0, 1, 1, 1),
(42, '3106912302', 87, 80, 80, 0, 0, 1, 2, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id_pelajaran` int(4) NOT NULL,
  `pelajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelajaran`
--

INSERT INTO `pelajaran` (`id_pelajaran`, `pelajaran`) VALUES
(1, 'TAHFIDZ'),
(2, 'RISET'),
(3, 'DIGITAL'),
(4, 'BOLA VOLI'),
(5, 'BULU TANGKIS'),
(6, 'SAINS IPS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `role_id` tinyint(2) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`role_id`, `role`) VALUES
(1, 'Admin'),
(2, 'Guru Wali'),
(3, 'Guru Kelas'),
(4, 'Siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id_semester` tinyint(1) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id_semester`, `semester`) VALUES
(1, 'Gasal'),
(2, 'Genap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `siswa` varchar(50) NOT NULL,
  `nism` varchar(50) NOT NULL,
  `id_kelas` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `siswa`, `nism`, `id_kelas`) VALUES
(1, '0108087638', 'Azzka Afif Maulana Putra', '121133280002220230', 1),
(10, '0094363670', 'Maulana Nizar Setiawan', '121133280002220246', 1),
(11, '0094817007', 'Dynar Rizky Syakina', '121133280002220247', 1),
(12, '0103259589', 'Haura Afanin Aribah', '121133280002220241', 1),
(13, '0105547591', 'Imna\' Fithrotul A\'la', '121133280002220242', 1),
(14, '0092673160', 'Vania Raissa Putri', '121133280002220242', 1),
(17, '0107012876', 'Kevin Maulana', '121133280002220455', 2),
(18, '3103555113', 'Habibi Noor Wahid', '121133280002220271', 2),
(19, '0107814701', 'Hafidz Arkanul Khakim', '121133280002220272', 2),
(20, '0091360483', 'Adella Putri Arfina ', '121133280002220257', 2),
(21, '0094012813', 'Farras Faiha Zhafira', '121133280002220269', 2),
(22, '0088644095', 'Fauziah A\'ldatun NUrul Aeni', '121133280002220270', 2),
(23, '3103157116', 'Nur Farida Latief', '121133280002220280', 2),
(24, '0106582203', 'Salsabila Khansa Tsuraya', '121133280002220285', 2),
(25, '3106912302', 'Muhammad Yusuf Amir', '121133280002220277', 2),
(26, '0103610206', 'Amira Dhia Syarafana', '121133280002220293', 3),
(27, '0108408365', 'Agiesta Inkania Putri', '121133280002220289', 3),
(28, '0102710215', 'Fia Inayatun Maulida ', '121133280002220300', 3),
(29, '0102623651', 'Nasywa Salsabila', '121133280002220314', 3),
(30, '0104637667', 'Nur Alfa ', '121133280002220315', 3),
(31, '0094645178', 'Tsurayya Nida Adila', '121133280002220319', 3),
(32, '0106754392', 'Nafisah Faridah', '121133280002220312', 3),
(33, '0097865977', 'Hidayatul Janah', '121133280002220304', 3),
(34, '0104285734', 'Adristi Ulima Syahda', '121133280002220321', 4),
(35, '0108504816', 'Alya Dias Oktaviani', '121133280002220322', 4),
(36, '0108172576', 'Arva Dwi Kumalasari', '121133280002220323', 4),
(37, '0108266845', 'Aulia Rahma Ramadhani', '121133280002220324', 4),
(38, '0106360368', 'Azka Najma Mahmuda', '121133280002220325', 4),
(39, '0103696942', 'Eka Sekar Gunarti', '121133280002220332', 4),
(40, '0109948134', 'Gita Widya Rahma', '121133280002220335', 4),
(41, '0104758935', 'Laylie Nabila', '121133280002220339', 4),
(42, '3108161376', 'Naura Zalika Siserawati', '121133280002220344', 4),
(43, '0098732879', 'Naylin Anisatus Zahra', '121133280002220345', 4),
(44, '0094630233', 'Qurotu Aininli', '121133280002220347', 4),
(45, '0108209344', 'Risa Ayu Maulida', '121133280002220349', 4),
(46, '0106575540', 'Tabina Antika Putri', '121133280002220352', 4),
(47, '0107074591', 'Galih Bramantio', '121133280002220334', 4),
(48, '0106653691', 'Ibni Firzan Ghulam Pangestu', '121133280002220337', 4),
(49, '0107611583', 'Ramadhani Satria Firdaus', '121133280002220348', 4),
(50, '0102134757', 'Desvita Tri Aprilia', '121133280002220362', 5),
(51, '0095520993', 'Sarah Putri Amira  ', '121133280002220380', 5),
(52, '3109783783', 'Aghniya Rosyida Faza ', '121133280002220356', 5),
(53, '3096652357', 'Fikri Primandika Akbar ', '121133280002220365', 5),
(54, '3092270862', 'Hasnal Akhdania Al Fathir ', '121133280002220367', 5),
(55, '0104980226', 'Mohammad Rasyid Al Hakim', '121133280002220374', 5),
(56, '0098958381', 'Dzaki Armando', '121133280002220364', 5),
(57, '0109524395', 'Aisy Almira', '121133280002220387', 6),
(58, '0094446156', 'Deis Ayu Syafani', '121133280002220393', 6),
(59, '0104284890', 'Ibnaty Lubna Nailah', '121133280002220397', 6),
(60, '0091399937', 'Lin Raida Faharunnisa', '121133280002220399', 6),
(61, '0108421212', 'Marva Elvina Zulfa', '121133280002220401', 6),
(62, '0105193415', 'Ghina Safana', '121133280002220396', 6),
(63, '0105464947', 'Ahmad Hanif Jauhari', '121133280002220386', 6),
(64, '3102767158', 'Naufal Muzakki', '121133280002220410', 6),
(65, '0108959952', 'Dafaputra Alfian Alamsyah', '121133280002220392', 6),
(66, '0108099678', 'Affandy Yazul Kahfi', '121133280002220385', 6),
(67, '0104309546', 'Ilham Fauzan Wicaksono', '121133280002220398', 6),
(68, '0103985957', 'Daffa Adly Risqian ', '121133280002220231', 1),
(69, '0093761834', 'Desinta Rahmawati', '121133280002220232', 1),
(70, '0102468428', 'Farel Dwi Erlangga', '121133280002220236', 1),
(71, '3094589327', 'Fiya Nur Mataya Dini', '121133280002220238', 1),
(72, '0097324943', 'Khaira Isyaana Putri', '121133280002220243', 1),
(73, '0099857984', 'Kirana Putri Ramadhani ', '121133280002220244', 1),
(74, '0108718093', 'Muhammad Zidane Al Ghiffari', '121133280002220248', 1),
(75, '0102035850', 'Nafisa Azahro', '121133280002220249', 1),
(76, '0107403834', 'Fakhri Fairuz Zahran', '121133280002220234', 1),
(77, '0106014648', 'Fauzan Afridho', '121133280002220237', 1),
(78, '3109743119', 'Benardo Fatwa Abdillah Tirta', '121133280002220264', 1),
(79, '0097546377', 'Dzakiyah Talita Mufidah', '121133280002220267', 2),
(80, '0081676248', 'Ravika Cinta Diniyah', '121133280002220281', 2),
(81, '0076464204', 'Salsa Oktavia Tasya Qiya', '121133280002220284', 2),
(82, '0084560140', 'Mohammad Hanif Putra Riyadi', '121133280002220275', 2),
(83, '0102585326', 'Aleesya Nur Syafiqah', '121133280002220260', 2),
(84, '3107139357', 'Sultan Hafidz Al Asrofi', '121133280002220286', 2),
(85, '0106694704', 'Ahmad Hafidz Hidayatullah', '121133280002220290', 3),
(86, '3101537660', 'Firdani Rakhmah', '121133280002220301', 3),
(87, '0096505196', 'Geza Ana Fatika Ramadani', '121133280002220303', 3),
(88, '0093741467', 'Keysha Afina Az-Zahra', '121133280002220305', 3),
(89, '0094939616', 'Wijaya Mulya', '121133280002220320', 3),
(90, '0099562014', 'Arsya Reza Saputra', '121133280002220295', 3),
(91, '0104647415', 'Lysia Fatiyyah Fatin Adinda Putri', '121133280002220306', 3),
(92, '0096647888', 'Muhammad Cesario Izzan azizi', '121133280002220310', 3),
(93, '0104760550', 'Mallvyno Leandy Al Habzy', '121133280002220308', 3),
(94, '0105052345', 'Arsila Aziz Al Husna', '121133280002220294', 3),
(95, '0105380911', 'Rizki Abdi Nugroho', '121133280002220318', 3),
(96, '0104164683', 'Bagas Bramanty Aryasatya ', '121133280002220327', 4),
(97, '0106005130', 'Dieny Fathan Nadhifa', '121133280002220331', 4),
(98, '0105572227', 'Muhammad Ghifari Arhana Vighna', '121133280002220342', 4),
(99, '0099876402', 'Adinda Azkiyati Nur', '121133280002220353', 5),
(100, '3110737199', 'Adzra Carika Asmawarni', '121133280002220354', 5),
(101, '0107721756', 'Ahila Zaumar Rifa A\'Lam', '121133280002220357', 5),
(102, '0109269649', 'Aluna Natania', '121133280002220358', 5),
(103, '0101915058', 'Dimas Wirayuda Teboli', '121133280002220363', 5),
(104, '0101319494', 'Finza Mei Farsha', '121133280002220366', 5),
(105, '0108129197', 'Kenzie Javas Sukanto', '121133280002220368', 5),
(106, '0105842819', 'Lundy Abhista Yassar', '121133280002220371', 5),
(107, '0105643538', 'Muhammad Faqih Asyam', '121133280002220376', 5),
(108, '0109289047', 'Muhammad Febrian Azhar Ramadhan', '121133280002220377', 5),
(109, '0108113439', 'Saskia Reva Azzahra', '121133280002220381', 5),
(110, '0101268503', 'M. Taufiq Alfarizi', '121133280002220373', 5),
(111, '0104842054', 'M. Al - Hafiz Rafi Rabbani', '121133280002220372', 5),
(112, '0106255920', 'Azril Nabil Nugroho', '121133280002220360', 5),
(113, '3108825100', 'Arina Mayang Azkiya', '121133280002220359', 5),
(114, '0106390114', 'Brillian Fardansyah', '121133280002220361', 5),
(115, '0105014588', 'Az Zahra Shafa Al Rozak', '121133280002220390', 6),
(116, '0108196425', 'El Salma Nur Ashfiya', '121133280002220394', 6),
(117, '0108187238', 'Muhammad Bintang Al-Aqsa', '121133280002220405', 6),
(118, '0105491297', 'Reynard Satrio Adi', '121133280002220411', 6),
(119, '0102531891', 'Rifda NUr Cahyani', '121133280002220412', 6),
(120, '0105924134', 'Shafa Dwi Julyaningtyas', '121133280002220414', 6),
(121, '0085694849', 'Muhammad Albisni Libas Malaya', '121133280002220404', 6),
(122, '0103267639', 'Asyra Athdiya Laksana', '121133280002220420', 7),
(123, '0104629383', 'Dwi Novita Sari', '121133280002220426', 7),
(124, '0105972033', 'Mellisa Rahmawati', '121133280002220433', 7),
(125, '0102629106', 'Nayla Syifa Fuaziah', '121133280002220435', 7),
(126, '0104050141', 'Shinta Rizka Amelia', '121133280002220444', 7),
(127, '3099631357', 'Zalfaa Zain', '121133280002220448', 7),
(128, '3090935654', 'Abdurrahman Mas Said', '121133280002220226', 1),
(129, '0104091941', 'Aisyara Elshi Aninditha ', '121133280002220227', 1),
(130, '0105204264', 'Arvin Sigit Adi Santoso', '121133280002220228', 1),
(131, '0106475034', 'Faradila Putri Khairunisa', '121133280002220235', 1),
(132, '0091724100', 'Haiqal Insani Isza', '121133280002220240', 1),
(133, '0102258905', 'Orient Dzikri Arraja', '121133280002220250', 1),
(134, '0108500534', 'Rayi Sacha', '121133280002220251', 1),
(135, '3105165631', 'Rifki Dwi Zhafar', '121133280002160062', 1),
(136, '3095785044', 'Tegar Maulana', '121133280002160184', 1),
(137, '0103136529', 'Amar Rohmatul Akbar', '121133280002220261', 2),
(138, '0095387860', 'Ananda Putra Ramadhan', '121133280002220262', 2),
(139, '0098442553', 'Arshavin Akma Fadil', '121133280002220263', 2),
(140, '0102224175', 'Dhiya Atha Amirah Suhodo', '121133280002220265', 2),
(141, '3101758828', 'Dzaki Rafa Rasyidi', '121133280002220266', 2),
(142, '0109167521', 'Eva Kumala Sari', '121133280002220268', 2),
(143, '0107698207', 'Ikhsan alfaras akhmad ', '121133280002220273', 2),
(144, '0102745222', 'M.Miltizam Al-Haq', '121133280002220274', 2),
(145, '0096643844', 'Muhammad Rizqon Zam Zami', '121133280002220276', 2),
(146, '3102581731', 'Nandika Azzam Ghani', '121133280002220279', 2),
(147, '0093128755', 'Ahdimas Rangga Mahesswara', '121133280002220258', 2),
(148, '0105059406', 'Rizqi Aliefian', '121133280002220283', 2),
(149, '0099778264', 'Tanwirul Qulub', '121133280002220287', 2),
(150, '0097550394', 'Tsuraya Nahwa  Firdaus', '121133280002220288', 2),
(151, '0097892874', 'Allysa Aullya Faradilla', '121133280002220291', 3),
(152, '0101125968', 'Arya Zefa Pratama', '121133280002220296', 3),
(153, '0085139298', 'Mohamad Angga Saputra ', '121133280002220309', 3),
(154, '3105046348', 'Pratama Yuldi Saputra', '121133280002220316', 3),
(155, '0103545636', 'Rifa Prabu Aulia', '121133280002220317', 3),
(156, '0093890973', 'Azril Yuki Ardiansyah', '121133280002220326', 4),
(157, '0098144891', 'Bagus Azka Pratama ', '121133280002220328', 4),
(158, '0092850281', 'Daffa Suryadharna Hidayat Putra', '121133280002220329', 4),
(159, '3101565856', 'Hisyam Aqil Maulana', '121133280002220336', 4),
(160, '0093949099', 'M. Khawarizmi Afif Alghifari', '121133280002220340', 4),
(161, '0103305887', 'Muhamad Rafi Assydik', '121133280002220341', 4),
(162, '0109771342', 'Rizki Fairuz Putra', '121133280002220350', 4),
(163, '0103751510', 'Aghni Syifa Afiyati', '121133280002220355', 5),
(164, '3098817540', 'Khaerunnisa Aulia Putri', '121133280002220369', 5),
(165, '0109532481', 'Liyana Fildzatun Nisa', '121133280002220370', 5),
(166, '0108540157', 'M. Fakhri Adi Wiyogo', '121133280002220375', 5),
(167, '0107768203', 'Sekar Ayu Hapsari', '121133280002220382', 5),
(168, '3108920943', 'Sultan Ardhi Wibowo ', '121133280002220383', 5),
(169, '0107620388', 'Telaga Fauz Athallah', '121133280002220384', 5),
(170, '0105210312', 'Annisa Husna Azkiya', '121133280002220388', 6),
(171, '0104105345', 'Bea Alicia Wijaya', '121133280002220391', 6),
(172, '0097503315', 'M.Rifky Alrafahreza', '121133280002220407', 6),
(173, '0105360452', 'Mohammad Arfan Maulana ', '121133280002220402', 6),
(174, '0098103802', 'Muhammad Hilmy Alfian', '121133280002220406', 6),
(175, '3094086807', 'Najwa Aira Irfan', '121133280002220409', 6),
(176, '0102502802', 'Satria Naufal Tsaqiif', '121133280002220413', 6),
(177, '0106378869', 'Vania Mahezwary', '121133280002220415', 6),
(178, '0099445604', 'Ahmad Mahya Nadhif', '121133280002220417', 7),
(179, '0106934416', 'Aurellya Safa Aisyah Putri', '121133280002220421', 7),
(180, '0105516383', 'Beta Ayu Putrichriska', '121133280002220424', 7),
(181, '0102172378', 'Hanis Alfathin Wicaksono', '121133280002220427', 7),
(182, '0107289179', 'Jasmine Berliana', '121133280002220429', 7),
(183, '0108617568', 'Kaneesha adellia', '121133280002220430', 7),
(184, '0097995273', 'Lucky Novianti', '121133280002220432', 7),
(185, '0101768304', 'Naufal Sinatria Hutomo', '121133280002220434', 7),
(186, '0091242804', 'Putri Nur Afifah', '121133280002220439', 7),
(187, '0106485257', 'Putri lianialth hafunisa', '121133280002220438', 7),
(188, '0103197102', 'Rananda Hasbi Wisnutama', '121133280002220441', 7),
(189, '0108299514', 'Ravi Keysa Pratama', '121133280002220442', 7),
(190, '0107398940', 'Syahputri Nabilla Ramadhani', '121133280002220446', 7),
(191, '0101225234', 'Syaira Violina Samrani', '121133280002220447', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `role_id` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `role_id`) VALUES
(4, '197907162005012008', '123456', 'Ernawati, S.Pd', 1),
(12, '0094363670', '123456', 'Maulana Nizar Setiawan', 4),
(13, '0094817007', '123456', 'Dynar Rizky Syakina', 4),
(14, '0103259589', '123456', 'Haura Afanin Aribah', 4),
(15, '0105547591', '123456', 'Imna\' Fithrotul A\'la', 4),
(16, '0092673160', '123456', 'Vania Raissa Putri', 4),
(19, '0107012876', '123456', 'Kevin Maulana', 4),
(20, '3103555113', '123456', 'Habibi Noor Wahid', 4),
(21, '0107814701', '123456', 'Hafidz Arkanul Khakim', 4),
(22, '0091360483', '123456', 'Adella Putri Arfina ', 4),
(23, '0094012813', '123456', 'Farras Faiha Zhafira', 4),
(24, '0088644095', '123456', 'Fauziah A\'ldatun NUrul Aeni', 4),
(25, '3103157116', '123456', 'Nur Farida Latief', 4),
(26, '0106582203', '123456', 'Salsabila Khansa Tsuraya', 4),
(27, '3106912302', '123456', 'Muhammad Yusuf Amir', 4),
(29, '196805051998051001', '123456', 'Agus Kholik, S.Ag', 2),
(30, '197408272007102002', '123456', 'Ashopatin, S.Pd', 2),
(31, '198505202019031009', '123456', 'Putri Nur Oviyanti, S.Pd', 3),
(32, '197208052007012039', '123456', 'Hj. Evy Rokhyati, S.Ag.', 3),
(33, '197304272007012036', '123456', 'Elvi Faridah, S.Ag.', 3),
(34, '198505202019031009', '123456', 'Miftakhul Ikhsan Fauzi, S.Pd', 3),
(35, '198505202019031009', '123456', 'Rifqi Zulfatunnisa, S.Pd', 3),
(36, '198505202019031009', '123456', 'Ahmad Faizuddin, S.Pd', 3),
(41, '196604011999032002', '123456', 'Hj. Mifrotun, S.Ag', 2),
(43, '197411112007102003', '123456', 'Asa Rahmawati Putri, S.Pd', 2),
(46, '199403092019032018', '123456', 'Triana Rosita Dewi, S.Kom', 2),
(47, '197604042005012004', '123456', 'Nurhidayati, S.Pd', 2),
(48, '198902052019031009', '123456', 'Toto Sugiarto, S.Sos', 2),
(49, '0103610206', '123456', 'Amira Dhia Syarafana', 4),
(50, '0108408365', '123456', 'Agiesta Inkania Putri', 4),
(51, '0102710215', '123456', 'Fia Inayatun Maulida ', 4),
(52, '0102623651', '123456', 'Nasywa Salsabila', 4),
(53, '0104637667', '123456', 'Nur Alfa ', 4),
(54, '0094645178', '123456', 'Tsurayya Nida Adila', 4),
(55, '0106754392', '123456', 'Nafisah Faridah', 4),
(56, '0097865977', '123456', 'Hidayatul Janah', 4),
(57, '0104285734', '123456', 'Adristi Ulima Syahda', 4),
(58, '0108504816', '123456', 'Alya Dias Oktaviani', 4),
(59, '196707022007011024', '123456', 'Chamzah, S.Ag', 3),
(61, '197605302007102001', '123456', 'Nurfadilah, S.Ag', 3),
(62, '0108087638', '123456', 'Azzka Afif Maulana Putra', 4),
(63, '196604011999032002', '123456', 'Hj.Mifrotun, S.Ag', 3),
(64, '196805051998051001', '123456', 'Agus Kholik, S.Ag', 3),
(65, '197408272007102002', '123456', 'Ashopatin, S.Pd', 3),
(66, '199403092019032018', '123456', 'Triana Rosita Dewi, S.Kom', 3),
(67, '197411112007102003', '123456', 'Asa Rahmawati Putri, S.Pd', 3),
(68, '197604042005012004', '123456', 'Nurhidayati, S.Pd', 3),
(69, '198902052019031009', '123456', 'Toto Sugiarto, S.Sos', 3),
(70, '0108172576', '123456', 'Arva Dwi Kumalasari', 4),
(71, '0108266845', '123456', 'Aulia Rahma Ramadhani', 4),
(72, '0106360368', '123456', 'Azka Najma Mahmuda', 4),
(73, '0103696942', '123456', 'Eka Sekar Gunarti', 4),
(74, '0109948134', '123456', 'Gita Widya Rahma', 4),
(75, '0104758935', '123456', 'Laylie Nabila', 4),
(76, '3108161376', '123456', 'Naura Zalika Siserawati', 4),
(77, '0098732879', '123456', 'Naylin Anisatus Zahra', 4),
(78, '0094630233', '123456', 'Qurotu Aininli', 4),
(79, '0108209344', '123456', 'Risa Ayu Maulida', 4),
(80, '0106575540', '123456', 'Tabina Antika Putri', 4),
(81, '0107074591', '123456', 'Galih Bramantio', 4),
(82, '0106653691', '123456', 'Ibni Firzan Ghulam Pangestu', 4),
(83, '0107611583', '123456', 'Ramadhani Satria Firdaus', 4),
(84, '0102134757', '123456', 'Desvita Tri Aprilia', 4),
(85, '0095520993', '123456', 'Sarah Putri Amira  ', 4),
(86, '3109783783', '123456', 'Aghniya Rosyida Faza ', 4),
(87, '3096652357', '123456', 'Fikri Primandika Akbar ', 4),
(88, '3092270862', '123456', 'Hasnal Akhdania Al Fathir ', 4),
(89, '0104980226', '123456', 'Mohammad Rasyid Al Hakim', 4),
(90, '0098958381', '123456', 'Dzaki Armando', 4),
(91, '0109524395', '123456', 'Aisy Almira', 4),
(92, '0094446156', '123456', 'Deis Ayu Syafani', 4),
(93, '0104284890', '123456', 'Ibnaty Lubna Nailah', 4),
(94, '0091399937', '123456', 'Lin Raida Faharunnisa', 4),
(95, '0108421212', '123456', 'Marva Elvina Zulfa', 4),
(96, '0105193415', '123456', 'Ghina Safana', 4),
(97, '0105464947', '123456', 'Ahmad Hanif Jauhari', 4),
(98, '3102767158', '123456', 'Naufal Muzakki', 4),
(99, '0108959952', '123456', 'Dafaputra Alfian Alamsyah', 4),
(100, '0108099678', '123456', 'Affandy Yazul Kahfi', 4),
(101, '0104309546', '123456', 'Ilham Fauzan Wicaksono', 4),
(102, '0103985957', '123456', 'Daffa Adly Risqian ', 4),
(103, '0093761834', '123456', 'Desinta Rahmawati', 4),
(104, '0102468428', '123456', 'Farel Dwi Erlangga', 4),
(105, '3094589327', '123456', 'Fiya Nur Mataya Dini', 4),
(106, '0097324943', '123456', 'Khaira Isyaana Putri', 4),
(107, '0099857984', '123456', 'Kirana Putri Ramadhani ', 4),
(108, '0108718093', '123456', 'Muhammad Zidane Al Ghiffari', 4),
(109, '0102035850', '123456', 'Nafisa Azahro', 4),
(110, '0107403834', '123456', 'Fakhri Fairuz Zahran', 4),
(111, '0106014648', '123456', 'Fauzan Afridho', 4),
(112, '3109743119', '123456', 'Benardo Fatwa Abdillah Tirta', 4),
(113, '0097546377', '123456', 'Dzakiyah Talita Mufidah', 4),
(114, '0081676248', '123456', 'Ravika Cinta Diniyah', 4),
(115, '0076464204', '123456', 'Salsa Oktavia Tasya Qiya', 4),
(116, '0084560140', '123456', 'Mohammad Hanif Putra Riyadi', 4),
(117, '0102585326', '123456', 'Aleesya Nur Syafiqah', 4),
(118, '3107139357', '123456', 'Sultan Hafidz Al Asrofi', 4),
(119, '0106694704', '123456', 'Ahmad Hafidz Hidayatullah', 4),
(120, '3101537660', '123456', 'Firdani Rakhmah', 4),
(121, '0096505196', '123456', 'Geza Ana Fatika Ramadani', 4),
(122, '0093741467', '123456', 'Keysha Afina Az-Zahra', 4),
(123, '0094939616', '123456', 'Wijaya Mulya', 4),
(124, '0099562014', '123456', 'Arsya Reza Saputra', 4),
(125, '0104647415', '123456', 'Lysia Fatiyyah Fatin Adinda Putri', 4),
(126, '0096647888', '123456', 'Muhammad Cesario Izzan azizi', 4),
(127, '0104760550', '123456', 'Mallvyno Leandy Al Habzy', 4),
(128, '0105052345', '123456', 'Arsila Aziz Al Husna', 4),
(129, '0105380911', '123456', 'Rizki Abdi Nugroho', 4),
(130, '0104164683', '123456', 'Bagas Bramanty Aryasatya ', 4),
(131, '0106005130', '123456', 'Dieny Fathan Nadhifa', 4),
(132, '0105572227', '123456', 'Muhammad Ghifari Arhana Vighna', 4),
(133, '0099876402', '123456', 'Adinda Azkiyati Nur', 4),
(134, '3110737199', '123456', 'Adzra Carika Asmawarni', 4),
(135, '0107721756', '123456', 'Ahila Zaumar Rifa A\'Lam', 4),
(136, '0109269649', '123456', 'Aluna Natania', 4),
(137, '0101915058', '123456', 'Dimas Wirayuda Teboli', 4),
(138, '0101319494', '123456', 'Finza Mei Farsha', 4),
(139, '0108129197', '123456', 'Kenzie Javas Sukanto', 4),
(140, '0105842819', '123456', 'Lundy Abhista Yassar', 4),
(141, '0105643538', '123456', 'Muhammad Faqih Asyam', 4),
(142, '0109289047', '123456', 'Muhammad Febrian Azhar Ramadhan', 4),
(143, '0108113439', '123456', 'Saskia Reva Azzahra', 4),
(144, '0101268503', '123456', 'M. Taufiq Alfarizi', 4),
(145, '0104842054', '123456', 'M. Al - Hafiz Rafi Rabbani', 4),
(146, '0106255920', '123456', 'Azril Nabil Nugroho', 4),
(147, '3108825100', '123456', 'Arina Mayang Azkiya', 4),
(148, '0106390114', '123456', 'Brillian Fardansyah', 4),
(149, '0105014588', '123456', 'Az Zahra Shafa Al Rozak', 4),
(150, '0108196425', '123456', 'El Salma Nur Ashfiya', 4),
(151, '0108187238', '123456', 'Muhammad Bintang Al-Aqsa', 4),
(152, '0105491297', '123456', 'Reynard Satrio Adi', 4),
(153, '0102531891', '123456', 'Rifda NUr Cahyani', 4),
(154, '0105924134', '123456', 'Shafa Dwi Julyaningtyas', 4),
(155, '0085694849', '123456', 'Muhammad Albisni Libas Malaya', 4),
(156, '0103267639', '123456', 'Asyra Athdiya Laksana', 4),
(157, '0104629383', '123456', 'Dwi Novita Sari', 4),
(158, '0105972033', '123456', 'Mellisa Rahmawati', 4),
(159, '0102629106', '123456', 'Nayla Syifa Fuaziah', 4),
(160, '0104050141', '123456', 'Shinta Rizka Amelia', 4),
(161, '3099631357', '123456', 'Zalfaa Zain', 4),
(162, '3090935654', '123456', 'Abdurrahman Mas Said', 4),
(163, '0104091941', '123456', 'Aisyara Elshi Aninditha ', 4),
(164, '0105204264', '123456', 'Arvin Sigit Adi Santoso', 4),
(165, '0106475034', '123456', 'Faradila Putri Khairunisa', 4),
(166, '0091724100', '123456', 'Haiqal Insani Isza', 4),
(167, '0102258905', '123456', 'Orient Dzikri Arraja', 4),
(168, '0108500534', '123456', 'Rayi Sacha', 4),
(169, '3105165631', '123456', 'Rifki Dwi Zhafar', 4),
(170, '3095785044', '123456', 'Tegar Maulana', 4),
(171, '0103136529', '123456', 'Amar Rohmatul Akbar', 4),
(172, '0095387860', '123456', 'Ananda Putra Ramadhan', 4),
(173, '0098442553', '123456', 'Arshavin Akma Fadil', 4),
(174, '0102224175', '123456', 'Dhiya Atha Amirah Suhodo', 4),
(175, '3101758828', '123456', 'Dzaki Rafa Rasyidi', 4),
(176, '0109167521', '123456', 'Eva Kumala Sari', 4),
(177, '0107698207', '123456', 'Ikhsan alfaras akhmad ', 4),
(178, '0102745222', '123456', 'M.Miltizam Al-Haq', 4),
(179, '0096643844', '123456', 'Muhammad Rizqon Zam Zami', 4),
(180, '3102581731', '123456', 'Nandika Azzam Ghani', 4),
(181, '0093128755', '123456', 'Ahdimas Rangga Mahesswara', 4),
(182, '0105059406', '123456', 'Rizqi Aliefian', 4),
(183, '0099778264', '123456', 'Tanwirul Qulub', 4),
(184, '0097550394', '123456', 'Tsuraya Nahwa  Firdaus', 4),
(185, '0097892874', '123456', 'Allysa Aullya Faradilla', 4),
(186, '0101125968', '123456', 'Arya Zefa Pratama', 4),
(187, '0085139298', '123456', 'Mohamad Angga Saputra ', 4),
(188, '3105046348', '123456', 'Pratama Yuldi Saputra', 4),
(189, '0103545636', '123456', 'Rifa Prabu Aulia', 4),
(190, '0093890973', '123456', 'Azril Yuki Ardiansyah', 4),
(191, '0098144891', '123456', 'Bagus Azka Pratama ', 4),
(192, '0092850281', '123456', 'Daffa Suryadharna Hidayat Putra', 4),
(193, '3101565856', '123456', 'Hisyam Aqil Maulana', 4),
(194, '0093949099', '123456', 'M. Khawarizmi Afif Alghifari', 4),
(195, '0103305887', '123456', 'Muhamad Rafi Assydik', 4),
(196, '0109771342', '123456', 'Rizki Fairuz Putra', 4),
(197, '0103751510', '123456', 'Aghni Syifa Afiyati', 4),
(198, '3098817540', '123456', 'Khaerunnisa Aulia Putri', 4),
(199, '0109532481', '123456', 'Liyana Fildzatun Nisa', 4),
(200, '0108540157', '123456', 'M. Fakhri Adi Wiyogo', 4),
(201, '0107768203', '123456', 'Sekar Ayu Hapsari', 4),
(202, '3108920943', '123456', 'Sultan Ardhi Wibowo ', 4),
(203, '0107620388', '123456', 'Telaga Fauz Athallah', 4),
(204, '0105210312', '123456', 'Annisa Husna Azkiya', 4),
(205, '0104105345', '123456', 'Bea Alicia Wijaya', 4),
(206, '0097503315', '123456', 'M.Rifky Alrafahreza', 4),
(207, '0105360452', '123456', 'Mohammad Arfan Maulana ', 4),
(208, '0098103802', '123456', 'Muhammad Hilmy Alfian', 4),
(209, '3094086807', '123456', 'Najwa Aira Irfan', 4),
(210, '0102502802', '123456', 'Satria Naufal Tsaqiif', 4),
(211, '0106378869', '123456', 'Vania Mahezwary', 4),
(212, '0099445604', '123456', 'Ahmad Mahya Nadhif', 4),
(213, '0106934416', '123456', 'Aurellya Safa Aisyah Putri', 4),
(214, '0105516383', '123456', 'Beta Ayu Putrichriska', 4),
(215, '0102172378', '123456', 'Hanis Alfathin Wicaksono', 4),
(216, '0107289179', '123456', 'Jasmine Berliana', 4),
(217, '0108617568', '123456', 'Kaneesha adellia', 4),
(218, '0097995273', '123456', 'Lucky Novianti', 4),
(219, '0101768304', '123456', 'Naufal Sinatria Hutomo', 4),
(220, '0091242804', '123456', 'Putri Nur Afifah', 4),
(221, '0106485257', '123456', 'Putri lianialth hafunisa', 4),
(222, '0103197102', '123456', 'Rananda Hasbi Wisnutama', 4),
(223, '0108299514', '123456', 'Ravi Keysa Pratama', 4),
(224, '0107398940', '123456', 'Syahputri Nabilla Ramadhani', 4),
(225, '0101225234', '123456', 'Syaira Violina Samrani', 4),
(226, '196604011999032002', '123456', 'Hj. Mifrotun, S.Ag', 3),
(227, '196805051998051001', '123456', 'Agus Kholik, S.Ag', 3),
(228, '197408272007102002', '123456', 'Ashopatin, S.Pd', 3),
(229, '199403092019032018', '123456', 'Triana Rosita Dewi, S.Kom', 3),
(230, '197411112007102003', '123456', 'Asa Rahmawati Putri, S.Pd', 3),
(231, '197604042005012004', '123456', 'Nurhidayati, S.Pd', 3),
(232, '198902052019031009', '123456', 'Toto Sugiarto, S.Sos', 3),
(233, '197402242007102002', '123456', 'Guruh Respati Palguno, S.Pd', 3),
(234, '198102152005012007', '123456', 'Bekti Pujiastuti, S.Pd', 3),
(235, '197605302007102001', '123456', 'Nurfadilah, S.Ag', 3),
(236, '199403092019032018', '123456', 'Natalina Wheny Lukitasari, S.Pd', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wali`
--

CREATE TABLE `wali` (
  `id_wali` int(11) NOT NULL,
  `wali` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `id_pelajaran` int(4) NOT NULL,
  `id_kelas` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `wali`
--

INSERT INTO `wali` (`id_wali`, `wali`, `nip`, `id_pelajaran`, `id_kelas`) VALUES
(11, 'Hj. Mifrotun, S.Ag', '196604011999032002', 1, 1),
(18, 'Agus Kholik, S.Ag', '196805051998051001', 1, 2),
(19, 'Ashopatin, S.Pd', '197408272007102002', 1, 3),
(20, 'Triana Rosita Dewi, S.Kom', '199403092019032018', 1, 4),
(21, 'Asa Rahmawati Putri, S.Pd', '197411112007102003', 1, 5),
(22, 'Nurhidayati, S.Pd', '197604042005012004', 1, 6),
(23, 'Toto Sugiarto, S.Sos', '198902052019031009', 1, 7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD PRIMARY KEY (`id_kompetensi`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeks untuk tabel `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`,`username`);

--
-- Indeks untuk tabel `wali`
--
ALTER TABLE `wali`
  ADD PRIMARY KEY (`id_wali`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `kompetensi`
--
ALTER TABLE `kompetensi`
  MODIFY `id_kompetensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id_pelajaran` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `role_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT untuk tabel `wali`
--
ALTER TABLE `wali`
  MODIFY `id_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
