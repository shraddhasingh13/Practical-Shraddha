-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 02:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practical_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `st_event`
--

CREATE TABLE `st_event` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(200) NOT NULL,
  `event_start_date` date NOT NULL,
  `event_repeat_every` int(11) NOT NULL,
  `event_repeat_type` varchar(10) NOT NULL,
  `event_repeat_on` varchar(30) DEFAULT NULL,
  `event_end_type` varchar(10) NOT NULL,
  `event_end_date` date DEFAULT NULL,
  `event_occurence` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `st_event`
--

INSERT INTO `st_event` (`event_id`, `event_title`, `event_start_date`, `event_repeat_every`, `event_repeat_type`, `event_repeat_on`, `event_end_type`, `event_end_date`, `event_occurence`) VALUES
(1, 'Event 1', '2021-09-01', 1, 'Day', '1-Day', 'On', '2021-09-10', 0),
(2, 'Event 2', '2021-09-01', 2, 'Day', '2-Day', 'After', '0000-00-00', 5),
(3, 'Event 3', '2021-09-01', 1, 'Week', '1-Week|Monday,Tuesday', 'On', '2021-09-30', 0),
(5, 'Event 4', '2021-09-10', 2, 'Week', '2-Week|Monday,Tuesday', 'After', '0000-00-00', 3),
(6, 'Event 5', '2021-09-10', 1, 'Week', '1-Week|Monday,Tuesday', 'After', '0000-00-00', 3),
(7, 'Event 5', '2021-09-10', 1, 'Week', '1-Week|Monday,Tuesday', 'After', '0000-00-00', 3),
(8, 'Event 6', '2021-09-10', 1, 'Week', '1-Week|Monday,Tuesday', 'After', '0000-00-00', 3),
(9, 'Event 7', '2021-09-10', 1, 'Week', '1-Week|Monday,Tuesday', 'After', '0000-00-00', 4),
(10, 'Event 8', '2021-09-11', 1, 'Week', '1-Week|Tuesday,Wednesday', 'After', '0000-00-00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `st_event_recurrence`
--

CREATE TABLE `st_event_recurrence` (
  `event_recurr_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `event_day` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `st_event_recurrence`
--

INSERT INTO `st_event_recurrence` (`event_recurr_id`, `event_id`, `start_date`, `event_day`) VALUES
(1, 1, '2021-09-01', 'Wednesday'),
(2, 1, '2021-09-02', 'Thursday'),
(3, 1, '2021-09-03', 'Friday'),
(4, 1, '2021-09-04', 'Saturday'),
(5, 1, '2021-09-05', 'Sunday'),
(6, 1, '2021-09-06', 'Monday'),
(7, 1, '2021-09-07', 'Tuesday'),
(8, 1, '2021-09-08', 'Wednesday'),
(9, 1, '2021-09-09', 'Thursday'),
(10, 1, '2021-09-10', 'Friday'),
(11, 2, '2021-09-01', 'Wednesday'),
(12, 2, '2021-09-03', 'Friday'),
(13, 2, '2021-09-05', 'Sunday'),
(14, 2, '2021-09-07', 'Tuesday'),
(15, 2, '2021-09-09', 'Thursday'),
(16, 3, '2021-09-06', 'Monday'),
(17, 3, '2021-09-07', 'Tuesday'),
(18, 3, '2021-09-13', 'Monday'),
(19, 3, '2021-09-14', 'Tuesday'),
(20, 3, '2021-09-20', 'Monday'),
(21, 3, '2021-09-21', 'Tuesday'),
(22, 3, '2021-09-27', 'Monday'),
(23, 3, '2021-09-28', 'Tuesday'),
(24, 8, '2021-09-13', 'Monday'),
(25, 8, '2021-09-14', 'Tuesday'),
(26, 8, '2021-09-20', 'Monday'),
(27, 8, '2021-09-21', 'Tuesday'),
(28, 9, '2021-09-13', 'Monday'),
(29, 9, '2021-09-14', 'Tuesday'),
(30, 9, '2021-09-20', 'Monday'),
(31, 9, '2021-09-21', 'Tuesday'),
(32, 9, '2021-09-27', 'Monday'),
(33, 9, '2021-09-28', 'Tuesday'),
(34, 10, '2021-09-14', 'Tuesday'),
(35, 10, '2021-09-15', 'Wednesday'),
(36, 10, '2021-09-21', 'Tuesday'),
(37, 10, '2021-09-22', 'Wednesday'),
(38, 10, '2021-09-28', 'Tuesday'),
(39, 10, '2021-09-29', 'Wednesday'),
(40, 10, '2021-10-05', 'Tuesday'),
(41, 10, '2021-10-06', 'Wednesday'),
(42, 10, '2021-10-12', 'Tuesday'),
(43, 10, '2021-10-13', 'Wednesday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `st_event`
--
ALTER TABLE `st_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `st_event_recurrence`
--
ALTER TABLE `st_event_recurrence`
  ADD PRIMARY KEY (`event_recurr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `st_event`
--
ALTER TABLE `st_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `st_event_recurrence`
--
ALTER TABLE `st_event_recurrence`
  MODIFY `event_recurr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
