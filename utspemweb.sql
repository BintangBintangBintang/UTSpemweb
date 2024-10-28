-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 10:00 AM
-- Server version: 8.0.39
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utspemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `header` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`header`, `deskripsi`) VALUES
('Tentang Saya (?)', 'Perkenalkan nama saya Maharaya Bintangku Aridhana , biasa dipanggil Bintang.\r\n\r\nSaya adalah mahasiswa aktif di Universitas Pembangunan Jaya dengan fakultas teknologi dan desain , dengan jurusan Informatika 2022.\r\n\r\nTertarik dengan ilmu dan dunia teknologi semenjak SMK di Bina Informatika pada tahun 2018 dengan jurusan Rekayasa Perangkat Lunak. Saya sudah belajar berbagai bahasa mulai dari C , C++ , PHP , Javascript dan belajar framework seperti React.js dan Ionic serta database seperti mysql , sql-server , firebase dan mangoDB.');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `nama`, `email`, `pesan`) VALUES
(3, 'aaaaaa', 'aaaaa@gmail.com', 'aaeaeaeaea'),
(4, 'adadad', 'dddd@gmai.com', 'awawwa'),
(5, 'bintang kali ya', 'cobalah@gmail.com', 'awawwaw'),
(6, 'ccccc', 'ccc@gmail.com', 'adadada'),
(7, 'coba test la', 'kocak@gmail.com', 'au'),
(8, 'adada', '2222@gmail.com', 'ssss'),
(9, 'addadaadda', '22222222222222222@gmail.com', 'adadadad'),
(10, 'terakhir pls', 'pls@gmail.com', 'hahaha'),
(11, 'demi allah terakhir', 'asli@gmail.com', 'sumpah ini coba terakhir lah');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `years` varchar(50) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`years`, `degree`, `institution`, `id`) VALUES
('2018 - 2021', 'Software Engineering', 'Bina Informatika Vocational High School', 1),
('June 2021 - Jan 2021', 'Fullstack Developer Course', 'Purwadhika Bootcamp', 2),
('2022 - Present', 'Informatics', 'Pembangunan Jaya University', 3);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `years` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `deskripsi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`years`, `position`, `deskripsi`, `id`) VALUES
('2018 - Present', 'Junior Web Developer', 'Web Profile and E-commerce', 1),
('Feb 2020 - May 2020', 'Junior Internship Web Programming', 'Hexaon Business Mitrasindo', 3),
('2020 - Present', 'Junior App Developer', 'Ionic', 4);

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `hobby` varchar(100) NOT NULL,
  `description` text,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`hobby`, `description`, `id`) VALUES
('Music', 'Saya punya kesenangan bermain musik , terutama piano dan biola. Saya pernah kursus piano di Yamaha.', 1),
('Game', 'Saya paling banyak menghabiskan waktu sehari-hari untuk bermain game online , salah satu keahlian saya.', 2),
('Cinema', 'Saya memiliki ketertarikan tinggi di dunia perfilm-an , terutama dalam genre Sci-fi dan Horror.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `header` text NOT NULL,
  `deskripsi` text NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`header`, `deskripsi`, `id`) VALUES
('Yo !', 'Nama saya Maharaya Bintangku Aridhana , Biasa dipanggil Bintang. Saya sedang berusaha belajar menjadi programmer yang handal.', 1),
('Bintang, ', '', 2),
('a Junior Programmer', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` varchar(255) NOT NULL,
  `dbase` varchar(64) NOT NULL DEFAULT 'default_db_name',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`, `dbase`, `timevalue`) VALUES
('root', '[{\"db\":\"utspemweb\",\"table\":\"about\"},{\"db\":\"utspemweb\",\"table\":\"home\"},{\"db\":\"utspemweb\",\"table\":\"quickfacts\"},{\"db\":\"utspemweb\",\"table\":\"pma__recent\"},{\"db\":\"utspemweb\",\"table\":\"pma__table_uiprefs\"}]', 'default_db_name', '2024-10-28 01:37:32'),
('root', '[{\"db\":\"utspemweb\",\"table\":\"about\"},{\"db\":\"utspemweb\",\"table\":\"quickfacts\"},{\"db\":\"utspemweb\",\"table\":\"home\"},{\"db\":\"utspemweb\",\"table\":\"pma__recent\"},{\"db\":\"utspemweb\",\"table\":\"pma__table_uiprefs\"}]', 'default_db_name', '2024-10-28 01:37:22'),
('root', '[{\"db\":\"utspemweb\",\"table\":\"experience\"},{\"db\":\"utspemweb\",\"table\":\"about\"},{\"db\":\"utspemweb\",\"table\":\"home\"},{\"db\":\"utspemweb\",\"table\":\"quickfacts\"},{\"db\":\"utspemweb\",\"table\":\"pma__recent\"},{\"db\":\"utspemweb\",\"table\":\"pma__table_uiprefs\"}]', 'default_db_name', '2024-10-28 01:46:58'),
('root', '[{\"db\":\"utspemweb\",\"table\":\"home\"},{\"db\":\"utspemweb\",\"table\":\"about\"},{\"db\":\"utspemweb\",\"table\":\"quickfacts\"},{\"db\":\"utspemweb\",\"table\":\"pma__recent\"},{\"db\":\"utspemweb\",\"table\":\"pma__table_uiprefs\"}]', 'default_db_name', '2024-10-28 01:37:26'),
('root', '[{\"db\":\"utspemweb\",\"table\":\"home\"},{\"db\":\"utspemweb\",\"table\":\"pma__recent\"},{\"db\":\"utspemweb\",\"table\":\"pma__table_uiprefs\"},{\"db\":\"utspemweb\",\"table\":\"quickfacts\"}]', 'default_db_name', '2024-10-28 01:15:42'),
('root', '[{\"db\":\"utspemweb\",\"table\":\"home\"},{\"db\":\"utspemweb\",\"table\":\"quickfacts\"},{\"db\":\"utspemweb\",\"table\":\"pma__recent\"},{\"db\":\"utspemweb\",\"table\":\"pma__table_uiprefs\"}]', 'default_db_name', '2024-10-28 01:32:19'),
('root', '[{\"db\":\"utspemweb\",\"table\":\"quickfacts\"},{\"db\":\"utspemweb\",\"table\":\"home\"},{\"db\":\"utspemweb\",\"table\":\"about\"},{\"db\":\"utspemweb\",\"table\":\"pma__recent\"},{\"db\":\"utspemweb\",\"table\":\"pma__table_uiprefs\"}]', 'default_db_name', '2024-10-28 01:37:21'),
('root', '[{\"db\":\"utspemweb\",\"table\":\"quickfacts\"},{\"db\":\"utspemweb\",\"table\":\"home\"},{\"db\":\"utspemweb\",\"table\":\"pma__recent\"},{\"db\":\"utspemweb\",\"table\":\"pma__table_uiprefs\"}]', 'default_db_name', '2024-10-28 01:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `category` enum('web','mobile','desktop') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `image_path`, `category`) VALUES
(1, 'images/portfolio/project1.jpg', 'web'),
(2, 'images/portfolio/project2.jpg', 'mobile'),
(3, 'images/portfolio/project3.jpg', 'desktop');

-- --------------------------------------------------------

--
-- Table structure for table `quickfacts`
--

CREATE TABLE `quickfacts` (
  `fact1` text NOT NULL,
  `fact2` text NOT NULL,
  `fact3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `quickfacts`
--

INSERT INTO `quickfacts` (`fact1`, `fact2`, `fact3`) VALUES
('Saya terjun ke dunia IT sejak SMK di Bina Informatika dengan jurusan Rekayasa Perangkat Lunak.', 'Saya menggunakan komputer rata-rata 8 jam setiap harinya.', 'Saya sangat tertarik dengan bahasa pemrograman Javascript , React dan PHP.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD UNIQUE KEY `username` (`username`,`tables`),
  ADD UNIQUE KEY `username_2` (`username`,`dbase`,`tables`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
