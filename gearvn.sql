-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 05:49 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gearvn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(4) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `address` int(11) NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` date NOT NULL,
  `status` bit(2) NOT NULL,
  `payments` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `notes` int(255) DEFAULT NULL,
  `id_guest` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `total`, `address`, `phone`, `date_created`, `status`, `payments`, `notes`, `id_guest`) VALUES
(31, '23688000', 109, '0966643251', '2018-10-06', b'00', 'Khách hàng nhận hàng tại nhà', 0, 2),
(32, '116650000', 109, '0966643251', '2018-10-06', b'00', 'Khách hàng nhận hàng tại nhà', 0, 2),
(33, '2997', 109, '0966643251', '2018-10-06', b'00', 'Khách hàng nhận hàng tại nhà', 0, 2),
(34, '7500000', 109, '0966643251', '2018-10-06', b'00', 'Khách hàng nhận hàng tại nhà', 0, 2),
(35, '7500000', 109, '0966643251', '2018-10-06', b'00', 'Khách hàng nhận hàng tại nhà', 0, 2),
(36, '7500000', 109, '0966643251', '2018-10-06', b'00', 'Khách hàng nhận hàng tại nhà', 0, 2),
(37, '7500000', 0, '', '2018-10-06', b'00', '', 0, 2),
(38, '7500000', 109, '0966643251', '2018-10-06', b'00', 'Khách hàng nhận hàng tại nhà', 0, 2),
(39, '7500000', 109, '0966643251', '2018-10-06', b'00', 'Khách hàng nhận hàng tại nhà', 0, 2),
(40, '7500000', 0, '', '2018-10-06', b'00', '', 0, 2),
(41, '7500000', 109, '0966643251', '2018-10-06', b'00', 'Khách hàng nhận hàng tại nhà', 0, 2),
(42, '15000000', 109, '0966643251', '2018-10-06', b'00', 'Khách hàng nhận hàng tại nhà', 0, 2),
(43, '21000000', 109, '0966643251', '2018-10-06', b'00', 'Khách hàng nhận hàng tại nhà', 0, 2),
(44, '1200000', 635456, '096643251', '2018-10-07', b'00', 'Khách hàng nhận hàng tại nhà', 0, 6),
(45, '11456000', 635456, '096643251', '2018-10-07', b'00', 'Khách hàng nhận hàng tại nhà', 0, 6),
(46, '76800000', 635456, '096643251', '2018-10-07', b'00', 'Khách hàng nhận hàng tại nhà', 0, 6),
(47, '97500000', 635456, '096643251', '2018-10-07', b'00', 'Khách hàng nhận hàng tại nhà', 0, 6),
(48, '1432000', 5465465, '4546546', '2018-10-07', b'00', 'Khách hàng nhận hàng tại nhà', 0, 9),
(49, '28800000', 109, '0966643251', '2018-10-07', b'00', 'Khách hàng nhận hàng tại nhà', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(4) NOT NULL,
  `id_product` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `id_bill` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_product`, `count`, `id_bill`) VALUES
(6, 68, 9, 31),
(7, 52, 9, 31),
(8, 67, 5, 32),
(9, 50, 3, 33),
(10, 78, 1, 34),
(11, 78, 1, 38),
(12, 78, 1, 41),
(13, 78, 2, 42),
(14, 72, 10, 43),
(15, 52, 1, 44),
(16, 68, 8, 45),
(17, 69, 24, 46),
(18, 78, 13, 47),
(19, 54, 1, 48),
(22, 52, 24, 49);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(4) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`) VALUES
(19, 'MSI', './view/Public/img/category/MSI.png'),
(20, 'AORUS', './view/Public/img/category/AORUS.png'),
(21, 'RAZOR', './view/Public/img/category/Razer_snake_logo.png'),
(22, 'AMD', './view/Public/img/category/amd-logo-png-transparent.png'),
(23, 'SAMSUNG', './view/Public/img/category/black-samsung-logo-png-21-1024x201.png'),
(27, 'INTEL', './view/Public/img/category/12312qweqweqw.png'),
(28, 'ASUS', './view/Public/img/category/qewqe.jpg'),
(30, 'GYGABYTE', './view/Public/img/category/ams.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên loại',
  `id` int(4) NOT NULL,
  `show` bit(1) NOT NULL DEFAULT b'0',
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`name`, `id`, `show`, `img`) VALUES
('MAIN', 18, b'1', './view/Public/img/category/MAIN.png'),
('PSU', 19, b'1', './view/Public/img/category/PSU.png'),
('RAM', 20, b'1', './view/Public/img/category/RAM.png'),
('SSD', 21, b'1', './view/Public/img/category/SSD.png'),
('CPU', 22, b'1', './view/Public/img/category/CPU.png'),
('VGA', 25, b'1', './view/Public/img/category/VGA.png'),
('AS', 26, b'1', './view/Public/img/category/CPU.png'),
('FAN', 28, b'1', './view/Public/img/category/FAN.png');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `time` datetime NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_product` int(4) NOT NULL,
  `id_guest` int(4) NOT NULL,
  `rank` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `time`, `content`, `id_product`, `id_guest`, `rank`) VALUES
(39, '2018-10-04 00:00:00', '12312', 72, 2, 0),
(40, '2018-10-04 00:00:00', 'Thánh', 72, 2, 0),
(41, '2018-10-04 00:00:00', 'Thánh', 72, 2, 0),
(42, '2018-10-04 00:00:00', 'Quá tầm thường luôn ý ', 54, 2, 0),
(43, '2018-10-04 00:00:00', 'Còn hàng Không ad Siêu nhân', 68, 2, 0),
(44, '2018-10-04 00:00:00', 'Giao hàng ngoài tình không vậy ', 71, 2, 0),
(45, '2018-10-04 00:00:00', 'Hàng trâu ', 77, 2, 0),
(46, '2018-10-04 00:00:00', 'Trâu', 73, 2, 0),
(47, '2018-10-04 00:00:00', 'Hàng đểu nhé. Đừng mua mọi người ơi', 70, 2, 0),
(48, '2018-10-04 00:00:00', 'Quá đểu luôn ', 70, 2, 0),
(49, '2018-10-04 00:00:00', 'Ở đâu cũng có dấu răng', 52, 2, 0),
(50, '2018-10-05 00:00:00', 'haha', 54, 2, 0),
(51, '2018-10-05 00:00:00', 'ngu như con bò', 67, 2, 0),
(52, '2018-10-05 00:00:00', 'ngu như con bò', 67, 2, 0),
(53, '2018-10-05 00:00:00', 'Khoa óc chó đã commenr', 76, 2, 0),
(54, '2018-10-05 00:00:00', 'Haha', 76, 2, 0),
(55, '2018-10-05 00:00:00', 'haha Quá phê', 71, 2, 0),
(56, '2018-10-05 00:00:00', 'Dấu răng chắt răng', 52, 2, 0),
(57, '2018-10-05 00:00:00', 'kdkhakjdhsakj', 77, 2, 0),
(58, '2018-10-05 00:00:00', 'Haha', 54, 2, 0),
(59, '2018-10-06 00:00:00', 'Há Há', 72, 2, 0),
(60, '2018-10-07 00:00:00', 'ạdálkjádl\r\n', 54, 2, 0),
(61, '2018-10-07 00:00:00', 'Nó quá cùi  bấp nhé', 54, 2, 0),
(62, '2018-10-07 00:00:00', 'ádá', 67, 6, 0),
(63, '2018-10-07 00:00:00', 'hâh\r\n', 67, 6, 0),
(64, '2018-10-07 00:00:00', 'há há', 54, 6, 0),
(65, '2018-10-07 00:00:00', 'há há', 54, 6, 0),
(66, '2018-10-07 00:00:00', 'há há', 54, 6, 0),
(67, '2018-10-07 00:00:00', 'há há', 54, 6, 0),
(68, '2018-10-07 00:00:00', 'hàng dỡm', 70, 9, 0),
(69, '2018-10-07 00:00:00', '', 54, 9, 0),
(70, '2018-10-07 00:00:00', '', 67, 9, 0),
(71, '2018-10-07 00:00:00', '1', 67, 9, 0),
(72, '2018-10-07 00:00:00', '1', 67, 9, 0),
(73, '2018-10-07 00:00:00', '1', 67, 9, 0),
(74, '2018-10-07 00:00:00', '1', 67, 9, 0),
(75, '2018-10-07 00:00:00', '1', 67, 9, 0),
(76, '2018-10-07 00:00:00', '1', 67, 9, 0),
(77, '2018-10-07 00:00:00', '1', 67, 9, 0),
(78, '2018-10-07 00:00:00', '1', 52, 9, 0),
(79, '2018-10-07 00:00:00', '1', 52, 9, 0),
(80, '2018-10-07 00:00:00', '1', 52, 9, 0),
(81, '2018-10-07 00:00:00', '1', 52, 9, 0),
(82, '2018-10-07 00:00:00', '1', 52, 9, 0),
(83, '2018-10-07 00:00:00', '1', 67, 9, 0),
(84, '2018-10-07 00:00:00', '1', 67, 9, 0),
(85, '2018-10-07 00:00:00', '1', 67, 9, 0),
(86, '2018-10-07 00:00:00', '1', 67, 9, 0),
(87, '2018-10-07 00:00:00', '1', 67, 9, 0),
(88, '2018-10-07 00:00:00', '1', 67, 9, 0),
(89, '2018-10-07 00:00:00', '1', 67, 9, 0),
(90, '2018-10-07 00:00:00', '1', 67, 9, 0),
(91, '2018-10-07 00:00:00', '1', 67, 9, 0),
(92, '2018-10-07 00:00:00', '1', 67, 9, 0),
(93, '2018-10-07 00:00:00', '1', 70, 9, 0),
(94, '2018-10-07 00:00:00', '1', 70, 9, 0),
(95, '2018-10-07 00:00:00', '1', 70, 9, 0),
(96, '2018-10-07 00:00:00', '1', 54, 9, 0),
(97, '2018-10-07 00:00:00', '1', 54, 9, 0),
(98, '2018-10-07 00:00:00', '1', 54, 9, 0),
(99, '2018-10-07 00:00:00', 'sada', 72, 9, 0),
(100, '2018-10-07 00:00:00', '21313', 52, 9, 0),
(101, '2018-10-07 00:00:00', '8979798789', 52, 9, 0),
(102, '2018-10-07 00:00:00', '256', 67, 3, 0),
(103, '2018-10-07 00:00:00', '2656456456', 67, 3, 0),
(104, '2018-10-07 00:00:00', '564546', 52, 5, 0),
(105, '2018-10-08 00:00:00', '.0\r\n.032165168921320321031', 54, 5, 0),
(106, '2018-10-08 00:00:00', '4654654064640654jkh k jhk hj  j k k kjh k ', 54, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(4) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_facebook` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `active` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `name`, `email`, `password`, `id_facebook`, `image`, `address`, `number`, `active`) VALUES
(2, 'Ngọc Nhất', 'nhatnnps07643@fpt.edu.vn', '123456789', NULL, './view/Public/img/avatar.jpg', '109/15 Đường Hiệp Bình, Quận Thủ Đức', '0966643251', b'1'),
(3, 'qưê', 'lightghost02@yahoo.com.vn', '202cb962ac59075b964b07152d234b70', NULL, ' ./view/Public/img/user', '19565', '312123', b'1'),
(4, 'qưê', 'lightghost02@yahoo.com.vn', '202cb962ac59075b964b07152d234b70', NULL, ' ./view/Public/img/user', '19565', '312123', b'1'),
(5, 'Ngọc Quỳnh', 'nhatnnps07643@gmail.com', '4297f44b13955235245b2497399d7a93', NULL, ' ./view/Public/img/user44_5553e79a1d1b4801b8a7ff6ddd71cc31.jpg', '109/15 Đường Hiệp Bình, Hiệp Bình Phước, Quận Thủ Đức', '0966643251', b'1'),
(6, 'Ngọc Quỳnh', 'lightghost02@fpt.edu.vn', '202cb962ac59075b964b07152d234b70', NULL, ' ./view/Public/img/user44_5553e79a1d1b4801b8a7ff6ddd71cc31.jpg', '0635456', '096643251', b'1'),
(7, 'Duy Thanhf', 'nhat@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, ' ./view/Public/img/userjustice-gavel-and-book.jpg', '123', '123', b'1'),
(8, 'qưeqưe', 'nha@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, ' ./view/Public/img/user38851115_818951421632904_6931215185742921728_n.jpg', '123', '123', b'1'),
(9, 'Hanh Ha', 'hanh@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, ' ./view/Public/img/user38851115_818951421632904_6931215185742921728_n.jpg', '5465465', '4546546', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(4) NOT NULL,
  `id_product` int(11) NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `id_product`, `link`) VALUES
(51, 50, './view/Public/img/upload_026cad3de64d462bbb4071b6ef3d630a.jpg'),
(52, 52, './view/Public/img/upload_026cad3de64d462bbb4071b6ef3d630a.jpg'),
(53, 72, 'view/Public/img/z370_sli_plus_gearvn.jpg'),
(54, 72, 'view/Public/img/msi-z370-sli-plus-4.png'),
(55, 50, 'view/Public/img/msi-z370-sli-plus-5.png'),
(56, 73, 'view/Public/img/5_624554b0c35243b3ba8f486f74683c0d.jpg'),
(57, 74, 'view/Public/img/asus_b360g_gearvn01.png'),
(58, 74, 'view/Public/img/asus_b360g_gearvn07.png'),
(59, 76, 'view/Public/img/148240455597075fec20cd4aa036862b11241874617e892f84.jpg'),
(60, 77, 'view/Public/img/raciz4vvqgzyjeov_setting_000_1_90_end_500.png'),
(61, 77, 'view/Public/img/sahsrwcflqz22fcz_setting_000_1_90_end_500.png'),
(62, 78, 'view/Public/img/vr_button_grande.png'),
(63, 78, 'view/Public/img/product_10_20160818151303_57b55fffad3bc_grande.png'),
(64, 78, 'view/Public/img/product_5_20160818151304_57b5600038253.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(4) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `sale` decimal(6,4) DEFAULT NULL,
  `date_created` date NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `special` bit(1) NOT NULL,
  `views` int(10) NOT NULL,
  `purchases` int(5) NOT NULL DEFAULT '0',
  `stock` int(10) NOT NULL,
  `guarantee` tinyint(2) NOT NULL,
  `id_category` int(4) NOT NULL,
  `id_brand` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `sale`, `date_created`, `description`, `special`, `views`, `purchases`, `stock`, `guarantee`, `id_category`, `id_brand`) VALUES
(50, 'AMD Ryzen 3 1200 / 4 nhân 4 luồng / 3.1GHz / 8M / SK AM4$', './view/Public/img/product/upload_026cad3de64d462bbb4071b6ef3d630a.jpg', '999', '0.0000', '2018-09-26', 'Mô tả', b'0', 0, 34, 100, 36, 22, 22),
(52, 'AMD Ryzen 5 1600X / 6 nhân 12 luồng / 3.6GHz / 16M / SK AM4', './view/Public/img/product/upload_026cad3de64d462bbb4071b6ef3d630a.jpg', '1200000', '0.0000', '2018-09-26', 'Nô tả ', b'1', 0, 58, 100, 36, 22, 22),
(54, 'AMD Threadripper™ 1950X Socket TR4', './view/Public/img/product/upload_026cad3de64d462bbb4071b6ef3d630a.jpg', '1432000', '0.0000', '2018-09-26', 'Mô tả', b'1', 0, 24, 100, 36, 22, 22),
(67, 'AMD Athlon™ 200GE 3.2GHz / 2 nhân 4 luồng / Radeon™ Vega 3 Graphics', './view/Public/img/product/gearvn_cpu_amd.jpg', '23330000', '0.0000', '2018-10-03', 'Thông tin chung:\r\n-Nhà sản xuất : AMD\r\n-Bảo hành : 36 tháng \r\n-Tình trạng: đang về hàng', b'1', 0, 44, 100, 36, 22, 19),
(68, 'AMD Threadripper™ 1920X Socket TR4', './view/Public/img/product/51xunc6gl8l.jpg', '1432000', '0.0000', '2018-10-03', 'Thông tin chung:\r\n-Nhà sản xuất : AMD\r\n-Tình trạng : 100%\r\n-Bảo hành : 36 tháng ', b'1', 0, 8, 100, 36, 22, 22),
(69, 'CPU Intel Core i3 4160 3.6GHz', './view/Public/img/product/i5_99d114fb-ca75-4d3e-5be6-9c16bbd88099_large.jpg', '3200000', '0.0000', '2018-10-03', 'Thông tin chung:\r\n-Nhà sản xuất : Intel\r\n-Tình trạng : NEW - 100%\r\n-Bảo hành : 36 tháng trên hộp\r\n\r\nTính năng nổi bật:\r\n-Socket: LGA1150\r\n-3MB Cache\r\n-Số nhân (Core): 2\r\n-Số luồng (Thread): 2\r\n-Card Onboard: Intel HD Graphics', b'1', 0, 34, 100, 36, 22, 22),
(70, 'CPU Intel Core i5 4460 3.2GHz', './view/Public/img/product/i5s_7199b3d8a83d4a75bf11672855a6ea96.jpeg', '3200000', '0.0000', '2018-10-03', 'Thông tin chung:\r\n-Nhà sản xuất : Intel\r\n-Tình trạng : NEW - 100%\r\n-Bảo hành : 36 tháng trên hộp\r\n\r\nTính năng nổi bật:\r\n-Socket: LGA1150\r\n-6MB Cache\r\n-Số nhân (Core): 4\r\n-Số luồng (Thread): 4\r\n-Card Onboard: Intel HD 4600', b'1', 0, 0, 100, 36, 22, 22),
(71, 'Intel Core i5 6600 / 6M / 3.3GHz / 4 nhân 4 luồng', './view/Public/img/product/i5_99d114fb-ca75-4d3e-5be6-9c16bbd88099_large.jpg', '1500000', '0.0000', '2018-10-03', 'Thông tin chung:\r\n-Nhà sản xuất : Intel\r\n-Tình trạng : NEW - 100%\r\n-Bảo hành : 36 tháng ', b'1', 0, 54, 100, 36, 22, 22),
(72, 'MSI Z370 SLI PLUS LGA1151V2', './view/Public/img/product/dsfsdfsdfs.png', '2100000', '0.0000', '2018-10-03', 'Nhà sản xuất : MSI \r\nBảo hành : 36 tháng  \r\nTình trạng: Mới 100%', b'1', 0, 22, 100, 36, 18, 19),
(73, 'ASUS Z370F GAMING LGA1151V2', './view/Public/img/product/1_6a48b9fb440a4d9eb2359096f73dbf43.jpg', '1100000', '0.0000', '2018-10-03', 'Nhà sản xuất : ASUS\r\nBảo hành : 36 tháng \r\n\r\nTình Trạng : Mới 100% ', b'1', 0, 3, 100, 36, 25, 19),
(74, 'Asus B360G ROG STRIX Gaming LGA 1151v2', './view/Public/img/product/1_6a48b9fb440a4d9eb2359096f73dbf43.jpg', '2300000', '0.0000', '2018-10-03', 'Nhà sản xuất : ASUS\r\nBảo hành : 36 tháng \r\n\r\nTình Trạng : Mới 100% ', b'1', 0, 0, 100, 36, 25, 19),
(75, 'Asus ROG Strix GeForce® GTX 1050 Ti OC 4GD5 Gaming 128bit', './view/Public/img/product/1_6a48b9fb440a4d9eb2359096f73dbf43.jpg', '1520000', '0.0000', '2018-10-03', 'Nhà sản xuất: Asus\r\n\r\nTình trạng: Fullbox – 100%\r\n\r\nBảo hành: 36 tháng', b'1', 0, 0, 100, 36, 25, 19),
(76, 'ASUS ROG GTX 1080 Ti Strix 11GB Gaming 352Bit DDR5X', './view/Public/img/product/1_6a48b9fb440a4d9eb2359096f73dbf43.jpg', '1200000', '0.0000', '2018-10-03', 'Nhà sản xuất: ASUS\r\n\r\nTình trạng: Fullbox – 100%\r\n\r\nBảo hành: 36 tháng', b'1', 0, 0, 100, 36, 25, 19),
(77, 'Asus ROG Strix GTX 1060 Gaming Edition OC6G GDDR5', './view/Public/img/product/123.png', '1300000', '0.0000', '2018-10-03', 'Nhà sản xuất: Asus\r\n\r\nTình trạng: Fullbox – 100%\r\n\r\nBảo hành: 36 tháng', b'1', 0, 0, 100, 36, 25, 19),
(78, 'MSI GEFORCE® GTX 1060 GAMING X 3G', './view/Public/img/product/product_5_20160818151303_57b55fffe0b56.png', '7500000', '0.0000', '2018-10-03', 'MSI GeForce® GTX 1060 GAMING X (Z) 3G sẽ có hình thức tương tự như các đàn anh của mình, đầu tiên là hệ thống tản nhiệt y chang cho đến PCB kích thước đầy đủ, linh kiện chất lượng quân đội. Phiên bản Z như trước đây vẫn là phiên bản hạn chế số lượng với một logo rồng MSI GAMING được trang bị đèn RGB độc đáo ở ngay phần sau của backplate. Các VGA dòng GAMING mới này sẽ được trang bị đến 6 phase cấp nguồn mang đến độ ổn định khi vận hành tối đa cho các GPU GTX 1060 mới.\r\n\r\nThiết kế tản nhiệt TWIN ', b'1', 0, 103, 100, 36, 25, 19),
(79, 'Gigabyte GTX1070 Winforce OC 8GB', './view/Public/img/product/gigabyte_1070_winforce_oc_8gb_gearvn_00.jpg', '9500000', '0.0000', '2018-10-03', 'GPU	 NVIDIA® GeForce® GTX 1070 \r\n Bộ nhớ	 8GB GDDR5\r\n Bus bộ nhớ	 256-bit\r\n Xung cơ bản	 1582 Mhz (OC Mode)\r\n Xung Boost	 1771 Mhz (OC Mode)\r\n DirectX	 12\r\n CUDA CORE	 1920 đơn vị\r\n Xung nhịp bộ nhớ	 8008MHz \r\n Khe cắm	 PCI Express x16 3.0\r\n DisplayPort 1.4	 3\r\n HDMI	 1\r\n DVI	 1\r\n Số màn hình tối đa	 4\r\n Độ phân giải tối đa	 7680 x 4320\r\n Yêu cầu nguồn phụ	 1 x 8-pin\r\n Điện tiêu thụ	 150W\r\n Nguồn yêu cầu	 500W CST\r\n Kích thước card 	 280x131x37\r\n SLI	 Có', b'1', 0, 87, 100, 36, 25, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill-guest` (`id_guest`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail-product` (`id_product`),
  ADD KEY `detail-bill` (`id_bill`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_guest` (`id_guest`),
  ADD KEY `comment_product` (`id_product`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image-product` (`id_product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product-category` (`id_category`),
  ADD KEY `product_brands` (`id_brand`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill-guest` FOREIGN KEY (`id_guest`) REFERENCES `guest` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `detail-bill` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail-product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_guest` FOREIGN KEY (`id_guest`) REFERENCES `guest` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image-product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product-category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_brands` FOREIGN KEY (`id_brand`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
