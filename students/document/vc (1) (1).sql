-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 08:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vc`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_notice`
--

CREATE TABLE `add_notice` (
  `nid` int(11) NOT NULL,
  `ntopic` varchar(50) NOT NULL,
  `ndescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_notice`
--

INSERT INTO `add_notice` (`nid`, `ntopic`, `ndescription`) VALUES
(6, 'hello testing 1', 'hello i am priyrajsinh');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `aid` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`aid`, `uname`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `assignedsubject`
--

CREATE TABLE `assignedsubject` (
  `asid` int(11) NOT NULL,
  `asbranch` varchar(30) NOT NULL,
  `assem` int(10) NOT NULL,
  `asubname` varchar(30) NOT NULL,
  `asubfaculty` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignedsubject`
--

INSERT INTO `assignedsubject` (`asid`, `asbranch`, `assem`, `asubname`, `asubfaculty`) VALUES
(4, 'CE', 1, 'WNS', 'priyrajsinh'),
(5, 'civil', 3, 'DBMS', 'Chirag'),
(6, 'CE', 3, 'DBMS', 'priyrajsinh'),
(7, 'IT', 2, 'WNS', 'priyrajsinh');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `aid` int(11) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` int(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `afilename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`aid`, `branch`, `semester`, `subject`, `aname`, `afilename`) VALUES
(6, 'CE', 1, 'WNS', 'trest', 'AJP_Assignment-2 (1).pdf '),
(13, 'CE', 1, 'WNS', 'test', 'WNS_priyraj-converted(new) (1).docx '),
(14, 'CE', 1, 'WNS', 'test', 'Project Report Format_6thSem.docx '),
(17, 'CE', 1, 'WNS', 'passport', 'psp-passport.pdf ');

-- --------------------------------------------------------

--
-- Table structure for table `assignmentsubmitted`
--

CREATE TABLE `assignmentsubmitted` (
  `aid` int(11) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `aname` varchar(30) NOT NULL,
  `afilename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignmentsubmitted`
--

INSERT INTO `assignmentsubmitted` (`aid`, `branch`, `semester`, `subject`, `aname`, `afilename`) VALUES
(1, 'CE', '1', 'WNS', '', ' '),
(2, 'CE', '1', 'WNS', '', ' '),
(3, 'CE', '1', 'WNS', '', ' '),
(4, 'CE', '1', 'WNS', '', ' '),
(5, 'CE', '1', 'WNS', 'test', ' '),
(6, 'CE', '1', 'WNS', 'test', 'ANDROID_practicalfile.pdf '),
(7, 'CE', '1', 'WNS', 'test', 'PHP Index.docx '),
(8, 'CE', '1', 'WNS', 'test', 'PHP Index.pdf '),
(9, 'CE', '1', 'WNS', 'test', 'PHP Index.pdf '),
(10, 'CE', '1', 'WNS', 'trest', 'ANDROID FINAL_priyrajsinhNewFinal.docx ');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `bid` int(11) NOT NULL,
  `bcode` int(20) NOT NULL,
  `bname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`bid`, `bcode`, `bname`) VALUES
(1, 2356, 'CIvil '),
(2, 34, 'ELECTRICAL ENGINEERING '),
(3, 87, 'COMPUTER ENGINEERING '),
(4, 36, 'INFORMATION TECHNOLOGY ');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`fname`, `lname`, `country`, `subject`) VALUES
('priyrajsinh', 'Parmar', 'india', 'This is a online food ordering Website..'),
('priyrajsinh', 'Parmar', 'india', 'Hello this is virtual classroom'),
('priyrajsinh', 'Parmar', 'india', 'Hello this is virtual classroom'),
('Priyraj', 'Parmar', 'india', 'Hii how are you....'),
('priyraj', 'Parmar', 'india', 'hello i am priyrajsinh\r\n\r\n'),
('', '', 'india', ''),
('', '', 'india', ''),
('', '', 'india', ''),
('shubham', 'upadhiya', 'india', 'Hello How Are You...\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fcode` int(11) NOT NULL,
  `fbranch` varchar(20) NOT NULL,
  `fmail` varchar(20) NOT NULL,
  `fpass` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fcode`, `fbranch`, `fmail`, `fpass`, `fname`) VALUES
(1, 'CE', 'priyraj@gmail.com', '123', 'priyrajsinh');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `hcode` int(15) NOT NULL,
  `hbranch` varchar(100) NOT NULL,
  `hmail` varchar(30) NOT NULL,
  `hpass` varchar(30) NOT NULL,
  `hname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`hcode`, `hbranch`, `hmail`, `hpass`, `hname`) VALUES
(87, 'COMPUTER ENGINEERING ', 'xyz@gmail.com', '123', 'krish   ');

-- --------------------------------------------------------

--
-- Table structure for table `leavenote`
--

CREATE TABLE `leavenote` (
  `lid` int(11) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject1` varchar(50) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `fdate` varchar(50) NOT NULL,
  `todate` varchar(50) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leavenote`
--

INSERT INTO `leavenote` (`lid`, `branch`, `semester`, `subject`, `faculty`, `email`, `subject1`, `reason`, `fdate`, `todate`, `status`) VALUES
(12, 'EC', '3', 'WNS', 'priyrajsinh', 'priyrajsinh@yahoo.com', 'wudhcuishcij', 'fdjknjed-r+fvf', '2022-10-22', '2022-10-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `meeting_details`
--

CREATE TABLE `meeting_details` (
  `start_url` varchar(500) NOT NULL,
  `join_url` varchar(500) NOT NULL,
  `meeting_id` varchar(100) NOT NULL,
  `passcode` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `stime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meeting_details`
--

INSERT INTO `meeting_details` (`start_url`, `join_url`, `meeting_id`, `passcode`, `topic`, `stime`) VALUES
('https://us05web.zoom.us/s/86733298647?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6Ik1QV3pPWkk4UUNhTnhjMmRYSDRwQ1EiLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6Ijg2NzMzMjk4NjQ3IiwiZXhwIjoxNjQ3OTYyOTA0LCJpYXQiOjE2NDc5NTU3MDQsImFpZCI6ImtwMXgwVmpPUjM2Nk9FVFA4U1B4NHciLCJjaWQiOiIifQ.DpmAHUsUmE8NUDfsy_XPAkkEr7rtG8kF_Yi-lCp9vMA', 'https://us05web.zoom.us/j/86733298647?pwd=Y2tkQ05aZFdzM1hVczhhMVVVdW9Idz09', '86733298647', 'cnHC41', 'Andriod', '23/03/2022 22:02:00'),
('https://us05web.zoom.us/s/86009818481?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6Ik1QV3pPWkk4UUNhTnhjMmRYSDRwQ1EiLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6Ijg2MDA5ODE4NDgxIiwiZXhwIjoxNjQ3OTYzNDczLCJpYXQiOjE2NDc5NTYyNzMsImFpZCI6ImtwMXgwVmpPUjM2Nk9FVFA4U1B4NHciLCJjaWQiOiIifQ.nHeP0RqPWFPLECV41JK-gh0pvvYQItktCkcpGm2dZ1A', 'https://us05web.zoom.us/j/86009818481?pwd=U0c3ZmhBMkR6WjMyS0tkd09ISUtpUT09', '86009818481', 'evwt9x', 'JAVA', '22/03/2022 20:08:00'),
('https://us05web.zoom.us/s/88444572797?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IkhhS0I1eUl3UWxhcUw5WXNOTEZPNEEiLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6Ijg4NDQ0NTcyNzk3IiwiZXhwIjoxNjQ4MzIwNTMzLCJpYXQiOjE2NDgzMTMzMzMsImFpZCI6ImNPWDJWQ2pGUmVtdXJyV01OeUtjb0EiLCJjaWQiOiIifQ.LiBUJKp2M9CVGw7Mz3E-ZHoMz6RthXU0hqjWOuKVDCM', 'https://us05web.zoom.us/j/88444572797?pwd=b0c1akJ0UGlHUUpXei9iM3hYU05XZz09', '88444572797', 'vf06pC', 'WNS', '26/03/2022 22:18:00'),
('https://us05web.zoom.us/s/85160440531?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IkhhS0I1eUl3UWxhcUw5WXNOTEZPNEEiLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6Ijg1MTYwNDQwNTMxIiwiZXhwIjoxNjQ4NDUxNDQ1LCJpYXQiOjE2NDg0NDQyNDUsImFpZCI6ImNPWDJWQ2pGUmVtdXJyV01OeUtjb0EiLCJjaWQiOiIifQ.5X5EZNjhHp7Ejw7UIpegVUiSqc6apM0iZYC-cUH6rO4', 'https://us05web.zoom.us/j/85160440531?pwd=N0hFUXYzWld5SUw1NTZ1Z0FuUW11dz09', '85160440531', 'whBx4Z', 'PHP', '28/03/2022 10:55:00'),
('https://us05web.zoom.us/s/82942472318?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IkhhS0I1eUl3UWxhcUw5WXNOTEZPNEEiLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6IjgyOTQyNDcyMzE4IiwiZXhwIjoxNjUyMzUyOTUzLCJpYXQiOjE2NTIzNDU3NTMsImFpZCI6ImNPWDJWQ2pGUmVtdXJyV01OeUtjb0EiLCJjaWQiOiIifQ.YVyIYb8mWqqZPF25cnL_fOBM3rrQ0HLsuWbythiWOSw', 'https://us05web.zoom.us/j/82942472318?pwd=SURhVU1oaUNkNjc5MTM2N0FKTzAvUT09', '82942472318', 'AMcDA4', 'testing', '12/05/2022 14:35:00'),
('https://us05web.zoom.us/s/87070846955?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IkhhS0I1eUl3UWxhcUw5WXNOTEZPNEEiLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6Ijg3MDcwODQ2OTU1IiwiZXhwIjoxNjYzNjc5OTUzLCJpYXQiOjE2NjM2NzI3NTMsImFpZCI6ImNPWDJWQ2pGUmVtdXJyV01OeUtjb0EiLCJjaWQiOiIifQ.54mvbubYyL9ZAei0SkytFq_ZWB_dnF-Hyy9_GibIVbI', 'https://us05web.zoom.us/j/87070846955?pwd=R29GNWNtZzl5SHVhQzliRW9rMWY0Zz09', '87070846955', '3vMU5t', 'ETC', '20/09/2022 16:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `qid` int(11) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `querry` varchar(500) NOT NULL,
  `resquery` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`qid`, `branch`, `semester`, `subject`, `faculty`, `querry`, `resquery`) VALUES
(1, 'CE', '2', 'WNS', 'priyrajsinh', 'Hello I Am Priyrajsinh', ''),
(3, 'civil', '1', 'WNS', 'priyrajsinh', 'hello this is a querry question', ''),
(5, 'CE', '3', 'WNS', 'priyrajsinh', 'what is the portion of this subject for mid exams', '');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `sid` int(5) NOT NULL,
  `scode` int(5) NOT NULL,
  `sname` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sid`, `scode`, `sname`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stcode` int(15) NOT NULL,
  `stbranch` varchar(15) NOT NULL,
  `stmail` varchar(30) NOT NULL,
  `stpass` varchar(20) NOT NULL,
  `stname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stcode`, `stbranch`, `stmail`, `stpass`, `stname`) VALUES
(3, 'it', 'priyrajsinh@yahoo.com', '12345', 'Priyraj');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subid` int(20) NOT NULL,
  `subcode` varchar(20) NOT NULL,
  `subname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subid`, `subcode`, `subname`) VALUES
(2, '38902', 'WNS '),
(4, '330823', 'DBMS ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_notice`
--
ALTER TABLE `add_notice`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `assignedsubject`
--
ALTER TABLE `assignedsubject`
  ADD PRIMARY KEY (`asid`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `assignmentsubmitted`
--
ALTER TABLE `assignmentsubmitted`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fcode`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`hcode`);

--
-- Indexes for table `leavenote`
--
ALTER TABLE `leavenote`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stcode`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_notice`
--
ALTER TABLE `add_notice`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignedsubject`
--
ALTER TABLE `assignedsubject`
  MODIFY `asid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `assignmentsubmitted`
--
ALTER TABLE `assignmentsubmitted`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `hcode` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `leavenote`
--
ALTER TABLE `leavenote`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stcode` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
