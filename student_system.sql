-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 09:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `idnumber` varchar(9) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `suffix` varchar(20) NOT NULL,
  `addressed` text NOT NULL,
  `emailaddressed` varchar(50) NOT NULL,
  `contactnumber` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `birthplace` varchar(100) NOT NULL,
  `images` varchar(100) NOT NULL,
  `civilstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`idnumber`, `firstname`, `lastname`, `middlename`, `gender`, `suffix`, `addressed`, `emailaddressed`, `contactnumber`, `birthdate`, `birthplace`, `images`, `civilstatus`) VALUES
('', 'John Kenneth', 'Balutan', 'Oana', 'Male', '', '', 'johnkennethbalutan@gmail.com', '2147483647', '2003-02-05', 'Labnig, Paracale, Camarines Norte', '', ''),
('', 'Vismark', 'Dela Cruz', 'Flores', 'Male', '', '', 'vismark@gmail.com', '2147483647', '2003-06-14', 'Lalibertad', '', ''),
('', 'Vismark', 'Ledon', 'kwjch', 'Male', '', '', 'vismark@gmail.com', '0963561147', '2003-06-14', 'Lalibertad', '', ''),
('', 'Rina Jane', 'Reducto', 'Nemenio', 'Female', '', '', 'rina@gmail.com', '0906288258', '2002-08-28', 'Guihulngan', '', ''),
('', 'John Kenneth', '', 'Oana', '', '', '', 'rina@gmail.com', '0963561147', '2023-09-08', 'Lalibertad', '', ''),
('', 'John Kenneth', 'Balutan', 'Oana', '', '', '', 'rina@gmail.com', '0963561147', '2023-09-08', 'Lalibertad', '', ''),
('', '2', '1', '', 'Male', '', '', '', '0906288258', '0000-00-00', 'Labnig, Paracale, Camarines Norte', '', ''),
('', 'John Kenneth', 'Balutan', '', 'Male', '', '', '', '0963561147', '0000-00-00', 'Guihulngan', '', ''),
('', 'ecjh j', 'Jojhvlh', 'mnql', 'Male', '', '', '', '0963561147', '0000-00-00', 'B\"oboi', '', ''),
('', 'a', 'Balutan', '', 'Male', '', '', '', '0963561147', '2023-09-28', 'a', '', ''),
('2021-0459', 'John Kenneth', 'Balutan', 'Nemenio', 'Male', 'N/A', '', 'johnkennethbalutan@gmail.com', '0906288258', '2023-09-14', 'Guihulngan', 'IMG_1121.PNG', 'Married'),
('2021-0460', 'Fel John', 'Ledon', '', 'Male', 'N/A', '', 'johnkennethbalutan@gmail.com', '0963561147', '2023-09-12', 'Guihulngan', '', 'Single'),
('2021-0461', 'Vismark', 'Dela Cruz', '', 'Male', 'N/A', '', 'johnkennethbalutan@gmail.com', '0906288258', '2023-09-15', 'Guihulngan', '', 'Single');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
