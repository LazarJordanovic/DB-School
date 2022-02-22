-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 12:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skola`
--

-- --------------------------------------------------------

--
-- Table structure for table `nastavnici`
--

CREATE TABLE `nastavnici` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `JMBG` varchar(30) NOT NULL,
  `br_tel` varchar(20) NOT NULL,
  `naziv_predmeta` varchar(30) NOT NULL,
  `odeljenje` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nastavnici`
--

INSERT INTO `nastavnici` (`id`, `fname`, `lname`, `JMBG`, `br_tel`, `naziv_predmeta`, `odeljenje`) VALUES
(4, 'Milena', 'Cvetanovic', '24545', '666666', 'Uciteljica ', 'Prvi razred'),
(5, 'Slobodan', 'Popadic', '858784', '25151512', 'Sociologija', 'Treca godina medicin'),
(6, 'Slobodan', 'Ivanovic', '2022021', '644587981', 'Filozofija', 'Treca godina medicin'),
(8, 'Tomica ', 'Stajic', '1466897', '1545488', 'Medicinska nega', 'Srednja medicinska'),
(9, 'Tanja', 'Janicijevic', '25546', '641234567', 'Biologija', 'Osnovna Skola'),
(11, 'Aleksandar', 'Ivanovic', '245876566', '4525478', 'Pravo', 'Treca godina'),
(12, 'Slobodan', 'Maksimovic', '2147483647', '645588991', 'Tehnicko crtanje', 'Prva i druga godna'),
(13, 'Nevena', 'Todorovic', '55585555', '645857944', 'Biologija', 'Prva i druga godina Srednje ekonomske skole Koretiste'),
(14, 'Stojko', 'Stojkovic', '2208991970026', '064/8844551', 'Fizicko', 'Osnovna skola '),
(15, 'Momcilo', 'Simic', '2305648798587', '064/88-99-548', 'Matematika', 'Peti, sesti, sedmi, osmi razred osnovne skole \"Petar Petrovic Njegos\" Gornje Kusce'),
(16, 'Момчило', 'Симић', '2208991970026', '064/8877998', 'Математика', 'Пети и шести разред'),
(17, 'Marko ', 'Stojkovic', '2208991970026', '064/888-99-33', 'Tehnika i tehnologija', 'Sesti razred osnovne skole');

-- --------------------------------------------------------

--
-- Table structure for table `ucenici`
--

CREATE TABLE `ucenici` (
  `id` int(11) NOT NULL,
  `ufname` varchar(30) NOT NULL,
  `ulname` varchar(30) NOT NULL,
  `uJMBG` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uodeljenje` varchar(50) NOT NULL,
  `ubr_tel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ucenici`
--

INSERT INTO `ucenici` (`id`, `ufname`, `ulname`, `uJMBG`, `email`, `uodeljenje`, `ubr_tel`) VALUES
(1, 'Petra', 'Kocomanovic', '0704002975847', 'petra@gmail.com', 'Osmi razred osnvne skole', '2147483647'),
(4, 'Milan', 'Cvetanovic', '2306996548576', 'milan@gmail.com', 'Filozofski fakultet', '645587123'),
(5, 'Marija', 'Dimic', '2125456968657', 'dimicka@gmail.com', 'Treca Godine Medicine', '214748364'),
(6, 'Petra', 'Kotorcevic', '145789422', 'petra.k@gmail.com', 'Prvi razred', '645825698'),
(7, 'Stefan', 'Micanovic', '08089925566332', 'mican@gnmail.com', 'Menadzment', '64/8578478'),
(8, 'Radovan', 'Savic', '5458566945649', 'radovan@yahoo.com', 'Filozofski fakultet', '064/8899774'),
(9, 'Vuk', 'Milosevic', '2564696865456', 'vuk@gmail.com', 'sesti razred osnovne skole', '065/88-99-89-7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nastavnici`
--
ALTER TABLE `nastavnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ucenici`
--
ALTER TABLE `ucenici`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nastavnici`
--
ALTER TABLE `nastavnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ucenici`
--
ALTER TABLE `ucenici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
