-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2018 at 08:17 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pentagoninterior`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`) VALUES
(1, 'kirigo'),
(2, 'black and white'),
(3, ''),
(4, 'try1'),
(5, 'try2'),
(6, 'try3'),
(7, 'try3'),
(8, 'another try'),
(9, 'try4'),
(10, 'try5'),
(11, 'try6'),
(12, 'try7'),
(13, 'try8'),
(14, 'final try'),
(15, 'fjd'),
(16, 'eiffle'),
(17, ''),
(18, 'test'),
(19, '');

-- --------------------------------------------------------

--
-- Table structure for table `clientimage`
--

CREATE TABLE `clientimage` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientimage`
--

INSERT INTO `clientimage` (`image_id`, `image_name`, `client_id`, `date`) VALUES
(2, '60854-OAOEZX-752.jpg', 14, '0000-00-00'),
(3, '60854-OAOEZX-752 - Copy.jpg', 14, '0000-00-00'),
(4, '61677-OAN4OG-161.jpg', 14, '0000-00-00'),
(5, '60854-OAOEZX-752.jpg', 14, '0000-00-00'),
(6, '60854-OAOEZX-752 - Copy.jpg', 14, '0000-00-00'),
(7, '61677-OAN4OG-161.jpg', 14, '0000-00-00'),
(9, 'IMG-20170504-WA0013.jpg', 14, '0000-00-00'),
(10, 'IMG-20170504-WA0012.jpg', 14, '0000-00-00'),
(15, '60854-OAOEZX-752.jpg', 13, '2018-05-03'),
(16, 'Mjc0ODI4MA.jpeg', 14, '2018-05-03'),
(18, 'children.png', 14, '2018-05-11'),
(19, 'chores.jpg', 14, '2018-05-11'),
(20, 'children.png', 14, '2018-05-11'),
(21, 'chores2.jpg', 14, '2018-05-11'),
(22, 'chore3.jpg', 14, '2018-05-11'),
(23, 'chore3.jpg', 14, '2018-05-11'),
(24, 'chores2.jpg', 14, '2018-05-11'),
(25, 'children.png', 14, '2018-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `designers`
--

CREATE TABLE `designers` (
  `id` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Names` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designers`
--

INSERT INTO `designers` (`id`, `Email`, `Names`) VALUES
(1, 'charleswafula1997@gmail.com', 'Charles');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logo_id` int(11) NOT NULL,
  `logo_name` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `logo_name`, `client_id`) VALUES
(1, 'Black  White 2 Jeu PC - Images vidos astuces et avis.jpg', 6),
(2, 'cycle black and white wallpaper hd black and white wallpaper.jpg', 8),
(3, 'cycle black and white wallpaper hd black and white wallpaper.jpg', 9),
(4, 'cool_peace_sign_heart_banner.jpg', 10),
(5, '2.jpg', 11),
(6, '2.jpg', 12),
(7, '60854-OAOEZX-752 - Copy.jpg', 13),
(8, 'kirigo.jpg', 14),
(9, 'circle.png', 15),
(10, 'Eiffel Tower Black And White Desktop Wallpaper.jpg', 16),
(11, '', 3),
(12, 'chores2.jpg', 18),
(13, '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `maingallery`
--

CREATE TABLE `maingallery` (
  `ID` int(11) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `FileName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maingallery`
--

INSERT INTO `maingallery` (`ID`, `Description`, `FileName`) VALUES
(1, 'This is just a test', 'chore3.jpg'),
(3, 'test for the children', 'chores2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `Names` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Message` text NOT NULL,
  `service` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `Names`, `Email`, `Message`, `service`) VALUES
(1, 'Charles Wafula', 'charleswafula29@gmail.com', 'this website is amaizing', ''),
(7, 'cyprian nyakundi', 'charleswafula29@gmail.com', 'test', 'Wall hanging design');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `project_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `challenge` varchar(255) NOT NULL,
  `solution` varchar(255) NOT NULL,
  `outcome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`project_id`, `client_id`, `year`, `challenge`, `solution`, `outcome`) VALUES
(1, 9, 2018, 'challenge 1', 'sol 1', 'outcome1'),
(2, 10, 2018, 'ch4', 'dn3', 'tu4'),
(3, 11, 2017, 'gh4', 'fh6', 'gjui'),
(4, 12, 2017, 'fjek4', 'fdnse4', 'fdnlsd4'),
(5, 13, 535, 'dgdf', 'ghf', 'fhggrd'),
(6, 14, 2018, 'final try', 'final try', 'final try'),
(7, 15, 4353, 'fgbdtgb', 'fng', 'fndg'),
(8, 16, 2018, 'pic', 'new pics', 'perfect'),
(9, 3, 0, '', '', ''),
(10, 18, 0, 'test', 'test', 'test'),
(11, 3, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonial_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `testimonial` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'charlie', '1234'),
(2, 'Sharon', '1234'),
(3, 'Ruth', 'Ruth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `clientimage`
--
ALTER TABLE `clientimage`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `designers`
--
ALTER TABLE `designers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `maingallery`
--
ALTER TABLE `maingallery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `clientimage`
--
ALTER TABLE `clientimage`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `designers`
--
ALTER TABLE `designers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `maingallery`
--
ALTER TABLE `maingallery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
