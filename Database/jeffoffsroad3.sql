-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 05:10 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeffoffsroad3`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `name`) VALUES
(1, 'Microtex'),
(2, 'Prochoice'),
(3, 'Glaz'),
(4, 'Geolander'),
(5, 'Nitto'),
(6, 'Toyo'),
(7, 'Cooper'),
(8, 'Kumho'),
(9, 'Falken'),
(10, 'Fuel '),
(11, 'Renegrade'),
(12, 'Throttle'),
(13, 'Fabtech'),
(14, 'Southern Truck'),
(15, 'Belltech'),
(16, 'ProRYDE'),
(17, 'Ready Lift ');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Wheel Rims'),
(2, 'Wheel Tires'),
(3, 'Suspension'),
(4, 'Oils'),
(5, 'Accessories'),
(6, 'Detailing Products');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` bigint(11) NOT NULL,
  `age` int(2) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `firstname`, `lastname`, `contact_no`, `age`, `email`, `created_at`, `updated_at`) VALUES
(0, 'Isabelle', 'Bernier', 9506314935, 37, 'qadams@example.com', '1998-09-11 08:58:26', '1973-11-18 21:11:09'),
(3, 'Nicholas', 'Ebert', 9215556968, 56, 'stephania76@gmail.com', '2011-10-19 00:13:19', '1983-02-25 07:16:53'),
(4, 'Yazmin', 'Bruen', 9295550504, 28, 'ggorczany@gmail.com', '1988-11-14 21:32:35', '1987-07-06 06:05:08'),
(5, 'Cale', 'Volkman', 9215551117, 40, 'torp.gene@gmail.com', '1999-10-30 07:48:33', '2000-02-10 10:31:53'),
(6, 'Nyah', 'Keebler', 9195255150, 32, 'opredovic@gmail.com', '1974-06-19 10:26:01', '1972-02-13 02:08:01'),
(7, 'Shanel', 'Mann', 9195551504, 32, 'ortiz.guy@egmail.com', '1980-08-10 11:24:29', '2012-01-25 07:20:49'),
(8, 'Pamela', 'Schamberger', 9215556963, 33, 'maxime.hauck@gmail.com', '1971-08-30 19:07:38', '1988-02-23 10:57:51'),
(9, 'Olen', 'Buckridge', 9195551519, 70, 'konopelski.julia@yahoo.com', '2004-05-21 21:54:04', '1996-11-24 18:58:28'),
(10, 'Eleanora', 'Sauer', 9195551519, 26, 'hanna.douglas@yahoo.com', '2006-01-18 20:37:28', '1987-06-10 08:46:42'),
(11, 'Woodrow', 'Bode', 9215551124, 41, 'karianne.emmerich@gmail.com', '1994-10-25 15:00:59', '1992-06-15 17:30:07'),
(12, 'Lucy', 'Tremblay', 9195321512, 35, 'stark.tre@example.com', '2015-01-29 05:30:28', '2017-09-01 22:27:15'),
(13, 'Kiana', 'Bartell', 9294550427, 50, 'erika52@gmail.com', '2014-08-10 13:41:00', '1999-04-23 07:58:10'),
(14, 'Agnes', 'Kozey', 9294550427, 42, 'aeichmann@yahoo.com', '1997-03-18 04:52:13', '2016-09-29 07:29:37'),
(15, 'Dexter', 'Davis', 9193351423, 58, 'farrell.rosanna@gmail.com', '2019-01-25 09:14:05', '2009-04-17 09:08:00'),
(16, 'Abdul', 'Corwin', 9193351423, 22, 'avis15@gmail.com', '1996-04-25 09:46:09', '1987-08-31 01:36:57'),
(17, 'Rosa', 'Walsh', 9280557934, 31, 'jmarvin@yahoo.com', '1973-04-18 05:31:49', '1989-05-11 06:45:27'),
(18, 'Clementine', 'Gusikowski', 9295550511, 65, 'chelsie79@example.com', '1974-04-22 04:49:54', '1980-01-23 12:11:29'),
(19, 'Chet', 'Kovacek', 9296780521, 30, 'leanna91@gmail.com', '1982-11-12 02:40:31', '2010-11-06 16:45:11'),
(20, 'Dell', 'Beahan', 9195559866, 81, 'pziemann@gmail.com', '1988-03-31 18:41:44', '2009-05-13 14:15:27'),
(21, 'Yvonne', 'Jacobson', 9285557941, 55, 'pfeffer.uriel@gmail.com', '1992-11-10 02:43:11', '1973-04-12 12:30:49'),
(22, 'Candido', 'Fisher', 9215552217, 24, 'alan38@gmail.com', '1985-09-18 11:15:20', '2013-02-19 12:10:59'),
(23, 'Chadd', 'Okuneva', 9215556962, 21, 'blanda.rosalia@gmail.com', '1999-09-29 13:52:21', '1981-09-26 11:52:16'),
(24, 'Juliana', 'Robel', 9195272543, 46, 'swift.burdette@gmail.com', '1978-07-14 15:17:34', '1983-09-08 22:18:08'),
(25, 'Mittie', 'Weissnat', 9197771225, 61, 'helene.senger@gmail.com', '2011-07-27 03:53:58', '2013-06-19 02:54:28'),
(26, 'Taryn', 'Koss', 9215234963, 18, 'rosanna48@gmail.com', '1981-06-16 12:55:36', '1998-08-05 08:21:05'),
(27, 'Karolann', 'Donnelly', 9195435451, 45, 'boehm.miller@gmail.com', '2001-06-05 04:35:09', '1983-04-14 22:59:59'),
(28, 'Devin', 'Lebsack', 9235550230, 19, 'blick.modesta@yahoo.com', '2014-04-22 17:14:03', '2010-02-19 11:43:40'),
(29, 'Helga', 'Spencer', 9215257070, 74, 'modesta25@gmail.com', '1971-07-12 16:31:46', '1974-06-24 19:23:13'),
(30, 'Kaitlyn', 'Dach', 9214327777, 43, 'myrl.lakin@example.com', '2003-04-04 00:01:48', '1985-03-26 03:21:11'),
(31, 'Leann', 'Aufderhar', 9563350504, 27, 'morgan79@yahoo.com', '1988-07-02 04:15:39', '2013-12-19 02:45:04'),
(32, 'Johnpaul', 'Feest', 9192341505, 51, 'rlarson@example.net', '1975-04-30 13:13:43', '1994-11-02 10:00:48'),
(33, 'Chet', 'Leannon', 9214559681, 53, 'lucile.stoltenberg@gmail.com', '2001-07-05 19:08:31', '2009-03-11 08:03:48'),
(34, 'Emerald', 'Romaguera', 9215887956, 33, 'durgan.dagmar@yahoo.com', '2010-11-10 09:02:30', '1988-03-30 15:37:25'),
(35, 'Angie', 'Mills', 9215420120, 26, 'kub.ally@gmail.com', '1979-12-06 00:13:28', '1986-11-07 11:13:32'),
(36, 'Gaston', 'Collier', 9211156456, 87, 'miller.meghan@gmail.com', '1974-02-24 01:02:21', '2007-01-25 13:39:26'),
(37, 'Alf', 'Mills', 9217856964, 32, 'daphney.kuhn@yahoo.com', '1979-06-19 07:52:03', '1998-02-24 21:58:55'),
(38, 'Robert', 'Windler', 9211452970, 22, 'jamal37@gmail.com', '1978-01-11 15:39:54', '2016-10-28 18:42:15'),
(39, 'Chaz', 'Beier', 9216786968, 21, 'zaria.paucek@gmail.com', '2014-09-28 21:47:36', '1974-06-21 13:32:51'),
(40, 'Tyson', 'Powlowski', 9291460504, 86, 'bashirian.dolly@gmail.com', '1986-03-15 13:20:48', '1994-09-16 11:03:58'),
(41, 'Mollie', 'Bahringer', 9101459285, 25, 'hermann.celine@gmail.com', '1971-07-14 11:39:20', '2016-03-13 06:05:55'),
(42, 'Aubrey', 'Walsh', 9071148314, 44, 'igutkowski@gmail.com', '1985-05-11 04:33:37', '1979-08-09 04:16:41'),
(43, 'Abbey', 'Prohaska', 9214373451, 23, 'imccullough@gmail.com', '1974-07-11 04:24:28', '2002-02-27 22:34:34'),
(44, 'Assunta', 'Brakus', 9194411423, 28, 'merl19@gmail.com', '1983-12-27 02:38:56', '1985-06-15 02:48:20'),
(45, 'Zella', 'Wuckert', 9235545982, 45, 'serenity.ferry@gmail.com', '2014-10-12 20:04:08', '1997-12-28 21:57:51'),
(46, 'Nora', 'McDermott', 9233554691, 76, 'ppfeffer@yahoo.com', '1987-02-05 18:37:13', '1973-03-08 15:43:23'),
(47, 'Braxton', 'Ledner', 9123456789, 58, 'rippin.hailey@gmail.com', '2003-01-06 08:21:17', '1990-07-21 08:42:50'),
(48, 'Eliezer', 'Kuhlman', 9226780898, 59, 'morton.sawayn@gmail.com', '1988-08-03 20:37:54', '1997-03-01 07:43:29'),
(49, 'Olaf', 'Swaniawski', 9197893774, 33, 'ufarrell@gmail.com', '2003-03-25 10:54:15', '1999-07-28 17:20:27'),
(50, 'Kaylin', 'Bartoletti', 9329877241, 77, 'baumbach.eldora@gmail.com', '2001-08-24 11:15:00', '1997-07-02 12:56:02'),
(51, 'Alessia', 'Fritsch', 9016517258, 22, 'erling73@gmail.com', '2018-06-07 10:58:40', '2017-06-01 04:16:39'),
(52, 'Nicolette', 'Rogahn', 9105670285, 61, 'chelsey.jacobson@gmail.com', '1980-05-19 17:04:35', '1984-03-02 16:43:11'),
(53, 'Nola', 'Spencer', 9143547698, 85, 'jamil.cummings@gmail.com', '1980-08-07 15:47:02', '1991-04-10 09:19:22'),
(54, 'Selina', 'Yundt', 9214571404, 71, 'ngrady@gmail.com', '1978-11-05 20:19:36', '2001-10-20 11:34:16'),
(55, 'Talon', 'Weber', 9145932503, 27, 'marcelina.hansen@gmail.com', '1983-07-11 03:06:57', '1994-05-07 20:40:04'),
(56, 'Genesis', 'Ebert', 9790342191, 0, 'torrey.herman@gmail.com', '2006-10-21 11:30:52', '2005-09-14 05:09:59'),
(57, 'Brant', 'Kuphal', 9754875689, 32, 'bartholome75@gmail.com', '1981-08-13 23:58:45', '1972-07-21 21:07:37'),
(58, 'Luciano', 'Hyatt', 9478544364, 33, 'lorine96@gmail.com', '1992-11-27 03:32:51', '2014-01-11 12:02:15'),
(59, 'Icie', 'Block', 9079138550, 91, 'nia.bashirian@gmail.com', '1970-07-01 01:09:05', '2002-04-29 23:18:27'),
(60, 'Lambert', 'Torp', 9602490766, 31, 'rosetta.hodkiewicz@gmail.com', '1995-09-06 07:59:51', '2015-01-17 00:38:02'),
(61, 'Kellie', 'Cruickshank', 9104457407, 54, 'dibert.emerson@gmail.com', '1988-05-29 04:23:45', '1982-05-03 10:03:51'),
(62, 'Sterling', 'Toy', 9928638521, 20, 'tbotsford@gmail.com', '2007-10-03 01:10:35', '2001-11-25 11:27:12'),
(63, 'Christopher', 'Mraz', 9655976041, 64, 'schuppe.dawson@gmail.com', '1995-08-02 18:16:04', '2002-09-24 18:19:47'),
(64, 'Lilly', 'Schumm', 9424269754, 91, 'wilhelmine89@gmail.com', '2016-08-11 21:08:45', '2015-09-11 01:59:56'),
(65, 'River', 'Spencer', 9851251857, 45, 'jkozey@gmail.com', '1983-08-21 17:25:20', '1994-02-27 19:59:16'),
(66, 'Laisha', 'Stoltenberg', 9581043289, 23, 'thelma73@gmail.com', '1999-01-13 17:23:19', '2017-01-06 10:12:56'),
(67, 'Emmet', 'Feest', 9804464038, 53, 'dusty05@gmail.com', '1998-08-04 08:30:44', '1973-01-02 06:31:02'),
(68, 'Devante', 'Keebler', 9392371004, 81, 'chester11@gmail.com', '1994-05-30 04:56:22', '1972-11-28 04:18:55'),
(69, 'Jessika', 'Considine', 9343550606, 27, 'otilia85@gmail.com', '1974-04-14 18:56:46', '1998-11-17 02:30:19'),
(70, 'Jamarcus', 'Reichel', 9284727139, 58, 'dhaley@gmail.com', '1973-02-01 11:06:20', '2005-08-28 23:02:30'),
(71, 'Juliana', 'Bogisich', 9105777987, 43, 'tremblay.madge@gmail.com', '1973-03-18 21:20:35', '1985-12-03 12:33:21'),
(72, 'Ocie', 'Medhurst', 9753603254, 46, 'aubrey76@gmail.com', '2002-10-22 19:16:02', '1983-05-08 01:28:49'),
(73, 'Jodie', 'Reynolds', 9948900700, 43, 'christine.muller@gmail.com', '1997-01-11 19:51:11', '2000-08-08 16:02:30'),
(74, 'Sean', 'Pacocha', 9648680023, 72, 'violet.brekke@gmail.com', '2013-10-01 15:14:45', '2005-04-01 06:52:02'),
(75, 'Mateo', 'Anderson', 9612932167, 34, 'cbednar@gmail.com', '2012-10-18 18:37:20', '1981-09-08 14:28:29'),
(76, 'Hadley', 'Stehr', 9705735868, 38, 'rhoda47@egmail.com', '1991-09-14 14:36:15', '1979-03-16 12:54:17'),
(77, 'Arvilla', 'DuBuque', 9162548522, 66, 'bridie59@gmail.com', '1997-11-25 20:35:15', '1991-05-06 09:22:43'),
(78, 'Darrell', 'Keebler', 9512736968, 45, 'goodwin.eusebio@gmail.com', '1988-06-06 17:33:45', '1986-03-04 00:28:10'),
(79, 'Gino', 'Swift', 9937323635, 39, 'ctromp@gmail.com', '1983-02-08 11:37:56', '1989-02-08 15:02:41'),
(80, 'Evie', 'Stoltenberg', 9188678443, 46, 'damien85@gmail.com', '2018-09-05 11:15:53', '1994-10-28 13:49:49'),
(81, 'George', 'Nienow', 9810146559, 37, 'tquitzon@gmail.com', '1973-11-24 09:28:56', '2005-02-27 16:37:50'),
(82, 'Vivien', 'Crist', 9021658778, 68, 'ziemann.bernardo@gmail.com', '2004-03-18 13:39:46', '1979-11-30 21:24:02'),
(83, 'Winfield', 'Auer', 9820976200, 72, 'tia.grady@gmail.com', '1984-03-03 02:47:00', '2006-10-02 19:07:39'),
(84, 'Amalia', 'Fisher', 9997192477, 59, 'jayme.hyatt@gmail.com', '1982-08-22 19:33:33', '2016-09-12 10:18:18'),
(85, 'Jonathon', 'Wyman', 9593195125, 57, 'cormier.major@gmail.com', '2017-04-17 04:13:39', '1985-03-27 01:18:20'),
(86, 'Amaya', 'Kuhlman', 9259810613, 51, 'ubaldo05@gmail.com', '2009-11-02 17:43:56', '2011-05-11 21:32:51'),
(87, 'Jaida', 'Metz', 9710906192, 36, 'favian31@gmail.com', '1979-02-07 23:59:08', '1976-12-24 07:30:45'),
(88, 'Bette', 'Denesik', 9433132834, 55, 'kerluke.sofia@gmail.com', '1985-04-26 06:47:03', '1977-02-16 16:50:35'),
(89, 'Yadira', 'Schuster', 9524902702, 53, 'kavon.gerhold@egmail.com', '1972-08-24 02:28:36', '1970-12-03 08:57:11'),
(90, 'Kieran', 'Goyette', 9882087047, 72, 'ujohns@egmail.com', '1981-02-08 18:23:32', '1996-04-10 21:05:43'),
(91, 'Charity', 'Hickle', 9737994787, 23, 'iking@gmail.com', '2003-10-31 21:26:47', '2000-04-04 03:40:20'),
(92, 'Ramiro', 'Toy', 9665427883, 45, 'glindgren@gmail.com', '1972-11-20 07:50:44', '2001-12-17 00:57:33'),
(93, 'Tad', 'Rath', 9369880901, 67, 'jolie35@gmail.com', '1997-08-02 22:40:22', '1982-05-22 15:55:24'),
(94, 'Alessandra', 'Anderson', 9707560316, 32, 'joshua.kub@gmail.com', '1985-11-14 20:30:27', '1985-08-31 02:17:19'),
(95, 'Jamie', 'Hahn', 9807044900, 43, 'zachary55@gmail.com', '1989-05-01 21:43:07', '1980-03-07 19:44:53'),
(96, 'Einar', 'Vandervort', 9402407262, 54, 'lizzie.borer@gmail.com', '1993-10-31 00:09:45', '1980-08-18 17:29:13'),
(97, 'Else', 'Wyman', 9137054241, 21, 'rebeca.wilkinson@gmail.com', '1993-12-18 05:39:02', '1996-09-05 00:17:00'),
(98, 'Erin', 'Ebert', 9688332448, 50, 'swaniawski.haleigh@gmail.com', '2010-05-16 11:30:04', '1997-10-02 02:58:25'),
(99, 'Nicole', 'Champlin', 9993424360, 41, 'fbraun@gmail.com', '1981-12-11 06:46:32', '2009-12-02 07:56:53'),
(100, 'Athena', 'Aufderhar', 9321739220, 23, 'randall06@gmail.com', '1971-09-16 12:50:34', '1974-02-08 21:25:17'),
(101, 'Alfred', 'Huels', 9410704669, 27, 'harley66@gmail.com', '1986-09-15 20:45:39', '2011-07-01 10:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int(11) NOT NULL,
  `deliveryNo` int(11) NOT NULL,
  `status` enum('Ongoing','Delivered') NOT NULL,
  `date_delivered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_completed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`id`, `deliveryNo`, `status`, `date_delivered`, `date_completed`) VALUES
(18, 100, 'Ongoing', '2019-11-22 01:17:01', NULL),
(19, 215, 'Ongoing', '2019-11-22 02:59:48', NULL),
(20, 2, 'Delivered', '2020-01-02 13:16:12', '2020-01-03'),
(21, 89, 'Delivered', '2020-01-02 13:16:12', '2020-01-02'),
(22, 10, 'Ongoing', '2020-01-07 05:58:13', NULL),
(23, 11, 'Ongoing', '2020-01-07 05:58:13', NULL),
(24, 12, 'Ongoing', '2020-01-07 05:58:23', NULL),
(25, 13, 'Ongoing', '2020-01-07 05:58:13', NULL),
(26, 18, 'Ongoing', '2020-01-07 05:58:13', NULL),
(27, 14, 'Ongoing', '2020-01-07 05:58:13', NULL),
(28, 15, 'Ongoing', '2020-01-07 05:58:13', NULL),
(29, 16, 'Ongoing', '2020-01-07 05:58:29', NULL),
(30, 17, 'Ongoing', '2020-01-07 05:58:13', NULL),
(31, 18, 'Ongoing', '2020-01-07 05:58:13', NULL),
(32, 21, 'Delivered', '2020-01-07 05:59:40', '2020-01-08'),
(33, 22, 'Delivered', '2020-01-07 05:59:40', '2020-01-09'),
(34, 23, 'Delivered', '2020-01-07 05:59:40', '2020-01-09'),
(35, 24, 'Delivered', '2020-01-07 05:59:40', '2020-01-09'),
(36, 25, 'Delivered', '2020-01-07 05:59:40', '2020-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `job_order`
--

CREATE TABLE `job_order` (
  `jo_id` int(11) UNSIGNED NOT NULL,
  `client_id` int(11) UNSIGNED NOT NULL,
  `mechanic_id` int(11) UNSIGNED NOT NULL,
  `vehicle_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `service` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `otherservice` varchar(255) DEFAULT NULL,
  `quantity` int(2) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `total` decimal(11,2) NOT NULL,
  `date_created` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_order`
--

INSERT INTO `job_order` (`jo_id`, `client_id`, `mechanic_id`, `vehicle_id`, `product_id`, `service`, `otherservice`, `quantity`, `discount`, `total`, `date_created`) VALUES
(1, 3, 1, 1, 26, 'Wheel Alignment', NULL, 3, NULL, '123.00', '2019-09-30 16:00:00'),
(2, 27, 3, 1, 35, 'Wheel Alignment', NULL, 3, NULL, '64671.00', NULL),
(3, 27, 2, 2, 30, 'Vehicle Painting', NULL, 12, NULL, '134724.00', NULL),
(4, 28, 1, 2, 30, 'Vehicle Painting', NULL, 34, NULL, '366962.00', NULL),
(5, 28, 1, 2, 34, 'Product Installation', NULL, 5, NULL, '53965.00', NULL),
(6, 28, 2, 2, 29, 'Restoration', NULL, 69, NULL, '1179900.00', NULL),
(7, 27, 2, 2, 26, 'Wheel Alignment', NULL, 500, NULL, '3756000.00', NULL),
(8, 27, 2, 2, 27, 'Wheel Alignment', NULL, 1, NULL, '7512.00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE `mechanic` (
  `mechanic_id` int(10) NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mechanic`
--

INSERT INTO `mechanic` (`mechanic_id`, `firstname`, `lastname`, `contact_no`, `address`) VALUES
(1, 'Justine', 'Dungan', '09362842650', 'Bakakeng'),
(2, 'Jin', 'Woo', '09123456789', 'Baguio city'),
(3, 'Steve', 'Fox', '09987654321', 'Baguio City'),
(4, 'Ben', 'Doherty', '09330679448', 'Baguio City'),
(5, 'Theodore', 'Matthams', '09380735524', 'Baguio City'),
(6, 'Adrian', 'Mccall', '09202601871', 'Baguio City'),
(7, 'Byron', 'Coffey', '09935337957', 'Baguio City'),
(8, 'Leonardo', 'Mckay', '09650118024', 'Baguio City'),
(9, 'Gregory', 'Mclaughlin', '09486422309', 'Baguio City'),
(10, 'Carmen', 'James', '09782427484', 'Baguio City'),
(11, 'Tia', 'Singh', '09463614108', 'Baguio City'),
(12, 'Cole ', 'Booker', '09376859937', 'Baguio City'),
(13, 'Wayn', 'Horne', '09873600610', 'Baguio City'),
(14, 'Cheyenne', 'Gibson', '09093691532', 'Baguio City'),
(15, 'Kalvin', 'Blair', '09497885538', 'Baguio City'),
(16, 'Ansh', 'Wang ', '09316779755', 'Baguio City'),
(17, 'Enya', 'Curry', '09097682298', 'Baguio City'),
(18, 'Matteo', 'Gillard', '09103989563', 'Baguio City');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_27_140321_create_clients_table', 1),
(4, '2019_02_27_140500_create_products_table', 1),
(5, '2019_03_01_154714_create_provider_table', 1),
(6, '2019_03_01_155351_create_product_details_table', 1),
(7, '2019_03_11_042728_create_transactions_table', 1),
(8, '2019_04_20_072220_create_category_table', 1),
(9, '2019_04_27_160039_create_purchase_order', 1),
(10, '2019_04_27_160321_create_purchase_order_details', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` int(2) DEFAULT NULL,
  `product_price` decimal(11,2) NOT NULL,
  `wholesale_price` double(11,2) NOT NULL,
  `distributor_price` double(11,2) NOT NULL,
  `supplier_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_quantity`, `product_price`, `wholesale_price`, `distributor_price`, `supplier_id`) VALUES
(26, 'Microtex Tire Black 30ml w/ Conditioner', 20, '12.00', 0.00, 0.00, 1),
(27, 'Microtex Shampoo 1L', 24, '150.00', 0.00, 0.00, 1),
(28, 'Microtex Shampoo 2L', 12, '270.00', 0.00, 0.00, 2),
(29, 'Microtex Wash & Wax Twin Pack', 50, '15.00', 0.00, 0.00, 1),
(30, 'Microtex Wash & Wax 500ml', 36, '200.00', 0.00, 0.00, 1),
(31, 'Microtex Wash & Wax 1L', 2, '350.00', 0.00, 0.00, 1),
(32, 'Microtex Wash & Wax 2L', 2, '350.00', 0.00, 0.00, 1),
(33, 'Microtex Tire Black 30ml w/Conditioner', 59, '25.00', 0.00, 0.00, 1),
(34, 'Microtex Tire Black 125ml w/Conditioner', 24, '65.00', 0.00, 0.00, 1),
(35, 'Microtex Tire Black 250ml w/Conditioner', 12, '120.00', 0.00, 0.00, 1),
(36, 'Microtex Tire Black 500ml w/Conditioner', 10, '220.00', 0.00, 0.00, 1),
(37, 'Microtex Wash Mitt', 12, '330.00', 0.00, 0.00, 1),
(38, 'Microtex Wash Pad', 48, '250.00', 0.00, 0.00, 1),
(39, 'Microtex Chamois ', 24, '600.00', 0.00, 0.00, 1),
(40, 'Microtex Elite(Junior)', 6, '330.00', 0.00, 0.00, 1),
(41, 'Microtex Elite Junior(Towel)', 12, '330.00', 0.00, 0.00, 1),
(42, 'Microtex Suede', 24, '210.00', 0.00, 0.00, 1),
(43, 'Mircotex Terry', 12, '130.00', 0.00, 0.00, 1),
(44, 'Mircotex Plush', 12, '180.00', 0.00, 0.00, 1),
(45, 'Mircotex Ultra Plush', 12, '230.00', 0.00, 0.00, 2),
(46, 'Microtex Supreme', 6, '350.00', 0.00, 0.00, 2),
(47, 'Microtex Duster(S)', 16, '190.00', 0.00, 0.00, 1),
(48, 'Microtex Duster(L)', 12, '500.00', 0.00, 0.00, 1),
(49, 'Mircotex Duster Refill(S)', 24, '140.00', 0.00, 0.00, 1),
(50, 'Mircotex Duster Refill(S)', 12, '500.00', 0.00, 0.00, 1),
(51, 'Microtex Clay Bar 100g', 6, '400.00', 0.00, 0.00, 1),
(52, 'Microtex Clay Bar 200g', 6, '700.00', 0.00, 0.00, 1),
(53, 'Microtex Detailng Brush', 12, '600.00', 0.00, 0.00, 1),
(54, 'Microtex Pad Spur', 1, '450.00', 0.00, 0.00, 1),
(55, 'Microtex Apron', 1, '350.00', 0.00, 0.00, 1),
(56, 'Microtex Belt Bag', 12, '250.00', 0.00, 0.00, 1),
(57, 'Microtex Cutting Pad 8\" Waffle(Yellow)', 12, '530.00', 0.00, 0.00, 1),
(58, 'Microtex Cutting Pad 8\"(Yellow)', 12, '530.00', 0.00, 0.00, 1),
(59, 'Microtex Cutting Pad 6\"(Yellow)', 12, '400.00', 0.00, 0.00, 1),
(60, 'Microtex Cutting Pad 3\" (Yellow)', 12, '200.00', 0.00, 0.00, 1),
(61, 'Microtex Quick Shine 500ml Camauba Spray', 12, '280.00', 0.00, 0.00, 1),
(62, 'Microtex Quick Shine 3800ml', 4, '1730.00', 0.00, 0.00, 1),
(63, 'Microtex Dry Wash 500ml-Waterless Wash', 12, '180.00', 0.00, 0.00, 1),
(64, 'Microtex Dry Wash 1000ml-Waterless Wash', 6, '450.00', 0.00, 0.00, 1),
(65, 'Microtex Dry Wash 3800ml', 4, '1400.00', 0.00, 0.00, 1),
(66, 'Microtex C\'Tru 500ml(RTU)', 12, '110.00', 0.00, 0.00, 1),
(67, 'Microtex C\'Tru 1000ml', 6, '250.00', 0.00, 0.00, 1),
(68, 'Microtex C\'Tru 1000ml-Concentrated(1:3)\r\n', 6, '250.00', 0.00, 0.00, 1),
(69, 'Microtex C\'Tru 3800ml-Concentrated(1:3)\r\n', 4, '600.00', 0.00, 0.00, 1),
(70, 'Prochoice Shampoo 1L', 6, '90.00', 0.00, 0.00, 1),
(71, 'Prochoice Shampoo 4L', 4, '220.00', 0.00, 0.00, 1),
(72, 'Prochoice Shampoo 20L', 1, '800.00', 0.00, 0.00, 1),
(73, 'Prochoice Glass Cleaner 1L', 6, '80.00', 0.00, 0.00, 1),
(74, 'Prochoice Stain Remover 1L', 6, '300.00', 0.00, 0.00, 1),
(75, 'Prochoice Stain Remover 4L', 4, '200.00', 0.00, 0.00, 1),
(76, 'Prochoice All Purpose Dressing 1L', 6, '350.00', 0.00, 0.00, 1),
(77, 'Prochoice All Purpose Dressing 4L', 4, '1100.00', 0.00, 0.00, 1),
(78, 'Glaz Wiper Bead 125ml Conc(Wiper Tank Fluid)', 24, '140.00', 0.00, 0.00, 1),
(79, 'Glaz Wiper Bead 2000ml', 6, '190.00', 0.00, 0.00, 1),
(80, 'Glaz Stain Guard 70ml (Glass)', 12, '250.00', 0.00, 0.00, 1),
(81, 'Glaz Stainz\' Out 500ml', 5, '700.00', 0.00, 0.00, 1),
(82, 'Glaz No Squix 70ml(Wiper, Window & Hinges)', 12, '130.00', 0.00, 0.00, 1),
(83, 'Microtex LVI Restorer 125ml(Leather & Vinyl)', 24, '120.00', 0.00, 0.00, 1),
(84, 'Microtex LVI Restorer 125ml(Leather & Vinyl)', 12, '300.00', 0.00, 0.00, 1),
(85, 'Microtex LVI Restorer 3800ml', 4, '2500.00', 0.00, 0.00, 1),
(86, 'Microtex NanoFIL 50ml (Filler)', 24, '55.00', 0.00, 0.00, 1),
(87, 'Microtex NanoFIL 500ml', 12, '600.00', 0.00, 0.00, 1),
(88, 'Microtex NanoFIL 3800ml', 4, '2500.00', 0.00, 0.00, 1),
(89, 'Microtex QUICKleen 125ml w/ Antibac', 23, '60.00', 0.00, 0.00, 1),
(90, 'Microtex QUICKleen 125ml w/ Antibac', 12, '160.00', 0.00, 0.00, 1),
(91, 'Microtex QUICKleen 500ml w/ Antibac', 12, '160.00', 0.00, 0.00, 1),
(92, 'Microtex QUICKleen 3800ml Conc. w/ Antibac', 5, '850.00', 0.00, 0.00, 1),
(93, 'Prochoice Microfiber All Purpose Cloth(Green) x 3', 24, '100.00', 0.00, 0.00, 1),
(94, 'Prochoice Microfiber All Purpose Cloth(Green) x 12', 144, '350.00', 0.00, 0.00, 1),
(95, 'Prochoice Microfiber Multi-Tasker Cloth(Violet) x3', 24, '170.00', 0.00, 0.00, 1),
(96, 'Prochoice Microfiber Multi-Tasker Cloth(Violet) x 12', 144, '580.00', 0.00, 0.00, 1),
(97, 'Prochoice Microfiber Ultra Soft Cloth(Yellow) x 3', 24, '200.00', 0.00, 0.00, 1),
(98, 'Prochoice Microfiber Ultra Soft Cloth(Yellow) x 12', 144, '650.00', 0.00, 0.00, 1),
(99, 'Glaz Crystal Guard 125ml(Headlamp)', 12, '190.00', 0.00, 0.00, 1),
(100, 'Glaz Cystal Guard 500ml', 6, '600.00', 0.00, 0.00, 1),
(101, 'Geolander A/TGO15', 24, '9500.00', 0.00, 0.00, 1),
(102, 'Geolander X-AT', 16, '7700.00', 0.00, 0.00, 1),
(103, 'Geolander M/T G003', 12, '6000.00', 0.00, 0.00, 1),
(104, 'Geolander X-MT', 24, '5900.00', 0.00, 0.00, 1),
(105, 'Nitto Grappler G2 17\"255/55R18 109H XL', 12, '7100.00', 0.00, 0.00, 1),
(106, 'Nitto Grappler G2 17\" P255/70R18 112T', 16, '7800.00', 0.00, 0.00, 1),
(107, 'Nitto Grappler G2 17\"265/60R18 114T XL', 24, '9919.00', 0.00, 0.00, 1),
(108, 'Nitto Grappler G2 17\"LT265/65R18 E 122/119R	', 16, '8812.99', 0.00, 0.00, 1),
(109, 'Nitto Grappler G2 17\"265/65R18 116T XL', 12, '8770.00', 0.00, 0.00, 1),
(110, 'Nitto Grappler G2 18\"LT285/65R18 E 125/122R', 64, '7880.00', 0.00, 0.00, 1),
(111, 'Nitto Grappler G2 18\"LT285/60R18 E 122/119S	', 48, '7500.00', 0.00, 0.00, 1),
(112, 'Nitto Grappler G2 18\"LT285/75R18 E 129/126R	', 12, '8055.00', 0.00, 0.00, 1),
(113, 'Nitto Grappler G2 18\"LT295/70R18 E 129/126Q', 8, '10759.00', 0.00, 0.00, 1),
(114, 'Nitto Grappler G2 18\"295/70R18 116S', 4, '9100.00', 0.00, 0.00, 1),
(115, 'Toyo Open Country A/T II P225/75R16 104S BSW', 48, '5933.00', 0.00, 0.00, 1),
(116, 'Toyo Open Country A/T II P215/75R15 100S WL', 32, '6033.00', 0.00, 0.00, 1),
(117, 'Toyo Open Country A/T II P235/75R15XL 108S WL', 24, '5833.00', 0.00, 0.00, 1),
(118, 'Toyo Open Country A/T II P215/70R16 99S BSW', 8, '6999.00', 0.00, 0.00, 1),
(119, 'Toyo Open Country A/T II P225/75R15 102S WL', 12, '7533.00', 0.00, 0.00, 1),
(120, 'Toyo Open Country A/T II P225/70R16 101T WL', 4, '9733.00', 0.00, 0.00, 1),
(121, 'Toyo Open Country A/T II P225/70R16 101T BSW', 4, '8733.00', 0.00, 0.00, 1),
(122, 'Toyo Open Country A/T II P235/70R16 104T WL', 32, '5633.00', 0.00, 0.00, 1),
(123, 'Toyo Open Country A/T II P235/70R16 104T BSW', 48, '4933.00', 0.00, 0.00, 1),
(124, 'Toyo Open Country A/T II P245/70R16 106S BSW', 64, '5033.00', 0.00, 0.00, 1),
(125, '\r\nCooper Discoverer AT3 235/70R17XL 111T BSW', 12, '7894.00', 0.00, 0.00, 1),
(126, 'Cooper Discoverer AT3 235/70R17XL 111T BSW', 16, '9741.00', 0.00, 0.00, 1),
(127, 'Cooper Discoverer AT3 LT285/65R18 E/10PR WL', 24, '10041.00', 0.00, 0.00, 1),
(128, 'Cooper Discoverer AT3 LT325/60R18 E/10PR BSW', 32, '13711.50', 0.00, 0.00, 1),
(129, 'Cooper Discoverer AT3 LT325/65R18 E/10PR WL', 28, '13861.00', 0.00, 0.00, 1),
(130, 'Kumho Road Venture AT51 Tires', 16, '5550.00', 0.00, 0.00, 1),
(131, 'Kumho Road Venture AT51 235/75R15XL 109T BSW', 8, '6000.00', 0.00, 0.00, 1),
(132, 'Kumho Road Venture AT51 P245/75R16 109T BSW', 8, '6300.00', 0.00, 0.00, 1),
(133, 'Kumho Road Venture AT51 P235/70R16 104T BSW', 12, '6500.00', 0.00, 0.00, 1),
(134, 'Kumho Road Venture AT51 P255/70R16 109T BSW', 8, '6700.00', 0.00, 0.00, 1),
(135, 'FF104 Polished', 12, '12033.00', 0.00, 0.00, 1),
(136, 'FF103 Glossed & Milled', 16, '11433.00', 0.00, 0.00, 1),
(137, 'FF99 Softy Candy Red & Milled', 8, '11733.00', 0.00, 0.00, 1),
(138, 'FF92 Polished ', 12, '10444.00', 0.00, 0.00, 1),
(139, 'FF88 Polished w/ Beaver Bronze', 4, '17500.00', 0.00, 0.00, 1),
(140, 'Renegade Dually Front D265 Gloss Black & Milled', 12, '10500.00', 0.00, 0.00, 1),
(141, 'Renegade Dually Rear D265 ', 16, '10900.00', 0.00, 0.00, 1),
(142, 'Throttle Dually Front D212', 24, '11300.00', 0.00, 0.00, 1),
(143, 'Throttle Dually Front D213', 8, '11500.00', 0.00, 0.00, 1),
(144, 'Throttle Dually Rear D212', 32, '11800.00', 0.00, 0.00, 1),
(145, 'Fabtech Spindle Lift System', 12, '20709.00', 0.00, 0.00, 1),
(146, 'Southern Truck Leveling Kit', 8, '7497.50', 0.00, 0.00, 1),
(147, 'Belltech Lowering & Lifting Strut', 4, '5149.50', 0.00, 0.00, 1),
(148, 'ProRYDE LIFTmachine Leveling Kit', 16, '17950.00', 0.00, 0.00, 1),
(149, 'Ready Lift Leveling Kit', 4, '26997.50', 0.00, 0.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(11) UNSIGNED NOT NULL,
  `stocknumber` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `provider_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `stocknumber`, `category_id`, `brand_id`, `provider_id`) VALUES
(26, NULL, 6, 1, 2),
(27, NULL, 6, 1, 1),
(28, NULL, 6, 1, 2),
(29, NULL, 6, 1, 1),
(30, NULL, 6, 1, 2),
(31, NULL, 6, 1, 1),
(32, NULL, 6, 1, 2),
(33, NULL, 6, 1, 1),
(34, NULL, 6, 1, 2),
(35, NULL, 6, 1, 1),
(36, NULL, 6, 1, 2),
(37, NULL, 6, 1, 1),
(38, NULL, 6, 1, 2),
(39, NULL, 6, 1, 1),
(40, NULL, 6, 1, 2),
(41, NULL, 6, 1, 1),
(42, NULL, 6, 1, 2),
(43, NULL, 6, 1, 1),
(44, NULL, 6, 1, 2),
(45, NULL, 6, 1, 1),
(46, NULL, 6, 1, 2),
(47, NULL, 6, 1, 1),
(48, NULL, 6, 1, 2),
(49, NULL, 6, 1, 1),
(50, NULL, 6, 1, 2),
(51, NULL, 6, 1, 1),
(52, NULL, 6, 1, 2),
(53, NULL, 6, 1, 1),
(54, NULL, 6, 1, 2),
(55, NULL, 6, 1, 1),
(56, NULL, 6, 1, 2),
(57, NULL, 6, 1, 1),
(58, NULL, 6, 1, 2),
(59, NULL, 6, 1, 1),
(60, NULL, 6, 1, 2),
(61, NULL, 6, 1, 1),
(62, NULL, 6, 1, 2),
(63, NULL, 6, 1, 1),
(64, NULL, 6, 1, 2),
(65, NULL, 6, 1, 1),
(66, NULL, 6, 1, 2),
(67, NULL, 6, 1, 1),
(68, NULL, 6, 1, 2),
(69, NULL, 6, 1, 1),
(70, NULL, 6, 1, 2),
(71, NULL, 6, 2, 1),
(72, NULL, 6, 2, 2),
(73, NULL, 6, 2, 1),
(74, NULL, 6, 2, 2),
(75, NULL, 6, 2, 1),
(76, NULL, 6, 2, 2),
(77, NULL, 6, 2, 1),
(78, NULL, 6, 3, 2),
(79, NULL, 6, 3, 1),
(80, NULL, 6, 3, 2),
(81, NULL, 5, 3, 1),
(82, NULL, 6, 3, 2),
(83, NULL, 6, 1, 1),
(84, NULL, 6, 1, 2),
(85, NULL, 6, 1, 1),
(86, NULL, 6, 1, 2),
(87, NULL, 6, 1, 1),
(88, NULL, 6, 1, 2),
(89, NULL, 6, 1, 1),
(90, NULL, 6, 1, 2),
(91, NULL, 6, 1, 1),
(92, NULL, 6, 1, 2),
(93, NULL, 6, 2, 1),
(94, NULL, 6, 2, 2),
(95, NULL, 6, 2, 1),
(96, NULL, 6, 2, 2),
(97, NULL, 6, 2, 1),
(98, NULL, 6, 1, 2),
(99, NULL, 6, 3, 1),
(100, NULL, 6, 3, 2),
(101, NULL, 2, 4, 1),
(102, NULL, 2, 4, 1),
(103, NULL, 2, 4, 1),
(105, NULL, 2, 5, 0),
(106, NULL, 1, 5, 0),
(107, NULL, 2, 5, 0),
(108, NULL, 2, 5, 0),
(109, NULL, 2, 5, 0),
(110, NULL, 2, 5, 0),
(111, NULL, 2, 5, 0),
(112, NULL, 2, 5, 0),
(113, NULL, 2, 5, 0),
(114, NULL, 2, 5, 0),
(115, NULL, 2, 6, 0),
(116, NULL, 2, 6, 0),
(117, NULL, 2, 6, 0),
(118, NULL, 2, 6, 0),
(119, NULL, 2, 6, 0),
(120, NULL, 2, 6, 0),
(121, NULL, 2, 6, 0),
(122, NULL, 2, 6, 0),
(123, NULL, 2, 6, 0),
(124, NULL, 2, 6, 0),
(125, NULL, 2, 7, 0),
(126, NULL, 2, 5, 0),
(127, NULL, 2, 5, 0),
(128, NULL, 2, 5, 0),
(129, NULL, 2, 5, 0),
(130, NULL, 2, 8, 0),
(131, NULL, 2, 8, 0),
(132, NULL, 2, 8, 0),
(133, NULL, 2, 8, 0),
(134, NULL, 2, 8, 0),
(135, NULL, 1, 10, 0),
(136, NULL, 1, 10, 0),
(137, NULL, 1, 10, 0),
(138, NULL, 1, 10, 0),
(139, NULL, 1, 10, 0),
(140, NULL, 1, 11, 0),
(141, NULL, 1, 11, 0),
(142, NULL, 1, 11, 0),
(143, NULL, 1, 12, 0),
(144, NULL, 1, 12, 0),
(145, NULL, 3, 13, 0),
(146, NULL, 3, 14, 0),
(147, NULL, 3, 15, 0),
(148, NULL, 3, 16, 0),
(149, NULL, 3, 17, 0);

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE `provider` (
  `provider_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`provider_id`, `name`) VALUES
(1, 'Steve James'),
(2, 'James Smith');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `po_id` int(10) UNSIGNED NOT NULL,
  `recipient` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `to_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Ongoing','Delivered') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Ongoing',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `deliveryNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity_ordered` int(11) NOT NULL,
  `item_recieved` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`po_id`, `recipient`, `supplier_id`, `to_address`, `status`, `date`, `product_id`, `total`, `deliveryNo`, `quantity_ordered`, `item_recieved`) VALUES
(114, 'Jeff', 1, 'Jeff Off\'s Road, Irisan Road', 'Ongoing', '2019-11-22 01:17:01', 26, 22536, '100', 3, 0),
(115, 'Jeff', 1, 'Jeff Off\'s Road, Irisan Road', 'Ongoing', '2019-11-22 01:17:01', 27, 82632, '100', 11, 0),
(116, 'Arnel', 1, 'Balili', 'Ongoing', '2019-11-22 02:59:48', 26, 16194, '215', 1, 0),
(117, 'Arnel', 1, 'Balili', 'Ongoing', '2019-11-22 02:59:48', 27, 32388, '215', 2, 0),
(118, 'Arnel', 1, 'Balili', 'Ongoing', '2019-11-22 02:59:48', 28, 48582, '215', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `name`) VALUES
(1, 'Wheel Alignment'),
(2, 'Lifting'),
(3, 'Restoration'),
(4, 'Vehicle Painting'),
(5, 'Product Installation'),
(6, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(10) NOT NULL,
  `supplier_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `supplier_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_address`, `contact_no`, `date_created`, `date_updated`) VALUES
(1, 'Juan Dela Cruz', 'Manila, Philippines', '09105670562', '2019-11-08 00:00:00', '2019-12-16 16:27:21'),
(2, 'Darryl Dagoat', 'Quezon City, Philippines', '09453224533', '2019-12-17 00:00:00', '2019-12-16 16:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `transaction2`
--

CREATE TABLE `transaction2` (
  `transaction2_id` int(11) NOT NULL,
  `transaction_type` enum('Walk-in','JobOrder','','') NOT NULL,
  `client_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` decimal(11,2) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `Total` double(11,2) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction2`
--

INSERT INTO `transaction2` (`transaction2_id`, `transaction_type`, `client_id`, `product_id`, `price`, `quantity`, `Total`, `date_created`, `update_stamp`) VALUES
(1, 'Walk-in', 3, 26, NULL, 5, 555.00, '2019-11-04 16:00:00', '2019-11-22 00:41:20'),
(2, 'Walk-in', 50, 42, NULL, 12, NULL, '2020-01-02 14:26:00', '2020-01-02 14:26:00'),
(3, 'Walk-in', 44, 39, NULL, 4, NULL, '2020-01-02 14:26:00', '2020-01-02 14:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `tId` int(11) UNSIGNED NOT NULL,
  `client_id` int(11) UNSIGNED NOT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `quantity` int(2) NOT NULL,
  `orig_quantity` int(2) NOT NULL,
  `mechanic_id` int(11) DEFAULT NULL,
  `service` enum('Repair and Maintenance','Lifting','Wheel Alignment','Painting','N/A') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `status` enum('Pending','Ongoing','Rendered','Cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `price` decimal(11,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`tId`, `client_id`, `vehicle_id`, `product_id`, `quantity`, `orig_quantity`, `mechanic_id`, `service`, `status`, `price`, `created_at`, `updated_at`) VALUES
(26, 27, 34, 103, 4, 0, 6, 'Wheel Alignment', 'Rendered', '21845.00', '2005-03-01 15:33:53', '1988-09-16 14:42:38'),
(27, 28, 35, 131, 4, 0, 16, 'Repair and Maintenance', 'Rendered', '24000.00', '2002-11-16 17:43:08', '2018-06-20 07:25:14'),
(28, 29, 36, 46, 10, 0, 9, 'Painting', 'Rendered', '3500.00', '2004-03-20 13:02:06', '2018-05-26 12:36:18'),
(30, 31, 37, 99, 2, 0, 14, 'Repair and Maintenance', 'Ongoing', '280.00', '2010-08-08 13:38:04', '2007-07-09 16:52:18'),
(31, 32, 38, 147, 4, 0, 9, 'Lifting', 'Ongoing', '20598.00', '1980-03-20 20:32:11', '1974-03-26 23:09:23'),
(32, 33, 39, 32, 2, 0, 17, 'Painting', 'Pending', '700.00', '1997-10-07 17:25:02', '2004-09-14 09:52:30'),
(33, 34, 40, 79, 8, 0, 9, 'Lifting', 'Ongoing', '760.00', '1996-07-03 06:41:14', '1971-02-22 21:09:11'),
(35, 36, 41, 109, 2, 4, 7, 'Wheel Alignment', 'Rendered', '3555.00', '1993-02-24 09:03:47', '1976-08-17 00:06:16'),
(36, 37, 42, 36, 4, 0, 1, 'Lifting', 'Pending', '22501.00', '1979-07-17 19:02:28', '1982-06-25 11:05:31'),
(37, 38, 43, 37, 12, 0, 1, 'Repair and Maintenance', 'Pending', '16410.00', '2012-02-18 11:54:01', '1996-06-17 06:44:02'),
(38, 39, 44, 38, 1, 0, 7, 'N/A', 'Ongoing', '24071.00', '1992-04-02 13:24:46', '2016-05-17 21:40:46'),
(39, 40, 45, 39, 7, 0, 10, 'Repair and Maintenance', 'Pending', '22808.00', '2009-05-12 19:16:40', '1988-07-10 23:52:01'),
(40, 41, 46, 40, 6, 0, 2, 'Lifting', 'Rendered', '20824.00', '2012-06-16 01:04:56', '2014-09-11 05:09:24'),
(41, 42, 47, 41, 9, 0, 12, 'Painting', 'Pending', '19169.00', '2014-10-04 01:00:19', '1990-08-30 11:34:21'),
(42, 43, 48, 42, 3, 0, 8, 'N/A', 'Ongoing', '13347.00', '2001-12-11 00:54:19', '2010-07-19 22:16:46'),
(43, 44, 49, 43, 1, 0, 5, 'Lifting', 'Pending', '18051.00', '1979-09-09 00:05:27', '1976-04-04 05:31:47'),
(44, 45, 50, 44, 4, 0, 10, 'Repair and Maintenance', 'Rendered', '720.00', '1998-09-10 12:48:08', '2003-04-27 13:18:03'),
(45, 46, 51, 45, 4, 0, NULL, 'Wheel Alignment', 'Cancelled', NULL, '2018-03-28 10:40:24', '2013-03-24 14:07:00'),
(46, 47, 52, 46, 0, 0, NULL, 'Wheel Alignment', 'Cancelled', NULL, '1996-07-01 20:57:06', '1976-11-29 18:10:55'),
(47, 48, 53, 47, 4, 0, 7, 'Wheel Alignment', 'Rendered', '10210.00', '1971-09-14 15:38:10', '1995-09-08 23:45:23'),
(48, 49, 54, 48, 4, 0, 18, 'Lifting', 'Ongoing', '18887.00', '1981-05-30 20:31:42', '1988-11-20 13:11:12'),
(49, 50, 55, 49, 7, 0, 4, 'Lifting', 'Ongoing', '11230.00', '1992-08-07 17:09:13', '2007-03-28 10:23:01'),
(51, 52, 56, 51, 4, 0, 11, 'Wheel Alignment', 'Ongoing', '1759.00', '1991-05-24 23:58:05', '2006-07-23 23:11:24'),
(52, 53, 57, 52, 4, 0, 15, 'Wheel Alignment', 'Pending', '20345.00', '1988-12-03 04:10:14', '1979-01-13 11:25:03'),
(53, 54, 58, 104, 4, 0, 14, 'Wheel Alignment', 'Rendered', '23600.00', '1981-09-14 23:31:03', '1991-09-27 03:48:31'),
(54, 55, 62, 54, 4, 0, NULL, 'Repair and Maintenance', 'Cancelled', NULL, '1976-05-28 15:32:07', '2013-01-31 01:46:50'),
(55, 56, 69, 55, 4, 0, NULL, 'Lifting', 'Cancelled', NULL, '1992-04-03 19:07:38', '1986-01-01 15:37:04'),
(56, 57, 9, 56, 4, 0, NULL, 'Painting', 'Cancelled', NULL, '2016-06-28 22:42:35', '1974-09-09 01:13:59'),
(57, 58, 65, 57, 0, 0, NULL, 'Repair and Maintenance', 'Cancelled', NULL, '2006-02-09 13:24:42', '2007-10-07 20:22:50'),
(58, 59, 66, 58, 4, 0, 16, 'Lifting', 'Ongoing', '2247.00', '2001-05-28 13:03:06', '1991-12-13 14:18:39'),
(59, 60, 67, 59, 0, 0, NULL, 'Painting', 'Cancelled', NULL, '2010-03-13 09:54:14', '2014-06-02 19:06:17'),
(60, 61, 68, 60, 4, 0, NULL, 'N/A', 'Cancelled', NULL, '2011-10-04 14:29:17', '1978-11-07 14:55:16'),
(61, 62, 69, 61, 4, 0, 12, 'Lifting', 'Ongoing', '9228.00', '2010-01-03 16:52:56', '1990-11-10 16:05:53'),
(62, 63, 70, 62, 4, 0, NULL, 'Wheel Alignment', 'Cancelled', NULL, '1981-04-20 18:54:50', '2015-12-30 02:09:13'),
(63, 64, 71, 63, 4, 0, 1, 'Repair and Maintenance', 'Rendered', '4280.00', '2003-10-10 16:17:00', '1999-09-11 11:39:44'),
(64, 65, 12, 64, 4, 0, 9, 'Wheel Alignment', 'Pending', '3101.00', '1991-11-30 07:03:58', '2015-03-02 05:42:14'),
(65, 66, 72, 65, 4, 0, 16, 'Lifting', 'Ongoing', '5334.00', '2001-07-16 22:06:08', '2003-12-09 17:48:11'),
(66, 67, 9, 66, 8, 0, 10, 'Painting', 'Ongoing', '21767.00', '1994-03-03 04:35:40', '2013-09-12 12:07:47'),
(67, 68, 73, 67, 4, 0, 13, 'Wheel Alignment', 'Ongoing', '7677.00', '2010-01-26 16:32:08', '2001-05-03 17:22:55'),
(68, 69, 74, 135, 4, 0, 7, 'Wheel Alignment', 'Ongoing', '4872.00', '1990-04-03 23:57:14', '1973-08-08 06:30:37'),
(69, 70, 75, 128, 4, 0, 3, 'Wheel Alignment', 'Pending', '7969.00', '2016-09-16 05:09:10', '1992-05-19 23:00:46'),
(70, 71, 76, 70, 4, 0, 11, 'Repair and Maintenance', 'Rendered', '11672.00', '2002-10-23 22:51:56', '2011-07-11 17:28:59'),
(71, 72, 77, 126, 4, 0, 16, 'Lifting', 'Rendered', '21430.00', '2013-11-28 16:48:43', '1993-10-19 10:53:36'),
(72, 73, 78, 115, 4, 0, NULL, 'Lifting', 'Cancelled', NULL, '2003-05-30 00:11:57', '1974-03-09 22:31:01'),
(73, 74, 79, 40, 4, 0, 5, 'Lifting', 'Pending', '17023.00', '1978-05-15 12:18:19', '2014-04-24 10:11:03'),
(74, 75, 80, 74, 4, 0, 2, 'Repair and Maintenance', 'Pending', '12939.00', '2001-06-18 14:09:00', '2000-10-19 08:38:45'),
(75, 76, 81, 75, 4, 0, 4, 'Lifting', 'Pending', '10982.00', '1978-10-20 06:38:08', '1989-09-29 10:39:52'),
(76, 77, 82, 76, 4, 0, 15, 'Lifting', 'Pending', '24022.00', '1984-04-08 17:39:26', '1997-05-29 12:51:43'),
(77, 78, 83, 77, 4, 0, 10, 'Repair and Maintenance', 'Rendered', '10356.00', '2019-04-03 05:34:44', '1997-08-31 18:30:41'),
(78, 79, 84, 78, 8, 0, 18, 'Painting', 'Ongoing', '14750.00', '2016-10-23 17:54:48', '2003-05-17 18:18:47'),
(79, 80, 85, 79, 6, 0, 7, 'Lifting', 'Cancelled', '14961.00', '1981-10-27 18:31:39', '2005-01-14 21:27:45'),
(80, 81, 86, 80, 4, 0, NULL, 'Painting', 'Pending', '4507.00', '2005-04-22 15:41:15', '2019-04-08 21:27:21'),
(81, 82, 87, 81, 8, 0, 6, 'Lifting', 'Ongoing', '24235.00', '1974-12-07 02:35:33', '2016-05-26 10:22:21'),
(82, 88, 10, 82, 4, 0, 3, 'Lifting', 'Ongoing', '16086.00', '1994-02-11 23:44:39', '2005-08-03 00:30:10'),
(83, 84, 10, 83, 4, 0, 4, 'Lifting', 'Rendered', '26862.00', '2015-04-28 18:46:50', '2018-07-10 16:14:57'),
(84, 85, 89, 84, 6, 0, 18, 'Painting', 'Rendered', '19973.00', '1984-11-12 19:00:09', '1994-02-12 17:56:31'),
(85, 86, 90, 125, 4, 0, 17, 'Wheel Alignment', 'Rendered', '679.00', '1991-05-21 22:14:39', '1978-03-20 03:47:27'),
(86, 87, 91, 129, 4, 0, NULL, 'Lifting', 'Cancelled', NULL, '2003-07-28 17:45:58', '1974-10-21 08:35:09'),
(87, 88, 92, 137, 4, 0, 7, 'Lifting', 'Pending', '7632.00', '2005-04-03 04:44:39', '2000-10-30 10:26:17'),
(88, 89, 93, 88, 5, 0, 17, 'Lifting', 'Rendered', '13010.00', '1978-12-05 00:04:40', '2016-12-09 13:02:33'),
(89, 90, 94, 89, 4, 0, 7, 'Wheel Alignment', 'Ongoing', '3463.00', '1999-10-02 21:16:51', '2004-12-20 00:27:10'),
(90, 91, 95, 90, 2, 0, 14, 'Wheel Alignment', 'Ongoing', '20503.00', '1998-06-05 02:43:35', '1975-05-12 08:05:03'),
(91, 92, 96, 91, 4, 0, 9, 'Repair and Maintenance', 'Pending', '20459.00', '1995-02-11 07:46:06', '1970-03-11 20:37:57'),
(92, 93, 97, 102, 4, 0, 4, 'Wheel Alignment', 'Pending', '30800.00', '1972-04-20 15:58:18', '2003-10-15 06:41:36'),
(93, 94, 98, 81, 4, 0, NULL, 'Repair and Maintenance', 'Cancelled', NULL, '1974-11-22 19:13:02', '1995-03-07 20:16:03'),
(94, 95, 99, 94, 4, 0, 1, 'Painting', 'Pending', '12274.00', '1976-02-05 03:58:42', '1975-12-23 11:33:55'),
(95, 96, 100, 131, 4, 0, 11, 'Wheel Alignment', 'Pending', '18399.00', '2013-07-30 10:52:38', '1981-03-15 05:45:52'),
(96, 97, 101, 96, 5, 0, 3, 'Painting', 'Ongoing', '21792.00', '1998-12-24 16:41:22', '2017-11-13 10:17:27'),
(97, 98, 102, 145, 4, 0, NULL, 'Lifting', 'Ongoing', '8475.00', '2009-11-19 11:49:56', '1979-04-23 18:37:40'),
(98, 99, 103, 98, 4, 0, 13, 'Wheel Alignment', 'Rendered', '13695.00', '2001-07-26 18:22:07', '1973-12-01 18:40:15'),
(99, 100, 104, 99, 4, 0, 8, 'Lifting', 'Pending', '22938.00', '2015-07-11 10:16:46', '1983-03-13 20:27:00'),
(100, 101, 14, 100, 4, 0, 8, 'Painting', 'Rendered', '13087.00', '2007-08-10 19:05:03', '1987-04-16 14:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('Administrator','Secretary') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Secretary',
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `admin`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `is_admin`) VALUES
(4, 'owner', 'Owner', 1, 'owner@jeff.ph', NULL, '$2y$10$h1y41nzKMAtJdr1e6WI25O1wAQz3KwjJe.diBBZVcFDQ76Iw01AOW', 'PFVindv3qPRfPPMktsH0BUTymfSrJbuBtrFNKKjWM6VdVQBX4JjaigURrFPp', '2019-09-10 07:21:26', '2019-09-10 07:21:26', 'Secretary', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `plate_no` varchar(255) CHARACTER SET latin1 NOT NULL,
  `type` enum('SUV/AUV','Pickup Truck','Customised Vehicle','') CHARACTER SET latin1 NOT NULL,
  `model` varchar(255) CHARACTER SET latin1 NOT NULL,
  `color` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `client_id`, `plate_no`, `type`, `model`, `color`, `description`, `date_created`, `date_updated`) VALUES
(1, 3, 'ZXC 987', 'SUV/AUV', '2019', 'Red', 'outdoor driving', '2020-01-06 07:06:57', '2020-01-06 07:06:57'),
(2, 34, 'ABC 123', 'Pickup Truck', 'Raptor', 'Yellow', NULL, '2020-01-02 05:32:00', '2020-01-02 10:34:07'),
(3, 21, 'DFT 490', 'Pickup Truck', 'Elf', 'Pink', NULL, '2019-12-27 00:40:00', '2020-01-02 10:34:47'),
(4, 7, 'DET 902', 'SUV/AUV', 'Innova', 'Silver', NULL, '2020-01-02 08:19:09', '2020-01-02 13:56:07'),
(5, 7, 'TRE 01', 'SUV/AUV', 'Chevrolet', 'Orange', NULL, '2020-01-02 02:12:00', '2020-01-02 13:56:07'),
(6, 42, 'OPX 730', 'Customised Vehicle', 'Lambo', 'Red', 'lowered', '2020-01-01 22:14:23', '2020-01-02 13:57:21'),
(7, 32, 'QSX 499', 'Pickup Truck', 'Estrada', 'Black', 'outdoors vehicle', '2020-01-06 06:08:53', '2020-01-06 06:08:53'),
(8, 53, 'CVB 567', 'Pickup Truck', 'Chevrolet Colorado', 'Red', NULL, '2020-01-06 06:57:16', '2020-01-06 06:57:16'),
(9, 67, 'CFD 960', 'SUV/AUV', 'Ford Ranger', 'Red', NULL, '2020-01-06 06:08:43', '2020-01-06 06:08:43'),
(10, 84, 'JRU 673', 'SUV/AUV', 'Foton Thunder', 'Blue', NULL, '2020-01-06 06:08:43', '2020-01-06 06:08:43'),
(11, 64, 'IIO 398', 'Pickup Truck', 'Mitsubishi L200', 'Silver', NULL, '2020-01-06 06:47:47', '2020-01-06 06:47:47'),
(12, 65, 'YTE 673', 'Pickup Truck', 'Mitsubishi Strada', 'Black', NULL, '2020-01-06 06:56:35', '2020-01-06 06:56:35'),
(13, 43, 'ERO 430', 'Pickup Truck', 'Nissan Navara', 'Golden Yellow', NULL, '2020-01-06 06:56:35', '2020-01-06 06:56:35'),
(14, 101, 'RTO 323', 'SUV/AUV', 'SsangYong Musso', 'Green', NULL, '2020-01-06 06:56:35', '2020-01-06 06:56:35'),
(15, 5, 'DFO 341', 'SUV/AUV', 'Toyota Hiace', 'Navy Blue', NULL, '2020-01-06 06:56:35', '2020-01-06 06:56:35'),
(16, 6, 'Hyundai ', 'SUV/AUV', 'Grand Starex', 'Pink', NULL, '2020-01-06 06:56:35', '2020-01-06 06:56:35'),
(17, 10, 'DFS 543', 'SUV/AUV', 'Isuzu D-Max', 'Grey', NULL, '2020-01-06 06:56:35', '2020-01-06 06:56:35'),
(18, 11, 'WPO 329', 'Pickup Truck', 'Foton Thunder', 'Violet', NULL, '2020-01-06 06:56:35', '2020-01-06 06:56:35'),
(19, 12, 'OPP 569', 'SUV/AUV', 'JMC Hunter', 'white', NULL, '2020-01-06 06:56:35', '2020-01-06 06:56:35'),
(20, 13, 'AAO 320', 'SUV/AUV', 'JMC Vigor', 'Silver', NULL, '2020-01-06 06:56:35', '2020-01-06 06:56:35'),
(21, 14, 'FDE 235', 'SUV/AUV', 'Dodge Ram', 'Black', NULL, '2020-01-06 06:56:35', '2020-01-06 06:56:35'),
(22, 4, 'GGD 228', 'Pickup Truck', 'Toyota Avanza', 'Light Brown', NULL, '2020-01-06 07:04:41', '2020-01-06 07:04:41'),
(23, 17, 'TTT 324', 'Pickup Truck', 'Toyota Innova', 'Orange', NULL, '2020-01-06 07:04:41', '2020-01-06 07:04:41'),
(24, 18, 'PET 420', 'Pickup Truck', 'Mitsubishi Xpander', 'White Metalic', NULL, '2020-01-06 07:04:41', '2020-01-06 07:04:41'),
(25, 19, 'ZPS 325', 'SUV/AUV', 'Mazda 6 Sports Wagon', 'Matte Black', NULL, '2020-01-06 07:04:41', '2020-01-06 07:04:41'),
(26, 20, 'HLW 676', 'SUV/AUV', 'Volkswagen Santana GTS', 'Orange', NULL, '2020-01-06 07:04:41', '2020-01-06 07:04:41'),
(27, 21, 'POV 203', 'SUV/AUV', 'Peugeot 308', 'Yellow', NULL, '2020-01-06 07:05:34', '2020-01-06 07:05:34'),
(28, 0, 'DFP 399', 'SUV/AUV', 'Toyota Wigo', 'Black', NULL, '2020-01-06 07:06:27', '2020-01-06 07:06:27'),
(29, 22, 'GFD 900', 'Pickup Truck', 'Kia Soluto', 'Dark Red', NULL, '2020-01-06 07:14:36', '2020-01-06 07:14:36'),
(30, 23, 'VVS 293', 'Customised Vehicle', 'Hyundai Kona', 'Dark Grey', NULL, '2020-01-06 07:14:36', '2020-01-06 07:14:36'),
(31, 24, 'ERD 219', 'Pickup Truck', 'Suzuki Ertiga', 'Brown', NULL, '2020-01-06 07:14:36', '2020-01-06 07:14:36'),
(32, 25, 'DFD 225', 'SUV/AUV', 'Volkswagen Santana', 'Light Red', NULL, '2020-01-06 07:14:36', '2020-01-06 07:14:36'),
(33, 26, 'HLD 698', 'SUV/AUV', 'Suzuki Swift', 'Light Red', NULL, '2020-01-06 07:14:36', '2020-01-06 07:14:36'),
(34, 27, 'KDR 555', 'SUV/AUV', 'Suzuki Vitara', 'Yellow', NULL, '2020-01-06 07:14:36', '2020-01-06 07:14:36'),
(35, 28, 'RWY 653', 'SUV/AUV', 'Ford Everest', 'Black', NULL, '2020-01-06 07:14:36', '2020-01-06 07:14:36'),
(36, 29, 'FOD 111', 'SUV/AUV', 'MG ZS', 'Silver', NULL, '2020-01-06 07:14:36', '2020-01-06 07:14:36'),
(37, 30, 'DFS 2329', 'SUV/AUV', 'Ford Ranger', 'White', NULL, '2020-01-06 07:14:36', '2020-01-06 07:14:36'),
(38, 31, 'LKD 659', 'Pickup Truck', 'Toyota Hilux', 'Black', NULL, '2020-01-06 07:14:36', '2020-01-06 07:14:36'),
(39, 33, 'ORI 5640', 'Pickup Truck', 'Ford Ranger Raptor', 'Black', NULL, '2020-01-06 07:47:28', '2020-01-06 07:47:28'),
(40, 35, 'FGE 604', 'Pickup Truck', 'Ford Ranger Raptor', 'Black', NULL, '2020-01-06 07:47:28', '2020-01-06 07:47:28'),
(41, 36, 'ETO 777', 'SUV/AUV', 'JAC T6', 'Silver', NULL, '2020-01-06 07:47:28', '2020-01-06 07:47:28'),
(42, 37, 'SAS 557', 'SUV/AUV', 'Tata Xenon', 'Black', NULL, '2020-01-06 07:47:28', '2020-01-06 07:47:28'),
(43, 38, 'HKD 540', 'SUV/AUV', 'Great Wall Wingle', 'Black', NULL, '2020-01-06 07:47:28', '2020-01-06 07:47:28'),
(44, 39, 'VBG 529', 'Pickup Truck', 'Great Wall Wingle', 'Black', NULL, '2020-01-06 07:47:28', '2020-01-06 07:47:28'),
(45, 40, 'KDR 888', 'SUV/AUV', 'JMC Vigor', 'White', NULL, '2020-01-07 06:01:39', '2020-01-07 06:01:39'),
(46, 41, 'ERT 347', 'Pickup Truck', 'Mazda BT-50', 'White', NULL, '2020-01-06 07:47:28', '2020-01-06 07:47:28'),
(47, 45, 'FHI 459', 'SUV/AUV', 'Toyota Hilux', 'Black', NULL, '2020-01-06 07:47:28', '2020-01-06 07:47:28'),
(48, 47, 'MNM 193', 'SUV/AUV', 'Mitsubishi Strada\r\n', 'White', NULL, '2020-01-06 07:47:28', '2020-01-06 07:47:28'),
(49, 8, 'DSE 5632', 'SUV/AUV', 'Mitsubishi Strada\r\n', 'White', NULL, '2020-01-06 07:52:22', '2020-01-06 07:52:22'),
(50, 9, 'KHY 399\r\n', 'Pickup Truck', 'Chevrolet Colorado', 'Silver', NULL, '2020-01-07 05:49:28', '2020-01-07 05:49:28'),
(51, 15, 'DDS 2021', 'Pickup Truck', 'Toyota Tacoma', 'Black', NULL, '2020-01-06 07:54:10', '2020-01-06 07:54:10'),
(52, 16, 'DFL 459', 'SUV/AUV', 'Nissan Frontier', 'White', NULL, '2020-01-06 07:54:10', '2020-01-06 07:54:10'),
(53, 44, 'FDH 565', 'SUV/AUV', 'Dodge Ram 1500', 'Silver', NULL, '2020-01-06 08:21:49', '2020-01-06 08:21:49'),
(54, 46, 'GHH 44', 'Pickup Truck', 'Dodge Ram 1500', 'Blue', NULL, '2020-01-06 08:21:49', '2020-01-06 08:21:49'),
(55, 48, 'DDN 345', 'SUV/AUV', 'Dodge Ram 1500', 'Red', NULL, '2020-01-06 08:21:49', '2020-01-06 08:21:49'),
(56, 49, 'DFL 564', 'SUV/AUV', 'Toyota Tundra', 'Dark Red', NULL, '2020-01-06 08:21:49', '2020-01-06 08:21:49'),
(57, 50, 'SDA 434', 'Pickup Truck', 'Toyota Tundra', 'Black', NULL, '2020-01-06 08:21:49', '2020-01-06 08:21:49'),
(58, 51, 'FGH 567', 'Pickup Truck', 'Toyota Tundra', 'Yellow', NULL, '2020-01-06 08:21:49', '2020-01-06 08:21:49'),
(59, 52, 'YUI 437', 'SUV/AUV', 'Ford F-250', 'BLue', NULL, '2020-01-06 08:21:49', '2020-01-06 08:21:49'),
(60, 53, 'XXC 451', 'SUV/AUV', 'Ford F-250', 'Blue', NULL, '2020-01-06 08:21:49', '2020-01-06 08:21:49'),
(61, 54, 'FGB 679', 'Pickup Truck', 'Ford F-250', 'Black', NULL, '2020-01-06 08:21:49', '2020-01-06 08:21:49'),
(62, 55, 'QQK 311', 'SUV/AUV', 'Ford F-250', 'Red', NULL, '2020-01-06 08:21:49', '2020-01-06 08:21:49'),
(63, 56, 'HGH 769', 'SUV/AUV', 'Chevrolet Silverado 2500', 'White', NULL, '2020-01-06 08:21:49', '2020-01-06 08:21:49'),
(64, 57, 'SOO 446', 'Pickup Truck', 'GMC Sierra 1500', 'Black', NULL, '2020-01-06 08:21:49', '2020-01-06 08:21:49'),
(65, 58, 'KHJ 887', 'SUV/AUV', 'GMC Sierra 1500', 'White', NULL, '2020-01-06 08:21:49', '2020-01-06 08:21:49'),
(66, 59, 'KBN 344', 'Pickup Truck', 'Nissan Frontier', 'Black', NULL, '2020-01-06 08:21:49', '2020-01-06 08:21:49'),
(67, 60, 'XZY 123', 'Pickup Truck', 'Toyota RAV4', 'Yellow', NULL, '2020-01-06 08:21:49', '2020-01-06 08:21:49'),
(68, 61, 'ZZZ 110', 'Pickup Truck', 'Chevrolet Equinox', 'Blue', NULL, '2020-01-06 08:42:36', '2020-01-06 08:42:36'),
(69, 62, 'LKJ 987', 'SUV/AUV', 'Nissan Rogue', 'Brown', NULL, '2020-01-06 08:42:36', '2020-01-06 08:42:36'),
(70, 63, 'FHH 499', 'SUV/AUV', 'Honda CR-V', 'Yellow', NULL, '2020-01-06 08:42:36', '2020-01-06 08:42:36'),
(71, 64, 'OIU 566', 'Pickup Truck', 'Jeep Grand Cherokee', 'Black', NULL, '2020-01-06 08:42:36', '2020-01-06 08:42:36'),
(72, 66, 'OOP 906', 'SUV/AUV', 'Jeep Wrangler', 'Black', NULL, '2020-01-06 08:42:36', '2020-01-06 08:42:36'),
(73, 68, 'LKL 775', 'Pickup Truck', 'Toyota Highlander', 'White', NULL, '2020-01-06 08:42:36', '2020-01-06 08:42:36'),
(74, 69, 'EEW 111', 'Pickup Truck', 'Toyota Hiace', 'Silver', NULL, '2020-01-06 08:42:36', '2020-01-06 08:42:36'),
(75, 70, 'QOU 904', 'Pickup Truck', 'Ford Escape ', 'Red', NULL, '2020-01-06 08:42:36', '2020-01-06 08:42:36'),
(76, 71, 'MNN 553', 'Pickup Truck', 'Nissan Titan', 'Silver', NULL, '2020-01-07 06:01:45', '2020-01-07 06:01:45'),
(77, 72, 'NBV 561', 'SUV/AUV', 'Ram Pickup', 'Violet', NULL, '2020-01-06 08:42:36', '2020-01-06 08:42:36'),
(78, 73, 'CCW 118', 'SUV/AUV', 'Toyota Tacoma', 'Black', NULL, '2020-01-06 08:50:25', '2020-01-06 08:50:25'),
(79, 74, 'XIO 281', 'Pickup Truck', 'GMC Sierra', 'Black', NULL, '2020-01-06 08:50:25', '2020-01-06 08:50:25'),
(80, 75, 'DCY 194', 'Pickup Truck', 'Toyota Tundra', 'Black', NULL, '2020-01-06 08:50:25', '2020-01-06 08:50:25'),
(81, 76, 'AAA 456', '', 'Toyota RAV4 ', 'White', NULL, '2020-01-06 08:50:25', '2020-01-06 08:50:25'),
(82, 77, 'FGM 382', 'SUV/AUV', 'Toyota RAV4 ', 'Yellow', NULL, '2020-01-06 08:50:25', '2020-01-06 08:50:25'),
(83, 78, 'YMT 559', 'Customised Vehicle', 'Jeep Grand Cherokee ', 'Black', NULL, '2020-01-06 08:50:25', '2020-01-06 08:50:25'),
(84, 79, 'KKJ 657', 'SUV/AUV', 'Ford Explorer ', 'Brown', NULL, '2020-01-06 08:50:25', '2020-01-06 08:50:25'),
(85, 80, 'TVD 943', 'Pickup Truck', 'Ford Explorer ', 'Black', NULL, '2020-01-06 08:50:25', '2020-01-06 08:50:25'),
(86, 81, 'CCT 2917', 'SUV/AUV', 'Nissan Rogue ', 'Blue', NULL, '2020-01-06 08:50:25', '2020-01-06 08:50:25'),
(87, 82, 'GVK 587', 'SUV/AUV', 'Honda CR-V', 'Black', NULL, '2020-01-06 08:50:25', '2020-01-06 08:50:25'),
(88, 83, 'DTV 455', 'Pickup Truck', 'Toyota Tacoma', 'Black', NULL, '2020-01-06 09:19:29', '2020-01-06 09:19:29'),
(89, 85, 'FTY 992', 'Pickup Truck', 'Toyota Tacoma', 'White', NULL, '2020-01-06 09:19:29', '2020-01-06 09:19:29'),
(90, 86, 'SMW 911', 'Pickup Truck', 'Chevrolet Colorado ', 'Silver', NULL, '2020-01-06 09:19:29', '2020-01-06 09:19:29'),
(91, 87, 'FKA 291', 'Pickup Truck', 'Chevrolet Colorado ', 'Navy Blue', NULL, '2020-01-06 09:19:29', '2020-01-06 09:19:29'),
(92, 88, 'LAA 119', 'Pickup Truck', 'Nissan Titan', 'Orange', NULL, '2020-01-06 09:19:29', '2020-01-06 09:19:29'),
(93, 89, 'XQO 998', 'Pickup Truck', 'Ford Ranger', 'Black', NULL, '2020-01-06 09:19:29', '2020-01-06 09:19:29'),
(94, 90, 'GMY 344', 'Pickup Truck', 'Chevrolet Colorado', 'White', NULL, '2020-01-06 09:19:29', '2020-01-06 09:19:29'),
(95, 91, 'MQO 124', 'SUV/AUV', 'Ford Raptor', 'White', NULL, '2020-01-06 09:19:29', '2020-01-06 09:19:29'),
(96, 92, 'TMV 683', 'Pickup Truck', 'Ford Ranger', 'Orange Yellow', NULL, '2020-01-06 09:19:29', '2020-01-06 09:19:29'),
(97, 93, 'DDL 395', 'Pickup Truck', 'Chevrolet Colorado', 'Black', NULL, '2020-01-06 09:19:29', '2020-01-06 09:19:29'),
(98, 94, 'YOU 858', 'Pickup Truck', 'Mitsubishi Strada', 'Black', NULL, '2020-01-07 05:53:17', '2020-01-07 05:53:17'),
(99, 95, 'RRW 341', 'Pickup Truck', 'Chevrolet Silverado 2500', 'Yellow', NULL, '2020-01-07 05:53:17', '2020-01-07 05:53:17'),
(100, 96, 'YYR 277', 'Customised Vehicle', 'Ford F-250', 'Black', NULL, '2020-01-07 05:53:17', '2020-01-07 05:53:17'),
(101, 97, 'KDF 342', 'Pickup Truck', 'Nissan Frontier', 'White', NULL, '2020-01-07 05:53:17', '2020-01-07 05:53:17'),
(102, 98, 'RTU 347', 'Pickup Truck', 'Toyota Tundra', 'Silver', NULL, '2020-01-07 05:53:17', '2020-01-07 05:53:17'),
(103, 99, 'UUI 997', 'Pickup Truck', 'GMC Sierra 1500', 'White', NULL, '2020-01-07 06:02:32', '2020-01-07 06:02:32'),
(104, 100, 'OTI 097', 'Pickup Truck', 'Dodge Ram 2500', 'Orange', NULL, '2020-01-07 05:53:17', '2020-01-07 05:53:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_id` (`category_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_order`
--
ALTER TABLE `job_order`
  ADD PRIMARY KEY (`jo_id`);

--
-- Indexes for table `mechanic`
--
ALTER TABLE `mechanic`
  ADD PRIMARY KEY (`mechanic_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `stocknumber` (`stocknumber`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`provider_id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`),
  ADD UNIQUE KEY `name` (`supplier_name`);

--
-- Indexes for table `transaction2`
--
ALTER TABLE `transaction2`
  ADD PRIMARY KEY (`transaction2_id`),
  ADD UNIQUE KEY `transaction2_id` (`transaction2_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`tId`),
  ADD KEY `transactions_client_id_foreign` (`client_id`),
  ADD KEY `transactions_product_id_foreign` (`product_id`),
  ADD KEY `transactions_ibfk_1` (`vehicle_id`),
  ADD KEY `transactions_ibfk_2` (`mechanic_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD UNIQUE KEY `plate_no` (`plate_no`),
  ADD UNIQUE KEY `vehicle_id` (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `job_order`
--
ALTER TABLE `job_order`
  MODIFY `jo_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mechanic`
--
ALTER TABLE `mechanic`
  MODIFY `mechanic_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `provider`
--
ALTER TABLE `provider`
  MODIFY `provider_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `po_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction2`
--
ALTER TABLE `transaction2`
  MODIFY `transaction2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `tId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `product_details_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`),
  ADD CONSTRAINT `product_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`mechanic_id`) REFERENCES `mechanic` (`mechanic_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
