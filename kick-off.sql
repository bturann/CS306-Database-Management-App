-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 02 Oca 2023, 20:08:54
-- Sunucu sürümü: 10.1.38-MariaDB
-- PHP Sürümü: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kick-off`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `coaches`
--

CREATE TABLE `coaches` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `coaches`
--

INSERT INTO `coaches` (`cid`, `cname`, `country_id`) VALUES
(1, 'Jorge Jesus', 620),
(2, 'Okan Buruk', 792),
(3, 'Vincenzo Montella', 380),
(4, 'Ilhan Palut', 792),
(5, 'Emre Belözoglu', 792),
(6, 'Cagdas Atan', 792),
(7, 'Abdullah Avci', 792),
(8, 'Senol Gunes', 792),
(9, 'Step 5', 792);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `including`
--

CREATE TABLE `including` (
  `sid` int(11) NOT NULL,
  `lid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `including`
--

INSERT INTO `including` (`sid`, `lid`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `leagues`
--

CREATE TABLE `leagues` (
  `lid` int(11) NOT NULL,
  `lname` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `leagues`
--

INSERT INTO `leagues` (`lid`, `lname`) VALUES
(1, 'Spor Toto Super League'),
(2, 'Spor Toto 1.Lig'),
(3, 'TFF 2.Lig'),
(4, 'TFF 3.Lig'),
(5, 'U21 Ligi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `managing`
--

CREATE TABLE `managing` (
  `cid` int(11) NOT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `managing`
--

INSERT INTO `managing` (`cid`, `tid`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 10);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `matches`
--

CREATE TABLE `matches` (
  `mid` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `hometeamid` int(11) DEFAULT NULL,
  `awayteamid` int(11) DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  `away_score` int(11) DEFAULT NULL,
  `home_score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `matches`
--

INSERT INTO `matches` (`mid`, `lid`, `rid`, `hometeamid`, `awayteamid`, `mdate`, `away_score`, `home_score`) VALUES
(3, 1, 6, 7, 1, '2022-12-15 00:00:00', 2, 1),
(4, 1, 1, 1, 2, '2022-12-09 00:00:00', 2, 3),
(5, 1, 2, 3, 4, '2022-12-05 00:00:00', 1, 0),
(6, 1, 3, 8, 7, '2022-12-05 00:00:00', 1, 2),
(7, 1, 4, 5, 2, '2022-12-05 00:00:00', 3, 0),
(8, 1, 5, 1, 3, '2022-12-05 00:00:00', 2, 4),
(9, 1, 6, 5, 4, '2022-12-05 00:00:00', 0, 0),
(10, 1, 7, 2, 5, '2022-11-17 00:00:00', 2, 2),
(11, 1, 8, 4, 6, '2022-11-16 00:00:00', 1, 1),
(12, 1, 8, 3, 7, '2022-11-15 00:00:00', 3, 1),
(13, 1, 9, 1, 7, '2022-11-14 00:00:00', 2, 2),
(14, 1, 9, 7, 8, '2022-11-13 00:00:00', 1, 1),
(15, 1, 10, 3, 8, '2022-11-13 00:00:00', 1, 0),
(16, 1, 10, 5, 7, '2022-11-13 00:00:00', 2, 3),
(17, 1, 11, 4, 1, '2022-11-12 00:00:00', 2, 0),
(18, 1, 13, 3, 1, '2022-11-11 00:00:00', 2, 1),
(19, 1, 13, 4, 2, '2022-11-10 00:00:00', 0, 3),
(20, 1, 14, 2, 6, '2022-11-09 00:00:00', 3, 0),
(21, 1, 15, 1, 6, '2022-11-08 00:00:00', 1, 2),
(22, 1, 16, 4, 8, '2022-11-08 00:00:00', 1, 2),
(23, 1, 17, 1, 8, '2022-11-08 00:00:00', 0, 7),
(24, 1, 17, 2, 7, '2022-11-08 00:00:00', 0, 2),
(25, 1, 18, 3, 7, '2022-11-07 00:00:00', 2, 0),
(26, 1, 19, 4, 7, '2022-11-06 00:00:00', 2, 1),
(27, 1, 20, 6, 1, '2022-11-06 00:00:00', 3, 1),
(28, 1, 21, 6, 1, '2022-11-05 00:00:00', 1, 0),
(29, 1, 22, 2, 1, '2022-11-05 00:00:00', 2, 0),
(30, 1, 26, 8, 3, '2022-11-03 00:00:00', 0, 0),
(31, 1, 20, 6, 3, '2022-11-03 00:00:00', 0, 0),
(32, 1, 20, 3, 2, '2022-11-03 00:00:00', 0, 0),
(33, 1, 10, 7, 1, '2022-11-02 00:00:00', 0, 0),
(34, 1, 10, 3, 4, '2022-11-01 00:00:00', 1, 0),
(35, 1, 10, 6, 3, '2022-11-23 00:00:00', 1, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `penalties`
--

CREATE TABLE `penalties` (
  `penalty_id` int(11) NOT NULL,
  `type` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_time` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `penalties`
--

INSERT INTO `penalties` (`penalty_id`, `type`, `p_time`, `mid`, `rid`, `pid`) VALUES
(1, '11', '11', 3, 1, 30),
(3, 'foul', '34', 3, 2, 31),
(4, 'foul', '65', 12, 3, 34),
(5, 'foul', '63', 13, 4, 31),
(6, 'foul', '23', 14, 5, 32),
(7, 'foul', '53', 15, 6, 33),
(8, 'foul', '12', 16, 7, 34),
(9, 'foul', '47', 17, 8, 35),
(10, 'foul', '25', 18, 8, 36),
(11, 'foul', '24', 19, 8, 37),
(12, 'foul', '64', 20, 9, 38),
(13, 'foul', '86', 21, 10, 39),
(14, 'foul', '105', 23, 11, 59),
(15, 'foul', '65', 12, 3, 30),
(16, 'foul', '63', 24, 12, 33),
(17, 'foul', '24', 25, 13, 35),
(18, 'foul', '43', 12, 14, 37),
(19, 'foul', '75', 15, 15, 39),
(20, 'foul', '95', 13, 16, 31),
(21, 'foul', '58', 17, 17, 32),
(22, 'foul', '47', 18, 18, 34),
(23, 'foul', '58', 19, 19, 36),
(24, 'foul', '36', 30, 20, 38);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `played_player`
--

CREATE TABLE `played_player` (
  `pid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `duration` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `players`
--

CREATE TABLE `players` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pnumber` int(3) NOT NULL,
  `pposition` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `players`
--

INSERT INTO `players` (`pid`, `pname`, `pnumber`, `pposition`, `country_id`) VALUES
(30, 'Fernando Muslera', 1, 'Goalkeeper', 32),
(31, 'Emre Tasdemir', 13, 'Defense', 792),
(32, 'BarÄ±ÅŸ Alper YÄ±lmaz', 53, 'Midfield', 792),
(33, 'Altay BayÄ±ndÄ±r', 1, 'Goalkeeper', 792),
(34, 'Atilla Szalai', 41, 'Defense', 348),
(35, 'Serdar Dursun', 19, 'Forward', 792),
(36, 'Emre Bilgin', 99, 'Goalkeeper', 792),
(37, 'Francisco Montero', 4, 'Defense', 724),
(38, 'Salih UÃ§an', 8, 'Midfield', 792),
(39, 'Cenk Tosun', 9, 'Forward', 792),
(59, 'Necip Uysal', 20, 'Midfield', 792);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `playing_in`
--

CREATE TABLE `playing_in` (
  `pid` int(11) NOT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `playing_in`
--

INSERT INTO `playing_in` (`pid`, `tid`) VALUES
(30, 2),
(31, 2),
(32, 2),
(33, 1),
(34, 1),
(35, 1),
(36, 8),
(37, 8),
(38, 8),
(39, 8),
(59, 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referee`
--

CREATE TABLE `referee` (
  `rid` int(11) NOT NULL,
  `rname` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `referee`
--

INSERT INTO `referee` (`rid`, `rname`) VALUES
(1, 'Arda Karde?ler'),
(2, 'Volkan Bayarslan'),
(3, 'Yasar Kemal Ugurlu'),
(4, 'Mert Güzenge'),
(5, 'Abdulkadir Bitigen'),
(6, 'Ümit Öztürk'),
(7, 'Bahattin Simsek'),
(8, 'Mustafa Kürsad Filiz'),
(9, 'Kadir Saglam'),
(10, 'Ali Sansalan'),
(11, 'Atilla Karaoglan'),
(12, 'Zorbay Kücük'),
(13, 'Hüseyin Göcek'),
(14, 'Suat Arslanboga'),
(15, 'Mete Kalkavan'),
(16, 'Ali Palabiyik'),
(17, 'Sarper Baris Saka'),
(18, 'Cagdas Altay'),
(19, 'Tugay Kaan Numanoglu'),
(20, 'Halil Umut Meler'),
(21, 'Erkan Özdamar'),
(22, 'Burak Seker'),
(26, 'Yasin Kol');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seasons`
--

CREATE TABLE `seasons` (
  `sid` int(11) NOT NULL,
  `startd` date DEFAULT NULL,
  `endd` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `seasons`
--

INSERT INTO `seasons` (`sid`, `startd`, `endd`) VALUES
(1, '2022-08-05', '2023-05-28'),
(2, '2021-08-13', '2022-05-22'),
(3, '2021-09-11', '2022-05-16'),
(4, '2020-08-16', '2021-05-17'),
(5, '2018-08-10', '2019-05-26');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teams`
--

CREATE TABLE `teams` (
  `tid` int(11) NOT NULL,
  `tname` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `teams`
--

INSERT INTO `teams` (`tid`, `tname`, `rank`, `point`) VALUES
(1, 'Fenerbahçe', 1, 29),
(2, 'Galatasaray', 2, 27),
(3, 'Adana Demirspor', 3, 24),
(4, 'Konyaspor', 4, 24),
(5, 'Basaksehir', 5, 24),
(6, 'Kayserispor', 6, 23),
(7, 'Trabzonspor', 7, 23),
(8, 'Besiktas', 8, 22),
(10, 'Step 5', 20, 20);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `within`
--

CREATE TABLE `within` (
  `lid` int(11) NOT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `within`
--

INSERT INTO `within` (`lid`, `tid`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 10);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`cid`);

--
-- Tablo için indeksler `including`
--
ALTER TABLE `including`
  ADD PRIMARY KEY (`sid`,`lid`),
  ADD KEY `lid` (`lid`);

--
-- Tablo için indeksler `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`lid`);

--
-- Tablo için indeksler `managing`
--
ALTER TABLE `managing`
  ADD PRIMARY KEY (`cid`,`tid`),
  ADD KEY `tid` (`tid`);

--
-- Tablo için indeksler `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `awayteamid` (`awayteamid`),
  ADD KEY `hometeamid` (`hometeamid`),
  ADD KEY `lid` (`lid`),
  ADD KEY `rid` (`rid`);

--
-- Tablo için indeksler `penalties`
--
ALTER TABLE `penalties`
  ADD PRIMARY KEY (`penalty_id`),
  ADD KEY `mid` (`mid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `rid` (`rid`);

--
-- Tablo için indeksler `played_player`
--
ALTER TABLE `played_player`
  ADD PRIMARY KEY (`pid`,`mid`),
  ADD KEY `mid` (`mid`);

--
-- Tablo için indeksler `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`pid`);

--
-- Tablo için indeksler `playing_in`
--
ALTER TABLE `playing_in`
  ADD PRIMARY KEY (`pid`,`tid`),
  ADD KEY `tid` (`tid`);

--
-- Tablo için indeksler `referee`
--
ALTER TABLE `referee`
  ADD PRIMARY KEY (`rid`);

--
-- Tablo için indeksler `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`sid`);

--
-- Tablo için indeksler `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`tid`);

--
-- Tablo için indeksler `within`
--
ALTER TABLE `within`
  ADD PRIMARY KEY (`lid`,`tid`),
  ADD KEY `tid` (`tid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `coaches`
--
ALTER TABLE `coaches`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `leagues`
--
ALTER TABLE `leagues`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `matches`
--
ALTER TABLE `matches`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Tablo için AUTO_INCREMENT değeri `penalties`
--
ALTER TABLE `penalties`
  MODIFY `penalty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `players`
--
ALTER TABLE `players`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Tablo için AUTO_INCREMENT değeri `referee`
--
ALTER TABLE `referee`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `seasons`
--
ALTER TABLE `seasons`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `teams`
--
ALTER TABLE `teams`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `including`
--
ALTER TABLE `including`
  ADD CONSTRAINT `including_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `seasons` (`sid`) ON DELETE CASCADE,
  ADD CONSTRAINT `including_ibfk_2` FOREIGN KEY (`lid`) REFERENCES `leagues` (`lid`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `managing`
--
ALTER TABLE `managing`
  ADD CONSTRAINT `managing_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `coaches` (`cid`) ON DELETE CASCADE,
  ADD CONSTRAINT `managing_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `teams` (`tid`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_ibfk_1` FOREIGN KEY (`awayteamid`) REFERENCES `teams` (`tid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `matches_ibfk_2` FOREIGN KEY (`hometeamid`) REFERENCES `teams` (`tid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `matches_ibfk_3` FOREIGN KEY (`lid`) REFERENCES `leagues` (`lid`),
  ADD CONSTRAINT `matches_ibfk_4` FOREIGN KEY (`rid`) REFERENCES `referee` (`rid`);

--
-- Tablo kısıtlamaları `penalties`
--
ALTER TABLE `penalties`
  ADD CONSTRAINT `penalties_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `matches` (`mid`),
  ADD CONSTRAINT `penalties_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `players` (`pid`),
  ADD CONSTRAINT `penalties_ibfk_3` FOREIGN KEY (`rid`) REFERENCES `referee` (`rid`);

--
-- Tablo kısıtlamaları `played_player`
--
ALTER TABLE `played_player`
  ADD CONSTRAINT `played_player_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `players` (`pid`),
  ADD CONSTRAINT `played_player_ibfk_2` FOREIGN KEY (`mid`) REFERENCES `matches` (`mid`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `playing_in`
--
ALTER TABLE `playing_in`
  ADD CONSTRAINT `playing_in_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `players` (`pid`) ON DELETE CASCADE,
  ADD CONSTRAINT `playing_in_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `teams` (`tid`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `within`
--
ALTER TABLE `within`
  ADD CONSTRAINT `within_ibfk_1` FOREIGN KEY (`lid`) REFERENCES `leagues` (`lid`) ON DELETE CASCADE,
  ADD CONSTRAINT `within_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `teams` (`tid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
