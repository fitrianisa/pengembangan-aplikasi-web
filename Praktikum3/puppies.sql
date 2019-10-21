-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2019 pada 08.49
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puppies`
--
CREATE DATABASE IF NOT EXISTS `puppies` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `puppies`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `animals`
--

CREATE TABLE `animals` (
  `ID` int(11) NOT NULL,
  `PuppyName` varchar(256) DEFAULT NULL,
  `BreedID` int(11) DEFAULT NULL,
  `Description` varchar(256) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Picture` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `animals`
--

INSERT INTO `animals` (`ID`, `PuppyName`, `BreedID`, `Description`, `Price`, `Picture`) VALUES
(1, 'Johnny', 4, 'Good for a farm', '100.00', 'Johnny.jpg'),
(2, 'Bully', 3, 'A fighter, excellent watchdog', '599.00', 'Bully.jpg'),
(3, 'Bo-Bo', 2, 'Suit sweet old lady', '250.00', 'Bo-Bo.jpg'),
(4, 'Albert', 5, 'Family dog', '20.00', 'Albert.jpg'),
(5, 'Fritz', 1, 'Watchdog', '129.00', 'Fritz.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `breeds`
--

CREATE TABLE `breeds` (
  `Breed` int(11) NOT NULL,
  `BreedName` varchar(45) DEFAULT NULL,
  `Temperament` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `breeds`
--

INSERT INTO `breeds` (`Breed`, `BreedName`, `Temperament`) VALUES
(1, 'Doberman', 'Aggresive'),
(2, 'Poodle', 'Nervous'),
(3, 'Pitt Bull', 'Nasty'),
(4, 'Cattle Dog', 'Friendly'),
(5, 'Alsatian', 'Faithful'),
(6, 'Beagle', 'Smooches'),
(7, 'Schnauzer', 'Fluffy'),
(8, 'Jack Russell', 'Psychopathic'),
(9, 'Rat Terrier', 'Less aggressive than Jack Russell');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `BreedID` (`BreedID`);

--
-- Indeks untuk tabel `breeds`
--
ALTER TABLE `breeds`
  ADD PRIMARY KEY (`Breed`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `animals`
--
ALTER TABLE `animals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `breeds`
--
ALTER TABLE `breeds`
  MODIFY `Breed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animals_ibfk_1` FOREIGN KEY (`BreedID`) REFERENCES `breeds` (`Breed`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
