-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 01:31 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jackson`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'jackson', 'jackson123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(100) NOT NULL,
  `id_prod` int(100) NOT NULL,
  `nama_prod` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_mem` int(11) NOT NULL,
  `nama_mem` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kode_pos` int(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_mem`, `nama_mem`, `email`, `kota`, `alamat`, `kode_pos`, `password`) VALUES
(1, 'jacksonfernando', 'jackson@gmail.com', 'pekanbaru', 'jln  melur gg nenas no 47', 1234, '22a5d2be57a2eef892f12debd07bb4cc'),
(2, 'beko', 'beko@gmail.com', 'medan', 'jln riau', 1234, '1f9022344615eb644dbf336ba55da23a');

-- --------------------------------------------------------

--
-- Table structure for table `orderhp`
--

CREATE TABLE `orderhp` (
  `id_order` int(100) NOT NULL,
  `id_cart` int(100) NOT NULL,
  `id_mem` int(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kode_pos` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_prod` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `totalharga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderhp`
--

INSERT INTO `orderhp` (`id_order`, `id_cart`, `id_mem`, `kota`, `alamat`, `kode_pos`, `email`, `nama_prod`, `jumlah`, `totalharga`) VALUES
(1, 3, 1, 'pekanbaru', 'jln  melur gg nenas no 47', 1234, 'jackson@gmail.com', 'Galaxy S7', 4, 25600016);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_prod` int(100) NOT NULL,
  `nama_prod` varchar(100) NOT NULL,
  `des_prod` longtext NOT NULL,
  `tipe_prod` varchar(10) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `gambar2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_prod`, `nama_prod`, `des_prod`, `tipe_prod`, `harga`, `gambar`, `gambar2`) VALUES
(1, 'iPhone X', 'These past ten years of iPhones has contributed a lot to the industry\'s development - the capacitive touchscreen, the glass design, the fingerprint scanner, the force press, the portrait mode. We\'ve seen Apple push the envelope each time by putting obscure technological breakthroughs in the hands of millions. And now they\'ve done it yet again.\r\n\r\nThe Face ID. Once a software gimmick, Apple has made it the next-step in biometric security. The company was so sure in its capabilities that it immediately retired the Touch ID. The Face ID sensor also made possible a new level of selfies and incredible accurate facial expression tracking with the Animojis. A little nudge capable of pushing the whole industry.', 'ios', 19500000, 'x-1.png', 'x-2.png'),
(2, 'iPhone 6', 'This is Apple like we\'ve never seen before. Apple like we never thought we\'ll see. To begin with, there\'s supposed to be no better iPhone than the iPhone 6. That\'s the sort of thing you\'d expect of Apple. Come September every year, the world grabs a bag of popcorn and gets ready to watch Apple\'s bestest iPhone yet come on stage in all its glory.\r\n\r\nThat\'s what we did too, minus the popcorn, which by the way would\'ve had nothing to do with the bitter aftertaste the presentation left. And no, we don\'t mean Apple\'s live streaming blunder.\r\n\r\nThings actually started off nicely with the announcement of the long overdue screen size bump, and we didn\'t get a cheaper option this time - we were treated to possibly a bigger, better iPhone to go with the best iPhone to date. How Apple - it takes another iPhone to beat the iPhone.', 'ios', 6000000, '6-11.png', '6-21.png'),
(3, 'iPhone 7', 'The iPhone 7 is in many ways a better phone. We can see some of the issues we had with the last iPhone sorted and, no, we are not claiming credit for it - simply acknowledging the fact.\r\n\r\nWaterproofing, stereo speakers and, finally, reasonable storage options - and that\'s on top of the usual performance upgrades we\'ve come to take for granted every year. Think this is the story of the iPhone 7? Apple\'s first water-resistant handset, first quad-core processor, first pair of stereo speakers on a phone.\r\n\r\nNot trying to build suspense. The story has been hijacked and you know it. But we\'re going to tell it anyway.', 'ios', 8000000, '7-1.png', '7-2.png'),
(4, 'Galaxy S8', 'This year\'s phones both feature the signature Samsung curved screens. Ever so subtle and nothing like the Note Edge that started it all. Evolution.\r\nThis very much finite Infinity display is what makes the headlines, but it\'s not without a consequence. The Home button is history - in its place an onscreen navigation bar, the fingerprint sensor relocated, the pressing sensation emulated (sort of) by haptic flutter.\r\n\r\nThe screen aside, there\'s the habitual bump in processing power, courtesy of a brand new 10nm chip - be it Samsung\'s own Exynos, or Qualcomm\'s Snapdragon (still manufactured by Samsung). RAM has stood still at 4GB (though certain regions may get a 6GB version), and an 8MP autofocus front-facing camera replaces the 5MP fixed-focus shooters that were around for far too long on the company\'s flagships.', 'android', 10500000, 's8-1.png', 's8-2.png'),
(5, 'Galaxy S7', 'The Galaxy S7 marks the return of the microSD slot and water-proofing, and while the battery is still sealed (which doesn\'t seem likely to change going forward), Samsung has been a lot more generous with the capacity for this generation.\r\n\r\nGalaxy flagships have always led the way when it comes to imaging, their cameras always being among the top performers in the market. This time around, Samsung went backwards to play a different game of numbers: fewer but larger pixels, all 12 million of them capable of phase detection. Lightning-fast autofocus is the promise, and we\'ve already seen the S7 deliver on it.\r\n\r\nAMOLED has long since shaken off the stigma of being all punch and no precision, to actually bring the best of both worlds. The Always On displays are all the rage this season, and being able to light up individual pixels has always made this specific technology inherently suited for the job. \"Why so late?\" is probably the question to be answered.', 'android', 6400004, 's7-1.png', 's7-2.png'),
(6, 'Galaxy S6', 'The Samsung Galaxy S6 is not the next big thing. It\'s \"project zero\". The reboot. But was there really anything wrong with the S-line - the standard-setter, the home of the super droids? OK, design needed looking at for sure. But hey, other brands do facelifts - Samsung goes for a complete overhaul.\r\n\r\nThis must\'ve been the message they wanted to send.\r\n\r\nAnd if it means giving up the memory card slot, the removable battery and the waterproofing, so be it. That\'s part of the message too.\r\n\r\nAnyway, the Galaxy S6 was redone from scratch and bids farewell to plastic. Glass and metal is a critically acclaimed combination. Another way of saying it is - depending on how upset you are with the missing card slot and sealed battery - they\'re copying Apple and Sony. Alright, memory, battery and waterproofing are easy things to get upset about, so let\'s see what the Samsung Galaxy S6 offers in exchange.\r\n\r\nThe new look is impressive and exciting and Samsung\'s trademark AMOLED is the perfect match. It\'s an immersive 5.1 incher of QHD resolution, for the amazing 577ppi - though \"amazing\" doesn\'t work for Samsung. They\'ll call it \"the best ever\" - and will be right. And that\'s just the beginning.', 'android', 5500000, 's6-1.png', 's6-2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_mem`);

--
-- Indexes for table `orderhp`
--
ALTER TABLE `orderhp`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_mem` (`id_mem`),
  ADD KEY `id_mem_2` (`id_mem`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_mem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderhp`
--
ALTER TABLE `orderhp`
  MODIFY `id_order` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_prod` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`id_prod`) REFERENCES `produk` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderhp`
--
ALTER TABLE `orderhp`
  ADD CONSTRAINT `fk_mem` FOREIGN KEY (`id_mem`) REFERENCES `member` (`id_mem`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
