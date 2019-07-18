-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 07 月 17 日 10:23
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
-- 資料表結構 `bparemaining`
--

CREATE TABLE `bparemaining` (
  `ITEM` varchar(30) NOT NULL,
  `QTY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- 傾印資料表的資料 `bparemaining`
--

INSERT INTO `bparemaining` (`ITEM`, `QTY`) VALUES
('Burdock', 200),
('Chicken Egg', 200),
('Chicken Legs', 200),
('Chicken wings', 175),
('Cross', 160),
('Knife', 200),
('Luncheon meat', 200),
('Pig foot', 200),
('Steak', 200);

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
-- 資料表結構 `pparemaining`
--

CREATE TABLE `pparemaining` (
  `ITEM` varchar(30) NOT NULL,
  `QTY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- 傾印資料表的資料 `pparemaining`
--

INSERT INTO `pparemaining` (`ITEM`, `QTY`) VALUES
('Burdock', 4980),
('Chicken Egg', 5000),
('Chicken Legs', 4965),
('Chicken wings', 5000),
('Cross', 5000),
('Knife', 5000),
('Luncheon meat', 5000),
('Pig foot', 5000),
('Steak', 4985);

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
(55, 1, 'Pig foot', 10, '1', 'PPA'),
(56, 1, 'Steak', 15, '1', 'PPA'),
(57, 1, 'Burdock', 20, '1', 'PPA'),
(58, 1, 'Chicken wings', 50000, '', ''),
(59, 1, 'Chicken Egg', 30, '1', 'WH'),
(60, 1, 'Chicken Legs', 35, '1', 'PPA'),
(63, 1, 'Cross', 40, '1', 'BPA'),
(64, 1, 'Knife', 45, '', ''),
(65, 1, 'Luncheon meat', 50, '', ''),
(66, 1, 'Pig foot', 55, '', ''),
(71, 2, 'Pig foot', 30, '', ''),
(72, 2, 'Chicken wings', 50, '', ''),
(73, 2, 'Cross', 20, '', ''),
(74, 2, 'Luncheon meat', 80, '', ''),
(75, 1, 'Pig foot', 125, '', ''),
(76, 1, 'Chicken Legs', 250, '', ''),
(77, 1, 'Chicken Legs', 300, '', ''),
(78, 1, 'Pig foot', 100, '', ''),
(79, 1, 'Pig foot', 200, '', ''),
(80, 1, 'Pig foot', 300, '', ''),
(81, 1, 'Pig foot', 100, '', ''),
(82, 1, 'Pig foot', 200, '', ''),
(83, 1, 'Pig foot', 300, '', ''),
(84, 1, 'Steak', 10, '', '');

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

-- --------------------------------------------------------

--
-- 資料表結構 `whqty`
--

CREATE TABLE `whqty` (
  `ITEM` varchar(30) NOT NULL,
  `QTY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- 傾印資料表的資料 `whqty`
--

INSERT INTO `whqty` (`ITEM`, `QTY`) VALUES
('Burdock', 1000),
('Chicken Egg', 170),
('Chicken Legs', 1000),
('Chicken wings', 1000),
('Cross', 1000),
('Knife', 1000),
('Luncheon meat', 1000),
('Pig foot', 1000),
('Steak', 1000);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `bparemaining`
--
ALTER TABLE `bparemaining`
  ADD PRIMARY KEY (`ITEM`);

--
-- 資料表索引 `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Item_ID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- 資料表索引 `pparemaining`
--
ALTER TABLE `pparemaining`
  ADD PRIMARY KEY (`ITEM`);

--
-- 資料表索引 `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`RequestNo`),
  ADD KEY `itemName2` (`Item`);

--
-- 資料表索引 `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- 資料表索引 `whqty`
--
ALTER TABLE `whqty`
  ADD PRIMARY KEY (`ITEM`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `request`
--
ALTER TABLE `request`
  MODIFY `RequestNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `bparemaining`
--
ALTER TABLE `bparemaining`
  ADD CONSTRAINT `iname2` FOREIGN KEY (`ITEM`) REFERENCES `item` (`Name`);

--
-- 資料表的限制式 `pparemaining`
--
ALTER TABLE `pparemaining`
  ADD CONSTRAINT `iname` FOREIGN KEY (`ITEM`) REFERENCES `item` (`Name`);

--
-- 資料表的限制式 `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `itemName2` FOREIGN KEY (`Item`) REFERENCES `item` (`Name`);

--
-- 資料表的限制式 `whqty`
--
ALTER TABLE `whqty`
  ADD CONSTRAINT `ItemName` FOREIGN KEY (`ITEM`) REFERENCES `item` (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
