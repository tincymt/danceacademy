-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 08:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dancedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` int(20) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `fee` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_name`, `fee`, `date`, `status`) VALUES
(1, 'bharatanatyam', '500', '2021-06-07', 1),
(2, 'mohiniyattam', '500', '2021-06-08', 1),
(3, 'kathak', '500', '2021-06-08', 1),
(4, 'kuchipudi', '500', '2021-06-30', 1),
(5, 'hiphop', '500', '2021-06-15', 1),
(6, 'contemporary', '500', '2021-06-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_duration`
--

CREATE TABLE `tbl_duration` (
  `duration_id` int(20) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_duration`
--

INSERT INTO `tbl_duration` (`duration_id`, `duration`, `status`) VALUES
(2, 'sixmonth', 1),
(3, 'oneyear', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feed_id` int(50) NOT NULL,
  `login_id` int(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feed_id`, `login_id`, `Date`, `Description`) VALUES
(1, 0, '2021-06-02', 'CDFVSZ'),
(2, 12, '2021-06-10', 'DEFGTYJ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave`
--

CREATE TABLE `tbl_leave` (
  `leave_id` int(20) NOT NULL,
  `login_id` int(20) NOT NULL,
  `date` varchar(50) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_leave`
--

INSERT INTO `tbl_leave` (`leave_id`, `login_id`, `date`, `reason`, `usertype`, `status`) VALUES
(1, 19, '2021-06-10', 'dfghmjgfdsasdfgbnm,gfd', 'user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `usertype`, `status`) VALUES
(1, 'admin', '2710faab1ba97709749135dc38dbd221', 'admin', 1),
(2, 'nobi', '7a8229e5d023dcc61660ee0840f421a3', 'teacher', 1),
(3, 'kiran', 'cfca875af8f6742c515863628cf0bd35', 'teacher', 1),
(5, 'aby', '15861dbff25703dba456da43a4bcf8cc', 'user', 1),
(7, 'sreedevi', 'cf0158f0678c876f88e3144b16a4455b', 'teacher', 1),
(8, 'mohini', 'f136b860f0a56856fa8244fb68262c3c', 'teacher', 1),
(12, 'tina', '64f5005dcd22681b4ca409727a5f3a87', 'user', 1),
(13, 'nandha', '01af091dd8ac2ba4b5c52ec81d8b397b', 'teacher', 1),
(14, 'pallavi', '8e1ec3e6b85f3d510ed874e02df312df', 'teacher', 1),
(16, 'manu', 'bfbee0dcd86fcb0c37176266641e70b8', 'teacher', 1),
(17, 'liya', '89fcde6242970d94d2d3b493541c4274', 'teacher', 1),
(18, 'shijila', '9911f967cfe2c3304c9caf2b4ddf45ce', 'user', 1),
(19, 'anu', 'beaf3368aab99fd2b803d50ee9e5ae8b', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payement`
--

CREATE TABLE `tbl_payement` (
  `pay_id` int(50) NOT NULL,
  `login_id` int(50) NOT NULL,
  `batch_id` int(50) NOT NULL,
  `booking_id` int(50) NOT NULL,
  `cvvno` int(50) NOT NULL,
  `cno` bigint(20) NOT NULL,
  `exp_day` varchar(50) NOT NULL,
  `exp_year` varchar(50) NOT NULL,
  `account_no` int(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qualification`
--

CREATE TABLE `tbl_qualification` (
  `qual_id` int(100) NOT NULL,
  `qualification` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_qualification`
--

INSERT INTO `tbl_qualification` (`qual_id`, `qualification`) VALUES
(3, 'MSC bharatanatyam'),
(4, 'BSC bharatanatyam'),
(5, 'MSC kathak'),
(6, 'MSC Mohiniyattam'),
(7, 'Master of Fine Arts in Dance'),
(8, 'Bachelor Degree in Dance'),
(9, 'Associate in Arts Degree in Dance');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shift`
--

CREATE TABLE `tbl_shift` (
  `shift_id` int(20) NOT NULL,
  `shift_type` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_shift`
--

INSERT INTO `tbl_shift` (`shift_id`, `shift_type`, `status`) VALUES
(2, 'Evening', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studentbooking`
--

CREATE TABLE `tbl_studentbooking` (
  `studbk_id` int(50) NOT NULL,
  `login_id` int(50) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `shift_type` varchar(30) NOT NULL,
  `gurad_num` varchar(20) NOT NULL,
  `dance_exp` int(20) NOT NULL,
  `file` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_studentbooking`
--

INSERT INTO `tbl_studentbooking` (`studbk_id`, `login_id`, `course_name`, `duration`, `shift_type`, `gurad_num`, `dance_exp`, `file`, `status`) VALUES
(1, 5, 'bharatanatyam', 'sixmonth', 'Evening', '9632587410', 2, '54.Tincymol M T.pdf', 0),
(2, 5, 'bharatanatyam', 'sixmonth', 'Evening', '9632587410', 2, '54.Tincymol M T.pdf', 0),
(3, 5, 'bharatanatyam', 'sixmonth', 'Evening', '9632587410', 2, '54.Tincymol M T.pdf', 0),
(4, 5, 'bharatanatyam', 'sixmonth', 'Evening', '9632587410', 2, '54.Tincymol M T.pdf', 0),
(5, 5, 'mohiniyattam', 'oneyear', '', '9632587410', 2, '20190105012017_IMG_5550.JPG', 0),
(6, 5, 'mohiniyattam', 'oneyear', '', '9632369850', 2, 'a1.jpg', 0),
(7, 5, 'bharatanatyam', 'sixmonth', 'Evening', '9632587410', 2, '151.jpg', 0),
(8, 0, 'kathak', 'oneyear', 'Evening', '9874563210', 1, 'a2.jpg', 0),
(9, 0, 'kathak', 'sixmonth', 'Evening', '9632587410', 1, '151.jpg', 0),
(10, 0, 'kuchipudi', 'oneyear', 'Evening', '9632587410', 2, '151.jpg', 0),
(11, 0, 'mohiniyattam', 'sixmonth', 'Evening', '9632587410', 1, '151.jpg', 0),
(12, 0, 'bharatanatyam', 'sixmonth', 'Evening', '9632587410', 2, 'a2.jpg', 0),
(13, 19, 'kathak', 'oneyear', 'Evening', '9632587410', 3, '151.jpg', 0),
(14, 12, 'contemporary', 'sixmonth', 'Evening', '9632587410', 12, 'a2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studreg`
--

CREATE TABLE `tbl_studreg` (
  `reg_id` int(20) NOT NULL,
  `login_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file` varchar(20) NOT NULL,
  `status` tinyint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_studreg`
--

INSERT INTO `tbl_studreg` (`reg_id`, `login_id`, `name`, `address`, `gender`, `DOB`, `contactno`, `email`, `file`, `status`) VALUES
(3, 5, 'aby', 'Mr. I. K. Taneja   Flat No. 100   Triveni Apartments   Pitam Pura', 'Male', '2021-06-02', '9632587410', 'aby@gmail.com', 't4.jpg', 1),
(4, 12, 'tina', 'kalarikal(h)\r\npulikkl\r\nmanimala\r\nkerala', 'Female', '2021-06-08', '9632587410', 'tina@gmail.com', 'page4_img4.jpg', 1),
(5, 18, 'shijila', 'malikapuram h', 'Female', '2021-06-10', '9632587410', 'shijila@gmai.com', 'p29.jpg', 1),
(6, 19, 'anumol', 'hdsjdkxmbjncm\r\nkdcvbdjm,cnzxm\r\ncjnm', 'Female', '2021-06-17', '9632587410', 'anu@gamil.com', 'IMG_1303.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `teacher_id` int(20) NOT NULL,
  `login_id` int(20) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `time` varchar(20) NOT NULL,
  `teach_name` varchar(20) NOT NULL,
  `teach_contact` varchar(20) NOT NULL,
  `teach_address` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `file` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`teacher_id`, `login_id`, `course_name`, `duration`, `time`, `teach_name`, `teach_contact`, `teach_address`, `email`, `qualification`, `description`, `file`, `status`) VALUES
(1, 2, 'contemporary', 'sixmonth', 'Evening', 'nobi', '9632587410', 'Aramkallu, P.O. \r\nPa', 'nobi@gmail.com', 'Associate in Arts Degree in Dance', 'Maintained educational excellence of children (Ages 5-10).\r\nReported to program director regarding potential modifications to dance program.Improved children behavior by upholding high classroom standards.\r\nDiscussed educational concerns of children with parents, and set goals.', 't4.jpg', 1),
(2, 3, 'hiphop', 'oneyear', 'Evening', 'kiran', '9654782130', 'D8, Part 2\r\nDelhi,\r\n', 'kiran@gmail.com', 'Master of Fine Arts in Dance', 'Coordinated social media effort on Facebook and Twitter.Educated children ages 3 to 13 years old on the fundamentals of dance including ballet, pointe, tap, modern, and Pilates.Performed data analysis on class attendance\r\nOrganized fundraisers for performance and non-profit affiliate, Ballet Arts Ensemble of Fairfax.Responded to company inquires via phone and social media', 't5.jpg', 1),
(3, 7, 'kathak', 'sixmonth', 'Evening', 'sreedevi', '9632587452', 'W/o Shri S.N. Chatte', 'sreedevi@gmail.com', 'MSC kathak', 'Breaking down dance steps so they are more understandable.\r\nShowing them that there are friends, and people that will help them everywhere they go.\r\nHelping people gain confidence, in what they are doing on and off the floor.', 't9.jpg', 1),
(4, 8, 'bharatanatyam', 'oneyear', 'Evening', 'mohini', '9632587410', '86, G, Madhav Bhuvan', 'mohini@gmail.com', 'MSC bharatanatyam', 'Reported to program director regarding potential modifications to dance program.\r\nImproved children behavior by upholding high classroom standards.\r\nDiscussed educational concerns of children with parents, and set goals.', 't7.jpg', 1),
(5, 13, 'mohiniyattam', 'sixmonth', 'Evening', 'nandha', '9698521470', 'nandha h\r\nkaviyoor\r\n', 'nanadha@gmail.com', 'MSC Mohiniyattam', 'Learned how to confidently interact with students and parents in a public setting.\r\nOversaw multiple students\' progress while keeping a positive learning environment.\r\nDeveloped ability to multi-task in an extremely busy environment. Also, developed the ability handle numerous types of situations while under pressure.', 'page4_img3.jpg', 1),
(6, 14, 'kuchipudi', 'oneyear', 'Evening', 'pallavi', '9632587410', 'pallavi(h)\r\nmanipadm', 'pallavi@123', 'Bachelor Degree in Dance', 'Professional in assisting students and parents with any questions.\r\nChoreograph routines both across the floor and center.\r\nEnsuring students learn correct vocabulary as well as body placement.\r\nProvide administrative support and serve as liaison for students.', 'p31.jpg', 1),
(7, 16, 'contemporary', 'oneyear', 'Evening', 'manu', '9654343212', 'kalambanattu(h) \r\nch', 'manu@gmail.com', 'Bachelor Degree in Dance', 'i am worked in a dance school in three years and i won so many awards.', 'p27.jpg', 1),
(8, 17, 'kathak', 'oneyear', 'Evening', 'liya', '9658741230', 'liya(h)\r\nkavi\r\nputtu', 'liya@gmail.com', 'MSC kathak', 'iam willing to take any challenges.', 'p29.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbl_duration`
--
ALTER TABLE `tbl_duration`
  ADD PRIMARY KEY (`duration_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_payement`
--
ALTER TABLE `tbl_payement`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `tbl_qualification`
--
ALTER TABLE `tbl_qualification`
  ADD PRIMARY KEY (`qual_id`);

--
-- Indexes for table `tbl_shift`
--
ALTER TABLE `tbl_shift`
  ADD PRIMARY KEY (`shift_id`);

--
-- Indexes for table `tbl_studentbooking`
--
ALTER TABLE `tbl_studentbooking`
  ADD PRIMARY KEY (`studbk_id`);

--
-- Indexes for table `tbl_studreg`
--
ALTER TABLE `tbl_studreg`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_duration`
--
ALTER TABLE `tbl_duration`
  MODIFY `duration_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feed_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  MODIFY `leave_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_payement`
--
ALTER TABLE `tbl_payement`
  MODIFY `pay_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_qualification`
--
ALTER TABLE `tbl_qualification`
  MODIFY `qual_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_shift`
--
ALTER TABLE `tbl_shift`
  MODIFY `shift_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_studentbooking`
--
ALTER TABLE `tbl_studentbooking`
  MODIFY `studbk_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_studreg`
--
ALTER TABLE `tbl_studreg`
  MODIFY `reg_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `teacher_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
