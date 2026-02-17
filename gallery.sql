-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2026. Feb 17. 09:03
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `albumprojekt`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `gallery`
--

CREATE TABLE `gallery` (
  `cim` varchar(100) NOT NULL,
  `mufaj` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `kiadas` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `gallery`
--

INSERT INTO `gallery` (`cim`, `mufaj`, `artist`, `link`, `kiadas`) VALUES
('Day Of Radiance', 'Ambient', 'Brian Eno', 'https://music.youtube.com/playlist?list=OLAK5uy_n2bqBArtATPUkSRyPcfK320Fj_UlVMq6g', 1980),
('Music For Airports', 'Ambient', 'Brian Eno', 'https://music.youtube.com/playlist?list=OLAK5uy_kq1C6EEXYJ6RaARqusNCCHReNz3AzV484', 1978),
('On Land', 'Ambient', 'Brian Eno', 'https://music.youtube.com/playlist?list=OLAK5uy_nv4XY6aoTLZSjEwkTSxENLu53Xnr61cL8', 1982),
('The Plateaux Of Mirror', 'Ambient', 'Brian Eno', 'https://music.youtube.com/playlist?list=OLAK5uy_lPngosS0aAwFOtN4CfJeHJ2jErPqUubn0', 1980);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`cim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
