-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2014 at 03:18 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test2`
--
CREATE DATABASE IF NOT EXISTS `test2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test2`;

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE IF NOT EXISTS `mobile` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Brnd_Id` int(11) NOT NULL,
  `Net` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Camera` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Soft` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `chpst` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `G_Spcfc` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `grnrt` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Scrn` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Memo` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Clr` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Sound` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Status` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Model` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Price` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Image` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`),
  UNIQUE KEY `Model` (`Model`),
  KEY `Brnd_Id` (`Brnd_Id`),
  KEY `Brnd_Id_2` (`Brnd_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`Id`, `Brnd_Id`, `Net`, `Camera`, `Soft`, `chpst`, `G_Spcfc`, `grnrt`, `Scrn`, `Memo`, `Clr`, `Sound`, `Status`, `Model`, `Price`, `Image`) VALUES
(1, 1, '2an', '3ac', '4as', '5ac', '6ags', '7ag', '8as', '9am', '10ac', '11aso', '12as', '14am', '', ''),
(7, 1, 'value-2', 'value-3', 'value-4', 'value-5', 'value-6', 'value-7', 'value-8', 'value-9', 'value-10', 'value-11', 'value-12', 'value-1', 'value-14', 'value-15'),
(9, 1, 'value-2', 'value-3', 'value-4', 'value-5', 'value-6', 'value-7', 'value-8', 'value-9', 'value-10', 'value-11', 'value-12', 'v2', 'value-14', 'value-15'),
(11, 2, 'ff', 'ff', 'ff', 'ff', 'ff', 'ff', 'ff', 'ff', 'ff', 'ff', 'ff', 'v3', 'ff', 'ff'),
(13, 26, 'حافظه داخلی 16384 مگابایت - حافظه رم 2048 مگابایت - قابلیت نصب کارت حافظه از نوع Micro SD', '13.0 مگاپیکسل - فوکوس اتوماتیک - فلاش - دوربین مکالمه ویدئویی', 'سیستم عامل Android 4.2 Jelly Bean - پشتیبانی از جاوا - نمایش فایلهای مایکروسافت آفیس - نمایش فایلهای PDF', 'Exynos 5 Octa 5410 Chipset Quad-Core Cortex-A15 and Quad-Core Cortex-A7 CPU''s', 'یک سیم کارته - وزن : 130 گرم - مناسب برای عکاسی', 'گارانتی 1 ساله سام تل (نماینده رسمی سامسونگ در ایران)', 'صفحه نمایش رنگی لمسی خازنی از نوع Super AMOLED - سایز صفحه نمایش: 4.99 اینچ - دارای رزولوشن 1920 × 1080 - تراکم پیکسلی: 441 پیکسل بر اینچ - قابلیت نمایش 16 میلیون رنگ', 'حافظه داخلی 16384 مگابایت - حافظه رم 2048 مگابایت - قابلیت نصب کارت حافظه از نوع Micro SD', 'سفید,مشکی', 'فیش 3.5 میلیمتری هدفون', 'موجود', 'Galaxy-S4-I9', '1,405,000 تومان', 'Galaxy-S4-I9.jpg'),
(14, 28, '3G - 4G - GPRS - قابلیت اتصال به اینترنت از طریق وای فای - GPS - NFC - بلوتوث', '8.0 مگاپیکسل - فوکوس اتوماتیک - فلاش - دوربین مکالمه ویدئویی', 'سیستم عامل Android 4.1 Jelly Bean - پشتیبانی از جاوا - نمایش فایلهای مایکروسافت آفیس - نمایش فایلهای PDF', 'Qualcomm Snapdragon Pro Chipset Dual-Core Krait CPU', 'یک سیم کارته - وزن : 155 گرم', 'گارانتی 1 ساله آرین (کارت طلایی)', 'صفحه نمایش رنگی لمسی خازنی از نوع TFT - سایز صفحه نمایش: 4.6 اینچ - دارای رزولوشن 1280 × 720 - تراکم پیکسلی: 319 پیکسل بر اینچ - قابلیت نمایش 16 میلیون رنگ', 'حافظه داخلی 8192 مگابایت - حافظه رم 1024 مگابایت - قابلیت نصب کارت حافظه از نوع Micro SD', 'سفید, 	مشکی ', 'فیش 3.5 میلیمتری هدفون', 'موجود', 'Xperia-SPd', '860,000 تومان', 'Xperia-SPd.jpg'),
(15, 1, '3G - 4G - GPRS - قابلیت اتصال به اینترنت از طریق وای فای - GPS - بلوتوث', '5.0 مگاپیکسل - فوکوس اتوماتیک - فلاش - دوربین مکالمه ویدئویی صدا:فیش 3.5 میلیمتری هدفون', 'سیستم عامل Microsoft Windows Phone 8 - نمایش فایلهای مایکروسافت آفیس - نمایش فایلهای PDF', 'Qualcomm Snapdragon S4 Chipset Dual-Core Krait CPU', 'یک سیم کارته - وزن : 159 گرم', 'گارانتی 1 ساله نوکیا', 'صفحه نمایش رنگی لمسی خازنی از نوع IPS LCD - سایز صفحه نمایش: 4.7 اینچ - دارای رزولوشن 800 × WVGA 480 - تراکم پیکسلی: 199 پیکسل بر اینچ - قابلیت نمایش 16 میلیون رنگ', 'حافظه داخلی 8192 مگابایت - حافظه رم 512 مگابایت - قابلیت نصب کارت حافظه از نوع Micro SD', 'مشکی, 	سفید ', 'فیش 3.5 میلیمتری هدفون', 'موجود', 'Lumia-625', '765,000 تومان', 'Lumia-625.jpg'),
(16, 32, '3G - 4G - GPRS - قابلیت اتصال به اینترنت از طریق وای فای - GPS - NFC - بلوتوث', '13.0 مگاپیکسل - فوکوس اتوماتیک - فلاش - دوربین مکالمه ویدئویی', 'سیستم عامل Android 4.1 Jelly Bean - پشتیبانی از جاوا - نمایش فایلهای مایکروسافت آفیس - نمایش فایلهای PDF', 'Qualcomm Snapdragon 600 Chipset Quad-Core Krait 300 CPU', 'یک سیم کارته - وزن : 160 گرم - مناسب برای عکاسی', 'گارانتی طلایی 2 ساله ال جی', 'صفحه نمایش رنگی لمسی خازنی از نوع True HD-IPS + LCD - سایز صفحه نمایش: 5.5 اینچ - دارای رزولوشن 1920 × 1080 - تراکم پیکسلی: 401 پیکسل بر اینچ - قابلیت نمایش 16 میلیون رنگ', 'حافظه داخلی 16384 مگابایت - حافظه رم 2048 مگابایت - قابلیت نصب کارت حافظه از نوع Micro SD', 'سفید, 	مشکی ', 'فیش 3.5 میلیمتری هدفون', 'موجود', 'Optimus-G', '1,224,000 تومان', 'Optimus-G.jpg'),
(17, 37, '3G - 4G - GPRS - قابلیت اتصال به اینترنت از طریق وای فای - GPS - بلوتوث', '8.0 مگاپیکسل - فوکوس اتوماتیک - فلاش - دوربین مکالمه ویدئویی', 'سیستم عامل Apple iOS 7 - نمایش فایلهای PDF', 'Apple A7 & M7 Motion Chipset 64bit Architecture CPU', 'یک سیم کارته - وزن : 112 گرم - طراحی مناسب بانوان ، مناسب برای عکاسی', '', 'صفحه نمایش رنگی لمسی LED-backlit IPS LCD با دقت رتینا و لمسی خازنی (Capacitive Touchscreen) - سایز صفحه نمایش: 4.0 اینچ - دارای رزولوشن 1136 × 640 - تراکم پیکسلی: 326 پیکسل بر اینچ - قابلیت نمایش 16 میلیون رنگ', 'حافظه داخلی 64768 مگابایت', 'طلایی, 	خاکستری ,مشکی', 'فیش 3.5 میلیمتری هدفون', '5', 'iPhone-5s', '3,685,000 تومان', 'iPhone-5s.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE IF NOT EXISTS `tbl_brand` (
  `Brnd_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Brnd_Id`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`Brnd_Id`, `Name`) VALUES
(31, 'Apple'),
(27, 'HTC'),
(32, 'LG'),
(1, 'Nokia'),
(28, 'Sony'),
(26, 'Sumsung'),
(29, 'U_Name');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_person`
--

CREATE TABLE IF NOT EXISTS `tbl_person` (
  `Prsn_Id` int(11) NOT NULL AUTO_INCREMENT,
  `SHpngBskt_Id` int(11) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(100) DEFAULT NULL,
  `Mobile` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Prsn_Id`),
  UNIQUE KEY `Username` (`Username`),
  KEY `FK_Relationship_1` (`SHpngBskt_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tbl_person`
--

INSERT INTO `tbl_person` (`Prsn_Id`, `SHpngBskt_Id`, `Username`, `Password`, `Email`, `Fname`, `Lname`, `Mobile`) VALUES
(3, NULL, 'user', 'user', 'user@yahoo.com', 'user', 'user', '1234567890'),
(25, NULL, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin', '4567890'),
(28, NULL, 'user2', 'user2', 'user2@yahoo.com', 'user2', 'user2', '456789'),
(29, NULL, 'eee', 'eee', 'tt', 'ttt', 'tt', '7654'),
(30, NULL, 'dd', 'dd', 'yy', 'yy', 'yy', '65'),
(31, NULL, 'rrr', 'rrr', 'rrr', '44', 'rr', '654'),
(32, NULL, 'tt', 'oiuy', 'fff', 'gf', 'fff', '7654'),
(33, NULL, 'user1', 'user1', 'user1@yahoo.com', 'user1', 'user1', '5678'),
(34, NULL, 'user3', 'user3', 'user3@yahoo.com', 'user3', 'user3', '987654'),
(35, NULL, 'user4', 'user4', 'user4@yahoo.com', 'user4', 'user4', '197657885'),
(36, NULL, 'user5', 'user5', 'user5@gmail.com', 'user5', 'user5', '93567823456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shoppingbasket`
--

CREATE TABLE IF NOT EXISTS `tbl_shoppingbasket` (
  `SHpngBskt_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`SHpngBskt_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_person`
--
ALTER TABLE `tbl_person`
  ADD CONSTRAINT `FK_Relationship_1` FOREIGN KEY (`SHpngBskt_Id`) REFERENCES `tbl_shoppingbasket` (`SHpngBskt_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
