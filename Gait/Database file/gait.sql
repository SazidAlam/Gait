-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2020 at 12:55 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `create_date`) VALUES
(1, 'sazid', 'sazid.alam@northsouth.edu', '1234', '2020-03-28 09:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `create_date`) VALUES
(1, 'Mouse', '2020-03-28 13:02:28'),
(2, 'Monitor', '2020-03-28 13:02:36'),
(3, 'Graphics card', '2020-03-28 13:07:15'),
(4, 'Keyboard', '2020-04-01 08:40:45');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(30) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img`) VALUES
(1, 'img/1585287462.png'),
(2, 'img/1585287532.png'),
(3, 'img/1585291220.png'),
(4, 'img/1585291252.png'),
(5, 'img/1585291467.png'),
(6, 'img/1585292605.png'),
(7, 'img/1585308315.png');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id`, `name`, `user_name`, `password`) VALUES
(1, 'sazid', 'sazid_alam', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `category`, `image`, `description`, `create_date`) VALUES
(1, 'test', 'test', 'test.jpg', 'all about test', '2020-03-26 20:29:04'),
(2, 'test2', 'test2', 'test2.png', 'sdasd', '2020-03-26 20:29:35'),
(3, '', '', '', '', '2020-03-26 21:55:53'),
(4, 'test title', 'sdf', '', 'fsff', '2020-03-26 21:58:41'),
(5, 'test title', 'sdf', '', 'fsff', '2020-03-26 22:08:51'),
(6, '', '', '', '', '2020-03-26 22:09:10'),
(7, 'sadas', 'asd', '', 'adasd', '2020-03-26 16:49:23'),
(8, 'dasd', 'aa', '', 'aa', '2020-03-27 10:52:36'),
(9, 's', 'sdf', '', 's', '2020-03-27 10:54:04'),
(10, 'test title', 'aa', '', 'aa', '2020-03-27 10:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `uploadedimage`
--

CREATE TABLE `uploadedimage` (
  `id` int(11) NOT NULL,
  `imagename` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `body` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploadedimage`
--

INSERT INTO `uploadedimage` (`id`, `imagename`, `name`, `body`, `link`) VALUES
(7, 'keyboard 1.jpg', 'Microsoft Sculpt Ergonomic Keyboard for Business', 'Featuring a unique split keyset design, the Microsoft Sculpt helps to naturally position your wrists and forearms by reducing all sources of ninety degree angles. The moment you rest your fingers on the keys, you should immediately notice a huge distinction in the way your arms form a natural, relaxed position.', 'Keyboard'),
(11, 'key2.jpg', 'Razer Turret Mechanical Keyboard and Mouse Set', 'If you\'re an avid gamer, the Razer Turret is an excellent companion for long days spent in front of the screen. Ideal for extended console gaming sessions, the Razer board lasts up to forty-three hours with a single charge while all lighting is disabled.', 'Keyboard'),
(12, 'key3.jpg', 'HP Wireless Elite Keyboard Version II', 'When you first lay your eyes on the HP Elite, the first thing that captures your attention are sleek, clean lines. Constructed with an idealized form, this ultra-slim keyboard is just as stylish as it is versatile.', 'Keyboard'),
(13, 'key4.jpg', 'iClever Foldable Bluetooth Keyboard', 'The iClever keyboard is recommended for writers that need to jot down new ideas on the go. Featuring a slim, reliable typing surface and fully foldable design, the iClever board is perfect for both travel and comfort.', 'Keyboard'),
(14, 'cpu1.jpg', 'AMD RYZEN 3 2200G Quad-Core 3.5 GHz', 'The Ryzen line of CPUs is popular, and is often looked at as a name in significant power and potency. Ryzen is actually not that expensive, as long as you aren’t going for the latest model. This one is actually an APU, or a combination of CPU and GPU in a single chip.', 'Processor/CPU'),
(15, 'cpu2.jpg', 'AMD Ryzen 5 2400G Processor with Radeon RX Vega 11 Graphics', 'It’s at this point you will notice that all of these under 200 CPUs are APUs. I don’t care for that, but from here on, we’re just going to focus on how well the CPU feature functions, and here we have the Ryzen 5, which is much better at not letting a deadbeat integrated GPU get genuinely in its way.', 'Processor/CPU'),
(16, 'headphone1.jpg', 'PHILIPS SHB9850NC/27', 'If you\'re somebody who wants to pay for models that are incredibly durable and able to cancel noise effectively, this pair of Philips headphones are great for you. The soft ear cushions are incredibly comfortable, with the design looking not just sleek, but being able to also be compactly folded with ease.', 'Headphone'),
(17, 'headphone2.jpeg', 'Sennheiser HD1', 'When referring to cheaper noise cancelling models in the previous review of the Philips SHB9850NCs, I was alluding to this Sennheiser HD1 one. This is because they are truly wonderful thing that are not on my personal favorite, but a great option for someone who is looking for their first pair of truly luxury headphones.', 'Headphone'),
(18, 'gcard1.png', ' Gigabyte GeForce GT 1030 GV-N1030SL-2GL', 'I think the Gigabyte GeForce GT 1030 GV-N1030SL-2GL is a good card to go with. It can do rapid batch-crunching of video mastering and compositing, and it can handle high-definition video streams with no real sync problems or lag. It can game passably too, running stuff from before 2017 at medium settings.', 'Graphics card'),
(19, 'gcard2.jpg', ' XFX AMD Radeon RX 550', 'XFX AMD Radeon RX 550 with a stunning 4GB of memory. I had one of these when they were the latest and greatest, and this thing ran early Xbox One and PS4 graphics, if you dropped them from maximum to medium settings, believe it or not. This one’s also a bit loud, making an odd “vroom” sound intermittently as the fan oscillated.', 'Graphics card');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `create_date`) VALUES
(1, 'Sazid', 'sazid.alam@northsouth.edu', '1234', '2020-03-26 12:49:23'),
(2, 'test', 'test@test.com', 'test', '2020-03-26 19:31:32'),
(3, 'test2', 'test2@test.com', 'test2', '2020-03-28 09:43:30'),
(4, 'test 4', 'test4@test.com', '1234', '2020-03-28 13:08:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadedimage`
--
ALTER TABLE `uploadedimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `uploadedimage`
--
ALTER TABLE `uploadedimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
