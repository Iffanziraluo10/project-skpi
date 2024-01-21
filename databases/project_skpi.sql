-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 02:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_skpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas_usulan`
--

CREATE TABLE `berkas_usulan` (
  `id_berkas` int(11) NOT NULL,
  `id_usulan` int(11) NOT NULL,
  `kd_kompetensi` varchar(30) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `desk_bing` varchar(255) NOT NULL,
  `no_sertif` varchar(50) NOT NULL,
  `tingkat` varchar(50) NOT NULL,
  `jumlah_jam` varchar(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  `link_file` varchar(255) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkas_usulan`
--

INSERT INTO `berkas_usulan` (`id_berkas`, `id_usulan`, `kd_kompetensi`, `id_sub`, `deskripsi`, `desk_bing`, `no_sertif`, `tingkat`, `jumlah_jam`, `file`, `link_file`, `catatan`) VALUES
(1, 1, 'KP001', 1, 'Badan Nasional Sertifikasi Profesi Pengembangan Website Web Development Kualifikasi : Junior Web Developer', 'National Board Of Professional Certification Website Development Web Development Qualification: Junior Web Developer', '62090 2513 3 0006645 2021', 'nasional', '64 jam', '659c1899b75494.75266775.pdf', 'https://bit.ly/3vwPA3y', '-'),
(3, 3, 'KP002', 3, 'Character Building: Smart Human Resource in The Spirit of Saint Thomas Catholic University for NKRI', 'Character Building: Smart Human Resource in The Spirit of Saint Thomas Catholic University for NKRI', '-', 'lokal', '48 jam', '659ba75d22cb80.39673218.pdf', 'https://bit.ly/3H8rmPA', '-'),
(4, 3, 'KP002', 3, 'Pengenalan Kehidupan Kampus Mahasiswa Baru (PKKMB) Universitas Katolik Santo Thomas Medan 2019', 'Introduction to Campus Life of New Students Santo Thomas Catholic University Medan 2019', '0056/UKS-B.Ak/A.52/2019', 'lokal', '72 jam', '659ba938957458.34995125.pdf', 'https://bit.ly/3H8rmPA', '-'),
(5, 3, 'KP001', 2, 'Accelerated Competency Trainning and Certification (ACTION) Program titled: Applied Microsoft Office', 'Accelerated Competency Trainning and Certification (ACTION) Program titled: Applied Microsoft Office', '-', 'nasional', '144 jam', '659baa81ebfc21.02836462.pdf', 'https://bit.ly/3H8rmPA', '-'),
(6, 3, 'KP004', 4, 'Panitia Pengenalan Kehidupan Kampus Mahasiswa Baru (PKKMB) T.A. 2023/2024 Universitas Katolik Santo Thomas', 'Committee for the introduction of new student campus life (PKKMB) T.A 2023/2024 Saint Thomas Catholic University.', '0073/UKS/A.52/09/2023', 'lokal', '72 jam', '659bacb86228e5.81931280.pdf', 'https://bit.ly/3H8rmPA', '-'),
(7, 3, 'KP001', 1, 'TeachCast with Oxford course: General English Level 5', 'TeachCast with Oxford course: General English Level 5', '-', 'internasional', '720 jam', '659badd657ed65.57563347.pdf', 'https://bit.ly/3H8rmPA', '-'),
(8, 3, 'KP004', 4, 'Ketua Himpunan Program Studi Teknik Informatika Fakultas Ilmu Komputer Universitas Katolik Santo Thomas Periode 2022/2023.', 'Chairman Of The Association Of Informatics Engineering Study Program Faculty Of Computer Science Catholic University Of Santo Thomas For The Period 2022/2023.', '001.a/FIKOM-TI-UKS/D.10/2022', 'lokal', '-', '659bb08ad6cde5.47807948.pdf', 'https://bit.ly/3H8rmPA', '-'),
(9, 3, 'KP004', 4, 'Panitia Pengenalan Kehidupan Kampus Mahasiswa Baru (PKKMB) T.A. 2022/2023 Universitas Katolik Santo Thomas', 'Committee for the introduction of new student campus life (PKKMB) T.A. 2022/2023 Saint Thomas Catholic University', '2462/UKS/A.52/2022', 'lokal', '72 jam', '659bb354add905.09516200.pdf', 'https://bit.ly/3H8rmPA', '-'),
(10, 3, 'KP004', 4, 'Panitia Seminar Nasional Inovasi Sains Teknologi Informasi Komputer Fakultas Ilmu Komputer Universitas Katolik Santo Thomas', 'National Seminar Committee On Innovation Science Computer Information Technology Faculty Of Computer Science Catholic University Of Saint Thomas', '1004/UKS-B.Ak/C.13/2023', 'nasional', '24 jam', '659bb4be343f81.16610592.pdf', 'https://bit.ly/3H8rmPA', '-'),
(11, 1, 'KP001', 2, 'Accelerated Competency Training and Certification (ACTION) Program titled : Applied Microsoft Office by Trust Training Partners', 'Accelerated Competency Training and Certification (ACTION) Program titled : Applied Microsoft Office by Trust Training Partners', '-', 'nasional', '72 jam', '659c1956c00a70.75634849.pdf', 'https://bit.ly/3vwPA3y', '-'),
(12, 1, 'KP002', 3, 'Pelatihan Junior Web Developer oleh Badan Pengembangan Pelatihan Teknologi Informasi dan Komunikasi (BPPTIK) Kementerian Komunikasi dan Informatika', 'Junior Web Developer Training by Information and Communication Technology Training Development Agency Ministry of Communication and Information', '3979/SK/BPPTIK.32/07/2021', 'nasional', '67 jam', '659c19d9b31320.86793212.pdf', 'https://bit.ly/3vwPA3y', '-'),
(13, 1, 'KP002', 3, 'Pelatihan dan Sertifikasi Junior Web Developer oleh Badan Pengembangan Pelatihan Teknologi Informasi dan Komunikasi (BPPTIK) Kementerian Komunikasi dan Informatika', 'Junior Web Developer Training and certification by the information and Communication Technology Training Development Agency Ministry of Communication and Information Technology', '5885/SK/BPPTIK.32/08/2021', 'nasional', '67 jam', '659c1ac07ac5f2.75661716.pdf', 'https://bit.ly/3vwPA3y', '-'),
(14, 1, 'KP002', 3, 'Character Building Program Smart Human Resources in The Spirit Of Saint Thomas Catholic University in Tanjung Pinggir-Pematang Siantar', 'Character Building Program Smart Human Resources in The Spirit Of Saint Thomas Catholic University in di Tanjung Pinggir-Pematang Siantar', '-', 'lokal', '36 jam', '659c1b90541242.59683374.pdf', 'https://bit.ly/3vwPA3y', '-'),
(15, 1, 'KP002', 3, '1st International Seminar On Strategic Road Towards A World Class University Conducted by Saint Thomas Catholic University', '1st International Seminar On Strategic Road Towards A World Class University Conducted by Saint Thomas Catholic University', '-', 'internasional', '1 jam', '659c1c85aa8df4.16564622.pdf', 'https://bit.ly/3vwPA3y', '-'),
(16, 1, 'KP002', 3, '2nd International Seminar On Financial Survival in The Era of Pandemic Coronavirus Disease (COVID-19) Conducted by Faculty Economics, Saint Thomas Catholic University', '2nd International Seminar On Financial Survival in The Era of Pandemic Coronavirus Disease (COVID-19) Conducted by Faculty Economics, Saint Thomas Catholic University', '04/UST/OIA/C.16/2021', 'internasional', '2 jam', '659c1d0472ad94.27516371.pdf', 'https://bit.ly/3vwPA3y', '-'),
(17, 1, 'KP002', 3, '3rd International Seminar On Empowerment of Human Resources & Re-Designing, Re-Engineering of Computer Science Technology to be More Efficient for Education, Bussiness, and Global Competitiveness International Conference on Artificial Intelligence Conduct', '3rd International Seminar On Empowerment of Human Resources & Re-Designing, Re-Engineering of Computer Science Technology to be More Efficient for Education, Bussiness, and Global Competitiveness International Conference on Artificial Intelligence Conduct', '05/UST/OIA/C.16/2021', 'internasional', '2 jam', '659c1dc0d7b9b6.01730119.pdf', 'https://bit.ly/3vwPA3y', '-'),
(18, 1, 'KP002', 3, 'Diskusi Daring Obrolan Peneliti (OPini) : Suaramu untuk Indonesia Maju yang diselenggarakan oleh Badan Penelitian dan Pengembangan Hukum dan Hak Asasi Manusia Kementerian Hukum dan Hak Asasi Manusia', 'Online Discussion researcher chat : Suaramu untuk Indonesia Maju organized by the law and Human Rights Research and Development Agency of the Ministry of Law and Human Rights', 'PPH.KP. 12.46 - 1730', 'nasional', '2 jam', '659c1e448c9fe0.07885725.pdf', 'https://bit.ly/3vwPA3y', '-'),
(19, 1, 'KP002', 3, 'Focus Group Discussion dengan tema Arah Perubahan Undang-Undang Nomor 6 Tahun 2014 tentang Desa yang diselenggarakan oleh Universitas Katolik Santo Thomas Medan dengan Badan Keahlian DPR RI', 'Focus Group Discussion with the theme of the direction of changes in Law No. 6 of 2014 on the village organized by the Catholic University of Santo Thomas Medan with the Badan Keahlian DPR RI', '-', 'lokal', '2 jam', '659c1f34d303d6.22216482.pdf', 'https://bit.ly/3vwPA3y', '-'),
(20, 1, 'KP002', 3, 'Entrepreneur Webinar Develop Your Community : Become an Impactful Creativepreneur with Local Brand yang diadakan oleh Generasi Baru Indonesia (GenBI) Korkom Semarang', 'Entrepreneur Webinar Develop Your Community: Become an Impactful Creativepreneur with Local Brand held by Genbi Korkom Semarang', '569/SR-PS/GENBI-SMG/VII/2021', 'nasional', '3 jam', '659c203ad0db86.69041654.pdf', 'https://bit.ly/3vwPA3y', '-'),
(21, 1, 'KP002', 3, 'Literasi Digital Nasional; Indonesia Makin Cakap Digital dengan tema : STOP CYBERBULLYING ! yang diselenggarakan oleh Kementerian Komunikasi dan Informatika Republik Indonesia', 'National Digital Literacy; Indonesia increasingly capable of Digital with the theme: STOP CYBERBULLYING ! organized by the Ministry of communication and information of the Republic of Indonesia', '2636881/11-4252/LITDIG/2021', 'nasional', '3 jam', '659c20fa2f3f15.53222127.pdf', 'https://bit.ly/3vwPA3y', '-'),
(22, 1, 'KP002', 3, 'Seminar Makin Cakap Digital 2023 Komunitas Sumatera Bertema Ayo! Sebarkan Nilai Positif di Dunia Digital yang diselenggarakan Kominfo', 'Seminar Makin Cakap Digital 2023 Sumatran Community Themed Ayo! Spread positive values in the Digital world organized by Kominfo', '23494761/51-26501/LITDIG/2023', 'regional', '2 jam', '659c2173ed33e0.04663382.pdf', 'https://bit.ly/3vwPA3y', '-'),
(23, 1, 'KP002', 3, 'Pengenalan Kehidupan Kampus Mahasiswa Baru (PKKMB) Universitas Katolik Santo Thomas Tahun 2019', 'Introduction of new student campus life of Saint Thomas Catholic University in 2019', '0056/UKS-Ak/A.52/2019', 'lokal', '36 jam', '659c22185970a4.96759077.pdf', 'https://bit.ly/3vwPA3y', '-'),
(24, 1, 'KP002', 3, 'Seminar Bisnis Digital membantu Para Pebisnis Tumbuh Dashyat di Era Digital', 'Digital business Seminar helps business people grow tremendously in the Digital Age', 'KBD.358922.1020', 'nasional', '-', '659c22a2777653.63122804.pdf', 'https://bit.ly/3vwPA3y', '-'),
(25, 1, 'KP002', 3, 'Seminar Daring Universal Peace Federation dengan tema: The World at a Turning Point: The Role of Youth and Students in Peace-Building', 'Seminar Daring Universal Peace Federation dengan tema: The World at a Turning Point: The Role of Youth and Students in Peace-Building', '-', 'nasional', '36 jam', '659c2389341804.52465385.pdf', 'https://bit.ly/3vwPA3y', '-'),
(26, 1, 'KP002', 3, 'Seminar Studium Generale Data Science yang diselenggarakan oleh Fakultas Ilmu Komputer, Universitas Katolik Santo Thomas', 'Seminar Studium Generale Data Science organized by the Faculty of Computer Science, Catholic University of Saint Thomas', '-', 'lokal', '2 jam', '659c242c3666a6.70968786.pdf', 'https://bit.ly/3vwPA3y', '-'),
(27, 1, 'KP002', 3, 'Seminar Study Abroad with Schoters and Universitas Katolik St. Thomas Sumatera Utara', 'Seminar Study Abroad with Schoters and Universitas Katolik St. Thomas Sumatera Utara', '-', 'lokal', '2 jam', '659c24cf17f555.47441757.pdf', 'https://bit.ly/3vwPA3y', '-'),
(28, 1, 'KP002', 3, 'Seminar Nasional dengan tema : Understanding Human Learning & The Art of Managing 4.0 Memahami Hakekat Manusia dalam Belajar dan Menjadi Pemimpin era 4.0', 'National Seminar with the theme: Understanding Human Learning & the Art of Managing 4.0 understanding the human nature in learning and becoming a leader of era 4.0', '90038817202102', 'nasional', '2 jam', '659c2627ca5861.99211880.pdf', 'https://bit.ly/3vwPA3y', '-'),
(29, 1, 'KP002', 3, 'Toefl Test bt ELSKILL English Cources', 'Toefl Test bt ELSKILL English Cources', '17614/S-T/ELS/VII/2023', 'internasional', '2 jam', '659c26f6919f81.15323084.pdf', 'https://bit.ly/3vwPA3y', '-'),
(30, 1, 'KP002', 3, 'Seminar Peningkatan Reputasi Akademik Universitas Indonesia Program Artificial Intelligence Online Short Course yang diselenggarakan oleh Fakultas Ilmu Komputer Universitas Indonesia', 'Seminar Universitas Indonesia Academic Reputation Enhancement Grant Artificial Intelligence Online Short Course program organized by Faculty Computer Science, Universitas Indonesia', '-', 'nasional', '2 jam', '659c2d3c5dfc50.78041126.pdf', 'https://bit.ly/3vwPA3y', '-'),
(31, 1, 'KP002', 3, 'International Conference Of Omnibus Omnia (InCOMNIA) Social Management Model Of Big Data on Cyber Crime organized by Office of International Affair in Collaboration with Graduate School of Law, Faculty of Coumpter Science & Faculty of Economics', 'International Conference Of Omnibus Omnia (InCOMNIA) Social Management Model Of Big Data on Cyber Crime organized by Office of International Affair in Collaboration with Graduate School of Law, Faculty of Coumpter Science & Faculty of Economics', '0889/UKS/C.06/2023', 'internasional', '4 jam', '659c2f411d68e7.01890571.pdf', 'https://bit.ly/3vwPA3y', '-'),
(32, 1, 'KP002', 3, 'Webinar 1# Pelatihan dan Penanganan Hoaks dan Penanggulangan Limbah Medis Diselenggarakan oleh Kementerian Komunikasi dan Informatika bekerjasama dengan Kementerian Lingkungan Hidup dan Kehutanan, Komite Penanganan Covid-19 dan Pemulihan Ekonomi Nasional ', 'Webinar 1# training and handling of hoaxes and Medical Waste Management was organized by the Ministry of communication and information in collaboration with the Ministry of Environment and forestry, the Committee for handling Covid-19 and National Economi', '-', 'nasional', '3 jam', '659c2fe6240403.83264695.pdf', 'https://bit.ly/3vwPA3y', '-'),
(33, 1, 'KP004', 4, 'Panitia Fikom Famz Event Fakultas Ilmu Komputer Universitas Katolik Santo Thomas tahun 2022', 'Fikom Famz event committee of the Faculty of Computer Science of the Catholic University of Saint Thomas in 2022', '-', 'lokal', '72 jam', '659c3143c298c3.50217504.pdf', 'https://bit.ly/3vwPA3y', '-'),
(34, 1, 'KP004', 4, 'Panitia Seminar Fakultas Ilmu Komputer Universitas Katolik Santo Thomas dengan tema : Scale Up You Personal Branding & Startup Digital', 'Seminar committee of the Faculty of Computer Science of the Catholic University of Santo Thomas with the theme: Scale Up you Personal Branding & Startup Digital', '-', 'lokal', '3 jam', '659c317ddf0099.69215946.pdf', 'https://bit.ly/3vwPA3y', '-'),
(35, 1, 'KP001', 1, 'TeachCast With Oxford course : General English Level 3', 'TeachCast With Oxford course : General English Level 3', '-', 'internasional', '144 jam', '659c3296d37f75.43600271.pdf', 'https://bit.ly/3vwPA3y', '-'),
(36, 1, 'KP001', 1, 'TeachCast With Oxford course : General English Level 7', 'TeachCast With Oxford course : General English Level 7', '-', 'internasional', '144 jam', '659c32b93bfa94.93989452.pdf', 'https://bit.ly/3vwPA3y', '-'),
(37, 1, 'KP004', 4, 'Panitia Pengenalan Kehidupan Kampus Mahasiswa Baru Universitas Katolik Santo Thomas Tahun Ajaran 2023/2024', 'Committee For The Introduction To Campus Life Of New Students Of The Catholic University Of Saint Thomas Academic Year 2023/2024', '0002/UKS-B.Ak/A.52/2023', 'lokal', '72 jam', '659c34e5f056d6.68995097.pdf', 'https://bit.ly/3vwPA3y', '-'),
(38, 1, 'KP004', 4, 'Panitia Masa Perkenalan Mahasiswa Baru Ikatan Mahasiswa Nias (IMN) tahun 2022', 'The Committee For The Introduction Of New Students Ikatan Mahasiswa Nias (IMN) in 2022', '04/BPH-IMN/X/2022 ', 'lokal', '48 jam', '659c35ed80cff3.87459736.pdf', 'https://bit.ly/3vwPA3y', '-'),
(39, 1, 'KP004', 4, 'Ketua Divisi Informasi dan Komunikasi Himpunan Mahasiswa Sistem Informasi Masa Jabatan 2022/2023', 'Chairman of the information and Communication Division of the Information Systems Student Association for the term of office 2022/2023', '-', 'lokal', '2 jam', '659c36c668f4c2.62010025.pdf', 'https://bit.ly/3vwPA3y', '-'),
(40, 1, 'KP003', 5, 'The Best Graduate From Each Faculty with GPA : 3.95 Study Program of Information System Faculty Computer Science Saint Thomas Catholic University', 'The Best Graduate From Each Faculty with GPA : 3.95 Study Program of Information System Faculty Computer Science Saint Thomas Catholic University', '460/UKS/A.52/XII/2023', 'lokal', '-', '659cc62b6cfb70.92577525.pdf', 'https://bit.ly/3vwPA3y', '-'),
(41, 1, 'KP002', 3, 'Competitive Progamming Competition Mikroskill Ideafuse 2023', 'Competitive Progamming Competition Mikroskill Ideafuse 2023', '-', 'regional', '48 jam', '659cc712452450.24335890.pdf', 'https://bit.ly/3vwPA3y', '-'),
(42, 3, 'KP003', 5, 'The Best Graduate From Each Faculty with GPA : 3.82 Study Program of Informatics Engineering Faculty Computer Science Saint Thomas Catholic University', 'The Best Graduate From Each Faculty with GPA : 3.82 Study Program of Informatics Engineering Faculty Computer Science Saint Thomas Catholic University', '706/UKS/A.52/XII/2023', 'lokal', '-', '659cd0bbd82236.70663846.pdf', 'https://bit.ly/3H8rmPA', '-'),
(43, 4, 'KP004', 4, 'Sekretaris Badan Pengurus Harian Himpunan Mahasiswa Sistem Informasi Periode 2022/2023', 'Secretary Of The Daily Management Board Of The Student Association Of Information Systems Period 2022/2023', '001.a/FIKOM-SI-UKS/D.10/2022', 'lokal', '-', '659cea79c1e871.54137474.pdf', 'https://bit.ly/4aMbxvs', '-'),
(44, 4, 'KP002', 3, 'Focus Group Discussion dengan tema Arah Perubahan Undang-Undang Nomor 6 Tahun 2014 tentang Desa yang diselenggarakan oleh Universitas Katolik Santo Thomas Medan dengan Badan Keahlian DPR RI', 'Focus Group Discussion with the theme of the direction of changes in Law No. 6 of 2014 on the village organized by the Catholic University of Santo Thomas Medan with the Badan Keahlian DPR RI', '-', 'lokal', '3 jam', '659cebcd4b4c00.21389585.pdf', 'https://bit.ly/4aMbxvs', '-'),
(45, 4, 'KP002', 3, 'Character Building Program Smart Human Resources in The Spirit Of Saint Thomas Catholic University Pelatihan di Tanjung Pinggir-Pematang Siantar', 'Character Building Program Smart Human Resources in The Spirit Of Saint Thomas Catholic University Pelatihan di Tanjung Pinggir-Pematang Siantar', '-', 'lokal', '36 jam', '659cec760244c6.41034026.pdf', 'https://bit.ly/4aMbxvs', '-'),
(46, 4, 'KP002', 3, 'Seminar Studium Generale Data Science yang diselenggarakan oleh Fakultas Ilmu Komputer, Universitas Katolik Santo Thomas', 'Seminar Studium Generale Data Science organized by the Faculty of Computer Science, Catholic University of Saint Thomas', '-', 'lokal', '3 jam', '659ced3219cd97.81741115.pdf', 'https://bit.ly/4aMbxvs', '-'),
(47, 4, 'KP004', 4, 'Panitia Fikom Famz Event Fakultas Ilmu Komputer Universitas Katolik Santo Thomas tahun 2022', 'Fikom Famz event committee of the Faculty of Computer Science of the Catholic University of Saint Thomas in 2022', '-', 'lokal', '72 jam', '659cedb8564579.87400654.pdf', 'https://bit.ly/4aMbxvs', '-'),
(48, 4, 'KP002', 3, '2nd International Seminar On Financial Survival in The Era of Pandemic Coronavirus Disease (COVID-19) Conducted by Faculty Economics, Saint Thomas Catholic University', '2nd International Seminar On Financial Survival in The Era of Pandemic Coronavirus Disease (COVID-19) Conducted by Faculty Economics, Saint Thomas Catholic University', '04/UST/OIA/C.16/2021', 'internasional', '3 jam', '659cee2c1b8017.33743518.pdf', 'https://bit.ly/4aMbxvs', '-'),
(49, 4, 'KP002', 3, 'Literasi Digital Nasional Indonesia Makin Cakap Digital dengan tema Menjadi Pelopor Masyarakat Digital yang diselenggarakan Kementerian Komunikasi dan Informatika', 'Indonesia National Digital Literacy is increasingly capable of Digital with the theme of being a pioneer of Digital Society organized by the Ministry of communication and information', '1556748/16-4416/LITDIG/2021', 'nasional', '3 jam', '659cf0dc0b6720.87120740.pdf', 'https://bit.ly/4aMbxvs', '-'),
(50, 4, 'KP001', 2, 'Accelerated Competency Training and Certification (ACTION) Program titled : Applied Microsoft Office by Trust Training Partners', 'Accelerated Competency Training and Certification (ACTION) Program titled : Applied Microsoft Office by Trust Training Partners', '-', 'nasional', '72 jam', '659cf114cd6c04.35645971.pdf', 'https://bit.ly/4aMbxvs', '-'),
(51, 4, 'KP002', 3, 'Seminar Daring Universal Peace Federation dengan tema: The World at a Turning Point: The Role of Youth and Students in Peace-Building', 'Seminar Daring Universal Peace Federation dengan tema: The World at a Turning Point: The Role of Youth and Students in Peace-Building', '-', 'nasional', '3 jam', '659cf1f7a2ffd4.47302744.pdf', 'https://bit.ly/4aMbxvs', '-'),
(52, 4, 'KP002', 3, 'Pengenalan Kehidupan Kampus Mahasiswa Baru Universitas Katolik Santo Thomas Tahun 2019', 'Introduction To Campus Life Of Saint Thomas Catholic University Freshmen In 2019', '0056/UKS-Ak/A.52/2019', 'lokal', '72 jam', '659d01962efe76.62524457.pdf', 'https://bit.ly/4aMbxvs', '-'),
(53, 4, 'KP002', 3, 'Seminar Study Abroad with Schoters and Universitas Katolik St. Thomas Sumatera Utara', 'Seminar Study Abroad with Schoters and Universitas Katolik St. Thomas Sumatera Utara', '-', 'lokal', '2 jam', '659d01da107eb2.89565039.pdf', 'https://bit.ly/4aMbxvs', '-'),
(54, 4, 'KP002', 3, 'Seminar Bisnis Digital membantu Para Pebisnis Tumbuh Dashyat di Era Digital', 'Digital business Seminar helps business people grow tremendously in the Digital Age', 'KBD.358922. 1020', 'nasional', '3 jam', '659d024c0f7bf6.45488072.pdf', 'https://bit.ly/4aMbxvs', '-'),
(55, 4, 'KP004', 4, 'Panitia Seminar Fakultas Ilmu Komputer Universitas Katolik Santo Thomas dengan tema : Scale Up You Personal Branding & Startup Digital', 'Seminar committee of the Faculty of Computer Science of the Catholic University of Santo Thomas with the theme: Scale Up you Personal Branding & Startup Digital', '-', 'lokal', '2 jam', '659d0298ef1b92.46026939.pdf', 'https://bit.ly/4aMbxvs', '-'),
(56, 4, 'KP002', 3, 'Diskusi Daring Obrolan Peneliti (OPini) : Suaramu untuk Indonesia Maju yang diselenggarakan oleh Badan Penelitian dan Pengembangan Hukum dan Hak Asasi Manusia Kementerian Hukum dan Hak Asasi Manusia', 'Online Discussion researcher chat (opinion): Suaramu untuk Indonesia Maju organized by the law and Human Rights Research and Development Agency of the Ministry of Law and Human Rights', 'PPH.KP. 12.46 - 1730', 'nasional', '3 jam', '659d02ee8cb532.62017879.pdf', 'https://bit.ly/4aMbxvs', '-'),
(57, 4, 'KP002', 3, '1st International Seminar On Strategic Road Towards A World Class University Conducted by Saint Thomas Catholic University', '1st International Seminar On Strategic Road Towards A World Class University Conducted by Saint Thomas Catholic University', '-', 'internasional', '3 jam', '659d033e256350.16388089.pdf', 'https://bit.ly/4aMbxvs', '-'),
(58, 4, 'KP002', 3, 'Toefl Test bt ELSKILL English Cources', 'Toefl Test bt ELSKILL English Cources', '17449/S-T/ELS/VII/2023', 'internasional', '2 jam', '659d039dba4235.22523423.pdf', 'https://bit.ly/4aMbxvs', '-'),
(59, 4, 'KP002', 3, 'Seminar Nasional dengan tema : Understanding Human Learning & The Art of Managing 4.0 Memahami Hakekat Manusia dalam Belajar dan Menjadi Pemimpin era 4.0', 'National Seminar with the theme: Understanding Human Learning & the Art of Managing 4.0 understanding the human nature in learning and becoming a leader of era 4.0', '90038817202102', 'nasional', '3 jam', '659d03f7be3004.37226419.pdf', 'https://bit.ly/4aMbxvs', '-'),
(60, 4, 'KP002', 3, '3rd International Seminar On Empowerment of Human Resources & Re-Designing, Re-Engineering of Computer Science Technology to be More Efficient for Education, Bussiness, and Global Competitiveness International Conference on Artificial Intelligence Conduct', '3rd International Seminar On Empowerment of Human Resources & Re-Designing, Re-Engineering of Computer Science Technology to be More Efficient for Education, Bussiness, and Global Competitiveness International Conference on Artificial Intelligence Conduct', '05/UST/OIA/C.16/2021', 'internasional', '4 jam', '659d0466c43eb5.55232001.pdf', 'https://bit.ly/4aMbxvs', '-'),
(61, 4, 'KP003', 5, 'The Best Graduate From Each Faculty with GPA : 3.86 Study Program of Information System Faculty Computer Science Saint Thomas Catholic University', 'The Best Graduate From Each Faculty with GPA : 3.86 Study Program of Information System Faculty Computer Science Saint Thomas Catholic University', '463/UKS/A.52/XII/2023', 'lokal', '3 jam', '659d04d1ab1891.06499316.pdf', 'https://bit.ly/4aMbxvs', '-'),
(62, 4, 'KP004', 4, 'Panitia Seminar Nasional Inovasi Sains Teknologi Informasi Komputer Fakultas Ilmu Komputer Universitas Katolik Santo Thomas tahun 2023', 'Committee of the National Seminar on innovation in Computer Information Technology Faculty of Computer Science Catholic University of Saint Thomas in 2023', '1004/UKS-B.Ak/C.13/2023', 'nasional', '4 jam', '659d11fad89c03.30995073.pdf', 'https://bit.ly/4aMbxvs', '-'),
(63, 5, 'KP001', 2, 'Accelerated Competency Training and Certification (ACTION) Program titled : Applied Microsoft Office by Trust Training Partners', 'Accelerated Competency Training and Certification (ACTION) Program titled : Applied Microsoft Office by Trust Training Partners', '-', 'nasional', '144 jam', '659d151a8123f8.98269209.pdf', 'https://bit.ly/3HaDY8D', '-'),
(64, 5, 'KP002', 3, 'Character Building Program Smart Human Resources in The Spirit Of Saint Thomas Catholic University - Pelatihan di Tanjung Pinggir-Pematang Siantar', 'Character Building Program Smart Human Resources in The Spirit Of Saint Thomas Catholic University - Pelatihan di Tanjung Pinggir-Pematang Siantar', '-', 'lokal', '36 jam', '659d15b6ecf2a0.26049569.pdf', 'https://bit.ly/3HaDY8D', '-'),
(65, 5, 'KP004', 4, 'Panitia Pengenalan Kehidupan Kampus Mahasiswa Baru Universitas Katolik Santo Thomas Tahun Ajaran 2023/2024', 'Committee For The Introduction To Campus Life Of New Students Of The Catholic University Of Saint Thomas Academic Year 2023/2024', '0002/UKS-B.Ak/A.52/2023', 'lokal', '36 jam', '659d164b653974.15326495.pdf', 'https://bit.ly/3HaDY8D', '-'),
(66, 5, 'KP002', 3, 'Pengenalan Kehidupan Kampus Mahasiswa Baru Universitas Katolik Santo Thomas Tahun 2019', 'Introduction To Campus Life Of Saint Thomas Catholic University Freshmen In 2019', '0056/UKS-Ak/A.52/2019', 'lokal', '36 jam', '659d1713ecbce5.21865476.pdf', 'https://bit.ly/3HaDY8D', '-'),
(67, 5, 'KP001', 2, 'TeachCast With Oxford course : General English Level 5', 'TeachCast With Oxford course : General English Level 5', '-', 'internasional', '177 jam', '659d1769e82f45.53371229.pdf', 'https://bit.ly/3HaDY8D', '-'),
(68, 5, 'KP002', 3, 'Kegiatan Literasi Digital pada Camp Iman PERMATA GBKP 2023', 'Digital literacy activities at Camp Iman PERMATA GBKP 2023', '-', 'regional', '48 jam', '659d17dbbea9a3.77705054.pdf', 'https://bit.ly/3HaDY8D', '-'),
(69, 5, 'KP004', 4, 'Bendahara Badan Eksekutif Mahasiswa Fakultas Ilmu Komputer Periode 2022/2023', 'Treasurer Of The Student Executive Board Of The Faculty Of Computer Science For The Period 2022/2023', '036/FIKOM-UKS/D.10/2022', 'lokal', '-', '659d18b6aaeda6.30932920.pdf', 'https://bit.ly/3HaDY8D', '-'),
(70, 5, 'KP004', 4, 'Panitia Seminar Nasional Inovasi Sains Teknologi Informasi Komputer Fakultas Ilmu Komputer Universitas Katolik Santo Thomas tahun 2023', 'Committee of the National Seminar on innovation in Computer Information Technology Faculty of Computer Science Catholic University of Saint Thomas in 2023', ' 1004/UKS-B.Ak/C.13/2023', 'nasional', '4 jam', '659d1934e30de2.58290315.pdf', 'https://bit.ly/3HaDY8D', '-'),
(71, 5, 'KP003', 5, 'The Best Graduate From Each Faculty with GPA : 3.81 Study Program of Informatics Engineering Faculty Computer Science Saint Thomas Catholic University', 'The Best Graduate From Each Faculty with GPA : 3.81 Study Program of Informatics Engineering Faculty Computer Science Saint Thomas Catholic University', '685/UKS/A.52/XII/2023', 'lokal', '-', '659d1994a86680.87244083.pdf', 'https://bit.ly/3HaDY8D', '-'),
(72, 5, 'KP002', 3, 'Seminar Satu Hari dengan tema Resilience at Work', 'One Day Seminar Theme Resilience at Work', '0682/UKS/A.52/12/2023', 'lokal', '12 jam', '659d1a0d9f5b61.83271719.pdf', 'https://bit.ly/3HaDY8D', '-'),
(73, 6, 'KP001', 1, 'Pelatihan dan Sertifikasi Junior Web Developer', 'Junior Web Developer Training and certification', 'JWD/KS-01/IX/2021', 'nasional', '48 Jam', '659d606b5faba5.01858065.pdf', 'https://bit.ly/3vwPA3y', '-');

-- --------------------------------------------------------

--
-- Table structure for table `detail_subkomp`
--

CREATE TABLE `detail_subkomp` (
  `id_detail` int(11) NOT NULL,
  `tingkat` varchar(30) NOT NULL,
  `bobot` decimal(4,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_subkomp`
--

INSERT INTO `detail_subkomp` (`id_detail`, `tingkat`, `bobot`) VALUES
(1, 'lokal', '2.5'),
(2, 'regional', '3.0'),
(3, 'nasional', '4.5'),
(4, 'internasional', '6.0');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `kd_fakultas` varchar(11) NOT NULL,
  `nama_fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `kd_fakultas`, `nama_fakultas`) VALUES
(1, 'K01', 'Fakultas Ilmu Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi`
--

CREATE TABLE `kompetensi` (
  `id_kompetensi` int(11) NOT NULL,
  `kd_kompetensi` varchar(11) NOT NULL,
  `jenis_kompetensi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kompetensi`
--

INSERT INTO `kompetensi` (`id_kompetensi`, `kd_kompetensi`, `jenis_kompetensi`) VALUES
(1, 'KP001', 'Sertifikat Kompetensi'),
(2, 'KP002', 'Pengembangan Sikap dan Tanggung Jawab'),
(5, 'KP003', 'Prestasi dan Penghargaan'),
(6, 'KP004', 'Pengalaman Organisasi');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_ijazah` varchar(100) NOT NULL,
  `tgl_lulus` date NOT NULL,
  `gelar` varchar(100) NOT NULL,
  `kode_skpi` varchar(20) NOT NULL,
  `kd_prodi` varchar(11) NOT NULL,
  `profil` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama_mhs`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `email`, `password`, `no_ijazah`, `tgl_lulus`, `gelar`, `kode_skpi`, `kd_prodi`, `profil`, `status`) VALUES
(3, '190810025', 'Tiffany Prayoga Ziraluo', 'Surabaya', '2001-01-10', 'Laki-laki', 'scoutindonesia@gmail.com', 'cdb0b630a5210e109a3db148fd1deae1', '572012023000074', '2023-08-31', 'Sarjana Komputer (S.Kom)', '01', 'P01', '', 1),
(6, '190810040', 'Pesta Kristina Simamora', 'Balige', '2000-12-25', 'Perempuan', 'simamorapesta2001@gmail.com', 'a096c6c9854115b8249e88897900c687', '572012023000128', '2023-09-29', 'Sarjana Komputer (S.Kom)', '01', 'P01', '', 1),
(10, '190840035', 'Francis Wildan Hutasoit', 'Medan', '2001-06-07', 'Laki-laki', 'franciswildan@gmail.com', '2e81316f09f70b62c2d1c5269729d8ea', '552012023000490', '2023-11-10', 'Sarjana Komputer (S.Kom)', '01', 'P03', '65a0dc5ddff8c8.22931521.jpeg', 1),
(11, '190840019', 'Thesa Angelia Kristie Br Ginting', 'Kabanjahe', '2001-03-20', 'Perempuan', 'thesaangel2@gmail.com', '90f01ef3316ff1d6d35014ab41a58fcf', '552012023000407', '2023-11-09', 'Sarjana Komputer (S.Kom)', '01', 'P03', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `kd_prodi` varchar(11) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `no_sk` varchar(100) NOT NULL,
  `akreditasi` varchar(50) NOT NULL,
  `kd_fakultas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `kd_prodi`, `nama_prodi`, `no_sk`, `akreditasi`, `kd_fakultas`) VALUES
(1, 'P01', 'Sistem Informasi', '045/SK/LAM-INFOKOM/Ak/S/IV/2023', 'BAIK SEKALI', 'K01'),
(3, 'P03', 'Teknik Informatika', '435/SK/BAN-PT/Akred/S/III/2019', 'B', 'K01'),
(6, 'P04', 'Sains Data', '-', '-', 'K01');

-- --------------------------------------------------------

--
-- Table structure for table `skpi`
--

CREATE TABLE `skpi` (
  `id_skpi` int(11) NOT NULL,
  `kode_skpi` varchar(20) NOT NULL,
  `jenis_skpi` varchar(255) NOT NULL,
  `sikap` text NOT NULL,
  `sikap_bing` text NOT NULL,
  `ket_umum` text NOT NULL,
  `ket_bing` text NOT NULL,
  `pengetahuan` text NOT NULL,
  `peng_bing` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skpi`
--

INSERT INTO `skpi` (`id_skpi`, `kode_skpi`, `jenis_skpi`, `sikap`, `sikap_bing`, `ket_umum`, `ket_bing`, `pengetahuan`, `peng_bing`) VALUES
(1, '01', 'Data Analyst', 'Bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius., Menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama,moral, dan etika., Berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, bernegara, dan kemajuan peradaban berdasarkan Pancasila., Berperan sebagai warga negara yang bangga dan cinta tanah air, memiliki nasionalisme serta rasa tanggungjawab pada negara dan bangsa., Menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang lain., Bekerja sama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan., Taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara., Menginternalisasi nilai, norma, dan etika akademik., Menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri., Menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan., Mewujudkan nilai-nilai luhur Santo Thomas Aquinas.', 'Being faithful to God the Almighty is shown by an individual’s sound religious acts and attitude., Upholding humanity’s values while performing duties based on religious, moral, and ethical values., Contributing to people’s quality of life, nation-building, statesmanship, and advancement of civilization based on the Five Principles., Taking part as citizens who are proud of their nation and who demonstrate nationalism and responsibility as necessary attributes of being good citizens., Appreciating the diversity of cultures, thoughts, religions, beliefs, and others original opinions and findings., Demonstrating collaboration and genuine concern for society and the environment., Being lawful and truthful as community members and citizens., Internalizing academic values, norms, and ethics., Demonstrating a high level of responsibility while performing duties requiring independent competence and performance., Internalizing the spirit of independence, struggle, and entrepreneurship., Embody the noble values of Saint Thomas Aquinas.', 'Mampu menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam konteks pengembangan atau implementasi ilmu pengetahuan dan teknologi yang memperhatikan dan menerapkan nilai humaniora yang sesuai dengan bidang keahliannya., Mampu menunjukkan kinerja mandiri, bermutu, dan terukur., Mampu mengkaji implikasi pengembangan atau implementasi ilmu pengetahuan teknologi yang memperhatikan dan menerapkan nilai humaniora sesuai dengan keahliannya berdasarkan kaidah, tata cara dan etika ilmiah dalam rangka menghasilkan solusi, gagasan, desain atau kritik seni, menyusun deskripsi saintifik hasil kajiannya dalam bentuk skripsi atau laporan tugas akhir, dan mengunggahnya dalam laman perguruan tinggi., Menyusun deskripsi saintifik hasil kajian tersebut di atas dalam bentuk skripsi atau laporan tugas akhir, dan mengunggahnya dalam laman perguruan tinggi., Mampu mengambil keputusan secara tepat dalam konteks penyelesaian masalah di bidang keahliannya, berdasarkan hasil analisis informasi dan data., Mampu memelihara dan mengembangkan jaringan kerja dengan pembimbing, kolega, sejawat baik di dalam maupun di luar lembaganya., Mampu bertanggungjawab atas pencapaian hasil kerja kelompok dan melakukan supervisi dan evaluasi terhadap penyelesaian pekerjaan yang ditugaskan kepada pekerja yang berada di bawah tanggungjawabnya., Mampu melakukan proses evaluasi diri terhadap kelompok kerja \r\nyang berada dibawah tanggung jawabnya, dan mampu mengelola pembelajaran secara mandiri., Mampu mendokumentasikan, menyimpan, mengamankan, dan menemukan kembali data untuk menjamin kesahihan dan mencegah plagiasi.', 'Being able to apply logical, critical, systematic, and innovative thinking for the development and implementation of science and technology while applying humanities values to the respective skill., Being able to demonstrate independence, quality, and measured independence., Being capable of analyzing implications of the development or implementation of science, technology, and humanities values based on respective compliance with academic methods, procedures, and ethics in order to deliver solutions and ideas., Presenting such scientific description in the form of a thesis or final report and uploading it onto the university’s website., Being capable of making appropriate decisions based on information and data analysis within a skill-based context., Being able to maintain and develop a network with counselors, colleagues both in and outside the academic institution., Being able to take responsibility for teamwork achievement and for supervision and evaluation of duties delegated to their subordinates., Being capable of undertaking teamwork evaluation under their responsibility and independent learning management., Being able to manage documentation and data storage, security and retrieval to ensure validity and prevent plagiarism.', 'Menguasai konsep teoritis ilmu komputer/informatika., Menguasai bahasa pemrograman tertentu., Menguasai metodologi software development., Menguasai SDLC (requirement, design, \r\nimplementation/construction, testing, maintenance)., Menguasai Software Quality Assurance (SQA)., Mampu menghasilkan perangkat lunak sesuai kebutuhan tertentu., Mampu merekomendasikan dan menerapkan metodologi terbaik dalam sebuah proyek software development., Mampu menganalisis sistem., Mampu menentukan kualitas perangkat lunak.', 'Having    a    good  command  of    theoretical  concepts  of  computer science/informatics., Having a good command of a certain programming language., Having a good command of software development methodology., Having      a      good  command   of	SDLC   (requirements,   design, implementation/construction, testing, maintenance)., Having a good command of software quality assurance (SQA)., Able to produce software according to specific needs., Able to recommend and apply the best methodology in a software development project., Able to analyze the system., Able to determine the quality of the software.'),
(2, '02', 'Progamming', 'Baik Sekali\r\nbaik', 'Great', 'Pintar\r\nCerdas', 'Excellence', 'Objektif\r\nkhusus', 'Nice'),
(4, '03', 'Software Engineering', 'Dapat menerapkan hasil kerja pada masyarakat., Software., Engineering', 'Can apply work results to society., Software., Engineering', 'keterampilan dalam membuat perangkat lunak., lunak., admin', 'skills in creating software., soft., admin', 'terampil., cerdas., bersahaja', 'skilled., intelligent., modest');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kompetensi`
--

CREATE TABLE `sub_kompetensi` (
  `id_sub` int(11) NOT NULL,
  `kd_sub` varchar(11) NOT NULL,
  `nama_sub` varchar(255) NOT NULL,
  `kd_kompetensi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_kompetensi`
--

INSERT INTO `sub_kompetensi` (`id_sub`, `kd_sub`, `nama_sub`, `kd_kompetensi`) VALUES
(1, 'KS001', 'BNSP', 'KP001'),
(2, 'KS002', 'Trust Center Academy', 'KP001'),
(3, 'KS003', 'Webinar', 'KP002'),
(4, 'KS004', 'Kemahasiswaan', 'KP004'),
(5, 'KS005', 'Nasional', 'KP003');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `usulan_skpi`
--

CREATE TABLE `usulan_skpi` (
  `id_usulan` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `status_usulan` int(11) NOT NULL,
  `tgl_pengusulan` date NOT NULL,
  `no_skpi` varchar(255) NOT NULL,
  `file_jadi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usulan_skpi`
--

INSERT INTO `usulan_skpi` (`id_usulan`, `id_mahasiswa`, `status_usulan`, `tgl_pengusulan`, `no_skpi`, `file_jadi`) VALUES
(1, 3, 1, '2024-01-08', '456', 'Surat_SKPI_8958.pdf'),
(3, 10, 1, '2024-01-08', '457', 'Surat_SKPI_3035.pdf'),
(4, 6, 1, '2024-01-09', '458', 'Surat_SKPI_4042.pdf'),
(5, 11, 1, '2024-01-09', '459', 'Surat_SKPI_8215.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas_usulan`
--
ALTER TABLE `berkas_usulan`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `detail_subkomp`
--
ALTER TABLE `detail_subkomp`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD PRIMARY KEY (`id_kompetensi`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `skpi`
--
ALTER TABLE `skpi`
  ADD PRIMARY KEY (`id_skpi`);

--
-- Indexes for table `sub_kompetensi`
--
ALTER TABLE `sub_kompetensi`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `usulan_skpi`
--
ALTER TABLE `usulan_skpi`
  ADD PRIMARY KEY (`id_usulan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas_usulan`
--
ALTER TABLE `berkas_usulan`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `detail_subkomp`
--
ALTER TABLE `detail_subkomp`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kompetensi`
--
ALTER TABLE `kompetensi`
  MODIFY `id_kompetensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skpi`
--
ALTER TABLE `skpi`
  MODIFY `id_skpi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_kompetensi`
--
ALTER TABLE `sub_kompetensi`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usulan_skpi`
--
ALTER TABLE `usulan_skpi`
  MODIFY `id_usulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
