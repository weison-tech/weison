-- phpMyAdmin SQL Dump
-- version 4.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-03-31 18:13:13
-- 服务器版本： 5.5.37-log
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tdrserver`
--

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`id` int(11) NOT NULL,
  `content` varchar(128) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `file`
--

CREATE TABLE IF NOT EXISTS `file` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `media_url` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1427186824),
('m130524_201442_init', 1427793360),
('m140724_112641_init', 1427186830),
('m140731_074148_post', 1427186831),
('m140922_121411_comments', 1427186831);

-- --------------------------------------------------------

--
-- 表的结构 `post`
--

CREATE TABLE IF NOT EXISTS `post` (
`id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `tags` text,
  `status` int(11) DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `tags`, `status`, `author_id`, `created_at`, `updated_at`) VALUES
(1, 'Welcome!', 'This blog system is developed using Yii. It is meant to demonstrate how to use Yii to\n            build a complete real-world application. Complete source code may be found in the Yii\n            releases. Feel free to try this system by writing new posts and posting comments.', 'yii2, rest', 1, 1, 1427186831, 1427186831);

-- --------------------------------------------------------

--
-- 表的结构 `share`
--

CREATE TABLE IF NOT EXISTS `share` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL,
  `praise` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=101 ;

--
-- 转存表中的数据 `share`
--

INSERT INTO `share` (`id`, `user_id`, `file_id`, `description`, `create_at`, `update_at`, `praise`, `status`) VALUES
(70, 1, 0, '', '2015-03-25 03:24:57', '0000-00-00 00:00:00', 0, 0),
(69, 1, 0, '', '2015-03-25 03:24:57', '0000-00-00 00:00:00', 0, 0),
(68, 1, 0, '', '2015-03-25 03:24:56', '0000-00-00 00:00:00', 0, 0),
(67, 1, 0, '', '2015-03-25 03:24:56', '0000-00-00 00:00:00', 0, 0),
(66, 1, 0, '', '2015-03-25 03:24:55', '0000-00-00 00:00:00', 0, 0),
(65, 1, 0, '', '2015-03-25 03:24:55', '0000-00-00 00:00:00', 0, 0),
(64, 1, 0, '', '2015-03-25 03:24:55', '0000-00-00 00:00:00', 0, 0),
(63, 1, 0, '', '2015-03-25 03:24:54', '0000-00-00 00:00:00', 0, 0),
(62, 1, 0, '', '2015-03-25 03:24:53', '0000-00-00 00:00:00', 0, 0),
(61, 1, 0, '', '2015-03-25 03:24:53', '0000-00-00 00:00:00', 0, 0),
(60, 1, 0, '', '2015-03-25 03:24:52', '0000-00-00 00:00:00', 0, 0),
(59, 1, 0, '', '2015-03-25 03:24:51', '0000-00-00 00:00:00', 0, 0),
(58, 1, 0, '', '2015-03-25 03:24:50', '0000-00-00 00:00:00', 0, 0),
(57, 1, 0, '', '2015-03-25 03:24:49', '0000-00-00 00:00:00', 0, 0),
(56, 1, 0, '', '2015-03-25 03:24:49', '0000-00-00 00:00:00', 0, 0),
(55, 1, 0, '', '2015-03-25 03:24:48', '0000-00-00 00:00:00', 0, 0),
(54, 1, 0, '', '2015-03-25 03:24:47', '0000-00-00 00:00:00', 0, 0),
(53, 1, 0, '', '2015-03-25 03:24:46', '0000-00-00 00:00:00', 0, 0),
(52, 1, 0, '', '2015-03-25 03:24:45', '0000-00-00 00:00:00', 0, 0),
(51, 1, 0, '', '2015-03-25 03:24:45', '0000-00-00 00:00:00', 0, 0),
(50, 1, 0, '', '2015-03-25 03:24:44', '0000-00-00 00:00:00', 0, 0),
(49, 1, 0, '', '2015-03-25 03:24:41', '0000-00-00 00:00:00', 0, 0),
(48, 1, 0, '', '2015-03-25 03:24:40', '0000-00-00 00:00:00', 0, 0),
(47, 1, 0, '', '2015-03-25 03:24:27', '0000-00-00 00:00:00', 0, 0),
(46, 1, 0, '', '2015-03-25 03:23:42', '0000-00-00 00:00:00', 0, 0),
(45, 1, 0, '', '2015-03-25 03:20:27', '0000-00-00 00:00:00', 0, 0),
(44, 1, 0, '', '2015-03-25 03:19:21', '0000-00-00 00:00:00', 0, 0),
(43, 1, 0, '', '2015-03-25 03:18:30', '0000-00-00 00:00:00', 0, 0),
(42, 1, 0, '', '2015-03-25 03:18:22', '0000-00-00 00:00:00', 0, 0),
(41, 1, 0, '', '2015-03-25 03:18:18', '0000-00-00 00:00:00', 0, 0),
(40, 1, 0, '', '2015-03-25 03:18:16', '0000-00-00 00:00:00', 0, 0),
(39, 1, 0, '', '2015-03-25 03:18:14', '0000-00-00 00:00:00', 0, 0),
(38, 1, 0, '', '2015-03-25 03:17:43', '0000-00-00 00:00:00', 0, 0),
(37, 1, 0, '', '2015-03-25 03:17:35', '0000-00-00 00:00:00', 0, 0),
(71, 1, 0, '', '2015-03-25 03:24:58', '0000-00-00 00:00:00', 0, 0),
(72, 1, 0, '', '2015-03-25 03:24:58', '0000-00-00 00:00:00', 0, 0),
(73, 1, 0, '', '2015-03-25 03:24:59', '0000-00-00 00:00:00', 0, 0),
(74, 1, 0, '', '2015-03-25 03:25:00', '0000-00-00 00:00:00', 0, 0),
(75, 1, 0, '', '2015-03-25 03:25:00', '0000-00-00 00:00:00', 0, 0),
(76, 1, 0, '', '2015-03-25 03:25:01', '0000-00-00 00:00:00', 0, 0),
(77, 1, 0, '', '2015-03-25 03:25:02', '0000-00-00 00:00:00', 0, 0),
(78, 1, 0, '', '2015-03-25 03:25:02', '0000-00-00 00:00:00', 0, 0),
(79, 1, 0, '', '2015-03-25 03:25:05', '0000-00-00 00:00:00', 0, 0),
(80, 1, 0, '', '2015-03-25 03:25:05', '0000-00-00 00:00:00', 0, 0),
(81, 1, 0, '', '2015-03-25 03:25:06', '0000-00-00 00:00:00', 0, 0),
(82, 1, 0, '', '2015-03-25 03:25:10', '0000-00-00 00:00:00', 0, 0),
(83, 1, 0, '', '2015-03-25 03:25:10', '0000-00-00 00:00:00', 0, 0),
(84, 1, 0, '', '2015-03-25 03:25:11', '0000-00-00 00:00:00', 0, 0),
(85, 1, 0, '', '2015-03-25 03:25:13', '0000-00-00 00:00:00', 0, 0),
(86, 1, 0, '', '2015-03-25 03:25:15', '0000-00-00 00:00:00', 0, 0),
(87, 1, 0, '', '2015-03-25 03:25:16', '0000-00-00 00:00:00', 0, 0),
(88, 1, 0, '', '2015-03-25 03:26:47', '0000-00-00 00:00:00', 0, 0),
(89, 1, 0, '', '2015-03-25 03:35:21', '0000-00-00 00:00:00', 0, 0),
(90, 1, 0, '', '2015-03-25 03:42:25', '0000-00-00 00:00:00', 0, 0),
(91, 1, 0, '', '2015-03-25 03:45:02', '0000-00-00 00:00:00', 0, 0),
(92, 1, 0, '', '2015-03-25 03:46:57', '0000-00-00 00:00:00', 0, 0),
(93, 1, 0, '', '2015-03-25 03:52:13', '0000-00-00 00:00:00', 0, 0),
(94, 1, 0, '', '2015-03-25 03:53:16', '0000-00-00 00:00:00', 0, 0),
(95, 1, 0, '', '2015-03-25 03:53:20', '0000-00-00 00:00:00', 0, 0),
(96, 1, 0, '', '2015-03-25 03:53:26', '0000-00-00 00:00:00', 0, 0),
(97, 1, 0, '', '2015-03-25 07:11:19', '0000-00-00 00:00:00', 0, 0),
(98, 1, 0, '', '2015-03-25 09:42:47', '0000-00-00 00:00:00', 0, 0),
(99, 1, 0, '', '2015-03-25 09:56:15', '0000-00-00 00:00:00', 0, 0),
(100, 1, 0, '', '2015-03-25 10:10:22', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'F0aaucW7PDaWDDYUYIkIOuOYhD2Knzvg', '$2y$13$4otRc6h8NsWtfDwUI6cnmecO4/m6WzutjSjfUh3UfAJmW1wOcPbXa', NULL, 'xiaoma21@126.com', 10, 1427793413, 1427793413);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
