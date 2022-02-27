-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 01:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hci_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `movieinfo`
--

CREATE TABLE `movieinfo` (
  `ID` int(11) NOT NULL,
  `Emri` varchar(30) NOT NULL,
  `Cmimi` varchar(10) NOT NULL,
  `Pershkrimi` varchar(200) NOT NULL,
  `fotosource` varchar(200) NOT NULL,
  `fotosource2` varchar(200) NOT NULL,
  `videolink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movieinfo`
--

INSERT INTO `movieinfo` (`ID`, `Emri`, `Cmimi`, `Pershkrimi`, `fotosource`, `fotosource2`, `videolink`) VALUES
(1, 'Wrath of Man', '3.99$', 'Adapted from the 2004 French film \"Le Convoyeur\" (aka \"Cash Truck\"), and borrowing the basic outline of the story, \"Wrath of Man\" is a time-shifting neo-noir crime thriller, filled with tough, sometim', '../media/detailsphoto1.jpg', '../media/detailsphoto2.jpg', 'https://www.youtube.com/embed/EFYEni2gsK0'),
(2, 'Before we Go', '5.00$', 'Two strangers stuck in Manhattan for the night grow into each other\'s most trusted confidants when an evening of unexpected adventure forces them to confront their fears and take control of their live', '../media/detailsphoto3.jpg\r\n', '../media/detailsphoto4.jpg', 'https://www.youtube.com/embed/vNzaiGzPoUg'),
(3, 'Interstellar ', '2.10$', 'Interstellar is a 2014 British-American epic science fiction film co-written, directed and produced by Christopher Nolan. ... Set in a dystopian future where humanity is struggling to survive, the fil', '../media/detailsphoto5.jpg', '../media/detailsphoto6.jpg', 'https://www.youtube.com/embed/zSWdZVtXT7E'),
(4, 'Passengers', '7.00$', 'On a routine journey through space to a new home, two passengers, sleeping in suspended animation, are awakened 90 years too early when their ship malfunctions. As Jim and Aurora face living the rest ', '../media/moviephoto1.jpg', '../media/detailsphoto7.jpg', 'https://www.youtube.com/embed/7BWWWQzTpNU'),
(5, 'Red Sparrow', '1.99$', 'The film stars Jennifer Lawrence, Joel Edgerton, Matthias Schoenaerts, Charlotte Rampling, Mary-Louise Parker, and Jeremy Irons. It tells the story of a Russian intelligence officer, who is sent to ma', '../media/moviephoto2.jpg', '../media/details5h.jpg', 'https://www.youtube.com/embed/PmUL6wMpMWw'),
(6, 'The Terminal', '3.50$', 'The film is about an Eastern European man who is stuck in New York\'s John F. Kennedy Airport terminal when he is denied entry into the United States and at the same time is unable to return to his nat', '../media/comedy1.jpg', '../media/details6h.jpg\r\n', 'https://www.youtube.com/embed/iZqQRmhRvyg'),
(7, 'The Upside', '8.20$', 'The Upside is a 2017 American comedy-drama film directed by Neil Burger, written by Jon Hartmere. ... The film follows a paralyzed billionaire (Bryan Cranston) who strikes up an unlikely friendship wi', '../media/comedy2.jpg', '../media/details7h.jpg', 'https://www.youtube.com/embed/EWw7rCHcduQ'),
(8, 'Grey Hound', '5.60$', '.S. Navy Cmdr. Ernest Krause is assigned to lead an Allied convoy across the Atlantic during World War II. His convoy, however, is pursued by German U-boats. Although this is Krause\'s first wartime mi', '../media/aksionphoto2.jpg', '../media/detailsphoto8.jpg', 'https://www.youtube.com/embed/eyzxu26-Wqk'),
(9, 'Mortal Combat', '1.50$', 'Hunted by the fearsome warrior Sub-Zero, MMA fighter Cole Young finds sanctuary at the temple of Lord Raiden. Training with experienced fighters Liu Kang, Kung Lao and the rogue mercenary Kano, Cole p', '../media/aksionphoto1.jpg', '../media/details9h.jpg', 'https://www.youtube.com/embed/BQPKD7eozY'),
(10, 'Extraction', '1.99$', 'A black-market mercenary who has nothing to lose is hired to rescue the kidnapped son of an imprisoned international crime lord. But in the murky underworld of weapons dealers and drug traffickers, an', '../media/triller1.jpg', '../media/details10h.jpg', 'https://www.youtube.com/embed/L6P3nI6VnlY'),
(11, 'Rava', '7.30$', 'Raya and the Last Dragon is a 2021 American computer-animated fantasy action-adventure film produced by Walt Disney Pictures and Walt Disney Animation Studios, and distributed by Walt Disney Studios M', '../media/animated1.jpg', '../media/details11h.jpg', 'https://www.youtube.com/embed/1VIZ89FEjYI'),
(12, 'Naruto', '9.99$', 'Two years after the Fourth Shinobi World War, Naruto must stop Toneri Otsutsuki, a descendant of Hamura Otsutsuki, after Toneri causes the moon to descend toward Earth.', '../media/animated2.jpg', '../media/details12h.jpg', 'https://www.youtube.com/embed/YKSNBIlM_bY');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ccNo` bigint(20) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `lastname`, `email`, `password`, `ccNo`, `role`) VALUES
(13, 'Hysnije ', 'Zllanoga', 'hysnijee.zllanoga@gmail.com', '$2y$10$nFFyogSJiP3MCLSB0Se1UuXufuqka5u7iXN2GfkqVMu4B1krmbYOK', 2345675432, 0),
(16, 'Endrit', 'Makolli', 'endrit.makolli@gmail.com', '$2y$10$jE9s2Ny5SDjU0.tFac2kt.vYjGc3/i3AsI6w9vHBnvDe1Hba28V/y', 1234343535, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movieinfo`
--
ALTER TABLE `movieinfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
