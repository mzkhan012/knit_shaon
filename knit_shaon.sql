-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2013 at 07:09 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `knit_shaon`
--

-- --------------------------------------------------------

--
-- Table structure for table `dyingstatuses`
--

CREATE TABLE IF NOT EXISTS `dyingstatuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `statuscode` char(4) NOT NULL,
  `batchno` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dyingstatuses`
--

INSERT INTO `dyingstatuses` (`id`, `title`, `statuscode`, `batchno`) VALUES
(1, 'Dying queue', '1111', NULL),
(2, 'Dying processing', '1112', NULL),
(3, 'Delivered for finishing', '1113', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `finishingstatuses`
--

CREATE TABLE IF NOT EXISTS `finishingstatuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `statuscode` char(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `finishingstatuses`
--

INSERT INTO `finishingstatuses` (`id`, `title`, `statuscode`) VALUES
(1, 'In finishing queue', '1220'),
(2, 'Finishing started', '1221'),
(3, 'Delivered for main store', '1222'),
(4, 'Add Finishingstatus', '23');

-- --------------------------------------------------------

--
-- Table structure for table `greystatuses`
--

CREATE TABLE IF NOT EXISTS `greystatuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `statuscode` char(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `greystatuses`
--

INSERT INTO `greystatuses` (`id`, `title`, `statuscode`) VALUES
(1, 'Add Grey Status', '1'),
(2, 'Grey Status', '1');

-- --------------------------------------------------------

--
-- Table structure for table `greystorestatuses`
--

CREATE TABLE IF NOT EXISTS `greystorestatuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `statuscode` char(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `greystorestatuses`
--

INSERT INTO `greystorestatuses` (`id`, `title`, `statuscode`) VALUES
(2, 'In grey store queue', '1111'),
(3, 'In grey store', '1112'),
(4, 'Out from grey store', '1113');

-- --------------------------------------------------------

--
-- Table structure for table `internalorders`
--

CREATE TABLE IF NOT EXISTS `internalorders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `orderitem_count` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `internalorders`
--

INSERT INTO `internalorders` (`id`, `title`, `orderitem_count`, `created`, `modified`) VALUES
(1, 'Frist Internal Order', 3, '2013-09-30 07:51:02', '2013-09-30 07:51:02'),
(2, 'Second Order', 0, '2013-10-02 01:48:47', '2013-10-02 01:48:47'),
(3, 'w', NULL, '2013-10-03 08:39:43', '2013-10-03 08:39:43'),
(4, 'q', NULL, '2013-10-03 09:00:13', '2013-10-03 09:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `jobcards`
--

CREATE TABLE IF NOT EXISTS `jobcards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `knitingplan_id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `jobcardno` varchar(20) NOT NULL,
  `barcode` varchar(60) DEFAULT NULL,
  `roll_count` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `createdby` varchar(25) NOT NULL,
  `modifiedby` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `barcode` (`barcode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `jobcards`
--

INSERT INTO `jobcards` (`id`, `knitingplan_id`, `title`, `jobcardno`, `barcode`, `roll_count`, `created`, `modified`, `createdby`, `modifiedby`) VALUES
(1, 1, 'khan', '1', '524ceb16b6742', 2, '2013-10-03 05:57:10', '2013-10-03 05:57:10', 'za', 'za'),
(2, 1, 'ere', '11', '524cf469d905d', NULL, '2013-10-03 06:36:57', '2013-10-03 06:36:57', '', ''),
(3, 1, 'tr', '3', '524cfae758ecf', NULL, '2013-10-03 07:04:39', '2013-10-03 07:04:39', '', ''),
(4, 1, 'jobcard', '5', '524cfb80b2b6d', NULL, '2013-10-03 07:07:12', '2013-10-03 07:07:12', '', ''),
(5, 1, 'qq', '11', '524d01e648700', NULL, '2013-10-03 07:34:30', '2013-10-03 07:34:30', '', ''),
(6, 2, 'www', '2', '524d343591dd5', NULL, '2013-10-03 05:09:09', '2013-10-03 05:09:09', '', ''),
(7, 1, 'i', '2', '524d3446057ff', NULL, '2013-10-03 05:09:26', '2013-10-03 05:09:26', '', ''),
(8, 1, 'e', '3', '524d64c53febe', NULL, '2013-10-03 08:36:21', '2013-10-03 08:36:21', '', ''),
(24, 0, 'Add Jobcard Title', 'Jobcardno', '524fa8a966051', NULL, '2013-10-05 01:50:33', '2013-10-05 01:50:33', 'admin', 'admin'),
(25, 0, 'october5', 'saturday', '524fd2b333759', NULL, '2013-10-05 04:49:55', '2013-10-05 04:49:55', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `knitingplans`
--

CREATE TABLE IF NOT EXISTS `knitingplans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `orderitem_id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `jobcard_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `knitingplans`
--

INSERT INTO `knitingplans` (`id`, `orderitem_id`, `title`, `jobcard_count`) VALUES
(1, 1, 'Knitingplan1', 0),
(2, 6, 'knit2', NULL),
(3, 8, 'knitting plan', 2),
(4, 1, 'october', 5);

-- --------------------------------------------------------

--
-- Table structure for table `login_tokens`
--

CREATE TABLE IF NOT EXISTS `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `login_tokens`
--

INSERT INTO `login_tokens` (`id`, `user_id`, `token`, `duration`, `used`, `created`, `expires`) VALUES
(1, 1, '7b85901eec3ee55dd60eff39a6c0fdc0', '2 weeks', 0, '2013-10-05 05:03:33', '2013-10-19 05:03:33'),
(2, 5, '7c7cea5e5896992004e66676c3f0e600', '2 weeks', 0, '2013-10-05 05:09:58', '2013-10-19 05:09:58'),
(3, 6, '0148faec1de1bd66f9533e74f6014ad2', '2 weeks', 0, '2013-10-05 05:10:14', '2013-10-19 05:10:14'),
(4, 1, '7c57ea38d5310aa950fdda01074599da', '2 weeks', 0, '2013-10-05 05:10:34', '2013-10-19 05:10:34'),
(5, 8, '26e0a495499bfb60ef27c49e351548f1', '2 weeks', 0, '2013-10-05 05:23:24', '2013-10-19 05:23:24'),
(6, 1, '6653f2bcac0281a03a856abe607a680b', '2 weeks', 0, '2013-10-05 05:23:53', '2013-10-19 05:23:53'),
(7, 5, 'd628e4db8c2f9eb603bf232434277988', '2 weeks', 0, '2013-10-05 05:24:45', '2013-10-19 05:24:45'),
(8, 6, '6cae526ce5a7c28559002305a282e5aa', '2 weeks', 0, '2013-10-05 05:25:25', '2013-10-19 05:25:25'),
(9, 5, '3007e13c6ed1e456b5557592442a201f', '2 weeks', 0, '2013-10-05 05:27:51', '2013-10-19 05:27:51'),
(10, 6, '40581238a468b0fd4d3559342fdd198e', '2 weeks', 0, '2013-10-05 05:33:21', '2013-10-19 05:33:21'),
(11, 1, 'c234067baff9b973306e0ae23a262b8e', '2 weeks', 0, '2013-10-05 05:33:41', '2013-10-19 05:33:41'),
(12, 5, 'af44ea7115722b76918aa801f0dac419', '2 weeks', 0, '2013-10-05 05:36:18', '2013-10-19 05:36:18'),
(13, 11, '0387a82df310359155de31dbc8b468d0', '2 weeks', 0, '2013-10-05 05:37:01', '2013-10-19 05:37:01'),
(14, 9, '0047d9c57d5fc831271b8abda9848122', '2 weeks', 0, '2013-10-05 05:40:28', '2013-10-19 05:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `mainstorestatuses`
--

CREATE TABLE IF NOT EXISTS `mainstorestatuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `statuscode` char(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mainstorestatuses`
--

INSERT INTO `mainstorestatuses` (`id`, `title`, `statuscode`) VALUES
(1, 'Delivered', '1114'),
(3, 'In store', '1112'),
(4, 'Rejected', '1113'),
(5, 'Returned', '1115');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE IF NOT EXISTS `orderitems` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `internalorder_id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `weight` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `createdby` varchar(25) NOT NULL,
  `modifiedby` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `internalorder_id`, `title`, `weight`, `created`, `modified`, `createdby`, `modifiedby`) VALUES
(1, 1, 'OrI-1', 11, '2013-09-30 07:51:02', '2013-09-30 07:51:02', '1', '1'),
(2, 1, 'OrI-2', 22, '2013-09-30 07:51:02', '2013-09-30 07:51:02', '1', '1'),
(3, 1, 'OrI-3', 33, '2013-09-30 07:51:02', '2013-09-30 07:51:02', '1', '1'),
(4, 2, 'o1', 11, '2013-10-02 01:48:47', '2013-10-02 01:48:47', '1', '1'),
(5, 2, 'o2', 22, '2013-10-02 01:48:47', '2013-10-02 01:48:47', '1', '1'),
(6, 2, 'o3', 33, '2013-10-02 01:48:47', '2013-10-02 01:48:47', '1', '1'),
(7, 4, 'q', 1, '2013-10-03 09:00:13', '2013-10-03 09:00:13', '', ''),
(8, 4, 'qq', 22, '2013-10-03 09:00:13', '2013-10-03 09:00:13', '', ''),
(9, 4, 'qqq', 333, '2013-10-03 09:00:13', '2013-10-03 09:00:13', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orderstatuses`
--

CREATE TABLE IF NOT EXISTS `orderstatuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `statuscode` char(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `orderstatuses`
--

INSERT INTO `orderstatuses` (`id`, `title`, `statuscode`) VALUES
(1, 'Order Status', '1');

-- --------------------------------------------------------

--
-- Table structure for table `rolls`
--

CREATE TABLE IF NOT EXISTS `rolls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `barcode` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `weight` float NOT NULL,
  `createdby` varchar(255) NOT NULL,
  `modifiedby` varchar(255) NOT NULL,
  `islabeled` tinyint(4) DEFAULT NULL,
  `greystorestatus_id` int(11) DEFAULT NULL,
  `dyingstatus_id` int(11) DEFAULT NULL,
  `finishingstatus_id` int(11) DEFAULT NULL,
  `greystatus_id` int(11) DEFAULT NULL,
  `orderstatus_id` int(11) DEFAULT NULL,
  `mainstorestatus_id` int(11) DEFAULT NULL,
  `jobcard_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `rolls`
--

INSERT INTO `rolls` (`id`, `barcode`, `created`, `modified`, `weight`, `createdby`, `modifiedby`, `islabeled`, `greystorestatus_id`, `dyingstatus_id`, `finishingstatus_id`, `greystatus_id`, `orderstatus_id`, `mainstorestatus_id`, `jobcard_id`) VALUES
(1, '524d007261b78', '2013-10-03 07:28:18', '2013-10-04 01:31:49', 22, 'admin@admin.com', 'admin@admin.com', NULL, 2, 1, 1, 1, 1, 1, 1),
(2, '524d044f09819', '2013-10-03 07:44:47', '2013-10-03 07:44:47', 70, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '524d11c73822e', '2013-10-03 08:42:15', '2013-10-03 08:42:15', 70, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '524d1352c60d9', '2013-10-03 08:48:50', '2013-10-04 01:31:31', 5, 'admin@admin.com', 'admin@admin.com', NULL, 2, 1, 1, 1, 1, 1, 1),
(5, '524e5175166c9', '2013-10-04 01:26:13', '2013-10-04 01:27:38', 21, 'a@admin.com', 'admin@admin.com', NULL, 2, 1, 1, 1, 1, 1, 1),
(6, '524f58e63c949', '2013-10-04 20:10:14', '2013-10-04 20:10:14', 40, 'admin@admin.com', 'admin@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '524f8ef320304', '2013-10-05 00:00:51', '2013-10-05 00:00:51', 5, 'mzkhan012@gmail.com', 'mzkhan012@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) unsigned DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` text,
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email_verified` int(1) DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_group_id`, `username`, `password`, `salt`, `email`, `first_name`, `last_name`, `email_verified`, `active`, `ip_address`, `created`, `modified`) VALUES
(1, 1, 'admin', '365caef7fccbdb1ee711f084be9317a7', '1e6d99570a4d37cc29b18c4a6b06e6ed', 'admin@admin.com', 'Admin', '', 1, 1, '', '2013-10-05 15:03:17', '2013-10-05 15:03:17'),
(2, 4, 'mzkhan', '8814d458203e63e003c76809ecd11c61', 'ce6f5c5d4aae07673ee7601b8b1ecb26', 'mzkhan012@gmail.com', 'Zakir', 'Khan', 1, 1, NULL, '2013-10-05 05:05:44', '2013-10-05 05:05:44'),
(3, 4, 'raiyan', 'd8e87e85117626fbfb675109134dc872', 'cdc1adde769ff4c47eb51b8fd20672ea', 'raiyan@gmail.com', 'Raiyan', 'Ali', 1, 1, NULL, '2013-10-05 05:06:27', '2013-10-05 05:06:27'),
(4, 5, 'grey', '23b2849ee4ea24fe7849396623fc61e2', 'a8c45d7beb1c3a2b8a06ae57eb32cc19', 'grey@grey.com', 'Grey', 'Store', 1, 1, NULL, '2013-10-05 05:07:01', '2013-10-05 05:07:01'),
(5, 6, 'Finishing', '56f1b0400ee760327da76149e205cf0b', 'dae52d8c69d6c50251c15bb56d767a57', 'finishing@finishing.com', 'Finishing', 'Store', 1, 1, NULL, '2013-10-05 05:07:37', '2013-10-05 05:07:37'),
(6, 7, 'Dying', 'c276ce0e5411a584c50d11af14cb2537', 'd052199873236dc0c6d8127fdab39f49', 'dying@dying.com', 'dying', 'store', 1, 1, NULL, '2013-10-05 05:08:02', '2013-10-05 05:08:02'),
(7, 8, 'Main', '740a4d4835cf9caee0f263648eba3355', '75d1e85df232a1aa476994f99f5ac992', 'mainstore@mainstore.com', 'Main', 'Store', 1, 1, NULL, '2013-10-05 05:09:00', '2013-10-05 05:09:00'),
(8, 9, 'job card', 'b96eaaa6d87d264eaa1932f9c8742f5a', '2caa1925e897dfd0cd41c3b46bd300ff', 'job@gmail.com', 'zakir', 'khan', 1, 1, NULL, '2013-10-05 05:18:07', '2013-10-05 05:18:07'),
(9, 10, 'internalorder', '2ebf6c4868888facde761c5b9ba6d810', '6a9b227f48b37bea016763ad60cc3f56', 'internalorder@gmail.com', 'internal', 'order', 1, 1, NULL, '2013-10-05 05:18:45', '2013-10-05 05:18:45'),
(10, 11, 'knittinplan', '82e6248cdceb3610a8cb547c4bc43084', '4cbf450f0e63131a0381f7ea122208cc', 'knittinplan@gmail.com', 'knitting', 'plan', 1, 1, NULL, '2013-10-05 05:19:20', '2013-10-05 05:19:20'),
(11, 12, 'order', '4c74d669cc5b05e57342ac0038c04387', '1f1cdd826cca43fabd6ce8024be13fc4', 'orderitem@gmail.com', 'order', 'item', 1, 1, NULL, '2013-10-05 05:20:00', '2013-10-05 05:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `name`, `alias_name`, `allowRegistration`, `created`, `modified`) VALUES
(1, 'Admin', 'Admin', 0, '2013-10-05 15:03:17', '2013-10-05 15:03:17'),
(2, 'User', 'User', 1, '2013-10-05 15:03:17', '2013-10-05 15:03:17'),
(3, 'Guest', 'Guest', 0, '2013-10-05 15:03:17', '2013-10-05 15:03:17'),
(4, 'Register', 'register', 0, '2013-10-05 05:04:28', '2013-10-05 05:04:28'),
(5, 'Grey', 'grey', 0, '2013-10-05 05:04:38', '2013-10-05 05:04:38'),
(6, 'Finishing', 'finishing', 0, '2013-10-05 05:04:48', '2013-10-05 05:04:48'),
(7, 'Dying', 'dying', 0, '2013-10-05 05:04:59', '2013-10-05 05:04:59'),
(8, 'Mainstore', 'mainstore', 0, '2013-10-05 05:05:10', '2013-10-05 05:05:10'),
(9, 'Job', 'job', 0, '2013-10-05 05:15:07', '2013-10-05 05:15:07'),
(10, 'Internalorder', 'internalorder', 0, '2013-10-05 05:15:30', '2013-10-05 05:15:30'),
(11, 'Knittinplan', 'knittinplan', 0, '2013-10-05 05:15:51', '2013-10-05 05:15:51'),
(12, 'Orderitem', 'orderitem', 0, '2013-10-05 05:16:58', '2013-10-05 05:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_group_permissions`
--

CREATE TABLE IF NOT EXISTS `user_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=634 ;

--
-- Dumping data for table `user_group_permissions`
--

INSERT INTO `user_group_permissions` (`id`, `user_group_id`, `controller`, `action`, `allowed`) VALUES
(1, 1, 'Pages', 'display', 1),
(2, 2, 'Pages', 'display', 1),
(3, 3, 'Pages', 'display', 1),
(4, 1, 'UserGroupPermissions', 'index', 1),
(5, 2, 'UserGroupPermissions', 'index', 0),
(6, 3, 'UserGroupPermissions', 'index', 0),
(7, 1, 'UserGroupPermissions', 'update', 1),
(8, 2, 'UserGroupPermissions', 'update', 0),
(9, 3, 'UserGroupPermissions', 'update', 0),
(10, 1, 'UserGroups', 'index', 1),
(11, 2, 'UserGroups', 'index', 0),
(12, 3, 'UserGroups', 'index', 0),
(13, 1, 'UserGroups', 'addGroup', 1),
(14, 2, 'UserGroups', 'addGroup', 0),
(15, 3, 'UserGroups', 'addGroup', 0),
(16, 1, 'UserGroups', 'editGroup', 1),
(17, 2, 'UserGroups', 'editGroup', 0),
(18, 3, 'UserGroups', 'editGroup', 0),
(19, 1, 'UserGroups', 'deleteGroup', 1),
(20, 2, 'UserGroups', 'deleteGroup', 0),
(21, 3, 'UserGroups', 'deleteGroup', 0),
(22, 1, 'Users', 'index', 1),
(23, 2, 'Users', 'index', 0),
(24, 3, 'Users', 'index', 0),
(25, 1, 'Users', 'viewUser', 1),
(26, 2, 'Users', 'viewUser', 0),
(27, 3, 'Users', 'viewUser', 0),
(28, 1, 'Users', 'myprofile', 1),
(29, 2, 'Users', 'myprofile', 1),
(30, 3, 'Users', 'myprofile', 0),
(31, 1, 'Users', 'login', 1),
(32, 2, 'Users', 'login', 1),
(33, 3, 'Users', 'login', 1),
(34, 1, 'Users', 'logout', 1),
(35, 2, 'Users', 'logout', 1),
(36, 3, 'Users', 'logout', 1),
(37, 1, 'Users', 'register', 1),
(38, 2, 'Users', 'register', 1),
(39, 3, 'Users', 'register', 1),
(40, 1, 'Users', 'changePassword', 1),
(41, 2, 'Users', 'changePassword', 1),
(42, 3, 'Users', 'changePassword', 0),
(43, 1, 'Users', 'changeUserPassword', 1),
(44, 2, 'Users', 'changeUserPassword', 0),
(45, 3, 'Users', 'changeUserPassword', 0),
(46, 1, 'Users', 'addUser', 1),
(47, 2, 'Users', 'addUser', 0),
(48, 3, 'Users', 'addUser', 0),
(49, 1, 'Users', 'editUser', 1),
(50, 2, 'Users', 'editUser', 0),
(51, 3, 'Users', 'editUser', 0),
(52, 1, 'Users', 'dashboard', 1),
(53, 2, 'Users', 'dashboard', 1),
(54, 3, 'Users', 'dashboard', 0),
(55, 1, 'Users', 'deleteUser', 1),
(56, 2, 'Users', 'deleteUser', 0),
(57, 3, 'Users', 'deleteUser', 0),
(58, 1, 'Users', 'makeActive', 1),
(59, 2, 'Users', 'makeActive', 0),
(60, 3, 'Users', 'makeActive', 0),
(61, 1, 'Users', 'accessDenied', 1),
(62, 2, 'Users', 'accessDenied', 1),
(63, 3, 'Users', 'accessDenied', 1),
(64, 1, 'Users', 'userVerification', 1),
(65, 2, 'Users', 'userVerification', 1),
(66, 3, 'Users', 'userVerification', 1),
(67, 1, 'Users', 'forgotPassword', 1),
(68, 2, 'Users', 'forgotPassword', 1),
(69, 3, 'Users', 'forgotPassword', 1),
(70, 1, 'Users', 'makeActiveInactive', 1),
(71, 2, 'Users', 'makeActiveInactive', 0),
(72, 3, 'Users', 'makeActiveInactive', 0),
(73, 1, 'Users', 'verifyEmail', 1),
(74, 2, 'Users', 'verifyEmail', 0),
(75, 3, 'Users', 'verifyEmail', 0),
(76, 1, 'Users', 'activatePassword', 1),
(77, 2, 'Users', 'activatePassword', 1),
(78, 3, 'Users', 'activatePassword', 1),
(79, 4, 'Users', 'dashboard', 1),
(80, 5, 'Users', 'dashboard', 1),
(81, 6, 'Users', 'dashboard', 1),
(82, 7, 'Users', 'dashboard', 1),
(83, 8, 'Users', 'dashboard', 1),
(84, 4, 'Users', 'myprofile', 1),
(85, 5, 'Users', 'myprofile', 1),
(86, 6, 'Users', 'myprofile', 1),
(87, 7, 'Users', 'myprofile', 1),
(88, 8, 'Users', 'myprofile', 1),
(89, 1, 'Dyingstatuses', 'edit', 0),
(90, 2, 'Dyingstatuses', 'edit', 0),
(91, 3, 'Dyingstatuses', 'edit', 0),
(92, 4, 'Dyingstatuses', 'edit', 0),
(93, 5, 'Dyingstatuses', 'edit', 0),
(94, 6, 'Dyingstatuses', 'edit', 0),
(95, 7, 'Dyingstatuses', 'edit', 1),
(96, 8, 'Dyingstatuses', 'edit', 0),
(97, 1, 'Dyingstatuses', 'add', 0),
(98, 2, 'Dyingstatuses', 'add', 0),
(99, 3, 'Dyingstatuses', 'add', 0),
(100, 4, 'Dyingstatuses', 'add', 0),
(101, 5, 'Dyingstatuses', 'add', 0),
(102, 6, 'Dyingstatuses', 'add', 0),
(103, 7, 'Dyingstatuses', 'add', 1),
(104, 8, 'Dyingstatuses', 'add', 0),
(105, 1, 'Dyingstatuses', 'view', 0),
(106, 2, 'Dyingstatuses', 'view', 0),
(107, 3, 'Dyingstatuses', 'view', 0),
(108, 4, 'Dyingstatuses', 'view', 0),
(109, 5, 'Dyingstatuses', 'view', 0),
(110, 6, 'Dyingstatuses', 'view', 0),
(111, 7, 'Dyingstatuses', 'view', 1),
(112, 8, 'Dyingstatuses', 'view', 0),
(113, 1, 'Dyingstatuses', 'index', 0),
(114, 2, 'Dyingstatuses', 'index', 0),
(115, 3, 'Dyingstatuses', 'index', 0),
(116, 4, 'Dyingstatuses', 'index', 0),
(117, 5, 'Dyingstatuses', 'index', 0),
(118, 6, 'Dyingstatuses', 'index', 0),
(119, 7, 'Dyingstatuses', 'index', 1),
(120, 8, 'Dyingstatuses', 'index', 0),
(121, 1, 'Dyingstatuses', 'delete', 0),
(122, 2, 'Dyingstatuses', 'delete', 0),
(123, 3, 'Dyingstatuses', 'delete', 0),
(124, 4, 'Dyingstatuses', 'delete', 0),
(125, 5, 'Dyingstatuses', 'delete', 0),
(126, 6, 'Dyingstatuses', 'delete', 0),
(127, 7, 'Dyingstatuses', 'delete', 1),
(128, 8, 'Dyingstatuses', 'delete', 0),
(129, 1, 'Finishingstatuses', 'index', 0),
(130, 2, 'Finishingstatuses', 'index', 0),
(131, 3, 'Finishingstatuses', 'index', 0),
(132, 4, 'Finishingstatuses', 'index', 0),
(133, 5, 'Finishingstatuses', 'index', 0),
(134, 6, 'Finishingstatuses', 'index', 1),
(135, 7, 'Finishingstatuses', 'index', 0),
(136, 8, 'Finishingstatuses', 'index', 0),
(137, 1, 'Finishingstatuses', 'view', 0),
(138, 2, 'Finishingstatuses', 'view', 0),
(139, 3, 'Finishingstatuses', 'view', 0),
(140, 4, 'Finishingstatuses', 'view', 0),
(141, 5, 'Finishingstatuses', 'view', 0),
(142, 6, 'Finishingstatuses', 'view', 1),
(143, 7, 'Finishingstatuses', 'view', 0),
(144, 8, 'Finishingstatuses', 'view', 0),
(145, 1, 'Finishingstatuses', 'add', 0),
(146, 2, 'Finishingstatuses', 'add', 0),
(147, 3, 'Finishingstatuses', 'add', 0),
(148, 4, 'Finishingstatuses', 'add', 0),
(149, 5, 'Finishingstatuses', 'add', 0),
(150, 6, 'Finishingstatuses', 'add', 1),
(151, 7, 'Finishingstatuses', 'add', 0),
(152, 8, 'Finishingstatuses', 'add', 0),
(153, 1, 'Finishingstatuses', 'edit', 0),
(154, 2, 'Finishingstatuses', 'edit', 0),
(155, 3, 'Finishingstatuses', 'edit', 0),
(156, 4, 'Finishingstatuses', 'edit', 0),
(157, 5, 'Finishingstatuses', 'edit', 0),
(158, 6, 'Finishingstatuses', 'edit', 1),
(159, 7, 'Finishingstatuses', 'edit', 0),
(160, 8, 'Finishingstatuses', 'edit', 0),
(161, 1, 'Finishingstatuses', 'delete', 0),
(162, 2, 'Finishingstatuses', 'delete', 0),
(163, 3, 'Finishingstatuses', 'delete', 0),
(164, 4, 'Finishingstatuses', 'delete', 0),
(165, 5, 'Finishingstatuses', 'delete', 0),
(166, 6, 'Finishingstatuses', 'delete', 1),
(167, 7, 'Finishingstatuses', 'delete', 0),
(168, 8, 'Finishingstatuses', 'delete', 0),
(169, 1, 'Greystorestatuses', 'index', 0),
(170, 2, 'Greystorestatuses', 'index', 0),
(171, 3, 'Greystorestatuses', 'index', 0),
(172, 4, 'Greystorestatuses', 'index', 0),
(173, 5, 'Greystorestatuses', 'index', 1),
(174, 6, 'Greystorestatuses', 'index', 0),
(175, 7, 'Greystorestatuses', 'index', 0),
(176, 8, 'Greystorestatuses', 'index', 0),
(177, 1, 'Greystorestatuses', 'view', 0),
(178, 2, 'Greystorestatuses', 'view', 0),
(179, 3, 'Greystorestatuses', 'view', 0),
(180, 4, 'Greystorestatuses', 'view', 0),
(181, 5, 'Greystorestatuses', 'view', 1),
(182, 6, 'Greystorestatuses', 'view', 0),
(183, 7, 'Greystorestatuses', 'view', 0),
(184, 8, 'Greystorestatuses', 'view', 0),
(185, 1, 'Greystorestatuses', 'add', 0),
(186, 2, 'Greystorestatuses', 'add', 0),
(187, 3, 'Greystorestatuses', 'add', 0),
(188, 4, 'Greystorestatuses', 'add', 0),
(189, 5, 'Greystorestatuses', 'add', 1),
(190, 6, 'Greystorestatuses', 'add', 0),
(191, 7, 'Greystorestatuses', 'add', 0),
(192, 8, 'Greystorestatuses', 'add', 0),
(193, 1, 'Greystorestatuses', 'edit', 0),
(194, 2, 'Greystorestatuses', 'edit', 0),
(195, 3, 'Greystorestatuses', 'edit', 0),
(196, 4, 'Greystorestatuses', 'edit', 0),
(197, 5, 'Greystorestatuses', 'edit', 1),
(198, 6, 'Greystorestatuses', 'edit', 0),
(199, 7, 'Greystorestatuses', 'edit', 0),
(200, 8, 'Greystorestatuses', 'edit', 0),
(201, 1, 'Greystorestatuses', 'delete', 0),
(202, 2, 'Greystorestatuses', 'delete', 0),
(203, 3, 'Greystorestatuses', 'delete', 0),
(204, 4, 'Greystorestatuses', 'delete', 0),
(205, 5, 'Greystorestatuses', 'delete', 1),
(206, 6, 'Greystorestatuses', 'delete', 0),
(207, 7, 'Greystorestatuses', 'delete', 0),
(208, 8, 'Greystorestatuses', 'delete', 0),
(209, 1, 'Jobcards', 'index', 0),
(210, 2, 'Jobcards', 'index', 0),
(211, 3, 'Jobcards', 'index', 0),
(212, 4, 'Jobcards', 'index', 0),
(213, 5, 'Jobcards', 'index', 0),
(214, 6, 'Jobcards', 'index', 0),
(215, 7, 'Jobcards', 'index', 0),
(216, 8, 'Jobcards', 'index', 0),
(217, 9, 'Jobcards', 'index', 1),
(218, 10, 'Jobcards', 'index', 0),
(219, 11, 'Jobcards', 'index', 0),
(220, 12, 'Jobcards', 'index', 0),
(221, 1, 'Jobcards', 'view', 0),
(222, 2, 'Jobcards', 'view', 0),
(223, 3, 'Jobcards', 'view', 0),
(224, 4, 'Jobcards', 'view', 0),
(225, 5, 'Jobcards', 'view', 0),
(226, 6, 'Jobcards', 'view', 0),
(227, 7, 'Jobcards', 'view', 0),
(228, 8, 'Jobcards', 'view', 0),
(229, 9, 'Jobcards', 'view', 1),
(230, 10, 'Jobcards', 'view', 0),
(231, 11, 'Jobcards', 'view', 0),
(232, 12, 'Jobcards', 'view', 0),
(233, 1, 'Jobcards', 'add', 0),
(234, 2, 'Jobcards', 'add', 0),
(235, 3, 'Jobcards', 'add', 0),
(236, 4, 'Jobcards', 'add', 0),
(237, 5, 'Jobcards', 'add', 0),
(238, 6, 'Jobcards', 'add', 0),
(239, 7, 'Jobcards', 'add', 0),
(240, 8, 'Jobcards', 'add', 0),
(241, 9, 'Jobcards', 'add', 1),
(242, 10, 'Jobcards', 'add', 0),
(243, 11, 'Jobcards', 'add', 0),
(244, 12, 'Jobcards', 'add', 0),
(245, 1, 'Jobcards', 'detail', 0),
(246, 2, 'Jobcards', 'detail', 0),
(247, 3, 'Jobcards', 'detail', 0),
(248, 4, 'Jobcards', 'detail', 0),
(249, 5, 'Jobcards', 'detail', 0),
(250, 6, 'Jobcards', 'detail', 0),
(251, 7, 'Jobcards', 'detail', 0),
(252, 8, 'Jobcards', 'detail', 0),
(253, 9, 'Jobcards', 'detail', 1),
(254, 10, 'Jobcards', 'detail', 0),
(255, 11, 'Jobcards', 'detail', 0),
(256, 12, 'Jobcards', 'detail', 0),
(257, 1, 'Jobcards', 'totaljobcard', 0),
(258, 2, 'Jobcards', 'totaljobcard', 0),
(259, 3, 'Jobcards', 'totaljobcard', 0),
(260, 4, 'Jobcards', 'totaljobcard', 0),
(261, 5, 'Jobcards', 'totaljobcard', 0),
(262, 6, 'Jobcards', 'totaljobcard', 0),
(263, 7, 'Jobcards', 'totaljobcard', 0),
(264, 8, 'Jobcards', 'totaljobcard', 0),
(265, 9, 'Jobcards', 'totaljobcard', 1),
(266, 10, 'Jobcards', 'totaljobcard', 0),
(267, 11, 'Jobcards', 'totaljobcard', 0),
(268, 12, 'Jobcards', 'totaljobcard', 0),
(269, 1, 'Jobcards', 'edit', 0),
(270, 2, 'Jobcards', 'edit', 0),
(271, 3, 'Jobcards', 'edit', 0),
(272, 4, 'Jobcards', 'edit', 0),
(273, 5, 'Jobcards', 'edit', 0),
(274, 6, 'Jobcards', 'edit', 0),
(275, 7, 'Jobcards', 'edit', 0),
(276, 8, 'Jobcards', 'edit', 0),
(277, 9, 'Jobcards', 'edit', 1),
(278, 10, 'Jobcards', 'edit', 0),
(279, 11, 'Jobcards', 'edit', 0),
(280, 12, 'Jobcards', 'edit', 0),
(281, 1, 'Jobcards', 'delete', 0),
(282, 2, 'Jobcards', 'delete', 0),
(283, 3, 'Jobcards', 'delete', 0),
(284, 4, 'Jobcards', 'delete', 0),
(285, 5, 'Jobcards', 'delete', 0),
(286, 6, 'Jobcards', 'delete', 0),
(287, 7, 'Jobcards', 'delete', 0),
(288, 8, 'Jobcards', 'delete', 0),
(289, 9, 'Jobcards', 'delete', 1),
(290, 10, 'Jobcards', 'delete', 0),
(291, 11, 'Jobcards', 'delete', 0),
(292, 12, 'Jobcards', 'delete', 0),
(293, 1, 'Jobcards', 'find', 0),
(294, 2, 'Jobcards', 'find', 0),
(295, 3, 'Jobcards', 'find', 0),
(296, 4, 'Jobcards', 'find', 0),
(297, 5, 'Jobcards', 'find', 0),
(298, 6, 'Jobcards', 'find', 0),
(299, 7, 'Jobcards', 'find', 0),
(300, 8, 'Jobcards', 'find', 0),
(301, 9, 'Jobcards', 'find', 1),
(302, 10, 'Jobcards', 'find', 0),
(303, 11, 'Jobcards', 'find', 0),
(304, 12, 'Jobcards', 'find', 0),
(305, 1, 'Knitingplans', 'index', 0),
(306, 2, 'Knitingplans', 'index', 0),
(307, 3, 'Knitingplans', 'index', 0),
(308, 4, 'Knitingplans', 'index', 0),
(309, 5, 'Knitingplans', 'index', 0),
(310, 6, 'Knitingplans', 'index', 0),
(311, 7, 'Knitingplans', 'index', 0),
(312, 8, 'Knitingplans', 'index', 0),
(313, 9, 'Knitingplans', 'index', 0),
(314, 10, 'Knitingplans', 'index', 0),
(315, 11, 'Knitingplans', 'index', 1),
(316, 12, 'Knitingplans', 'index', 0),
(317, 1, 'Knitingplans', 'view', 0),
(318, 2, 'Knitingplans', 'view', 0),
(319, 3, 'Knitingplans', 'view', 0),
(320, 4, 'Knitingplans', 'view', 0),
(321, 5, 'Knitingplans', 'view', 0),
(322, 6, 'Knitingplans', 'view', 0),
(323, 7, 'Knitingplans', 'view', 0),
(324, 8, 'Knitingplans', 'view', 0),
(325, 9, 'Knitingplans', 'view', 0),
(326, 10, 'Knitingplans', 'view', 0),
(327, 11, 'Knitingplans', 'view', 1),
(328, 12, 'Knitingplans', 'view', 0),
(329, 1, 'Knitingplans', 'detail', 0),
(330, 2, 'Knitingplans', 'detail', 0),
(331, 3, 'Knitingplans', 'detail', 0),
(332, 4, 'Knitingplans', 'detail', 0),
(333, 5, 'Knitingplans', 'detail', 0),
(334, 6, 'Knitingplans', 'detail', 0),
(335, 7, 'Knitingplans', 'detail', 0),
(336, 8, 'Knitingplans', 'detail', 0),
(337, 9, 'Knitingplans', 'detail', 0),
(338, 10, 'Knitingplans', 'detail', 0),
(339, 11, 'Knitingplans', 'detail', 1),
(340, 12, 'Knitingplans', 'detail', 0),
(341, 1, 'Knitingplans', 'place', 0),
(342, 2, 'Knitingplans', 'place', 0),
(343, 3, 'Knitingplans', 'place', 0),
(344, 4, 'Knitingplans', 'place', 0),
(345, 5, 'Knitingplans', 'place', 0),
(346, 6, 'Knitingplans', 'place', 0),
(347, 7, 'Knitingplans', 'place', 0),
(348, 8, 'Knitingplans', 'place', 0),
(349, 9, 'Knitingplans', 'place', 0),
(350, 10, 'Knitingplans', 'place', 0),
(351, 11, 'Knitingplans', 'place', 1),
(352, 12, 'Knitingplans', 'place', 0),
(353, 1, 'Knitingplans', 'add', 0),
(354, 2, 'Knitingplans', 'add', 0),
(355, 3, 'Knitingplans', 'add', 0),
(356, 4, 'Knitingplans', 'add', 0),
(357, 5, 'Knitingplans', 'add', 0),
(358, 6, 'Knitingplans', 'add', 0),
(359, 7, 'Knitingplans', 'add', 0),
(360, 8, 'Knitingplans', 'add', 0),
(361, 9, 'Knitingplans', 'add', 0),
(362, 10, 'Knitingplans', 'add', 0),
(363, 11, 'Knitingplans', 'add', 1),
(364, 12, 'Knitingplans', 'add', 0),
(365, 1, 'Knitingplans', 'edit', 0),
(366, 2, 'Knitingplans', 'edit', 0),
(367, 3, 'Knitingplans', 'edit', 0),
(368, 4, 'Knitingplans', 'edit', 0),
(369, 5, 'Knitingplans', 'edit', 0),
(370, 6, 'Knitingplans', 'edit', 0),
(371, 7, 'Knitingplans', 'edit', 0),
(372, 8, 'Knitingplans', 'edit', 0),
(373, 9, 'Knitingplans', 'edit', 0),
(374, 10, 'Knitingplans', 'edit', 0),
(375, 11, 'Knitingplans', 'edit', 1),
(376, 12, 'Knitingplans', 'edit', 0),
(377, 1, 'Knitingplans', 'generateJobBarcode', 0),
(378, 2, 'Knitingplans', 'generateJobBarcode', 0),
(379, 3, 'Knitingplans', 'generateJobBarcode', 0),
(380, 4, 'Knitingplans', 'generateJobBarcode', 0),
(381, 5, 'Knitingplans', 'generateJobBarcode', 0),
(382, 6, 'Knitingplans', 'generateJobBarcode', 0),
(383, 7, 'Knitingplans', 'generateJobBarcode', 0),
(384, 8, 'Knitingplans', 'generateJobBarcode', 0),
(385, 9, 'Knitingplans', 'generateJobBarcode', 0),
(386, 10, 'Knitingplans', 'generateJobBarcode', 0),
(387, 11, 'Knitingplans', 'generateJobBarcode', 1),
(388, 12, 'Knitingplans', 'generateJobBarcode', 0),
(389, 1, 'Knitingplans', 'delete', 0),
(390, 2, 'Knitingplans', 'delete', 0),
(391, 3, 'Knitingplans', 'delete', 0),
(392, 4, 'Knitingplans', 'delete', 0),
(393, 5, 'Knitingplans', 'delete', 0),
(394, 6, 'Knitingplans', 'delete', 0),
(395, 7, 'Knitingplans', 'delete', 0),
(396, 8, 'Knitingplans', 'delete', 0),
(397, 9, 'Knitingplans', 'delete', 0),
(398, 10, 'Knitingplans', 'delete', 0),
(399, 11, 'Knitingplans', 'delete', 1),
(400, 12, 'Knitingplans', 'delete', 0),
(401, 1, 'Orderitems', 'index', 0),
(402, 2, 'Orderitems', 'index', 0),
(403, 3, 'Orderitems', 'index', 0),
(404, 4, 'Orderitems', 'index', 0),
(405, 5, 'Orderitems', 'index', 0),
(406, 6, 'Orderitems', 'index', 0),
(407, 7, 'Orderitems', 'index', 0),
(408, 8, 'Orderitems', 'index', 0),
(409, 9, 'Orderitems', 'index', 0),
(410, 10, 'Orderitems', 'index', 0),
(411, 11, 'Orderitems', 'index', 0),
(412, 12, 'Orderitems', 'index', 1),
(413, 1, 'Orderitems', 'view', 0),
(414, 2, 'Orderitems', 'view', 0),
(415, 3, 'Orderitems', 'view', 0),
(416, 4, 'Orderitems', 'view', 0),
(417, 5, 'Orderitems', 'view', 0),
(418, 6, 'Orderitems', 'view', 0),
(419, 7, 'Orderitems', 'view', 0),
(420, 8, 'Orderitems', 'view', 0),
(421, 9, 'Orderitems', 'view', 0),
(422, 10, 'Orderitems', 'view', 0),
(423, 11, 'Orderitems', 'view', 0),
(424, 12, 'Orderitems', 'view', 1),
(425, 1, 'Orderitems', 'add', 0),
(426, 2, 'Orderitems', 'add', 0),
(427, 3, 'Orderitems', 'add', 0),
(428, 4, 'Orderitems', 'add', 0),
(429, 5, 'Orderitems', 'add', 0),
(430, 6, 'Orderitems', 'add', 0),
(431, 7, 'Orderitems', 'add', 0),
(432, 8, 'Orderitems', 'add', 0),
(433, 9, 'Orderitems', 'add', 0),
(434, 10, 'Orderitems', 'add', 0),
(435, 11, 'Orderitems', 'add', 0),
(436, 12, 'Orderitems', 'add', 1),
(437, 1, 'Orderitems', 'edit', 0),
(438, 2, 'Orderitems', 'edit', 0),
(439, 3, 'Orderitems', 'edit', 0),
(440, 4, 'Orderitems', 'edit', 0),
(441, 5, 'Orderitems', 'edit', 0),
(442, 6, 'Orderitems', 'edit', 0),
(443, 7, 'Orderitems', 'edit', 0),
(444, 8, 'Orderitems', 'edit', 0),
(445, 9, 'Orderitems', 'edit', 0),
(446, 10, 'Orderitems', 'edit', 0),
(447, 11, 'Orderitems', 'edit', 0),
(448, 12, 'Orderitems', 'edit', 1),
(449, 1, 'Orderitems', 'delete', 0),
(450, 2, 'Orderitems', 'delete', 0),
(451, 3, 'Orderitems', 'delete', 0),
(452, 4, 'Orderitems', 'delete', 0),
(453, 5, 'Orderitems', 'delete', 0),
(454, 6, 'Orderitems', 'delete', 0),
(455, 7, 'Orderitems', 'delete', 0),
(456, 8, 'Orderitems', 'delete', 0),
(457, 9, 'Orderitems', 'delete', 0),
(458, 10, 'Orderitems', 'delete', 0),
(459, 11, 'Orderitems', 'delete', 0),
(460, 12, 'Orderitems', 'delete', 1),
(461, 1, 'Internalorders', 'index', 0),
(462, 2, 'Internalorders', 'index', 0),
(463, 3, 'Internalorders', 'index', 0),
(464, 4, 'Internalorders', 'index', 0),
(465, 5, 'Internalorders', 'index', 0),
(466, 6, 'Internalorders', 'index', 0),
(467, 7, 'Internalorders', 'index', 0),
(468, 8, 'Internalorders', 'index', 0),
(469, 9, 'Internalorders', 'index', 0),
(470, 10, 'Internalorders', 'index', 1),
(471, 11, 'Internalorders', 'index', 0),
(472, 12, 'Internalorders', 'index', 0),
(473, 1, 'Internalorders', 'view', 0),
(474, 2, 'Internalorders', 'view', 0),
(475, 3, 'Internalorders', 'view', 0),
(476, 4, 'Internalorders', 'view', 0),
(477, 5, 'Internalorders', 'view', 0),
(478, 6, 'Internalorders', 'view', 0),
(479, 7, 'Internalorders', 'view', 0),
(480, 8, 'Internalorders', 'view', 0),
(481, 9, 'Internalorders', 'view', 0),
(482, 10, 'Internalorders', 'view', 1),
(483, 11, 'Internalorders', 'view', 0),
(484, 12, 'Internalorders', 'view', 0),
(485, 1, 'Internalorders', 'add', 0),
(486, 2, 'Internalorders', 'add', 0),
(487, 3, 'Internalorders', 'add', 0),
(488, 4, 'Internalorders', 'add', 0),
(489, 5, 'Internalorders', 'add', 0),
(490, 6, 'Internalorders', 'add', 0),
(491, 7, 'Internalorders', 'add', 0),
(492, 8, 'Internalorders', 'add', 0),
(493, 9, 'Internalorders', 'add', 0),
(494, 10, 'Internalorders', 'add', 1),
(495, 11, 'Internalorders', 'add', 0),
(496, 12, 'Internalorders', 'add', 0),
(497, 1, 'Internalorders', 'place', 0),
(498, 2, 'Internalorders', 'place', 0),
(499, 3, 'Internalorders', 'place', 0),
(500, 4, 'Internalorders', 'place', 0),
(501, 5, 'Internalorders', 'place', 0),
(502, 6, 'Internalorders', 'place', 0),
(503, 7, 'Internalorders', 'place', 0),
(504, 8, 'Internalorders', 'place', 0),
(505, 9, 'Internalorders', 'place', 0),
(506, 10, 'Internalorders', 'place', 1),
(507, 11, 'Internalorders', 'place', 0),
(508, 12, 'Internalorders', 'place', 0),
(509, 1, 'Internalorders', 'edit', 0),
(510, 2, 'Internalorders', 'edit', 0),
(511, 3, 'Internalorders', 'edit', 0),
(512, 4, 'Internalorders', 'edit', 0),
(513, 5, 'Internalorders', 'edit', 0),
(514, 6, 'Internalorders', 'edit', 0),
(515, 7, 'Internalorders', 'edit', 0),
(516, 8, 'Internalorders', 'edit', 0),
(517, 9, 'Internalorders', 'edit', 0),
(518, 10, 'Internalorders', 'edit', 1),
(519, 11, 'Internalorders', 'edit', 0),
(520, 12, 'Internalorders', 'edit', 0),
(521, 1, 'Internalorders', 'delete', 0),
(522, 2, 'Internalorders', 'delete', 0),
(523, 3, 'Internalorders', 'delete', 0),
(524, 4, 'Internalorders', 'delete', 0),
(525, 5, 'Internalorders', 'delete', 0),
(526, 6, 'Internalorders', 'delete', 0),
(527, 7, 'Internalorders', 'delete', 0),
(528, 8, 'Internalorders', 'delete', 0),
(529, 9, 'Internalorders', 'delete', 0),
(530, 10, 'Internalorders', 'delete', 1),
(531, 11, 'Internalorders', 'delete', 0),
(532, 12, 'Internalorders', 'delete', 0),
(533, 9, 'Users', 'myprofile', 1),
(534, 10, 'Users', 'myprofile', 1),
(535, 11, 'Users', 'myprofile', 1),
(536, 12, 'Users', 'myprofile', 1),
(537, 4, 'Users', 'changePassword', 1),
(538, 5, 'Users', 'changePassword', 1),
(539, 6, 'Users', 'changePassword', 1),
(540, 7, 'Users', 'changePassword', 1),
(541, 8, 'Users', 'changePassword', 1),
(542, 9, 'Users', 'changePassword', 1),
(543, 10, 'Users', 'changePassword', 1),
(544, 11, 'Users', 'changePassword', 1),
(545, 12, 'Users', 'changePassword', 1),
(546, 9, 'Users', 'dashboard', 1),
(547, 10, 'Users', 'dashboard', 1),
(548, 11, 'Users', 'dashboard', 1),
(549, 12, 'Users', 'dashboard', 1),
(550, 1, 'Rolls', 'received', 0),
(551, 2, 'Rolls', 'received', 0),
(552, 3, 'Rolls', 'received', 0),
(553, 4, 'Rolls', 'received', 0),
(554, 5, 'Rolls', 'received', 1),
(555, 6, 'Rolls', 'received', 1),
(556, 7, 'Rolls', 'received', 1),
(557, 8, 'Rolls', 'received', 1),
(558, 9, 'Rolls', 'received', 0),
(559, 10, 'Rolls', 'received', 0),
(560, 11, 'Rolls', 'received', 0),
(561, 12, 'Rolls', 'received', 0),
(562, 1, 'Rolls', 'add', 0),
(563, 2, 'Rolls', 'add', 0),
(564, 3, 'Rolls', 'add', 0),
(565, 4, 'Rolls', 'add', 1),
(566, 5, 'Rolls', 'add', 0),
(567, 6, 'Rolls', 'add', 0),
(568, 7, 'Rolls', 'add', 0),
(569, 8, 'Rolls', 'add', 0),
(570, 9, 'Rolls', 'add', 0),
(571, 10, 'Rolls', 'add', 0),
(572, 11, 'Rolls', 'add', 0),
(573, 12, 'Rolls', 'add', 0),
(574, 1, 'Rolls', 'released', 0),
(575, 2, 'Rolls', 'released', 0),
(576, 3, 'Rolls', 'released', 0),
(577, 4, 'Rolls', 'released', 0),
(578, 5, 'Rolls', 'released', 1),
(579, 6, 'Rolls', 'released', 1),
(580, 7, 'Rolls', 'released', 1),
(581, 8, 'Rolls', 'released', 1),
(582, 9, 'Rolls', 'released', 0),
(583, 10, 'Rolls', 'released', 0),
(584, 11, 'Rolls', 'released', 0),
(585, 12, 'Rolls', 'released', 0),
(586, 1, 'Rolls', 'find', 0),
(587, 2, 'Rolls', 'find', 0),
(588, 3, 'Rolls', 'find', 0),
(589, 4, 'Rolls', 'find', 0),
(590, 5, 'Rolls', 'find', 1),
(591, 6, 'Rolls', 'find', 1),
(592, 7, 'Rolls', 'find', 1),
(593, 8, 'Rolls', 'find', 1),
(594, 9, 'Rolls', 'find', 0),
(595, 10, 'Rolls', 'find', 0),
(596, 11, 'Rolls', 'find', 0),
(597, 12, 'Rolls', 'find', 0),
(598, 1, 'Rolls', 'print_barcode', 0),
(599, 2, 'Rolls', 'print_barcode', 0),
(600, 3, 'Rolls', 'print_barcode', 0),
(601, 4, 'Rolls', 'print_barcode', 0),
(602, 5, 'Rolls', 'print_barcode', 1),
(603, 6, 'Rolls', 'print_barcode', 1),
(604, 7, 'Rolls', 'print_barcode', 1),
(605, 8, 'Rolls', 'print_barcode', 1),
(606, 9, 'Rolls', 'print_barcode', 1),
(607, 10, 'Rolls', 'print_barcode', 0),
(608, 11, 'Rolls', 'print_barcode', 0),
(609, 12, 'Rolls', 'print_barcode', 0),
(610, 1, 'Rolls', 'index', 0),
(611, 2, 'Rolls', 'index', 0),
(612, 3, 'Rolls', 'index', 0),
(613, 4, 'Rolls', 'index', 0),
(614, 5, 'Rolls', 'index', 1),
(615, 6, 'Rolls', 'index', 1),
(616, 7, 'Rolls', 'index', 1),
(617, 8, 'Rolls', 'index', 1),
(618, 9, 'Rolls', 'index', 0),
(619, 10, 'Rolls', 'index', 0),
(620, 11, 'Rolls', 'index', 0),
(621, 12, 'Rolls', 'index', 0),
(622, 1, 'Rolls', 'view', 0),
(623, 2, 'Rolls', 'view', 0),
(624, 3, 'Rolls', 'view', 0),
(625, 4, 'Rolls', 'view', 0),
(626, 5, 'Rolls', 'view', 1),
(627, 6, 'Rolls', 'view', 1),
(628, 7, 'Rolls', 'view', 1),
(629, 8, 'Rolls', 'view', 1),
(630, 9, 'Rolls', 'view', 0),
(631, 10, 'Rolls', 'view', 0),
(632, 11, 'Rolls', 'view', 0),
(633, 12, 'Rolls', 'view', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE IF NOT EXISTS `vendors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `capacity` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `title`, `address`, `capacity`) VALUES
(1, 'Vendor', 'nikunja Dhaka', '20'),
(2, '0', '0', '20'),
(3, '0', '0', '20'),
(4, '0', '0', '20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
