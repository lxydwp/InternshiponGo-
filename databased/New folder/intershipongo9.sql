-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 07:29 AM
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
-- Database: `intershipongo9`
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
('Vets Choice Radiology', 'Lyza Cruz', '1672340839.jpg', 'coordinator', 'coordinator', '09000000001', 'Sample', 1, '', 'Active', 1989141361),
('PHILIPPINE INFORMATION AGENCY', 'MS. VENUS MAY SARMIENTO', 'null.png', 'sample4', 'sample4', '09000000004', 'Poblacion, Lingayen, Pangasinan', 2, '', 'Active', NULL),
('GIRL SCOUTS OF THE PHILIPPINES', 'Sample 1', 'null.png', 'sample3', 'sample3', '09000000003', 'Sample', 3, '', 'Active', NULL),
('PHILIPPINE HEALTH INSURANCE CORPORATION', 'ATTY. RODOLFO B. DEL ROSARIO, JR.', 'null.png', 'sample5', 'sample5', '09000000004', 'Sample', 4, '', 'Active', NULL),
('YES FM', 'Sample 2', 'null.png', 'sample6', 'sample6', '09000000005', 'Sample', 5, '', 'Active', NULL),
('RTC LINGAYEN', 'Sample 3', 'null.png', 'sample7', 'sample7', '09000000006', 'Sample', 6, '', 'Active', NULL),
('Provincial Library', 'mark lacson', 'null.png', '', '', '09123456788', 'Lingayen', 9, NULL, NULL, NULL),
('Provincial Library', 'Mark lacson', 'null.png', 'Library ', 'Library ', '09123456788', 'Lingayen', 12, NULL, NULL, NULL),
('Provincial Library', 'Ricaaaa', 'null.png', '354-LIN-543', '354-LIN-543', '09784561234', 'Lingayen', 13, NULL, 'Active', NULL);

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
(15, 9, 3, '1', 'Applied', 'February 05, 2023');

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
(1, 'Internship Resume', '', '', '', 0, 'Resume.php');

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
(28, '26', '06:51:00 am', NULL, NULL, NULL, NULL, NULL, '01-12-2023'),
(29, '30', '06:58:32 am', '08:46:32 am', NULL, NULL, NULL, NULL, '01-12-2023'),
(30, '3', '09:37:23 am', NULL, NULL, NULL, NULL, NULL, '01-25-2023');

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
(4, 'Elementary', 'Malindong Elementary School', '2007-2013', 'High School', 'Pangasinan National High School', '2013-2019', 'College', 'Pangasinan State University', '2019-Up to present', 30, ' ');

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

--
-- Dumping data for table `formupload`
--

INSERT INTO `formupload` (`formID`, `formname`, `details`, `disabled`, `status`, `downloads`, `link`, `size`, `downloadcount`) VALUES
(3, 'Resume.pdf', 'Resume Form', 'NO', 'before deployment', 0, 'ir.php', NULL, NULL),
(4, 'APP FORM.pdf', 'Application Form', 'NO', 'before enrollment', 0, 'afi.php', NULL, NULL),
(6, '(Guidelines).docx', 'Guidelines', 'NO', 'before deployment', 0, '(Guidelines).pdf', NULL, NULL),
(7, '12 INTERNSHIP AGREEMENT.docx', 'INTERNSHIP AGREEMENT', 'NO', 'before deployment', 0, '12 INTERNSHIP AGREEMENT.php', NULL, NULL),
(8, 'Consent and Waiver v2.docx updated.docx', 'Consent and Waiver', 'NO', 'before deployment', 0, 'CONSENTANDWAIVER.html', NULL, NULL),
(9, 'ISO Endorsement Letter2.docx', 'ISO Endorsement Letter', 'NO', 'before deployment', 0, 'ENDORSEMENTLETTER.html', NULL, NULL),
(10, 'certificate of units earned for practicum.docx', 'certificate of units earned for practicum', 'NO', 'before enrollment', 0, 'CERTIFICATIONOFUNITS.html', NULL, NULL),
(11, '17 INTERNSHIP TIMEFRAME.docx', 'INTERNSHIP TIMEFRAME', '', 'during training', 0, 'INTERNSHIPTIMEFRAME.html', NULL, NULL),
(12, '19 PRACTICUM WEEKLY REPORT.docx', 'PRACTICUM WEEKLY REPORT', '', 'during training', 0, 'PRACTICUM-INTERNSHIPWEEKLY.html', NULL, NULL);

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
(26, 'Ricalyn', 'De Venecia', 'Perriras', 'Namolan Lingayen, Pangasinan', 'January 01, 1970', '', '19-LN-2080', '19-LN-2080', '1673419231.jpg', '', NULL, '', NULL, 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', '', '', 0, 0, 'active', NULL),
(27, 'Dexter', 'Santillan', 'Vallejos', 'address', 'December 21, 1998', 'Male', '19-LN-1102', '19-LN-1102', 'null.png', '09081643015', NULL, '', NULL, 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 160, 50, 'active', 1795498088),
(28, 'firstname', 'lastname', 'middlename', 'address', NULL, NULL, '19-LN-2081', '19-LN-2081', 'null.png', NULL, NULL, NULL, NULL, 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', NULL, NULL, NULL, NULL, 'Deleted', NULL),
(29, 'Rosalinda', 'Escano', 'Abalos', 'address', NULL, NULL, '19-LN-2081', '19-LN-2081', 'null.png', NULL, NULL, '', NULL, 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', NULL, NULL, NULL, NULL, 'active', NULL),
(30, 'Joshua Ryan', 'Dela Torre', 'Manaoat', 'Malindong, Binmaley, Pangasinan', 'July 29, 2001', 'Male', '19-LN-2079', '19-LN-2079', '1673439743.png', '09467140372', NULL, '', NULL, 'Bachelor of Science in Information and Technology', 'Pangasinan State University', NULL, NULL, '2023', 'Roman Catholic', 'Single', 167, 68, 'active', NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `studentskills`
--

CREATE TABLE `studentskills` (
  `studentskillsID` int(100) NOT NULL,
  `studentskillsTAGNAME` varchar(100) NOT NULL,
  `studentskillsSTUDENTID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentskills`
--

INSERT INTO `studentskills` (`studentskillsID`, `studentskillsTAGNAME`, `studentskillsSTUDENTID`) VALUES
(15, 'Networking', 3),
(16, 'Techincal', 3),
(17, 'students', 3);

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
(9, 'IT Technician - Information Technology Department', '1', 'The NYU Stern School of Business has an exciting opportunity for an IT Technician to join the Information Technology Department. The selected candidate will provide ongoing technical support to permanent information technology and media installations, perform skilled maintenance and extensive equipment repair, troubleshoot equipment problems in the field, operate a variety of specialized equipment, and consult with client employees on IT/media requirements and capabilities. The IT Technician will also assist with training of student and/or casual employees and assist with training of junior technical support staff.', 'A Bachelor’s degree,\r\n2 years of related experience, knowledge of PC based,\r\nmulti-media applications', 'experience providing customer support, ', 'Active', '10', 'February 05, 2023', '2023', 'Digital Design,Techincal,');

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
  MODIFY `applicantID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `attendanceparticipation`
--
ALTER TABLE `attendanceparticipation`
  MODIFY `AttendanceParticipationID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cform`
--
ALTER TABLE `cform`
  MODIFY `CformID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dtr`
--
ALTER TABLE `dtr`
  MODIFY `dtrID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `educationalbackground`
--
ALTER TABLE `educationalbackground`
  MODIFY `educationalbackgroundID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `securityquestions`
--
ALTER TABLE `securityquestions`
  MODIFY `securityquestionsID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `studentdownload`
--
ALTER TABLE `studentdownload`
  MODIFY `downloadID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `studentjournal`
--
ALTER TABLE `studentjournal`
  MODIFY `journalID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `studentskills`
--
ALTER TABLE `studentskills`
  MODIFY `studentskillsID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `workID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `workexperience`
--
ALTER TABLE `workexperience`
  MODIFY `workexperienceID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
