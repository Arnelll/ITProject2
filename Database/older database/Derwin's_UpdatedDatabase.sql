-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 08:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeffoffsroad`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` bigint(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `firstname`, `lastname`, `contact_no`, `email`, `address`, `created_at`, `updated_at`) VALUES
(3, 'Nicholas', 'Ebert', 9215556968, 'stephania76@gmail.com', 'Alfonso Tabora, Baguio City', '2011-10-19 00:13:19', '1983-02-25 07:16:53'),
(4, 'Yazmin', 'Bruen', 9295550504, 'ggorczany@gmail.com', 'Ambiong, Baguio City', '1988-11-14 21:32:35', '1987-07-06 06:05:08'),
(5, 'Cale', 'Volkman', 9215551117, 'torp.gene@gmail.com', 'Aurora Hill Proper, Baguio City', '1999-10-30 07:48:33', '2000-02-10 10:31:53'),
(6, 'Nyah', 'Keebler', 9195255150, 'opredovic@gmail.com', 'Rock Quarry, Lower, Baguio City', '1974-06-19 10:26:01', '1972-02-13 02:08:01'),
(7, 'Shanel', 'Mann', 9195551504, 'ortiz.guy@egmail.com', 'Kagitingan, Baguio City', '1980-08-10 11:24:29', '2012-01-25 07:20:49'),
(8, 'Pamela', 'Schamberger', 9215556963, 'maxime.hauck@gmail.com', 'Quezon Hill Proper, Baguio City', '1971-08-30 19:07:38', '1988-02-23 10:57:51'),
(9, 'Olen', 'Buckridge', 9195551519, 'konopelski.julia@yahoo.com', 'Irisan, Baguio City', '2004-05-21 21:54:04', '1996-11-24 18:58:28'),
(10, 'Eleanora', 'Sauer', 9195551519, 'hanna.douglas@yahoo.com', 'Santo Rosario Valley, Baguio City', '2006-01-18 20:37:28', '1987-06-10 08:46:42'),
(11, 'Woodrow', 'Bode', 9215551124, 'karianne.emmerich@gmail.com', 'San Vicente, Baguio City', '1994-10-25 15:00:59', '1992-06-15 17:30:07'),
(12, 'Lucy', 'Tremblay', 9195321512, 'stark.tre@example.com', 'Lopez Jaena, Baguio City', '2015-01-29 05:30:28', '2017-09-01 22:27:15'),
(13, 'Kiana', 'Bartell', 9294550427, 'erika52@gmail.com', 'Lourdes Subdivision, Proper, Baguio City', '2014-08-10 13:41:00', '1999-04-23 07:58:10'),
(14, 'Agnes', 'Kozey', 9294550427, 'aeichmann@yahoo.com', 'Lucnab, Baguio City', '1997-03-18 04:52:13', '2016-09-29 07:29:37'),
(15, 'Dexter', 'Davis', 9193351423, 'farrell.rosanna@gmail.com', 'Military Cut-off, Baguio City', '2019-01-25 09:14:05', '2009-04-17 09:08:00'),
(16, 'Abdul', 'Corwin', 9193351423, 'avis15@gmail.com', 'Fairview Village, Baguio City', '1996-04-25 09:46:09', '1987-08-31 01:36:57'),
(17, 'Rosa', 'Walsh', 9280557934, 'jmarvin@yahoo.com', 'Gabriela Silang, Baguio City', '1973-04-18 05:31:49', '1989-05-11 06:45:27'),
(18, 'Clementine', 'Gusikowski', 9295550511, 'chelsie79@example.com', 'Holy Ghost Extension, Baguio City', '1974-04-22 04:49:54', '1980-01-23 12:11:29'),
(19, 'Chet', 'Kovacek', 9296780521, 'leanna91@gmail.com', 'San Luis Village, Baguio City', '1982-11-12 02:40:31', '2010-11-06 16:45:11'),
(20, 'Dell', 'Beahan', 9195559866, 'pziemann@gmail.com', 'San Luis Village, Baguio City', '1988-03-31 18:41:44', '2009-05-13 14:15:27'),
(21, 'Yvonne', 'Jacobson', 9285557940, 'pfeffer.uriel@gmail.com', 'Puliwes, Baguio City', '1992-11-10 02:43:11', '1973-04-12 12:30:49'),
(22, 'Candido', 'Fisher', 9215552217, 'alan38@gmail.com', 'Imelda Village, Baguio City', '1985-09-18 11:15:20', '2013-02-19 12:10:59'),
(23, 'Chadd', 'Okuneva', 9215556962, 'blanda.rosalia@gmail.com', 'Puliwes, Baguio City', '1999-09-29 13:52:21', '1981-09-26 11:52:16'),
(24, 'Juliana', 'Robel', 9195272543, 'swift.burdette@gmail.com', 'Puliwes, Baguio City', '1978-07-14 15:17:34', '1983-09-08 22:18:08'),
(25, 'Mittie', 'Weissnat', 9197771225, 'helene.senger@gmail.com', 'Camp 8, Baguio City', '2011-07-27 03:53:58', '2013-06-19 02:54:28'),
(26, 'Taryn', 'Koss', 9215234963, 'rosanna48@gmail.com', 'Camp 7, Baguio City', '1981-06-16 12:55:36', '1998-08-05 08:21:05'),
(27, 'Karolann', 'Donnelly', 9195435451, 'boehm.miller@gmail.com', 'Kayang Extension, Baguio City', '2001-06-05 04:35:09', '1983-04-14 22:59:59'),
(28, 'Devin', 'Lebsack', 9235550230, 'blick.modesta@yahoo.com', 'Hillside, Baguio City', '2014-04-22 17:14:03', '2010-02-19 11:43:40'),
(29, 'Helga', 'Spencer', 9215257070, 'modesta25@gmail.com', 'Brookside, Baguio City', '1971-07-12 16:31:46', '1974-06-24 19:23:13'),
(30, 'Kaitlyn', 'Dach', 9214327777, 'myrl.lakin@example.com', 'Guisad Sorong, Baguio City', '2003-04-04 00:01:48', '1985-03-26 03:21:11'),
(31, 'Leann', 'Aufderhar', 9563350504, 'morgan79@yahoo.com', 'Bakakeng Central, Baguio City', '1988-07-02 04:15:39', '2013-12-19 02:45:04'),
(32, 'Johnpaul', 'Feest', 9192341505, 'rlarson@gmail.com', 'Honeymoon (Honeymoon-Holy Ghost), Baguio City', '1975-04-30 13:13:43', '1994-11-02 10:00:48'),
(33, 'Chet', 'Leannon', 9214559681, 'lucile.stoltenberg@gmail.com', 'Aurora Hill Proper, Baguio City', '2001-07-05 19:08:31', '2009-03-11 08:03:48'),
(34, 'Emerald', 'Romaguera', 9215887956, 'durgan.dagmar@yahoo.com', 'Bakakeng North, Baguio City', '2010-11-10 09:02:30', '1988-03-30 15:37:25'),
(35, 'Angie', 'Mills', 9215420120, 'kub.ally@gmail.com', 'Campo Filipino, Baguio City', '1979-12-06 00:13:28', '1986-11-07 11:13:32'),
(36, 'Gaston', 'Collier', 9211156456, 'miller.meghan@gmail.com', 'New Lucban, Baguio City', '1974-02-24 01:02:21', '2007-01-25 13:39:26'),
(37, 'Alf', 'Mills', 9217856964, 'daphney.kuhn@yahoo.com', 'Harrison-Claudio Carantes, Baguio City', '1979-06-19 07:52:03', '1998-02-24 21:58:55'),
(38, 'Robert', 'Windler', 9211452970, 'jamal37@gmail.com', 'Harrison-Claudio Carantes, Baguio City', '1978-01-11 15:39:54', '2016-10-28 18:42:15'),
(39, 'Chaz', 'Beier', 9216786968, 'zaria.paucek@gmail.com', 'Pinsao Pilot Project, Baguio City', '2014-09-28 21:47:36', '1974-06-21 13:32:51'),
(40, 'Tyson', 'Powlowski', 9291460504, 'bashirian.dolly@gmail.com', 'Pinsao Pilot Project, Baguio City', '1986-03-15 13:20:48', '1994-09-16 11:03:58'),
(41, 'Mollie', 'Bahringer', 9101459285, 'hermann.celine@gmail.com', 'Phil-Am, Baguio City', '1971-07-14 11:39:20', '2016-03-13 06:05:55'),
(42, 'Aubrey', 'Walsh', 9071148314, 'igutkowski@gmail.com', 'Greenwater Village, Baguio City', '1985-05-11 04:33:37', '1979-08-09 04:16:41'),
(43, 'Abbey', 'Prohaska', 9214373451, 'imccullough@gmail.com', 'Quirino Hill, East, Baguio City', '1974-07-11 04:24:28', '2002-02-27 22:34:34'),
(44, 'Assunta', 'Brakus', 9194411423, 'merl19@gmail.com', 'Quirino Hill, Lower, Baguio City', '1983-12-27 02:38:56', '1985-06-15 02:48:20'),
(45, 'Zella', 'Wuckert', 9235545982, 'serenity.ferry@gmail.com', 'Quirino Hill, Lower, Baguio City', '2014-10-12 20:04:08', '1997-12-28 21:57:51'),
(46, 'Nora', 'McDermott', 9233554691, 'ppfeffer@yahoo.com', 'Quirino Hill, West, Baguio City', '1987-02-05 18:37:13', '1973-03-08 15:43:23'),
(47, 'Braxton', 'Ledner', 9123456789, 'rippin.hailey@gmail.com', 'Rock Quarry, Middle, Baguio City', '2003-01-06 08:21:17', '1990-07-21 08:42:50'),
(48, 'Eliezer', 'Kuhlman', 9226780898, 'morton.sawayn@gmail.com', 'Salud Mitra, Baguio City', '1988-08-03 20:37:54', '1997-03-01 07:43:29'),
(49, 'Olaf', 'Swaniawski', 9197893774, 'ufarrell@gmail.com', 'Irisan, Baguio City', '2003-03-25 10:54:15', '1999-07-28 17:20:27'),
(50, 'Kaylin', 'Bartoletti', 9329877241, 'baumbach.eldora@gmail.com', 'Lopez Jaena, Baguio City', '2001-08-24 11:15:00', '1997-07-02 12:56:02'),
(51, 'Alessia', 'Fritsch', 9016517258, 'erling73@gmail.com', 'Pinsao Proper, Baguio City', '2018-06-07 10:58:40', '2017-06-01 04:16:39'),
(52, 'Nicolette', 'Rogahn', 9105670285, 'chelsey.jacobson@gmail.com', 'Kayang Extension, Baguio City', '1980-05-19 17:04:35', '1984-03-02 16:43:11'),
(53, 'Nola', 'Spencer', 9105670285, 'jamil.cummings@gmail.com', 'Guisad Central, Baguio City', '1980-08-07 15:47:02', '1991-04-10 09:19:22'),
(54, 'Selina', 'Yundt', 9143547698, 'ngrady@gmail.com', 'Guisad Sorong, Baguio City', '1978-11-05 20:19:36', '2001-10-20 11:34:16'),
(55, 'Talon', 'Weber', 9214571404, 'marcelina.hansen@gmail.com', 'Happy Hollow, Baguio City', '1983-07-11 03:06:57', '1994-05-07 20:40:04'),
(56, 'Genesis', 'Ebert', 9145932503, 'torrey.herman@gmail.com', 'Quirino-Magsaysay, Upper, Baguio City', '2006-10-21 11:30:52', '2005-09-14 05:09:59'),
(57, 'Brant', 'Kuphal', 9145932503, 'bartholome75@gmail.com', 'Sanitary Camp, North, Baguio City', '1981-08-13 23:58:45', '1972-07-21 21:07:37'),
(58, 'Luciano', 'Hyatt', 9754875689, 'lorine96@egmail.com', 'Santo Rosario Valley, Baguio City', '1992-11-27 03:32:51', '2014-01-11 12:02:15'),
(59, 'Icie', 'Block', 9478544364, 'nia.bashirian@gmail.com', 'Santo Tomas, Baguio City', '1970-07-01 01:09:05', '2002-04-29 23:18:27'),
(60, 'Lambert', 'Torp', 9079138550, 'rosetta.hodkiewicz@gmail.com', 'Scout Barrio, Baguio City', '1995-09-06 07:59:51', '2015-01-17 00:38:02'),
(61, 'Kellie', 'Cruickshank', 9602490766, 'dibbert.emerson@gmail.com', 'SLU-SVP Housing Village, Baguio City', '1988-05-29 04:23:45', '1982-05-03 10:03:51'),
(62, 'Sterling', 'Toy', 9104457407, 'tbotsford@gmail.com', 'SLU-SVP Housing Village, Baguio City', '2007-10-03 01:10:35', '2001-11-25 11:27:12'),
(63, 'Christopher', 'Mraz', 9928638521, 'schuppe.dawson@egmail.com', 'Holy Ghost Proper, Baguio City', '1995-08-02 18:16:04', '2002-09-24 18:19:47'),
(64, 'Lilly', 'Schumm', 9655976041, 'wilhelmine89@gmail.com', 'Puliwes, Baguio City', '2016-08-11 21:08:45', '2015-09-11 01:59:56'),
(65, 'River', 'Spencer', 9424269754, 'jkozey@gmail.com', 'Bayan Park East, Baguio City', '1983-08-21 17:25:20', '1994-02-27 19:59:16'),
(66, 'Laisha', 'Stoltenberg', 9851251857, 'thelma73@gmail.com', 'Kagitingan, Baguio City', '1999-01-13 17:23:19', '2017-01-06 10:12:56'),
(67, 'Emmet', 'Feest', 9581043289, 'dusty05@gmail.com', 'SLU-SVP Housing Village, Baguio City', '1998-08-04 08:30:44', '1973-01-02 06:31:02'),
(68, 'Devante', 'Keebler', 9804464038, 'chester11@gmail.com', 'Brookspoint, Baguio City', '1994-05-30 04:56:22', '1972-11-28 04:18:55'),
(69, 'Jessika', 'Considine', 9392371004, 'otilia85@gmail.com', 'SLU-SVP Housing Village, Baguio City', '1974-04-14 18:56:46', '1998-11-17 02:30:19'),
(70, 'Jamarcus', 'Reichel', 9343550606, 'dhaley@gmail.com', 'SLU-SVP Housing Village, Baguio City', '1973-02-01 11:06:20', '2005-08-28 23:02:30'),
(71, 'Juliana', 'Bogisich', 9284727139, 'tremblay.madge@yahoo.com', 'Camdas Subdivision, Baguio City', '1973-03-18 21:20:35', '1985-12-03 12:33:21'),
(72, 'Ocie', 'Medhurst', 9105777987, 'aubrey76@eyahoo.com', 'Camdas Subdivision, Baguio City', '2002-10-22 19:16:02', '1983-05-08 01:28:49'),
(73, 'Jodie', 'Reynolds', 9753603254, 'christine.muller@yahoo.com', 'BGH Compound, Baguio City', '1997-01-11 19:51:11', '2000-08-08 16:02:30'),
(74, 'Sean', 'Pacocha', 9948900700, 'violet.brekke@yahoo.com', 'Teodora Alonzo, Baguio City', '2013-10-01 15:14:45', '2005-04-01 06:52:02'),
(75, 'Mateo', 'Anderson', 9648680023, 'cbednar@eyahoo.com', 'Teodora Alonzo, Baguio City', '2012-10-18 18:37:20', '1981-09-08 14:28:29'),
(76, 'Hadley', 'Stehr', 9612932167, 'rhoda47@yahoo.com', 'Teodora Alonzo, Baguio City', '1991-09-14 14:36:15', '1979-03-16 12:54:17'),
(77, 'Arvilla', 'DuBuque', 9705735868, 'bridie59@yahoo.com', 'Greenwater Village, Baguio City', '1997-11-25 20:35:15', '1991-05-06 09:22:43'),
(78, 'Darrell', 'Keebler', 9162548522, 'goodwin.eusebio@gmail.com', 'Poblacion, La Trinidad', '1988-06-06 17:33:45', '1986-03-04 00:28:10'),
(79, 'Gino', 'Swift', 9512736968, 'ctromp@gmail.com', 'Bineng, La Trinidad', '1983-02-08 11:37:56', '1989-02-08 15:02:41'),
(80, 'Evie', 'Stoltenberg', 9937323635, 'damien85@gmail.com', 'Lubas, La Trinidad', '2018-09-05 11:15:53', '1994-10-28 13:49:49'),
(81, 'George', 'Nienow', 9188678443, 'tquitzon@gmail.com', 'Cruz, La Trinidad', '1973-11-24 09:28:56', '2005-02-27 16:37:50'),
(82, 'Vivien', 'Crist', 9810146559, 'ziemann.bernardo@gmail.com', 'Tawang, La Trinidad', '2004-03-18 13:39:46', '1979-11-30 21:24:02'),
(83, 'Winfield', 'Auer', 9820976200, 'tia.grady@gmail.com', 'Poblacion, La Trinidad', '1984-03-03 02:47:00', '2006-10-02 19:07:39'),
(84, 'Amalia', 'Fisher', 9997192477, 'jayme.hyatt@gmail.com', 'Shilan, La Trinidad', '1982-08-22 19:33:33', '2016-09-12 10:18:18'),
(85, 'Jonathon', 'Wyman', 9593195125, 'cormier.major@gmail.com', 'Alno, La Trinidad', '2017-04-17 04:13:39', '1985-03-27 01:18:20'),
(86, 'Amaya', 'Kuhlman', 9259810613, 'ubaldo05@gmail.com', 'Pico, La Trinidad', '2009-11-02 17:43:56', '2011-05-11 21:32:51'),
(87, 'Jaida', 'Metz', 9710906192, 'favian31@gmail.com', 'Betag, La Trinidad', '1979-02-07 23:59:08', '1976-12-24 07:30:45'),
(88, 'Bette', 'Denesik', 9433132834, 'kerluke.sofia@gmail.com', 'Bahong, La Trinidad', '1985-04-26 06:47:03', '1977-02-16 16:50:35'),
(89, 'Yadira', 'Schuster', 9524902702, 'kavon.gerhold@gmail.com', 'Pico, La Trinidad', '1972-08-24 02:28:36', '1970-12-03 08:57:11'),
(90, 'Kieran', 'Goyette', 9882087047, 'ujohns@gmail.com', 'Shilan, La Trinidad', '1981-02-08 18:23:32', '1996-04-10 21:05:43'),
(91, 'Charity', 'Hickle', 9876543212, 'iking@yahoo.com', 'Poblacion, La Trinidad', '2003-10-31 21:26:47', '2000-04-04 03:40:20'),
(92, 'Ramiro', 'Toy', 9737994787, 'glindgren@yahoo.com', 'Balili, La Trinidad', '1972-11-20 07:50:44', '2001-12-17 00:57:33'),
(93, 'Tad', 'Rath', 9665427883, 'jolie35@yahoo.com', 'Bineng, La Trinidad', '1997-08-02 22:40:22', '1982-05-22 15:55:24'),
(94, 'Alessandra', 'Anderson', 9369880901, 'joshua.kub@yahoo.com', 'Poblacion, La Trinidad', '1985-11-14 20:30:27', '1985-08-31 02:17:19'),
(95, 'Jamie', 'Hahn', 9707560316, 'zachary55@yahoo.com', 'Bahong, La Trinidad', '1989-05-01 21:43:07', '1980-03-07 19:44:53'),
(96, 'Einar', 'Vandervort', 9807044900, 'lizzie.borer@yahoo.com', 'Lubas, La Trinidad', '1993-10-31 00:09:45', '1980-08-18 17:29:13'),
(97, 'Else', 'Wyman', 9402407262, 'rebeca.wilkinson@yahoo.com', 'BahongLa Trinidad	', '1993-12-18 05:39:02', '1996-09-05 00:17:00'),
(98, 'Erin', 'Ebert', 9137054241, 'swaniawski.haleigh@yahoo.com', 'Bahong, La Trinidad', '2010-05-16 11:30:04', '1997-10-02 02:58:25'),
(99, 'Nicole', 'Champlin', 9688332448, 'fbraun@gmail.com', 'Bahong, La Trinidad', '1981-12-11 06:46:32', '2009-12-02 07:56:53'),
(100, 'Athena', 'Aufderhar', 9993424360, 'randall06@gmail.com', 'Alapang, La Trinidad', '1971-09-16 12:50:34', '1974-02-08 21:25:17'),
(101, 'Alfred', 'Huels', 9321739220, 'harley66@gmail.com', 'Alno, La Trinidad', '1986-09-15 20:45:39', '2011-07-01 10:07:42'),
(102, 'Anika', 'Lesch', 9410704669, 'cora26@egmail.com', 'Ambiong, La Trinidad', '1972-03-21 10:26:45', '1979-10-21 13:55:46');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(2) NOT NULL,
  `delivery_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `supplier_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`delivery_id`, `product_id`, `quantity`, `delivery_date`, `supplier_id`) VALUES
(1, 28, 14, '2020-02-06 08:01:38', 1),
(2, 104, 4, '2020-02-06 08:01:38', 1),
(3, 64, 8, '2020-02-06 08:01:38', 1),
(4, 99, 12, '2020-02-06 08:01:38', 1),
(5, 175, 8, '2020-02-06 08:01:38', 1),
(6, 176, 8, '2020-02-06 08:01:38', 1),
(7, 191, 4, '2020-02-06 08:01:38', 1),
(8, 171, 8, '2020-02-06 08:01:38', 1),
(9, 79, 6, '2020-02-06 08:01:38', 1),
(10, 81, 20, '2020-02-06 08:01:38', 1),
(11, 55, 24, '2020-02-06 08:01:38', 1),
(12, 97, 16, '2020-02-06 08:01:38', 1),
(13, 66, 8, '2020-02-06 08:01:38', 1),
(14, 61, 4, '2020-02-06 08:01:38', 1),
(15, 75, 8, '2020-02-06 08:01:38', 1),
(16, 41, 12, '2020-02-06 08:01:38', 1),
(17, 101, 4, '2020-02-06 08:01:38', 1),
(18, 50, 12, '2020-02-06 08:01:38', 1),
(19, 106, 8, '2020-02-06 08:01:38', 1),
(30, 36, 4, '2020-02-06 08:43:07', 1),
(31, 49, 12, '2020-02-06 08:43:07', 1),
(32, 59, 8, '2020-02-06 08:43:07', 1),
(33, 87, 12, '2020-02-06 08:43:07', 1),
(34, 100, 24, '2020-02-06 08:43:07', 1),
(35, 55, 20, '2020-02-06 08:43:07', 1),
(36, 190, 48, '2020-02-06 08:43:07', 1),
(37, 112, 36, '2020-02-06 08:43:07', 1),
(38, 106, 12, '2020-02-06 08:43:07', 1),
(39, 168, 36, '2020-02-06 08:43:07', 1),
(40, 157, 48, '2020-02-06 08:53:23', 1),
(41, 44, 12, '2020-02-06 08:53:23', 1),
(42, 170, 28, '2020-02-06 08:53:23', 1),
(43, 73, 20, '2020-02-06 08:53:23', 1),
(44, 80, 12, '2020-02-06 08:53:23', 1),
(45, 100, 8, '2020-02-06 08:53:23', 1),
(46, 172, 40, '2020-02-06 08:53:23', 1),
(47, 48, 12, '2020-02-06 09:05:59', 1),
(48, 110, 44, '2020-02-06 09:05:59', 1),
(49, 170, 20, '2020-02-06 09:05:59', 1),
(50, 109, 24, '2020-02-06 09:05:59', 1),
(51, 77, 20, '2020-02-06 09:05:59', 1),
(52, 26, 40, '2020-02-06 09:05:59', 1),
(53, 28, 10, '2020-02-06 09:05:59', 1),
(54, 47, 20, '2020-02-06 09:05:59', 1),
(55, 48, 20, '2020-02-06 09:05:59', 1),
(56, 78, 20, '2020-02-06 09:05:59', 1),
(57, 5, 4, '2020-02-10 10:32:51', 1),
(58, 1, 5, '2020-02-10 10:33:17', 2);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE `delivery_details` (
  `delivery_details_id` int(11) NOT NULL,
  `delivery_product_id` int(11) NOT NULL,
  `delivery_quantity` int(3) NOT NULL,
  `delivery_retail_price` decimal(11,2) NOT NULL,
  `delivery_wholesale_price` decimal(11,2) NOT NULL,
  `delivery_distributor_price` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_order`
--

CREATE TABLE `job_order` (
  `jo_id` int(11) UNSIGNED NOT NULL,
  `client_id` int(11) UNSIGNED NOT NULL,
  `mechanic_id` int(11) UNSIGNED NOT NULL,
  `vehicle_id` int(11) UNSIGNED NOT NULL,
  `total` decimal(11,2) DEFAULT NULL,
  `status` enum('Ongoing','Rendered','Cancelled','Pending') NOT NULL DEFAULT 'Pending',
  `date_created` timestamp NULL DEFAULT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_order`
--

INSERT INTO `job_order` (`jo_id`, `client_id`, `mechanic_id`, `vehicle_id`, `total`, `status`, `date_created`, `remarks`) VALUES
(117, 3, 1, 70, NULL, 'Ongoing', '2020-02-06 04:54:17', 'test'),
(126, 3, 1, 180, '3.00', 'Pending', '2020-02-09 10:39:28', 'www'),
(127, 3, 1, 180, '3.00', 'Pending', '2020-02-09 10:39:47', 'www'),
(128, 3, 1, 180, '501.00', 'Pending', '2020-02-09 10:42:04', 'qq'),
(129, 3, 1, 180, '501.00', 'Cancelled', '2020-02-09 10:42:35', 'qq'),
(130, 3, 1, 180, '992.97', 'Rendered', '2020-02-09 10:43:13', 'qq'),
(131, 3, 1, 180, '992.97', 'Pending', '2020-02-09 10:43:36', 'qq'),
(132, 3, 1, 180, '992.97', 'Pending', '2020-02-09 10:43:43', 'qq'),
(133, 3, 1, 180, '992.97', 'Pending', '2020-02-09 10:43:58', 'qq'),
(134, 3, 1, 180, '992.97', 'Pending', '2020-02-09 10:44:37', 'qq'),
(135, 3, 1, 180, '992.97', 'Pending', '2020-02-09 10:44:53', 'qq'),
(136, 3, 1, 180, '992.97', 'Pending', '2020-02-09 10:45:55', 'qq'),
(137, 3, 1, 180, '992.97', 'Pending', '2020-02-09 10:46:13', 'qq'),
(138, 3, 1, 70, '2000.00', 'Pending', '2020-02-09 10:46:56', '11111'),
(139, 3, 1, 180, '1001.00', 'Pending', '2020-02-09 10:47:24', '2323123'),
(140, 3, 1, 180, '751.00', 'Pending', '2020-02-09 10:49:10', '23123eheh'),
(141, 5, 3, 4, '3500.00', 'Pending', '2020-02-09 10:49:26', 'adgASDfasd'),
(142, 3, 2, 70, '675.95', 'Pending', '2020-02-09 10:50:09', '1512asdasd'),
(143, 4, 3, 4, '2500.00', 'Pending', '2020-02-09 10:51:24', 'qweqwe'),
(144, 4, 2, 70, '750.00', 'Pending', '2020-02-10 07:18:54', 'testest'),
(145, 18, 5, 155, '1502.00', 'Pending', '2020-02-10 07:19:19', 'asd2232323'),
(146, 6, 31, 66, '10256.00', 'Pending', '2020-02-10 10:00:59', 'Painting'),
(147, 20, 3, 76, '92462.00', 'Pending', '2020-02-10 10:07:06', 'Wheel Alignment and Installation'),
(148, 12, 32, 69, '36071.00', 'Ongoing', '2020-02-10 10:09:06', 'Lifting and Painting'),
(149, 7, 8, 6, '7446.00', 'Cancelled', '2020-02-10 10:11:26', 'Cleaning and Painting'),
(150, 16, 1, 151, '45.00', 'Ongoing', '2020-02-10 10:13:45', 'Restoration');

-- --------------------------------------------------------

--
-- Table structure for table `job_order_details`
--

CREATE TABLE `job_order_details` (
  `jodetails_id` int(11) NOT NULL,
  `jo_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(3) NOT NULL,
  `discount` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_order_details`
--

INSERT INTO `job_order_details` (`jodetails_id`, `jo_id`, `product_id`, `quantity`, `discount`) VALUES
(34, 117, 1, 4, 0),
(35, 117, 2, 4, 0),
(36, 117, 3, 4, 0),
(37, 117, 4, 4, 0),
(53, 145, 1, 2, 0),
(52, 144, 2, 1, 0),
(54, 146, 11, 5, 0),
(55, 147, 28, 4, 0),
(56, 148, 12, 6, 0),
(57, 149, 2, 2, 0),
(58, 150, 4, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE `mechanic` (
  `mechanic_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `contact_no` varchar(16) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mechanic`
--

INSERT INTO `mechanic` (`mechanic_id`, `first_name`, `last_name`, `contact_no`, `address`, `date_created`) VALUES
(1, 'Justine', 'Dungan', '09362842650', 'Baguio City', '0000-00-00 00:00:00'),
(2, 'Jin', 'Woo', '09123456789', 'Baguio City', '0000-00-00 00:00:00'),
(3, 'Steve', 'Fox', '09987654321', 'Baguio City', '0000-00-00 00:00:00'),
(4, 'Brian', 'Fox', '0998765432', 'Baguio City', '0000-00-00 00:00:00'),
(5, 'Byron', 'Coffey', '09650118024', 'Baguio City', '0000-00-00 00:00:00'),
(6, 'Gregory', 'Mclaughlin', '09486422309', 'Baguio City', '0000-00-00 00:00:00'),
(7, 'Carmen', 'James', '09782427484', 'Baguio City', '0000-00-00 00:00:00'),
(8, 'Tia', 'Singh', '09463614108', 'Baguio City', '0000-00-00 00:00:00'),
(9, 'Cole', 'Booker', '09376859937', 'Baguio City', '0000-00-00 00:00:00'),
(10, 'Wayn', 'Horne', '09873600610', 'Baguio City', '0000-00-00 00:00:00'),
(11, 'Cheyenne', 'Gibson', '09093691532', 'Baguio City', '0000-00-00 00:00:00'),
(12, 'Kalvin', 'Blair', '09497885538', 'Baguio City', '0000-00-00 00:00:00'),
(13, 'Ansh', 'Wang', '09316779755', 'Baguio City', '0000-00-00 00:00:00'),
(14, 'Enya', 'Curry', '09097682298', 'Baguio City', '0000-00-00 00:00:00'),
(15, 'Matteo', 'Gillard', '09103989563', 'Baguio City', '0000-00-00 00:00:00'),
(16, 'Abul', 'Cantu', '09085553595', 'Baguio City', '0000-00-00 00:00:00'),
(17, 'Kiya', 'Mccray', '09295553009', 'Baguio City', '0000-00-00 00:00:00'),
(18, 'Kristopher ', 'Hendricks', '09325558799', 'Baguio City', '0000-00-00 00:00:00'),
(19, 'Axl', 'Lindsey', '0985550782', 'Baguio City', '0000-00-00 00:00:00'),
(20, 'Abida', 'Coleman', '09195558596', 'Baguio City', '0000-00-00 00:00:00'),
(21, 'Manal', 'Phelps', '09325550638', 'Baguio City', '0000-00-00 00:00:00'),
(22, 'Iain', 'Gilliam', '09195559160', 'Baguio City', '0000-00-00 00:00:00'),
(23, 'Henley', 'Flores', '09325515302', 'Baguio City', '0000-00-00 00:00:00'),
(24, 'Jaye', 'Forbes', '09012663601', 'Baguio City', '0000-00-00 00:00:00'),
(25, 'Ricky', 'Cohen', '09801230634', 'Baguio City', '0000-00-00 00:00:00'),
(27, 'Brendan', 'Salazar', '09295550157', 'Baguio City', '0000-00-00 00:00:00'),
(28, 'Sullivan', 'Barber', '0932555900', 'Baguio City', '0000-00-00 00:00:00'),
(29, 'Frankie', 'Mercer', '09295556487', 'Baguio City', '0000-00-00 00:00:00'),
(30, 'Mac ', 'Vinson', '09325553138', 'Baguio City', '0000-00-00 00:00:00'),
(31, 'Rudy ', 'Hamilton', '09280544375', 'Baguio City', '0000-00-00 00:00:00'),
(32, 'Joebemark', 'Cachin', '029392929', 'somewhere along baguio', '2020-02-06 13:39:41');

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
-- Table structure for table `productcheckout_details`
--

CREATE TABLE `productcheckout_details` (
  `productcheckout_details_id` int(11) NOT NULL,
  `productcheckout_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productcheckout_details`
--

INSERT INTO `productcheckout_details` (`productcheckout_details_id`, `productcheckout_id`, `product_id`, `quantity`) VALUES
(6, 49, 1, 1),
(4, 48, 1, 3),
(5, 48, 4, 4),
(7, 50, 1, 1),
(8, 51, 1, 1),
(9, 52, 11, 1),
(10, 53, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(3) DEFAULT NULL,
  `retail_price` decimal(11,2) NOT NULL,
  `wholesale_price` decimal(11,2) NOT NULL,
  `distributor_price` decimal(11,2) NOT NULL,
  `product_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `quantity`, `retail_price`, `wholesale_price`, `distributor_price`, `product_number`) VALUES
(1, 'Microtex Tire Black 30ml w/ Conditioner', 25, '12.00', '2376.00', '0.00', NULL),
(2, 'Microtex Tire Black 30ml w/ Conditioner', 24, '150.00', '1797.00', '0.00', NULL),
(3, 'Microtex Shampoo 2L', 12, '270.00', '1618.50', '0.00', NULL),
(4, 'Microtex Wash & Wax Twin Pack', 50, '15.00', '0.00', '0.00', NULL),
(5, 'Microtex Wash & Wax 500ml', 40, '200.00', '2376.00', '0.00', NULL),
(6, 'Pro Comp Rock Crawler Front Bumper', 7, '4549.50', '22747.50', '0.00', NULL),
(7, 'Pro Comp - Rock Crawler Stubby Front Bumper(Black)', 4, '5780.50', '29702.50', '0.00', NULL),
(8, 'Smittybilt - Full Width Front Tubular Bumper(Silver)', 10, '6952.00', '34760.00', '0.00', NULL),
(9, 'Smittybilt - Full Width Front Tubular Bumper(Silver)', 10, '6952.00', '34760.00', '0.00', NULL),
(10, 'Smittybilt - Full Width Front Tubular Bumper (Carbon Fiber)', 3, '11249.50', '55247.50', '0.00', NULL),
(11, 'Dupli-Color - Scratch All-in-1 Exact-Match Automotive Paint(White)', 12, '835.00', '0.00', '0.00', NULL),
(12, 'Dupli-Color - Scratch All-in-1 Exact-Match Automotive Paint(Black)', 11, '1013.50', '20260.00', '0.00', NULL),
(13, 'Dupli-Color - Scratch All-in-1 Exact-Match Automotive Paint(Silver)', 10, '835.00', '16500.00', '0.00', NULL),
(14, 'Dupli-Color - Scratch All-in-1 Exact-Match Automotive Paint(Blue)', 5, '835.00', '16500.00', '0.00', NULL),
(15, 'Dupli-Color - Scratch All-in-1 Exact-Match Automotive Paint(Blue)', 12, '1013.50', '20260.00', '0.00', NULL),
(16, 'AMSOIL - Signature Series Max-Duty Synthetic Diesel Oil 15W-40', 10, '590.00', '4870.00', '0.00', NULL),
(17, 'AMSOIL - DOMINATOR® 5W-20 Racing Oil', 6, '735.00', '4200.00', '0.00', NULL),
(18, 'AMSOIL - DOMINATOR® SAE 60 Racing Oil', 14, '825.00', '6390.00', '0.00', NULL),
(19, 'AMSOIL - DOMINATOR® 10W-30 Racing Oil', 24, '825.00', '6390.00', '0.00', NULL),
(20, 'AMSOIL - DOMINATOR® 15W-50 Racing Oil', 4, '825.00', '6390.00', '0.00', NULL),
(21, 'Geolander M/T G003', 12, '6000.00', '0.00', '0.00', NULL),
(22, 'Kumho Road Venture AT51 235/75R15XL 109T BSW', 24, '6500.00', '0.00', '0.00', NULL),
(23, 'Nitto Grappler G2 17\"255/55R18 109H XL', 44, '7100.00', '0.00', '0.00', NULL),
(24, 'Toyo Open Country A/T II P225/75R16 104S BSW', 20, '5933.00', '0.00', '0.00', NULL),
(25, 'Toyo Open Country A/T II P225/75R15 102S WL', 16, '7533.00', '0.00', '0.00', NULL),
(26, 'Fabtech Spindle Lift System', 12, '20709.00', '0.00', '0.00', NULL),
(27, 'Southern Truck Leveling Kit', 16, '7497.50', '0.00', '0.00', NULL),
(28, 'Belltech Lowering & Lifting Strut', 4, '5149.50', '0.00', '0.00', NULL),
(29, 'ProRYDE LIFT Machine Leveling Kit', 28, '17950.00', '0.00', '0.00', NULL),
(30, 'Ready Lift Leveling Kit', 16, '26997.50', '0.00', '0.00', NULL),
(31, 'FF104 Polished', 12, '12033.00', '0.00', '0.00', NULL),
(32, 'FF103 Glossed & Milled', 12, '11433.00', '0.00', '0.00', NULL),
(33, 'FF99 Softy Candy Red & Milled', 8, '11733.00', '0.00', '0.00', NULL),
(34, 'FF92 Polished', 12, '10444.00', '0.00', '0.00', NULL),
(35, 'FF88 Polished w/ Beaver Bronze', 16, '17500.00', '0.00', '0.00', NULL),
(36, 'Renegade Dually Front D265 Gloss Black & Milled', 12, '10500.00', '0.00', '0.00', NULL),
(37, 'Renegade Dually Rear D265', 16, '10900.00', '0.00', '0.00', NULL),
(38, 'Prochoice Microfiber Multi-Tasker Cloth(Violet) x3', 24, '170.00', '8500.00', '0.00', NULL),
(39, 'Crown - Full Width Black Front HD', 19, '4210.50', '20200.00', '0.00', NULL),
(40, 'Spyder - LED Headlights', 24, '5270.00', '36500.00', '0.00', NULL),
(41, 'Lumen - LED Headlights', 2, '2000.00', '3200.00', '0.00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_checkout`
--

CREATE TABLE `product_checkout` (
  `product_checkout_id` int(11) NOT NULL,
  `jo_id` int(11) NOT NULL,
  `total` decimal(11,2) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_checkout`
--

INSERT INTO `product_checkout` (`product_checkout_id`, `jo_id`, `total`, `date_created`) VALUES
(48, 117, '1443.00', '2020-02-09 09:40:55'),
(49, 145, '1.00', '2020-02-10 07:21:38'),
(50, 150, '12.00', '2020-02-10 10:40:20'),
(51, 149, '12.00', '2020-02-10 10:44:19'),
(52, 148, '835.00', '2020-02-10 10:44:29'),
(53, 149, '12.00', '2020-02-10 11:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `category`, `brand`, `supplier_id`) VALUES
(1, 'Detailing Products', 'Microtex', 1),
(2, 'Detailing Products', 'Microtex', 1),
(3, 'Detailing Products', 'Microtex', 2),
(4, 'Detailing Products', 'Microtex', 2),
(5, 'Detailing Products', 'Microtex', 1),
(6, 'Accessories', 'Pro Comp', 1),
(7, 'Accessories', 'Pro Comp', 1),
(8, 'Accessories', 'Smittybilt', 1),
(9, 'Accessories', 'Smittybilt', 1),
(10, 'Accessories', 'Smittybilt', 1),
(11, 'Paint', 'Dupli-Color', 1),
(12, 'Paint', 'Dupli-Color', 1),
(13, 'Paint', 'Dupli-Color', 2),
(14, 'Paint', 'Dupli-Color', 1),
(15, 'Paint', 'Dupli-Color', 1),
(16, 'Oil', 'AMSOIL', 2),
(17, 'Oil', 'AMSOIL', 1),
(18, 'Oil', 'AMSOIL', 1),
(19, 'Oil', 'AMSOIL', 1),
(20, 'Oil', 'AMSOIL', 1),
(21, 'Wheel Tires', 'Geolander', 2),
(22, 'Wheel Tires', 'Kumho', 1),
(23, 'Wheel Tires', 'Nitto', 2),
(24, 'Wheel Tires', 'Toyo', 1),
(25, 'Wheel Tires', 'Toyo', 1),
(26, 'Suspension', 'Fabtech', 1),
(27, 'Suspension', 'Southern Truck', 1),
(28, 'Suspension', 'Belltech', 2),
(29, 'Suspension', 'ProRYDE LIFT', 1),
(30, 'Suspension', 'Ready Lift', 1),
(31, 'Wheel Rims', 'Falken', 2),
(32, 'Wheel Rims', 'Falken', 1),
(33, 'Wheel Rims', 'Falken', 1),
(34, 'Wheel Rims', 'Falken', 1),
(35, 'Wheel Rims', 'Falken', 1),
(36, 'Wheel Rims', 'Renegade', 1),
(37, 'Wheel Rims', 'Renegade', 1),
(38, 'Detailing Products', 'Prochoice', 1),
(39, 'Accessories', 'Crown', 1),
(40, 'Accessories', 'Spyder', 2),
(41, 'Accessories', 'Lumen', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `total` decimal(11,2) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `client` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `total`, `date_created`, `client`) VALUES
(18, '2750.00', '2020-02-09 10:51:58', '5'),
(19, '345.00', '2020-02-10 10:15:32', 'Anonymous');

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `sales_details_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(3) NOT NULL,
  `discount` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_details`
--

INSERT INTO `sales_details` (`sales_details_id`, `product_id`, `quantity`, `discount`, `sales_id`) VALUES
(8, 3, 5, 0, 18),
(7, 2, 3, 0, 18),
(9, 4, 4, 0, 19);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `name`) VALUES
(1, 'Wheel Alignment'),
(2, 'Lifting'),
(3, 'Restoration'),
(4, 'Vehicle Painting'),
(5, 'Production Installation'),
(6, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `contact_no` varchar(16) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `name`, `address`, `contact_no`, `date_created`, `date_updated`) VALUES
(1, 'Juan Dela Cruz', 'Manila, Philippines', '09105670562', '2019-11-08 00:00:00', '2019-12-16 16:27:21'),
(2, 'Darryl Dagoat', 'Quezon City, Philippines', '09453224533', '2019-12-17 00:00:00', '2019-12-16 16:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `transaction2`
--

CREATE TABLE `transaction2` (
  `transaction2_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Total` double(11,2) NOT NULL,
  `date_created` datetime NOT NULL,
  `update_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction2`
--

INSERT INTO `transaction2` (`transaction2_id`, `client_id`, `product_id`, `quantity`, `Total`, `date_created`, `update_stamp`, `discount`) VALUES
(1, 3, 26, 5, 555.00, '2019-11-05 00:00:00', '2019-11-22 00:41:20', 0),
(2, 1011, 26, 1, 12.00, '2019-12-29 12:21:59', '2019-12-29 12:21:59', 0),
(3, 1012, 26, 5, 54.00, '2019-12-29 12:25:56', '2019-12-29 12:25:56', 10),
(4, 1012, 44, 6, 540.00, '2019-12-29 12:25:56', '2019-12-29 12:25:56', 50),
(5, 1013, 43, 25, 1625.00, '2019-12-29 13:29:20', '2019-12-29 13:29:20', 50),
(6, 1014, 26, 2, 23.76, '2020-01-07 03:39:09', '2020-01-07 03:39:09', 1),
(7, 4, 46, 1, 346.50, '2020-01-07 04:00:09', '2020-01-07 04:00:09', 1),
(8, 1016, 26, 1, 12.00, '2020-01-12 14:59:06', '2020-01-12 14:59:06', 0),
(9, 1017, 47, 1, 14687.00, '2020-01-12 14:59:24', '2020-01-12 14:59:24', 0),
(10, 3, 26, 1, 11.88, '2020-01-14 06:00:35', '2020-01-14 06:00:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `tId` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `orig_quantity` int(11) NOT NULL,
  `service` enum('Repair and Maintenance','Lifting','Wheel Alignment','Painting','N/A') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `status` enum('Pending','Ongoing','Rendered','Cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_walkin`
--

CREATE TABLE `transaction_walkin` (
  `twId` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_walkin`
--

INSERT INTO `transaction_walkin` (`twId`, `client_id`, `product_id`, `quantity`, `discount`, `total`, `date_created`) VALUES
(1, 3, 26, 1, 1, 12, '2020-02-01 17:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
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
(4, 'owner', 'Owner', 1, 'owner@jeff.ph', NULL, '$2y$10$h1y41nzKMAtJdr1e6WI25O1wAQz3KwjJe.diBBZVcFDQ76Iw01AOW', 'O1umZb8Ups4Ss6G4GxbsL62YDqKrjU9bthnt2uCvPFyJ27g5erxc4EXjcdD9', '2019-09-10 07:21:26', '2019-09-10 07:21:26', 'Secretary', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `plate_no` varchar(30) NOT NULL,
  `type` varchar(255) NOT NULL,
  `model` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `client_id`, `plate_no`, `type`, `model`, `color`, `description`, `date_created`, `date_updated`) VALUES
(1, 3, 'ZXC 987', 'SUV/AUV', 'Ford Raptor', 'Red', '4 wheels', '2019-12-15 00:00:00', '2020-02-06 03:58:39'),
(2, 3, 'ZXC 999', 'SUV/AUV', '2015', 'Black', '4 wheels', '2020-02-05 04:26:14', '2020-02-05 06:34:46'),
(4, 34, 'ABC 123', 'Pickup Truck', 'Raptor', 'Yellow ', 'outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 06:34:46'),
(5, 21, 'DFT 490', 'SUV/AUV', 'Elf', 'Pink', 'outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 06:34:46'),
(6, 7, 'DET 902', 'SUV/AUV', 'Innova', 'Silver', 'outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 06:34:46'),
(7, 7, 'TRE 01', 'Pickup Truck', 'Chevrolet', 'Orange', 'outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 06:34:52'),
(35, 5, 'DFO 341', 'SUV/AUV', 'Toyota Hiace', 'Black', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 06:47:24'),
(66, 6, 'XDT 405', 'SUV/AUV', 'Grand Starex', 'Yellow', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 06:53:38'),
(67, 10, 'DFS 543', 'SUV/AUV', 'Isuzu D-Max', 'Green', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 06:53:38'),
(68, 11, 'WPO 329', 'Pickup Truck', 'Foton Thunder', 'Black', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 06:53:38'),
(69, 12, 'OPP 569', 'SUV/AUV', 'JMC Hunter', 'White', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 06:53:38'),
(70, 13, 'AAO 320', 'Pickup Truck', 'JMC Vigor', 'Navy blue ', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 06:53:38'),
(71, 14, 'FDE 235', 'SUV/AUV', 'Dodge Ram', 'Matte black', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 06:53:38'),
(72, 4, 'GGD 228', 'Pickup Truck', 'Toyota Avanza', 'Brown', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 06:53:38'),
(73, 17, 'TTT 324', 'Pickup Truck', 'Toyota Innova', 'Yellow', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 06:53:38'),
(74, 18, 'PET 420', 'Pickup Truck', 'Mitsubishi Xpander', 'Maroon', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 06:53:38'),
(75, 19, 'ZPS 325', 'SUV/AUV', 'Mazda 6 Sports Wagon', 'Pink', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 06:53:38'),
(76, 20, 'HLW 676', 'SUV/AUV', 'Volkswagen Santana GTS', 'Orange', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 07:07:15'),
(77, 21, 'POV 203', 'SUV/AUV', 'Peugeot 308', 'Red', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 07:07:15'),
(78, 22, 'GFD 900', 'Pickup Truck', 'Kia Soluto', 'Blue', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 07:07:15'),
(79, 23, 'VVS 293', 'Customized Vehicle', 'Hyundai Kona', 'Black', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 07:07:15'),
(80, 24, 'ERD 219', 'Pickup Truck', 'Suzuki Ertiga', 'Matte black', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 07:07:15'),
(81, 25, 'DFD 225', 'SUV/AUV', 'Volkswagen Santana', 'Matte black', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 07:07:15'),
(82, 26, 'HLD 698', 'Pickup Truck', 'Volkswagen Santana GTS', 'Yellow', '4x4 drive vehicle', '2020-02-05 00:00:00', '2020-02-05 07:07:15'),
(83, 27, 'KDR 555', 'SUV/AUV', 'Suzuki Vitara', 'Black', '4x4 drive vehicle', '2020-02-05 00:00:00', '2020-02-05 07:07:15'),
(84, 28, 'RWY 653', 'SUV/AUV', 'Ford Everest', 'Maroon', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 07:07:15'),
(85, 29, 'FOD 111', 'SUV/AUV', 'MG ZS', 'Pink', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 07:07:15'),
(86, 30, 'DFS 2329', 'Pickup Truck', 'Ford Ranger', 'Navy blue ', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 07:07:15'),
(87, 31, 'LKD 659', 'Pickup Truck', 'Toyota Hilux', 'Maroon', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 07:07:15'),
(88, 33, 'ORI 5640', 'Pickup Truck', 'Ford Ranger', 'Maroon', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 07:07:15'),
(89, 35, 'FGE 604', 'Pickup Truck', 'Ford Ranger ', 'Navy blue ', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 07:07:15'),
(90, 36, 'ETO 777', 'SUV/AUV', 'JAC T6', 'Black', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 07:07:15'),
(91, 37, 'SAS 557', 'SUV/AUV', 'Tata Xenon', 'Red', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 07:07:15'),
(92, 38, 'HKD 540', 'SUV/AUV', 'Great Wall Wingle', 'White', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 07:20:13'),
(93, 39, 'VBG 529', 'Pickup Truck', 'Great Wall Wingle', 'Yellow', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 07:20:13'),
(94, 40, 'KDR 888', 'SUV/AUV', 'JMC Vigor', 'White', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 07:20:13'),
(95, 41, 'ERT 347', 'Pickup Truck', 'Mazda BT-50', 'Red', '4x4 drive vehicle', '2020-02-05 00:00:00', '2020-02-05 07:20:13'),
(96, 45, 'FHI 459', 'SUV/AUV', 'Toyota Hilux', 'Lowered vehicle', 'Toyota Hilux', '2020-02-05 00:00:00', '2020-02-05 07:20:13'),
(97, 47, 'MNM 193', 'SUV/AUV', 'Mitsubishi Strada', 'Silver', '4x4 drive vehicle', '2020-02-05 00:00:00', '2020-02-05 07:20:13'),
(98, 8, 'DSE 5632', 'SUV/AUV', 'Mitsubishi Strada', 'Matte black', '4x4 drive vehicle', '2020-02-05 00:00:00', '2020-02-05 07:20:13'),
(99, 9, 'KHY 399', 'Pickup Truck', 'Chevrolet Colorado', 'Orange', '4x4 drive vehicle', '2020-02-05 00:00:00', '2020-02-05 07:20:13'),
(150, 15, 'FLX 41', 'Pickup Truck', 'Nissan Frontier', 'White', '4x4 drive vehicle', '2020-02-05 00:00:00', '2020-02-05 07:29:15'),
(151, 16, 'DFL 459', 'SUV/AUV', 'Nissan Frontier', 'White', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 07:29:15'),
(152, 44, 'FDH 565', 'SUV/AUV', 'Dodge Ram 1500', 'Maroon', '4x4 drive vehicle', '2020-02-05 00:00:00', '2020-02-05 07:29:15'),
(153, 46, 'GHH 44', 'Pickup Truck', 'Dodge Ram 1500', 'Blue', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 07:29:15'),
(154, 48, 'DDN 345', 'Pickup Truck', 'Dodge Ram 1500', 'Red', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-06 07:31:19'),
(155, 49, 'DFL 564', 'SUV/AUV', 'Toyota Tundra', 'Dark Red', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 07:29:15'),
(156, 50, 'SDA 434', 'Pickup Truck', 'Toyota Tundra', 'Yellow', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 07:29:15'),
(157, 51, 'FGH 567', 'Pickup Truck', 'Ford F-250', 'Black', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 07:29:15'),
(158, 52, 'YUI 437', 'SUV/AUV', 'Ford F-250', 'Blue', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 07:29:15'),
(159, 53, 'XXC 451', 'SUV/AUV', 'Ford F-250', 'Blue', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 07:29:15'),
(170, 54, 'FGB 679', 'Pickup Truck', 'Chevrolet Silverado 2500', 'White', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 08:01:55'),
(171, 55, 'QQK 311', 'SUV/AUV', 'GMC Sierra 1500', 'Black', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 08:01:55'),
(172, 56, 'HGH 769', 'SUV/AUV', 'Chevrolet Silverado 2500', 'Yellow', '4x4 drive vehicle', '2020-02-05 00:00:00', '2020-02-05 08:01:55'),
(173, 57, 'SOO 446', 'Pickup Truck', 'GMC Sierra 1500', 'Black', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 08:01:55'),
(174, 58, 'KHJ 887', 'SUV/AUV', 'GMC Sierra 1500', 'White', 'Outdoor vehicle', '2020-02-05 00:00:00', '2020-02-05 08:01:55'),
(175, 59, 'KBN 344', 'Pickup Truck', 'Nissan Frontier', 'Maroon', '4x4 drive vehicle', '2020-02-05 00:00:00', '2020-02-05 08:01:55'),
(176, 60, 'XZY 123', 'Pickup Truck', 'Toyota RAV4', 'Yellow', '4x4 drive vehicle', '2020-02-05 00:00:00', '2020-02-05 08:01:55'),
(177, 61, 'YOU 679', 'Pickup Truck', 'Ford F-250', 'Navy blue ', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 08:01:55'),
(178, 62, 'LKJ 987', 'SUV/AUV', 'Nissan Rogue', 'Brown', 'Lowered vehicle', '2020-02-05 00:00:00', '2020-02-05 08:01:55'),
(179, 63, 'FHH 499', 'SUV/AUV', 'Honda CR-V', 'Yellow', '4x4 drive vehicle', '2020-02-05 00:00:00', '2020-02-05 08:01:55'),
(180, 21, '452121XX', 'Truck', 'Lamborghini', 'Red', '5 wheeler', '2020-02-06 13:38:26', '2020-02-06 13:38:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD PRIMARY KEY (`delivery_details_id`);

--
-- Indexes for table `job_order`
--
ALTER TABLE `job_order`
  ADD PRIMARY KEY (`jo_id`);

--
-- Indexes for table `job_order_details`
--
ALTER TABLE `job_order_details`
  ADD PRIMARY KEY (`jodetails_id`);

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
-- Indexes for table `productcheckout_details`
--
ALTER TABLE `productcheckout_details`
  ADD PRIMARY KEY (`productcheckout_details_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_number` (`product_number`);

--
-- Indexes for table `product_checkout`
--
ALTER TABLE `product_checkout`
  ADD PRIMARY KEY (`product_checkout_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`sales_details_id`);

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
  ADD UNIQUE KEY `name` (`name`);

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
  ADD KEY `vehicle_id` (`vehicle_id`);

--
-- Indexes for table `transaction_walkin`
--
ALTER TABLE `transaction_walkin`
  ADD PRIMARY KEY (`twId`);

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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1018;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `delivery_details`
--
ALTER TABLE `delivery_details`
  MODIFY `delivery_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_order`
--
ALTER TABLE `job_order`
  MODIFY `jo_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `job_order_details`
--
ALTER TABLE `job_order_details`
  MODIFY `jodetails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `mechanic`
--
ALTER TABLE `mechanic`
  MODIFY `mechanic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `productcheckout_details`
--
ALTER TABLE `productcheckout_details`
  MODIFY `productcheckout_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `product_checkout`
--
ALTER TABLE `product_checkout`
  MODIFY `product_checkout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `sales_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `transaction2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `tId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;

--
-- AUTO_INCREMENT for table `transaction_walkin`
--
ALTER TABLE `transaction_walkin`
  MODIFY `twId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
