-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 09:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `once_in`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `floral`
--

CREATE TABLE `floral` (
  `id` int(11) NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floral`
--

INSERT INTO `floral` (`id`, `image_link`, `text`, `package`) VALUES
(1, 'http://2.bp.blogspot.com/-j4D1cA61qYc/T_XgQWO2HbI/AAAAAAAALkE/jx2gvccIzRA/s1600/wedding-bouquet-17.jpg', 'Cool FLower', 'standard'),
(2, 'http://2.bp.blogspot.com/-j4D1cA61qYc/T_XgQWO2HbI/AAAAAAAALkE/jx2gvccIzRA/s1600/wedding-bouquet-17.jpg', 'Cool FLower', 'standard'),
(3, 'http://2.bp.blogspot.com/-j4D1cA61qYc/T_XgQWO2HbI/AAAAAAAALkE/jx2gvccIzRA/s1600/wedding-bouquet-17.jpg', 'Cool FLower', 'standard');

-- --------------------------------------------------------

--
-- Table structure for table `gown`
--

CREATE TABLE `gown` (
  `id` int(11) NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gown`
--

INSERT INTO `gown` (`id`, `image_link`, `text`, `package`) VALUES
(2, 'http://4.bp.blogspot.com/-VF8Hd58151s/T2NmOkUArDI/AAAAAAAADpE/SxWUk1lkBfM/s1600/Long-bright-pink-bridesmaid-dress-3.jpg', 'Gorgeous gal', 'standard'),
(3, 'http://1.bp.blogspot.com/-wOFY3gqdm1I/UcpmzZ1LMbI/AAAAAAAAAmY/k-Z9d-qBHBI/s1600/Allure%2BMermaid%2BWedding%2BDress%2Bwith%2B%2B3%2B4%2BLace%2BSleeves%2BStyle%2B2666.jpg', 'Pretty gal', 'standard'),
(4, 'https://www.jlmcouture.com/sites/default/files/styles/open_graph/public/style/lz/3862-17267/lazaro-bridal-fall-2018-style-3862-rita_0.jpg?itok=Bofad00k', 'Pretty gal', 'standard'),
(5, 'https://www.embeephotography.co.uk/wp-content/uploads/2017/03/Ashfield-House-Wedding-Venue-Photography-Revamped-Refurbishment-Wigan-Photographer_0008.jpg', 'hi', 'premium'),
(6, 'https://www.embeephotography.co.uk/wp-content/uploads/2017/03/Ashfield-House-Wedding-Venue-Photography-Revamped-Refurbishment-Wigan-Photographer_0008.jpg', 'hi', 'premium'),
(7, 'https://www.quotemykaam.com/blog/wp-content/uploads/2018/09/first-night-room-decoration-with-rose-1.jpg', 'Boo', 'premium'),
(8, 'https://www.quotemykaam.com/blog/wp-content/uploads/2018/09/first-night-room-decoration-with-rose-1.jpg', 'Boo', 'premium');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `telephone`, `message`) VALUES
(1, 'fdfd', 'fdsafd@gmail.com', '2334353', 'Hello who are you?'),
(2, 'fdfd', 'fdsafd@gmail.com', '2334353', 'Hello who are you?'),
(3, 'fdfd', 'fdsafd@gmail.com', '2334353', 'Hello who are you?'),
(4, 'fdfd', 'fdsafd@gmail.com', '2334353', 'Hello who are you?'),
(5, 'tre', 'trtr@g.b', 'trtr', 'trtr'),
(6, 'rewr', 'fdsaf2@fdfd', 'fdfd', 'fdfdfdfdfsdav'),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `image_link`, `text`, `package`) VALUES
(1, 'https://www.embeephotography.co.uk/wp-content/uploads/2017/03/Ashfield-House-Wedding-Venue-Photography-Revamped-Refurbishment-Wigan-Photographer_0008.jpg', 'hi', 'premium'),
(2, 'https://www.embeephotography.co.uk/wp-content/uploads/2017/03/Ashfield-House-Wedding-Venue-Photography-Revamped-Refurbishment-Wigan-Photographer_0008.jpg', 'hi', 'premium'),
(3, 'https://www.embeephotography.co.uk/wp-content/uploads/2017/03/Ashfield-House-Wedding-Venue-Photography-Revamped-Refurbishment-Wigan-Photographer_0008.jpg', 'hi', 'premium'),
(4, '', '', 'premium');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` text NOT NULL,
  `tag` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `text`, `tag`, `image`, `title`) VALUES
(17, '2020-03-09 05:21:37', 'Black Widow is an upcoming American superhero film based on the Marvel Comics character of the same name. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is intended to be the twenty-fourth film in the Marvel Cinematic Universe (MCU). The film was directed by Cate Shortland and written by Eric Pearson from a story by Jac Schaeffer and Ned Benson, and stars Scarlett Johansson as Natasha Romanoff / Black Widow alongside Florence Pugh, David Harbour, O-T Fagbenle, William Hurt, Ray Winstone, and Rachel Weisz. Set after Captain America: Civil War (2016), the film sees Romanoff on the run and forced to confront her past.\r\n\r\nDevelopment of a Black Widow film began in April 2004 by Lionsgate, with David Hayter attached to write and direct. The project did not move forward and the film rights to the character reverted to Marvel Studios by June 2006. Johansson was cast in the role for several MCU films beginning with Iron Man 2 (2010). Marvel and Johansson expressed interest in a solo film several times over the following years, before Schaeffer and Shortland were hired in 2018. Benson joined and further casting took place in early 2019. Filming took place from May to October, in Norway, Budapest, Morocco, Pinewood Studios in England, and in Atlanta and Macon, Georgia.\r\n\r\nBlack Widow is scheduled to be released in the United States on May 1, 2020. ', '100', 'error.JPG', 'Black Widow'),
(18, '2020-03-09 05:27:07', 'Black Widow is an upcoming American superhero film based on the Marvel Comics character of the same name. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is intended to be the twenty-fourth film in the Marvel Cinematic Universe (MCU). The film was directed by Cate Shortland and written by Eric Pearson from a story by Jac Schaeffer and Ned Benson, and stars Scarlett Johansson as Natasha Romanoff / Black Widow alongside Florence Pugh, David Harbour, O-T Fagbenle, William Hurt, Ray Winstone, and Rachel Weisz. Set after Captain America: Civil War (2016), the film sees Romanoff on the run and forced to confront her past.\r\n\r\nDevelopment of a Black Widow film began in April 2004 by Lionsgate, with David Hayter attached to write and direct. The project did not move forward and the film rights to the character reverted to Marvel Studios by June 2006. Johansson was cast in the role for several MCU films beginning with Iron Man 2 (2010). Marvel and Johansson expressed interest in a solo film several times over the following years, before Schaeffer and Shortland were hired in 2018. Benson joined and further casting took place in early 2019. Filming took place from May to October, in Norway, Budapest, Morocco, Pinewood Studios in England, and in Atlanta and Macon, Georgia.\r\n\r\nBlack Widow is scheduled to be released in the United States on May 1, 2020. ', '100', 'error.JPG', 'Black Widow'),
(19, '2020-03-09 05:28:03', 'Black Widow is an upcoming American superhero film based on the Marvel Comics character of the same name. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is intended to be the twenty-fourth film in the Marvel Cinematic Universe (MCU). The film was directed by Cate Shortland and written by Eric Pearson from a story by Jac Schaeffer and Ned Benson, and stars Scarlett Johansson as Natasha Romanoff / Black Widow alongside Florence Pugh, David Harbour, O-T Fagbenle, William Hurt, Ray Winstone, and Rachel Weisz. Set after Captain America: Civil War (2016), the film sees Romanoff on the run and forced to confront her past.\r\n\r\nDevelopment of a Black Widow film began in April 2004 by Lionsgate, with David Hayter attached to write and direct. The project did not move forward and the film rights to the character reverted to Marvel Studios by June 2006. Johansson was cast in the role for several MCU films beginning with Iron Man 2 (2010). Marvel and Johansson expressed interest in a solo film several times over the following years, before Schaeffer and Shortland were hired in 2018. Benson joined and further casting took place in early 2019. Filming took place from May to October, in Norway, Budapest, Morocco, Pinewood Studios in England, and in Atlanta and Macon, Georgia.\r\n\r\nBlack Widow is scheduled to be released in the United States on May 1, 2020. ', '100', 'error.JPG', 'Black Widow'),
(20, '2020-03-09 05:32:24', 'Nancy is a fictional character in the novel Oliver Twist and its several adaptations for theatre, television and films. She is a member of Fagin\'s gang and the lover, and eventual victim, of Bill Sikes.\r\n\r\nAs well as Nancy being a thief, a common misapprehension is that she is a prostitute, in the modern sense of the word. At no point is this stated in the novel; rather it stems from Dickens describing her as such in his preface to the 1841 edition (\"the boys are pickpockets, and the girl is a prostitute\"). However, it has been convincingly argued that he is invoking the term\'s then-synonymous usage referring to a woman living out of wedlock or otherwise on the margins of \"respectable\" society.[1]\r\n\r\nDespite of her criminality, Nancy is portrayed as a sympathetic figure, whose concern for Oliver overcomes her loyalty to Sikes and Fagin. By the climax of the novel, she is emaciated with sickness and worry, and filled with guilt about the life she is leading. ', '100', 'shi.JPG', 'Above Black Widow');

-- --------------------------------------------------------

--
-- Table structure for table `premium`
--

CREATE TABLE `premium` (
  `id` int(11) NOT NULL,
  `gown` varchar(255) NOT NULL,
  `suit` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `floral` varchar(255) NOT NULL,
  `guest` varchar(255) NOT NULL,
  `music` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `image_link`, `text`, `package`) VALUES
(1, 'https://www.embeephotography.co.uk/wp-content/uploads/2017/03/Ashfield-House-Wedding-Venue-Photography-Revamped-Refurbishment-Wigan-Photographer_0008.jpg', 'Beach', 'standard'),
(2, 'https://www.embeephotography.co.uk/wp-content/uploads/2017/03/Ashfield-House-Wedding-Venue-Photography-Revamped-Refurbishment-Wigan-Photographer_0008.jpg', 'Beach', 'standard'),
(3, 'https://www.embeephotography.co.uk/wp-content/uploads/2017/03/Ashfield-House-Wedding-Venue-Photography-Revamped-Refurbishment-Wigan-Photographer_0008.jpg', 'Beach', 'standard'),
(4, 'http://4.bp.blogspot.com/_HzAThb2RgMc/TSjpKVvw-eI/AAAAAAAADVc/0D88lkBGOrU/s1600/1.jpg', 'fsafds', 'premium');

-- --------------------------------------------------------

--
-- Table structure for table `standard`
--

CREATE TABLE `standard` (
  `id` int(11) NOT NULL,
  `gown` varchar(255) NOT NULL,
  `suit` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `floral` varchar(255) NOT NULL,
  `guest` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `standard`
--

INSERT INTO `standard` (`id`, `gown`, `suit`, `room`, `floral`, `guest`, `date`, `name`, `phone`) VALUES
(43, '3', '2', '2', '2', '50', '1970-01-01', 'dsafdsaf', '2q44534543543');

-- --------------------------------------------------------

--
-- Table structure for table `suit`
--

CREATE TABLE `suit` (
  `id` int(11) NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suit`
--

INSERT INTO `suit` (`id`, `image_link`, `text`, `package`) VALUES
(1, 'https://www.tom-murphy.ie/wp-content/uploads/2017/01/WCC17_TITEL_079_ANSATZ.jpg', 'Nigga', 'standard'),
(2, 'https://www.tom-murphy.ie/wp-content/uploads/2017/01/WCC17_TITEL_079_ANSATZ.jpg', 'Nigga', 'standard'),
(3, 'https://www.tom-murphy.ie/wp-content/uploads/2017/01/WCC17_TITEL_079_ANSATZ.jpg', 'Nigga', 'standard'),
(4, 'http://4.bp.blogspot.com/_HzAThb2RgMc/TSjpKVvw-eI/AAAAAAAADVc/0D88lkBGOrU/s1600/1.jpg', 'Hot gal', 'standard');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floral`
--
ALTER TABLE `floral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gown`
--
ALTER TABLE `gown`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premium`
--
ALTER TABLE `premium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standard`
--
ALTER TABLE `standard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suit`
--
ALTER TABLE `suit`
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
-- AUTO_INCREMENT for table `floral`
--
ALTER TABLE `floral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gown`
--
ALTER TABLE `gown`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `premium`
--
ALTER TABLE `premium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `standard`
--
ALTER TABLE `standard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `suit`
--
ALTER TABLE `suit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
