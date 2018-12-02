-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2016 at 09:00 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sellhub_schema`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(5, 'Beauty'),
(2, 'Cellphones'),
(3, 'Clothing'),
(4, 'Computers'),
(1, 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `popular`
--

CREATE TABLE IF NOT EXISTS `popular` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `productid` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `popular`
--

INSERT INTO `popular` (`id`, `productid`) VALUES
(1, 8),
(2, 18),
(3, 6),
(4, 15);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `categoryid` bigint(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `producttypeid` bigint(20) DEFAULT NULL,
  `userposted` bigint(20) NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categoryid`, `title`, `description`, `price`, `producttypeid`, `userposted`, `brand`, `rating`) VALUES
(1, 1, 'Sony HX350', 'Used only for 5 months. Picture quality is great. 16GB Memory Card is included in the price', '165.00', 1, 1, ' Sony', 4),
(2, 1, 'Nikon BL120', 'Used only for 2 months. Picture quality is moderate. 4GB Memory Card is included in the price', '120.00', 1, 1, 'Nikon', 4),
(3, 1, 'Bajaj Iron', ' 6 Month old iron. Barely used. Multiple heat settings available as well as its a steam iron', '19.00', 2, 1, 'Bajaj', 4),
(4, 1, 'Home Decor Iron', ' 2 Month old iron. Good condition. Multiple heat settings available.NOT a steam iron', '12.00', 2, 1, 'Home Decor', 4),
(5, 2, 'Sony Z3 Compact', ' 3 Month old. Good condition. 12MP Camera. Long battery backup. Charger included.', '180.00', 3, 1, 'Sony', 4),
(6, 2, 'Sony Z1', ' 1 year old. Good condition. 8MP Camera. significant battery backup. Charger NOT included.', '110.00', 3, 1, 'Sony', 4),
(7, 2, 'Samsung S4', ' 3 Month old. Good condition. 12MP Camera. Long battery backup. Charger included.', '170.00', 3, 1, 'Samsung', 4),
(8, 2, 'Samsung Grand', ' 1 year old. Good condition. 8MP Camera. significant battery backup. Charger NOT included.', '110.00', 3, 1, 'Samsung', 4),
(9, 4, 'Dell Inspiron', ' 6 month old. Good condition. 8GB Ram. significant battery backup. Charger included.', '330.00', 7, 1, 'Dell', 4),
(11, 4, 'Dell Vostroo', ' 2 year old. OK condition. 3GB Ram. significant battery backup. Charger NOT included.', '230.00', 7, 1, 'Dell', 4),
(12, 4, 'Lenovo Yoga', ' 6 month old. Good condition. 8GB Ram. significant battery backup. Charger included.', '330.00', 7, 1, 'Lenovo', 4),
(13, 4, 'Lenovo GH01', ' 2 year old. OK condition. 3GB Ram. significant battery backup. Charger NOT included.', '230.00', 7, 1, 'Lenovo', 4),
(14, 4, 'Alienware 17 R3', ' 2 month old. Excellent condition. 16GB Ram. excellent battery backup. 180W Charger included.', '830.00', 7, 1, 'Alienware', 4),
(15, 4, 'Microsoft M325', ' 4 month old. OK condition. 3 meter wired. Excellent dpi.', '15.00', 8, 1, 'Microsoft', 4),
(16, 4, 'Razer Deathadder', ' 2 month old. Excellent condition. Wireless. Excellent dpi. color changes.', '49.00', 8, 1, 'Razer', 4),
(17, 3, 'T-Shirt', ' newly bought. Nice condition. Mens M US Half size. Nice for parties', '14.00', 5, 2, 'US Polo', 3),
(18, 3, 'Casual Shirt', ' newly bought. Nice condition.Mens M US Full size. Nice for parties', '14.00', 5, 2, 'Marco Polo', 3),
(19, 3, 'T-Shirt', ' newly bought. Nice condition.Women M US Half size. Nice for parties', '14.00', 6, 2, 'US Polo', 3),
(20, 3, 'Casual Shirt', ' newly bought. Nice condition.Women M US Full size. Nice for parties', '14.00', 6, 2, 'Marco Polo', 3);

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE IF NOT EXISTS `producttype` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`id`, `type`) VALUES
(1, 'Camera'),
(2, 'Iron'),
(3, 'Phone'),
(4, 'Charger'),
(5, 'Men'),
(6, 'Women'),
(7, 'Laptop'),
(8, 'Mouse'),
(9, 'Perfume'),
(10, 'Deoderant');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `productid` bigint(20) NOT NULL,
  `imagepath` varchar(300) NOT NULL,
  `ismain` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `productid`, `imagepath`, `ismain`) VALUES
(1, 1, ' ../images/products/1.1.jpg', 1),
(2, 1, ' ../images/products/1.2.jpg', 0),
(3, 1, ' ../images/products/1.3.jpg', 0),
(4, 2, ' ../images/products/2.jpg', 1),
(5, 3, ' ../images/products/3.jpg', 1),
(6, 4, ' ../images/products/4.jpg', 1),
(7, 5, ' ../images/products/5.jpg', 1),
(8, 6, ' ../images/products/6.jpg', 1),
(9, 7, ' ../images/products/7.jpg', 1),
(10, 8, ' ../images/products/8.jpg', 1),
(11, 9, ' ../images/products/9.jpg', 1),
(12, 11, ' ../images/products/11.jpg', 1),
(13, 12, ' ../images/products/12.jpg', 1),
(14, 13, ' ../images/products/13.jpg', 1),
(15, 14, ' ../images/products/14.jpg', 1),
(16, 15, ' ../images/products/15.jpg', 1),
(17, 16, ' ../images/products/16.jpg', 1),
(18, 17, ' ../images/products/17.jpg', 1),
(19, 18, ' ../images/products/18.jpg', 1),
(20, 19, ' ../images/products/19.jpg', 1),
(21, 20, ' ../images/products/20.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userid` bigint(20) NOT NULL,
  `productid` bigint(20) NOT NULL,
  `rating` decimal(10,2) NOT NULL,
  `review` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `userid`, `productid`, `rating`, `review`) VALUES
(1, 3, 1, '3.00', ' Really nice product. I already have it and works perfect.'),
(2, 3, 2, '3.00', ' Really nice product. I already have it and works perfect.'),
(3, 3, 3, '3.00', ' Really nice product. I already have it and works perfect.'),
(4, 3, 4, '3.00', ' Really nice product. I already have it and works perfect.'),
(5, 3, 5, '3.00', ' Really nice product. I already have it and works perfect.'),
(6, 3, 6, '3.00', ' Really nice product. I already have it and works perfect.'),
(7, 3, 7, '3.00', ' Really nice product. I already have it and works perfect.'),
(8, 3, 8, '3.00', ' Really nice product. I already have it and works perfect.'),
(9, 3, 9, '3.00', ' Really nice product. I already have it and works perfect.'),
(10, 3, 10, '3.00', ' Really nice product. I already have it and works perfect.'),
(11, 3, 11, '3.00', ' Really nice product. I already have it and works perfect.'),
(12, 3, 12, '3.00', ' Really nice product. I already have it and works perfect.'),
(13, 3, 13, '3.00', ' Really nice product. I already have it and works perfect.'),
(14, 3, 14, '3.00', ' Really nice product. I already have it and works perfect.'),
(15, 3, 15, '3.00', ' Really nice product. I already have it and works perfect.'),
(16, 3, 16, '3.00', ' Really nice product. I already have it and works perfect.'),
(17, 3, 17, '3.00', ' Really nice product. I already have it and works perfect.'),
(18, 3, 18, '3.00', ' Really nice product. I already have it and works perfect.'),
(19, 3, 19, '3.00', ' Really nice product. I already have it and works perfect.'),
(20, 3, 20, '3.00', ' Really nice product. I already have it and works perfect.'),
(21, 4, 1, '4.00', ' Awesome product. Couldn?t have been better.'),
(22, 4, 2, '4.00', ' Awesome product. Couldn?t have been better.'),
(23, 4, 3, '4.00', ' Awesome product. Couldn?t have been better.'),
(24, 4, 4, '4.00', ' Awesome product. Couldn?t have been better.'),
(25, 4, 5, '4.00', ' Awesome product. Couldn?t have been better.'),
(26, 4, 6, '4.00', ' Awesome product. Couldn?t have been better.'),
(27, 4, 7, '4.00', ' Awesome product. Couldn?t have been better.'),
(28, 4, 8, '4.00', ' Awesome product. Couldn?t have been better.'),
(29, 4, 9, '4.00', ' Awesome product. Couldn?t have been better.'),
(30, 4, 10, '4.00', ' Awesome product. Couldn?t have been better.'),
(31, 4, 11, '4.00', ' Awesome product. Couldn?t have been better.'),
(32, 4, 12, '4.00', ' Awesome product. Couldn?t have been better.'),
(33, 4, 13, '4.00', ' Awesome product. Couldn?t have been better.'),
(34, 4, 14, '4.00', ' Awesome product. Couldn?t have been better.'),
(35, 4, 15, '4.00', ' Awesome product. Couldn?t have been better.'),
(36, 4, 16, '4.00', ' Awesome product. Couldn?t have been better.'),
(37, 4, 17, '4.00', ' Awesome product. Couldn?t have been better.'),
(38, 4, 18, '4.00', ' Awesome product. Couldn?t have been better.'),
(39, 4, 19, '4.00', ' Awesome product. Couldn?t have been better.'),
(40, 4, 20, '4.00', ' Awesome product. Couldn?t have been better.');

-- --------------------------------------------------------

--
-- Table structure for table `trending`
--

CREATE TABLE IF NOT EXISTS `trending` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `productid` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `trending`
--

INSERT INTO `trending` (`id`, `productid`) VALUES
(1, 9),
(2, 12),
(3, 16),
(4, 19);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addr1` varchar(50) NOT NULL,
  `addr2` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `password` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `addr1`, `addr2`, `city`, `state`, `zip`, `phone`, `birthday`, `password`) VALUES
(1, 'Jose', 'George', 'jgeorge0@fotki.com', '6 Utah Road', '149 Mallory Park', 'Pittsburgh', 'PA', '15240', '1-(412)558-4447', '10/13/1965', 'password'),
(2, 'Sarah', 'Perez', 'sperez1@gov.uk', '56399 Doe Crossing Trail', '76 Maryland Court', 'Seattle', 'WA', '98195', '1-(206)593-5161', '8/17/1980', 'password'),
(3, 'Ronald', 'Green', 'rgreen2@mlb.com', '58613 Mendota Alley', '7112 Kenwood Crossing', 'Torrance', 'CA', '90505', '1-(310)985-2203', '2/20/1991', 'password'),
(4, 'Victor', 'Gates', 'vgates@gmail.com', '6 Utah Road', '149 Mallory Park', 'Los Angeles', 'CA', '15240', '1-(412)558-4447', '10/13/1965', 'password'),
(5, 'John', 'Snow', 'jsnow@gmail.com', 'Commaders Chamber', 'Castle Black', 'Westeros', 'ND', '98195', '1-(206)593-5161', '8/17/1980', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

CREATE TABLE IF NOT EXISTS `user_images` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userid` bigint(20) NOT NULL,
  `imagepath` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_images`
--

INSERT INTO `user_images` (`id`, `userid`, `imagepath`) VALUES
(1, 1, '../images/users/jose.jpg'),
(2, 2, '../images/users/sarah.jpg'),
(3, 3, '../images/users/ronald.jpg'),
(4, 4, '../images/users/victor.jpg'),
(5, 5, '../images/users/jon.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
