-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for quanlychungcumini
DROP DATABASE IF EXISTS `quanlychungcumini`;
CREATE DATABASE IF NOT EXISTS `quanlychungcumini` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `quanlychungcumini`;

-- Dumping structure for table quanlychungcumini.code_confirm
DROP TABLE IF EXISTS `code_confirm`;
CREATE TABLE IF NOT EXISTS `code_confirm` (
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `code` varchar(6) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `md5` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `time_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table quanlychungcumini.code_confirm: ~0 rows (approximately)

-- Dumping structure for table quanlychungcumini.taikhoan
DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `avatar_uri` varchar(4000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT '../resource/images/defava.png',
  `rule` int NOT NULL DEFAULT '0',
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `gioitinh` varchar(6) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sdt` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table quanlychungcumini.taikhoan: ~10 rows (approximately)
INSERT INTO `taikhoan` (`id`, `username`, `password`, `fullname`, `avatar_uri`, `rule`, `email`, `gioitinh`, `sdt`) VALUES
	(1, 'admin', '123456', NULL, '	../resource/images/defava.png	', 0, '', '', ''),
	(2, 'ductai', '123456', 'Nguyen Duc Tai', '	../resource/images/defava.png	', 0, '', '', ''),
	(8, 'aaaaaaaaaa', 'aaaaaaaaaa', NULL, '../resource/images/defava.png', 0, '', '', ''),
	(9, '111111', '111111', NULL, '../resource/images/defava.png', 0, '', '', ''),
	(10, '1111111', '1111111', NULL, '../resource/images/defava.png', 0, '', '', ''),
	(11, 'kkkkkkkk', 'kkkkkkkk', NULL, '../resource/images/defava.png', 0, '', '', ''),
	(12, 'abcdeaaa', 'abcdeaaa', NULL, '../resource/images/defava.png', 0, '', '', ''),
	(13, 'adminqqqqq', 'adminqqqqq', '', '../resource/images/defava.png', 0, '', 'nam', '0123456489'),
	(14, 'adminqqq', 'adminqqq', '', '../resource/images/defava.png', 0, 'ccca22222cc@aaa.com', 'nam', '0123456489'),
	(15, 'dophuong', '123456', '', '../resource/images/defava.png', 0, 'dophuong211002@gmail.com', 'nam', '0123456489');

-- Dumping structure for table quanlychungcumini.tb_canho_phong
DROP TABLE IF EXISTS `tb_canho_phong`;
CREATE TABLE IF NOT EXISTS `tb_canho_phong` (
  `id_canho_phong` int NOT NULL AUTO_INCREMENT,
  `ten_canho_phong` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ma_canho_phong` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_toanha` int DEFAULT NULL,
  `so_nguoi_o` int NOT NULL,
  `tienthue_canho_phong` decimal(10,0) NOT NULL,
  `tiencoc_canho_phong` decimal(10,0) NOT NULL,
  `dientich_canho_phong` double NOT NULL,
  `trangthai_canho_phong` int NOT NULL,
  `tinhtrang_canho_phong` int NOT NULL,
  `id_tang` int NOT NULL,
  PRIMARY KEY (`id_canho_phong`),
  KEY `canhophong_toanha` (`id_toanha`),
  KEY `canhophong_tang` (`id_tang`),
  CONSTRAINT `canhophong_tang` FOREIGN KEY (`id_tang`) REFERENCES `tb_tang` (`id_tang`),
  CONSTRAINT `canhophong_toanha` FOREIGN KEY (`id_toanha`) REFERENCES `tb_toanha` (`id_toanha`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table quanlychungcumini.tb_canho_phong: ~2 rows (approximately)
INSERT INTO `tb_canho_phong` (`id_canho_phong`, `ten_canho_phong`, `ma_canho_phong`, `id_toanha`, `so_nguoi_o`, `tienthue_canho_phong`, `tiencoc_canho_phong`, `dientich_canho_phong`, `trangthai_canho_phong`, `tinhtrang_canho_phong`, `id_tang`) VALUES
	(7, '111', '121', 1, 2, 23232, 3232, 3232, 1, 1, 39),
	(8, '1112', '12', 29, 2, 34343, 34342, 333, 1, 1, 47);

-- Dumping structure for table quanlychungcumini.tb_dancu
DROP TABLE IF EXISTS `tb_dancu`;
CREATE TABLE IF NOT EXISTS `tb_dancu` (
  `cccd` int NOT NULL DEFAULT '0',
  `ten_hien_thi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `so_dien_thoai` int NOT NULL,
  `gioi_tinh` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `hinh_anh` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dia_chi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `ngay_sinh` date DEFAULT NULL,
  PRIMARY KEY (`cccd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table quanlychungcumini.tb_dancu: ~3 rows (approximately)
INSERT INTO `tb_dancu` (`cccd`, `ten_hien_thi`, `so_dien_thoai`, `gioi_tinh`, `hinh_anh`, `dia_chi`, `ngay_sinh`) VALUES
	(0, '112', 121, '1', '1', '1', '2023-12-04'),
	(12345678, 'Vũ thị Quyến', 1111, 'nu', 'images/anh/656df3c05a839_1111.jpg', '11', '1111-11-11'),
	(1111111115, 'Vũ Đăng Quyến2', 1111111111, 'nu', 'images/anh/656df8d3ecacf_.jpg', '121212212', '2001-11-10');

-- Dumping structure for table quanlychungcumini.tb_hopdong
DROP TABLE IF EXISTS `tb_hopdong`;
CREATE TABLE IF NOT EXISTS `tb_hopdong` (
  `id` int NOT NULL AUTO_INCREMENT,
  `bat_dau` date DEFAULT NULL,
  `ket_thuc` date DEFAULT NULL,
  `id_dan_cu` int NOT NULL DEFAULT '0',
  `id_can_ho_phong` int NOT NULL DEFAULT '0',
  `tong` int DEFAULT '0',
  `file_hop_dong` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_dan_cu` (`id_dan_cu`),
  KEY `id_can_ho_phong` (`id_can_ho_phong`),
  CONSTRAINT `FK__tb_canho_phong` FOREIGN KEY (`id_can_ho_phong`) REFERENCES `tb_canho_phong` (`id_canho_phong`),
  CONSTRAINT `FK_tb_hopdong_tb_dancu` FOREIGN KEY (`id_dan_cu`) REFERENCES `tb_dancu` (`cccd`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table quanlychungcumini.tb_hopdong: ~8 rows (approximately)
INSERT INTO `tb_hopdong` (`id`, `bat_dau`, `ket_thuc`, `id_dan_cu`, `id_can_ho_phong`, `tong`, `file_hop_dong`) VALUES
	(6, '2023-11-25', '2025-11-24', 33, 8, 824232, ''),
	(8, '2023-12-03', '2023-12-03', 13, 8, 7777, '1'),
	(9, '0111-11-11', '0112-01-10', 7, 8, 68686, '1'),
	(10, '1111-11-11', '1112-01-10', 9, 8, 68686, '1'),
	(11, '1111-11-11', '1112-01-10', 12, 8, 68686, 'file/hop_dong/656cad31df0ac_12.pdf'),
	(12, '2023-12-10', '2024-05-09', 8, 8, 171715, 'file/hop_dong/656cb3d7b133b_8.pdf'),
	(13, '2023-12-21', '2024-05-20', 13, 8, 171715, 'file/hop_dong/656cb405c0d65_.pdf'),
	(14, '1111-11-11', '1112-08-10', 12345678, 8, 309087, 'file/hop_dong/656e020b4c13e_.pdf');

-- Dumping structure for table quanlychungcumini.tb_kho
DROP TABLE IF EXISTS `tb_kho`;
CREATE TABLE IF NOT EXISTS `tb_kho` (
  `id_kho` int NOT NULL AUTO_INCREMENT,
  `ma_kho` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ten_kho` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `diachi_kho` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_kho`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table quanlychungcumini.tb_kho: ~0 rows (approximately)

-- Dumping structure for table quanlychungcumini.tb_taikhoan
DROP TABLE IF EXISTS `tb_taikhoan`;
CREATE TABLE IF NOT EXISTS `tb_taikhoan` (
  `id_taikhoan` int NOT NULL AUTO_INCREMENT,
  `tai_khoan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ho_ten` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `so_dt` int NOT NULL,
  `hinh_anh` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gioi_tinh` int NOT NULL DEFAULT '0',
  `role` int NOT NULL,
  `dia_chi` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id_taikhoan`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table quanlychungcumini.tb_taikhoan: ~29 rows (approximately)
INSERT INTO `tb_taikhoan` (`id_taikhoan`, `tai_khoan`, `mat_khau`, `ho_ten`, `ngay_sinh`, `so_dt`, `hinh_anh`, `gioi_tinh`, `role`, `dia_chi`) VALUES
	(1, 'huylohb123', 'huylohb123', 'Phạm Hữu Quân', NULL, 378452231, '', 1, 2, NULL),
	(2, '1', '1', '1', NULL, 1, '1', 1, 1, NULL),
	(3, '2', '2', '2', '2023-11-11', 2, '2', 2, 2, '2'),
	(4, '111', '12345a!', '1112', '0011-11-11', 111, '', 0, 2, '1212'),
	(5, '11', '12345a!', '11', '1111-11-11', 11, '', 0, 2, '111'),
	(6, '111', '12345a!', '11', '0111-11-11', 111, '', 0, 2, '11'),
	(7, '111', '12345a!', '111', '0011-11-11', 111, '', 0, 2, '11'),
	(8, '111111', '12345a!', '111', '1111-12-22', 111111, '', 0, 2, '11'),
	(9, '22', '12345a!', '112', '0222-02-22', 22, '', 0, 2, '22'),
	(10, '1113', '12345a!', '11', '1111-11-11', 1113, '', 0, 2, '111'),
	(11, '1111112', '12345a!', '111', '2002-12-11', 1111112, 'images/anh/6552385b93e51_1111112.jpg', 0, 2, '1212'),
	(12, '1212121', '12345a!', '111', '2023-11-13', 1212121, '', 0, 2, '111'),
	(13, '11246', '12345a!', 'Kiều đăng huy', '1111-11-11', 11246, '', 0, 2, '222'),
	(14, '112', '12345a!', '211', '0032-02-11', 112, '65523c7187a43_112.jpg', 0, 2, '23f'),
	(15, '1212', '12345a!', '1111', '0121-12-12', 1212, '65523cd011627_1212.jpg', 0, 2, '12121'),
	(16, '12121', '12345a!', '1111', '2001-02-21', 12121, 'images/anh/65523d0a93a23_12121.png', 0, 2, '21212'),
	(17, '111223', '12345a!', '111', '0012-11-11', 111223, 'images/anh/65523e3e70c44_111223.jpg', 0, 2, '1212'),
	(18, '2121', '12345a!', '2121', '0121-02-21', 2121, 'images/anh/65523ea0e434a_2121.png', 0, 2, '212121'),
	(19, '323232', '12345a!', '22', '2323-03-31', 323232, 'images/anh/65523f991d047_323232.jpg', 0, 2, '2323'),
	(20, '121214', '12345a!', '1121', '2001-12-12', 121214, 'images/anh/6552405b9de19_121214.png', 0, 2, '21212'),
	(21, '121234', '12345a!', '121', '0003-03-22', 121234, 'images/anh/65524177c634e_121234.jpg', 0, 2, '2121'),
	(22, '121234', '12345a!', '121', '0003-03-22', 121234, 'images/anh/65524178e2cea_121234.jpg', 0, 2, '2121'),
	(23, '1212324', '12345a!', '12112', '0003-03-22', 1212324, '', 0, 2, '2121'),
	(26, '111434', '12345a!', '11', '2333-12-11', 111434, '', 0, 2, '1212122'),
	(27, '1114342', '12345a!', '11', '2333-12-11', 1114342, '', 0, 2, '1212122'),
	(31, '123456789', '12345a!', '11', '2333-12-11', 123456789, 'images/anh/655250f14c159_123456789.png', 0, 2, '111111'),
	(32, '12343', '12345a!1', 'Phạm văn a1211', '2001-12-12', 123432121, 'images/anh/6558f54dafd55_.jpg', 0, 2, '2121212'),
	(33, '0359758921', '12345a!', 'Vũ thị Quyến', '2023-11-20', 359758921, 'images/anh/655b8e6608d94_.jpg', 0, 2, 'Hải Dương'),
	(34, '0359758922', '12345a!', 'Vũ thị Quyến', '2023-11-20', 359758922, 'images/anh/655b8d945495a_0359758922.jpg', 0, 2, 'Hải Dương');

-- Dumping structure for table quanlychungcumini.tb_taisan
DROP TABLE IF EXISTS `tb_taisan`;
CREATE TABLE IF NOT EXISTS `tb_taisan` (
  `id_taisan` int NOT NULL AUTO_INCREMENT,
  `ten_taisan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ma_taisan` int NOT NULL,
  `thuong_hieu` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `mau_sac` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nam_sanxuat` int NOT NULL,
  `gia_tri` decimal(10,0) NOT NULL,
  `tinh_trang` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kho` int DEFAULT NULL,
  `id_toanha` int DEFAULT NULL,
  `id_canho_phong` int DEFAULT NULL,
  `vi_tri` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_taisan`),
  KEY `taisan_kho` (`id_kho`),
  KEY `taisan_canhophong` (`id_canho_phong`),
  KEY `taisan_toanha` (`id_toanha`),
  CONSTRAINT `taisan_canhophong` FOREIGN KEY (`id_canho_phong`) REFERENCES `tb_canho_phong` (`id_canho_phong`),
  CONSTRAINT `taisan_kho` FOREIGN KEY (`id_kho`) REFERENCES `tb_kho` (`id_kho`),
  CONSTRAINT `taisan_toanha` FOREIGN KEY (`id_toanha`) REFERENCES `tb_toanha` (`id_toanha`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table quanlychungcumini.tb_taisan: ~0 rows (approximately)

-- Dumping structure for table quanlychungcumini.tb_tang
DROP TABLE IF EXISTS `tb_tang`;
CREATE TABLE IF NOT EXISTS `tb_tang` (
  `id_tang` int NOT NULL AUTO_INCREMENT,
  `id_toanha` int DEFAULT NULL,
  `ten_tang` int NOT NULL,
  PRIMARY KEY (`id_tang`),
  KEY `tang_toanha` (`id_toanha`),
  CONSTRAINT `tang_toanha` FOREIGN KEY (`id_toanha`) REFERENCES `tb_toanha` (`id_toanha`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table quanlychungcumini.tb_tang: ~14 rows (approximately)
INSERT INTO `tb_tang` (`id_tang`, `id_toanha`, `ten_tang`) VALUES
	(36, 2, 1),
	(37, 2, 2),
	(38, 2, 3),
	(39, 1, 1),
	(40, 1, 2),
	(42, 29, 1),
	(43, 29, 2),
	(44, 29, 3),
	(45, 29, 5),
	(46, 29, 6),
	(47, 29, 7),
	(48, 29, 9),
	(49, 29, 9),
	(50, 29, 10);

-- Dumping structure for table quanlychungcumini.tb_toanha
DROP TABLE IF EXISTS `tb_toanha`;
CREATE TABLE IF NOT EXISTS `tb_toanha` (
  `id_toanha` int NOT NULL AUTO_INCREMENT,
  `ten_toanha` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ma_toanha` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `so_tang` int NOT NULL,
  `trangthai_toanha` int NOT NULL,
  `diachi_chitiet` text COLLATE utf8mb4_general_ci NOT NULL,
  `tinhthanh` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `quanhuyen` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phuongxa` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_toanha`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table quanlychungcumini.tb_toanha: ~5 rows (approximately)
INSERT INTO `tb_toanha` (`id_toanha`, `ten_toanha`, `ma_toanha`, `so_tang`, `trangthai_toanha`, `diachi_chitiet`, `tinhthanh`, `quanhuyen`, `phuongxa`) VALUES
	(1, 'Tòa nhà hòa bình', 'CH001392', 3, 1, '91 nguyễn chí thanh', 'Tỉnh Bắc Giang', 'Huyện Lạng Giang', 'Xã An Hà'),
	(2, 'fpt securities', 'CH002345', 20, 0, '52 đường Lạc Long Quân', 'Thành phố Hà Nội', 'Quận Tây Hồ', 'Phường Bưởi'),
	(29, 'Vinhome city', 'CH869889', 12, 1, '25 Nguyễn Khang', 'Tỉnh Bắc Giang', 'Huyện Tân Yên', 'Xã Việt Ngọc'),
	(32, '1', 'CH039335', 2, 0, '1', 'Tỉnh Hà Giang', 'Huyện Yên Minh', 'Xã Sủng Tráng'),
	(33, '2', 'CH693642', 2, 0, '2', 'Tỉnh Hà Giang', 'Huyện Mèo Vạc', 'Xã Pải Lủng');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
