-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2023 lúc 08:37 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

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
-- Cấu trúc bảng cho bảng `payment`
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
-- Cấu trúc bảng cho bảng `tb_baotri_suachua`
--

CREATE TABLE `tb_baotri_suachua` (
  `id_baotri_suachua` int(11) NOT NULL,
  `id_toanha` int(11) DEFAULT NULL,
  `id_phong` int(11) DEFAULT NULL,
  `ma_baotri_suachua` varchar(50) NOT NULL,
  `tieude_baotri_suachua` varchar(100) NOT NULL,
  `mota_baotri_suachua` text NOT NULL,
  `loai_cong_viec` varchar(50) DEFAULT NULL,
  `mucdo_uutien` int(11) NOT NULL,
  `ngay_batdau` datetime NOT NULL,
  `ngay_ketthuc` datetime NOT NULL,
  `id_taikhoan` int(11) DEFAULT NULL,
  `trang_thai` int(11) NOT NULL,
  `ngay_lam` datetime DEFAULT NULL,
  `ngay_hoanthanh` datetime DEFAULT NULL,
  `ngay_duyet` datetime DEFAULT NULL,
  `mota_hoanhthanh` text DEFAULT NULL,
  `mota_lydokhongdat` text DEFAULT NULL,
  `id_nguoiduyet` int(11) DEFAULT NULL,
  `id_nguoitao` int(11) NOT NULL,
  `id_nguoihoanthanh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_baotri_suachua`
--

INSERT INTO `tb_baotri_suachua` (`id_baotri_suachua`, `id_toanha`, `id_phong`, `ma_baotri_suachua`, `tieude_baotri_suachua`, `mota_baotri_suachua`, `loai_cong_viec`, `mucdo_uutien`, `ngay_batdau`, `ngay_ketthuc`, `id_taikhoan`, `trang_thai`, `ngay_lam`, `ngay_hoanthanh`, `ngay_duyet`, `mota_hoanhthanh`, `mota_lydokhongdat`, `id_nguoiduyet`, `id_nguoitao`, `id_nguoihoanthanh`) VALUES
(41, 1, 13, 'BT272657', 'eqweqw', 'eqwe', 'eqw', 1, '2023-12-28 03:41:04', '2023-12-31 12:00:00', 1, 3, '2023-12-19 03:49:46', '2023-12-19 03:49:00', '2023-12-19 03:49:52', 'eqwe', NULL, 1, 1, 1),
(47, 1, 13, 'BT631567', 'eqwe', 'qưeq', 'eqw', 1, '2023-12-20 19:15:09', '2023-12-12 12:00:00', 1, 3, '2023-12-21 14:27:52', '2023-12-21 14:28:00', '2023-12-21 14:33:17', 'eqweqw', NULL, 1, 1, 1),
(48, 1, 13, 'BT797452', 'eqwe', 'qưeqw', 'eqwe', 1, '2023-12-21 10:22:24', '2023-12-20 12:00:00', 1, 3, '2023-12-21 14:28:13', '2023-12-21 14:28:00', '2023-12-21 14:33:37', 'eqweqwe', NULL, 1, 1, 1),
(52, 1, 13, 'BT607408', 'ưeqw', 'eqweq', 'eqwe', 1, '2023-12-21 10:39:56', '2023-12-20 12:00:00', 1, 3, '2023-12-21 14:28:15', '2023-12-21 14:28:00', '2023-12-21 14:38:06', 'eqweqw', NULL, 1, 1, 1),
(53, 1, 13, 'BT974866', 'eqwe', 'qưeq', 'eqwe', 1, '2023-12-21 10:45:42', '2023-12-20 12:00:00', 1, 4, '2023-12-21 14:28:18', '2023-12-21 14:28:00', '2023-12-21 14:38:11', 'eqweqw', '2eqwe', 1, 1, 1),
(54, 1, 13, 'BT214478', 'eqwe', 'eqwe', '1eqw', 1, '2023-12-22 01:48:06', '2023-12-05 12:00:00', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0);

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
  `id_tang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_canho_phong`
--

INSERT INTO `tb_canho_phong` (`id_canho_phong`, `ten_canho_phong`, `ma_canho_phong`, `id_toanha`, `so_nguoi_o`, `tienthue_canho_phong`, `tiencoc_canho_phong`, `dientich_canho_phong`, `trangthai_canho_phong`, `tinhtrang_canho_phong`, `id_tang`) VALUES
(13, 'P-101', 'P015693', 1, 5, 4000000, 4000000, 100, 1, 1, 40),
(18, '312', 'P096400', 1, 12, 400000, 4000000, 100, 0, 1, 39),
(20, 'eqweqw', 'P826292', 29, 1, 400000, 4000000, 100, 0, 1, 44),
(21, 'eqweqwe', 'P991560', 29, 12, 321321, 3213, 21321, 0, 0, 51);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_dancu`
--

CREATE TABLE `tb_dancu` (
  `id_dancu` int(11) NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `so_dien_thoai` varchar(20) NOT NULL,
  `cccd` varchar(50) NOT NULL,
  `gioi_tinh` int(11) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `hinh_anh` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_dancu`
--

INSERT INTO `tb_dancu` (`id_dancu`, `ho_ten`, `so_dien_thoai`, `cccd`, `gioi_tinh`, `dia_chi`, `ngay_sinh`, `hinh_anh`, `email`) VALUES
(1, 'wqeqwe', '0654654432', '04324324', 1, 'eqwewqe', '2023-12-06', 'ewqeqw', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_dichvu`
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
-- Đang đổ dữ liệu cho bảng `tb_dichvu`
--

INSERT INTO `tb_dichvu` (`id_dichvu`, `ma_dichvu`, `loai_dichvu`, `mota_dichvu`, `ten_dichvu`, `tinhtrang_dichvu`, `donvigia_dichvu`, `gia_dichvu`) VALUES
(1, '', '1', 'De xe', 'De xe', 1, 0, 100000),
(2, '', '2', 'Bao ve', 'Bao ve', 1, 0, 100000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_dichvu_canhophong`
--

CREATE TABLE `tb_dichvu_canhophong` (
  `id_dichvu_canhophong` int(11) NOT NULL,
  `id_canhophong` int(11) DEFAULT NULL,
  `id_dichvu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_hinhanh`
--

CREATE TABLE `tb_hinhanh` (
  `id_hinhanh` int(11) NOT NULL,
  `id_loaihinhanh` int(11) NOT NULL,
  `type_hinhanh` varchar(50) NOT NULL,
  `url_hinhanh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_hinhanh`
--

INSERT INTO `tb_hinhanh` (`id_hinhanh`, `id_loaihinhanh`, `type_hinhanh`, `url_hinhanh`) VALUES
(34, 41, 'Bảo trì sửa chữa hoàn thành', 'img_658021eca0f77.png'),
(35, 41, 'Bảo trì sửa chữa hoàn thành', 'img_658021eca2024.png'),
(36, 41, 'Bảo trì sửa chữa hoàn thành', 'img_658021eca2e9d.png'),
(38, 47, 'Bảo trì sửa chữa', 'img_6582dacd4a415.jpg'),
(54, 48, 'Bảo trì sửa chữa', 'img_6583af702d2d0.jpg'),
(55, 48, 'Bảo trì sửa chữa', 'img_6583af702e0ad.png'),
(56, 48, 'Bảo trì sửa chữa', 'img_6583af702ee9c.png'),
(60, 52, 'Bảo trì sửa chữa', 'img_6583b38ce7e4d.jpg'),
(61, 52, 'Bảo trì sửa chữa', 'img_6583b38ce8e9f.png'),
(62, 52, 'Bảo trì sửa chữa', 'img_6583b38cea037.png'),
(63, 53, 'Bảo trì sửa chữa', 'img_6583b4e622baa.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_hoadon`
--

CREATE TABLE `tb_hoadon` (
  `id` int(11) NOT NULL,
  `id_DV` int(11) NOT NULL,
  `id_hopdong` int(11) NOT NULL,
  `loai` int(11) NOT NULL,
  `ngay_het_han` datetime NOT NULL,
  `ngay_tao` datetime NOT NULL,
  `ngay_thanh_toan` datetime DEFAULT NULL,
  `gia` decimal(10,0) NOT NULL,
  `tinhtrang` varchar(20) NOT NULL DEFAULT 'Chưa thanh toán'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_hoadon`
--

INSERT INTO `tb_hoadon` (`id`, `id_DV`, `id_hopdong`, `loai`, `ngay_het_han`, `ngay_tao`, `ngay_thanh_toan`, `gia`, `tinhtrang`) VALUES
(8, 2, 3, 0, '2023-12-07 02:34:00', '2023-12-22 02:33:29', NULL, 2313, 'Đã thanh toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_hopdong`
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
-- Đang đổ dữ liệu cho bảng `tb_hopdong`
--

INSERT INTO `tb_hopdong` (`id`, `id_canho_phong`, `id_dancu`, `ngay_batdau`, `ngay_ketthuc`, `thoi_han_hop_dong`, `gia`, `tong`, `filehopdong`) VALUES
(3, 20, 1, '2023-12-06 00:00:00', '2024-10-05 00:00:00', '10', 400000, 4000000, 'file/hop_dong/65848e85b2461_1.pdf');

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

--
-- Đang đổ dữ liệu cho bảng `tb_kho`
--

INSERT INTO `tb_kho` (`id_kho`, `ma_kho`, `ten_kho`, `diachi_kho`) VALUES
(1, 'MK023256', 'Kho hàng vật liệu', 'Hà nội'),
(2, 'MK024216', 'Kho đồ gia dụng', 'Tòa 1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_sudungdichvu`
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
(1, 'huylohb123', 'huylohb123', 'Phạm Hữu Quân', 378452231, 1, '4dc94d35aa38369639dfb276a1619673.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_taisan`
--

CREATE TABLE `tb_taisan` (
  `id_taisan` int(11) NOT NULL,
  `ten_taisan` varchar(50) NOT NULL,
  `ma_taisan` varchar(50) NOT NULL,
  `thuong_hieu` varchar(50) DEFAULT NULL,
  `mau_sac` varchar(50) DEFAULT NULL,
  `nam_sanxuat` int(11) DEFAULT NULL,
  `xuat_xu` varchar(255) DEFAULT NULL,
  `gia_tri` decimal(10,0) DEFAULT NULL,
  `tinh_trang` varchar(50) DEFAULT NULL,
  `thoihanbaohanh` date DEFAULT NULL,
  `id_kho` int(11) DEFAULT NULL,
  `id_toanha` int(11) DEFAULT NULL,
  `id_canho_phong` int(11) DEFAULT NULL,
  `id_tang` int(11) DEFAULT NULL,
  `vi_tri` varchar(50) DEFAULT NULL,
  `ghi_chu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_taisan`
--

INSERT INTO `tb_taisan` (`id_taisan`, `ten_taisan`, `ma_taisan`, `thuong_hieu`, `mau_sac`, `nam_sanxuat`, `xuat_xu`, `gia_tri`, `tinh_trang`, `thoihanbaohanh`, `id_kho`, `id_toanha`, `id_canho_phong`, `id_tang`, `vi_tri`, `ghi_chu`) VALUES
(38, 'eqweqw', 'TS530012', '', 'ewqewq', 0, '', 0, '', '0000-00-00', 1, 1, 18, 39, '', ''),
(39, 'eqwe', 'TS470301', '', '', 0, '', 0, '', '0000-00-00', 1, 1, 18, 39, '', ''),
(40, 'eqwe', 'TS616381', '', '', 0, '', 0, '', '0000-00-00', 1, 1, 18, 39, '', '');

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
(29, 'Vinhome city', 'CH869889', 12, 1, '25 Nguyễn Khang', 'Tỉnh Bắc Giang', 'Huyện Tân Yên', 'Xã Việt Ngọc'),
(72, 'Tòa nhà an bình', 'CH344573', 12, 0, '3123', 'Tỉnh Hà Giang', 'Huyện Đồng Văn', 'Xã Lũng Cú');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_momo`);

--
-- Chỉ mục cho bảng `tb_baotri_suachua`
--
ALTER TABLE `tb_baotri_suachua`
  ADD PRIMARY KEY (`id_baotri_suachua`),
  ADD KEY `baotrisuachua_phong` (`id_phong`),
  ADD KEY `baotrisuachua_toanha` (`id_toanha`),
  ADD KEY `baotrisuachua_taikhoan` (`id_taikhoan`);

--
-- Chỉ mục cho bảng `tb_canho_phong`
--
ALTER TABLE `tb_canho_phong`
  ADD PRIMARY KEY (`id_canho_phong`),
  ADD KEY `canhophong_toanha` (`id_toanha`),
  ADD KEY `canhophong_tang` (`id_tang`);

--
-- Chỉ mục cho bảng `tb_dancu`
--
ALTER TABLE `tb_dancu`
  ADD PRIMARY KEY (`id_dancu`);

--
-- Chỉ mục cho bảng `tb_dichvu`
--
ALTER TABLE `tb_dichvu`
  ADD PRIMARY KEY (`id_dichvu`);

--
-- Chỉ mục cho bảng `tb_dichvu_canhophong`
--
ALTER TABLE `tb_dichvu_canhophong`
  ADD PRIMARY KEY (`id_dichvu_canhophong`),
  ADD KEY `tb_canho_phong` (`id_canhophong`),
  ADD KEY `tb_dichvu` (`id_dichvu`);

--
-- Chỉ mục cho bảng `tb_hinhanh`
--
ALTER TABLE `tb_hinhanh`
  ADD PRIMARY KEY (`id_hinhanh`);

--
-- Chỉ mục cho bảng `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoadon_hopdong` (`id_hopdong`),
  ADD KEY `hoadon_dichvu` (`id_DV`);

--
-- Chỉ mục cho bảng `tb_hopdong`
--
ALTER TABLE `tb_hopdong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hopdong_canhophong` (`id_canho_phong`),
  ADD KEY `hopdong_dancu` (`id_dancu`);

--
-- Chỉ mục cho bảng `tb_kho`
--
ALTER TABLE `tb_kho`
  ADD PRIMARY KEY (`id_kho`);

--
-- Chỉ mục cho bảng `tb_sudungdichvu`
--
ALTER TABLE `tb_sudungdichvu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sudung_dichvu` (`id_DV`),
  ADD KEY `sudung_canhophong` (`id_canho_phong`);

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
  ADD KEY `taisan_toanha` (`id_toanha`),
  ADD KEY `taisan_tang` (`id_tang`);

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
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `id_momo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_baotri_suachua`
--
ALTER TABLE `tb_baotri_suachua`
  MODIFY `id_baotri_suachua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `tb_canho_phong`
--
ALTER TABLE `tb_canho_phong`
  MODIFY `id_canho_phong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tb_dancu`
--
ALTER TABLE `tb_dancu`
  MODIFY `id_dancu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tb_dichvu`
--
ALTER TABLE `tb_dichvu`
  MODIFY `id_dichvu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tb_dichvu_canhophong`
--
ALTER TABLE `tb_dichvu_canhophong`
  MODIFY `id_dichvu_canhophong` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_hinhanh`
--
ALTER TABLE `tb_hinhanh`
  MODIFY `id_hinhanh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tb_hopdong`
--
ALTER TABLE `tb_hopdong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tb_kho`
--
ALTER TABLE `tb_kho`
  MODIFY `id_kho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tb_sudungdichvu`
--
ALTER TABLE `tb_sudungdichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tb_taisan`
--
ALTER TABLE `tb_taisan`
  MODIFY `id_taisan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `tb_tang`
--
ALTER TABLE `tb_tang`
  MODIFY `id_tang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `tb_toanha`
--
ALTER TABLE `tb_toanha`
  MODIFY `id_toanha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_baotri_suachua`
--
ALTER TABLE `tb_baotri_suachua`
  ADD CONSTRAINT `baotrisuachua_phong` FOREIGN KEY (`id_phong`) REFERENCES `tb_canho_phong` (`id_canho_phong`) ON DELETE SET NULL,
  ADD CONSTRAINT `baotrisuachua_toanha` FOREIGN KEY (`id_toanha`) REFERENCES `tb_toanha` (`id_toanha`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `tb_canho_phong`
--
ALTER TABLE `tb_canho_phong`
  ADD CONSTRAINT `canhophong_tang` FOREIGN KEY (`id_tang`) REFERENCES `tb_tang` (`id_tang`) ON DELETE SET NULL,
  ADD CONSTRAINT `canhophong_toanha` FOREIGN KEY (`id_toanha`) REFERENCES `tb_toanha` (`id_toanha`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `tb_dichvu_canhophong`
--
ALTER TABLE `tb_dichvu_canhophong`
  ADD CONSTRAINT `tb_canho_phong` FOREIGN KEY (`id_canhophong`) REFERENCES `tb_canho_phong` (`id_canho_phong`) ON DELETE SET NULL,
  ADD CONSTRAINT `tb_dichvu` FOREIGN KEY (`id_dichvu`) REFERENCES `tb_dichvu` (`id_dichvu`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  ADD CONSTRAINT `hoadon_dichvu` FOREIGN KEY (`id_DV`) REFERENCES `tb_dichvu` (`id_dichvu`),
  ADD CONSTRAINT `hoadon_hopdong` FOREIGN KEY (`id_hopdong`) REFERENCES `tb_hopdong` (`id`);

--
-- Các ràng buộc cho bảng `tb_hopdong`
--
ALTER TABLE `tb_hopdong`
  ADD CONSTRAINT `hopdong_canhophong` FOREIGN KEY (`id_canho_phong`) REFERENCES `tb_canho_phong` (`id_canho_phong`),
  ADD CONSTRAINT `hopdong_dancu` FOREIGN KEY (`id_dancu`) REFERENCES `tb_dancu` (`id_dancu`);

--
-- Các ràng buộc cho bảng `tb_sudungdichvu`
--
ALTER TABLE `tb_sudungdichvu`
  ADD CONSTRAINT `sudung_canhophong` FOREIGN KEY (`id_canho_phong`) REFERENCES `tb_canho_phong` (`id_canho_phong`),
  ADD CONSTRAINT `sudung_dichvu` FOREIGN KEY (`id_DV`) REFERENCES `tb_dichvu` (`id_dichvu`);

--
-- Các ràng buộc cho bảng `tb_tang`
--
ALTER TABLE `tb_tang`
  ADD CONSTRAINT `tang_toanha` FOREIGN KEY (`id_toanha`) REFERENCES `tb_toanha` (`id_toanha`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
