-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 14, 2022 lúc 12:52 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(5) NOT NULL,
  `TenSP` varchar(1000) NOT NULL,
  `LoaiSP` varchar(1000) NOT NULL,
  `Gia` int(11) NOT NULL,
  `anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `LoaiSP`, `Gia`, `anh`) VALUES
('sp001', 'Hoodie dirty coin', 'ao', 600000, '1.png'),
('sp002', 'Hoodie dirty coin xanh', 'ao', 600000, '2.png'),
('sp003', 'Hoodie dirty coin đỏ', 'ao', 600000, '3.png'),
('sp004', 'cadigan dirtycoin', 'ao', 490000, '4.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `permission` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`username`, `Password`, `Email`, `permission`) VALUES
('admin', '21232F297A57A5A743894A0E4A801FC3', 'Shopquanao@gmail.com', 1),
('hdtrung', 'c2d8730c4cdd662573b0214a0183bf98', 'hdtrung01@gmail.com', 0),
('', 'hdtrung01@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
('hdtrung', '202cb962ac59075b964b07152d234b70', 'das', 0),
('cpc', '202cb962ac59075b964b07152d234b70', 'das', 0),
('cpc', '202cb962ac59075b964b07152d234b70', 'das', 0),
('cpc', '202cb962ac59075b964b07152d234b70', '12', 0),
('áds', '8277e0910d750195b448797616e091ad', 'â', 0),
('trung', '5eac43aceba42c8757b54003a58277b5', 'trung@gmail.com', 0),
('trung', '5eac43aceba42c8757b54003a58277b5', 'trung@gmail.com', 0),
('trung', '202cb962ac59075b964b07152d234b70', 'trung@gmail.com', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
