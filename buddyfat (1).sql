-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 26 jun 2020 om 11:30
-- Serverversie: 5.7.26
-- PHP-versie: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buddyfat`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `activity`
--

DROP TABLE IF EXISTS `activity`;
CREATE TABLE IF NOT EXISTS `activity` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `activiteiten` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `activity`
--

INSERT INTO `activity` (`id`, `activiteiten`) VALUES
(1, 'Hardlopen'),
(2, 'Touwtje springen'),
(3, 'Pushups'),
(4, 'Pullups'),
(5, 'Situps'),
(6, 'Leg raises'),
(7, 'Bench press');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `progression`
--

DROP TABLE IF EXISTS `progression`;
CREATE TABLE IF NOT EXISTS `progression` (
  `progression_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `reps` smallint(6) NOT NULL,
  `activity_time` smallint(6) NOT NULL,
  PRIMARY KEY (`progression_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `progression`
--

INSERT INTO `progression` (`progression_id`, `id`, `activity_id`, `date`, `reps`, `activity_time`) VALUES
(1, 4, 2, '2020-06-12', 127, 0),
(2, 4, 2, '2020-06-12', 127, 0),
(3, 2, 7, '2020-06-15', 120, 30),
(4, 2, 7, '2020-06-15', 120, 30),
(5, 2, 6, '2020-06-15', 180, 60),
(6, 3, 7, '2020-06-18', 1000, 10),
(7, 3, 4, '2020-06-18', 21, 12),
(8, 2, 3, '2020-06-18', 3, 123),
(9, 2, 5, '2020-06-18', 231, 23),
(10, 8, 4, '2020-06-26', 15, 15),
(11, 9, 6, '2020-06-26', 15, 15);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `password` varchar(60) NOT NULL,
  `userrole` enum('root','admin','customer','moderator') NOT NULL DEFAULT 'customer',
  `activated` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `register`
--

INSERT INTO `register` (`id`, `email`, `password`, `userrole`, `activated`) VALUES
(1, 'r@r.nl', '$2y$10$uR7Zq3.6eluojXQw5NH1VOOsCpGEJjkARUwFO/fy8Grk6j9W2O7ba', 'root', b'1'),
(2, 'a@a.nl', '$2y$10$0uV1yenUdG/DT8QW6I1pG.9d6RaPN6d5QESrZkto/p09BzrSjIn9S', 'admin', b'1'),
(3, 'm@m.nl', '$2y$10$tq7BwHChV4QC2Ki9MpBB.OejiE8Kgz/WDdnAWR/GcgAf0Ic/Ye2Gq', 'moderator', b'1'),
(4, 'c@c.nl', '$2y$10$hDhV15LgdvslqpQP5bOIRu.BuI9zc21mlrubaHrSrrTJdvJlPVBpa', 'customer', b'1'),
(7, 'y@y.nl', '$2y$10$wTDDWMPxq8v2RjihH6FthODXUMY1XXsC75f4BqXj/XfMb4PCAxmlm', 'customer', b'1'),
(8, 'g@g.nl', '$2y$10$VYClB9spuFK6yN3nhJY4eu8zx9yjDwpTOkF8JjG34B0AKrghx2lqq', 'customer', b'1'),
(9, 'y@i.nl', '$2y$10$6J0.UMIVcsoJvAJYVJFH4OdqXXAaJp5K/ymS0FxkETh.tX63B21W6', 'customer', b'1'),
(10, 'o@o.nl', '$2y$10$uXEXV2dSrEhcq2qVVKe57O/KHkM1hoirMGuXEzvA0zj8Xk1O.pt..', 'customer', b'0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
