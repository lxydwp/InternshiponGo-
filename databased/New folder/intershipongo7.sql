-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 12:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intershipongo7`
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
('Vets Choice Radiology', 'Lyza Cruz', '1672340839.jpg', 'sample1', 'sample1', '09000000001', 'Sample', 1, '', 'Active', 1989141361),
('PHILIPPINE INFORMATION AGENCY', 'MS. VENUS MAY SARMIENTO', 'null.png', 'sample4', 'sample4', '09000000004', 'Poblacion, Lingayen, Pangasinan', 2, '', 'Active', NULL),
('GIRL SCOUTS OF THE PHILIPPINES', 'Sample 1', 'null.png', 'sample3', 'sample3', '09000000003', 'Sample', 3, '', 'Active', NULL),
('PHILIPPINE HEALTH INSURANCE CORPORATION', 'ATTY. RODOLFO B. DEL ROSARIO, JR.', 'null.png', 'sample5', 'sample5', '09000000004', 'Sample', 4, '', 'Active', NULL),
('YES FM', 'Sample 2', 'null.png', 'sample6', 'sample6', '09000000005', 'Sample', 5, '', 'Active', NULL),
('RTC LINGAYEN', 'Sample 3', 'null.png', 'sample7', 'sample7', '09000000006', 'Sample', 6, '', 'Active', NULL);

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
(3, 3, 6, '1', 'Accepted', 'November 10, 2022'),
(4, 4, 6, '1', 'Cancelled', 'November 10, 2022'),
(5, 4, 3, '1', 'Accepted', 'December 27, 2022'),
(6, 4, 7, '1', 'Applied', 'December 30, 2022'),
(7, 6, 7, '1', 'Applied', 'December 30, 2022');

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
(23, '6', '10:41:21 am', '12:00:00 pm', '01:00:00 pm', '5:00:00 pm', NULL, NULL, '11-17-2022');

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
(1, 'Elementary', 'Eztanza Elementary School', '2008-2011', 'High School', 'Eztanza High School School', '2011-2015', 'College', 'Pangasinan State University', '2016-2021', 6, '  ');

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
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formupload`
--

INSERT INTO `formupload` (`formID`, `formname`, `details`, `disabled`, `status`, `downloads`, `link`) VALUES
(3, 'Resume.pdf', 'Resume Form', 'NO', 'before deployment', 0, 'ir.php'),
(4, 'APP FORM.pdf', 'Application Form', 'NO', 'before enrollment', 0, 'afi.php'),
(6, '(Guidelines).docx', 'Guidelines', 'NO', 'before deployment', 0, 'guidelines.html'),
(7, '12 INTERNSHIP AGREEMENT.docx', 'INTERNSHIP AGREEMENT', 'NO', 'before deployment', 0, 'INTERNSHIPAGREEMENT.html'),
(8, 'Consent and Waiver v2.docx updated.docx', 'Consent and Waiver', 'NO', 'before deployment', 0, 'CONSENTANDWAIVER.html'),
(9, 'ISO Endorsement Letter2.docx', 'ISO Endorsement Letter', 'NO', 'before deployment', 0, 'ENDORSEMENTLETTER.html'),
(10, 'certificate of units earned for practicum.docx', 'certificate of units earned for practicum', 'NO', 'before enrollment', 0, 'CERTIFICATIONOFUNITS.html'),
(11, '17 INTERNSHIP TIMEFRAME.docx', 'INTERNSHIP TIMEFRAME', '', 'during training', 0, 'INTERNSHIPTIMEFRAME.html'),
(12, '19 PRACTICUM WEEKLY REPORT.docx', 'PRACTICUM WEEKLY REPORT', '', 'during training', 0, 'PRACTICUM-INTERNSHIPWEEKLY.html'),
(13, '21 Related Learning Experience Journal.docx', 'Related Learning Experience Journal', '', 'during training', 0, 'inprogress.html');

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
(1, 'Lyza Rami of agency name Vets Choice Radiology update the work name Marketing Specialist', 'December 30, 2022', 'text-primary'),
(2, 'Lyza Rami of agency name Vets Choice Radiology delete the work name Warehouse II', 'December 30, 2022', 'text-danger'),
(3, 'Lyza Rami of agency name Vets Choice Radiology disabled the work name Technical Support Associate', 'December 30, 2022', 'text-warning'),
(4, 'Lyza Rami of agency name Vets Choice Radiology Active the work name Technical Support Associate', 'December 30, 2022', 'text-success'),
(5, 'Lyza Rami of aganecy name Vets Choice Radiology disabled the work name Technical Support Associate', 'December 30, 2022', 'text-warning'),
(6, 'Admin  update the work name Marketing Specialist', 'December 30, 2022', 'text-primary'),
(7, 'Admin  disabled the work name Marketing Specialist', 'December 30, 2022', 'text-warning'),
(8, 'Admin  Active the work name Marketing Specialist', 'December 30, 2022', 'text-success'),
(9, 'Admin  delete the account of Lyza Cruz', 'December 30, 2022', 'text-danger'),
(10, 'Admin  disabled the work name MS. VENUS MAY SARMIENTO', 'December 30, 2022', 'text-warning'),
(11, 'Admin  disabled the work name MS. VENUS MAY SARMIENTO', 'December 30, 2022', 'text-warning'),
(12, 'Admin  Active the account of MS. VENUS MAY SARMIENTO', 'December 30, 2022', 'text-success'),
(13, 'Admin  disabled the account of Viah N. Caburnay', 'December 30, 2022', 'text-warning'),
(14, 'Admin  disabled the account of Mark Joseph S. Raoet', 'December 30, 2022', 'text-warning'),
(15, 'Admin  disabled the account of Mark Joseph S. Raoet', 'December 30, 2022', 'text-warning'),
(16, 'Admin  Active the account of Mark Joseph S. Raoet', 'December 30, 2022', 'text-success');

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
(2, 'Erika Lim', 'sample2', 'sample2', '09231121125', NULL, 'Bachelor of Science in Computer Science', 'Pangasinan State University', '1668410379.jpg', 'November 14, 2022', NULL);

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
  `C1` int(100) NOT NULL DEFAULT '0',
  `C2` int(100) NOT NULL DEFAULT '0',
  `C3` int(100) NOT NULL DEFAULT '0',
  `C4` int(100) NOT NULL DEFAULT '0',
  `C5` int(100) NOT NULL DEFAULT '0',
  `C6` int(100) NOT NULL DEFAULT '0',
  `C7` int(100) NOT NULL DEFAULT '0',
  `C8` int(100) NOT NULL DEFAULT '0'
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
  `B1` int(100) DEFAULT '0',
  `B2` int(100) NOT NULL DEFAULT '0',
  `B3` int(100) NOT NULL DEFAULT '0',
  `B4` int(100) NOT NULL DEFAULT '0',
  `B5` int(100) NOT NULL DEFAULT '0',
  `B6` int(100) NOT NULL DEFAULT '0'
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
(10, 'In what city were you born?', 'Lingayen', 'student', 6);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentID` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `birthdate` varchar(100) DEFAULT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `studentnumber` varchar(50) NOT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `contactnumber` varchar(20) NOT NULL,
  `datecreated` varchar(20) NOT NULL,
  `agency` varchar(100) DEFAULT NULL,
  `section` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `colleges` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
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
(3, 'Mark Joseph', 'S.', 'Raoet', 'Lingayen', '2020-10-17', 'Male', '16-LN-00768', '16-LN-00768', 'null.png', '', '', 'Vets Choice Radiology', 'Section 2', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', '', 'null.png', '2022', NULL, NULL, NULL, NULL, 'Active', 1838108156),
(6, 'Vincent', 'Reyes', 'Perez', 'Estanza, Lingayen, Pangasinan', 'January 11, 1999', 'Male', 'vince2', '15-LN-00522', '1672409220.jpg', '09155882430', '12/05/2020 05:33:40 ', 'Vets Choice Radiology', 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', '', 'null.png', '2022', 'Roman Catholic', 'Single', 55, 60, 'Active', 1510631354),
(7, 'Jessa Mae', 'Flores', 'Delos Reyes', 'Binmaley', '1996-11-30', 'Female', 'jess', '17-LN-00122', 'null.png', '09771029025', '12/05/2020 06:36:48 ', '', 'Section 3', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', 'jessamaedreyes30@gmail.com', 'null.png', '2022', NULL, NULL, NULL, NULL, 'Active', NULL);

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
(184, 7, 'YES', 9, 1, '02/13/2021 01:37:23 pm', 0, 1, 'Jessa Mae Flores Delos Reyes'),
(185, 7, 'YES', 0, 1, '02/13/2021 01:58:25 pm', 2, 1, 'Jessa Mae Flores Delos Reyes'),
(186, 7, 'YES', 6, 1, '02/13/2021 02:11:57 pm', 0, 1, 'Jessa Mae Flores Delos Reyes'),
(187, 6, 'YES', 0, 1, '10/21/2021 02:16:26 am', 2, 1, ''),
(188, 6, 'YES', 0, 1, '11/04/2021 08:47:20 pm', 3, 1, ''),
(189, 6, 'YES', 0, 1, '11/04/2021 08:47:40 pm', 1, 1, ''),
(190, 7, 'YES', 0, 1, '11/04/2021 08:48:14 pm', 1, 1, ''),
(191, 6, 'YES', 3, 1, '11/04/2021 11:42:00 pm', 0, 1, ''),
(192, 6, 'YES', 3, 1, '11/04/2021 11:42:03 pm', 0, 1, ''),
(193, 6, 'YES', 0, 1, '11/04/2021 11:46:54 pm', 2, 1, ''),
(194, 6, 'YES', 4, 1, '11/12/2022 12:00:51 pm', 0, 0, 'Vincent Reyes Perez'),
(195, 6, 'YES', 6, 1, '11/12/2022 12:01:27 pm', 0, 0, 'Vincent Reyes Perez'),
(196, 6, 'YES', 7, 1, '11/12/2022 12:01:47 pm', 0, 0, 'Vincent Reyes Perez'),
(197, 6, 'YES', 8, 1, '11/12/2022 12:02:33 pm', 0, 0, 'Vincent Reyes Perez');

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
(2, 6, 'Vets Choice Radiology', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', 'November 16, 2022', 2, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', ' There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dict', ' There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dict', ' '),
(3, 6, 'Vets Choice Radiology', 'Bachelor of Science in Information and Technology', 'Pangasinan State University', 'November 17, 2022', 2, ' ', ' ', ' ', ' ');

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
(1, 'Retail'),
(2, 'Accounting'),
(3, 'Warehouse'),
(4, 'Cooking'),
(5, 'Computer'),
(6, 'Microsoft'),
(7, 'Excel');

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
(5, 6, 1, 5, 5, 5, 4, 5, 5, 4);

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
(3, 'Marketing Specialist', '1', 'What does a Marketing Specialist do?\r\n\r\nA Marketing Specialist keeps their eyes on marketing trends and works with companies to create advertising campaigns and strategies based on demographic data and targeting specific customer demographics.', 'High proficiency in English, Basic multimedia skills, photography, video editing, MS Word, MS Powerpoint, MS Excel\r\n', 'Conduct marketing research online and offline, Source and communicate with vendors , Help solidify and execute marketing plan', 'Active', '5', 'December 30, 2022', '2022', 'Retail,Accounting,Computer,Microsoft,Excel,'),
(4, 'Technical Support Associate', '1', 'Who is Vets Choice Radiology?\r\n\r\nWe are a full service teleradiology company with board certified radiologists and highly experienced staff dedicated to supporting veterinary hospitals. Our team is committed to offer the premier experience through guaranteed services as well going above and beyond for customer satisfaction.', 'Experience in desktop applications, help desk software, good problem-solving skills,Good interpersonal skills, Good written , verbal communication', 'Installing and configuring software,\r\nProviding timely and accurate customer feedback,\r\nTalking customers through a series of actions to resolve a problem,\r\nFollowing up with clients to ensure the problem is resolved,\r\nMaintain records of ticket creation, initial assignment and update progress of issues resolution activities including administrative records', 'Disabled', '2', 'November 09, 2022', '2022', NULL),
(5, 'Warehouse II', '1', 'The primary function of this position is to select cases, containers or pallets of finished frozen goods to fill orders from freezer warehouse locations and transport to the appropriate staging / loading areas, as well as put away supplies, load and unload trailers in a timely manner ensuring all safety, GMP and quality standards are met and to maintain the efficient flow of the production process', 'None', 'Obtain work schedule, daily production, risk predictions, paperwork, prepare for operations', 'Deleted', '5', 'December 30, 2022', '2022', 'Warehouse,'),
(6, 'Data Entry - Recording', '1', 'We are seeking a highly motivated individual with data entry experience and has a keen sense to detail to join our South County team located in the heart of downtown Delray Beach, also known as the Village by the Sea, as an Official Records Specialist III!', 'High school diploma, three (3) years, training and experience, college preferred.', 'Adds and updates grantor grantee information into the official records system,\r\nIssues certified copies; processes Clerks certificates of various types\r\nAssists customers in person and by phone,\r\nScans new and revised plats into the Official Records system', 'Active', '10', 'December 30, 2022', '2022', 'Accounting,Computer,Microsoft,Excel,');

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
  MODIFY `agencyID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcementID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `applicantID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `dtrID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `educationalbackground`
--
ALTER TABLE `educationalbackground`
  MODIFY `educationalbackgroundID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formupload`
--
ALTER TABLE `formupload`
  MODIFY `formID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `historylog`
--
ALTER TABLE `historylog`
  MODIFY `historylogID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructorID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `securityquestionsID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `studentdownload`
--
ALTER TABLE `studentdownload`
  MODIFY `downloadID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `studentjournal`
--
ALTER TABLE `studentjournal`
  MODIFY `journalID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tagID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `technicalskills`
--
ALTER TABLE `technicalskills`
  MODIFY `TechnicalSkillsID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `trainingsID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `workID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `workexperience`
--
ALTER TABLE `workexperience`
  MODIFY `workexperienceID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
