-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 06:50 AM
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
-- Database: `empattendanceci`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `username` char(6) NOT NULL,
  `employee_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `department_id` char(3) NOT NULL,
  `shift_id` int(1) NOT NULL,
  `location_id` int(1) NOT NULL,
  `in_time` int(11) NOT NULL,
  `notes` varchar(120) NOT NULL,
  `image` varchar(50) NOT NULL,
  `lack_of` varchar(11) NOT NULL,
  `in_status` varchar(15) NOT NULL,
  `out_time` int(11) NOT NULL,
  `out_status` varchar(15) NOT NULL,
  `basic_salary` double NOT NULL,
  `overtime_salary` double NOT NULL,
  `salary_deduction` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `username`, `employee_id`, `department_id`, `shift_id`, `location_id`, `in_time`, `notes`, `image`, `lack_of`, `in_status`, `out_time`, `out_status`, `basic_salary`, `overtime_salary`, `salary_deduction`) VALUES
(45, 'MTC011', 011, 'MTC', 1, 1, 1589178316, 'sdf', 'item-200511-8f5d7be1a1.jpg', 'None', 'Late', 1589178477, 'Early', 20000, 0, 1000),
(48, 'MTC011', 011, 'MTC', 1, 1, 1589381121, '', 'item-200513-ad6953a07e.jpg', 'Note', 'Late', 1589381127, 'Over Time', 20000, 0, 1000),
(49, 'HRD010', 010, 'HRD', 2, 1, 1589384432, 'asdasd', '', 'None, image', 'Late', 1589384514, 'Over Time', 20000, 0, 1000),
(50, 'MTC011', 011, 'MTC', 1, 1, 1589391038, '', '', 'Note, image', 'On Time', 1589391056, 'Early', 20000, 0, 0),
(51, 'HRD010', 010, 'HRD', 3, 1, 1622553388, 'testing', 'item-210601-3946bb00df.png', 'None', 'Late', 1622553470, 'Over Time', 20000, 0, 1000),
(52, 'HRD010', 010, 'HRD', 3, 2, 1631893356, 'none', '', 'None, image', 'Late', 1631893413, 'Over Time', 200000, 10000, 10000),
(53, 'PRC026', 026, 'PRC', 1, 1, 1631894335, 'none', '', 'None, image', 'Late', 1631894403, 'Over Time', 20000, 0, 1000),
(54, 'MTC011', 011, 'MTC', 1, 2, 1631894692, 'demo', '', 'None, image', 'Late', 1631894696, 'Over Time', 200000, 10000, 10000),
(55, 'QAC027', 027, 'QAC', 4, 2, 1631499386, 'none..', '', 'None, image', 'Late', 1631529057, 'Early', 200000, 0, 10000),
(56, 'QAC027', 027, 'QAC', 4, 2, 1631583036, 'none', '', 'None, image', 'Late', 1631611849, 'Early', 200000, 0, 10000),
(58, 'QAC027', 027, 'QAC', 4, 1, 1631733350, 'none', '', 'None, image', 'Late', 1631797356, 'Early', 20000, 0, 1000),
(59, 'QAC027', 027, 'QAC', 4, 4, 1631863331, 'none', '', 'None, image', 'Late', 1631896539, 'Early', 600000, 0, 30000),
(60, 'QAC027', 027, 'QAC', 4, 1, 1631214919, 'none', '', 'None, image', 'Late', 1631250936, 'Over Time', 20000, 0, 1000),
(61, 'PRC026', 026, 'PRC', 1, 2, 1631493955, 'none', '', 'None, image', 'On Time', 1631523613, 'Over Time', 200000, 10000, 0),
(62, 'MTC011', 011, 'MTC', 1, 1, 1631584873, 'none', '', 'None, image', 'Late', 1631621603, 'Over Time', 20000, 0, 1000),
(63, 'QAC027', 027, 'QAC', 4, 2, 1632109417, 'this is a demo note!', '', 'None, image', 'Late', 1632109437, 'Early', 200000, 0, 10000),
(64, 'MTN002', 002, 'MTN', 2, 3, 1632109840, 'demo demo', '', 'None, image', 'On Time', 1632109845, 'Early', 400000, 0, 0),
(65, 'PRC026', 026, 'PRC', 1, 2, 1632109903, 'test', '', 'None, image', 'Late', 1632109905, 'Early', 200000, 0, 10000),
(66, 'HRD010', 010, 'HRD', 3, 1, 1679874527, 'Notes', '', 'None, image', 'Late', 1679904581, 'Over Time', 20000, 0, 1000),
(68, 'EVD001', 001, 'EVD', 2, 2, 1687775634, '', '', 'Note, image', 'Late', 1687776198, 'Over Time', 200000, 10000, 10000),
(69, 'EVD001', 001, 'EVD', 2, 2, 1687906466, '', '', 'Note, image', 'On Time', 1687906975, 'Over Time', 200000, 10000, 0),
(70, 'EVD001', 001, 'EVD', 2, 1, 1689149901, '', '', 'Note, image', 'On Time', 1689149965, 'Over Time', 20000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` char(3) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
('ENG', 'Engineering'),
('EVD', 'Environtment'),
('HRD', 'Human Resource Department'),
('HSD', 'Health & Safety'),
('MTC', 'Material Control'),
('MTN', 'Maintenance'),
('PRC', 'Purchasing'),
('QAC', 'Quality Assurance Control');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gender` char(1) NOT NULL,
  `image` varchar(128) NOT NULL,
  `birth_date` date NOT NULL,
  `hire_date` date NOT NULL,
  `shift_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `gender`, `image`, `birth_date`, `hire_date`, `shift_id`) VALUES
(001, 'Sadie Kelso', 'devi@gmail.com', 'F', 'default.png', '1996-06-06', '2020-03-01', 2),
(002, 'Elsa', 'intan@gmail.com', 'F', 'default.png', '1998-02-01', '2020-03-01', 2),
(003, 'Robert Northern', 'herman@gmail.com', 'M', 'default.png', '1997-11-06', '2020-03-12', 2),
(004, 'Jesse J Walsh', 'andi@gmail.com', 'M', 'default.png', '1998-01-01', '2020-03-01', 3),
(005, 'Madeline Mitchell', 'clarita@gmail.com', 'F', 'default.png', '1996-04-06', '2020-04-08', 1),
(006, 'Emmy Watts', 'oktapan@gmail.com', 'F', 'default.png', '1999-11-04', '2020-04-01', 1),
(007, 'Domingo Yorke', 'mgb@gmail.com', 'M', 'default.png', '2000-10-29', '2020-03-01', 2),
(008, 'Stephen Fernando', 'weve@gmail.com', 'M', 'default.png', '2000-11-07', '2020-03-01', 1),
(009, 'Gunther', 'desi@gmail.com', 'F', 'default.png', '1994-07-05', '2020-04-01', 2),
(010, 'Blake Collins', 'ddry@gmail.com', 'M', 'default.png', '2000-12-01', '2020-04-06', 3),
(011, 'Marcus', 'udin@gmail.com', 'M', 'default.png', '1993-10-12', '2020-05-03', 1),
(024, 'Vernon Keely', '123@fmail.com', 'M', 'default.png', '2001-12-31', '2020-04-28', 1),
(025, 'Admin ', 'admin@admin.com', 'M', 'default.png', '0000-00-00', '0000-00-00', 0),
(026, 'Christine', 'christine@gmail.com', 'F', 'item-210516-ab8e9ef52f.jpg', '1995-04-01', '2021-05-16', 1),
(027, 'Johnny', 'johnny@mail.com', 'M', 'default.png', '1993-04-01', '2021-08-13', 6),
(029, 'Syafa Ilyas Al Muzani', 'syafailyasalmuzani@gmail.com', 'M', 'default.png', '2001-05-18', '2023-07-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_department`
--

CREATE TABLE `employee_department` (
  `id` int(3) NOT NULL,
  `employee_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `department_id` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_department`
--

INSERT INTO `employee_department` (`id`, `employee_id`, `department_id`) VALUES
(1, 001, 'EVD'),
(2, 002, 'MTN'),
(3, 003, 'QAC'),
(4, 004, 'ENG'),
(5, 005, 'PRC'),
(6, 006, 'MTN'),
(7, 007, 'HSD'),
(8, 008, 'PRC'),
(9, 009, 'PRC'),
(10, 010, 'HRD'),
(21, 011, 'MTC'),
(25, 024, 'EVD'),
(26, 026, 'PRC'),
(27, 027, 'QAC'),
(29, 029, 'ENG');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(1) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`) VALUES
(1, 'Intern'),
(2, 'Junior'),
(3, 'Middle'),
(4, 'Senior');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id` int(1) NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id`, `start`, `end`) VALUES
(1, '08:00:00', '16:00:00'),
(2, '16:00:00', '00:00:00'),
(3, '00:00:00', '08:00:00'),
(4, '08:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` char(6) NOT NULL,
  `password` varchar(128) NOT NULL,
  `employee_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `employee_id`, `role_id`) VALUES
('admin', '$2y$10$7rLSvRVyTQORapkDOqmkhetjF6H9lJHngr4hJMSM2lHObJbW5EQh6', 025, 1),
('ENG004', '$2y$10$hs9XNzGocQgiEkSl4yF/e.dZKWnEUMqsjUGbZwRTe5kAcYuKubIcW', 004, 2),
('EVD001', '$2y$10$9SMMuOamGjqQvpvLU8XH6Ow.GV/9SjIMgKl43IKdKVsJhfmrxTqGO', 001, 2),
('EVD024', '$2y$10$/Y7Dyae1HMi5nospfNbaQ.NuwAO/yOwH5fWU6zrhBV/CTRuTcOotW', 024, 2),
('HRD010', '$2y$10$JGI9.yh69CiBM4j9CQb8dOWFg3UIvG.TvI.CzLAAifBz5e4.yos0q', 010, 1),
('HSD007', '$2y$10$IZ/JuzVa3WcViHVocmwwDeLuaS3wt.RMCpv7CfTSAJxGmV5FF4LeK', 007, 2),
('MTC011', '$2y$10$wWUE8oVLWzmBUFZq9N8tDujOg.5qla62nOc8GENj3OF2l0mMrzHlW', 011, 2),
('MTN002', '$2y$10$QbhQ.7VkJZWy23JCInpRyepu9rStirokF00UayIFfXJj.9GATh/vC', 002, 2),
('MTN006', '$2y$10$1deAAbPvrjHZSEVfVvkBtO7DgoFOZ3602og4weMuwRF7sFJ9/VyXy', 006, 2),
('PRC005', '$2y$10$iBkh2hJSLQE3USI78T/LEOpb25yukYQSxnGTU/BRo68n4E2GYEPT2', 005, 2),
('PRC008', '$2y$10$UcXGugx4aIxTuuElkxjZCuZEGCy9YUveflP9pBEt84XWvXNSIMdZC', 008, 2),
('PRC009', '$2y$10$yycJGeAxA0QvohkkmmF6Z.X3/RXwlKuj1Iks5u3SBMb4lJUVe4Cnu', 009, 2),
('PRC026', '$2y$10$fKZWwQn7tndrEpX91Ma9VeWEUkJraP0qBzd7A0AIdB.MIAsgRlUE6', 026, 2),
('QAC003', '$2y$10$8goCFMw1mrLUacR/imI7zOGjjbgCrWjWR0VzQ.vnpCuQVT4noDPb.', 003, 2),
('QAC027', '$2y$10$HJJKIZeyrrr02vfFRaQqc.qdkbwdPGJj8ykTGaaTJ0t6Blc6ZYEY.', 027, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `id` int(2) NOT NULL,
  `role_id` int(1) NOT NULL,
  `menu_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 2, 4),
(5, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(2) NOT NULL,
  `menu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Master'),
(3, 'Attendance'),
(4, 'Profile'),
(5, 'Report');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(1) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `user_submenu`
--

CREATE TABLE `user_submenu` (
  `id` int(2) NOT NULL,
  `menu_id` int(2) NOT NULL,
  `title` varchar(20) NOT NULL,
  `url` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_submenu`
--

INSERT INTO `user_submenu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 0),
(2, 2, 'Department', 'master', 'fas fa-fw fa-building', 1),
(3, 2, 'Attendance Time', 'master/shift', 'fas fa-fw fa-exchange-alt', 1),
(4, 2, 'Employee', 'master/employee', 'fas fa-fw fa-id-badge', 1),
(5, 2, 'Position', 'master/location', 'fa-fw fas fa-cog', 1),
(6, 3, 'Attendance Form', 'attendance', 'fas fa-fw fa-clipboard-list', 1),
(7, 3, 'Statistics', 'attendance/stats', 'fas fa-fw fa-chart-pie', 0),
(8, 4, 'My Profile', 'profile', 'fas fa-fw fa-id-card', 0),
(9, 2, 'User', 'master/users', 'fas fa-fw fa-user-alt', 1),
(10, 2, 'Salary', 'master/salary', 'fas fa-money-bill', 1),
(11, 5, 'Attendance', 'report', 'fas fa-fw fa-paste', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `shift_id` (`shift_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_department`
--
ALTER TABLE `employee_department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_department_ibfk_1` (`employee_id`),
  ADD KEY `employee_department_ibfk_2` (`department_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_submenu`
--
ALTER TABLE `user_submenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `employee_department`
--
ALTER TABLE `employee_department`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_submenu`
--
ALTER TABLE `user_submenu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_3` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_4` FOREIGN KEY (`shift_id`) REFERENCES `shift` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_5` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `employee_department`
--
ALTER TABLE `employee_department`
  ADD CONSTRAINT `employee_department_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_department_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_access`
--
ALTER TABLE `user_access`
  ADD CONSTRAINT `user_access_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_access_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_submenu`
--
ALTER TABLE `user_submenu`
  ADD CONSTRAINT `user_submenu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
