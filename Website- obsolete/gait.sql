-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 06:30 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gait`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(255) NOT NULL,
  `P_ID` int(255) NOT NULL,
  `U_ID` int(255) NOT NULL,
  `Details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Category` varchar(255) NOT NULL,
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Name`, `Picture`, `Description`, `Category`, `User_ID`) VALUES
(1, 'ENHANCE PowerUP XXL Mouse Pad + Gaming Mouse Wireless Charging System', '', 'Introducing the ENHANCE PowerUP series, a product line designed to keep you running at a full charge while providing a premium gaming surface for your mouse. The PowerUP XXL mouse pad is a large fabric mouse pad with a built in wireless charger to keep your Android / Apple smartphone or Qi wireless compatible device fully charged during a gaming session.\r\n\r\nThe built in wireless charging pad features a 5V 2A output to quickly charge any Qi wireless devices, including gaming mice like our PowerUP Pro Gaming Mouse that is included in this bundle. It also features protections that ensures your wireless charging pad never damages your device or itself. It includes Under and Over Current protection, Temperature protection, and Foreign Object Detection.\r\n\r\nMade from premium neoprene fabric, the PowerUP mouse pad provides a smooth tracking surface and reduces friction during intense gaming sessions or while working at the office. The back is entirely covered with a non-slip textured rubber material, which eliminates any unwanted movement during competitive play that can potentially cause your shot to go off target.', 'Mouse', 1),
(2, 'INFILTRATE\r\nENHANCE Infiltrate Blackout Mouse …\r\nENHANCE Infiltrate Gaming Mouse ', '', 'Victory awaits when you enter the online battlegrounds with the Infiltrate gaming mouse. The Infiltrate features 4 default DPI levels with a dedicated DPI toggle to switch between 800. 1200, 1600, and 2400 DPI. Quickly switch your sensitivity to hone in on an enemy through the scope, then switch back to make a quick 180 degree turn, all without having to set up shortcuts in an annoying software suite. The top of the Infiltrate is covered in a smooth rubber coating that adds texture and improves overall comfort during extended use. There are two side access thumb buttons for additional quick actions during gameplay, and are surrounded by a textured grip that ensures a firm grip and maximum control over your actions.', 'Mouse', 1),
(3, 'ENHANCE Infiltrate KL2 Membrane Gaming Keyboard', '', 'The ENHANCE Infiltrate KL2 Membrane Gaming Keyboard offers high performance PC gaming features to gamers of all skill levels. A premium design made from brushed aluminum metal sits nicely on modern gaming desks and comes equipped with a variety of LED lighting modes. Easily switch from 3 different rgb lighting modes or enable the dynamic breathing with one dedicated key. Engage a turbo input mode that significantly increases the speed of key inputs from 21 characters per second to 62 characters per second. Turbo mode is ideal for when you need to spam a repetitive action on certain keys at hyperspeed, allowing you to outperform the competition. The Infiltrate KL2 features anti-ghosting and 19 key rollover, which increase the precision of your typing and allow for uninhibited keystrokes in almost unlimited combination for the execution of macros and fast action commands. Premium quality membrane keys in combination with the ultra slim 6mm keycaps make the Infiltrate KL2 incredibly quiet while retaining the tactile feel of traditional gaming keyboards. The quiet typing is perfect for late night gaming without waking up your housemates. The full size 104 key design is a great addition to any pc gaming desk.', 'Keyboard', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ID` int(255) NOT NULL,
  `Rating` int(255) NOT NULL,
  `Details` text NOT NULL,
  `U_ID` int(11) NOT NULL,
  `P_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Eamil` varchar(255) DEFAULT NULL,
  `Password` varchar(32) NOT NULL,
  `PremiumFlag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Eamil`, `Password`, `PremiumFlag`) VALUES
(1, 'sazid', 'sazid@student.com', 'sazid123', 1),
(2, 'ishrat', 'ishrat@ishrat.com', 'ishrat', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `U_ID` (`U_ID`),
  ADD KEY `P_ID` (`P_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `U_ID` (`U_ID`),
  ADD KEY `P_ID` (`P_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`U_ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`P_ID`) REFERENCES `product` (`ID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`U_ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`P_ID`) REFERENCES `product` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
