-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 08, 2021 lúc 09:26 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ketqua`
--

CREATE TABLE `ketqua` (
  `MaSV` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `MaMH` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `Diem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ketqua`
--

INSERT INTO `ketqua` (`MaSV`, `MaMH`, `Diem`) VALUES
('A01', '01', 3),
('A01', '02', 6),
('A01', '03', 5),
('A01', '04', 8),
('A02', '01', 5),
('A02', '03', 7),
('A02', '05', 8),
('A02', '08', 6),
('A03', '01', 2),
('A03', '03', 3),
('A03', '04', 9),
('A04', '02', 9),
('A04', '03', 10),
('A04', '04', 6),
('A04', '06', 8),
('A04', '08', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `MaKH` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `TenKH` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`MaKH`, `TenKH`) VALUES
('AV', 'Anh Văn'),
('DT', 'Điện tử'),
('KT', 'Kế toán'),
('TH', 'Tin học'),
('TR', 'Triết');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon`
--

CREATE TABLE `mon` (
  `MaMH` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `TenMH` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sotiet` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mon`
--

INSERT INTO `mon` (`MaMH`, `TenMH`, `Sotiet`) VALUES
('01', 'Cơ sở dữ liệu', 45),
('02', 'Trí tuệ nhân tạo', 45),
('03', 'Toán rời rạc ứng dụng', 45),
('04', 'Đồ họa ứng dụng', 60),
('05', 'Tiếng Anh cơ bản', 60),
('06', 'Tin học văn phòng', 60),
('07', 'Pháp luật đại cương', 30),
('08', 'Anh chuyên ngành', 45),
('09', 'PTTK Hệ thống', 60);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `HoSV` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenSV` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phai` bit(1) DEFAULT NULL,
  `Ngaysinh` datetime DEFAULT NULL,
  `NoiSinh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaKH` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hocbong` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `HoSV`, `TenSV`, `Phai`, `Ngaysinh`, `NoiSinh`, `MaKH`, `Hocbong`) VALUES
('A01', 'Nguyễn Thị', 'Hải', b'1', '1986-02-23 00:00:00', 'Hà Nội', 'TH', 130000),
('A02', 'Trần Văn', 'Chính', b'0', '1994-12-20 00:00:00', 'Bình Định', 'TH', 150000),
('A03', 'Lê Thu Bạch', 'Yến', b'1', '1993-02-21 00:00:00', 'TP. HCM', 'TH', 0),
('A04', 'Trần Anh', 'Tuấn', b'0', '1987-12-20 00:00:00', 'Hà Nội', 'AV', 80000),
('A10', 'Trần Thị', 'Mai', b'1', '1994-10-04 00:00:00', 'Hà Nội', 'TH', 0),
('B01', 'Hoàng Thanh', 'Mai', b'1', '1992-08-12 00:00:00', 'Hải Phòng', 'TR', 0),
('B02', 'Trần Thị Thu', 'Thủy', b'1', '1990-01-02 00:00:00', 'TP. HCM', 'AV', 80000),
('B03', 'Đỗ Văn', 'Lâm', b'0', '1994-02-26 00:00:00', 'Bình Định', 'TR', 0),
('B04', 'Bùi Kim', 'Dung', b'0', '1988-10-18 00:00:00', 'Hà Nội', 'TH', 170000),
('B05', 'Nguyễn Thị', 'Hạnh', b'1', '1988-09-06 00:00:00', 'Hải Phòng', 'AV', 130000),
('C01', 'Hà Quang', 'Anh', b'0', '1985-03-11 00:00:00', 'TP.HCM', 'TR', 0),
('C03', 'Lê Quang', 'Lưu', b'0', '1985-02-23 00:00:00', 'Hà Nội', 'TH', 0),
('T03', 'Hoàng Thị Hải', 'Yến', b'1', '1989-09-10 00:00:00', 'Hà Nội', 'AV', 170000),
('T06', 'Nguyễn Văn', 'Thắng', b'0', '1988-10-18 00:00:00', 'Hà Nội', 'AV', 150000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ketqua`
--
ALTER TABLE `ketqua`
  ADD PRIMARY KEY (`MaSV`,`MaMH`),
  ADD KEY `MaMH` (`MaMH`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`MaMH`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ketqua`
--
ALTER TABLE `ketqua`
  ADD CONSTRAINT `ketqua_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`),
  ADD CONSTRAINT `ketqua_ibfk_2` FOREIGN KEY (`MaMH`) REFERENCES `mon` (`MaMH`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khoa` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
