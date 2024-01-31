-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 11:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_ams_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin _email` varchar(100) NOT NULL,
  `Admin _password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin _email`, `Admin _password`) VALUES
('nu@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tblbranch`
--

CREATE TABLE `tblbranch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `b_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `b_contact_no` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `b_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `b_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblbranch`
--

INSERT INTO `tblbranch` (`branch_id`, `branch_name`, `b_email`, `b_contact_no`, `b_address`, `b_status`) VALUES
(7, 'Mirpur-1', 'mirpur.1@gmail.com', '0177445566', 'Mirpur-1,Dhaka', 'Enable'),
(8, 'Mirpur-10', 'mirpur.10@gmail.com', '0161745567', 'Mirpur-10,Dhaka', 'Enable'),
(10, 'Mirpur-1', 'mirpur.1@gmail.com', '01717445550', 'Mirpur-1,Dhaka', 'enable'),
(11, 'Dhanmondi-10', 'dhanmondi.10@gmail.com', '01517445567', 'Dhanmondi-10,Dhaka', 'disable'),
(13, 'Gulshan', 'gulshan@gmail.com', '0145235620', '405,gulshan-2', 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_cpmplain`
--

CREATE TABLE `tbl_add_cpmplain` (
  `Complain_id` int(15) NOT NULL,
  `C_title` varchar(200) NOT NULL,
  `C_description` varchar(1000) NOT NULL,
  `C_date` varchar(10) NOT NULL,
  `C_month` varchar(10) NOT NULL,
  `C_year` varchar(10) NOT NULL,
  `C_user_id` varchar(30) NOT NULL,
  `branch_id` int(15) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_add_cpmplain`
--

INSERT INTO `tbl_add_cpmplain` (`Complain_id`, `C_title`, `C_description`, `C_date`, `C_month`, `C_year`, `C_user_id`, `branch_id`, `added_date`) VALUES
(1, 'Water problem', 'Please solve this problem', '26', '12', '2023', '501', 1, '0000-00-00 00:00:00'),
(2, 'Gas Problem', 'Last two days we don\'t have gas', '26', '12', '2023', '502', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_employee`
--

CREATE TABLE `tbl_add_employee` (
  `Employee_id` int(10) NOT NULL,
  `E_name` varchar(50) NOT NULL,
  `E_contact` varchar(15) NOT NULL,
  `E_pre_adderss` varchar(200) NOT NULL,
  `E_per_addess` varchar(200) NOT NULL,
  `E_nid` varchar(200) NOT NULL,
  `E_designation` varchar(200) NOT NULL,
  `E_start_date` varchar(200) NOT NULL,
  `E_ending_date` varchar(200) NOT NULL,
  `E_status` varchar(200) NOT NULL,
  `E_password` varchar(15) NOT NULL,
  `image` varchar(200) NOT NULL,
  `branch_id` int(15) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Others` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_add_employee`
--

INSERT INTO `tbl_add_employee` (`Employee_id`, `E_name`, `E_contact`, `E_pre_adderss`, `E_per_addess`, `E_nid`, `E_designation`, `E_start_date`, `E_ending_date`, `E_status`, `E_password`, `image`, `branch_id`, `added_date`, `Others`) VALUES
(1, 'Nahid ', '01626436332', 'Dhaka', 'Noakhali', '1543528643', 'Manager', '02/01/2001', '30/02/2015', 'Employee', '12345', 'image', 3, '2023-12-26 07:39:28', 'others');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_floor`
--

CREATE TABLE `tbl_floor` (
  `Floor_id` int(15) NOT NULL,
  `Floor_no` varchar(50) NOT NULL,
  `branch_id` varchar(20) NOT NULL,
  `Added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_floor`
--

INSERT INTO `tbl_floor` (`Floor_id`, `Floor_no`, `branch_id`, `Added_date`) VALUES
(1, 'First', '102', '2023-12-27 11:41:14'),
(2, '2nd', '201', '2023-12-27 11:42:59'),
(15, '5th', '505', '2023-12-30 18:44:00'),
(16, '7th', '702', '2023-12-30 19:02:00'),
(21, '6th', '605', '2024-01-03 06:57:00'),
(22, '4th', '403', '2024-01-03 06:58:00'),
(24, '1st', '101', '2024-01-03 08:54:00'),
(25, '2nd', '201', '2024-01-03 08:54:00'),
(26, '3rd', '301', '2024-01-03 08:55:00'),
(27, '4th', '22202', '2024-01-03 08:55:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbranch`
--
ALTER TABLE `tblbranch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `tbl_add_cpmplain`
--
ALTER TABLE `tbl_add_cpmplain`
  ADD PRIMARY KEY (`Complain_id`);

--
-- Indexes for table `tbl_add_employee`
--
ALTER TABLE `tbl_add_employee`
  ADD PRIMARY KEY (`Employee_id`);

--
-- Indexes for table `tbl_floor`
--
ALTER TABLE `tbl_floor`
  ADD PRIMARY KEY (`Floor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbranch`
--
ALTER TABLE `tblbranch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_add_cpmplain`
--
ALTER TABLE `tbl_add_cpmplain`
  MODIFY `Complain_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_add_employee`
--
ALTER TABLE `tbl_add_employee`
  MODIFY `Employee_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_floor`
--
ALTER TABLE `tbl_floor`
  MODIFY `Floor_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
