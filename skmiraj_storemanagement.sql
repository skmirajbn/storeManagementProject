-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2023 at 03:44 PM
-- Server version: 8.0.33
-- PHP Version: 8.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skmiraj_storemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int NOT NULL,
  `brand_name` varchar(50) DEFAULT NULL,
  `brand_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_status`) VALUES
(41, 'RFL', 1),
(42, 'ACI', 1),
(43, 'Square', 1),
(46, 'HP', 1),
(47, 'APPLE', 1),
(48, 'Samsung', 1),
(49, 'Ferrari', 1),
(50, 'Redmi', 1),
(51, 'Vivo', 1),
(54, 'Others', 1),
(55, 'Essay', 1),
(56, 'Loreal', 1),
(57, 'Golden Rose', 1),
(58, 'Bashundhara group', 1),
(59, 'ltr', 0),
(60, 'ltr', 0),
(61, 'Kawyasaki', 0);

-- --------------------------------------------------------

--
-- Table structure for table `b_order_product`
--

CREATE TABLE `b_order_product` (
  `b_order_product_id` int NOT NULL,
  `purchase_order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `b_order_product`
--

INSERT INTO `b_order_product` (`b_order_product_id`, `purchase_order_id`, `product_id`, `quantity`) VALUES
(28, 16, 51, 10),
(29, 16, 50, 10),
(30, 16, 49, 10),
(31, 16, 48, 10),
(32, 17, 59, 90),
(33, 17, 58, 90),
(34, 17, 57, 90),
(35, 17, 54, 90),
(36, 17, 53, 90),
(37, 18, 60, 100),
(38, 19, 56, 30),
(39, 19, 52, 50),
(40, 19, 51, 10),
(41, 19, 55, 20),
(42, 20, 61, 100),
(43, 21, 61, 100),
(44, 22, 66, 99),
(45, 23, 65, 50),
(46, 24, 62, 50),
(47, 24, 67, 50),
(48, 25, 63, 50),
(49, 26, 63, 50),
(50, 26, 70, 20),
(51, 26, 69, 40),
(52, 27, 68, 50),
(53, 27, 71, 30),
(54, 27, 74, 20),
(55, 28, 73, 30),
(56, 28, 72, 40),
(57, 29, 77, 20),
(58, 29, 76, 24),
(59, 29, 75, 40),
(60, 30, 78, 10),
(61, 31, 83, 30),
(62, 31, 82, 40),
(63, 31, 81, 10),
(64, 31, 80, 60),
(65, 31, 79, 80),
(66, 32, 84, 50),
(67, 32, 83, 60),
(68, 33, 86, 10),
(69, 33, 85, 5),
(70, 34, 87, 10),
(71, 35, 88, 10),
(72, 36, 90, 10),
(73, 36, 89, 10),
(74, 37, 97, 13),
(75, 37, 97, 26),
(76, 37, 97, 17),
(77, 37, 96, 18),
(78, 38, 86, 5),
(79, 39, 100, 15),
(80, 39, 99, 20),
(81, 39, 98, 15),
(82, 40, 95, 20),
(83, 41, 93, 10),
(84, 41, 94, 40),
(85, 41, 92, 20),
(86, 42, 91, 30),
(87, 43, 86, 2),
(88, 44, 91, 15),
(89, 45, 100, 4),
(90, 46, 100, 10),
(91, 47, 100, 50);

-- --------------------------------------------------------

--
-- Stand-in structure for view `b_order_product_information`
-- (See below for the actual view)
--
CREATE TABLE `b_order_product_information` (
`b_order_product_id` int
,`brand_id` int
,`buying_price` decimal(10,2)
,`category_id` int
,`description` text
,`product_id` int
,`product_image` varchar(100)
,`product_name` varchar(50)
,`product_status` int
,`purchase_order_id` int
,`quantity` int
,`selling_price` decimal(10,2)
,`sku` varchar(50)
,`sub_category_id` int
,`unit_id` int
);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `category_status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_status`) VALUES
(6, 'Women And Girls Fashion', 1),
(7, 'Electronics', 1),
(8, 'Health & Beauty', 1),
(9, 'Watches, Bags, Jewellery', 1),
(10, 'Men & Boys Fashion', 1),
(11, 'Electronics Devices', 1),
(12, 'TV & Home Appliances', 1),
(13, 'Electronic Accessories', 1),
(14, 'Groceries', 1),
(15, 'Home & Lifestyle', 1),
(16, 'Sports & Outdoors', 1),
(17, 'Fish & Meat', 1),
(18, 'Mother & Baby', 1),
(19, 'Vegetable', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `categories_information`
-- (See below for the actual view)
--
CREATE TABLE `categories_information` (
`category_id` int
,`category_name` varchar(50)
,`category_status` int
,`sub_category_id` int
,`sub_category_name` varchar(50)
,`sub_category_status` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `category_product_information`
-- (See below for the actual view)
--
CREATE TABLE `category_product_information` (
`category_id` int
,`category_name` varchar(50)
,`total_products` bigint
);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int NOT NULL,
  `customer_name` varchar(200) DEFAULT NULL,
  `customer_address` varchar(200) DEFAULT NULL,
  `customer_phone` varchar(20) DEFAULT NULL,
  `customer_email` varchar(100) DEFAULT NULL,
  `customer_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_address`, `customer_phone`, `customer_email`, `customer_status`) VALUES
(1076, 'Ali Hasan', 'Behar hat, Shibgonj-Bogura', '01723629080', 'infoalihasanbd@gmail.com', 1),
(1077, 'Mim', 'Kahaloo-Bogura', '01718513591', 'mim@gmail.com', 1),
(1078, 'Bristy', 'Gaptoli-Bogura', '01718452158', 'bristy@gmail.com', 1),
(1079, 'Rakib', 'Barishal', '01245897520', 'rakib@gmail.com', 1),
(1080, 'Mosaraf', 'Rangpur', '01752461285', 'mosaraf@gmail.com', 1),
(1081, 'Arijit Singh', 'India', '01745962584', 'arijitsingh@gmail.com', 1),
(1082, 'Jone Doe', 'Mirpur-Dhaka', '01756489752', 'jone@gmail.com', 1),
(1083, 'Mim', 'Shibgonj bogra', '01521364894', 'mim@gmail.com', 1),
(1084, 'Steve L. King', 'Bonani Dhaka', '01365498521', 'SteveLKing@dayrep.com', 1),
(1085, 'Mervin D. Nesbitt', 'Dhanmondi', '01456879527', 'MervinDNesbitt@dayrep.com', 1),
(1086, 'Md. Zakir Hossain', '3-29, Kioicho, Chiyoda-ku, Tokyo, 102-0094', '88028300255', 'mdnur82@gmail.com', 1),
(1087, 'Mr. Makoto Yoshimoto', '8-5 Niwase, Okayama Kitaku, Okayama 701-0153 Japan', '8801716425284', 'makoto3258@gmail.com', 1),
(1088, 'Md. Shah Alam Minto', '4-2039-9 Hirosawacho, Kiryu City, Gunma 376- 0013, Japan', '01723654850', 'm_m.xoxo@icloud.com', 1),
(1089, 'Mr. Zahidul Hasan', 'Igusa, 3-4-18-301, SuginamiKu, Tokyo-167-0021, Japan.', '01524654805', 'halimsscorp@yahoo.com', 1),
(1090, 'SM Jahangir Alam', 'Kakrail, Dhaka', '01564813541', 'jahangir@gmail.com', 1),
(1091, 'Rehena Parvin', 'Keraniganj, Dhaka', '016548152314', 'rehena@gmail.com', 1),
(1092, '01654841256', 'Dhanmondi, Dhaka', 'Rokea Begum', 'rokea@gmail.com', 1),
(1093, 'Shathi akter Bristy', 'Puran Dhaka', '01723659482', 'shathi@gmail.com', 1),
(1094, 'Miraj', 'Keraniganj', '01957244070', 'miraj@gmail.com', 1),
(1095, 'alamin', 'Mohammadpur', '01710034643', 'alaminamin958@gmail.com', 1),
(1096, 'jahid pagla', 'Dhanmondi', '0152546453', 'jahid@gmail.com', 1),
(1097, 'Tim Cook', 'Alabama', '01723659402', 'tim@gmail.com', 1),
(1098, 'Sundar Pichai ', 'Alaska', '017456215485', 'pichai @gmail.com', 1),
(1099, 'Satya Nadella', 'Arizona', '01754612451', 'nadella@gmail.com', 1),
(1100, 'roby', 'Mirpur', '01987261151', 'roby@gmail.com', 1),
(1101, 'Faria', 'Mirpur', '01879249106', 'faria@gmail.com', 1),
(1102, 'Bristy Talukder', 'Gandaria', '01960365354', 'bristy@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `product_id` int NOT NULL,
  `stock` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `last_7days_sales_information`
-- (See below for the actual view)
--
CREATE TABLE `last_7days_sales_information` (
`sales_date` date
,`total_sales` decimal(42,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `category_id` int DEFAULT NULL,
  `sub_category_id` int NOT NULL,
  `brand_id` int DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `description` text,
  `product_image` varchar(100) DEFAULT NULL,
  `unit_id` int DEFAULT NULL,
  `selling_price` decimal(10,2) DEFAULT NULL,
  `buying_price` decimal(10,2) NOT NULL,
  `sku` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `product_status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `sub_category_id`, `brand_id`, `product_name`, `description`, `product_image`, `unit_id`, `selling_price`, `buying_price`, `sku`, `product_status`) VALUES
(48, 7, 11, 47, 'iPhone 14', 'This is best popular phone in the world.', 'product_1688574052_26815523.jpg', 8, 95000.00, 85000.00, '1231', 1),
(49, 7, 11, 48, 'Samsung Galaxy S22', 'Samsung Galaxy S22 ', 'product_1688574319_77609017.jpg', 8, 90000.00, 80000.00, '1232', 1),
(50, 11, 57, 50, 'Redmi 10c', 'Redmi 10c', 'product_1688575127_85891204.jpg', 8, 15000.00, 14000.00, '4510', 1),
(51, 11, 61, 46, 'HP 850 G5', 'HP 850 G5 ', 'product_1688575188_90341665.jpg', 8, 48000.00, 42000.00, '1233', 1),
(52, 12, 65, 41, 'Vision 32\" LED TV N10S ', 'Vision 32\" LED TV N10S Android Smart Infinity\r\nVision 32\" LED TV N10S', 'product_1688575923_77299504.jpg', 8, 12000.00, 9000.00, '1234', 1),
(53, 14, 82, 42, ' Dairy Milk', '', 'product_1688576218_82359823.jpg', 7, 120.00, 104.00, '1235', 1),
(54, 14, 85, 54, 'Basmoti rice', 'Rice Exports: After wheat and sugar, govt may curb rice exports', 'product_1688576522_24161235.jpg', 7, 360.00, 345.00, '1236', 1),
(55, 13, 77, 48, 'Camera', 'What is a DSLR Camera? | PetaPixel', 'product_1688576969_99332328.jpg', 8, 40000.00, 37000.00, '1237', 1),
(56, 13, 77, 48, 'Camera', 'What is a DSLR Camera? | PetaPixel', 'product_1688579431_82456613.jpg', 8, 40000.00, 37000.00, '1237', 1),
(57, 14, 80, 42, 'ACI pure salt 1kg', '', 'product_1688577347_45592548.jpg', 7, 40.00, 37.00, '1238', 1),
(58, 14, 78, 54, 'Potato', '', 'product_1688577278_96628815.jpg', 7, 25.00, 17.00, '1239', 1),
(59, 14, 80, 42, 'Sugger', ' A sweet substance that is made up wholly or mostly of sucrose, is colorless or white when pure', 'product_1688577660_23025046.jpg', 7, 100.00, 95.00, '001', 1),
(60, 6, 12, 55, '3_piece', 'this is so comfortable', 'product_1688578609_91546248.jpg', 8, 2500.00, 2000.00, '002', 1),
(61, 6, 13, 55, 'Saree', 'this is so comfortable', 'product_1688578810_65300332.jpg', 8, 15000.00, 12000.00, '003', 1),
(62, 7, 11, 48, 'Samsung Music 2 ', '', 'product_1688579099_8100329.jpg', 8, 3000.00, 2350.00, '1239', 1),
(63, 8, 35, 43, 'Summer Beauty Hacks', 'Summer Beauty Hacks', 'product_1688579739_55719038.jpg', 8, 340.00, 290.00, '12310', 1),
(65, 10, 54, 54, 'Watches', 'A wristwatch is designed to be worn around the wrist, attached by a watch strap or other type of bracelet, including metal bands, leather straps, or any other kind of bracelet.', 'product_1688579852_40393560.jpg', 8, 1900.00, 1500.00, '004', 1),
(66, 10, 51, 55, 'T_Shirts', 'this is so comfortable', 'product_1688580239_33049999.jpg', 8, 1200.00, 900.00, '005', 1),
(67, 11, 61, 47, 'MacBook Pros ', 'Apple launches unprecedented price cuts to MacBook Pros | Digital Trends', 'product_1688580330_1916031.jpg', 8, 120000.00, 105000.00, '12313', 1),
(68, 11, 61, 47, 'MacBook Pros ', 'Apple launches unprecedented price cuts to MacBook Pros | Digital Trends', 'product_1688580655_88334761.jpg', 8, 120000.00, 105000.00, '12313', 1),
(69, 10, 55, 54, 'wallet', 'this is so useful', 'product_1688580437_68252813.jpg', 8, 800.00, 600.00, '006', 1),
(70, 13, 76, 47, 'Apple Watch SE GPS', 'Apple Watch SE GPS, 44mm Midnight Aluminum Case with', 'product_1688580535_19318133.jpg', 8, 80000.00, 68000.00, '12313', 1),
(71, 13, 76, 47, 'Apple Watch SE GPS', 'Apple Watch SE GPS, 44mm Midnight Aluminum Case with', 'product_1688580631_76942429.jpg', 8, 80000.00, 68000.00, '12313', 1),
(72, 6, 31, 54, 'Bags', 'this is so useful', 'product_1688580552_29507769.jpg', 8, 2200.00, 1900.00, '007', 1),
(73, 10, 52, 54, 'Sneakers', 'this is so comfortable', 'product_1688580663_51040762.jpg', 8, 2800.00, 2500.00, '0011', 1),
(74, 12, 67, 48, 'Microwave', 'Microwave ovens heat food using microwaves, a form of electromagnetic radiation similar to radio waves.', 'product_1688580993_25952353.jpg', 8, 30000.00, 27000.00, '0012', 1),
(75, 12, 68, 48, 'Fans', 'A fan is a powered machine used to create a flow of air', 'product_1688581451_79880572.jpg', 8, 5000.00, 4300.00, '013', 1),
(76, 12, 66, 48, 'Freezer', 'A freezer is a large container like a fridge in which the temperature is kept below freezing point so that you can store food inside it for long periods', 'product_1688581603_35999952.jpg', 8, 50000.00, 46000.00, '0014', 1),
(77, 12, 70, 42, 'Water Purifiers', 'Water purifiers ensure that you get clean and safe drinking water on demand so that you stay away from water-borne diseases.', 'product_1688581788_88918959.jpg', 8, 8000.00, 7300.00, '0015', 1),
(78, 12, 65, 51, 'Video Device', 'this is so useful', 'product_1688581920_55712587.jpg', 8, 20000.00, 19000.00, '0016', 1),
(79, 8, 38, 54, 'Face washes', 'Face washes are designed to remove impurities, germs, dirt and makeup that can irritate the skin.', 'product_1688583379_46567606.jpg', 8, 4500.00, 4000.00, '0018', 1),
(80, 8, 38, 43, 'Face cleanser', 'face cleanser are designed to remove impurities, germs, dirt and makeup that can irritate the skin.', 'product_1688583581_77403291.jpg', 8, 1800.00, 1500.00, '020', 1),
(81, 8, 36, 54, 'Perfumes', 'Perfumes can be defined as substances that emit and diffuse a pleasant and fragrant odor.', 'product_1688583785_3581419.jpg', 8, 1400.00, 1200.00, '0024', 1),
(82, 8, 36, 54, 'Perfumes', 'Perfumes can be defined as substances that emit and diffuse a pleasant and fragrant odor.', 'product_1688583885_60560271.jpg', 8, 1400.00, 1200.00, '0024', 1),
(83, 8, 35, 54, 'Makeup', 'Makeup consists of things such as lipstick, eye shadow, and powder which some women put on their faces to make themselves look more attractive or which actors use to change or improve their appearance', 'product_1688584316_55945209.jpg', 8, 6000.00, 5500.00, '009', 1),
(84, 8, 33, 56, 'Rose Water', 'Makeup consists of things such as lipstick, eye shadow, and powder which some women ', 'product_1688585237_1603637.jpg', 8, 600.00, 500.00, '0078', 1),
(85, 14, 78, 54, 'Hilsa fish', 'Hilsa fish is one of the few fishes that is quite famous for its incredibly soft meat. ', 'product_1688585894_85351156.jpg', 7, 1200.00, 1900.00, '5', 1),
(86, 14, 78, 54, 'Meat', 'Meat is defined as the flesh of animals (including fishes and birds) used as food, that can be part of a healthful diet', 'product_1688586173_8987868.jpg', 7, 800.00, 750.00, '078', 1),
(87, 12, 64, 48, 'TV', 'Television (TV) is a telecommunication medium for transmitting moving images and sound. ', 'product_1688586620_34964985.jpg', 8, 40000.00, 37000.00, '056', 1),
(88, 10, 51, 55, 'Shirts', 'so comfortable', 'product_1688587405_54126489.jpg', 8, 1500.00, 1350.00, '0045', 1),
(89, 7, 11, 47, 'Apple iPhone 14 Plus', 'Apple iPhone 14 Plus', 'product_1688612934_39737649.jpg', 8, 80000.00, 74000.00, '12316', 1),
(90, 7, 11, 47, ' iPhone 11 Plus', 'Apple iPhone 14 Plus', 'product_1688613040_13059006.jpg', 8, 70000.00, 68000.00, '12316', 1),
(91, 11, 59, 48, 'Interchangeable Lens Cameras', 'Product List - Interchangeable Lens Cameras - Canon South & Southeast Asia', 'product_1688613674_62625821.jpg', 8, 55000.00, 50000.00, '12318', 1),
(92, 8, 34, 57, 'HEGRUS Hair Natural', 'HEGRUS Round Comb Bristle Hair B-rushes Natural Round B-rushes W-4', 'product_1688614140_16019382.jpg', 8, 320.00, 300.00, '12318', 1),
(93, 13, 72, 41, ' 500 S&W Magnum', ' 500 S&W Magnum short gun', 'product_1688614916_39136355.jpg', 8, 44000.00, 41000.00, '12320', 1),
(94, 14, 85, 54, 'green chili', '', 'product_1688615657_6634331.jpg', 7, 1200.00, 200.00, '12321', 1),
(95, 6, 23, 61, 'Nasirah Turkish Hijab', 'Nasirah Turkish Hijab', 'product_1688617949_2543511.jpg', 8, 12000.00, 9000.00, '12322', 1),
(96, 10, 51, 61, 'Shoes', 'Design & Print Custom Shirts | Make Your Own T-Shirt Design', 'product_1688619163_86857036.jpg', 8, 4500.00, 3400.00, '12323', 1),
(97, 9, 44, 57, ' School Bags for Kids ', 'Asge Backpacks for Boys School Bags for Kids Luminous Bookbag and Sling Bag Set', 'product_1688620940_27808540.jpg', 8, 3000.00, 2400.00, '12326', 1),
(98, 9, 50, 57, ' Maharashtrian  Set', 'Golden Alloy Maharashtrian Jewellery Set', 'product_1688621146_48988552.jpg', 8, 150000.00, 123000.00, '12326', 1),
(99, 8, 33, 56, ' facial skincare ', 'The 30 best facial skincare products for under £20 | Skincare | The Guardian', 'product_1688621369_42520951.jpg', 8, 4500.00, 3700.00, '12328', 1),
(100, 8, 37, 56, ' Clean Makeup Brushes', 'How To Clean Makeup Brushes, Beauty Blenders, and More - The Maids', 'product_1688621535_24175535.jpg', 8, 500.00, 360.00, '12328', 1),
(101, 14, 78, 54, 'strawberries ', 'Once strawberries warm up, no practical way to cool them back down', 'product_1688622084_61084281.jpg', 7, 800.00, 650.00, '12330', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_information`
-- (See below for the actual view)
--
CREATE TABLE `product_information` (
`brand_id` int
,`brand_name` varchar(50)
,`brand_status` int
,`buying_price` decimal(10,2)
,`category_id` int
,`category_name` varchar(50)
,`category_status` int
,`description` text
,`product_id` int
,`product_image` varchar(100)
,`product_name` varchar(50)
,`product_status` int
,`selling_price` decimal(10,2)
,`sku` varchar(50)
,`sub_category_id` int
,`sub_category_name` varchar(50)
,`sub_category_status` int
,`total_buy_quantity` decimal(32,0)
,`total_sold_quantity` decimal(32,0)
,`total_stock` decimal(36,2)
,`unit_id` int
,`unit_name` varchar(50)
,`unit_status` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_stock_information`
-- (See below for the actual view)
--
CREATE TABLE `product_stock_information` (
`product_id` int
,`product_name` varchar(50)
,`total_buy_quantity` decimal(32,0)
,`total_sold_quantity` decimal(32,0)
,`total_stock` decimal(36,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_summary`
-- (See below for the actual view)
--
CREATE TABLE `product_summary` (
`product_id` int
,`product_name` varchar(50)
,`total_buy_quantity` decimal(32,0)
,`total_sold_quantity` decimal(32,0)
,`total_stock` decimal(36,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `purchase_order_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `supplier_id` int NOT NULL,
  `time_stamp` datetime DEFAULT CURRENT_TIMESTAMP,
  `purchase_order_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`purchase_order_id`, `user_id`, `supplier_id`, `time_stamp`, `purchase_order_status`) VALUES
(16, 22, 13, '2023-07-05 12:48:53', 1),
(17, 22, 11, '2023-07-05 13:37:47', 1),
(18, 22, 10, '2023-07-05 13:38:49', 1),
(19, 22, 13, '1900-01-18 00:00:00', 1),
(20, 22, 10, '1900-01-18 00:00:00', 1),
(21, 22, 10, '2023-07-19 00:00:00', 1),
(22, 22, 10, '2023-07-19 14:06:07', 1),
(23, 22, 13, '2023-07-19 14:06:42', 1),
(24, 22, 13, '2023-07-20 14:07:59', 1),
(25, 22, 11, '2023-07-20 14:14:25', 1),
(26, 22, 13, '2023-07-21 14:17:37', 1),
(27, 22, 13, '2023-07-21 14:18:51', 1),
(28, 22, 15, '2023-07-21 14:22:34', 1),
(29, 22, 9, '2023-07-22 14:32:17', 1),
(30, 22, 13, '2023-07-22 14:32:52', 1),
(31, 22, 16, '2023-07-23 15:17:09', 1),
(32, 22, 16, '2023-07-23 23:02:07', 1),
(33, 22, 11, '2023-07-24 23:03:03', 1),
(34, 22, 13, '2023-07-24 23:03:47', 1),
(35, 22, 10, '2023-07-24 23:04:29', 1),
(36, 22, 13, '2023-07-25 23:19:35', 1),
(37, 20, 18, '2023-07-25 01:24:10', 1),
(38, 23, 19, '2023-07-26 01:25:29', 1),
(39, 22, 13, '2023-07-26 02:40:07', 1),
(40, 22, 10, '2023-07-26 02:40:53', 1),
(41, 22, 11, '2023-07-06 02:42:47', 1),
(42, 22, 13, '2023-07-06 02:43:17', 1),
(43, 23, 20, '2023-07-06 06:43:09', 1),
(44, 23, 20, '2023-07-06 06:45:00', 1),
(45, 23, 20, '2023-07-06 14:04:01', 1),
(46, 23, 21, '2023-08-13 06:53:30', 1),
(47, 23, 20, '2023-10-22 00:03:31', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `purchase_order_information`
-- (See below for the actual view)
--
CREATE TABLE `purchase_order_information` (
`purchase_order_id` int
,`purchase_order_status` int
,`role_id` int
,`supplier_address` text
,`supplier_email` varchar(50)
,`supplier_id` int
,`supplier_name` varchar(50)
,`supplier_phone` varchar(50)
,`supplier_status` int
,`time_stamp` datetime
,`user_email` varchar(50)
,`user_id` int
,`user_image` varchar(100)
,`user_name` varchar(30)
,`user_password` varchar(50)
,`user_phone` varchar(20)
,`user_status` varchar(50)
,`user_username` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int NOT NULL,
  `role_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Moderators'),
(3, 'Sales Person');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `sales_order_id` int NOT NULL,
  `customer_id` int DEFAULT NULL,
  `user_id` int NOT NULL,
  `time_stamp` datetime DEFAULT CURRENT_TIMESTAMP,
  `sales_order_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`sales_order_id`, `customer_id`, `user_id`, `time_stamp`, `sales_order_status`) VALUES
(61, 1081, 22, '2023-10-29 14:26:57', 1),
(62, 1082, 22, '2023-10-23 14:28:24', 1),
(63, 1083, 22, '2023-07-18 14:31:22', 1),
(64, 1084, 22, '2023-07-19 14:36:09', 1),
(65, 1085, 22, '2023-10-31 14:39:33', 1),
(66, 1086, 22, '2023-10-31 14:41:18', 1),
(67, 1087, 22, '2023-07-20 14:43:11', 1),
(68, 1088, 22, '2023-07-20 14:46:12', 1),
(69, 1089, 22, '2023-10-22 14:47:48', 1),
(70, 1090, 23, '2023-07-21 16:02:27', 1),
(71, 1091, 23, '2023-10-27 16:05:29', 1),
(72, 1092, 23, '2023-10-22 16:06:59', 1),
(73, 1093, 22, '2023-07-22 23:16:25', 1),
(74, 1093, 25, '2023-07-22 23:32:18', 1),
(75, 1093, 25, '2023-07-22 23:34:45', 1),
(76, 1094, 23, '2023-10-24 01:19:30', 1),
(77, 1094, 23, '2023-10-25 02:10:48', 1),
(78, 1095, 24, '2023-10-26 02:26:52', 1),
(79, 1096, 24, '2023-10-27 02:33:26', 1),
(80, 1097, 22, '2023-10-28 02:46:38', 1),
(81, 1098, 22, '2023-09-28 02:48:13', 1),
(82, 1099, 22, '2023-09-29 02:49:00', 1),
(83, 1100, 23, '2023-09-29 04:24:07', 1),
(84, 1094, 23, '2023-10-31 05:12:41', 1),
(85, 1094, 23, '2023-10-01 06:41:40', 1),
(86, 1094, 23, '2023-07-06 06:45:23', 1),
(87, 1094, 23, '2023-07-06 14:03:40', 1),
(88, 1101, 23, '2023-07-09 11:26:57', 1),
(89, 1094, 23, '2023-07-14 05:15:58', 1),
(90, 1094, 23, '2023-07-14 05:16:06', 1),
(91, 1094, 23, '2023-07-14 05:16:15', 1),
(92, 1094, 23, '2023-07-26 08:29:28', 1),
(93, 1094, 23, '2023-08-13 06:50:58', 1),
(94, 1094, 23, '2023-08-13 06:52:02', 1),
(95, 1094, 23, '2023-08-25 04:22:54', 1),
(96, 1102, 23, '2023-10-21 23:37:48', 1),
(97, 1094, 23, '2023-10-22 00:02:27', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sales_order_information`
-- (See below for the actual view)
--
CREATE TABLE `sales_order_information` (
`customer_address` varchar(200)
,`customer_email` varchar(100)
,`customer_id` int
,`customer_name` varchar(200)
,`customer_phone` varchar(20)
,`customer_status` int
,`role_id` int
,`sales_order_id` int
,`sales_order_status` int
,`time_stamp` datetime
,`user_email` varchar(50)
,`user_id` int
,`user_image` varchar(100)
,`user_name` varchar(30)
,`user_password` varchar(50)
,`user_phone` varchar(20)
,`user_status` varchar(50)
,`user_username` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `sub_category_id` int NOT NULL,
  `sub_category_name` varchar(50) DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `sub_category_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_category_id`, `sub_category_name`, `category_id`, `sub_category_status`) VALUES
(11, 'Phone', 7, 1),
(12, 'Shalwar Kameez', 6, 1),
(13, 'Sarees', 6, 1),
(14, 'Kurtis', 6, 1),
(15, 'Unstitched Fabric', 6, 1),
(16, 'Party Kameez & Gowns', 6, 1),
(17, 'Palazzo Pants & Culottes', 6, 1),
(18, 'Pants, Palazzos & Capris', 6, 1),
(19, 'Dresses', 6, 1),
(20, 'T-Shirts', 6, 1),
(21, 'Tops', 6, 1),
(22, 'Skirts', 6, 1),
(23, 'Hijabs', 6, 1),
(24, 'Heels ', 6, 1),
(25, 'Flats', 6, 1),
(26, 'Sneakers', 6, 1),
(27, 'Shoes', 6, 1),
(28, 'Crossbody & Shoulder Bags ', 6, 1),
(29, 'Backpacks ', 6, 1),
(30, 'Wallets ', 6, 1),
(31, 'Top Handle Bags', 6, 1),
(32, 'Watches', 6, 1),
(33, 'Skin Care', 8, 1),
(34, 'Hair Care', 8, 1),
(35, 'Makeup', 8, 1),
(36, 'Fragrances', 8, 1),
(37, 'Beauty Tools', 8, 1),
(38, 'Bath & Body', 8, 1),
(39, 'Personal Care', 8, 1),
(40, 'Mens Care', 8, 1),
(41, 'Kids Bags', 9, 1),
(42, 'Backpacks', 9, 1),
(43, 'Bags', 9, 1),
(44, 'School Bags & Backpack', 9, 1),
(45, 'Laptop Bags & Cases', 9, 1),
(46, 'Luggage', 9, 1),
(47, 'Men Watches', 9, 1),
(48, 'Women Watches', 9, 1),
(49, 'Kids Watches', 9, 1),
(50, 'Jewellery', 9, 1),
(51, 'Clothing', 10, 1),
(52, 'Shoes', 10, 1),
(53, 'Muslim Wear', 10, 1),
(54, 'Watches', 10, 1),
(55, 'Fashion', 10, 1),
(56, 'Accessories', 10, 1),
(57, 'Smartphones', 11, 1),
(58, 'Feature Phone', 11, 1),
(59, 'Cameras', 11, 1),
(60, 'Trendy Mobile Accessories', 11, 1),
(61, 'Laptops', 11, 1),
(62, 'Desktops', 11, 1),
(63, 'Audio', 11, 1),
(64, 'Television', 12, 1),
(65, 'TV & Video Device', 12, 1),
(66, 'Freezer', 12, 1),
(67, 'Microwaves', 12, 1),
(68, 'Fans', 12, 1),
(69, 'Small Appliances ', 12, 1),
(70, 'Water Purifiers', 12, 1),
(71, 'Refrigerators', 12, 1),
(72, 'Gadgets', 13, 1),
(73, 'Wearable', 13, 1),
(74, 'Storage', 13, 1),
(75, 'Printer', 13, 1),
(76, 'Software', 13, 1),
(77, 'Camera Accessories', 13, 1),
(78, 'Fruits, Meat & Frozen', 14, 1),
(79, 'Breakfast', 14, 1),
(80, 'Cooking Ingredients', 14, 1),
(81, 'Snacks & Beverages', 14, 1),
(82, 'Dairy & Eggs', 14, 1),
(83, 'Herbs, Spices & Sauces', 14, 1),
(84, 'Chocolates & Candy', 14, 1),
(85, 'Laundry & Household', 14, 1),
(86, 'Bath', 15, 1),
(87, 'Bedding', 15, 1),
(88, 'Furniture', 15, 1),
(89, 'Cleaning', 15, 1),
(90, 'Coffee & Tea', 15, 1),
(91, 'Cookware', 15, 1),
(92, 'Books', 15, 1),
(93, 'Tools, DIY & Outdoor', 15, 1),
(94, 'Exercise & Fitness', 16, 1),
(95, 'Treadmills', 16, 1),
(96, 'Exercise Bikes', 16, 1),
(97, 'Dumbbells', 16, 1),
(98, 'Cycling', 16, 1),
(99, 'Boxing & Martial Arts', 16, 1),
(100, 'Shoes & Clothing', 16, 1),
(101, 'Fan Shop', 16, 1),
(102, 'Team Sports', 16, 1),
(103, 'Shoe', 16, 1),
(104, 'Sea  fish', 17, 1),
(105, 'River  fish', 17, 1),
(106, 'Pond  fish', 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `supplier_address` text NOT NULL,
  `supplier_phone` varchar(50) NOT NULL,
  `supplier_email` varchar(50) NOT NULL,
  `supplier_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_phone`, `supplier_email`, `supplier_status`) VALUES
(9, 'PRAN-RFL Group', '105 Pragati Sarani, Middle Badda, Dhaka-1212, Bangladesh', '01257894512', 'crd@prangroup.com', 1),
(10, 'Easy Fashion Ltd', '34/B Chowdhurypara, Malibagh , Dhaka, Bangladesh', '01713429330', 'easyonline330@gmail.com', 1),
(11, 'Panda Mart', 'Laila Tower, 8 Bir Uttam Mir Shawkat Sarak, Gulshan', '01568177617', 'info@pandamart.com', 1),
(13, 'Ali Express', 'Hangzhou, China', '01726598745', 'info@aliexpress.com', 1),
(15, 'Lotto Sport Italia', '5/7, 31040 Trevignano (TV) - Italy', '01723658475', 'info@lotto.com', 1),
(16, 'Unilever Bangladesh LTD', 'Dhaka Bangladesh', '01457621020', 'info@unilever.com', 1),
(18, 'RFL', 'Dhaka', '01774656830', 'rfl@gmail.com', 1),
(19, 'Meat Bangladesh', 'Dhanmondi', '01657945124', 'meatbd@gmail.com', 1),
(20, 'Meat BD', 'Mirpur', '01956545645', 'meat@gmail.com', 1),
(21, 'Maruf Supplier', 'Mirpur', '01564164864', 'maruf@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `s_order_product`
--

CREATE TABLE `s_order_product` (
  `s_order_product_id` int NOT NULL,
  `sales_order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `s_order_product`
--

INSERT INTO `s_order_product` (`s_order_product_id`, `sales_order_id`, `product_id`, `quantity`) VALUES
(118, 61, 73, 1),
(119, 61, 71, 1),
(120, 61, 69, 1),
(121, 61, 68, 1),
(122, 61, 66, 1),
(123, 62, 66, 1),
(124, 62, 65, 1),
(125, 62, 74, 1),
(126, 62, 72, 1),
(127, 63, 74, 1),
(128, 63, 72, 1),
(129, 63, 68, 1),
(130, 63, 63, 1),
(131, 63, 61, 1),
(132, 63, 59, 5),
(133, 63, 58, 7),
(134, 63, 57, 1),
(135, 64, 78, 1),
(136, 64, 77, 1),
(137, 64, 76, 1),
(138, 64, 75, 1),
(139, 64, 69, 1),
(140, 65, 75, 1),
(141, 65, 74, 1),
(142, 65, 73, 1),
(143, 65, 70, 1),
(144, 65, 69, 1),
(145, 66, 69, 1),
(146, 66, 71, 1),
(147, 66, 74, 1),
(148, 66, 75, 1),
(149, 67, 69, 1),
(150, 67, 74, 1),
(151, 67, 75, 1),
(152, 67, 72, 1),
(153, 67, 69, 1),
(154, 68, 77, 1),
(155, 68, 76, 1),
(156, 68, 74, 1),
(157, 68, 75, 1),
(158, 68, 72, 1),
(159, 69, 77, 1),
(160, 69, 74, 1),
(161, 69, 75, 1),
(162, 69, 78, 1),
(163, 69, 73, 1),
(164, 69, 70, 1),
(165, 69, 72, 1),
(166, 70, 81, 1),
(167, 70, 78, 1),
(168, 70, 72, 2),
(169, 70, 70, 1),
(170, 71, 79, 3),
(171, 72, 80, 5),
(172, 73, 90, 1),
(173, 73, 85, 1),
(174, 73, 76, 1),
(175, 73, 74, 1),
(176, 73, 71, 1),
(177, 73, 67, 1),
(178, 73, 58, 1),
(179, 74, 91, 1),
(180, 75, 89, 3),
(181, 75, 87, 1),
(182, 75, 88, 3),
(183, 75, 86, 4),
(184, 75, 83, 1),
(185, 76, 86, 1),
(186, 77, 93, 2),
(187, 78, 98, 1),
(188, 78, 90, 1),
(189, 78, 85, 1),
(190, 79, 95, 1),
(191, 79, 92, 1),
(192, 79, 79, 1),
(193, 79, 58, 1),
(194, 80, 97, 1),
(195, 80, 94, 1),
(196, 80, 86, 1),
(197, 80, 85, 1),
(198, 81, 61, 1),
(199, 81, 60, 1),
(200, 81, 59, 1),
(201, 81, 58, 1),
(202, 81, 57, 1),
(203, 81, 54, 1),
(204, 81, 53, 1),
(205, 82, 61, 1),
(206, 82, 60, 1),
(207, 82, 59, 1),
(208, 82, 57, 1),
(209, 82, 53, 1),
(210, 83, 91, 2),
(211, 83, 86, 2),
(212, 83, 80, 2),
(213, 84, 86, 1),
(214, 85, 86, 2),
(215, 85, 85, 1),
(216, 86, 91, 20),
(217, 87, 99, 2),
(218, 88, 91, 1),
(219, 88, 91, 1),
(220, 88, 90, 1),
(221, 88, 89, 1),
(222, 89, 99, 1),
(223, 90, 99, 1),
(224, 90, 94, 1),
(225, 91, 94, 1),
(226, 91, 87, 1),
(227, 91, 86, 1),
(228, 92, 99, 1),
(229, 92, 98, 1),
(230, 92, 94, 1),
(231, 92, 95, 1),
(232, 92, 97, 1),
(233, 93, 48, 1),
(234, 93, 55, 1),
(235, 93, 59, 5),
(236, 94, 100, 4),
(237, 95, 96, 2),
(238, 95, 95, 1),
(239, 95, 91, 1),
(240, 96, 86, 1),
(241, 96, 48, 2),
(242, 96, 52, 1),
(243, 96, 54, 1),
(244, 97, 100, 10);

-- --------------------------------------------------------

--
-- Stand-in structure for view `s_order_product_information`
-- (See below for the actual view)
--
CREATE TABLE `s_order_product_information` (
`brand_id` int
,`buying_price` decimal(10,2)
,`category_id` int
,`description` text
,`product_id` int
,`product_image` varchar(100)
,`product_name` varchar(50)
,`product_status` int
,`quantity` int
,`s_order_product_id` int
,`sales_order_id` int
,`selling_price` decimal(10,2)
,`sku` varchar(50)
,`sub_category_id` int
,`unit_id` int
);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `unit_id` int NOT NULL,
  `unit_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `unit_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`unit_id`, `unit_name`, `unit_status`) VALUES
(7, 'kg', 1),
(8, 'pc', 1),
(10, 'Meter', 1),
(11, 'gm', 1),
(13, 'Liter', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `user_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `role_id` int DEFAULT NULL,
  `user_status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_username`, `user_email`, `user_phone`, `user_password`, `role_id`, `user_status`, `user_image`) VALUES
(20, 'Mosharof', 'mosharof', 'info@gmail.com', '017289429479', 'storemanagement', 1, NULL, 'user_1688624012_9058884.jpeg'),
(22, 'Ali Hasan', 'dbhasan', 'infoalihasanbd@gmail.com', '01723629080', 'storemanagement', 1, NULL, 'user_1688139907_2684197.jpg'),
(23, 'Miraj', 'skmiraj', 'skmirajbn@gmail.com', '01957244070', 'storemanagement', 1, NULL, 'user_1688216572_6458194.png'),
(24, 'Alamin', 'alamin', 'info@gmail.com', '01723629080', 'storemanagement', 1, NULL, 'user_1688620008_7115230.jpg'),
(25, 'khaleda', 'khaleda', 'info@gmail.com', '01723629080', 'storemanagement', 1, NULL, 'user_1688619677_4118138.jpg'),
(33, 'Md Rabiul Alam', 'roby', 'roby@gmail.com', '01954712564', 'storemanagement', 2, NULL, 'user_1688582184_2538704.jpg'),
(34, 'Jahirul Islam', 'jahirul', 'jahirul@gmail.com', '01564846242', 'storemanagement', 3, NULL, 'user_1688582294_9848104.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `users_information`
-- (See below for the actual view)
--
CREATE TABLE `users_information` (
`role_id` int
,`role_name` varchar(50)
,`user_email` varchar(50)
,`user_id` int
,`user_image` varchar(100)
,`user_name` varchar(30)
,`user_password` varchar(50)
,`user_phone` varchar(20)
,`user_status` varchar(50)
,`user_username` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `b_order_product_information`
--
DROP TABLE IF EXISTS `b_order_product_information`;

CREATE ALGORITHM=UNDEFINED DEFINER=`skmiraj`@`%` SQL SECURITY DEFINER VIEW `b_order_product_information`  AS SELECT `b_order_product`.`b_order_product_id` AS `b_order_product_id`, `b_order_product`.`purchase_order_id` AS `purchase_order_id`, `b_order_product`.`product_id` AS `product_id`, `b_order_product`.`quantity` AS `quantity`, `products`.`category_id` AS `category_id`, `products`.`sub_category_id` AS `sub_category_id`, `products`.`brand_id` AS `brand_id`, `products`.`product_name` AS `product_name`, `products`.`description` AS `description`, `products`.`product_image` AS `product_image`, `products`.`unit_id` AS `unit_id`, `products`.`selling_price` AS `selling_price`, `products`.`buying_price` AS `buying_price`, `products`.`sku` AS `sku`, `products`.`product_status` AS `product_status` FROM (`b_order_product` join `products` on((`b_order_product`.`product_id` = `products`.`product_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `categories_information`
--
DROP TABLE IF EXISTS `categories_information`;

CREATE ALGORITHM=UNDEFINED DEFINER=`skmiraj`@`%` SQL SECURITY DEFINER VIEW `categories_information`  AS SELECT `c`.`category_id` AS `category_id`, `c`.`category_name` AS `category_name`, `c`.`category_status` AS `category_status`, `sc`.`sub_category_id` AS `sub_category_id`, `sc`.`sub_category_name` AS `sub_category_name`, `sc`.`sub_category_status` AS `sub_category_status` FROM (`categories` `c` join `sub_categories` `sc` on((`c`.`category_id` = `sc`.`category_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `category_product_information`
--
DROP TABLE IF EXISTS `category_product_information`;

CREATE ALGORITHM=UNDEFINED DEFINER=`skmiraj`@`%` SQL SECURITY DEFINER VIEW `category_product_information`  AS SELECT `c`.`category_id` AS `category_id`, `c`.`category_name` AS `category_name`, count(`p`.`product_id`) AS `total_products` FROM (`categories` `c` left join `products` `p` on((`c`.`category_id` = `p`.`category_id`))) GROUP BY `c`.`category_id`, `c`.`category_name` ;

-- --------------------------------------------------------

--
-- Structure for view `last_7days_sales_information`
--
DROP TABLE IF EXISTS `last_7days_sales_information`;

CREATE ALGORITHM=UNDEFINED DEFINER=`skmiraj`@`%` SQL SECURITY DEFINER VIEW `last_7days_sales_information`  AS SELECT cast(`so`.`time_stamp` as date) AS `sales_date`, sum((`sop`.`quantity` * `p`.`selling_price`)) AS `total_sales` FROM ((`sales_order` `so` join `s_order_product` `sop` on((`so`.`sales_order_id` = `sop`.`sales_order_id`))) join `products` `p` on((`sop`.`product_id` = `p`.`product_id`))) WHERE ((`so`.`sales_order_status` = 1) AND (cast(`so`.`time_stamp` as date) >= (curdate() - interval 7 day))) GROUP BY `sales_date` ORDER BY `sales_date` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `product_information`
--
DROP TABLE IF EXISTS `product_information`;

CREATE ALGORITHM=UNDEFINED DEFINER=`skmiraj`@`%` SQL SECURITY DEFINER VIEW `product_information`  AS SELECT `psi`.`total_sold_quantity` AS `total_sold_quantity`, `psi`.`total_buy_quantity` AS `total_buy_quantity`, `psi`.`total_stock` AS `total_stock`, `p`.`unit_id` AS `unit_id`, `p`.`brand_id` AS `brand_id`, `p`.`category_id` AS `category_id`, `p`.`sub_category_id` AS `sub_category_id`, `p`.`product_id` AS `product_id`, `p`.`product_name` AS `product_name`, `p`.`description` AS `description`, `p`.`product_image` AS `product_image`, `p`.`selling_price` AS `selling_price`, `p`.`buying_price` AS `buying_price`, `p`.`sku` AS `sku`, `p`.`product_status` AS `product_status`, `c`.`category_name` AS `category_name`, `c`.`category_status` AS `category_status`, `sc`.`sub_category_name` AS `sub_category_name`, `sc`.`sub_category_status` AS `sub_category_status`, `b`.`brand_name` AS `brand_name`, `b`.`brand_status` AS `brand_status`, `u`.`unit_name` AS `unit_name`, `u`.`unit_status` AS `unit_status` FROM (((((`products` `p` join `categories` `c` on((`p`.`category_id` = `c`.`category_id`))) join `sub_categories` `sc` on(((`p`.`category_id` = `sc`.`category_id`) and (`p`.`sub_category_id` = `sc`.`sub_category_id`)))) join `brands` `b` on((`p`.`brand_id` = `b`.`brand_id`))) join `units` `u` on((`p`.`unit_id` = `u`.`unit_id`))) join `product_stock_information` `psi` on((`p`.`product_id` = `psi`.`product_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `product_stock_information`
--
DROP TABLE IF EXISTS `product_stock_information`;

CREATE ALGORITHM=UNDEFINED DEFINER=`skmiraj`@`%` SQL SECURITY DEFINER VIEW `product_stock_information`  AS SELECT `p`.`product_id` AS `product_id`, `p`.`product_name` AS `product_name`, coalesce(`sold`.`quantity`,0) AS `total_sold_quantity`, coalesce(`bought`.`quantity`,0) AS `total_buy_quantity`, ((ifnull(`i`.`stock`,0) + coalesce(`bought`.`quantity`,0)) - coalesce(`sold`.`quantity`,0)) AS `total_stock` FROM (((`products` `p` left join (select `s_order_product`.`product_id` AS `product_id`,sum(`s_order_product`.`quantity`) AS `quantity` from `s_order_product` group by `s_order_product`.`product_id`) `sold` on((`p`.`product_id` = `sold`.`product_id`))) left join (select `b_order_product`.`product_id` AS `product_id`,sum(`b_order_product`.`quantity`) AS `quantity` from `b_order_product` group by `b_order_product`.`product_id`) `bought` on((`p`.`product_id` = `bought`.`product_id`))) left join `inventory` `i` on((`p`.`product_id` = `i`.`product_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `product_summary`
--
DROP TABLE IF EXISTS `product_summary`;

CREATE ALGORITHM=UNDEFINED DEFINER=`skmiraj`@`%` SQL SECURITY DEFINER VIEW `product_summary`  AS SELECT `p`.`product_id` AS `product_id`, `p`.`product_name` AS `product_name`, coalesce(sum(`sop`.`quantity`),0) AS `total_sold_quantity`, sum(`bop`.`quantity`) AS `total_buy_quantity`, ((ifnull(`i`.`stock`,0) + sum(`bop`.`quantity`)) - coalesce(sum(`sop`.`quantity`),0)) AS `total_stock` FROM (((`products` `p` left join `s_order_product` `sop` on((`sop`.`product_id` = `p`.`product_id`))) left join `b_order_product` `bop` on((`bop`.`product_id` = `p`.`product_id`))) left join `inventory` `i` on((`i`.`product_id` = `p`.`product_id`))) GROUP BY `p`.`product_id`, `p`.`product_name` ;

-- --------------------------------------------------------

--
-- Structure for view `purchase_order_information`
--
DROP TABLE IF EXISTS `purchase_order_information`;

CREATE ALGORITHM=UNDEFINED DEFINER=`skmiraj`@`%` SQL SECURITY DEFINER VIEW `purchase_order_information`  AS SELECT `purchase_order`.`purchase_order_id` AS `purchase_order_id`, `purchase_order`.`user_id` AS `user_id`, `purchase_order`.`supplier_id` AS `supplier_id`, `purchase_order`.`time_stamp` AS `time_stamp`, `purchase_order`.`purchase_order_status` AS `purchase_order_status`, `users`.`user_name` AS `user_name`, `users`.`user_username` AS `user_username`, `users`.`user_email` AS `user_email`, `users`.`user_phone` AS `user_phone`, `users`.`user_password` AS `user_password`, `users`.`role_id` AS `role_id`, `users`.`user_status` AS `user_status`, `users`.`user_image` AS `user_image`, `suppliers`.`supplier_name` AS `supplier_name`, `suppliers`.`supplier_address` AS `supplier_address`, `suppliers`.`supplier_phone` AS `supplier_phone`, `suppliers`.`supplier_email` AS `supplier_email`, `suppliers`.`supplier_status` AS `supplier_status` FROM ((`purchase_order` join `users` on((`purchase_order`.`user_id` = `users`.`user_id`))) join `suppliers` on((`purchase_order`.`supplier_id` = `suppliers`.`supplier_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `sales_order_information`
--
DROP TABLE IF EXISTS `sales_order_information`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sales_order_information`  AS SELECT `sales_order`.`sales_order_id` AS `sales_order_id`, `sales_order`.`customer_id` AS `customer_id`, `sales_order`.`user_id` AS `user_id`, `sales_order`.`time_stamp` AS `time_stamp`, `sales_order`.`sales_order_status` AS `sales_order_status`, `customers`.`customer_name` AS `customer_name`, `customers`.`customer_address` AS `customer_address`, `customers`.`customer_phone` AS `customer_phone`, `customers`.`customer_email` AS `customer_email`, `customers`.`customer_status` AS `customer_status`, `users`.`user_name` AS `user_name`, `users`.`user_username` AS `user_username`, `users`.`user_email` AS `user_email`, `users`.`user_phone` AS `user_phone`, `users`.`user_password` AS `user_password`, `users`.`role_id` AS `role_id`, `users`.`user_status` AS `user_status`, `users`.`user_image` AS `user_image` FROM ((`sales_order` join `customers` on((`sales_order`.`customer_id` = `customers`.`customer_id`))) join `users` on((`sales_order`.`user_id` = `users`.`user_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `s_order_product_information`
--
DROP TABLE IF EXISTS `s_order_product_information`;

CREATE ALGORITHM=UNDEFINED DEFINER=`skmiraj`@`%` SQL SECURITY DEFINER VIEW `s_order_product_information`  AS SELECT `s_order_product`.`s_order_product_id` AS `s_order_product_id`, `s_order_product`.`sales_order_id` AS `sales_order_id`, `s_order_product`.`product_id` AS `product_id`, `s_order_product`.`quantity` AS `quantity`, `products`.`category_id` AS `category_id`, `products`.`sub_category_id` AS `sub_category_id`, `products`.`brand_id` AS `brand_id`, `products`.`product_name` AS `product_name`, `products`.`description` AS `description`, `products`.`product_image` AS `product_image`, `products`.`unit_id` AS `unit_id`, `products`.`selling_price` AS `selling_price`, `products`.`buying_price` AS `buying_price`, `products`.`sku` AS `sku`, `products`.`product_status` AS `product_status` FROM (`s_order_product` join `products` on((`s_order_product`.`product_id` = `products`.`product_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `users_information`
--
DROP TABLE IF EXISTS `users_information`;

CREATE ALGORITHM=UNDEFINED DEFINER=`skmiraj`@`%` SQL SECURITY DEFINER VIEW `users_information`  AS SELECT `users`.`user_id` AS `user_id`, `users`.`user_name` AS `user_name`, `users`.`user_username` AS `user_username`, `users`.`user_email` AS `user_email`, `users`.`user_phone` AS `user_phone`, `users`.`user_password` AS `user_password`, `users`.`role_id` AS `role_id`, `users`.`user_status` AS `user_status`, `users`.`user_image` AS `user_image`, `roles`.`role_name` AS `role_name` FROM (`users` join `roles` on((`users`.`role_id` = `roles`.`role_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `b_order_product`
--
ALTER TABLE `b_order_product`
  ADD PRIMARY KEY (`b_order_product_id`),
  ADD KEY `purchase_order_id` (`purchase_order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `Key` (`quantity`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_phone` (`customer_phone`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `unit_id` (`unit_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`purchase_order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`sales_order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `s_order_product`
--
ALTER TABLE `s_order_product`
  ADD PRIMARY KEY (`s_order_product_id`),
  ADD KEY `order_id` (`sales_order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `b_order_product`
--
ALTER TABLE `b_order_product`
  MODIFY `b_order_product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1103;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `purchase_order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `sales_order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `s_order_product`
--
ALTER TABLE `s_order_product`
  MODIFY `s_order_product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `unit_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `b_order_product`
--
ALTER TABLE `b_order_product`
  ADD CONSTRAINT `b_order_product_ibfk_1` FOREIGN KEY (`purchase_order_id`) REFERENCES `purchase_order` (`purchase_order_id`),
  ADD CONSTRAINT `b_order_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `units` (`unit_id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD CONSTRAINT `purchase_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD CONSTRAINT `sales_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `s_order_product`
--
ALTER TABLE `s_order_product`
  ADD CONSTRAINT `s_order_product_ibfk_1` FOREIGN KEY (`sales_order_id`) REFERENCES `sales_order` (`sales_order_id`),
  ADD CONSTRAINT `s_order_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
