-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 08, 2018 lúc 12:06 PM
-- Phiên bản máy phục vụ: 10.1.25-MariaDB
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dathen`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bacsi`
--

CREATE TABLE `bacsi` (
  `id` int(11) NOT NULL,
  `tenbacsi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bacsi`
--

INSERT INTO `bacsi` (`id`, `tenbacsi`) VALUES
(1, 'BS Phúc'),
(2, 'BS Lý'),
(3, 'BS Sơn'),
(4, 'BS Tân'),
(7, 'BS Tùng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangnhap`
--

CREATE TABLE `bangnhap` (
  `id` int(11) NOT NULL,
  `hoten` varchar(150) NOT NULL,
  `dienthoai` varchar(150) NOT NULL,
  `masokham` varchar(150) NOT NULL,
  `thoigiandangky` datetime NOT NULL,
  `thoigiandathen` datetime DEFAULT NULL,
  `thoigiandenkham` datetime DEFAULT NULL,
  `id_loaibenh` int(11) DEFAULT NULL,
  `id_bacsi` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `id_nguonden` int(11) NOT NULL,
  `id_phuongthuc` int(11) NOT NULL,
  `id_trangthai` int(11) DEFAULT NULL,
  `chiphi` varchar(150) DEFAULT NULL,
  `chat` text,
  `deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bangnhap`
--

INSERT INTO `bangnhap` (`id`, `hoten`, `dienthoai`, `masokham`, `thoigiandangky`, `thoigiandathen`, `thoigiandenkham`, `id_loaibenh`, `id_bacsi`, `id_nguoidung`, `id_nguonden`, `id_phuongthuc`, `id_trangthai`, `chiphi`, `chat`, `deleted`) VALUES
(5, 'Nhựt', '01228938041', 'HD901', '2018-05-16 00:00:00', NULL, NULL, 4, 3, 1, 1, 1, 2, '', NULL, 0),
(6, 'Thương', '01225458658', 'HD325', '2018-05-02 00:00:00', '2018-05-05 00:00:00', NULL, 1, 2, 1, 2, 2, 3, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaibenh`
--

CREATE TABLE `loaibenh` (
  `id` int(11) NOT NULL,
  `tenbenh` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaibenh`
--

INSERT INTO `loaibenh` (`id`, `tenbenh`) VALUES
(1, 'Bệnh Trĩ'),
(2, 'Hôi Nách'),
(3, 'Nam Khoa'),
(4, 'Viêm bao quy đầu'),
(5, 'Viêm Tinh Hoàn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `user` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `id_phanquyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `user`, `password`, `id_phanquyen`) VALUES
(1, 'nhockool1002', '6ac66b5cb3d198e4587a747c13ac3c9d', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguonden`
--

CREATE TABLE `nguonden` (
  `id` int(11) NOT NULL,
  `tennguonden` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguonden`
--

INSERT INTO `nguonden` (`id`, `tennguonden`) VALUES
(1, 'Google'),
(2, 'Facebook');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id` int(11) NOT NULL,
  `tenphanquyen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`id`, `tenphanquyen`) VALUES
(1, 'Super Administrator'),
(2, 'Administrator'),
(3, 'Tư Vấn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthuc`
--

CREATE TABLE `phuongthuc` (
  `id` int(11) NOT NULL,
  `tenphuongthuc` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phuongthuc`
--

INSERT INTO `phuongthuc` (`id`, `tenphuongthuc`) VALUES
(1, 'LIVECHAT'),
(2, 'FACEBOOK');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id` int(11) NOT NULL,
  `trangthai` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id`, `trangthai`) VALUES
(1, 'Chưa xác định'),
(2, 'Đang chờ'),
(3, 'Đã đến'),
(4, 'Dời lịch hẹn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bacsi`
--
ALTER TABLE `bacsi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bangnhap`
--
ALTER TABLE `bangnhap`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `masokham` (`masokham`),
  ADD KEY `id_loaibenh` (`id_loaibenh`),
  ADD KEY `id_bacsi` (`id_bacsi`),
  ADD KEY `id_nguoidung` (`id_nguoidung`),
  ADD KEY `id_nguonden` (`id_nguonden`),
  ADD KEY `id_phuongthuc` (`id_phuongthuc`),
  ADD KEY `id_trangthai` (`id_trangthai`);

--
-- Chỉ mục cho bảng `loaibenh`
--
ALTER TABLE `loaibenh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_phanquyen` (`id_phanquyen`);

--
-- Chỉ mục cho bảng `nguonden`
--
ALTER TABLE `nguonden`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phuongthuc`
--
ALTER TABLE `phuongthuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bacsi`
--
ALTER TABLE `bacsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `bangnhap`
--
ALTER TABLE `bangnhap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `loaibenh`
--
ALTER TABLE `loaibenh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `nguonden`
--
ALTER TABLE `nguonden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `phuongthuc`
--
ALTER TABLE `phuongthuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bangnhap`
--
ALTER TABLE `bangnhap`
  ADD CONSTRAINT `bangnhap_ibfk_1` FOREIGN KEY (`id_nguoidung`) REFERENCES `nguoidung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bangnhap_ibfk_2` FOREIGN KEY (`id_phuongthuc`) REFERENCES `phuongthuc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bangnhap_ibfk_3` FOREIGN KEY (`id_loaibenh`) REFERENCES `loaibenh` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bangnhap_ibfk_4` FOREIGN KEY (`id_bacsi`) REFERENCES `bacsi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bangnhap_ibfk_5` FOREIGN KEY (`id_nguonden`) REFERENCES `nguonden` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bangnhap_ibfk_6` FOREIGN KEY (`id_trangthai`) REFERENCES `trangthai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`id_phanquyen`) REFERENCES `phanquyen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
