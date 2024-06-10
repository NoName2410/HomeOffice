-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 10, 2024 at 05:45 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeoffice`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chitietdonhang`
--

CREATE TABLE `tbl_chitietdonhang` (
  `id` int(4) NOT NULL,
  `idsp` int(4) NOT NULL,
  `iddh` int(4) NOT NULL,
  `slm` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_chitietdonhang`
--

INSERT INTO `tbl_chitietdonhang` (`id`, `idsp`, `iddh`, `slm`) VALUES
(22, 45, 26, 1),
(23, 53, 26, 5),
(24, 36, 27, 1),
(25, 43, 27, 2),
(26, 47, 28, 10),
(27, 51, 28, 15),
(28, 52, 29, 100),
(29, 54, 29, 10),
(30, 46, 30, 1),
(31, 47, 30, 1),
(32, 48, 30, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id` int(4) NOT NULL,
  `tendm` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `uutien` int(4) NOT NULL DEFAULT '0',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id`, `tendm`, `uutien`, `hienthi`) VALUES
(17, 'Nội thất văn phòng', 0, 0),
(18, 'Phòng khách', 0, 0),
(19, 'Bếp & Phòng ăn', 0, 0),
(20, 'Phòng ngủ', 0, 0),
(21, 'Phòng làm việc ', 0, 0),
(22, 'Phòng tắm', 0, 0),
(23, 'Bàn ghế Cafe - Ngoài trời', 0, 0),
(24, 'Trường học', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `id` int(4) NOT NULL,
  `idkh` int(4) NOT NULL,
  `payment` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`id`, `idkh`, `payment`, `address`, `status`) VALUES
(26, 10, '2', '08a, Hồ Tùng Mậu, Hà Nội', '0'),
(27, 11, '1', '30l, Ngách 18, Hai Bà Trưng', '1'),
(28, 12, '3', '15 Minh Khai, Quảng Xương, Thanh Hóa', '1'),
(29, 13, '2', 'Nhà thờ Đức Bà, Hồ Chí Minh', '0'),
(30, 14, '1', '45b, Hà Đông, Hà Nội', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id` int(4) NOT NULL,
  `tensp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` double(10,0) NOT NULL DEFAULT '0',
  `iddm` int(4) NOT NULL,
  `soluong` int(4) NOT NULL,
  `mota` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id`, `tensp`, `img`, `gia`, `iddm`, `soluong`, `mota`) VALUES
(34, 'Bàn cụm 2 240x60cm gỗ Plywood phủ melamin chân Xco', '../uploaded/ban-cum2.jpg', 2821000, 17, 100, 'Bàn cụm 2 240x60cm gỗ Plywood phủ melamin chân Xconcept HBXC037 với mặt bàn gỗ Plywood cốt gỗ tự nhiên bề mặt phủ melamin được xử lý chống thấm nước và cong vênh, mặt bàn màu bê tông độc đáo chắc chắn'),
(35, 'Bàn làm việc 160x60cm gỗ cao su chân sắt Aconcept ', '../uploaded/ban-lam-viec.jpg', 2255000, 17, 120, 'Bàn làm việc hệ Aconcept HBAC026 với kích thước mặt bàn 160x60cm rất lớn dành cho các bạn có nhu cầu diện tích sử dụng bề mặt bàn dài cần không gian làm việc rộng rãi, bàn với chất liệu gỗ cao su tiêu'),
(36, 'Bàn giám đốc 160x140 MConcept chân sắt lắp ráp HBM', '../uploaded/ban-giam-doc.jpg', 7001000, 17, 49, 'Bàn Giám Đốc HBMC022 MConcept chân sắt chữ nhật 25x50. Bàn văn phòng gỗ cao su ghép tiêu chuẩn AA dày 17mm PU màu gỗ tự nhiên luôn có một vẻ đẹp riêng, thân thiện với môi trường, đối với các văn phòng'),
(37, 'Kệ góc tường có ngăn tủ 35x35x160cm gỗ cao su KGT6', '../uploaded/ke-goc-tuong.jpg', 1850000, 18, 65, 'Kệ góc tường KGT68030 được thiết kế với 4 tầng kệ mở bên trên và 1 ngăn tủ có 2 ngăn bên dưới, giúp bạn dễ dàng sắp xếp và lưu trữ các loại đồ dùng khác nhau như sách vở, đồ trang trí, vật dụng cá nhâ'),
(38, 'Bàn console 120x30x85cm mặt đá ceramic chân sắt CS', '../uploaded/banconsole.jpg', 4250000, 18, 79, 'Bàn Console CST091gây ấn tượng với kiểu dáng chân bàn đầy sáng tạo. Khung chân được thiết kế cách điệu giúp tạo điểm nhấn, mang đến vẻ đẹp độc đáo và sang trọng cho không gian sống. Bàn Console không '),
(39, 'Bàn sofa đôi mặt đá ceramic chân sắt TT68296', '../uploaded/ban-sofa-doi.jpg', 4599000, 18, 140, 'Bàn sofa đôi TT68296 sở hữu hệ khung chân sắt được tạo hình chắc chắn, bo góc mềm mại tạo nên nét tinh tế cho tổng thể thiết kế. Chất liệu đá ceramic cao cấp cho mặt bàn mang đến vẻ đẹp sang trọng và '),
(40, 'Xe đẩy rượu trà 35x68x82cm mặt đá SST037', '../uploaded/xe-day-ruou.jpg', 2, 19, 48, 'Xe đẩy rượu SST037 sở hữu thiết kế 3 tầng kệ với các đường nét oval mềm mại, tạo nên vẻ đẹp sang trọng và tinh tế cho không gian nội thất. Các tầng được thiết kế với độ cao hợp lý, giúp bạn dễ dàng sắ'),
(41, 'Ghế SECCO gỗ cao su lưng lưới mắt cáo GCF217', '../uploaded/ghe-secco.jpg', 890000, 19, 58, 'Ghế Secco GCF217 nổi bật với khung gỗ cao su tự nhiên được sơn PU cao cấp, mang đến vẻ đẹp sang trọng và độ bền bỉ vượt thời gian. Lớp sơn bóng mịn không chỉ làm tôn lên vân gỗ tự nhiên mà còn bảo vệ '),
(42, 'Kệ bếp di động KONA II 120x40x80cm gỗ cao su KB680', '../uploaded/ke-nha-bep.jpg', 3811000, 19, 158, 'Với thiết kế hiện đại và đa chức năng, kệ bàn bếp KONA II mang đến sự linh hoạt tối ưu cho không gian bếp của bạn. Kệ bàn bếp KONA II được trang bị nhiều ngăn kệ mở rộng rãi, giúp bạn dễ dàng sắp xếp '),
(43, 'Giá treo quần áo 100x35x165cm gỗ tre KGT002', '../uploaded/ke-treo.jpg', 1400000, 20, 45, 'THÔNG TIN CHI TIẾT SẢN PHẨM  Mã sản phẩm: KGT002 Hướng dẫn sử dụng: Kệ treo quần áo,... Chất liệu: Ván tre ép, đã xử lý chà nhám và phủ chống thấm Màu sắc: Tự nhiên Kích thước (DxRxC): 100x35x165cm Bả'),
(44, 'Bàn trang điểm nhỏ 60x50x135cm gỗ cao su BTD68071', '../uploaded/ban-trang-diem.jpg', 2061000, 20, 450, 'Bàn trang điểm BTD68071 sở hữu kiểu dáng đơn giản, hiện đại với những đường nét thiết kế thanh lịch. Gương trang điểm gắn liền với mặt bàn tạo nên sự tiện lợi cho việc trang điểm và chăm sóc da. Khung'),
(45, 'Combo Nội Thất Phòng Ngủ PN025', '../uploaded/combo-phong-ngu.png', 28890000, 20, 59, 'Combo Nội Thất Phòng Ngủ PN025 bộ sản phẩm kích thước lớn dành cho phòng ngủ rộng rãi với giường ngủ 1.6m dành cho hai người nằm được làm từ gỗ tràm dày 15mm rất đẹp và chắc chắn, kệ đầu giường đơn gi'),
(46, 'Bàn làm việc 120x50cm gỗ cao su SPD68220', '../uploaded/ban-lam-viec-chan-sat.jpg', 945000, 21, 189, 'Bàn làm việc SPD68220 là lựa chọn hoàn hảo cho những ai đang tìm kiếm một không gian làm việc gọn gàng, ngăn nắp và đầy cảm hứng. Bàn làm việc đơn giản SPD68220 sở hữu thiết kế thanh mảnh với đường né'),
(47, 'Ghế Ergonomic công thái học lưng lưới CTH-57', '../uploaded/ghe-ergonomic.jpg', 5035000, 21, 47, 'Ghế Ergonomic công thái học lưng lưới CTH-57 là mẫu ghế đã được nghiên cứu và chế tạo dựa trên các nghiên cứu khoa học về quá trình và khả năng duy trì hiệu suất lao động của con người nhằm tạo ra dòn'),
(48, 'Tủ phụ bàn làm việc 40x60x73cm gỗ cao su TCN68052', '../uploaded/tu-phu-ban.jpg', 2760000, 21, 566, 'Tủ phụ bàn làm việc TCN68052 sử dụng hoàn toàn gỗ cao su ghép tiêu chuẩn AA, xử lý PU chống nước chống thấm, bền bỉ với thời gian, màu sắc đẹp, kích thước tủ sâu giúp để nhiều vật dụng hơn. Ngoài là t'),
(49, 'Kệ máy giặt 70x60x140cm gỗ cao su KMG68017', '../uploaded/ke-may-gian.jpg', 2150000, 22, 57, 'Kệ máy giặt KMG68017 có ngăn tủ bên trên rộng rãi, có thể để được nhiều đồ đạc như nước giặt, nước xả vải, bột giặt... giúp bạn tiết kiệm diện tích và giữ cho khu vực giặt giũ luôn gọn gàng, ngăn nắp.'),
(50, 'Giá treo đồ phòng tắm khung sắt sơn tĩnh điện KPT6', '../uploaded/gia-tre-do.jpg', 1790000, 22, 56, 'THÔNG TIN CHI TIẾT SẢN PHẨM :  Hướng dẫn sử dụng: Giỏ để đồ trong phòng tắm Chất liệu: khung sắt, mặt đế giả đá Kích thước (DxRxC) : 60x30x170cm Màu sắc : Trắng - Đen - Vàng Đồng. Bảo hành : 12 Tháng.'),
(51, 'Bàn cafe vuông 60x60cm chân sắt sơn tĩnh điện CFD6', '../uploaded/ban-cafe.jpg', 1150000, 23, 443, 'Bàn cafe CFD68223 sở hữu kiểu dáng đơn giản, hiện đại, phù hợp với mọi không gian nội thất. Mặt bàn chữ nhật với kích thước 60x60cm được vát cạnh mềm mại, tạo cảm giác an toàn và thoải mái khi sử dụng'),
(52, 'Ghế ăn nhựa đúc cao cấp GAIA01', '../uploaded/ghe-nhua-duc.jpg', 640000, 23, 468, 'Ghế nhựa GAIA sở hữu kiểu dáng hiện đại, thanh lịch với những đường nét thiết kế tinh tế, gọn gàng. Lưng ghế được thiết kế uốn cong mềm mại, ôm sát cơ thể, tạo cảm giác thoải mái khi ngồi. Chân ghế đư'),
(53, 'Combo bàn ghế nhôm ngoài trời giả mây CBCF307', '../uploaded/bo-ban-ghe.jpg', 4650000, 23, 115, 'Trong combo CBCF307 bao gồm 1 bàn vuông ngoài trời và 2 ghế ngoài trời'),
(54, 'Combo bộ bàn học sinh có ngăn 140x50cm và 2 ghế họ', '../uploaded/combo-ban-hoc.jpg', 3490000, 24, 36, 'Bộ bàn ghế học sinh BGHS004 bao gồm 1 bàn đơn có hộc và 1 ghế gỗ dành cho 1 học sinh ngồi. Chất liệu sử dụng là gỗ cao su tiêu chuẩn AA dày 17mm sơn PU hoàn thiện màu sắc tự nhiên kết hợp với khung ch'),
(56, 'Ghế xoay di động nệm tròn có tựa lưng MFH219B', '../uploaded/ghe-bar-thap.jpg', 1050000, 24, 357, 'Ghế xoay nệm tròn có tựa lưng MFH219B được thiết kế và sản xuất dành cho các thẩm mỹ viện, trung tâm làm đẹp spa, tiệm làm tóc hay tiệm xăm... Lưng tựa mang đến sự thoải mái trong thời gian sử dụng. M');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(4) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `address`, `email`, `user`, `pass`, `role`) VALUES
(6, 'Admin', NULL, '', 'admin', '123', 1),
(9, NULL, NULL, 'ptbinh203@gmail.com', 'test123', '123', 0),
(10, 'Phạm Thanh Bình', 'Cầu Giấy', 'binh@gmail.com', 'binh123', '123', 0),
(11, 'Trần Đức Lương', 'Hai Bà Trưng', 'luong@gmail.com', 'luong123', '123', 0),
(12, 'Nguyễn Minh Chiến', 'Cầu Giấy', 'chien@gmail.com', 'chien123', '123', 0),
(13, 'Nguyễn An Huy', 'Hà Đông', 'huye@microsoft.com', 'huy456', '456', 0),
(14, 'Đỗ Hữu Trung', 'Đống Đa', 'trung@gmail.com', 'trung135', '135', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_chitietdonhang`
--
ALTER TABLE `tbl_chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ctdh_sanpham` (`idsp`),
  ADD KEY `fk_ctdh_donhang` (`iddh`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_donhang_user` (`idkh`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_chitietdonhang`
--
ALTER TABLE `tbl_chitietdonhang`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_chitietdonhang`
--
ALTER TABLE `tbl_chitietdonhang`
  ADD CONSTRAINT `fk_ctdh_donhang` FOREIGN KEY (`iddh`) REFERENCES `tbl_donhang` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_ctdh_sanpham` FOREIGN KEY (`idsp`) REFERENCES `tbl_sanpham` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD CONSTRAINT `fk_donhang_user` FOREIGN KEY (`idkh`) REFERENCES `tbl_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `tbl_danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
