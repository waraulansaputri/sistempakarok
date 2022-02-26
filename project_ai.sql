-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2022 pada 04.16
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama_gejala` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama_gejala`, `created_at`, `updated_at`) VALUES
('G001', 'Nafsu makan menurun', NULL, NULL),
('G002', 'Keguguran setelah 6-9 bulan', NULL, '2022-02-25 03:03:18'),
('G003', 'Keluarnya plasenta tertunda', NULL, NULL),
('G004', 'Terjadi radang uterus', NULL, NULL),
('G005', 'Radang kemaluan', NULL, NULL),
('G006', 'Keluar nanah dari seluruh tubuh', NULL, NULL),
('G007', 'Air kencing berwarana merah', NULL, NULL),
('G008', 'Keguguran setelah 3 minggu', NULL, NULL),
('G009', 'Ginjal tampak belang', NULL, NULL),
('G010', 'Suhu Badan rendah < 35 C', NULL, '2022-02-25 03:04:17'),
('G011', 'Demam Tremor ', NULL, NULL),
('G012', 'Keluar cairan dari mata dan hidung', NULL, NULL),
('G013', 'Air liur yang berlebihan', NULL, NULL),
('G014', 'Kekakuan anggota gerak', NULL, NULL),
('G015', 'Suhu badan meningkat > 42C', NULL, '2022-02-25 03:05:03'),
('G016', 'Denyut jantung meningkat ( detak jantung normal 60-70 kali/menit)', NULL, '2022-02-25 03:16:14'),
('G017', 'Keguguran usia 3 bulan', NULL, NULL),
('G018', 'Hewan menjadi birahi seelah 30-70 hari', NULL, NULL),
('G019', 'Keluar nanah pada uterus', NULL, NULL),
('G020', 'Radang penis dan preputium', NULL, NULL),
('G021', 'Beringas', NULL, '2022-02-25 03:17:01'),
('G022', 'ingusan', NULL, NULL),
('G023', 'Penurunan produksi susu (normal sekital 60/70 kali/menit)', NULL, '2022-02-25 03:17:32'),
('G024', 'Depresi ', NULL, NULL),
('G025', 'Frekuensi Pernafsan meningkat (normal 24-42 kali/menit)', NULL, '2022-02-25 03:19:14'),
('G026', 'Kulit dan bulu kaku', NULL, NULL),
('G027', 'Sering menggit bagian tubuhnya', NULL, NULL),
('G028', 'Bulu rontok (sekitar 15-20%)', NULL, '2022-02-25 03:19:47'),
('G029', 'Mengosok- gosok badan ke kandang (Seperti menggaruk bagian yang sakit)', NULL, '2022-02-25 03:20:11'),
('G030', 'Muncul nanah pada tubuh ', NULL, NULL),
('G031', 'Timbuk kerak berwarna abu-abu (keropeng kulit)', NULL, '2022-02-25 03:20:49'),
('G032', 'Terdapat luka ditubuh', NULL, NULL),
('G033', 'Terdapat lalat di area tubuh', NULL, NULL),
('G034', 'Terdapat belatung di area luka', NULL, NULL),
('G035', 'Lemah ', NULL, NULL),
('G036', 'Penurunan Berat Badan', NULL, NULL),
('G037', 'Sesak nafas', NULL, NULL),
('G038', 'Dehidrasi', NULL, NULL),
('G039', 'Hidung kering', NULL, NULL),
('G040', 'Mulut Kering', NULL, NULL),
('G041', 'Mencret', NULL, NULL),
('G042', 'Jalan Sempoyongan (bahkan ambruk)', NULL, '2022-02-25 03:21:44'),
('G043', 'Telinga Terkulai', NULL, NULL),
('G044', 'Mata suram, mengantuk dan cekung', NULL, NULL),
('G045', 'Sapi ngorok', NULL, NULL),
('G046', 'Bulu kusam', NULL, NULL),
('G047', 'Feses lembek sampai cair, berwarna gelap, berbau busuk dan berlendir', NULL, NULL),
('G048', 'Keluar bercak darah', NULL, NULL),
('G049', 'Merejan dan merintih', NULL, NULL),
('G050', 'Punggung melengkung', NULL, NULL),
('G051', 'Mulut berbuih', NULL, NULL),
('G052', 'Pupil mata membesar', NULL, NULL),
('G053', 'Kejang otot', NULL, NULL),
('G054', 'Gelisah ', NULL, NULL),
('G055', 'Bagian perut terlihat legok akibat lapar kembung', NULL, NULL),
('G056', 'Muntah ', NULL, NULL),
('G057', 'Berkemih ( Sering kencing)', NULL, NULL),
('G058', 'Sering menghetakkan kaki (mengais-ais perutnya)', NULL, '2022-02-25 03:23:10'),
('G059', 'Bernafas dengan mulut', NULL, NULL),
('G060', 'Sering memanjangkan leher', NULL, NULL),
('G061', 'Batuk ', NULL, NULL),
('G062', 'Sesak nafas', NULL, NULL),
('G063', 'Pincang ', NULL, NULL),
('G064', 'Persendian kaki membengkak', NULL, NULL),
('G065', 'Malas bergerak', NULL, NULL),
('G066', 'Selaput Berlenir', NULL, NULL),
('G067', 'Katup Mata bengkak', NULL, NULL),
('G068', 'Katarak ', NULL, NULL),
('G069', 'Keluarnya air mata', NULL, NULL),
('G070', 'Radang pda kelenjar susu', NULL, NULL),
('G071', 'Kelenjar air susu tidak normal', NULL, NULL),
('G072', 'Kelenjar air susu panas', NULL, NULL),
('G073', 'Kelnejar air susu sakit bila disentuh', NULL, NULL),
('G074', 'Air susu encer dan bercampur', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala_penyakit`
--

CREATE TABLE `gejala_penyakit` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_gejala` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_penyakit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `gejala_penyakit`
--

INSERT INTO `gejala_penyakit` (`id`, `id_gejala`, `id_penyakit`, `created_at`, `updated_at`) VALUES
(1, 'G006', 'KP001', NULL, NULL),
(2, 'G002', 'KP001', NULL, NULL),
(3, 'G003', 'KP001', NULL, NULL),
(4, 'G004', 'KP001', NULL, NULL),
(5, 'G005', 'KP001', NULL, NULL),
(6, 'G001', 'KP002', NULL, NULL),
(7, 'G007', 'KP002', NULL, NULL),
(8, 'G008', 'KP002', NULL, NULL),
(9, 'G009', 'KP002', NULL, NULL),
(10, 'G010', 'KP002', NULL, NULL),
(11, 'G001', 'KP003', NULL, NULL),
(12, 'G011', 'KP003', NULL, NULL),
(13, 'G012', 'KP003', NULL, NULL),
(14, 'G013', 'KP003', NULL, NULL),
(15, 'G014', 'KP003', NULL, NULL),
(16, 'G015', 'KP003', NULL, NULL),
(17, 'G016', 'KP003', NULL, NULL),
(18, 'G017', 'KP004', NULL, NULL),
(19, 'G018', 'KP004', NULL, NULL),
(20, 'G019', 'KP004', NULL, NULL),
(21, 'G020', 'KP004', NULL, NULL),
(22, 'G015', 'KP005', NULL, NULL),
(23, 'G022', 'KP005', NULL, NULL),
(24, 'G023', 'KP005', NULL, NULL),
(25, 'G024', 'KP005', NULL, NULL),
(26, 'G001', 'KP006', NULL, NULL),
(27, 'G011', 'KP006', NULL, NULL),
(28, 'G016', 'KP006', NULL, NULL),
(29, 'G025', 'KP006', NULL, NULL),
(30, 'G026', 'KP007', NULL, NULL),
(31, 'G027', 'KP007', NULL, NULL),
(32, 'G028', 'KP007', NULL, NULL),
(33, 'G029', 'KP007', NULL, NULL),
(34, 'G030', 'KP007', NULL, NULL),
(35, 'G031', 'KP007', NULL, NULL),
(36, 'G001', 'KP008', NULL, NULL),
(37, 'G010', 'KP008', NULL, NULL),
(38, 'G032', 'KP008', NULL, NULL),
(39, 'G033', 'KP008', NULL, NULL),
(40, 'G034', 'KP008', NULL, NULL),
(41, 'G035', 'KP008', NULL, NULL),
(42, 'G036', 'KP008', NULL, NULL),
(43, 'G001', 'KP009', NULL, NULL),
(44, 'G016', 'KP009', NULL, NULL),
(45, 'G024', 'KP009', NULL, NULL),
(46, 'G025', 'KP009', NULL, NULL),
(47, 'G026', 'KP009', NULL, NULL),
(48, 'G028', 'KP009', NULL, NULL),
(49, 'G035', 'KP009', NULL, NULL),
(50, 'G036', 'KP009', NULL, NULL),
(51, 'G038', 'KP009', NULL, NULL),
(52, 'G039', 'KP009', NULL, NULL),
(53, 'G040', 'KP009', NULL, NULL),
(54, 'G041', 'KP009', NULL, NULL),
(55, 'G042', 'KP009', NULL, NULL),
(56, 'G043', 'KP009', NULL, NULL),
(57, 'G043', 'KP009', NULL, NULL),
(58, 'G010', 'KP010', NULL, NULL),
(59, 'G022', 'KP010', NULL, NULL),
(60, 'G025', 'KP010', NULL, NULL),
(61, 'G001', 'KP011', NULL, NULL),
(62, 'G010', 'KP011', NULL, NULL),
(63, 'G011', 'KP011', NULL, NULL),
(64, 'G028', 'KP011', NULL, NULL),
(65, 'G042', 'KP011', NULL, NULL),
(66, 'G001', 'KP012', NULL, NULL),
(67, 'G012', 'KP012', NULL, NULL),
(68, 'G026', 'KP012', NULL, NULL),
(69, 'G028', 'KP012', NULL, NULL),
(70, 'G035', 'KP012', NULL, NULL),
(71, 'G036', 'KP012', NULL, NULL),
(72, 'G038', 'KP012', NULL, NULL),
(73, 'G041', 'KP012', NULL, NULL),
(74, 'G046', 'KP012', NULL, NULL),
(75, 'G047', 'KP012', NULL, NULL),
(76, 'G048', 'KP012', NULL, NULL),
(77, 'G049', 'KP012', NULL, NULL),
(78, 'G050', 'KP012', NULL, NULL),
(79, 'G016', 'KP013', NULL, NULL),
(80, 'G025', 'KP013', NULL, NULL),
(81, 'G042', 'KP013', NULL, NULL),
(82, 'G051', 'KP013', NULL, NULL),
(83, 'G052', 'KP013', NULL, NULL),
(84, 'G053', 'KP013', NULL, NULL),
(85, 'G001', 'KP014', NULL, NULL),
(86, 'G025', 'KP014', NULL, NULL),
(87, 'G035', 'KP014', NULL, NULL),
(88, 'G036', 'KP014', NULL, NULL),
(89, 'G039', 'KP014', NULL, NULL),
(90, 'G054', 'KP014', NULL, NULL),
(91, 'G055', 'KP014', NULL, NULL),
(92, 'G056', 'KP014', NULL, NULL),
(93, 'G057', 'KP014', NULL, NULL),
(94, 'G058', 'KP014', NULL, NULL),
(95, 'G059', 'KP014', NULL, NULL),
(96, 'G060', 'KP014', NULL, NULL),
(97, 'G001', 'KP015', NULL, NULL),
(98, 'G010', 'KP015', NULL, NULL),
(99, 'G022', 'KP015', NULL, NULL),
(100, 'G036', 'KP015', NULL, NULL),
(101, 'G061', 'KP015', NULL, NULL),
(102, 'G062', 'KP015', NULL, NULL),
(103, 'G001', 'KP016', NULL, NULL),
(104, 'G014', 'KP016', NULL, NULL),
(105, 'G015', 'KP016', NULL, NULL),
(106, 'G063', 'KP016', NULL, NULL),
(107, 'G064', 'KP016', NULL, NULL),
(108, 'G065', 'KP016', NULL, NULL),
(109, 'G066', 'KP017', NULL, NULL),
(110, 'G067', 'KP017', NULL, NULL),
(111, 'G068', 'KP017', NULL, NULL),
(112, 'G069', 'KP017', NULL, NULL),
(113, 'G070', 'KP018', NULL, NULL),
(114, 'G071', 'KP018', NULL, NULL),
(115, 'G072', 'KP018', NULL, NULL),
(116, 'G073', 'KP018', NULL, NULL),
(117, 'G074', 'KP018', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakar`
--

CREATE TABLE `pakar` (
  `id_pakar` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(18) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pakar`
--

INSERT INTO `pakar` (`id_pakar`, `nama`, `no_hp`, `alamat`, `foto`) VALUES
(1, 'Drh. Aulia Rahmi', '6282210080121', 'Jalan Aceh 191 A', '1645083700_441463-idcard-kpop.jpg'),
(2, 'Drh. Ari', '6282383563000', 'Jalan Abdurahman', '1645349727_bpk2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama_penyakit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `solusi` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama_penyakit`, `solusi`, `created_at`, `updated_at`) VALUES
('KP001', 'Brucollosis', 'Dilakukan vaksinasi terhadap ternak yang terjangkit brucellosis Dilakukan uji Red Bengal Test (RBT) dan uji Complement Fixation Test (CFT). Apabila kedua tes mendapatkan hasil positif, maka dilakukan Test and Slaughter.', NULL, NULL),
('KP002', 'Leptospirosis', 'Pengendalian parasite dilakukan dengan memberikan anthelmintika secara periodik. Pada daerah endemis, berikan anthelmintika pada pedet berusia 10-16 hari Sapi yang terinfeksi dikarantina Berikan kombinasi antibiotic penisilin dan eritromisin. sapi yang berumur 4-6 bulan diberi vaksin', NULL, NULL),
('KP003', 'Demam 3 Hari', 'Pengobatan dilakukan simtomatik dan pencegahan terhadap infeksi sekunder dengan antibiotik yang dilakukan oleh petugas yang berwenang.', NULL, NULL),
('KP004', 'Trichomoniasis', 'Dilakukan pembersihan plasenta, irigasi dengan lugol 1% atau 0.5%,', NULL, '2022-02-25 02:27:48'),
('KP005', 'IBR (Infectious Bovine Rhinotracheitis)', 'silahkan hubungi pakar', NULL, '2022-02-25 02:36:31'),
('KP006', 'Anthrax (Radang Limpa)', 'Vaksinasi spora avirulen secara berkala tiap tahun pada sapi yang belum terkena.Jangan memberi makan sapi dengan akarnya, biasanya hijauan. Berikan rumputnya saja Jika sapi sudah terkena, berikan antibiotik dengan spektrum luas seperti Penisilin G, Oxytetracyclin, Streptomycin Jangan sering – sering kontak fisik dengan ternak jika tidak benar – benar darurat Hewan yang sudah mati jangan dibedah, jangan memegang langsung bagian luka. Langsung kubur saja bila perlu bakar bangkainya', NULL, NULL),
('KP007', 'Scabies / Kudis', 'Memberikan minyak kelapa dicampur dengan kapur barus kemudian digosokkan pada kulit yang terkena skabies', NULL, NULL),
('KP008', 'Myasis / Borok', 'Belatung yang ada pada luka dapat dicabut dengan menggunakan pinset steril. Cara ini paling baik dan menghindari kontaminasi dengan bahan-bahan kimia lain, namun jika pinset tidak steril malah bisa memperparah luka dan menjadi infeksi akut.\r\nSiramkan minyak tanah atau bensin ke dalam luka. Usahakan siraman bensin atau minyak tanah tersebut tidak mengenai bulu ternak, sebab apabila kulit ternak terkena bensin, kulit tersebut bisa mengalami botak permanent. Jadi cara aman menggunakan minyak ini untuk mengusir belatung adalah dengan menggunakan speet (alat suntik).\r\nlakukan sanitasi kandang. Semprot kandang dengan anti serangga, agar tidak ada lalat yang berkeliaran di sekitar kandang. Luka ternak berbelatung itu karena adanya lalat yang meletakkan telur mereka diatas luka pada ternak sapi, maupun ternak lainnya seperti kambing, maupun domba dan kuda.\r\nlakukan sanitasi pada tubuh ternak. Semprotkan anti lalat pada badan ternak sapi yang terkena luka, biasanya cairan ini berwarna biru dan di pasar-pasar ternak sering digunakan.', NULL, '2022-02-25 02:38:40'),
('KP009', 'Cacingan', 'Obat yang biasanya digunakan oleh dokter hewan adalah dalam jenis benzimidazol, Imida-thiazol dan Avermectin (konsultasi dengan dokter hewan sebelum menggunakan).', NULL, NULL),
('KP010', 'Sapi Ngorok', 'Lakukan vaksinasi SE secara teratur, disuntik antibiotik', NULL, '2022-02-25 02:51:39'),
('KP011', 'Surra (Trypanosomiasis/ Penyakit Mubeg)', 'Tanaman kipahit yg digunakan untuk mengatasi surra, dapat mengurangi jumlah T.\r\nevansi dalam sirkulasi darah. Namun, tidak dapat mencegah dan menyembuhkan lesi patologi pada\r\norgan terinfeksi', NULL, '2022-02-25 02:53:34'),
('KP012', 'Diarre', 'Untuk menggantikan cairan tubuh yang hilang akibat diare pada ternak dapat diberikan cairan elektrolit terutama air, bikarbonat, sodium, dan potassium atau larutan garam agar tidak terjadi dehidrasi yang lebih lanjut.', NULL, NULL),
('KP013', 'Keracunan Pakan', 'Memberi ternak dengan pakan sorgum atau tanaman lain saat tingginya telah mencapai 50 – 60 cm. Tanaman muda yang tumbuh cepat memiliki kandungan glikosida sianogenik tertinggi, terutama pada daun baru dan ujung lunak. Jangan mengambil tanaman dengan tunas muda.\r\n– Jangan mengambil tanaman selama musim kemarau ketika pertumbuhan tanaman terhambat, tanaman layu atau terpelintir. Kekeringan meningkatkan peluang peningkatan kadar sianida karena pertumbuhan melambat dan ketidakmampuan tanaman untuk menua/masak akan mendukung pembentukan senyawa sianogenik di daun. Jangan mengambil tanaman pada musim kering sampai 4 – 5 hari setelah turun hujan.\r\n– Jangan mengambil hijauan yang memiliki potensi racun saat cuaca dingin (termasuk di malam hari). Adanya suhu dingin memungkinkan konversi menjadi hidrogen sianida di dalam tanaman.\r\n– Jika kadar sianida tinggi diduga ada dalam suatu tanaman, jangan berikan tanaman tersebut dalam kondisi segar. Ketika hijauan dipotong-potong, biarkan kering sepenuhnya sehingga sianida akan menguap. Biarkan pengeringan lambat dan menyeluruh karena racun dalam tanaman tetap bertahan dalam kondisi lembab dan basah. Tunda pemberian silase 6 hingga 8 minggu setelah proses pembuatan silase.', NULL, '2022-02-25 02:54:51'),
('KP014', 'Kembung Bloat ', 'Memberikan anti bloat yang mengandung dimethicone serta minyak nabati yang berasal dari kacang tanah. Minyak nabati bisa disuntikkan pada sapi yang terkena bloat. Atau dapat di konsultasikan pada dokter hewan untuk pemakaian obat yang cocok.', NULL, NULL),
('KP015', 'Pneumonia', 'Pencegahan yang dapat dilakukan dengan melakukan sanitasi kandang yang benar, pengawasan yang ketat terhadap sapi yang sehat. Pisahkan sapi yang sakit pada kandang karantina. Segera berikan vaksin antibiotic untuk memutus siklus pertumbuhan penyebab Pneumonia seperti vaksin tylocin dan vitamin (Biodin). Bila telat penanganan sapi dalam beberapa jam dapat mati.', NULL, '2022-02-25 02:56:58'),
('KP016', 'Arthitis Dan Synovitis', 'Hubungi Dokter Hewan', NULL, '2022-02-25 02:59:48'),
('KP017', 'Pink Eye', 'Selaput lendir dan katup mata menjadi bengkak Kemungkinan muncul opasitas pada mata, Tahi mata mungkin menjadi mucopurulen, Keluarnya air mata yang terus menerus', NULL, NULL),
('KP018', 'Mastitis ', '1. Menjaga kandang untuk tetap bersih. 2. Memakai antiseptik guna pencelupan puting susu saat sebelum dan setelah pemerahan. 3. Memberikan antibiotik berspek trum misalnya peniciline - streptomicine atau Suanovil (spiramycine).', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medik`
--

CREATE TABLE `rekam_medik` (
  `id_rekam_medik` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(18) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tanggal_konsultasi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekam_medik`
--

INSERT INTO `rekam_medik` (`id_rekam_medik`, `nama`, `no_hp`, `alamat`, `username`, `password`, `tanggal_konsultasi`) VALUES
(1, 'yudith', '087823179122', 'jalan sakola', 'tes', '$2y$10$xMaGZQa.nqs98y1IvFNlCuXLXyVsGBhQiaCKqQivAZ/ASAoVZoJXa', '2022-02-20'),
(2, 'tes', '08123123123', 'jalan xxx', 'test', '$2y$10$jVkbe0TSVJHgQnwsr58OVuTCkCc10/h9H3uRaQlcm1I/wUst7wfhu', '2022-02-20'),
(3, 'Wara Ulan Saputri', '081377241610', 'Jln. Dr Sutomo No 276, Padang Timur, Padang', 'wara14', '$2y$10$zE4xBZLw5h859XB6PE/U5.Q9XMQIcm0urUNG.I7/UaNoXWbou2uD6', '2022-02-23'),
(4, 'Aysah Sikumbang', '081377241610', 'Jln. Dr Sutomo No 276, Padang Timur, Padang', 'waraulansaputri', '$2y$10$97o807Y7RUkDpswrsu/WCuTa/bGoFBlXfWLi/L/WxkHn/FZ1eT/5K', '2022-02-23'),
(5, 'antosia', '081377241610', 'Dusun Mandurana, Desa Situmba Julu, Kecamatan Sipirok, Kabupaten Tapanuli Selatan', 'dea123', '$2y$10$QtsxoK8hgMkPcirw9uxJKeVRDIb5yDJx4kE.cgwqbo1STkOs5JdLe', '2022-02-23'),
(6, 'Wara Ulan Saputri', '081377241610', 'Padang', 'wara17', '$2y$10$LKYUPV1MGYv9w0Ug7h1GP.nipA3Tw9sWw3fG9YfKHGlftDA5bgClq', '2022-02-25'),
(7, 'Aysah Sikumbang', '081377241610', 'Jln. Dr Sutomo No 276, Padang Timur, Padang', 'loky123', '$2y$10$5YZhvfeqNs0hjr0jLqrFpO/gfhXLbyrPcuCSgCd6AqZXUw1KQvJTu', '2022-02-25'),
(8, 'Wara Ulan Saputri', '081377241610', 'Jln. Dr Sutomo No 276, Padang Timur, Padang', 'loky123', '$2y$10$mYWferWn7m/YEcwnLaeyr.5GfKWokDfOnshlFQ1XDMDvbnFxeCS/e', '2022-02-25'),
(9, 'Wara Ulan Saputri', '081377241610', 'Jln. Dr Sutomo No 276, Padang Timur, Padang', 'loky123', '$2y$10$.QEvLuD82pjBxG4q/E1mVupaRyQAPlocFp13sZDrlpN3VTGmLOyCa', '2022-02-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `foto`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '1645169887_icon.png', NULL, '$2y$10$4dQ.sNC72poRP6Vvaz1.ZeQxoV2qnncolzND07BUsPUwyVuj2sDo.', 'r5tm2vrKVNXSQ4CrTZXfF3bidcBpsRaYPf97VAfyXwcDaxe0N00Iad1DfYAA', NULL, '2022-02-18 00:38:07'),
(3, 'Wara Ulan Saputri', 'wara.ulan17@gmail.com', '1645609874_DSC01565.JPG', NULL, '$2y$10$UbhCEy2lHMJ1OLdO1xXuPOrU9AWdka9dmqxF3O6WENq.oAOP1ZTSO', 'NWgM7p1RHYE6JiD60J3muwSGI0fiEJDPrf4IZTGhACOoLieKZvAUHrvDGY9e', '2022-02-23 02:51:14', '2022-02-23 02:51:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gejala_penyakit_gejala_foreign` (`id_gejala`),
  ADD KEY `gejala_penyakit_penyakit_foreign` (`id_penyakit`);

--
-- Indeks untuk tabel `pakar`
--
ALTER TABLE `pakar`
  ADD PRIMARY KEY (`id_pakar`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `rekam_medik`
--
ALTER TABLE `rekam_medik`
  ADD PRIMARY KEY (`id_rekam_medik`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT untuk tabel `pakar`
--
ALTER TABLE `pakar`
  MODIFY `id_pakar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rekam_medik`
--
ALTER TABLE `rekam_medik`
  MODIFY `id_rekam_medik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  ADD CONSTRAINT `fk_gejala` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_penyakit` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
