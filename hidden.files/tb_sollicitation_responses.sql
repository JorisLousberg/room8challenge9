-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 12 apr 2021 om 21:18
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gr8_buurtzorg`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tb_sollicitation_responses`
--

CREATE TABLE `tb_sollicitation_responses` (
  `id` int(150) NOT NULL,
  `for_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `birthdate` date NOT NULL,
  `city` varchar(150) NOT NULL,
  `street` varchar(150) NOT NULL,
  `house_number` varchar(150) NOT NULL,
  `postcode` varchar(150) NOT NULL,
  `e_mail` varchar(150) NOT NULL,
  `phone_number` varchar(150) NOT NULL,
  `CV` varchar(150) NOT NULL,
  `Motivation_letter` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tb_sollicitation_responses`
--
ALTER TABLE `tb_sollicitation_responses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tb_sollicitation_responses`
--
ALTER TABLE `tb_sollicitation_responses`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
