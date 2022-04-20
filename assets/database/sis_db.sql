-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 06:41 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

CREATE TABLE `audit_logs` (
  `id` int(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_no` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `action_name` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `host` varchar(255) NOT NULL,
  `login_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audit_logs`
--

INSERT INTO `audit_logs` (`id`, `user_id`, `account_no`, `action`, `action_name`, `ip`, `host`, `login_time`) VALUES
(1, 2, 'U22000002', 'account has been logged in', 'Marvin Marilao', '::1', 'Unknown', 'Mar-31-2022 05:17:16 AM'),
(2, 2, 'U22000002', 'account has been logged in', 'Marvin Marilao', '::1', 'Unknown', 'Mar-31-2022 06:41:04 PM'),
(3, 2, 'U22000002', 'account has been logged in', 'Marvin Marilao', '::1', 'Unknown', 'Mar-31-2022 08:52:29 PM'),
(4, 5, 'U22000005', 'account has been logged in', 'Super Admin', '::1', 'Unknown', 'Mar-31-2022 09:50:43 PM'),
(5, 0, 'U22000005', 'account has been logged out', 'Super Admin', '::1', 'Unknown', 'Mar-31-2022 09:55:12 PM'),
(6, 5, 'U22000005', 'account has been logged in', 'Super Admin', '::1', 'Unknown', 'Mar-31-2022 09:55:26 PM'),
(7, 6, 'U22000006', 'account has been logged in', 'Approver Account', '::1', 'Unknown', 'Mar-31-2022 10:15:14 PM'),
(8, 0, 'U22000002', 'account has been logged out', 'Marvin Marilao', '::1', 'Unknown', 'Mar-31-2022 10:23:09 PM'),
(9, 6, '22010006', 'account has been logged in', 'TEST TEST', '::1', 'Unknown', 'Mar-31-2022 10:23:17 PM'),
(10, 22010006, '22010006', 'account has been logged out', 'TEST TEST', '::1', 'Unknown', 'Mar-31-2022 10:24:03 PM'),
(11, 0, 'U22000005', 'account has been logged out', 'Super Admin', '::1', 'Unknown', 'Mar-31-2022 10:55:38 PM'),
(12, 0, 'U22000006', 'account has been logged out', 'Approver Account', '::1', 'Unknown', 'Mar-31-2022 10:55:46 PM'),
(13, 5, 'U22000005', 'account has been logged in', 'Super Admin', '::1', 'Unknown', 'Apr-01-2022 11:18:06 AM'),
(14, 2, 'U22000002', 'account has been logged in', 'Marvin Marilao', '::1', 'Unknown', 'Apr-01-2022 11:18:21 AM');

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE `audit_trail` (
  `id` int(50) NOT NULL,
  `account_no` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `actor` varchar(255) NOT NULL,
  `affected` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `host` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audit_trail`
--

INSERT INTO `audit_trail` (`id`, `account_no`, `action`, `actor`, `affected`, `ip`, `host`, `date`) VALUES
(1, 'U22000002', 'document type has been created', 'Marvin Marilao', 'Dropping form ', '::1', 'Unknown', 'Mar-31-2022 05:19:21 AM'),
(3, 'U22000002', 'department has been created', 'Marvin Marilao', 'BSIT', '::1', 'Unknown', 'Mar-31-2022 05:24:28 AM'),
(4, 'U22000002', 'document type has been created', 'Marvin Marilao', 'asd', '::1', 'Unknown', 'Mar-31-2022 05:39:26 AM'),
(5, 'U22000002', 'document type has been created', 'Marvin Marilao', 'asdasd', '::1', 'Unknown', 'Mar-31-2022 05:40:38 AM'),
(6, 'U22000002', 'document type has been created', 'Marvin Marilao', 'asdasd', '::1', 'Unknown', 'Mar-31-2022 05:41:25 AM'),
(7, 'U22000002', 'document type has been created', 'Marvin Marilao', 'asdasdad', '::1', 'Unknown', 'Mar-31-2022 05:43:56 AM'),
(8, 'U22000002', 'document type has been created', 'Marvin Marilao', 'asdasd', '::1', 'Unknown', 'Mar-31-2022 05:45:10 AM'),
(9, 'U22000002', 'document type has been created', 'Marvin Marilao', 'asd', '::1', 'Unknown', 'Mar-31-2022 05:47:57 AM'),
(10, 'U22000002', 'document type has been created', 'Marvin Marilao', 'asdasd', '::1', 'Unknown', 'Mar-31-2022 05:49:37 AM'),
(11, 'U22000002', 'document type has been created', 'Marvin Marilao', 'zxc', '::1', 'Unknown', 'Mar-31-2022 05:50:04 AM'),
(12, 'U22000002', 'document type has been created', 'Marvin Marilao', 'asdasd', '::1', 'Unknown', 'Mar-31-2022 05:50:39 AM'),
(13, 'U22000002', 'document type has been created', 'Marvin Marilao', 'zxcxz', '::1', 'Unknown', 'Mar-31-2022 05:53:51 AM'),
(14, 'U22000002', 'document type has been created', 'Marvin Marilao', 'asdsadas', '::1', 'Unknown', 'Mar-31-2022 05:55:58 AM'),
(15, 'U22000002', 'document type has been created', 'Marvin Marilao', 'asdasd', '::1', 'Unknown', 'Mar-31-2022 05:57:41 AM'),
(16, 'U22000002', 'document type has been created', 'Marvin Marilao', 'zxczxcz', '::1', 'Unknown', 'Mar-31-2022 06:01:06 AM');

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `id` int(20) NOT NULL,
  `adm_num` varchar(50) NOT NULL,
  `or_num` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`id`, `adm_num`, `or_num`, `date`) VALUES
(1, '30115081', 'A532321', '2022-03-26 02:34:29'),
(2, '87311348', 'A521021', '2022-03-26 02:38:31'),
(3, '57721037', 'A231122', '2022-03-26 02:47:30'),
(4, '62732134', '2131112', '2022-03-26 02:56:47'),
(5, '27270854', 'A998273', '2022-03-26 11:19:10'),
(6, '40812519', 'A261351', '2022-03-26 11:41:21'),
(7, '98549393', '1231112', '2022-03-27 11:29:04'),
(8, '36752390', 'A0926382', '2022-03-28 07:09:39'),
(9, '98722825', 'A20983652', '2022-03-30 03:59:39'),
(10, '16192616', '1231', '2022-03-30 18:49:33'),
(11, '40955428', 'A926362', '2022-03-31 14:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `datms_doctype`
--

CREATE TABLE `datms_doctype` (
  `dt_id` int(20) NOT NULL,
  `dt_code` varchar(50) NOT NULL,
  `dt_name` varchar(50) NOT NULL,
  `dt_desc` varchar(255) NOT NULL,
  `dt_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datms_doctype`
--

INSERT INTO `datms_doctype` (`dt_id`, `dt_code`, `dt_name`, `dt_desc`, `dt_date`) VALUES
(1, 'doc202222379286', 'Requirements', 'For new enrolled students requirements', 'Mar-04-2022 02:24:54 PM'),
(2, 'doc202252145783', 'Transfer Form', 'For student who wants to transfer into other school', 'Mar-04-2022 02:25:43 PM'),
(3, 'doc202230163161', 'Shifting form', 'students who want to change course', 'Mar-04-2022 02:29:13 PM'),
(4, 'doc202264204229', 'Dropping form ', 'Used for dropping student', 'Mar-31-2022 05:19:21 AM');

-- --------------------------------------------------------

--
-- Table structure for table `datms_documents`
--

CREATE TABLE `datms_documents` (
  `doc_id` int(20) NOT NULL,
  `doc_code` varchar(50) NOT NULL,
  `doc_title` varchar(225) NOT NULL,
  `doc_name` varchar(225) NOT NULL,
  `doc_size` varchar(100) NOT NULL,
  `doc_dl` int(20) NOT NULL,
  `doc_type` varchar(100) NOT NULL,
  `doc_status` varchar(50) NOT NULL,
  `doc_desc` varchar(255) NOT NULL,
  `doc_actor1` varchar(100) NOT NULL,
  `doc_off1` varchar(100) NOT NULL,
  `doc_date1` varchar(100) NOT NULL,
  `doc_actor2` varchar(100) NOT NULL,
  `doc_off2` varchar(100) NOT NULL,
  `doc_date2` varchar(100) NOT NULL,
  `doc_actor3` varchar(200) NOT NULL,
  `doc_off3` varchar(200) NOT NULL,
  `doc_date3` varchar(200) NOT NULL,
  `doc_remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datms_documents`
--

INSERT INTO `datms_documents` (`doc_id`, `doc_code`, `doc_title`, `doc_name`, `doc_size`, `doc_dl`, `doc_type`, `doc_status`, `doc_desc`, `doc_actor1`, `doc_off1`, `doc_date1`, `doc_actor2`, `doc_off2`, `doc_date2`, `doc_actor3`, `doc_off3`, `doc_date3`, `doc_remarks`) VALUES
(1, 'doc20226007', 'Test', 'contracts.pdf', '41136', 0, 'Shifting form', 'Approved', 'shifting form', 'Approver Account', 'Registrar Department', 'Mar-31-2022 10:14:51 PM', 'Approver Account', 'Registrar Department', 'Mar-31-2022 10:17:48 PM', 'Super Admin', 'Administrator', 'Mar-31-2022 10:11:44 PM', 'approved '),
(2, 'doc20228323', 'TEST', 'SIS-DATMS-MARILAO-ALQUERO-DEGUZMAN-QUINTERO-FLAVIANO.pdf', '2307711', 0, 'Dropping form', 'Received', 'asda', 'Super Admin', '', 'Apr-01-2022 11:56:59 AM', 'Super Admin', 'Administrator', 'Apr-01-2022 11:59:03 AM', 'Marvin Marilao', 'Registrar Department', 'Apr-01-2022 11:52:59 AM', 'asdas'),
(3, 'doc20223997', 'TEST', 'HRMemo(1).pdf', '25063', 0, 'Shifting form', 'Created', 'sadas', 'Marvin Marilao', 'Registrar Department', 'Apr-01-2022 11:55:22 AM', 'Marvin Marilao', '', '', 'Marvin Marilao', 'Registrar Department', 'Apr-01-2022 11:55:22 AM', ''),
(4, 'doc20227554', 'asda', 'Staff Memo 2.pdf', '149605', 0, 'Transfer Form', 'Created', 'asdsa', 'Marvin Marilao', 'Registrar Department', 'Apr-01-2022 11:57:45 AM', 'Marvin Marilao', '', '', 'Marvin Marilao', 'Registrar Department', 'Apr-01-2022 11:57:45 AM', '');

-- --------------------------------------------------------

--
-- Table structure for table `datms_office`
--

CREATE TABLE `datms_office` (
  `off_id` int(100) NOT NULL,
  `off_code` varchar(100) NOT NULL,
  `off_name` varchar(255) NOT NULL,
  `off_location` varchar(255) NOT NULL,
  `off_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datms_office`
--

INSERT INTO `datms_office` (`off_id`, `off_code`, `off_name`, `off_location`, `off_date`) VALUES
(1, 'doc202224726989', 'College of Computer Studies', 'Program for logical people', 'Mar-04-2022 01:37:42 AM'),
(2, 'doc202243735074', 'CASE', 'HAHHA', 'Mar-19-2022 05:29:45 PM'),
(3, 'doc202289852304', 'Registrar Department', 'A registrar\'s department is an essential unit within a college, university, or secondary school. The registrar\'s office provides a variety of services and supports for prospective students, current students, faculty, and staff related to: Marketing and re', 'Mar-04-2022 02:17:36 PM'),
(10, 'doc202223849302', 'Admission', '', ''),
(11, 'doc202217808800', 'Cashier', 'Pera Pera\n', 'Mar-26-2022 10:32:50 AM'),
(13, 'doc202210287927', 'BSIT', 'Bachelor of Science in Information Technology', 'Mar-31-2022 05:24:28 AM');

-- --------------------------------------------------------

--
-- Table structure for table `datms_tracking`
--

CREATE TABLE `datms_tracking` (
  `doc_id` int(20) NOT NULL,
  `doc_code` varchar(50) NOT NULL,
  `doc_title` varchar(225) NOT NULL,
  `doc_name` varchar(225) NOT NULL,
  `doc_size` varchar(100) NOT NULL,
  `doc_type` varchar(100) NOT NULL,
  `doc_status` varchar(50) NOT NULL,
  `doc_desc` varchar(255) NOT NULL,
  `doc_actor1` varchar(100) NOT NULL,
  `doc_off1` varchar(100) NOT NULL,
  `doc_date1` varchar(100) NOT NULL,
  `doc_actor2` varchar(100) NOT NULL,
  `doc_off2` varchar(100) NOT NULL,
  `doc_date2` varchar(100) NOT NULL,
  `doc_remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datms_tracking`
--

INSERT INTO `datms_tracking` (`doc_id`, `doc_code`, `doc_title`, `doc_name`, `doc_size`, `doc_type`, `doc_status`, `doc_desc`, `doc_actor1`, `doc_off1`, `doc_date1`, `doc_actor2`, `doc_off2`, `doc_date2`, `doc_remarks`) VALUES
(1, 'doc20226007', 'Test', 'contracts.pdf', '41136', 'Shifting form', 'Created', 'shifting form', 'Super Admin', 'Administrator', 'Mar-31-2022 10:11:44 PM', '', '', 'Mar-31-2022 10:11:44 PM', 'Tracking Document is Created by'),
(2, 'doc20226007', 'Test', 'contracts.pdf', '41136', 'Shifting form', 'Outgoing', 'shifting form', 'Marvin Marilao', 'Registrar Department', 'Mar-31-2022 10:14:13 PM', 'Super Admin', 'Administrator', 'Mar-31-2022 10:11:44 PM', 'Document is submitted to'),
(3, 'doc20226007                    ', 'Test', 'contracts.pdf', '41136', 'Shifting form', 'Received', 'shifting form', 'Marvin Marilao', 'Registrar Department', 'Mar-31-2022 10:14:24 PM', 'Marvin Marilao', 'Registrar Department', 'Mar-31-2022 10:14:13 PM', 'Document is Recieved by'),
(4, 'doc20226007', 'Test', 'contracts.pdf', '41136', 'Shifting form', 'Outgoing', 'shifting form', 'Approver Account', 'Registrar Department', 'Mar-31-2022 10:14:51 PM', 'Marvin Marilao', 'Registrar Department', 'Mar-31-2022 10:14:13 PM', 'Document is submitted to'),
(5, 'doc20226007                    ', 'Test', 'contracts.pdf', '41136', 'Shifting form', 'Received', 'shifting form', 'Approver Account', 'Registrar Department', 'Mar-31-2022 10:16:19 PM', 'Approver Account', 'Registrar Department', 'Mar-31-2022 10:14:51 PM', 'Document is Recieved by'),
(6, 'doc20226007', 'Test', 'contracts.pdf', '41136', 'Shifting form', 'Approved', 'shifting form', 'Approver Account', 'Registrar Department', 'Mar-31-2022 10:17:48 PM', 'Approver Account', 'Registrar Department', 'Mar-31-2022 10:14:51 PM', 'Document is Approved by'),
(7, 'doc20228323', 'TEST', 'SIS-DATMS-MARILAO-ALQUERO-DEGUZMAN-QUINTERO-FLAVIANO.pdf', '2307711', 'Dropping form', 'Created', 'asda', 'Marvin Marilao', 'Registrar Department', 'Apr-01-2022 11:52:59 AM', '', '', 'Apr-01-2022 11:52:59 AM', 'Tracking Document is Created by'),
(8, 'doc20223997', 'TEST', 'HRMemo(1).pdf', '25063', 'Shifting form', 'Created', 'sadas', 'Marvin Marilao', 'Registrar Department', 'Apr-01-2022 11:55:22 AM', '', '', 'Apr-01-2022 11:55:22 AM', 'Tracking Document is Created by'),
(9, 'doc20228323', 'TEST', 'SIS-DATMS-MARILAO-ALQUERO-DEGUZMAN-QUINTERO-FLAVIANO.pdf', '2307711', 'Dropping form', 'Outgoing', 'asda', 'Super Admin', '', 'Apr-01-2022 11:56:59 AM', 'Marvin Marilao', 'Registrar Department', 'Apr-01-2022 11:52:59 AM', 'Document is submitted to'),
(10, 'doc20227554', 'asda', 'Staff Memo 2.pdf', '149605', 'Transfer Form', 'Created', 'asdsa', 'Marvin Marilao', 'Registrar Department', 'Apr-01-2022 11:57:45 AM', '', '', 'Apr-01-2022 11:57:45 AM', 'Tracking Document is Created by'),
(11, 'doc20228323                    ', 'TEST', 'SIS-DATMS-MARILAO-ALQUERO-DEGUZMAN-QUINTERO-FLAVIANO.pdf', '2307711', 'Dropping form', 'Received', 'asda', 'Super Admin', 'Administrator', 'Apr-01-2022 11:59:03 AM', 'Super Admin', '', 'Apr-01-2022 11:56:59 AM', 'Document is Recieved by');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`) VALUES
(4, 'Clearance System'),
(6, 'DATMS'),
(5, 'Guidance and Counselling'),
(8, 'Health Check Monitoring'),
(1, 'Help Desk System'),
(3, 'LMS Edmodo'),
(9, 'LMS Moodle'),
(10, 'Medical System'),
(2, 'OJT System'),
(11, 'Scholarship System'),
(7, 'Student Services'),
(12, 'User Management');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `department_id`, `role`) VALUES
(1, 1, 'Help Desk Administrator'),
(3, 2, 'OJT Administrator'),
(4, 3, 'LMS Edmodo Administrator'),
(5, 4, 'Clearance Administrator'),
(6, 4, 'Laboratory Coordinator'),
(7, 4, 'Book Coordinator'),
(8, 4, 'Library Coordinator'),
(9, 4, 'Cashier Coordinator'),
(10, 4, 'Registrar Coordinator'),
(11, 4, 'Guidance Coordinator'),
(12, 4, 'Department Head'),
(13, 5, 'Guidance and Counselling Administrator'),
(14, 6, 'DATMS Administrator'),
(15, 7, 'Student Service Administrator'),
(16, 8, 'Health Check Monitoring Administrator'),
(17, 9, 'LMS Moodle Administrator'),
(18, 10, 'Medical System Administrator'),
(19, 11, 'Scholarship Administrator'),
(20, 12, 'User Management Administrator'),
(21, 6, 'DATMS Approver'),
(22, 6, 'DATMS Secretary'),
(24, 6, 'Cashier'),
(25, 6, 'Admission');

-- --------------------------------------------------------

--
-- Table structure for table `student_application`
--

CREATE TABLE `student_application` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `account_status` varchar(255) NOT NULL,
  `stud_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_application`
--

INSERT INTO `student_application` (`id`, `id_number`, `firstname`, `lastname`, `middlename`, `email`, `contact`, `address`, `course`, `gender`, `birthday`, `nationality`, `religion`, `civil_status`, `account_status`, `stud_date`) VALUES
(3, '57721037', 'asd', 'asd', 'A', 'asd@gmail.com', '09782367189', 'asd asd asd 1231', 'BSIT', 'Male', '2022-03-03', 'philippines', 'Roman Catholic', 'Single', 'Enrolled', 'Mar-26-2022 10:46:55 AM'),
(4, '62732134', 'qwe', 'qwe', 'Q', 'qwe@gmail.com', '12312312312', 'qwe qwe qwe `1231', 'BSIT', 'Male', '2022-03-05', 'philippines', 'Roman Catholic', 'Single', 'Enrolled', 'Mar-26-2022 10:56:35 AM'),
(5, '27270854', 'TEST', 'TEST', 'T', 'TEST@gmail.com', '09238721783', 'TEST TEST TEST 1231', 'BSEntrep', 'Male', '2022-03-01', 'philippines', 'Roman Catholic', 'Single', 'Enrolled', 'Mar-26-2022 07:16:52 PM'),
(6, '40812519', 'Aldrin', 'Deguzman', 'A', 'Aldrin@gmail.com', '09283948763', 'NONE NONE NONE 223423', 'BSIT', 'Male', '2022-03-07', 'philippines', 'Roman Catholic', 'Single', 'Paid', 'Mar-26-2022 07:37:15 PM'),
(7, '98549393', 'TRY', 'TRY', 'TRY', 'TRY@GMAIL.COM', '09202966614', 'TRY TRY TRY 1231', 'BSHM', 'Male', '2022-03-08', 'philippines', 'Roman Catholic', 'Single', 'Enrolled', 'Mar-27-2022 07:11:50 PM'),
(8, '36752390', 'asd', 'asd', 'asd', 'asd@gmail.com', '09239776237', 'asd asd asd 1231', 'BSIT', 'Male', '2022-03-02', 'philippines', 'Roman Catholic', 'Single', 'Enrolled', 'Mar-28-2022 03:07:11 PM'),
(9, '98722825', 'Olivert', 'Jamito', 'San Buenaventura', 'olivertjr17@gmail.com', '09238462874', 'ph. 1  pkg. 1 Blk. 30 Camarin Caloocan City 1422', 'BSIT', 'Male', '2000-03-17', 'philippines', 'Roman Catholic', 'Single', 'Enrolled', 'Mar-30-2022 11:57:04 AM'),
(10, '16192616', 'asdas', 'asdasd', 'asdsad', 'asdas@gmail.com', '09283767826', 'asdsa asdasd asdasd 1231', 'BSTM', 'Male', '2022-03-02', 'philippines', 'Rastafarianism', 'Married', 'Enrolled', 'Mar-31-2022 02:45:52 AM'),
(11, '18050856', 'zxc', 'zxc', 'zxc', 'asd@gmail.com', '09787563452', 'zxc zxc zxc 1231', 'BSTM', 'Male', '2022-02-28', 'philippines', 'Roman Catholic', 'Single', 'Unpaid', 'Mar-31-2022 02:46:42 AM'),
(12, '57480572', 'qwe', 'qwe', 'qwe', 'qwe@gmail.com', '09238972783', 'qwe  qwe 1231', 'BSEntrep', 'Male', '2022-03-03', 'philippines', '', 'Single', 'Unpaid', 'Mar-31-2022 02:48:36 AM'),
(13, '44160427', 'asdasd', 'asdsad', 'asdasd', 'asdasd@gmail.com', '87621376125', 'asdsad asdasd asdasd 12312', 'BSEd Major in Values Education', 'Male', '2022-03-02', 'peruvian', 'Christianity', 'Single', 'Unpaid', 'Mar-31-2022 03:20:02 AM'),
(14, '51611823', 'asdas', 'asdsad', '', 'asdsad@gmail.com', '09297387623', 'asdsad  asd 12312', 'BSAIS', 'Male', '2022-03-02', 'philippines', '', 'Single', 'Unpaid', 'Mar-31-2022 03:21:59 AM'),
(15, '40955428', 'Marvin', 'Marilao', 'Luna', 'marvinmarilao92@gmail.com', '09202966614', 'ph. 2 pkg.2 block 30 lot 16 Bagong Silang Caloocan City 1428', 'BSIT', 'Male', '1999-10-09', 'philippines', 'Roman Catholic', 'Single', 'Paid', 'Mar-31-2022 10:01:13 PM');

-- --------------------------------------------------------

--
-- Table structure for table `student_information`
--

CREATE TABLE `student_information` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year_level` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `school_year` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `account_status` varchar(255) NOT NULL,
  `stud_date` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_information`
--

INSERT INTO `student_information` (`id`, `id_number`, `firstname`, `lastname`, `middlename`, `email`, `contact`, `address`, `course`, `year_level`, `section`, `school_year`, `gender`, `birthday`, `nationality`, `religion`, `civil_status`, `account_status`, `stud_date`) VALUES
(1, '22010001', 'Marvin', 'Marilao', 'L', 'marvinmarilao92@gmail.com', '09202966614', 'Ph. 2 Pkg. 2 Blk. 30 Lot 16 Bagong Silang Caloocan City 1428', 'BSIT', '4th Year', '4212', '2020-2021', 'Male', '1999-10-09', 'philippines', 'Roman Catholic', 'Single', 'Offical', '2022-03-26 10:35:23'),
(2, '22010002', 'test', 'test', 'T', 'test@gmail.com', '098293861873', 'test test test 1231', 'BSEntrep', '1st Year', '1101', '2021-2022', 'Male', '2022-03-03', 'philippines', 'Roman Catholic', 'Single', 'Unoffical', '2022-03-26 10:39:06'),
(3, '22010003', 'test', 'test', 'T', 'test@gmail.com', '098293861873', 'test test test 1231', 'BSEntrep', '1st Year', '1101', '2021-2022', 'Male', '2022-03-03', 'philippines', 'Roman Catholic', 'Single', 'Unoffical', '2022-03-26 10:39:14'),
(4, '22000004', 'asd', 'asd', 'A', 'asd@gmail.com', '09782367189', 'asd asd asd 1231', 'BSIT', '1st Year', '1102', '2029-2030', 'Male', '2022-03-03', 'philippines', 'Roman Catholic', 'Single', 'Offical', '2022-03-26 10:50:27'),
(5, '22010005', 'qwe', 'qwe', 'Q', 'qwe@gmail.com', '12312312312', 'qwe qwe qwe `1231', 'BSIT', '1st Year', '1211', '2031-2032', 'Male', '2022-03-05', 'philippines', 'Roman Catholic', 'Single', 'Unoffical', '2022-03-26 10:57:32'),
(6, '22010006', 'TEST', 'TEST', 'T', 'TEST@gmail.com', '09238721783', 'TEST TEST TEST 1231', 'BSEntrep', '1st Year', '1101', '2021-2022', 'Male', '2022-03-01', 'philippines', 'Roman Catholic', 'Single', 'Offical', '2022-03-26 19:22:57'),
(7, '22010007', 'TRY', 'TRY', 'TRY', 'TRY@GMAIL.COM', '09202966614', 'TRY TRY TRY 1231', 'BSHM', '1st Year', '4111', '2021-2022', 'Male', '2022-03-08', 'philippines', 'Roman Catholic', 'Single', 'Offical', '2022-03-27 19:29:33'),
(8, '22010008', 'asda', 'asd', 'asd', 'asd@gmail.com', '09239776237', 'asd asd asd 1231', 'BSHM', '1st Year', '1101', '2021-2022', 'Male', '2022-03-02', 'philippines', 'Roman Catholic', 'Single', 'Offical', '2022-03-28 15:12:42'),
(9, '22010009', 'Olivert', 'Jamito', 'San Buenaventura', 'olivertjr17@gmail.com', '09238462874', 'ph. 1  pkg. 1 Blk. 30 Camarin Caloocan City 1422', 'BSHM', '1st Year', '1101', '2021-2022', 'Male', '2000-03-17', 'philippines', 'Roman Catholic', 'Single', 'Offical', '2022-03-30 12:02:54'),
(10, '22010010', 'asdas', 'asdasd', 'asdsad', 'asdas@gmail.com', '09283767826', 'asdsa asdasd asdasd 1231', 'BSTM', '1st Year', '1101', '2020-2021', 'Male', '2022-03-02', 'philippines', 'Rastafarianism', 'Married', 'Transferee', '2022-03-31 02:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_information`
--

CREATE TABLE `teacher_information` (
  `id` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `account_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_information`
--

INSERT INTO `teacher_information` (`id`, `id_number`, `firstname`, `lastname`, `middlename`, `email`, `contact`, `address`, `course`, `gender`, `birthday`, `nationality`, `religion`, `civil_status`, `account_status`) VALUES
(1, 123456, 'Teacher', 'Account', 'T', 'Teacher@gmail.com', '9273286722', 'NONE', 'Bachelor of Secondary Education Major in English', 'Male', '2022-03-02', 'venezuelan', 'Atheist', 'Married', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_access` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_number`, `password`, `last_access`) VALUES
(1, 'U22000001', '$2y$12$t0Yi3z6kcE5tispTKbkvlOVVBUQVj9H733Zlr7ds1yovkr4V9r6fa', '2022-03-26 02:06:30'),
(2, 'U22000002', '$2y$12$kg.ViBwY1tJPjE8HUWEsKeoKTtOfLOHwwtewqzuhzAkkyFw91hydO', '2022-03-26 02:11:10'),
(3, 'U22000003', '$2y$12$bMKqT4XhuVAnTj34r8UKGuDGXVwTQ86484E1XOo2vSrnch/WPHFgm', '2022-03-26 02:19:00'),
(4, 'U22000004', '$2y$12$1QOWygYX1TZFIc55AawM5.Wk3hfvYf3yLrH68CkXjbLR8iz1VxqfC', '2022-03-26 02:33:44'),
(5, '22000001', '$2y$12$VCc5Bg3Rg53N/AOn5kgnqOyGHA4GDmeZ1OTRHFcQbKCZkfPJXhZq2', '2022-03-26 02:35:23'),
(6, '22000002', '$2y$12$oPARbpu/a.mzORbD4/r5C.CfJQQw6C1AXFGmD5g22ZzR0psLXZJVK', '2022-03-26 02:39:06'),
(7, '22000003', '$2y$12$PXaiXb3iY9rwP7HG2eJL4ejGyMBScGdc3Q3GLu7MNcU3zvs.MMmu6', '2022-03-26 02:39:14'),
(8, '22000004', '$2y$12$MG8bSTOMtMUMUCSOOIO.meBpF9RZiCC8f5rIqOSFqdFdjy99UA55K', '2022-03-26 02:50:27'),
(9, '22010005', '$2y$12$wdTfYaILsuPo/79/GjN6uuxlrih1qQoENfVp6YEWMUAaBSlmtFBqa', '2022-03-26 02:57:32'),
(10, 'U22000005', '$2y$12$aRerCwv2zjANbOZ15RGby.MMIBnxN2Qtlp0oSyv03waQsxA9vypoq', '2022-03-26 04:20:30'),
(11, '22010006', '$2y$12$N9VOiulFUf5h0uxWE/An1.FngDVRvhXs.1uYEBh4vwkc0R..TNAiy', '2022-03-26 11:22:57'),
(12, '22010007', '$2y$12$KORvOB615Pk0Dfdu5W2w8.tCcdbZntDHHaPhMHtkMR3cAyFlYReda', '2022-03-27 11:29:33'),
(13, 'U22000006', '$2y$12$qZckoHg5HkSw3efLZAZl7.JM.Rj9w0XOmYgGBVHGup6KPgSda3FpC', '2022-03-27 11:56:11'),
(14, '22010008', '$2y$12$UZHnnexdTUb5x0mI3ARpkOYCKVEuMF.fsEoW6B3nKwipAJDGXBKfy', '2022-03-28 07:12:42'),
(15, '22010009', '$2y$12$LhKTWCXhdlKhsEL0eIYYROjwSQQp8i/rKD9qUDV/c.D4fGTDFzEWG', '2022-03-30 04:02:54'),
(16, '123456', '$2y$12$P3ArgEJLMMyMkNw7cN.ove1MMD5aAfya8EiZrq3L2wNCUStWpUj1G', '2022-03-30 04:20:30'),
(17, '22010010', '$2y$12$rd6VaGSuTz.r0UTcNfBDl.awqCGC06W9XdvnfMI5W9NBY0RFIwWuy', '2022-03-30 18:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `office` varchar(50) NOT NULL,
  `department` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `account_status` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `admin` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id`, `id_number`, `firstname`, `lastname`, `middlename`, `email`, `contact`, `address`, `office`, `department`, `role`, `account_status`, `about`, `admin`) VALUES
(1, 'U22000001', 'User', 'Management', NULL, 'UM@gmail.com', '09202345672', 'NONE', 'Administrator', 'User Management', 'User Management Administrator', 'Active', 'NONE', '1'),
(2, 'U22000002', 'Marvin', 'Marilao', 'L', 'marvinmarilao92@gmail.com', '9202966614', 'Ph. 2 Pkg. 2 Black 30 Lot 14 Bagong Silang Caloocan City', 'Registrar Department', 'DATMS', 'DATMS Administrator', 'Active', 'napaka pogi ko', ''),
(3, 'U22000003', 'Admission', 'Department', 'A', 'Admission@gmail.com', '9756238657', 'none', 'Admission', 'DATMS', 'Admission', 'Active', 'NONE', ''),
(4, 'U22000004', 'Cashier', 'department', '', 'Cashier@gmail.com', '9236263521', 'NONE', 'Cashier', 'DATMS', 'Cashier', 'Active', 'NONE', ''),
(5, 'U22000005', 'Super', 'Admin', '', 'superadmin@gmail.com', '9202966625', 'NONE', 'Administrator', 'SuperUser', 'SuperAdmin', 'Active', 'NONE', ''),
(6, 'U22000006', 'Approver', 'Account', '', 'approver@gmail.com', '9283672753', 'NONE', 'Registrar Department', 'DATMS', 'DATMS Approver', 'Active', 'NONE', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_trail`
--
ALTER TABLE `audit_trail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datms_doctype`
--
ALTER TABLE `datms_doctype`
  ADD PRIMARY KEY (`dt_id`);

--
-- Indexes for table `datms_documents`
--
ALTER TABLE `datms_documents`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `datms_office`
--
ALTER TABLE `datms_office`
  ADD PRIMARY KEY (`off_id`);

--
-- Indexes for table `datms_tracking`
--
ALTER TABLE `datms_tracking`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `department` (`department`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `student_application`
--
ALTER TABLE `student_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_information`
--
ALTER TABLE `student_information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`id_number`);

--
-- Indexes for table `teacher_information`
--
ALTER TABLE `teacher_information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_number` (`id_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_number` (`id_number`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_number` (`id_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `audit_trail`
--
ALTER TABLE `audit_trail`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `datms_doctype`
--
ALTER TABLE `datms_doctype`
  MODIFY `dt_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `datms_documents`
--
ALTER TABLE `datms_documents`
  MODIFY `doc_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `datms_office`
--
ALTER TABLE `datms_office`
  MODIFY `off_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `datms_tracking`
--
ALTER TABLE `datms_tracking`
  MODIFY `doc_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `student_application`
--
ALTER TABLE `student_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_information`
--
ALTER TABLE `student_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher_information`
--
ALTER TABLE `teacher_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
