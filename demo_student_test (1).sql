-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2020 at 02:26 PM
-- Server version: 8.0.22
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_student_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `Faculty`
--

CREATE TABLE `Faculty` (
  `FacID` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `FacultyName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Faculty`
--

INSERT INTO `Faculty` (`FacID`, `FacultyName`) VALUES
('Bio', 'Biological'),
('Chem', 'Chemistry'),
('His', 'History'),
('IT', 'Infomation Technology'),
('Lit', 'Literary'),
('Math', 'Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `Result`
--

CREATE TABLE `Result` (
  `StudentID` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `SubID` varchar(20) NOT NULL,
  `Point` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Result`
--

INSERT INTO `Result` (`StudentID`, `SubID`, `Point`) VALUES
('MS01', '02', 7),
('MS02', '04', 9),
('MS05', '01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `StudentID` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Birthday` date NOT NULL,
  `Gender` enum('Male','Female') NOT NULL DEFAULT 'Male',
  `Address` varchar(255) NOT NULL,
  `Birthplace` varchar(255) NOT NULL,
  `FacID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`StudentID`, `FirstName`, `LastName`, `Birthday`, `Gender`, `Address`, `Birthplace`, `FacID`) VALUES
('MS01', 'Tam', 'Le Duc', '1990-06-17', 'Male', '20 Vo Chi Cong', 'Thai Binh', 'Math'),
('MS02', 'Dao', 'Pham Thi', '2002-11-14', 'Female', '23 Nhon', 'Ha Noi', 'IT'),
('MS03', 'Thuy', 'Ta Thi', '2002-05-20', 'Female', '44 Da Phuc', 'Ha Noi', 'IT'),
('MS04', 'Nam', 'Nguyen Van', '2002-12-22', 'Male', '22 Van Phuc', 'Hai Duong', 'Bio'),
('MS05', 'Tuan', 'Nguyen Van', '1999-09-09', 'Male', '43 Hang Bai', 'Thai Binh', 'Math'),
('MS06', 'Duc', 'Van Nguyen', '1992-11-11', 'Male', 'Ha Noi', 'Ha noi', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `Subject`
--

CREATE TABLE `Subject` (
  `SubID` varchar(6) NOT NULL,
  `SubName` varchar(255) NOT NULL,
  `Lesson` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Subject`
--

INSERT INTO `Subject` (`SubID`, `SubName`, `Lesson`) VALUES
('01', 'Database', 45),
('02', 'Artificial Intelligence', 45),
('03', 'Transfer information', 45),
('04', 'Linear programming', 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Faculty`
--
ALTER TABLE `Faculty`
  ADD PRIMARY KEY (`FacID`);

--
-- Indexes for table `Result`
--
ALTER TABLE `Result`
  ADD PRIMARY KEY (`StudentID`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`StudentID`);

--
-- Indexes for table `Subject`
--
ALTER TABLE `Subject`
  ADD PRIMARY KEY (`SubID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
