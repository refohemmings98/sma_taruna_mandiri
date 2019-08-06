-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Agu 2019 pada 14.35
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `gambar` varchar(255) NOT NULL DEFAULT 'default.png',
  `theme` varchar(20) NOT NULL DEFAULT 'sb_admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `nama`, `status`, `gambar`, `theme`) VALUES
(2, 'admin@admin.com', 'admin', 'admin', 1, 'default.png', 'sb_admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(3) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `jenis_kelamin`, `alamat`, `username`, `password`) VALUES
(2, 'enny', 'Perempuan', '<p>\n	pamulang 2</p>\n', 'enny_z', '12345'),
(3, 'supri', 'Laki-laki', '<p>\n	gatau dimana</p>\n', 'supri_kang_begal', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(3) NOT NULL,
  `id_soal` int(3) NOT NULL,
  `jawaban_a` varchar(150) NOT NULL,
  `jawaban_b` varchar(150) NOT NULL,
  `jawaban_c` varchar(150) NOT NULL,
  `jawaban_d` varchar(150) NOT NULL,
  `jawaban_benar` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `id_soal`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawaban_benar`) VALUES
(1, 5, 'sitokinin', 'auksin', 'giberelin', 'etilen', 'c'),
(2, 7, 'gas etilen', 'giberelin', 'asam absisat', 'sitokinin', 'a'),
(3, 8, 'gas etilen', 'giberelin', 'asam absisat', 'auksin', 'a'),
(4, 10, 'irisan melintang batang ', 'diameter batang', 'penutupan kanopi', 'lingkaran tahun ', 'd'),
(5, 2, 'pertambahan volume sel', 'pertambahan jumlah sel', 'bersifat reversible', 'bersifat irreversible', 'c'),
(6, 11, 'gas etilen', 'giberelin', 'auksin', 'sitokinin', 'c'),
(7, 11, 'gas etilen', 'giberelin', 'auksin', 'sitokinin', 'c'),
(8, 6, 'C, H, dan O', 'N, C, dan O', 'O, P, dan H', 'K, Ca, dan Mg', 'd'),
(9, 9, 'nitrogen', 'hidrogen', 'oksigen', 'natrium', 'a'),
(10, 4, 'xilem sekunder dan floem sekunder', 'ujung akar dan xilem sekunder', 'ujung akar dan ujung batang', 'ujung akar saja', 'a'),
(12, 16, '2F', 'F/2', '4F', 'tidak berubah', 'd'),
(13, 21, '2', '3', '4', '6', 'd'),
(14, 13, '1 dan 3', '2 dan 4', '1 dan 4', '2 dan 3', 'a'),
(15, 19, 'dibiaskan sebagian', 'dipantulkan sebagian', 'mengalami polarisasi linear pada sinar pantul', 'seluruhnya dipantulkan ', 'd'),
(16, 18, '2,4', '3,2', '4,8', '6,8', 'a'),
(17, 14, '72kJ', '36kJ', '18kJ', '44kJ', 'c'),
(18, 12, '12A', '3A', '1,5A', 'tidak berubah', 'a'),
(19, 15, '90 N dan tolak menolak', '90 N dan tarik menarik', '2.700 N dan tolak menolak', 'Tidak ada jawaban yang benar', 'b'),
(20, 17, '440,0 mJ', '220,0 mJ', '55,1 mJ', '96.8 mJ', 'd'),
(21, 20, 'hanya I', 'hanya II ', 'hanya III', 'II dan III', 'b'),
(22, 3, 'a', 'b', 'c', 'd', 'd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_soal`
--

CREATE TABLE `kategori_soal` (
  `id_kategori` int(3) NOT NULL,
  `id_mapel` int(3) NOT NULL,
  `kategori` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_soal`
--

INSERT INTO `kategori_soal` (`id_kategori`, `id_mapel`, `kategori`) VALUES
(1, 9, 'Soal UTS BIOLOGI'),
(2, 6, 'soal UTS Fisika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(3) NOT NULL,
  `nama_kelas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, '12 IPA'),
(2, '12 IPS A'),
(3, '12 IPS B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(3) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `id_kelas`, `nama_mapel`) VALUES
(1, 1, 'Kimia'),
(2, 2, 'Geografi'),
(3, 3, 'Geografi'),
(4, 2, 'Sosiologi'),
(5, 3, 'Sosiologi'),
(6, 1, 'Fisika'),
(8, 2, 'Ekonomi'),
(9, 1, 'Biologi'),
(10, 3, 'Ekonomi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(3) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `id_mapel` int(3) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `file_materi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id_materi`, `id_kelas`, `id_mapel`, `judul`, `deskripsi`, `file_materi`) VALUES
(1, 2, 8, 'SIKLUS AKUNTANSI PERUSAHAAN DAGANG', '<p>\n	materi</p>\n', 'c9c72-siklus-akuntansi-perusahaan-dagang.docx'),
(2, 2, 6, 'FISIKA DASAR', '<p>\n	Test</p>\n', '1e733-conso-fisika.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(3) NOT NULL,
  `id_siswa` int(3) NOT NULL,
  `nilai` varchar(3) NOT NULL,
  `tgl_quiz` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `nilai`, `tgl_quiz`) VALUES
(17, 2, '0', '2019-07-31 08:36:53'),
(18, 2, '1', '2019-07-31 08:49:42'),
(19, 2, '0', '2019-07-31 08:50:27'),
(20, 2, '0', '2019-07-31 08:51:02'),
(21, 2, '0', '2019-07-31 08:53:48'),
(22, 2, '1', '2019-07-31 09:07:24'),
(23, 2, '1', '2019-07-31 09:07:58'),
(24, 2, '0', '2019-07-31 09:08:31'),
(25, 2, '0', '2019-07-31 09:09:01'),
(26, 2, '0', '2019-07-31 09:10:48'),
(27, 2, '0', '2019-07-31 09:11:16'),
(28, 2, '0', '2019-07-31 09:11:49'),
(29, 2, '0', '2019-07-31 09:12:19'),
(30, 2, '0', '2019-07-31 09:13:02'),
(31, 2, '0', '2019-07-31 09:13:47'),
(32, 2, '0', '2019-07-31 09:14:29'),
(33, 2, '0', '2019-08-01 12:03:59'),
(34, 2, '4', '2019-08-01 13:11:21'),
(35, 2, '0', '2019-08-02 03:06:18'),
(36, 2, '0', '2019-08-02 03:06:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` int(4) NOT NULL,
  `id_guru` int(4) NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `id_mapel` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `id_guru`, `id_kelas`, `id_mapel`) VALUES
(1, 2, 1, 9),
(2, 3, 2, 5),
(3, 2, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_quiz`
--

CREATE TABLE `riwayat_quiz` (
  `id_riwayat` int(4) NOT NULL,
  `id_nilai` int(4) NOT NULL,
  `id_siswa` int(4) NOT NULL,
  `id_soal` int(4) NOT NULL,
  `jawaban_siswa` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat_quiz`
--

INSERT INTO `riwayat_quiz` (`id_riwayat`, `id_nilai`, `id_siswa`, `id_soal`, `jawaban_siswa`) VALUES
(122, 18, 2, 9, ''),
(123, 18, 2, 7, ''),
(124, 18, 2, 8, ''),
(125, 18, 2, 2, ''),
(126, 18, 2, 5, ''),
(127, 18, 2, 10, ''),
(128, 18, 2, 3, ''),
(129, 18, 2, 4, 'd'),
(130, 18, 2, 6, 'd'),
(131, 19, 2, 5, ''),
(132, 19, 2, 8, ''),
(133, 19, 2, 7, ''),
(134, 19, 2, 9, ''),
(135, 19, 2, 3, ''),
(136, 19, 2, 10, ''),
(137, 19, 2, 4, ''),
(138, 19, 2, 2, ''),
(139, 19, 2, 6, ''),
(140, 20, 2, 2, ''),
(141, 20, 2, 6, ''),
(142, 20, 2, 4, ''),
(143, 20, 2, 7, ''),
(144, 20, 2, 10, ''),
(145, 20, 2, 5, ''),
(146, 20, 2, 8, ''),
(147, 20, 2, 9, ''),
(148, 20, 2, 3, ''),
(149, 21, 2, 2, ''),
(150, 21, 2, 5, ''),
(151, 21, 2, 10, ''),
(152, 21, 2, 9, ''),
(153, 21, 2, 4, ''),
(154, 21, 2, 6, ''),
(155, 21, 2, 3, ''),
(156, 21, 2, 8, ''),
(157, 21, 2, 7, ''),
(158, 22, 2, 2, 'a'),
(159, 22, 2, 8, 'a'),
(160, 22, 2, 5, ''),
(161, 22, 2, 10, ''),
(162, 22, 2, 3, ''),
(163, 22, 2, 7, ''),
(164, 22, 2, 4, ''),
(165, 22, 2, 6, ''),
(166, 22, 2, 9, ''),
(167, 23, 2, 2, 'a'),
(168, 23, 2, 8, 'a'),
(169, 23, 2, 5, ''),
(170, 23, 2, 10, ''),
(171, 23, 2, 3, ''),
(172, 23, 2, 7, ''),
(173, 23, 2, 4, ''),
(174, 23, 2, 6, ''),
(175, 23, 2, 9, ''),
(176, 24, 2, 2, ''),
(177, 24, 2, 9, ''),
(178, 24, 2, 8, ''),
(179, 24, 2, 6, ''),
(180, 24, 2, 7, ''),
(181, 24, 2, 3, ''),
(182, 24, 2, 5, ''),
(183, 24, 2, 4, ''),
(184, 24, 2, 10, ''),
(185, 25, 2, 10, ''),
(186, 25, 2, 2, ''),
(187, 25, 2, 6, ''),
(188, 25, 2, 7, ''),
(189, 25, 2, 4, ''),
(190, 25, 2, 9, ''),
(191, 25, 2, 8, ''),
(192, 25, 2, 3, ''),
(193, 25, 2, 5, ''),
(194, 26, 2, 2, ''),
(195, 26, 2, 3, ''),
(196, 26, 2, 6, ''),
(197, 26, 2, 9, ''),
(198, 26, 2, 4, ''),
(199, 26, 2, 5, ''),
(200, 26, 2, 10, ''),
(201, 26, 2, 8, ''),
(202, 26, 2, 7, 'd'),
(203, 27, 2, 2, ''),
(204, 27, 2, 3, ''),
(205, 27, 2, 6, ''),
(206, 27, 2, 9, ''),
(207, 27, 2, 4, ''),
(208, 27, 2, 5, ''),
(209, 27, 2, 10, ''),
(210, 27, 2, 8, 'c'),
(211, 27, 2, 7, 'd'),
(212, 28, 2, 2, ''),
(213, 28, 2, 3, ''),
(214, 28, 2, 6, ''),
(215, 28, 2, 9, ''),
(216, 28, 2, 4, ''),
(217, 28, 2, 5, ''),
(218, 28, 2, 10, ''),
(219, 28, 2, 8, 'c'),
(220, 28, 2, 7, 'd'),
(221, 29, 2, 10, ''),
(222, 29, 2, 4, ''),
(223, 29, 2, 8, ''),
(224, 29, 2, 9, ''),
(225, 29, 2, 6, ''),
(226, 29, 2, 2, ''),
(227, 29, 2, 3, ''),
(228, 29, 2, 7, ''),
(229, 29, 2, 5, ''),
(230, 30, 2, 8, ''),
(231, 30, 2, 4, ''),
(232, 30, 2, 10, ''),
(233, 30, 2, 2, ''),
(234, 30, 2, 5, ''),
(235, 30, 2, 6, ''),
(236, 30, 2, 7, ''),
(237, 30, 2, 9, ''),
(238, 30, 2, 3, ''),
(239, 31, 2, 5, ''),
(240, 31, 2, 10, ''),
(241, 31, 2, 7, ''),
(242, 31, 2, 2, ''),
(243, 31, 2, 4, ''),
(244, 31, 2, 9, ''),
(245, 31, 2, 8, ''),
(246, 31, 2, 6, ''),
(247, 31, 2, 3, ''),
(248, 32, 2, 14, 'a'),
(249, 32, 2, 13, ''),
(250, 32, 2, 18, ''),
(251, 32, 2, 12, ''),
(252, 32, 2, 22, ''),
(253, 32, 2, 16, ''),
(254, 32, 2, 20, ''),
(255, 32, 2, 21, ''),
(256, 32, 2, 15, ''),
(257, 32, 2, 17, ''),
(258, 32, 2, 19, ''),
(259, 33, 2, 18, ''),
(260, 33, 2, 12, ''),
(261, 33, 2, 16, ''),
(262, 33, 2, 20, ''),
(263, 33, 2, 19, ''),
(264, 33, 2, 15, ''),
(265, 33, 2, 14, ''),
(266, 33, 2, 21, ''),
(267, 33, 2, 13, ''),
(268, 33, 2, 17, ''),
(269, 34, 2, 16, 'b'),
(270, 34, 2, 18, 'a'),
(271, 34, 2, 15, 'd'),
(272, 34, 2, 14, 'b'),
(273, 34, 2, 17, 'b'),
(274, 34, 2, 20, 'd'),
(275, 34, 2, 12, 'a'),
(276, 34, 2, 19, 'd'),
(277, 34, 2, 21, 'a'),
(278, 34, 2, 13, 'a'),
(279, 35, 2, 21, ''),
(280, 35, 2, 15, ''),
(281, 35, 2, 20, ''),
(282, 35, 2, 16, ''),
(283, 35, 2, 14, ''),
(284, 35, 2, 18, ''),
(285, 35, 2, 12, ''),
(286, 35, 2, 17, ''),
(287, 35, 2, 19, ''),
(288, 35, 2, 13, ''),
(289, 36, 2, 20, ''),
(290, 36, 2, 21, ''),
(291, 36, 2, 17, ''),
(292, 36, 2, 13, ''),
(293, 36, 2, 19, ''),
(294, 36, 2, 15, ''),
(295, 36, 2, 14, ''),
(296, 36, 2, 18, ''),
(297, 36, 2, 12, 'd'),
(298, 36, 2, 16, 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(3) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nis` varchar(24) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_kelas`, `nama`, `nis`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `username`, `password`) VALUES
(1, 1, 'testing1', '15116156', '2001-07-03', 'perempuan', '<p>\n	pamulang permai blok b nomor 14</p>\n', '15116156', '12345'),
(2, 1, 'testing2', '13116155', '2001-07-04', 'perempuan', '<p>\n	pamulang permai blok c nomor 18</p>\n', '13116155', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(4) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_soal`, `id_kategori`, `pertanyaan`) VALUES
(2, 1, '<p>\n	Makhluk hidup menunjukkan proses pertumbuhan pada peristiwa perubahan biologis,&nbsp;<em>kecuali&nbsp;</em>&hellip;.</p>\n'),
(3, 1, '<p>\n	Yang merupakan proses perkembangan adalah&hellip;.</p>\n'),
(4, 1, '<p>\n	Yang termasuk pertumbuhan sekunder adalah pertumbuhan pada bagian-bagian &hellip;.</p>\n'),
(5, 1, '<p>\n	Buah semangka tanpa biji dapat kamu peroleh dengan memberikan hormon&hellip;.</p>\n'),
(6, 1, '<p>\n	Unsur makro yang berperan sebagai kofaktor enzim tumbuhan adalah &hellip;.</p>\n'),
(7, 1, '<p>\n	Hormon yang berperan mempercepat proses pemasakan buah adalah hormon.....</p>\n'),
(8, 1, '<p>\n	Hormon yang dapat digunakan untuk menghilangkan sifat kerdil pada tanaman adalah&hellip;</p>\n'),
(9, 1, '<p>\n	Unsur yang diambil dari udara untuk pertumbuhan dan perkembangan tumbuhan hijau adalah &hellip;.</p>\n'),
(10, 1, '<p>\n	Kita dapat mengatahui umur suatu pohon dengan memperhatikan.....</p>\n'),
(11, 0, '<p>\n	Ujung batang tanaman dapat membengkok ke arah datangnya cahaya matahari bisa demikian karena pengaruh hormon &hellip;.</p>\n<p>\n	&nbsp;</p>\n'),
(12, 2, '<p>\n	Sebuah rangkaian listrik dengan sumber tegangan V memiliki kuat arus 6 A. Jika hambatan dibuat tetap, sedangkan sumber tegangan dinaikkan menjadi 2V, maka kuat arus akan menjadi&hellip;</p>\n'),
(13, 2, '<p>\n	Perhatikan pernyataan berikut!</p>\n<ol>\n	<li>\n		Menyala lebih terang</li>\n	<li>\n		Menyala lebih redup</li>\n	<li>\n		Jika salah satu lampu dicabut, lampu lain tetap menyala</li>\n	<li>\n		Jika salah satu lampu dicabut, lampu lainnya mati</li>\n</ol>\n<p>\n	Terdapat dua buah rangkaian berbeda yang dihubungkan ke sebuah baterai dengan nilai tegangan yang sama. Pada rangkaian pertama, lampu A-B-C dipasang secara paralel sedangkan pada rangkaian kedua lampu D-E-F dipasang secara seri. Sifat di atas yang merupakan sifat rangkaian lampu A-B-C jika dibandingkan dengan lampu D-E-F adalah&hellip;</p>\n<p>\n	&nbsp;</p>\n'),
(14, 2, '<p>\n	Sebuah lampu memiliki spesifikasi 20 W, 220 V. Jika lampu dipasang pada tegangan 110 V, maka energi listrik yang terpakai dalam 1 jam adalah&hellip;<br />\n	&nbsp;</p>\n'),
(15, 2, '<p>\n	Terdapat dua buah muatan dengan muatan masing-masing +3 &micro;C dan&nbsp;-3 &micro;C. Kedua muatan terpisah sejauh 3 cm. Besar dan jenis gaya Coulomb antara kedua muatan tersebut adalah&hellip;</p>\n'),
(16, 2, '<p>\n	Dua buah muatan yang memiliki jarak R memiliki gaya Coulomb sebesar F. Jika jarak kedua muatan diubah menjadi 2R, gaya Coulomb antara kedua muatan tersebut menjadi&hellip;</p>\n'),
(17, 2, '<p>\n	Terdapat rangkaian dengan dua buah kapasitor yang disusun seri. Jika kapasitansi kapasitor masing-masing adalah 6 &mu;F dan 12 &mu;F dan beda potensial rangkaian adalah 220 V, energi yang tersimpan adalah&hellip;</p>\n'),
(18, 2, '<p>\n	Sebuah bola lampu yang berdaya 120 watt meradiasikan gelombang elektromagnetik ke segala arah dengan sama rata. Intensitas gelombang elektromagnetik pada jarak 2 meter dari lampu adalah sekitar &hellip;. watt/m<sup>2</sup>.</p>\n'),
(19, 2, '<p>\n	Seberkas cahaya datang dari udara ke permukaan batas udara dan air (indeks bias air 4/3) dengan sudut datang 53&deg; (sin53&deg;=0,8 dan cos53&deg;=0,6), maka berkas cahaya itu ...</p>\n'),
(20, 2, '<p>\n	Terdapat tiga benda bermuatan yaitu A, B dan C. Jika A menarik B dan B menolak C, maka:</p>\n<table border="0" cellpadding="0" cellspacing="0" style="width:288px;" width="288">\n	<tbody>\n		<tr>\n			<td style="width:34px;">\n				<p>\n					(I)</p>\n			</td>\n			<td style="width:244px;">\n				<p>\n					A dan C bermuatan sejenis.</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="width:34px;">\n				<p>\n					(II)</p>\n			</td>\n			<td style="width:244px;">\n				<p>\n					A menarik C.</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="width:34px;">\n				<p>\n					(III)</p>\n			</td>\n			<td style="width:244px;">\n				<p>\n					C menarik positif bila A negatif.</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n<p>\n	&nbsp;</p>\n'),
(21, 2, '<p>\n	Dua buah partikel A dan B masing-masing bermuatan listrik +20 &micro;C dan +45 &micro;C terpisah dengan jarak 15 cm. Jika C adalah titik yang terletak di antara A dan B sedemikian, sehingga medan di C sama dengan nol, maka letak C can A .... cm.</p>\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tjm_menu`
--

CREATE TABLE `tjm_menu` (
  `id` int(11) NOT NULL,
  `parent_menu` int(11) NOT NULL DEFAULT '1',
  `nama_menu` varchar(50) NOT NULL,
  `url_menu` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `urutan` tinyint(3) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `type` enum('Admin','Guru') NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tjm_menu`
--

INSERT INTO `tjm_menu` (`id`, `parent_menu`, `nama_menu`, `url_menu`, `icon`, `urutan`, `status`, `type`) VALUES
(1, 1, 'root', '/', '', 0, 0, 'Admin'),
(2, 1, 'dashboard', 'admin/dashboard', 'fa fa-fw fa-dashboard', 1, 1, 'Admin'),
(3, 1, 'User Admin', 'admin/useradmin', 'fa fa-users', 99, 0, 'Admin'),
(4, 1, 'Menu', 'admin/menu', 'fa fa-gear', 100, 1, 'Admin'),
(25, 1, 'Master', 'admin/master', 'fa fa-ticket', 2, 0, 'Admin'),
(26, 1, 'data guru', 'admin/data_guru', 'glyphicon glyphicon-user', 2, 1, 'Admin'),
(27, 1, 'kelas', 'admin/kelas', 'glyphicon glyphicon-th-large', 3, 1, 'Admin'),
(28, 1, 'mata pelajaran ', 'admin/mata_pelajaran', 'glyphicon glyphicon-book', 4, 1, 'Admin'),
(29, 1, 'siswa', 'admin/data_siswa', 'glyphicon glyphicon-user', 5, 1, 'Admin'),
(30, 1, 'materi', 'admin/materi', 'glyphicon glyphicon-file', 6, 1, 'Admin'),
(31, 1, 'kategori soal', 'admin/kategori_soal', 'glyphicon glyphicon-th-list', 7, 1, 'Admin'),
(32, 1, 'soal', 'admin/soal', 'glyphicon glyphicon-th-large', 8, 1, 'Admin'),
(33, 1, 'jawaban', 'admin/jawaban', 'glyphicon glyphicon-pencil', 9, 1, 'Admin'),
(34, 1, 'pengajar', 'admin/pengajar', 'glyphicon glyphicon-user', 10, 1, 'Admin'),
(35, 1, 'Materi', 'guru/materi', 'glyphicon glyphicon-book', 11, 1, 'Guru'),
(36, 1, 'Kategori soal', 'guru/kategori_soal', 'glyphicon glyphicon-th-list', 12, 1, 'Guru'),
(37, 1, 'soal', 'guru/soal', 'glyphicon glyphicon-th-large', 13, 1, 'Guru'),
(38, 1, 'jawaban', 'guru/jawaban', 'glyphicon glyphicon-pencil', 14, 1, 'Guru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `kategori_soal`
--
ALTER TABLE `kategori_soal`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- Indexes for table `riwayat_quiz`
--
ALTER TABLE `riwayat_quiz`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tjm_menu`
--
ALTER TABLE `tjm_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `kategori_soal`
--
ALTER TABLE `kategori_soal`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `riwayat_quiz`
--
ALTER TABLE `riwayat_quiz`
  MODIFY `id_riwayat` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tjm_menu`
--
ALTER TABLE `tjm_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
