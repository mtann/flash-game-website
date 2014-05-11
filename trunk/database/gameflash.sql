-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2014 at 05:34 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gameflash`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `avatar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `game_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nhiemvu` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `cachchoi` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `upload_time` date NOT NULL,
  `totalplay` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `name`, `type`, `description`, `status`, `rating`, `avatar`, `link`, `nhiemvu`, `cachchoi`, `upload_time`, `totalplay`) VALUES
(1, 'Bé tập làm vườn', 'girl', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-05/Game_BeTapLamVuon.png', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-06/Game_BeTapLamVuon.swf', 'Nhiệm vụ của bạn là giúp bé chăm sóc cây trồng trong vườn', 'Sử dụng chuột để thực hiện các thao tác.', '2014-05-10', 35),
(2, 'Bảo vệ trái đất', 'action', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-05/Game_BaoVeTraiDat.jpg', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-22/Game_BaoVeTraiDat.swf', NULL, NULL, '2014-05-10', 1),
(3, 'Chú khỉ buồn 17', 'brain', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-29/Game_ChuKhiBuon17.png', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-29/Game_ChuKhiBuon17.swf', NULL, NULL, '2014-05-10', 1),
(4, 'Doremon chơi khúc quân cầu', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-06/Game_DoremonChoiKhucConCau.png', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-06/Game_DoremonChoiKhucConCau.swf', NULL, NULL, '2014-05-10', 0),
(5, 'Du lịch mùa hè', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-29/Game_DuLichMuaHe.png', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-29/Game_DulichMuaHe.swf', NULL, NULL, '2014-05-10', 0),
(6, 'Giải đấu sinh tử', 'action', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-10/Game_GiaiDauSinhTu2.png', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-10/Game_GiaiDauSinhTu.swf', NULL, NULL, '2014-05-10', 0),
(7, 'Hôn trộm Mr Bean', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-05/Game_HonTromMrBean.jpg', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-25/Game_HonTromMrBean.swf', NULL, NULL, '2014-05-10', 0),
(8, 'Học làm mì lasagna', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-08/Game_HocLamMiLasagna.png', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-08/Game_HocLamMyLasagna.swf', NULL, NULL, '2014-05-10', 0),
(9, 'Kế hoạch nguy hiểm', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-08/Game_KeHoachNguyHiem.png', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-08/Game_KeHoachNguyHiem.swf', NULL, NULL, '2014-05-10', 0),
(10, 'Trả thù sếp', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-29/Game_TraThuSep.png', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-07/Game_TraThuSep.swf ', NULL, NULL, '2014-05-10', 0),
(11, 'Sâu khổng lồ', 'action', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-29/Game_SauKhongLo.png', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-29/Game_SauKhongLo.swf', NULL, NULL, '2014-05-11', 2),
(12, '7 viên ngọc rồng', 'action', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-03-28/1364433418_Game_BayVienNgocRong.jpg', 'http://game.24hstatic.com/upload/game/2013-03-22/1363961915_DragonBall123.swf', NULL, NULL, '2014-05-11', 16),
(13, 'Ninja lego 2', 'action', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-16/Game_NinjaLego2.jpg', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-12/Game_NinjaLego2.swf', NULL, NULL, '2014-05-11', 0),
(14, 'Bắn gà', 'action', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2012-12-25/1356419237_Game_BanGa.jpg', 'http://game.24hstatic.com/upload/game/2012-12-25/1356419237_Game_BanGa.swf', NULL, NULL, '2014-05-11', 0),
(15, 'Ben 10 cậu bé anh hùng', 'action', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2010-11-10/1289358725_game-ben10caubeanhhung.jpg', 'http://game.24hstatic.com/upload/game/2010-11-07/1289095069_game-Bendungcam.swf', NULL, NULL, '2014-05-11', 0),
(16, 'Thủy quái nổi giận', 'action', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2010-02-24/1266997576_Thuyquainoigian.jpg', 'http://game.24hstatic.com/upload/game/2010-05-19/1274281104_thuyquainoigianFullMH.swf', NULL, NULL, '2014-05-11', 1),
(17, 'Chém hoa quả', 'action', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-11/Game_ChemHoaQua.jpg', 'http://game.24hstatic.com/upload/game/2012-10-20/1350708142_Game_ChemHoaQua.swf', NULL, NULL, '2014-05-11', 0),
(18, 'Công viên thời tiền sử 2', 'action', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-02/Game_CongVienThoiTienSu2.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-22/Game_CongVienThoiTienSu2.swf', NULL, NULL, '2014-05-11', 1),
(19, 'Tôi là mafia', 'action', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-17/Game_ToiLaMafia.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-11/Game_ToiLaMafia.swf', NULL, NULL, '2014-05-11', 0),
(20, 'Ninja đột kích', 'action', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-01-21/Game_NinjaDotKich.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-01-11/Game_NinjaDotKich.swf', NULL, NULL, '2014-05-11', 0),
(21, 'Quỷ đỏ', 'action', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2013/2013-4/game/2013-12-17/Game_QuyDo.jpg', 'http://game.24hstatic.com/upload/2013/2013-4/game/2013-12-09/Game_QuyDo.swf', NULL, NULL, '2014-05-11', 0),
(22, 'Hiệp sỹ rồng', 'action', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2013/2013-4/game/2013-12-10/Game_KySiRong.jpg', 'http://game.24hstatic.com/upload/2013/2013-4/game/2013-11-30/Game_HiepSyRong.swf', NULL, NULL, '2014-05-11', 0),
(23, 'Rồng đen', 'action', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-11-11/1384162500_Game_RongDen.jpg', 'http://game.24hstatic.com/upload/game/2013-11-01/1383301861_Game_RongDen.swf', NULL, NULL, '2014-05-11', 0),
(24, 'Siêu sao sút phạt', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-05/Game_SieuSaoSutPhat.jpg', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-24/Game_SieuSaoSutPhat.swf', NULL, NULL, '2014-05-11', 0),
(25, 'Đấu trường quái thú', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2013/2013-4/game/2013-12-17/Game_DauTruongQuaiThu.jpg', 'http://game.24hstatic.com/upload/2013/2013-4/game/2013-12-10/Game_DauTruongQuaiThu.swf', NULL, NULL, '2014-05-11', 0),
(26, 'Chạy đua đường phố 2', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-24/Game_ChayDuaDuongPho2.jpg', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-12/Game_CauThuChayDua.swf', NULL, NULL, '2014-05-11', 0),
(27, 'Vua phá lưới 3', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-11-19/1384843182_Game_VuaPhaLuoi3.jpg', 'http://game.24hstatic.com/upload/game/2013-11-07/1383820216_Game_VuaPhaLuoi3.swf', NULL, NULL, '2014-05-11', 0),
(28, 'Tom và Jerry- Đường đua rừng...', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-01-18/1358471408_Game_TomVaJerryDuongDuaRungRam.jpg', 'http://game.24hstatic.com/upload/game/2013-01-13/1358010251_Game_TomVaJerryDuongDuaRungRam.swf', NULL, NULL, '2014-05-11', 1),
(29, 'Bắn cung Olympic', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-01-21/Game_BanCungOlympic.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-01-13/Game_BanCungOlympic.swf', NULL, NULL, '2014-05-11', 0),
(30, 'Bóng đá bãi biển', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-16/Game_BongDaBaiBien.jpg', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-04/Game_BongDaBaiBien2.swf', NULL, NULL, '2014-05-11', 0),
(31, 'Bóng đá siêu cúp', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-08-19/1376887032_Game_BongDaSieuCup.jpg', 'http://game.24hstatic.com/upload/game/2013-08-12/1376268071_Game_BongDaSieuCup.swf', NULL, NULL, '2014-05-11', 0),
(32, 'Scooby Doo biểu diễn xe đạp', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-02/Game_ScoobyDooXeDapBieuDien.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-25/Game_ScoobyDooBieuDienXeDap.swf', NULL, NULL, '2014-05-11', 0),
(33, 'Moto biểu diễn 2', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-24/Game_MotoBieuDien2.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-14/Game_MototBieuDien2.swf', NULL, NULL, '2014-05-11', 0),
(34, 'Chạy đua đường phố', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-04/Game_ChayDuaDuongPho.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-02-21/Game_ChayDuaDuongPho.swf', NULL, NULL, '2014-05-11', 0),
(35, 'Nhảy dù mạo hiểm', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2013/2013-4/game/2013-12-02/Game_NhayDuMaoHiem.jpg', 'http://game.24hstatic.com/upload/game/2013-11-20/1384943867_Game_NhayDuMaoHiem.swf', NULL, NULL, '2014-05-11', 0),
(36, 'Giải bóng Halloween', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-10-28/1382927024_Game_GiaiBongHalloween.png', 'http://game.24hstatic.com/upload/game/2013-10-28/1382946344_Game_GiaiBongHalloween.swf', NULL, NULL, '2014-05-11', 0),
(37, 'Tiền đạo siêu hạng', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-10-30/1383096520_Game_TienDaoSieuHang.jpg', 'http://game.24hstatic.com/upload/game/2013-10-17/1382006333_Game_TienDaoSieuHang.swf', NULL, NULL, '2014-05-11', 0),
(38, 'Bóng chày 3D', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-10-14/1381733423_Game_BongChay3D.jpg', 'http://game.24hstatic.com/upload/game/2013-10-07/1381107483_Game_BongChay3D.swf', NULL, NULL, '2014-05-11', 0),
(39, 'Cầu trường rực lửa', 'sport', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-10-02/1380676617_Game_CauTruongRucLua.jpg', 'http://game.24hstatic.com/upload/game/2013-09-25/1380071468_Game_CauTruongRucLua.swf', NULL, NULL, '2014-05-11', 0),
(40, 'Pikachu', 'brain', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-17/Game_Pikachu.jpg', 'http://game.24hstatic.com/upload/game/2011-12-05/1323060788_Game_Pikachu.swf', NULL, NULL, '2014-05-11', 0),
(41, 'Candy crush', 'brain', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-24/Game_CandyCrush.jpg', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-16/Game_CandyCrush2.swf', NULL, NULL, '2014-05-11', 16),
(42, 'Lines 98', 'brain', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-11/Game_Lines98.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-05/LineChuan.swf', NULL, NULL, '2014-05-11', 0),
(43, 'Đường tới trường 3', 'brain', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-05/Game_DuongToiTruong2.jpg', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-26/Game_DuongToiTruong31.swf', NULL, NULL, '2014-05-11', 0),
(44, 'Ai là triệu phú', 'brain', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-11/Game_AiLaTrieuPhu.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-08/Who_wants_to_be_a_Millionaire.swf', NULL, NULL, '2014-05-11', 0),
(45, '2048', 'brain', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-16/Game_2048.jpg', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-10/Game_2048.swf', NULL, NULL, '2014-05-11', 0),
(46, 'Siêu trộm 2', 'brain', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-24/Game_SieuTrom2.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-19/Game_SieuTrom2.swf', NULL, NULL, '2014-05-11', 0),
(47, 'Tom và Jerry đi học', 'brain', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-17/Game_TomVaJerryDiHoc.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-08/Game_TomvaJerryDiHoc.swf', NULL, NULL, '2014-05-11', 0),
(48, 'Thám hiểm rừng xanh', 'brain', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-11/Game_ThamHiemRungXanh.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-02-27/Game_KhoBauRungXanh.swf', NULL, NULL, '2014-05-11', 0),
(49, 'Đấu trường 100', 'brain', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-02-06/Game_DauTruong100.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-08/DauTruong100.swf', NULL, NULL, '2014-05-11', 0),
(50, 'Khỉ đi du lịch', 'brain', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-01-21/Game_KhiDuLich.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-01-14/Game_KhiDiDuLich.swf', NULL, NULL, '2014-05-11', 0),
(51, 'Cuộc chiến nông trại', 'brain', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-11-19/1384843222_Game_CuocChienNongTrai.jpg', 'http://game.24hstatic.com/upload/game/2013-11-09/1383975840_Game_CuocChienNongTrai.swf', NULL, NULL, '2014-05-11', 0),
(52, 'Công chúa dọn nhà', 'girl', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-05/Game_CongChuaDonNha2.jpg', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-26/Game_CongChuaDonNha.swf', NULL, NULL, '2014-05-11', 0),
(53, 'Bác sĩ nha khoa', 'girl', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-24/Game_BacSiNhaKhoa.jpg', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-18/Game_BacSiNhaKhoa.swf', NULL, NULL, '2014-05-11', 1),
(54, 'Quản lý trang trại', 'girl', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-16/Game_QuanLyTrangTrai.jpg', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-08/Game_QuanLyTrangTrai2.swf', NULL, NULL, '2014-05-11', 0),
(55, '9x dọn nhà 3', 'girl', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-07/Game_9xDonNha3.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-29/Game_9xDonNha3.swf', NULL, NULL, '2014-05-11', 0),
(56, 'Cửa hàng hoa tươi', 'girl', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-17/Game_CuaHangHoaTuoi.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-12/Game_CuaHangHoaTuoi.swf', NULL, NULL, '2014-05-11', 0),
(57, 'Trang trại nuôi cừu', 'girl', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-11/Game_TrangTraiNuoiCu.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-02-22/Game_TrangTraiNuoiCuu.swf', NULL, NULL, '2014-05-11', 0),
(58, 'Món quà valentine', 'girl', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-02-19/Game_MonQuaValentine.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-02-13/Game_MonQuaValentine2.swf', NULL, NULL, '2014-05-11', 0),
(59, 'Du lịch thế giới', 'girl', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-02-19/Game_DuLichTheGioi.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-02-08/Game_DuLichTheGioi.swf', NULL, NULL, '2014-05-11', 0),
(60, 'Lọ lem dọn nhà 2', 'girl', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-02-06/Game_CoBeLoLem.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-01-21/Game_CoBeLoLem.swf', NULL, NULL, '2014-05-11', 0),
(61, 'Bệnh viện thú cưng', 'girl', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-01-21/Game_BenhVienThuCung.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-01-16/Game_BenhVienThuCungUpdate.swf', NULL, NULL, '2014-05-11', 0),
(62, 'Một ngày đi shopping 6', 'girl', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-01-14/Game_MotNgayDiShopping6.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-01-04/Game_MotNgayDiShopping6.swf', NULL, NULL, '2014-05-11', 0),
(63, 'Nhà hàng giáng sinh', 'girl', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-01-02/Game_NhaHangGiangSinh.jpg', 'http://game.24hstatic.com/upload/2013/2013-4/game/2013-12-25/Game_NhaHangGiangSinh.swf', NULL, NULL, '2014-05-11', 0),
(64, 'Trang trí nhà giáng sinh', 'girl', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2013/2013-4/game/2013-12-23/Game_TrangTriNhaGiangSinh.jpg', 'http://game.24hstatic.com/upload/2013/2013-4/game/2013-12-13/Game_TrangTriNhaGiangSinh.swf', NULL, NULL, '2014-05-11', 0),
(65, 'Khách sạn vui vẻ', 'girl', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-11-25/1385375591_Game_KhachSanVuiVe.jpg', 'http://game.24hstatic.com/upload/game/2013-11-16/1384588238_Game_KhachSanVuiVe.swf', NULL, NULL, '2014-05-11', 0),
(66, 'Hoa quả nổi giận 2', 'strategy', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-08-30/1377824615_Game_HoaQuaNoiGian2.jpg', 'http://game.24hstatic.com/upload/game/2013-08-24/1377322159_Game_HoaQuaNoiGian2.swf', NULL, NULL, '2014-05-11', 1),
(67, 'Pokemon đại chiến', 'strategy', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-29/Game_QuaiVatDaiChien.png', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-29/Game_QuaiVatDaiChien.swf', NULL, NULL, '2014-05-11', 0),
(68, 'Học làm ảo thuật', 'strategy', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-05-05/Game_HocLamAoThuat.jpg', 'http://game.24hstatic.com/upload/2014/2014-2/game/2014-04-19/Game_HocLamAoThuat.swf', NULL, NULL, '2014-05-11', 0),
(69, 'Flappy Bird', 'strategy', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-02-19/Game_FlappyBird.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-03/Game_FlappyBird.swf', NULL, NULL, '2014-05-11', 0),
(70, 'Nông trại vui vẻ', 'strategy', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-11/Game_NongTraiVuiVe.jpg', 'http://game.24hstatic.com/upload/game/2010-04-29/1272533923_Nongtraivuive.swf', NULL, NULL, '2014-05-11', 0),
(71, 'Đặt bom IT 4', 'strategy', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-11/Game_DatBomIt4.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-02-21/Game_DatBomIt4.swf', NULL, NULL, '2014-05-11', 0),
(72, 'Đặt bom tốc độ', 'strategy', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2010-04-08/1270698700_DatBom.jpg', 'http://game.24hstatic.com/upload/game/2011-02-09/1297224371_Game_Datbomtocdo.swf', NULL, NULL, '2014-05-11', 0),
(73, 'Cá mập tấn công', 'strategy', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2011-01-29/1296261751_Game_CaMapTanCong.jpg', 'http://game.24hstatic.com/upload/game/2011-01-11/1294709487_Game_CaMapTrang.swf', NULL, NULL, '2014-05-11', 0),
(74, 'Đặt bom IT', 'strategy', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2011-02-12/1297478690_Game_DatBomIT.jpg', 'http://game.24hstatic.com/upload/game/2010-03-30/1269942235_datbom3.swf', NULL, NULL, '2014-05-11', 0),
(75, 'Chạy trốn thạch sùng', 'strategy', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2010-02-24/1266984076_36_ChayTronThachSung.jpg', 'http://game.24hstatic.com/upload/game/2010-08-06/1281078051_chaytronthachsung.swf', NULL, NULL, '2014-05-11', 0),
(76, 'Giải cứu hoàng tử', 'strategy', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-24/Game_GiaiCuuHoangTu.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-15/Game_GiaiCuuHoangTu.swf', NULL, NULL, '2014-05-11', 0),
(77, 'Pháo hoa chào năm mới', 'strategy', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-02-06/Game_PhaoHoaChaoNamMoi.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-01-27/Game_PhaoHoaChaoNamMoi.swf', NULL, NULL, '2014-05-11', 0),
(78, 'Thử thách cuối cùng', 'strategy', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2013/2013-4/game/2013-12-17/Game_ThuThachCuoiCung.jpg', 'http://game.24hstatic.com/upload/2013/2013-4/game/2013-12-06/Game_ThuThachCuoiCung.swf', NULL, NULL, '2014-05-11', 0),
(79, 'Lâu đài quái vật', 'strategy', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2013/2013-4/game/2013-12-02/Game_LauDaiQuaiVat.jpg', 'http://game.24hstatic.com/upload/game/2013-11-23/1385202826_Game_LauDaiQuaiVat.swf', NULL, NULL, '2014-05-11', 0),
(80, 'Ninja chó 2', 'strategy', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-11-11/1384162509_Game_NinjaCho2.jpg', 'http://game.24hstatic.com/upload/game/2013-11-02/1383370271_Game_NinjaCho2.swf', NULL, NULL, '2014-05-11', 0),
(81, 'Pháo đài ma thuật', 'strategy', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-10-30/1383099152_Game_PhaoDaiMaThuat.jpg', 'http://game.24hstatic.com/upload/game/2013-10-14/1381746757_Game_PhaoDaiMaThuat.swf', NULL, NULL, '2014-05-11', 0),
(82, 'Siêu nhân khỉ', 'adventure', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2010-04-05/1270431431_sieunhankhi.jpg', 'http://game.24hstatic.com/upload/game/2010-04-05/1270431431_sieunhankhi.swf', NULL, NULL, '2014-05-11', 0),
(83, 'Tiểu quái Sonic', 'adventure', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2010-02-24/1266999213_16.jpg', 'http://game.24hstatic.com/upload/game/2010-04-29/1272526852_tieuquaisonic.swf', NULL, NULL, '2014-05-11', 0),
(84, 'Trốn nhà đi chơi', 'adventure', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2010-02-24/1266999127_10.jpg', 'http://game.24hstatic.com/upload/game/2010-05-28/1275032611_tronnhadichoi2.swf ', NULL, NULL, '2014-05-11', 0),
(85, 'Giải cứu công chúa', 'adventure', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-10-30/1383096636_Game_GiaiCuuCongChua.jpg', 'http://game.24hstatic.com/upload/game/2013-10-21/1382351814_Game_GiaiCuuCongChua.swf', NULL, NULL, '2014-05-11', 0),
(86, 'Truy tìm cổ vật', 'adventure', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2012-06-09/1339206582_Game_BinBonPhieuLuuKy.jpg', 'http://game.24hstatic.com/upload/game/2012-06-04/1338772173_Game_BinBonPhieuLuuKy.swf', NULL, NULL, '2014-05-11', 0),
(87, 'Nấm Mario cổ điển', 'adventure', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2010-09-10/1284085066_game-phieuluu-Mario.gif', 'http://game.24hstatic.com/upload/game/2010-09-09/1283995080_game-phieuluu-Mario.swf', NULL, NULL, '2014-05-11', 0),
(88, 'Thoát khỏi mỏ hoang', 'adventure', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-02-27/1361927703_Game_KhamPhaMoHoang.jpg', 'http://game.24hstatic.com/upload/game/2013-02-22/1361495818_Game_KhamPhaMoHoang.swf ', NULL, NULL, '2014-05-11', 0),
(89, 'Chạy trốn sóng thần', 'adventure', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-01-14/1358127800_Game_ChayTronSongThan.jpg', 'http://game.24hstatic.com/upload/game/2013-01-07/1357567416_Game_ChayTronSongThan.swf', NULL, NULL, '2014-05-11', 0),
(90, 'Tay súng Ninja Rùa', 'adventure', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2012-08-10/1344561522_Game_TaySungNinjaRua.jpg', 'http://game.24hstatic.com/upload/game/2012-08-08/1344410678_Game_TaySungNinjaRua.swf', NULL, NULL, '2014-05-11', 0),
(91, 'Truy tìm đồ chơi thất lạc', 'adventure', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-05-28/1369703347_Game_TruyTimDoChoiThatLac.jpg', 'http://game.24hstatic.com/upload/game/2013-05-22/1369197540_TruyTimDoChoiThatLac4.swf', NULL, NULL, '2014-05-11', 0),
(92, 'Đào vàng II', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-11/Game_DaoVang2.jpg', 'http://game.24hstatic.com/upload/game/2010-04-01/1270112281_daovangtinhyeu2.swf', NULL, NULL, '2014-05-11', 6),
(93, 'Trốn tù', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2013/2013-4/game/2013-12-10/Game_TronTu.jpg', 'http://game.24hstatic.com/upload/2013/2013-4/game/2013-12-03/Game_TronTu.swf', NULL, NULL, '2014-05-11', 0),
(94, 'Bác sỹ kinh dị - phần 1', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2011-03-01/1298942014_Game_BacSyKinhDi1.jpg', 'http://game.24hstatic.com/upload/game/2011-02-26/1298683091_Game_Bacsykinhdi1.swf', NULL, NULL, '2014-05-11', 0),
(95, 'Bác sĩ kinh dị - phần 2', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2011-03-26/1301147635_BacSiKinhDi2.gif', 'http://game.24hstatic.com/upload/game/2011-03-26/1301147635_BacSiKinhDi2.swf', NULL, NULL, '2014-05-11', 0),
(96, 'Bàn tay ma thuật', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-01-14/Game_BanTayMaThuat.jpg', 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-01-04/Game_BanTayMaThuat.swf', NULL, NULL, '2014-05-11', 0),
(97, 'Nhà hàng hải tặc', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-05-28/1369703310_Game_NhaHangHaiTac.jpg', 'http://game.24hstatic.com/upload/game/2013-05-22/1369184969_Game_NhaHangHaiTac.swf', NULL, NULL, '2014-05-11', 0),
(98, 'Vương quốc rồng', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-07-15/1373850926_Game_BiKipLuyenRong.jpg', 'http://game.24hstatic.com/upload/game/2013-07-10/1373422850_VuongQuocRong.swf', NULL, NULL, '2014-05-11', 0),
(99, 'Học sinh cá biệt', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-04-08/1365383806_Game_HocSinhCaBiet.jpg', 'http://game.24hstatic.com/upload/game/2013-04-03/1364951725_Game_HocSinhCaBiet.swf', NULL, NULL, '2014-05-11', 0),
(100, 'Khám phá hành tinh số', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-03-15/1363310525_Game_KhamPhaHanhTinhSo.jpg', 'http://game.24hstatic.com/upload/game/2013-03-09/1362848108_Game_KhamPhaHanhTinhSo.swf', NULL, NULL, '2014-05-11', 0),
(101, 'Đêm hội pháo hoa', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-02-18/1361150606_Game_DemHoiPhaoHoa.jpg', 'http://game.24hstatic.com/upload/game/2013-02-08/1360338888_Game_DemHoiPhaoHoa_Secure.swf', NULL, NULL, '2014-05-11', 0),
(102, 'Rambo báo thù', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-01-10/1357780065_Game_RamboBaoThu.jpg', 'http://game.24hstatic.com/upload/game/2013-01-04/1357306218_Game_ramboBaoThu.swf', NULL, NULL, '2014-05-11', 0),
(103, 'Cô bé tinh nghịch', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2012-12-24/1356313199_Game_GietThoiGianTrenNongTrai.jpg', 'http://game.24hstatic.com/upload/game/2012-12-19/1355879177_Game_CoBeTinhNghich.swf', NULL, NULL, '2014-05-11', 0),
(104, 'Truy tìm khỉ con', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2012-12-12/1355274880_Game_TruyTimKhiCon.jpg', 'http://game.24hstatic.com/upload/game/2012-12-07/1354842222_Game_TruyTimKhiCon.swf', NULL, NULL, '2014-05-11', 0),
(105, 'Giết thời gian ngày 20/11', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2012-11-26/1353893399_Game_GietThoiGianNgay20-11.jpg', 'http://game.24hstatic.com/upload/game/2012-11-20/1353373640_Game_GietThoiGianNgay20-11.swf', NULL, NULL, '2014-05-11', 0),
(106, 'Hang động kim cương', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2012-11-16/1353031000_Game_HangDongKimCuong.jpg', 'http://game.24hstatic.com/upload/game/2012-11-11/1352595096_Game_HangDongKimCuong.swf', NULL, NULL, '2014-05-11', 0),
(107, 'Hướng dẫn viên sở thú', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2012-06-23/1340468845_1340065550_Game_HuongDanVienSoThu.jpg', 'http://game.24hstatic.com/upload/game/2012-06-19/1340065550_Game_HuongDanVienSoThu.swf', NULL, NULL, '2014-05-11', 0),
(108, 'Xếp kim cương', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2010-04-08/1270698588_XepKimCuong.jpg', 'http://game.24hstatic.com/upload/game/2010-04-01/1270112250_bejeweled.swf', NULL, NULL, '2014-05-11', 1),
(109, 'Đào vàng đôi', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/2014/2014-1/game/2014-03-27/Game_DaoVangDoi.jpg', 'http://game.24hstatic.com/upload/game/2010-04-03/1270259891_daovangdoi2.swf', NULL, NULL, '2014-05-11', 0),
(110, 'Trò chơi khó nhất thế giới', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2011-05-17/1305595450_Game_TroChoiKhoNhatTheGioi.jpg', 'http://game.24hstatic.com/upload/game/2011-05-17/1305618158_Game_TroChoiKhoNhatTheGioi.swf', NULL, NULL, '2014-05-11', 0),
(111, 'Cô bồi bàn năng động', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2012-04-14/1334364162_Game_CoBoiBanNangDong.jpg', 'http://game.24hstatic.com/upload/game/2012-04-09/1333934014_Game_CoBoiBanNangDong.swf', NULL, NULL, '2014-05-11', 0),
(112, 'Khu vườn bí mật', 'othergame', NULL, 0, NULL, 'http://game.24hstatic.com/upload/game/2013-11-25/1385375567_Game_KhuVuonBiMat.jpg', 'http://game.24hstatic.com/upload/game/2013-11-15/1384511683_Game_KhuVuonBiMat.swf', NULL, NULL, '2014-05-11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `play_game`
--

CREATE TABLE IF NOT EXISTS `play_game` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_game` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `total_play` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_game` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `total_good` int(11) unsigned NOT NULL,
  `total_bad` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
