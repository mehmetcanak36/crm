-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 14 Ara 2020, 07:34:53
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `crm`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cName` text NOT NULL,
  `cLastName` text NOT NULL,
  `cEmail` text NOT NULL,
  `cAddress` text NOT NULL,
  `department_id` text,
  `manager_id` text,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `customer`
--

INSERT INTO `customer` (`id`, `cName`, `cLastName`, `cEmail`, `cAddress`, `department_id`, `manager_id`) VALUES
(56, 'necip', 'uysal', 'nu@numail.com', 'beÅŸiktas istanbul', '14', '7'),
(59, 'mustafa', 'gÃ¼ltekin', 'ma@mail.com', 'adana', '23', '13'),
(60, 'metin', 'uÃ§ar', 'mu@mail.com', 'beÅŸiktaÅŸ istanbul', '21', '11'),
(61, 'burak', 'yÄ±lmaz', 'by@mail.com', 'trabzon', '19', '9'),
(62, 'ali', 'metin', 'ali@mail.com', 'antalya', '22', '15'),
(63, 'sergen', 'yalÃ§Ä±n', 'sy@mail.com', 'kadÄ±koy istanbul', '17', '10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `dName` varchar(500) DEFAULT NULL,
  `dNumber` varchar(500) DEFAULT NULL,
  `dAddress` text CHARACTER SET utf8,
  `dPhoneNumber` varchar(500) DEFAULT NULL,
  `dContent` varchar(500) DEFAULT NULL,
  `dCountry` varchar(500) DEFAULT NULL,
  `dEmail` varchar(500) DEFAULT NULL,
  `dPostCode` varchar(500) DEFAULT NULL,
  `dCostumerType` varchar(500) DEFAULT NULL,
  `dReferenceCustomer` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `department`
--

INSERT INTO `department` (`did`, `dName`, `dNumber`, `dAddress`, `dPhoneNumber`, `dContent`, `dCountry`, `dEmail`, `dPostCode`, `dCostumerType`, `dReferenceCustomer`) VALUES
(21, 'ADIM ROBOT', '42', 'kÃ¼tahya teknokent', '05302239182', NULL, NULL, ' info@adimrobot.com', NULL, NULL, NULL),
(17, 'kuvarssoft', '44', 'DumlupÄ±nar Ãœniversitesi Teknokentti Ã‡alca Mah. EskiÅŸehir Karayolu 5. km. Ofis No : 9/10 Merkez/KÃœTAHYA', 'DumlupÄ±nar Ãœniversitesi Teknokentti Ã‡alca Mah. EskiÅŸehir Karayolu 5. km. Ofis No : 9/10 Merkez/KÃœTAHYA', NULL, NULL, 'destek@kuvarssoft.com', NULL, NULL, NULL),
(19, 'cevizsoft', '43', 'GazcÄ±lar Cad. KÄ±rcaali Mah. Anafartalar Sokak No: 2/1 Osmangazi / BURSA', ' 0549 252 19 00', NULL, NULL, 'info@cevizsoft.com', NULL, NULL, NULL),
(20, 'AKM Ä°nteraktif', '47', 'KÃ¼tahya DumlupÄ±nar TasarÄ±m Teknokent 1. Kat D:11, 2. OSB, KÃœTAHYA', '0534 228 85 05', NULL, NULL, 'ahmedberaterarslan', NULL, NULL, NULL),
(22, 'cezeri', '45', 'Ã‡alca OSB Mah. 1 Cad. No: 1/14 43100 MERKEZ KÃœTAHYA', ' 0 532 468 1661', NULL, NULL, ' cezeriteknoloji@gmail.com', NULL, NULL, NULL),
(23, 'RAÄ°NBOW', '46', 'TasarÄ±m Tekno Kent / KÃœTAHYA', '0523 205 47 46', NULL, NULL, 'rainbowturkiye43@gmail.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `mName` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `mLastName` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `mAddress` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `mEmail` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `mRole` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `manager`
--

INSERT INTO `manager` (`mid`, `mName`, `mLastName`, `mAddress`, `mEmail`, `mRole`) VALUES
(10, 'ABDULKERÄ°M', 'Ã‡AY', 'bursa', 'ac@acmail.com', 'insan kaynaklarÄ± yÃ¶neticisi'),
(11, 'Deniz', 'ArpacÄ±', 'eskisehir', 'da@damail.com', 'muhasebe uzmanÄ±'),
(12, 'sefa', 'karagÃ¶z', 'izmir', 'sk@skmail.com', 'yazÄ±lÄ±m geliÅŸtirme uzmanÄ±'),
(13, 'bora', 'aydÄ±n', 'bursa', 'ba@bamail.com', 'Ã¼retim mÃ¼dÃ¼rÃ¼'),
(14, 'bariÅŸ ', 'akarsu', 'ankara', 'ba@randommail.com', 'satÄ±ÅŸ uzmanÄ±'),
(9, 'Ä°lyas Umut', 'Aral', 'istanbul', 'ia@iamail.com', 'takÄ±m lideri'),
(15, 'bartu', 'utku', 'adana', 'bu@bumail.coom', 'proje mÃ¼dÃ¼rÃ¼'),
(16, 'ilyas', 'kurt', 'edirne', 'ik@ikmail.com', 'muhasebe uzmanÄ±');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `systemmanager`
--

DROP TABLE IF EXISTS `systemmanager`;
CREATE TABLE IF NOT EXISTS `systemmanager` (
  `ID` int(11) NOT NULL,
  `smName` varchar(11) NOT NULL,
  `smLastName` varchar(11) NOT NULL,
  `smUserName` text NOT NULL,
  `smPassword` varchar(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `systemmanager`
--

INSERT INTO `systemmanager` (`ID`, `smName`, `smLastName`, `smUserName`, `smPassword`) VALUES
(654321, 'mehmet', 'çanak', 'mehmetcanak', '123456'),
(623541, 'mehmettt', 'canakkk', 'mehmettcanak', '321654');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `pas` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `username`, `pas`, `email`) VALUES
(16, 'demo', 'asdas', 'asdasd'),
(17, 'demo', 'asdas', 'asdasd'),
(18, 'demo', 'asdas', 'asdasd'),
(19, 'sadasd', 'asdsad', 'asdasd'),
(20, '1', '1', '1'),
(21, '121321', '321321321', '132321'),
(22, 'oguz', 'oguz', 'oguz'),
(23, 'qweqweqweqw', 'eqwqwe', 'eqweqwe'),
(24, 'asdsad', 'sdasdas', 'asda'),
(25, 'asdas', 'dsa', 'asdsad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
