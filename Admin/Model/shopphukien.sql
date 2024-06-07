-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 09, 2024 lúc 08:06 AM
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
-- Cơ sở dữ liệu: `shopphukien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan1`
--

CREATE TABLE `binhluan1` (
  `mabl` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `idhanghoa` int(11) NOT NULL,
  `content` text NOT NULL,
  `luotthich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`idcomment`, `idkh`, `idhanghoa`, `content`, `luotthich`) VALUES
(1, 3, 24, '  đẹp', 0),
(2, 3, 22, '  thấp', 0),
(3, 5, 14, 'hong cinh', 0),
(4, 5, 15, 'iisfd', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthanghoa`
--

CREATE TABLE `cthanghoa` (
  `idhanghoa` int(11) NOT NULL,
  `idmau` int(11) NOT NULL,
  `idsize` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `soluongton` int(11) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `giamgia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthanghoa`
--

INSERT INTO `cthanghoa` (`idhanghoa`, `idmau`, `idsize`, `dongia`, `soluongton`, `hinh`, `giamgia`) VALUES
(1, 1, 1, 750000, 10, '1.jpg', 700000),
(2, 2, 1, 5000000, 12, '2.jpg', 0),
(3, 1, 1, 2300000, 12, '3.jpg', 0),
(4, 1, 1, 2450000, 12, '4.jpg', 0),
(5, 1, 1, 3600000, 12, '5.jpg', 0),
(6, 1, 1, 150000, 20, '6.jpg', 0),
(7, 2, 1, 85000, 12, '7.jpg', 0),
(8, 1, 1, 85000, 12, '8.jpg', 0),
(9, 1, 1, 250000, 12, '9.jpg', 0),
(10, 1, 1, 700000, 12, '10.jpg', 0),
(11, 1, 2, 1925000, 12, '11.jpg', 1900000),
(12, 1, 1, 680000, 12, '12.jpg', 0),
(13, 1, 1, 75000, 12, '13.jpg', 0),
(14, 1, 3, 380000, 12, '14.jpg', 0),
(15, 3, 1, 380000, 12, '15.jpg', 0),
(16, 3, 1, 190000, 12, '16.jpg', 0),
(17, 3, 1, 160000, 12, '17.jpg', 0),
(18, 3, 1, 60000, 12, '18.jpg', 0),
(19, 1, 1, 320000, 12, '19.jpg', 300000),
(20, 1, 1, 335000, 12, '20.jpg', 0),
(21, 1, 1, 420000, 12, '21.jpg', 0),
(22, 1, 1, 490000, 12, '22.jpg', 0),
(23, 1, 1, 550000, 12, '23.jpg', 0),
(24, 1, 1, 2800000, 12, '24.jpg', 0),
(25, 1, 1, 2800000, 12, '25.jpg', 2700000),
(26, 1, 1, 35000, 12, '26.jpg', 0),
(27, 1, 1, 35000, 12, '27.jpg', 0),
(28, 1, 1, 175000, 12, '28.jpeg', 0),
(29, 1, 1, 50000, 12, '29.jpg', 0),
(30, 1, 1, 3200000, 12, '31.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `mahh`, `soluongmua`, `mausac`, `thanhtien`, `tinhtrang`) VALUES
(1, 1, 1, 'Đỏ', 250000, 0),
(1, 2, 2, 'Đỏ', 250000, 0),
(2, 1, 1, 'Đen', 250000, 0),
(2, 2, 2, 'Đen', 250000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(60) NOT NULL,
  `maloai` int(11) NOT NULL,
  `dacbiet` bit(1) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` varchar(2000) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `maloai`, `dacbiet`, `soluotxem`, `ngaylap`, `mota`, `trangthai`) VALUES
(1, 'Phuộc X1R Daytona cho Wave', 1, b'1', 57, '2020-08-27', '- Phuộc X1R Daytona cho Wave, Future, Dream, Axelo...phuộc thế hệ mới của hãng X1R thiết kế Full CNC từ trên xuống dưới.\r\n- Điều chỉnh rebound 30 nấc, ty phuộc hồi lên chậm chậm rất êm ái nhờ hành trình phuộc cực dài và độ nén loxo cao tuỳ theo nhiều nhu cầu tăng chỉnh của nhiều đối tượng khách hàng.\r\n\r\n- Phuộc X1R Daytona cho Wave có chiều cao 340mm, phuộc có màu: đỏ, đen và bảo hành 1 năm chính hãng X1R.', 0),
(2, 'Phuộc Profender X Series cho Lead chính hãng', 1, b'1', 3, '2020-08-08', 'Dùng cho xe: SH Mode, Lead, Click 125i/150i Grande, Janus, Vario 150/125 Freego, Mio\r\n- Phuộc Profender X Series cho Honda Lead là hàng chính hãng Profender sản xuất tại Thái Lan.\r\n- Phuộc Profender X Series cho Lead là dòng phuộc có bình dầu phụ nằm dưới, 2 nút tăng chỉnh rebound và độ nhún, chân phuộc 16 nấc hiển thị số rõ ràng , dễ tăng chỉnh có thể giúp bạn tùy chỉnh khi đi phố, khi chở nặng...\r\n- Phuộc Profender X Series 2TC cho Lead có chiều cao 330mm, phuộc có 2 màu: đỏ và đen, được bảo hành 3 năm chính hãng.', 0),
(3, 'Phuộc Profender Flash Series cho Wave chính hãng', 1, b'0', 4, '2020-08-08', 'Dùng cho xe: Wave, Dream, Axelo 125, Future, Blade, PG-1.\r\nPhuộc Profender Flash Series cho Wave...hàng chính hãng Profender sản xuất tại Thái Lan.\r\nPhuộc Profender Flash Series cho Wave là dòng phuộc không bình dầu phụ, 1 nút tăng chỉnh chân phuộc 16 nấc hiển thị số rõ ràng , dễ tăng chỉnh có thể giúp bạn tùy chỉnh khi đi phố, khi chở nặng...\r\nPhuộc Profender Flash Series 1TC cho Wave, Dream, Future, Cub có chiều cao 330mm, phuộc có 2 màu: đỏ và đen, được bảo hành 3 năm chính hãng.', 0),
(4, 'Phuộc Profender Flash Series cho Mio, Janus', 1, b'0', 1, '2020-08-08', 'Dùng cho xe: Grande Janus Freego Mio. Phuộc Profender Flash Series cho Yamaha Mio, Janus, Freego, Grande...hàng chính hãng Profender sản xuất tại Thái Lan. Phuộc Profender Flash Series cho Yamaha Mio là dòng phuộc không bình dầu phụ, 1 nút tăng chỉnh chân phuộc 16 nấc hiển thị số rõ ràng , dễ tăng chỉnh có thể giúp bạn tùy chỉnh khi đi phố, khi chở nặng...Phuộc Profender Flash Series 1TC cho Mio có chiều cao 320mm, phuộc có 2 màu: đỏ và đen, được bảo hành 3 năm chính hãng.', 0),
(5, 'Phuộc Profender Air Series cho Vario 150, Click, Lead, Visio', 1, b'1', 0, '2020-08-08', 'Dùng cho xe: SH Mode, Lead, Click 125i/150i Vision, Janus, Vario 150/125, Scoopy 110. Phuộc Profender Air Series cho Vario 125-150 có thể gắn cho Click, Lead, Vision...hàng chính hãng Profender sản xuất tại Thái Lan. Phuộc Profender Air Series cho Vario 125-150 là dòng phuộc có bình dầu phụ, 1 nút tăng chỉnh chân phuộc 16 nấc hiển thị số rõ ràng , dễ tăng chỉnh có thể giúp bạn tùy chỉnh khi đi phố, khi chở nặng... Phuộc Profender Air Series 1TC cho Vario 125-150 có chiều cao 330mm, phuộc có 2 màu: đỏ và đen, được bảo hành 3 năm chính hãng.', 0),
(6, 'Lọc gió zin cho SH350i', 2, b'0', 32, '2020-08-08', 'Dùng cho xe: SH350i. Lọc gió zin cho SH350i. Theo khuyến cáo của hãng, không vệ sinh lọc gió zin mà nên thay thế định kỳ sau mỗi 8.000 - 10.000 km tùy điều kiện vận hành. Việc thay lọc gió đúng định kỳ sẽ giúp động cơ luôn vận hành trong tình trạng tốt, ổn định nhất.', 0),
(7, 'Lọc gió zin cho Yamaha NVX', 2, b'1', 2, '2020-08-08', 'Lọc gió zin cho Yamaha NVX.\r\nTheo khuyến cáo của hãng, không vệ sinh lọc gió zin mà nên thay thế định kỳ sau mỗi 8.000 - 10.000 km tùy điều kiện vận hành.\r\nViệc thay lọc gió đúng định kỳ sẽ giúp động cơ luôn vận hành trong tình trạng tốt, ổn định nhất.', 0),
(8, 'Lọc gió zin cho Winner 150, Winner X', 2, b'1', 1, '2020-08-08', 'Lọc gió zin cho Winner 150, Winner X.\r\nTheo khuyến cáo của hãng, không vệ sinh lọc gió zin mà nên thay thế định kỳ sau mỗi 8.000 - 10.000 km tùy điều kiện vận hành.\r\nViệc thay lọc gió đúng định kỳ sẽ giúp động cơ luôn vận hành trong tình trạng tốt, ổn định nhất.', 0),
(9, 'Lọc gió zin cho SHVN 2020 - 2023', 2, b'1', 1, '2020-08-08', 'Dùng cho xe: SH 125i/150i SH 160i.\r\nLọc gió zin SHVN 2020 - 2023.\r\nTheo khuyến cáo của hãng, không vệ sinh lọc gió zin mà nên thay thế định kỳ sau mỗi 8.000 - 10.000 km tùy điều kiện vận hành.\r\nViệc thay lọc gió đúng định kỳ sẽ giúp động cơ luôn vận hành trong tình trạng tốt, ổn định nhất.', 0),
(10, 'Lọc gió STB cho SHVN 2020 - 2023 (chính hãng)', 2, b'1', 1, '2020-08-08', 'Dùng cho xe: SH 125i/150i SH 160i\r\nLọc gió STB chính hãng dành cho SHVN đời 2020 - 2023, vừa lọc tốt, vừa tăng lưu lượng gió nạp, giúp động cơ tăng tốc rất hiệu quả, giúp máy vận hành nhẹ nhàng rõ rệt, bởi nó luôn đảm bảo tỷ lệ gió/ xăng ổn định, nhất là khi tăng tốc và chạy đường trường. Lọc gió STB có thể dễ dàng vệ sinh sử dụng lại nhiều lần với tuổi thọ hơn 5 năm. Lọc gió STB là hàng chính hãng sản xuất tại Taiwan.\r\nLọc gió STB dùng cho SHVN từ 2020 - 2023 gắn như zin không chế cháo.', 0),
(11, 'Pô Leovince Corsa Evo cho Exciter chính hãng', 3, b'0', 0, '2020-08-08', 'Dùng cho xe: Exciter 150, Raider 150, Exciter 155, Winner 150, CBR 150, GSX R150, GSX S150, Sonic 150, Satria F150, Winner X. Pô Leovince Corsa Evo cho Exciter, hàng chính hãng của thương hiệu Leovince, tiếng kêu trầm ấm, uy lực, mẫu mã đẹp, bắt mắt khi gắn lên xe. Pô Leovince Corsa Evo cho Exciter với thân pô làm bằng Carbon siêu bền, chống nóng khi vận hành xa.', 0),
(12, 'Ốp pô SH 300i ZHIPAT cho SH300i, SH 125i/150i 2017', 3, b'0', 1, '2020-08-08', 'Ốp pô thay thế zin của xe SH300i thương hiệu ZHIPAT hoặc trang trí thêm cho SH 125i/150i 2017. Với chất liệu nhựa ABS kết hợp với inox chắc chắn sẽ bảo vệ phần pô gần như tuyệt đối.\r\nỐp pô SH 300i ZHIPAT cho SH300i, SH 125i/150i 2017 được cho là món phụ tùng thay thế hoàn hảo cho ốp pô zin theo xe bị hư, cũ...\r\nỐp pô zin SH300i ZHIPAT gắn được cho tất cả loại xe SH300i từ đới 2007 đến 2017 và SH 125i/150i 2017. Hàng chính hãng của thương hiệu ZHIPAT.', 0),
(13, 'Ống tiêu inox Honda Winner X', 1, b'0', 3, '2020-08-08', 'Dùng cho xe: Winner X\r\nỐng tiêu inox dành cho Honda Winner X, làm cho hơi thoát ra từ pô xe phóng xuống đường, tình trạng pô zin xe Winner X làm cho khí thải phóng thẳng vào mặt người đi sau đã xảy ra rất nhiều, khiến người đi đường rất khó chịu, sản phẩm chụp pô Winner X này làm cho trở nên văn minh, lịch sự hơn.\r\nỐng tiêu inox Winner X gắn vừa khít cho pô zin.', 0),
(14, 'Bộ nhông sên dĩa X1R cho Exciter 150 (122L, Đen)', 4, b'0', 1, '2020-08-08', 'Dùng cho xe: Exciter 150\r\nBộ nhông sên dĩa X1R Đen cho Exciter 150 bằng thép với hoa văn cắt CNC, đảm bảo được độ cứng và độ bền, độ đồng tâm của sản phẩm.\r\nVới 3 bước gia công trên bề mặt: Xi chrome - phủ đồng thật - xi màu đảm bảo không phai màu đồng thời gian, tăng khả năng chống ăn mòn oxi hóa nâng cao giá trị sử dụng cho sản phẩm.\r\nBộ nhông sên dĩa X1R cho Exciter 150 thông số: 428-14T-42T-122L (Đen).', 0),
(15, 'Bộ nhông sên dĩa X1R cho Exciter 135 (114L, Đen)', 4, b'0', 1, '2020-08-08', 'Dùng cho xe: Exciter 135\r\nBộ nhông sên dĩa X1R Đen cho Exciter 135 bằng thép với hoa văn cắt CNC, đảm bảo được độ cứng và độ bền, độ đồng tâm của sản phẩm.\r\nVới 3 bước gia công trên bề mặt: Xi chrome - phủ đồng thật - xi màu đảm bảo không phai màu đồng thời gian, tăng khả năng chống ăn mòn oxi hóa nâng cao giá trị sử dụng cho sản phẩm.\r\nBộ nhông sên dĩa X1R cho Exciter 135 thông số: 428-14T-39-114L (Đen).', 1),
(16, 'Dĩa Recto 42T cho Honda Sonic chính hãng', 4, b'0', 1, '2020-08-08', 'Dùng cho xe: Sonic 150\r\nDĩa Recto 42T hàng chính hãng dành cho Honda Sonic. Sản phẩm đang được rất nhiều Biker ưa chuộng với chất lượng tuyệt vời, đồ bền cao, vận hành êm ái. Ngoài ra thiết kế cũng khá ấn tượng.\r\nDĩa Recto 42T hàng chính hãng Thái Lan gắn vừa khít như zin cho Sonic.', 1),
(17, 'Dĩa Recto 38T cho Exciter 135 chính hãng', 4, b'1', 10, '2024-03-05', 'Dùng cho xe: Exciter 135\r\nDĩa Recto 38T chính hãng dành cho Exciter 135. Sản phẩm đang được rất nhiều Biker ưa chuộng với chất lượng tuyệt vời, đồ bền cao, vận hành êm ái. Ngoài ra thiết kế cũng khá ấn tượng.\r\nDĩa Recto 428-38T cho Exciter 135 hàng chính hãng Thái Lan', 1),
(18, 'Nhông Mặt Trời 15T cho Honda Winner, Sonic', 4, b'1', 10, '2024-03-20', 'Dùng cho xe: Winner 150 Sonic 150 Winner X\r\nNhông mặt trời 15T chính hãng dành cho Honda Winner, Sonic, chất lượng đã được kiểm chứng lâu năm vô cùng bền bỉ.\r\nNhông mặt trời 15T chính hãng cho Winner được sản xuất tại Thái Lan.', 0),
(19, 'Bình ắc quy GS GT5A', 5, b'1', 10, '2024-03-20', 'Dùng cho xe: Wave, Dream, Exciter 150, Exciter 135, Sirius, Jupiter, Future, Blade.\r\nBình ắc quy GS GT5A là loại bình VRLA, siêu kín siêu bền, miễn bảo dưỡng, an tâm trên mọi hành trình.\r\nBình ắc quy GS GT5A có thời gian bảo hành : 06 tháng\r\nThông tin sản phẩm Bình Ắc Quy GS GT5A\r\nModel sản phẩm GT5A\r\nĐiện áp: 12V\r\nDung lượng 5Ah\r\nKích thước (Dài x Rộng x Cao) 121 x 62 x 131 (mm).', 0),
(20, 'Bình ắc quy GS GTZ5S', 5, b'1', 10, '2024-03-20', 'Dùng cho xe: Wave, Exciter 150, Exciter 135, Nouvo, Sirius, Jupiter, Axelo 125, Future, Grande, Exciter 155, Janus, Mio.\r\nBình Ắc-quy GS GTZ5S được sản xuất tại tập đoàn sản xuất ắc quy GS Nhật Bản nổi tiếng thế giới. Loại bình VRLA, siêu kín siêu bền, miễn bảo dưỡng, an tâm trên mọi hành trình. Thương hiệu Ắc Quy GS của Nhật Bản được sản xuất tại Việt Nam. Ắc Quy GS là nhà cung cấp Ắc Quy OEM cho các hãng xe HONDA, YAMAHA, SUZUKI, SYM...\r\nƯu điểm Ắc Quy GS: tuổi thọ lâu dài, chất lượng ổn định, thiết kế phù hợp với điều kiện khí hậu tại Việt Nam.\r\nDung lượng: 12V - 3.5Ah (10 hours). Kích thước (mm): 112 x 70 x 85 (dài x rộng x cao).\r\nBảo hành 06 tháng theo qui định của nhà sản xuất bằng phiếu bảo hành chính hãng GS.', 0),
(21, 'Bình ắc quy GS GTZ6V', 5, b'1', 10, '2024-03-20', 'Dùng cho xe: Air Blade, SH Mode, SH 125i/150i, Lead, PCX, Click 125i/150i, Grande, Air Blade 160, Vision, Janus, Vario 150/125, GSX R150 GSX S150, Satria F150, Freego, Scoopy 110 Vario 160, Mio\r\nBình Ắc Quy GS GTZ6V là Loại bình VRLA, siêu kín siêu bền, miễn bảo dưỡng, an tâm trên mọi hành trình.\r\nSản phẩm bình GS được sử dụng cho các dòng xe tay ga của Honda hiện đại như Honda Air Blade, Vario/ Click, SH Mode, Vision, Lead, PCX, SH125/150.\r\nThời gian bảo hành : 06 tháng.', 0),
(22, 'Bình ắc quy GS GT7A-H', 5, b'1', 10, '2024-03-20', 'Dùng cho xe: SH 125i/150i, Dylan, Ps, SH 160i Liberty, Vespa Sprint, Medley, Vespa GTS\r\nLoại bình VRLA, siêu kín siêu bền, miễn bảo dưỡng, an tâm trên mọi hành trình.\r\nĐược cung cấp cho các hãng xe nổi tiếng như Honda, Piaggio...\r\nMang đến cho bạn một cảm nhận sức mạnh mới khi sử dụng sản phẩm.\r\nThời gian bảo hành : 06 tháng.', 0),
(23, 'Bình ắc quy GS GT9A', 5, b'1', 10, '2024-03-20', 'Dùng cho xe: Vespa Lx, Elizabeth, Galaxy, Dylan, Yamaha R6\r\nBình ắc quy GS GT9A là loại bình VRLA, siêu kín siêu bền, miễn bảo dưỡng, an tâm trên mọi hành trình.\r\nĐiện áp: 12V\r\nDung lượng 9Ah\r\nKích thước (Dài x Rộng x Cao): 150 x 87 x 105 (mm)\r\nThời gian bảo hành : 06 tháng', 0),
(24, 'Mâm RCB 8 cây cho Vario, Click chính hãng', 6, b'1', 10, '2024-03-20', 'Dùng cho xe: Click 125i/150i, Vario 150/125,\r\nMâm RCB 8 cây chính hãng cho Vario, Click, hàng khá hot trên thị trường, thiết kế 8 cây mảnh rất phù hợp với dáng xe nhỏ gọn như Vario, Click. Hàng RCB chất lượng tốt đã được nhiều biker tin dùng.\r\nMâm 8 cây RCB chính hãng cho Vario, Click có bản mâm là: 1.85 - 2.15\r\nMâm 8 cây RCB là hàng chính hãng RCB thương hiệu từ Malaysia. Mâm được bảo hành chính hãng 1 năm', 0),
(25, 'Mâm RCB 5 cây cho Wave, Dream chính hãng', 6, b'1', 10, '2024-03-20', 'Dùng cho xe: Honda, Wave, Dream, Future.\r\nMâm RCB chính hãng 5 cây dành cho các loại xe số vành 17 inch, thiết kế khí động học, thể thao mạnh mẽ. Khi gắn mâm racing boy lên xe làm cho xe đi đầm hơn, an toàn hơn.\r\nMâm Racingboy 5 cây có đầy đủ phiên bản: 2 thắng đùm, 1 đĩa 1 đùm gắn cho tất cả loại xe như: Wave, Dream, Future với 2 màu đen và đồng.', 0),
(26, 'Pin remote Smartkey zin Honda SHVN, Vision, AB, Lead, SH Mod', 7, b'1', 10, '2024-03-20', 'Dùng cho xe: Air Blade, SH 125i/150i, Lead, PCX, Click 125i/150i, Grande, Air Blade 160, Exciter 155, Vision, Janus, Vario 150/125, NVX, SH 160i, SH 300i, Winner X, ADV 150/160 Scoopy 110, SH350i, Vario 160, Click 160,\r\nPin remote Smartkey zin Honda SHVN, Vision, AB, Lead, SH Mode...và các dòng xe Yamaha.\r\nPin chìa khóa Smartkey Honda có đường kính 20mm và dày 3.2mm chuẩn size CR2032.\r\nPin điều khiển Remote Honda SH, Vision, AirBlade, Lead, SH Mode, PCX...và các dòng xe Yamaha NVX, Janus, Grande, Exciter 155...\r\nMiễn phí công thay.', 0),
(27, 'Dùng cho xe: Air Blade SH 125i/150i Lead PCX Click 125i/150i', 7, b'1', 10, '2024-03-20', '', 0),
(28, 'Cục kêu tìm xe Honda', 7, b'1', 10, '2024-03-20', '', 0),
(29, 'Cao su bọc Smartkey Honda', 7, b'1', 10, '2024-03-20', 'Dùng cho xe: SH Mode, SH 125i/150i, Lead, PCX, Click 125i/150i, Air Blade 160, Vision, Vario 150/125, Vario 160\r\nCao su bọc Smartkey dành cho các xe hãng Honda sử dụng Smartkey, đồ bền gần như tuyệt đối, bảo vệ tốt các chìa Smartkey khỏi va đạp hư hỏng, trầy xước.', 0),
(30, 'Ổ khoá Smartkey Honda chính hãng cho AB, SHVN, SH Mode, Clic', 7, b'1', 10, '2024-03-20', 'Dùng cho xe: Air Blade, SH Mode, SH 125i/150i, Lead, PCX, Click 125i/150i, Air Blade 160, Vision, Vario 150/125, Winner X.\r\nỔ khoá Smartkey Honda chính hãng dành cho AB, SHVN, SH Mode, Click, Vario, Winner X, PCX, Lead, Vision với khả năng chống trộm xe máy ưu việt, sử dụng công nghệ remote nhận dạng chủ xe.\r\nKhóa thông minh Honda Smartkey cho AirBlade, SH, Vario, SH Mode, Winner X có tích hợp chức năng báo động khi xe bị di chuyển hoặc có lực tác động vào xe và tính năng xác định vị trí xe (Remote Response).\r\nHonda Smartkey cho Vario, Click, PCX, Vision đi kèm thiết bị điều khiển FOB có tác dụng trong các trường hợp cần mở khóa khẩn cấp hay khi cần cấp Thiết bị điều khiển FOB mới.\r\nGiá khoá Smartkey chính hãng Honda cho SH Việt, SH Mode, Air Blade, Click Thái, Vario, Winner X, PCX, Lead, Vision đã bao gồm công lắp đặt và được bảo hành 6 tháng.\r\nỔ khoá Smartkey Honda chính hãng gắn lên xe Vario, Click (mẫu cũ), SH Mode, SHVN đời 2012 đến 2016, Vision, Winner X mà không cần chế cháo, riêng với dòng xe AB125, Lead, PCX (các đời cũ chưa có smartkey) có nút mở xăng phía trước thì phải lấy lại nút mở yên và xăng trong bộ ổ khoá zin cũ gắn qua.', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(1, 3, '2023-10-16', 1500000),
(2, 3, '2023-10-16', 1500000),
(3, 5, '2024-02-21', 250000),
(4, 5, '2024-02-21', 250000),
(5, 5, '2024-02-21', 250000),
(6, 5, '2024-02-21', 250000),
(7, 5, '2024-02-22', 180000),
(8, 5, '2024-02-22', 1250000),
(9, 5, '2024-03-21', 1150000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text DEFAULT NULL,
  `sodienthoai` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`) VALUES
(1, 'tú trần', 'tutran', '8f8e2909a8f683c31159ee51d593a642', 'tu@gmail.com', 'hcm', '9090789678'),
(2, 'minh minh', 'minhminh', '8f8e2909a8f683c31159ee51d593a642', 'minh@gmail.com', 'bình định', '90907896789'),
(3, 'teo', 'teoteo', '3ff19fad9f5844248f601ab23381cc88', 'teo123@gmail.com', 'hcm', '9090789698'),
(4, 'ý nhi', 'nhinhi', '87f038af05196e3dfa958a521f6f400e', 'ngvynhi.itc@gmail.com', 'thoại ngọc hầu', '9090789699'),
(5, 'Teddy', 'mthien', '5320cf35653f1c06b303424eec637b2d', 'mthien245@gmail.com', '222 Long Tan', '0896469680');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `idmenu`) VALUES
(1, 'Áo', 1),
(2, 'Áo khoác', 2),
(3, 'Quần', 3),
(18, 'Mat kinh', 5),
(19, 'Non', 5),
(20, 'Tui', 5),
(21, 'May', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `Idmau` int(11) NOT NULL,
  `mausac` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`Idmau`, `mausac`) VALUES
(1, 'Đỏ'),
(2, 'Đen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int(11) NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `dia` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `matkhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `hoten`, `dia`, `username`, `matkhau`) VALUES
(1, 'nguyễn hạo vy', 'hcm', 'admin', '123456');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  ADD PRIMARY KEY (`mabl`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Chỉ mục cho bảng `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD PRIMARY KEY (`idhanghoa`,`idmau`,`idsize`);

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`mahh`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`Idmau`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `Idmau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
