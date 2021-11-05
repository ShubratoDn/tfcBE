-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 07:26 PM
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
-- Database: `blood bank`
--
CREATE DATABASE IF NOT EXISTS `blood bank` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blood bank`;

-- --------------------------------------------------------

--
-- Table structure for table `donor_info`
--

CREATE TABLE `donor_info` (
  `id` int(11) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone1` varchar(14) NOT NULL,
  `phone2` varchar(14) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirmpass` varchar(200) NOT NULL,
  `district` varchar(50) NOT NULL,
  `upazila` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(5) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `blood_group` varchar(4) NOT NULL,
  `donated_blood` int(100) NOT NULL,
  `last_donate` varchar(20) NOT NULL,
  `donation_eligibility` varchar(15) NOT NULL,
  `token` varchar(300) NOT NULL,
  `filter_bg_class` varchar(3) NOT NULL,
  `Time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_info`
--

INSERT INTO `donor_info` (`id`, `user_type`, `fname`, `lname`, `full_name`, `email`, `phone1`, `phone2`, `password`, `confirmpass`, `district`, `upazila`, `gender`, `age`, `photo`, `blood_group`, `donated_blood`, `last_donate`, `donation_eligibility`, `token`, `filter_bg_class`, `Time_stamp`) VALUES
(117, 'donor', 'Shubrato', 'Debnath ', '', 'shubratodn44985@gmail.com', '01759458961', '01875127612 ', '4a7d1ed414474e4033ac29ccb8653d9b', '0000', 'Sirajganj', 'Chauhali', 'male ', 20, 'resources/img/donor1.jpg', 'O+', 0, '8 months', 'eligible', '9343334338bba3c5c60a55ccf3b851', 'Op', '2021-10-21 17:14:49'),
(118, 'donor', 'admin', 'admin', '', 'mycomputer44985@gmail.com', '01303544534', '0', 'b59c67bf196a4758191e42f76670ceba', '1111', 'Sirajganj', 'Belkuchi', 'male', 19, 'resources/img/female.jpg', 'AB+', 0, '1 year', 'non-eligible', '22c6203f024b437e7fc4973447be58', 'ABp', '2021-07-31 16:54:27'),
(119, 'donor', 'Arifa ', 'Khatun', '', 'arifa@gmail.com', '01755554412', '0', 'f1507aba9fc82ffa7cc7373c58f8a613', '5595', 'Sirajganj', 'Belkuchi', 'female', 20, 'resources/img/female.jpg', 'O+', 0, '', 'eligible', '49654368f901b6ffa07778b7d766ae', 'Op', '2021-07-31 16:55:17'),
(120, 'donor', 'Rafiur', 'Rahman', '', 'rafiur@gmail.com', '01501143258', '0', 'e2fc714c4727ee9395f324cd2e7f331f', 'abcd', 'Sirajganj', 'Belkuchi', 'male', 19, 'resources/img/male.jpg', 'AB+', 0, '0', 'non-eligible', 'f57ba24749ab32076d3f4fdc54e944', 'ABn', '2021-07-31 16:55:20'),
(121, 'donor', 'Suborna', 'Badhon', '', 'suborna@gmail.com', '01655887951', '0', '4ef7e70c02983547ac802a38a673110e', 'suborna', 'Sirajganj', 'Chauhali', 'female', 25, 'resources/img/female.jpg', 'B-', 0, '', 'eligible', '20c1d12499b05186ab0ba8fc4a03fd', 'Bn', '2021-07-31 16:55:03'),
(122, 'donor', 'Khandaker', 'Anik', '', 'anik@gmail.com', '01914211458', '0', '7522d28ad772d1eef7b200ebddcd08ce', 'anika', 'Sirajganj', 'Belkuchi', 'male', 65, 'resources/img/male.jpg', 'A+', 0, '', 'eligible', '1a472a1d345e53eebef0d013c582ec', 'Ap', '2021-07-31 16:55:25'),
(125, 'donor', 'Blood', 'Bank', '', 'bloodbank@gmail.com', '01769696969', '', 'b59c67bf196a4758191e42f76670ceba', '1111', 'Sirajganj', 'Belkuchi', 'Female', 22, 'resources/img/female.jpg', 'A+', 0, '--', 'eligible', '1c888f63259484799d73479f71cb6b', 'Ap', '2021-07-30 19:24:27'),
(129, 'donor', 'Test', 'Email', '', 'testemail@gmail.com', '01666666666', '', '3b712de48137572f3849aabd5666a4e3', '1122', 'Pabna', 'Chatmohar', 'Male', 25, 'uploads/0a01be18c8AxeInch2.jpg', 'B+', 0, '3 month', 'non-eligible', '79545af554ed71d69118b353b17417', 'Bp', '2021-08-01 06:21:52'),
(130, 'donor', 'test', 'email 1', '', 'email1@gmail.com', '01566666666', '', 'b59c67bf196a4758191e42f76670ceba', '1111', 'Pabna', 'Pabna Sadar', 'Male', 22, 'resources/img/female.jpg', 'B+', 0, '--', 'eligible', '4e4b82eb4e3abb7b69c372a86ca010', 'Bp', '2021-07-31 09:48:16'),
(131, 'donor', 'test', 'email 2', '', 'email2@gmail.com', '0188888888888', '', 'f1507aba9fc82ffa7cc7373c58f8a613', '5595', 'Naogaon', 'Atrai', 'Female', 35, 'resources/img/female.jpg', 'B+', 0, '2 year', 'eligible', '0ae373562ef5142aba41ca9cb99f75', 'Bp', '2021-07-31 10:24:12'),
(132, 'donor', 'Arifa', 'Khatun', '', 'arifa2@gmail.com', '01785858585', '', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'Sirajganj', 'Kamarkhanda', 'Female', 20, 'resources/img/female.jpg', 'O+', 0, '6 month', 'eligible', 'b3e89c8b1eb4c3af3ae0815e7201b9', 'Op', '2021-07-31 16:06:28'),
(133, 'donor', 'Sourav', 'Debnath', '', 'souravdeb32665@gmail.com', '01733704494', '', '4a7d1ed414474e4033ac29ccb8653d9b', '0000', 'Sirajganj', 'Chauhali', 'Male', 22, 'resources/img/female.jpg', 'O+', 0, '--', 'eligible', '78d995490df570840f892de5391ae5', 'Op', '2021-07-31 16:15:45'),
(134, 'donor', 'Hridoy ', 'Debnath', '', 'hridoy@gmail.com', '01914565912', '', '4a7d1ed414474e4033ac29ccb8653d9b', '0000', 'Naogaon', ' Raninagar', 'Male', 22, 'resources/img/female.jpg', 'AB-', 0, '--', 'eligible', '7498bd482dbfa83f2c91630113743e', 'ABn', '2021-07-31 16:23:24'),
(135, 'donor', 'Sajib', 'Debnath', '', 'sajib@gmail.com', '01622222222', '', '4a7d1ed414474e4033ac29ccb8653d9b', '0000', 'Pabna', 'Faridpur', 'Female', 21, 'uploads/be00e3cbf0MAINbusiness card-02.jpg', 'A-', 0, '5 month', 'eligible', 'd0444b0e6b17b7f4cb82935110507a', 'An', '2021-08-01 06:21:48'),
(137, 'donor', 'Subha', 'Sirat', '', 'subhasirat@gmail.com', '01696969696', '', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'Sirajganj', 'Shahjadpur', 'Female', 25, 'uploads/subha.jpg\r\n', 'AB+', 0, '--', 'eligible', '8a2835d44be3b4a284ae781442f456', 'ABp', '2021-08-01 06:44:32'),
(138, 'donor', 'Layli', 'Begum ', '', 'layli@gmail.com', '01610203040', ' ', 'b59c67bf196a4758191e42f76670ceba', '1111', 'Naogaon', 'Raninagar', 'Female ', 69, 'uploads/a263f46d0bAxeInch2.jpg', 'A-', 0, '--', 'eligible', '468f284e6ef8a32da3d320812684ea', 'An', '2021-08-01 07:19:38'),
(139, 'user', '', '', 'Tayef hossian', 'tayef@gmail.com', '', '', '81dc9bdb52d04dc20036dbd8313ed055', '1234', '', '', '', 0, '', '', 0, '', '', '', '', '2021-08-01 07:27:56'),
(140, 'donor', 'Temp', 'Mail', '', 'gevidev294@aline9.com', '017774447747', '', '4a7d1ed414474e4033ac29ccb8653d9b', '0000', 'Sirajganj', 'Ullahpara', 'Male', 16, 'resources/img/male.jpg', 'B-', 0, '--', 'eligible', 'a062d6f57e3b9c240424bd5ebfa447', 'Bn', '2021-08-01 10:44:07'),
(141, 'donor', 'test', 'email 3', '', 'testemail3@gmail.com', '017111111235', '', 'b59c67bf196a4758191e42f76670ceba', '1111', 'Sirajganj', 'Raiganj', 'Male', 20, 'uploads/f57c6b056bBitterish.jpg', 'A-', 0, '--', 'eligible', 'f3dce513efc04accc0870a26f62792', 'An', '2021-08-01 16:28:41'),
(142, 'donor', 'Test Name', '4', '', 'testemail4@gmail.com', '01556965475', '', 'b59c67bf196a4758191e42f76670ceba', '1111', 'Sirajganj', 'Kazipur', 'Female', 50, 'uploads/05d743dddfANOTHER-LOGO-_Artboard 2.png', 'B+', 0, '--', 'eligible', 'da3e2d21cfd654921bdcd3f2c967bd', 'Bp', '2021-08-01 16:42:33'),
(144, 'donor', 'Test Name', ' 5', '', 'testemail5@gmail.com', '01222242512', '', 'b59c67bf196a4758191e42f76670ceba', '1111', 'Sirajganj', 'Chauhali', 'Male', 40, 'uploads/357d6277ebANOTHER-LOGO-_Artboard 2.png', 'AB+', 0, '--', 'eligible', 'f64cb01e391078b35fcaa94630a5d1', 'ABp', '2021-08-01 16:40:08'),
(145, 'user', '', '', 'Temp Mail 2', 'tixake3007@aline9.com', '', '', 'b59c67bf196a4758191e42f76670ceba', '1111', '', '', '', 0, '', '', 0, '', '', '0071dfbc9b246ebc709d935603dae1', '', '2021-08-01 17:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `need_blood`
--

CREATE TABLE `need_blood` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `blood_group` varchar(4) NOT NULL,
  `filter_bg_class` varchar(3) NOT NULL,
  `quantity` int(5) NOT NULL,
  `time` varchar(12) NOT NULL,
  `Hospital` varchar(200) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `need_blood`
--

INSERT INTO `need_blood` (`id`, `full_name`, `blood_group`, `filter_bg_class`, `quantity`, `time`, `Hospital`, `phone`, `time_stamp`) VALUES
(11, 'subrato Dn', 'AB-', 'ABn', 1, '8 Day', 'enayetpur', '01759458961', '2021-07-27 17:40:47'),
(12, 'Akash', 'A+', 'Ap', 2, '2 Day', 'sirajganj', '01759458961', '2021-07-27 16:40:47'),
(13, 'user 2', 'B+', 'Bp', 2, '3 Day', 'khawaja yunus ali hospital', '01759458961', '2021-07-25 19:52:46'),
(14, 'user 3', 'B-', 'Bn', 5, '8 Hour', 'khawaja yunus ali hospital', '01769696969', '2021-07-26 10:19:16'),
(15, 'user 4', 'O+', 'Op', 1, '10 Day', 'khawaja yunus ali hospital', '01769696969', '2021-07-26 02:51:48'),
(16, 'user 5', 'A-', 'An', 4, '2 Hour', 'khawaja yunus ali hospital', '01744556699', '2021-07-26 10:19:16'),
(17, 'user 6', 'O-', 'On', 1, '2 Day', 'khawaja yunus ali hospital', '01744556699', '2021-07-26 10:19:16'),
(18, 'Sourav Debnath', 'AB-', 'ABn', 2, '12 Hour', 'khawaja yunus ali hospital', '01785858585', '2021-07-26 10:19:16'),
(20, 'Afrin Jue', 'B+', 'Bp', 2, '5 Day', 'khawaja yunus ali hospital', '01681815555', '2021-07-26 10:19:16'),
(21, 'Sajib Debnath', 'B+', 'Bp', 2, '5 Hour', 'khawaja yunus ali hospital', '01681815555', '2021-07-31 14:35:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_info`
--
ALTER TABLE `donor_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `need_blood`
--
ALTER TABLE `need_blood`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_info`
--
ALTER TABLE `donor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `need_blood`
--
ALTER TABLE `need_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'tfc', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"structure_or_data_forced\":\"0\",\"table_select[]\":[\"catagory\",\"item_info\",\"user_info\"],\"table_structure[]\":[\"catagory\",\"item_info\",\"user_info\"],\"table_data[]\":[\"catagory\",\"item_info\",\"user_info\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@DATABASE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"structure_and_data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"structure_and_data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_procedure_function\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_create_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}'),
(2, 'root', 'server', 'tfc', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"blood bank\",\"phpmyadmin\",\"test\",\"tfc\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"tfc\",\"table\":\"item_info\"},{\"db\":\"tfc\",\"table\":\"user_info\"},{\"db\":\"shopee\",\"table\":\"cart\"},{\"db\":\"webmentor\",\"table\":\"users\"},{\"db\":\"tfc\",\"table\":\"admin\"},{\"db\":\"tfc\",\"table\":\"catagory\"},{\"db\":\"tfc\",\"table\":\"user_feedback\"},{\"db\":\"blood bank\",\"table\":\"donor_info\"},{\"db\":\"blood bank\",\"table\":\"need_blood\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-10-31 18:26:08', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `tfc`
--
CREATE DATABASE IF NOT EXISTS `tfc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tfc`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_post` varchar(50) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cnf_pass` varchar(50) NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_post`, `admin_name`, `admin_email`, `password`, `cnf_pass`, `timestamp`) VALUES
(1, 'Owner', 'Shubrato Debnath', 'shubratodn44985@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '11111', '2021-10-23');

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
(13, 'sandwich', '3d51cb4191ebe98819a6paneer-bhurji-sandwich.jpg');

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
(13, 'Paneer Bhurji Sandwich', 13, '2a3f0e4efc4dc698a3d8paneer-bhurji-sandwich.jpg', 120, 6, 5, 0, '', 'Tonushree Mukharji', '', '2021-10-27'),
(14, 'Egg Sandwich', 13, 'a78af98ba4ea76008921EasterEggSandwichSmall2-720x540.jpg', 80, 2, 5, 0, 'An egg sandwich is a sandwich with some kind of cooked egg filling. Fried eggs, scrambled eggs, sliced boiled eggs and egg salad are popular options. In the fourth case, it may be called an egg salad sandwich.', 'Tonushree Mukharji', '', '2021-10-27'),
(15, 'Crispy Fried chicken burger', 10, '1752357d2dd1d71f3bcddownload.jpg', 120, 11, 5, 0, 'This burger consists of a super crispy & flakey chicken patty made out of the special blend of Knorr Coating Mix top with Hellmann&#39;s Classic Mayonnaise', 'Ali Akber', '', '2021-10-27'),
(16, 'Thai chicken toast', 8, '79f56274438740cff821maxresdefault.jpg', 80, 10, 5, 0, '', 'Ali Akber', '', '2021-10-27'),
(17, 'Grilled Chicken Sandwich', 10, '076d7197a30030849166download.jpg', 285, 10, 5, 0, '', 'Tonushree Mukharji, Shubrato Debnath', '', '2021-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `user_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  `rate` int(2) NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(10, 'Sourav', 'Debnath', 'male', 'souravdeb32665@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '11111', '', '908e3c9f2509f027a697ec4dcfe97534', '2021-10-19 09:02:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `cat_id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `item_info`
--
ALTER TABLE `item_info`
  MODIFY `item_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
