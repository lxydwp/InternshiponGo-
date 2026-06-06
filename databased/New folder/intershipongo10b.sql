-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 02:25 AM
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
-- Database: `intershipongo10`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(100) NOT NULL,
  `adminNAME` varchar(100) DEFAULT NULL,
  `adminUSERNAME` varchar(100) DEFAULT NULL,
  `adminPASSWORD` varchar(100) DEFAULT NULL,
  `adminIMG` varchar(100) DEFAULT NULL,
  `adminNUMBER` varchar(100) DEFAULT NULL,
  `adminEMAIL` varchar(100) DEFAULT NULL,
  `code` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminNAME`, `adminUSERNAME`, `adminPASSWORD`, `adminIMG`, `adminNUMBER`, `adminEMAIL`, `code`) VALUES
(1, 'Administrator Account', 'admin', 'admin', '1672416335.jpg', '09857465756', 'biller1@email.com', 173953184);

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `agencyNAME` varchar(100) NOT NULL,
  `agencyPERSONEL` varchar(110) NOT NULL,
  `agencyIMG` varchar(100) DEFAULT NULL,
  `agencyUSERNAME` varchar(100) DEFAULT NULL,
  `agencyPASSWORD` varchar(100) DEFAULT NULL,
  `agencyCONTACT` varchar(100) DEFAULT NULL,
  `agencyLOCATION` varchar(110) DEFAULT NULL,
  `agencyID` int(10) NOT NULL,
  `agencyWORKAVAILID` varchar(100) DEFAULT NULL,
  `agencySTATUS` varchar(100) DEFAULT NULL,
  `code` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`agencyNAME`, `agencyPERSONEL`, `agencyIMG`, `agencyUSERNAME`, `agencyPASSWORD`, `agencyCONTACT`, `agencyLOCATION`, `agencyID`, `agencyWORKAVAILID`, `agencySTATUS`, `code`) VALUES
('SOCIAL SECURITY SYSTEM', 'MARCO A. YANGAT', '1672340839.jpg', 'coordinator', 'coordinator', '09000000001', 'AB Fernandez Avenue , East Gate Plaza, Dagupan City, Pangasinan', 1, '', 'Active', 1989141361),
('PHILIPPINE INFORMATION AGENCY', 'MS. VENUS MAY SARMIENTO', 'null.png', 'sample4', 'sample4', '09000000004', 'Poblacion, Lingayen, Pangasinan', 2, '', 'Active', NULL),
('PHILIPPINE HEALTH INSURANCE CORPORATION', 'ATTY. RODOLFO B. DEL ROSARIO, JR.', 'null.png', 'sample5', 'sample5', '09000000004', 'Sample', 4, '', 'Active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcementID` int(100) NOT NULL,
  `announcementTITLE` varchar(100) DEFAULT NULL,
  `announcementDES` varchar(1000) DEFAULT NULL,
  `announcementDATE` varchar(100) DEFAULT NULL,
  `announcementCREATORID` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcementID`, `announcementTITLE`, `announcementDES`, `announcementDATE`, `announcementCREATORID`) VALUES
(1, 'Sample Title Announcement', 'Sample Derails Announcement', 'November 7, 2022 12:00 PM', '1'),
(2, 'Sample Title Announcement 2', 'Sample Derails Announcement 2', 'November 7, 2022 12:00 PM', '1');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `applicantID` int(100) NOT NULL,
  `applicantWORK` int(100) DEFAULT NULL,
  `applicantSTUDENTID` int(100) DEFAULT NULL,
  `applicantAGENCYID` varchar(100) DEFAULT NULL,
  `applicantSTATUS` varchar(100) DEFAULT NULL,
  `applicantDATE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`applicantID`, `applicantWORK`, `applicantSTUDENTID`, `applicantAGENCYID`, `applicantSTATUS`, `applicantDATE`) VALUES
(15, 9, 3, '1', 'Accepted', 'February 05, 2023'),
(20, 9, 7, '1', 'Applied', 'February 07, 2023'),
(21, 9, 26, '1', 'Accepted', 'January 15, 2023');

-- --------------------------------------------------------

--
-- Table structure for table `attendanceparticipation`
--

CREATE TABLE `attendanceparticipation` (
  `AttendanceParticipationID` int(100) NOT NULL,
  `AttendanceParticipationSTUDENTID` varchar(100) DEFAULT NULL,
  `AttendanceParticipationPOINTS` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendanceparticipation`
--

INSERT INTO `attendanceparticipation` (`AttendanceParticipationID`, `AttendanceParticipationSTUDENTID`, `AttendanceParticipationPOINTS`) VALUES
(1, '6', '90');

-- --------------------------------------------------------

--
-- Table structure for table `cform`
--

CREATE TABLE `cform` (
  `CformID` int(50) NOT NULL,
  `Cformname` varchar(50) DEFAULT NULL,
  `Cdetails` varchar(50) DEFAULT NULL,
  `Cdisabled` varchar(20) DEFAULT NULL,
  `Cstatus` varchar(100) DEFAULT NULL,
  `Cdownloads` int(10) DEFAULT NULL,
  `Clink` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cform`
--

INSERT INTO `cform` (`CformID`, `Cformname`, `Cdetails`, `Cdisabled`, `Cstatus`, `Cdownloads`, `Clink`) VALUES
(1, 'Internship Resume', 'Before Deployment', '', '', 0, 'Resume.php'),
(3, 'Guidelines', 'Before Deployment', NULL, NULL, NULL, 'Guidelines.php'),
(4, '12 INTERNSHIP AGREEMENT', 'Before Deployment', NULL, NULL, NULL, 'INTERNSHIP AGREEMENT3.php'),
(5, 'PRACTICUM WEEKLY REPORT', 'during the training', NULL, NULL, NULL, '19 PRACTICUM WEEKLY REPORT.php'),
(6, '17 INTERNSHIP TIMEFRAME', 'during the training', NULL, NULL, NULL, '17 INTERNSHIP TIMEFRAME.php'),
(7, '21 Related Learning Experience Journal', 'during the training', NULL, NULL, NULL, '21 Related Learning Experience Journal.php'),
(8, 'Daily Journal', 'during the training', NULL, NULL, NULL, 'journalsave.php'),
(9, '10 MEMORANDUM OF AGREEMENT', 'Before Deployment', NULL, NULL, NULL, '10 MEMORANDUM OF AGREEMENT.php'),
(10, 'Consent and Waiver', 'Before Deployment', NULL, NULL, NULL, 'Consent and Waiver v2.docx updated.php'),
(11, 'ISO Endorsement Letter', 'Before Deployment', NULL, NULL, NULL, 'ISO Endorsement Letter2 - Copy.php'),
(12, 'APP FORM', 'Before Enrollment', NULL, NULL, NULL, 'APP FORM.php'),
(13, 'certificate of units earned for practicum', 'Before Enrollment', NULL, NULL, NULL, 'certificate of units earned for practicum.php'),
(14, '07-INTERNSHIP-ACADEMIC-PRACTICUM-COURSE', 'Upon Deployment', NULL, NULL, NULL, '07-INTERNSHIP-ACADEMIC-PRACTICUM-COURSE.php'),
(15, '15 Internship Release Form', 'Upon Deployment', NULL, NULL, NULL, '15 Internship Release Form.php'),
(16, '18 TRAINING AGREEMENT  (ot WAIVER)', 'Upon Deployment', NULL, NULL, NULL, '18 TRAINING AGREEMENT  (ot WAIVER).php');

-- --------------------------------------------------------

--
-- Table structure for table `dtr`
--

CREATE TABLE `dtr` (
  `dtrID` int(100) NOT NULL,
  `dtrSTUDENTID` varchar(100) DEFAULT NULL,
  `dtrTIMEINAM` varchar(100) DEFAULT NULL,
  `dtrTIMEOUTAM` varchar(100) DEFAULT NULL,
  `dtrTIMEINPM` varchar(100) DEFAULT NULL,
  `dtrTIMEOUTPM` varchar(100) DEFAULT NULL,
  `dtrMONTH` varchar(100) DEFAULT NULL,
  `dtrYEAR` varchar(100) DEFAULT NULL,
  `dtrFULLDATE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dtr`
--

INSERT INTO `dtr` (`dtrID`, `dtrSTUDENTID`, `dtrTIMEINAM`, `dtrTIMEOUTAM`, `dtrTIMEINPM`, `dtrTIMEOUTPM`, `dtrMONTH`, `dtrYEAR`, `dtrFULLDATE`) VALUES
(19, '6', NULL, NULL, '09:02:39 pm', '10:08:37 pm', NULL, NULL, '11-16-2022'),
(20, '6', NULL, NULL, '09:02:39 pm', '10:08:37 pm', NULL, NULL, '11-15-2022'),
(23, '6', '10:41:21 am', '12:00:00 pm', '01:00:00 pm', '5:00:00 pm', NULL, NULL, '11-17-2022'),
(24, '26', NULL, NULL, '02:42:53 pm', '06:11:37 pm', NULL, NULL, '01-11-2023'),
(25, '27', NULL, NULL, '02:56:20 pm', '06:16:07 pm', NULL, NULL, '01-11-2023'),
(26, '28', NULL, NULL, '05:53:49 pm', '05:53:59 pm', NULL, NULL, '01-11-2023'),
(27, '30', NULL, NULL, '08:10:29 pm', '08:17:07 pm', NULL, NULL, '01-11-2023'),
(28, '26', '06:51:00 am', '11:59:00 am', NULL, NULL, NULL, NULL, '01-12-2023'),
(29, '30', '06:58:32 am', '08:46:32 am', '', NULL, NULL, NULL, '01-12-2023'),
(30, '3', '09:37:23 am', '11:59:00 am', NULL, NULL, NULL, NULL, '01-25-2023'),
(33, '26', '8:00:21 am', '12:00:00 pm', '01:00:00 pm', '5:00:00 pm', NULL, NULL, '01-19-2023'),
(35, '26', '8:00:21 am', '12:00:00 pm', NULL, NULL, NULL, NULL, '02-10-2023'),
(36, '26', '8:00:21 am', '12:00:00 pm', '', '', NULL, NULL, '02-13-2023');

-- --------------------------------------------------------

--
-- Table structure for table `educationalbackground`
--

CREATE TABLE `educationalbackground` (
  `educationalbackgroundID` int(100) NOT NULL,
  `elementaryLEVEL` varchar(1000) DEFAULT NULL,
  `elementarySCHOOL` varchar(1000) DEFAULT NULL,
  `elementaryDATE` varchar(1000) DEFAULT NULL,
  `hightschoolLEVEL` varchar(1000) DEFAULT NULL,
  `hightschoolSCHOOL` varchar(1000) DEFAULT NULL,
  `hightschoolDATE` varchar(1000) DEFAULT NULL,
  `collegeLEVEL` varchar(1000) DEFAULT NULL,
  `collegeSCHOOL` varchar(1000) DEFAULT NULL,
  `collegeDATE` varchar(1000) DEFAULT NULL,
  `studentID` int(100) DEFAULT NULL,
  `extracirricular` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educationalbackground`
--

INSERT INTO `educationalbackground` (`educationalbackgroundID`, `elementaryLEVEL`, `elementarySCHOOL`, `elementaryDATE`, `hightschoolLEVEL`, `hightschoolSCHOOL`, `hightschoolDATE`, `collegeLEVEL`, `collegeSCHOOL`, `collegeDATE`, `studentID`, `extracirricular`) VALUES
(1, 'Elementary', 'Eztanza Elementary School', '2008-2011', 'High School', 'Eztanza High School School', '2011-2015', 'College', 'Pangasinan State University', '2016-2021', 6, '  '),
(2, 'Elementary', 'Namolan Elementary School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 26, ' '),
(3, 'Elementary', 'Sta. Rosa Elementary School', '2005-2011', 'High School', 'Camaley National High School', '2011-2015', 'College', 'Pangasinan State University', '2019-Up to present', 27, ' '),
(4, 'Elementary', 'Malindong Elementary School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 30, ' '),
(5, 'Elementary', 'Namolan West Lingayen, Pangasinan', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 31, ' '),
(6, 'Elementary', 'Sta. Rosa Elementary School', '2007-2013', 'High School', 'Camaley National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 32, ' '),
(7, 'Elementary', 'Tonton Elementary School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 33, ' '),
(8, 'Elementary', 'Lingayen I Central School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 34, ' '),
(9, 'Elementary', 'Binmaley I Central School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 35, ' '),
(10, 'Elementary', 'Lingayen I Central School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 36, ' '),
(11, 'Elementary', 'Bugallon Elementary School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 37, ' '),
(12, 'Elementary', 'Lingayen I Central School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 38, ' '),
(13, 'Elementary', 'Quibaol Elementary School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 39, ' '),
(14, 'Elementary', 'Binmaley I Central School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 40, ' '),
(15, 'Elementary', 'Tonton Elementary School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 41, ' '),
(16, 'Elementary', 'Naguilayan Elementary School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 42, ' '),
(17, 'Elementary', 'Lingayen I Central School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 43, ' '),
(18, 'Elementary', 'Binmaley I Central School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 44, ' '),
(19, 'Elementary', 'Lingayen I Central School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 45, ' '),
(20, 'Elementary', 'Malindong Elementary School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 46, ' '),
(21, 'Elementary', 'Labrador Elementary School', '2007-2013', 'High School', 'Labrador National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 47, ' '),
(22, 'Elementary', 'Bugallon Elementary School', '2007-2013', 'High School', 'Bugallon National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 48, ' '),
(23, 'Elementary', 'Bugallon Elementary School', '2007-2013', 'High School', 'Bugallon National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 49, ' '),
(24, 'Elementary', 'Labrador Elementary School', '2007-2013', 'High School', 'Labrador National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 50, ' '),
(25, 'Elementary', 'Bugallon Elementary School', '2007-2013', 'High School', 'Bugallon National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 51, ' '),
(26, 'Elementary', 'Aguilar Elementary School', '2007-2013', 'High School', 'Aguilar National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 52, ' '),
(27, 'Elementary', 'Bolinao Elementary School', '2007-2013', 'High School', 'Bolinao National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 53, ' '),
(28, 'Elementary', 'Bolinao Elementary School', '2007-2013', 'High School', 'Bolinao National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 54, ' '),
(29, 'Elementary', 'Bolinao Elementary School', '2007-2013', 'High School', 'Bolinao National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 55, ' '),
(30, 'Elementary', 'Bugallon Elementary School', '2007-2013', 'High School', 'Bugallon National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 56, ' '),
(31, 'Elementary', 'Mangatarem Elementary School', '2007-2013', 'High School', 'Mangatarem National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 57, ' '),
(32, 'Elementary', 'Mangatarem Elementary School', '2007-2013', 'High School', 'Mangatarem National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 58, ' '),
(33, 'Elementary', 'Mangatarem Elementary School', '2007-2013', 'High School', 'Mangatarem National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 59, ' '),
(34, 'Elementary', 'Bugallon Elementary School', '2007-2013', 'High School', 'Bugallon National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 60, ' '),
(35, 'Elementary', 'Bugallon Elementary School', '2007-2013', 'High School', 'Bugallon National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 61, ' '),
(36, 'Elementary', 'Bugallon Elementary School', '2007-2013', 'High School', 'Bugallon National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 62, ' '),
(37, 'Elementary', 'Labrador Elementary School', '2007-2013', 'High School', 'Labrador National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 63, ' '),
(38, 'Elementary', 'Bolinao Elementary School', '2007-2013', 'High School', 'Bolinao National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 64, ' '),
(39, 'Elementary', 'Aguilar Elementary School', '2007-2013', 'High School', 'Aguilar National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 65, ' '),
(40, 'Elementary', 'Mangatarem Elementary School', '2007-2013', 'High School', 'Mangatarem National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 66, ' '),
(41, 'Elementary', 'Bugallon Elementary School', '2007-2013', 'High School', 'Bugallon National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 67, ' '),
(42, 'Elementary', 'Lingayen I Central School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 68, ' '),
(43, 'Elementary', 'Tonton Elementary School', '2007-2013', 'High School', 'Dagupan City National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 69, ' '),
(44, 'Elementary', 'Aguilar Elementary School', '2007-2013', 'High School', 'Aguilar National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 70, ' '),
(45, 'Elementary', 'Mangatarem Elementary School', '2007-2013', 'High School', 'Mangatarem National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 71, ' '),
(46, 'Elementary', 'Bugallon Elementary School', '2007-2013', 'High School', 'Bugallon National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 72, ' '),
(47, 'Elementary', 'Bugallon Elementary School', '2007-2013', 'High School', 'Bugallon National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 73, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `formupload`
--

CREATE TABLE `formupload` (
  `formID` int(50) NOT NULL,
  `formname` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `disabled` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `downloads` int(10) NOT NULL,
  `link` varchar(100) NOT NULL,
  `size` varchar(100) DEFAULT NULL,
  `downloadcount` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `historylog`
--

CREATE TABLE `historylog` (
  `historylogID` int(100) NOT NULL,
  `historylogINFO` varchar(1000) NOT NULL,
  `historylogDATE` varchar(1000) NOT NULL,
  `loghistoryCOLOR` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historylog`
--

INSERT INTO `historylog` (`historylogID`, `historylogINFO`, `historylogDATE`, `loghistoryCOLOR`) VALUES
(26, 'Admin  disabled the account of Mark S. Cruz', 'January 11, 2023', 'text-warning'),
(27, 'Admin  Active the account of Mark S. Cruz', 'January 11, 2023', 'text-success');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructorID` int(100) NOT NULL,
  `instructorNAME` varchar(100) DEFAULT NULL,
  `instructorUSERNAME` varchar(100) DEFAULT NULL,
  `instructorPASSWORD` varchar(100) DEFAULT NULL,
  `instructorNUMBER` varchar(100) DEFAULT NULL,
  `instructorSECTIONHANDLE` varchar(100) DEFAULT NULL,
  `instructorCOURSE` varchar(100) DEFAULT NULL,
  `instructorSCHOOL` varchar(100) DEFAULT NULL,
  `instructorIMG` varchar(100) DEFAULT NULL,
  `instructorDATEADDED` varchar(100) DEFAULT NULL,
  `code` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructorID`, `instructorNAME`, `instructorUSERNAME`, `instructorPASSWORD`, `instructorNUMBER`, `instructorSECTIONHANDLE`, `instructorCOURSE`, `instructorSCHOOL`, `instructorIMG`, `instructorDATEADDED`, `code`) VALUES
(1, 'Sample Instructor', 'sample1', 'sample1', '09155882430', 'Section C', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', '1672359332.jpg', 'November 14, 2022', 2050892896),
(2, 'Erika Lim', 'sample2', 'sample2', '09231121125', NULL, 'Bachelor of Science in Computer Science', 'Pangasinan State University', '1668410379.jpg', 'November 14, 2022', NULL),
(3, 'ferdinand dalisay', '', '', '09123456789', 'Section A', 'bachelor of science in information technology', 'pangasinan state university', 'null.png', 'January 11, 2023', NULL),
(4, 'Ferdinand Dalisay', '42512', '42512', '09123456788', NULL, 'Bachelor of Science in Information Technology', 'Pangasinan  State University', '1673449984.jpg', 'January 11, 2023', NULL),
(5, 'Virgilio Aquino', '142-LN-548', '142-LN-548', '09454545452', NULL, 'Bachelor of Science in Computer Science', 'Pangasinan  State University', 'null.png', 'January 11, 2023', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ojtnarrativereport`
--

CREATE TABLE `ojtnarrativereport` (
  `OJTNarrativeReportID` int(100) NOT NULL,
  `OJTNarrativeReportIDSTUDENTID` int(100) DEFAULT NULL,
  `OJTNarrativeReportIDPOINTS` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ojtnarrativereport`
--

INSERT INTO `ojtnarrativereport` (`OJTNarrativeReportID`, `OJTNarrativeReportIDSTUDENTID`, `OJTNarrativeReportIDPOINTS`) VALUES
(1, 6, 90);

-- --------------------------------------------------------

--
-- Table structure for table `personality`
--

CREATE TABLE `personality` (
  `PersonalityID` int(100) NOT NULL,
  `PersonalitySTUDENTID` int(100) NOT NULL,
  `C1` int(100) NOT NULL DEFAULT 0,
  `C2` int(100) NOT NULL DEFAULT 0,
  `C3` int(100) NOT NULL DEFAULT 0,
  `C4` int(100) NOT NULL DEFAULT 0,
  `C5` int(100) NOT NULL DEFAULT 0,
  `C6` int(100) NOT NULL DEFAULT 0,
  `C7` int(100) NOT NULL DEFAULT 0,
  `C8` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personality`
--

INSERT INTO `personality` (`PersonalityID`, `PersonalitySTUDENTID`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`, `C8`) VALUES
(1, 6, 5, 5, 5, 5, 5, 5, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `professionalskills`
--

CREATE TABLE `professionalskills` (
  `ProfessionalSkillsID` int(100) NOT NULL,
  `ProfessionalSkillsSTUDENTID` int(100) NOT NULL,
  `B1` int(100) DEFAULT 0,
  `B2` int(100) NOT NULL DEFAULT 0,
  `B3` int(100) NOT NULL DEFAULT 0,
  `B4` int(100) NOT NULL DEFAULT 0,
  `B5` int(100) NOT NULL DEFAULT 0,
  `B6` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professionalskills`
--

INSERT INTO `professionalskills` (`ProfessionalSkillsID`, `ProfessionalSkillsSTUDENTID`, `B1`, `B2`, `B3`, `B4`, `B5`, `B6`) VALUES
(1, 6, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sectionID` int(100) NOT NULL,
  `sectionDes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sectionID`, `sectionDes`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E');

-- --------------------------------------------------------

--
-- Table structure for table `securityquestions`
--

CREATE TABLE `securityquestions` (
  `securityquestionsID` int(100) NOT NULL,
  `securityquestionsQ` varchar(1000) DEFAULT NULL,
  `securityquestionsA` varchar(100) DEFAULT NULL,
  `securityquestionsUSERTYPE` varchar(100) DEFAULT NULL,
  `securityquestionsUSERID` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `securityquestions`
--

INSERT INTO `securityquestions` (`securityquestionsID`, `securityquestionsQ`, `securityquestionsA`, `securityquestionsUSERTYPE`, `securityquestionsUSERID`) VALUES
(3, 'In what city were you born?', 'lingayen', 'agency', 1),
(6, 'In what city were you born?', 'Lingayen', 'admin', 1),
(7, 'In what city were you born?', 'lingayen', 'student', 0),
(8, 'In what city were you born?', 'Lingayen', 'instructor', 1),
(9, 'In what city were you born?', 'Lingayen', 'student', 3),
(10, 'In what city were you born?', 'Lingayen', 'student', 6),
(11, 'What was your favorite food as a child?', 'Strawberry', 'student', 26),
(12, 'What is the name of your favorite pet?', 'pepito', 'student', 27),
(13, 'What was the make of your first car?', 'Nissan', 'student', 30);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentID` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `birthdate` varchar(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `studentnumber` varchar(50) DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `contactnumber` varchar(20) DEFAULT NULL,
  `datecreated` varchar(20) DEFAULT NULL,
  `agency` varchar(100) DEFAULT NULL,
  `section` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `colleges` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `esignature` varchar(100) DEFAULT NULL,
  `classyear` varchar(100) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `civilstatus` varchar(100) DEFAULT NULL,
  `height` int(100) DEFAULT NULL,
  `weight` int(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `code` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `firstname`, `middlename`, `lastname`, `address`, `birthdate`, `gender`, `password`, `studentnumber`, `picture`, `contactnumber`, `datecreated`, `agency`, `section`, `department`, `colleges`, `email`, `esignature`, `classyear`, `religion`, `civilstatus`, `height`, `weight`, `status`, `code`) VALUES
(3, 'Josh', 'Dela Torre', 'Manaoat', 'Lingayen', '2020-10-17', 'Male', '18-LN-0001', '18-LN-0001', 'null.png', '', '', '', 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', '', 'null.png', '2022', NULL, NULL, NULL, NULL, 'Active', 1838108156),
(6, 'Rica', 'De Venecia', 'Perriras', 'Estanza, Lingayen, Pangasinan', 'November 01, 1999', 'Male', '18-LN-0002', '18-LN-0002', '1672409220.jpg', '09155882430', '12/05/2020 05:33:40 ', '', 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', '', 'null.png', '2022', 'Roman Catholics', 'Single', 55, 60, 'Active', 1510631354),
(7, 'Linda', 'Escano', 'Abalos', 'Binmaley', 'January 01, 1970', 'Female', '18-LN-0003', '18-LN-0003', 'null.png', '09771029025', '12/05/2020 06:36:48 ', '', 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', 'jessamaedreyes30@gmail.com', 'null.png', '2022', 'Roman Catholic', 'Single', 123, 45, 'Active', NULL),
(26, 'Ricalyn', 'De Venecia', 'Perriras', 'Namolan Lingayen, Pangasinan', 'March 01, 2001', 'Female', '19-LN-2080', '19-LN-2080', '1673419231.jpg', '09212963547', NULL, 'SOCIAL SECURITY SYSTEM', 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 0, 0, 'active', NULL),
(27, 'Dexter', 'Santillan', 'Vallejos', 'address', 'December 21, 1998', 'Male', '19-LN-1102', '19-LN-1102', 'null.png', '09081643015', NULL, '', 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 160, 50, 'active', 1795498088),
(28, 'firstname', 'lastname', 'middlename', 'address', NULL, NULL, '19-LN-2081', '19-LN-2081', 'null.png', NULL, NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', NULL, NULL, NULL, NULL, 'Deleted', NULL),
(29, 'Rosalinda', 'Escano', 'Abalos', 'address', NULL, NULL, '19-LN-2081', '19-LN-2081', 'null.png', NULL, NULL, '', 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', NULL, NULL, NULL, NULL, 'active', NULL),
(30, 'Joshua Ryan', 'Dela Torre', 'Manaoat', 'Malindong, Binmaley, Pangasinan', 'July 29, 2001', 'Male', '19-LN-2079', '19-LN-2079', '1673439743.png', '09467140372', NULL, '', 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 167, 68, 'active', NULL),
(31, 'Linda', 'Escano', 'Abalos', 'Gayaman, Binmaley, Pangasinan', 'March 02, 2001', 'Male', '19-LN-1090', '19-LN-1090', 'null.png', '09957514543', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 168, 68, 'active', NULL),
(32, 'Jessa', 'C.', 'Bugayong', 'address', 'January 01, 1970', 'Female', '19-LN-1345', '19-LN-1345', 'null.png', '09455970777', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 171, 49, 'active', NULL),
(33, 'Ezekiel', '', 'Carino', 'Baybay Polong, Binmaley, Pangasinan', 'May 14, 1998', 'Male', '19-LN-1801', '19-LN-1801', 'null.png', '09081643015', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 170, 85, 'active', NULL),
(34, 'Renz Daniel', '', 'Patata', 'Tonton, Lingayen, Pangasinan', 'January 03, 2001', 'Male', '19-LN-1831', '19-LN-1831', 'null.png', '09467140372', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 167, 54, 'active', NULL),
(35, 'Cyber Kyle', '', 'Matimtim', 'Gayaman, Binmaley, Pangasinan', 'March 03, 2001', 'Male', '19-LN-1201', '19-LN-1201', 'null.png', '09081643015', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 169, 54, 'active', NULL),
(36, 'Emmanuel', '', 'Manuel', 'Tonton, Lingayen, Pangasinan', 'July 25, 2001', 'Male', '19-LN-2078', '19-LN-2078', 'null.png', '09081643015', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 164, 85, 'active', NULL),
(37, 'Jerico', '', 'Melido', 'Bugallon, Lingayen, Pangasinan', 'January 01, 1970', 'Male', '19-LN-2090', '19-LN-2090', 'null.png', '09455970777', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 165, 49, 'active', NULL),
(38, 'Christian Jay', '', 'Miranda', 'address', 'October 25, 2001', 'Male', '19-LN-1678', '19-LN-1678', 'null.png', '09467140372', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 169, 74, 'active', NULL),
(39, 'Jomar', '', 'Pascua', 'address', 'October 08, 2000', 'Male', '19-LN-1000', '19-LN-1000', 'null.png', '09957514543', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 164, 51, 'active', NULL),
(40, 'Eros', '', 'Salazar', 'Gayaman, Binmaley, Pangasinan', 'March 16, 2000', 'Male', '19-LN-2000', '19-LN-2000', 'null.png', '09081643015', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 170, 85, 'active', NULL),
(41, 'Bejie', '', 'Hermosilla', 'address', 'December 26, 2000', 'Male', '19-LN-1300', '19-LN-1300', 'null.png', '09081643015', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 165, 49, 'active', NULL),
(42, 'Leonardo', '', 'Ramos', 'address', 'November 09, 2000', 'Male', '19-LN-2045', '19-LN-2045', 'null.png', '09957514543', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 164, 55, 'active', NULL),
(43, 'Diether', '', 'Absalon', 'Libsong East, Lingayen, Pangasinan', 'March 15, 2000', 'Male', '19-LN-1901', '19-LN-1901', 'null.png', '09957514543', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 170, 50, 'active', NULL),
(44, 'Mark Christopher', '', 'Velasco', 'Malindong, Binmaley, Pangasinan', 'January 19, 1989', 'Male', '19-LN-1899', '19-LN-1899', 'null.png', '09467140372', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 167, 49, 'active', NULL),
(45, 'Sherwin', 'Tibayan', 'Ramos', 'Baay, Lingayen, Pangasinan', 'July 19, 2000', 'Male', '19-LN-1675', '19-LN-1675', 'null.png', '09957514543', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 168, 59, 'active', NULL),
(46, 'Khrystan Nicole', 'Dela Torre', 'Manaoat', 'Malindong, Binmaley, Pangasinan', 'September 18, 2003', 'Male', '19-LN-1555', '19-LN-1555', 'null.png', '09467140372', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 165, 50, 'active', NULL),
(47, 'Kimkurt', '', 'Sinaking', 'Labrador, Pangasinan', 'February 15, 2001', 'Male', '19-LN-1444', '19-LN-1444', 'null.png', '09957514543', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 165, 50, 'active', NULL),
(48, 'Jelly Rose', '', 'Bataan', 'Bugallon, Lingayen, Pangasinan', 'March 18, 2002', 'Female', '19-LN-2341', '19-LN-2341', 'null.png', '09467140372', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 163, 49, 'active', NULL),
(49, 'Joseph', '', 'Llomo', 'Bugallon, Lingayen, Pangasinan', 'April 11, 2001', 'Male', '19-LN-1700', '19-LN-1700', 'null.png', '09957514543', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 165, 49, 'active', NULL),
(50, 'Ericson', '', 'Pabona', 'Labrador, Pangasinan', 'February 07, 2001', 'Male', '19-LN-1701', '19-LN-1701', 'null.png', '09467140372', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 164, 50, 'active', NULL),
(51, 'Jonalyn', '', 'Gulahab', 'Bugallon, Lingayen, Pangasinan', 'December 04, 2001', 'Female', '19-LN-1799', '19-LN-1799', 'null.png', '09455970777', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 164, 49, 'active', NULL),
(52, 'Elmeralyn', '', 'Gelua', 'Aguilar, Pangasinan', 'May 18, 2000', 'Female', '19-LN-1800', '19-LN-1800', 'null.png', '09081643015', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 165, 68, 'active', NULL),
(53, 'Jennifer', '', 'Carolino', 'Bolinao, Pangasinan', 'January 10, 2001', 'Female', '19-LN-1802', '19-LN-1802', 'null.png', '09957514543', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 165, 50, 'active', NULL),
(54, 'May Ann', 'Ponce', 'Corilla', 'Bolinao, Pangasinan', 'January 01, 1970', 'Female', '19-LN-1803', '19-LN-1803', 'null.png', '09455970777', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 163, 54, 'active', NULL),
(55, 'Richard', '', 'Beltran', 'Bolinao, Pangasinan', 'April 12, 2001', 'Male', '19-LN-2001', '19-LN-2001', 'null.png', '09957514543', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 165, 53, 'active', NULL),
(56, 'Thalia', '', 'Dumaquit', 'Bugallon, Lingayen, Pangasinan', 'January 31, 2000', 'Female', '19-LN-2002', '19-LN-2002', 'null.png', '09467140372', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Iglesia ni Cristo', 'Single', 164, 54, 'active', NULL),
(57, 'Kevin', '', 'Olunan', 'Mangatarem, Pangasinan', 'March 09, 2000', 'Male', '19-LN-2003', '19-LN-2003', 'null.png', '09455970777', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 164, 50, 'active', NULL),
(58, 'Paul', '', 'Pascua', 'Mangatarem, Pangasinan', 'January 04, 2001', 'Male', '19-LN-2004', '19-LN-2004', 'null.png', '09081643015', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 168, 68, 'active', NULL),
(59, 'Glenn', '', 'Saura', 'Mangatarem, Pangasinan', 'September 06, 2001', 'Male', '19-LN-2005', '19-LN-2005', 'null.png', '09455970777', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 165, 54, 'active', NULL),
(60, 'Lisabith', '', 'Carido', 'Bugallon, Lingayen, Pangasinan', 'April 25, 2000', 'Female', '19-LN-1910', '19-LN-1910', 'null.png', '09455970777', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Iglesia ni Cristo', 'Single', 160, 54, 'active', NULL),
(61, 'Cesara Marie', '', 'Cuares', 'Bugallon, Lingayen, Pangasinan', 'December 04, 2001', 'Female', '19-LN-2009', '19-LN-2009', 'null.png', '09455970777', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 158, 49, 'active', NULL),
(62, 'Jesica', '', 'Nialla', 'Bugallon, Lingayen, Pangasinan', 'May 30, 2001', 'Female', '19-LN-1400', '19-LN-1400', 'null.png', '09957514543', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 162, 53, 'active', NULL),
(63, 'Ivory', '', 'Nasaria', 'Labrador, Pangasinan', 'January 11, 2000', 'Female', '19-LN-2012', '19-LN-2012', 'null.png', '09467140372', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 164, 53, 'active', NULL),
(64, 'Ellen Mae', '', 'Dona', 'Bolinao, Pangasinan', 'October 24, 2000', 'Female', '19-LN-1987', '19-LN-1987', 'null.png', '09081643015', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 164, 54, 'active', NULL),
(65, 'Juslie', '', 'Sanchez', 'Aguilar, Pangasinan', 'June 07, 2000', 'Female', '19-LN-1980', '19-LN-1980', 'null.png', '09957514543', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 162, 50, 'active', NULL),
(66, 'Jon-jon', '', 'Anoc', 'Mangatarem, Pangasinan', 'March 15, 2000', 'Male', '19-LN-1990', '19-LN-1990', 'null.png', '09957514543', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 164, 50, 'active', NULL),
(67, 'Keanu', '', 'Santos', 'Bugallon, Lingayen, Pangasinan', 'June 14, 2000', 'Male', '19-LN-1781', '19-LN-1781', 'null.png', '09081643015', NULL, NULL, 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 173, 68, 'active', NULL),
(68, 'Remdell', '', 'Lomibao', 'Pangapisan Sur, Lingayen, Pangasinan', 'February 10, 2000', 'Male', '19-LN-2450', '19-LN-2450', 'null.png', '09957514543', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 164, 59, 'active', NULL),
(69, 'Mc Alvin', '', 'Bautista', 'Tonton, Lingayen, Pangasinan', 'March 16, 2000', 'Male', '19-LN-2312', '19-LN-2312', 'null.png', '09455970777', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 171, 57, 'active', NULL),
(70, 'Rica', '', 'Custodio', 'Aguilar, Pangasinan', 'January 17, 2000', 'Female', '19-LN-1222', '19-LN-1222', 'null.png', '09455970777', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 164, 68, 'active', NULL),
(71, 'Benzen', '', 'Pascua', 'Mangatarem, Pangasinan', 'May 01, 2000', 'Male', '19-LN-1223', '19-LN-1223', 'null.png', '09455970777', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 165, 68, 'active', NULL),
(72, 'Anesty Clair', '', 'Garingarao', 'Bugallon, Lingayen, Pangasinan', 'April 01, 2001', 'Female', '19-LN-1311', '19-LN-1311', 'null.png', '09455970777', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 163, 50, 'active', NULL),
(73, 'Jella Ann', '', 'Mejia', 'Bugallon, Lingayen, Pangasinan', 'March 09, 2000', 'Female', '19-LN-1346', '19-LN-1346', 'null.png', '09455970777', NULL, NULL, 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 162, 50, 'active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentdownload`
--

CREATE TABLE `studentdownload` (
  `downloadID` int(50) NOT NULL,
  `studentID` int(50) NOT NULL,
  `disabled` varchar(50) NOT NULL,
  `formID` int(11) NOT NULL,
  `count` int(50) NOT NULL,
  `date` varchar(100) NOT NULL,
  `linkID` int(10) NOT NULL,
  `seen` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdownload`
--

INSERT INTO `studentdownload` (`downloadID`, `studentID`, `disabled`, `formID`, `count`, `date`, `linkID`, `seen`, `name`) VALUES
(198, 0, 'YES', 6, 1, '01/11/2023 03:44:37 pm', 0, 0, 'Dexter Santillan Vallejos'),
(199, 0, 'YES', 3, 1, '01/11/2023 08:00:03 pm', 0, 0, 'Joshua Ryan Dela Torre Manaoat'),
(200, 0, 'YES', 4, 1, '01/11/2023 08:00:12 pm', 0, 0, 'Joshua Ryan Dela Torre Manaoat'),
(201, 0, 'YES', 10, 1, '01/11/2023 08:02:04 pm', 0, 0, 'Joshua Ryan Dela Torre Manaoat'),
(202, 0, 'YES', 12, 1, '01/11/2023 08:06:30 pm', 0, 0, 'Joshua Ryan Dela Torre Manaoat');

-- --------------------------------------------------------

--
-- Table structure for table `studentjournal`
--

CREATE TABLE `studentjournal` (
  `journalID` int(50) NOT NULL,
  `studentID` int(50) NOT NULL,
  `agency` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `school` varchar(100) DEFAULT NULL,
  `journaldate` varchar(100) NOT NULL,
  `numberofhours` int(50) NOT NULL,
  `objectives` varchar(5000) NOT NULL,
  `reflection` varchar(500) NOT NULL,
  `accomplishment` varchar(500) NOT NULL,
  `realization` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentjournal`
--

INSERT INTO `studentjournal` (`journalID`, `studentID`, `agency`, `department`, `school`, `journaldate`, `numberofhours`, `objectives`, `reflection`, `accomplishment`, `realization`) VALUES
(6, 26, 'Vets Choice Radiology', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', 'January 11, 2023', 8, 'Lorem ipsum dolor sit amet, ex ius elit verterem legendos. Nec an amet nostrum, his agam putant te. No utroque impedit duo, vix cu epicuri posidonium. Pri ad aperiam nonumes.', 'Sale saepe phaedrum at pro. Etiam forensibus duo ea, nec te maiorum efficiendi, vim in minimum molestiae. Et maiorum interpretaris est, omnes platonem vis no. Et his assum fuisset, quo eu liber pertinacia. Sed ut sanctus eloquentiam, duis omnis argumentum vis ea, dolorem gloriatur ius et', 'Vim ei agam quot, ne his legendos appellantur. Id ubique melius has. His amet noster ea, no nisl praesent deseruisse has. Vis ex singulis invenire sensibus. Erat fastidii appetere sit no, mei ut discere utroque nominavi.', 'Mel eu animal delicatissimi. Cibo concludaturque sed ea, eu atqui decore dolorem his. Debet fastidii ea nam. Nisl phaedrum assentior ex duo.'),
(7, 26, 'Vets Choice Radiology', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', 'January 12, 2023', 8, 'Lorem ipsum dolor sit amet, ex ius elit verterem legendos. Nec an amet nostrum, his agam putant te. No utroque impedit duo, vix cu epicuri posidonium. Pri ad aperiam nonumes.', 'Sale saepe phaedrum at pro. Etiam forensibus duo ea, nec te maiorum efficiendi, vim in minimum molestiae. Et maiorum interpretaris est, omnes platonem vis no. Et his assum fuisset, quo eu liber pertinacia. Sed ut sanctus eloquentiam, duis omnis argumentum vis ea, dolorem gloriatur ius et', 'Vim ei agam quot, ne his legendos appellantur. Id ubique melius has. His amet noster ea, no nisl praesent deseruisse has. Vis ex singulis invenire sensibus. Erat fastidii appetere sit no, mei ut discere utroque nominavi.', 'Mel eu animal delicatissimi. Cibo concludaturque sed ea, eu atqui decore dolorem his. Debet fastidii ea nam. Nisl phaedrum assentior ex duo.'),
(8, 26, 'Vets Choice Radiology', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', 'January 19, 2023', 8, 'Lorem ipsum dolor sit amet, ex ius elit verterem legendos. Nec an amet nostrum, his agam putant te. No utroque impedit duo, vix cu epicuri posidonium. Pri ad aperiam nonumes.', 'Sale saepe phaedrum at pro. Etiam forensibus duo ea, nec te maiorum efficiendi, vim in minimum molestiae. Et maiorum interpretaris est, omnes platonem vis no. Et his assum fuisset, quo eu liber pertinacia. Sed ut sanctus eloquentiam, duis omnis argumentum vis ea, dolorem gloriatur ius et', 'Vim ei agam quot, ne his legendos appellantur. Id ubique melius has. His amet noster ea, no nisl praesent deseruisse has. Vis ex singulis invenire sensibus. Erat fastidii appetere sit no, mei ut discere utroque nominavi.', 'Mel eu animal delicatissimi. Cibo concludaturque sed ea, eu atqui decore dolorem his. Debet fastidii ea nam. Nisl phaedrum assentior ex duo.'),
(9, 26, 'SOCIAL SECURITY SYSTEM', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', 'February 13, 2023', 8, ' sds  sdsdsd dsdsds sdsdsds', '  sds  sdsdsd dsdsds sdsdsds', '  sds  sdsdsd dsdsds sdsdsds', '  sds  sdsdsd dsdsds sdsdsds');

-- --------------------------------------------------------

--
-- Table structure for table `studentskills`
--

CREATE TABLE `studentskills` (
  `studentskillsID` int(100) NOT NULL,
  `studentskillsTAGNAME` varchar(100) NOT NULL,
  `studentskillsSTUDENTID` int(100) NOT NULL,
  `studentskillsDES` varchar(100) DEFAULT NULL,
  `studentskillsRATE` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentskills`
--

INSERT INTO `studentskills` (`studentskillsID`, `studentskillsTAGNAME`, `studentskillsSTUDENTID`, `studentskillsDES`, `studentskillsRATE`) VALUES
(190, 'Java Developer', 26, 'cus', 3),
(191, 'Networking', 26, 'check', 5),
(192, 'PHP Deleveloper', 26, 'check', 5),
(193, 'students', 26, 'check', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `tagID` int(100) NOT NULL,
  `tagNAME` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tagID`, `tagNAME`) VALUES
(1, 'Networking'),
(3, 'Digital Design'),
(4, 'Web Designing'),
(5, 'Techincal'),
(6, 'PHP Deleveloper'),
(7, 'Encoder');

-- --------------------------------------------------------

--
-- Table structure for table `technicalskills`
--

CREATE TABLE `technicalskills` (
  `TechnicalSkillsID` int(100) NOT NULL,
  `TechnicalSkillsSTUDENTID` int(100) NOT NULL,
  `A1` int(100) NOT NULL,
  `A2` int(100) NOT NULL,
  `A3` int(100) NOT NULL,
  `A4` int(100) NOT NULL,
  `A5` int(100) NOT NULL,
  `A6` int(100) NOT NULL,
  `A7` int(100) NOT NULL,
  `A8` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technicalskills`
--

INSERT INTO `technicalskills` (`TechnicalSkillsID`, `TechnicalSkillsSTUDENTID`, `A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `A7`, `A8`) VALUES
(5, 6, 1, 5, 5, 5, 4, 5, 5, 4),
(6, 27, 5, 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `trainingsID` int(100) NOT NULL,
  `trainingsINCLUSIVEDATE` varchar(1000) DEFAULT NULL,
  `trainingsACTION` varchar(1000) NOT NULL,
  `trainingsSTUDENTID` int(11) NOT NULL,
  `trainingsTITLE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`trainingsID`, `trainingsINCLUSIVEDATE`, `trainingsACTION`, `trainingsSTUDENTID`, `trainingsTITLE`) VALUES
(2, '2022-12-13', 'trainings1', 6, 'Quality Assurance (Q/A) Training & Seminar');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `workID` int(11) NOT NULL,
  `workNAME` varchar(100) DEFAULT NULL,
  `workAGENCYID` varchar(100) DEFAULT NULL,
  `workDETAILS` varchar(1000) DEFAULT NULL,
  `workQUALIFICATIONS` varchar(1000) DEFAULT NULL,
  `workDUTIES` varchar(1000) DEFAULT NULL,
  `workSTATUS` varchar(100) DEFAULT NULL,
  `workNUMBER` varchar(100) DEFAULT NULL,
  `workYEAR` varchar(100) DEFAULT NULL,
  `workDATE` varchar(100) DEFAULT NULL,
  `worktags` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`workID`, `workNAME`, `workAGENCYID`, `workDETAILS`, `workQUALIFICATIONS`, `workDUTIES`, `workSTATUS`, `workNUMBER`, `workYEAR`, `workDATE`, `worktags`) VALUES
(9, 'IT Technician', '1', 'The NYU Stern School of Business has an exciting opportunity for an IT Technician to join the Information Technology Department. The selected candidate will provide ongoing technical support to permanent information technology and media installations, perform skilled maintenance and extensive equipment repair, troubleshoot equipment problems in the field, operate a variety of specialized equipment, and consult with client employees on IT/media requirements and capabilities. The IT Technician will also assist with training of student and/or casual employees and assist with training of junior technical support staff.', 'A Bachelor’s degree,\r\n2 years of related experience, knowledge of PC based,\r\nmulti-media applications', 'experience providing customer support, ', 'Active', '10', 'February 05, 2023', '2023', 'Digital Design,Techincal,'),
(10, 'Computer Support Technician', '1', 'Provide technical and customer assistance to customers, such as orienting them to learning management system, survey system and other computer resources, and resolving common customer problems. Monitor adherence to policies and procedures, such as verifying eligibility for access to systems. Provide reports and transcripts to users and the team as needed. Maintain merges of accounts and uploads of users to the learning management system. Train users in operating equipment. Troubleshoot hardware and software problems and perform basic maintenance and repair of parts and equipment. Analyze, evaluate and diagnose technical problems, report, recommend and document solutions.', 'High School diploma,equivalent and some relevant technical training,\r\n1-2 years of related experience, Experience in a customer service related field', 'N/A', 'Active', '2', 'February 07, 2023', '2023', 'Networking,Encoder,'),
(13, 'User Support Analyst', '1', ' This position will be a part of a highly-collaborative team of Full Time Staff and Student Employees in providing technical support, maintenance, and insight to services at the STCs. Services includes desktop computers, software, Audio Visual Booths, Video Game and Virtual Reality platforms, and a computer classroom. A largely people-focused position as much as technical, the User Support Analyst trains and supervises 13-20 student employees, and consults with faculty and students with technology needs for their classes.', 'High School Diploma,Bachelor Degree', 'n/a', 'Active', '1', 'February 07, 2023', '2023', 'Networking,'),
(14, 'Sample Job', '1', ' customer problems. Monitor adherence to policies and procedures, such as verifying eligibility for access to systems. Provide reports and transcripts to users and the team as needed. Maintain', '1 year experience,college graduate', 'n/a', 'Active', '1', 'February 08, 2023', '2023', 'Networking,,Network Engineer,Techincal');

-- --------------------------------------------------------

--
-- Table structure for table `workexperience`
--

CREATE TABLE `workexperience` (
  `workexperienceID` int(100) NOT NULL,
  `workexperienceINCLUSIVEDATE` varchar(1000) DEFAULT NULL,
  `workexperienceEMPLOYER` varchar(1000) DEFAULT NULL,
  `workexperiencePOSITION` varchar(100) DEFAULT NULL,
  `workexperienceACTION` varchar(1000) NOT NULL,
  `workexperienceSTUDENTID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workexperience`
--

INSERT INTO `workexperience` (`workexperienceID`, `workexperienceINCLUSIVEDATE`, `workexperienceEMPLOYER`, `workexperiencePOSITION`, `workexperienceACTION`, `workexperienceSTUDENTID`) VALUES
(2, '2022-12-01', 'Labrador Central School', 'Admin', 'workexperience1', 6),
(3, '2022-12-12', 'Pangasinan State University', 'Programmer', 'workexperience2', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`agencyID`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcementID`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`applicantID`);

--
-- Indexes for table `attendanceparticipation`
--
ALTER TABLE `attendanceparticipation`
  ADD PRIMARY KEY (`AttendanceParticipationID`);

--
-- Indexes for table `cform`
--
ALTER TABLE `cform`
  ADD PRIMARY KEY (`CformID`);

--
-- Indexes for table `dtr`
--
ALTER TABLE `dtr`
  ADD PRIMARY KEY (`dtrID`);

--
-- Indexes for table `educationalbackground`
--
ALTER TABLE `educationalbackground`
  ADD PRIMARY KEY (`educationalbackgroundID`);

--
-- Indexes for table `formupload`
--
ALTER TABLE `formupload`
  ADD PRIMARY KEY (`formID`);

--
-- Indexes for table `historylog`
--
ALTER TABLE `historylog`
  ADD PRIMARY KEY (`historylogID`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructorID`);

--
-- Indexes for table `ojtnarrativereport`
--
ALTER TABLE `ojtnarrativereport`
  ADD PRIMARY KEY (`OJTNarrativeReportID`);

--
-- Indexes for table `personality`
--
ALTER TABLE `personality`
  ADD PRIMARY KEY (`PersonalityID`);

--
-- Indexes for table `professionalskills`
--
ALTER TABLE `professionalskills`
  ADD PRIMARY KEY (`ProfessionalSkillsID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sectionID`);

--
-- Indexes for table `securityquestions`
--
ALTER TABLE `securityquestions`
  ADD PRIMARY KEY (`securityquestionsID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`);

--
-- Indexes for table `studentdownload`
--
ALTER TABLE `studentdownload`
  ADD PRIMARY KEY (`downloadID`);

--
-- Indexes for table `studentjournal`
--
ALTER TABLE `studentjournal`
  ADD PRIMARY KEY (`journalID`);

--
-- Indexes for table `studentskills`
--
ALTER TABLE `studentskills`
  ADD PRIMARY KEY (`studentskillsID`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tagID`);

--
-- Indexes for table `technicalskills`
--
ALTER TABLE `technicalskills`
  ADD PRIMARY KEY (`TechnicalSkillsID`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`trainingsID`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`workID`);

--
-- Indexes for table `workexperience`
--
ALTER TABLE `workexperience`
  ADD PRIMARY KEY (`workexperienceID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `agencyID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcementID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `applicantID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `attendanceparticipation`
--
ALTER TABLE `attendanceparticipation`
  MODIFY `AttendanceParticipationID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cform`
--
ALTER TABLE `cform`
  MODIFY `CformID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `dtr`
--
ALTER TABLE `dtr`
  MODIFY `dtrID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `educationalbackground`
--
ALTER TABLE `educationalbackground`
  MODIFY `educationalbackgroundID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `formupload`
--
ALTER TABLE `formupload`
  MODIFY `formID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `historylog`
--
ALTER TABLE `historylog`
  MODIFY `historylogID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructorID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ojtnarrativereport`
--
ALTER TABLE `ojtnarrativereport`
  MODIFY `OJTNarrativeReportID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personality`
--
ALTER TABLE `personality`
  MODIFY `PersonalityID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `professionalskills`
--
ALTER TABLE `professionalskills`
  MODIFY `ProfessionalSkillsID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sectionID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `securityquestions`
--
ALTER TABLE `securityquestions`
  MODIFY `securityquestionsID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `studentdownload`
--
ALTER TABLE `studentdownload`
  MODIFY `downloadID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `studentjournal`
--
ALTER TABLE `studentjournal`
  MODIFY `journalID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `studentskills`
--
ALTER TABLE `studentskills`
  MODIFY `studentskillsID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tagID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `technicalskills`
--
ALTER TABLE `technicalskills`
  MODIFY `TechnicalSkillsID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `trainingsID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `workID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `workexperience`
--
ALTER TABLE `workexperience`
  MODIFY `workexperienceID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
