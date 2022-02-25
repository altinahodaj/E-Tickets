-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 06:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `Id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`Id`, `type`, `description`) VALUES
(1, 'WrathOfMan', 'The 2021 Oscars ceremony was watched by the smallest audience the award show has ever received. On par with the performances of the Emmys and Golden Globes during the pandemic, the Academy Awards struggled to pull in mainstream viewers. Only 9.85 million viewers tuned into Sunday’s ceremony where Searchlight’s “Nomadland” took the top prize and Netflix walked away with the most wins. That’s a nearly 59% drop from the 23.6 million viewers that turned on their TVs for the program last year, according early fast national numbers released by Nielsen. The Academy’s third hostless show in a row scored a 1.9 rating among adults 18-49, a key demographic for advertisers, a 64% drop from 2020.');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `ID` int(11) NOT NULL,
  `Emri` varchar(30) NOT NULL,
  `Cmimi` varchar(10) NOT NULL,
  `Pershkrimi` varchar(200) NOT NULL,
  `fotosource` varchar(200) NOT NULL,
  `videolink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`ID`, `Emri`, `Cmimi`, `Pershkrimi`, `fotosource`, `videolink`) VALUES
(1, 'Wrath of Man', '3.99$', 'Adapted from the 2004 French film \\\"Le Convoyeur\\\" (aka \\\"Cash Truck\\\"), and borrowing the basic outline of the story, \\\"Wrath of Man\\\" is a time-shifting neo-noir crime thriller, filled with tough', '../media/detailsphoto1.jpg', 'https://www.youtube.com/embed/EFYEni2gsK0');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `pfd_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ccNo` bigint(20) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `lastname`, `email`, `username`, `password`, `city`, `address`, `ccNo`, `role`) VALUES
(8, 'Hysnije', 'Zllanoga', 'hysnijee.zllanoga@gmail.com', 'Hysnije', '$2y$10$pWMJ1lFJduRcExdtet8gBuUPFR6zkJF4RkdxIiQ62Cfkk/OqQ5X4q', 'Rahovec', 'Mizair-Isma', 123456788654, 1),
(9, 'Albiona', 'Berisha', 'albionaberisha20@gmail.com', 'Albiona', '$2y$10$aUsaEftC/xowZeAowpcjCeB9sgxwuKLUawpLOyAdSXRwzjKtda65m', 'Rahovec', 'Milaim-Morina', 4237489872, 1),
(10, 'Floriana', 'Zllanoga', 'florizllanoga@hotmail.com', 'Floriana', '$2y$10$d2sYzHQQ.cY.eZ7LgG/2Ju.MyywOJe5FDwjRnUzqqsNgjKICghZOi', 'Rahovec', 'Milaim-Morina', 34738949393, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
