-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 04:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lostworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_mob_no` int(12) NOT NULL,
  `country` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_mob_no`, `country`, `password`, `gender`, `date`) VALUES
(18, 'kalpna', 'abc@gmail.com', 0, 'india', '$2y$10$.X2E9HsY6nPvnkFe5D6lA.Hng1tlBU3LKcAJQBxpe/FCyNJc3RmAe', '', '2021-04-26'),
(19, 'kalpna', 'kalpanaga4@gmail.com', 2147483647, 'india', '$2y$10$trt1v56xVyF.84MrpP9BbeJZg77.JbOsZMYUlWi7fQbDVLmG/yWNm', '', '2021-04-26'),
(20, 'kalpna', 'a@gmail.com', 496316, 'india', '$2y$10$ep7gn5G0uE/KsHRp2ezp5OFBfA1o3uObmFR1bqZt0FU7voJSyIvnq', 'female', '2021-04-26'),
(21, 'ydgyeujsb', 'ab@gmail.com', 0, 'india', '$2y$10$1VNMYNZbs/BFv0bjBod10OViihiZnHsX3KnNk9WAFr58m2vM18ArG', '', '2021-04-26'),
(22, 'w', 'w@gmail.com', 964, 'india', '$2y$10$O3YiQQNj3taz95wtsa5EH.Xe6l3P2raDqMO33AyByl6VlDfKwHsGq', 'female', '2021-04-26'),
(23, 'hima', 'yfuhj@gmail.com', 6431, 'india', '$2y$10$ZXMNjHV.I8yVstg38Y4lv.w6eo710x9uAUZU0nvlZ8c0YrsLwt89a', 'female', '2021-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `post_id` int(100) NOT NULL,
  `post_name` varchar(100) NOT NULL,
  `post_category` varchar(50) NOT NULL,
  `post_address` varchar(500) NOT NULL,
  `post_details` varchar(500) NOT NULL,
  `poster_name` varchar(50) NOT NULL,
  `poster_email` varchar(50) NOT NULL,
  `poster_phone_no` int(12) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `post_img1` varchar(100) NOT NULL,
  `post_img2` varchar(100) NOT NULL,
  `post_img3` varchar(100) NOT NULL,
  `post_img4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`post_id`, `post_name`, `post_category`, `post_address`, `post_details`, `poster_name`, `poster_email`, `poster_phone_no`, `post_date`, `post_img1`, `post_img2`, `post_img3`, `post_img4`) VALUES
(2, 'kalpana kumari', '1', 'house no. 30 road no 2a indrapuri text book colony keshrinagar patna', 'zxtcyvubinokml kjhgfdzes54e6r7t8y9uojp;ml\r\nzxctyvubinomkl jghfdzftsrdyiuho\r\nzdxctvyguhijomlknbjvhcgxrdtfyguhik\r\nszxrctvyubinoknljhvuyf', 'kalpana kumari', 'kalpanaga4@gmail.com', 2147483647, '2021-04-28 18:52:20', 'Screenshot (1).png', 'Screenshot (2).png', 'Screenshot (3).png', 'Screenshot (3).png'),
(3, 'kalpana kumari', '1', 'house no. 30 road no 2a indrapuri text book colony keshrinagar patna  \r\nsdr68t79y8opohlkbjvchxgzgtAE4ws6e57r6itykgjfcxghzfsrywer6ut', 'fguhjkpl[]s\'vdbm;n k4\r\nfecccccccccjlkhgcxysdr6t7iyokl,m\r\nvdsyty8oulkjafcdu6i7o8ukm hgfbgdrtyiuka\r\ncaesfy6tui8ohgjfi7tk,gjmdaw\r\nfydadgiaskcvjfyiugtk', 'a', 'a@gmail.com', 56431, '2021-05-01 15:47:26', 'Screenshot (1).png', 'Screenshot (2).png', 'Screenshot (2).png', 'Screenshot (3).png'),
(4, 'kalpana kumari', '1', 'house no. 30 road no 2a indrapuri text book colony keshrinagar patna  \r\nsdr68t79y8opohlkbjvchxgzgtAE4ws6e57r6itykgjfcxghzfsrywer6ut', 'fguhjkpl[]s\'vdbm;n k4\r\nfecccccccccjlkhgcxysdr6t7iyokl,m\r\nvdsyty8oulkjafcdu6i7o8ukm hgfbgdrtyiuka\r\ncaesfy6tui8ohgjfi7tk,gjmdaw\r\nfydadgiaskcvjfyiugtk', 'a', 'a@gmail.com', 56431, '2021-05-01 15:47:47', 'Screenshot (1).png', 'Screenshot (2).png', 'Screenshot (2).png', 'Screenshot (3).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
