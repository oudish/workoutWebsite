-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2019 at 03:02 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newabdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothing`
--

CREATE TABLE `clothing` (
  `clothing_id` int(11) NOT NULL,
  `clothing_name` varchar(255) DEFAULT NULL,
  `clothing_description` varchar(255) DEFAULT NULL,
  `clothing_image` varchar(255) DEFAULT NULL,
  `clothing_image1` varchar(255) DEFAULT NULL,
  `clothing_image2` varchar(255) DEFAULT NULL,
  `clothing_image3` varchar(255) DEFAULT NULL,
  `clothing_image4` varchar(255) DEFAULT NULL,
  `clothing_image5` varchar(255) DEFAULT NULL,
  `clothing_category` varchar(255) DEFAULT NULL,
  `clothing_style` varchar(255) DEFAULT NULL,
  `clothing_price` varchar(255) DEFAULT NULL,
  `clothing_colour` varchar(255) DEFAULT NULL,
  `clothing_xxs` int(11) DEFAULT NULL,
  `clothing_xs` int(11) DEFAULT NULL,
  `clothing_s` int(11) DEFAULT NULL,
  `clothing_m` int(11) DEFAULT NULL,
  `clothing_l` int(11) DEFAULT NULL,
  `clothing_xl` int(11) DEFAULT NULL,
  `clothing_xxl` int(11) DEFAULT NULL,
  `clothing_size` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothing`
--

INSERT INTO `clothing` (`clothing_id`, `clothing_name`, `clothing_description`, `clothing_image`, `clothing_image1`, `clothing_image2`, `clothing_image3`, `clothing_image4`, `clothing_image5`, `clothing_category`, `clothing_style`, `clothing_price`, `clothing_colour`, `clothing_xxs`, `clothing_xs`, `clothing_s`, `clothing_m`, `clothing_l`, `clothing_xl`, `clothing_xxl`, `clothing_size`) VALUES
(1, 'Black Suit', 'Black Suit', 'image/AB04.png', 'image/AB04.png', 'image/AB04.png', 'image/AB04.png', 'image/AB04.png', 'image/AB04.png', 'Suit', 'classy', '4500', 'Black', 1, 1, 4, 5, 4, 4, 2, NULL),
(2, 'Tshirt ', 'Tshirt ', 'image/AB09.png', 'image/AB09.png', 'image/AB09.png', 'image/AB09.png', 'image/AB09.png', 'image/AB09.png', 'T-shirt', 'V-Neck', '250', 'white', 1, 1, 2, 2, 4, 3, 1, NULL),
(3, 'test', 'test', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'T-shirt', 'Round-Neck', '250', 'test', 1, 1, 1, 1, 1, 1, 1, NULL),
(4, 'test2', 'test2', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'T-shirt', 'Round-Neck', '250', 'test2', 1, 1, 1, 1, 1, 1, 1, NULL),
(5, 'test', 'test', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'T-shirt', 'Round-Neck', '250', 'test', 1, 1, 1, 1, 1, 1, 1, NULL),
(6, 'test2', 'test2', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'T-shirt', 'Round-Neck', '250', 'test2', 1, 1, 1, 1, 1, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clothing_user`
--

CREATE TABLE `clothing_user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_firstname` varchar(255) DEFAULT NULL,
  `user_lastname` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_phoneNum` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothing_user`
--

INSERT INTO `clothing_user` (`user_id`, `user_username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_phoneNum`) VALUES
(1, 'adish', 'adish', 'Adish', 'Balkissoon', 'oudish.misrylall4614@gmail.com', '57733091'),
(2, 'ashni', '$2y$10$wU7FBwEX3mb/P5/ZdBo0LuxzmXxX7fZWWLP.04CFv/oNcV5R863r2', 'ashni', 'ashni', 'ashni@gmail.com', 'ashni'),
(3, 'testing', '$2y$10$2yeTmuAAHzewIfLrsE4pmO2jUP9TjscljKjpjxDHjuhsXG35g08Km', 'testing', 'testing', 'testing@testing.com', 'testing'),
(4, 'asdasd', '$2y$10$t1qNcUGrFVkXGu8Kz2yBNe9JBOSVXl3ND2GadNt2gU11G/KVtZEJy', 'asdasd', 'asdasd', 'asd@sd.com', 'asdasd'),
(5, 'asd', '$2y$10$aavjev5cUF6dvu2Wy1rKpOxuWGv3xrUezt.1POE.vOZWAirjtL3xO', 'asd', 'asd', 'asd@asd', 'asd'),
(6, 'asd', '$2y$10$gP8cXxejDEVY8u/j31hvxu.dsJ9hFwPA8ZpUpuEUbt6syrvOgwSza', 'asd', 'asd', 'asd@asd', 'asd'),
(7, 'asd', '$2y$10$xl2FIjLlHnywckfG.L0.eOJejZALrZFoyLPdoJgexLngfTAA1B.na', 'asd', 'asd', 'asd@sdf', 'asd'),
(8, 'asd', '$2y$10$1iUOM2emFrZi7uT29y8MFuLzRhcuYM7nXRlJUpVCK.EHWhveW7YaW', 'asd', 'asd', 'asd@sd', 'asd'),
(9, 'aS', '$2y$10$FICB6S4z8c1pS7pMRZNGQehKrU2TErg.unbillBJNg2LDKXRCN7wK', 'aS', 'aS', 'As@asd', 'aS'),
(10, 's', '$2y$10$RGfcjKxPTF8Bo95chM9H7uIr4AH.o4CG7tYkxU6Z3cROlq2rv8YGy', 's', 's', '', 's'),
(11, 'test', '$2y$10$hdPtfmDNoOznmK8ywfsgQunYJoxYx33kOsluy1qAM6B2ZPPu25/8y', 'test', 'test', 'test@test.com', 'test'),
(12, 'aaa', '$2y$10$tY835rquPUSFIhhfsgJC.uhtiWCULfsmgqMcmjAxYJJtpnFrS6gi2', 'aaa', 'aaa', 'aaa@aaa.com', 'aaa'),
(13, 'sdf', '$2y$10$iNPO1WF2EYKi/n6wfN9kdeqi1quuYae9J6GJfrn.Io9aLNN2Ydm1a', 'sdf', 'sdf', 'sdf@asd.com', 'sdf'),
(14, 'asd', '$2y$10$.NifGFthEeN2E1QrkC58HeHEXm8Y.Znb81OVafTL0yGjeGQIW0Ydq', 'asd', 'asd', 'asd@sad.com', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `workout_plan`
--

CREATE TABLE `workout_plan` (
  `plan_id` int(11) NOT NULL,
  `plan_week` int(11) DEFAULT NULL,
  `plan_day` int(11) DEFAULT NULL,
  `plan_video_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout_plan`
--

INSERT INTO `workout_plan` (`plan_id`, `plan_week`, `plan_day`, `plan_video_id`) VALUES
(1, 1, 1, 'video/ABworkout.mp4'),
(2, 1, 2, 'video/ABworkout.mp4'),
(3, 1, 1, 'video/ABworkout.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `workout_user`
--

CREATE TABLE `workout_user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_phoneNum` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_code` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout_user`
--

INSERT INTO `workout_user` (`user_id`, `user_username`, `user_password`, `user_phoneNum`, `user_firstname`, `user_lastname`, `user_email`, `user_code`) VALUES
(1, 'adish', 'adish', '599999999', 'Adish', 'Balkissoon', 'oudish.misrylall4614@gmail.com', 711701);

-- --------------------------------------------------------

--
-- Table structure for table `workout_video`
--

CREATE TABLE `workout_video` (
  `video_id` varchar(255) NOT NULL,
  `video_title` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout_video`
--

INSERT INTO `workout_video` (`video_id`, `video_title`, `video_url`) VALUES
('full body workout', 'full body workout', 'video/ABworkout.mp4'),
('full body workout part 2', 'full body workout part 2', 'video/ABworkout.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothing`
--
ALTER TABLE `clothing`
  ADD PRIMARY KEY (`clothing_id`);

--
-- Indexes for table `clothing_user`
--
ALTER TABLE `clothing_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `workout_plan`
--
ALTER TABLE `workout_plan`
  ADD PRIMARY KEY (`plan_id`),
  ADD KEY `plan_video_id` (`plan_video_id`);

--
-- Indexes for table `workout_user`
--
ALTER TABLE `workout_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `workout_video`
--
ALTER TABLE `workout_video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clothing`
--
ALTER TABLE `clothing`
  MODIFY `clothing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clothing_user`
--
ALTER TABLE `clothing_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `workout_plan`
--
ALTER TABLE `workout_plan`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `workout_user`
--
ALTER TABLE `workout_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
