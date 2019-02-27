-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 27, 2019 at 01:28 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeff`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(100) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'Microtex'),
(2, 'Glaz Stainz\''),
(3, 'Prochoice');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE ascii_bin NOT NULL,
  UNIQUE KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Wheels'),
(2, 'Tires'),
(3, 'Detailing Products');

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

DROP TABLE IF EXISTS `customerinfo`;
CREATE TABLE IF NOT EXISTS `customerinfo` (
  `cust_id` int(11) NOT NULL,
  `firstname` varchar(100) COLLATE ascii_bin NOT NULL,
  `lastname` varchar(100) COLLATE ascii_bin NOT NULL,
  `address` varchar(255) COLLATE ascii_bin NOT NULL,
  `contactNo` varchar(20) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`cust_id`),
  UNIQUE KEY `cust_id` (`cust_id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`cust_id`, `firstname`, `lastname`, `address`, `contactNo`) VALUES
(1, 'juan', 'dela cruz', 'brgy 278 bakakeng', '09123456789'),
(2, 'maria', 'clara', 'brgy 51 slu main gate', '09987654321');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) COLLATE ascii_bin NOT NULL,
  `lastname` varchar(100) COLLATE ascii_bin NOT NULL,
  `job` varchar(100) COLLATE ascii_bin NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=215988 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `firstname`, `lastname`, `job`, `user_id`) VALUES
(215123, 'Jc', 'Agsunta', 'Owner', 0),
(215321, 'Arnel', 'Ramos', 'Co-Owner', 0),
(215789, 'Neil', 'Cachin', 'Secretary', 0),
(215987, 'Ian', 'Ramos', 'Worker', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_code` varchar(10) COLLATE ascii_bin NOT NULL,
  `product_name` varchar(100) COLLATE ascii_bin NOT NULL,
  `productDescription` varchar(150) COLLATE ascii_bin DEFAULT NULL,
  `size` varchar(100) COLLATE ascii_bin DEFAULT NULL,
  `product_qty` varchar(7) COLLATE ascii_bin NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `SRP` decimal(6,2) NOT NULL,
  `status` enum('Available','Not Available','','') COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`product_code`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_code`, `product_name`, `productDescription`, `size`, `product_qty`, `category_id`, `brand_id`, `supplier_id`, `SRP`, `status`) VALUES
('MA-001', 'Microtex Chamois', NULL, '16 inc x 16 inc', '24 pcs', 0, 0, 0, '249.75', 'Available'),
('MA-001C', 'Microtex Chamois', NULL, '16 inc x 16 inc', '24 pcs', 0, 0, 0, '269.75', 'Available'),
('MA-002', 'Microtex Suede', NULL, '16 inc x 16 inc', '24 pcs', 0, 0, 0, '209.75', 'Available'),
('MA-002C', 'Microtex Suede', NULL, '16 inc x 16 inc', '24 pcs', 0, 0, 0, '229.75', 'Available'),
('MA-003', 'Microtex Ultra', NULL, '16 inc x 16 inc', '24 pcs', 0, 0, 0, '169.75', 'Available'),
('MA-003C', 'Microtex Ultra', '', '16 inc x 16 inc', '24 pcs', 0, 0, 0, '189.75', 'Available'),
('MA-004', 'Microtex Plush', 'Medium Pile', '16 inc x 16 inc', '12 pcs', 0, 0, 0, '179.75', 'Available'),
('MA-004C', 'Microtex Plush', 'Medium Pile', '16 inc x 16 inc', '24 pcs', 0, 0, 0, '189.75', 'Available'),
('MA-005', 'Microtex Ultra Plush', 'High Pile', '16 inc x 16 inc', '12 pcs', 0, 0, 0, '229.75', 'Available'),
('MA-005C', 'Microtex Ultra Plush', 'High Pile', '16 inc x 16 inc', '24 pcs', 0, 0, 0, '249.75', 'Available'),
('MA-006', 'Microtex Terry', 'Regular Pile', '16 inc x 16 inc', '12 pcs', 0, 0, 0, '129.75', 'Available'),
('MA-006C', 'Microtex Terry', 'Regular Pile', '16 inc x 16 inc', '24 pcs', 0, 0, 0, '149.75', 'Available'),
('MA-007', 'Microtex Wax Applicator', NULL, '5 inc x 7.5 inc x 1.5 inc', '48 pcs', 0, 0, 0, '69.75', 'Available'),
('MA-12P001', 'Microtex Chamois', NULL, '16 inc x 16 inc', '96 pcs', 0, 0, 0, '2549.75', 'Available'),
('MA-12P002', 'Microtex Suede', NULL, '16 inc x 16 inc', '96 pcs', 0, 0, 0, '2149.75', 'Available'),
('MA-12P003', 'Microtex Ultra', NULL, '16 inc x 16 inc', '96 pcs', 0, 0, 0, '1749.75', 'Available'),
('MA-12P004', 'Microtex Ultra ', NULL, '16 inc x 16 inc', '72 pcs', 0, 0, 0, '1849.75', 'Available'),
('MA-12P005', 'Microtex Ultra Plush', NULL, '16 inc x 16 inc', '72 pcs', 0, 0, 0, '2349.75', 'Available'),
('MA-12P006', 'Microtex Terry', NULL, '16 inc x 16 inc', '72 pcs', 0, 0, 0, '1199.75', 'Available'),
('MA-AD1', 'Microtex Adopter M14 int. to M16 ext.', NULL, '1 inch', '1 pc', 0, 0, 0, '279.75', 'Available'),
('MA-AD2', 'Microtex Adopter M14 int. to 5/8 ext.', NULL, '1 inch', '1 pc', 0, 0, 0, '279.75', 'Available'),
('MA-AD3', 'Microtex Adopter M16 int. to 5/8 ext.', NULL, '1 inch', '1 pc', 0, 0, 0, '279.75', 'Available'),
('MA-AD4', 'Microtex Adopter 6mm int. to M14 ext(aluminum)', NULL, '1 inch', '1 pc', 0, 0, 0, '119.75', 'Available'),
('MA-AD5', 'Microtex Adopter 6mm int. M16 ext.(aluminum)', NULL, NULL, '1 pc', 0, 0, 0, '119.75', 'Available'),
('MA-AD6', 'Microtex Adopter M14 int. M16 ext.(aluminum)', NULL, NULL, '1 pc', 0, 0, 0, '119.75', 'Available'),
('MA-AD7', 'Microtex Adopter M14 int. 5/8 ext.(aluminum)', NULL, NULL, '1 pc', 0, 0, 0, '119.75', 'Available'),
('MA-AD8', 'Microtex Adopter M16 int. 5/8 ext.(aluminum)', NULL, NULL, '1 pc', 0, 0, 0, '119.75', 'Available'),
('MA-AP10-6', 'Microtex Edgeless Wax Applicator Pad', NULL, '4 inches', '6 pcs', 0, 0, 0, '249.75', 'Available'),
('MA-BD350', 'Microtex Dispenser w/ Pull-up Cap 350ml', NULL, '350ml', '1 pc', 0, 0, 0, '69.75', 'Not Available'),
('MA-BFS480', 'Microtex Foam Spray Bottle 480ml', NULL, '480ml', '1 pc', 0, 0, 0, '89.75', ''),
('MA-BS480', 'Microtex Spray Bottle 480ml', NULL, '480 ml', '1 pc', 0, 0, 0, '79.75', 'Available'),
('MA-CB100', 'Microtex Clay Bar 100g', NULL, '100g', '6 pcs', 0, 0, 0, '399.75', 'Available'),
('MA-CB200', 'Microtex Clay Bar 200g', NULL, '200g', '6 pcs', 0, 0, 0, '699.75', 'Available'),
('MA-D500L', 'Microtex Duster(L)', NULL, '14 inc', '12 pcs', 0, 0, 0, '499.75', 'Available'),
('MA-D500LR', 'Microtex Duster Refill(L)', NULL, '14 inc', '24 pcs', 0, 0, 0, '399.75', 'Available'),
('MA-D500S', 'Microtex Duster(S)', NULL, '8 inch', '16 pcs', 0, 0, 0, '189.75', 'Available'),
('MA-D500SR', 'Microtex Duster Refill(S)', NULL, '8 inch', '24 pcs', 0, 0, 0, '139.75', 'Available'),
('MA-DB100', 'Microtex Detailing Brush', NULL, '20cm, 30cm,40cm', '12pcs', 0, 0, 0, '599.75', 'Available'),
('MA-DT001', 'Microtex Apron', NULL, NULL, '1 pc', 0, 0, 0, '349.75', 'Available'),
('MA-DT002', 'Microtex Belt Bag', NULL, NULL, '1 pc', 0, 0, 0, '349.75', 'Available'),
('MA-M14-3', 'Microtex Back Plate 3\" M14', NULL, '3 inch', '6 pcs', 0, 0, 0, '449.75', 'Available'),
('MA-M14-5', 'Microtex Back Plate 5\" M14', NULL, '5 inch', '6 pcs', 0, 0, 0, '699.75', 'Available'),
('MA-M14-6', 'Microtex Back Plate 6.8\" M14', NULL, '6.8 inc', '6 pcs', 0, 0, 0, '669.75', 'Available'),
('MA-M16-3', 'Microtex Back Plate 3\" M16', NULL, '3 inch', '6 pcs', 0, 0, 0, '449.75', 'Available'),
('MA-M16-5', 'Microtex Back Plate 5\" M16', NULL, '5 inch', '6 pcs', 0, 0, 0, '699.75', 'Available'),
('MA-M16-6', 'Microtex Back Plate 6.8\" M16', NULL, '6.8 inc', '6 pcs', 0, 0, 0, '669.75', 'Available'),
('MA-PKT001', 'Microtex Pro-Kit 1', '(Plush / Chamois / Suede)', '16 inc x 16 inc', '6 pcs', 0, 0, 0, '549.75', 'Available'),
('MA-PKT002', 'Microtex Pro-Kit 2', '(Plush/ Chamois / Ultra)', '16 inc x 16 inc', '6 pcs', 0, 0, 0, '549.75', 'Available'),
('MA-PKT003', 'Microtex Pro-Kit 3', '(Terry / Chamois / Ultra)', '16 inc x 16 inc', '6 pcs', 0, 0, 0, '449.75', 'Available'),
('MA-PS100', 'Microtex Pad Spur', NULL, NULL, '1 pc', 0, 0, 0, '449.75', 'Available'),
('MA-WB100', 'Microtex Flexible (Drying)', NULL, '2.5 inc x 12.5 inc', '12 pcs', 0, 0, 0, '499.75', 'Available'),
('MA-WP100', 'Microtex Wash Pad', NULL, '3 inc x 4.5 inc 2.25 inc', '48 pcs', 0, 0, 0, '129.75', 'Available'),
('MB-HR125', 'Motor Bike Helmet Refresher 125ml', NULL, '125ml', '24 btls', 0, 0, 0, '79.75', 'Available'),
('MB-P125', 'Microtex Bike Protectant 125ml', NULL, '125ml', '24 btls', 0, 0, 0, '59.75', 'Available'),
('MB-QS125', 'Motor Bike Quick Shine 125ml', NULL, '125ml', '24 btls', 0, 0, 0, '79.75', 'Available'),
('MB-QS250', 'Motor Bike Quick Shine 250ml', NULL, '250ml', '12 btls', 0, 0, 0, '149.75', 'Available'),
('MB-S125', 'Microtex Bike Shampoo 125ml', NULL, '125ml', '24 btls', 0, 0, 0, '39.75', 'Available'),
('MB-S250', 'Microtex Bike Shampoo 500ml', NULL, '500ml', '12 btls', 0, 0, 0, '59.75', 'Available'),
('MB-T125', 'Microtex Bike Tire Cream 125ml', NULL, '125ml', '24 btls', 0, 0, 0, '64.75', 'Available'),
('MB-T250', 'Microtex Bike Tire Cream 250ml', NULL, '250ml', '12 btls', 0, 0, 0, '119.75', 'Available'),
('MB-VG125', 'Motor Bike Visor Guard 125ml', NULL, '125ml', '24 btls', 0, 0, 0, '149.75', 'Available'),
('MB-VH125', 'Motor Bike Visor & Headlight Polish 125ml', NULL, '125ml', '24btls', 0, 0, 0, '99.75', 'Available'),
('MB-W125', 'Microtex Bike Hi-Gloss Wax 125 ml', NULL, '125ml', '24 btls', 0, 0, 0, '99.75', 'Available'),
('MC-100', 'Microtex Ultra Lens Cleaner', NULL, '5 inc x 5 inc', '25 pcs', 0, 0, 0, '59.75', 'Available'),
('MD-CS125X', 'Microtex DeoSOL Extreme 125ml(Citrus Splash)', NULL, '125ml', '24 btls', 0, 0, 0, '84.75', 'Available'),
('MD-CS3800X', 'Microtex DeoSOL Extreme 3800ml', NULL, '3800 gal', '4 gals', 0, 0, 0, '1499.75', 'Available'),
('MD-CS500X', 'Microtex DeoSOL Extreme 500ml', NULL, '500ml', '12 btls', 0, 0, 0, '279.75', 'Available'),
('MD-FA125', 'Microtex DeoSOL AFC 125ml (Fresh Air)', NULL, '125 ml', '24 btls', 0, 0, 0, '69.75', 'Available'),
('MD-FA3800', 'Microtex DeoSOL AFC 3800ml', NULL, '3800ml', '1 gals', 0, 0, 0, '1199.75', 'Available'),
('MD-FA500', 'Microtex DeoSOL AFC 500ml', NULL, '500ml', '1 btls', 0, 0, 0, '349.75', 'Available'),
('MD-FB125', 'Microtex DeoSOL AFC 125ml (Peach Blossoms)', NULL, '125ml', '24btls', 0, 0, 0, '69.75', 'Available'),
('MD-FF125X', 'Microtex DeoSOL Extreme 125ml(Floral Fresh)', NULL, '125ml', '24 btls', 0, 0, 0, '84.75', 'Available'),
('MD-FF3800X', 'Microtex DeoSOL Extreme 3800ml', NULL, '3800ml', '4 gals', 0, 0, 0, '1499.75', 'Available'),
('MD-FF500X', 'Microtex DeoSOL Extreme 500ml', NULL, '500ml', '12 btls', 0, 0, 0, '279.75', 'Available'),
('MD-PB3800', 'Microtex DeoSOL AFC 3800ml', NULL, '3800ml', '4 gals', 0, 0, 0, '1199.75', 'Available'),
('MD-PB500', 'Microtex DeoSOL AFC 500ml', NULL, '500ml', '12 btls', 0, 0, 0, '279.75', 'Available'),
('ME-001', 'Microtex Ultra Electronic Cleaning Cloth', NULL, '10 inc x 10 inc', '24 pcs', 0, 0, 0, '99.75', 'Available'),
('ME-002', 'Microtex Suede Electronic Cleaning Cloth', NULL, '10 inc x 10 inc', '24 pcs', 0, 0, 0, '119.75', 'Available'),
('MW-WM100', 'Microtex Wash Mitt', NULL, '8inc x 10inc', '12 pcs', 0, 0, 0, '329.75', 'Available'),
('MX-001', 'Microtex Elite(Towel)', NULL, '24 inc x 36 inc', '6 pcs', 0, 0, 0, '599.75', 'Available'),
('MX-001S', 'Microtex Elite Junior(Towel)', NULL, '18 inc x 24 inc', '12 pcs', 0, 0, 0, '329.75', 'Available'),
('MX-6P001', 'Microtex Elite', NULL, '24 inc x 36 inc', '24 pcs', 0, 0, 0, '2999.75', 'Available'),
('MX-6P001S', 'Microtex Elite Junior', NULL, '18 inc x 24 inc', '36 pcs', 0, 0, 0, '1679.75', 'Available'),
('MX-6P002', 'Microtex Supreme', NULL, '16 inc x 16 inc', '24 pcs', 0, 0, 0, '1779.75', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorder`
--

DROP TABLE IF EXISTS `purchaseorder`;
CREATE TABLE IF NOT EXISTS `purchaseorder` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `order_amount` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
CREATE TABLE IF NOT EXISTS `reports` (
  `report_id` int(11) NOT NULL,
  `productname` varchar(100) COLLATE ascii_bin NOT NULL,
  `productqty` int(100) NOT NULL,
  `totalPrice` int(100) NOT NULL,
  `jobOrder` varchar(100) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

DROP TABLE IF EXISTS `returns`;
CREATE TABLE IF NOT EXISTS `returns` (
  `return_id` int(11) NOT NULL AUTO_INCREMENT,
  `return_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_qty` int(100) NOT NULL,
  `transac_id` int(100) NOT NULL,
  `remarks` varchar(100) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`return_id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `services_id` int(11) NOT NULL,
  `services_type` varchar(100) COLLATE ascii_bin NOT NULL,
  `product_qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `supplier_id` int(2) NOT NULL,
  `supplier_name` varchar(100) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`supplier_id`),
  UNIQUE KEY `supplier_id` (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`) VALUES
(1, 'Nike'),
(2, 'Adidas');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `transac_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `product_code` int(11) NOT NULL,
  `soldProduct` varchar(100) COLLATE ascii_bin NOT NULL,
  `soldQuantity` int(100) NOT NULL,
  `soldPrice` decimal(6,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`transac_id`),
  UNIQUE KEY `transac_id` (`transac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8429 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transac_id`, `employee_id`, `cust_id`, `product_code`, `soldProduct`, `soldQuantity`, `soldPrice`, `date`) VALUES
(8428, 1, 1234, 0, 'Microtex Supreme', 2, '3559.50', '2019-02-13 02:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE ascii_bin NOT NULL,
  `password` varchar(16) COLLATE ascii_bin NOT NULL,
  `role` varchar(100) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `vehicle_id` int(11) NOT NULL,
  `vehicleType` varchar(100) COLLATE ascii_bin NOT NULL,
  `plateNo` varchar(10) COLLATE ascii_bin NOT NULL,
  `color` varchar(100) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`vehicle_id`),
  UNIQUE KEY `vehicle_id` (`vehicle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_id`, `vehicleType`, `plateNo`, `color`) VALUES
(1, 'Offroad', 'ABC 1234', 'Black'),
(2, 'sportscar', 'SLU 219', 'white');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
