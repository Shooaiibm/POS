-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2025 at 06:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muntaha`
--

-- --------------------------------------------------------

--
-- Table structure for table `store_invoice_head`
--

CREATE TABLE `store_invoice_head` (
  `HID` int(11) NOT NULL,
  `CID` int(11) DEFAULT NULL,
  `INVNo` int(11) DEFAULT NULL,
  `NOofitems` decimal(18,0) DEFAULT NULL,
  `TotalAmount` decimal(18,0) DEFAULT NULL,
  `TotalDicount` decimal(18,0) DEFAULT NULL,
  `Grandtotal` decimal(18,0) DEFAULT NULL,
  `DicPre` decimal(18,2) DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `CreatedAt` datetime DEFAULT NULL,
  `TotalQty` decimal(18,0) DEFAULT NULL,
  `Amount` decimal(18,0) DEFAULT NULL,
  `DiscountPercent` decimal(18,2) DEFAULT NULL,
  `DiscountAmount` decimal(18,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_invoice_head`
--

INSERT INTO `store_invoice_head` (`HID`, `CID`, `INVNo`, `NOofitems`, `TotalAmount`, `TotalDicount`, `Grandtotal`, `DicPre`, `CreatedBy`, `Date`, `CreatedAt`, `TotalQty`, `Amount`, `DiscountPercent`, `DiscountAmount`) VALUES
(1, 1, 1, NULL, NULL, NULL, '6480', NULL, 1, '2025-05-22', '2025-05-22 09:51:54', '4', '7200', '10.00', '720'),
(2, 1, 2, NULL, NULL, NULL, '5400', NULL, 1, '2025-05-22', '2025-05-22 09:55:32', '3', '5400', '0.00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `store_inwardtransaction`
--

CREATE TABLE `store_inwardtransaction` (
  `id` int(11) NOT NULL,
  `CatID` int(11) DEFAULT NULL,
  `ITEMID` int(11) DEFAULT NULL,
  `Quantity` decimal(18,0) DEFAULT NULL,
  `SalesPrices` decimal(18,0) DEFAULT NULL,
  `PurchasePrice` decimal(18,0) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `BarCode` varchar(50) DEFAULT NULL,
  `EMINO` varchar(50) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `EntryDate` datetime DEFAULT NULL,
  `outstatus` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_inwardtransaction`
--

INSERT INTO `store_inwardtransaction` (`id`, `CatID`, `ITEMID`, `Quantity`, `SalesPrices`, `PurchasePrice`, `Date`, `BarCode`, `EMINO`, `userID`, `EntryDate`, `outstatus`) VALUES
(2, 1, 1, '1', '1800', '1500', '2025-05-20', NULL, '11111111111111', 1, '2025-05-20 16:11:25', 1),
(3, 1, 1, '1', '1800', '1500', '2025-05-20', NULL, '22222222222222', 1, '2025-05-20 16:22:44', 1),
(4, 1, 1, '1', '1800', '1500', '2025-05-20', NULL, '22222222222223', 1, '2025-05-20 16:22:49', 1),
(5, 1, 1, '1', '1800', '1500', '2025-05-20', NULL, '22222222222262', 1, '2025-05-20 16:22:52', 1),
(6, 1, 1, '1', '1800', '1500', '2025-05-20', NULL, '22222222222233', 1, '2025-05-20 16:22:56', 1),
(7, 1, 1, '1', '1800', '1500', '2025-05-20', NULL, '15555555555555', 1, '2025-05-20 16:42:36', 1),
(8, 1, 1, '23', '1800', '1500', '2025-05-22', NULL, '0100010101383', 1, '2025-05-22 09:51:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `store_items`
--

CREATE TABLE `store_items` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(1050) DEFAULT NULL,
  `Status` tinyint(1) NOT NULL,
  `UOM` varchar(50) NOT NULL,
  `PPU` float DEFAULT NULL,
  `Code` varchar(1050) NOT NULL,
  `creationDate` date DEFAULT NULL,
  `updationDate` date DEFAULT NULL,
  `EntryDateTime` datetime(6) DEFAULT NULL,
  `ipAddress` varchar(300) DEFAULT NULL,
  `UID_id` int(11) NOT NULL,
  `login_name_id` bigint(20) DEFAULT NULL,
  `updatedBy_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store_outwardtransaction`
--

CREATE TABLE `store_outwardtransaction` (
  `id` int(11) NOT NULL,
  `Quantity` decimal(18,0) NOT NULL,
  `Date` date DEFAULT NULL,
  `INID` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `EntryDate` datetime DEFAULT NULL,
  `barcode` varchar(50) DEFAULT NULL,
  `EMINO` varchar(50) DEFAULT NULL,
  `ITEMID` int(11) DEFAULT NULL,
  `CATID` int(11) DEFAULT NULL,
  `CID` int(11) DEFAULT NULL,
  `lockstatus` tinyint(1) DEFAULT NULL,
  `INVNO` int(11) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Code_id` int(11) DEFAULT NULL,
  `PurchasePrice` decimal(18,0) DEFAULT NULL,
  `SalesPrices` decimal(18,0) DEFAULT NULL,
  `Discount` decimal(18,0) DEFAULT NULL,
  `Amount` decimal(18,0) DEFAULT NULL,
  `HID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_outwardtransaction`
--

INSERT INTO `store_outwardtransaction` (`id`, `Quantity`, `Date`, `INID`, `UserID`, `EntryDate`, `barcode`, `EMINO`, `ITEMID`, `CATID`, `CID`, `lockstatus`, `INVNO`, `Year`, `Code_id`, `PurchasePrice`, `SalesPrices`, `Discount`, `Amount`, `HID`) VALUES
(1, '1', '2025-05-22', 1, 1, '2025-05-22 09:51:45', NULL, '0100010101383', 1, 1, 1, 1, 1, 2025, NULL, '1500', '1800', '0', '1800', 1),
(2, '1', '2025-05-22', 1, 1, '2025-05-22 09:51:48', NULL, '0100010101383', 1, 1, 1, 1, 1, 2025, NULL, '1500', '1800', '0', '1800', 1),
(3, '1', '2025-05-22', 1, 1, '2025-05-22 09:51:48', NULL, '0100010101383', 1, 1, 1, 1, 1, 2025, NULL, '1500', '1800', '0', '1800', 1),
(4, '1', '2025-05-22', 1, 1, '2025-05-22 09:51:49', NULL, '0100010101383', 1, 1, 1, 1, 1, 2025, NULL, '1500', '1800', '0', '1800', 1),
(5, '1', '2025-05-22', 1, 1, '2025-05-22 09:55:25', NULL, '0100010101383', 1, 1, 1, 1, 2, 2025, NULL, '1500', '1800', '0', '1800', 2),
(6, '1', '2025-05-22', 1, 1, '2025-05-22 09:55:26', NULL, '0100010101383', 1, 1, 1, 1, 2, 2025, NULL, '1500', '1800', '0', '1800', 2),
(7, '1', '2025-05-22', 1, 1, '2025-05-22 09:55:27', NULL, '0100010101383', 1, 1, 1, 1, 2, 2025, NULL, '1500', '1800', '0', '1800', 2);

-- --------------------------------------------------------

--
-- Table structure for table `store_outwardtransaction_manual`
--

CREATE TABLE `store_outwardtransaction_manual` (
  `id` int(11) NOT NULL,
  `Quantity` decimal(18,0) NOT NULL,
  `Date` date DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `EntryDate` datetime DEFAULT NULL,
  `barcode` varchar(50) DEFAULT NULL,
  `EMINO` varchar(50) DEFAULT NULL,
  `CID` int(11) DEFAULT NULL,
  `lockstatus` tinyint(1) DEFAULT NULL,
  `INVNO` int(11) DEFAULT NULL,
  `PPU` decimal(18,0) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catagory`
--

CREATE TABLE `tbl_catagory` (
  `CatID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_catagory`
--

INSERT INTO `tbl_catagory` (`CatID`, `Name`, `Status`) VALUES
(1, 'FABRIC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE `tbl_clients` (
  `CID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `phoneno` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`CID`, `Name`, `City`, `phoneno`, `email`, `status`, `address`) VALUES
(1, 'Muntaha favric', '323223', '3232', '3232', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE `tbl_color` (
  `CID` int(11) NOT NULL,
  `ColorName` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ITEMID` int(11) DEFAULT NULL,
  `ItemName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_color`
--

INSERT INTO `tbl_color` (`CID`, `ColorName`, `ITEMID`, `ItemName`, `userID`) VALUES
(1, 'RED', 1, 'LAWN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `CID` int(11) NOT NULL,
  `CompanyName` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Phoneno` varchar(50) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `tagline` varchar(50) DEFAULT NULL,
  `EntryDateTime` datetime DEFAULT NULL,
  `EntryDate` date DEFAULT NULL,
  `login_name_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `ItemID` int(11) NOT NULL,
  `CatID` int(11) DEFAULT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `SalePrice` decimal(18,2) DEFAULT NULL,
  `purchasePrice` decimal(18,2) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `Spece` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`ItemID`, `CatID`, `Code`, `Name`, `SalePrice`, `purchasePrice`, `image`, `status`, `Color`, `Spece`) VALUES
(1, 1, '1', 'LAWN', '1800.00', '1500.00', NULL, 1, 'red', '256 GB');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `OID` int(11) NOT NULL,
  `CatID` int(11) DEFAULT NULL,
  `ITEMID` int(11) DEFAULT NULL,
  `Quantity` decimal(18,0) DEFAULT NULL,
  `amount` decimal(18,0) DEFAULT NULL,
  `PurchasePrice` decimal(18,0) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `entrydate` datetime DEFAULT NULL,
  `SalesPrices` decimal(18,0) DEFAULT NULL,
  `instatus` tinyint(1) DEFAULT NULL,
  `HID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`OID`, `CatID`, `ITEMID`, `Quantity`, `amount`, `PurchasePrice`, `userID`, `Date`, `entrydate`, `SalesPrices`, `instatus`, `HID`) VALUES
(1, 1, 1, '500', '900000', '1500', 1, '2025-05-22', '2025-05-22 09:50:05', '1800', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE `tbl_size` (
  `SID` int(11) NOT NULL,
  `SizeName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ITEMID` int(11) DEFAULT NULL,
  `ItemeName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_size`
--

INSERT INTO `tbl_size` (`SID`, `SizeName`, `ITEMID`, `ItemeName`, `userID`) VALUES
(1, 'SMALL', 1, 'LAWN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock_details`
--

CREATE TABLE `tbl_stock_details` (
  `ITID` int(11) NOT NULL,
  `CAtID` int(11) DEFAULT NULL,
  `ITEMID` int(11) DEFAULT NULL,
  `CID` int(11) DEFAULT NULL,
  `SID` int(11) DEFAULT NULL,
  `Salesprice` decimal(18,0) DEFAULT NULL,
  `PurchasePrice` decimal(18,0) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `BarCode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `entryDate` datetime DEFAULT NULL,
  `Discount` decimal(18,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_stock_details`
--

INSERT INTO `tbl_stock_details` (`ITID`, `CAtID`, `ITEMID`, `CID`, `SID`, `Salesprice`, `PurchasePrice`, `status`, `BarCode`, `userID`, `entryDate`, `Discount`) VALUES
(1, 1, 1, 1, 1, '1800', '1500', 1, '0100010101383', 1, '2025-05-22 09:41:47', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `ClientStatus` tinyint(1) DEFAULT NULL,
  `catagoryStatus` tinyint(1) DEFAULT NULL,
  `itemstatus` tinyint(1) DEFAULT NULL,
  `orderStatus` tinyint(1) DEFAULT NULL,
  `Dashboardstatus` tinyint(1) DEFAULT NULL,
  `entryDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`UserID`, `Username`, `password`, `status`, `ClientStatus`, `catagoryStatus`, `itemstatus`, `orderStatus`, `Dashboardstatus`, `entryDate`) VALUES
(1, 'Admin', 'Admin', 1, 1, 1, 1, 1, 1, '2025-05-20 00:00:00'),
(2, 'Admin', 'Admin', 1, 1, 1, 1, 1, 1, '2025-05-20 00:00:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_balance`
-- (See below for the actual view)
--
CREATE TABLE `view_balance` (
`CatName` varchar(50)
,`Name` varchar(50)
,`Quantity` decimal(40,0)
,`out` decimal(40,0)
,`Balance` decimal(41,0)
,`ITEMID` int(11)
,`CatID` int(11)
,`ColorName` char(10)
,`SizeName` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_in`
-- (See below for the actual view)
--
CREATE TABLE `view_in` (
`CATNAme` varchar(50)
,`Name` varchar(50)
,`Quantity` decimal(40,0)
,`CatID` int(11)
,`ItemID` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_invoice`
-- (See below for the actual view)
--
CREATE TABLE `view_invoice` (
`Quantity` decimal(40,0)
,`Date` date
,`INVNO` int(11)
,`EMINO` varchar(50)
,`cname` varchar(50)
,`phoneno` varchar(50)
,`email` varchar(50)
,`Year` int(11)
,`address` varchar(50)
,`City` varchar(50)
,`Name` varchar(50)
,`ColorName` char(10)
,`SizeName` varchar(50)
,`CatName` varchar(50)
,`SalesPrices` decimal(40,0)
,`Discount` decimal(18,0)
,`TotalQty` decimal(40,0)
,`Amount` decimal(40,0)
,`DiscountPercent` decimal(18,2)
,`DiscountAmount` decimal(18,0)
,`Grandtotal` decimal(18,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_invoice_manual`
-- (See below for the actual view)
--
CREATE TABLE `view_invoice_manual` (
`id` int(11)
,`Quantity` decimal(18,0)
,`Date` date
,`UserID` int(11)
,`EntryDate` datetime
,`barcode` varchar(50)
,`EMINO` varchar(50)
,`CID` int(11)
,`lockstatus` tinyint(1)
,`INVNO` int(11)
,`PPU` decimal(18,0)
,`Name` varchar(50)
,`cname` varchar(50)
,`City` varchar(50)
,`phoneno` varchar(50)
,`email` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_inv_details`
-- (See below for the actual view)
--
CREATE TABLE `view_inv_details` (
`Name` varchar(50)
,`Date` date
,`phoneno` varchar(50)
,`email` varchar(50)
,`INVNO` int(11)
,`Noifitems` decimal(18,0)
,`Quantity` decimal(18,0)
,`Amount` decimal(18,0)
,`Grandtotal` decimal(18,0)
,`SalesPrices` decimal(18,0)
,`Discount` decimal(18,0)
,`Expr1` decimal(18,0)
,`ColorName` char(10)
,`SizeName` varchar(50)
,`Itemname` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_inward_items`
-- (See below for the actual view)
--
CREATE TABLE `view_inward_items` (
`id` int(11)
,`CatID` int(11)
,`ITEMID` int(11)
,`Quantity` decimal(18,0)
,`SalesPrices` decimal(18,0)
,`PurchasePrice` decimal(18,0)
,`Date` date
,`BarCode` varchar(50)
,`EMINO` varchar(50)
,`userID` int(11)
,`EntryDate` datetime
,`outstatus` int(4)
,`Salesprice` decimal(18,0)
,`Expr1` decimal(18,0)
,`Expr2` varchar(50)
,`Name` varchar(50)
,`ColorName` char(10)
,`SizeName` varchar(50)
,`CatName` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_in_sum`
-- (See below for the actual view)
--
CREATE TABLE `view_in_sum` (
`ITEMID` int(11)
,`inSum` decimal(40,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_order_balance`
-- (See below for the actual view)
--
CREATE TABLE `view_order_balance` (
`ITEMID` int(11)
,`orderQty` decimal(40,0)
,`inSum` decimal(40,0)
,`Balance` decimal(41,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_order_inward`
-- (See below for the actual view)
--
CREATE TABLE `view_order_inward` (
`OID` int(11)
,`CatID` int(11)
,`ITEMID` int(11)
,`Quantity` decimal(18,0)
,`amount` decimal(18,0)
,`PurchasePrice` decimal(18,0)
,`userID` int(11)
,`Date` date
,`entrydate` datetime
,`SalesPrices` decimal(18,0)
,`Salesprice` decimal(18,0)
,`Expr1` decimal(18,0)
,`BarCode` varchar(50)
,`Name` varchar(50)
,`ColorName` char(10)
,`SizeName` varchar(50)
,`CatName` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_out`
-- (See below for the actual view)
--
CREATE TABLE `view_out` (
`out` decimal(40,0)
,`ITEMID` int(11)
,`CATID` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_outward_pre_balance`
-- (See below for the actual view)
--
CREATE TABLE `view_outward_pre_balance` (
`Code_id` int(11)
,`Quantity` decimal(40,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_stock_inventory`
-- (See below for the actual view)
--
CREATE TABLE `view_stock_inventory` (
`ITID` int(11)
,`CAtID` int(11)
,`ITEMID` int(11)
,`CID` int(11)
,`SID` int(11)
,`Salesprice` decimal(18,0)
,`PurchasePrice` decimal(18,0)
,`status` tinyint(1)
,`BarCode` varchar(50)
,`userID` int(11)
,`entryDate` datetime
,`Name` varchar(50)
,`ColorName` char(10)
,`SizeName` varchar(50)
,`CatName` varchar(50)
,`Balance` decimal(41,0)
,`Discount` decimal(18,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vie_order_in`
-- (See below for the actual view)
--
CREATE TABLE `vie_order_in` (
`ITEMID` int(11)
,`orderQty` decimal(40,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vie_outward_transaction`
-- (See below for the actual view)
--
CREATE TABLE `vie_outward_transaction` (
`id` int(11)
,`Quantity` decimal(18,0)
,`Date` date
,`INID` int(11)
,`UserID` int(11)
,`EntryDate` datetime
,`barcode` varchar(50)
,`EMINO` varchar(50)
,`ITEMID` int(11)
,`CID` int(11)
,`ColorName` char(10)
,`Name` varchar(50)
,`SizeName` varchar(50)
,`SalesPrices` decimal(18,0)
,`Discount` decimal(18,0)
,`CLLID` int(11)
,`ITID` int(11)
,`Amount` decimal(18,0)
);

-- --------------------------------------------------------

--
-- Structure for view `view_balance`
--
DROP TABLE IF EXISTS `view_balance`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_balance`  AS  select `vi`.`CATNAme` AS `CatName`,`vi`.`Name` AS `Name`,`vi`.`Quantity` AS `Quantity`,coalesce(`vo`.`out`,0) AS `out`,`vi`.`Quantity` - coalesce(`vo`.`out`,0) AS `Balance`,`vi`.`ItemID` AS `ITEMID`,`vi`.`CatID` AS `CatID`,`vsi`.`ColorName` AS `ColorName`,`vsi`.`SizeName` AS `SizeName` from (`view_in` `vi` left join (`view_stock_inventory` `vsi` join `view_out` `vo` on(`vsi`.`ITID` = `vo`.`ITEMID`)) on(`vo`.`ITEMID` = `vi`.`ItemID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_in`
--
DROP TABLE IF EXISTS `view_in`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_in`  AS  select `c`.`Name` AS `CATNAme`,`i`.`Name` AS `Name`,sum(`s`.`Quantity`) AS `Quantity`,`s`.`CatID` AS `CatID`,`i`.`ItemID` AS `ItemID` from ((`tbl_items` `i` join `store_inwardtransaction` `s` on(`i`.`ItemID` = `s`.`ITEMID`)) join `tbl_catagory` `c` on(`i`.`CatID` = `c`.`CatID`)) group by `c`.`Name`,`i`.`Name`,`s`.`CatID`,`i`.`ItemID` ;

-- --------------------------------------------------------

--
-- Structure for view `view_invoice`
--
DROP TABLE IF EXISTS `view_invoice`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_invoice`  AS  select sum(`store_outwardtransaction`.`Quantity`) AS `Quantity`,`store_outwardtransaction`.`Date` AS `Date`,`store_outwardtransaction`.`INVNO` AS `INVNO`,`store_outwardtransaction`.`EMINO` AS `EMINO`,`tbl_clients`.`Name` AS `cname`,`tbl_clients`.`phoneno` AS `phoneno`,`tbl_clients`.`email` AS `email`,`store_outwardtransaction`.`Year` AS `Year`,`tbl_clients`.`address` AS `address`,`tbl_clients`.`City` AS `City`,`view_stock_inventory`.`Name` AS `Name`,`view_stock_inventory`.`ColorName` AS `ColorName`,`view_stock_inventory`.`SizeName` AS `SizeName`,`view_stock_inventory`.`CatName` AS `CatName`,sum(`store_outwardtransaction`.`SalesPrices`) AS `SalesPrices`,`store_outwardtransaction`.`Discount` AS `Discount`,sum(`store_invoice_head`.`TotalQty`) AS `TotalQty`,sum(`store_invoice_head`.`Amount`) AS `Amount`,`store_invoice_head`.`DiscountPercent` AS `DiscountPercent`,`store_invoice_head`.`DiscountAmount` AS `DiscountAmount`,`store_invoice_head`.`Grandtotal` AS `Grandtotal` from (((`store_outwardtransaction` join `view_stock_inventory` on(`store_outwardtransaction`.`ITEMID` = `view_stock_inventory`.`ITID`)) join `store_invoice_head` on(`store_outwardtransaction`.`HID` = `store_invoice_head`.`HID`)) left join `tbl_clients` on(`store_outwardtransaction`.`CID` = `tbl_clients`.`CID`)) where `store_outwardtransaction`.`lockstatus` = 1 group by `store_outwardtransaction`.`Date`,`store_outwardtransaction`.`INVNO`,`store_outwardtransaction`.`EMINO`,`tbl_clients`.`Name`,`tbl_clients`.`phoneno`,`tbl_clients`.`email`,`store_outwardtransaction`.`Year`,`tbl_clients`.`address`,`tbl_clients`.`City`,`view_stock_inventory`.`Name`,`view_stock_inventory`.`ColorName`,`view_stock_inventory`.`SizeName`,`view_stock_inventory`.`CatName`,`store_outwardtransaction`.`Discount`,`store_invoice_head`.`DiscountPercent`,`store_invoice_head`.`DiscountAmount`,`store_invoice_head`.`Grandtotal` ;

-- --------------------------------------------------------

--
-- Structure for view `view_invoice_manual`
--
DROP TABLE IF EXISTS `view_invoice_manual`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_invoice_manual`  AS  select `m`.`id` AS `id`,`m`.`Quantity` AS `Quantity`,`m`.`Date` AS `Date`,`m`.`UserID` AS `UserID`,`m`.`EntryDate` AS `EntryDate`,`m`.`barcode` AS `barcode`,`m`.`EMINO` AS `EMINO`,`m`.`CID` AS `CID`,`m`.`lockstatus` AS `lockstatus`,`m`.`INVNO` AS `INVNO`,`m`.`PPU` AS `PPU`,`m`.`Name` AS `Name`,`c`.`Name` AS `cname`,`c`.`City` AS `City`,`c`.`phoneno` AS `phoneno`,`c`.`email` AS `email` from (`store_outwardtransaction_manual` `m` join `tbl_clients` `c` on(`m`.`CID` = `c`.`CID`)) where `m`.`lockstatus` = 1 ;

-- --------------------------------------------------------

--
-- Structure for view `view_inv_details`
--
DROP TABLE IF EXISTS `view_inv_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_inv_details`  AS  select `c`.`Name` AS `Name`,`o`.`Date` AS `Date`,`c`.`phoneno` AS `phoneno`,`c`.`email` AS `email`,`o`.`INVNO` AS `INVNO`,`h`.`TotalQty` AS `Noifitems`,`h`.`TotalQty` AS `Quantity`,`h`.`Amount` AS `Amount`,`h`.`Grandtotal` AS `Grandtotal`,`o`.`SalesPrices` AS `SalesPrices`,`o`.`Discount` AS `Discount`,`o`.`Amount` AS `Expr1`,`s`.`ColorName` AS `ColorName`,`s`.`SizeName` AS `SizeName`,`s`.`Name` AS `Itemname` from (((`store_outwardtransaction` `o` join `tbl_clients` `c` on(`o`.`CID` = `c`.`CID`)) join `store_invoice_head` `h` on(`o`.`HID` = `h`.`HID`)) join `view_stock_inventory` `s` on(`o`.`ITEMID` = `s`.`ITID`)) where `o`.`lockstatus` = 1 group by `c`.`Name`,`o`.`Date`,`c`.`phoneno`,`c`.`email`,`o`.`INVNO`,`h`.`Amount`,`h`.`Grandtotal`,`h`.`TotalQty`,`o`.`SalesPrices`,`o`.`Discount`,`o`.`Amount`,`s`.`ColorName`,`s`.`SizeName`,`s`.`Name` ;

-- --------------------------------------------------------

--
-- Structure for view `view_inward_items`
--
DROP TABLE IF EXISTS `view_inward_items`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_inward_items`  AS  select `sit`.`id` AS `id`,`sit`.`CatID` AS `CatID`,`sit`.`ITEMID` AS `ITEMID`,`sit`.`Quantity` AS `Quantity`,`sit`.`SalesPrices` AS `SalesPrices`,`sit`.`PurchasePrice` AS `PurchasePrice`,`sit`.`Date` AS `Date`,`sit`.`BarCode` AS `BarCode`,`sit`.`EMINO` AS `EMINO`,`sit`.`userID` AS `userID`,`sit`.`EntryDate` AS `EntryDate`,coalesce(`sit`.`outstatus`,0) AS `outstatus`,`vsi`.`Salesprice` AS `Salesprice`,`vsi`.`PurchasePrice` AS `Expr1`,`vsi`.`BarCode` AS `Expr2`,`vsi`.`Name` AS `Name`,`vsi`.`ColorName` AS `ColorName`,`vsi`.`SizeName` AS `SizeName`,`vsi`.`CatName` AS `CatName` from (`store_inwardtransaction` `sit` join `view_stock_inventory` `vsi` on(`sit`.`ITEMID` = `vsi`.`ITID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_in_sum`
--
DROP TABLE IF EXISTS `view_in_sum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_in_sum`  AS  select `store_inwardtransaction`.`ITEMID` AS `ITEMID`,sum(`store_inwardtransaction`.`Quantity`) AS `inSum` from `store_inwardtransaction` group by `store_inwardtransaction`.`ITEMID` ;

-- --------------------------------------------------------

--
-- Structure for view `view_order_balance`
--
DROP TABLE IF EXISTS `view_order_balance`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_order_balance`  AS  select `vie_order_in`.`ITEMID` AS `ITEMID`,`vie_order_in`.`orderQty` AS `orderQty`,ifnull(`view_in_sum`.`inSum`,0) AS `inSum`,`vie_order_in`.`orderQty` - ifnull(`view_in_sum`.`inSum`,0) AS `Balance` from (`vie_order_in` left join `view_in_sum` on(`vie_order_in`.`ITEMID` = `view_in_sum`.`ITEMID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_order_inward`
--
DROP TABLE IF EXISTS `view_order_inward`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_order_inward`  AS  select `tbl_orders`.`OID` AS `OID`,`tbl_orders`.`CatID` AS `CatID`,`tbl_orders`.`ITEMID` AS `ITEMID`,`tbl_orders`.`Quantity` AS `Quantity`,`tbl_orders`.`amount` AS `amount`,`tbl_orders`.`PurchasePrice` AS `PurchasePrice`,`tbl_orders`.`userID` AS `userID`,`tbl_orders`.`Date` AS `Date`,`tbl_orders`.`entrydate` AS `entrydate`,`tbl_orders`.`SalesPrices` AS `SalesPrices`,`view_stock_inventory`.`Salesprice` AS `Salesprice`,`view_stock_inventory`.`PurchasePrice` AS `Expr1`,`view_stock_inventory`.`BarCode` AS `BarCode`,`view_stock_inventory`.`Name` AS `Name`,`view_stock_inventory`.`ColorName` AS `ColorName`,`view_stock_inventory`.`SizeName` AS `SizeName`,`view_stock_inventory`.`CatName` AS `CatName` from (`tbl_orders` join `view_stock_inventory` on(`tbl_orders`.`ITEMID` = `view_stock_inventory`.`ITID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_out`
--
DROP TABLE IF EXISTS `view_out`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_out`  AS  select sum(`store_outwardtransaction`.`Quantity`) AS `out`,`store_outwardtransaction`.`ITEMID` AS `ITEMID`,`store_outwardtransaction`.`CATID` AS `CATID` from `store_outwardtransaction` group by `store_outwardtransaction`.`ITEMID`,`store_outwardtransaction`.`CATID` limit 200 ;

-- --------------------------------------------------------

--
-- Structure for view `view_outward_pre_balance`
--
DROP TABLE IF EXISTS `view_outward_pre_balance`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_outward_pre_balance`  AS  select `store_outwardtransaction`.`Code_id` AS `Code_id`,sum(`store_outwardtransaction`.`Quantity`) AS `Quantity` from `store_outwardtransaction` group by `store_outwardtransaction`.`Code_id` ;

-- --------------------------------------------------------

--
-- Structure for view `view_stock_inventory`
--
DROP TABLE IF EXISTS `view_stock_inventory`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_stock_inventory`  AS  select `tbl_stock_details`.`ITID` AS `ITID`,`tbl_stock_details`.`CAtID` AS `CAtID`,`tbl_stock_details`.`ITEMID` AS `ITEMID`,`tbl_stock_details`.`CID` AS `CID`,`tbl_stock_details`.`SID` AS `SID`,`tbl_stock_details`.`Salesprice` AS `Salesprice`,`tbl_stock_details`.`PurchasePrice` AS `PurchasePrice`,`tbl_stock_details`.`status` AS `status`,`tbl_stock_details`.`BarCode` AS `BarCode`,`tbl_stock_details`.`userID` AS `userID`,`tbl_stock_details`.`entryDate` AS `entryDate`,`tbl_items`.`Name` AS `Name`,`tbl_color`.`ColorName` AS `ColorName`,`tbl_size`.`SizeName` AS `SizeName`,`tbl_catagory`.`Name` AS `CatName`,ifnull(`view_order_balance`.`Balance`,0) AS `Balance`,ifnull(`tbl_stock_details`.`Discount`,0) AS `Discount` from (((((`tbl_stock_details` join `tbl_catagory` on(`tbl_stock_details`.`CAtID` = `tbl_catagory`.`CatID`)) join `tbl_items` on(`tbl_stock_details`.`ITEMID` = `tbl_items`.`ItemID`)) join `tbl_color` on(`tbl_stock_details`.`CID` = `tbl_color`.`CID`)) join `tbl_size` on(`tbl_stock_details`.`SID` = `tbl_size`.`SID`)) left join `view_order_balance` on(`tbl_stock_details`.`ITID` = `view_order_balance`.`ITEMID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vie_order_in`
--
DROP TABLE IF EXISTS `vie_order_in`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vie_order_in`  AS  select `tbl_orders`.`ITEMID` AS `ITEMID`,sum(`tbl_orders`.`Quantity`) AS `orderQty` from `tbl_orders` group by `tbl_orders`.`ITEMID` ;

-- --------------------------------------------------------

--
-- Structure for view `vie_outward_transaction`
--
DROP TABLE IF EXISTS `vie_outward_transaction`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vie_outward_transaction`  AS  select `sot`.`id` AS `id`,`sot`.`Quantity` AS `Quantity`,`sot`.`Date` AS `Date`,`sot`.`INID` AS `INID`,`sot`.`UserID` AS `UserID`,`sot`.`EntryDate` AS `EntryDate`,`sot`.`barcode` AS `barcode`,`sot`.`EMINO` AS `EMINO`,`sot`.`ITEMID` AS `ITEMID`,`sot`.`CID` AS `CID`,`vsi`.`ColorName` AS `ColorName`,`vsi`.`Name` AS `Name`,`vsi`.`SizeName` AS `SizeName`,`sot`.`SalesPrices` AS `SalesPrices`,`sot`.`Discount` AS `Discount`,`tc`.`CID` AS `CLLID`,`vsi`.`ITID` AS `ITID`,`sot`.`Amount` AS `Amount` from ((`store_outwardtransaction` `sot` left join `view_stock_inventory` `vsi` on(`sot`.`ITEMID` = `vsi`.`ITID`)) left join `tbl_clients` `tc` on(`sot`.`CID` = `tc`.`CID`)) where `sot`.`lockstatus` = 0 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store_invoice_head`
--
ALTER TABLE `store_invoice_head`
  ADD PRIMARY KEY (`HID`);

--
-- Indexes for table `store_inwardtransaction`
--
ALTER TABLE `store_inwardtransaction`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UQ_StoreInward_EMINO_BarCode` (`EMINO`,`BarCode`);

--
-- Indexes for table `store_items`
--
ALTER TABLE `store_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_outwardtransaction`
--
ALTER TABLE `store_outwardtransaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_outwardtransaction_manual`
--
ALTER TABLE `store_outwardtransaction_manual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_catagory`
--
ALTER TABLE `tbl_catagory`
  ADD PRIMARY KEY (`CatID`);

--
-- Indexes for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `tbl_color`
--
ALTER TABLE `tbl_color`
  ADD PRIMARY KEY (`CID`),
  ADD UNIQUE KEY `UQ_tbl_Color` (`ITEMID`,`ColorName`,`CID`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`OID`);

--
-- Indexes for table `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`SID`),
  ADD UNIQUE KEY `UQ_tbl_Size` (`ITEMID`,`SizeName`,`SID`);

--
-- Indexes for table `tbl_stock_details`
--
ALTER TABLE `tbl_stock_details`
  ADD PRIMARY KEY (`ITID`),
  ADD UNIQUE KEY `UQ_Item_Color_Size` (`ITEMID`,`CID`,`SID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store_invoice_head`
--
ALTER TABLE `store_invoice_head`
  MODIFY `HID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `store_inwardtransaction`
--
ALTER TABLE `store_inwardtransaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `store_items`
--
ALTER TABLE `store_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store_outwardtransaction`
--
ALTER TABLE `store_outwardtransaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `store_outwardtransaction_manual`
--
ALTER TABLE `store_outwardtransaction_manual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_catagory`
--
ALTER TABLE `tbl_catagory`
  MODIFY `CatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `OID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_stock_details`
--
ALTER TABLE `tbl_stock_details`
  MODIFY `ITID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
