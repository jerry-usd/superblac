-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 11:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superblac`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hw`
--

CREATE TABLE `hw` (
  `id` int(11) NOT NULL,
  `lid` varchar(300) NOT NULL,
  `f1` varchar(300) NOT NULL,
  `f2` varchar(200) NOT NULL,
  `f3` varchar(200) NOT NULL,
  `f4` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hw`
--

INSERT INTO `hw` (`id`, `lid`, `f1`, `f2`, `f3`, `f4`) VALUES
(1, '1', 'Swimming poo', 'Jacuzzi', 'Modern sanitary ware', 'All bedroom en-suite and spacious');

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `type` varchar(90) NOT NULL,
  `category` varchar(80) NOT NULL,
  `price` varchar(200) NOT NULL,
  `location` varchar(70) NOT NULL,
  `details` mediumtext NOT NULL,
  `date` varchar(79) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) NOT NULL,
  `image4` varchar(200) NOT NULL,
  `image5` varchar(200) NOT NULL,
  `image6` varchar(200) NOT NULL,
  `image7` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `name`, `type`, `category`, `price`, `location`, `details`, `date`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`) VALUES
(1, 'Luxury 5bedroom detached duplex', 'sale', 'fully detached duplex', '150 M', '2nd Toll Gate Lekki Lagos', '\n	<p>Features:</p><p>All bedroom en-suite and spacious,</p><p>24hrs security network,</p><p>Swimming pool,</p><p>Modern sanitary ware,</p><p>Jacuzzi,</p><p>Soaking bath tub,</p><p>Modern wc,</p><p>Excellent investment,</p><p>High rental and resale value,</p><p>Great value for your money,</p><p>Fitted kitchen with professional appliances like oven,microwave,gas cook burner,electric hot plate,heat extractor,water heater, stainless sink, bright lighting, and lot of cabinetry storage spaces.</p><p>Family lounge,</p><p>Owner’s suite features ample space, soaking bath tub,walk-in closet, walk-in glass shower.</p><p>High appreciation value,</p><p>Excellent road network in the estate</p>', '2021-11-19 14:21:40', '11148606987_3628143883967072_1252787083116455370_n.jpg', '38Screenshot 2021-11-19 141805.jpg', '36Screenshot 2021-11-19 141742.jpg', '75Screenshot 2021-11-19 141718.jpg', '10Screenshot 2021-11-19 141654.jpg', '2Screenshot 2021-11-19 141620.jpg', ''),
(2, 'Luxury 5bedroom detached duplex', 'sale', 'fully detached duplex', '80 M', 'Lekki Lagos', '<p>Features:</p><p>All bedroom en-suite and spacious,</p><p>24hrs security network,</p><p>Swimming pool,</p><p>Modern sanitary ware,</p><p>Jacuzzi,</p><p>Soaking bath tub,</p><p>Modern wc,</p><p>Excellent investment,</p><p>High rental and resale value,</p><p>Great value for your money,</p><p>Fitted kitchen with professional appliances like oven,microwave,gas cook burner,electric hot plate,heat extractor,water heater, stainless sink, bright lighting, and lot of cabinetry storage spaces.</p><p>Family lounge,</p><p>Owner’s suite features ample space, soaking bath tub,walk-in closet, walk-in glass shower.</p><p>High appreciation value,</p><p>Excellent road network in the estate</p>', '2021-11-19 14:24:47', '11148606987_3628143883967072_1252787083116455370_n.jpg', '', '', '', '', '', ''),
(3, 'Luxury 4bedroom detached duplex', 'sale', 'fully detached duplex', '90 M', '2nd Toll Gate Lekki Lagos', '<p>Features:</p><p>All bedroom en-suite and spacious,</p><p>24hrs security network,</p><p>Swimming pool,</p><p>Modern sanitary ware,</p><p>Jacuzzi,</p><p>Soaking bath tub,</p><p>Modern wc,</p><p>Excellent investment,</p><p>High rental and resale value,</p><p>Great value for your money,</p><p>Fitted kitchen with professional appliances like oven,microwave,gas cook burner,electric hot plate,heat extractor,water heater, stainless sink, bright lighting, and lot of cabinetry storage spaces.</p><p>Family lounge,</p><p>Owner’s suite features ample space, soaking bath tub,walk-in closet, walk-in glass shower.</p><p>High appreciation value,</p><p>Excellent road network in the estate</p>', '2021-11-19 14:25:06', '11148606987_3628143883967072_1252787083116455370_n.jpg', '', '', '', '', '', ''),
(4, 'Luxury 4bedroom detached duplex', 'sale', 'fully detached duplex', '140 M', '2nd Toll Gate Lekki Lagos', '<p>Features:</p><p>All bedroom en-suite and spacious,</p><p>24hrs security network,</p><p>Swimming pool,</p><p>Modern sanitary ware,</p><p>Jacuzzi,</p><p>Soaking bath tub,</p><p>Modern wc,</p><p>Excellent investment,</p><p>High rental and resale value,</p><p>Great value for your money,</p><p>Fitted kitchen with professional appliances like oven,microwave,gas cook burner,electric hot plate,heat extractor,water heater, stainless sink, bright lighting, and lot of cabinetry storage spaces.</p><p>Family lounge,</p><p>Owner’s suite features ample space, soaking bath tub,walk-in closet, walk-in glass shower.</p><p>High appreciation value,</p><p>Excellent road network in the estate</p>', '2021-11-19 14:25:23', '11148606987_3628143883967072_1252787083116455370_n.jpg', '', '', '', '', '', ''),
(5, 'Luxury 4bedroom Semi detached duplex', 'sale', 'fully detached duplex', '140 M', '2nd Toll Gate Lekki Lagos', '<p>Features:</p><p>All bedroom en-suite and spacious,</p><p>24hrs security network,</p><p>Swimming pool,</p><p>Modern sanitary ware,</p><p>Jacuzzi,</p><p>Soaking bath tub,</p><p>Modern wc,</p><p>Excellent investment,</p><p>High rental and resale value,</p><p>Great value for your money,</p><p>Fitted kitchen with professional appliances like oven,microwave,gas cook burner,electric hot plate,heat extractor,water heater, stainless sink, bright lighting, and lot of cabinetry storage spaces.</p><p>Family lounge,</p><p>Owner’s suite features ample space, soaking bath tub,walk-in closet, walk-in glass shower.</p><p>High appreciation value,</p><p>Excellent road network in the estate</p>', '2021-11-19 14:25:44', '11148606987_3628143883967072_1252787083116455370_n.jpg', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hw`
--
ALTER TABLE `hw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hw`
--
ALTER TABLE `hw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
