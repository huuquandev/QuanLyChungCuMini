-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2023 lúc 06:16 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlychungcumini`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_canho_phong`
--

CREATE TABLE `tb_canho_phong` (
  `id_canho_phong` int(11) NOT NULL,
  `ten_canho_phong` varchar(50) NOT NULL,
  `ma_canho_phong` varchar(50) NOT NULL,
  `id_toanha` int(11) DEFAULT NULL,
  `so_nguoi_o` int(11) NOT NULL,
  `tienthue_canho_phong` decimal(10,0) NOT NULL,
  `tiencoc_canho_phong` decimal(10,0) NOT NULL,
  `dientich_canho_phong` double NOT NULL,
  `trangthai_canho_phong` int(11) NOT NULL,
  `tinhtrang_canho_phong` int(11) NOT NULL,
  `id_tang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_canho_phong`
--

INSERT INTO `tb_canho_phong` (`id_canho_phong`, `ten_canho_phong`, `ma_canho_phong`, `id_toanha`, `so_nguoi_o`, `tienthue_canho_phong`, `tiencoc_canho_phong`, `dientich_canho_phong`, `trangthai_canho_phong`, `tinhtrang_canho_phong`, `id_tang`) VALUES
(7, 'P-101', 'P567015', 1, 3, 4000000, 4000000, 160, 1, 1, 39),
(8, 'P-102', 'P561234', 1, 5, 15000000, 10000000, 250, 0, 2, 40),
(9, 'P-201', 'P135647', 29, 4, 15000000, 45000000, 200, 1, 1, 43),
(10, 'P-202', 'P484621', 29, 1, 8000000, 8000000, 200, 0, 0, 44);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_kho`
--

CREATE TABLE `tb_kho` (
  `id_kho` int(11) NOT NULL,
  `ma_kho` varchar(50) NOT NULL,
  `ten_kho` varchar(50) NOT NULL,
  `diachi_kho` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_taikhoan`
--

CREATE TABLE `tb_taikhoan` (
  `id_taikhoan` int(11) NOT NULL,
  `tai_khoan` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `ten_hien_thi` varchar(255) NOT NULL,
  `so_dien_thoai` int(11) NOT NULL,
  `gioi_tinh` int(11) NOT NULL,
  `hinh_anh` text NOT NULL,
  `quyen_han` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_taikhoan`
--

INSERT INTO `tb_taikhoan` (`id_taikhoan`, `tai_khoan`, `mat_khau`, `ten_hien_thi`, `so_dien_thoai`, `gioi_tinh`, `hinh_anh`, `quyen_han`) VALUES
(1, 'huylohb123', 'huylohb123', 'Phạm Hữu Quân', 378452231, 1, '', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_taisan`
--

CREATE TABLE `tb_taisan` (
  `id_taisan` int(11) NOT NULL,
  `ten_taisan` varchar(50) NOT NULL,
  `ma_taisan` int(50) NOT NULL,
  `thuong_hieu` varchar(50) NOT NULL,
  `mau_sac` varchar(50) NOT NULL,
  `nam_sanxuat` int(11) NOT NULL,
  `gia_tri` decimal(10,0) NOT NULL,
  `tinh_trang` varchar(50) NOT NULL,
  `id_kho` int(11) DEFAULT NULL,
  `id_toanha` int(11) DEFAULT NULL,
  `id_canho_phong` int(11) DEFAULT NULL,
  `vi_tri` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_tang`
--

CREATE TABLE `tb_tang` (
  `id_tang` int(11) NOT NULL,
  `id_toanha` int(11) DEFAULT NULL,
  `ten_tang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_tang`
--

INSERT INTO `tb_tang` (`id_tang`, `id_toanha`, `ten_tang`) VALUES
(39, 1, 1),
(40, 1, 2),
(42, 29, 1),
(43, 29, 2),
(44, 29, 3),
(45, 29, 5),
(46, 29, 6),
(47, 29, 7),
(48, 29, 8),
(49, 29, 9),
(50, 29, 10),
(51, 29, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_toanha`
--

CREATE TABLE `tb_toanha` (
  `id_toanha` int(11) NOT NULL,
  `ten_toanha` varchar(50) NOT NULL,
  `ma_toanha` varchar(50) NOT NULL,
  `so_tang` int(11) NOT NULL,
  `trangthai_toanha` int(11) NOT NULL,
  `diachi_chitiet` text NOT NULL,
  `tinhthanh` varchar(50) DEFAULT NULL,
  `quanhuyen` varchar(50) DEFAULT NULL,
  `phuongxa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_toanha`
--

INSERT INTO `tb_toanha` (`id_toanha`, `ten_toanha`, `ma_toanha`, `so_tang`, `trangthai_toanha`, `diachi_chitiet`, `tinhthanh`, `quanhuyen`, `phuongxa`) VALUES
(1, 'Tòa nhà hòa bình', 'CH001392', 3, 0, '400 khương đình', 'Tỉnh Bắc Giang', 'Huyện Lạng Giang', 'Xã An Hà'),
(29, 'Vinhome city', 'CH869889', 12, 1, '25 Nguyễn Khang', 'Tỉnh Bắc Giang', 'Huyện Tân Yên', 'Xã Việt Ngọc');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_canho_phong`
--
ALTER TABLE `tb_canho_phong`
  ADD PRIMARY KEY (`id_canho_phong`),
  ADD KEY `canhophong_toanha` (`id_toanha`),
  ADD KEY `canhophong_tang` (`id_tang`);

--
-- Chỉ mục cho bảng `tb_kho`
--
ALTER TABLE `tb_kho`
  ADD PRIMARY KEY (`id_kho`);

--
-- Chỉ mục cho bảng `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  ADD PRIMARY KEY (`id_taikhoan`);

--
-- Chỉ mục cho bảng `tb_taisan`
--
ALTER TABLE `tb_taisan`
  ADD PRIMARY KEY (`id_taisan`),
  ADD KEY `taisan_kho` (`id_kho`),
  ADD KEY `taisan_canhophong` (`id_canho_phong`),
  ADD KEY `taisan_toanha` (`id_toanha`);

--
-- Chỉ mục cho bảng `tb_tang`
--
ALTER TABLE `tb_tang`
  ADD PRIMARY KEY (`id_tang`),
  ADD KEY `tang_toanha` (`id_toanha`);

--
-- Chỉ mục cho bảng `tb_toanha`
--
ALTER TABLE `tb_toanha`
  ADD PRIMARY KEY (`id_toanha`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_canho_phong`
--
ALTER TABLE `tb_canho_phong`
  MODIFY `id_canho_phong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tb_kho`
--
ALTER TABLE `tb_kho`
  MODIFY `id_kho` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tb_taisan`
--
ALTER TABLE `tb_taisan`
  MODIFY `id_taisan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_tang`
--
ALTER TABLE `tb_tang`
  MODIFY `id_tang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `tb_toanha`
--
ALTER TABLE `tb_toanha`
  MODIFY `id_toanha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_canho_phong`
--
ALTER TABLE `tb_canho_phong`
  ADD CONSTRAINT `canhophong_tang` FOREIGN KEY (`id_tang`) REFERENCES `tb_tang` (`id_tang`),
  ADD CONSTRAINT `canhophong_toanha` FOREIGN KEY (`id_toanha`) REFERENCES `tb_toanha` (`id_toanha`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `tb_taisan`
--
ALTER TABLE `tb_taisan`
  ADD CONSTRAINT `taisan_canhophong` FOREIGN KEY (`id_canho_phong`) REFERENCES `tb_canho_phong` (`id_canho_phong`),
  ADD CONSTRAINT `taisan_kho` FOREIGN KEY (`id_kho`) REFERENCES `tb_kho` (`id_kho`),
  ADD CONSTRAINT `taisan_toanha` FOREIGN KEY (`id_toanha`) REFERENCES `tb_toanha` (`id_toanha`);

--
-- Các ràng buộc cho bảng `tb_tang`
--
ALTER TABLE `tb_tang`
  ADD CONSTRAINT `tang_toanha` FOREIGN KEY (`id_toanha`) REFERENCES `tb_toanha` (`id_toanha`) ON DELETE CASCADE ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
