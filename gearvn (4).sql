-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2018 lúc 03:31 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gearvn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
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
-- Cấu trúc bảng cho bảng `bill`
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(4) NOT NULL,
  `id_product` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `id_bill` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(4) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
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
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên loại',
  `id` int(4) NOT NULL,
  `show` bit(1) NOT NULL DEFAULT b'0',
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
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
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `time` datetime NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_product` int(4) NOT NULL,
  `id_guest` int(11) NOT NULL,
  `rank` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `guest`
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
-- Đang đổ dữ liệu cho bảng `guest`
--

INSERT INTO `guest` (`id`, `name`, `email`, `password`, `id_facebook`, `image`, `address`, `number`, `active`) VALUES
(2, '123456789', 'nhatnnps07643@fpt.edu.vn', '123456789', NULL, 'view/public/view/logo.png', '109/15 Đường Hiệp Bình, Quận Thủ Đức', '0966643251', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id` int(4) NOT NULL,
  `id_product` int(11) NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image`
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
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(4) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `sale` decimal(10,0) DEFAULT NULL,
  `date_created` date NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `special` bit(1) NOT NULL,
  `views` int(10) NOT NULL,
  `stock` int(10) NOT NULL,
  `guarantee` tinyint(2) NOT NULL,
  `id_category` int(4) NOT NULL,
  `id_brand` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `sale`, `date_created`, `description`, `special`, `views`, `stock`, `guarantee`, `id_category`, `id_brand`) VALUES
(50, 'AMD Ryzen 3 1200 / 4 nhân 4 luồng / 3.1GHz / 8M / SK AM4$', './view/Public/img/product/upload_026cad3de64d462bbb4071b6ef3d630a.jpg', '100000', '0', '2018-09-26', 'Mô tả', b'1', 0, 100, 36, 22, 22),
(52, 'AMD Ryzen 5 1600X / 6 nhân 12 luồng / 3.6GHz / 16M / SK AM4', './view/Public/img/product/upload_026cad3de64d462bbb4071b6ef3d630a.jpg', '120000', '0', '2018-09-26', 'Nô tả ', b'1', 0, 100, 36, 22, 22),
(54, 'AMD Threadripper™ 1950X Socket TR4', './view/Public/img/product/upload_026cad3de64d462bbb4071b6ef3d630a.jpg', '10000', '0', '2018-09-26', 'Mô tả', b'1', 0, 100, 36, 22, 22),
(67, 'AMD Athlon™ 200GE 3.2GHz / 2 nhân 4 luồng / Radeon™ Vega 3 Graphics', './view/Public/img/product/gearvn_cpu_amd.jpg', '1460000', '1200000', '2018-10-03', 'Thông tin chung:\r\n-Nhà sản xuất : AMD\r\n-Bảo hành : 36 tháng \r\n-Tình trạng: đang về hàng', b'1', 0, 100, 36, 18, 22),
(68, 'AMD Threadripper™ 1920X Socket TR4', './view/Public/img/product/51xunc6gl8l.jpg', '22000000', '0', '2018-10-03', 'Thông tin chung:\r\n-Nhà sản xuất : AMD\r\n-Tình trạng : 100%\r\n-Bảo hành : 36 tháng ', b'1', 0, 100, 36, 22, 22),
(69, 'CPU Intel Core i3 4160 3.6GHz', './view/Public/img/product/i5_99d114fb-ca75-4d3e-5be6-9c16bbd88099_large.jpg', '2650000', '2550000', '2018-10-03', 'Thông tin chung:\r\n-Nhà sản xuất : Intel\r\n-Tình trạng : NEW - 100%\r\n-Bảo hành : 36 tháng trên hộp\r\n\r\nTính năng nổi bật:\r\n-Socket: LGA1150\r\n-3MB Cache\r\n-Số nhân (Core): 2\r\n-Số luồng (Thread): 2\r\n-Card Onboard: Intel HD Graphics', b'1', 0, 100, 36, 22, 27),
(70, 'CPU Intel Core i5 4460 3.2GHz', './view/Public/img/product/i5s_7199b3d8a83d4a75bf11672855a6ea96.jpeg', '4290000', '4200000', '2018-10-03', 'Thông tin chung:\r\n-Nhà sản xuất : Intel\r\n-Tình trạng : NEW - 100%\r\n-Bảo hành : 36 tháng trên hộp\r\n\r\nTính năng nổi bật:\r\n-Socket: LGA1150\r\n-6MB Cache\r\n-Số nhân (Core): 4\r\n-Số luồng (Thread): 4\r\n-Card Onboard: Intel HD 4600', b'1', 0, 100, 36, 22, 27),
(71, 'Intel Core i5 6600 / 6M / 3.3GHz / 4 nhân 4 luồng', './view/Public/img/product/i5_99d114fb-ca75-4d3e-5be6-9c16bbd88099_large.jpg', '5350000', '5250000', '2018-10-03', 'Thông tin chung:\r\n-Nhà sản xuất : Intel\r\n-Tình trạng : NEW - 100%\r\n-Bảo hành : 36 tháng ', b'1', 0, 100, 36, 22, 27),
(72, 'MSI Z370 SLI PLUS LGA1151V2', './view/Public/img/product/dsfsdfsdfs.png', '4190000', '4090000', '2018-10-03', 'Nhà sản xuất : MSI \r\nBảo hành : 36 tháng  \r\nTình trạng: Mới 100%', b'1', 0, 100, 36, 18, 19),
(73, 'ASUS Z370F GAMING LGA1151V2', './view/Public/img/product/1_6a48b9fb440a4d9eb2359096f73dbf43.jpg', '5290000', '5090000', '2018-10-03', 'Nhà sản xuất : ASUS\r\nBảo hành : 36 tháng \r\n\r\nTình Trạng : Mới 100% ', b'1', 0, 100, 36, 18, 28),
(74, 'Asus B360G ROG STRIX Gaming LGA 1151v2', './view/Public/img/product/1_6a48b9fb440a4d9eb2359096f73dbf43.jpg', '2550000', '2250000', '2018-10-03', 'Nhà sản xuất : ASUS\r\nBảo hành : 36 tháng \r\n\r\nTình Trạng : Mới 100% ', b'1', 0, 100, 36, 18, 28),
(75, 'Asus ROG Strix GeForce® GTX 1050 Ti OC 4GD5 Gaming 128bit', './view/Public/img/product/1_6a48b9fb440a4d9eb2359096f73dbf43.jpg', '5990000', '5390000', '2018-10-03', 'Nhà sản xuất: Asus\r\n\r\nTình trạng: Fullbox – 100%\r\n\r\nBảo hành: 36 tháng', b'1', 0, 100, 36, 18, 28),
(76, 'ASUS ROG GTX 1080 Ti Strix 11GB Gaming 352Bit DDR5X', './view/Public/img/product/1_6a48b9fb440a4d9eb2359096f73dbf43.jpg', '23330000', '23330000', '2018-10-03', 'Nhà sản xuất: ASUS\r\n\r\nTình trạng: Fullbox – 100%\r\n\r\nBảo hành: 36 tháng', b'1', 0, 100, 36, 25, 28),
(77, 'Asus ROG Strix GTX 1060 Gaming Edition OC6G GDDR5', './view/Public/img/product/123.png', '25000000', '23000000', '2018-10-03', 'Nhà sản xuất: Asus\r\n\r\nTình trạng: Fullbox – 100%\r\n\r\nBảo hành: 36 tháng', b'1', 0, 100, 36, 25, 28),
(78, 'MSI GEFORCE® GTX 1060 GAMING X 3G', './view/Public/img/product/product_5_20160818151303_57b55fffe0b56.png', '1000000', '900000', '2018-10-03', 'MSI GeForce® GTX 1060 GAMING X (Z) 3G sẽ có hình thức tương tự như các đàn anh của mình, đầu tiên là hệ thống tản nhiệt y chang cho đến PCB kích thước đầy đủ, linh kiện chất lượng quân đội. Phiên bản Z như trước đây vẫn là phiên bản hạn chế số lượng với một logo rồng MSI GAMING được trang bị đèn RGB độc đáo ở ngay phần sau của backplate. Các VGA dòng GAMING mới này sẽ được trang bị đến 6 phase cấp nguồn mang đến độ ổn định khi vận hành tối đa cho các GPU GTX 1060 mới.\r\n\r\nThiết kế tản nhiệt TWIN ', b'1', 0, 100, 36, 25, 19),
(79, 'Gigabyte GTX1070 Winforce OC 8GB', './view/Public/img/product/gigabyte_1070_winforce_oc_8gb_gearvn_00.jpg', '12000000', '0', '2018-10-03', 'GPU	 NVIDIA® GeForce® GTX 1070 \r\n Bộ nhớ	 8GB GDDR5\r\n Bus bộ nhớ	 256-bit\r\n Xung cơ bản	 1582 Mhz (OC Mode)\r\n Xung Boost	 1771 Mhz (OC Mode)\r\n DirectX	 12\r\n CUDA CORE	 1920 đơn vị\r\n Xung nhịp bộ nhớ	 8008MHz \r\n Khe cắm	 PCI Express x16 3.0\r\n DisplayPort 1.4	 3\r\n HDMI	 1\r\n DVI	 1\r\n Số màn hình tối đa	 4\r\n Độ phân giải tối đa	 7680 x 4320\r\n Yêu cầu nguồn phụ	 1 x 8-pin\r\n Điện tiêu thụ	 150W\r\n Nguồn yêu cầu	 500W CST\r\n Kích thước card 	 280x131x37\r\n SLI	 Có', b'1', 0, 100, 36, 25, 19);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill-guest` (`id_guest`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail-product` (`id_product`),
  ADD KEY `detail-bill` (`id_bill`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_product` (`id_product`),
  ADD UNIQUE KEY `id_guest` (`id_guest`);

--
-- Chỉ mục cho bảng `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image-product` (`id_product`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product-category` (`id_category`),
  ADD KEY `product_brands` (`id_brand`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill-guest` FOREIGN KEY (`id_guest`) REFERENCES `guest` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `detail-bill` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail-product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment-guest` FOREIGN KEY (`id_guest`) REFERENCES `guest` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `comment-prodcut` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image-product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product-category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_brands` FOREIGN KEY (`id_brand`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
