-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 09:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `username` varchar(50) NOT NULL,
  `MaSP` varchar(10) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`username`, `MaSP`, `SoLuong`) VALUES
('hai123', 'sp002', 1),
('hai123', 'sp002', 1),
('hai123', 'sp002', 1),
('hai123', '', 1),
('hai123', 'sp004', 1),
('hai123', '', 1),
('hai123', 'sp004', 1),
('hai123', '', 1),
('hai123', 'qưeqw', 1),
('hai123', '', 1),
('hai123', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(5) NOT NULL,
  `TenSP` varchar(100) NOT NULL,
  `LoaiSP` varchar(1000) NOT NULL,
  `Gia` int(11) NOT NULL,
  `anh` text NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `LoaiSP`, `Gia`, `anh`, `mota`) VALUES
('qưeqw', 'ao khoac simple', 'ádasd', 119084914, 'download.jpg', 'ád'),
('sp001', 'Hoodie dirty coin', 'ao', 600000, '1.png', ''),
('sp002', 'Hoodie dirty coin xanh', 'ao', 600000, '2.png', ''),
('sp003', 'Hoodie dirty coin đỏ', 'ao', 600000, '3.png', ''),
('sp004', 'cadigan dirtycoin', 'ao', 490000, '4.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `permission` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `Password`, `Email`, `permission`) VALUES
('', 'hdtrung01@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
('admin', '21232F297A57A5A743894A0E4A801FC3', 'Shopquanao@gmail.com', 1),
('áds', '8277e0910d750195b448797616e091ad', 'â', 0),
('hai123', '70a0f9894d2df18c2507d231a94caee8', 'hai123', 0),
('simple', '202cb962ac59075b964b07152d234b70', 'simple@gmail.com', 0),
('thnagcho147c', '70a0f9894d2df18c2507d231a94caee8', 'hai123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
