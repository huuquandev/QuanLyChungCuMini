-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 12:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlychungcumini`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_momo` int(11) NOT NULL,
  `partner_code` varchar(50) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `order_info` varchar(100) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `pay_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_baotri_suachua`
--

CREATE TABLE `tb_baotri_suachua` (
  `id_baotri_suachua` int(11) NOT NULL,
  `id_toanha` int(11) DEFAULT NULL,
  `id_phong` int(11) DEFAULT NULL,
  `ma_baotri_suachua` varchar(50) NOT NULL,
  `tieude_baotri_suachua` varchar(100) NOT NULL,
  `mota_baotri_suachua` text NOT NULL,
  `loai_cong_viec` varchar(50) NOT NULL,
  `mucdo_uutien` int(11) NOT NULL,
  `ngay_batdau` date NOT NULL,
  `ngay_ketthuc` date NOT NULL,
  `id_taikhoan` int(11) DEFAULT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_baotri_suachua`
--

INSERT INTO `tb_baotri_suachua` (`id_baotri_suachua`, `id_toanha`, `id_phong`, `ma_baotri_suachua`, `tieude_baotri_suachua`, `mota_baotri_suachua`, `loai_cong_viec`, `mucdo_uutien`, `ngay_batdau`, `ngay_ketthuc`, `id_taikhoan`, `trang_thai`) VALUES
(1, 72, 13, 'BT056985', 'Sửa máy lạnh', 'Thay pin, vệ sinh lại máy lạnh', 'Sửa chữa', 2, '2023-11-01', '2023-11-09', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_canho_phong`
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
  `id_tang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_canho_phong`
--

INSERT INTO `tb_canho_phong` (`id_canho_phong`, `ten_canho_phong`, `ma_canho_phong`, `id_toanha`, `so_nguoi_o`, `tienthue_canho_phong`, `tiencoc_canho_phong`, `dientich_canho_phong`, `trangthai_canho_phong`, `tinhtrang_canho_phong`, `id_tang`) VALUES
(13, 'P-101', 'P015693', 1, 5, 4000000, 4000000, 100, 1, 1, 40),
(18, '312', 'P096400', 1, 12, 400000, 4000000, 100, 0, 1, 39);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dancu`
--

CREATE TABLE `tb_dancu` (
  `id_dancu` int(11) NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `so_dien_thoai` int(11) NOT NULL,
  `cccd` int(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gioi_tinh` int(11) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `hinh_anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dancu`
--

INSERT INTO `tb_dancu` (`id_dancu`, `ho_ten`, `so_dien_thoai`, `cccd`, `email`, `gioi_tinh`, `dia_chi`, `ngay_sinh`, `hinh_anh`) VALUES
(1, 'pham huu quan', 99999999, 25839025, 'dophuong211002@gmail.com', 1, 'afdsfsdfdsfsdf', '2023-12-12', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dichvu`
--

CREATE TABLE `tb_dichvu` (
  `id_dichvu` int(11) NOT NULL,
  `ma_dichvu` varchar(50) NOT NULL,
  `loai_dichvu` varchar(50) NOT NULL,
  `mota_dichvu` text NOT NULL,
  `ten_dichvu` varchar(255) NOT NULL,
  `tinhtrang_dichvu` int(11) NOT NULL,
  `donvigia_dichvu` int(11) NOT NULL,
  `gia_dichvu` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_dichvu`
--

INSERT INTO `tb_dichvu` (`id_dichvu`, `ma_dichvu`, `loai_dichvu`, `mota_dichvu`, `ten_dichvu`, `tinhtrang_dichvu`, `donvigia_dichvu`, `gia_dichvu`) VALUES
(1, '', '1', 'De xe', 'De xe', 1, 0, 100000),
(2, '', '2', 'Bao ve', 'Bao ve', 1, 0, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hoadon`
--

CREATE TABLE `tb_hoadon` (
  `id` int(11) NOT NULL,
  `id_DV` int(11) NOT NULL,
  `id_hopdong` int(11) NOT NULL,
  `ngay_het_han` datetime NOT NULL,
  `ngay_tao` datetime NOT NULL,
  `ngay_thanh_toan` datetime DEFAULT NULL,
  `gia` decimal(10,0) NOT NULL,
  `tinhtrang` varchar(20) NOT NULL DEFAULT 'Chưa thanh toán'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_hoadon`
--

INSERT INTO `tb_hoadon` (`id`, `id_DV`, `id_hopdong`, `ngay_het_han`, `ngay_tao`, `ngay_thanh_toan`, `gia`, `tinhtrang`) VALUES
(10, 1, 3, '2023-12-07 08:16:00', '2023-12-07 08:16:00', '2023-12-22 14:16:00', 10003, 'Đã thanh toán'),
(12, 1, 3, '2023-12-13 22:00:00', '2023-12-12 22:01:00', '2023-12-23 17:47:00', 1111, 'Đã thanh toán'),
(14, 2, 3, '2023-12-21 22:01:00', '2023-12-12 22:01:47', NULL, 123, 'Chưa thanh toán'),
(15, 2, 4, '2023-12-12 16:06:54', '2023-12-12 16:06:54', NULL, 111111, 'Chưa thanh toán'),
(16, 2, 4, '2023-12-12 16:09:33', '2023-12-12 16:09:33', '2023-12-13 22:09:34', 123123, 'Đã thanh toán'),
(17, 2, 4, '2023-12-09 15:59:00', '2023-12-16 16:00:38', NULL, 10000, 'Chưa thanh toán'),
(18, 2, 4, '2023-12-09 15:59:00', '2023-12-16 16:19:22', NULL, 10000, 'Chưa thanh toán'),
(19, 2, 4, '2023-12-09 15:59:00', '2023-12-16 17:05:46', NULL, 10005, 'Chưa thanh toán');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hopdong`
--

CREATE TABLE `tb_hopdong` (
  `id` int(11) NOT NULL,
  `id_canho_phong` int(11) NOT NULL,
  `id_dancu` int(11) NOT NULL,
  `ngay_batdau` datetime NOT NULL,
  `ngay_ketthuc` datetime NOT NULL,
  `thoi_han_hop_dong` varchar(2000) NOT NULL,
  `gia` decimal(10,0) NOT NULL,
  `tong` int(11) NOT NULL,
  `filehopdong` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_hopdong`
--

INSERT INTO `tb_hopdong` (`id`, `id_canho_phong`, `id_dancu`, `ngay_batdau`, `ngay_ketthuc`, `thoi_han_hop_dong`, `gia`, `tong`, `filehopdong`) VALUES
(3, 13, 1, '2023-12-06 15:32:38', '2023-12-06 15:32:38', '123213123', 111111, 1111111, ''),
(4, 18, 1, '2023-12-12 16:06:04', '2023-12-22 22:06:04', '1231231232', 12321, 1231234, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kho`
--

CREATE TABLE `tb_kho` (
  `id_kho` int(11) NOT NULL,
  `ma_kho` varchar(50) NOT NULL,
  `ten_kho` varchar(50) NOT NULL,
  `diachi_kho` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kho`
--

INSERT INTO `tb_kho` (`id_kho`, `ma_kho`, `ten_kho`, `diachi_kho`) VALUES
(1, 'MK023256', 'Kho hàng vật liệu', 'Hà nội');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sudungdichvu`
--

CREATE TABLE `tb_sudungdichvu` (
  `id` int(11) NOT NULL,
  `id_canho_phong` int(11) NOT NULL,
  `id_DV` int(11) NOT NULL,
  `tgian_batdau` date NOT NULL,
  `tgian_ketthuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_taikhoan`
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
-- Dumping data for table `tb_taikhoan`
--

INSERT INTO `tb_taikhoan` (`id_taikhoan`, `tai_khoan`, `mat_khau`, `ten_hien_thi`, `so_dien_thoai`, `gioi_tinh`, `hinh_anh`, `quyen_han`) VALUES
(1, 'huylohb123', 'huylohb123', 'Phạm Hữu Quân', 378452231, 1, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_taisan`
--

CREATE TABLE `tb_taisan` (
  `id_taisan` int(11) NOT NULL,
  `ten_taisan` varchar(50) NOT NULL,
  `ma_taisan` varchar(50) NOT NULL,
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

--
-- Dumping data for table `tb_taisan`
--

INSERT INTO `tb_taisan` (`id_taisan`, `ten_taisan`, `ma_taisan`, `thuong_hieu`, `mau_sac`, `nam_sanxuat`, `gia_tri`, `tinh_trang`, `id_kho`, `id_toanha`, `id_canho_phong`, `vi_tri`) VALUES
(1, 'Ghế', 'TS012459', 'Nike', 'Đỏ', 2020, 265000, 'Mới', 1, 72, NULL, 'Phòng ngủ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tang`
--

CREATE TABLE `tb_tang` (
  `id_tang` int(11) NOT NULL,
  `id_toanha` int(11) DEFAULT NULL,
  `ten_tang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tang`
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
-- Table structure for table `tb_toanha`
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
-- Dumping data for table `tb_toanha`
--

INSERT INTO `tb_toanha` (`id_toanha`, `ten_toanha`, `ma_toanha`, `so_tang`, `trangthai_toanha`, `diachi_chitiet`, `tinhthanh`, `quanhuyen`, `phuongxa`) VALUES
(1, 'Tòa nhà hòa bình', 'CH001392', 3, 0, '400 khương đình', 'Tỉnh Bắc Giang', 'Huyện Lạng Giang', 'Xã An Hà'),
(29, 'Vinhome city', 'CH869889', 12, 1, '25 Nguyễn Khang', 'Tỉnh Bắc Giang', 'Huyện Tân Yên', 'Xã Việt Ngọc'),
(72, 'Tòa nhà an bình', 'CH344573', 12, 0, '3123', 'Tỉnh Hà Giang', 'Huyện Đồng Văn', 'Xã Lũng Cú');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_momo`);

--
-- Indexes for table `tb_baotri_suachua`
--
ALTER TABLE `tb_baotri_suachua`
  ADD PRIMARY KEY (`id_baotri_suachua`),
  ADD KEY `baotrisuachua_phong` (`id_phong`),
  ADD KEY `baotrisuachua_toanha` (`id_toanha`),
  ADD KEY `baotrisuachua_taikhoan` (`id_taikhoan`);

--
-- Indexes for table `tb_canho_phong`
--
ALTER TABLE `tb_canho_phong`
  ADD PRIMARY KEY (`id_canho_phong`),
  ADD KEY `canhophong_toanha` (`id_toanha`),
  ADD KEY `canhophong_tang` (`id_tang`);

--
-- Indexes for table `tb_dancu`
--
ALTER TABLE `tb_dancu`
  ADD PRIMARY KEY (`id_dancu`);

--
-- Indexes for table `tb_dichvu`
--
ALTER TABLE `tb_dichvu`
  ADD PRIMARY KEY (`id_dichvu`);

--
-- Indexes for table `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoadon_hopdong` (`id_hopdong`),
  ADD KEY `hoadon_dichvu` (`id_DV`);

--
-- Indexes for table `tb_hopdong`
--
ALTER TABLE `tb_hopdong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hopdong_canhophong` (`id_canho_phong`),
  ADD KEY `hopdong_dancu` (`id_dancu`);

--
-- Indexes for table `tb_kho`
--
ALTER TABLE `tb_kho`
  ADD PRIMARY KEY (`id_kho`);

--
-- Indexes for table `tb_sudungdichvu`
--
ALTER TABLE `tb_sudungdichvu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sudung_dichvu` (`id_DV`),
  ADD KEY `sudung_canhophong` (`id_canho_phong`);

--
-- Indexes for table `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  ADD PRIMARY KEY (`id_taikhoan`);

--
-- Indexes for table `tb_taisan`
--
ALTER TABLE `tb_taisan`
  ADD PRIMARY KEY (`id_taisan`),
  ADD KEY `taisan_kho` (`id_kho`),
  ADD KEY `taisan_canhophong` (`id_canho_phong`),
  ADD KEY `taisan_toanha` (`id_toanha`);

--
-- Indexes for table `tb_tang`
--
ALTER TABLE `tb_tang`
  ADD PRIMARY KEY (`id_tang`),
  ADD KEY `tang_toanha` (`id_toanha`);

--
-- Indexes for table `tb_toanha`
--
ALTER TABLE `tb_toanha`
  ADD PRIMARY KEY (`id_toanha`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_momo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_baotri_suachua`
--
ALTER TABLE `tb_baotri_suachua`
  MODIFY `id_baotri_suachua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_canho_phong`
--
ALTER TABLE `tb_canho_phong`
  MODIFY `id_canho_phong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_dancu`
--
ALTER TABLE `tb_dancu`
  MODIFY `id_dancu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_dichvu`
--
ALTER TABLE `tb_dichvu`
  MODIFY `id_dichvu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_hopdong`
--
ALTER TABLE `tb_hopdong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kho`
--
ALTER TABLE `tb_kho`
  MODIFY `id_kho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_sudungdichvu`
--
ALTER TABLE `tb_sudungdichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_taisan`
--
ALTER TABLE `tb_taisan`
  MODIFY `id_taisan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_tang`
--
ALTER TABLE `tb_tang`
  MODIFY `id_tang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tb_toanha`
--
ALTER TABLE `tb_toanha`
  MODIFY `id_toanha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_baotri_suachua`
--
ALTER TABLE `tb_baotri_suachua`
  ADD CONSTRAINT `baotrisuachua_phong` FOREIGN KEY (`id_phong`) REFERENCES `tb_canho_phong` (`id_canho_phong`) ON DELETE SET NULL,
  ADD CONSTRAINT `baotrisuachua_taikhoan` FOREIGN KEY (`id_taikhoan`) REFERENCES `tb_taikhoan` (`id_taikhoan`) ON DELETE SET NULL,
  ADD CONSTRAINT `baotrisuachua_toanha` FOREIGN KEY (`id_toanha`) REFERENCES `tb_toanha` (`id_toanha`) ON DELETE SET NULL;

--
-- Constraints for table `tb_canho_phong`
--
ALTER TABLE `tb_canho_phong`
  ADD CONSTRAINT `canhophong_tang` FOREIGN KEY (`id_tang`) REFERENCES `tb_tang` (`id_tang`) ON DELETE SET NULL,
  ADD CONSTRAINT `canhophong_toanha` FOREIGN KEY (`id_toanha`) REFERENCES `tb_toanha` (`id_toanha`) ON DELETE SET NULL;

--
-- Constraints for table `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  ADD CONSTRAINT `hoadon_dichvu` FOREIGN KEY (`id_DV`) REFERENCES `tb_dichvu` (`id_dichvu`),
  ADD CONSTRAINT `hoadon_hopdong` FOREIGN KEY (`id_hopdong`) REFERENCES `tb_hopdong` (`id`);

--
-- Constraints for table `tb_hopdong`
--
ALTER TABLE `tb_hopdong`
  ADD CONSTRAINT `hopdong_canhophong` FOREIGN KEY (`id_canho_phong`) REFERENCES `tb_canho_phong` (`id_canho_phong`),
  ADD CONSTRAINT `hopdong_dancu` FOREIGN KEY (`id_dancu`) REFERENCES `tb_dancu` (`id_dancu`);

--
-- Constraints for table `tb_sudungdichvu`
--
ALTER TABLE `tb_sudungdichvu`
  ADD CONSTRAINT `sudung_canhophong` FOREIGN KEY (`id_canho_phong`) REFERENCES `tb_canho_phong` (`id_canho_phong`),
  ADD CONSTRAINT `sudung_dichvu` FOREIGN KEY (`id_DV`) REFERENCES `tb_dichvu` (`id_dichvu`);

--
-- Constraints for table `tb_taisan`
--
ALTER TABLE `tb_taisan`
  ADD CONSTRAINT `taisan_canhophong` FOREIGN KEY (`id_canho_phong`) REFERENCES `tb_canho_phong` (`id_canho_phong`) ON DELETE SET NULL,
  ADD CONSTRAINT `taisan_kho` FOREIGN KEY (`id_kho`) REFERENCES `tb_kho` (`id_kho`) ON DELETE SET NULL,
  ADD CONSTRAINT `taisan_toanha` FOREIGN KEY (`id_toanha`) REFERENCES `tb_toanha` (`id_toanha`) ON DELETE SET NULL;

--
-- Constraints for table `tb_tang`
--
ALTER TABLE `tb_tang`
  ADD CONSTRAINT `tang_toanha` FOREIGN KEY (`id_toanha`) REFERENCES `tb_toanha` (`id_toanha`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
