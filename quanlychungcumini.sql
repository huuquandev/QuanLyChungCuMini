-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 11:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `tb_canho_phong`
--

CREATE TABLE `tb_canho_phong` (
  `id_canho_phong` int(11) NOT NULL,
  `ten_canho_phong` varchar(50) NOT NULL,
  `ma_canho_phong` varchar(50) NOT NULL,
  `tang` int(11) NOT NULL,
  `id_toanha` int(11) NOT NULL,
  `so_nguoi_o` int(11) NOT NULL,
  `tienthue_canho_phong` decimal(10,0) NOT NULL,
  `tiencoc_canho_phong` decimal(10,0) NOT NULL,
  `dientich_canho_phong` double NOT NULL,
  `trangthai_canho_phong` int(11) NOT NULL,
  `tinhtrang_canho_phong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_canho_phong`
--

INSERT INTO `tb_canho_phong` (`id_canho_phong`, `ten_canho_phong`, `ma_canho_phong`, `tang`, `id_toanha`, `so_nguoi_o`, `tienthue_canho_phong`, `tiencoc_canho_phong`, `dientich_canho_phong`, `trangthai_canho_phong`, `tinhtrang_canho_phong`) VALUES
(1, 'Phòng 101', 'P014517', 1, 2, 3, 15000000, 15000000, 200, 1, 1),
(2, 'Phòng 102', 'P011254', 1, 1, 5, 10000000, 10000000, 150, 0, 0),
(3, 'Phòng 103', 'P012345', 1, 2, 1, 15000000, 15000000, 250, 1, 2),
(4, 'Phòng 101 HB', 'P022312', 1, 1, 4, 10000000, 10000000, 150, 1, 0),
(5, 'Phòng 203', 'P015789', 2, 1, 6, 15000000, 15000000, 250, 0, 2);

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
(1, 'Tòa nhà hòa bình', 'CH001392', 3, 1, '91 nguyễn chí thanh', 'Tỉnh Bắc Giang', 'Huyện Lạng Giang', 'Xã An Hà'),
(2, 'fpt securities', 'CH002345', 20, 0, '52 đường Lạc Long Quân', 'Thành phố Hà Nội', 'Quận Tây Hồ', 'Phường Bưởi'),
(29, 'Vinhome city', 'CH869889', 12, 1, '25 Nguyễn Khang', 'Tỉnh Bắc Giang', 'Huyện Tân Yên', 'Xã Việt Ngọc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_canho_phong`
--
ALTER TABLE `tb_canho_phong`
  ADD PRIMARY KEY (`id_canho_phong`),
  ADD KEY `canhophong_toanha` (`id_toanha`);

--
-- Indexes for table `tb_kho`
--
ALTER TABLE `tb_kho`
  ADD PRIMARY KEY (`id_kho`);

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
-- Indexes for table `tb_toanha`
--
ALTER TABLE `tb_toanha`
  ADD PRIMARY KEY (`id_toanha`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_canho_phong`
--
ALTER TABLE `tb_canho_phong`
  MODIFY `id_canho_phong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kho`
--
ALTER TABLE `tb_kho`
  MODIFY `id_kho` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_taisan`
--
ALTER TABLE `tb_taisan`
  MODIFY `id_taisan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_toanha`
--
ALTER TABLE `tb_toanha`
  MODIFY `id_toanha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_canho_phong`
--
ALTER TABLE `tb_canho_phong`
  ADD CONSTRAINT `canhophong_toanha` FOREIGN KEY (`id_toanha`) REFERENCES `tb_toanha` (`id_toanha`);

--
-- Constraints for table `tb_taisan`
--
ALTER TABLE `tb_taisan`
  ADD CONSTRAINT `taisan_canhophong` FOREIGN KEY (`id_canho_phong`) REFERENCES `tb_canho_phong` (`id_canho_phong`),
  ADD CONSTRAINT `taisan_kho` FOREIGN KEY (`id_kho`) REFERENCES `tb_kho` (`id_kho`),
  ADD CONSTRAINT `taisan_toanha` FOREIGN KEY (`id_toanha`) REFERENCES `tb_toanha` (`id_toanha`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
