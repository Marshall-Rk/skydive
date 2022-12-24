-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 06:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paragliding`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `heading` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `review_text` varchar(222) NOT NULL,
  `username` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `heading`, `description`, `review_text`, `username`) VALUES
(1, 'We Have 16 Years of Experience in Skydiving & Paragliding', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore', 'marshall');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `date`) VALUES
(1, 'om@admin.com', 'omadmin', '2022-11-25 16:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `heading` varchar(222) NOT NULL,
  `image` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `tags` varchar(222) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `heading`, `image`, `description`, `tags`, `added_on`) VALUES
(2, 'Rajkamal', 'Tips & Trick First Time Skydiving', 'om.6386343f45f43.jpg', 'Proin ullamcorper pretium orci. Donec nec scelerisque leo. Nam massa dolor, imperdiet nec consequat a, congue id sem. Maecenas malesuada faucibus finibus. Donec vitae libero porttitor, laoreet sapien a, ultrices leo. Duis ', '#ttschool', '2022-11-29 22:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(222) NOT NULL,
  `last_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `mobile` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `booked_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `heading` varchar(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `prerequisite` varchar(222) NOT NULL,
  `ground_training` varchar(222) NOT NULL,
  `flight_training` varchar(222) NOT NULL,
  `theory_exam` varchar(222) NOT NULL,
  `duration` varchar(222) NOT NULL,
  `pilot_rating` varchar(222) NOT NULL,
  `next_level` varchar(222) NOT NULL,
  `course_fee_1` varchar(222) NOT NULL,
  `package_includes_1` varchar(222) NOT NULL,
  `course_fee_2` varchar(222) NOT NULL,
  `package_includes_2` varchar(222) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `heading`, `title`, `description`, `prerequisite`, `ground_training`, `flight_training`, `theory_exam`, `duration`, `pilot_rating`, `next_level`, `course_fee_1`, `package_includes_1`, `course_fee_2`, `package_includes_2`, `date`) VALUES
(2, 'P1 Paragliding Pilot Course', 'Kick-start your paragliding journey', 'P1 Paragliding Pilot Course is your first step towards free flying. Paragliding is a practicing sport hence major part of this course is dedicated to ground training. The highlight of the course is your first solo flight u', 'Age 16 years and above, basic physical fitness and positive attitude', 'Introduction to canopy and equipment Parchute Landing Fall (PLF) demo and practice Forward / Alpine launch method Ground handling Directional control', 'Site assessment First hops (low level flights) Maintaining course and airspeed Introducing turns Landing procedure', 'Principles of flight Basic Meteorology Rules of the air Video sessions P1 Pilot Examination', '3 days', 'P1 Pilot', 'P2', '₹ 16,000 + GST @18%', ' Instruction Equipment usage Course Material Food, accommodation and transportation not included.', '₹ 18,000 + GST @18%', 'Instruction Equipment usage Course Material Site Transport Food (at our base) Accommodation (3 days including 2 nights at our base)', '2022-12-03 19:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `course_enquiry`
--

CREATE TABLE `course_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `gender` varchar(222) NOT NULL,
  `mobile` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `age` varchar(222) NOT NULL,
  `city` varchar(222) NOT NULL,
  `country` varchar(222) NOT NULL,
  `date` varchar(222) NOT NULL,
  `course_type` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `booked_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_enquiry`
--

INSERT INTO `course_enquiry` (`id`, `name`, `gender`, `mobile`, `email`, `age`, `city`, `country`, `date`, `course_type`, `message`, `booked_at`) VALUES
(1, 'Rajkamal', 'male', '9525874589', 'rajkamal@gmail.com', '22', 'Mumbai', 'India', '2022-12-15', 'P2 Paragliding Pilot Course', 'no', '2022-12-03 23:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `total_clients` varchar(222) NOT NULL,
  `branch` varchar(222) NOT NULL,
  `years` varchar(222) NOT NULL,
  `team_members` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `total_clients`, `branch`, `years`, `team_members`) VALUES
(1, '1555', '5', '17', '12');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(222) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `date`) VALUES
(1, '638346dfa4e8a-GOPR2658_649453370_9969960-circle.jpeg', '2022-11-27 16:45:43'),
(3, '63863149ad93f-1.jpg', '2022-11-29 21:50:25'),
(4, '63863149aec36-2.jpg', '2022-11-29 21:50:25'),
(5, '63863149af3ad-3.jpg', '2022-11-29 21:50:25'),
(6, '63863149b00b0-5.jpg', '2022-11-29 21:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `tagline` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `title`, `tagline`, `description`) VALUES
(1, 'We are TT School Of Paragliding', 'Those who dont jump', 'sss Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur mus.\"');

-- --------------------------------------------------------

--
-- Table structure for table `joyride`
--

CREATE TABLE `joyride` (
  `id` int(11) NOT NULL,
  `heading` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `image` varchar(222) NOT NULL,
  `flight_time` varchar(222) NOT NULL,
  `passenger_age` varchar(222) NOT NULL,
  `passenger_weight` varchar(222) NOT NULL,
  `price` varchar(222) NOT NULL,
  `video_recording` varchar(222) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subscribed_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `subscribed_at`) VALUES
(1, 'raj@gmail.com', '2022-11-25 19:15:14'),
(2, 'test@gmail.com', '2022-11-27 12:31:08'),
(3, 'test222@rai.net.in', '2022-11-29 20:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `image` varchar(222) NOT NULL,
  `designation` varchar(222) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `type` varchar(222) NOT NULL,
  `image` varchar(222) NOT NULL,
  `review` varchar(222) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` int(11) NOT NULL,
  `visits` varchar(222) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `visits`, `date`) VALUES
(1, '6', '2022-11-29 21:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `why_us`
--

CREATE TABLE `why_us` (
  `id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `why_us`
--

INSERT INTO `why_us` (`id`, `title`, `description`) VALUES
(1, 'Professional Skydiving & Paragliding You Can Trustt', 'description');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_enquiry`
--
ALTER TABLE `course_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joyride`
--
ALTER TABLE `joyride`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_us`
--
ALTER TABLE `why_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_enquiry`
--
ALTER TABLE `course_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `joyride`
--
ALTER TABLE `joyride`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_us`
--
ALTER TABLE `why_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
