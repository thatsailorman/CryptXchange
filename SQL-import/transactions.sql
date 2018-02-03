-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 03 feb 2018 om 15:36
-- Serverversie: 10.1.23-MariaDB
-- PHP-versie: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zijlspu40_cryptx`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `payid` varchar(25) NOT NULL,
  `paydate` varchar(10) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `payamount` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `paycurrencyfrom` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `paycurrencyto` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `payout` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `payto` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `walletrefund` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `transactions`
--

INSERT INTO `transactions` (`id`, `payid`, `paydate`, `ip`, `payamount`, `paycurrencyfrom`, `paycurrencyto`, `payout`, `payto`, `walletrefund`) VALUES
(34, '8a4c055e4ce6', '2018-02-03', '217.120.33.161', '3.741', 'ltc', 'eth', '0x9539e0b14021a43cde41d9d45dc34969be9c7cb0', 'LWykvxJtDdFd1uCr9N2e1hVNfnVZ7p8b8N', 'LdvzemGmU1L5veGXyAj7gz59ryQ1ghEsV9');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
