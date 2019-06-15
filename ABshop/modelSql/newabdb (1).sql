-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2019 at 01:56 PM
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
  `clothing_xxl` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothing`
--

INSERT INTO `clothing` (`clothing_id`, `clothing_name`, `clothing_description`, `clothing_image`, `clothing_image1`, `clothing_image2`, `clothing_image3`, `clothing_image4`, `clothing_image5`, `clothing_category`, `clothing_style`, `clothing_price`, `clothing_colour`, `clothing_xxs`, `clothing_xs`, `clothing_s`, `clothing_m`, `clothing_l`, `clothing_xl`, `clothing_xxl`) VALUES
(1, 'Black Suit', 'Black Suit', 'image/AB04.png', 'image/AB04.png', 'image/AB04.png', 'image/AB04.png', 'image/AB04.png', 'image/AB04.png', 'Suit', 'classy', '4500', 'Black', 1, 1, 4, 5, 4, 4, 2),
(2, 'Tshirt ', 'Tshirt ', 'image/AB09.png', 'image/AB09.png', 'image/AB09.png', 'image/AB09.png', 'image/AB09.png', 'image/AB09.png', 'T-shirt', 'V-Neck', '250', 'white', 1, 1, 2, 2, 4, 3, 1),
(3, 'test', 'test', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'T-shirt', 'Round-Neck', '250', 'test', 1, 1, 1, 1, 1, 1, 1),
(4, 'test2', 'test2', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'T-shirt', 'Round-Neck', '250', 'test2', 1, 1, 1, 1, 1, 1, 1),
(5, 'test', 'test', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'T-shirt', 'Round-Neck', '250', 'test', 1, 1, 1, 1, 1, 1, 1),
(6, 'test2', 'test2', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'image/AB10.png', 'T-shirt', 'Round-Neck', '250', 'test2', 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `clothing_user`
--

CREATE TABLE `clothing_user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothing_user`
--

INSERT INTO `clothing_user` (`user_id`, `user_username`, `user_password`, `user_name`) VALUES
(1, 'adish', 'adish', 'Balkissoon Adish');

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
(1, 1, 1, 'full body workout'),
(2, 1, 1, 'full body workout part 2');

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
  `user_code` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout_user`
--

INSERT INTO `workout_user` (`user_id`, `user_username`, `user_password`, `user_phoneNum`, `user_firstname`, `user_lastname`, `user_email`, `user_code`) VALUES
(1, 'adish', 'adish', '599999999', 'Adish', 'Balkissoon', 'adish.balkissoon@gmail.com', 123456);

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workout_plan`
--
ALTER TABLE `workout_plan`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workout_user`
--
ALTER TABLE `workout_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `workout_plan`
--
ALTER TABLE `workout_plan`
  ADD CONSTRAINT `plan_video_id` FOREIGN KEY (`plan_video_id`) REFERENCES `workout_video` (`video_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
