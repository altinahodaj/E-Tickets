-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 09:58 PM
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
(1, 'oscar-ceremony', 'The 2021 Oscars ceremony was watched by the smallest audience the award show has ever received. On par with the performances of the Emmys and Golden Globes during the pandemic, the Academy Awards struggled to pull in mainstream viewers. Only 9.85 million viewers tuned into Sunday’s ceremony where Searchlight’s “Nomadland” took the top prize and Netflix walked away with the most wins. That’s a nearly 59% drop from the 23.6 million viewers that turned on their TVs for the program last year, according early fast national numbers released by Nielsen. The Academy’s third hostless show in a row scored a 1.9 rating among adults 18-49, a key demographic for advertisers, a 64% drop from 2020.'),
(2, 'industries', 'Keeping perishable goods fresh for an extended period of duration is one of the prime concerns across all major industries. The search for sustainable and user-friendly packing options for the last few decades in the packaging industry have led to a wide range of peelable and resealable film packages. Most of the packages primarily include adhesive tapes and zips. In the recent times, companies have started utilizing Hot Melt Pressure Sensitive Adhesive (HMPSA) to implement this peelable and resealable feature in the packaging industry, which is estimated to further propel the peelable and resealable films market.'),
(3, 'rules', 'The first rule of investing is “buy low, sell high.” Right now, few businesses are hitting lower lows than the movie theater industry, which could make it a great time to acquire a distressed asset ahead of a turnaround. That’s been true for the duration of the pandemic, and it’s still true now even as light can be dimly glimpsed at the end of the tunnel. The question is, is there an upside given the uncertain state of the entire film industry, and if so, for what kind of buyer? These are hard times for the movie theater industry. Domestic ticket sales in the US were down 80% in 2020 to $2.2 billion from a 2019 haul of $11.4 billion, according to Comscore SCOR -3.1%. You’d have to go back to the early 1980s to find a number that low. And industry leaders fear the hangover may persist even as the cloud of COVID-19 slowly starts to lift with the rollout of vaccines in 2021.');

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

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `img_path`, `pfd_path`) VALUES
(1, 'Top Rated Hollywood Movies', '../media/american.webp', 'https://www.imdb.com/chart/top/'),
(2, 'Top Rated Bollywood Movies', '../media/bollywoodMovies.jpg', 'https://www.imdb.com/india/top-rated-indian-movies/'),
(3, 'Top Rated Diziland Movies', '../media/turkishMovies.jpg', 'https://www.imdb.com/search/title/?languages=tr&sort=user_rating&title_type=feature');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `img_path`, `price`) VALUES
(1, 'I Want You Back', 'comedy', '../media/comedyMovie1.jpg', 4.99),
(2, 'Marry Me', 'comedy', '../media/comedyMovie2.jpg', 6.99),
(3, 'Dog', 'comedy', '../media/comedyMovie3.jpg', 5.99),
(4, 'Turning Red', 'comedy', '../media/comedyMovie4.jpg', 4.99),
(5, 'Legally Blondes', 'comedy', '../media/comedyMovie6.jpg', 3.99),
(6, 'Bob\'s Burgers: The Movie', 'comedy', '../media/comedyMovie7.jpg', 8.99),
(7, 'Puss in Boots: The Last Wish', 'comedy', '../media/comedyMovie8.jpg', 4.99),
(8, 'Free Guy', 'comedy', '../media/comedyMovie9.jpg', 6.99),
(9, 'Hocus Pocus 2', 'comedy', '../media/comedyMovie10.jpg', 8.99),
(10, 'The Batman', 'action', '../media/actionMovie1.jpg', 9.99),
(11, 'Ambulance', 'action', '../media/actionMovie2.jpg', 3.99),
(12, 'Top Gun', 'action', '../media/actionMovie3.jpg', 5.99),
(13, 'Uncharted', 'action', '../media/actionMovie4.jpg', 5.99),
(14, 'Jurassic World', 'action', '../media/actionMovie5.jpg', 4.99),
(15, 'The 355', 'action', '../media/actionMovie6.jpg', 9.99),
(16, 'Moonfall', 'action', '../media/actionMovie7.jpg', 5.99),
(17, 'Operation Fortune: Ruse de Guerre', 'action', '../media/actionMovie8.jpg', 5.99),
(18, 'The Contractor', 'action', '../media/actionMovie9.jpg', 3.99),
(19, 'Issac', 'thriller', '../media/thrillerMovie1.jpg', 4.99),
(20, 'The Devil\'s Light', 'thriller', '../media/thrillerMovie2.jpg', 9.99),
(21, 'Halloween Ends', 'thriller', '../media/thrillerMovie3.jpg', 4.99),
(22, 'Don\'t Worry Darling', 'thriller', '../media/thrillerMovie4.jpg', 9.99),
(23, 'John Wynn\'s One Hour', 'thriller', '../media/thrillerMovie5.jpg', 4.99),
(24, 'Bullet Train', 'thriller', '../media/thrillerMovie6.jpg', 5.99),
(25, 'Nitram', 'thriller', '../media/thrillerMovie7.jpg', 3.99),
(26, 'The toll', 'thriller', '../media/thrillerMovie8.jpg', 4.99),
(27, 'Sin Eater', 'thriller', '../media/thrillerMovie9.jpg', 9.99),
(28, 'Sonic the Hedgehog 2', 'animated', '../media/animatedMovie1.png', 3.99),
(29, 'The Bad Guys', 'animated', '../media/animatedMovie2.png', 4.99),
(30, 'Chip \'n Dale: Rescue Rangers', 'animated', '../media/animatedMovie3.jpg', 4.99),
(31, 'DC League of Super-Pets', 'animated', '../media/animatedMovie4.jpg', 9.99),
(32, 'LightYear', 'animated', '../media/animatedMovie5.jpg', 5.99),
(33, 'Minions: The Rise of Gru', 'animated', '../media/animatedMovie6.jpg', 9.99),
(34, 'Blazing Samurai', 'animated', '../media/animatedMovie7.jpg', 5.99),
(35, 'Luck', 'animated', '../media/animatedMovie8.jpg', 4.99),
(36, 'Strange World', 'animated', '../media/animatedMovie9.jpg', 3.99);

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
(9, 'Albiona', 'Berisha', 'albionaberisha20@gmail.com', 'Albiona', '$2y$10$aUsaEftC/xowZeAowpcjCeB9sgxwuKLUawpLOyAdSXRwzjKtda65m', 'Rahovec', 'Milaim-Morina', 4237489872, 1),
(11, 'Altina', 'Hodaj', 'altinahodaj@gmail.com', 'altinahodaj', '$2y$10$Db.gzKudBxbAkdGR9mSOWOO54n/iA/2GORwcO69GqlIFpjTq94zlS', 'Prishtina', 'Dardani', 1204572, 1),
(12, 'Era', 'Hasimja', 'erahasimja@gmail.com', 'erahasimja', '$2y$10$aIfWUF3cU06vnJ29NhAVduHeAlwjlPk.idsExplqVK0X6KenuREiK', 'Gjakove', 'Carshia', 21474562, 0),
(13, 'Endrit', 'Makolli', 'endritmakolli@gmail.com', 'endritmakolli', '$2y$10$eLUPOk1eYvAzbEm3zzWSZekisuazxinUMCzKQjYJUxO/GJ2X/0kFy', 'Prishtine', 'Dragodan', 5413555, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
