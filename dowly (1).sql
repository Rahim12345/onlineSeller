-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Hazırlanma Vaxtı: 25 İyul, 2020 saat 01:31
-- Server versiyası: 10.4.10-MariaDB
-- PHP Versiyası: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Verilənlər Bazası: `dowly`
--

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `realTime` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sxemi çıxarılan cedvel `banner`
--

INSERT INTO `banner` (`id`, `title`, `content`, `image`, `realTime`) VALUES
(7, 'Saytımıza Xoş Gəlmişsiniz', 'Yeni məhsullarımız və endirimlər barədə məlumatlanmaq üçün bizi izləyin', 'faf4aad36b8a38948075bf599de48210qt-bg.jpg', '05.07.2020'),
(6, 'Saytımıza Xoş Gəlmişsiniz', 'Yeni məhsullarımız və endirimlər barədə məlumatlanmaq üçün bizi izləyin', '061cddacbfe3e99e32e2851d55eb6784all-bg.jpg', '05.07.2020'),
(5, 'Saytımıza Xoş Gəlmişsiniz', 'Yeni məhsullarımız və endirimlər barədə məlumatlanmaq üçün bizi izləyin', '5765dd93b97bcfbfbf2f27eaae92dc96about-img.jpg', '05.07.2020'),
(8, 'Saytımıza Xoş Gəlmişsiniz', 'Yeni məhsullarımız və endirimlər barədə məlumatlanmaq üçün bizi izləyin', 'c887b24ac9853fd69034df3e0dcfa394gallery-img-05.jpg', '05.07.2020');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `sira` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sxemi çıxarılan cedvel `category`
--

INSERT INTO `category` (`id`, `name`, `sira`) VALUES
(9, 'Stəkan', '2'),
(4, 'Boşqab', '1'),
(8, 'Qazan', '3');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `kompaniya`
--

DROP TABLE IF EXISTS `kompaniya`;
CREATE TABLE IF NOT EXISTS `kompaniya` (
  `kompaniyaID` int(11) NOT NULL AUTO_INCREMENT,
  `kompaniyaUrl` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kompaniyaTitle` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `realTime` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`kompaniyaID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sxemi çıxarılan cedvel `kompaniya`
--

INSERT INTO `kompaniya` (`kompaniyaID`, `kompaniyaUrl`, `kompaniyaTitle`, `comment`, `realTime`) VALUES
(1, '9005ffe339f35e28413249a3cb661ec0download1.png', 'cv', 'gf', '05.07.2020'),
(2, 'b32e87629eece6d3438502905bfb2d67download1.png', 'Yeni il münasibətilə ŞOK! endirim', 'Yeni il münasibəti ilə 300 manatlıq alış-veriş edən hər kəsə 50 manat dəyərində stəkan dəsti hədiyyə', '05.07.2020'),
(3, '58ef9ba640f5c972a0dc91f1b3ddb1f5download1.png', 'Yeni il münasibətilə ŞOK! endirim', 'Yeni il münasibəti ilə 300 manatlıq alış-veriş edən hər kəsə 50 manat dəyərində stəkan dəsti hədiyyə', '05.07.2020'),
(4, '8995f004d578abb3cc8b69738407c74fdownload1.png', 'Yeni il münasibətilə ŞOK! endirim', 'Yeni il münasibəti ilə 300 manatlıq alış-veriş edən hər kəsə 50 manat dəyərində stəkan dəsti hədiyyə', '05.07.2020'),
(5, 'a42da7d41f4034238e926945de3ed217blog-img-09.jpg', 'Yeni il münasibətilə ŞOK! endirimm', 'Yeni il münasibəti ilə 300 manatlıq alış-veriş edən hər kəsə 50 manat dəyərində stəkan dəsti hədiyyə', '09.07.2020');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `logo`
--

DROP TABLE IF EXISTS `logo`;
CREATE TABLE IF NOT EXISTS `logo` (
  `logoID` int(11) NOT NULL AUTO_INCREMENT,
  `logoUrl` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `realTime` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`logoID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sxemi çıxarılan cedvel `logo`
--

INSERT INTO `logo` (`logoID`, `logoUrl`, `realTime`) VALUES
(4, '195d473bf80163bf468ad40cbdf4b4d6logo1.png', '05.07.2020'),
(3, 'b2146545dde46cffa93c6ccb3e957849gallery-img-01.jpg', '05.07.2020'),
(5, 'f08b6dd9ff36127010033aa0a186aca2avt-img.jpg', '05.07.2020'),
(6, '5f06cad0c2bed06fe6778f2e2c8b3149download.png', '05.07.2020'),
(7, 'dda5e0b96eacef7b46a9d02a4b792e4adownload1.png', '05.07.2020'),
(8, 'a11001ba501a3c8d217ca902ba5c0382download1.png', '05.07.2020');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryID` int(11) NOT NULL,
  `manufacturer` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `productName` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `Price` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `endirim` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `photos` text COLLATE utf8_unicode_ci NOT NULL,
  `colors` text COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(450) COLLATE utf8_unicode_ci NOT NULL,
  `realTime` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sxemi çıxarılan cedvel `products`
--

INSERT INTO `products` (`id`, `categoryID`, `manufacturer`, `productName`, `Price`, `endirim`, `photos`, `colors`, `about`, `realTime`) VALUES
(61, 8, 'Azərbaycan', 'Qazan', '12', '0', 'bde324065019078c90177c07735fa81bblog-img-01.jpg', 'Qara', 'bilimir', '30.06.2020'),
(60, 4, 'Azərbaycan', 'Armudu', '45', '99', '62474972334cd4a37b4f3c52e8abf9b3img-01.jpg', 'Ağ,Qara', 'qazxsqedcrfsdcfvb', '28.06.2020'),
(63, 4, 'İtaly', 'Aş', '87', '0', '876df9acd4f9a6f7a3f9f2d51b750f17blog-img-07.jpg', 'Ağ,Qırmızı,Mavi', 'asd', '05.07.2020'),
(64, 8, 'İran', 'aş', '12', '0', 'd55d7889adb18ceba44652afbb325f50blog-img-01.jpg', 'Ağ', 'gv', '05.07.2020'),
(62, 9, 'Turkey', 'Daş', '51', '0', 'e3087422de495b4bc1747759b42cc531about-img.jpg', 'Ağ,Qara', 'ass', '05.07.2020'),
(56, 9, 'USA', 'qq1', '77', '1', 'e08598022e1cd18cab38c24e439c2867blog-img-03.jpg', 'Krem', 'fds', '27.06.2020'),
(57, 9, 'mh', 'm,n', '98', '0', '72faecc68f994aaf486c72ec8d58b656blog-img-01.jpg', 'Qızılı', ',m', '27.06.2020'),
(58, 9, 'j', '8', '889', '0', '609b566fd96f3f8e85fff789a8a02542blog-img-07.jpg', 'Qəhvəyi', 'jh', '27.06.2020'),
(59, 9, 'Canali', 'jh', '9', '0', '5fdb0db88110c0f32cf68022156a3593blog-img-06.jpg', 'Boz', 'jh', '27.06.2020'),
(65, 8, 'Rus', 'Qazan', '434', '0', '8624211153912af823df7290c34ba3b2blog-img-03.jpg', 'Ağ', 'gbf', '05.07.2020'),
(66, 9, 'Turkey', 'Qazan', '200', '0', 'd23c19b1e9b660e3dcf9c240c3996fa0about-img.jpg', 'Qırmızı', 'qalinlig 4mm', '05.07.2020');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `subscribeID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `userAgent` text COLLATE utf8_unicode_ci NOT NULL,
  `realTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`subscribeID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sxemi çıxarılan cedvel `subscribe`
--

INSERT INTO `subscribe` (`subscribeID`, `email`, `userAgent`, `realTime`) VALUES
(1, 'rahim@mail.ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-06 20:33:07');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `succestions`
--

DROP TABLE IF EXISTS `succestions`;
CREATE TABLE IF NOT EXISTS `succestions` (
  `succestionID` int(11) NOT NULL AUTO_INCREMENT,
  `userAgent` text COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `succestion` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `read_unread` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `realTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`succestionID`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sxemi çıxarılan cedvel `succestions`
--

INSERT INTO `succestions` (`succestionID`, `userAgent`, `name`, `contact`, `succestion`, `read_unread`, `realTime`) VALUES
(1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'Süleymanov Rahim Camal', '0773244201', 'salam dur atdır burdan)öğıəçşü', '1', '2020-07-06 19:41:54'),
(2, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'gjglfdjlg', 'cvlnglvb', 'blvckjml', '1', '2020-07-07 05:55:27'),
(3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'gfd', 'gfs', 'sd', '1', '2020-07-07 05:55:39'),
(4, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'grtf', 'gh', '', '1', '2020-07-07 05:55:42'),
(5, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'fd', 'fd', 'fd', '1', '2020-07-07 05:55:45'),
(6, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'dv', 'gf', 'gf', '1', '2020-07-07 05:55:50'),
(7, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'gf', 'fgd', 'fd', '1', '2020-07-07 05:55:53'),
(8, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'gfd', 'gfd', 'fgd', '1', '2020-07-06 19:38:18'),
(9, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'hg', 'hg', 'hg', '1', '2020-07-06 19:39:47'),
(10, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'hg', 'hg', 'hg', '1', '2020-07-07 05:55:58'),
(11, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'hg', 'hg', 'hg', '1', '2020-07-06 21:05:09'),
(12, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'hg', 'hg', 'hg', '1', '2020-07-06 19:38:08'),
(13, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'hg', 'hg', 'hg', '1', '2020-07-06 16:37:44'),
(14, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'hg', 'hg', 'hg', '1', '2020-07-06 16:33:30'),
(15, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'hg', 'hg', 'hg', '1', '2020-07-06 16:32:43'),
(16, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'hg', 'hg', 'hg', '1', '2020-07-06 16:29:44'),
(17, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'hg', 'hg', 'hg', '1', '2020-07-06 16:30:34'),
(18, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'hg', 'hg', 'hg', '1', '2020-07-06 15:50:16'),
(19, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'Lorem ipsum dolor sit amet, consectetur adipisicin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis delectus, culpa sapiente molestias ab', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis delectus, culpa sapiente molestias ab ipsum facere nulla. Ipsa natus tenetur nesciunt corrupti est vitae beatae consectetur, excepturi voluptatibus recusandae non?', '1', '2020-07-06 15:44:19'),
(20, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'eli', 'eli', 'knfsdnlflsdmfld', '1', '2020-07-06 19:49:14'),
(21, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'salam', 'necesen', 'kfldsl', '1', '2020-07-07 06:45:24'),
(22, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'gf', 'g', 'fd', '0', '2020-07-07 17:15:39'),
(23, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'gf', 'g', 'fd', '0', '2020-07-07 17:15:51'),
(24, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'qqqqqqqqqqq', 'gf', 'fd', '1', '2020-07-09 07:18:50'),
(25, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'th', 'bh', 'd', '1', '2020-07-07 18:14:24'),
(26, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '87', 'uy', 'iuy', '1', '2020-07-07 18:14:19'),
(27, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 'fdf', 'fdfd', 'ggfd', '1', '2020-07-09 07:44:08');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sxemi çıxarılan cedvel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date`) VALUES
(1, 'Əli Balayev', 'alibalayev@mail.ru', '12345678', '23.06.2020');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `visitors`
--

DROP TABLE IF EXISTS `visitors`;
CREATE TABLE IF NOT EXISTS `visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `realTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sxemi çıxarılan cedvel `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `realTime`) VALUES
(1, '::1', '2020-07-07 19:43:01'),
(2, '::1', '2020-07-07 19:43:13'),
(3, '::1', '2020-07-07 19:49:37'),
(4, '::1', '2020-07-07 19:49:41'),
(5, '::1', '2020-07-07 19:49:44'),
(6, '::1', '2020-07-07 19:49:47'),
(7, '::1', '2020-07-07 19:50:03'),
(8, '::1', '2020-07-07 19:50:32'),
(9, '::1', '2020-07-07 19:50:46'),
(10, '::1', '2020-07-07 19:50:51'),
(11, '::1', '2020-07-07 19:50:54'),
(12, '::1', '2020-07-07 19:51:03'),
(13, '::1', '2020-07-07 20:13:15'),
(14, '::1', '2020-07-07 20:19:36'),
(15, '::1', '2020-07-07 20:19:42'),
(16, '::1', '2020-07-07 20:19:50'),
(17, '::1', '2020-07-07 20:20:53'),
(18, '::1', '2020-07-09 07:09:35'),
(19, '::1', '2020-07-09 07:09:36'),
(20, '::1', '2020-07-09 07:09:58'),
(21, '::1', '2020-07-09 07:10:14'),
(22, '::1', '2020-07-09 07:10:19'),
(23, '::1', '2020-07-09 07:16:56'),
(24, '::1', '2020-07-09 07:17:01'),
(25, '::1', '2020-07-09 07:25:12'),
(26, '::1', '2020-07-09 07:25:18'),
(27, '::1', '2020-07-09 07:25:23'),
(28, '::1', '2020-07-09 07:30:42'),
(29, '::1', '2020-07-09 07:30:50'),
(30, '::1', '2020-07-09 07:31:57'),
(31, '::1', '2020-07-09 07:32:39'),
(32, '::1', '2020-07-09 07:33:40'),
(33, '::1', '2020-07-09 07:35:34'),
(34, '::1', '2020-07-09 07:35:37'),
(35, '::1', '2020-07-09 07:35:44'),
(36, '::1', '2020-07-09 07:37:17'),
(37, '::1', '2020-07-09 07:37:50'),
(38, '::1', '2020-07-09 07:38:58'),
(39, '::1', '2020-07-09 08:01:13'),
(40, '::1', '2020-07-09 08:27:29'),
(41, '::1', '2020-07-09 08:28:56'),
(42, '::1', '2020-07-09 08:29:00'),
(43, '::1', '2020-07-09 08:29:39'),
(44, '::1', '2020-07-09 08:32:07'),
(45, '::1', '2020-07-09 08:58:10'),
(46, '::1', '2020-07-22 05:49:07'),
(47, '::1', '2020-07-25 01:30:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
