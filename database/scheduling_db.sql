-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 01:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scheduling_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_schedule_info`
--

CREATE TABLE `class_schedule_info` (
  `id` int(30) NOT NULL,
  `schedule_id` int(30) NOT NULL,
  `course_id` int(30) NOT NULL,
  `subject` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(30) NOT NULL,
  `course` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `idFC` int(30) NOT NULL,
  `id_no` varchar(100) NOT NULL,
  `faculty_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`idFC`, `id_no`, `faculty_id`) VALUES
(1, '06232014', 'Orchid Room'),
(2, '37362629', 'Seminar Room'),
(3, '31891540', 'Conference Room'),
(4, '31740000', 'Others Room');

-- --------------------------------------------------------

--
-- Table structure for table `room_setup`
--

CREATE TABLE `room_setup` (
  `idRS` int(11) NOT NULL,
  `room_setup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_setup`
--

INSERT INTO `room_setup` (`idRS`, `room_setup`) VALUES
(1, 'class'),
(2, 'theatre'),
(3, 'bouquet'),
(4, 'conference');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(30) NOT NULL,
  `faculty_id` int(30) NOT NULL,
  `title` varchar(200) NOT NULL,
  `schedule_type` int(11) NOT NULL DEFAULT 1 COMMENT '1= class, 2= meeting,3=others',
  `description` text NOT NULL,
  `location` text NOT NULL,
  `is_repeating` tinyint(1) NOT NULL DEFAULT 1,
  `repeating_data` text NOT NULL,
  `schedule_date` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `room_setup` int(11) NOT NULL,
  `month_from` varchar(200) NOT NULL,
  `month_to` varchar(200) NOT NULL,
  `pax` int(30) NOT NULL,
  `remark_event` varchar(200) NOT NULL,
  `laptop` int(30) NOT NULL,
  `speaker` int(30) NOT NULL,
  `portabletv` int(30) NOT NULL,
  `pointer` int(30) NOT NULL,
  `pasystem` int(30) NOT NULL,
  `projector` int(30) NOT NULL,
  `remark_it` varchar(200) NOT NULL,
  `remarkFromIt` varchar(200) NOT NULL DEFAULT '-',
  `coffee` int(30) NOT NULL,
  `tea` int(30) NOT NULL,
  `mineral` int(30) NOT NULL,
  `biscuit` int(30) NOT NULL,
  `mee` int(30) NOT NULL,
  `lunchset` int(30) NOT NULL,
  `buffet` int(30) NOT NULL,
  `mineral2` int(30) NOT NULL,
  `cordial` int(30) NOT NULL,
  `coffee3` int(30) NOT NULL,
  `tea3` int(30) NOT NULL,
  `mineral3` int(30) NOT NULL,
  `biscuit3` int(30) NOT NULL,
  `remark_meal` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `reason_reject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `faculty_id`, `title`, `schedule_type`, `description`, `location`, `is_repeating`, `repeating_data`, `schedule_date`, `time_from`, `time_to`, `date_created`, `room_setup`, `month_from`, `month_to`, `pax`, `remark_event`, `laptop`, `speaker`, `portabletv`, `pointer`, `pasystem`, `projector`, `remark_it`, `remarkFromIt`, `coffee`, `tea`, `mineral`, `biscuit`, `mee`, `lunchset`, `buffet`, `mineral2`, `cordial`, `coffee3`, `tea3`, `mineral3`, `biscuit3`, `remark_meal`, `status`, `reason_reject`) VALUES
(47, 1, 'Meeting CC103 ', 1, 'Yana ', '', 1, '', '0000-00-00', '09:00:00', '18:00:00', '2022-01-09 13:45:24', 3, '2022-01-09', '2022-01-10', 1, '30 Person ', 1, 1, 1, 0, 0, 0, 'USB Speaker - 3 ', '', 1, 1, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 'Vegatarian - 10 ', 'Approved', 'x lengkap arahan'),
(49, 1, 'Meeting AJK ', 1, 'Eirna', '', 1, '', '0000-00-00', '09:00:00', '12:00:00', '2021-12-08 14:01:31', 3, '2021-12-11', '2021-12-11', 2, '30 Person', 1, 1, 1, 0, 0, 0, 'Laptop - 3', '', 1, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 'Vegetarian - 10 ', 'Manager Approved', 'babai'),
(50, 4, 'Singing Contest', 3, 'Danny', 'Main Hall', 1, '', '0000-00-00', '08:00:00', '13:00:00', '2021-12-08 15:37:05', 2, '2021-12-09', '2021-12-11', 200, '', 1, 0, 0, 0, 1, 0, '', '', 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 1, 0, 1, '1 person vegetarian', 'Approved', 'YES'),
(52, 3, 'Food Day', 3, 'Devi', '', 1, '', '0000-00-00', '08:00:00', '12:30:00', '2021-12-08 22:15:47', 3, '2021-11-15', '2021-11-16', 50, '', 0, 0, 0, 0, 1, 1, 'yeahhh\r\n', '', 0, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1, '', 'Approved', ''),
(53, 2, 'Meeting PPV', 1, 'mohd', '-', 1, '', '0000-00-00', '10:00:00', '00:00:00', '2021-12-09 09:19:21', 4, '2021-12-13', '2021-12-13', 20, '-', 1, 0, 0, 0, 0, 1, 'laptop -2', 'done', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'vegetarian 2 pax', 'Manager Approved', ''),
(54, 1, 'meeting CEO', 1, '', '', 1, '', '0000-00-00', '10:05:00', '11:06:00', '2021-12-15 10:07:03', 4, '2021-12-15', '2021-12-15', 20, '', 1, 0, 0, 1, 0, 0, 'hhahahahah', 'iyeahhh', 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'iyeahhh', '');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_type`
--

CREATE TABLE `schedule_type` (
  `idST` int(11) NOT NULL,
  `schedule_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_type`
--

INSERT INTO `schedule_type` (`idST`, `schedule_type`) VALUES
(1, 'meeting'),
(2, 'training'),
(3, 'others');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(30) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 3 COMMENT '1=Admin,2=Staff, 3=Manager'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500', 1),
(3, 'Manager', 'manager', '0795151defba7a4b5dfa89170de46277', 3),
(4, 'Staff', 'staff', 'de9bf5643eabf80f4a56fda3bbb84483', 2),
(5, 'Staff2', 'staff2', '8bc01711b8163ec3f2aa0688d12cdf3b', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_schedule_info`
--
ALTER TABLE `class_schedule_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`idFC`);

--
-- Indexes for table `room_setup`
--
ALTER TABLE `room_setup`
  ADD PRIMARY KEY (`idRS`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK` (`faculty_id`),
  ADD KEY `FKS` (`room_setup`),
  ADD KEY `FKK` (`schedule_type`);

--
-- Indexes for table `schedule_type`
--
ALTER TABLE `schedule_type`
  ADD PRIMARY KEY (`idST`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT for table `class_schedule_info`
--
ALTER TABLE `class_schedule_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `idFC` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `FK` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`idFC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKK` FOREIGN KEY (`schedule_type`) REFERENCES `schedule_type` (`idST`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKS` FOREIGN KEY (`room_setup`) REFERENCES `room_setup` (`idRS`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
