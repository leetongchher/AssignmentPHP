-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 05:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehiclebookings`
--

-- --------------------------------------------------------

--
-- Table structure for table `tms_admin`
--

CREATE TABLE `tms_admin` (
  `a_id` int(20) NOT NULL,
  `a_name` varchar(200) NOT NULL,
  `a_email` varchar(200) NOT NULL,
  `a_pwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tms_admin`
--

INSERT INTO `tms_admin` (`a_id`, `a_name`, `a_email`, `a_pwd`) VALUES
(1, 'System Admin', 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `tms_user`
--

CREATE TABLE `tms_user` (
  `u_id` int(20) NOT NULL,
  `u_direction` varchar(200) NOT NULL,
  `u_date` date NOT NULL,
  `u_country` varchar(200) NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `u_phone` varchar(20) NOT NULL,
  `u_price` int(10) NOT NULL,
  `u_time` time NOT NULL,
  `u_seat` varchar(20) NOT NULL,
  `u_fullname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tms_user`
--

INSERT INTO `tms_user` (`u_id`, `u_direction`, `u_date`, `u_country`, `u_email`, `u_phone`, `u_price`, `u_time`, `u_seat`, `u_fullname`) VALUES
(22, 'Siem Reap -> Kompong Thom', '2023-01-26', 'Cambodia', 'lytongchher@2002gmail.com', '095426908', 15, '10:00:00', 'TC007', 'Ly Tongchher'),
(23, 'Siem Reap -> Phnom Penh', '2023-02-01', 'Argentina', 'leonelmessi10@gmail.com', '0125555565', 10, '01:00:00', 'TC001', 'Leonel Messi'),
(24, 'Kompong Thom -> Siem Reap', '2023-02-09', 'Brazil', 'neymarjr@gmail.com', '01252545552', 25, '04:00:00', 'TC011', 'Neymar JR'),
(25, 'Phnom Penh -> Kompong Thom', '2023-01-25', 'Cambodia', 'punak@gmail.com', '012131415', 25, '07:45:00', 'TC008', 'Pu Nak'),
(26, 'Phnom Penh -> Siem Reap', '2023-02-02', 'Cambodia', 'setsok@gmail.com', '0201520502', 50, '15:30:00', 'TC001', 'Set Sok'),
(27, 'Kompong Thom -> Siem Reap', '2023-01-29', 'Thailand', 'minhnekchitkang@gmail.com', '095426908', 25, '12:00:00', 'TC010', 'Minh Nek Chitkang'),
(28, 'Phnom Penh -> Siem Reap', '2023-01-29', 'Cambodia', 'nytongchhinh@2002gmail.com', '095426908', 25, '10:00:00', 'TC009', 'Ny Tongchhinh'),
(29, 'Siem Reap -> Phnom Penh', '2023-01-29', 'Cambodia', 'pufred@2002gmail.com', '062292326', 50, '09:00:00', 'TC001', 'Pu Fred'),
(31, 'Siem Reap -> Phnom Penh', '2023-02-05', 'USA', 'vichet212@gmail.com', '0231561531', 23, '14:00:00', 'TC001', 'Na Vichet'),
(32, 'Kompong Thom -> Phnom Penh', '2023-02-15', 'Cambodia', 'bukayok22@gmail.com', '065655623', 13, '09:00:00', 'TC010', 'Bu Kayok'),
(33, 'Kompong Thom -> Siem Reap', '2023-02-28', 'Cambodia', 'koysakda22@gmail.com', '0252521522', 85, '07:00:00', 'TC010', 'Koy Sakda'),
(35, 'Siem Reap -> Phnom Penh', '2023-02-08', 'Cambodia', 'pumotordub12@gmail.com', '02156223226', 15, '11:00:00', 'TC009', 'Pur Motordub'),
(36, 'Siem Reap -> Kompong Thom', '2023-02-09', 'Cambodia', 'navihea22@gmail.com', '099662551', 15, '09:00:00', 'TC002', 'Na Vihea'),
(37, 'Phnom Penh -> Kompong Thom', '2023-02-10', 'Cambodia', 'kokkay12@gmail.com', '012654852', 25, '10:00:00', 'TC008', 'Kok Kay'),
(38, 'Kompong Thom -> Phnom Penh', '2023-02-08', 'Cambodia', 'bongthom22@gmail.com', '0995252585', 65, '14:00:00', 'TC001', 'Bong Thom'),
(39, 'Siem Reap -> Phnom Penh', '2023-02-09', 'Vietnam', 'lorreatrey22@gmail.com', '089526452', 25, '07:00:00', 'TC001', 'Lor Reatrey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tms_admin`
--
ALTER TABLE `tms_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tms_user`
--
ALTER TABLE `tms_user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tms_admin`
--
ALTER TABLE `tms_admin`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tms_user`
--
ALTER TABLE `tms_user`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
