-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 06:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tfc`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `cat_id` int(101) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`cat_id`, `cat_name`, `cat_img`) VALUES
(8, 'chicken', '9f09c51e250b5bd59811download.jpg'),
(9, 'Pizza', '2af7b4a94eef8ae4063ecatagory1.jpg'),
(10, 'burger', 'cec60c7a0eb950aa634acatagory2.jpg'),
(11, 'biriyani', 'c3250d155a5132ea08d6catagory4.jpg'),
(12, 'potato dish', '184520025951e9bf3dfc1504289038-delish-cheesy-garlic-butter-potatoes-still003.jpg'),
(13, 'sandwich', '3d51cb4191ebe98819a6paneer-bhurji-sandwich.jpg'),
(14, 'desert', 'f5a0e930ab440cb33c7bdessert-main-image-molten-cake-0fbd4f2.jpg'),
(15, 'Fish', 'c7c64b0960f96bc24fac83917422-fish-dish-roasted-dorada-and-vegetables.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `item_info`
--

CREATE TABLE `item_info` (
  `item_id` int(20) NOT NULL,
  `item_name` varchar(150) NOT NULL,
  `item_cat_id` int(3) NOT NULL,
  `item_img` varchar(200) NOT NULL,
  `item_price` int(5) NOT NULL,
  `item_discount` int(4) NOT NULL,
  `item_rating` float NOT NULL,
  `item_t_review` int(10) NOT NULL,
  `item_info_text` varchar(1500) NOT NULL,
  `chef_name` varchar(400) NOT NULL,
  `ingredients` varchar(500) NOT NULL,
  `upload_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_info`
--

INSERT INTO `item_info` (`item_id`, `item_name`, `item_cat_id`, `item_img`, `item_price`, `item_discount`, `item_rating`, `item_t_review`, `item_info_text`, `chef_name`, `ingredients`, `upload_date`) VALUES
(8, 'Creamy burger', 2, 'b4b2bf15f46a4682a23acreamy burger.jpg', 120, 10, 5, 0, 'creamy burger', 'Shubrato Debnath', '------------', '2021-10-24'),
(9, 'Bombay  biriyani', 3, '0ed2d3d3471fbdcbb5a9c779cbb0c534ee1dab89a350e833fca0 (1).jpeg', 250, 5, 5, 0, 'What makes Bombay biryani special is the use of potatoes in it.Be it vegetarian or non-vegetarian biryani, potato is a must. The preparation uses a layered method, where half-cooked basmati rice and cooked meat are put on dum-style.', 'Shubrato Debnath', '', '2021-10-24'),
(10, 'Veggie Burgers', 10, 'f055bef950f96ecfee6cmaxresdefault.jpg', 95, 2, 5, 0, '', '', '', '2021-10-26'),
(11, 'Aloo posto', 12, '153f6d6aa5de2b0a4d01Aloo-Posto-1-3.jpg', 60, 8, 5, 0, 'a special dish which is most favourite by all of Bengali People. ', 'Tonushree', 'aloo', '2021-10-27'),
(12, 'Aloo gosht', 12, 'f3da8057d1722fb821a2download.jpg', 150, 15, 5, 0, 'Aloo gosht is a meat curry, originating from the Indian subcontinent, and popular in Pakistani, Bangladeshi and North Indian cuisine. It consists of potatoes (aloo) cooked with meat (gosht), usually lamb or mutton or beef, in a stew-like shorba gravy.', 'Tonushree', '', '2021-10-27'),
(13, 'Paneer Bhurji Sandwich', 13, '2a3f0e4efc4dc698a3d8paneer-bhurji-sandwich.jpg', 120, 6, 4, 3, '', 'Tonushree Mukharji', '', '2021-10-27'),
(14, 'Egg Sandwich', 13, 'a78af98ba4ea76008921EasterEggSandwichSmall2-720x540.jpg', 80, 2, 4, 1, 'An egg sandwich is a sandwich with some kind of cooked egg filling. Fried eggs, scrambled eggs, sliced boiled eggs and egg salad are popular options. In the fourth case, it may be called an egg salad sandwich.', 'Tonushree Mukharji', '', '2021-10-27'),
(15, 'Crispy Fried chicken burger', 10, '1752357d2dd1d71f3bcddownload.jpg', 120, 11, 5, 1, 'This burger consists of a super crispy & flakey chicken patty made out of the special blend of Knorr Coating Mix top with Hellmann&#39;s Classic Mayonnaise', 'Ali Akber', '', '2021-10-27'),
(16, 'Thai chicken toast', 8, '79f56274438740cff821maxresdefault.jpg', 80, 10, 3, 3, '', 'Ali Akber', '', '2021-10-27'),
(17, 'Grilled Chicken Sandwich', 10, '076d7197a30030849166download.jpg', 285, 10, 5, 0, '', 'Tonushree Mukharji, Shubrato Debnath', '', '2021-10-27'),
(18, 'Neapolitan Pizza.', 9, 'dc612b80ceb097eecc78authentic-neapolitan-margherita-pizza-.jpg', 400, 20, 4, 0, 'Neapolitan pizza (Italian: pizza napoletana) also known as Naples-style pizza, is a style of pizza made with tomatoes and mozzarella cheese.', 'Arifa Anwer', '------------', '2021-11-02'),
(21, 'Sicilian Pizza', 9, '1316ec409ab0c60131afmerlin_147457287_3700e22.jpg', 350, 6, 3.5, 0, 'Sicilian Pizza', 'Arifa Anwer', '------------', '2021-11-02'),
(22, 'Apple pie', 14, '402fa78200affee4e8d5food7.jpg', 240, 22, 4.5, 0, '', '', '', '2021-11-02'),
(23, 'Rosho Golla', 14, 'f650c31f130a8c957c6cfood12.jpg', 250, 2, 5, 0, '------------ ONE OF FAMOUS FOOD ITEM --------------', 'Rony Mistanno Vandar', 'misty', '2021-11-02'),
(24, 'cheese pizza', 10, '9b85249ea3a0d47fbdab83917422-fish-dish-roasted-dorada-and-vegetables.jpg', 200, 10, 15, 0, '', 'Tonushree Mukharji', 'misty', '2021-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` char(5) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(62) NOT NULL,
  `cnf_pass` varchar(62) NOT NULL,
  `image` varchar(200) NOT NULL,
  `user_token` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `fname`, `lname`, `gender`, `email`, `password`, `cnf_pass`, `image`, `user_token`, `timestamp`) VALUES
(8, 'Shubrato', 'Debnath', 'male', 'shubratodn44985@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '11111', '', 'd66b364c2a82989fdaa10ea26cc17d24', '2021-10-18 17:16:42'),
(9, 'Admin', 'Admin', 'male', 'admin@gmail.com', 'dcddb75469b4b4875094e14561e573d8', '00000', '', '22571c9ea85b98167a6e6bdc8bb6e42c', '2021-10-18 17:19:18'),
(10, 'Sourav', 'Debnath', 'male', 'souravdeb32665@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '11111', '', '908e3c9f2509f027a697ec4dcfe97534', '2021-10-19 09:02:14'),
(11, 'Akash', 'DN', 'male', 'akash@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '11111', '', '0238c5888ae5d9d8f18a753bb463f119', '2021-11-11 16:33:40'),
(12, 'Hridoy ', 'Debnath', 'male', 'hridoy@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '11111', '', 'ab7b482b7ca2b782ea8bff86c3147e2e', '2021-11-13 11:33:29'),
(13, 'Sajib', 'Debnath', 'other', 'sajib@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '11111', '', 'b6fbb977d43b803497cb9d2c075aef92', '2021-11-14 05:38:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `item_info`
--
ALTER TABLE `item_info`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `cat_id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `item_info`
--
ALTER TABLE `item_info`
  MODIFY `item_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
