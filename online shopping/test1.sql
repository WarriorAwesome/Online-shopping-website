-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 12:54 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart1`
--

CREATE TABLE IF NOT EXISTS `cart1` (
  `Cart_id` int(5) NOT NULL AUTO_INCREMENT,
  `Order_id` int(10) NOT NULL,
  `Product_id` int(5) DEFAULT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `Imagepath` varchar(500) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `Total_price` bigint(50) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `temp` varchar(40) NOT NULL,
  PRIMARY KEY (`Cart_id`),
  KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `cart1`
--

INSERT INTO `cart1` (`Cart_id`, `Order_id`, `Product_id`, `productname`, `brand`, `description`, `Imagepath`, `price`, `quantity`, `Total_price`, `email`, `temp`) VALUES
(6, 1002, 4, 'Formal shirts', 'Peter England', 'peter-england-royal-blue-formal-shirt', '/project/Collection/Men/Formal shirts/peter-england-royal-blue-formal-shirt.jpg', 1449, 1, 1449, 'machhigaurav@gmail.com', ''),
(7, 1003, 95, 'Slogan T-shirts', 'Peter England', 'rootstock-yellow-round-neck-t-shirt', '/project/Collection/Men/slogan/rootstock-yellow-round-neck-t-shirt.jpg', 499, 1, 499, 'machhigaurav@gmail.com', ''),
(8, 1004, 99, 'Slogan T-shirts', 'Lotto', 'beer-studio-white-round-neck-t-shirt', '/project/Collection/Men/slogan/beer-studio-white-round-neck-t-shirt.jpg', 499, 1, 499, 'machhigaurav@gmail.com', ''),
(9, 1005, 84, 'V-neck T-shirts', 'LondonBridge', 'slingshot-red-v-neck-t-shirt', '/project/Collection/Men/Vneck/slingshot-red-v-neck-t-shirt.jpg', 599, 1, 599, 'temporily@gmail.com', ''),
(10, 1006, 30, 'Formal shirts', 'LondonBridge', 'londonbridge-light-green-formal-shirt', '/project/Collection/Men/Formal shirts/londonbridge-light-green-formal-shirt.jpg', 799, 1, 799, 'machhigaurav@gmail.com', ''),
(11, 1007, 3, 'Formal shirts', 'Peter England', 'peter england shirts', '/Online/Collection/Men/FormalShirts/PeterEngland/1.jpg', 1799, 1, 1799, 'esh@gmail.com', ''),
(12, 1007, 26, 'Formal shirts', 'LondonBridge', 'londonbridge-sky-blue-formal-linen-shirt', '/project/Collection/Men/Formal shirts/londonbridge-sky-blue-formal-linen-shirt.jpg', 1199, 1, 1199, 'esh@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `subject`, `message`) VALUES
('ertyu', 'weertyu@gmail.com', 'asdv', ' asdfghmjm,'),
('qsefg', 'dsdsfgh@gmail.com', 'asdfg', ' sdfghjk');

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE IF NOT EXISTS `men` (
  `Product_id` int(5) NOT NULL AUTO_INCREMENT,
  `Category` varchar(6) DEFAULT 'Men',
  `ProductType` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Brand` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Price` int(10) NOT NULL,
  `Imagepath` varchar(500) NOT NULL,
  `Description` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `stock` int(5) DEFAULT NULL,
  PRIMARY KEY (`Product_id`),
  KEY `Pid` (`ProductType`,`Brand`,`Price`,`Imagepath`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`Product_id`, `Category`, `ProductType`, `Brand`, `Price`, `Imagepath`, `Description`, `stock`) VALUES
(3, 'Men', 'Formal shirts', 'Peter England', 1799, '/project/Collection/Men/Formal shirts/peter-england-white-formal-shirt(2).jpg', 'peter-england-white-formal-shirt', 0),
(4, 'Men', 'Formal shirts', 'Peter England', 1449, '/project/Collection/Men/Formal shirts/peter-england-royal-blue-formal-shirt.jpg', 'peter-england-royal-blue-formal-shirt', 0),
(6, 'Men', 'Formal shirts', 'Peter England', 1099, '/project/Collection/Men/Formal shirts/peter-england-sky-blue-formal-shirt(1).jpg', 'peter-england-sky-blue-formal-shirt', 0),
(7, 'Men', 'Formal shirts', 'Peter England', 899, '/project/Collection/Men/Formal shirts/peter-england-puprle-formal-shirt.jpg', 'peter-england-puprle-formal-shirt', 0),
(9, 'Men', 'Formal shirts', 'Peter England', 1999, '/project/Collection/Men/Formal shirts/peter-england-cream-formal-shirt.jpg', 'peter-england-cream-formal-shirt', 0),
(10, 'Men', 'Formal shirts', 'Peter England', 999, '/project/Collection/Men/Formal shirts/peter-england-light-pink-formal-shirt.jpg', 'peter-england-light-pink-formal-shirt', 0),
(11, 'Men', 'Formal shirts', 'Peter England', 1199, '/project/Collection/Men/Formal shirts/peter-england-light-grey-formal-shirt.jpg', 'peter-england-light-grey-formal-shirt', 0),
(12, 'Men', 'Formal shirts', 'Peter England', 1199, '/project/Collection/Men/Formal shirts/peter-england-dark-blue-formal-shirt.jpg', 'peter-england-dark-blue-formal-shirt', 0),
(13, 'Men', 'Formal shirts', 'Turtle', 1995, '/project/Collection/Men/Formal shirts/turtle-beige-formal-linen-slim-fit-shirt.jpg', 'turtle-beige-formal-linen-slim-fit-shirt', 0),
(14, 'Men', 'Formal shirts', 'Turtle', 1995, '/project/Collection/Men/Formal shirts/turtle-black-formal-shirt.jpg', 'turtle-beige-formal-linen-slim-fit-shirt', 0),
(16, 'Men', 'Formal shirts', 'Turtle', 1695, '/project/Collection/Men/Formal shirts/turtle-blue-formal-linen-shirt.jpg', 'turtle-blue-formal-linen-shirt', 0),
(17, 'Men', 'Formal shirts', 'Turtle', 1395, '/project/Collection/Men/Formal shirts/turtle-blue-formal-shirt(2).jpg', 'turtle-blue-formal-shirt', 0),
(18, 'Men', 'Formal shirts', 'Turtle', 1695, '/project/Collection/Men/Formal shirts/turtle-coral-red-formal-linen-shirt.jpg', 'turtle-coral-red-formal-linen-shirt', 0),
(19, 'Men', 'Formal shirts', 'Turtle', 1395, '/project/Collection/Men/Formal shirts/turtle-light-purple-formal-shirt.jpg', 'turtle-light-purple-formal-shirt', 0),
(20, 'Men', 'Formal shirts', 'Turtle', 1995, '/project/Collection/Men/Formal shirts/turtle-light-rose-formal-shirt.jpg', 'turtle-beige-formal-linen-slim-fit-shirt', 0),
(21, 'Men', 'Formal shirts', 'Turtle', 1395, '/project/Collection/Men/Formal shirts/turtle-maroon-formal-shirt.jpg', 'turtle-maroon-formal-shirt', 0),
(22, 'Men', 'Formal shirts', 'Turtle', 1195, '/project/Collection/Men/Formal shirts/turtle-purple-formal-slim-fit-shirt.jpg', 'turtle-purple-formal-slim-fit-shirt', 0),
(23, 'Men', 'Formal shirts', 'LondonBridge', 1199, '/project/Collection/Men/Formal shirts/londonbridge-light-green-formal-linen-shirt.jpg', 'londonbridge-light-green-formal-linen-shirt', 0),
(24, 'Men', 'Formal shirts', 'LondonBridge', 1099, '/project/Collection/Men/Formal shirts/londonbridge-white-formal-linen-shirt.jpg', 'londonbridge-white-formal-linen-shirt', 0),
(25, 'Men', 'Formal shirts', 'LondonBridge', 1199, '/project/Collection/Men/Formal shirts/londonbridge-yellow-formal-linen-shirt.jpg', 'londonbridge-yellow-formal-linen-shirt', 0),
(26, 'Men', 'Formal shirts', 'LondonBridge', 1199, '/project/Collection/Men/Formal shirts/londonbridge-sky-blue-formal-linen-shirt.jpg', 'londonbridge-sky-blue-formal-linen-shirt', 0),
(27, 'Men', 'Formal shirts', 'LondonBridge', 899, '/project/Collection/Men/Formal shirts/londonbridge-dark-grey-formal-shirt.jpg', 'londonbridge-dark-grey-formal-shirt', 0),
(28, 'Men', 'Formal shirts', 'LondonBridge', 1199, '/project/Collection/Men/Formal shirts/londonbridge-peach-formal-linen-shirt.jpg', 'londonbridge-peach-formal-linen-shirt', 0),
(29, 'Men', 'Formal shirts', 'LondonBridge', 999, '/project/Collection/Men/Formal shirts/londonbridge-peach-formal-linen-shirt.jpg', 'londonbridge-peach-formal-linen-shirt', 0),
(30, 'Men', 'Formal shirts', 'LondonBridge', 799, '/project/Collection/Men/Formal shirts/londonbridge-light-green-formal-shirt.jpg', 'londonbridge-light-green-formal-shirt', 0),
(31, 'Men', 'Formal shirts', 'LondonBridge', 1099, '/project/Collection/Men/Formal shirts/londonbridge-navy-solid-formal-linen-shirt.jpg', 'londonbridge-navy-solid-formal-linen-shirt', 0),
(32, 'Men', 'Formal shirts', 'LondonBridge', 999, '/project/Collection/Men/Formal shirts/londonbridge-maroon-formal-shirt.jpg', 'londonbridge-maroon-formal-shirt', 0),
(43, 'Men', 'Full sleeve Tees', 'Spykar', 699, '/project/Collection/Men/Full sleev/no-logo-black-full-sleeves-henley-t-shirt.jpg', 'no-logo-black-full-sleeves-henley-t-shirt', 0),
(44, 'Men', 'Full sleeve Tees', 'Spykar', 649, '/project/Collection/Men/Full sleev/no-logo-black-green-raglan-sleeves-t-shirt(1).jpg', 'no-logo-black-green-raglan-sleeves-t-shirt', 0),
(45, 'Men', 'Full sleeve Tees', 'Spykar', 699, '/project/Collection/Men/Full sleev/no-logo-blue-full-sleeves-henley-t-shirt.jpg', 'no-logo-blue-full-sleeves-henley-t-shirt', 0),
(46, 'Men', 'Full sleeve Tees', 'Spykar', 699, '/project/Collection/Men/Full sleev/no-logo-bottle-green-full-sleeves-henley-t-shirt.jpg', 'no-logo-bottle-green-full-sleeves-henley-t-shirt', 0),
(47, 'Men', 'Full sleeve Tees', 'Spykar', 649, '/project/Collection/Men/Full sleev/no-logo-coral-navy-round-neck-full-sleeve-t-shirt.jpg', 'no-logo-coral-navy-round-neck-full-sleeve-t-shirt', 0),
(48, 'Men', 'Full sleeve Tees', 'Spykar', 649, '/project/Collection/Men/Full sleev/no-logo-dark-grey-blue-raglan-sleeves-t-shirt.jpg', 'no-logo-dark-grey-blue-raglan-sleeves-t-shirt', 0),
(49, 'Men', 'Full sleeve Tees', 'Spykar', 649, '/project/Collection/Men/Full sleev/no-logo-grey-blue-raglan-sleeves-t-shirt.jpg', 'no-logo-grey-blue-raglan-sleeves-t-shirt', 0),
(50, 'Men', 'Full sleeve Tees', 'Spykar', 599, '/project/Collection/Men/Full sleev/nologo-grey-full-sleeve-tee.jpg', 'nologo-grey-full-sleeve-tee', 0),
(51, 'Men', 'Full sleeve Tees', 'Spykar', 699, '/project/Collection/Men/Full sleev/no-logo-indigo-blue-full-sleeves-henley-t-shirt.jpg', 'no-logo-indigo-blue-full-sleeves-henley-t-shirt', 0),
(52, 'Men', 'Full sleeve Tees', 'Spykar', 699, '/project/Collection/Men/Full sleev/no-logo-maroon-full-sleeves-henley-t-shirt.jpg', 'no-logo-maroon-full-sleeves-henley-t-shirt', 0),
(53, 'Men', 'Full sleeve Tees', 'Turtle', 899, '/project/Collection/Men/Full sleev/captain-america-navy-melange-round-neck-full-sleeves-hoodie.jpg', 'captain-america-navy-melange-round-neck-full-sleeves-hoodie', 0),
(54, 'Men', 'Full sleeve Tees', 'Turtle', 599, '/project/Collection/Men/Full sleev/problem-kadki-full-sleeves-t-shirt.jpg', 'problem-kadki-full-sleeves-t-shirt', 0),
(55, 'Men', 'Full sleeve Tees', 'Tom Hatton', 599, '/project/Collection/Men/Full sleev/rigo-black-grey-round-neck-t-shirt.jpg', 'rigo-black-grey-round-neck-t-shirt', 0),
(56, 'Men', 'Full sleeve Tees', 'Tom Hatton', 699, '/project/Collection/Men/Full sleev/rigo-white-voyage-ship-tee-full-sleeve.jpg', 'rigo-white-voyage-ship-tee-full-sleeve', 0),
(57, 'Men', 'Full sleeve Tees', 'Peter England', 699, '/project/Collection/Men/Full sleev/rigo-stylish-black-tee-with-grey-cuffs.jpg', 'rigo-stylish-black-tee-with-grey-cuffs', 0),
(58, 'Men', 'Full sleeve Tees', 'Peter England', 699, '/project/Collection/Men/Full sleev/rigo-stylish-black-tee-with-red-cuffs.jpg', 'rigo-stylish-black-tee-with-red-cuffs', 0),
(59, 'Men', 'Full sleeve Tees', 'LondonBridge', 599, '/project/Collection/Men/Full sleev/rootstock-grey-t-shirt.jpg', 'rootstock-grey-t-shirt', 0),
(60, 'Men', 'Full sleeve Tees', 'LondonBridge', 699, '/project/Collection/Men/Full sleev/rigo-navy-round-neck-t-shirt.jpg', 'rigo-navy-round-neck-t-shirt', 0),
(61, 'Men', 'Full sleeve Tees', 'Lotto', 699, '/project/Collection/Men/Full sleev/rigo-maroon-round-neck-t-shirt.jpg', 'rigo-maroon-round-neck-t-shirt', 0),
(62, 'Men', 'Full sleeve Tees', 'Lotto', 699, '/project/Collection/Men/Full sleev/rigo-stylish-white-tee-with-black-cuffs.jpg', 'rigo-stylish-white-tee-with-black-cuffs', 0),
(63, 'Men', 'Round neck T-shirts', 'Spykar', 1399, '/project/Collection/Men/Rneck/nologo-cotton-green-round-neck-t-shirt(1).jpg', 'nologo-cotton-green-round-neck-t-shirt', 0),
(64, 'Men', 'Round neck T-shirts', 'Turtle', 699, '/project/Collection/Men/Rneck/pepe-jeans-grey-melange-round-neck-tshirt.jpg', 'pepe-jeans-grey-melange-round-neck-tshirt', 0),
(65, 'Men', 'Round neck T-shirts', 'Spykar', 699, '/project/Collection/Men/Rneck/pepe-jeans-royal-blue-round-neck-tshirt.jpg', 'pepe-jeans-royal-blue-round-neck-tshirt', 0),
(66, 'Men', 'Round neck T-shirts', 'Turtle', 899, '/project/Collection/Men/Rneck/peter-england-pink-round-neck-t-shirt.jpg', 'peter-england-pink-round-neck-t-shirt', 0),
(67, 'Men', 'Round neck T-shirts', 'Tom Hatton', 799, '/project/Collection/Men/Rneck/uni-style-images-blue-round-neck-t-shirt.jpg', 'uni-style-images-blue-round-neck-t-shirt', 0),
(68, 'Men', 'Round neck T-shirts', 'Tom Hatton', 699, '/project/Collection/Men/Rneck/uni-style-images-round-neck-t-shirt(14).jpg', 'uni-style-images-round-neck-t-shirt', 0),
(69, 'Men', 'Round neck T-shirts', 'Peter England', 1399, '/project/Collection/Men/Rneck/uni-style-image-green-t-shirt.jpg', 'uni-style-image-green-t-shirt', 0),
(70, 'Men', 'Round neck T-shirts', 'Peter England', 699, '/project/Collection/Men/Rneck/in-the-closet-eastern-blue-henley-t-shirt.jpg', 'in-the-closet-eastern-blue-henley-t-shirt', 0),
(71, 'Men', 'Round neck T-shirts', 'LondonBridge', 699, '/project/Collection/Men/Rneck/no-logo-blue-full-sleeves-henley-t-shirt.jpg', 'no-logo-blue-full-sleeves-henley-t-shirt', 0),
(72, 'Men', 'Round neck T-shirts', 'LondonBridge', 1399, '/project/Collection/Men/Rneck/levis-rust-solid-henley.jpg', 'levis-rust-solid-henley ', 0),
(73, 'Men', 'Round neck T-shirts', 'Lotto', 449, '/project/Collection/Men/Rneck/no-logo-navy-coral-henley-t-shirt.jpg', 'no-logo-navy-coral-henley-t-shirt', 0),
(74, 'Men', 'Round neck T-shirts', 'Lotto', 899, '/project/Collection/Men/Rneck/red-tape-grey-blue-henley.jpg', 'red-tape-grey-blue-henley', 0),
(75, 'Men', 'V-neck T-shirts', 'Spykar', 499, '/project/Collection/Men/Vneck/1st-attitude-royal-blue-v-neck-t-shirt.jpg', '1st-attitude-royal-blue-v-neck-t-shirt', 0),
(76, 'Men', 'V-neck T-shirts', 'Spykar', 999, '/project/Collection/Men/Vneck/pepe-jeans-white-v-neck-t-shirt.jpg', 'pepe-jeans-white-v-neck-t-shirt', 0),
(78, 'Men', 'V-neck T-shirts', 'Turtle', 599, '/project/Collection/Men/Vneck/rigo-black-v-neck-t-shirt_002.jpg', 'rigo-black-v-neck-t-shirt', 0),
(79, 'Men', 'V-neck T-shirts', 'Tom Hatton', 499, '/project/Collection/Men/Vneck/slingshot-royal-blue-v-neck-t-shirt.jpg', 'slingshot-royal-blue-v-neck-t-shirt', 0),
(80, 'Men', 'V-neck T-shirts', 'Tom Hatton', 449, '/project/Collection/Men/Vneck/beyond-blue-v-neck-t-shirt.jpg', 'beyond-blue-v-neck-t-shirt', 0),
(81, 'Men', 'V-neck T-shirts', 'Tom Hatton', 499, '/project/Collection/Men/Vneck/1st-attitude-charocoal-v-neck-t-shirt.jpg', '1st-attitude-charocoal-v-neck-t-shirt', 0),
(82, 'Men', 'V-neck T-shirts', 'Peter England', 999, '/project/Collection/Men/Vneck/spykar-white-v-neck-t-shirt.jpg', 'spykar-white-v-neck-t-shirt', 0),
(83, 'Men', 'V-neck T-shirts', 'Peter England', 599, '/project/Collection/Men/Vneck/slingshot-dark-grey-v-neck-t-shirt_002.jpg', 'slingshot-dark-grey-v-neck-t-shirt', 0),
(84, 'Men', 'V-neck T-shirts', 'LondonBridge', 599, '/project/Collection/Men/Vneck/slingshot-red-v-neck-t-shirt.jpg', 'slingshot-red-v-neck-t-shirt', 0),
(85, 'Men', 'V-neck T-shirts', 'LondonBridge', 600, '/project/Collection/Men/Vneck/slingshot-dark-grey-v-neck-t-shirt.jpg', 'slingshot-dark-grey-v-neck-t-shirt', 0),
(86, 'Men', 'V-neck T-shirts', 'Lotto', 999, '/project/Collection/Men/Vneck/spykar-grey-mellange-v-neck-t-shirt.jpg', 'spykar-grey-mellange-v-neck-t-shirt', 0),
(87, 'Men', 'V-neck T-shirts', 'Lotto', 1199, '/project/Collection/Men/Vneck/spyakr-aqua-v-neck-t-shirt.jpg', 'spyakr-aqua-v-neck-t-shirt', 0),
(88, 'Men', 'Slogan T-shirts', 'Spykar', 499, '/project/Collection/Men/slogan/fools-around-green-t-shirt.jpg', 'fools-around-green-t-shirt', 0),
(89, 'Men', 'Slogan T-shirts', 'Spykar', 499, '/project/Collection/Men/slogan/rootstock-black-round-neck-t-shirt(1).jpg', 'rootstock-black-round-neck-t-shirt', 0),
(90, 'Men', 'Slogan T-shirts', 'Turtle', 499, '/project/Collection/Men/slogan/azaad-hoon-azaad-rahunga-black-t-shirt.jpg', 'azaad-hoon-azaad-rahunga-black-t-shirt', 0),
(91, 'Men', 'Slogan T-shirts', 'Turtle', 499, '/project/Collection/Men/slogan/rootstock-navy-round-neck-t-shirt.jpg', 'rootstock-navy-round-neck-t-shirt', 0),
(92, 'Men', 'Slogan T-shirts', 'Tom Hatton', 499, '/project/Collection/Men/slogan/wyo-navy-round-neck-t-shirt.jpg', 'wyo-navy-round-neck-t-shirt ', 0),
(93, 'Men', 'Slogan T-shirts', 'Tom Hatton', 499, '/project/Collection/Men/slogan/beer-studio-black-round-neck-t-shirt(2).jpg', 'beer-studio-black-round-neck-t-shirt', 0),
(94, 'Men', 'Slogan T-shirts', 'Peter England', 499, '/project/Collection/Men/slogan/om-with-shiva-black-t-shirt.jpg', 'om-with-shiva-black-t-shirt', 0),
(95, 'Men', 'Slogan T-shirts', 'Peter England', 499, '/project/Collection/Men/slogan/rootstock-yellow-round-neck-t-shirt.jpg', 'rootstock-yellow-round-neck-t-shirt', 0),
(96, 'Men', 'Slogan T-shirts', 'LondonBridge', 499, '/project/Collection/Men/slogan/om-hari-white-t-shirt.jpg', 'om-hari-white-t-shirt', 0),
(97, 'Men', 'Slogan T-shirts', 'LondonBridge', 499, '/project/Collection/Men/slogan/rootstock-dark-grey-round-neck-t-shirt.jpg', 'rootstock-dark-grey-round-neck-t-shirt', 0),
(98, 'Men', 'Slogan T-shirts', 'Lotto', 499, '/project/Collection/Men/slogan/rootstock-round-neck-red-t-shirt.jpg', 'rootstock-round-neck-red-t-shirt', 0),
(99, 'Men', 'Slogan T-shirts', 'Lotto', 499, '/project/Collection/Men/slogan/beer-studio-white-round-neck-t-shirt.jpg', 'beer-studio-white-round-neck-t-shirt', 0),
(100, 'Men', 'Formal shirts', 'Peter England', 1799, '/project/Collection/Men/Formal Shirts/peter-england-light-pink-formal-shirt.jpg', 'sadfgm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `Order_id` int(10) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(15) DEFAULT NULL,
  `LastName` varchar(15) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Country` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Zip_code` int(10) NOT NULL,
  `contactNo` varchar(11) DEFAULT NULL,
  `ShippingAddress` varchar(40) DEFAULT NULL,
  `ShippingMethod` varchar(20) NOT NULL,
  `PaymentMethod` varchar(20) NOT NULL,
  `TypeOfCreditcard` varchar(25) DEFAULT '                  -',
  `NameOnCC` varchar(30) DEFAULT '                   -',
  `CCNo` bigint(50) DEFAULT NULL,
  `CVV` int(5) DEFAULT NULL,
  `ExpirationDate` varchar(20) DEFAULT NULL,
  `Order_Ammount` bigint(50) NOT NULL,
  `temp` varchar(50) DEFAULT NULL,
  `OrderDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Email_id` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`Order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1008 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_id`, `FirstName`, `LastName`, `Email`, `Country`, `State`, `City`, `Zip_code`, `contactNo`, `ShippingAddress`, `ShippingMethod`, `PaymentMethod`, `TypeOfCreditcard`, `NameOnCC`, `CCNo`, `CVV`, `ExpirationDate`, `Order_Ammount`, `temp`, `OrderDateTime`, `Email_id`) VALUES
(1003, 'Gaurav', 'machhi', 'machhigaurav@gmail.com', 'India', 'Gujarat', 'Vadodara', 3900009, '9714576098', '1164, Tarsali, Vishal nagar Vadodara', 'Free Shipping', 'Cash on delivery', '                  -', '                   -', 0, 0, '', 499, '', '2016-07-28 14:24:35', 'machhigaurav@gmail.com'),
(1004, 'Gaurav', 'machhi', 'machhigaurav@gmail.com', 'India', 'Gujarat', 'Vadodara', 3900009, '9714576098', '1164, Tarsali, Vishal nagar Vadodara', 'Standard Shiping', 'Credit Card', 'MasterCard', 'Machhi Gaurav', 7777777777777777, 5465, '02/2020', 508, '', '2016-07-28 14:25:12', 'machhigaurav@gmail.com'),
(1005, 'Gaurav', 'machhi', 'machhigaurav@gmail.com', 'India', 'Gujarat', 'Vadodara', 3900009, '9714576098', '1164, Tarsali, Vishal nagar Vadodara', 'Free Shipping', 'Cash on delivery', '                  -', '                   -', 0, 0, '', 599, '', '2016-09-06 19:48:14', 'temporily@gmail.com'),
(1006, 'Gaurav', 'machhi', 'machhigaurav@gmail.com', 'India', 'Gujarat', 'Vadodara', 3900009, '9714576098', '1164, Tarsali, Vishal nagar Vadodara', 'Free Shipping', 'Cash on delivery', '                  -', '                   -', 0, 0, '', 799, '', '2016-10-01 22:51:15', 'machhigaurav@gmail.com'),
(1007, 'vip', 'ddvdv', 'scscs@gmail.com', 'India', 'Delhi', 'New Delhi', 0, 'ccdcdcdc', 'sdsds', 'Free Shipping', 'Cash on delivery', '                  -', '                   -', NULL, NULL, NULL, 2998, '', '2018-04-08 05:53:38', 'esh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `signuptable`
--

CREATE TABLE IF NOT EXISTS `signuptable` (
  `User_id` int(5) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `ContactNo` bigint(12) NOT NULL,
  `EmailId` varchar(40) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `DateAndTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_type` varchar(100) NOT NULL DEFAULT 'client',
  PRIMARY KEY (`EmailId`),
  UNIQUE KEY `User_id` (`User_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `signuptable`
--

INSERT INTO `signuptable` (`User_id`, `FirstName`, `LastName`, `Gender`, `ContactNo`, `EmailId`, `Password`, `DateAndTime`, `user_type`) VALUES
(43, 'Gaurav', 'Machhi', 'male', 9714576098, 'machhigaurav@gmail.com', '12345', '2016-06-22 14:46:06', 'client'),
(45, 'gaurav', 'machhi', 'male', 7777777777, 'gaurav@gmail.com', '123456', '2017-02-13 10:21:12', 'client'),
(46, 'abc', 'bcd', 'female', 1111111111, 'abcd@gmail.com', '00000', '2017-03-12 05:07:29', 'client'),
(47, 'dfbd', 'dfbdfbbf', 'male', 5616156465, 'tfbfgb@gmail.com', 'QWERT', '2017-03-14 17:27:10', 'client'),
(48, 'Tino', 'Mwadeyi', 'male', 755174253, 'tinomwadeyi@gmail.com', 'Naruto06', '2017-03-19 15:17:51', 'client'),
(49, 'Test', 'Test', 'male', 4353453, 'admin@admin.co.uk', 'password', '2017-05-09 15:47:24', 'client'),
(50, 'test', 'subject', 'male', 915419944, 'asdasd@yahoo.com', '12312312', '2017-05-13 04:01:48', 'client'),
(51, 'testsubject', 'asss', 'male', 912612121, 'hanswin@yahoo.com', '12312312', '2017-05-13 04:03:04', 'client'),
(52, 'azee', 'rox', 'male', 33534545, 'azeebrox@gmail.com', 'aseeb', '2017-05-15 05:36:36', 'client'),
(53, '', '', '', 0, '', '', '2017-06-09 08:56:25', 'client'),
(54, 'vip', 'lam', 'male', 0, 'erfgfsh@gmail.com', 'admin', '2018-04-08 06:22:44', 'client'),
(1, 'cvbmn', 'df', 'dd', 2587410369, 'vipul@gmail.com', 'vipul', '2018-04-08 10:10:09', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `woman`
--

CREATE TABLE IF NOT EXISTS `woman` (
  `Product_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(6) DEFAULT 'Woman',
  `ProductType` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Brand` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Price` int(10) NOT NULL,
  `Imagepath` varchar(500) CHARACTER SET latin1 NOT NULL,
  `Description` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `stock` int(5) DEFAULT NULL,
  PRIMARY KEY (`Product_id`),
  KEY `Pid` (`ProductType`,`Brand`,`Price`,`Imagepath`,`Description`),
  KEY `Product_id` (`Product_id`,`ProductType`,`Brand`,`Price`,`Imagepath`,`Description`,`stock`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=234 ;

--
-- Dumping data for table `woman`
--

INSERT INTO `woman` (`Product_id`, `Category`, `ProductType`, `Brand`, `Price`, `Imagepath`, `Description`, `stock`) VALUES
(79, 'Woman', 'Western Wall', 'Aurilia', 1100, '/project/Collection/Woman/WesternWall/classic-braided-neck-maxi-dress.jpg', 'classic-braided-neck-maxi-dress', 0),
(80, 'Woman', 'Western Wall', 'Allen Solly', 1555, '/project/Collection/Woman/WesternWall/elegant-wrapped-neck-summer-maxi-dress.jpg', 'elegant-wrapped-neck-summer-maxi-dress', 0),
(81, 'Woman', 'Western Wall', 'Shripa', 1025, '/project/Collection/Woman/WesternWall/red-tulle-fishtail-sleeveless-long-party-dress.jpg', 'red-tulle-fishtail-sleeveless-long-party-dress', 0),
(82, 'Woman', 'Western Wall', 'WOMEN', 999, '/project/Collection/Woman/WesternWall/gorgeous-leopard-maxi-dress(1).jpg', 'gorgeous-leopard-maxi-dress', 0),
(83, 'Woman', 'Western Wall', 'WOMEN', 1250, '/project/Collection/Woman/WesternWall/contrast-lace-top-high-split-maxi-party-dress.jpg', 'contrast-lace-top-high-split-maxi-party-dress', 0),
(84, 'Woman', 'Western Wall', 'BOMBAY STYLE', 1150, '/project/Collection/Woman/WesternWall/navy-blue-long-sleeves-lace-insert-flared-gown.jpg', 'navy-blue-long-sleeves-lace-insert-flared-gown', 0),
(85, 'Woman', 'Western Wall', 'BOMBAY STYLE', 1350, '/project/Collection/Woman/WesternWall/strapless-bardot-bodycon-dress-with-lace-trim.jpg', 'strapless-bardot-bodycon-dress-with-lace-trim', 0),
(86, 'Woman', 'Western Wall', 'Allen Solly', 1050, '/project/Collection/Woman/WesternWall/tribal-aztec-black-white-tight-fitting-midi-dress.jpg', 'tribal-aztec-black-white-tight-fitting-midi-dress', 0),
(87, 'Woman', 'Western Wall', 'Allen Solly', 850, '/project/Collection/Woman/WesternWall/sequin-trim-green-jersey-gown.jpg', 'sequin-trim-green-jersey-gown', 0),
(88, 'Woman', 'Western Wall', 'Allen Solly', 950, '/project/Collection/Woman/WesternWall/royal-blue-fairy-lace-skater-dress.jpg', 'royal-blue-fairy-lace-skater-dress', 0),
(89, 'Woman', 'Western Wall', 'Allen Solly', 1000, '/project/Collection/Woman/WesternWall/color-cocktail-multicolor-dress.jpg', 'color-cocktail-multicolor-dress', 0),
(90, 'Woman', 'Western Wall', 'Allen Solly', 1400, '/project/Collection/Woman/WesternWall/best-day-ever-maxi-dress.jpg', 'best-day-ever-maxi-dress', 0),
(91, 'Woman', 'Western Wall', 'Allen Solly', 1111, '/project/Collection/Woman/WesternWall/rosy-lace-embellished-mermaid-evening-dresses.jpg', 'rosy-lace-embellished-mermaid-evening-dresses', 0),
(92, 'Woman', 'Western Wall', 'Allen Solly', 1222, '/project/Collection/Woman/WesternWall/black-beautiful-sleeveless-tank-floral-print-midi-dress.jpg', 'black-beautiful-sleeveless-tank-floral-print-midi-dress', 0),
(93, 'Woman', 'Western Wall', 'Allen Solly', 1300, '/project/Collection/Woman/WesternWall/white-backless-mermaid-maxi-dress.jpg', 'white-backless-mermaid-maxi-dress', 0),
(94, 'Woman', 'Western Wall', 'Allen Solly', 1555, '/project/Collection/Woman/WesternWall/striped-print-and-navy-jersey-maxi-dress.jpg', 'striped-print-and-navy-jersey-maxi-dress', 0),
(95, 'Woman', 'Western Wall', 'Allen Solly', 1000, '/project/Collection/Woman/WesternWall/glamourous-halter-draped-gold-belted-olive-jersey-maxi-dress.jpg', 'glamourous-halter-draped-gold-belted-olive-jersey-maxi-dress', 0),
(96, 'Woman', 'Western Wall', 'Allen Solly', 1001, '/project/Collection/Woman/WesternWall/wrap-front-3-4-sleeve-dress.jpg', 'wrap-front-3-4-sleeve-dress', 0),
(97, 'Woman', 'Western Wall', 'Allen Solly', 950, '/project/Collection/Woman/WesternWall/thigh-high-slit-long-sleeve-lace-maxi-dress.jpg', 'thigh-high-slit-long-sleeve-lace-maxi-dress', 0),
(98, 'Woman', 'Western Wall', 'Allen Solly', 1599, '/project/Collection/Woman/WesternWall/navy-lace-satin-patchwork-party-maxi-dress.jpg', 'navy-lace-satin-patchwork-party-maxi-dress', 0),
(99, 'Woman', 'Western Wall', 'Bombay Fashion', 850, '/project/Collection/Woman/WesternWall/fancy-dress-with-rivet-embellishment-green.jpg', 'fancy-dress-with-rivet-embellishment-green', 1325),
(100, 'Woman', 'Western Wall', 'Bombay Fashion', 1275, '/project/Collection/Woman/WesternWall/purple-off-shoulder-sheer-lace-long-sleeve-midi-dress.jpg', 'purple-off-shoulder-sheer-lace-long-sleeve-midi-dress', 0),
(101, 'Woman', 'Western Wall', 'Morden Fashion', 1275, '/project/Collection/Woman/WesternWall/red-winging-angle-cape-style-backless-mini-dress.jpg', 'red-winging-angle-cape-style-backless-mini-dress', 0),
(102, 'Woman', 'Western Wall', 'Morden Fashion', 1599, '/project/Collection/Woman/WesternWall/harpa-orange-dress.jpg', 'harpa-orange-dress', 0),
(103, 'Woman', 'Western Wall', 'Morden Fashion', 1100, '/project/Collection/Woman/WesternWall/leopard-print-low-v-back-midi-dress.jpg', 'leopard-print-low-v-back-midi-dress', 0),
(104, 'Woman', 'Western Wall', 'Morden Fashion', 1100, '/project/Collection/Woman/WesternWall/black-criss-cross-back-mini-dress.jpg', 'black-criss-cross-back-mini-dress', 0),
(105, 'Woman', 'Western Wall', 'Bombay Fashion', 1399, '/project/Collection/Woman/WesternWall/harpa-black-dress.jpg', 'harpa-black-dress', 0),
(106, 'Woman', 'Western Wall', 'Bombay Fashion', 1100, '/project/Collection/Woman/WesternWall/navy-spaghetti-straps-floral-print-midi-dress.jpg', 'navy-spaghetti-straps-floral-print-midi-dress', 0),
(109, 'Woman', 'Skirts', 'Bombay Fashion', 750, '/project/Collection/Woman/Skirt/roman-women-image-high-waisted-pleated-skirt.jpg', 'roman-women-image-high-waisted-pleated-skirt', 0),
(110, 'Woman', 'Skirts', 'Bombay Fashion', 750, '/project/Collection/Woman/Skirt/peach-blossom-print-black-high-waisted-flared-skirt.jpg', 'peach-blossom-print-black-high-waisted-flared-skirt', 0),
(111, 'Woman', 'Skirts', 'Kiari', 999, '/project/Collection/Woman/Skirt/boho-cherry-red-pattern-two-piece-shorts-set.jpg', 'boho-cherry-red-pattern-two-piece-shorts-set', 0),
(112, 'Woman', 'Skirts', 'Kiari', 899, '/project/Collection/Woman/Skirt/color-cocktail-blue-printed-skirt(1).jpg', 'color-cocktail-blue-printed-skirt', 0),
(113, 'Woman', 'Skirts', 'Aurilia', 1699, '/project/Collection/Woman/Skirt/arrow-women-formal-skirt(2).jpg', 'arrow-women-formal-skirt', 0),
(114, 'Woman', 'Skirts', 'Aurilia', 695, '/project/Collection/Woman/Skirt/slit-maxi-skirt.jpg', 'slit-maxi-skirt', 0),
(115, 'Woman', 'Skirts', 'Allen Solly', 899, '/project/Collection/Woman/Skirt/color-cocktail-brown-printed-skirt.jpg', 'color-cocktail-brown-printed-skirt', 0),
(116, 'Woman', 'Skirts', 'Allen Solly', 449, '/project/Collection/Woman/Skirt/mini-skirt-cum-tube-top.jpg', 'mini-skirt-cum-tube-top', 0),
(117, 'Woman', 'Skirts', 'Karigari', 675, '/project/Collection/Woman/Skirt/pink-ruched-asymmetrical-draped-sexy-skirt.jpg', 'pink-ruched-asymmetrical-draped-sexy-skirt', 0),
(118, 'Woman', 'Skirts', 'Karigari', 1099, '/project/Collection/Woman/Skirt/harpa-purple-skirts.jpg', 'harpa-purple-skirts', 0),
(119, 'Woman', 'Skirts', 'Morden Fashion', 1199, '/project/Collection/Woman/Skirt/harpa-black-skirts.jpg', 'harpa-black-skirts', 0),
(120, 'Woman', 'Skirts', 'Morden Fashion', 1499, '/project/Collection/Woman/Skirt/glamorous-sheer-embroidered-maxi-skirt.jpg', 'glamorous-sheer-embroidered-maxi-skirt', 0),
(121, 'Woman', 'Skirts', 'Shripa', 250, '/project/Collection/Woman/Skirt/american-flag-tie-dye-jean-skirt(1).jpg', 'american-flag-tie-dye-jean-skirt', 0),
(122, 'Woman', 'Skirts', 'Shripa', 250, '/project/Collection/Woman/Skirt/american-flag-tie-dye-jean-skirt.jpg', 'american-flag-tie-dye-jean-skirt', 0),
(123, 'Woman', 'Skirts', 'WOMEN', 499, '/project/Collection/Woman/Skirt/knit-skater-skirt.jpg', 'knit-skater-skirt', 0),
(124, 'Woman', 'Skirts', 'WOMEN', 1199, '/project/Collection/Woman/Skirt/lace-shorts-base-skirt.jpg', 'lace-shorts-base-skirt', 0),
(125, 'Woman', 'Skirts', 'BOMBAY STYLE', 1050, '/project/Collection/Woman/Skirt/i-know-blue-skirt.jpg', 'i-know-blue-skirt', 0),
(126, 'Woman', 'Skirts', 'BOMBAY STYLE', 700, '/project/Collection/Woman/Skirt/zip-it-pencil-straight-skirt.jpg', 'zip-it-pencil-straight-skirt', 0),
(127, 'Woman', 'Trousers and shorts-Pants & Palazzos', 'Bombay Fashion', 995, '/project/Collection/Woman/Trousers-Palazzo/beach-style-floral-print-wide-leg-pants(1).jpg', 'beach-style-floral-print-wide-leg-pants', 0),
(128, 'Woman', 'Trousers and shorts-Pants & Palazzos', 'Bombay Fashion', 1399, '/project/Collection/Woman/Trousers-Palazzo/harpa-black-trouser.jpg', 'harpa-black-trouser', 0),
(129, 'Woman', 'Trousers and shorts-Pants & Palazzos', 'Kiari', 909, '/project/Collection/Woman/Trousers-Palazzo/i-know-black-trouser.jpg', 'i-know-black-trouser', 0),
(130, 'Woman', 'Trousers and shorts-Pants & Palazzos', 'Kiari', 1099, '/project/Collection/Woman/Trousers-Palazzo/harpa-red-bottom.jpg', 'harpa-red-bottom', 0),
(131, 'Woman', 'Trousers and shorts-Pants & Palazzos', 'Aurilia', 1190, '/project/Collection/Woman/Trousers-Palazzo/i-know-blue-trouser.jpg', 'i-know-blue-trouser', 0),
(132, 'Woman', 'Trousers and shorts-Pants & Palazzos', 'Aurilia', 1189, '/project/Collection/Woman/Trousers-Palazzo/i-know-green-trouser.jpg', 'i-know-green-trouser ', 0),
(133, 'Woman', 'Trousers and shorts-Pants & Palazzos', 'Allen Solly', 1259, '/project/Collection/Woman/Trousers-Palazzo/i-know-white-trouser(1).jpg', 'i-know-white-trouser', 0),
(134, 'Woman', 'Trousers and shorts-Pants & Palazzos', 'Allen Solly', 699, '/project/Collection/Woman/Trousers-Palazzo/monochrome-elephant-print-wide-leg-pants.jpg', 'monochrome-elephant-print-wide-leg-pants', 0),
(135, 'Woman', 'Trousers and shorts-Pants & Palazzos', 'Karigari', 1230, '/project/Collection/Woman/Trousers-Palazzo/oranje-black-pants.jpg', 'oranje-black-pants', 0),
(136, 'Woman', 'Trousers and shorts-Pants & Palazzos', 'Karigari', 1230, '/project/Collection/Woman/Trousers-Palazzo/oranje-ox-blood-bottom.jpg', 'oranje-ox-blood-bottom', 0),
(137, 'Woman', 'Trousers and shorts-Pants & Palazzos', 'Morden Fashion', 1189, '/project/Collection/Woman/Trousers-Palazzo/i-know-light-blue-trouser.jpg', 'i-know-light-blue-trouser', 0),
(140, 'Woman', 'Saris', 'Bombay Fashion', 1699, '/project/Collection/Woman/Saree/sasya-yellow-orange-designer-saree.jpg', 'sasya-yellow-orange-designer-saree', 0),
(141, 'Woman', 'Saris', 'Bombay Fashion', 2299, '/project/Collection/Woman/Saree/aarya-green-georgette-saree.jpg', 'aarya-green-georgette-saree', 0),
(142, 'Woman', 'Saris', 'Bombay Fashion', 3550, '/project/Collection/Woman/Saree/lavish-pink-designer-party-wear-saree.jpg', 'lavish-pink-designer-party-wear-saree', 0),
(143, 'Woman', 'Saris', 'Kiari', 2050, '/project/Collection/Woman/Saree/ramaiya-designer-red-embroidered-saree.jpg', 'ramaiya-designer-red-embroidered-saree', 0),
(144, 'Woman', 'Saris', 'Kiari', 2450, '/project/Collection/Woman/Saree/shonaya-beige-brown-designer-saree.jpg', 'shonaya-beige-brown-designer-saree', 0),
(145, 'Woman', 'Saris', 'Aurilia', 1699, '/project/Collection/Woman/Saree/printed-orange-red-casual-wear-saree.jpg', 'printed-orange-red-casual-wear-saree', 0),
(146, 'Woman', 'Saris', 'Aurilia', 3525, '/project/Collection/Woman/Saree/amaira-white-designer-saree.jpg', 'amaira-white-designer-saree', 0),
(147, 'Woman', 'Saris', 'Allen Solly', 5522, '/project/Collection/Woman/Saree/rudra-fashion-embroidered-saree.jpg', 'rudra-fashion-embroidered-saree', 0),
(148, 'Woman', 'Saris', 'Allen Solly', 2099, '/project/Collection/Woman/Saree/designer-saree-with-blouse(3).jpg', 'designer-saree-with-blouse', 0),
(149, 'Woman', 'Saris', 'Karigari', 2099, '/project/Collection/Woman/Saree/designer-saree-with-blouse(5).jpg', 'designer-saree-with-blouse', 0),
(150, 'Woman', 'Saris', 'Karigari', 2740, '/project/Collection/Woman/Saree/touch-trendz-designer-saree.jpg', 'touch-trendz-designer-saree', 0),
(151, 'Woman', 'Saris', 'Morden Fashion', 1875, '/project/Collection/Woman/Saree/shonaya-red-black-designer-saree.jpg', 'shonaya-red-black-designer-saree', 0),
(152, 'Woman', 'Saris', 'Morden Fashion', 3865, '/project/Collection/Woman/Saree/designer-blue-embroided-saree.jpg', 'designer-blue-embroided-saree', 0),
(153, 'Woman', 'Saris', 'Shripa', 3190, '/project/Collection/Woman/Saree/adaa-georgette-and-chiffon-strap-party-wear-saree.jpg', 'adaa-georgette-and-chiffon-strap-party-wear-saree', 0),
(154, 'Woman', 'Saris', 'Shripa', 5300, '/project/Collection/Woman/Saree/designer-embroidered-pink-and-red-saree.jpg', 'designer-embroidered-pink-and-red-saree', 0),
(155, 'Woman', 'Saris', 'WOMEN', 4925, '/project/Collection/Woman/Saree/designer-embroidered-multi-saree.jpg', 'designer-embroidered-multi-saree', 0),
(156, 'Woman', 'Saris', 'WOMEN', 3225, '/project/Collection/Woman/Saree/designer-pink-grey-party-wear-saree.jpg', 'designer-pink-grey-party-wear-saree', 0),
(157, 'Woman', 'Saris', 'BOMBAY STYLE', 2299, '/project/Collection/Woman/Saree/aarya-green-jaquard-georgette-saree.jpg', 'aarya-green-jaquard-georgette-saree', 0),
(159, 'Woman', 'Trousers and shorts-Pants & Palazzos', 'Bombay Fashion', 1299, '/project/Collection/Woman/Trousers-Palazzo/chlorophile-blue-women-shorts.jpg', 'chlorophile-blue-women-shorts', 0),
(160, 'Woman', 'Trousers and shorts-Pants & Palazzos', 'Kiari', 399, '/project/Collection/Woman/Trousers-Palazzo/femmora-dusty-pink-bermuda.jpg', 'femmora-dusty-pink-bermuda', 0),
(161, 'Woman', 'Trousers and shorts-Pants & Palazzos', 'Aurilia', 899, '/project/Collection/Woman/Trousers-Palazzo/kaxiaa-twill-cream-short.jpg', 'kaxiaa-twill-cream-short', 0),
(162, 'Woman', 'Trousers and shorts-Pants & Palazzos', 'Karigari', 979, '/project/Collection/Woman/Trousers-Palazzo/i-know-grey-short.jpg', 'i-know-grey-short', 0),
(163, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Bombay Fashion', 999, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/harpa-black-white-top.jpg', 'harpa-black-white-top', 0),
(164, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Bombay Fashion', 795, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/chiffon-floral-print-bohemian-style-blouses.jpg', 'chiffon-floral-print-bohemian-style-blouses', 0),
(165, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Kiari', 795, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/exotic-print-batwing-chiffon-blouse.jpg', 'exotic-print-batwing-chiffon-blouse', 0),
(166, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Kiari', 795, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/large-size-batwing-sleeve-watercolor-painting-chiffon-blouse.jpg', 'large-size-batwing-sleeve-watercolor-painting-chiffon-blouse', 0),
(167, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Aurilia', 795, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/elegant-floral-print-long-chiffon-top.jpg', 'elegant-floral-print-long-chiffon-top', 0),
(168, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Aurilia', 795, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/belted-long-chiffon-top.jpg', 'belted-long-chiffon-top', 0),
(169, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Allen Solly', 795, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/hot-fashion-colorful-flowers-chiffon-blouse.jpg', 'hot-fashion-colorful-flowers-chiffon-blouse', 0),
(170, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Allen Solly', 795, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/casual-flower-print-orange-bohemian-chiffon-blouse-top.jpg', 'casual-flower-print-orange-bohemian-chiffon-blouse-top', 0),
(171, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Karigari', 795, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/scoop-neck-flower-butterfly-chiffon-blouse.jpg', 'scoop-neck-flower-butterfly-chiffon-blouse', 0),
(172, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Karigari', 795, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/colorful-horses-print-blue-chiffon-blouse.jpg', 'colorful-horses-print-blue-chiffon-blouse', 0),
(173, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Morden Fashion', 899, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/color-cocktail-navy-printed-top.jpg', 'color-cocktail-navy-printed-top', 0),
(174, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Morden Fashion', 999, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/color-cocktail-off-white-top.jpg', 'color-cocktail-off-white-top', 0),
(175, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Bombay Fashion', 1699, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/arrow-navy-women-shirt(1).jpg', 'arrow-navy-women-shirt', 0),
(176, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Bombay Fashion', 999, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/harpa-off-white-shirt.jpg', 'harpa-off-white-shirt', 0),
(177, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Kiari', 1699, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/numero-uno-women-blue-denim-shirt.jpg', 'numero-uno-women-blue-denim-shirt', 0),
(178, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Kiari', 1499, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/arrow-light-pink-women-shirt.jpg', 'arrow-light-pink-women-shirt', 0),
(179, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Aurilia', 1099, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/harpa-black-shirt.jpg', 'harpa-black-shirt', 0),
(180, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Aurilia', 1499, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/arrow-blue-women-shirt.jpg', 'arrow-blue-women-shirt', 0),
(181, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Allen Solly', 699, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/trend-arrest-floral-print-shirt.jpg', 'trend-arrest-floral-print-shirt', 0),
(182, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Karigari', 1299, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/pepe-jeans-blue-shirt.jpg', 'pepe-jeans-blue-shirt', 0),
(183, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Karigari', 1699, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/arrow-women-coral-red-shirt.jpg', 'arrow-women-coral-red-shirt', 0),
(184, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Morden Fashion', 700, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/trend-arrest-orange-shirt.jpg', 'trend-arrest-orange-shirt', 0),
(185, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Morden Fashion', 899, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/color-cocktail-white-shirt.jpg', 'color-cocktail-white-shirt', 0),
(186, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Shripa', 799, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/primoknot-coral-shirt.jpg', 'primoknot-coral-shirt', 0),
(187, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Bombay Fashion', 1099, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/kajree-green-cotton-embroidered-kurti.jpg', 'kajree-green-cotton-embroidered-kurti ', 0),
(188, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Kiari', 999, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/radiant-navy-blue-readymade-kurti.jpg', 'radiant-navy-blue-readymade-kurti', 0),
(189, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Aurilia', 999, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/kajree-yellow-readymade-kurti.jpg', 'kajree-yellow-readymade-kurti', 0),
(190, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Allen Solly', 799, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/shine-pink-blue-cotton-kurti.jpg', 'shine-pink-blue-cotton-kurti', 0),
(191, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Karigari', 850, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/ibis-brown-black-cotton-printed-kurti.jpg', 'ibis-brown-black-cotton-printed-kurti', 0),
(192, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Morden Fashion', 949, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/feminista-light-blue-cotton-embroidered-kurti.jpg', 'feminista-light-blue-cotton-embroidered-kurti', 0),
(193, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'Shripa', 799, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/spirit-blue-white-cotton-kurti.jpg', 'spirit-blue-white-cotton-kurti', 0),
(194, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'WOMEN', 799, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/shine-red-grey-cotton-kurti.jpg', 'shine-red-grey-cotton-kurti', 0),
(195, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'BOMBAY STYLE', 799, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/spirit-cream-pink-cotton-kurti.jpg', 'spirit-cream-pink-cotton-kurti', 0),
(196, 'Woman', 'Indo-Ethnic Kurtas & Tops', 'BOMBAY STYLE', 949, '/project/Collection/Woman/Indo-Ethnic Kurtas & Tops/feminista-grey-cotton-embroidered-kurti.jpg', 'feminista-grey-cotton-embroidered-kurti', 0),
(197, 'Woman', 'Dresses-Anarkalis', 'Bombay Fashion', 5999, '/project/Collection/Woman/Dresses-Anarkalis/karma-brown-wine-heavy-embroidered-unstitched-suit.jpg', 'karma-brown-wine-heavy-embroidered-unstitched-suit', 0),
(198, 'Woman', 'Dresses-Anarkalis', 'Bombay Fashion', 2500, '/project/Collection/Woman/Dresses-Anarkalis/keeya-s-black-green-embroidered-unstitched-suit.jpg', 'karma-green-wine-heavy-embroidered-unstitched-suit', 0),
(199, 'Woman', 'Dresses-Anarkalis', 'Kiari', 2599, '/project/Collection/Woman/Dresses-Anarkalis/keeya-s-black-brown-embroidered-unstitched-suit.jpg', 'keeya-s-black-brown-embroidered-unstitched-suit', 0),
(200, 'Woman', 'Dresses-Anarkalis', 'Kiari', 3950, '/project/Collection/Woman/Dresses-Anarkalis/gulzar-maroon-beige-heavy-embroidered-semi-stitched-suit.jpg', 'gulzar-maroon-beige-heavy-embroidered-semi-stitched-suit', 0),
(201, 'Woman', 'Dresses-Anarkalis', 'Aurilia', 4299, '/project/Collection/Woman/Dresses-Anarkalis/palace-queen-navy-blue-embroidered-semi-stitched-suit.jpg', 'palace-queen-navy-blue-embroidered-semi-stitched-suit', 0),
(202, 'Woman', 'Dresses-Anarkalis', 'Allen Solly', 4399, '/project/Collection/Woman/Dresses-Anarkalis/palace-queen-cream-orange-embroidered-semi-stitched-suit.jpg', 'palace-queen-cream-orange-embroidered-semi-stitched-suit', 0),
(203, 'Woman', 'Dresses-Anarkalis', 'Allen Solly', 2775, '/project/Collection/Woman/Dresses-Anarkalis/keeya-s-beige-pink-embroidered-unstitched-suit.jpg', 'keeya-s-beige-pink-embroidered-unstitched-suit', 0),
(204, 'Woman', 'Dresses-Anarkalis', 'Allen Solly', 2899, '/project/Collection/Woman/Dresses-Anarkalis/keeya-s-brown-purple-embroidered-unstitched-suit.jpg', 'keeya-s-brown-purple-embroidered-unstitched-suit', 0),
(205, 'Woman', 'Dresses-Anarkalis', 'Karigari', 4999, '/project/Collection/Woman/Dresses-Anarkalis/safeena-cream-red-semi-stitched-embroidered-suit.jpg', 'safeena-cream-red-semi-stitched-embroidered-suit', 0),
(206, 'Woman', 'Dresses-Anarkalis', 'Karigari', 2999, '/project/Collection/Woman/Dresses-Anarkalis/rimi-sen-semi-stitched-pink-anarkali-suit.jpg', 'rimi-sen-semi-stitched-pink-anarkali-suit', 0),
(207, 'Woman', 'Dresses-Anarkalis', 'Morden Fashion', 2795, '/project/Collection/Woman/Dresses-Anarkalis/hariett-sea-green-semi-stitched-anarkali.jpg', 'hariett-sea-green-semi-stitched-anarkali', 0),
(208, 'Woman', 'Dresses-Anarkalis', 'Morden Fashion', 2199, '/project/Collection/Woman/Dresses-Anarkalis/ethnix-blue-aqua-unstiched-dress-material.jpg', 'ethnix-blue-aqua-unstiched-dress-material', 0),
(209, 'Woman', 'Dresses-Anarkalis', 'Shripa', 2199, '/project/Collection/Woman/Dresses-Anarkalis/ethnix-blue-pink-unstiched-dress-material.jpg', 'ethnix-blue-pink-unstiched-dress-material', 0),
(210, 'Woman', 'Dresses-Anarkalis', 'Shripa', 3435, '/project/Collection/Woman/Dresses-Anarkalis/shazia-designer-semi-stitched-anarkali-suit_002.jpg', 'shazia-designer-semi-stitched-anarkali-suit', 0),
(211, 'Woman', 'Dresses-Anarkalis', 'WOMEN', 1820, '/project/Collection/Woman/Dresses-Anarkalis/petra-fab-embroidered-dress-material.jpg', 'petra-fab-embroidered-dress-material', 0),
(212, 'Woman', 'Dresses-Anarkalis', 'WOMEN', 1786, '/project/Collection/Woman/Dresses-Anarkalis/petra-fab-embroidered-dress-material_003.jpg', 'petra-fab-embroidered-dress-material', 0),
(213, 'Woman', 'Dresses-Anarkalis', 'BOMBAY STYLE', 1299, '/project/Collection/Woman/Dresses-Anarkalis/designer-white-semi-stitched-suit.jpg', 'designer-white-semi-stitched-suit', 0),
(214, 'Woman', 'Dresses-Anarkalis', 'BOMBAY STYLE', 4048, '/project/Collection/Woman/Dresses-Anarkalis/rainbow-embroidered-semi-stitched-salwar-kameez_002.jpg', 'rainbow-embroidered-semi-stitched-salwar-kameez', 0),
(215, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Bombay Fashion', 499, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/kanvin-rose-shadow-top.jpg', 'kanvin-rose-shadow-top', 0),
(216, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Bombay Fashion', 1399, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/levis-red-women-tee.jpg', 'levis-red-women-tee', 0),
(217, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Kiari', 799, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/pepe-jeans-lemon-tee.jpg', 'pepe-jeans-lemon-tee', 0),
(218, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Kiari', 595, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/lovely-minion-heart-women-tank-top.jpg', 'lovely-minion-heart-women-tank-top', 0),
(219, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Kiari', 849, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/tweety-yellow-women-tee.jpg', 'tweety-yellow-women-tee', 0),
(220, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Aurilia', 799, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/pepe-jeans-white-tee(1).jpg', 'pepe-jeans-white-tee', 0),
(221, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Aurilia', 475, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/mad-hero-3d-poker-skull-vest-top.jpg', 'mad-hero-3d-poker-skull-vest-top', 0),
(222, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Allen Solly', 549, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/marvel-comics-royal-blue-tee.jpg', 'marvel-comics-royal-blue-tee', 0),
(223, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Allen Solly', 499, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/nirvana-black-women-tee.jpg', 'nirvana-black-women-tee', 0),
(224, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Allen Solly', 799, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/garfield-white-short-sleeves-tee.jpg', 'garfield-white-short-sleeves-tee', 0),
(225, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Karigari', 499, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/mickey-friends-green-short-sleeves-tee.jpg', 'mickey-friends-green-short-sleeves-tee', 0),
(226, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Karigari', 1099, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/pepe-jeans-women-t-shirt.jpg', 'pepe-jeans-women-t-shirt', 0),
(227, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Karigari', 399, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/vinson-white-printed-tee.jpg', 'vinson-white-printed-tee', 0),
(228, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Morden Fashion', 899, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/pepe-jeans-lemon-tee(1).jpg', 'pepe-jeans-lemon-tee', 0),
(229, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'Shripa', 999, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/pepe-jeans-pink-top(2).jpg', 'pepe-jeans-pink-top', 0),
(230, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'WOMEN', 699, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/tweety-grey-tee.jpg', 'tweety-grey-tee', 0),
(231, 'Woman', 'Tshirts-Shirts-Tunics-maxi-gown', 'WOMEN', 999, '/project/Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/pepe-jeans-off-white-tee(1).jpg', 'pepe-jeans-off-white-tee', 0),
(233, 'Woman', 'Wedding clothing', 'Varsiddhi', 7999, '/project/Collection/Woman/Weddingclothing/violet Lahenga heavy.jpg', 'violet Lahenga heavy', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
