-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 13, 2018 at 10:40 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rwdkent`
--

-- --------------------------------------------------------

--
-- Table structure for table `craft_assetindexdata`
--

CREATE TABLE `craft_assetindexdata` (
  `id` int(11) NOT NULL,
  `sessionId` varchar(36) NOT NULL DEFAULT '',
  `volumeId` int(11) NOT NULL,
  `uri` text,
  `size` bigint(20) UNSIGNED DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `recordId` int(11) DEFAULT NULL,
  `inProgress` tinyint(1) DEFAULT '0',
  `completed` tinyint(1) DEFAULT '0',
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_assetindexdata`
--

INSERT INTO `craft_assetindexdata` (`id`, `sessionId`, `volumeId`, `uri`, `size`, `timestamp`, `recordId`, `inProgress`, `completed`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, '1f92f928-ce82-46fc-8de4-486648bcc028', 1, 'assignments.svg', 9265, '2018-08-06 19:43:53', 62, 0, 1, '2018-08-08 15:10:58', '2018-08-08 15:10:59', '2a5d94b9-edaf-404b-aab9-6571bab8b142'),
(2, '1f92f928-ce82-46fc-8de4-486648bcc028', 1, 'calendar.svg', 13189, '2018-08-06 19:43:54', 63, 0, 1, '2018-08-08 15:10:58', '2018-08-08 15:10:59', '07efdf66-67a8-48e5-a2f7-ab26f4f8ec5a'),
(3, '1f92f928-ce82-46fc-8de4-486648bcc028', 1, 'down-arrow.svg', 670, '2018-08-06 19:43:54', 64, 0, 1, '2018-08-08 15:10:58', '2018-08-08 15:10:59', 'e98eea56-fd02-4d65-91e6-969a568a6a1f'),
(4, '1f92f928-ce82-46fc-8de4-486648bcc028', 1, 'groups.svg', 14517, '2018-08-06 19:43:54', 65, 0, 1, '2018-08-08 15:10:58', '2018-08-08 15:10:59', '4a455bf5-99bc-4963-b247-e1f70d0c09ae'),
(5, '1f92f928-ce82-46fc-8de4-486648bcc028', 1, 'hallahan-headshot.jpg', 121669, '2018-08-07 16:38:15', 74, 0, 1, '2018-08-08 15:10:58', '2018-08-08 15:11:00', '7dd9b418-ea55-43d4-bdd6-6a3d27d88bcd'),
(6, '1f92f928-ce82-46fc-8de4-486648bcc028', 1, 'Kent-State-Logo-White.svg', 18364, '2018-08-06 18:51:49', 60, 0, 1, '2018-08-08 15:10:58', '2018-08-08 15:11:00', 'd947b6e2-27d8-455f-87a8-f28e90bba530'),
(7, '1f92f928-ce82-46fc-8de4-486648bcc028', 1, 'logo.png', 14929, '2018-08-06 15:22:30', 19, 0, 1, '2018-08-08 15:10:58', '2018-08-08 15:11:00', 'b75b2390-57df-4411-ab9b-5e29418b8c42'),
(8, '1f92f928-ce82-46fc-8de4-486648bcc028', 1, 'readme.md', 316, '2018-08-06 15:22:30', NULL, 0, 1, '2018-08-08 15:10:58', '2018-08-08 15:11:00', 'd49ea234-e23a-4b6f-b39f-3ce0d0a55a7b'),
(9, '1f92f928-ce82-46fc-8de4-486648bcc028', 1, 'shapes.svg', 3291, '2018-08-06 19:41:08', 61, 0, 1, '2018-08-08 15:10:58', '2018-08-08 15:11:00', '6fc6e63d-80dd-4b98-870d-730df615124e'),
(10, '1f92f928-ce82-46fc-8de4-486648bcc028', 1, 'syllabus.svg', 6468, '2018-08-06 19:43:55', 66, 0, 1, '2018-08-08 15:10:58', '2018-08-08 15:11:01', '8eaa71ed-cdaf-42f6-b539-1de9793683f2');

-- --------------------------------------------------------

--
-- Table structure for table `craft_assets`
--

CREATE TABLE `craft_assets` (
  `id` int(11) NOT NULL,
  `volumeId` int(11) DEFAULT NULL,
  `folderId` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `kind` varchar(50) NOT NULL DEFAULT 'unknown',
  `width` int(11) UNSIGNED DEFAULT NULL,
  `height` int(11) UNSIGNED DEFAULT NULL,
  `size` bigint(20) UNSIGNED DEFAULT NULL,
  `focalPoint` varchar(13) DEFAULT NULL,
  `dateModified` datetime DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_assets`
--

INSERT INTO `craft_assets` (`id`, `volumeId`, `folderId`, `filename`, `kind`, `width`, `height`, `size`, `focalPoint`, `dateModified`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(19, 1, 1, 'logo.png', 'image', 1000, 272, 14929, NULL, '2018-08-06 15:22:30', '2018-05-09 19:23:46', '2018-08-08 15:11:00', 'ff16b12f-550c-45dc-abcf-19face1a6723'),
(60, 1, 1, 'Kent-State-Logo-White.svg', 'image', 162, 48, 18364, NULL, '2018-08-06 18:51:49', '2018-08-06 18:51:49', '2018-08-08 15:11:00', '47940c9f-9e79-4864-b471-c2fd7c016a04'),
(61, 1, 1, 'shapes.svg', 'image', 1200, 265, 3291, NULL, '2018-08-06 19:41:08', '2018-08-06 19:41:08', '2018-08-08 15:11:00', '8c6374c4-4d8c-438d-ba4f-649c06d148ba'),
(62, 1, 1, 'assignments.svg', 'image', 119, 262, 9265, NULL, '2018-08-06 19:43:53', '2018-08-06 19:43:53', '2018-08-08 15:10:59', 'd54c72fe-5249-4458-bc4f-d7b3ae8f627a'),
(63, 1, 1, 'calendar.svg', 'image', 119, 262, 13189, NULL, '2018-08-06 19:43:54', '2018-08-06 19:43:54', '2018-08-08 15:10:59', '11073b4a-b937-49f4-838a-799213d1d7f2'),
(64, 1, 1, 'down-arrow.svg', 'image', 97, 71, 670, NULL, '2018-08-06 19:43:54', '2018-08-06 19:43:54', '2018-08-08 15:10:59', '8b13e3c2-47c5-46c0-a7d4-0d64ea923a3b'),
(65, 1, 1, 'groups.svg', 'image', 119, 262, 14517, NULL, '2018-08-06 19:43:54', '2018-08-06 19:43:54', '2018-08-08 15:10:59', 'ecaebf7f-c85f-43e2-b153-6444c6751a1e'),
(66, 1, 1, 'syllabus.svg', 'image', 119, 262, 6468, NULL, '2018-08-06 19:43:55', '2018-08-06 19:43:55', '2018-08-08 15:11:01', '80cb5897-fcc5-4cf7-9e91-9caa0510e97d'),
(74, 1, 1, 'hallahan-headshot.jpg', 'image', 700, 1050, 121669, NULL, '2018-08-07 16:38:15', '2018-08-07 16:38:15', '2018-08-08 15:11:00', 'b075ce5f-b99e-40e5-bbd6-15179149682f');

-- --------------------------------------------------------

--
-- Table structure for table `craft_assettransformindex`
--

CREATE TABLE `craft_assettransformindex` (
  `id` int(11) NOT NULL,
  `assetId` int(11) NOT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `format` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `volumeId` int(11) DEFAULT NULL,
  `fileExists` tinyint(1) NOT NULL DEFAULT '0',
  `inProgress` tinyint(1) NOT NULL DEFAULT '0',
  `dateIndexed` datetime DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_assettransforms`
--

CREATE TABLE `craft_assettransforms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `handle` varchar(255) NOT NULL,
  `mode` enum('stretch','fit','crop') NOT NULL DEFAULT 'crop',
  `position` enum('top-left','top-center','top-right','center-left','center-center','center-right','bottom-left','bottom-center','bottom-right') NOT NULL DEFAULT 'center-center',
  `width` int(11) UNSIGNED DEFAULT NULL,
  `height` int(11) UNSIGNED DEFAULT NULL,
  `format` varchar(255) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `interlace` enum('none','line','plane','partition') NOT NULL DEFAULT 'none',
  `dimensionChangeTime` datetime DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_categories`
--

CREATE TABLE `craft_categories` (
  `id` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_categories`
--

INSERT INTO `craft_categories` (`id`, `groupId`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(26, 4, '2018-07-19 17:43:54', '2018-07-19 17:43:54', '99af4370-6690-42c3-a88a-c089fba78441'),
(27, 4, '2018-07-19 17:44:07', '2018-07-19 17:44:07', 'b3eb62ae-5adc-4297-832b-a69e94248f37'),
(28, 4, '2018-07-19 17:44:29', '2018-07-19 17:44:29', '4ad61f0b-1dea-426b-8047-4d9f8904d6a1'),
(29, 4, '2018-07-19 17:44:42', '2018-07-19 17:44:42', '91c3c621-95e7-46c1-b89d-789ec60c2c8a'),
(30, 1, '2018-07-19 17:45:12', '2018-07-19 17:45:12', '4c87bb95-d92b-4fdb-8bec-858821042a47'),
(31, 1, '2018-07-19 17:45:22', '2018-07-19 17:45:22', '927ccd17-df82-45d9-b85b-eb52f08942be'),
(32, 2, '2018-07-19 17:45:41', '2018-07-19 17:45:41', 'd370a6d8-1220-43ff-8840-ac88a0f4dff2');

-- --------------------------------------------------------

--
-- Table structure for table `craft_categorygroups`
--

CREATE TABLE `craft_categorygroups` (
  `id` int(11) NOT NULL,
  `structureId` int(11) NOT NULL,
  `fieldLayoutId` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `handle` varchar(255) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_categorygroups`
--

INSERT INTO `craft_categorygroups` (`id`, `structureId`, `fieldLayoutId`, `name`, `handle`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 1, 19, 'Course Type', 'courseType', '2018-07-19 17:41:24', '2018-07-19 17:42:43', 'a61234b6-3328-4609-b6b2-ee4707072544'),
(2, 2, 20, 'Locations', 'locations', '2018-07-19 17:43:06', '2018-07-19 17:43:06', 'b033c29a-3e38-42ec-a50c-703c20bd3344'),
(3, 3, 21, 'Terms', 'terms', '2018-07-19 17:43:15', '2018-07-19 17:43:15', '989e5e39-24a1-48a6-82fc-4a7318248974'),
(4, 4, 22, 'Assignment Type', 'assignmentType', '2018-07-19 17:43:26', '2018-07-19 17:43:26', '395bc11c-eb57-4fc9-b42e-5c3839833421');

-- --------------------------------------------------------

--
-- Table structure for table `craft_categorygroups_sites`
--

CREATE TABLE `craft_categorygroups_sites` (
  `id` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `siteId` int(11) NOT NULL,
  `hasUrls` tinyint(1) NOT NULL DEFAULT '1',
  `uriFormat` text,
  `template` varchar(500) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_categorygroups_sites`
--

INSERT INTO `craft_categorygroups_sites` (`id`, `groupId`, `siteId`, `hasUrls`, `uriFormat`, `template`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 1, 1, 1, 'course-type/{slug}', 'course-type/_category', '2018-07-19 17:41:24', '2018-07-19 17:42:43', '0349272a-4051-43f8-bedd-5674dfe244ce'),
(2, 2, 1, 1, 'locations/{slug}', 'locations/_category', '2018-07-19 17:43:06', '2018-07-19 17:43:06', '6bf4b1dd-9f8f-4c56-967e-b58fe2546622'),
(3, 3, 1, 1, 'terms/{slug}', 'terms/_category', '2018-07-19 17:43:15', '2018-07-19 17:43:15', '6efe2e65-c24b-4901-aef0-8ad8b39b7b19'),
(4, 4, 1, 1, 'assignment-type/{slug}', 'assignment-type/_category', '2018-07-19 17:43:26', '2018-07-19 17:43:26', 'f136a40b-82b3-4f30-b405-8c5d2bbf941f');

-- --------------------------------------------------------

--
-- Table structure for table `craft_content`
--

CREATE TABLE `craft_content` (
  `id` int(11) NOT NULL,
  `elementId` int(11) NOT NULL,
  `siteId` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0',
  `field_heading` text,
  `field_subheading` text,
  `field_personName` text,
  `field_body` text,
  `field_instructors` text,
  `field_terms` text,
  `field_undergrad` text,
  `field_grad` text,
  `field_dayTime` text,
  `field_room` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_content`
--

INSERT INTO `craft_content` (`id`, `elementId`, `siteId`, `title`, `dateCreated`, `dateUpdated`, `uid`, `field_heading`, `field_subheading`, `field_personName`, `field_body`, `field_instructors`, `field_terms`, `field_undergrad`, `field_grad`, `field_dayTime`, `field_room`) VALUES
(1, 1, 1, NULL, '2018-05-02 20:31:26', '2018-05-02 20:31:26', 'd570f867-dd68-4f6b-92b7-f9c8ad96ec9b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 1, 'Homepage', '2018-05-02 20:42:28', '2018-08-07 16:24:38', '116d8c53-f4f7-45d6-a016-8bae0396ed04', 'Responsive Web Design', 'Classes & Workshops', NULL, '<p class=\"introduction-home introduction\">In Kent State University\'s Responsive Web Design <a href=\"class/\">basic class</a>, RWD <a href=\"advanced/\">advanced class</a> and RWD <a href=\"/workshop\">professional workshop</a>, students from the College of Communication and Information and other colleges learn the process of creating responsive websites with HTML and CSS, from sketching and prototyping to usability testing and content strategy.</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 12, 1, NULL, '2018-05-07 20:19:03', '2018-08-07 19:28:14', '1c95dca9-3b88-4dcd-b35b-92d8cb6d384a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 13, 1, NULL, '2018-05-07 20:19:06', '2018-08-07 20:27:53', 'fb58221a-0b49-43d3-ba3c-09da76b8e7c8', NULL, NULL, NULL, '<p><a href=\"http://www.kent.edu/cci\">College of Communication &amp; Information</a></p>\n<p><a href=\"http://www.ideabasekent.com\">IdeaBase: Powered by Kent State Students</a></p>', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 19, 1, 'Logo', '2018-05-09 19:23:45', '2018-08-08 15:11:00', '0adb87ad-2c3d-45bf-af34-e251cc4abd43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 26, 1, 'CodePen', '2018-07-19 17:43:54', '2018-07-19 17:43:54', 'df7713b9-923b-44d9-b871-2764835a657c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 27, 1, 'Project', '2018-07-19 17:44:07', '2018-07-19 17:44:07', '15d5b313-c783-4f9a-9a2e-b1f99d9f51ef', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 28, 1, 'In-Class Assignments', '2018-07-19 17:44:29', '2018-07-19 17:44:29', '9acf03a7-c4ae-4006-b1d1-8e15c7cf24ff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 29, 1, 'In-Class Quizzes', '2018-07-19 17:44:42', '2018-07-19 17:44:42', 'f3371641-c457-4f89-a432-226d58c4f2d9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 30, 1, 'Basic Class', '2018-07-19 17:45:12', '2018-07-19 17:45:12', 'cdb1109f-5be0-4870-8916-1761477ff5e8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 31, 1, 'Advanced Class', '2018-07-19 17:45:22', '2018-07-19 17:45:22', '1997b60c-25f7-4607-9588-55f841442174', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 32, 1, 'IdeaBase', '2018-07-19 17:45:41', '2018-07-19 17:45:41', '8009e57b-85d1-4e84-b16f-c698ce03759e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 60, 1, 'Kent State Logo White', '2018-08-06 18:51:49', '2018-08-08 15:11:00', 'c65cd87c-ef4b-47ed-8039-5c0c679c144b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 61, 1, 'Shapes', '2018-08-06 19:41:08', '2018-08-08 15:11:00', 'dc0125c2-eebf-409f-8c0b-992fab9f5eb9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 62, 1, 'Assignments', '2018-08-06 19:43:53', '2018-08-08 15:10:59', 'e04cf366-111f-461a-b679-151f40ac7b00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 63, 1, 'Calendar', '2018-08-06 19:43:54', '2018-08-08 15:10:59', '00f76ffc-dae4-44bb-beec-28c7c1e23745', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 64, 1, 'Down Arrow', '2018-08-06 19:43:54', '2018-08-08 15:10:59', '85c45ba4-9dbc-4b90-9bae-62b7713f6119', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 65, 1, 'Groups', '2018-08-06 19:43:54', '2018-08-08 15:10:59', '0ea9e12f-fa9c-4f0f-9254-346e3c4d4c07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 66, 1, 'Syllabus', '2018-08-06 19:43:55', '2018-08-08 15:11:01', '610f9dc3-f95f-4ff7-b1c7-209d5d2692a0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 69, 1, 'About', '2018-08-07 15:54:41', '2018-08-07 20:25:56', 'ac5d1038-d93b-4735-8004-d0afb8f69d15', NULL, NULL, NULL, '<p class=\"section-introduction\">In 2010, Ethan Marcotte published his famous article on A List Apart called <a href=\"http://alistapart.com/article/responsive-web-design\">Responsive Web Design</a>. The article was quickly followed by the <a href=\"http://abookapart.com/products/responsive-web-design\">Responsive Web Design Book</a>, published by A Book Apart in 2011. In this book, Marcotte popularized the idea of using flexible grids and CSS media queries to build a single website that scales across mobile phones, tablets, desktop computers, televisions and everything in between.</p>\n<p>Since then, Responsive Web Design has become not just a technical solution for web design - it’s an entire process that brings multiple disciplines together to form one product that works across multiple devices. The responsive design process includes user experience, content strategy, information architecture, visual design, HTML/CSS/JavaScript development, usability testing and technical testing.</p>\n<h2>RWD at Kent State</h2>\n<p>Kent State University\'s Responsive Web Design classes were designed with the goal of bringing together students from multiple disciplines from within the <a href=\"http://www.kent.edu/cci\">College of Communication and Information</a> and giving them the skills they need to work with and become web designers. The classes are hands-on and encourage active learning. The class is constantly evolving, always integrating the latest advancements in design, development and user experience design.</p>\n<p>I\'m making this information public with the hope that others will find it helpful when creating similar programs at their educational institutions.</p>\n<h2>About the Instructor: Christopher Hallahan</h2>\n<p>I work full time for Kent State\'s <a href=\"http://www.kent.edu/cci\">College of Communication &amp; Information (CCI)</a> as a User Experience Designer at the college and <a href=\"http://www.ideabasekent.com\">IdeaBase</a>, a collaborative, student-run agency located in Downtown Kent, where we conduct research, design and development work for real-world clients, both inside and outside the university.</p>\n<p>My degrees are both from Kent State University - a bachelor\'s degree (2008) in Electronic Media (School of Journalism and Mass Communication) and master\'s degree (2010) in User Experience Design (School of Library &amp; Information Science).</p>\n<p>You can learn more about me at my personal website, <a href=\"http://www.chrishallahan.com\">www.chrishallahan.com</a>.</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 74, 1, 'Hallahan Headshot', '2018-08-07 16:38:15', '2018-08-08 15:11:00', 'd6e2394d-85aa-4a56-b2e5-756917037d43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 88, 1, NULL, '2018-08-07 20:14:32', '2018-08-07 20:25:36', 'd7504569-ca7e-4d89-823a-edf754cdefc8', NULL, NULL, 'Christopher Hallahan', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 92, 1, 'Basic Class Homepage', '2018-08-08 15:56:15', '2018-08-08 20:29:10', '37304ec0-c9f8-4583-905b-29aea913d630', NULL, NULL, NULL, '<p>In Kent State University\'s basic Responsive Web Design course, you will learn the fundamental principles for developing standards-based web sites from a mobile-first and content-first perspective and ensure its functionality for users in terms of both usability and performance.</p>', 'Christopher Hallahan and David Roll', 'Fall 2018 (2 Sections)', 'CCI 46001-001/002 - 11708/21459 (F-2018)', 'CCI 56001-001/002 - 11709/21460 (F-2018)', 'Tuesdays, 5:30 p.m. - 8:15 p.m. or Tuesday/Thursday, 11 a.m. - 12:25 p.m.', '<a href=\"http://www.ideabasekent.com/directions\">IdeaBase</a>, Downtown Kent or Taylor Hall, 331'),
(53, 93, 1, 'Basic Class Syllabus', '2018-08-08 16:42:13', '2018-08-08 16:57:08', '5ead87bf-14d2-4a83-9b96-79ad7f896a4d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `craft_craftidtokens`
--

CREATE TABLE `craft_craftidtokens` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `accessToken` text NOT NULL,
  `expiryDate` datetime DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_deprecationerrors`
--

CREATE TABLE `craft_deprecationerrors` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `fingerprint` varchar(255) NOT NULL,
  `lastOccurrence` datetime NOT NULL,
  `file` varchar(255) NOT NULL,
  `line` smallint(6) UNSIGNED DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `traces` text,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_elementindexsettings`
--

CREATE TABLE `craft_elementindexsettings` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `settings` text,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_elementindexsettings`
--

INSERT INTO `craft_elementindexsettings` (`id`, `type`, `settings`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 'craft\\elements\\Entry', '{\"sources\":{\"singles\":{\"tableAttributes\":{\"1\":\"link\"}},\"*\":{\"tableAttributes\":{\"1\":\"section\",\"2\":\"postDate\",\"3\":\"expiryDate\",\"4\":\"link\"}},\"section:5\":{\"tableAttributes\":{\"1\":\"postDate\",\"2\":\"expiryDate\",\"3\":\"link\"}},\"section:9\":{\"tableAttributes\":{\"1\":\"postDate\",\"2\":\"expiryDate\",\"3\":\"link\"}},\"section:20\":{\"tableAttributes\":{\"1\":\"postDate\",\"2\":\"expiryDate\",\"3\":\"link\"}}}}', '2018-07-25 19:13:26', '2018-07-25 19:13:26', 'd4008175-b062-4152-902b-577a64c17c24');

-- --------------------------------------------------------

--
-- Table structure for table `craft_elements`
--

CREATE TABLE `craft_elements` (
  `id` int(11) NOT NULL,
  `fieldLayoutId` int(11) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `archived` tinyint(1) NOT NULL DEFAULT '0',
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_elements`
--

INSERT INTO `craft_elements` (`id`, `fieldLayoutId`, `type`, `enabled`, `archived`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, NULL, 'craft\\elements\\User', 1, 0, '2018-05-02 20:31:26', '2018-05-02 20:31:26', '89f45b03-5cb5-4ffb-b8ff-9762a1d787ea'),
(2, 1, 'craft\\elements\\Entry', 1, 0, '2018-05-02 20:42:28', '2018-08-07 16:24:38', '2f926fa0-3b77-4b8d-8a23-03a5069d3ef3'),
(12, 11, 'craft\\elements\\GlobalSet', 1, 0, '2018-05-07 20:19:03', '2018-08-07 19:28:14', 'c2246d3f-7d05-4a74-9996-ddd0cfef84b7'),
(13, 12, 'craft\\elements\\GlobalSet', 1, 0, '2018-05-07 20:19:06', '2018-08-07 20:27:53', '68fe8888-5195-4685-9e90-131f2a5ba43e'),
(19, 9, 'craft\\elements\\Asset', 1, 0, '2018-05-09 19:23:45', '2018-08-08 15:11:00', '52aabfd4-1230-4b38-9c8d-125a4bcb463f'),
(26, 22, 'craft\\elements\\Category', 1, 0, '2018-07-19 17:43:54', '2018-07-19 17:43:54', '480ddb6f-455c-4998-b7b4-34de3a28adb1'),
(27, 22, 'craft\\elements\\Category', 1, 0, '2018-07-19 17:44:07', '2018-07-19 17:44:07', '8e20a045-9a72-4d0d-8c19-13de3bafdd6b'),
(28, 22, 'craft\\elements\\Category', 1, 0, '2018-07-19 17:44:29', '2018-07-19 17:44:29', 'ac922371-e53f-4b22-880f-69e65164d0a2'),
(29, 22, 'craft\\elements\\Category', 1, 0, '2018-07-19 17:44:42', '2018-07-19 17:44:42', 'ca7c4872-9606-44a8-ac66-60111045d413'),
(30, 19, 'craft\\elements\\Category', 1, 0, '2018-07-19 17:45:12', '2018-07-19 17:45:12', 'db8968dd-98ac-4751-939c-b49434234d1b'),
(31, 19, 'craft\\elements\\Category', 1, 0, '2018-07-19 17:45:22', '2018-07-19 17:45:22', 'aaac2c3d-15c2-4ec0-90ec-ca27c3cf6e81'),
(32, 20, 'craft\\elements\\Category', 1, 0, '2018-07-19 17:45:41', '2018-07-19 17:45:41', '6016e244-c558-4eca-bb34-0af73bb1af65'),
(34, NULL, 'craft\\elements\\MatrixBlock', 1, 0, '2018-07-19 19:46:48', '2018-07-24 18:39:15', '2709d39c-f7c1-46b9-97ce-a693430ca8f8'),
(36, NULL, 'craft\\elements\\MatrixBlock', 1, 0, '2018-07-19 20:09:19', '2018-07-24 14:51:50', '66aa0bfc-52df-4e1c-8926-26fdfce0aace'),
(37, NULL, 'craft\\elements\\MatrixBlock', 1, 0, '2018-07-19 20:13:34', '2018-07-24 18:39:15', '0a91372a-4727-4262-9972-6669787c3b22'),
(39, NULL, 'craft\\elements\\MatrixBlock', 1, 0, '2018-07-24 15:11:18', '2018-07-24 18:39:15', 'a93bace4-51f5-432b-bae2-dd906b414bbb'),
(41, NULL, 'craft\\elements\\MatrixBlock', 1, 0, '2018-07-24 15:29:16', '2018-07-24 18:39:15', '05e5dbc9-dbed-40e3-b92f-0bada0f53dea'),
(43, NULL, 'craft\\elements\\MatrixBlock', 1, 0, '2018-07-24 16:21:16', '2018-07-24 18:39:31', '695a5476-c678-4ce7-be12-a0da27126e39'),
(45, NULL, 'craft\\elements\\MatrixBlock', 1, 0, '2018-07-24 16:26:27', '2018-07-24 18:39:31', '7285adce-66f8-43ba-992d-195e5ba4cb4d'),
(48, NULL, 'craft\\elements\\MatrixBlock', 1, 0, '2018-07-24 16:31:34', '2018-07-24 18:39:31', '66603d75-5401-44de-992b-4a5b26bd5ebe'),
(49, NULL, 'craft\\elements\\MatrixBlock', 1, 0, '2018-07-24 16:31:34', '2018-07-24 18:39:31', '7a1ef8c6-924b-4a09-b0fb-aa57928f32d1'),
(60, 9, 'craft\\elements\\Asset', 1, 0, '2018-08-06 18:51:49', '2018-08-08 15:11:00', '0eadcebf-dcab-4cb4-861a-a3c7ac2f0fc9'),
(61, 9, 'craft\\elements\\Asset', 1, 0, '2018-08-06 19:41:08', '2018-08-08 15:11:00', 'b50cfd8f-9803-4abe-aa8c-ccf1f1d922a0'),
(62, 9, 'craft\\elements\\Asset', 1, 0, '2018-08-06 19:43:53', '2018-08-08 15:10:59', '9b988427-01cd-4a41-94b5-b86f75847d56'),
(63, 9, 'craft\\elements\\Asset', 1, 0, '2018-08-06 19:43:54', '2018-08-08 15:10:59', 'c8a7b797-3255-4bb1-9571-918f540ad60b'),
(64, 9, 'craft\\elements\\Asset', 1, 0, '2018-08-06 19:43:54', '2018-08-08 15:10:59', '2118635a-d624-4b6d-b551-c00b2fd5f992'),
(65, 9, 'craft\\elements\\Asset', 1, 0, '2018-08-06 19:43:54', '2018-08-08 15:10:59', 'c6ad9943-2fe4-4431-883e-51f5d6945b40'),
(66, 9, 'craft\\elements\\Asset', 1, 0, '2018-08-06 19:43:55', '2018-08-08 15:11:01', 'a3135bed-fa21-4fb5-bf5e-97ac414aff4c'),
(67, 40, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-07 15:40:00', '2018-08-07 16:24:38', '9ee31db2-09ca-46e3-ad54-dbe8a7e82be0'),
(69, 42, 'craft\\elements\\Entry', 1, 0, '2018-08-07 15:54:41', '2018-08-07 20:25:56', '0cc66e08-f87a-4082-a461-746499fefe4a'),
(70, 43, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-07 16:01:46', '2018-08-07 16:02:40', '6bb0a9fc-b99f-4004-994e-f3e0cffc2dbd'),
(74, 9, 'craft\\elements\\Asset', 1, 0, '2018-08-07 16:38:15', '2018-08-08 15:11:00', '4cc52630-dda6-44db-931c-da43428ae757'),
(75, 45, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-07 17:05:01', '2018-08-07 20:25:56', 'a0bf94a0-0bbb-4b2e-a619-e71e31e519d8'),
(76, 44, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-07 18:06:16', '2018-08-07 18:42:03', '8974ab80-4649-413a-9b9c-bd10d2187343'),
(78, 46, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-07 18:15:01', '2018-08-07 18:42:03', '4491d695-ccd0-4a05-8871-b38c043a47b0'),
(80, 47, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-07 18:15:01', '2018-08-07 18:42:03', 'fb1df26c-17f3-462f-b314-cb52325ca28d'),
(81, 49, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-07 19:16:55', '2018-08-07 19:28:14', 'cde680a9-8e25-47c1-8db2-bc45168cc2bb'),
(82, 49, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-07 19:16:55', '2018-08-07 19:28:14', 'ff911f7b-c13c-44a8-a2ac-c3ac55c604c7'),
(83, 49, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-07 19:16:55', '2018-08-07 19:28:14', '5f82ed2b-b06f-4078-abc3-2ca912066400'),
(84, 50, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-07 19:28:14', '2018-08-07 19:28:14', 'c3bd9a88-e59c-4f9c-971a-ca2628ca1aa2'),
(85, 45, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-07 19:35:29', '2018-08-07 20:27:53', 'feb2d6d7-4204-4b46-9db2-c5e89bff5bf9'),
(86, 40, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-07 19:50:33', '2018-08-07 20:27:53', '2fab2b83-fff6-4521-a32b-cb715ed6e26a'),
(87, 40, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-07 19:50:33', '2018-08-07 20:27:53', 'b380bed3-368c-44bc-b4e5-77a57d718d0e'),
(88, 51, 'craft\\elements\\GlobalSet', 1, 0, '2018-08-07 20:14:32', '2018-08-07 20:25:36', 'aafcd043-d410-4aff-887c-34244c96452d'),
(89, 44, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-07 20:24:39', '2018-08-07 20:25:36', 'dc83b8df-095c-4213-ba6a-c26895d0c5fe'),
(90, 46, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-07 20:24:39', '2018-08-07 20:25:36', 'e95cc3bc-2d56-4735-aa8b-bbc5c4e7fbb6'),
(91, 47, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-07 20:24:40', '2018-08-07 20:25:36', '4024ed22-5e44-4ab1-b8d9-61c4ab73347d'),
(92, 52, 'craft\\elements\\Entry', 1, 0, '2018-08-08 15:56:15', '2018-08-08 20:29:10', '06f456f3-cf09-4485-9fdf-08dc887d19a1'),
(93, 53, 'craft\\elements\\Entry', 1, 0, '2018-08-08 16:42:13', '2018-08-08 16:57:08', '011807f4-48b3-4d86-8df4-12a9dc67e027'),
(94, 54, 'craft\\elements\\MatrixBlock', 1, 0, '2018-08-08 20:29:10', '2018-08-08 20:29:10', '6f179f06-1bee-45a3-9108-cf3da17e884b');

-- --------------------------------------------------------

--
-- Table structure for table `craft_elements_sites`
--

CREATE TABLE `craft_elements_sites` (
  `id` int(11) NOT NULL,
  `elementId` int(11) NOT NULL,
  `siteId` int(11) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `uri` varchar(255) DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_elements_sites`
--

INSERT INTO `craft_elements_sites` (`id`, `elementId`, `siteId`, `slug`, `uri`, `enabled`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 1, 1, NULL, NULL, 1, '2018-05-02 20:31:26', '2018-05-02 20:31:26', '93590951-48e8-403b-8852-90af058d53cb'),
(2, 2, 1, 'home-page', '__home__', 1, '2018-05-02 20:42:28', '2018-08-07 16:24:38', '9e5fe65f-cc68-4244-8a18-4a4d503c6aa1'),
(12, 12, 1, NULL, NULL, 1, '2018-05-07 20:19:03', '2018-08-07 19:28:14', 'b64d491c-83e3-4636-b8ae-b40b8678587c'),
(13, 13, 1, NULL, NULL, 1, '2018-05-07 20:19:06', '2018-08-07 20:27:53', 'bdefe40e-5c38-45df-ab54-1e3bc00cb202'),
(19, 19, 1, NULL, NULL, 1, '2018-05-09 19:23:45', '2018-08-08 15:11:00', '9896cb1a-ae8e-416d-b355-e84ae2f87401'),
(26, 26, 1, 'codepen', 'assignment-type/codepen', 1, '2018-07-19 17:43:54', '2018-07-19 17:43:55', '0a22da4f-2e9a-4d7f-be82-4f4c22c31e4c'),
(27, 27, 1, 'project', 'assignment-type/project', 1, '2018-07-19 17:44:07', '2018-07-19 17:44:09', '9e97c944-4af7-400b-97c4-628726dfa31d'),
(28, 28, 1, 'in-class-assignments', 'assignment-type/in-class-assignments', 1, '2018-07-19 17:44:29', '2018-07-19 17:44:30', '76d5d4bb-603e-460b-91a9-39e9e5b3dae1'),
(29, 29, 1, 'in-class-quizzes', 'assignment-type/in-class-quizzes', 1, '2018-07-19 17:44:42', '2018-07-19 17:44:44', '16c271cc-2d6a-401c-a726-c40dc627e458'),
(30, 30, 1, 'basic-class', 'course-type/basic-class', 1, '2018-07-19 17:45:12', '2018-07-19 17:45:14', 'f4cafeef-9b9b-487f-8d31-f6f3f850317b'),
(31, 31, 1, 'advanced-class', 'course-type/advanced-class', 1, '2018-07-19 17:45:22', '2018-07-19 17:45:24', '3cbdfec7-d3fc-42ac-8d92-fa7a8e73a3cd'),
(32, 32, 1, 'ideabase', 'locations/ideabase', 1, '2018-07-19 17:45:41', '2018-07-19 17:45:42', '1f946b01-7a03-4dc2-8d63-513f999d907a'),
(34, 34, 1, NULL, NULL, 1, '2018-07-19 19:46:48', '2018-07-24 18:39:15', '222785bb-1684-4e24-b3c5-3a69c712b1c5'),
(36, 36, 1, NULL, NULL, 1, '2018-07-19 20:09:19', '2018-07-24 14:51:50', 'd004d9e9-99a3-4e20-8cd7-5b9f664e9e09'),
(37, 37, 1, NULL, NULL, 1, '2018-07-19 20:13:34', '2018-07-24 18:39:15', '2a79afcc-0cc9-4744-badf-7593b1ad0fde'),
(39, 39, 1, NULL, NULL, 1, '2018-07-24 15:11:18', '2018-07-24 18:39:15', '585e0693-4cf6-4998-82ea-3d3391386b36'),
(41, 41, 1, NULL, NULL, 1, '2018-07-24 15:29:16', '2018-07-24 18:39:15', 'b47dc174-b856-4f68-9836-02a0b6b9ad02'),
(43, 43, 1, NULL, NULL, 1, '2018-07-24 16:21:16', '2018-07-24 18:39:31', '295fba98-1137-42bc-934e-76e1c090dfa5'),
(45, 45, 1, NULL, NULL, 1, '2018-07-24 16:26:27', '2018-07-24 18:39:31', '3f2eb5a2-8cd7-427b-b4a7-4d83710208cc'),
(48, 48, 1, NULL, NULL, 1, '2018-07-24 16:31:34', '2018-07-24 18:39:31', '5b4e10d6-83c4-479d-b1c4-1a0555ef9634'),
(49, 49, 1, NULL, NULL, 1, '2018-07-24 16:31:34', '2018-07-24 18:39:31', '7dd10e14-015e-4baa-9654-6c4febf984dc'),
(60, 60, 1, NULL, NULL, 1, '2018-08-06 18:51:49', '2018-08-08 15:11:00', 'b6160fdf-5d13-40fb-b9c5-b922571ecc95'),
(61, 61, 1, NULL, NULL, 1, '2018-08-06 19:41:08', '2018-08-08 15:11:00', '83c3e0f0-8520-41e6-b908-b8465e534886'),
(62, 62, 1, NULL, NULL, 1, '2018-08-06 19:43:53', '2018-08-08 15:10:59', '91189eec-1382-4def-8fa4-ff3afadd2234'),
(63, 63, 1, NULL, NULL, 1, '2018-08-06 19:43:54', '2018-08-08 15:10:59', '985af1e2-f481-4cdc-af3a-33019da6888a'),
(64, 64, 1, NULL, NULL, 1, '2018-08-06 19:43:54', '2018-08-08 15:10:59', 'd7c6d340-eeff-4ed5-8639-e912511f5af0'),
(65, 65, 1, NULL, NULL, 1, '2018-08-06 19:43:54', '2018-08-08 15:10:59', '942fa5ba-000b-4ecd-b734-e52ea1e4b56b'),
(66, 66, 1, NULL, NULL, 1, '2018-08-06 19:43:55', '2018-08-08 15:11:01', '0cc507e6-79a7-4d8d-8a30-249bc6377ae1'),
(67, 67, 1, NULL, NULL, 1, '2018-08-07 15:40:00', '2018-08-07 16:24:38', '0e1a56db-19b7-42bf-8905-b59d29da9d04'),
(69, 69, 1, 'about', 'about', 1, '2018-08-07 15:54:41', '2018-08-07 20:25:56', '46055e35-ba80-4e7f-86e6-632b8cc54a67'),
(70, 70, 1, NULL, NULL, 1, '2018-08-07 16:01:46', '2018-08-07 16:02:40', 'd3768515-bf9c-446a-9841-be658d44698a'),
(74, 74, 1, NULL, NULL, 1, '2018-08-07 16:38:15', '2018-08-08 15:11:00', '58cf4954-08c7-4cb9-9559-e647b943b1b8'),
(75, 75, 1, NULL, NULL, 1, '2018-08-07 17:05:01', '2018-08-07 20:25:56', '920dba1e-6f1a-47b1-906b-8800672978bc'),
(76, 76, 1, NULL, NULL, 1, '2018-08-07 18:06:16', '2018-08-07 18:42:03', '58e0a65a-15f1-441f-b993-1d1a38075947'),
(78, 78, 1, NULL, NULL, 1, '2018-08-07 18:15:01', '2018-08-07 18:42:03', 'e84cfcab-2521-470a-8683-7dd306e80abd'),
(80, 80, 1, NULL, NULL, 1, '2018-08-07 18:15:01', '2018-08-07 18:42:03', '0e070928-5450-4beb-a9eb-4ca68912e01e'),
(81, 81, 1, NULL, NULL, 1, '2018-08-07 19:16:55', '2018-08-07 19:28:14', '347107bb-6563-4e11-acf1-c00222514750'),
(82, 82, 1, NULL, NULL, 1, '2018-08-07 19:16:55', '2018-08-07 19:28:14', '697b6c6e-6e90-4e37-bd6b-4ddbf6dfa80b'),
(83, 83, 1, NULL, NULL, 1, '2018-08-07 19:16:55', '2018-08-07 19:28:14', 'b389f5ef-5ad6-4d87-b84a-e02a9452978d'),
(84, 84, 1, NULL, NULL, 1, '2018-08-07 19:28:14', '2018-08-07 19:28:14', '100bef0f-969d-4a8a-a3cf-86c6fd88670c'),
(85, 85, 1, NULL, NULL, 1, '2018-08-07 19:35:29', '2018-08-07 20:27:53', '0ad160aa-7725-45e8-b2ad-8060a6e98b6a'),
(86, 86, 1, NULL, NULL, 1, '2018-08-07 19:50:33', '2018-08-07 20:27:53', '4b0ed4aa-0bc9-45f4-9f78-2493baca7dbb'),
(87, 87, 1, NULL, NULL, 1, '2018-08-07 19:50:33', '2018-08-07 20:27:53', '1b285128-4f37-4cb5-86d3-f0fc84436c0d'),
(88, 88, 1, NULL, NULL, 1, '2018-08-07 20:14:32', '2018-08-07 20:25:36', '5673d54c-582f-4ad8-b4b9-ad970d82576e'),
(89, 89, 1, NULL, NULL, 1, '2018-08-07 20:24:39', '2018-08-07 20:25:36', '4d73a59e-48ec-4e26-b1ae-500ea20c4c01'),
(90, 90, 1, NULL, NULL, 1, '2018-08-07 20:24:39', '2018-08-07 20:25:36', 'e3179e26-3934-4c44-a593-8d4b479aa341'),
(91, 91, 1, NULL, NULL, 1, '2018-08-07 20:24:40', '2018-08-07 20:25:36', 'd69a39a0-750f-447b-8e42-6519a6ec919f'),
(92, 92, 1, 'basic-class-homepage', 'class', 1, '2018-08-08 15:56:15', '2018-08-08 20:29:10', 'a1fc74c6-47e1-484d-88d9-1ae3b0cbeed4'),
(93, 93, 1, 'syllabus', 'class/syllabus', 1, '2018-08-08 16:42:13', '2018-08-08 16:57:08', '02722ea8-23e3-4ce5-b42c-2060c73bf0e8'),
(94, 94, 1, NULL, NULL, 1, '2018-08-08 20:29:10', '2018-08-08 20:29:10', 'a4ba48d4-65ee-447c-9211-2c9897e6d8e0');

-- --------------------------------------------------------

--
-- Table structure for table `craft_entries`
--

CREATE TABLE `craft_entries` (
  `id` int(11) NOT NULL,
  `sectionId` int(11) NOT NULL,
  `typeId` int(11) NOT NULL,
  `authorId` int(11) DEFAULT NULL,
  `postDate` datetime DEFAULT NULL,
  `expiryDate` datetime DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_entries`
--

INSERT INTO `craft_entries` (`id`, `sectionId`, `typeId`, `authorId`, `postDate`, `expiryDate`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(2, 1, 1, NULL, '2018-05-02 20:42:28', NULL, '2018-05-02 20:42:28', '2018-08-07 16:24:38', 'ae7775af-d769-4fcb-b46e-df2a77ac1c7e'),
(69, 22, 22, NULL, '2018-08-07 15:54:00', NULL, '2018-08-07 15:54:41', '2018-08-07 20:25:56', '4fc150ec-f764-4e7c-a9e5-11db2f50b43d'),
(92, 24, 24, NULL, '2018-08-08 15:56:00', NULL, '2018-08-08 15:56:15', '2018-08-08 20:29:10', 'b0ad09c8-f594-4bb2-a6b8-1eb2bea50e08'),
(93, 25, 25, NULL, '2018-08-08 16:42:00', NULL, '2018-08-08 16:42:13', '2018-08-08 16:57:08', 'ffa305fa-2333-445c-9287-c5d055ce48dd');

-- --------------------------------------------------------

--
-- Table structure for table `craft_entrydrafts`
--

CREATE TABLE `craft_entrydrafts` (
  `id` int(11) NOT NULL,
  `entryId` int(11) NOT NULL,
  `sectionId` int(11) NOT NULL,
  `creatorId` int(11) NOT NULL,
  `siteId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `notes` text,
  `data` mediumtext NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_entrytypes`
--

CREATE TABLE `craft_entrytypes` (
  `id` int(11) NOT NULL,
  `sectionId` int(11) NOT NULL,
  `fieldLayoutId` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `handle` varchar(255) NOT NULL,
  `hasTitleField` tinyint(1) NOT NULL DEFAULT '1',
  `titleLabel` varchar(255) DEFAULT 'Title',
  `titleFormat` varchar(255) DEFAULT NULL,
  `sortOrder` smallint(6) UNSIGNED DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_entrytypes`
--

INSERT INTO `craft_entrytypes` (`id`, `sectionId`, `fieldLayoutId`, `name`, `handle`, `hasTitleField`, `titleLabel`, `titleFormat`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 1, 1, 'Homepage', 'home', 0, NULL, '{section.name|raw}', 1, '2018-05-02 20:42:28', '2018-08-07 16:02:40', '575e829a-d112-4988-889b-da0863cc2603'),
(22, 22, 42, 'About', 'about', 0, NULL, '{section.name|raw}', 1, '2018-08-07 15:54:41', '2018-08-07 20:25:55', '859ecf56-40d5-451e-84e9-4693bb2074f3'),
(24, 24, 52, 'Basic Class Homepage', 'basicClassHomepage', 0, NULL, '{section.name|raw}', 1, '2018-08-08 15:56:15', '2018-08-08 20:05:08', 'ad95d83c-9e50-4b10-a8b3-da60725b9372'),
(25, 25, 53, 'Basic Class Syllabus', 'basicClassSyllabus', 0, NULL, '{section.name|raw}', 1, '2018-08-08 16:42:13', '2018-08-08 16:57:07', '7dd1fdc3-3092-49d7-bd42-c0a399f42a97');

-- --------------------------------------------------------

--
-- Table structure for table `craft_entryversions`
--

CREATE TABLE `craft_entryversions` (
  `id` int(11) NOT NULL,
  `entryId` int(11) NOT NULL,
  `sectionId` int(11) NOT NULL,
  `creatorId` int(11) DEFAULT NULL,
  `siteId` int(11) NOT NULL,
  `num` smallint(6) UNSIGNED NOT NULL,
  `notes` text,
  `data` mediumtext NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_entryversions`
--

INSERT INTO `craft_entryversions` (`id`, `entryId`, `sectionId`, `creatorId`, `siteId`, `num`, `notes`, `data`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 2, 1, 1, 1, 1, 'Revision from May 7, 2018, 12:37:46 PM', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":\"1\",\"newParentId\":null,\"fields\":{\"2\":[]}}', '2018-05-07 19:39:41', '2018-05-07 19:39:41', 'bfe69956-37d5-4648-b37e-4081cd5addb8'),
(2, 2, 1, 1, 1, 2, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"2\":{\"3\":{\"type\":\"body\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"bodyText\":\"<p>This is body text.</p>\\n\"}},\"4\":{\"type\":\"buttonExternalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"buttonTitle\":\"Link to google\",\"buttonUrl\":\"www.google.com\"}},\"5\":{\"type\":\"video\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"videoUrl\":\"https://www.youtube.com/watch?v=Btw_99WDFVA\",\"videoCaption\":\"carl malone\"}},\"6\":{\"type\":\"pullQuote\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"pullQuote\":\"Hey my name is nick\",\"pullQuoteAuthor\":\"Nick Pappas\"}}}}}', '2018-05-07 19:39:42', '2018-05-07 19:39:42', 'cc426583-0a34-4ba1-b843-3bcb8ba9c015'),
(3, 2, 1, 1, 1, 3, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"2\":{\"3\":{\"type\":\"body\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"bodyText\":\"<p>This is body text.</p>\\n\"}},\"4\":{\"type\":\"buttonExternalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"buttonTitle\":\"Link to google\",\"buttonUrl\":\"www.google.com\"}},\"5\":{\"type\":\"video\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"videoUrl\":\"https://www.youtube.com/watch?v=Btw_99WDFVA\",\"videoCaption\":\"carl malone\"}},\"6\":{\"type\":\"pullQuote\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"pullQuote\":\"Hey my name is nick\",\"pullQuoteAuthor\":\"Nick Pappas\"}},\"8\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"7\"]}}}}}', '2018-05-07 19:46:15', '2018-05-07 19:46:15', 'c23fe140-bc7d-4582-aec2-6c8182f036f5'),
(4, 2, 1, 1, 1, 4, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"2\":{\"3\":{\"type\":\"body\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"bodyText\":\"<p>This is body text.</p>\\n\"}},\"4\":{\"type\":\"buttonExternalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"buttonTitle\":\"Link to google\",\"buttonUrl\":\"www.google.com\"}},\"5\":{\"type\":\"video\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"videoUrl\":\"https://www.youtube.com/watch?v=Btw_99WDFVA\",\"videoCaption\":\"carl malone\"}},\"6\":{\"type\":\"pullQuote\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"pullQuote\":\"Hey my name is nick\",\"pullQuoteAuthor\":\"Nick Pappas\"}},\"8\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"7\"],\"caption\":\"Browns suck\"}}}}}', '2018-05-07 19:49:01', '2018-05-07 19:49:01', '2fa8c224-e28b-435b-a592-76cd827fcb37'),
(5, 2, 1, 1, 1, 5, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"2\":{\"3\":{\"type\":\"body\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"bodyText\":\"<p>This is body text.</p>\\n\"}},\"4\":{\"type\":\"buttonExternalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"buttonTitle\":\"Link to google\",\"buttonUrl\":\"www.google.com\"}},\"5\":{\"type\":\"video\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"videoUrl\":\"https://www.youtube.com/watch?v=Btw_99WDFVA\",\"videoCaption\":\"carl malone\"}},\"6\":{\"type\":\"pullQuote\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"pullQuote\":\"Hey my name is nick\",\"pullQuoteAuthor\":\"Nick Pappas\"}},\"8\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"7\"],\"caption\":\"Browns suck\"}}}}}', '2018-05-07 19:49:07', '2018-05-07 19:49:07', '0ec815f2-82e2-4084-93c9-a7a80d3ccb5e'),
(6, 2, 1, 1, 1, 6, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"2\":{\"3\":{\"type\":\"body\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"bodyText\":\"<p>This is body text.</p>\\n\"}},\"4\":{\"type\":\"buttonExternalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"buttonTitle\":\"Link to google\",\"buttonUrl\":\"www.google.com\"}},\"5\":{\"type\":\"video\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"videoUrl\":\"https://www.youtube.com/watch?v=Btw_99WDFVA\",\"videoCaption\":\"carl malone\"}},\"6\":{\"type\":\"pullQuote\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"pullQuote\":\"Hey my name is nick\",\"pullQuoteAuthor\":\"Nick Pappas\"}},\"8\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"9\"],\"caption\":\"Browns suck\"}}}}}', '2018-05-07 19:52:36', '2018-05-07 19:52:36', '61dbc193-96fc-4085-8e25-cc8b04efba69'),
(7, 2, 1, 1, 1, 7, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"2\":{\"3\":{\"type\":\"body\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"bodyText\":\"<p>This is body text.</p>\\n\"}},\"4\":{\"type\":\"buttonExternalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"buttonTitle\":\"Link to google\",\"buttonUrl\":\"www.google.com\"}},\"5\":{\"type\":\"video\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"videoUrl\":\"https://www.youtube.com/watch?v=Btw_99WDFVA\",\"videoCaption\":\"carl malone\"}},\"6\":{\"type\":\"pullQuote\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"pullQuote\":\"Hey my name is nick\",\"pullQuoteAuthor\":\"Nick Pappas\"}},\"8\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"9\"],\"caption\":\"Browns suck\"}},\"10\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"7\"],\"caption\":\"asdsadsda\"}}}}}', '2018-05-07 19:56:00', '2018-05-07 19:56:00', '8784d4f7-256a-4a5b-81a7-2a8e5e730735'),
(8, 2, 1, 1, 1, 8, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"2\":{\"3\":{\"type\":\"body\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"bodyText\":\"<p>This is body text.</p>\\n\"}},\"4\":{\"type\":\"buttonExternalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"buttonTitle\":\"Link to google\",\"buttonUrl\":\"www.google.com\"}},\"5\":{\"type\":\"video\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"videoUrl\":\"https://www.youtube.com/watch?v=Btw_99WDFVA\",\"videoCaption\":\"carl malone\"}},\"6\":{\"type\":\"pullQuote\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"pullQuote\":\"Hey my name is nick\",\"pullQuoteAuthor\":\"Nick Pappas\"}},\"8\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"9\"]}},\"10\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"7\"]}}}}}', '2018-05-07 20:01:31', '2018-05-07 20:01:31', 'fe2f5fc3-f94b-4018-9df2-3f389936215e'),
(9, 2, 1, 1, 1, 9, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"2\":{\"3\":{\"type\":\"body\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"bodyText\":\"<p>This is body text.</p>\\n\"}},\"4\":{\"type\":\"buttonExternalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"buttonTitle\":\"Link to google\",\"buttonUrl\":\"www.google.com\"}},\"5\":{\"type\":\"video\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"videoUrl\":\"https://www.youtube.com/watch?v=Btw_99WDFVA\",\"videoCaption\":\"carl malone\"}},\"6\":{\"type\":\"pullQuote\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"pullQuote\":\"Hey my name is nick\",\"pullQuoteAuthor\":\"Nick Pappas\"}},\"8\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"7\"]}},\"10\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[]}}}}}', '2018-05-07 20:02:37', '2018-05-07 20:02:37', '0ebb1662-f937-433d-ae40-939cd3d26fa3'),
(10, 2, 1, 1, 1, 10, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"2\":{\"3\":{\"type\":\"body\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"bodyText\":\"<p>This is body text.</p>\\n\"}},\"4\":{\"type\":\"buttonExternalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"buttonTitle\":\"Link to google\",\"buttonUrl\":\"www.google.com\"}},\"5\":{\"type\":\"video\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"videoUrl\":\"https://www.youtube.com/watch?v=Btw_99WDFVA\",\"videoCaption\":\"carl malone\"}},\"6\":{\"type\":\"pullQuote\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"pullQuote\":\"Hey my name is nick\",\"pullQuoteAuthor\":\"Nick Pappas\"}},\"8\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"9\"]}},\"10\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[]}}}}}', '2018-05-07 20:13:54', '2018-05-07 20:13:54', '6efc642c-4b1d-48f4-8b1d-f419749a005b'),
(11, 2, 1, 1, 1, 11, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"2\":{\"3\":{\"type\":\"body\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"bodyText\":\"<p>This is body text.</p>\\n\"}},\"4\":{\"type\":\"buttonExternalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"buttonTitle\":\"Link to google\",\"buttonUrl\":\"www.google.com\"}},\"5\":{\"type\":\"video\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"videoUrl\":\"https://www.youtube.com/watch?v=Btw_99WDFVA\",\"videoCaption\":\"carl malone\"}},\"6\":{\"type\":\"pullQuote\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"pullQuote\":\"Hey my name is nick\",\"pullQuoteAuthor\":\"Nick Pappas\"}},\"8\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"9\"]}},\"10\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[]}}},\"18\":{\"11\":{\"type\":\"socialBlock\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"socialName\":\"Facebook\",\"socialHandle\":\"https://www.google.com\"}}}}}', '2018-05-07 20:18:08', '2018-05-07 20:18:08', '595a18b9-f607-4afe-ad8f-778ef8b1fc5b'),
(12, 2, 1, 1, 1, 12, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"2\":{\"3\":{\"type\":\"body\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"bodyText\":\"<p>This is body text.</p>\\n\"}},\"4\":{\"type\":\"buttonExternalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"buttonTitle\":\"Link to google\",\"buttonUrl\":\"www.google.com\"}},\"5\":{\"type\":\"video\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"videoUrl\":\"https://www.youtube.com/watch?v=Btw_99WDFVA\",\"videoCaption\":\"carl malone\"}},\"6\":{\"type\":\"pullQuote\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"pullQuote\":\"Hey my name is nick\",\"pullQuoteAuthor\":\"Nick Pappas\"}},\"15\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"14\"]}}},\"18\":{\"11\":{\"type\":\"socialBlock\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"socialName\":\"Facebook\",\"socialHandle\":\"https://www.google.com\"}}}}}', '2018-05-07 20:22:07', '2018-05-07 20:22:07', '4757c0d9-c4e9-4332-bc2a-8b3d8316065a'),
(13, 2, 1, 1, 1, 13, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"2\":{\"3\":{\"type\":\"body\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"bodyText\":\"<p>This is body text.</p>\\n\"}},\"4\":{\"type\":\"buttonExternalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"buttonTitle\":\"Link to google\",\"buttonUrl\":\"www.google.com\"}},\"5\":{\"type\":\"video\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"videoUrl\":\"https://www.youtube.com/watch?v=Btw_99WDFVA\",\"videoCaption\":\"carl malone\"}},\"6\":{\"type\":\"pullQuote\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"pullQuote\":\"Hey my name is nick\",\"pullQuoteAuthor\":\"Nick Pappas\"}},\"15\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"14\"]}},\"17\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"16\"]}}},\"18\":{\"11\":{\"type\":\"socialBlock\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"socialName\":\"Facebook\",\"socialHandle\":\"https://www.google.com\"}}}}}', '2018-05-07 20:41:15', '2018-05-07 20:41:15', 'b3d0558f-607f-4a68-bcc2-73bd128cd178'),
(14, 2, 1, 1, 1, 14, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"2\":{\"3\":{\"type\":\"body\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"bodyText\":\"<p>This is body text.</p>\\n\"}},\"4\":{\"type\":\"buttonExternalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"buttonTitle\":\"Link to google\",\"buttonUrl\":\"www.google.com\"}},\"5\":{\"type\":\"video\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"videoUrl\":\"https://www.youtube.com/watch?v=Btw_99WDFVA\",\"videoCaption\":\"carl malone\"}},\"6\":{\"type\":\"pullQuote\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"pullQuote\":\"Hey my name is nick\",\"pullQuoteAuthor\":\"Nick Pappas\"}},\"15\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"18\"]}},\"17\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"16\"]}}},\"18\":{\"11\":{\"type\":\"socialBlock\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"socialName\":\"Facebook\",\"socialHandle\":\"https://www.google.com\"}}}}}', '2018-05-09 19:22:40', '2018-05-09 19:22:40', 'eda6ee73-89cc-4707-b542-2a41e75caff3'),
(15, 2, 1, 1, 1, 15, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"2\":{\"3\":{\"type\":\"body\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"bodyText\":\"<p>This is body text.</p>\\n\"}},\"4\":{\"type\":\"buttonExternalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"buttonTitle\":\"Link to google\",\"buttonUrl\":\"www.google.com\"}},\"5\":{\"type\":\"video\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"videoUrl\":\"https://www.youtube.com/watch?v=Btw_99WDFVA\",\"videoCaption\":\"carl malone\"}},\"6\":{\"type\":\"pullQuote\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"pullQuote\":\"Hey my name is nick\",\"pullQuoteAuthor\":\"Nick Pappas\"}},\"15\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"19\"]}},\"17\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[]}}},\"18\":{\"11\":{\"type\":\"socialBlock\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"socialName\":\"Facebook\",\"socialHandle\":\"https://www.google.com\"}}}}}', '2018-05-09 19:23:49', '2018-05-09 19:23:49', '7d36306c-24d5-4c04-a949-f66e109b0ed6'),
(16, 2, 1, 1, 1, 16, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"2\":{\"3\":{\"type\":\"body\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"bodyText\":\"<p>This is body text.</p>\\n\"}},\"4\":{\"type\":\"buttonExternalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"buttonTitle\":\"Link to google\",\"buttonUrl\":\"www.google.com\"}},\"5\":{\"type\":\"video\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"videoUrl\":\"https://www.youtube.com/watch?v=Btw_99WDFVA\",\"videoCaption\":\"carl malone\"}},\"6\":{\"type\":\"pullQuote\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"pullQuote\":\"Hey my name is nick\",\"pullQuoteAuthor\":\"Nick Pappas\"}},\"15\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"19\"]}},\"17\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[]}}},\"18\":{\"11\":{\"type\":\"socialBlock\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"socialName\":\"Facebook\",\"socialHandle\":\"https://www.google.com\"}}}}}', '2018-05-09 19:51:57', '2018-05-09 19:51:57', 'caac8596-6869-4bb5-837e-cfeafb0b64c6'),
(19, 2, 1, 1, 1, 17, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"1\":\"<p>In Kent State University\'s Responsive Web Design basic class, RWD advanced class and RWD professional workshop, students from the College of Communication and Information and other colleges learn the process of creating responsive websites with HTML and CSS, from sketching and prototyping to usability testing and content strategy.</p>\",\"26\":\"Classes & Workshops\"}}', '2018-07-19 15:09:42', '2018-07-19 15:09:42', '87b549ad-119e-46f4-be4b-70ce4a51d8a3'),
(20, 2, 1, 1, 1, 18, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"1\":\"<p>In Kent State University\'s Responsive Web Design basic class, RWD advanced class and RWD professional workshop, students from the College of Communication and Information and other colleges learn the process of creating responsive websites with HTML and CSS, from sketching and prototyping to usability testing and content strategy.</p>\\n\",\"26\":\"Responsive Web Design Classes & Workshops\"}}', '2018-07-19 15:10:07', '2018-07-19 15:10:07', '82053415-0783-4569-8c87-b6f4f40309b5'),
(21, 2, 1, 1, 1, 19, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"1\":\"<p>In Kent State University\'s Responsive Web Design basic class, RWD advanced class and RWD professional workshop, students from the College of Communication and Information and other colleges learn the process of creating responsive websites with HTML and CSS, from sketching and prototyping to usability testing and content strategy.</p>\\n\",\"27\":{\"25\":{\"type\":\"internalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"linkName\":\"Learn More About RWD\",\"internalUrl\":[\"20\"]}}},\"26\":\"Responsive Web Design Classes & Workshops\"}}', '2018-07-19 15:42:37', '2018-07-19 15:42:37', '66805e89-d6b7-4082-a8ae-16b5467eb077'),
(22, 2, 1, 1, 1, 20, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"1\":\"<p>In Kent State University\'s Responsive Web Design basic class, RWD advanced class and RWD professional workshop, students from the College of Communication and Information and other colleges learn the process of creating responsive websites with HTML and CSS, from sketching and prototyping to usability testing and content strategy.</p>\\n\",\"27\":{\"25\":{\"type\":\"internalLink\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"linkName\":\"Learn More About RWD\",\"internalUrl\":[\"20\"]}}},\"26\":\"Responsive Web Design Classes & Workshops\"}}', '2018-07-19 15:58:51', '2018-07-19 15:58:51', '43be00df-8127-4f93-b314-8ce615587707'),
(23, 2, 1, 1, 1, 21, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Home Page\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"60\":\"<p class=\\\"introduction-home introduction\\\">In Kent State University\'s Responsive Web Design <a href=\\\"class/\\\">basic class</a>, RWD <a href=\\\"advanced/\\\">advanced class</a> and RWD <a href=\\\"/workshop\\\">professional workshop</a>, students from the College of Communication and Information and other colleges learn the process of creating responsive websites with HTML and CSS, from sketching and prototyping to usability testing and content strategy.</p>\",\"57\":\"Responsive Web Design\",\"61\":{\"67\":{\"type\":\"block\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"linkTitle\":\"Learn More About RWD\",\"linkUrl\":\"/about\"}}},\"58\":\"Classes & Workshops\"}}', '2018-08-07 15:40:00', '2018-08-07 15:40:00', '8a94a0c5-a5c5-4e7e-b29f-f2d6ad4955da'),
(24, 2, 1, 1, 1, 22, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Homepage\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"60\":\"<p class=\\\"introduction-home introduction\\\">In Kent State University\'s Responsive Web Design <a href=\\\"class/\\\">basic class</a>, RWD <a href=\\\"advanced/\\\">advanced class</a> and RWD <a href=\\\"/workshop\\\">professional workshop</a>, students from the College of Communication and Information and other colleges learn the process of creating responsive websites with HTML and CSS, from sketching and prototyping to usability testing and content strategy.</p>\",\"57\":\"Responsive Web Design\",\"61\":{\"67\":{\"type\":\"block\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"linkTitle\":\"Learn More About RWD\",\"linkUrl\":\"/about\"}}},\"58\":\"Classes & Workshops\"}}', '2018-08-07 15:48:38', '2018-08-07 15:48:38', '836c4d29-5110-4157-9e5f-6acf04192260'),
(25, 2, 1, 1, 1, 23, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Homepage\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"66\":{\"70\":{\"type\":\"paragraph\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"heading\":null,\"text\":\"<p class=\\\"introduction-home introduction\\\">In Kent State University\'s Responsive Web Design <a href=\\\"class/\\\">basic class</a>, RWD <a href=\\\"advanced/\\\">advanced class</a> and RWD <a href=\\\"/workshop\\\">professional workshop</a>, students from the College of Communication and Information and other colleges learn the process of creating responsive websites with HTML and CSS, from sketching and prototyping to usability testing and content strategy.</p>\"}}},\"57\":\"Responsive Web Design\",\"61\":{\"67\":{\"type\":\"block\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"linkTitle\":\"Learn More About RWD\",\"linkUrl\":\"/about\"}}},\"58\":\"Classes & Workshops\"}}', '2018-08-07 16:01:46', '2018-08-07 16:01:46', '17b02df4-fa10-40c5-9712-0c0b68e6c30f'),
(26, 2, 1, 1, 1, 24, '', '{\"typeId\":\"1\",\"authorId\":null,\"title\":\"Homepage\",\"slug\":\"home-page\",\"postDate\":1525293748,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"66\":\"<p class=\\\"introduction-home introduction\\\">In Kent State University\'s Responsive Web Design <a href=\\\"class/\\\">basic class</a>, RWD <a href=\\\"advanced/\\\">advanced class</a> and RWD <a href=\\\"/workshop\\\">professional workshop</a>, students from the College of Communication and Information and other colleges learn the process of creating responsive websites with HTML and CSS, from sketching and prototyping to usability testing and content strategy.</p>\",\"57\":\"Responsive Web Design\",\"61\":{\"67\":{\"type\":\"block\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"linkTitle\":\"Learn More About RWD\",\"linkUrl\":\"/about\"}}},\"58\":\"Classes & Workshops\"}}', '2018-08-07 16:19:33', '2018-08-07 16:19:33', 'babb686d-e350-437f-9cdf-45ff726cf7c0'),
(27, 69, 22, 1, 1, 1, 'Revision from Aug 7, 2018, 12:15:21 PM', '{\"typeId\":\"22\",\"authorId\":null,\"title\":\"About\",\"slug\":\"about\",\"postDate\":1533657240,\"expiryDate\":null,\"enabled\":\"1\",\"newParentId\":null,\"fields\":{\"59\":[],\"69\":[]}}', '2018-08-07 16:27:51', '2018-08-07 16:27:51', 'cd5edf4e-4140-485c-b487-dd95bd86eca5'),
(28, 69, 22, 1, 1, 2, '', '{\"typeId\":\"22\",\"authorId\":null,\"title\":\"About\",\"slug\":\"about\",\"postDate\":1533657240,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"66\":\"<p class=\\\"section-introduction\\\">In 2010, Ethan Marcotte published his famous article on A List Apart called <a href=\\\"http://alistapart.com/article/responsive-web-design\\\">Responsive Web Design</a>. The article was quickly followed by the <a href=\\\"http://abookapart.com/products/responsive-web-design\\\">Responsive Web Design Book</a>, published by A Book Apart in 2011. In this book, Marcotte popularized the idea of using flexible grids and CSS media queries to build a single website that scales across mobile phones, tablets, desktop computers, televisions and everything in between.</p>\\n<p>Since then, Responsive Web Design has become not just a technical solution for web design - it’s an entire process that brings multiple disciplines together to form one product that works across multiple devices. The responsive design process includes user experience, content strategy, information architecture, visual design, HTML/CSS/JavaScript development, usability testing and technical testing.</p>\\n<h2>RWD at Kent State</h2>\\n<p>Kent State University\'s Responsive Web Design classes were designed with the goal of bringing together students from multiple disciplines from within the <a href=\\\"http://www.kent.edu/cci\\\">College of Communication and Information</a> and giving them the skills they need to work with and become web designers. The classes are hands-on and encourage active learning. The class is constantly evolving, always integrating the latest advancements in design, development and user experience design.</p>\\n<p>I\'m making this information public with the hope that others will find it helpful when creating similar programs at their educational institutions.</p>\\n<h2>About the Instructor: Christopher Hallahan</h2>\\n<p>I work full time for Kent State\'s <a href=\\\"http://www.kent.edu/cci\\\">College of Communication &amp; Information (CCI)</a> as a User Experience Designer at the college and <a href=\\\"http://www.ideabasekent.com\\\">IdeaBase</a>, a collaborative, student-run agency located in Downtown Kent, where we conduct research, design and development work for real-world clients, both inside and outside the university.</p>\\n<p>My degrees are both from Kent State University - a bachelor\'s degree (2008) in Electronic Media (School of Journalism and Mass Communication) and master\'s degree (2010) in User Experience Design (School of Library &amp; Information Science).</p>\\n<p>You can learn more about me at my personal website, <a href=\\\"http://www.chrishallahan.com\\\">www.chrishallahan.com</a>.</p>\",\"59\":[\"52\"],\"69\":{\"71\":{\"type\":\"block\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"contactMethod\":null,\"contactInfo\":null}},\"72\":{\"type\":\"block\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"contactMethod\":null,\"contactInfo\":null}},\"73\":{\"type\":\"block\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"contactMethod\":null,\"contactInfo\":null}}}}}', '2018-08-07 16:27:51', '2018-08-07 16:27:51', '133bebd9-ecbc-49d8-9a34-65843040ef00'),
(29, 69, 22, 1, 1, 3, '', '{\"typeId\":\"22\",\"authorId\":null,\"title\":\"About\",\"slug\":\"about\",\"postDate\":1533657240,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"66\":\"<p class=\\\"section-introduction\\\">In 2010, Ethan Marcotte published his famous article on A List Apart called <a href=\\\"http://alistapart.com/article/responsive-web-design\\\">Responsive Web Design</a>. The article was quickly followed by the <a href=\\\"http://abookapart.com/products/responsive-web-design\\\">Responsive Web Design Book</a>, published by A Book Apart in 2011. In this book, Marcotte popularized the idea of using flexible grids and CSS media queries to build a single website that scales across mobile phones, tablets, desktop computers, televisions and everything in between.</p>\\n<p>Since then, Responsive Web Design has become not just a technical solution for web design - it’s an entire process that brings multiple disciplines together to form one product that works across multiple devices. The responsive design process includes user experience, content strategy, information architecture, visual design, HTML/CSS/JavaScript development, usability testing and technical testing.</p>\\n<h2>RWD at Kent State</h2>\\n<p>Kent State University\'s Responsive Web Design classes were designed with the goal of bringing together students from multiple disciplines from within the <a href=\\\"http://www.kent.edu/cci\\\">College of Communication and Information</a> and giving them the skills they need to work with and become web designers. The classes are hands-on and encourage active learning. The class is constantly evolving, always integrating the latest advancements in design, development and user experience design.</p>\\n<p>I\'m making this information public with the hope that others will find it helpful when creating similar programs at their educational institutions.</p>\\n<h2>About the Instructor: Christopher Hallahan</h2>\\n<p>I work full time for Kent State\'s <a href=\\\"http://www.kent.edu/cci\\\">College of Communication &amp; Information (CCI)</a> as a User Experience Designer at the college and <a href=\\\"http://www.ideabasekent.com\\\">IdeaBase</a>, a collaborative, student-run agency located in Downtown Kent, where we conduct research, design and development work for real-world clients, both inside and outside the university.</p>\\n<p>My degrees are both from Kent State University - a bachelor\'s degree (2008) in Electronic Media (School of Journalism and Mass Communication) and master\'s degree (2010) in User Experience Design (School of Library &amp; Information Science).</p>\\n<p>You can learn more about me at my personal website, <a href=\\\"http://www.chrishallahan.com\\\">www.chrishallahan.com</a>.</p>\",\"59\":[\"74\"],\"69\":{\"71\":{\"type\":\"block\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"contactMethod\":null,\"contactInfo\":null}},\"72\":{\"type\":\"block\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"contactMethod\":null,\"contactInfo\":null}},\"73\":{\"type\":\"block\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"contactMethod\":null,\"contactInfo\":null}}}}}', '2018-08-07 16:38:27', '2018-08-07 16:38:27', '32af6a89-0ae8-489d-af44-b149b20d03ef'),
(30, 69, 22, 1, 1, 4, '', '{\"typeId\":\"22\",\"authorId\":null,\"title\":\"About\",\"slug\":\"about\",\"postDate\":1533657240,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"66\":\"<p class=\\\"section-introduction\\\">In 2010, Ethan Marcotte published his famous article on A List Apart called <a href=\\\"http://alistapart.com/article/responsive-web-design\\\">Responsive Web Design</a>. The article was quickly followed by the <a href=\\\"http://abookapart.com/products/responsive-web-design\\\">Responsive Web Design Book</a>, published by A Book Apart in 2011. In this book, Marcotte popularized the idea of using flexible grids and CSS media queries to build a single website that scales across mobile phones, tablets, desktop computers, televisions and everything in between.</p>\\n<p>Since then, Responsive Web Design has become not just a technical solution for web design - it’s an entire process that brings multiple disciplines together to form one product that works across multiple devices. The responsive design process includes user experience, content strategy, information architecture, visual design, HTML/CSS/JavaScript development, usability testing and technical testing.</p>\\n<h2>RWD at Kent State</h2>\\n<p>Kent State University\'s Responsive Web Design classes were designed with the goal of bringing together students from multiple disciplines from within the <a href=\\\"http://www.kent.edu/cci\\\">College of Communication and Information</a> and giving them the skills they need to work with and become web designers. The classes are hands-on and encourage active learning. The class is constantly evolving, always integrating the latest advancements in design, development and user experience design.</p>\\n<p>I\'m making this information public with the hope that others will find it helpful when creating similar programs at their educational institutions.</p>\\n<h2>About the Instructor: Christopher Hallahan</h2>\\n<p>I work full time for Kent State\'s <a href=\\\"http://www.kent.edu/cci\\\">College of Communication &amp; Information (CCI)</a> as a User Experience Designer at the college and <a href=\\\"http://www.ideabasekent.com\\\">IdeaBase</a>, a collaborative, student-run agency located in Downtown Kent, where we conduct research, design and development work for real-world clients, both inside and outside the university.</p>\\n<p>My degrees are both from Kent State University - a bachelor\'s degree (2008) in Electronic Media (School of Journalism and Mass Communication) and master\'s degree (2010) in User Experience Design (School of Library &amp; Information Science).</p>\\n<p>You can learn more about me at my personal website, <a href=\\\"http://www.chrishallahan.com\\\">www.chrishallahan.com</a>.</p>\",\"59\":{\"75\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"image\":[\"74\"],\"altText\":\"Chris\'s Headshot\"}}},\"69\":{\"71\":{\"type\":\"block\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"contactMethod\":null,\"contactInfo\":null}},\"72\":{\"type\":\"block\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"contactMethod\":null,\"contactInfo\":null}},\"73\":{\"type\":\"block\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"contactMethod\":null,\"contactInfo\":null}}}}}', '2018-08-07 17:05:01', '2018-08-07 17:05:01', '8367ba7f-0db5-4809-9b35-b840acd07d28'),
(31, 69, 22, 1, 1, 5, '', '{\"typeId\":\"22\",\"authorId\":null,\"title\":\"About\",\"slug\":\"about\",\"postDate\":1533657240,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"66\":\"<p class=\\\"section-introduction\\\">In 2010, Ethan Marcotte published his famous article on A List Apart called <a href=\\\"http://alistapart.com/article/responsive-web-design\\\">Responsive Web Design</a>. The article was quickly followed by the <a href=\\\"http://abookapart.com/products/responsive-web-design\\\">Responsive Web Design Book</a>, published by A Book Apart in 2011. In this book, Marcotte popularized the idea of using flexible grids and CSS media queries to build a single website that scales across mobile phones, tablets, desktop computers, televisions and everything in between.</p>\\n<p>Since then, Responsive Web Design has become not just a technical solution for web design - it’s an entire process that brings multiple disciplines together to form one product that works across multiple devices. The responsive design process includes user experience, content strategy, information architecture, visual design, HTML/CSS/JavaScript development, usability testing and technical testing.</p>\\n<h2>RWD at Kent State</h2>\\n<p>Kent State University\'s Responsive Web Design classes were designed with the goal of bringing together students from multiple disciplines from within the <a href=\\\"http://www.kent.edu/cci\\\">College of Communication and Information</a> and giving them the skills they need to work with and become web designers. The classes are hands-on and encourage active learning. The class is constantly evolving, always integrating the latest advancements in design, development and user experience design.</p>\\n<p>I\'m making this information public with the hope that others will find it helpful when creating similar programs at their educational institutions.</p>\\n<h2>About the Instructor: Christopher Hallahan</h2>\\n<p>I work full time for Kent State\'s <a href=\\\"http://www.kent.edu/cci\\\">College of Communication &amp; Information (CCI)</a> as a User Experience Designer at the college and <a href=\\\"http://www.ideabasekent.com\\\">IdeaBase</a>, a collaborative, student-run agency located in Downtown Kent, where we conduct research, design and development work for real-world clients, both inside and outside the university.</p>\\n<p>My degrees are both from Kent State University - a bachelor\'s degree (2008) in Electronic Media (School of Journalism and Mass Communication) and master\'s degree (2010) in User Experience Design (School of Library &amp; Information Science).</p>\\n<p>You can learn more about me at my personal website, <a href=\\\"http://www.chrishallahan.com\\\">www.chrishallahan.com</a>.</p>\",\"59\":{\"75\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"asset\":[\"74\"],\"altText\":\"Chris\'s Headshot\"}}},\"69\":{\"76\":{\"type\":\"block\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"contactMethod\":null,\"contactInfo\":null}}}}}', '2018-08-07 18:06:16', '2018-08-07 18:06:16', 'acd6e453-b31d-44ae-bd10-bfc0b2e7a34b'),
(32, 69, 22, 1, 1, 6, '', '{\"typeId\":\"22\",\"authorId\":null,\"title\":\"About\",\"slug\":\"about\",\"postDate\":1533657240,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"66\":\"<p class=\\\"section-introduction\\\">In 2010, Ethan Marcotte published his famous article on A List Apart called <a href=\\\"http://alistapart.com/article/responsive-web-design\\\">Responsive Web Design</a>. The article was quickly followed by the <a href=\\\"http://abookapart.com/products/responsive-web-design\\\">Responsive Web Design Book</a>, published by A Book Apart in 2011. In this book, Marcotte popularized the idea of using flexible grids and CSS media queries to build a single website that scales across mobile phones, tablets, desktop computers, televisions and everything in between.</p>\\n<p>Since then, Responsive Web Design has become not just a technical solution for web design - it’s an entire process that brings multiple disciplines together to form one product that works across multiple devices. The responsive design process includes user experience, content strategy, information architecture, visual design, HTML/CSS/JavaScript development, usability testing and technical testing.</p>\\n<h2>RWD at Kent State</h2>\\n<p>Kent State University\'s Responsive Web Design classes were designed with the goal of bringing together students from multiple disciplines from within the <a href=\\\"http://www.kent.edu/cci\\\">College of Communication and Information</a> and giving them the skills they need to work with and become web designers. The classes are hands-on and encourage active learning. The class is constantly evolving, always integrating the latest advancements in design, development and user experience design.</p>\\n<p>I\'m making this information public with the hope that others will find it helpful when creating similar programs at their educational institutions.</p>\\n<h2>About the Instructor: Christopher Hallahan</h2>\\n<p>I work full time for Kent State\'s <a href=\\\"http://www.kent.edu/cci\\\">College of Communication &amp; Information (CCI)</a> as a User Experience Designer at the college and <a href=\\\"http://www.ideabasekent.com\\\">IdeaBase</a>, a collaborative, student-run agency located in Downtown Kent, where we conduct research, design and development work for real-world clients, both inside and outside the university.</p>\\n<p>My degrees are both from Kent State University - a bachelor\'s degree (2008) in Electronic Media (School of Journalism and Mass Communication) and master\'s degree (2010) in User Experience Design (School of Library &amp; Information Science).</p>\\n<p>You can learn more about me at my personal website, <a href=\\\"http://www.chrishallahan.com\\\">www.chrishallahan.com</a>.</p>\",\"59\":{\"75\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"asset\":[\"74\"],\"altText\":\"Chris\'s Headshot\"}}},\"69\":{\"76\":{\"type\":\"email\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"emailAddress\":\"challahan@ideabasekent.com\"}},\"77\":{\"type\":\"email\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"emailAddress\":\"example@email.com\"}},\"78\":{\"type\":\"phone\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"phoneNumber\":\"(330) 672-3031\"}},\"79\":{\"type\":\"phone\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"phoneNumber\":\"asdf\"}},\"80\":{\"type\":\"other\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"contactMethod\":\"Twitter\",\"contactInfo\":\"@challahan\"}}}}}', '2018-08-07 18:15:01', '2018-08-07 18:15:01', 'd9f70860-b10b-4595-b4f8-f77e81e28c43'),
(33, 69, 22, 1, 1, 7, '', '{\"typeId\":\"22\",\"authorId\":null,\"title\":\"About\",\"slug\":\"about\",\"postDate\":1533657240,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"66\":\"<p class=\\\"section-introduction\\\">In 2010, Ethan Marcotte published his famous article on A List Apart called <a href=\\\"http://alistapart.com/article/responsive-web-design\\\">Responsive Web Design</a>. The article was quickly followed by the <a href=\\\"http://abookapart.com/products/responsive-web-design\\\">Responsive Web Design Book</a>, published by A Book Apart in 2011. In this book, Marcotte popularized the idea of using flexible grids and CSS media queries to build a single website that scales across mobile phones, tablets, desktop computers, televisions and everything in between.</p>\\n<p>Since then, Responsive Web Design has become not just a technical solution for web design - it’s an entire process that brings multiple disciplines together to form one product that works across multiple devices. The responsive design process includes user experience, content strategy, information architecture, visual design, HTML/CSS/JavaScript development, usability testing and technical testing.</p>\\n<h2>RWD at Kent State</h2>\\n<p>Kent State University\'s Responsive Web Design classes were designed with the goal of bringing together students from multiple disciplines from within the <a href=\\\"http://www.kent.edu/cci\\\">College of Communication and Information</a> and giving them the skills they need to work with and become web designers. The classes are hands-on and encourage active learning. The class is constantly evolving, always integrating the latest advancements in design, development and user experience design.</p>\\n<p>I\'m making this information public with the hope that others will find it helpful when creating similar programs at their educational institutions.</p>\\n<h2>About the Instructor: Christopher Hallahan</h2>\\n<p>I work full time for Kent State\'s <a href=\\\"http://www.kent.edu/cci\\\">College of Communication &amp; Information (CCI)</a> as a User Experience Designer at the college and <a href=\\\"http://www.ideabasekent.com\\\">IdeaBase</a>, a collaborative, student-run agency located in Downtown Kent, where we conduct research, design and development work for real-world clients, both inside and outside the university.</p>\\n<p>My degrees are both from Kent State University - a bachelor\'s degree (2008) in Electronic Media (School of Journalism and Mass Communication) and master\'s degree (2010) in User Experience Design (School of Library &amp; Information Science).</p>\\n<p>You can learn more about me at my personal website, <a href=\\\"http://www.chrishallahan.com\\\">www.chrishallahan.com</a>.</p>\",\"59\":{\"75\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"asset\":[\"74\"],\"altText\":\"Chris\'s Headshot\"}}},\"69\":{\"76\":{\"type\":\"email\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"emailAddress\":\"challahan@ideabasekent.com\"}},\"77\":{\"type\":\"email\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"emailAddress\":\"example@email.com\"}},\"78\":{\"type\":\"phone\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"phoneNumber\":\"(330) 672-3031\"}},\"79\":{\"type\":\"phone\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"phoneNumber\":\"asdf\"}},\"80\":{\"type\":\"other\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"contactMethod\":\"Twitter\",\"contactInfo\":\"@challahan\",\"hyperlink\":\"[\\\"link\\\"]\",\"linkUrl\":\"https://twitter.com/challahan\"}}}}}', '2018-08-07 18:22:58', '2018-08-07 18:22:58', 'd999428c-dac0-41c5-95ac-b4806f0e33cc'),
(34, 69, 22, 1, 1, 8, '', '{\"typeId\":\"22\",\"authorId\":null,\"title\":\"About\",\"slug\":\"about\",\"postDate\":1533657240,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"66\":\"<p class=\\\"section-introduction\\\">In 2010, Ethan Marcotte published his famous article on A List Apart called <a href=\\\"http://alistapart.com/article/responsive-web-design\\\">Responsive Web Design</a>. The article was quickly followed by the <a href=\\\"http://abookapart.com/products/responsive-web-design\\\">Responsive Web Design Book</a>, published by A Book Apart in 2011. In this book, Marcotte popularized the idea of using flexible grids and CSS media queries to build a single website that scales across mobile phones, tablets, desktop computers, televisions and everything in between.</p>\\n<p>Since then, Responsive Web Design has become not just a technical solution for web design - it’s an entire process that brings multiple disciplines together to form one product that works across multiple devices. The responsive design process includes user experience, content strategy, information architecture, visual design, HTML/CSS/JavaScript development, usability testing and technical testing.</p>\\n<h2>RWD at Kent State</h2>\\n<p>Kent State University\'s Responsive Web Design classes were designed with the goal of bringing together students from multiple disciplines from within the <a href=\\\"http://www.kent.edu/cci\\\">College of Communication and Information</a> and giving them the skills they need to work with and become web designers. The classes are hands-on and encourage active learning. The class is constantly evolving, always integrating the latest advancements in design, development and user experience design.</p>\\n<p>I\'m making this information public with the hope that others will find it helpful when creating similar programs at their educational institutions.</p>\\n<h2>About the Instructor: Christopher Hallahan</h2>\\n<p>I work full time for Kent State\'s <a href=\\\"http://www.kent.edu/cci\\\">College of Communication &amp; Information (CCI)</a> as a User Experience Designer at the college and <a href=\\\"http://www.ideabasekent.com\\\">IdeaBase</a>, a collaborative, student-run agency located in Downtown Kent, where we conduct research, design and development work for real-world clients, both inside and outside the university.</p>\\n<p>My degrees are both from Kent State University - a bachelor\'s degree (2008) in Electronic Media (School of Journalism and Mass Communication) and master\'s degree (2010) in User Experience Design (School of Library &amp; Information Science).</p>\\n<p>You can learn more about me at my personal website, <a href=\\\"http://www.chrishallahan.com\\\">www.chrishallahan.com</a>.</p>\",\"59\":{\"75\":{\"type\":\"image\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"asset\":[\"74\"],\"altText\":\"Chris\'s Headshot\"}}},\"69\":{\"76\":{\"type\":\"email\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"emailAddress\":\"challahan@ideabasekent.com\"}},\"78\":{\"type\":\"phone\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"phoneNumber\":\"(330) 672-3031\"}},\"80\":{\"type\":\"other\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"method\":\"Twitter\",\"account\":\"@challahan\",\"hyperlink\":\"https://twitter.com/challahan\"}}}}}', '2018-08-07 18:41:17', '2018-08-07 18:41:17', '4c9f8e00-9359-45f3-a051-faf660d45b93'),
(35, 92, 24, 1, 1, 1, 'Revision from Aug 8, 2018, 12:04:27 PM', '{\"typeId\":\"24\",\"authorId\":null,\"title\":\"Basic Class Homepage\",\"slug\":\"basic-class-homepage\",\"postDate\":1533743760,\"expiryDate\":null,\"enabled\":\"1\",\"newParentId\":null,\"fields\":[]}', '2018-08-08 16:05:51', '2018-08-08 16:05:51', '9a1e3657-03be-4f5d-bcc4-d293994e104a'),
(36, 92, 24, 1, 1, 2, '', '{\"typeId\":\"24\",\"authorId\":null,\"title\":\"Basic Class Homepage\",\"slug\":\"basic-class-homepage\",\"postDate\":1533743760,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"92\":\"Tuesdays, 5:30 p.m. - 8:15 p.m. or Tuesday/Thursday, 11 a.m. - 12:25 p.m.\",\"91\":\"CCI 56001-001/002 - 11709/21460 (F-2018)\",\"88\":\"Christopher Hallahan and David Roll\",\"93\":\"<a href=\\\"http://www.ideabasekent.com/directions\\\">IdeaBase</a>, Downtown Kent or Taylor Hall, 331\",\"89\":\"Fall 2018 (2 Sections)\",\"90\":\"CCI 46001-001/002 - 11708/21459 (F-2018)\"}}', '2018-08-08 16:05:51', '2018-08-08 16:05:51', 'ea9e2546-bbf8-4212-b000-7d727ae26463');
INSERT INTO `craft_entryversions` (`id`, `entryId`, `sectionId`, `creatorId`, `siteId`, `num`, `notes`, `data`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(37, 92, 24, 1, 1, 3, '', '{\"typeId\":\"24\",\"authorId\":null,\"title\":\"Basic Class Homepage\",\"slug\":\"basic-class-homepage\",\"postDate\":1533743760,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"92\":\"Tuesdays, 5:30 p.m. - 8:15 p.m. or Tuesday/Thursday, 11 a.m. - 12:25 p.m.\",\"91\":\"CCI 56001-001/002 - 11709/21460 (F-2018)\",\"88\":\"Christopher Hallahan and David Roll\",\"93\":\"<p><a href=\\\"http://www.ideabasekent.com/directions\\\">IdeaBase</a>, Downtown Kent or Taylor Hall, 331</p>\",\"89\":\"Fall 2018 (2 Sections)\",\"90\":\"CCI 46001-001/002 - 11708/21459 (F-2018)\"}}', '2018-08-08 16:18:49', '2018-08-08 16:18:49', 'ab501cc1-00cd-4755-858f-d5e25cd140ce'),
(38, 92, 24, 1, 1, 4, '', '{\"typeId\":\"24\",\"authorId\":null,\"title\":\"Basic Class Homepage\",\"slug\":\"basic-class-homepage\",\"postDate\":1533743760,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"66\":\"<p>In Kent State University\'s basic Responsive Web Design course, you will learn the fundamental principles for developing standards-based web sites from a mobile-first and content-first perspective and ensure its functionality for users in terms of both usability and performance.</p>\",\"92\":\"Tuesdays, 5:30 p.m. - 8:15 p.m. or Tuesday/Thursday, 11 a.m. - 12:25 p.m.\",\"91\":\"CCI 56001-001/002 - 11709/21460 (F-2018)\",\"88\":\"Christopher Hallahan and David Roll\",\"93\":\"<p><a href=\\\"http://www.ideabasekent.com/directions\\\">IdeaBase</a>, Downtown Kent or Taylor Hall, 331</p>\",\"89\":\"Fall 2018 (2 Sections)\",\"90\":\"CCI 46001-001/002 - 11708/21459 (F-2018)\"}}', '2018-08-08 16:22:03', '2018-08-08 16:22:03', '62813c26-0a69-40ad-a6f9-7e2dc2788362'),
(39, 92, 24, 1, 1, 5, '', '{\"typeId\":\"24\",\"authorId\":null,\"title\":\"Basic Class Homepage\",\"slug\":\"basic-class-homepage\",\"postDate\":1533743760,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"66\":\"<p>In Kent State University\'s basic Responsive Web Design course, you will learn the fundamental principles for developing standards-based web sites from a mobile-first and content-first perspective and ensure its functionality for users in terms of both usability and performance.</p>\",\"92\":\"Tuesdays, 5:30 p.m. - 8:15 p.m. or Tuesday/Thursday, 11 a.m. - 12:25 p.m.\",\"91\":\"CCI 56001-001/002 - 11709/21460 (F-2018)\",\"88\":\"Christopher Hallahan and David Roll\",\"93\":\"<a href=\\\"http://www.ideabasekent.com/directions\\\">IdeaBase</a>, Downtown Kent or Taylor Hall, 331\",\"89\":\"Fall 2018 (2 Sections)\",\"90\":\"CCI 46001-001/002 - 11708/21459 (F-2018)\"}}', '2018-08-08 16:23:55', '2018-08-08 16:23:55', 'd3bfc36d-ca90-449e-8b1c-d3f25670461b'),
(40, 92, 24, 1, 1, 6, '', '{\"typeId\":\"24\",\"authorId\":null,\"title\":\"Basic Class Homepage\",\"slug\":\"basic-class-homepage\",\"postDate\":1533743760,\"expiryDate\":null,\"enabled\":true,\"newParentId\":null,\"fields\":{\"66\":\"<p>In Kent State University\'s basic Responsive Web Design course, you will learn the fundamental principles for developing standards-based web sites from a mobile-first and content-first perspective and ensure its functionality for users in terms of both usability and performance.</p>\",\"92\":\"Tuesdays, 5:30 p.m. - 8:15 p.m. or Tuesday/Thursday, 11 a.m. - 12:25 p.m.\",\"91\":\"CCI 56001-001/002 - 11709/21460 (F-2018)\",\"94\":{\"94\":{\"type\":\"email\",\"enabled\":true,\"collapsed\":false,\"fields\":{\"emailAddress\":\"challahan@ideabasekent.com\"}}},\"88\":\"Christopher Hallahan and David Roll\",\"93\":\"<a href=\\\"http://www.ideabasekent.com/directions\\\">IdeaBase</a>, Downtown Kent or Taylor Hall, 331\",\"89\":\"Fall 2018 (2 Sections)\",\"90\":\"CCI 46001-001/002 - 11708/21459 (F-2018)\"}}', '2018-08-08 20:29:10', '2018-08-08 20:29:10', 'a50d5599-2c0b-42f3-bdef-b36aa262d30c');

-- --------------------------------------------------------

--
-- Table structure for table `craft_fieldgroups`
--

CREATE TABLE `craft_fieldgroups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_fieldgroups`
--

INSERT INTO `craft_fieldgroups` (`id`, `name`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 'Common', '2018-05-02 20:31:26', '2018-05-02 20:31:26', '169f571a-5810-482d-b786-6cc57d569b46'),
(2, 'About', '2018-08-07 15:43:29', '2018-08-07 15:43:29', '0da8e511-f26d-41d9-bd9c-4775e2dbf535'),
(3, 'Globals', '2018-08-07 19:13:29', '2018-08-07 19:13:29', 'ed5d2a1b-1499-4329-bbba-4609a06260fe'),
(4, 'Basic Class', '2018-08-08 15:58:29', '2018-08-08 15:58:29', 'f0ad0afa-ea6f-4899-ba26-4f482294fb64');

-- --------------------------------------------------------

--
-- Table structure for table `craft_fieldlayoutfields`
--

CREATE TABLE `craft_fieldlayoutfields` (
  `id` int(11) NOT NULL,
  `layoutId` int(11) NOT NULL,
  `tabId` int(11) NOT NULL,
  `fieldId` int(11) NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `sortOrder` smallint(6) UNSIGNED DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_fieldlayoutfields`
--

INSERT INTO `craft_fieldlayoutfields` (`id`, `layoutId`, `tabId`, `fieldId`, `required`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(312, 43, 117, 67, 0, 1, '2018-08-07 16:02:30', '2018-08-07 16:02:30', '4f401fa3-0f9a-49f5-b6ee-237b932434ed'),
(313, 43, 117, 68, 0, 2, '2018-08-07 16:02:30', '2018-08-07 16:02:30', 'ef08d772-5897-454b-9c4e-427d20cf41fc'),
(314, 1, 118, 57, 1, 1, '2018-08-07 16:02:40', '2018-08-07 16:02:40', '8feb4f8f-d86b-4fa0-823e-eafb5eabc8f6'),
(315, 1, 118, 58, 1, 2, '2018-08-07 16:02:40', '2018-08-07 16:02:40', '0b99eb42-08f3-485c-9e01-788fd7e4614f'),
(316, 1, 118, 66, 1, 3, '2018-08-07 16:02:40', '2018-08-07 16:02:40', '4b738844-ab57-4033-a3db-2f54c5b2f91f'),
(317, 1, 118, 61, 1, 4, '2018-08-07 16:02:40', '2018-08-07 16:02:40', '7cbd44b2-53f3-43a8-8794-c54eab39a5f3'),
(398, 11, 163, 84, 1, 1, '2018-08-07 19:25:57', '2018-08-07 19:25:57', 'ad40a4d5-f5de-44cd-af85-db7703d2a9d8'),
(399, 11, 163, 81, 1, 2, '2018-08-07 19:25:57', '2018-08-07 19:25:57', '8bd0b398-f00d-4c6d-9eee-e482b47697a8'),
(402, 50, 165, 85, 1, 1, '2018-08-07 19:26:21', '2018-08-07 19:26:21', '21f00f4e-e71a-460f-84d7-f7c3d2e70231'),
(403, 50, 165, 86, 1, 2, '2018-08-07 19:26:21', '2018-08-07 19:26:21', 'a98e6c9b-9171-42f4-bd96-293fbe0fedc1'),
(412, 45, 170, 72, 1, 1, '2018-08-07 19:41:20', '2018-08-07 19:41:20', '67576c9a-2d99-49ba-8386-18eda3705f62'),
(413, 45, 170, 73, 1, 2, '2018-08-07 19:41:20', '2018-08-07 19:41:20', '2fb617a2-68c2-48ef-92d1-c59b04ed4eb2'),
(414, 40, 171, 62, 1, 1, '2018-08-07 19:41:35', '2018-08-07 19:41:35', '2e194b94-a8b3-449d-925a-c43fc98ae7a2'),
(415, 40, 171, 63, 1, 2, '2018-08-07 19:41:35', '2018-08-07 19:41:35', '9c341fad-3c17-4246-8e8e-a0a7d4b5cd12'),
(418, 49, 173, 82, 1, 1, '2018-08-07 19:41:58', '2018-08-07 19:41:58', '49c0dfa5-1043-49ae-87cc-522fd203b16d'),
(419, 49, 173, 83, 1, 2, '2018-08-07 19:41:58', '2018-08-07 19:41:58', 'b22728d9-7797-4215-b887-b2a3b1dd7ab3'),
(420, 12, 174, 66, 1, 1, '2018-08-07 19:42:34', '2018-08-07 19:42:34', 'f0eee817-16d3-498e-bbc8-98dfdb88ae31'),
(421, 12, 174, 61, 0, 2, '2018-08-07 19:42:34', '2018-08-07 19:42:34', '83753c55-0d8a-417e-8352-4b970fa1a7b6'),
(422, 12, 174, 59, 1, 3, '2018-08-07 19:42:34', '2018-08-07 19:42:34', 'e68c799c-0a55-4832-a53e-12f75861fdd3'),
(424, 51, 176, 64, 1, 1, '2018-08-07 20:23:13', '2018-08-07 20:23:13', 'fdcf8b76-5632-4d84-b233-341cd9b88222'),
(425, 51, 176, 69, 1, 2, '2018-08-07 20:23:13', '2018-08-07 20:23:13', 'a2121520-31f1-4d35-b331-dc7b41270839'),
(426, 42, 177, 66, 1, 1, '2018-08-07 20:25:55', '2018-08-07 20:25:55', '91a379be-e9d9-47ef-a523-e04a7ce14b1a'),
(427, 42, 177, 59, 1, 2, '2018-08-07 20:25:55', '2018-08-07 20:25:55', 'd182ed33-d25d-4bc7-b2ce-f9d259bc598a'),
(428, 44, 178, 74, 1, 1, '2018-08-08 15:11:35', '2018-08-08 15:11:35', 'df06b2cc-f512-43d5-ba08-123befcb0c2b'),
(429, 46, 179, 75, 1, 1, '2018-08-08 15:11:35', '2018-08-08 15:11:35', 'eb282edb-08d3-4600-a762-53518ea1024a'),
(430, 47, 180, 76, 1, 1, '2018-08-08 15:11:35', '2018-08-08 15:11:35', '4cbebb1f-9ad1-4862-8a00-4130ead39d4b'),
(431, 47, 180, 77, 1, 2, '2018-08-08 15:11:35', '2018-08-08 15:11:35', 'beb2e71c-3643-4be3-ad27-cfcf60f4a77c'),
(432, 47, 180, 79, 0, 3, '2018-08-08 15:11:35', '2018-08-08 15:11:35', '5812a9a7-bcf7-4a8d-a881-c009370f222c'),
(453, 54, 185, 95, 1, 1, '2018-08-08 20:04:32', '2018-08-08 20:04:32', '871aada6-a905-4656-a34f-ed8a347b6f23'),
(454, 52, 186, 88, 1, 1, '2018-08-08 20:05:08', '2018-08-08 20:05:08', '92364ef3-3e97-4098-8225-75a6e34ff80c'),
(455, 52, 186, 94, 1, 2, '2018-08-08 20:05:08', '2018-08-08 20:05:08', '3d2ac9ac-ecbc-4f5c-90f7-c3153c75ef57'),
(456, 52, 186, 89, 1, 3, '2018-08-08 20:05:08', '2018-08-08 20:05:08', 'a449bcd6-2e20-4629-a6c8-96753df8e871'),
(457, 52, 186, 90, 1, 4, '2018-08-08 20:05:08', '2018-08-08 20:05:08', 'afeafdcf-7d70-462a-9d3a-b7a8b84cd4bd'),
(458, 52, 186, 91, 1, 5, '2018-08-08 20:05:08', '2018-08-08 20:05:08', '2c6a2f94-f0df-4c68-b6d2-3834e1b5a7b6'),
(459, 52, 186, 92, 1, 6, '2018-08-08 20:05:08', '2018-08-08 20:05:08', 'd8d733df-ce7d-43b6-9d86-8581ef202ba7'),
(460, 52, 186, 93, 1, 7, '2018-08-08 20:05:08', '2018-08-08 20:05:08', '993b9112-ca9c-40c9-8f33-b38178fdad56'),
(461, 52, 186, 66, 1, 8, '2018-08-08 20:05:08', '2018-08-08 20:05:08', 'e89277da-9222-4a0d-b250-b292cabc7970');

-- --------------------------------------------------------

--
-- Table structure for table `craft_fieldlayouts`
--

CREATE TABLE `craft_fieldlayouts` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_fieldlayouts`
--

INSERT INTO `craft_fieldlayouts` (`id`, `type`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 'craft\\elements\\Entry', '2018-05-02 20:42:28', '2018-08-07 16:02:40', '889b4735-9f44-468d-a20b-52ba58e8c496'),
(9, 'craft\\elements\\Asset', '2018-05-07 19:45:09', '2018-05-09 19:25:10', 'cf0a419a-66e5-4213-9752-6a27e8ae11e8'),
(11, 'craft\\elements\\GlobalSet', '2018-05-07 20:19:03', '2018-08-07 19:25:57', '2e7fa616-70ba-4bb8-a1f0-075a3c9acbeb'),
(12, 'craft\\elements\\GlobalSet', '2018-05-07 20:19:06', '2018-08-07 19:42:34', '29e36447-3f7c-47fc-9e20-d80605f9f77d'),
(19, 'craft\\elements\\Category', '2018-07-19 17:41:24', '2018-07-19 17:42:43', '44acd335-a9da-4aa7-bd6c-dc818502a133'),
(20, 'craft\\elements\\Category', '2018-07-19 17:43:06', '2018-07-19 17:43:06', '73ae8507-3974-4dd3-95ff-569cf0517570'),
(21, 'craft\\elements\\Category', '2018-07-19 17:43:15', '2018-07-19 17:43:15', '24bda9a0-50ce-418b-a70b-8517e7f4886c'),
(22, 'craft\\elements\\Category', '2018-07-19 17:43:26', '2018-07-19 17:43:26', '61cc4d19-7bbe-4014-9d60-b51eb25306ac'),
(40, 'craft\\elements\\MatrixBlock', '2018-08-07 15:35:38', '2018-08-07 19:41:35', 'b388c8c8-2373-4c46-9eeb-8b0b03aabf4f'),
(42, 'craft\\elements\\Entry', '2018-08-07 15:54:41', '2018-08-07 20:25:55', '1f9b8b86-28c1-4ee9-b1be-1356c58fb701'),
(43, 'craft\\elements\\MatrixBlock', '2018-08-07 15:58:55', '2018-08-07 16:02:30', '197b2a7e-2590-4e03-9f27-0de70a158a7c'),
(44, 'craft\\elements\\MatrixBlock', '2018-08-07 16:14:59', '2018-08-08 15:11:35', 'b4bf1017-b207-4f2a-85b0-b33eca429ebe'),
(45, 'craft\\elements\\MatrixBlock', '2018-08-07 17:01:00', '2018-08-07 19:41:20', 'd9007e5d-c2b7-4eec-94e3-4ce53f286ce6'),
(46, 'craft\\elements\\MatrixBlock', '2018-08-07 18:09:24', '2018-08-08 15:11:35', '2a3c30ef-0608-4291-b60e-d57d82c57c7e'),
(47, 'craft\\elements\\MatrixBlock', '2018-08-07 18:09:24', '2018-08-08 15:11:35', 'b5c8c537-4e79-4644-a8c8-50de908851cc'),
(49, 'craft\\elements\\MatrixBlock', '2018-08-07 19:14:45', '2018-08-07 19:41:58', 'b7a7d6b7-6f29-49fe-b649-42fba92beb19'),
(50, 'craft\\elements\\MatrixBlock', '2018-08-07 19:25:46', '2018-08-07 19:26:21', '44677134-eb90-4ff7-92d2-70786988f09b'),
(51, 'craft\\elements\\GlobalSet', '2018-08-07 20:14:32', '2018-08-07 20:23:13', '61d56900-fc63-4d08-a994-34f08d491455'),
(52, 'craft\\elements\\Entry', '2018-08-08 15:56:15', '2018-08-08 20:05:08', 'c17b19ed-0c18-4685-86e9-c7765ea70367'),
(53, 'craft\\elements\\Entry', '2018-08-08 16:42:13', '2018-08-08 16:57:07', '1c0ffbad-8ae7-4b20-9490-5c9d1f3e085b'),
(54, 'craft\\elements\\MatrixBlock', '2018-08-08 20:04:32', '2018-08-08 20:04:32', 'e84686f1-8f1e-4433-8873-6ceadff1f280');

-- --------------------------------------------------------

--
-- Table structure for table `craft_fieldlayouttabs`
--

CREATE TABLE `craft_fieldlayouttabs` (
  `id` int(11) NOT NULL,
  `layoutId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sortOrder` smallint(6) UNSIGNED DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_fieldlayouttabs`
--

INSERT INTO `craft_fieldlayouttabs` (`id`, `layoutId`, `name`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(117, 43, 'Content', 1, '2018-08-07 16:02:30', '2018-08-07 16:02:30', 'ccdfdda7-18f1-4e5b-a59c-74f4e2971c7b'),
(118, 1, 'Homepage', 1, '2018-08-07 16:02:40', '2018-08-07 16:02:40', '097714f3-0a26-40b3-8264-581a649ecd9d'),
(163, 11, 'Header', 1, '2018-08-07 19:25:57', '2018-08-07 19:25:57', '909594f6-e731-465d-8dfa-9f2f854461e4'),
(165, 50, 'Content', 1, '2018-08-07 19:26:21', '2018-08-07 19:26:21', '41b62d6b-d28e-4ba3-a62c-00a30fdebb46'),
(170, 45, 'Content', 1, '2018-08-07 19:41:20', '2018-08-07 19:41:20', '21a7ad4e-1e42-4f9a-9f63-7cbd47c422d8'),
(171, 40, 'Content', 1, '2018-08-07 19:41:35', '2018-08-07 19:41:35', 'c14c787e-7c8c-4e0b-865c-141b3df3e099'),
(173, 49, 'Content', 1, '2018-08-07 19:41:58', '2018-08-07 19:41:58', '437aa8cd-ba33-4105-8c3c-bc9413093103'),
(174, 12, 'Footer', 1, '2018-08-07 19:42:34', '2018-08-07 19:42:34', '5e73e22d-c44e-4ad5-a644-840088c724fc'),
(176, 51, 'Instructor Information', 1, '2018-08-07 20:23:13', '2018-08-07 20:23:13', '0fcdea20-9106-41be-a23b-31349fc8b4ca'),
(177, 42, 'About', 1, '2018-08-07 20:25:55', '2018-08-07 20:25:55', '3cb0b048-9fa5-46d3-9eab-7b8dfbe8d984'),
(178, 44, 'Content', 1, '2018-08-08 15:11:35', '2018-08-08 15:11:35', '71d1ee6e-f872-4282-adf9-bb8b67dc093f'),
(179, 46, 'Content', 1, '2018-08-08 15:11:35', '2018-08-08 15:11:35', '7c8437a0-837b-4762-84d2-125f298b024f'),
(180, 47, 'Content', 1, '2018-08-08 15:11:35', '2018-08-08 15:11:35', '19017c53-c463-4e44-9509-3940b03259fc'),
(185, 54, 'Content', 1, '2018-08-08 20:04:32', '2018-08-08 20:04:32', 'f75ee1f6-422c-49aa-a6aa-109d67e8293a'),
(186, 52, 'Basic Class', 1, '2018-08-08 20:05:08', '2018-08-08 20:05:08', '5818d905-e56c-42cd-8deb-5c8796a20fce');

-- --------------------------------------------------------

--
-- Table structure for table `craft_fields`
--

CREATE TABLE `craft_fields` (
  `id` int(11) NOT NULL,
  `groupId` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `handle` varchar(64) NOT NULL,
  `context` varchar(255) NOT NULL DEFAULT 'global',
  `instructions` text,
  `translationMethod` varchar(255) NOT NULL DEFAULT 'none',
  `translationKeyFormat` text,
  `type` varchar(255) NOT NULL,
  `settings` text,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_fields`
--

INSERT INTO `craft_fields` (`id`, `groupId`, `name`, `handle`, `context`, `instructions`, `translationMethod`, `translationKeyFormat`, `type`, `settings`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(57, 1, 'Heading', 'heading', 'global', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-07 15:29:31', '2018-08-07 15:29:31', 'd3185278-da2c-4cd5-a30d-3ca0538d58c3'),
(58, 1, 'Subheading', 'subheading', 'global', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-07 15:29:41', '2018-08-07 15:29:41', 'd000dd13-5dd4-4631-82a9-5aac4588e521'),
(59, 1, 'Image', 'image', 'global', '', 'site', NULL, 'craft\\fields\\Matrix', '{\"minBlocks\":\"1\",\"maxBlocks\":\"\",\"localizeBlocks\":false}', '2018-08-07 15:30:11', '2018-08-07 19:41:20', '526be8df-0f16-4f54-8900-d0945b319bd2'),
(61, 1, 'Link', 'hyperlink', 'global', '', 'site', NULL, 'craft\\fields\\Matrix', '{\"minBlocks\":\"1\",\"maxBlocks\":\"\",\"localizeBlocks\":false}', '2018-08-07 15:35:38', '2018-08-07 19:41:35', '5298258c-16e6-4fbb-956d-001c0ca20cdf'),
(62, NULL, 'Text', 'linkText', 'matrixBlockType:12', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-07 15:35:38', '2018-08-07 19:41:35', 'c4096e8c-5f86-40f8-854b-2ee4c38bdf85'),
(63, NULL, 'URL', 'linkUrl', 'matrixBlockType:12', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-07 15:35:38', '2018-08-07 19:41:35', '19ae6af6-bce6-49fb-a7e0-a56f27407b64'),
(64, 1, 'Name', 'personName', 'global', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-07 15:47:39', '2018-08-07 15:47:39', '8f7f49e9-ab44-490e-ae2f-998efce9b49b'),
(66, 1, 'Body', 'body', 'global', '', 'none', NULL, 'craft\\redactor\\Field', '{\"redactorConfig\":\"\",\"purifierConfig\":\"\",\"cleanupHtml\":\"1\",\"purifyHtml\":\"1\",\"columnType\":\"text\",\"availableVolumes\":\"*\",\"availableTransforms\":\"*\"}', '2018-08-07 15:58:55', '2018-08-07 16:18:24', '36aed834-ace1-44db-b027-0211e1a13fa8'),
(67, NULL, 'Heading', 'heading', 'matrixBlockType:13', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-07 15:58:55', '2018-08-07 16:02:30', '159e9c5f-6672-4a83-b7b7-e97f83895de0'),
(68, NULL, 'Text', 'text', 'matrixBlockType:13', '', 'none', NULL, 'craft\\redactor\\Field', '{\"redactorConfig\":\"\",\"purifierConfig\":\"\",\"cleanupHtml\":\"1\",\"purifyHtml\":\"1\",\"columnType\":\"text\",\"availableVolumes\":\"*\",\"availableTransforms\":\"*\"}', '2018-08-07 15:58:55', '2018-08-07 16:02:30', 'b7d78488-4bee-4874-a78a-c2d0fdd68fa3'),
(69, 3, 'Instructor Information', 'instructorInformation', 'global', '', 'site', NULL, 'craft\\fields\\Matrix', '{\"minBlocks\":\"1\",\"maxBlocks\":\"\",\"localizeBlocks\":false}', '2018-08-07 16:14:59', '2018-08-08 15:11:35', '1a985d45-39ed-4f9c-82af-117e40063c62'),
(72, NULL, 'Asset', 'asset', 'matrixBlockType:15', '', 'site', NULL, 'craft\\fields\\Assets', '{\"useSingleFolder\":\"\",\"defaultUploadLocationSource\":\"folder:1\",\"defaultUploadLocationSubpath\":\"\",\"singleUploadLocationSource\":\"folder:1\",\"singleUploadLocationSubpath\":\"\",\"restrictFiles\":\"1\",\"allowedKinds\":[\"image\"],\"sources\":\"*\",\"source\":null,\"targetSiteId\":null,\"viewMode\":\"list\",\"limit\":\"1\",\"selectionLabel\":\"\",\"localizeRelations\":false}', '2018-08-07 17:00:59', '2018-08-07 19:41:20', '17882cf2-36b7-4a29-9d17-b141ccffdc94'),
(73, NULL, 'Alt Text', 'altText', 'matrixBlockType:15', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-07 17:01:00', '2018-08-07 19:41:20', '37eb3908-272b-4782-95d0-58198c46a2a4'),
(74, NULL, 'Email Address', 'emailAddress', 'matrixBlockType:14', '', 'none', NULL, 'craft\\fields\\Email', '[]', '2018-08-07 18:09:24', '2018-08-08 15:11:35', '87ffe577-dd09-4a38-be7d-5470c3e2faf1'),
(75, NULL, 'Phone Number', 'phoneNumber', 'matrixBlockType:16', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-07 18:09:24', '2018-08-08 15:11:35', '381c2023-fa42-49b5-9d44-3921328bc558'),
(76, NULL, 'Method', 'method', 'matrixBlockType:17', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"e.g. \\\"Twitter\\\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-07 18:09:24', '2018-08-08 15:11:35', 'fbf0ba8a-2223-4666-af87-7a6ca0b769bd'),
(77, NULL, 'Account', 'account', 'matrixBlockType:17', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"e.g. \\\"@JohnDoe\\\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-07 18:09:24', '2018-08-08 15:11:35', '570628aa-4d10-432b-a59d-eb8045fc052f'),
(79, NULL, 'Link', 'hyperlink', 'matrixBlockType:17', '', 'none', NULL, 'craft\\fields\\Url', '[]', '2018-08-07 18:22:34', '2018-08-08 15:11:35', '730d1b95-b971-41ac-bc4f-2abeaee26fa0'),
(81, 3, 'Navigation Items', 'navigationItems', 'global', '', 'site', NULL, 'craft\\fields\\Matrix', '{\"minBlocks\":\"1\",\"maxBlocks\":\"\",\"localizeBlocks\":false}', '2018-08-07 19:14:45', '2018-08-07 19:41:58', '80ad5e12-3d9c-4031-9528-80fe4bc7bfbc'),
(82, NULL, 'Title', 'itemTitle', 'matrixBlockType:18', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-07 19:14:45', '2018-08-07 19:41:58', 'bc18e950-0636-4415-ab0f-d1436c97516a'),
(83, NULL, 'URL', 'itemUrl', 'matrixBlockType:18', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-07 19:14:45', '2018-08-07 19:41:58', 'a9bd13c8-e67a-4377-8707-096da20dc11c'),
(84, 3, 'Header SVG', 'headerSvg', 'global', '', 'site', NULL, 'craft\\fields\\Matrix', '{\"minBlocks\":\"1\",\"maxBlocks\":\"1\",\"localizeBlocks\":false}', '2018-08-07 19:25:46', '2018-08-07 19:26:21', '270abf73-8a83-4235-b39a-341fd9ab6c0c'),
(85, NULL, 'Title', 'svgTitle', 'matrixBlockType:19', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-07 19:25:46', '2018-08-07 19:26:21', 'f838c7dd-a95b-4827-a446-09aca993f0d5'),
(86, NULL, 'Description', 'description', 'matrixBlockType:19', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-07 19:25:46', '2018-08-07 19:26:21', 'e3b9aed9-3b8e-4e80-80c7-fc35e4dd7244'),
(88, 4, 'Instructor(s)', 'instructors', 'global', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-08 16:03:20', '2018-08-08 16:03:20', 'd59658cb-d8cf-4ff9-8ce2-b12ac4cf75b1'),
(89, 4, 'Terms', 'terms', 'global', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-08 16:03:26', '2018-08-08 16:03:26', 'ebe81c94-d15a-4d08-a3dc-19269aab0334'),
(90, 4, 'Undergrad', 'undergrad', 'global', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-08 16:03:33', '2018-08-08 16:03:33', '7d5231f4-fd03-47d5-92fc-b0fbe4dcf879'),
(91, 4, 'Grad', 'grad', 'global', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-08 16:03:39', '2018-08-08 16:03:39', '658723f6-4a33-4347-aa27-4457cd4b502c'),
(92, 4, 'Day/Time', 'dayTime', 'global', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-08 16:03:44', '2018-08-08 16:03:44', 'de34bc5d-14ce-4268-8f90-1cc6c79930fc'),
(93, 4, 'Room', 'room', 'global', '', 'none', NULL, 'craft\\fields\\PlainText', '{\"placeholder\":\"\",\"code\":\"\",\"multiline\":\"\",\"initialRows\":\"4\",\"charLimit\":\"\",\"columnType\":\"text\"}', '2018-08-08 16:03:49', '2018-08-08 16:25:30', 'd0b15f84-ac63-4f16-9850-ae4c8f999d88'),
(94, 4, 'Instructor Email', 'instructorEmail', 'global', '', 'site', NULL, 'craft\\fields\\Matrix', '{\"minBlocks\":\"1\",\"maxBlocks\":\"\",\"localizeBlocks\":false}', '2018-08-08 20:04:32', '2018-08-08 20:04:32', '55ba513f-59a8-4e10-8a11-60accfced948'),
(95, NULL, 'Email Address', 'emailAddress', 'matrixBlockType:20', '', 'none', NULL, 'craft\\fields\\Email', '[]', '2018-08-08 20:04:32', '2018-08-08 20:04:32', '45796a42-2ddb-43be-8cd4-e2e3385711a0');

-- --------------------------------------------------------

--
-- Table structure for table `craft_globalsets`
--

CREATE TABLE `craft_globalsets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `handle` varchar(255) NOT NULL,
  `fieldLayoutId` int(11) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_globalsets`
--

INSERT INTO `craft_globalsets` (`id`, `name`, `handle`, `fieldLayoutId`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(12, 'Header', 'header', 11, '2018-05-07 20:19:03', '2018-08-07 19:25:57', '98f4a7d5-d6dc-4474-bb31-35714554acc0'),
(13, 'Footer', 'footer', 12, '2018-05-07 20:19:06', '2018-08-07 19:42:34', 'ca28c278-e1c2-46ce-a89a-d9a5c3b6172b'),
(88, 'Instructor Information', 'instructorInformation', 51, '2018-08-07 20:14:32', '2018-08-07 20:23:13', 'e86fb559-e6f2-48f9-9a7d-65fcfe25d998');

-- --------------------------------------------------------

--
-- Table structure for table `craft_info`
--

CREATE TABLE `craft_info` (
  `id` int(11) NOT NULL,
  `version` varchar(50) NOT NULL,
  `schemaVersion` varchar(15) NOT NULL,
  `edition` tinyint(3) UNSIGNED NOT NULL,
  `timezone` varchar(30) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `on` tinyint(1) NOT NULL DEFAULT '0',
  `maintenance` tinyint(1) NOT NULL DEFAULT '0',
  `fieldVersion` char(12) NOT NULL DEFAULT '000000000000',
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_info`
--

INSERT INTO `craft_info` (`id`, `version`, `schemaVersion`, `edition`, `timezone`, `name`, `on`, `maintenance`, `fieldVersion`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, '3.0.19', '3.0.91', 1, 'America/New_York', 'Responsive Web Design Kent', 1, 0, 'SiUiNQzV85hL', '2018-05-02 20:31:26', '2018-08-08 20:04:32', 'bb4e3e64-e6ce-4490-ae25-923d04716360');

-- --------------------------------------------------------

--
-- Table structure for table `craft_matrixblocks`
--

CREATE TABLE `craft_matrixblocks` (
  `id` int(11) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `ownerSiteId` int(11) DEFAULT NULL,
  `fieldId` int(11) NOT NULL,
  `typeId` int(11) NOT NULL,
  `sortOrder` smallint(6) UNSIGNED DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_matrixblocks`
--

INSERT INTO `craft_matrixblocks` (`id`, `ownerId`, `ownerSiteId`, `fieldId`, `typeId`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(67, 2, NULL, 61, 12, 1, '2018-08-07 15:40:00', '2018-08-07 16:24:38', 'f99ad839-9b90-4a91-a1dd-bc199b07bd2d'),
(70, 2, NULL, 66, 13, 1, '2018-08-07 16:01:46', '2018-08-07 16:02:41', '76dc1dfe-41ee-42c5-ab1c-80b32b781b21'),
(75, 69, NULL, 59, 15, 1, '2018-08-07 17:05:01', '2018-08-07 20:25:56', '3d4f3167-cd45-4705-a8e1-f15a16efcab7'),
(76, 69, NULL, 69, 14, 1, '2018-08-07 18:06:16', '2018-08-07 18:42:03', 'e271805e-d555-4d26-abc1-01005bfe696c'),
(78, 69, NULL, 69, 16, 2, '2018-08-07 18:15:01', '2018-08-07 18:42:03', '7bbdcdc5-c519-4489-84e5-be56804d50a8'),
(80, 69, NULL, 69, 17, 3, '2018-08-07 18:15:01', '2018-08-07 18:42:03', 'c45c17c3-df74-41ea-85f6-22d18037e054'),
(81, 12, NULL, 81, 18, 1, '2018-08-07 19:16:55', '2018-08-07 19:28:14', 'f45737e2-f0bc-4464-a3a8-418ea409fd3b'),
(82, 12, NULL, 81, 18, 2, '2018-08-07 19:16:55', '2018-08-07 19:28:14', '9f48cba0-580a-4477-9ebd-7db3055f3387'),
(83, 12, NULL, 81, 18, 3, '2018-08-07 19:16:55', '2018-08-07 19:28:14', 'deb8ea31-3d60-486c-bbbf-a70f43089528'),
(84, 12, NULL, 84, 19, 1, '2018-08-07 19:28:14', '2018-08-07 19:28:14', '72e3e982-16aa-4432-9bba-c5344073d2a4'),
(85, 13, NULL, 59, 15, 1, '2018-08-07 19:35:29', '2018-08-07 20:27:53', '8e1fd39b-5669-4552-b30f-99559529c8e3'),
(86, 13, NULL, 61, 12, 1, '2018-08-07 19:50:33', '2018-08-07 20:27:53', '14624166-d671-4cdd-8ee2-ec17b9a8240f'),
(87, 13, NULL, 61, 12, 2, '2018-08-07 19:50:33', '2018-08-07 20:27:53', 'ec77639e-c8ef-46bc-8a50-cf1ce0336eb2'),
(89, 88, NULL, 69, 14, 1, '2018-08-07 20:24:39', '2018-08-07 20:25:36', '943923ba-e5a2-44bc-9af9-ba6b2a2b19c5'),
(90, 88, NULL, 69, 16, 2, '2018-08-07 20:24:40', '2018-08-07 20:25:36', 'b6fc1b96-dc62-4270-9160-0671369054ac'),
(91, 88, NULL, 69, 17, 3, '2018-08-07 20:24:40', '2018-08-07 20:25:36', 'cb302223-450b-472b-a60f-a0fb191fcca3'),
(94, 92, NULL, 94, 20, 1, '2018-08-08 20:29:10', '2018-08-08 20:29:10', '4b952210-57d4-4819-8eb4-32d9a16472d9');

-- --------------------------------------------------------

--
-- Table structure for table `craft_matrixblocktypes`
--

CREATE TABLE `craft_matrixblocktypes` (
  `id` int(11) NOT NULL,
  `fieldId` int(11) NOT NULL,
  `fieldLayoutId` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `handle` varchar(255) NOT NULL,
  `sortOrder` smallint(6) UNSIGNED DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_matrixblocktypes`
--

INSERT INTO `craft_matrixblocktypes` (`id`, `fieldId`, `fieldLayoutId`, `name`, `handle`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(12, 61, 40, 'Link', 'link', 1, '2018-08-07 15:35:38', '2018-08-07 19:41:35', '81910a29-c1bb-41da-8963-cd7de83b1f17'),
(13, 66, 43, 'Paragraph', 'paragraph', 1, '2018-08-07 15:58:55', '2018-08-07 16:02:30', '006e9f12-b0e8-4541-a508-0ee8e5bdce4e'),
(14, 69, 44, 'Email', 'email', 1, '2018-08-07 16:14:59', '2018-08-08 15:11:35', 'baa75b9b-003f-46a8-ab9f-ea435481eea5'),
(15, 59, 45, 'image', 'image', 1, '2018-08-07 17:00:59', '2018-08-07 19:41:20', '4317dfc5-c7e8-4d25-8636-4b174cdfe616'),
(16, 69, 46, 'Phone', 'phone', 2, '2018-08-07 18:09:24', '2018-08-08 15:11:35', '134e4ae7-33a1-4186-9e52-ddbbc8461f35'),
(17, 69, 47, 'Other', 'other', 3, '2018-08-07 18:09:24', '2018-08-08 15:11:35', '614e13b9-56d9-45dc-a435-b46acf2fc867'),
(18, 81, 49, 'Item', 'item', 1, '2018-08-07 19:14:45', '2018-08-07 19:41:58', 'f7c1bf35-852c-4258-9255-6db858b2c3b0'),
(19, 84, 50, 'Header SVG', 'headerSvg', 1, '2018-08-07 19:25:46', '2018-08-07 19:26:21', 'dbecac6c-6152-4466-97ab-e9f425c50fbc'),
(20, 94, 54, 'email', 'email', 1, '2018-08-08 20:04:32', '2018-08-08 20:04:32', '706f20aa-3e4f-4752-9f3c-d8a8a1dec856');

-- --------------------------------------------------------

--
-- Table structure for table `craft_matrixcontent_body`
--

CREATE TABLE `craft_matrixcontent_body` (
  `id` int(11) NOT NULL,
  `elementId` int(11) NOT NULL,
  `siteId` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0',
  `field_paragraph_heading` text,
  `field_paragraph_text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_matrixcontent_body`
--

INSERT INTO `craft_matrixcontent_body` (`id`, `elementId`, `siteId`, `dateCreated`, `dateUpdated`, `uid`, `field_paragraph_heading`, `field_paragraph_text`) VALUES
(1, 70, 1, '2018-08-07 16:01:46', '2018-08-07 16:02:41', '6b6ac8a7-0de5-4ac4-9baf-8ec5d4c10957', NULL, '<p class=\"introduction-home introduction\">In Kent State University\'s Responsive Web Design <a href=\"class/\">basic class</a>, RWD <a href=\"advanced/\">advanced class</a> and RWD <a href=\"/workshop\">professional workshop</a>, students from the College of Communication and Information and other colleges learn the process of creating responsive websites with HTML and CSS, from sketching and prototyping to usability testing and content strategy.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `craft_matrixcontent_headersvg`
--

CREATE TABLE `craft_matrixcontent_headersvg` (
  `id` int(11) NOT NULL,
  `elementId` int(11) NOT NULL,
  `siteId` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0',
  `field_headerSvg_svgTitle` text,
  `field_headerSvg_description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_matrixcontent_headersvg`
--

INSERT INTO `craft_matrixcontent_headersvg` (`id`, `elementId`, `siteId`, `dateCreated`, `dateUpdated`, `uid`, `field_headerSvg_svgTitle`, `field_headerSvg_description`) VALUES
(1, 84, 1, '2018-08-07 19:28:14', '2018-08-07 19:28:14', 'eb355659-c1ed-4632-8830-fa7487d64d90', 'RWD', 'Responsive Web Design Logo');

-- --------------------------------------------------------

--
-- Table structure for table `craft_matrixcontent_hyperlink`
--

CREATE TABLE `craft_matrixcontent_hyperlink` (
  `id` int(11) NOT NULL,
  `elementId` int(11) NOT NULL,
  `siteId` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0',
  `field_link_linkText` text,
  `field_link_linkUrl` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_matrixcontent_hyperlink`
--

INSERT INTO `craft_matrixcontent_hyperlink` (`id`, `elementId`, `siteId`, `dateCreated`, `dateUpdated`, `uid`, `field_link_linkText`, `field_link_linkUrl`) VALUES
(1, 67, 1, '2018-08-07 15:40:00', '2018-08-07 16:24:38', '940be594-c9b7-4be8-9384-afe762a9e0d4', 'Learn More About RWD', '/about'),
(2, 86, 1, '2018-08-07 19:50:33', '2018-08-07 20:27:53', '653e7b02-88bd-4f7d-b8e7-afb90abd2cf2', 'Follow @RWDkent on Twitter', 'http://www.twitter.com/rwdkent'),
(3, 87, 1, '2018-08-07 19:50:33', '2018-08-07 20:27:53', '4c5fc4dc-0119-4d11-b762-5de4789fcba6', 'View this Site on GitHub', 'https://github.com/ideabase/ResponsiveWebDesign');

-- --------------------------------------------------------

--
-- Table structure for table `craft_matrixcontent_image`
--

CREATE TABLE `craft_matrixcontent_image` (
  `id` int(11) NOT NULL,
  `elementId` int(11) NOT NULL,
  `siteId` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0',
  `field_image_altText` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_matrixcontent_image`
--

INSERT INTO `craft_matrixcontent_image` (`id`, `elementId`, `siteId`, `dateCreated`, `dateUpdated`, `uid`, `field_image_altText`) VALUES
(1, 75, 1, '2018-08-07 17:05:01', '2018-08-07 20:25:56', 'bcb14a8a-8b6a-4524-baf0-c5ef7811a3e8', 'Chris\'s Headshot'),
(2, 85, 1, '2018-08-07 19:35:29', '2018-08-07 20:27:53', '76b5e0e1-3439-4431-90ad-87b4a6121610', 'Kent State Logo');

-- --------------------------------------------------------

--
-- Table structure for table `craft_matrixcontent_instructoremail`
--

CREATE TABLE `craft_matrixcontent_instructoremail` (
  `id` int(11) NOT NULL,
  `elementId` int(11) NOT NULL,
  `siteId` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0',
  `field_email_emailAddress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_matrixcontent_instructoremail`
--

INSERT INTO `craft_matrixcontent_instructoremail` (`id`, `elementId`, `siteId`, `dateCreated`, `dateUpdated`, `uid`, `field_email_emailAddress`) VALUES
(1, 94, 1, '2018-08-08 20:29:10', '2018-08-08 20:29:10', '2956aaa1-d9bd-4370-a37b-6b2903dfcb7f', 'challahan@ideabasekent.com');

-- --------------------------------------------------------

--
-- Table structure for table `craft_matrixcontent_instructorinformation`
--

CREATE TABLE `craft_matrixcontent_instructorinformation` (
  `id` int(11) NOT NULL,
  `elementId` int(11) NOT NULL,
  `siteId` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0',
  `field_email_emailAddress` varchar(255) DEFAULT NULL,
  `field_phone_phoneNumber` text,
  `field_other_method` text,
  `field_other_account` text,
  `field_other_hyperlink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_matrixcontent_instructorinformation`
--

INSERT INTO `craft_matrixcontent_instructorinformation` (`id`, `elementId`, `siteId`, `dateCreated`, `dateUpdated`, `uid`, `field_email_emailAddress`, `field_phone_phoneNumber`, `field_other_method`, `field_other_account`, `field_other_hyperlink`) VALUES
(4, 76, 1, '2018-08-07 18:06:16', '2018-08-07 18:42:03', '288f2869-5acd-4bb0-b696-0ecf4c57181c', 'challahan@ideabasekent.com', NULL, NULL, NULL, NULL),
(6, 78, 1, '2018-08-07 18:15:01', '2018-08-07 18:42:03', 'fa5d742d-3710-4d4f-9064-4502bb1ffaf0', NULL, '(330) 672-3031', NULL, NULL, NULL),
(8, 80, 1, '2018-08-07 18:15:01', '2018-08-07 18:42:03', 'e6f416b1-eb52-4f42-88fe-a519312987ae', NULL, NULL, 'Twitter', '@challahan', 'https://twitter.com/challahan'),
(9, 89, 1, '2018-08-07 20:24:39', '2018-08-07 20:25:36', 'c337e058-6492-4602-8b75-467f87927024', 'challahan@ideabasekent.com', NULL, NULL, NULL, NULL),
(10, 90, 1, '2018-08-07 20:24:40', '2018-08-07 20:25:36', '7e6be10b-c422-48b8-88c6-ca9f8255b47b', NULL, '(330) 672-3031', NULL, NULL, NULL),
(11, 91, 1, '2018-08-07 20:24:40', '2018-08-07 20:25:36', '4b090f33-5186-45ab-92cc-c079fb5ffdea', NULL, NULL, 'Twitter', '@challahan', 'https://twitter.com/challahan');

-- --------------------------------------------------------

--
-- Table structure for table `craft_matrixcontent_navigationitems`
--

CREATE TABLE `craft_matrixcontent_navigationitems` (
  `id` int(11) NOT NULL,
  `elementId` int(11) NOT NULL,
  `siteId` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0',
  `field_item_itemTitle` text,
  `field_item_itemUrl` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_matrixcontent_navigationitems`
--

INSERT INTO `craft_matrixcontent_navigationitems` (`id`, `elementId`, `siteId`, `dateCreated`, `dateUpdated`, `uid`, `field_item_itemTitle`, `field_item_itemUrl`) VALUES
(1, 81, 1, '2018-08-07 19:16:55', '2018-08-07 19:28:14', '6fbabcfa-31ab-4cd4-9fc6-65d59e4fdfaf', 'Basic Class', '/class'),
(2, 82, 1, '2018-08-07 19:16:55', '2018-08-07 19:28:14', 'abc780ea-729e-4f88-844e-078f329d064e', 'Advanced Class', '/advanced'),
(3, 83, 1, '2018-08-07 19:16:55', '2018-08-07 19:28:14', '5b0ceb82-ad14-42d3-85dc-87f14c0790de', 'About', '/about');

-- --------------------------------------------------------

--
-- Table structure for table `craft_migrations`
--

CREATE TABLE `craft_migrations` (
  `id` int(11) NOT NULL,
  `pluginId` int(11) DEFAULT NULL,
  `type` enum('app','plugin','content') NOT NULL DEFAULT 'app',
  `name` varchar(255) NOT NULL,
  `applyTime` datetime NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_migrations`
--

INSERT INTO `craft_migrations` (`id`, `pluginId`, `type`, `name`, `applyTime`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, NULL, 'app', 'Install', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'f0177a61-7f22-43ea-955d-1e60e20f6729'),
(2, NULL, 'app', 'm150403_183908_migrations_table_changes', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'a9baf977-97f9-47e2-b175-29b284dbae3e'),
(3, NULL, 'app', 'm150403_184247_plugins_table_changes', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'dc57a6b2-a764-482b-9b85-2bc38da967fc'),
(4, NULL, 'app', 'm150403_184533_field_version', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'a1696d51-bd70-41b9-b6b6-4352b4f68bba'),
(5, NULL, 'app', 'm150403_184729_type_columns', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'f136adf7-18f6-40ce-adc1-0eb05485e773'),
(6, NULL, 'app', 'm150403_185142_volumes', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '8fd58df0-0487-42c6-9d3f-6300461c9849'),
(7, NULL, 'app', 'm150428_231346_userpreferences', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '5f39d910-85af-43b6-aeca-d4d7120e4522'),
(8, NULL, 'app', 'm150519_150900_fieldversion_conversion', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'f1af9a19-4eef-4471-bba7-b84a7f5533ff'),
(9, NULL, 'app', 'm150617_213829_update_email_settings', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '0af0d5eb-6a60-4a03-a1da-72a15ed0b8b7'),
(10, NULL, 'app', 'm150721_124739_templatecachequeries', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '76d99301-f240-42b1-88c9-7cde5846a3ea'),
(11, NULL, 'app', 'm150724_140822_adjust_quality_settings', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'dd8a85a6-e957-4be8-8657-8ff3651ab9a6'),
(12, NULL, 'app', 'm150815_133521_last_login_attempt_ip', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'e48a74f8-a89f-44ce-8834-0dcd747a8232'),
(13, NULL, 'app', 'm151002_095935_volume_cache_settings', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'ddf23a9a-9602-4ca8-bf1d-01a637da246e'),
(14, NULL, 'app', 'm151005_142750_volume_s3_storage_settings', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '80b25c1d-b380-4416-b326-7aacea8fb227'),
(15, NULL, 'app', 'm151016_133600_delete_asset_thumbnails', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '9543384b-1814-4942-a88e-7fd40a8e9099'),
(16, NULL, 'app', 'm151209_000000_move_logo', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '79616d6e-37f0-4d49-9cc7-2f794b9d03ae'),
(17, NULL, 'app', 'm151211_000000_rename_fileId_to_assetId', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'fe570afa-4301-48d1-a5a5-9a77ebe12405'),
(18, NULL, 'app', 'm151215_000000_rename_asset_permissions', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '6e0f138a-2d05-4684-9840-8e63f3ba0c3b'),
(19, NULL, 'app', 'm160707_000001_rename_richtext_assetsource_setting', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '1f179f11-17f2-4704-84c9-deca68e462e4'),
(20, NULL, 'app', 'm160708_185142_volume_hasUrls_setting', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '540f4b1f-2614-4920-81ce-320badf5fb8f'),
(21, NULL, 'app', 'm160714_000000_increase_max_asset_filesize', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '07dd65e4-6862-4e66-a818-513cb379da55'),
(22, NULL, 'app', 'm160727_194637_column_cleanup', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'd941c82c-275f-4271-86a2-ca2d27c4fe15'),
(23, NULL, 'app', 'm160804_110002_userphotos_to_assets', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '83ff4ec5-c554-4e8a-acde-28008a0d9456'),
(24, NULL, 'app', 'm160807_144858_sites', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '4a125e81-a0a9-43b3-993b-77aad0b9a5a1'),
(25, NULL, 'app', 'm160829_000000_pending_user_content_cleanup', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '19466dc8-2a6b-41b1-846b-ce5b7396ca30'),
(26, NULL, 'app', 'm160830_000000_asset_index_uri_increase', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'b6c82561-7cbe-4eb6-a67e-84027237b7fb'),
(27, NULL, 'app', 'm160912_230520_require_entry_type_id', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '3a72571f-8547-4314-8173-6f8126f8d816'),
(28, NULL, 'app', 'm160913_134730_require_matrix_block_type_id', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '37b03b58-756a-4ebf-95ce-df62ef602d67'),
(29, NULL, 'app', 'm160920_174553_matrixblocks_owner_site_id_nullable', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '63f4da32-96f3-47b2-848c-6794093daee5'),
(30, NULL, 'app', 'm160920_231045_usergroup_handle_title_unique', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'f7ac1aa0-fe33-4021-a8bb-e66f6c37f8d8'),
(31, NULL, 'app', 'm160925_113941_route_uri_parts', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'b7946cea-f101-4e01-ac29-eaea146c0374'),
(32, NULL, 'app', 'm161006_205918_schemaVersion_not_null', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '221c7aad-8ed5-49a0-b132-eeb00e08efdf'),
(33, NULL, 'app', 'm161007_130653_update_email_settings', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '055b6f0c-bd18-4b76-a293-b81a692af6fc'),
(34, NULL, 'app', 'm161013_175052_newParentId', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '52f59962-8b29-4a7d-a4ca-854098b3e4b6'),
(35, NULL, 'app', 'm161021_102916_fix_recent_entries_widgets', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '6abe32d7-3d9f-4ed0-9cc9-0588b4f89585'),
(36, NULL, 'app', 'm161021_182140_rename_get_help_widget', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '81e365cd-3801-4164-89a8-5a6dd76b0e34'),
(37, NULL, 'app', 'm161025_000000_fix_char_columns', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '644d1f50-9d85-4506-9cac-c161e34a1a4a'),
(38, NULL, 'app', 'm161029_124145_email_message_languages', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '8ff100bc-7a8c-41d3-a4a6-d4f055694b41'),
(39, NULL, 'app', 'm161108_000000_new_version_format', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '5ede0cb3-9158-4a61-b150-d7bf30e3ce1f'),
(40, NULL, 'app', 'm161109_000000_index_shuffle', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'e1bdf999-6dad-460b-99dd-c342c6d92df1'),
(41, NULL, 'app', 'm161122_185500_no_craft_app', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'a596e0e7-118c-43df-a83f-5d543d17336c'),
(42, NULL, 'app', 'm161125_150752_clear_urlmanager_cache', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '32676df8-8901-4335-90ff-985b8858ceca'),
(43, NULL, 'app', 'm161220_000000_volumes_hasurl_notnull', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '464d68bb-7399-45c3-9605-7ba584864ccb'),
(44, NULL, 'app', 'm170114_161144_udates_permission', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'f0f17eba-bd15-4bf8-9d7c-70f639950f54'),
(45, NULL, 'app', 'm170120_000000_schema_cleanup', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'a5f24cbe-1b5b-47e1-ba1e-05a92194131c'),
(46, NULL, 'app', 'm170126_000000_assets_focal_point', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2d3c0547-80c0-4039-b1a8-e904302f5875'),
(47, NULL, 'app', 'm170206_142126_system_name', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'f6290d0d-314a-44ea-aa43-02aa93682864'),
(48, NULL, 'app', 'm170217_044740_category_branch_limits', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'fbf7cc5e-320b-4635-99a0-93344543e060'),
(49, NULL, 'app', 'm170217_120224_asset_indexing_columns', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '12b673ea-7bed-44a8-85d3-ac084f687a2b'),
(50, NULL, 'app', 'm170223_224012_plain_text_settings', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '09f70baa-698b-4a4b-a6d1-333bdda4972a'),
(51, NULL, 'app', 'm170227_120814_focal_point_percentage', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '1040c030-15bb-4f9d-9dfd-ec99ec77b1e8'),
(52, NULL, 'app', 'm170228_171113_system_messages', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '01f05764-9d5c-4f6d-bd25-2dc361dd4790'),
(53, NULL, 'app', 'm170303_140500_asset_field_source_settings', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '487398f3-0dcf-46c8-92e9-493fe0df7a70'),
(54, NULL, 'app', 'm170306_150500_asset_temporary_uploads', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '802dd6e9-cb25-4735-b7da-1fe44c270743'),
(55, NULL, 'app', 'm170414_162429_rich_text_config_setting', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '59aadb4e-244a-4699-8135-b00726423758'),
(56, NULL, 'app', 'm170523_190652_element_field_layout_ids', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'df586e22-a9d3-4fca-972a-e72beab03caf'),
(57, NULL, 'app', 'm170612_000000_route_index_shuffle', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '473b8a4b-f2b5-4a1d-ad16-628cfb529cac'),
(58, NULL, 'app', 'm170621_195237_format_plugin_handles', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '9757e853-beff-42b7-a765-5cbab7d6ba65'),
(59, NULL, 'app', 'm170630_161028_deprecation_changes', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'd2d5ffb5-8882-4796-be1b-4d39a3f2530b'),
(60, NULL, 'app', 'm170703_181539_plugins_table_tweaks', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '4f43e191-822b-40c7-94fd-106ebbeca0ad'),
(61, NULL, 'app', 'm170704_134916_sites_tables', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '4a5d8c80-4d53-4a5d-a3ed-cc01ad293a82'),
(62, NULL, 'app', 'm170706_183216_rename_sequences', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'd748e787-fd21-46eb-bb46-9021a0a85c31'),
(63, NULL, 'app', 'm170707_094758_delete_compiled_traits', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '8fbc43c1-cdb8-4439-9aac-19b641844e4c'),
(64, NULL, 'app', 'm170731_190138_drop_asset_packagist', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'f30c4453-b6f1-4992-8085-83b86060dcdc'),
(65, NULL, 'app', 'm170810_201318_create_queue_table', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'd420becb-1b47-4923-870f-43114763a79e'),
(66, NULL, 'app', 'm170816_133741_delete_compiled_behaviors', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'dd0cb768-766a-4eff-a53a-7008faea02d0'),
(67, NULL, 'app', 'm170821_180624_deprecation_line_nullable', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '30747a60-ae0e-4c65-bb53-01e0eb4b8d1d'),
(68, NULL, 'app', 'm170903_192801_longblob_for_queue_jobs', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'ba24dbb3-fcab-45d5-ac31-4e94ab93d996'),
(69, NULL, 'app', 'm170914_204621_asset_cache_shuffle', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '0fea5a9c-740b-48c1-9bbe-c17d526aee27'),
(70, NULL, 'app', 'm171011_214115_site_groups', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'a7496f82-85af-4b5e-a824-c2c0168cb383'),
(71, NULL, 'app', 'm171012_151440_primary_site', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'e54bcfd6-ff7a-4650-a0c3-c9235ab0b8d4'),
(72, NULL, 'app', 'm171013_142500_transform_interlace', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'df691ecb-2666-4959-9647-09b50cf3703b'),
(73, NULL, 'app', 'm171016_092553_drop_position_select', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '1436d6c5-a6cd-4c94-a539-7f965d82229f'),
(74, NULL, 'app', 'm171016_221244_less_strict_translation_method', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '65762e18-3b65-4341-817d-98f25bde578b'),
(75, NULL, 'app', 'm171107_000000_assign_group_permissions', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-05-02 20:31:27', 'b87b13dd-6f77-4454-9c28-347662970db1'),
(76, NULL, 'app', 'm171117_000001_templatecache_index_tune', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2c38c09a-7757-42b3-a742-97d0d8dc20e2'),
(77, NULL, 'app', 'm171126_105927_disabled_plugins', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '1476bea3-e6b4-45cb-b20a-de9a4bc149c0'),
(78, NULL, 'app', 'm171130_214407_craftidtokens_table', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '5cdb6563-179c-4109-ae4b-169eef79b9f5'),
(79, NULL, 'app', 'm171202_004225_update_email_settings', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '5ae04520-09db-4c89-b00e-ed2f1115a603'),
(80, NULL, 'app', 'm171204_000001_templatecache_index_tune_deux', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', 'bdc0b4ad-a1e9-4edc-a3b3-0e3295c22b0a'),
(81, NULL, 'app', 'm171205_130908_remove_craftidtokens_refreshtoken_column', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '4712c9ee-1526-4d8b-8961-7e5ec8aba57e'),
(82, NULL, 'app', 'm171218_143135_longtext_query_column', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '7fdf176a-ccfd-402d-a890-7b36dd64d7f3'),
(83, NULL, 'app', 'm171231_055546_environment_variables_to_aliases', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '453c95de-6664-4b84-8ed2-09170c4b83d9'),
(84, NULL, 'app', 'm180113_153740_drop_users_archived_column', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', 'd5a6ccb6-f60e-48b4-86e4-adfce3876d9d'),
(85, NULL, 'app', 'm180122_213433_propagate_entries_setting', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '55639851-f747-48af-bef2-80fd56169466'),
(86, NULL, 'app', 'm180124_230459_fix_propagate_entries_values', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '8b97b351-1d11-40b7-8de5-20967e01dad6'),
(87, NULL, 'app', 'm180128_235202_set_tag_slugs', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', 'eac96ed8-f1e3-401d-a305-0bb0982c9bb4'),
(88, NULL, 'app', 'm180202_185551_fix_focal_points', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '46139dce-e8bb-49d1-8a20-8d4d1c1dd81f'),
(89, NULL, 'app', 'm180217_172123_tiny_ints', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '280f016e-0c15-44b0-9bac-204f673d1622'),
(90, NULL, 'app', 'm180321_233505_small_ints', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', 'bd53a886-e236-4730-ab6d-d586ffe2efea'),
(91, NULL, 'app', 'm180328_115523_new_license_key_statuses', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '4c160b62-4482-4b9c-baed-15cb54459d24'),
(92, NULL, 'app', 'm180404_182320_edition_changes', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '3312ff27-030b-4d2b-8933-1722235630dd'),
(93, NULL, 'app', 'm180411_102218_fix_db_routes', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '4778cd65-6456-41cb-96df-5ed29f4e89d8'),
(94, NULL, 'app', 'm180416_205628_resourcepaths_table', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '438620c4-5744-4eec-8a5f-31118beee281'),
(95, NULL, 'app', 'm180418_205713_widget_cleanup', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '2018-05-02 20:31:28', '1df40b45-f163-4f0a-9151-d7a1ba0139d3'),
(96, 1, 'plugin', 'Install', '2018-05-02 20:43:38', '2018-05-02 20:43:38', '2018-05-02 20:43:38', '92c7a610-149b-448a-9885-320ad9f93a98'),
(97, 1, 'plugin', 'm180430_204710_remove_old_plugins', '2018-05-02 20:43:39', '2018-05-02 20:43:39', '2018-05-02 20:43:39', 'bca9d811-6247-4590-b87c-1ad32d514f47');

-- --------------------------------------------------------

--
-- Table structure for table `craft_plugins`
--

CREATE TABLE `craft_plugins` (
  `id` int(11) NOT NULL,
  `handle` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `schemaVersion` varchar(255) NOT NULL,
  `licenseKey` char(24) DEFAULT NULL,
  `licenseKeyStatus` enum('valid','invalid','mismatched','astray','unknown') NOT NULL DEFAULT 'unknown',
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `settings` text,
  `installDate` datetime NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_plugins`
--

INSERT INTO `craft_plugins` (`id`, `handle`, `version`, `schemaVersion`, `licenseKey`, `licenseKeyStatus`, `enabled`, `settings`, `installDate`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 'redactor', '2.1.5', '2.0.0', NULL, 'unknown', 1, NULL, '2018-05-02 20:43:38', '2018-05-02 20:43:38', '2018-08-13 14:38:40', '9a8c417b-918c-458e-a659-ff5ee5d4417d'),
(2, 'admin-bar', '3.1.6', '3.1.0', NULL, 'unknown', 1, '{\"customCss\":\"\",\"customLinks\":[{\"linkLabel\":\"\",\"linkUrl\":\"\",\"adminOnly\":\"\"}],\"additionalLinks\":[],\"displayGreeting\":true,\"displayDashboardLink\":true,\"displayDefaultEditSection\":true,\"displaySettingsLink\":true,\"displayLogout\":true,\"enableMobileMenu\":true,\"widgets\":{\"admin-bar_edit-links\":\"\"},\"displayEditDate\":true,\"displayEditAuthor\":true,\"displayRevisionNote\":true}', '2018-05-02 20:43:57', '2018-05-02 20:43:57', '2018-08-13 14:38:40', 'ec3cede6-5451-4d33-8c0c-bbb6fde5b28a'),
(3, 'video-embedder', '1.0.9', '1.0.0', NULL, 'unknown', 1, NULL, '2018-05-07 19:35:58', '2018-05-07 19:35:58', '2018-08-13 14:38:40', '47ebbb4f-c37d-4d8a-b0e4-c4440ea28a66'),
(4, 'cp-field-inspect', '1.0.4', '1.0.0', NULL, 'unknown', 1, NULL, '2018-05-09 19:32:53', '2018-05-09 19:32:53', '2018-08-13 14:38:40', '2a9c99ab-b4d9-42fe-964a-fc261ea23f56');

-- --------------------------------------------------------

--
-- Table structure for table `craft_queue`
--

CREATE TABLE `craft_queue` (
  `id` int(11) NOT NULL,
  `job` longblob NOT NULL,
  `description` text,
  `timePushed` int(11) NOT NULL,
  `ttr` int(11) NOT NULL,
  `delay` int(11) NOT NULL DEFAULT '0',
  `priority` int(11) UNSIGNED NOT NULL DEFAULT '1024',
  `dateReserved` datetime DEFAULT NULL,
  `timeUpdated` int(11) DEFAULT NULL,
  `progress` smallint(6) NOT NULL DEFAULT '0',
  `attempt` int(11) DEFAULT NULL,
  `fail` tinyint(1) DEFAULT '0',
  `dateFailed` datetime DEFAULT NULL,
  `error` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_relations`
--

CREATE TABLE `craft_relations` (
  `id` int(11) NOT NULL,
  `fieldId` int(11) NOT NULL,
  `sourceId` int(11) NOT NULL,
  `sourceSiteId` int(11) DEFAULT NULL,
  `targetId` int(11) NOT NULL,
  `sortOrder` smallint(6) UNSIGNED DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_relations`
--

INSERT INTO `craft_relations` (`id`, `fieldId`, `sourceId`, `sourceSiteId`, `targetId`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(2, 59, 69, NULL, 74, 1, '2018-08-07 16:38:27', '2018-08-07 16:38:27', '3a6c58ad-1fed-4909-a100-93a6258e3272'),
(16, 72, 75, NULL, 74, 1, '2018-08-07 20:25:56', '2018-08-07 20:25:56', '5f768fe3-3b13-4e39-925f-b4eaa7651144'),
(18, 72, 85, NULL, 60, 1, '2018-08-07 20:27:53', '2018-08-07 20:27:53', '411fde4d-2ee0-43b7-b9c7-6ccb597a0286');

-- --------------------------------------------------------

--
-- Table structure for table `craft_resourcepaths`
--

CREATE TABLE `craft_resourcepaths` (
  `hash` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_resourcepaths`
--

INSERT INTO `craft_resourcepaths` (`hash`, `path`) VALUES
('10431919', '@app/web/assets/updates/dist'),
('12caa165', '@app/web/assets/routes/dist'),
('13a4aa62', '@app/web/assets/updates/dist'),
('143633f', '@lib/selectize'),
('14e78f96', '@lib/selectize'),
('16300f97', '@lib/fabric'),
('17eb5b9', '@app/web/assets/login/dist'),
('180d874a', '@app/web/assets/recententries/dist'),
('18c55804', '@lib'),
('198a5993', '@lib/garnishjs'),
('1c8b67cb', '@runtime/assets/thumbs/24'),
('1e78edec', '@app/web/assets/pluginstore/dist'),
('1e8bcb1c', '@lib/xregexp'),
('203a365c', '@app/web/assets/matrix/dist'),
('20ef99fc', '@bower/jquery/dist'),
('218252e5', '@mmikkel/cpfieldinspect/resources'),
('21b0580f', '@lib/prismjs'),
('21fa67fc', '@mmikkel/cpfieldinspect/resources'),
('23365286', '@lib/jquery-touch-events'),
('241bf635', '@craft/web/assets/tablesettings/dist'),
('24926e44', '@lib/picturefill'),
('25fd17e8', '@wbrowar/adminbar/assetbundles/adminbar/dist'),
('261f118a', '@app/web/assets/utilities/dist'),
('26577dc1', '@runtime/assets/thumbs/19'),
('2686ed80', '@lib/fileupload'),
('26b7c524', '@app/web/assets/updateswidget/dist'),
('282569e5', '@app/web/assets/craftsupport/dist'),
('2a374e15', '@lib/d3'),
('2af1f6c8', '@craft/redactor/assets/field/dist'),
('2af8a5a', '@runtime/assets/thumbs/52'),
('2bbedcf', '@runtime/assets/thumbs/18'),
('2c315e43', '@craft/web/assets/utilities/dist'),
('2d47c169', '@lib/jquery.payment'),
('2d811729', '@app/web/assets/clearcaches/dist'),
('2f181468', '@app/web/assets/editentry/dist'),
('2f357fd5', '@app/web/assets/tablesettings/dist'),
('30cbcc2f', '@lib/d3'),
('30f6594b', '@app/web/assets/dbbackup/dist'),
('31606e81', '@lib/velocity'),
('3213a935', '@app/web/assets/generalsettings/dist'),
('34d07fc0', '@lib/timepicker'),
('360b4fb9', '@runtime/assets/thumbs/7'),
('36c542f1', '@wbrowar/adminbar/assetbundles/adminbar/dist'),
('36e2971b', '@app/web/assets/updater/dist'),
('376dba9', '@lib/garnishjs'),
('3825fb80', '@app/web/assets/clearcaches/dist'),
('39cad0bc', '@lib/jquery-touch-events'),
('3ab375d', '@app/web/assets/editcategory/dist'),
('3c7a6fba', '@lib/fileupload'),
('3d7f18a5', '@app/web/assets/feed/dist'),
('3e6eec7e', '@lib/picturefill'),
('3eed06f8', '@lib/jquery-ui'),
('400b0030', '@runtime/assets/thumbs/9'),
('405a4665', '@app/web/assets/login/dist'),
('4099a212', '@lib/picturefill'),
('415979b4', '@app/web/assets/dbbackup/dist'),
('4464531b', '@app/web/assets/cp/dist'),
('457f5f3f', '@lib/timepicker'),
('45bb9459', '@lib/prismjs'),
('473d9ed0', '@lib/jquery-touch-events'),
('4d759b7b', '@app/web/assets/plugins/dist'),
('4d91bf16', '@app/web/assets/matrixsettings/dist'),
('4dd54f45', '@lib/fileupload'),
('4e3c8243', '@lib/d3'),
('4e5bc1d5', '@lib/element-resize-detector'),
('501f78f0', '@lib/prismjs'),
('519516a3', '@app/web/assets/matrix/dist'),
('5207fd76', '@craft/web/assets/recententries/dist'),
('52997279', '@lib/jquery-touch-events'),
('540a0c7', '@app/web/assets/cp/dist'),
('54c7abcd', '@runtime/assets/thumbs/23'),
('54fd951d', '@app/web/assets/dbbackup/dist'),
('553d4ebb', '@lib/picturefill'),
('57ab6b48', '@vendor/craftcms/redactor/lib/redactor'),
('5871a3ec', '@lib/fileupload'),
('59297496', '@app/web/assets/recententries/dist'),
('59e1abd8', '@lib'),
('5b986eea', '@lib/d3'),
('5bc4bb29', '@craft/web/assets/updater/dist'),
('5c2e37d6', '@app/web/assets/clearcaches/dist'),
('5e96b55d', '@wbrowar/adminbar/assetbundles/adminbar/dist'),
('5eb73497', '@app/web/assets/editentry/dist'),
('5f45025e', '@craft/web/assets/findreplace/dist'),
('5f5c1e30', '@app/web/assets/pluginstore/dist'),
('607c8570', '@lib/xregexp'),
('61cb6a20', '@bower/jquery/dist'),
('61ec39e6', '@app/web/assets/updates/dist'),
('673be256', '@app/web/assets/utilities/dist'),
('679336f8', '@app/web/assets/updateswidget/dist'),
('6825796c', '@lib/garnishjs'),
('68c741fb', '@lib/fabric'),
('69019a39', '@app/web/assets/craftsupport/dist'),
('6a10c1fa', '@lib/selectize'),
('6a29083b', '@app/web/assets/deprecationerrors/dist'),
('6bb51a3e', '@app/web/assets/dashboard/dist'),
('6c6332b5', '@lib/jquery.payment'),
('6cbdbf18', '@craft/web/assets/updateswidget/dist'),
('6e118c09', '@app/web/assets/tablesettings/dist'),
('70449d5d', '@lib/velocity'),
('70ec43c0', '@lib/selectize'),
('73375ae9', '@app/web/assets/generalsettings/dist'),
('7448d54f', '@app/web/assets/updates/dist'),
('76c36689', '@craft/web/assets/cp/dist'),
('7976d8d9', '@app/web/assets/fields/dist'),
('7a80074a', '@lib/xregexp'),
('7d63ad52', '@lib/fabric'),
('7d8195c5', '@lib/garnishjs'),
('7e11f697', '@app/web/assets/dashboard/dist'),
('7f8de492', '@app/web/assets/deprecationerrors/dist'),
('7fb856f4', '@craft/web/assets/pluginstore/dist'),
('7fc14ca1', '@runtime/assets/thumbs/24'),
('7fc9f524', '@lib/jquery-ui'),
('800e3319', '@app/web/assets/fields/dist'),
('81e74c7b', '@mmikkel/cpfieldinspect/resources'),
('841b4692', '@lib/fabric'),
('846287f5', '@app/web/assets/matrixsettings/dist'),
('85dd9d50', '@app/web/assets/craftsupport/dist'),
('86b11ee4', '@lib/jquery-ui'),
('86f50f52', '@app/web/assets/deprecationerrors/dist'),
('87691d57', '@app/web/assets/dashboard/dist'),
('87a8f936', '@lib/element-resize-detector'),
('8c8c67dc', '@lib/timepicker'),
('8d47529e', '@craft/web/assets/dashboard/dist'),
('8d9f826', '@app/web/assets/fields/dist'),
('8dcaecb3', '@vendor/craftcms/redactor/lib/redactor'),
('8f88fbda', '@runtime/assets/thumbs/14'),
('9012933b', '@lib'),
('907971f9', '@app/web/assets/craftsupport/dist'),
('915d92ac', '@lib/garnishjs'),
('928db1f2', '@craft/web/assets/matrixsettings/dist'),
('9315f24d', '@lib/jquery-ui'),
('9d547b0c', '@lib/element-resize-detector'),
('9eebdd38', '@app/web/assets/updateswidget/dist'),
('a0519f56', '@app/web/assets/recententries/dist'),
('a2e0852a', '@lib/d3'),
('a34b2784', '@lib/velocity'),
('a5900a56', '@lib/jquery.payment'),
('a7cfdf57', '@app/web/assets/editentry/dist'),
('a7e2b4ea', '@app/web/assets/tablesettings/dist'),
('a83852c3', '@bower/jquery/dist'),
('a8b85472', '@app/web/assets/cp/dist'),
('a8edfd63', '@app/web/assets/matrix/dist'),
('a9679330', '@lib/prismjs'),
('abe199b9', '@lib/jquery-touch-events'),
('ac45a57b', '@lib/picturefill'),
('ac86410c', '@app/web/assets/login/dist'),
('ad2f69ce', '@app/web/assets/utilities/dist'),
('aec8dab5', '@app/web/assets/utilities/dist'),
('aef7274d', '@craft/redactor/assets/field/dist'),
('afcac643', '@app/web/assets/assetindexes/dist'),
('b1a474d9', '@app/web/assets/sites/dist'),
('b2c4bc62', '@craft/web/assets/deprecationerrors/dist'),
('b2c4d0f9', '@bower/jquery/dist'),
('b2f27b5', '@lib/xregexp'),
('b3733fa9', '@lib/xregexp'),
('b4960dc8', '@craft/web/assets/updates/dist'),
('b4ada485', '@lib/fileupload'),
('b572c364', '@runtime/assets/thumbs/19'),
('b5a8d39a', '@app/web/assets/feed/dist'),
('b5f573ff', '@app/web/assets/recententries/dist'),
('b8219274', '@app/web/assets/dbbackup/dist'),
('b91f7b23', '@lib/selectize'),
('b922ada5', '@app/web/assets/login/dist'),
('b9b7a5be', '@lib/velocity'),
('bd1cb8db', '@app/web/assets/cp/dist'),
('bd71924d', '@runtime/assets/thumbs/19'),
('bf6c886c', '@lib/jquery.payment'),
('c094440', '@craft/web/assets/fields/dist'),
('c12ac0c5', '@app/web/assets/fields/dist'),
('c1866e1d', '@craft/web/assets/dbbackup/dist'),
('c19bc600', '@lib/jquery.payment'),
('c317fedc', '@craft/web/assets/login/dist'),
('c53fb54e', '@lib/fabric'),
('c596513', '@app/web/assets/dashboard/dist'),
('c64dee8b', '@app/web/assets/dashboard/dist'),
('c6ca0a24', '@runtime/assets/thumbs/16'),
('c7d1fc8e', '@app/web/assets/deprecationerrors/dist'),
('c8188541', '@lib/velocity'),
('c88d8d5a', '@app/web/assets/login/dist'),
('cac316e3', '@app/web/assets/utilities/dist'),
('cb114911', '@craft/web/assets/craftsupport/dist'),
('cb54cca', '@app/web/assets/matrixsettings/dist'),
('cb6a3e21', '@app/web/assets/login/dist'),
('cc339e95', '@bower/jquery/dist'),
('ccb39824', '@app/web/assets/cp/dist'),
('ccc8dad', '@lib/fabric'),
('cda89400', '@lib/timepicker'),
('cf542b5f', '@app/web/assets/cp/dist'),
('d0796170', '@lib/garnishjs'),
('d1a31fcc', '@app/web/assets/feed/dist'),
('d1febfa9', '@app/web/assets/recententries/dist'),
('d2190cd2', '@app/web/assets/recententries/dist'),
('d3adbacd', '@vendor/craftcms/redactor/lib/redactor'),
('d43f2aa9', '@lib/jquery.payment'),
('d4f9fce9', '@app/web/assets/clearcaches/dist'),
('d64d9415', '@app/web/assets/tablesettings/dist'),
('d78bd50f', '@app/web/assets/pluginstore/dist'),
('d997723c', '@bower/jquery/dist'),
('d9b021fa', '@app/web/assets/updates/dist'),
('ddbc69e8', '@lib/velocity'),
('de65e6bc', '@app/web/assets/assetindexes/dist'),
('df67fa4a', '@app/web/assets/utilities/dist'),
('e1d65106', '@app/web/assets/craftsupport/dist'),
('e231e27d', '@app/web/assets/craftsupport/dist'),
('e3a33560', '@lib/element-resize-detector'),
('e3c476f6', '@lib/d3'),
('e6eb2c8b', '@app/web/assets/editentry/dist'),
('e84360ec', '@lib/prismjs'),
('e9c90ebf', '@app/web/assets/matrix/dist'),
('eac56a65', '@lib/jquery-touch-events'),
('eca34ebc', '@app/web/assets/updateswidget/dist'),
('ed6156a7', '@lib/picturefill'),
('ede2bc21', '@lib/jquery-ui'),
('ef44fdc7', '@app/web/assets/updateswidget/dist'),
('efe7ad84', '@app/web/assets/edituser/dist'),
('f0748ed3', '@runtime/assets/thumbs/19'),
('f0907133', '@craft/redactor/assets/field/dist'),
('f257cc75', '@lib/xregexp'),
('f4047455', '@craft/web/assets/feed/dist'),
('f41db42d', '@craft/web/assets/clearcaches/dist'),
('f5895759', '@lib/fileupload'),
('f5cda70a', '@app/web/assets/matrixsettings/dist'),
('f607d9c9', '@lib/element-resize-detector'),
('f71e3e1b', '@lib/jquery-ui'),
('f7f3209', '@lib/element-resize-detector'),
('f83b88ff', '@lib/selectize'),
('f90561a8', '@app/web/assets/dbbackup/dist'),
('fbe091d6', '@app/web/assets/generalsettings/dist'),
('fbed668', '@app/web/assets/dashboard/dist'),
('fcf61c83', '@app/web/assets/updater/dist'),
('ff11aff8', '@app/web/assets/updater/dist'),
('ff251e0e', '@app/web/assets/edittransform/dist');

-- --------------------------------------------------------

--
-- Table structure for table `craft_routes`
--

CREATE TABLE `craft_routes` (
  `id` int(11) NOT NULL,
  `siteId` int(11) DEFAULT NULL,
  `uriParts` varchar(255) NOT NULL,
  `uriPattern` varchar(255) NOT NULL,
  `template` varchar(500) NOT NULL,
  `sortOrder` smallint(6) UNSIGNED DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_searchindex`
--

CREATE TABLE `craft_searchindex` (
  `elementId` int(11) NOT NULL,
  `attribute` varchar(25) NOT NULL,
  `fieldId` int(11) NOT NULL,
  `siteId` int(11) NOT NULL,
  `keywords` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_searchindex`
--

INSERT INTO `craft_searchindex` (`elementId`, `attribute`, `fieldId`, `siteId`, `keywords`) VALUES
(1, 'username', 0, 1, ' ideabase '),
(1, 'firstname', 0, 1, ''),
(1, 'lastname', 0, 1, ''),
(1, 'fullname', 0, 1, ''),
(1, 'email', 0, 1, ' info ideabasekent com '),
(1, 'slug', 0, 1, ''),
(2, 'slug', 0, 1, ' home page '),
(2, 'title', 0, 1, ' homepage '),
(2, 'field', 2, 1, ' this is body text link to google www google com carl malone https www youtube com watch v=btw_99wdfva hey my name is nick nick pappas logo '),
(12, 'field', 21, 1, ' logo '),
(19, 'filename', 0, 1, ' logo png '),
(19, 'extension', 0, 1, ' png '),
(19, 'kind', 0, 1, ' image '),
(19, 'slug', 0, 1, ''),
(19, 'title', 0, 1, ' logo '),
(2, 'field', 18, 1, ' https www google com facebook '),
(2, 'field', 57, 1, ' responsive web design '),
(2, 'field', 60, 1, ' in kent state university s responsive web design basic class rwd advanced class and rwd professional workshop students from the college of communication and information and other colleges learn the process of creating responsive websites with html and css from sketching and prototyping to usability testing and content strategy '),
(12, 'slug', 0, 1, ''),
(13, 'slug', 0, 1, ''),
(13, 'field', 22, 1, ' testemail email com '),
(13, 'field', 23, 1, ' 911 '),
(13, 'field', 24, 1, ' copyright nick pappas '),
(13, 'field', 25, 1, ' kent state university '),
(2, 'field', 26, 1, ' responsive web design classes workshops '),
(2, 'field', 1, 1, ' in kent state university s responsive web design basic class rwd advanced class and rwd professional workshop students from the college of communication and information and other colleges learn the process of creating responsive websites with html and css from sketching and prototyping to usability testing and content strategy '),
(2, 'field', 27, 1, ' about learn more about rwd '),
(2, 'field', 61, 1, ' learn more about rwd about '),
(2, 'field', 59, 1, ''),
(2, 'field', 58, 1, ' classes workshops '),
(26, 'slug', 0, 1, ' codepen '),
(26, 'title', 0, 1, ' codepen '),
(27, 'slug', 0, 1, ' project '),
(27, 'title', 0, 1, ' project '),
(28, 'slug', 0, 1, ' in class assignments '),
(28, 'title', 0, 1, ' in class assignments '),
(29, 'slug', 0, 1, ' in class quizzes '),
(29, 'title', 0, 1, ' in class quizzes '),
(30, 'slug', 0, 1, ' basic class '),
(30, 'title', 0, 1, ' basic class '),
(31, 'slug', 0, 1, ' advanced class '),
(31, 'title', 0, 1, ' advanced class '),
(32, 'slug', 0, 1, ' ideabase '),
(32, 'title', 0, 1, ' ideabase '),
(34, 'field', 28, 1, ' syllabus '),
(34, 'field', 29, 1, ' basic class syllabus '),
(34, 'slug', 0, 1, ''),
(36, 'field', 28, 1, ' return to class '),
(36, 'field', 29, 1, ' basic class '),
(36, 'slug', 0, 1, ''),
(37, 'field', 28, 1, ' calendar '),
(37, 'field', 29, 1, ' basic class calendar '),
(37, 'slug', 0, 1, ''),
(39, 'field', 28, 1, ' assignments '),
(39, 'field', 29, 1, ''),
(39, 'slug', 0, 1, ''),
(60, 'filename', 0, 1, ' kent state logo white svg '),
(41, 'field', 28, 1, ' groups '),
(41, 'field', 29, 1, ' basic class groups '),
(41, 'slug', 0, 1, ''),
(43, 'field', 28, 1, ' syllabus '),
(43, 'field', 29, 1, ' advanced class syllabus '),
(43, 'slug', 0, 1, ''),
(45, 'field', 28, 1, ' calendar '),
(45, 'field', 29, 1, ' advanced class calendar '),
(45, 'slug', 0, 1, ''),
(48, 'field', 28, 1, ' assignments '),
(48, 'field', 29, 1, ' advanced class assignments '),
(48, 'slug', 0, 1, ''),
(49, 'field', 28, 1, ' groups '),
(49, 'field', 29, 1, ' advanced class groups '),
(49, 'slug', 0, 1, ''),
(60, 'extension', 0, 1, ' svg '),
(60, 'kind', 0, 1, ' image '),
(60, 'slug', 0, 1, ''),
(60, 'title', 0, 1, ' kent state logo white '),
(61, 'filename', 0, 1, ' shapes svg '),
(74, 'kind', 0, 1, ' image '),
(74, 'extension', 0, 1, ' jpg '),
(74, 'filename', 0, 1, ' hallahan headshot jpg '),
(69, 'field', 65, 1, ''),
(70, 'slug', 0, 1, ''),
(70, 'field', 68, 1, ' in kent state university s responsive web design basic class rwd advanced class and rwd professional workshop students from the college of communication and information and other colleges learn the process of creating responsive websites with html and css from sketching and prototyping to usability testing and content strategy '),
(70, 'field', 67, 1, ''),
(67, 'slug', 0, 1, ''),
(67, 'field', 62, 1, ' learn more about rwd '),
(67, 'field', 63, 1, ' about '),
(2, 'field', 66, 1, ' in kent state university s responsive web design basic class rwd advanced class and rwd professional workshop students from the college of communication and information and other colleges learn the process of creating responsive websites with html and css from sketching and prototyping to usability testing and content strategy '),
(88, 'field', 64, 1, ' christopher hallahan '),
(88, 'slug', 0, 1, ''),
(69, 'slug', 0, 1, ' about '),
(69, 'title', 0, 1, ' about '),
(69, 'field', 69, 1, ' challahan ideabasekent com 330 672 3031 challahan https twitter com challahan twitter '),
(69, 'field', 59, 1, ' chris s headshot hallahan headshot '),
(69, 'field', 66, 1, ' in 2010 ethan marcotte published his famous article on a list apart called responsive web design the article was quickly followed by the responsive web design book published by a book apart in 2011 in this book marcotte popularized the idea of using flexible grids and css media queries to build a single website that scales across mobile phones tablets desktop computers televisions and everything in between since then responsive web design has become not just a technical solution for web design it s an entire process that brings multiple disciplines together to form one product that works across multiple devices the responsive design process includes user experience content strategy information architecture visual design html css javascript development usability testing and technical testing rwd at kent state kent state university s responsive web design classes were designed with the goal of bringing together students from multiple disciplines from within the college of communication and information and giving them the skills they need to work with and become web designers the classes are hands on and encourage active learning the class is constantly evolving always integrating the latest advancements in design development and user experience design i m making this information public with the hope that others will find it helpful when creating similar programs at their educational institutions about the instructor christopher hallahan i work full time for kent state s college of communication information cci as a user experience designer at the college and ideabase a collaborative student run agency located in downtown kent where we conduct research design and development work for real world clients both inside and outside the university my degrees are both from kent state university a bachelor s degree 2008 in electronic media school of journalism and mass communication and master s degree 2010 in user experience design school of library information science you can learn more about me at my personal website www chrishallahan com '),
(61, 'extension', 0, 1, ' svg '),
(61, 'kind', 0, 1, ' image '),
(61, 'slug', 0, 1, ''),
(61, 'title', 0, 1, ' shapes '),
(62, 'filename', 0, 1, ' assignments svg '),
(62, 'extension', 0, 1, ' svg '),
(62, 'kind', 0, 1, ' image '),
(62, 'slug', 0, 1, ''),
(62, 'title', 0, 1, ' assignments '),
(63, 'filename', 0, 1, ' calendar svg '),
(63, 'extension', 0, 1, ' svg '),
(63, 'kind', 0, 1, ' image '),
(63, 'slug', 0, 1, ''),
(63, 'title', 0, 1, ' calendar '),
(64, 'filename', 0, 1, ' down arrow svg '),
(64, 'extension', 0, 1, ' svg '),
(64, 'kind', 0, 1, ' image '),
(64, 'slug', 0, 1, ''),
(64, 'title', 0, 1, ' down arrow '),
(65, 'filename', 0, 1, ' groups svg '),
(65, 'extension', 0, 1, ' svg '),
(65, 'kind', 0, 1, ' image '),
(65, 'slug', 0, 1, ''),
(65, 'title', 0, 1, ' groups '),
(66, 'filename', 0, 1, ' syllabus svg '),
(66, 'extension', 0, 1, ' svg '),
(66, 'kind', 0, 1, ' image '),
(66, 'slug', 0, 1, ''),
(66, 'title', 0, 1, ' syllabus '),
(76, 'field', 74, 1, ' challahan ideabasekent com '),
(74, 'slug', 0, 1, ''),
(74, 'title', 0, 1, ' hallahan headshot '),
(75, 'field', 72, 1, ' hallahan headshot '),
(75, 'field', 73, 1, ' chris s headshot '),
(75, 'slug', 0, 1, ''),
(76, 'field', 70, 1, ''),
(76, 'field', 71, 1, ''),
(76, 'slug', 0, 1, ''),
(13, 'field', 59, 1, ' kent state logo kent state logo white '),
(78, 'field', 75, 1, ' 330 672 3031 '),
(78, 'slug', 0, 1, ''),
(12, 'field', 59, 1, ''),
(80, 'field', 76, 1, ' twitter '),
(80, 'field', 77, 1, ' challahan '),
(80, 'slug', 0, 1, ''),
(12, 'field', 80, 1, ' rwd '),
(80, 'field', 78, 1, ' link '),
(80, 'field', 79, 1, ' https twitter com challahan '),
(12, 'field', 81, 1, ' basic class class advanced class advanced about about '),
(81, 'field', 82, 1, ' basic class '),
(81, 'field', 83, 1, ' class '),
(81, 'slug', 0, 1, ''),
(82, 'field', 82, 1, ' advanced class '),
(82, 'field', 83, 1, ' advanced '),
(82, 'slug', 0, 1, ''),
(83, 'field', 82, 1, ' about '),
(83, 'field', 83, 1, ' about '),
(83, 'slug', 0, 1, ''),
(12, 'field', 84, 1, ' responsive web design logo rwd '),
(84, 'field', 85, 1, ' rwd '),
(84, 'field', 86, 1, ' responsive web design logo '),
(84, 'slug', 0, 1, ''),
(85, 'field', 72, 1, ' kent state logo white '),
(85, 'field', 73, 1, ' kent state logo '),
(85, 'slug', 0, 1, ''),
(13, 'field', 66, 1, ' college of communication information ideabase powered by kent state students '),
(13, 'field', 61, 1, ' follow rwdkent on twitter http www twitter com rwdkent view this site on github https github com ideabase responsivewebdesign '),
(86, 'field', 62, 1, ' follow rwdkent on twitter '),
(86, 'field', 63, 1, ' http www twitter com rwdkent '),
(86, 'slug', 0, 1, ''),
(87, 'field', 62, 1, ' view this site on github '),
(87, 'field', 63, 1, ' https github com ideabase responsivewebdesign '),
(87, 'slug', 0, 1, ''),
(88, 'field', 69, 1, ' challahan ideabasekent com 330 672 3031 challahan https twitter com challahan twitter '),
(89, 'field', 74, 1, ' challahan ideabasekent com '),
(89, 'slug', 0, 1, ''),
(90, 'field', 75, 1, ' 330 672 3031 '),
(90, 'slug', 0, 1, ''),
(91, 'field', 76, 1, ' twitter '),
(91, 'field', 77, 1, ' challahan '),
(91, 'field', 79, 1, ' https twitter com challahan '),
(91, 'slug', 0, 1, ''),
(92, 'slug', 0, 1, ' basic class homepage '),
(92, 'title', 0, 1, ' basic class homepage '),
(92, 'field', 87, 1, ''),
(92, 'field', 88, 1, ' christopher hallahan and david roll '),
(92, 'field', 89, 1, ' fall 2018 2 sections '),
(92, 'field', 91, 1, ' cci 56001 001 002 11709 21460 f 2018 '),
(92, 'field', 90, 1, ' cci 46001 001 002 11708 21459 f 2018 '),
(92, 'field', 92, 1, ' tuesdays 5 30 p m 8 15 p m or tuesday thursday 11 a m 12 25 p m '),
(92, 'field', 93, 1, ' ideabase downtown kent or taylor hall 331 '),
(92, 'field', 66, 1, ' in kent state university s basic responsive web design course you will learn the fundamental principles for developing standards based web sites from a mobile first and content first perspective and ensure its functionality for users in terms of both usability and performance '),
(93, 'slug', 0, 1, ' syllabus '),
(93, 'title', 0, 1, ' basic class syllabus '),
(92, 'field', 94, 1, ' challahan ideabasekent com '),
(94, 'field', 95, 1, ' challahan ideabasekent com '),
(94, 'slug', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `craft_sections`
--

CREATE TABLE `craft_sections` (
  `id` int(11) NOT NULL,
  `structureId` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `handle` varchar(255) NOT NULL,
  `type` enum('single','channel','structure') NOT NULL DEFAULT 'channel',
  `enableVersioning` tinyint(1) NOT NULL DEFAULT '0',
  `propagateEntries` tinyint(1) NOT NULL DEFAULT '1',
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_sections`
--

INSERT INTO `craft_sections` (`id`, `structureId`, `name`, `handle`, `type`, `enableVersioning`, `propagateEntries`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, NULL, 'Homepage', 'home', 'single', 1, 1, '2018-05-02 20:42:28', '2018-08-07 15:48:24', 'aac398bd-73a6-415d-ac5b-b04babbd68c5'),
(22, NULL, 'About', 'about', 'single', 1, 1, '2018-08-07 15:54:41', '2018-08-07 15:54:41', '32913675-665f-47fc-98f0-00b6bcac279f'),
(24, NULL, 'Basic Class Homepage', 'basicClassHomepage', 'single', 1, 1, '2018-08-08 15:56:15', '2018-08-08 15:56:15', 'b761ff55-6fe6-4fd4-bcb4-7a91e2ef856f'),
(25, NULL, 'Basic Class Syllabus', 'basicClassSyllabus', 'single', 1, 1, '2018-08-08 16:42:13', '2018-08-08 16:57:07', '22633783-6e31-4034-a801-4b3ff2cb164e');

-- --------------------------------------------------------

--
-- Table structure for table `craft_sections_sites`
--

CREATE TABLE `craft_sections_sites` (
  `id` int(11) NOT NULL,
  `sectionId` int(11) NOT NULL,
  `siteId` int(11) NOT NULL,
  `hasUrls` tinyint(1) NOT NULL DEFAULT '1',
  `uriFormat` text,
  `template` varchar(500) DEFAULT NULL,
  `enabledByDefault` tinyint(1) NOT NULL DEFAULT '1',
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_sections_sites`
--

INSERT INTO `craft_sections_sites` (`id`, `sectionId`, `siteId`, `hasUrls`, `uriFormat`, `template`, `enabledByDefault`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 1, 1, 1, '__home__', 'index', 1, '2018-05-02 20:42:28', '2018-08-07 15:48:24', 'decee477-7061-404c-a54e-e1100b3772c4'),
(22, 22, 1, 1, 'about', 'about', 1, '2018-08-07 15:54:41', '2018-08-07 15:54:41', 'ff581cff-c2a7-410b-b6a0-7c69bcbeb2e7'),
(24, 24, 1, 1, 'class', 'class/index', 1, '2018-08-08 15:56:15', '2018-08-08 15:56:15', 'e870e8b7-58ba-41c4-b133-18095dd941a8'),
(25, 25, 1, 1, 'class/syllabus', 'class/syllabus', 1, '2018-08-08 16:42:13', '2018-08-08 16:57:07', '89d9f351-c9cf-43e4-a19a-22c9c2c37171');

-- --------------------------------------------------------

--
-- Table structure for table `craft_sessions`
--

CREATE TABLE `craft_sessions` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `token` char(100) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_sessions`
--

INSERT INTO `craft_sessions` (`id`, `userId`, `token`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 1, 'yPGm_t8YJJgVlQ08ieTEuUd_TxGLhXQp-mkeIPJln7qS6wfOS4OdbtdxaTvPbEcQZZyA_c4FvtGeYaJM0exSJHTu8AOsTkLhk7D9', '2018-08-06 16:29:17', '2018-08-06 16:34:52', 'a5646da8-89bc-43d3-8b73-a095830001d2'),
(2, 1, 'IXY035D9gNAO34Z-7lndq1dKfpFcEuaXnhaDLOwlJiVDELXQ0oPwvKx9TIRZIr_JzS0E8u_275uk6lZzismPLB52cc3Bvee2I3Oy', '2018-08-06 17:31:23', '2018-08-06 20:05:20', '564b9f21-055e-49b9-9a81-108947614c8c'),
(3, 1, 'xltpHYLMMvExqNEcC1aCpK8Ut0iZQI-4DUi4m5aGgt9w3Wa0_wvTS5sLNV-5049deitIRbKW3-hjXZw6vwLZLnfr8ERPLSzD76w7', '2018-08-07 15:19:40', '2018-08-07 20:29:13', 'f2a373ca-81e3-4d52-b0b9-19e1f697a241'),
(5, 1, 'bynwCAs9JMX1motE43JCa_yBYiSYNawiTpVw89irNYF___i1UsT8xkTfqTo-FZUMFOb4l-hz_MS4SfOimrWBjtp1kJcmxzlkDfIX', '2018-08-08 19:55:24', '2018-08-08 21:13:47', 'cd79351e-02c9-4ddd-86dc-0ac8468f72c4'),
(6, 1, 'lQ-UtuhJYaLQiviHWsfDJ5afym3WL_oDjnjj5BsiMt-uUwcn_0iwUUczEk8q7Hb4oJuvvYdeqRq6V42CTijAy0h8cE2EYDZ8aY3k', '2018-08-13 14:38:38', '2018-08-13 14:40:14', 'dc168601-9025-487a-93cf-8b02870539f9');

-- --------------------------------------------------------

--
-- Table structure for table `craft_shunnedmessages`
--

CREATE TABLE `craft_shunnedmessages` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `expiryDate` datetime DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_sitegroups`
--

CREATE TABLE `craft_sitegroups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_sitegroups`
--

INSERT INTO `craft_sitegroups` (`id`, `name`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 'IdeaBase Starter Kit', '2018-05-02 20:31:26', '2018-05-02 20:31:26', '5f0f2a75-84ba-4564-8fdc-fe4b334a264f');

-- --------------------------------------------------------

--
-- Table structure for table `craft_sites`
--

CREATE TABLE `craft_sites` (
  `id` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `primary` tinyint(1) NOT NULL,
  `name` varchar(255) NOT NULL,
  `handle` varchar(255) NOT NULL,
  `language` varchar(12) NOT NULL,
  `hasUrls` tinyint(1) NOT NULL DEFAULT '0',
  `baseUrl` varchar(255) DEFAULT NULL,
  `sortOrder` smallint(6) UNSIGNED DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_sites`
--

INSERT INTO `craft_sites` (`id`, `groupId`, `primary`, `name`, `handle`, `language`, `hasUrls`, `baseUrl`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 1, 1, 'IdeaBase Starter Kit', 'default', 'en-US', 1, '@web/', 1, '2018-05-02 20:31:26', '2018-05-02 20:31:26', '8d38eac1-e5ec-4b1e-8816-dbec410c110d');

-- --------------------------------------------------------

--
-- Table structure for table `craft_structureelements`
--

CREATE TABLE `craft_structureelements` (
  `id` int(11) NOT NULL,
  `structureId` int(11) NOT NULL,
  `elementId` int(11) DEFAULT NULL,
  `root` int(11) UNSIGNED DEFAULT NULL,
  `lft` int(11) UNSIGNED NOT NULL,
  `rgt` int(11) UNSIGNED NOT NULL,
  `level` smallint(6) UNSIGNED NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_structureelements`
--

INSERT INTO `craft_structureelements` (`id`, `structureId`, `elementId`, `root`, `lft`, `rgt`, `level`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 4, NULL, 1, 1, 10, 0, '2018-07-19 17:43:54', '2018-07-19 17:44:42', '6d8a5655-6c84-4831-b2d9-d2e99cd096fa'),
(2, 4, 26, 1, 2, 3, 1, '2018-07-19 17:43:54', '2018-07-19 17:43:54', 'e2adebf5-360b-4de2-b62c-f719bbbdc628'),
(3, 4, 27, 1, 4, 5, 1, '2018-07-19 17:44:07', '2018-07-19 17:44:07', 'e7045d30-15b2-4724-92ce-4660422eb962'),
(4, 4, 28, 1, 6, 7, 1, '2018-07-19 17:44:29', '2018-07-19 17:44:29', '0503658f-502b-4848-aeed-6e2d1f214de5'),
(5, 4, 29, 1, 8, 9, 1, '2018-07-19 17:44:42', '2018-07-19 17:44:42', 'bd6c6a29-70e4-4d87-a45a-b703e3b987f9'),
(6, 1, NULL, 6, 1, 6, 0, '2018-07-19 17:45:12', '2018-07-19 17:45:22', '02651000-6ed5-4dd7-9056-2aa109e15e79'),
(7, 1, 30, 6, 2, 3, 1, '2018-07-19 17:45:12', '2018-07-19 17:45:12', '56f42176-1af0-48bf-9c87-c4eca7ca437a'),
(8, 1, 31, 6, 4, 5, 1, '2018-07-19 17:45:22', '2018-07-19 17:45:22', '63596b67-85bb-408c-a487-8a3d775c7082'),
(9, 2, NULL, 9, 1, 4, 0, '2018-07-19 17:45:41', '2018-07-19 17:45:41', '08f2a36f-139f-4238-b501-9016bd76ff7c'),
(10, 2, 32, 9, 2, 3, 1, '2018-07-19 17:45:41', '2018-07-19 17:45:41', 'ba8e9685-d4f0-482c-b386-108ef8340f1e');

-- --------------------------------------------------------

--
-- Table structure for table `craft_structures`
--

CREATE TABLE `craft_structures` (
  `id` int(11) NOT NULL,
  `maxLevels` smallint(6) UNSIGNED DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_structures`
--

INSERT INTO `craft_structures` (`id`, `maxLevels`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, NULL, '2018-07-19 17:41:24', '2018-07-19 17:42:43', '11497434-c5d6-49c5-b567-432513eac524'),
(2, NULL, '2018-07-19 17:43:06', '2018-07-19 17:43:06', '0d60d211-6df0-4725-9980-9853bdb8463f'),
(3, NULL, '2018-07-19 17:43:15', '2018-07-19 17:43:15', '6fe162c3-34bb-44a0-b6b9-0569ed327492'),
(4, NULL, '2018-07-19 17:43:26', '2018-07-19 17:43:26', '0b7d9af9-d777-48d3-81ac-5876b66f32f8');

-- --------------------------------------------------------

--
-- Table structure for table `craft_systemmessages`
--

CREATE TABLE `craft_systemmessages` (
  `id` int(11) NOT NULL,
  `language` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `body` text NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_systemsettings`
--

CREATE TABLE `craft_systemsettings` (
  `id` int(11) NOT NULL,
  `category` varchar(15) NOT NULL,
  `settings` text,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_systemsettings`
--

INSERT INTO `craft_systemsettings` (`id`, `category`, `settings`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 'email', '{\"fromEmail\":\"info@ideabasekent.com\",\"fromName\":\"IdeaBase Starter Kit\",\"transportType\":\"craft\\\\mail\\\\transportadapters\\\\Sendmail\"}', '2018-05-02 20:31:27', '2018-05-02 20:31:27', '7779fb43-cfee-4cc5-94e2-cd44081bf036');

-- --------------------------------------------------------

--
-- Table structure for table `craft_taggroups`
--

CREATE TABLE `craft_taggroups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `handle` varchar(255) NOT NULL,
  `fieldLayoutId` int(11) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_tags`
--

CREATE TABLE `craft_tags` (
  `id` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_templatecacheelements`
--

CREATE TABLE `craft_templatecacheelements` (
  `cacheId` int(11) NOT NULL,
  `elementId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_templatecachequeries`
--

CREATE TABLE `craft_templatecachequeries` (
  `id` int(11) NOT NULL,
  `cacheId` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `query` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_templatecaches`
--

CREATE TABLE `craft_templatecaches` (
  `id` int(11) NOT NULL,
  `siteId` int(11) NOT NULL,
  `cacheKey` varchar(255) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `expiryDate` datetime NOT NULL,
  `body` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_tokens`
--

CREATE TABLE `craft_tokens` (
  `id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `route` text,
  `usageLimit` tinyint(3) UNSIGNED DEFAULT NULL,
  `usageCount` tinyint(3) UNSIGNED DEFAULT NULL,
  `expiryDate` datetime NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_usergroups`
--

CREATE TABLE `craft_usergroups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `handle` varchar(255) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_usergroups_users`
--

CREATE TABLE `craft_usergroups_users` (
  `id` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_userpermissions`
--

CREATE TABLE `craft_userpermissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_userpermissions_usergroups`
--

CREATE TABLE `craft_userpermissions_usergroups` (
  `id` int(11) NOT NULL,
  `permissionId` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_userpermissions_users`
--

CREATE TABLE `craft_userpermissions_users` (
  `id` int(11) NOT NULL,
  `permissionId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `craft_userpreferences`
--

CREATE TABLE `craft_userpreferences` (
  `userId` int(11) NOT NULL,
  `preferences` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_userpreferences`
--

INSERT INTO `craft_userpreferences` (`userId`, `preferences`) VALUES
(1, '{\"language\":\"en-US\"}');

-- --------------------------------------------------------

--
-- Table structure for table `craft_users`
--

CREATE TABLE `craft_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `photoId` int(11) DEFAULT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `locked` tinyint(1) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `pending` tinyint(1) NOT NULL DEFAULT '0',
  `lastLoginDate` datetime DEFAULT NULL,
  `lastLoginAttemptIp` varchar(45) DEFAULT NULL,
  `invalidLoginWindowStart` datetime DEFAULT NULL,
  `invalidLoginCount` tinyint(3) UNSIGNED DEFAULT NULL,
  `lastInvalidLoginDate` datetime DEFAULT NULL,
  `lockoutDate` datetime DEFAULT NULL,
  `hasDashboard` tinyint(1) NOT NULL DEFAULT '0',
  `verificationCode` varchar(255) DEFAULT NULL,
  `verificationCodeIssuedDate` datetime DEFAULT NULL,
  `unverifiedEmail` varchar(255) DEFAULT NULL,
  `passwordResetRequired` tinyint(1) NOT NULL DEFAULT '0',
  `lastPasswordChangeDate` datetime DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_users`
--

INSERT INTO `craft_users` (`id`, `username`, `photoId`, `firstName`, `lastName`, `email`, `password`, `admin`, `locked`, `suspended`, `pending`, `lastLoginDate`, `lastLoginAttemptIp`, `invalidLoginWindowStart`, `invalidLoginCount`, `lastInvalidLoginDate`, `lockoutDate`, `hasDashboard`, `verificationCode`, `verificationCodeIssuedDate`, `unverifiedEmail`, `passwordResetRequired`, `lastPasswordChangeDate`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 'ideabase', NULL, NULL, NULL, 'info@ideabasekent.com', '$2y$13$5T6BIgvlnAVqKK4rDrY/3urxYSaEsVCHl24zJvtUTDsH6DThE4mnO', 1, 0, 0, 0, '2018-08-13 14:38:38', '::1', NULL, NULL, '2018-08-13 14:38:33', NULL, 1, NULL, NULL, NULL, 0, '2018-05-02 20:31:27', '2018-05-02 20:31:27', '2018-08-13 14:38:38', '36ed8153-4670-400d-8540-d2f926079c0e');

-- --------------------------------------------------------

--
-- Table structure for table `craft_volumefolders`
--

CREATE TABLE `craft_volumefolders` (
  `id` int(11) NOT NULL,
  `parentId` int(11) DEFAULT NULL,
  `volumeId` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_volumefolders`
--

INSERT INTO `craft_volumefolders` (`id`, `parentId`, `volumeId`, `name`, `path`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, NULL, 1, 'Assets', '', '2018-05-07 19:45:09', '2018-05-07 19:45:09', '919ceac1-f7ec-42d4-9d53-bd08636acb0d'),
(2, NULL, NULL, 'Temporary source', NULL, '2018-05-07 19:45:44', '2018-05-07 19:45:44', '8d8a4731-8c76-47c7-ae0a-50c63527502b'),
(3, 2, NULL, 'user_1', 'user_1/', '2018-05-07 19:45:44', '2018-05-07 19:45:44', '610ec81c-b724-4c93-b951-a5d5f13e861f');

-- --------------------------------------------------------

--
-- Table structure for table `craft_volumes`
--

CREATE TABLE `craft_volumes` (
  `id` int(11) NOT NULL,
  `fieldLayoutId` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `handle` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `hasUrls` tinyint(1) NOT NULL DEFAULT '1',
  `url` varchar(255) DEFAULT NULL,
  `settings` text,
  `sortOrder` smallint(6) UNSIGNED DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_volumes`
--

INSERT INTO `craft_volumes` (`id`, `fieldLayoutId`, `name`, `handle`, `type`, `hasUrls`, `url`, `settings`, `sortOrder`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 9, 'Assets', 'assets', 'craft\\volumes\\Local', 1, '@baseUrl/assets/img/uploads', '{\"path\":\"assets/img/uploads/\"}', 1, '2018-05-07 19:45:09', '2018-05-09 19:25:10', '0f18705a-a007-42c9-ab24-1dee9a7d2c8e');

-- --------------------------------------------------------

--
-- Table structure for table `craft_widgets`
--

CREATE TABLE `craft_widgets` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `sortOrder` smallint(6) UNSIGNED DEFAULT NULL,
  `colspan` tinyint(1) NOT NULL DEFAULT '0',
  `settings` text,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `uid` char(36) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `craft_widgets`
--

INSERT INTO `craft_widgets` (`id`, `userId`, `type`, `sortOrder`, `colspan`, `settings`, `enabled`, `dateCreated`, `dateUpdated`, `uid`) VALUES
(1, 1, 'craft\\widgets\\RecentEntries', 1, 0, '{\"section\":\"*\",\"siteId\":\"1\",\"limit\":10}', 1, '2018-05-02 20:31:29', '2018-05-02 20:31:29', '38cc3888-b2dc-4b5e-9d96-3c62ea59ae10'),
(2, 1, 'craft\\widgets\\CraftSupport', 2, 0, '[]', 1, '2018-05-02 20:31:29', '2018-05-02 20:31:29', 'c4573e93-ab40-4276-bf0a-7725de48a741'),
(3, 1, 'craft\\widgets\\Updates', 3, 0, '[]', 1, '2018-05-02 20:31:29', '2018-05-02 20:31:29', '138c2926-45e7-4cb4-a9ff-11ed28a77e79');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `craft_assetindexdata`
--
ALTER TABLE `craft_assetindexdata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_assetindexdata_sessionId_volumeId_idx` (`sessionId`,`volumeId`),
  ADD KEY `craft_assetindexdata_volumeId_idx` (`volumeId`);

--
-- Indexes for table `craft_assets`
--
ALTER TABLE `craft_assets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_assets_filename_folderId_unq_idx` (`filename`,`folderId`),
  ADD KEY `craft_assets_folderId_idx` (`folderId`),
  ADD KEY `craft_assets_volumeId_idx` (`volumeId`);

--
-- Indexes for table `craft_assettransformindex`
--
ALTER TABLE `craft_assettransformindex`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_assettransformindex_volumeId_assetId_location_idx` (`volumeId`,`assetId`,`location`);

--
-- Indexes for table `craft_assettransforms`
--
ALTER TABLE `craft_assettransforms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_assettransforms_name_unq_idx` (`name`),
  ADD UNIQUE KEY `craft_assettransforms_handle_unq_idx` (`handle`);

--
-- Indexes for table `craft_categories`
--
ALTER TABLE `craft_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_categories_groupId_idx` (`groupId`);

--
-- Indexes for table `craft_categorygroups`
--
ALTER TABLE `craft_categorygroups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_categorygroups_name_unq_idx` (`name`),
  ADD UNIQUE KEY `craft_categorygroups_handle_unq_idx` (`handle`),
  ADD KEY `craft_categorygroups_structureId_idx` (`structureId`),
  ADD KEY `craft_categorygroups_fieldLayoutId_idx` (`fieldLayoutId`);

--
-- Indexes for table `craft_categorygroups_sites`
--
ALTER TABLE `craft_categorygroups_sites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_categorygroups_sites_groupId_siteId_unq_idx` (`groupId`,`siteId`),
  ADD KEY `craft_categorygroups_sites_siteId_idx` (`siteId`);

--
-- Indexes for table `craft_content`
--
ALTER TABLE `craft_content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_content_elementId_siteId_unq_idx` (`elementId`,`siteId`),
  ADD KEY `craft_content_siteId_idx` (`siteId`),
  ADD KEY `craft_content_title_idx` (`title`);

--
-- Indexes for table `craft_craftidtokens`
--
ALTER TABLE `craft_craftidtokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_craftidtokens_userId_fk` (`userId`);

--
-- Indexes for table `craft_deprecationerrors`
--
ALTER TABLE `craft_deprecationerrors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_deprecationerrors_key_fingerprint_unq_idx` (`key`,`fingerprint`);

--
-- Indexes for table `craft_elementindexsettings`
--
ALTER TABLE `craft_elementindexsettings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_elementindexsettings_type_unq_idx` (`type`);

--
-- Indexes for table `craft_elements`
--
ALTER TABLE `craft_elements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_elements_fieldLayoutId_idx` (`fieldLayoutId`),
  ADD KEY `craft_elements_type_idx` (`type`),
  ADD KEY `craft_elements_enabled_idx` (`enabled`),
  ADD KEY `craft_elements_archived_dateCreated_idx` (`archived`,`dateCreated`);

--
-- Indexes for table `craft_elements_sites`
--
ALTER TABLE `craft_elements_sites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_elements_sites_elementId_siteId_unq_idx` (`elementId`,`siteId`),
  ADD UNIQUE KEY `craft_elements_sites_uri_siteId_unq_idx` (`uri`,`siteId`),
  ADD KEY `craft_elements_sites_siteId_idx` (`siteId`),
  ADD KEY `craft_elements_sites_slug_siteId_idx` (`slug`,`siteId`),
  ADD KEY `craft_elements_sites_enabled_idx` (`enabled`);

--
-- Indexes for table `craft_entries`
--
ALTER TABLE `craft_entries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_entries_postDate_idx` (`postDate`),
  ADD KEY `craft_entries_expiryDate_idx` (`expiryDate`),
  ADD KEY `craft_entries_authorId_idx` (`authorId`),
  ADD KEY `craft_entries_sectionId_idx` (`sectionId`),
  ADD KEY `craft_entries_typeId_idx` (`typeId`);

--
-- Indexes for table `craft_entrydrafts`
--
ALTER TABLE `craft_entrydrafts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_entrydrafts_sectionId_idx` (`sectionId`),
  ADD KEY `craft_entrydrafts_entryId_siteId_idx` (`entryId`,`siteId`),
  ADD KEY `craft_entrydrafts_siteId_idx` (`siteId`),
  ADD KEY `craft_entrydrafts_creatorId_idx` (`creatorId`);

--
-- Indexes for table `craft_entrytypes`
--
ALTER TABLE `craft_entrytypes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_entrytypes_name_sectionId_unq_idx` (`name`,`sectionId`),
  ADD UNIQUE KEY `craft_entrytypes_handle_sectionId_unq_idx` (`handle`,`sectionId`),
  ADD KEY `craft_entrytypes_sectionId_idx` (`sectionId`),
  ADD KEY `craft_entrytypes_fieldLayoutId_idx` (`fieldLayoutId`);

--
-- Indexes for table `craft_entryversions`
--
ALTER TABLE `craft_entryversions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_entryversions_sectionId_idx` (`sectionId`),
  ADD KEY `craft_entryversions_entryId_siteId_idx` (`entryId`,`siteId`),
  ADD KEY `craft_entryversions_siteId_idx` (`siteId`),
  ADD KEY `craft_entryversions_creatorId_idx` (`creatorId`);

--
-- Indexes for table `craft_fieldgroups`
--
ALTER TABLE `craft_fieldgroups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_fieldgroups_name_unq_idx` (`name`);

--
-- Indexes for table `craft_fieldlayoutfields`
--
ALTER TABLE `craft_fieldlayoutfields`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_fieldlayoutfields_layoutId_fieldId_unq_idx` (`layoutId`,`fieldId`),
  ADD KEY `craft_fieldlayoutfields_sortOrder_idx` (`sortOrder`),
  ADD KEY `craft_fieldlayoutfields_tabId_idx` (`tabId`),
  ADD KEY `craft_fieldlayoutfields_fieldId_idx` (`fieldId`);

--
-- Indexes for table `craft_fieldlayouts`
--
ALTER TABLE `craft_fieldlayouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_fieldlayouts_type_idx` (`type`);

--
-- Indexes for table `craft_fieldlayouttabs`
--
ALTER TABLE `craft_fieldlayouttabs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_fieldlayouttabs_sortOrder_idx` (`sortOrder`),
  ADD KEY `craft_fieldlayouttabs_layoutId_idx` (`layoutId`);

--
-- Indexes for table `craft_fields`
--
ALTER TABLE `craft_fields`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_fields_handle_context_unq_idx` (`handle`,`context`),
  ADD KEY `craft_fields_groupId_idx` (`groupId`),
  ADD KEY `craft_fields_context_idx` (`context`);

--
-- Indexes for table `craft_globalsets`
--
ALTER TABLE `craft_globalsets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_globalsets_name_unq_idx` (`name`),
  ADD UNIQUE KEY `craft_globalsets_handle_unq_idx` (`handle`),
  ADD KEY `craft_globalsets_fieldLayoutId_idx` (`fieldLayoutId`);

--
-- Indexes for table `craft_info`
--
ALTER TABLE `craft_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `craft_matrixblocks`
--
ALTER TABLE `craft_matrixblocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_matrixblocks_ownerId_idx` (`ownerId`),
  ADD KEY `craft_matrixblocks_fieldId_idx` (`fieldId`),
  ADD KEY `craft_matrixblocks_typeId_idx` (`typeId`),
  ADD KEY `craft_matrixblocks_sortOrder_idx` (`sortOrder`),
  ADD KEY `craft_matrixblocks_ownerSiteId_idx` (`ownerSiteId`);

--
-- Indexes for table `craft_matrixblocktypes`
--
ALTER TABLE `craft_matrixblocktypes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_matrixblocktypes_name_fieldId_unq_idx` (`name`,`fieldId`),
  ADD UNIQUE KEY `craft_matrixblocktypes_handle_fieldId_unq_idx` (`handle`,`fieldId`),
  ADD KEY `craft_matrixblocktypes_fieldId_idx` (`fieldId`),
  ADD KEY `craft_matrixblocktypes_fieldLayoutId_idx` (`fieldLayoutId`);

--
-- Indexes for table `craft_matrixcontent_body`
--
ALTER TABLE `craft_matrixcontent_body`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_matrixcontent_body_elementId_siteId_unq_idx` (`elementId`,`siteId`),
  ADD KEY `craft_matrixcontent_body_siteId_fk` (`siteId`);

--
-- Indexes for table `craft_matrixcontent_headersvg`
--
ALTER TABLE `craft_matrixcontent_headersvg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_matrixcontent_headersvg_elementId_siteId_unq_idx` (`elementId`,`siteId`),
  ADD KEY `craft_matrixcontent_headersvg_siteId_fk` (`siteId`);

--
-- Indexes for table `craft_matrixcontent_hyperlink`
--
ALTER TABLE `craft_matrixcontent_hyperlink`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_matrixcontent_hyperlink_elementId_siteId_unq_idx` (`elementId`,`siteId`),
  ADD KEY `craft_matrixcontent_hyperlink_siteId_fk` (`siteId`);

--
-- Indexes for table `craft_matrixcontent_image`
--
ALTER TABLE `craft_matrixcontent_image`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_matrixcontent_image_elementId_siteId_unq_idx` (`elementId`,`siteId`),
  ADD KEY `craft_matrixcontent_image_siteId_fk` (`siteId`);

--
-- Indexes for table `craft_matrixcontent_instructoremail`
--
ALTER TABLE `craft_matrixcontent_instructoremail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_matrixcontent_instructoremail_elementId_siteId_unq_idx` (`elementId`,`siteId`),
  ADD KEY `craft_matrixcontent_instructoremail_siteId_fk` (`siteId`);

--
-- Indexes for table `craft_matrixcontent_instructorinformation`
--
ALTER TABLE `craft_matrixcontent_instructorinformation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_matrixcontent_instructorinformatio_elementId_siteId_unq_id` (`elementId`,`siteId`),
  ADD KEY `craft_matrixcontent_instructorinformation_siteId_fk` (`siteId`);

--
-- Indexes for table `craft_matrixcontent_navigationitems`
--
ALTER TABLE `craft_matrixcontent_navigationitems`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_matrixcontent_navigationitems_elementId_siteId_unq_idx` (`elementId`,`siteId`),
  ADD KEY `craft_matrixcontent_navigationitems_siteId_fk` (`siteId`);

--
-- Indexes for table `craft_migrations`
--
ALTER TABLE `craft_migrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_migrations_pluginId_idx` (`pluginId`),
  ADD KEY `craft_migrations_type_pluginId_idx` (`type`,`pluginId`);

--
-- Indexes for table `craft_plugins`
--
ALTER TABLE `craft_plugins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_plugins_handle_unq_idx` (`handle`),
  ADD KEY `craft_plugins_enabled_idx` (`enabled`);

--
-- Indexes for table `craft_queue`
--
ALTER TABLE `craft_queue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_queue_fail_timeUpdated_timePushed_idx` (`fail`,`timeUpdated`,`timePushed`),
  ADD KEY `craft_queue_fail_timeUpdated_delay_idx` (`fail`,`timeUpdated`,`delay`);

--
-- Indexes for table `craft_relations`
--
ALTER TABLE `craft_relations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_relations_fieldId_sourceId_sourceSiteId_targetId_unq_idx` (`fieldId`,`sourceId`,`sourceSiteId`,`targetId`),
  ADD KEY `craft_relations_sourceId_idx` (`sourceId`),
  ADD KEY `craft_relations_targetId_idx` (`targetId`),
  ADD KEY `craft_relations_sourceSiteId_idx` (`sourceSiteId`);

--
-- Indexes for table `craft_resourcepaths`
--
ALTER TABLE `craft_resourcepaths`
  ADD PRIMARY KEY (`hash`);

--
-- Indexes for table `craft_routes`
--
ALTER TABLE `craft_routes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_routes_uriPattern_idx` (`uriPattern`),
  ADD KEY `craft_routes_siteId_idx` (`siteId`);

--
-- Indexes for table `craft_searchindex`
--
ALTER TABLE `craft_searchindex`
  ADD PRIMARY KEY (`elementId`,`attribute`,`fieldId`,`siteId`);
ALTER TABLE `craft_searchindex` ADD FULLTEXT KEY `craft_searchindex_keywords_idx` (`keywords`);

--
-- Indexes for table `craft_sections`
--
ALTER TABLE `craft_sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_sections_handle_unq_idx` (`handle`),
  ADD UNIQUE KEY `craft_sections_name_unq_idx` (`name`),
  ADD KEY `craft_sections_structureId_idx` (`structureId`);

--
-- Indexes for table `craft_sections_sites`
--
ALTER TABLE `craft_sections_sites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_sections_sites_sectionId_siteId_unq_idx` (`sectionId`,`siteId`),
  ADD KEY `craft_sections_sites_siteId_idx` (`siteId`);

--
-- Indexes for table `craft_sessions`
--
ALTER TABLE `craft_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_sessions_uid_idx` (`uid`),
  ADD KEY `craft_sessions_token_idx` (`token`),
  ADD KEY `craft_sessions_dateUpdated_idx` (`dateUpdated`),
  ADD KEY `craft_sessions_userId_idx` (`userId`);

--
-- Indexes for table `craft_shunnedmessages`
--
ALTER TABLE `craft_shunnedmessages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_shunnedmessages_userId_message_unq_idx` (`userId`,`message`);

--
-- Indexes for table `craft_sitegroups`
--
ALTER TABLE `craft_sitegroups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_sitegroups_name_unq_idx` (`name`);

--
-- Indexes for table `craft_sites`
--
ALTER TABLE `craft_sites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_sites_handle_unq_idx` (`handle`),
  ADD KEY `craft_sites_sortOrder_idx` (`sortOrder`),
  ADD KEY `craft_sites_groupId_fk` (`groupId`);

--
-- Indexes for table `craft_structureelements`
--
ALTER TABLE `craft_structureelements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_structureelements_structureId_elementId_unq_idx` (`structureId`,`elementId`),
  ADD KEY `craft_structureelements_root_idx` (`root`),
  ADD KEY `craft_structureelements_lft_idx` (`lft`),
  ADD KEY `craft_structureelements_rgt_idx` (`rgt`),
  ADD KEY `craft_structureelements_level_idx` (`level`),
  ADD KEY `craft_structureelements_elementId_idx` (`elementId`);

--
-- Indexes for table `craft_structures`
--
ALTER TABLE `craft_structures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `craft_systemmessages`
--
ALTER TABLE `craft_systemmessages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_systemmessages_key_language_unq_idx` (`key`,`language`),
  ADD KEY `craft_systemmessages_language_idx` (`language`);

--
-- Indexes for table `craft_systemsettings`
--
ALTER TABLE `craft_systemsettings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_systemsettings_category_unq_idx` (`category`);

--
-- Indexes for table `craft_taggroups`
--
ALTER TABLE `craft_taggroups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_taggroups_name_unq_idx` (`name`),
  ADD UNIQUE KEY `craft_taggroups_handle_unq_idx` (`handle`),
  ADD KEY `craft_taggroups_fieldLayoutId_fk` (`fieldLayoutId`);

--
-- Indexes for table `craft_tags`
--
ALTER TABLE `craft_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_tags_groupId_idx` (`groupId`);

--
-- Indexes for table `craft_templatecacheelements`
--
ALTER TABLE `craft_templatecacheelements`
  ADD KEY `craft_templatecacheelements_cacheId_idx` (`cacheId`),
  ADD KEY `craft_templatecacheelements_elementId_idx` (`elementId`);

--
-- Indexes for table `craft_templatecachequeries`
--
ALTER TABLE `craft_templatecachequeries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_templatecachequeries_cacheId_idx` (`cacheId`),
  ADD KEY `craft_templatecachequeries_type_idx` (`type`);

--
-- Indexes for table `craft_templatecaches`
--
ALTER TABLE `craft_templatecaches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_templatecaches_cacheKey_siteId_expiryDate_path_idx` (`cacheKey`,`siteId`,`expiryDate`,`path`),
  ADD KEY `craft_templatecaches_cacheKey_siteId_expiryDate_idx` (`cacheKey`,`siteId`,`expiryDate`),
  ADD KEY `craft_templatecaches_siteId_idx` (`siteId`);

--
-- Indexes for table `craft_tokens`
--
ALTER TABLE `craft_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_tokens_token_unq_idx` (`token`),
  ADD KEY `craft_tokens_expiryDate_idx` (`expiryDate`);

--
-- Indexes for table `craft_usergroups`
--
ALTER TABLE `craft_usergroups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_usergroups_handle_unq_idx` (`handle`),
  ADD UNIQUE KEY `craft_usergroups_name_unq_idx` (`name`);

--
-- Indexes for table `craft_usergroups_users`
--
ALTER TABLE `craft_usergroups_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_usergroups_users_groupId_userId_unq_idx` (`groupId`,`userId`),
  ADD KEY `craft_usergroups_users_userId_idx` (`userId`);

--
-- Indexes for table `craft_userpermissions`
--
ALTER TABLE `craft_userpermissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_userpermissions_name_unq_idx` (`name`);

--
-- Indexes for table `craft_userpermissions_usergroups`
--
ALTER TABLE `craft_userpermissions_usergroups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_userpermissions_usergroups_permissionId_groupId_unq_idx` (`permissionId`,`groupId`),
  ADD KEY `craft_userpermissions_usergroups_groupId_idx` (`groupId`);

--
-- Indexes for table `craft_userpermissions_users`
--
ALTER TABLE `craft_userpermissions_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_userpermissions_users_permissionId_userId_unq_idx` (`permissionId`,`userId`),
  ADD KEY `craft_userpermissions_users_userId_idx` (`userId`);

--
-- Indexes for table `craft_userpreferences`
--
ALTER TABLE `craft_userpreferences`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `craft_users`
--
ALTER TABLE `craft_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_users_username_unq_idx` (`username`),
  ADD UNIQUE KEY `craft_users_email_unq_idx` (`email`),
  ADD KEY `craft_users_uid_idx` (`uid`),
  ADD KEY `craft_users_verificationCode_idx` (`verificationCode`),
  ADD KEY `craft_users_photoId_fk` (`photoId`);

--
-- Indexes for table `craft_volumefolders`
--
ALTER TABLE `craft_volumefolders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_volumefolders_name_parentId_volumeId_unq_idx` (`name`,`parentId`,`volumeId`),
  ADD KEY `craft_volumefolders_parentId_idx` (`parentId`),
  ADD KEY `craft_volumefolders_volumeId_idx` (`volumeId`);

--
-- Indexes for table `craft_volumes`
--
ALTER TABLE `craft_volumes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_volumes_name_unq_idx` (`name`),
  ADD UNIQUE KEY `craft_volumes_handle_unq_idx` (`handle`),
  ADD KEY `craft_volumes_fieldLayoutId_idx` (`fieldLayoutId`);

--
-- Indexes for table `craft_widgets`
--
ALTER TABLE `craft_widgets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `craft_widgets_userId_idx` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `craft_assetindexdata`
--
ALTER TABLE `craft_assetindexdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `craft_assettransformindex`
--
ALTER TABLE `craft_assettransformindex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_assettransforms`
--
ALTER TABLE `craft_assettransforms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_categorygroups`
--
ALTER TABLE `craft_categorygroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `craft_categorygroups_sites`
--
ALTER TABLE `craft_categorygroups_sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `craft_content`
--
ALTER TABLE `craft_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `craft_craftidtokens`
--
ALTER TABLE `craft_craftidtokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_deprecationerrors`
--
ALTER TABLE `craft_deprecationerrors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_elementindexsettings`
--
ALTER TABLE `craft_elementindexsettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `craft_elements`
--
ALTER TABLE `craft_elements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `craft_elements_sites`
--
ALTER TABLE `craft_elements_sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `craft_entrydrafts`
--
ALTER TABLE `craft_entrydrafts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_entrytypes`
--
ALTER TABLE `craft_entrytypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `craft_entryversions`
--
ALTER TABLE `craft_entryversions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `craft_fieldgroups`
--
ALTER TABLE `craft_fieldgroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `craft_fieldlayoutfields`
--
ALTER TABLE `craft_fieldlayoutfields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=462;

--
-- AUTO_INCREMENT for table `craft_fieldlayouts`
--
ALTER TABLE `craft_fieldlayouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `craft_fieldlayouttabs`
--
ALTER TABLE `craft_fieldlayouttabs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `craft_fields`
--
ALTER TABLE `craft_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `craft_globalsets`
--
ALTER TABLE `craft_globalsets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `craft_info`
--
ALTER TABLE `craft_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `craft_matrixblocktypes`
--
ALTER TABLE `craft_matrixblocktypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `craft_matrixcontent_body`
--
ALTER TABLE `craft_matrixcontent_body`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `craft_matrixcontent_headersvg`
--
ALTER TABLE `craft_matrixcontent_headersvg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `craft_matrixcontent_hyperlink`
--
ALTER TABLE `craft_matrixcontent_hyperlink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `craft_matrixcontent_image`
--
ALTER TABLE `craft_matrixcontent_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `craft_matrixcontent_instructoremail`
--
ALTER TABLE `craft_matrixcontent_instructoremail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `craft_matrixcontent_instructorinformation`
--
ALTER TABLE `craft_matrixcontent_instructorinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `craft_matrixcontent_navigationitems`
--
ALTER TABLE `craft_matrixcontent_navigationitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `craft_migrations`
--
ALTER TABLE `craft_migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `craft_plugins`
--
ALTER TABLE `craft_plugins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `craft_queue`
--
ALTER TABLE `craft_queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_relations`
--
ALTER TABLE `craft_relations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `craft_routes`
--
ALTER TABLE `craft_routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_sections`
--
ALTER TABLE `craft_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `craft_sections_sites`
--
ALTER TABLE `craft_sections_sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `craft_sessions`
--
ALTER TABLE `craft_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `craft_shunnedmessages`
--
ALTER TABLE `craft_shunnedmessages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_sitegroups`
--
ALTER TABLE `craft_sitegroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `craft_sites`
--
ALTER TABLE `craft_sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `craft_structureelements`
--
ALTER TABLE `craft_structureelements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `craft_structures`
--
ALTER TABLE `craft_structures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `craft_systemmessages`
--
ALTER TABLE `craft_systemmessages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_systemsettings`
--
ALTER TABLE `craft_systemsettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `craft_taggroups`
--
ALTER TABLE `craft_taggroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_templatecachequeries`
--
ALTER TABLE `craft_templatecachequeries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_templatecaches`
--
ALTER TABLE `craft_templatecaches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_tokens`
--
ALTER TABLE `craft_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_usergroups`
--
ALTER TABLE `craft_usergroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_usergroups_users`
--
ALTER TABLE `craft_usergroups_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_userpermissions`
--
ALTER TABLE `craft_userpermissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_userpermissions_usergroups`
--
ALTER TABLE `craft_userpermissions_usergroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_userpermissions_users`
--
ALTER TABLE `craft_userpermissions_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `craft_userpreferences`
--
ALTER TABLE `craft_userpreferences`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `craft_volumefolders`
--
ALTER TABLE `craft_volumefolders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `craft_volumes`
--
ALTER TABLE `craft_volumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `craft_widgets`
--
ALTER TABLE `craft_widgets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `craft_assetindexdata`
--
ALTER TABLE `craft_assetindexdata`
  ADD CONSTRAINT `craft_assetindexdata_volumeId_fk` FOREIGN KEY (`volumeId`) REFERENCES `craft_volumes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_assets`
--
ALTER TABLE `craft_assets`
  ADD CONSTRAINT `craft_assets_folderId_fk` FOREIGN KEY (`folderId`) REFERENCES `craft_volumefolders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_assets_id_fk` FOREIGN KEY (`id`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_assets_volumeId_fk` FOREIGN KEY (`volumeId`) REFERENCES `craft_volumes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_categories`
--
ALTER TABLE `craft_categories`
  ADD CONSTRAINT `craft_categories_groupId_fk` FOREIGN KEY (`groupId`) REFERENCES `craft_categorygroups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_categories_id_fk` FOREIGN KEY (`id`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_categorygroups`
--
ALTER TABLE `craft_categorygroups`
  ADD CONSTRAINT `craft_categorygroups_fieldLayoutId_fk` FOREIGN KEY (`fieldLayoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `craft_categorygroups_structureId_fk` FOREIGN KEY (`structureId`) REFERENCES `craft_structures` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_categorygroups_sites`
--
ALTER TABLE `craft_categorygroups_sites`
  ADD CONSTRAINT `craft_categorygroups_sites_groupId_fk` FOREIGN KEY (`groupId`) REFERENCES `craft_categorygroups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_categorygroups_sites_siteId_fk` FOREIGN KEY (`siteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `craft_content`
--
ALTER TABLE `craft_content`
  ADD CONSTRAINT `craft_content_elementId_fk` FOREIGN KEY (`elementId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_content_siteId_fk` FOREIGN KEY (`siteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `craft_craftidtokens`
--
ALTER TABLE `craft_craftidtokens`
  ADD CONSTRAINT `craft_craftidtokens_userId_fk` FOREIGN KEY (`userId`) REFERENCES `craft_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_elements`
--
ALTER TABLE `craft_elements`
  ADD CONSTRAINT `craft_elements_fieldLayoutId_fk` FOREIGN KEY (`fieldLayoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `craft_elements_sites`
--
ALTER TABLE `craft_elements_sites`
  ADD CONSTRAINT `craft_elements_sites_elementId_fk` FOREIGN KEY (`elementId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_elements_sites_siteId_fk` FOREIGN KEY (`siteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `craft_entries`
--
ALTER TABLE `craft_entries`
  ADD CONSTRAINT `craft_entries_authorId_fk` FOREIGN KEY (`authorId`) REFERENCES `craft_users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_entries_id_fk` FOREIGN KEY (`id`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_entries_sectionId_fk` FOREIGN KEY (`sectionId`) REFERENCES `craft_sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_entries_typeId_fk` FOREIGN KEY (`typeId`) REFERENCES `craft_entrytypes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_entrydrafts`
--
ALTER TABLE `craft_entrydrafts`
  ADD CONSTRAINT `craft_entrydrafts_creatorId_fk` FOREIGN KEY (`creatorId`) REFERENCES `craft_users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_entrydrafts_entryId_fk` FOREIGN KEY (`entryId`) REFERENCES `craft_entries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_entrydrafts_sectionId_fk` FOREIGN KEY (`sectionId`) REFERENCES `craft_sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_entrydrafts_siteId_fk` FOREIGN KEY (`siteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `craft_entrytypes`
--
ALTER TABLE `craft_entrytypes`
  ADD CONSTRAINT `craft_entrytypes_fieldLayoutId_fk` FOREIGN KEY (`fieldLayoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `craft_entrytypes_sectionId_fk` FOREIGN KEY (`sectionId`) REFERENCES `craft_sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_entryversions`
--
ALTER TABLE `craft_entryversions`
  ADD CONSTRAINT `craft_entryversions_creatorId_fk` FOREIGN KEY (`creatorId`) REFERENCES `craft_users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `craft_entryversions_entryId_fk` FOREIGN KEY (`entryId`) REFERENCES `craft_entries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_entryversions_sectionId_fk` FOREIGN KEY (`sectionId`) REFERENCES `craft_sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_entryversions_siteId_fk` FOREIGN KEY (`siteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `craft_fieldlayoutfields`
--
ALTER TABLE `craft_fieldlayoutfields`
  ADD CONSTRAINT `craft_fieldlayoutfields_fieldId_fk` FOREIGN KEY (`fieldId`) REFERENCES `craft_fields` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_fieldlayoutfields_layoutId_fk` FOREIGN KEY (`layoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_fieldlayoutfields_tabId_fk` FOREIGN KEY (`tabId`) REFERENCES `craft_fieldlayouttabs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_fieldlayouttabs`
--
ALTER TABLE `craft_fieldlayouttabs`
  ADD CONSTRAINT `craft_fieldlayouttabs_layoutId_fk` FOREIGN KEY (`layoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_fields`
--
ALTER TABLE `craft_fields`
  ADD CONSTRAINT `craft_fields_groupId_fk` FOREIGN KEY (`groupId`) REFERENCES `craft_fieldgroups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_globalsets`
--
ALTER TABLE `craft_globalsets`
  ADD CONSTRAINT `craft_globalsets_fieldLayoutId_fk` FOREIGN KEY (`fieldLayoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `craft_globalsets_id_fk` FOREIGN KEY (`id`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_matrixblocks`
--
ALTER TABLE `craft_matrixblocks`
  ADD CONSTRAINT `craft_matrixblocks_fieldId_fk` FOREIGN KEY (`fieldId`) REFERENCES `craft_fields` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_matrixblocks_id_fk` FOREIGN KEY (`id`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_matrixblocks_ownerId_fk` FOREIGN KEY (`ownerId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_matrixblocks_ownerSiteId_fk` FOREIGN KEY (`ownerSiteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `craft_matrixblocks_typeId_fk` FOREIGN KEY (`typeId`) REFERENCES `craft_matrixblocktypes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_matrixblocktypes`
--
ALTER TABLE `craft_matrixblocktypes`
  ADD CONSTRAINT `craft_matrixblocktypes_fieldId_fk` FOREIGN KEY (`fieldId`) REFERENCES `craft_fields` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_matrixblocktypes_fieldLayoutId_fk` FOREIGN KEY (`fieldLayoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `craft_matrixcontent_body`
--
ALTER TABLE `craft_matrixcontent_body`
  ADD CONSTRAINT `craft_matrixcontent_body_elementId_fk` FOREIGN KEY (`elementId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_matrixcontent_body_siteId_fk` FOREIGN KEY (`siteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `craft_matrixcontent_headersvg`
--
ALTER TABLE `craft_matrixcontent_headersvg`
  ADD CONSTRAINT `craft_matrixcontent_headersvg_elementId_fk` FOREIGN KEY (`elementId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_matrixcontent_headersvg_siteId_fk` FOREIGN KEY (`siteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `craft_matrixcontent_hyperlink`
--
ALTER TABLE `craft_matrixcontent_hyperlink`
  ADD CONSTRAINT `craft_matrixcontent_hyperlink_elementId_fk` FOREIGN KEY (`elementId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_matrixcontent_hyperlink_siteId_fk` FOREIGN KEY (`siteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `craft_matrixcontent_image`
--
ALTER TABLE `craft_matrixcontent_image`
  ADD CONSTRAINT `craft_matrixcontent_image_elementId_fk` FOREIGN KEY (`elementId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_matrixcontent_image_siteId_fk` FOREIGN KEY (`siteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `craft_matrixcontent_instructoremail`
--
ALTER TABLE `craft_matrixcontent_instructoremail`
  ADD CONSTRAINT `craft_matrixcontent_instructoremail_elementId_fk` FOREIGN KEY (`elementId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_matrixcontent_instructoremail_siteId_fk` FOREIGN KEY (`siteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `craft_matrixcontent_instructorinformation`
--
ALTER TABLE `craft_matrixcontent_instructorinformation`
  ADD CONSTRAINT `craft_matrixcontent_instructorinformation_elementId_fk` FOREIGN KEY (`elementId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_matrixcontent_instructorinformation_siteId_fk` FOREIGN KEY (`siteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `craft_matrixcontent_navigationitems`
--
ALTER TABLE `craft_matrixcontent_navigationitems`
  ADD CONSTRAINT `craft_matrixcontent_navigationitems_elementId_fk` FOREIGN KEY (`elementId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_matrixcontent_navigationitems_siteId_fk` FOREIGN KEY (`siteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `craft_migrations`
--
ALTER TABLE `craft_migrations`
  ADD CONSTRAINT `craft_migrations_pluginId_fk` FOREIGN KEY (`pluginId`) REFERENCES `craft_plugins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_relations`
--
ALTER TABLE `craft_relations`
  ADD CONSTRAINT `craft_relations_fieldId_fk` FOREIGN KEY (`fieldId`) REFERENCES `craft_fields` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_relations_sourceId_fk` FOREIGN KEY (`sourceId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_relations_sourceSiteId_fk` FOREIGN KEY (`sourceSiteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `craft_relations_targetId_fk` FOREIGN KEY (`targetId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_routes`
--
ALTER TABLE `craft_routes`
  ADD CONSTRAINT `craft_routes_siteId_fk` FOREIGN KEY (`siteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `craft_sections`
--
ALTER TABLE `craft_sections`
  ADD CONSTRAINT `craft_sections_structureId_fk` FOREIGN KEY (`structureId`) REFERENCES `craft_structures` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `craft_sections_sites`
--
ALTER TABLE `craft_sections_sites`
  ADD CONSTRAINT `craft_sections_sites_sectionId_fk` FOREIGN KEY (`sectionId`) REFERENCES `craft_sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_sections_sites_siteId_fk` FOREIGN KEY (`siteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `craft_sessions`
--
ALTER TABLE `craft_sessions`
  ADD CONSTRAINT `craft_sessions_userId_fk` FOREIGN KEY (`userId`) REFERENCES `craft_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_shunnedmessages`
--
ALTER TABLE `craft_shunnedmessages`
  ADD CONSTRAINT `craft_shunnedmessages_userId_fk` FOREIGN KEY (`userId`) REFERENCES `craft_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_sites`
--
ALTER TABLE `craft_sites`
  ADD CONSTRAINT `craft_sites_groupId_fk` FOREIGN KEY (`groupId`) REFERENCES `craft_sitegroups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_structureelements`
--
ALTER TABLE `craft_structureelements`
  ADD CONSTRAINT `craft_structureelements_elementId_fk` FOREIGN KEY (`elementId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_structureelements_structureId_fk` FOREIGN KEY (`structureId`) REFERENCES `craft_structures` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_taggroups`
--
ALTER TABLE `craft_taggroups`
  ADD CONSTRAINT `craft_taggroups_fieldLayoutId_fk` FOREIGN KEY (`fieldLayoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `craft_tags`
--
ALTER TABLE `craft_tags`
  ADD CONSTRAINT `craft_tags_groupId_fk` FOREIGN KEY (`groupId`) REFERENCES `craft_taggroups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_tags_id_fk` FOREIGN KEY (`id`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_templatecacheelements`
--
ALTER TABLE `craft_templatecacheelements`
  ADD CONSTRAINT `craft_templatecacheelements_cacheId_fk` FOREIGN KEY (`cacheId`) REFERENCES `craft_templatecaches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_templatecacheelements_elementId_fk` FOREIGN KEY (`elementId`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_templatecachequeries`
--
ALTER TABLE `craft_templatecachequeries`
  ADD CONSTRAINT `craft_templatecachequeries_cacheId_fk` FOREIGN KEY (`cacheId`) REFERENCES `craft_templatecaches` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_templatecaches`
--
ALTER TABLE `craft_templatecaches`
  ADD CONSTRAINT `craft_templatecaches_siteId_fk` FOREIGN KEY (`siteId`) REFERENCES `craft_sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `craft_usergroups_users`
--
ALTER TABLE `craft_usergroups_users`
  ADD CONSTRAINT `craft_usergroups_users_groupId_fk` FOREIGN KEY (`groupId`) REFERENCES `craft_usergroups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_usergroups_users_userId_fk` FOREIGN KEY (`userId`) REFERENCES `craft_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_userpermissions_usergroups`
--
ALTER TABLE `craft_userpermissions_usergroups`
  ADD CONSTRAINT `craft_userpermissions_usergroups_groupId_fk` FOREIGN KEY (`groupId`) REFERENCES `craft_usergroups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_userpermissions_usergroups_permissionId_fk` FOREIGN KEY (`permissionId`) REFERENCES `craft_userpermissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_userpermissions_users`
--
ALTER TABLE `craft_userpermissions_users`
  ADD CONSTRAINT `craft_userpermissions_users_permissionId_fk` FOREIGN KEY (`permissionId`) REFERENCES `craft_userpermissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_userpermissions_users_userId_fk` FOREIGN KEY (`userId`) REFERENCES `craft_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_userpreferences`
--
ALTER TABLE `craft_userpreferences`
  ADD CONSTRAINT `craft_userpreferences_userId_fk` FOREIGN KEY (`userId`) REFERENCES `craft_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_users`
--
ALTER TABLE `craft_users`
  ADD CONSTRAINT `craft_users_id_fk` FOREIGN KEY (`id`) REFERENCES `craft_elements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_users_photoId_fk` FOREIGN KEY (`photoId`) REFERENCES `craft_assets` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `craft_volumefolders`
--
ALTER TABLE `craft_volumefolders`
  ADD CONSTRAINT `craft_volumefolders_parentId_fk` FOREIGN KEY (`parentId`) REFERENCES `craft_volumefolders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `craft_volumefolders_volumeId_fk` FOREIGN KEY (`volumeId`) REFERENCES `craft_volumes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `craft_volumes`
--
ALTER TABLE `craft_volumes`
  ADD CONSTRAINT `craft_volumes_fieldLayoutId_fk` FOREIGN KEY (`fieldLayoutId`) REFERENCES `craft_fieldlayouts` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `craft_widgets`
--
ALTER TABLE `craft_widgets`
  ADD CONSTRAINT `craft_widgets_userId_fk` FOREIGN KEY (`userId`) REFERENCES `craft_users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
