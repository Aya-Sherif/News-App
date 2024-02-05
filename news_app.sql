-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 12:07 PM
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
(23, 'World Mental Health Day', 'Around the world, one in four people will have some kind of mental illness during their lifetime. Around 450 million people are living with a mental health problem right now, making it one of the biggest health issues in the world. Yet people rarely talk about any mental health problems they have because there is still a lot of stigma.\r\n\r\nWorld Mental Health Day\r\nWorld Mental Health (WMH) Day was first celebrated in 1992. It was created to raise awareness of just how common mental health issues are, fight against stigma and campaign for better conditions and treatment for people who have a mental health problem. The number of people and organisations involved in celebrating WMH Day has grown and grown, and now many countries, such as Australia, actually have a Mental Health Week, which includes WMH Day on 10 October. Each year there is a different theme. For example, in 2017 the theme was mental health in the workplace.\r\n\r\nMental health in the workplace\r\nEmployers should create an environment which supports good mental health. This also helps to reduce the of days employees take off work. Employers should help employees to achieve a good work&ndash;life balance by encouraging them to take breaks and holidays and discouraging them from working at home in the evenings and at weekends. Employees should also feel that they can talk to their managers about any problems they might have, and employers should be supportive.\r\n\r\nGet some exercise\r\nOf course, we also need to look after our own mental health. Most people know that exercise is good for your body, but did you also know how good it is for your mental health? Regular exercise can really help you deal with anxiety and depression. Spending time in nature can also make people more relaxed and reduce stress. So why not get your exercise by going for a walk in a park or the countryside?\r\n\r\nEat well\r\nYour diet can also change your mood. If you eat crisps, cake, chocolate, etc., your blood sugar will rise and fall, making you feel cross and tired. Make sure you are eating enough vegetables and fruit or you may be missing some nutrients you need to feel good. It&rsquo;s also important to drink enough water &ndash; being thirsty can make it difficult to think clearly.\r\n\r\nSpend time with family and friends\r\nEveryone needs some time alone, but it&rsquo;s also good for us to spend time with other people. If you feel lonely, try volunteering. It&rsquo;s a good way of meeting new people, and you will feel good for helping others. One survey showed that 48 per cent of people who volunteered for more than two years said they felt less depressed as a result. If you do have close friends and family, try talking to them more about how you feel and asking them to support you. Every time someone speaks to someone else about mental illness, it helps to reduce the stigma.\r\n\r\nWhat to do on World Mental Health Day\r\nWorld Mental Health Day encourages us to be more aware of both our own mental health and other people&rsquo;s. As well as looking after yourself, think about how you could support other people. For example, you could find out more about common issues such as anxiety and depression, so you will understand friends&rsquo; and colleagues&rsquo; problems better. You could also encourage your workplace to start a wellness programme that would benefit everyone &ndash; they might offer free exercise classes or encourage employees to take walks at lunchtime. Companies with wellness programmes have found employees take 28 per cent less time off for sickness.\r\n\r\nAnything you do on WMH Day, even just talking to people about it, will help us all to understand and support people better.', '../../../uploads/65bf81ff6aaf7_e978820e1133d0d4.jpg', 9, '2024-02-04 12:24:31', 'accepted', 31, 15),
(24, 'World Mental Health Day', 'Around the world, one in four people will have some kind of mental illness during their lifetime. Around 450 million people are living with a mental health problem right now, making it one of the biggest health issues in the world. Yet people rarely talk about any mental health problems they have because there is still a lot of stigma.\r\n\r\nWorld Mental Health Day\r\nWorld Mental Health (WMH) Day was first celebrated in 1992. It was created to raise awareness of just how common mental health issues are, fight against stigma and campaign for better conditions and treatment for people who have a mental health problem. The number of people and organisations involved in celebrating WMH Day has grown and grown, and now many countries, such as Australia, actually have a Mental Health Week, which includes WMH Day on 10 October. Each year there is a different theme. For example, in 2017 the theme was mental health in the workplace.\r\n\r\nMental health in the workplace\r\nEmployers should create an environment which supports good mental health. This also helps to reduce the number of days employees take off work. Employers should help employees to achieve a good work&ndash;life balance by encouraging them to take breaks and holidays and discouraging them from working at home in the evenings and at weekends. Employees should also feel that they can talk to their managers about any problems they might have, and employers should be supportive.\r\n\r\nGet some exercise\r\nOf course, we also need to look after our own mental health. Most people know that exercise is good for your body, but did you also know how good it is for your mental health? Regular exercise can really help you deal with anxiety and depression. Spending time in nature can also make people more relaxed and reduce stress. So why not get your exercise by going for a walk in a park or the countryside?\r\n\r\nEat well\r\nYour diet can also change your mood. If you eat crisps, cake, chocolate, etc., your blood sugar will rise and fall, making you feel cross and tired. Make sure you are eating enough vegetables and fruit or you may be missing some nutrients you need to feel good. It&rsquo;s also important to drink enough water &ndash; being thirsty can make it difficult to think clearly.\r\n\r\nSpend time with family and friends\r\nEveryone needs some time alone, but it&rsquo;s also good for us to spend time with other people. If you feel lonely, try volunteering. It&rsquo;s a good way of meeting new people, and you will feel good for helping others. One survey showed that 48 per cent of people who volunteered for more than two years said they felt less depressed as a result. If you do have close friends and family, try talking to them more about how you feel and asking them to support you. Every time someone speaks to someone else about mental illness, it helps to reduce the stigma.\r\n\r\nWhat to do on World Mental Health Day\r\nWorld Mental Health Day encourages us to be more aware of both our own mental health and other people&rsquo;s. As well as looking after yourself, think about how you could support other people. For example, you could find out more about common issues such as anxiety and depression, so you will understand friends&rsquo; and colleagues&rsquo; problems better. You could also encourage your workplace to start a wellness programme that would benefit everyone &ndash; they might offer free exercise classes or encourage employees to take walks at lunchtime. Companies with wellness programmes have found employees take 28 per cent less time off for sickness.\r\n\r\nAnything you do on WMH Day, even just talking to people about it, will help us all to understand and support people better.', '../../../uploads/65bf8244ea306_21c5e47baac199d0.jpg', 0, '2024-02-04 12:25:40', 'rejected', 0, 15),
(25, 'Test', 'Around the world, one in four people will have some kind of mental illness during their lifetime. Around 450 million people are living with a mental health problem right now, making it one of the biggest health issues in the world. Yet people rarely talk about any mental health problems they have because there is still a lot of stigma.\r\n\r\nWorld Mental Health Day\r\nWorld Mental Health (WMH) Day was first celebrated in 1992. It was created to raise awareness of just how common mental health issues are, fight against stigma and campaign for better conditions and treatment for people who have a mental health problem. The number of people and organisations involved in celebrating WMH Day has grown and grown, and now many countries, such as Australia, actually have a Mental Health Week, which includes WMH Day on 10 October. Each year there is a different theme. For example, in 2017 the theme was mental health in the workplace.\r\n\r\nMental health in the workplace\r\nEmployers should create an environment which supports good mental health. This also helps to reduce the number of days employees take off work. Employers should help employees to achieve a good work&ndash;life balance by encouraging them to take breaks and holidays and discouraging them from working at home in the evenings and at weekends. Employees should also feel that they can talk to their managers about any problems they might have, and employers should be supportive.\r\n\r\nGet some exercise\r\nOf course, we also need to look after our own mental health. Most people know that exercise is good for your body, but did you also know how good it is for your mental health? Regular exercise can really help you deal with anxiety and depression. Spending time in nature can also make people more relaxed and reduce stress. So why not get your exercise by going for a walk in a park or the countryside?\r\n\r\nEat well\r\nYour diet can also change your mood. If you eat crisps, cake, chocolate, etc., your blood sugar will rise and fall, making you feel cross and tired. Make sure you are eating enough vegetables and fruit or you may be missing some nutrients you need to feel good. It&rsquo;s also important to drink enough water &ndash; being thirsty can make it difficult to think clearly.\r\n\r\nSpend time with family and friends\r\nEveryone needs some time alone, but it&rsquo;s also good for us to spend time with other people. If you feel lonely, try volunteering. It&rsquo;s a good way of meeting new people, and you will feel good for helping others. One survey showed that 48 per cent of people who volunteered for more than two years said they felt less depressed as a result. If you do have close friends and family, try talking to them more about how you feel and asking them to support you. Every time someone speaks to someone else about mental illness, it helps to reduce the stigma.\r\n\r\nWhat to do on World Mental Health Day\r\nWorld Mental Health Day encourages us to be more aware of both our own mental health and other people&rsquo;s. As well as looking after yourself, think about how you could support other people. For example, you could find out more about common issues such as anxiety and depression, so you will understand friends&rsquo; and colleagues&rsquo; problems better. You could also encourage your workplace to start a wellness programme that would benefit everyone &ndash; they might offer free exercise classes or encourage employees to take walks at lunchtime. Companies with wellness programmes have found employees take 28 per cent less time off for sickness.\r\n\r\nAnything you do on WMH Day, even just talking to people about it, will help us all to understand and support people better.', '../../../uploads/65bf84d73a54d_cedea7b0e3e22b00.jpg', 2, '2024-02-04 12:36:39', 'accepted', 0, 15),
(26, 'Lunar New Year', 'The lunar calendar is based on the cycles of the moon, so the date of Lunar New Year is different each year. However, it is usually in January or February. As well as being celebrated in China, Lunar New Year is also an important festival in many other places, including Vietnam, Singapore and Korea.\r\n\r\nEach year is named after one of 12 animals. A traditional story explains how this came to be. One day, the Emperor decided to have a race for all the animals in the country. Unfortunately, only 12 animals actually managed to get to the race. The Emperor rewarded them by naming the 12 years of the lunar calendar after them. The first to finish was the rat, so the first year is named after him. The other eleven, in order, were the ox, tiger, rabbit, dragon, snake, horse, goat, monkey, rooster, dog and pig.\r\n\r\nA family celebration\r\nDifferent places celebrate in slightly different ways, but Lunar New Year is very much a family celebration wherever it takes place. The younger generation greet their parents and grandparents with good wishes for the year ahead and show their respect for the older generation. In Korea this is called sebae. The young people kneel on the ground and bow deeply.\r\n\r\nOlder members of the family give younger ones cash presents, traditionally in small packets. Red packets are used in China and Vietnam, as red is a lucky colour. Nowadays, many people send money electronically too. It is lucky to send money in certain amounts, for example using the number eight, which in Chinese sounds like the word &lsquo;prosper&rsquo;.\r\n\r\nTraditional food\r\nTraditional foods which are eaten at Lunar New Year often have another meaning. For example, in China, many people eat fish dishes because the Chinese word for &lsquo;fish&rsquo; sounds similar to &lsquo;surplus&rsquo;, meaning you will have plenty.\r\n\r\nIn Korea, people serve a special soup. Thin pieces of rice cake are boiled in a clear soup with slices of beef and vegetables. The rice cake pieces are round and may represent coins and money. It is said that eating this soup at New Year makes you one year older. People joke that if you have two bowls of soup, you&rsquo;ll be two years older!\r\n\r\nA traditional Vietnamese food is square rice cake, wrapped in leaves. It&rsquo;s stuffed with pork and vegetables and takes many hours to prepare, so many people buy the cake instead of making it.\r\n\r\nOther traditions\r\nThere are many other Lunar New Year traditions. For example, in Vietnam, people believe that the first person to enter their home in the New Year will decide their fortune for the year ahead. They are careful to invite someone who is kind, well behaved and successful.\r\n\r\nIn Korea, families often play traditional board games together, such as yunnori. In this game, teams take it in turn to throw four specially shaped sticks into the air. They move around the board depending on how the sticks fall.\r\n\r\nIn China, many people have firecrackers, which burn and make a loud bang. They watch street performances, where acrobatic dancers dress up as a lion or a dragon. They dance, accompanied by music and drums.\r\n\r\nPeople celebrate Lunar New Year in many different ways, but all the celebrations are about wishing everyone the very best for the year ahead. What do you wish for next year?', '../../../uploads/65bfa352f274c_167e57159da27e86.jpg', 0, '2024-02-04 14:46:42', 'pending', 0, 16),
(27, 'You and your data', 'As the internet and digital technology become a bigger part of our lives, more of our data becomes publicly accessible, leading to questions about privacy. So, how do we interact with the growing digital world without compromising the security of our information and our right to privacy?\r\n\r\nImagine that you want to learn a new language. You search &amp;#039;Is German a difficult language?&amp;#039; on your phone. You click on a link and read an article with advice for learning German. There&amp;#039;s a search function to find German courses, so you enter your city name. It asks you to activate location services to find courses near you. You click &amp;#039;accept&amp;#039;. You then message a German friend to ask for her advice. When you look her up on social media, an advertisement for a book and an app called German for Beginners instantly pops up. Later the same day, while you&amp;#039;re sending an email, you see an advert offering you a discount at a local language school. How did they know? The simple answer is online data. At all stages of your search, your devices, websites and applications were collecting data on your preferences and tracking your behaviour online. &amp;#039;They&amp;#039; have been following you.\r\n\r\nWho uses our data and why?\r\nIn the past, it was easy for people to keep track of their personal information. Like their possessions, people&amp;#039;s information existed mostly in physical form: on paper, kept in a folder, locked in a cupboard or an office. Today, our personal information can be collected and stored online, and it&amp;#039;s accessible to more people than ever before. Many of us share our physical location, our travel plans, our political opinions, our shopping interests and our family photos online &ndash; as key services like ordering a takeaway meal, booking a plane, taking part in a poll or buying new clothes now take place online and require us to give out our data. \r\n\r\nEvery search you make, service you use, message you send and item you buy is part of your &amp;#039;digital footprint&amp;#039;. Companies and online platforms use this &amp;#039;footprint&amp;#039; to track exactly what we are doing, from what links we click on to how much time we spend on a website. Based on your online activity, they can guess what you are interested in and what things you might want to buy. Knowing so much about you gives online platforms and companies a lot of power and a lot of money. By selling your data or providing targeted content, companies can turn your online activity into profit. This is the foundation of the growing industry of digital marketing.\r\n\r\nCan you protect your data?                     \r\nYes &hellip; and no!\r\n\r\nSome of the time our personal data is shared online with our consent. We post our birthday, our photographs and even our opinions online on social media. We know that this information is publicly accessible. However, our data often travels further than we realise, and can be used in ways that we did not intend. Certain news scandals about data breaches, where personal data has been lost, leaked or shared without consent, have recently made people much more aware of the potential dangers of sharing information online.\r\n\r\nSo, can we do anything to protect our data? Or should we just accept that in fact nothing is &amp;#039;free&amp;#039; and sharing our data is the price we have to pay for using many online services? As people are increasingly aware of and worried about data protection, governments and organisations are taking a more active role in protecting privacy. For example, the European Union passed the General Data Protection Law, which regulates how personal information is collected online. However, there is still much work to be done.\r\n\r\nAs internet users, we should all have a say in how our data is used. It is important that we pay more attention to how data is acquired, where it is stored and how it is used. As the ways in which we use the internet continue to grow and change, we will need to stay informed and keep demanding new laws and regulations, and better information about how to protect ourselves. Safer Internet Day is an ideal time to find out more about this topic.', '../../../uploads/65bfa36e2b714_3c3c6624159029cd.jpg', 0, '2024-02-04 14:47:10', 'pending', 0, 16),
(28, 'World Mental Health Day', 'Around the world, one in four people will have some kind of mental illness during their lifetime. Around 450 million people are living with a mental health problem right now, making it one of the biggest health issues in the world. Yet people rarely talk about any mental health problems they have because there is still a lot of stigma.\r\n\r\nWorld Mental Health Day\r\nWorld Mental Health (WMH) Day was first celebrated in 1992. It was created to raise awareness of just how common mental health issues are, fight against stigma and campaign for better conditions and treatment for people who have a mental health problem. The number of people and organisations involved in celebrating WMH Day has grown and grown, and now many countries, such as Australia, actually have a Mental Health Week, which includes WMH Day on 10 October. Each year there is a different theme. For example, in 2017 the theme was mental health in the workplace.\r\n\r\nMental health in the workplace\r\nEmployers should create an environment which supports good mental health. This also helps to reduce the number of days employees take off work. Employers should help employees to achieve a good work&ndash;life balance by encouraging them to take breaks and holidays and discouraging them from working at home in the evenings and at weekends. Employees should also feel that they can talk to their managers about any problems they might have, and employers should be supportive.\r\n\r\nGet some exercise\r\nOf course, we also need to look after our own mental health. Most people know that exercise is good for your body, but did you also know how good it is for your mental health? Regular exercise can really help you deal with anxiety and depression. Spending time in nature can also make people more relaxed and reduce stress. So why not get your exercise by going for a walk in a park or the countryside?\r\n\r\nEat well\r\nYour diet can also change your mood. If you eat crisps, cake, chocolate, etc., your blood sugar will rise and fall, making you feel cross and tired. Make sure you are eating enough vegetables and fruit or you may be missing some nutrients you need to feel good. It&rsquo;s also important to drink enough water &ndash; being thirsty can make it difficult to think clearly.\r\n\r\nSpend time with family and friends\r\nEveryone needs some time alone, but it&rsquo;s also good for us to spend time with other people. If you feel lonely, try volunteering. It&rsquo;s a good way of meeting new people, and you will feel good for helping others. One survey showed that 48 per cent of people who volunteered for more than two years said they felt less depressed as a result. If you do have close friends and family, try talking to them more about how you feel and asking them to support you. Every time someone speaks to someone else about mental illness, it helps to reduce the stigma.\r\n\r\nWhat to do on World Mental Health Day\r\nWorld Mental Health Day encourages us to be more aware of both our own mental health and other people&rsquo;s. As well as looking after yourself, think about how you could support other people. For example, you could find out more about common issues such as anxiety and depression, so you will understand friends&rsquo; and colleagues&rsquo; problems better. You could also encourage your workplace to start a wellness programme that would benefit everyone &ndash; they might offer free exercise classes or encourage employees to take walks at lunchtime. Companies with wellness programmes have found employees take 28 per cent less time off for sickness.\r\n\r\nAnything you do on WMH Day, even just talking to people about it, will help us all to understand and support people better.', '../../../uploads/65bfa3b2ae845_b21a5de40bdb32f8.jpg', 1, '2024-02-04 14:48:18', 'accepted', 0, 15);

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
(0, 'All'),
(31, 'Data'),
(30, 'Sport');

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
(10, 'AyaNassef123', 'admin', '123456', 'admin', 'inactive'),
(11, 'aaaaaaaaaaaaa', 'aaaaaaaaaaa', '$2y$10$/rooHGNUYVv1rI.2viLbdOFgW/O//USwKT3xmxFGb8.M2zW0KSdH.', 'admin', 'active'),
(12, 'ABC123', 'ABC', '123456', 'writer', 'active'),
(13, 'ABC1234', 'ABC1', '$2y$10$I10.TLMzfJvQrKwy92wyj.qvl6cv.oqqqYEd2ID6xpKuHHlkQxyuC', 'admin', 'active'),
(14, 'admin', 'admin', '$2y$10$7eUSdviU5TJ5B4Bur3uRMOpwZBUYV0KCFOp5DksoN/ItAbUYC8rRe', 'admin', 'active'),
(15, 'writer', 'writer', '$2y$10$kOqwOKv8J4FtNup8e4mYcuESySnZkE1lWhQcbBH30vRypWgcJ.KnK', 'admin', 'inactive'),
(16, 'writer2', 'writer2', '$2y$10$p5gXJkGDbAsYOVkHa2TjXusdQbV7UsDdSWtID.t4miwO.jWmtMFCm', 'writer', 'active'),
(17, 'admin2', 'admin2', '$2y$10$Dk7GJ4Ua.Wi6hjh5bycfOu1cqW6zc2vnNawDbkvLriN0o.Ht4uLp2', 'admin', 'active');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
