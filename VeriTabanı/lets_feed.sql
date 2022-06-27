-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Nis 2022, 21:45:00
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `lets_feed`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`Id`, `admin`, `sifre`) VALUES
(1, 'Fırat ALTINDAĞ', '12345'),
(2, 'Furkan KARAKAYA', '6789'),
(3, 'Yunus derin', '12345'),
(5, 'Umut', '12345');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(300) COLLATE utf32_turkish_ci NOT NULL,
  `image_type` varchar(100) COLLATE utf32_turkish_ci NOT NULL,
  `image_size` varchar(100) COLLATE utf32_turkish_ci NOT NULL,
  `image_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_name` varchar(75) COLLATE utf32_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `images`
--

INSERT INTO `images` (`image_id`, `image_name`, `image_type`, `image_size`, `image_date`, `user_name`) VALUES
(102, 'resimler/17_42645531.jpg', 'image/jpeg', '9669', '2022-04-14 19:39:18', 'frknkrky'),
(103, 'resimler/17_5691803.jpg', 'image/jpeg', '34417', '2022-04-14 19:39:32', 'frknkrky');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici_verileri`
--

CREATE TABLE `kullanici_verileri` (
  `Id` int(11) NOT NULL,
  `Ad` varchar(50) NOT NULL,
  `Soyad` varchar(50) NOT NULL,
  `k_adi` varchar(50) NOT NULL,
  `eposta` varchar(50) NOT NULL,
  `cep_telefon` varchar(11) NOT NULL,
  `il` varchar(50) NOT NULL,
  `dogum_tarih` varchar(50) NOT NULL,
  `cinsiyet` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  `kurtarma` int(100) NOT NULL,
  `image_name` varchar(300) NOT NULL,
  `image_type` varchar(100) NOT NULL,
  `image_size` varchar(100) NOT NULL,
  `image_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `image_count` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kullanici_verileri`
--

INSERT INTO `kullanici_verileri` (`Id`, `Ad`, `Soyad`, `k_adi`, `eposta`, `cep_telefon`, `il`, `dogum_tarih`, `cinsiyet`, `sifre`, `kurtarma`, `image_name`, `image_type`, `image_size`, `image_date`, `image_count`) VALUES
(10, 'muhammed1', 'yasin2', 'yasin33', 'altindagfirat4934@gmail.com', '', '', '', '', '123', 1541, '', '', '', '2022-04-14 18:53:09', 0),
(11, 'mert', 'sarı', 'sarımert', 'transfertekno@gmail.com', '', '', '', '', 'mert123', 1541, '', '', '', '2022-04-14 18:53:09', 0),
(15, 'firat', 'altındağ', 'firat34', 'transfertekno@gmail.com', '', '', '', '', '12378', 1541, '', '', '', '2022-04-14 18:53:09', 0),
(16, 'LETS', 'FEED', 'c', 'letsfeed1@gmail.com', '', '', '', '', '123456', 5633, '', '', '', '2022-04-14 18:53:09', 0),
(17, 'Furkan', 'Karakaya', 'frknkrky', 'furkan_karakaya2109@hotmail.com', '', '', '', '', 'furkan123', 5790, '', '', '', '2022-04-14 18:53:09', 13),
(30, 'yunus', 'derin', 'yns', 'derinn', '', '', '', '', '123', 1541, '', '', '', '2022-04-14 18:53:09', 0),
(35, 'furkan', 'deneme', 'deneme123', 'furkan@hotmail.com', '', '', '', '', 'deneme123', 5304, '', '', '', '2022-04-14 18:53:09', 7);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Tablo için indeksler `kullanici_verileri`
--
ALTER TABLE `kullanici_verileri`
  ADD PRIMARY KEY (`Id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici_verileri`
--
ALTER TABLE `kullanici_verileri`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
