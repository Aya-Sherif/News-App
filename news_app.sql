-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 12:05 PM
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
-- Database: `news_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `number_of_views` int(11) DEFAULT 1000,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','accepted','rejected') DEFAULT 'pending',
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `image`, `number_of_views`, `created_at`, `status`, `category_id`, `user_id`) VALUES
(9, 'kkkkkkkkkkk', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', '../../../uploads/65b9916d37435_b23a3f82760deac9.jpg', 0, '2024-01-31 00:16:45', 'pending', 0, 10),
(10, 'aaaa', 'sdfshhhhhhhhhhhhhhhhhhbbbbbbbbbbbbbbbkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', '../../../uploads/65b99723932bb_481d4911456f3206.jpg', 0, '2024-01-31 00:41:07', 'accepted', 0, 13),
(11, 'aaa', 'VIVIVIVIVIVV\r\nvnvnvnvnv\r\nkdkdkdkdkd\r\nwlwlwlwlw\r\nlldl;sfsgkpppp', '../../../uploads/65bce9328e88f_8278656062f229ab.jpg', 0, '2024-02-02 13:08:02', 'accepted', 0, 15),
(13, 'djdjjf', 'alsdjjda\r\nakskdaslk;af\r\ndjfjlsjaljfda\r\nakskalalas\r\nakla;dsfja;sa', '../../../uploads/65bcf0acb5172_56cc3d5c54331246.jpg', 0, '2024-02-02 13:39:56', '', 0, 15),
(14, 'test', 'test test test test test testtest test testtest test testtest test testtest test testtest test testtest test testtest test testtest test testtest test testtest test testtest test testtest test testtest test testtest test testtest test test', '../../../uploads/65bcf584557fc_fee49f5991ec9c83.jpg', 0, '2024-02-02 14:00:36', '', 0, 15),
(15, 'aaaaa', 'aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa aaaaa', '../../../uploads/65bcf6423124d_93a7a9df417a5402.jpg', 0, '2024-02-02 14:03:46', 'pending', 0, 15),
(16, 'aaaaaa', 'aaaaaaaa \r\naaaaaaaaaaaa\r\na\r\naaaaaaaaaaaaaaa\r\na\r\naaaaaaaaaaaa\r\naaaa\r\naaaaaaaaa\r\na\r\naa\r\na\r\n\r\naaaaaaa\r\na', '../../../uploads/65bcf73648923_29fdfaf2acf52008.jpg', 0, '2024-02-02 14:07:50', 'pending', 24, 14);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(24, 'aaa'),
(0, 'All'),
(21, 'bbbbbb');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','accepted','rejected') DEFAULT 'pending',
  ` article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','writer') NOT NULL DEFAULT 'writer',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `role`, `status`) VALUES
(10, 'AyaNassef123', 'Aya Nassef', '123456', 'admin', 'active'),
(11, 'aaaaaaaaaaaaa', 'aaaaaaaaaaa', '$2y$10$/rooHGNUYVv1rI.2viLbdOFgW/O//USwKT3xmxFGb8.M2zW0KSdH.', 'admin', 'active'),
(12, 'ABC123', 'ABC', '123456', 'writer', 'active'),
(13, 'ABC1234', 'ABC1', '$2y$10$I10.TLMzfJvQrKwy92wyj.qvl6cv.oqqqYEd2ID6xpKuHHlkQxyuC', 'admin', 'active'),
(14, 'admin', 'admin', '$2y$10$7eUSdviU5TJ5B4Bur3uRMOpwZBUYV0KCFOp5DksoN/ItAbUYC8rRe', 'admin', 'active'),
(15, 'writer', 'writer', '$2y$10$kOqwOKv8J4FtNup8e4mYcuESySnZkE1lWhQcbBH30vRypWgcJ.KnK', 'writer', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY ` name` (`name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY ` article_id` (` article_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (` article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
