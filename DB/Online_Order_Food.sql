-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 03:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_order_food`
--
CREATE DATABASE IF NOT EXISTS `online_order_food` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `online_order_food`;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--
-- Creation: May 01, 2020 at 08:33 PM
--

CREATE TABLE IF NOT EXISTS `links` (
  `ID` int(11) NOT NULL,
  `Link_Name` varchar(30) NOT NULL,
  `Url` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--
-- Creation: May 02, 2020 at 01:08 PM
-- Last update: May 02, 2020 at 01:37 PM
--

CREATE TABLE IF NOT EXISTS `orders` (
  `Order_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Order_Desc` text NOT NULL,
  `Order_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Order_Statue` enum('Delivered','Waiting','Canceled') NOT NULL DEFAULT 'Waiting',
  `Total_Cost` float NOT NULL,
  `Cust_Id` int(11) NOT NULL,
  PRIMARY KEY (`Order_Id`),
  KEY `Cust_Id` (`Cust_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

UPDATE `orders` SET `Order_Id` = 1,`Order_Desc` = '3 Of The Burger King  , 1 Of The Burger President , ',`Order_Date` = '2020-05-02 07:51:41',`Order_Statue` = 'Delivered',`Total_Cost` = 639,`Cust_Id` = 29 WHERE `orders`.`Order_Id` = 1;
UPDATE `orders` SET `Order_Id` = 2,`Order_Desc` = '5 Of Mushroom Burger , ',`Order_Date` = '2020-05-02 07:55:31',`Order_Statue` = 'Delivered',`Total_Cost` = 295,`Cust_Id` = 29 WHERE `orders`.`Order_Id` = 2;
UPDATE `orders` SET `Order_Id` = 3,`Order_Desc` = '1 Of The Burger King  , ',`Order_Date` = '2020-05-02 07:57:14',`Order_Statue` = 'Canceled',`Total_Cost` = 160,`Cust_Id` = 19 WHERE `orders`.`Order_Id` = 3;
UPDATE `orders` SET `Order_Id` = 4,`Order_Desc` = '2 Of Chili Cheese Burger , 3 Of Lettuce Wrap Burger , ',`Order_Date` = '2020-05-02 08:12:33',`Order_Statue` = 'Canceled',`Total_Cost` = 365,`Cust_Id` = 29 WHERE `orders`.`Order_Id` = 4;
UPDATE `orders` SET `Order_Id` = 5,`Order_Desc` = '1 Of Bacon Burger , ',`Order_Date` = '2020-05-02 08:18:23',`Order_Statue` = 'Delivered',`Total_Cost` = 67,`Cust_Id` = 19 WHERE `orders`.`Order_Id` = 5;

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--
-- Creation: May 02, 2020 at 05:49 AM
--

CREATE TABLE IF NOT EXISTS `orders_details` (
  `Order_Id` int(11) NOT NULL,
  `Pro_Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Order_Id`,`Pro_Id`),
  KEY `Foreign key_ProID` (`Pro_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_details`
--

UPDATE `orders_details` SET `Order_Id` = 1,`Pro_Id` = 9,`Quantity` = 1 WHERE `orders_details`.`Order_Id` = 1 AND `orders_details`.`Pro_Id` = 9;
UPDATE `orders_details` SET `Order_Id` = 1,`Pro_Id` = 10,`Quantity` = 3 WHERE `orders_details`.`Order_Id` = 1 AND `orders_details`.`Pro_Id` = 10;
UPDATE `orders_details` SET `Order_Id` = 2,`Pro_Id` = 2,`Quantity` = 5 WHERE `orders_details`.`Order_Id` = 2 AND `orders_details`.`Pro_Id` = 2;
UPDATE `orders_details` SET `Order_Id` = 3,`Pro_Id` = 10,`Quantity` = 1 WHERE `orders_details`.`Order_Id` = 3 AND `orders_details`.`Pro_Id` = 10;
UPDATE `orders_details` SET `Order_Id` = 4,`Pro_Id` = 4,`Quantity` = 2 WHERE `orders_details`.`Order_Id` = 4 AND `orders_details`.`Pro_Id` = 4;
UPDATE `orders_details` SET `Order_Id` = 4,`Pro_Id` = 6,`Quantity` = 3 WHERE `orders_details`.`Order_Id` = 4 AND `orders_details`.`Pro_Id` = 6;
UPDATE `orders_details` SET `Order_Id` = 5,`Pro_Id` = 3,`Quantity` = 1 WHERE `orders_details`.`Order_Id` = 5 AND `orders_details`.`Pro_Id` = 3;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--
-- Creation: May 02, 2020 at 05:00 AM
-- Last update: May 02, 2020 at 01:39 PM
--

CREATE TABLE IF NOT EXISTS `products` (
  `Pro_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Pro_Name` varchar(250) NOT NULL,
  `Pro_Desc` text NOT NULL,
  `Pro_Price` float NOT NULL,
  `Pro_Img` varchar(30) NOT NULL,
  `Pro_Statue` int(11) NOT NULL DEFAULT 0,
  `Special` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Pro_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

UPDATE `products` SET `Pro_Id` = 1,`Pro_Name` = 'Classic Burger',`Pro_Desc` = 'Beef burger patty, lettuce, tomatoes, onions, cheddar cheese and special sauce',`Pro_Price` = 45,`Pro_Img` = '1.png',`Pro_Statue` = 1,`Special` = 0 WHERE `products`.`Pro_Id` = 1;
UPDATE `products` SET `Pro_Id` = 2,`Pro_Name` = 'Mushroom Burger',`Pro_Desc` = 'Beef burger patty, mushroom, lettuce, tomatoes, caramelized onions, cheddar cheese and special sauce',`Pro_Price` = 59,`Pro_Img` = '2.png',`Pro_Statue` = 1,`Special` = 0 WHERE `products`.`Pro_Id` = 2;
UPDATE `products` SET `Pro_Id` = 3,`Pro_Name` = 'Bacon Burger',`Pro_Desc` = 'Beef burger patty, beef bacon, lettuce, tomatoes, caramelized onions, cheddar cheese and special sauce',`Pro_Price` = 67,`Pro_Img` = '3.png',`Pro_Statue` = 1,`Special` = 0 WHERE `products`.`Pro_Id` = 3;
UPDATE `products` SET `Pro_Id` = 4,`Pro_Name` = 'Chili Cheese Burger',`Pro_Desc` = 'Beef burger patty, minced meat, lettuce, American cheese, spicy chili sauce and special sauce',`Pro_Price` = 79,`Pro_Img` = '4.png',`Pro_Statue` = 1,`Special` = 0 WHERE `products`.`Pro_Id` = 4;
UPDATE `products` SET `Pro_Id` = 6,`Pro_Name` = 'Lettuce Wrap Burger',`Pro_Desc` = 'Beef burger patty and light American cheese, wrapped in lettuce',`Pro_Price` = 69,`Pro_Img` = '6.png',`Pro_Statue` = 1,`Special` = 0 WHERE `products`.`Pro_Id` = 6;
UPDATE `products` SET `Pro_Id` = 7,`Pro_Name` = 'Cheese Bomb Burger',`Pro_Desc` = 'Stuffed beef burger patty with American cheese, lettuce, onions, tomatoes, pickles and special sauce',`Pro_Price` = 103,`Pro_Img` = '7.png',`Pro_Statue` = 1,`Special` = 0 WHERE `products`.`Pro_Id` = 7;
UPDATE `products` SET `Pro_Id` = 8,`Pro_Name` = 'Double Double Beef Burger',`Pro_Desc` = '2 Beef burger patties, lettuce, tomatoes, onions, pickled cucumber, double cheddar cheese and special sauce',`Pro_Price` = 133,`Pro_Img` = '8.png',`Pro_Statue` = 1,`Special` = 0 WHERE `products`.`Pro_Id` = 8;
UPDATE `products` SET `Pro_Id` = 9,`Pro_Name` = 'The Burger President',`Pro_Desc` = 'Beef burger patty, lettuce, tomatoes, cheddar cheese, Buffalo sauce and special sauce',`Pro_Price` = 159,`Pro_Img` = 'S1.png',`Pro_Statue` = 1,`Special` = 1 WHERE `products`.`Pro_Id` = 9;
UPDATE `products` SET `Pro_Id` = 10,`Pro_Name` = 'The Burger King ',`Pro_Desc` = 'Fire-grilled beef, topped with thick-cut smoked bacon, melted American cheese, freshly cut iceberg lettuce, creamy mayo, ripe tomatoes, ketchup',`Pro_Price` = 160,`Pro_Img` = 'S2.png',`Pro_Statue` = 1,`Special` = 1 WHERE `products`.`Pro_Id` = 10;

-- --------------------------------------------------------

--
-- Table structure for table `type_links`
--
-- Creation: May 01, 2020 at 08:33 PM
--

CREATE TABLE IF NOT EXISTS `type_links` (
  `UserTypeId` int(11) NOT NULL,
  `Link_Id` int(11) NOT NULL,
  PRIMARY KEY (`UserTypeId`),
  KEY `Link_Id` (`Link_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: May 01, 2020 at 08:33 PM
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(55) NOT NULL,
  `User_Name` varchar(55) NOT NULL,
  `Password` char(40) NOT NULL,
  `Phone` varchar(11) DEFAULT NULL,
  `Address` text NOT NULL,
  `User_Type_Id` int(11) NOT NULL DEFAULT 2,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `User_Name` (`User_Name`),
  KEY `Foreign key` (`User_Type_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

UPDATE `users` SET `Id` = 19,`Name` = 'Hossam',`User_Name` = 'hossam@mail.com',`Password` = '1234',`Phone` = '01156826636',`Address` = 'Nasr City , Cairo, Egypt',`User_Type_Id` = 1 WHERE `users`.`Id` = 19;
UPDATE `users` SET `Id` = 20,`Name` = 'Safa',`User_Name` = 'safa@mail.com',`Password` = '1234',`Phone` = '01128803117',`Address` = 'Ramsis ,Cairo',`User_Type_Id` = 1 WHERE `users`.`Id` = 20;
UPDATE `users` SET `Id` = 29,`Name` = 'kaboo',`User_Name` = 'Kaboo@mail.com',`Password` = '1234',`Phone` = '1156826636',`Address` = 'Cairo',`User_Type_Id` = 2 WHERE `users`.`Id` = 29;
UPDATE `users` SET `Id` = 30,`Name` = 'Ebraam',`User_Name` = 'ebraam@mail.com',`Password` = '1234',`Phone` = '01218545154',`Address` = 'Ain Shams ,  Cairo',`User_Type_Id` = 2 WHERE `users`.`Id` = 30;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--
-- Creation: May 01, 2020 at 08:33 PM
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `ID` int(11) NOT NULL,
  `Type_Name` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Type_Name` (`Type_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

UPDATE `user_type` SET `ID` = 1,`Type_Name` = 'ADMIN' WHERE `user_type`.`ID` = 1;
UPDATE `user_type` SET `ID` = 2,`Type_Name` = 'USER' WHERE `user_type`.`ID` = 2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `Foreign key_Cust_Id` FOREIGN KEY (`Cust_Id`) REFERENCES `users` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD CONSTRAINT `Foreign key_OrderID` FOREIGN KEY (`Order_Id`) REFERENCES `orders` (`Order_Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Foreign key_ProID` FOREIGN KEY (`Pro_Id`) REFERENCES `products` (`Pro_Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `type_links`
--
ALTER TABLE `type_links`
  ADD CONSTRAINT `type_links_ibfk_1` FOREIGN KEY (`UserTypeId`) REFERENCES `user_type` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `type_links_ibfk_2` FOREIGN KEY (`Link_Id`) REFERENCES `links` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Foreign key` FOREIGN KEY (`User_Type_Id`) REFERENCES `user_type` (`ID`) ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
