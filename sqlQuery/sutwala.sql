-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 03:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sutshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins_details`
--

CREATE TABLE `admins_details` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(50) NOT NULL,
  `admin_lname` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `contect_no` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `city_name` varchar(20) NOT NULL,
  `area_pin` int(10) NOT NULL,
  `company_name` varchar(20) NOT NULL,
  `about_compny` varchar(200) NOT NULL,
  `site_link` varchar(20) NOT NULL,
  `work_categrey` varchar(20) NOT NULL,
  `customer_service_no` varchar(30) NOT NULL,
  `create_at_admin_acc` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins_details`
--

INSERT INTO `admins_details` (`admin_id`, `admin_fname`, `admin_lname`, `admin_email`, `admin_password`, `contect_no`, `Gender`, `DOB`, `address`, `city_name`, `area_pin`, `company_name`, `about_compny`, `site_link`, `work_categrey`, `customer_service_no`, `create_at_admin_acc`) VALUES
(2, 'Arpita', 'Shahi', 'arpitashahee@gmail.com', '123ARPY#', '2147483647', 'Female', '2000-10-29', '227 teylipIevayi Haryana', 'Haryana', 154783, 'Treebmint', ' ', 'www.treemint.com ', 'Textiles', '999 456 45', '2022-11-08 10:06:06'),
(3, 'AKS', 'fsdf', 'awerc123@gmail.com', '15926', '2147483647', 'male', '1981-11-09', 'dsf sdfe, rt, ret, rood 4 gali', 'sdfe', 789456, 'tttttt', 'sdfjkl jklaio kjl io jkl io jkl iodfmn  dnmm,  erm, mn, klj.', 'www.abcse.in', 'Needle Craft', '789 456 45', '2022-11-13 12:11:16'),
(4, 'Example', 'last name', 'example@gmail.com', 'abcdef@#', '2147483647', 'male', '1899-08-20', 'abcdesfg jkfi 54 ', 'dasec', 456121, 'asdf.in', 'An Admin panel written in core php with CRUD, filters and pagination.  It contains a sleek design of modern dashboard, strong data handling and myriad of ', 'www.abcdef.in', 'Printable Fabric', '988 456 78', '2022-11-08 12:06:02'),
(13, 'Vanky', 'Shahi', 'avankshahi321@gmail.com', 'avank321', '8845112563', 'female', '1985-02-04', 'Tulip Black flora no. 3 H no. ', 'Haryana', 112412, 'abcTextile', 'The Textile Industry is an industry that is responsible for converting raw material into finished goods and also includes textile development, manufacturing, and distribution. ', 'abctexttile.com', 'Textiles', '8845112563  9845784562 ', '2022-11-13 14:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(100) NOT NULL,
  `article_description` varchar(250) NOT NULL,
  `article_content` text NOT NULL,
  `posted_by` varchar(50) NOT NULL,
  `article_image` text NOT NULL,
  `article_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_description`, `article_content`, `posted_by`, `article_image`, `article_date`) VALUES
(1, 'Denim Fabric', 'Denim, durable twill-woven fabric with closured (usually blue) warp and white filling threads; it is also woven in cultured stripes. \r\n</br></br>\r\nDenim is a multipurpose fabric. It is used for making clothes, 									', 'Denim is a multipurpose fabric. It is used for making clothes, accessories, furniture, vehicles, to name a few. For example, jeans, dresses, hats, jeggings, jackets, shirts, suits, and sneakers can be made from denim. Tote bags, belts, handbags, rucksacks and even sunglasses can also be made from denim.\r\n\r\nThe Indian denim industry has shown continual growth over the years and currently, the country boasts of a denim manufacturing capacity of around 1.1 billion meters per annum.\r\n</br></br></br>\r\n<b>What Is the Difference Between Denim and Jeans? </b></br></br>\r\n\r\nSimply put, the difference between denim and jean is that denim is a fabric and jeans are a garment. Denim fabric is used to make a wide variety of garments, including jackets, overalls, shirts, and jeans. Jeans are a type of garment commonly made from denim cloth.	\r\n                			 			 			 			 ', 'Arpy', 'blue black difital fabric.PNG', '2022-11-13 13:59:59'),
(2, 'Satin Fabric', 'Satin is one of the three major textile weaves, along plain weave and twill. The satin weave creates a fabric that is shiny, soft, and elastic with a beautiful drape. Satin fabric is characterized by ', 'The satin weave is characterized by four or more fill or weft yarns floating over a warp yarn, and four warp yarns floating over a single weft yarn. Floats are missed interfacings, for example where the warp yarn lies on top of the weft in a warp-faced satin. These floats explain the high luster and even sheen, as unlike in other weaves, light is not scattered as much when hitting the fibers, resulting in a stronger reflection. Satin is usually a warp-faced weaving technique in which warp yarns are \"floated\" over weft yarns, although there are also weft-faced satins.\n\n1. If a fabric is formed with a satin weave using filament fibers such as silk, polyester or nylon, the corresponding fabric is termed a \'satin\', although some definitions insist that a satin fabric is only made from silk.\n2. If the yarns used are short-staple yarns such as cotton, the fabric formed is considered a sateen.                    			 ', 'Arpy', 'Satin Fabrics faux silk fabric coat.PNG', '2022-11-13 13:56:19');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `ip_address` int(30) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clothtypes`
--

CREATE TABLE `clothtypes` (
  `clothtype_id` int(11) NOT NULL,
  `cloth_type` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clothtypes`
--

INSERT INTO `clothtypes` (`clothtype_id`, `cloth_type`) VALUES
(1, 'Silk FAbric'),
(2, 'Khadi Fabric'),
(3, 'Jacquard Fabric'),
(4, 'Denim Fabric'),
(5, ' Embroidered Fabric'),
(6, 'Satin Fabric'),
(7, 'Cotton'),
(8, ' Jersey Fabric'),
(9, 'Lace'),
(10, 'Leather '),
(11, 'Polyester Fabric');

-- --------------------------------------------------------

--
-- Table structure for table `contactdata`
--

CREATE TABLE `contactdata` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(55) NOT NULL,
  `message` text NOT NULL,
  `attachement` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_password` varchar(60) NOT NULL,
  `customer_country` varchar(20) NOT NULL,
  `customer_city` varchar(70) NOT NULL,
  `customer_contact` int(20) NOT NULL,
  `customer_address` varchar(80) NOT NULL,
  `customer_Profile_img` text NOT NULL,
  `customer_ip_address` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_Profile_img`, `customer_ip_address`) VALUES
(5, 'Arpita Shai', 'arpitashaahi@gmail.com', 'arpy123#', 'India', 'Haryana', 705060, 'Tylip Ivory 152, EWS 452', 'flowerA.PNG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `due_amount` float(10,3) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `total_products` int(100) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `total_products`, `order_date`, `order_status`) VALUES
(49, 5, 5000.000, 19832, 1, '2022-11-04 15:35:24', 'Complete'),
(50, 5, 4500.000, 78521, 1, '2022-11-04 16:30:06', 'Complete'),
(51, 0, 0.000, 27237, 0, '2022-11-08 05:46:30', 'Complete'),
(52, 0, 0.000, 72048, 0, '2022-11-08 05:46:35', 'Complete'),
(53, 5, 0.000, 35487, 0, '2022-11-08 05:46:39', 'Complete'),
(54, 5, 0.000, 7693, 0, '2022-11-08 05:46:23', 'Complete'),
(55, 5, 2000.000, 56151, 1, '2022-11-08 05:45:22', 'Complete'),
(56, 5, 4000.000, 76284, 1, '2022-11-08 05:48:50', 'Complete'),
(57, 5, 800.000, 49036, 1, '2022-11-08 05:51:00', 'Complete'),
(58, 5, 1500.000, 84845, 1, '2022-11-13 11:58:03', 'Complete'),
(59, 5, 3000.000, 8869, 1, '2022-11-13 11:57:19', 'Pending'),
(60, 5, 800.000, 25250, 1, '2022-11-13 13:09:21', 'Pending'),
(61, 5, 2500.000, 36558, 2, '2022-11-13 13:19:01', 'Pending'),
(62, 5, 0.000, 50055, 0, '2022-11-13 13:21:31', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders_payment`
--

CREATE TABLE `customer_orders_payment` (
  `order_id` int(11) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(20) NOT NULL,
  `payment_with` text NOT NULL,
  `transaction_ref_id` int(20) NOT NULL,
  `mobile_code` int(20) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_orders_payment`
--

INSERT INTO `customer_orders_payment` (`order_id`, `invoice_no`, `amount`, `payment_with`, `transaction_ref_id`, `mobile_code`, `payment_date`) VALUES
(7, 97392, 3000, 'Google Pay', 45623, 98745, '2022-11-04 15:07:56'),
(8, 19832, 5000, 'PhonePe', 45623, 45789, '2022-11-04 15:35:24'),
(9, 78521, 4500, 'PayPal', 1478524, 98745, '2022-11-04 16:30:06'),
(10, 56151, 2000, 'PayPal', 45623, 98745, '2022-11-08 05:45:22'),
(11, 76284, 4000, 'PayPal', 47813, 41751, '2022-11-08 05:48:50'),
(12, 49036, 800, 'Paytm', 47813, 98745, '2022-11-08 05:51:00'),
(13, 84845, 1500, 'Google Pay', 45623, 5421, '2022-11-13 11:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `invoice_no` int(20) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `refrence_no` int(25) NOT NULL,
  `code` int(20) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `refrence_no`, `code`, `payment_date`) VALUES
(13, 84845, '1500.00', 'Google Pay', 45623, 5421, '2022-11-13 12:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `pending_order`
--

CREATE TABLE `pending_order` (
  `pending_order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_order`
--

INSERT INTO `pending_order` (`pending_order_id`, `customer_id`, `invoice_no`, `product_id`, `quantity`, `order_status`) VALUES
(49, 5, 19832, 5, 5, 'Complete'),
(50, 5, 78521, 3, 3, 'Complete'),
(55, 5, 56151, 4, 2, 'Complete'),
(56, 5, 76284, 2, 5, 'Complete'),
(57, 5, 49036, 2, 1, 'Complete'),
(58, 5, 84845, 3, 1, 'Pending'),
(59, 5, 8869, 3, 2, 'Pending'),
(60, 5, 25250, 23, 2, 'Pending'),
(61, 5, 36558, 3, 1, 'Pending'),
(62, 5, 50055, 0, 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `clothtype_id` int(11) NOT NULL,
  `season_id` int(11) NOT NULL,
  `products_title` varchar(50) NOT NULL,
  `product_description` text NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_status` varchar(10) NOT NULL,
  `product_uses` text NOT NULL,
  `product_keywords` text NOT NULL,
  `cloth_width` varchar(20) NOT NULL,
  `product_img1` varchar(120) NOT NULL,
  `product_img2` varchar(120) NOT NULL,
  `product_img3` varchar(120) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `clothtype_id`, `season_id`, `products_title`, `product_description`, `product_price`, `product_status`, `product_uses`, `product_keywords`, `cloth_width`, `product_img1`, `product_img2`, `product_img3`, `create_at`) VALUES
(2, 1, 5, 'Digital Printed Fabric', 'It is a way of printing fabrics using digital inkjet printers rather than old traditional printers.					', '800.00', 'on', 'Digital printed fabric is prominent for use in clothing as well as other places such as bed sheets, pillow covers, etc. this is why it is preferred by manufacturers and exporters for use in clothing and upholstery.				\r\n							\r\n			', 'covers, yellow saree, loom saree, saree, Digital Fabrics', '', 'cotton difital printed fabric.PNG', '', '', '2022-11-06 17:17:18'),
(3, 1, 4, 'Denim Fabric', 'Denim is a sturdy and tight cotton fabric in which each weft thread passes under at least two or more warp threads, which results in a diagonal ribbing pattern.							', '1500.00', 'on', 'exporters prefer denim fabric for different clothing such as jeans, jackets, western wear, ladies’ shirts, Ladies tops, Denim kurtis, etc.				\r\n			', 'indigo denim, stretch denim, crushed denim, acid-washed denim, raw denim, and sulfurized denim', '', 'denim fabric.PNG', 'blue black difital fabric.PNG', 'plain denim fabric.PNG', '2022-10-31 14:57:35'),
(4, 1, 5, 'Digital Printed Fabric', 'It is a way of printing fabrics using digital inkjet printers rather than old traditional printers.		', '1000.00', 'on', 'Digital printed fabric is prominent for use in clothing as well as other places such as bed sheets, pillow covers, etc. this is why it is preferred by manufacturers and exporters for use in clothing and upholstery.				\r\n			', 'covers, yellow saree, loom saree, saree, Digital Fabrics', '', 'Printed Fabric.PNG', '', '', '2022-10-31 14:03:41'),
(5, 3, 3, 'Jacquard Fabric ', 'Jacquard is a fabric with highly detailed and precise weaving patterns. The patterns are not embroidered but are directly woven on the fabric. Jacquard fabric is woven on specially designed looms, which are used to produce other fabrics like brocade and damask as well.								', '1000.00', 'on', ' Jacquard is used commonly in the Indian textile industry in making jacquard sarees, lehengas, and upholstery fabrics					\r\n			', 'covers, jacquard fabric, jacquard cloths', '', 'jacquard fabrics.PNG', '', '', '2022-10-31 16:34:24'),
(6, 1, 5, 'Digital Printed Fabric', 'It is a way of printing fabrics using digital inkjet printers rather than old traditional printers.		', '1000.00', 'on', 'Digital printed fabric is prominent for use in clothing as well as other places such as bed sheets, pillow covers, etc. this is why it is preferred by manufacturers and exporters for use in clothing and upholstery.				\r\n			', 'covers, yellow saree, loom saree, saree, Digital Fabrics', '', 'Printed Fabric.PNG', '', '', '2022-10-31 14:03:41'),
(7, 1, 5, 'Digital Printed Fabric', 'It is a way of printing fabrics using digital inkjet printers rather than old traditional printers.		', '1000.00', 'on', 'Digital printed fabric is prominent for use in clothing as well as other places such as bed sheets, pillow covers, etc. this is why it is preferred by manufacturers and exporters for use in clothing and upholstery.				\r\n			', 'covers, yellow saree, loom saree, saree, Digital Fabrics', '', 'Printed Fabric.PNG', '', '', '2022-10-31 14:03:41'),
(8, 1, 5, 'Digital Printed Fabric', 'It is a way of printing fabrics using digital inkjet printers rather than old traditional printers.		', '1000.00', 'on', 'Digital printed fabric is prominent for use in clothing as well as other places such as bed sheets, pillow covers, etc. this is why it is preferred by manufacturers and exporters for use in clothing and upholstery.				\r\n			', 'covers, yellow saree, loom saree, saree, Digital Fabrics', '', 'Printed Fabric.PNG', '', '', '2022-10-31 14:03:41'),
(9, 1, 5, 'Digital Printed Fabric', 'It is a way of printing fabrics using digital inkjet printers rather than old traditional printers.		', '1000.00', 'on', 'Digital printed fabric is prominent for use in clothing as well as other places such as bed sheets, pillow covers, etc. this is why it is preferred by manufacturers and exporters for use in clothing and upholstery.				\r\n			', 'covers, yellow saree, loom saree, saree, Digital Fabrics', '', 'Printed Fabric.PNG', '', '', '2022-10-31 14:03:41'),
(23, 6, 5, 'Satin Fabric', 'A satin weave is a type of fabric weave that produces a characteristically glossy, smooth or lustrous material, typically with a glossy top surface and a dull back. It is one of three fundamental types of textile weaves alongside plain weave and twill weave.						\r\n			', '400.00', 'on', 'Along with twill and plain weave, satin is distinguished as one of the major weaves within the textile. It creates fabrics that are elastic, soft, and lustrous. One side of the Satin fabric has a dull texture and the other has a shiny surface.				\r\n			', 'Elastic, Shiny, Soft Satin Fabric, satin fabric ', '44-108\'', 'pink satin fabric.PNG', 'Satin Fabrics.PNG', 'Satin Fabrics faux silk fabric coat.PNG', '2022-11-13 12:34:59');

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `season_id` int(11) NOT NULL,
  `season_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`season_id`, `season_name`) VALUES
(1, 'Spring'),
(2, 'Summer'),
(3, 'Autumn'),
(4, 'Pre-Winter'),
(5, 'winter'),
(6, 'Monsoon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins_details`
--
ALTER TABLE `admins_details`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`),
  ADD UNIQUE KEY `article_title` (`article_title`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `clothtypes`
--
ALTER TABLE `clothtypes`
  ADD PRIMARY KEY (`clothtype_id`);

--
-- Indexes for table `contactdata`
--
ALTER TABLE `contactdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `customer_orders_payment`
--
ALTER TABLE `customer_orders_payment`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_order`
--
ALTER TABLE `pending_order`
  ADD PRIMARY KEY (`pending_order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`),
  ADD KEY `cloth_id` (`clothtype_id`),
  ADD KEY `season_id` (`season_id`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`season_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins_details`
--
ALTER TABLE `admins_details`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clothtypes`
--
ALTER TABLE `clothtypes`
  MODIFY `clothtype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contactdata`
--
ALTER TABLE `contactdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `customer_orders_payment`
--
ALTER TABLE `customer_orders_payment`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pending_order`
--
ALTER TABLE `pending_order`
  MODIFY `pending_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
  MODIFY `season_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`clothtype_id`) REFERENCES `clothtypes` (`clothtype_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`season_id`) REFERENCES `season` (`season_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
