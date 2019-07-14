-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 07 月 14 日 19:41
-- 伺服器版本： 10.3.15-MariaDB
-- PHP 版本： 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `assignment`
--

-- --------------------------------------------------------

--
-- 資料表結構 `item`
--

CREATE TABLE `item` (
  `Item_ID` int(8) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `decs` varchar(60) NOT NULL,
  `virtual_ID` char(16) NOT NULL,
  `CategoryType` varchar(30) NOT NULL,
  `C_Date` date NOT NULL,
  `UP_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- 傾印資料表的資料 `item`
--

INSERT INTO `item` (`Item_ID`, `Name`, `decs`, `virtual_ID`, `CategoryType`, `C_Date`, `UP_DATE`) VALUES
(1, 'Luncheon meat', 'Merlin brand', '0', 'Pork', '2019-08-19', '2019-08-20'),
(2, 'Chicken wings', 'Royal farm brand', '0', 'Chicken', '2019-08-20', '2019-08-20'),
(3, 'Steak', 'THOMAS FARMS brand', '0', 'Beef', '2019-08-21', '2019-08-22'),
(4, 'Chicken Egg', 'THOMAS FARMS brand', '0', 'Chicken', '2019-08-21', '2019-08-22'),
(5, 'Cross', 'PYREX brand', '0', 'Tableware', '2019-08-22', '2019-08-23'),
(6, 'Knife', 'PYREX brand', '0', 'Tableware', '2019-08-24', '2019-08-25'),
(7, 'Pig foot', 'Merlin brand', '0', 'Pork', '2019-07-10', '2019-07-17'),
(8, 'Chicken Legs', 'Royal farm brand', '0', 'Chicken', '2019-08-20', '2019-08-20'),
(9, 'Burdock', 'THOMAS FARMS brand', '0', 'Beef', '2019-08-21', '2019-08-22');

-- --------------------------------------------------------

--
-- 資料表結構 `request`
--

CREATE TABLE `request` (
  `RequestNo` int(10) NOT NULL,
  `User` int(10) NOT NULL,
  `Item` varchar(30) NOT NULL,
  `Qty` int(10) NOT NULL,
  `State` varchar(5) NOT NULL,
  `agreement` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- 傾印資料表的資料 `request`
--

INSERT INTO `request` (`RequestNo`, `User`, `Item`, `Qty`, `State`, `agreement`) VALUES
(23, 2, 'Pork chops', 10, '0', 'WH'),
(24, 2, 'Pig feet', 20, '0', 'BPA'),
(25, 2, 'Steak', 30, '0', 'BPA'),
(26, 2, 'Burdock', 40, '0', ''),
(27, 1, 'Chicken leg', 1, '0', ''),
(28, 1, 'Salmon', 2, '0', ''),
(29, 1, 'Tuna Fish', 3, '0', ''),
(30, 1, 'Bowl', 4, '0', ''),
(31, 1, 'Chopsticks', 5, '0', ''),
(32, 1, 'Pork chops', 1, '0', ''),
(33, 1, 'Pork chops', 123, '1', ''),
(34, 2, 'Pork chops', 232, '1', ''),
(35, 2, 'Pork chops', 2000, '0', ''),
(36, 1, 'Bowl', 3000, '0', ''),
(37, 1, 'Pork chops', 1234, '0', ''),
(38, 1, 'Pig feet', 100, '0', ''),
(39, 1, 'Pig feet', 100, '0', ''),
(40, 1, 'Pork chops', 321, '0', ''),
(41, 2, 'Pork chops', 456, '0', '');

-- --------------------------------------------------------

--
-- 資料表結構 `staff`
--

CREATE TABLE `staff` (
  `Name` varchar(30) NOT NULL,
  `StaffID` int(8) NOT NULL,
  `Post` varchar(3) NOT NULL,
  `PhoneNo` int(8) NOT NULL,
  `RestaurantID` int(8) NOT NULL,
  `Pwd` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- 傾印資料表的資料 `staff`
--

INSERT INTO `staff` (`Name`, `StaffID`, `Post`, `PhoneNo`, `RestaurantID`, `Pwd`) VALUES
('Sam', 1, 'RM', 12345678, 1, 123),
('peter wong', 2, 'RM', 23456789, 0, 123),
('dasiy wong', 3, 'CM', 34567890, 0, 123),
('litong shing', 4, 'CM', 45678901, 2, 123),
('To To', 5, 'HW', 56789012, 3, 123),
('David Co', 6, 'HW', 67890123, 0, 123),
('Co Co', 7, 'AC', 78901234, 0, 123),
('Yo Yo', 8, 'AC', 89012345, 0, 123),
('Jo Jo', 9, 'SP', 90123456, 0, 123),
('David', 10, 'PM', 1233210, 0, 123);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Item_ID`);

--
-- 資料表索引 `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`RequestNo`);

--
-- 資料表索引 `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `request`
--
ALTER TABLE `request`
  MODIFY `RequestNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
