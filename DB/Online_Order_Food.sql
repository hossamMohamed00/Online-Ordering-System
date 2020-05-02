-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 04:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
-- Creation: May 02, 2020 at 02:08 PM
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
-- Creation: May 02, 2020 at 02:37 PM
-- Last update: May 02, 2020 at 02:39 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_Id`, `Order_Desc`, `Order_Date`, `Order_Statue`, `Total_Cost`, `Cust_Id`) VALUES(1, '2 Of Mushroom Burger , ', '2020-05-02 16:34:17', 'Delivered', 118, 19);
INSERT INTO `orders` (`Order_Id`, `Order_Desc`, `Order_Date`, `Order_Statue`, `Total_Cost`, `Cust_Id`) VALUES(2, '1 Of The Burger King  , ', '2020-05-02 16:38:36', 'Delivered', 160, 29);

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--
-- Creation: May 02, 2020 at 02:20 PM
-- Last update: May 02, 2020 at 02:38 PM
--

CREATE TABLE IF NOT EXISTS `orders_details` (
  `Order_Id` int(11) NOT NULL,
  `Pro_Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`Order_Id`,`Pro_Id`),
  KEY `Pro_Id` (`Pro_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_details`
--

INSERT INTO `orders_details` (`Order_Id`, `Pro_Id`, `Quantity`) VALUES(1, 2, 2);
INSERT INTO `orders_details` (`Order_Id`, `Pro_Id`, `Quantity`) VALUES(2, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--
-- Creation: May 02, 2020 at 02:08 PM
-- Last update: May 02, 2020 at 02:08 PM
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

INSERT INTO `products` (`Pro_Id`, `Pro_Name`, `Pro_Desc`, `Pro_Price`, `Pro_Img`, `Pro_Statue`, `Special`) VALUES(1, 'Classic Burger', 'Beef burger patty, lettuce, tomatoes, onions, cheddar cheese and special sauce', 45, '1.png', 1, 0);
INSERT INTO `products` (`Pro_Id`, `Pro_Name`, `Pro_Desc`, `Pro_Price`, `Pro_Img`, `Pro_Statue`, `Special`) VALUES(2, 'Mushroom Burger', 'Beef burger patty, mushroom, lettuce, tomatoes, caramelized onions, cheddar cheese and special sauce', 59, '2.png', 1, 0);
INSERT INTO `products` (`Pro_Id`, `Pro_Name`, `Pro_Desc`, `Pro_Price`, `Pro_Img`, `Pro_Statue`, `Special`) VALUES(3, 'Bacon Burger', 'Beef burger patty, beef bacon, lettuce, tomatoes, caramelized onions, cheddar cheese and special sauce', 67, '3.png', 1, 0);
INSERT INTO `products` (`Pro_Id`, `Pro_Name`, `Pro_Desc`, `Pro_Price`, `Pro_Img`, `Pro_Statue`, `Special`) VALUES(4, 'Chili Cheese Burger', 'Beef burger patty, minced meat, lettuce, American cheese, spicy chili sauce and special sauce', 79, '4.png', 1, 0);
INSERT INTO `products` (`Pro_Id`, `Pro_Name`, `Pro_Desc`, `Pro_Price`, `Pro_Img`, `Pro_Statue`, `Special`) VALUES(6, 'Lettuce Wrap Burger', 'Beef burger patty and light American cheese, wrapped in lettuce', 69, '6.png', 1, 0);
INSERT INTO `products` (`Pro_Id`, `Pro_Name`, `Pro_Desc`, `Pro_Price`, `Pro_Img`, `Pro_Statue`, `Special`) VALUES(7, 'Cheese Bomb Burger', 'Stuffed beef burger patty with American cheese, lettuce, onions, tomatoes, pickles and special sauce', 103, '7.png', 1, 0);
INSERT INTO `products` (`Pro_Id`, `Pro_Name`, `Pro_Desc`, `Pro_Price`, `Pro_Img`, `Pro_Statue`, `Special`) VALUES(8, 'Double Double Beef Burger', '2 Beef burger patties, lettuce, tomatoes, onions, pickled cucumber, double cheddar cheese and special sauce', 133, '8.png', 1, 0);
INSERT INTO `products` (`Pro_Id`, `Pro_Name`, `Pro_Desc`, `Pro_Price`, `Pro_Img`, `Pro_Statue`, `Special`) VALUES(9, 'The Burger President', 'Beef burger patty, lettuce, tomatoes, cheddar cheese, Buffalo sauce and special sauce', 159, 'S1.png', 1, 1);
INSERT INTO `products` (`Pro_Id`, `Pro_Name`, `Pro_Desc`, `Pro_Price`, `Pro_Img`, `Pro_Statue`, `Special`) VALUES(10, 'The Burger King ', 'Fire-grilled beef, topped with thick-cut smoked bacon, melted American cheese, freshly cut iceberg lettuce, creamy mayo, ripe tomatoes, ketchup', 160, 'S2.png', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `type_links`
--
-- Creation: May 02, 2020 at 02:08 PM
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
-- Creation: May 02, 2020 at 02:08 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `User_Name`, `Password`, `Phone`, `Address`, `User_Type_Id`) VALUES(19, 'Hossam', 'hossam@mail.com', '1234', '1156826636', 'Nasr City , Cairo, Egypt', 1);
INSERT INTO `users` (`Id`, `Name`, `User_Name`, `Password`, `Phone`, `Address`, `User_Type_Id`) VALUES(20, 'Safa', 'safa@mail.com', '1234', '1128803117', 'Ramsis ,Cairo', 1);
INSERT INTO `users` (`Id`, `Name`, `User_Name`, `Password`, `Phone`, `Address`, `User_Type_Id`) VALUES(29, 'Kaboo', 'Kaboo@mail.com', '1234', '1156826636', 'Cairo', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--
-- Creation: May 02, 2020 at 02:08 PM
-- Last update: May 02, 2020 at 02:08 PM
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

INSERT INTO `user_type` (`ID`, `Type_Name`) VALUES(1, 'ADMIN');
INSERT INTO `user_type` (`ID`, `Type_Name`) VALUES(2, 'USER');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`Cust_Id`) REFERENCES `users` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD CONSTRAINT `Foreign key_OrderID` FOREIGN KEY (`Order_Id`) REFERENCES `orders` (`Order_Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Foreign key_Pro_Id` FOREIGN KEY (`Pro_Id`) REFERENCES `products` (`Pro_Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
