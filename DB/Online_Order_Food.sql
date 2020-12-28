-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 ديسمبر 2020 الساعة 20:46
-- إصدار الخادم: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_order_food`
--

-- --------------------------------------------------------

--
-- بنية الجدول `links`
--

CREATE TABLE `links` (
  `ID` int(11) NOT NULL,
  `Link_Name` varchar(30) NOT NULL,
  `Url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `orders`
--

CREATE TABLE `orders` (
  `Order_Id` int(11) NOT NULL,
  `Order_Desc` text NOT NULL,
  `Order_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Order_Statue` enum('Delivered','Waiting','Canceled') NOT NULL DEFAULT 'Waiting',
  `Total_Cost` float NOT NULL,
  `Payment_Method` enum('COD','Credit') NOT NULL DEFAULT 'COD',
  `Cust_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `orders`
--

INSERT INTO `orders` (`Order_Id`, `Order_Desc`, `Order_Date`, `Order_Statue`, `Total_Cost`, `Payment_Method`, `Cust_Id`) VALUES
(1, '2 Of Mushroom Burger , ', '2020-05-02 16:34:17', 'Delivered', 118, 'Credit', 19),
(2, '1 Of The Burger King  , ', '2020-05-02 16:38:36', 'Waiting', 160, 'COD', 29),
(3, '2 Of Classic Burger , ', '2020-05-03 05:05:30', 'Delivered', 90, 'COD', 29),
(4, '2 Of Mushroom Burger , ', '2020-05-03 05:09:09', 'Delivered', 118, 'COD', 29),
(6, '2 Of Classic Burger , 2 Of Mushroom Burger , ', '2020-05-03 06:06:51', 'Delivered', 208, 'COD', 29),
(7, '1 Of Chili Cheese Burger , ', '2020-05-03 06:07:26', 'Delivered', 80, 'COD', 29),
(8, '1 Of The Burger President , ', '2020-05-03 06:08:57', 'Delivered', 159, 'COD', 29),
(9, '1 Of Bacon Burger , 2 Of Classic Burger , ', '2020-05-03 18:14:51', 'Canceled', 157, 'Credit', 29),
(10, '1 Of Classic Burger , ', '2020-05-03 19:36:38', 'Delivered', 45, 'Credit', 29),
(11, '1 Of Cheddar BACON  , 1 Of Lettuce Wrap Burger , ', '2020-05-05 17:40:59', 'Canceled', 117, 'Credit', 29),
(12, '2 Of Cheddar BACON  , 2 Of BBQ Bacon WHOPPER® , ', '2020-05-05 17:46:57', 'Delivered', 206, 'Credit', 19),
(13, '1 Of BACON SMASH , ', '2020-05-05 17:49:27', 'Canceled', 115, 'Credit', 29),
(14, '2 Of The Burger King  , ', '2020-05-05 17:49:39', 'Delivered', 260, 'COD', 29),
(15, '2 Of Classic Burger , ', '2020-05-05 17:50:12', 'Canceled', 90, 'Credit', 29),
(16, '1 Of Classic Burger , ', '2020-05-08 05:00:40', 'Waiting', 45, 'Credit', 19),
(17, '2 Of BBQ Bacon WHOPPER® , ', '2020-05-08 07:32:08', 'Waiting', 110, 'COD', 29),
(18, '4 Of Bacon Burger , 2 Of IMPOSSIBLE™ WHOPPER® , ', '2020-05-08 07:33:33', 'Waiting', 436, 'COD', 29),
(19, '3 Of GREEK LAMB , ', '2020-05-08 07:36:55', 'Waiting', 480, 'Credit', 29),
(20, '5 Of Cheddar BACON  , ', '2020-05-08 07:40:26', 'Waiting', 240, 'Credit', 29),
(21, '1 Of Big King XL , ', '2020-05-08 07:42:50', 'Waiting', 74, 'Credit', 19),
(22, '2 Of Double Quarter Pound KING™ , ', '2020-05-08 08:07:12', 'Waiting', 212, 'Credit', 19),
(23, '1 Of Lettuce Wrap Burger , ', '2020-05-08 08:09:10', 'Waiting', 69, 'Credit', 30),
(24, '1 Of Cheese Bomb Burger , ', '2020-05-08 08:27:14', 'Waiting', 103, 'Credit', 30),
(25, '1 Of Mushroom Burger , ', '2020-05-08 08:34:26', 'Waiting', 59, 'Credit', 30),
(26, '2 Of Double Quarter Pound KING™ , ', '2020-05-08 08:43:53', 'Waiting', 212, 'Credit', 30),
(27, '1 Of Cheddar BACON  , ', '2020-12-28 18:43:29', 'Delivered', 48, 'COD', 37);

-- --------------------------------------------------------

--
-- بنية الجدول `orders_details`
--

CREATE TABLE `orders_details` (
  `Order_Id` int(11) NOT NULL,
  `Pro_Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `orders_details`
--

INSERT INTO `orders_details` (`Order_Id`, `Pro_Id`, `Quantity`) VALUES
(1, 2, 2),
(2, 10, 1),
(3, 1, 2),
(4, 2, 2),
(6, 1, 2),
(6, 2, 2),
(7, 4, 1),
(8, 9, 1),
(9, 1, 2),
(9, 3, 1),
(10, 1, 1),
(11, 6, 1),
(11, 21, 1),
(12, 21, 2),
(12, 26, 2),
(13, 29, 1),
(14, 10, 2),
(15, 1, 2),
(16, 1, 1),
(17, 26, 2),
(18, 3, 4),
(18, 22, 2),
(19, 31, 3),
(20, 21, 5),
(21, 20, 1),
(22, 25, 2),
(23, 6, 1),
(24, 7, 1),
(25, 2, 1),
(26, 25, 2),
(27, 21, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `products`
--

CREATE TABLE `products` (
  `Pro_Id` int(11) NOT NULL,
  `Pro_Name` varchar(250) NOT NULL,
  `Pro_Desc` text NOT NULL,
  `Pro_Price` float NOT NULL,
  `Pro_Img` varchar(30) NOT NULL,
  `Pro_Statue` int(11) NOT NULL DEFAULT 0,
  `Special` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `products`
--

INSERT INTO `products` (`Pro_Id`, `Pro_Name`, `Pro_Desc`, `Pro_Price`, `Pro_Img`, `Pro_Statue`, `Special`) VALUES
(1, 'Classic Burger', 'Beef burger patty, lettuce, tomatoes, onions, cheddar cheese and special sauce', 45, '1.png', 1, 0),
(2, 'Mushroom Burger', 'Beef burger patty, mushroom, lettuce, tomatoes, caramelized onions, cheddar cheese and special sauce', 59, '2.png', 1, 0),
(3, 'Bacon Burger', 'Beef burger patty, beef bacon, lettuce, tomatoes, caramelized onions, cheddar cheese and special sauce', 67, '3.png', 1, 0),
(4, 'Chili Cheese Burger', 'Beef burger patty, minced meat, lettuce, American cheese, spicy chili sauce and special sauce', 80, '4.png', 1, 0),
(6, 'Lettuce Wrap Burger', 'Beef burger patty and light American cheese, wrapped in lettuce', 69, '6.png', 1, 0),
(7, 'Cheese Bomb Burger', 'Stuffed beef burger patty with American cheese, lettuce, onions, tomatoes, pickles and special sauce', 103, '7.png', 1, 0),
(8, 'Double Double Beef Burger', '2 Beef burger patties, lettuce, tomatoes, onions, pickled cucumber, double cheddar cheese and special sauce', 133, '8.png', 1, 0),
(9, 'The Burger President', 'Beef burger patty, lettuce, tomatoes, cheddar cheese, Buffalo sauce and special sauce', 170, 'S1.png', 1, 1),
(10, 'The Burger King ', 'Fire-grilled beef, topped with thick-cut smoked bacon, melted American cheese, freshly cut iceberg lettuce, creamy mayo, ripe tomatoes, ketchup', 130, 'S2.png', 1, 1),
(20, 'Big King XL', 'Big King XL Sandwich features more than 1/2 lb of flame-grilled 100% beef, topped with American cheese', 74, 'BigKingXL9.png', 1, 0),
(21, 'Cheddar BACON ', 'Our Cheddar BACON KING™ Sandwich features more than two ¼ lb.* savory flame-grilled patties', 48, 'CheddarBACONKING™10.png', 1, 0),
(22, 'IMPOSSIBLE™ WHOPPER®', 'a savory flame-grilled patty made from plants topped with juicy tomatoes, fresh lettuce, creamy mayonnaise, ketchup, crunchy pickles', 84, 'IMPOSSIBLE™WHOPPER®11.png', 1, 0),
(23, 'Triple STACKER KING™', ' Sandwich features more than ¾ lb.* of savory flame-grilled 100% beef, topped with smoky bacon', 103, 'TripleSTACKERKING™12.png', 1, 0),
(24, 'Double STACKER KING™', ' ½ lb.* of savory flame-grilled 100% beef, topped with smoky bacon, melted American cheese', 77, 'DoubleSTACKERKING™13.png', 1, 0),
(25, 'Double Quarter Pound KING™', ' ½ lb.* of flame-grilled 100% beef, topped with all of our classic favorites: American cheese', 106, 'DoubleQuarterPoundKING™15.png', 1, 0),
(26, 'BBQ Bacon WHOPPER®', 'fire-grilled beef, topped with thick-cut smoked bacon, melted American cheese', 55, 'BBQBaconWHOPPER®14.png', 1, 0),
(29, 'BACON SMASH', 'Applewood smoked bacon, American cheese, lettuce, tomato & mayo on a classic bun.', 115, 'BACONSMASHSpecial6.png', 1, 1),
(31, 'GREEK LAMB', '1/3 Lb. Patty, Tzaziki, Mixed Greens, Shaved Onions, Roma Tomato', 160, 'GREEKLAMBSpecial6.png', 1, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `type_links`
--

CREATE TABLE `type_links` (
  `UserTypeId` int(11) NOT NULL,
  `Link_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(55) NOT NULL,
  `User_Name` varchar(55) NOT NULL,
  `Password` char(40) NOT NULL,
  `Phone` varchar(11) DEFAULT NULL,
  `Address` text NOT NULL,
  `Email` text NOT NULL,
  `User_Type_Id` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`Id`, `Name`, `User_Name`, `Password`, `Phone`, `Address`, `Email`, `User_Type_Id`) VALUES
(19, 'Hossam', 'admin@mail.com', 'E+g1TQ==', '1156826636', 'Nasr City , Cairo, Egypt', 'a01122882174@gmail.com', 1),
(20, 'Safa', 'safa@mail.com', 'E+g1TQ==', '1128803117', 'Ramsis ,Cairo', 'safasad00@gmail.com\r\n', 1),
(29, 'Kaboo', 'Kaboo@mail.com', 'Eus3S0wwbg==', '1156826636', 'Cairo', 'kaboo@mail.com', 2),
(30, 'Ebraam', 'ebraam@mail.com', 'E+g1TQ==', '1218545154', 'Cairo', 'ebraamatalla277@gmail.com', 2),
(36, 'ebrraaam', 'hossam@example.com', 'Eus3S0wwbg==', '1156826636', '29 ش السلام القاهرة', 'a01122882174@gmail.com', 2),
(37, 'Hossam Kaboo', 'hossam@Test2.com', 'Eus3S0wwbg==', '1156826636', 'Ain shams , Cairo', 'a01122882174@gmail.com', 2);

-- --------------------------------------------------------

--
-- بنية الجدول `user_type`
--

CREATE TABLE `user_type` (
  `ID` int(11) NOT NULL,
  `Type_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `user_type`
--

INSERT INTO `user_type` (`ID`, `Type_Name`) VALUES
(1, 'ADMIN'),
(2, 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_Id`),
  ADD KEY `Cust_Id` (`Cust_Id`);

--
-- Indexes for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`Order_Id`,`Pro_Id`),
  ADD KEY `Pro_Id` (`Pro_Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Pro_Id`);

--
-- Indexes for table `type_links`
--
ALTER TABLE `type_links`
  ADD PRIMARY KEY (`UserTypeId`),
  ADD KEY `Link_Id` (`Link_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `User_Name` (`User_Name`),
  ADD KEY `Foreign key` (`User_Type_Id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Type_Name` (`Type_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Pro_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`Cust_Id`) REFERENCES `users` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- القيود للجدول `orders_details`
--
ALTER TABLE `orders_details`
  ADD CONSTRAINT `Foreign key_OrderID` FOREIGN KEY (`Order_Id`) REFERENCES `orders` (`Order_Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Foreign key_Pro_Id` FOREIGN KEY (`Pro_Id`) REFERENCES `products` (`Pro_Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- القيود للجدول `type_links`
--
ALTER TABLE `type_links`
  ADD CONSTRAINT `type_links_ibfk_1` FOREIGN KEY (`UserTypeId`) REFERENCES `user_type` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `type_links_ibfk_2` FOREIGN KEY (`Link_Id`) REFERENCES `links` (`ID`) ON UPDATE CASCADE;

--
-- القيود للجدول `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Foreign key` FOREIGN KEY (`User_Type_Id`) REFERENCES `user_type` (`ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
