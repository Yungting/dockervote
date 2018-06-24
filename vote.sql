-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1:3306
-- 產生時間： 2018-06-24 07:08:43
-- 伺服器版本: 5.7.21
-- PHP 版本： 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `vote`
--

-- --------------------------------------------------------

--
-- 資料表結構 `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `c_id` int(5) NOT NULL AUTO_INCREMENT,
  `v_id` text,
  `u_id` text,
  `com` text,
  `c_date` date DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `comment`
--

INSERT INTO `comment` (`c_id`, `v_id`, `u_id`, `com`, `c_date`) VALUES
(1, '33', '777', 'qwqeqeeqweqeqe', '2018-06-24'),
(2, '33', '666', 'fasdfsdasdfasf', '2018-06-26'),
(4, '33', 'gg', '5555', NULL),
(5, '33', 'gg', '1231312313123', '2018-06-24'),
(6, '33', 'gg', '1231312313123', '2018-06-24'),
(7, '33', 'gg', '1231312313123', '2018-06-24'),
(8, '33', 'gg', '1231312313123', '2018-06-24'),
(9, '31', 'gg', '111', '2018-06-24'),
(10, '31', 'gg', '111', '2018-06-24'),
(11, '28', 'gg', '444', '2018-06-24'),
(12, '28', 'gg', '444', '2018-06-24'),
(13, '28', 'gg', '', '2018-06-24'),
(14, '27', 'gg', '555', '2018-06-24'),
(15, '27', 'gg', '66', '2018-06-24');

-- --------------------------------------------------------

--
-- 資料表結構 `vote`
--

DROP TABLE IF EXISTS `vote`;
CREATE TABLE IF NOT EXISTS `vote` (
  `v_id` int(4) NOT NULL AUTO_INCREMENT,
  `v_user` text,
  `v_photo` text,
  `v_title` text,
  `v_depiction` text,
  `v_mutiple` text,
  `v_option1` text,
  `v_option2` text,
  `v_option3` text,
  `v_option4` text,
  `v_option5` text,
  `option1_number` text,
  `option2_number` text,
  `option3_number` text,
  `option4_number` text,
  `option5_number` text,
  `v_dateline_date` date DEFAULT NULL,
  `v_dateline_time` time DEFAULT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `vote`
--

INSERT INTO `vote` (`v_id`, `v_user`, `v_photo`, `v_title`, `v_depiction`, `v_mutiple`, `v_option1`, `v_option2`, `v_option3`, `v_option4`, `v_option5`, `option1_number`, `option2_number`, `option3_number`, `option4_number`, `option5_number`, `v_dateline_date`, `v_dateline_time`) VALUES
(1, 'Tim', NULL, '測試1', '你好', 'yes', '123', '321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-13', NULL),
(2, NULL, NULL, '1231345', NULL, 'yes', '11111', '55555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, '555555', NULL, 'no', 'dddddddddd', 'hhhhhhh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, '123131', '123123', 'yes', '55555', '4444444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, '123131', '123123', 'yes', 'gggggg', 'ssssss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, '123131', '123123', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, '123131', '123123', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, 'test1', 't', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01:00:00'),
(10, NULL, NULL, 'test2', 'test2', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-12', '01:04:00'),
(11, NULL, NULL, 'test3', 'test3', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-12', '01:04:00'),
(12, NULL, NULL, 'test3', 'test3', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-12', '01:04:00'),
(13, NULL, NULL, 'test4', 'test4', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-26', '01:00:00'),
(14, NULL, NULL, 'test5', 'test5', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-26', '01:00:00'),
(15, NULL, NULL, 'test6', 'test6', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-26', '01:00:00'),
(16, NULL, NULL, 'test7', 'test7', 'yes', '555555', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-26', '01:00:00'),
(17, NULL, NULL, 'test8', 'test8', 'no', 'ggg', 'ffffff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-19', '12:00:00'),
(18, NULL, NULL, 'test9', 'test9', 'no', 'ggg', 'ffffff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-19', '12:00:00'),
(19, NULL, NULL, 'test10', 'test10', 'no', 'test10', 'test10', NULL, NULL, NULL, 'hi', NULL, NULL, NULL, NULL, '2018-06-29', '01:00:00'),
(20, NULL, NULL, 'test11', 'test11', 'no', '555555', 'ggg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-26', '01:59:00'),
(21, NULL, NULL, 'Yeeeee', 'Yeeee', 'no', '555555', '13123', '', '', '', NULL, NULL, NULL, NULL, NULL, '2018-06-20', '00:00:00'),
(22, NULL, NULL, 'Yeeeee', 'Yeeee', 'no', '555555', '13123', '', '', '', NULL, NULL, NULL, NULL, NULL, '2018-06-20', '00:00:00'),
(23, NULL, NULL, 'rrrr', 'rrrr', 'yes', '555555', '13123', '', '', '', 'hihi,hi,hi', 'hihi,hi,hi,hi,hi', NULL, NULL, NULL, '2018-06-29', '11:03:00'),
(24, NULL, NULL, '想睡覺', '想睡覺', 'yes', '313123213', '123111', '123123', '44444', '', NULL, NULL, NULL, NULL, NULL, '2018-06-20', '11:04:00'),
(25, NULL, NULL, '想睡覺+1', '想睡覺+1', 'yes', '313123213', '123111', '11111', '11111', '', NULL, NULL, NULL, NULL, NULL, '2018-06-20', '11:04:00'),
(26, NULL, NULL, 'e04', 'e04', 'no', 'e04e04', 'e04', 'e04', 'e040e4', '', NULL, NULL, NULL, NULL, NULL, '2018-06-26', '01:58:00'),
(27, NULL, NULL, 'qqqq', 'qqqqq', 'yes', 'q', 'ggg', '111111', '', '', 'hi,hi,hi,hi,hi', 'hi,hi,hi,hi', 'hi,hi', NULL, NULL, '2018-06-27', '01:00:00'),
(28, NULL, NULL, 'qqqq', 'qqqqq', 'yes', 'q', 'ggg', '', '', '', NULL, 'gg', NULL, NULL, NULL, '2018-06-27', '01:00:00'),
(29, NULL, NULL, 'qqqq', 'qqqqq', 'yes', 'q', 'ggg', '', '', '', 'Array,hi,hi,hi', 'Array,hi,hi,gg,hi', NULL, NULL, NULL, '2018-06-27', '00:00:00'),
(30, NULL, '', '7878', '7878', 'yes', '7777', '88888', '', '', '', 'gg', NULL, NULL, NULL, NULL, '2018-06-27', '00:00:00'),
(31, NULL, 'upload/2.PNG', '7878', '7878', 'yes', '7777', '88888', '', '', '', 'HI,hi,gg,hi', 'hi,hi,hi', NULL, NULL, NULL, '2018-06-27', '00:00:00'),
(32, NULL, 'upload/3.PNG', '11111', '11111', 'yes', 'ggg', '555555', 'test10', '44444', '44444', 'hi', 'hi,hi,hi', 'hi,hi,hi', 'hi,hi,hi', NULL, '2018-06-29', '00:00:00'),
(33, NULL, 'upload/4.PNG', '0624', '0624', 'yes', '111111', '555555', 'ggg', 'ggg', '', NULL, NULL, NULL, NULL, NULL, '2018-06-27', '00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
