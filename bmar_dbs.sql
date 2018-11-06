-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 02:25 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmar_dbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `adminid` varchar(10000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminid`, `password`) VALUES
(1, 'bmartcompany', '11082016');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `category` varchar(10000) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `description`) VALUES
(1, 'Lehenga', 'Weddings are all about fun, frolic and of course, FASHION! Wedding galas are incomplete without shimmery lehengas, ravishing sarees and sparkling jewellery. When all the women are busy looking their best, luxurious lehengas will make it easier for you to make a fashion statement. With exquisite embroidery, fabulous fabrics and vibrant shades, putting together a royal look was never this easy. At Voonik, we bring you collections that will blow your mind. If you are looking forward to looking like a diva, lehengas are the secret you need to know. So get prepared for gushing compliments and envious looks as you take the world by storm on the D-day!'),
(3, 'Saaree', 'ou can never go wrong with Sarees. These timeless classics will give your fashion a whole new dimension. Be it a glamorous evening spent with friends or some quality time shared with family, these gorgeous drapes will make you the centre of all attention. There is always a wide variety to choose from, be it sheer chiffon sarees or classic cotton weaves, any style can take your everyday look a notch higher. And the biggest good news is you can get your hands on these vibrant beauties right from your couch, all thanks to online shopping! So without further ado, add these lovelies to your wardrobe!'),
(4, 'Dresses', 'Ever wondered how to bring out that girlie side of you? Well, fret not as dresses can be your ideal partner as you gear up for the pretty parade. Take your pick from fit and flares, body cons, floral maxis, playful skater dresses and more to put together a chic look. From college fresher parties to those Saturday night-outs, these versatile oh-so-girly pieces will give you a glam makeover in no time. And with online shopping searching for pretty dresses is now a piece of cake. Itâ€™s never too late to play dress up, so get started now!'),
(5, 'Suits', 'This has always been a wardrobe favourite. Elegant styles, minimal designs and ultimate comfort makes this tailor-made piece an everyday staple. This traditional piece of clothing will spoil you with itâ€™s varieties, from itâ€™s straight-cut styles to anarkalis to glamorous suits suited for all occasions. You can turn to floral kurtas for a touch of romance or Aztec printed basics for some old-world charm. Take a cue from evergreen solid styles and look simple but sophisticated in no time. With designs that will never fail to flatter you, kurtas can up your fashion game at a momentâ€™s notice. At Voonik, we bring you the best of the styles at jaw dropping prices. So sit back, relax and let your perfect Kurtis buy online find you, through us!');

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `id` int(255) NOT NULL,
  `name` varchar(5555) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`id`, `name`, `uname`, `pass`, `gender`, `mobile`, `address`) VALUES
(1, 'bhavna sIindhwani', 'bhavna_sindhwani@bmart.com', '123456', 'on', 2147483647, 'ghnbvmjhnbj'),
(2, 'abhi', 'abc@bmart.com', '12345', 'on', 2147483647, 'cnxcb x');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `uname` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `product` varchar(1000) NOT NULL,
  `Delivery_date` date NOT NULL,
  `booking_date` date NOT NULL,
  `price` int(255) NOT NULL,
  `address` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `product` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `color` varchar(1000) NOT NULL,
  `price` int(255) NOT NULL,
  `rent price` int(255) NOT NULL,
  `ocassion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `product`, `image`, `color`, `price`, `rent price`, `ocassion`) VALUES
(2, 'Saaree', 'Traditional Pink-blue Saaree', '_20180330_134835.jpg', 'blue', 5500, 2000, 'Wedding'),
(4, 'Saaree', 'Printed Bollywood georgette Saaree', '_20180330_135443.jpg', 'Blue', 900, 0, 'Work Wear'),
(5, 'Saaree', 'Elegant Saaree', '_20180330_135457.jpg', 'Green', 1500, 0, 'Fancy'),
(6, 'Saaree', 'Pinkish-Orange Shiffon Net Saaree ', '_20180330_135532.jpg', 'Pink', 2000, 0, 'Fancy'),
(7, 'Saaree', 'Printed Black & White Saaree', '_20180330_135552.jpg', 'White', 2000, 0, 'Select'),
(8, 'Saaree', 'Black Stones Saaree', '_20180330_135601.jpg', 'Black', 1500, 0, 'Party Wear'),
(9, 'Saaree', 'Lace worked Saaree', '_20180330_135617.jpg', 'Red', 2500, 1000, 'Wedding'),
(10, 'Saaree', 'Beautiful Georgette saaree', '_20180330_135628.jpg', 'Blue', 1800, 0, 'Party Wear'),
(11, 'Saaree', 'Square Dots Saaree', '_20180330_140735.jpg', 'Brown', 1000, 0, 'Party Wear'),
(12, 'Saaree', 'Flower Border Saaree', '_20180330_140745.jpg', 'Pink', 2000, 0, 'Fancy'),
(13, 'Saaree', 'Silk Saaree with White Fall', '_20180330_142138.jpg', 'Pink', 2000, 1000, 'Fancy'),
(14, 'Saaree', 'Indian Tradtional Lehenga-Saaree', '_20180330_142155.jpg', 'Blue', 1500, 0, 'Wedding'),
(15, 'Dresses', 'Beautiful skirt-top', '_20180330_145132.jpg', 'blue & white', 1500, 0, 'Party Wear'),
(16, 'Dresses', 'Floral Print Dress', '_20180330_145143.jpg', 'Blue', 2000, 0, 'Fancy'),
(17, 'Dresses', 'Party Dress', '_20180330_145156.jpg', 'Red', 1200, 0, 'Party Wear'),
(18, 'Dresses', 'Yellow hoseiry Dress', '_20180330_145206.jpg', 'Yellow', 1500, 0, 'Fancy'),
(19, 'Dresses', 'Shoulder Cut Black Dress', '_20180330_145409.jpg', 'Black', 1200, 0, 'Party Wear'),
(20, 'Lehenga', 'Designer Blue Lehenga', 'IMG_1522405448811.jpeg', 'Blue', 2000, 1000, 'Party Wear'),
(21, 'Lehenga', 'bridal lehenga', 'IMG_1522405517002.jpeg', 'Red', 2500, 1800, 'Wedding'),
(22, 'Lehenga', 'Floral Print Party Wear lehenga', 'IMG_1522405528347.jpeg', 'White', 1800, 0, 'Fancy'),
(23, 'Suits', 'Anarkali Style Suit', '_20180330_153532.jpg', 'Green', 1500, 0, 'Fancy'),
(24, 'Suits', 'straight Suit For Ladies', '_20180330_153544.jpg', 'Pink', 1200, 0, 'Work Wear'),
(25, 'jeans', 'wajdxnbcsaj', 'IMG_1522405815954.jpeg', 'Green', 122, 521, 'Party Wear');

-- --------------------------------------------------------

--
-- Table structure for table `querry`
--

CREATE TABLE `querry` (
  `Id` int(255) NOT NULL,
  `Name` mediumtext NOT NULL,
  `Email` mediumtext NOT NULL,
  `Query` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `querry`
--
ALTER TABLE `querry`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `querry`
--
ALTER TABLE `querry`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
