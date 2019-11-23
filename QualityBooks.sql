-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2019 at 01:34 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `QualityBooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_title` varchar(200) NOT NULL,
  `banner_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_title`, `banner_image`) VALUES
(1, 'Banner 1', 'banner-1.jpg'),
(2, 'Banner 2', 'banner-2.jpg'),
(3, 'Banner 3', 'banner-3.jpg'),
(4, 'Banner 4', 'banner-4.jpg'),
(5, 'Banner 5', 'banner-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Maori Culture'),
(2, 'Arts & Music'),
(3, 'Business'),
(4, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sub_total` float NOT NULL,
  `gst` float NOT NULL,
  `grand_total` float NOT NULL,
  `order_date` text CHARACTER SET utf8 NOT NULL,
  `status` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `sub_total`, `gst`, `grand_total`, `order_date`, `status`) VALUES
(66, 2, 55, 15, 63.25, '2019-11-21 13:11:57', 'Not Shipped'),
(65, 2, 55, 15, 63.25, '2019-11-21 13:11:25', 'Not Shipped'),
(64, 2, 55, 15, 63.25, '2019-11-21 13:02:02', 'Not Shipped');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `price`, `qty`) VALUES
(52, 66, 43, 55, 1),
(51, 64, 43, 55, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` float NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `supplier_id`, `name`, `description`, `price`, `image`) VALUES
(43, 3, 3, 'The Power of Habit', 'NEW YORK TIMES BESTSELLER, Why We Do What We Do in Life and Business', 55, 'thepowerofhabit.jpeg'),
(42, 3, 3, 'Rich Enough', 'The only money guide New Zealanders will ever need  Read this one book, set up your money, and then get on with what makes you happy!', 37, 'richenough.jpeg'),
(41, 2, 2, 'Pop Art', 'Peaking in the 1960s, Pop Art began as a revolt against mainstream approaches to art and culture and evolved into a wholesale interrogation of modern society, consumer culture, the role of the artist, and of what constituted an artwork.', 15, 'popart.jpeg'),
(40, 2, 1, 'Creativity', 'Overcoming the Unseen Forces That Stand in the Way of True Inspiration', 45, 'creaticity.jpeg'),
(39, 2, 1, 'Discover the Vikings: Everyday Life, Art and Culture', 'Vikings have a fearsome reputation as terrifying and brutal warriors, raiding other lands and killing without mercy. Yet the Vikings were also incredibly cultured and lived in a complex society. Through artefacts and excavations, Discover the Vikings: Everyday Life, Art and Culture explores the Viking world by examining - among other things ', 25, 'discovervikings.jpeg'),
(38, 1, 3, 'Maori Made Easy', 'Enhance your Maori-language learning with the most reliable - and easiest - resource available. The bestselling Maori Made Easygave learners an accessible and achievable entry into te reo Maori.', 66, 'maorimade easy.jpeg'),
(37, 1, 2, 'A Maori Word a Day', 'A Maori Word a Day offers an easy, instant and motivating entry into the Maori language. Through its 365 Maori words, you will learn the following: - English translations - Word category, notes', 25, 'maori-word-a-day.jpeg'),
(36, 1, 1, 'Instant Maori', 'INSTANT! MAORI is a pocket-sized Maori-English phrase book packed with hundreds of practical and down-to-earth phrases - made easy. Using phonetics, it enables readers to speak correct Maori in seconds.', 50, 'instantmaori.jpg'),
(44, 4, 2, 'Tiger Woods', 'Tiger Woods is a 2018 biography of professional golfer Tiger Woods written by Jeff Benedict and Armen Keteyian. It is the second book co-authored by Benedict and Keteyian, who published The System: The Glory and Scandal of Big-Time College Football in 2013.', 55, 'tigerwoods.jpeg'),
(45, 4, 2, 'Undisputed Truth', 'Love him or loathe him, ‘Iron’ Mike Tyson is an icon and one of the most fascinating sporting figures of our time', 35, 'miketyson.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_no` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `address`, `mobile_no`) VALUES
(1, 'Richard Conway', 'r.conway@qualitybooks.com', '999-999-9999', '999-999-9999'),
(2, 'Mike Ballard', 'm.ballard@qualitybooks.com', '999-999-9999', '999-999-9999'),
(3, 'Peter Russel', 'p.russel@qualitybooks.com', '999-999-9999', '999-999-9999');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `isAdmin` int(1) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `address` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `isAdmin`, `mobileno`, `address`, `status`) VALUES
(1, 'admin', 'admin123', 'Ankur Lakhanpal', 1, 123456789, 'Auckland', 1),
(2, 'Lei', 'song', 'Lei Song', 0, 1234567890, 'unitec auckland', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
