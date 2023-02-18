-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 06:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_master`
--

CREATE TABLE `tbl_book_master` (
  `book_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `author` varchar(20) NOT NULL,
  `edition` varchar(20) NOT NULL,
  `publisher` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `location_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_book_master`
--

INSERT INTO `tbl_book_master` (`book_id`, `title`, `author`, `edition`, `publisher`, `subject`, `quantity`, `status`, `location_id`) VALUES
(1, 'core java', 'horstmann', '12th', 'oracle press', 'core java', '5', 'active', 3),
(2, 'python', 'guido', '3.9', 'ros', 'python', '4', 'active', 3),
(3, 'advance java', 'bn datta', '15', 'ubs', 'estimating and costing', '5', 'active', 5),
(4, 'mechanical estimating', 't.r banga', '16', 'pvt.ltd', 'mechanical estimating', '3', 'active', 4),
(5, 'php', 'v s suresh', '18', 'pvt.ltd', 'electronics communication', '4', 'active', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_card`
--

CREATE TABLE `tbl_card` (
  `card_no` int(11) NOT NULL,
  `reg_no` varchar(20) NOT NULL,
  `issue_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `validity` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_card`
--

INSERT INTO `tbl_card` (`card_no`, `reg_no`, `issue_date`, `validity`, `type`, `status`) VALUES
(3, '150301120013', '2022-08-06 09:44:49', '5Days', 'Normal11', 'active'),
(4, '150301120014', '2022-08-06 07:02:09', '2Days', 'Normal', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `location_id` int(11) NOT NULL,
  `section` varchar(20) NOT NULL,
  `column_name` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`location_id`, `section`, `column_name`, `status`) VALUES
(1, 'section a', 'row 1', 'active'),
(2, 'section b', 'row 2', 'active'),
(3, 'section a', 'row 2', 'active'),
(4, 'section b', 'row 1', 'active'),
(5, 'section b', 'row 3', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `pcode` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `pcode`, `name`, `price`, `quantity`, `status`) VALUES
(1, 'ESH1001', 'Abc', 1000.00, 10, 'Active'),
(2, 'ESH6021', 'Chair', 400.00, 20, 'Active'),
(3, 'ESH4516', 'Desk', 1000.00, 10, 'Active'),
(4, 'ESH6986', 'Laptop', 30000.00, 10, 'Active'),
(5, 'ESH6033', 'Laptop1', 50000.00, 120, 'Active'),
(6, 'ESH1234', 'Desk', 100.00, 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_program`
--

CREATE TABLE `tbl_program` (
  `program_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `incharge` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_program`
--

INSERT INTO `tbl_program` (`program_id`, `name`, `department`, `incharge`) VALUES
(1, 'web developer', 'cstghb', 'rahul'),
(2, 'design structure', 'civil', 'mohit'),
(3, 'app developer', 'cs', 'rohit'),
(4, 'researching', 'ece', 'rohit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(11) NOT NULL,
  `org_name` text NOT NULL,
  `copyright` varchar(300) NOT NULL,
  `powered_by` varchar(300) NOT NULL,
  `powered_url` varchar(300) NOT NULL,
  `year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `org_name`, `copyright`, `powered_by`, `powered_url`, `year`) VALUES
(1, 'Studide LMS', 'Studide LMS', 'Studeide', 'https://www.studide.in/', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `reg_no` varchar(20) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(20) NOT NULL,
  `guardian` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `program_id` int(11) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `marital_status` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `pin_code` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`reg_no`, `reg_date`, `name`, `guardian`, `contact`, `program_id`, `email`, `gender`, `marital_status`, `nationality`, `catagory`, `address`, `pin_code`, `status`) VALUES
('civil20220001', '2022-07-04 16:37:31', 'aparna', 'suman', '9954120789', 4, 'aparna@gmail.com', 'female', 'married', 'indian', 'obc', 'jamtara', '522413', 'active'),
('civil20220002', '2022-07-04 16:36:03', 'dedashish', 'harshraj', '9967564689', 3, 'debashish@gmail.com', 'male', 'married', 'indian', 'st', 'gumla', '524326', 'active'),
('cs20220001', '2022-07-04 04:47:31', 'babita', 'ashish', '9926783689', 2, 'babita@gmail.com', 'female', 'unmarried', 'indian', 'obc', 'dhanbad', '522412', 'active'),
('cs20220002', '2022-07-04 04:55:55', 'jasmin', 'prasant', '9945120959', 1, 'jasmin@gmail.com', 'female', 'unmarried', 'indian', 'sc', 'ranchi', '522512', 'active'),
('ece20220001', '2022-07-04 16:34:39', 'spandan', 'pankaj', '9945673567', 2, 'spandan@gmail.com', 'male', 'unmarried', 'indian', 'sc', 'ramghar', '523478', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `transaction_id` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(20) NOT NULL,
  `card_no` varchar(20) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`transaction_id`, `date`, `type`, `card_no`, `book_id`, `status`) VALUES
('trans22001', '2022-07-04 15:41:56', 'normal', 'lib20001', 1, 'active'),
('trans22002', '2022-07-04 15:41:56', 'normal', 'lib30001', 5, 'active'),
('trans22003', '2022-07-04 15:42:47', 'normal', 'lib10001', 3, 'active'),
('trans22004', '2022-07-04 15:42:47', 'normal', 'lib10001', 4, 'active'),
('trans22005', '2022-07-04 15:43:11', 'normal', 'lib20002', 2, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `name`, `role`, `password`, `status`) VALUES
(1, 'slms101', 'A. Malika', 'Librarian', 'e10adc3949ba59abbe56e057f20f883e', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book_master`
--
ALTER TABLE `tbl_book_master`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `tbl_card`
--
ALTER TABLE `tbl_card`
  ADD PRIMARY KEY (`card_no`),
  ADD KEY `reg_no` (`reg_no`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_program`
--
ALTER TABLE `tbl_program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`reg_no`),
  ADD KEY `program_id` (`program_id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `card_no` (`card_no`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_book_master`
--
ALTER TABLE `tbl_book_master`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_card`
--
ALTER TABLE `tbl_card`
  MODIFY `card_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_program`
--
ALTER TABLE `tbl_program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_book_master`
--
ALTER TABLE `tbl_book_master`
  ADD CONSTRAINT `tbl_book_master_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `tbl_location` (`location_id`);

--
-- Constraints for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD CONSTRAINT `tbl_student_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `tbl_program` (`program_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
