-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 01, 2020 lúc 06:51 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vietjobs`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Image` varchar(255) NOT NULL DEFAULT 'avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `HoTen`, `SDT`, `Email`, `Password`, `Username`, `Image`) VALUES
(1, 'abc', '1234', 'avc', '202cb962ac59075b964b07152d234b70', 'admin', '1590469091_ Web 1920 – 1.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congty`
--

CREATE TABLE `congty` (
  `id_CongTy` int(11) NOT NULL,
  `TenCongTy` varchar(100) NOT NULL,
  `TenNguoiLienHe` varchar(100) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `Website` varchar(100) NOT NULL,
  `MoTa` longtext NOT NULL,
  `TenNguoiDung` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Checked` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `congty`
--

INSERT INTO `congty` (`id_CongTy`, `TenCongTy`, `TenNguoiLienHe`, `SDT`, `Email`, `DiaChi`, `Website`, `MoTa`, `TenNguoiDung`, `Password`, `Image`, `Checked`) VALUES
(11, 'KMS Technology Vietnam', '', '', '', '123 Cong Hoa Street, Tan Binh District, HCMC', 'http://kms-technology.com/', 'KMS Technology was founded in 2009 by a team of information technology veterans in the United States and Vietnam with a vision of building an agile, innovative and efficient organization that increases our client’s shareholder value. The KMS leadership team is leveraging their experience in running both venture backed and public technology companies with operations across multiple continents to build the optimal company\r\nKMS provides services across the software development lifecycle through partnerships with clients ranging from start-ups to Fortune 500 companies. These services include research and development, product innovation and management, application management, testing, support, professional services, and staff augmentation. Our infrastructure, methodology, team design, employee profile and client relationship models are designed to maximize the value we deliver, reduce time to market, and increase quality. Most important, our culture is defined to encourage our highly experienced teams to deliver innovative solutions that don’t just meet our client’s needs, but also exceed their expectations.', 'kms', '123', 'logo-KMS.jpg', '1'),
(12, 'Ngân Hàng TMCP Sài Gòn Thương Tín (Sacombank)', '', '', '', '266-268 Nam kỳ khởi nghĩa, P.8, Q.3', 'www.sacombank.com.vn', 'Tầm nhìn\r\nPhấn đấu trở thành Ngân hàng bán lẻ hiện đại, đa năng hàng đầu Việt Nam và khu vực Đông Dương.\r\nSứ mệnh\r\nTối đa hóa giá trị cho Khách hàng, Nhà đầu tư và đội ngũ Nhân viên, đồng thời thể hiện cao nhất trách nhiệm xã hội đối với cộng đồng.', '', '', '', '1'),
(13, 'Công ty TNHH Điện Tử Samsung Vina', 'Luan', '0123456789', '', 'KCN Yên Bình – Phường Đồng Tiến – Thị Xã Phổ Yên – Tỉnh Thái Nguyên', 'https://www.samsung.com/vn/', '', 'samsung', '123456', 'logo-Samsung.jpg', '1'),
(14, 'Công Ty TNHH Lg Innotek Việt Nam Hải Phòng', '', '', '', 'Lô I-4, Khu công nghiệp Tràng Duệ,Xã Hồng Phong, Huyện An Dương, Thành phố Hải Phòng', 'https://www.lg.com/vn', 'Hơn cả việc là một công ty về linh kiện và vật liệu, chúng tôi luôn mong muốn đem lại giá trị cho khách hàng thông qua các linh kiện và vật liệu chuyên biệt và dịch vụ kĩ thuật linh kiện để góp phần vào thành công của khách hàng. ', 'lg', '123', 'logo-LG.jpg', '1'),
(15, 'Công ty CP Tâm Thành Phát Việt Nam', '', '', '', 'Phố Hòe Thị, phường Phương Canh, Nam Từ Liêm Hà Nội', ' tamthanhphat.vn', 'ÔNG TY CỔ PHẦN TÂM THÀNH PHÁT VIỆT NAM\r\nTrụ sở: Phố Hòe Thị, P. Phương Canh, Q. Nam Từ Liêm, TP. Hà Nội\r\nVPMT : Tòa Nhà Dầu Khí PVC Số 38A Đại Lộ Lê Lợi, P. Điện Biên, TP. Thanh Hóa\r\nVPMB: Toà nhà Tây Hà, số 19 đường Tố Hữu, phường Trung Văn, Quận Nam Từ Liêm, HN\r\nVP: 666 Ngô Quyền, sơn Trà, Đà Nẵng\r\nWebsite: www.tamthanhphat.vn\r\nCông ty chúng tôi xác định Việt Nam là thị trường giàu tiềm năng và là nền tảng để phát triển mặt hàng sơn nước. Công ty CP TÂM THÀNH PHÁT VIỆT NAM kể từ khi thành lập đã thúc đẩy sản phẩm sơn nước mang thương hiệu ZARO phát triển nhanh, bền vững và đã trở thành doanh nghiệp có uy tín trên thị trường về chất lượng, sản phẩm, dịch vụ bán hàng, dịch vụ chăm sóc khách hàng,…trong lĩnh vực sản xuất và cung ứng Sơn, chống thấm và chất phủ bề mặt tại thị trường Việt Nam…\r\nVới đội ngũ chuyên gia kỹ thuật giàu kinh nghiệm tiến hành nghiên cứu, phát triển sản phẩm, song song đó công ty không ngừng tìm kiếm những đối tác, kết hợp với nghiên cứu, cải tiến nhằm đưa ra sản phẩm chất lượng cao, phù hợp với môi trường khí hậu Việt Nam.\r\nHơn nữa, việc thích hợp hệ thống quản lý môi trường theo tiêu chuẩn ISO 14001:2004, và hệ thống quản lý chất lượng theo tiêu chuẩn ISO 9001:2008, đã khẳng định rằng Công ty CP TÂM THÀNH PHÁT VIỆT NAM đã đề ra chính sách phù hợp và cũng định hướng cho việc cải tiến liên tục các sản phẩm, đáp ứng nhu cầu càng cao về sản phẩm sơn trang trí của thị trường trong nước.\r\nChính vì thế, sơn ZARO của công ty CP TÂM THÀNH PHÁT VIỆT NAM luôn được giới chuyên môn, kiến trúc sư, kỹ sư, thầu thợ chuyên nghiệp sử dụng và đánh giá cao. Ngoài ra Công ty đã và đang rất thành công và đầu tư phát triển trong việc tham gia đấu thầu thi công và cung cấp vật liệu cho các dự án lớn trong cả nước. Công ty Cổ Phần TÂM THÀNH PHÁT VIỆT NAM luôn phấn đấu là địa chỉ đáng tin cậy của các nhà thầu xây dựng tại Việt Nam và mong muốn nhận được sự hợp tác của bạn hàng trong nước và quốc tế.   ', '', '', 'logo-tâm thành phát.jpg', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangtincongviec`
--

CREATE TABLE `dangtincongviec` (
  `id_DangTinCongViec` int(11) NOT NULL,
  `id_CongTy` int(11) NOT NULL,
  `TieuDe` varchar(50) NOT NULL,
  `ViTriTD` varchar(100) NOT NULL,
  `id_NganhNghe` int(11) NOT NULL,
  `SoLuong` int(255) NOT NULL,
  `MoTa` longtext NOT NULL,
  `TinhThanh` varchar(100) NOT NULL,
  `HanNop` datetime NOT NULL,
  `MucLuong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dangtincongviec`
--

INSERT INTO `dangtincongviec` (`id_DangTinCongViec`, `id_CongTy`, `TieuDe`, `ViTriTD`, `id_NganhNghe`, `SoLuong`, `MoTa`, `TinhThanh`, `HanNop`, `MucLuong`) VALUES
(1, 14, 'Kỹ Sư Chất Lượng', 'Chuyên viên - Nhân viên', 95, 4, '', 'Hải Phòng', '2020-07-09 23:23:29', '7 – 10 triệu'),
(2, 13, 'Nhân Viên Chăm Sóc Khách Hàng Samsung Việt Nam', 'Chuyên viên - Nhân viên', 54, 20, '- Làm việc tại Tổng đài của Samsung<br>\r\n- Giải đáp thắc mắc cho khách hàng về các dòng sản phẩm của Samsung phân phối tại thị trường Việt Nam: Giải đáp chính sách bảo hành, chương trình khuyến mãi...<br>\r\n- Thời gian đào tạo: 4 tuần (có phụ cấp đào tạo: 100.000 VNĐ / ngày)<br>\r\n- Thời gian làm việc: theo ca: Làm việc theo ca (8h / ngày) 2 tuần làm ca sáng, 2 tuần làm ca chiều. Mỗi tuần được nghỉ 1 ngày<br>\r\n(Ca sáng: 06h00 - 14h00, ca chiều: 14h00 - 22h00)<br>\r\n- Thu nhập từ 7tr-10tr / tháng<br>\r\n- Địa diểm làm việc: Số 6 Thăng Long, Phường 4, Quận Tân Bình, TPHCM<br>', 'TP.HCM', '2020-06-27 23:23:29', '7 – 10 triệu'),
(3, 13, 'Nhân Viên Cải Tiến Chất Lượng', 'Chuyên viên - Nhân viên', 30, 5, '- Lập bộ tiêu chuẩn Infra, tiêu chuẩn kiểm tra cho các Model mới, tiêu chuẩn quản lý xuất hàng\r\n\r\n- Quản lý chất lượng nguyên vật liệu, bao gồm cả input và output\r\n\r\n- Đề xuất cải tiến chất lượng trên công đoạn\r\n\r\n- Phân tích mẫu lỗi và lập tiêu chuẩn kiểm soát, đối ứng lỗi\r\n\r\n- Đối ứng Audit, các công việc khác theo chỉ thị', 'TP.HCM', '2020-07-16 23:38:46', ' 10 – 15 triệu'),
(4, 15, 'Trưởng Phòng Kinh Doanh Lương 25-35Tr / Th', 'Quản lý nhóm - giám sát', 48, 5, '1. Quản trị đội ngũ nhân viên kinh doanh, tuyển dụng và đào tạo nhân sự\r\n2. Đảm bảo mục tiêu kinh doanh theo chỉ tiêu được giao, giao chỉ tiêu cho nhân viên. Thiết lập kế hoạch thực hiện mục tiêu và triển khai cho nhân viên kinh doanh.\r\n3. Phân loại khách hàng theo tiêu chí phù hợp. Thiết lập phương pháp tiếp cận từng loại khách hàng và đào tạo cho nhân sự.\r\n4. Xem xét, đánh giá thị trường được giao để đưa ra phương án phát triển phù hợp.\r\n5. Đề xuất các giải pháp nhằm duy trì và thúc đẩy hoạt động kinh doanh\r\n6. Quản lý và điều hành, giám sát công việc của nhân viên thuộc phòng kinh doanh.\r\n7. Tìm kiếm, phát triển quan hệ với các khách hàng và đối tác tiềm năng. Đàm phán , ký kết hợp đồng với khách hàng mới để mở rộng thị trường.\r\n8. Chịu trách nhiệm về công nợ khách hàng khu vực mình quản lý, thường xuyên cập nhật lượng hàng tồn kho, tình hình bán hàng của khách để đưa ra phương án thúc đẩy bán hàng.\r\n9. Chịu trách nhiệm báo cáo hàng tuần, hàng tháng, quý, năm trước giám đốc về hoạt động và hiệu quả của phòng kinh doanh.', 'Đà Nẵng', '2020-06-30 23:44:26', '20 – 30 triệu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoso`
--

CREATE TABLE `hoso` (
  `id_HoSo` int(11) NOT NULL,
  `id_NguoiTimViec` int(11) NOT NULL,
  `ViTriTD` varchar(100) NOT NULL,
  `id_NganhNghe` int(11) NOT NULL,
  `TrinhDo` varchar(50) NOT NULL,
  `KinhNghiem` varchar(50) NOT NULL,
  `HinhThuc` varchar(50) NOT NULL,
  `NgoaiNgu` varchar(50) NOT NULL,
  `MucLuong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoso`
--

INSERT INTO `hoso` (`id_HoSo`, `id_NguoiTimViec`, `ViTriTD`, `id_NganhNghe`, `TrinhDo`, `KinhNghiem`, `HinhThuc`, `NgoaiNgu`, `MucLuong`) VALUES
(2, 135, 'ABCD', 24, 'Đại Học', 'Chưa', 'Full', 'Tiếng Anh', '11 triệu'),
(30, 147, 'ABCD', 24, 'Đại Học', 'Chưa', 'Full', 'Tiếng Anh', '11 triệu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotro`
--

CREATE TABLE `hotro` (
  `id` int(11) NOT NULL,
  `TenHoTro` varchar(50) NOT NULL,
  `SDT` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hotro`
--

INSERT INTO `hotro` (`id`, `TenHoTro`, `SDT`) VALUES
(2, 'aaa', '1234565'),
(3, 'bbbb', 'sss');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luucongviec`
--

CREATE TABLE `luucongviec` (
  `id_LuuCongViec` int(11) NOT NULL,
  `id_NguoiTimViec` int(11) NOT NULL,
  `id_DangTinCongViec` int(11) NOT NULL,
  `Luu` enum('Lưu','Chưa Lưu') NOT NULL DEFAULT 'Chưa Lưu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `luucongviec`
--

INSERT INTO `luucongviec` (`id_LuuCongViec`, `id_NguoiTimViec`, `id_DangTinCongViec`, `Luu`) VALUES
(48, 135, 2, 'Lưu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganhnghe`
--

CREATE TABLE `nganhnghe` (
  `id_NganhNghe` int(11) NOT NULL,
  `NganhNghe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nganhnghe`
--

INSERT INTO `nganhnghe` (`id_NganhNghe`, `NganhNghe`) VALUES
(19, 'Báo chí-Truyền hình'),
(20, 'Bảo hiểm'),
(21, 'Biên-Phiên dịch'),
(22, 'Bưu chính'),
(23, 'Chứng khoán- Vàng'),
(24, 'Công nghệ cao'),
(25, 'Công nghiệp'),
(26, 'Dầu khí-Hóa chất'),
(27, 'Dệt may - Da giày'),
(28, 'Dịch vụ'),
(29, 'Du lịch'),
(30, 'Điện tử viễn thông'),
(31, 'Game'),
(32, 'Giáo dục-Đào tạo'),
(33, 'Hàng gia dụng'),
(34, 'Hàng hải'),
(35, 'Hàng không'),
(36, 'Hoá học-Sinh học'),
(37, 'Hoạch định-Dự án'),
(38, 'In ấn-Xuất bản'),
(39, 'IT phần cứng/mạng'),
(40, 'IT phần mềm'),
(41, 'KD bất động sản'),
(42, 'Khách sạn-Nhà hàng'),
(43, 'Kho vận-Vật tư'),
(44, 'Kiến trúc-TK nội thất'),
(45, 'Kỹ thuật ứng dụng'),
(46, 'Làm bán thời gian'),
(47, 'Lao động phổ thông'),
(48, 'Marketing-PR'),
(49, 'Ngân hàng'),
(50, 'Ngành nghề khác'),
(51, 'Nghệ thuật - Điện ảnh'),
(52, 'Ngoại thương-Xuất nhập khẩu'),
(53, 'Người giúp việc'),
(54, 'Nhân sự'),
(55, 'Nông-Lâm-Ngư nghiệp'),
(56, 'NV trông quán Internet'),
(57, 'Ô tô - Xe máy'),
(58, 'Pháp lý-Luật'),
(59, 'Promotion Girl (PG)'),
(60, 'Quan hệ đối ngoạ'),
(61, 'Sinh viên làm thêm'),
(62, 'Spa-Mỹ phẩm-Trang sức'),
(63, 'Tài chính-Đầu tư'),
(64, 'Thiết kế đồ hoạ web'),
(65, 'Thiết kế-Mỹ thuật'),
(66, 'Thời trang'),
(67, 'Thủ công mỹ nghệ'),
(68, 'Thư ký-Trợ lý'),
(69, 'Báo chí-Truyền hình'),
(70, 'Bảo hiểm'),
(71, 'Biên-Phiên dịch'),
(72, 'Bưu chính'),
(73, 'Chứng khoán- Vàng'),
(74, 'Công nghệ cao'),
(75, 'Công nghiệp'),
(76, 'Dầu khí-Hóa chất'),
(77, 'Dệt may - Da giày'),
(78, 'Dịch vụ'),
(79, 'Du lịch'),
(80, 'Điện tử viễn thông'),
(81, 'Game'),
(82, 'Giáo dục-Đào tạo'),
(83, 'Hàng gia dụng'),
(84, 'Hàng hải'),
(85, 'Hàng không'),
(86, 'Hoá học-Sinh học'),
(87, 'Hoạch định-Dự án'),
(88, 'In ấn-Xuất bản'),
(89, 'IT phần cứng/mạng'),
(90, 'IT phần mềm'),
(91, 'KD bất động sản'),
(92, 'Khách sạn-Nhà hàng'),
(93, 'Kho vận-Vật tư'),
(94, 'Kiến trúc-TK nội thất'),
(95, 'Kỹ thuật ứng dụng'),
(96, 'Làm bán thời gian'),
(97, 'Lao động phổ thông'),
(98, 'Marketing-PR'),
(99, 'Ngân hàng'),
(100, 'Ngành nghề khác'),
(101, 'Nghệ thuật - Điện ảnh'),
(102, 'Ngoại thương-Xuất nhập khẩu'),
(103, 'Người giúp việc'),
(104, 'Nhân sự'),
(105, 'Nông-Lâm-Ngư nghiệp'),
(106, 'NV trông quán Internet'),
(107, 'Ô tô - Xe máy'),
(108, 'Pháp lý-Luật'),
(109, 'Promotion Girl (PG)'),
(110, 'Quan hệ đối ngoạ'),
(111, 'Quản trị kinh doanh'),
(112, 'Sinh viên làm thêm'),
(113, 'Spa-Mỹ phẩm-Trang sức'),
(114, 'Tài chính-Đầu tư'),
(115, 'Thiết kế đồ hoạ web'),
(116, 'Thiết kế-Mỹ thuật'),
(117, 'Thời trang'),
(118, 'Thủ công mỹ nghệ'),
(119, 'Thư ký-Trợ lý'),
(120, 'Thực phẩm-Đồ uống'),
(121, 'Thực tập'),
(122, 'Thương mại điện tử'),
(123, 'Tiếp thị-Quảng cáo'),
(124, 'Tổ chức sự kiện-Quà tặng'),
(125, 'Vận tải'),
(126, 'Y tế-Dược');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoitimviec`
--

CREATE TABLE `nguoitimviec` (
  `id` int(11) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `TenNguoiDung` varchar(50) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` enum('Nam','Nữ') NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `TinhThanh` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL DEFAULT '',
  `Checked` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoitimviec`
--

INSERT INTO `nguoitimviec` (`id`, `HoTen`, `TenNguoiDung`, `SDT`, `Email`, `NgaySinh`, `GioiTinh`, `DiaChi`, `Password`, `TinhThanh`, `Image`, `Checked`) VALUES
(135, 'Võ Trí Luânss', 'luanhero123', '0938582362', 'votriluan99@gmail.com', '1999-06-03', 'Nam', '133/3/16 Bình Thới Q11 P11 ', '123', 'TP.HCM', '1590512351_20200301_184048.jpg', '0'),
(147, 'Luân Võ', 'luanhero', '0912345678', 'votriluan99@gmail.com', '0000-00-00', 'Nam', 'Q11', '123456', 'TP.HCM', '', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhthanh`
--

CREATE TABLE `tinhthanh` (
  `id` int(11) NOT NULL,
  `TinhThanh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tinhthanh`
--

INSERT INTO `tinhthanh` (`id`, `TinhThanh`) VALUES
(1, 'TP.HCM '),
(2, 'Hà Nội '),
(9, 'Bình Dương '),
(19, 'Đồng Nai '),
(21, 'Cần Thơ '),
(22, 'Hải Phòng '),
(23, 'Đà Nẵng '),
(26, 'Hưng Yên '),
(27, 'Hải Dương '),
(30, 'Quảng Ngãi '),
(32, 'Bắc Ninh '),
(42, 'Yên Bái '),
(43, 'Vĩnh Phúc '),
(44, 'Vĩnh Long '),
(45, 'Tuyên Quang '),
(46, 'Trà Vinh '),
(47, 'Tiền Giang '),
(48, 'Thanh Hóa '),
(49, 'Thái Nguyên '),
(50, 'Thái Bình '),
(51, 'Tây Ninh '),
(52, 'An Giang '),
(53, 'Bà Rịa - Vũng Tàu '),
(54, 'Sơn La '),
(55, 'Sóc Trăng '),
(56, 'Quảng Trị '),
(57, 'Quảng Ninh '),
(58, 'Quảng Nam '),
(59, 'Quảng Bình '),
(60, 'Phú Yên '),
(61, 'Phú Thọ '),
(62, 'Ninh Thuận '),
(63, 'Ninh Bình '),
(64, 'Nghệ An '),
(65, 'Nam Định '),
(66, 'Long An '),
(67, 'Lâm Đồng '),
(68, 'Lào Cai '),
(69, 'Lạng Sơn '),
(70, 'Lai Châu '),
(71, 'Kon Tum '),
(72, 'Kiên Giang '),
(73, 'Khánh Hòa '),
(74, 'Hòa Bình '),
(75, 'Hậu Giang '),
(76, 'Hà Tĩnh '),
(77, 'Hà Nam '),
(78, 'Hà Giang '),
(79, 'Gia Lai '),
(80, 'Đồng Tháp '),
(81, 'Điện Biên '),
(82, 'Đắc Nông '),
(83, 'Đắc Lắc '),
(84, 'Cửu Long '),
(85, 'Cao Bằng '),
(86, 'Cà Mau '),
(87, 'Bình Thuận '),
(88, 'Bình Phước '),
(89, 'Bình Định '),
(90, 'Bến Tre '),
(91, 'Bắc Giang '),
(92, 'Bắc Kạn '),
(93, 'Bạc Liêu '),
(94, 'Thừa Thiên Huế '),
(95, 'Toàn quốc '),
(96, 'Miền Bắc '),
(97, 'Miền Trung '),
(98, 'Miền Nam '),
(99, 'Nước ngoài ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthaihoso`
--

CREATE TABLE `trangthaihoso` (
  `id` int(11) NOT NULL,
  `id_HoSo` int(11) NOT NULL,
  `id_DangTinCongViec` int(11) NOT NULL,
  `TrangThai` enum('Đang Chờ','Đã Chấp Thuận','Bị Từ Chối') NOT NULL DEFAULT 'Đang Chờ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `trangthaihoso`
--

INSERT INTO `trangthaihoso` (`id`, `id_HoSo`, `id_DangTinCongViec`, `TrangThai`) VALUES
(38, 2, 1, 'Đang Chờ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Chỉ mục cho bảng `congty`
--
ALTER TABLE `congty`
  ADD PRIMARY KEY (`id_CongTy`);

--
-- Chỉ mục cho bảng `dangtincongviec`
--
ALTER TABLE `dangtincongviec`
  ADD PRIMARY KEY (`id_DangTinCongViec`),
  ADD KEY `id_CongTy` (`id_CongTy`),
  ADD KEY `id_NganhNghe` (`id_NganhNghe`);

--
-- Chỉ mục cho bảng `hoso`
--
ALTER TABLE `hoso`
  ADD PRIMARY KEY (`id_HoSo`) USING BTREE,
  ADD KEY `id_NguoiTimViec` (`id_NguoiTimViec`),
  ADD KEY `id_NganhNghe` (`id_NganhNghe`);

--
-- Chỉ mục cho bảng `hotro`
--
ALTER TABLE `hotro`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `luucongviec`
--
ALTER TABLE `luucongviec`
  ADD PRIMARY KEY (`id_LuuCongViec`),
  ADD KEY `id_NguoiTimViec` (`id_NguoiTimViec`),
  ADD KEY `id_DangTinCongViec` (`id_DangTinCongViec`);

--
-- Chỉ mục cho bảng `nganhnghe`
--
ALTER TABLE `nganhnghe`
  ADD PRIMARY KEY (`id_NganhNghe`);

--
-- Chỉ mục cho bảng `nguoitimviec`
--
ALTER TABLE `nguoitimviec`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tinhthanh`
--
ALTER TABLE `tinhthanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trangthaihoso`
--
ALTER TABLE `trangthaihoso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_HoSo` (`id_HoSo`),
  ADD KEY `id_DangTinCongViec` (`id_DangTinCongViec`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `congty`
--
ALTER TABLE `congty`
  MODIFY `id_CongTy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `dangtincongviec`
--
ALTER TABLE `dangtincongviec`
  MODIFY `id_DangTinCongViec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hoso`
--
ALTER TABLE `hoso`
  MODIFY `id_HoSo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `hotro`
--
ALTER TABLE `hotro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `luucongviec`
--
ALTER TABLE `luucongviec`
  MODIFY `id_LuuCongViec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `nganhnghe`
--
ALTER TABLE `nganhnghe`
  MODIFY `id_NganhNghe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT cho bảng `nguoitimviec`
--
ALTER TABLE `nguoitimviec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT cho bảng `tinhthanh`
--
ALTER TABLE `tinhthanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `trangthaihoso`
--
ALTER TABLE `trangthaihoso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dangtincongviec`
--
ALTER TABLE `dangtincongviec`
  ADD CONSTRAINT `dangtincongviec_ibfk_2` FOREIGN KEY (`id_NganhNghe`) REFERENCES `nganhnghe` (`id_NganhNghe`),
  ADD CONSTRAINT `dangtincongviec_ibfk_3` FOREIGN KEY (`id_CongTy`) REFERENCES `congty` (`id_CongTy`);

--
-- Các ràng buộc cho bảng `hoso`
--
ALTER TABLE `hoso`
  ADD CONSTRAINT `hoso_ibfk_1` FOREIGN KEY (`id_NguoiTimViec`) REFERENCES `nguoitimviec` (`id`),
  ADD CONSTRAINT `hoso_ibfk_2` FOREIGN KEY (`id_NganhNghe`) REFERENCES `nganhnghe` (`id_NganhNghe`);

--
-- Các ràng buộc cho bảng `luucongviec`
--
ALTER TABLE `luucongviec`
  ADD CONSTRAINT `luucongviec_ibfk_1` FOREIGN KEY (`id_NguoiTimViec`) REFERENCES `nguoitimviec` (`id`),
  ADD CONSTRAINT `luucongviec_ibfk_2` FOREIGN KEY (`id_DangTinCongViec`) REFERENCES `dangtincongviec` (`id_DangTinCongViec`);

--
-- Các ràng buộc cho bảng `trangthaihoso`
--
ALTER TABLE `trangthaihoso`
  ADD CONSTRAINT `trangthaihoso_ibfk_1` FOREIGN KEY (`id_HoSo`) REFERENCES `hoso` (`id_HoSo`),
  ADD CONSTRAINT `trangthaihoso_ibfk_2` FOREIGN KEY (`id_DangTinCongViec`) REFERENCES `dangtincongviec` (`id_DangTinCongViec`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
