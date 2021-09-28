-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 06:26 AM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `login_time` varchar(50) NOT NULL,
  `log_out_time` varchar(50) NOT NULL,
  `login_ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `gender`, `dob`, `roll`, `login_time`, `log_out_time`, `login_ip`) VALUES
(1, 'Amit Mondal', 'amit.offici@gmail.com', '$2y$10$x4pQzDFRIZrMXivw6rcZHuB9LDa21fCCtbC13KBgHKVQjOeL.XbKG', 'Male', '1999-07-22', '1', '09/13/2021 07:22:52 am', '07/17/2021 01:20:10 pm', '::1'),
(2, 'amit mondal', 'mamit7025@gmail.com', '$2y$10$z7Q1C3HAF19fBz31QOScfOKCEKq0rf/cwjkvVzHeIsJ3g1THvnkam', 'Male', '2021-07-15', '2', '07/15/2021 12:43:46 am', '07/15/2021 12:45:25 am', '192.168.1.113'),
(3, 'SOUMITRA KAR', 'soumitrakar721632@gmail.com', '$2y$10$Qnv0qiSITiXwovPag3Ei.O1xVcXDz2Kv9618dFh5mX6sFeovNEnPu', 'Male', '1998-10-26', '2', '07/18/2021 01:46:21 pm', '07/18/2021 03:15:59 pm', '192.168.1.113'),
(4, 'supradip adhikary', 'supradip8436@gmail.com', '$2y$10$R68wJ14Qme6GfMfdvIDrCeMjE6mRjvucO9R/OxsaCAzU.b0DXyRPa', 'Male', '2001-12-29', '2', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `role_id` int(2) NOT NULL,
  `type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`role_id`, `type_name`) VALUES
(1, 'owner'),
(2, 'help');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `game_id` int(2) NOT NULL,
  `games` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`game_id`, `games`) VALUES
(1, 'Garena Free Fire');

-- --------------------------------------------------------

--
-- Table structure for table `game_id`
--

CREATE TABLE `game_id` (
  `gtId` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `gamename_id` int(2) NOT NULL,
  `my_game_id` varchar(100) NOT NULL,
  `fFrindId` varchar(100) NOT NULL,
  `sFrindId` varchar(100) NOT NULL,
  `tFrindId` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_id`
--

INSERT INTO `game_id` (`gtId`, `user_email`, `gamename_id`, `my_game_id`, `fFrindId`, `sFrindId`, `tFrindId`, `date`) VALUES
(1, 'mamit7025@gmail.com', 1, '1234567890', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `game_table`
--

CREATE TABLE `game_table` (
  `id` int(50) NOT NULL,
  `game_name` varchar(500) NOT NULL,
  `game_fees` int(6) NOT NULL,
  `total_players` int(10) NOT NULL,
  `mach_date` varchar(30) NOT NULL,
  `mach_time` varchar(30) NOT NULL,
  `par_kill_percentage` int(2) NOT NULL,
  `fwin_percentage` int(2) NOT NULL,
  `swin_percentage` int(2) NOT NULL,
  `gam_ablut` varchar(200) NOT NULL,
  `rules_game` varchar(1000) NOT NULL,
  `g_banner` varchar(150) NOT NULL,
  `c_id` int(10) NOT NULL,
  `post_status` varchar(11) NOT NULL,
  `roomid` varchar(100) NOT NULL,
  `roompassword` varchar(100) NOT NULL,
  `team_type_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_table`
--

INSERT INTO `game_table` (`id`, `game_name`, `game_fees`, `total_players`, `mach_date`, `mach_time`, `par_kill_percentage`, `fwin_percentage`, `swin_percentage`, `gam_ablut`, `rules_game`, `g_banner`, `c_id`, `post_status`, `roomid`, `roompassword`, `team_type_id`) VALUES
(1, 'FREE-FIRE', 20, 48, '2021-07-20', '09:00', 50, 10, 0, 'IT IS A MOBILE GAME\r\n', '', '1626596404.jpg', 0, 'active', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `game_team`
--

CREATE TABLE `game_team` (
  `gt_id` int(5) NOT NULL,
  `name_team` varchar(50) NOT NULL,
  `totalplayer` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_team`
--

INSERT INTO `game_team` (`gt_id`, `name_team`, `totalplayer`) VALUES
(1, 'solo', 1),
(2, 'duo', 2),
(3, 'squad', 4);

-- --------------------------------------------------------

--
-- Table structure for table `offers_tab`
--

CREATE TABLE `offers_tab` (
  `off_id` int(50) NOT NULL,
  `game_id` int(50) NOT NULL,
  `off_name` varchar(100) NOT NULL,
  `gift` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(20) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `game_id` int(20) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `payment_satatus` varchar(50) NOT NULL,
  `payment_date` varchar(100) NOT NULL,
  `rz_payment_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pro_cata`
--

CREATE TABLE `pro_cata` (
  `pca_id` int(11) NOT NULL,
  `p_catagory` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_cata`
--

INSERT INTO `pro_cata` (`pca_id`, `p_catagory`) VALUES
(1, 'Mobile'),
(2, 'Laptop'),
(3, 'tripod');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `res_id` int(20) NOT NULL,
  `user_i` int(12) NOT NULL,
  `game_i` int(20) NOT NULL,
  `pay_id` int(20) NOT NULL,
  `prize_many` int(4) NOT NULL,
  `total_kill` int(3) NOT NULL,
  `fWin` varchar(50) NOT NULL,
  `win_text` varchar(15) NOT NULL,
  `upi` varchar(50) NOT NULL,
  `account` varchar(20) NOT NULL,
  `ifsc` varchar(30) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `ststuaPay` varchar(15) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `us_id` int(15) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `use_name` varchar(200) NOT NULL,
  `use_email` varchar(200) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `u_mobil_no` varchar(15) NOT NULL,
  `u_whatsapp` varchar(15) NOT NULL,
  `u_passwor` varchar(500) NOT NULL,
  `u_status` varchar(20) NOT NULL,
  `u_otp` varchar(20) NOT NULL,
  `user_ban` varchar(50) NOT NULL,
  `ban_essu` varchar(100) NOT NULL,
  `l_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`us_id`, `u_name`, `use_name`, `use_email`, `dob`, `gender`, `u_mobil_no`, `u_whatsapp`, `u_passwor`, `u_status`, `u_otp`, `user_ban`, `ban_essu`, `l_date`) VALUES
(1, 'Amit Mondal', 'mamit7025', 'mamit7025@gmail.com', '2003-09-13', 'Male', '7319328962', '7319328962', '$2y$10$9UXD2kY7aKzvxaseot76oOuGdFhGsaRk0DpulwwzPh.garqElZfma', 'active', '998198', 'active', '', '13-09-21 07:18:16 AM');

-- --------------------------------------------------------

--
-- Table structure for table `usr_bank`
--

CREATE TABLE `usr_bank` (
  `bnkid` int(12) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `uPi` varchar(70) NOT NULL,
  `accountNo` int(15) NOT NULL,
  `iFSC` varchar(50) NOT NULL,
  `holderName` varchar(150) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usr_bank`
--

INSERT INTO `usr_bank` (`bnkid`, `useremail`, `uPi`, `accountNo`, `iFSC`, `holderName`, `date`) VALUES
(1, 'mamit7025@gmail.com', '', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `game_id`
--
ALTER TABLE `game_id`
  ADD PRIMARY KEY (`gtId`);

--
-- Indexes for table `game_table`
--
ALTER TABLE `game_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_team`
--
ALTER TABLE `game_team`
  ADD PRIMARY KEY (`gt_id`);

--
-- Indexes for table `offers_tab`
--
ALTER TABLE `offers_tab`
  ADD PRIMARY KEY (`off_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `pro_cata`
--
ALTER TABLE `pro_cata`
  ADD PRIMARY KEY (`pca_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`us_id`);

--
-- Indexes for table `usr_bank`
--
ALTER TABLE `usr_bank`
  ADD PRIMARY KEY (`bnkid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `role_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `game_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `game_id`
--
ALTER TABLE `game_id`
  MODIFY `gtId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `game_table`
--
ALTER TABLE `game_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `game_team`
--
ALTER TABLE `game_team`
  MODIFY `gt_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `offers_tab`
--
ALTER TABLE `offers_tab`
  MODIFY `off_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pro_cata`
--
ALTER TABLE `pro_cata`
  MODIFY `pca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `res_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `us_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usr_bank`
--
ALTER TABLE `usr_bank`
  MODIFY `bnkid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
