-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 01, 2021 at 01:12 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `blogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `mycontent` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `mycontent`) VALUES
(1, 'The Girl Hannah', 'Hannah was a very lazy girl who did as she said, \"the minimal\" because she thought herself a \"minimalist\".'),
(2, 'If I was a Keyboard', 'lkhalkhsfklhklm aj asfjj. ajlkjh f alkfhl as. ahslfkh. asklhf hdlkfhioehflbcovebo sodhfoihe'),
(3, 'Total Darkness', '\"It was a dark night of the soul. I went far, I went deep and I found myself at the start of it all once more. Those that lost to the abysse find themselves in the nether of nothingness. Wanting but not having. All hope lost...\" said Mary to her little lamb.'),
(4, 'Spiders', 'Spiders, spiders, everywhere and not a bit of sun. running, crawling, chasing the wind their silver threads a play.\r\nLots of wiggles fun as screaming children run.'),
(5, 'I Told You Bobby', 'Hank said, \"I told you Bobby! you cannot hit a man there... it is just not right.\r\nBobby, \"but DAD! I learned it in defence  class...\" Hank, \"IT WAS A WOMAN\"S DEFENCE CLASS BOBBY\"!'),
(6, 'I loved Apples', 'Apples are red, round and raw. The taste sweet, succulent, and stylish. but my ex loves them too... that bi!@# ruined it for me. '),
(12, 'The days before and after social media', 'The days before our social media we lived in blissful ignorance of our neighbours thoughts. A little gossip here and there but nothing to harm a soul. But then that fateful day arrive when every thought of every person was but a buttons click away. The land in chaos delved as social  bullies abound. Everyone so stressed to live by the new and growing social rules that all most follow.'),
(13, 'Horror', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ullam quos nostrum doloremque nihil obcaecati labore voluptas, similique officia qui iusto a deserunt fugiat error recusandae autem molestiae veritatis quo?'),
(18, 'Tis a dark Summer Morning', 'The smell was horrible. It nearly made me vomit. I woke up slowly trying to process this smell... It was my mouth. I forgot to brush it the night before.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
