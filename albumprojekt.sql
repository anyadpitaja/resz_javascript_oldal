-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2026. Feb 17. 09:34
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
('...Because Im Young Arrogant and Hate Everything You Stand For', 'Hardcore Breaks', 'Machine Girl', 'https://music.youtube.com/playlist?list=OLAK5uy_k2oG1m_qy5T0Y7DP4INyB0dkp6thswE_c', 2017),
('Consume Red', 'Free Improvasition/Experimental Noise', 'Ground Zero', 'https://groundzone.bandcamp.com/album/consume-red', 1997),
('dataplex', 'Microsounds', 'Ryoji Ikeda', 'https://www.youtube.com/playlist?list=OLAK5uy_l1GAjZdP1Ih0hGKvdvUxK7DdGijIBcw_U', 2005),
('Day Of Radiance', 'Ambient', 'Brian Eno', 'https://music.youtube.com/playlist?list=OLAK5uy_n2bqBArtATPUkSRyPcfK320Fj_UlVMq6g', 1980),
('F# A# ∞', 'Post-Rock', 'Godspeed You Black Emperor!', 'https://godspeedyoublackemperor.bandcamp.com/album/f-a', 1997),
('Heresy', 'Ambient', 'Lustmord', 'https://music.youtube.com/playlist?list=OLAK5uy_knxkJST9s0HWNVMsZvBU4DdpZXs6cE_gw', 1990),
('Lift Your Skinny Fists Like Antennas To Heaven', 'Post-Rock', 'Godspeed You Black Emperor!', 'https://godspeedyoublackemperor.bandcamp.com/album/lift-your-skinny-fists-like-antennas-to-heaven', 2000),
('MACHINE GIRL VS MACHINE GIRL', 'Hardcore Breaks', 'Machine Girl', 'https://machinegirl.bandcamp.com/album/machine-girl-vs-machine-girl', 2016),
('MRK90 MIX VOL 1', 'Hardcore Breaks', 'Machine Girl', 'https://machinegirl.bandcamp.com/album/mrk90-mix-vol-1', 2018),
('Music For Airports', 'Ambient', 'Brian Eno', 'https://music.youtube.com/playlist?list=OLAK5uy_kq1C6EEXYJ6RaARqusNCCHReNz3AzV484', 1978),
('On Land', 'Ambient', 'Brian Eno', 'https://music.youtube.com/playlist?list=OLAK5uy_nv4XY6aoTLZSjEwkTSxENLu53Xnr61cL8', 1982),
('Purifying Fire', 'Ambient', 'Lustmord', 'https://music.youtube.com/playlist?list=OLAK5uy_m-JRetjg73V2R5wsRCKOdXIdp_HHtDDqo', 2000),
('Revolutionary Pekinese Opera Ver1.28', 'Sound Collage', 'Ground Zero', 'https://groundzone.bandcamp.com/album/revolutionary-pekinese-opera', 1995),
('Shimmer / Flicker / Waver / Quiver', 'Lowercase', 'steve Roden', 'https://music.youtube.com/playlist?list=OLAK5uy_lTQP3vBI3Vs2P9Ls0oGqoTB3G-lT933ZE', 2004),
('SUPER FREQ EP', 'Hardcore Breaks', 'Machine Girl', 'https://machinegirl.bandcamp.com/album/super-freq-ep', 2024),
('The Plateaux Of Mirror', 'Ambient', 'Brian Eno', 'https://music.youtube.com/playlist?list=OLAK5uy_lPngosS0aAwFOtN4CfJeHJ2jErPqUubn0', 1980),
('WLFGRL', 'Footwork', 'Machine Girl', 'https://music.youtube.com/playlist?list=OLAK5uy_l3MDIr9SSgzfqpe6VRuBXXyCFHQbddJqo', 2014),
('Yanqui U.X.O.', 'Post-Rock', 'Godspeed You Black Emperor!', 'https://godspeedyoublackemperor.bandcamp.com/album/yanqui-u-x-o', 2002);

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
