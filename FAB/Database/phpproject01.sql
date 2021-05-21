-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2021 at 01:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject01`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_fname` varchar(30) NOT NULL,
  `c_sname` varchar(30) NOT NULL,
  `c_rdname` varchar(50) NOT NULL,
  `c_postcode` varchar(10) NOT NULL,
  `c_tel` varchar(15) NOT NULL,
  `c_email` varchar(60) NOT NULL,
  `c_notes` varchar(250) NOT NULL,
  `c_binday` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_fname`, `c_sname`, `c_rdname`, `c_postcode`, `c_tel`, `c_email`, `c_notes`, `c_binday`) VALUES
(1, 'Dall', 'Melledy', '41 Tamar Close, Callington', 'PL17 7PW', '1822534031', 'dmelledy0@posterous.com', '', 'Wednesday'),
(2, 'Korney', 'Hagergham', '1 Victoria Terrace, Milton Combe', 'PL20 6HL', '1822015374', 'khagergham1@smugmug.com', '', 'Wednesday'),
(3, 'Gelya', 'Luipold', '14 Turret Grove, Plymouth', 'PL4 7BH', '1752022866', 'gluipold2@wikimedia.org', '', 'Tuesday'),
(4, 'Emmanuel', 'Godsmark', 'Westerley, Church Park, St Mellion', 'PL12 6RG', '1822121780', 'egodsmark3@google.it', '', 'Thursday'),
(6, 'Lilias', 'Manilow', '48 Pendray Gardens, Dobwalls', 'PL14 4NT', '1579063453', 'lmanilow4@si.edu', '', 'Monday'),
(7, 'Dur', 'Nyland', 'Cleave Place, Weir Quay', 'PL20 7BT', '1822825126', 'dnyland5@rambler.ru', '', 'Wednesday'),
(8, 'Bea', 'Seydlitz', '20 Cot Hill, Plymouth', 'PL7 1SB', '1752305460', 'bseydlitz6@prlog.org', '', 'Thursday'),
(9, 'Raina', 'De Domenici', '2 Barras Street, Liskeard', 'PL14 6AD', '1579403041', 'rdedomenici7@go.com', '', 'Wednesday'),
(10, 'Karalee', 'Fiddler', 'Luxcross House, Pengover Road, Liskeard', 'PL14 3EL', '1579666684', 'kfiddler8@bloglovin.com', '', 'Wednesday'),
(11, 'Lonee', 'Winpenny', '49 Porthmeor Road, St. Austell', 'PL25 3LU', '1726832558', 'lwinpenny9@printfriendly.com', '', 'Tuesday');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(128) NOT NULL,
  `e_amount` int(10) NOT NULL,
  `e_date` date NOT NULL,
  `e_method` varchar(128) NOT NULL,
  `e_notes` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `notice_id` int(11) NOT NULL,
  `notice_sender` varchar(50) NOT NULL,
  `notice_date` date NOT NULL,
  `notice_subject` varchar(250) NOT NULL,
  `notice_message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `orders_ref` varchar(10) NOT NULL,
  `c_id` int(11) NOT NULL,
  `orders_sdate` date NOT NULL,
  `orders_edate` date NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_length` int(15) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_length`, `product_price`, `product_code`) VALUES
(1, 'test', 2, 2, NULL),
(3, 'One off commercial clean', 1, 15, 'COM001'),
(4, 'One off commercial clean for 2 bins', 1, 29, 'COM002'),
(5, 'One off commercial clean for 3 bins', 1, 43, 'COM003'),
(6, 'One off commercial clean for 4 bins', 1, 57, 'COM004'),
(7, 'Commercial weekly clean for 1 bin', 4, 40, 'COM005'),
(8, 'Commercial weekly clean for 2 bin', 4, 76, 'COM006'),
(9, 'Commercial weekly clean for 3 bins', 4, 112, 'COM007'),
(10, 'Commercial weekly clean for 4 bins', 4, 144, 'COM008'),
(11, 'Residential one off weekly clean for 1 bin', 1, 6, 'RES001'),
(12, 'Residential one off weekly clean for 2 bin', 1, 11, 'RES002'),
(13, 'Residential one off weekly clean for 3 bins', 1, 16, 'RES003'),
(14, 'Residential one off weekly clean for 4 bins', 1, 21, 'RES004'),
(15, 'Residential weekly clean for 1 bin', 4, 14, 'RES005'),
(16, 'Residential weekly clean for 2 bins', 4, 28, 'RES006'),
(17, 'Residential weekly clean for 3 bins', 4, 46, 'RES007'),
(18, 'Residential weekly clean for 4 bins', 4, 60, 'RES008');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(11) NOT NULL,
  `s_fname` varchar(100) NOT NULL,
  `s_sname` varchar(100) NOT NULL,
  `s_rdname` varchar(100) NOT NULL,
  `s_postcode` varchar(10) NOT NULL,
  `s_tel` int(20) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_notes` varchar(500) NOT NULL,
  `s_role` varchar(20) NOT NULL,
  `s_commencement` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_id`, `s_fname`, `s_sname`, `s_rdname`, `s_postcode`, `s_tel`, `s_email`, `s_notes`, `s_role`, `s_commencement`) VALUES
(2, 'test', 'test', 'test', 'test', 123456789, 'test', '', 'test', '2021-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `timesheet`
--

CREATE TABLE `timesheet` (
  `t_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `t_date` date NOT NULL,
  `t_start` time NOT NULL,
  `t_finish` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(12, 'test', 'test@test.com', 'username', '$2y$10$cSabUlQDgjVk0qV8ednrwuUOFao.t0NoDAd6uJL3J0W1TrEcNXGxq');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `v_id` int(11) NOT NULL,
  `v_reg` varchar(128) NOT NULL,
  `v_make` varchar(128) NOT NULL,
  `v_model` varchar(128) NOT NULL,
  `v_purchased` date NOT NULL,
  `v_price` int(11) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `c_id` (`c_id`) USING BTREE;

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `timesheet`
--
ALTER TABLE `timesheet`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `s_id` (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `timesheet`
--
ALTER TABLE `timesheet`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `timesheet`
--
ALTER TABLE `timesheet`
  ADD CONSTRAINT `timesheet_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `staff` (`s_id`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `staff` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
