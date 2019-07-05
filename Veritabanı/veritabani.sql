-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Ara 2017, 08:32:43
-- Sunucu sürümü: 10.1.28-MariaDB
-- PHP Sürümü: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `veritabani`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `paylasilanlar`
--

CREATE TABLE `paylasilanlar` (
  `POST_ID` int(11) NOT NULL,
  `POST_KAD` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `POST_GORSEL` mediumtext CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `POST_BEGENI` int(11) NOT NULL,
  `POST_ACIKLAMA` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `POST_PP` varchar(200) NOT NULL DEFAULT 'images/buton/profil.png	',
  `ARANAN_KAD` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `paylasilanlar`
--

INSERT INTO `paylasilanlar` (`POST_ID`, `POST_KAD`, `POST_GORSEL`, `POST_BEGENI`, `POST_ACIKLAMA`, `POST_PP`, `ARANAN_KAD`) VALUES
(1, 'osr', 'paylasilanlar/apple.png', 1, '', 'uploaded/indexphoto.png', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `UYELER_ID` int(20) NOT NULL,
  `UYELER_AD` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `UYELER_SOYAD` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `UYELER_KAD` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `UYELER_POSTA` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `UYELER_SIFRE` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `UYELER_PP` varchar(200) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'images/buton/profil.png',
  `UYELER_BIO` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`UYELER_ID`, `UYELER_AD`, `UYELER_SOYAD`, `UYELER_KAD`, `UYELER_POSTA`, `UYELER_SIFRE`, `UYELER_PP`, `UYELER_BIO`) VALUES
(8, 'Emre', 'Yurtseven', 'emreyurtseven', 'emreyurtseven@beeforce.com', '1', 'uploaded/29106169.jpg', 'BeeForce President of Developer Department '),
(9, 'Erdogan', 'GÃ¶k', 'erdogangok', 'erdogangok9@beeforce.com', '1', 'uploaded/erdogan.JPG', 'BeeForce Ceo'),
(11, 'mehmetsalih', 'GenÃ§aÄŸ', 'mehmetsalih', 'mehmetsalih@tiklaal.com', '1', 'uploaded/indir.jpg', 'Founder of Tiklaal.com'),
(18, 'Furkan', 'Koyuncu', 'furkankoyuncu', 'furkankoyuncu@tiklaal.com', '1', 'uploaded/bune.jpg', 'Ceo of Tiklaal.com'),
(21, 'Berkay', 'Ayyildiz', 'berkayayyildiz', 'berkayayyildiz@beeforce.com', '1', 'uploaded/berkay.jpg', 'Founder of BeeForce'),
(22, 'berkay2', 'asda', 'berkayahmetmehmet', 'dsa', '1', 'images/buton/profil.png', ''),
(23, 'elon', 'musk', 'elonmusk', 'elonmusk', '1', 'uploaded/begenme.png', 'SPACEX TESLA'),
(30, 'Yavuz Selim', 'Eker', 'yavuzselimeker', 'yavuzselimeker@tiklaal.com', '1', 'uploaded/Screenshot_2.png', 'Loser of Tiklaal.com'),
(31, 'djsakldsaj', 'dkslakdsa', '1', '1', '1', 'uploaded/780166.jpg', 'fsdfsdf'),
(32, 'Muhammet Furkan', 'Karaman', 'mfkaraman', 'mfkaraman@gmail.com', '1', 'uploaded/harbiyeli.png', ''),
(33, 'emre', 'y', 'emrey', '1', '1', 'images/buton/profil.png', ''),
(34, 'qw', 'qw', 'qw', 'qw', '1', 'images/buton/profil.png', ''),
(35, 'Ã–zcan', 'Ã‡iftÃ§i', 'ozcanciftci', 'ozcanciftci@gmail.com', '1', 'uploaded/Screenshot_3.png', 'Ceo of emlakci.com'),
(36, '', '', '', '', '', 'images/buton/profil.png', ''),
(37, 'ErÅŸan', 'Kuneri', 'ersanabi', 'ersan@hotmail.com', '1234', 'uploaded/bannerbee.png', 'zxczc'),
(38, 'tolga', 'asd', 'osr', 'asdasd@sadass.sd', '123', 'uploaded/indexphoto.png', 'kjbbkjbkjbkjb');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `paylasilanlar`
--
ALTER TABLE `paylasilanlar`
  ADD PRIMARY KEY (`POST_ID`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`UYELER_ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `paylasilanlar`
--
ALTER TABLE `paylasilanlar`
  MODIFY `POST_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `UYELER_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
