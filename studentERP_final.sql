-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2021 at 10:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentERP_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `subjID` varchar(7) NOT NULL,
  `classroom` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`subjID`, `classroom`) VALUES
('cs101', 'a701'),
('cs102', 'a702'),
('cs103', 'a703'),
('cs104', 'a704'),
('cs105', 'a705');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptID` varchar(7) NOT NULL,
  `deptName` varchar(15) NOT NULL,
  `progID` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptID`, `deptName`, `progID`) VALUES
('d001', 'cse', 'p101'),
('d002', 'mech', 'p101');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `subjectID` varchar(7) NOT NULL,
  `prn` int(11) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`subjectID`, `prn`, `marks`) VALUES
('cs101', 1032190000, 99),
('cs101', 1032190001, 90),
('cs101', 1032190003, 90),
('cs101', 1032190004, 70),
('cs102', 1032190000, 89),
('cs102', 1032190001, 80),
('cs102', 1032190003, 80),
('cs102', 1032190004, 60),
('cs103', 1032190000, 87),
('cs103', 1032190001, 70),
('cs103', 1032190003, 85),
('cs103', 1032190004, 70),
('cs104', 1032190000, 99),
('cs104', 1032190001, 99),
('cs104', 1032190003, 75),
('cs104', 1032190004, 99),
('cs105', 1032190000, 90),
('cs105', 1032190001, 100),
('cs105', 1032190003, 95),
('cs105', 1032190004, 90);

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `prog_id` varchar(7) NOT NULL,
  `progName` varchar(15) NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`prog_id`, `progName`, `duration`) VALUES
('p101', 'btech', 4),
('p102', 'bba', 3);

-- --------------------------------------------------------

--
-- Table structure for table `projectsInfo`
--

CREATE TABLE `projectsInfo` (
  `projID` int(11) NOT NULL,
  `projName` varchar(20) NOT NULL,
  `mentor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projectsInfo`
--

INSERT INTO `projectsInfo` (`projID`, `projName`, `mentor`) VALUES
(1001, 'erp_system', 1),
(1002, 'smart_parking', 2),
(1003, 'smart_home', 3),
(1004, 'oversmart_home', 4),
(1005, 'biggboss_house', 5);

-- --------------------------------------------------------

--
-- Table structure for table `projectStudents`
--

CREATE TABLE `projectStudents` (
  `prn` int(11) NOT NULL,
  `projID` int(11) NOT NULL,
  `started` date NOT NULL,
  `organization` varchar(10) NOT NULL DEFAULT 'Self'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projectStudents`
--

INSERT INTO `projectStudents` (`prn`, `projID`, `started`, `organization`) VALUES
(1032190000, 1004, '2021-08-11', 'papa'),
(1032190001, 1003, '2021-09-21', 'dada'),
(1032190003, 1005, '2021-10-07', 'Self'),
(1032190004, 1001, '2021-09-17', 'self');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `prn` int(11) NOT NULL,
  `studName` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `emailID` varchar(20) NOT NULL,
  `mobNo` bigint(20) NOT NULL,
  `dept_id` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`prn`, `studName`, `dob`, `emailID`, `mobNo`, `dept_id`) VALUES
(1032190000, 'MARC', '2001-09-27', 'email1', 7719092737, 'd001'),
(1032190001, 'manansh', '2001-10-02', 'aurora123', 8090890789, 'd001'),
(1032190003, 'ishaan', '2001-06-30', 'lmessi1', 6969696960, 'd001'),
(1032190004, 'parakh', '2001-08-15', 'parakh1', 88779900776, 'd001');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subjectID` varchar(7) NOT NULL,
  `subjName` varchar(20) NOT NULL,
  `availCredits` int(11) NOT NULL,
  `teacherID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjectID`, `subjName`, `availCredits`, `teacherID`) VALUES
('cs101', 'toc', 3, 1),
('cs102', 'toc2', 3, 1),
('cs103', 'cn', 3, 2),
('cs104', 'dbms', 3, 3),
('cs105', 'peace', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherID` int(11) NOT NULL,
  `teacherName` varchar(20) NOT NULL,
  `emailID` varchar(20) NOT NULL,
  `dept_id` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherID`, `teacherName`, `emailID`, `dept_id`) VALUES
(1, 'tchr1', 'temail1', 'd001'),
(2, 'tchr2', 'temail2', 'd001'),
(3, 'tchr3', 'email3', 'd001'),
(4, 'tchr4', 'email4', 'd001'),
(5, 'tchr5', 'email5', 'd001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`subjID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptID`),
  ADD KEY `progID` (`progID`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`subjectID`,`prn`) USING BTREE,
  ADD KEY `prn` (`prn`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`prog_id`);

--
-- Indexes for table `projectsInfo`
--
ALTER TABLE `projectsInfo`
  ADD PRIMARY KEY (`projID`),
  ADD KEY `mentor` (`mentor`);

--
-- Indexes for table `projectStudents`
--
ALTER TABLE `projectStudents`
  ADD PRIMARY KEY (`prn`,`projID`),
  ADD KEY `projID` (`projID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`prn`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subjectID`),
  ADD KEY `teacherID` (`teacherID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherID`),
  ADD KEY `dept_id` (`dept_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projectsInfo`
--
ALTER TABLE `projectsInfo`
  MODIFY `projID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `prn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1032190005;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacherID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD CONSTRAINT `classrooms_ibfk_1` FOREIGN KEY (`subjID`) REFERENCES `subjects` (`subjectID`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`progID`) REFERENCES `programme` (`prog_id`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`subjectID`) REFERENCES `subjects` (`subjectID`),
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`prn`) REFERENCES `student` (`prn`);

--
-- Constraints for table `projectsInfo`
--
ALTER TABLE `projectsInfo`
  ADD CONSTRAINT `projectsinfo_ibfk_1` FOREIGN KEY (`mentor`) REFERENCES `teacher` (`teacherID`);

--
-- Constraints for table `projectStudents`
--
ALTER TABLE `projectStudents`
  ADD CONSTRAINT `projectstudents_ibfk_1` FOREIGN KEY (`prn`) REFERENCES `student` (`prn`),
  ADD CONSTRAINT `projectstudents_ibfk_2` FOREIGN KEY (`projID`) REFERENCES `projectsInfo` (`projID`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`deptID`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`teacherID`) REFERENCES `teacher` (`teacherID`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`deptID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
