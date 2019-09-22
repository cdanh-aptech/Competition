-- --------------------------------------------------------
-- Máy chủ:                      127.0.0.1
-- Server version:               10.3.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Phiên bản:           10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for competition
CREATE DATABASE IF NOT EXISTS `competition` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `competition`;

-- Dumping structure for table competition.contest
CREATE TABLE IF NOT EXISTS `contest` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Date_begin` date NOT NULL,
  `Date_end` date NOT NULL,
  `Date_result` date NOT NULL,
  `Noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `Thele` text COLLATE utf8_unicode_ci NOT NULL,
  `Thele_tomtat` text COLLATE utf8_unicode_ci NOT NULL,
  `Bantochuc` text COLLATE utf8_unicode_ci NOT NULL,
  `Bangiamkhao` text COLLATE utf8_unicode_ci NOT NULL,
  `Quycach` text COLLATE utf8_unicode_ci NOT NULL,
  `Phuongthuc` text COLLATE utf8_unicode_ci NOT NULL,
  `Doituong` text COLLATE utf8_unicode_ci NOT NULL,
  `Giaithuong` text COLLATE utf8_unicode_ci NOT NULL,
  `Active` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table competition.contest: ~2 rows (approximately)
/*!40000 ALTER TABLE `contest` DISABLE KEYS */;
REPLACE INTO `contest` (`id`, `Ten`, `Date_begin`, `Date_end`, `Date_result`, `Noidung`, `Thele`, `Thele_tomtat`, `Bantochuc`, `Bangiamkhao`, `Quycach`, `Phuongthuc`, `Doituong`, `Giaithuong`, `Active`, `created_at`, `updated_at`) VALUES
	(1, 'CUỘC THI CUSC Creative Cup 2020', '2019-10-01', '2019-12-22', '2019-12-27', '<p>• Ảnh dự thi là những bức ảnh có giá trị về mặt nội dung và nghệ thuật phản ánh về các hoạt động trong lĩnh vực logistics tại Việt Nam hoặc các nước trong khu vực Đông Nam Á. Bao gồm các hoạt động sau:<br />\r\n- Bên sử dụng dịch vụ: Doanh nghiệp xuất nhập khẩu, các chủ hàng…<br />\r\n- Bên cung cấp dịch logistics: Đại lý hải quan; dịch vụ vận tải đa phương thức:đường biển, đường bộ, hàng không, thủy nội địa, vận tải xuyên biên giới; dịch vụ kho bãi; Giao hàng chặng cuối; Thương mại điện tử.<br />\r\n- Mỗi tác giả gửi tối đa 20 ảnh dự thi.<br />\r\n- Mỗi tác giả chỉ được lấy một tên dự thi (ghi rõ họ và tên có dấu), nếu dùng nghệ danh phải ghi kèm tên chính thức như trên CMND hoặc hộ chiếu.</p>', '<p>- Tác phẩm dự thi sẽ theo từng chủ đề chọn và đúng quy định cụ thể.<br>\r\n- Các sản phẩm là đồ án môn học (project, assignment) hoặc các tác phẩm đã đạt giải trong và ngoài Trung tâm đều không được tham gia dự thi.<br>\r\n- Mỗi sản phẩm dự thi khi nộp cho BTC phải đảm bảo có nội dung lành mạnh, phù hợp thuần phong mỹ tục và phải đảm bảo bản quyền tác giả, không sao chép.<br>\r\n- Tác giả phải nộp các nội dung kèm theo hồ sơ dự thi để mô tả về sản phẩm của mình đáp ứng yêu cầu của Ban tổ chức cuộc thi.</p>', '<p>- Tác phẩm dự thi sẽ theo từng chủ đề chọn và đúng quy định cụ thể.<br>\r\n- Mỗi sản phẩm dự thi khi nộp cho BTC phải đảm bảo có nội dung lành mạnh, phù hợp thuần phong mỹ tục và phải đảm bảo bản quyền tác giả, không sao chép.</p>', '<p>- Trung Tâm Đào tạo Lập trình viên Quốc tế Aptech.<br />\r\n- Trung Tâm Đào tạo Mỹ thuật Đa phương tiện Arena.</p>', '<p>• Thạc sĩ, Nguyễn Hoàng Việt - Giám đốc Trung tâm Công nghệ phần mềm ĐHCT.<br />\r\n• Thạc sĩ, Nguyễn Hùng Dũng - Trưởng Bộ môn, Trung tâm Công nghệ phần mềm ĐHCT.<br />\r\n• Tiến sĩ, Trương Xuân Việt - Phó Giám đốc Trung tâm Công nghệ phần mềm ĐHCT.<br />\r\n• Kỹ sư Tin học, Nguyễn Trung Kiên - Phụ trách giảng dạy và hướng dẫn thực tập thực tế.</p>', '<p>• Ảnh được tải lên website cuộc thi: www.affalogisticsphotocontest.com<br />\r\n• Ảnh dự thi dưới dạng kỹ thuật số, file ảnh có định dạng jpg. Kích thước của chiều dài nhất tối thiểu 1920 pixel, độ phân giải 300 dpi.<br />\r\n• Đặt tên tác phẩm với với ký tự Alphabet (chữ hoa hoặc chữ thường), không sử dụng ký tự lạ như æ, ø, å… không dùng tên riêng và địa chỉ đặt tên tác phẩm.<br />\r\n• Ảnh dự thi chưa từng đoạt giải hoặc trưng bày triển lãm ở các cuộc thi quốc tế có ký hiệu VN (…) hoặc cuộc thi cấp quốc gia do Hội Nghệ sĩ Nhiếp ảnh Việt Nam tổ chức hoặc phối hợp tổ chức tại Việt Nam trước đây.<br />\r\n• Ảnh không phù hợp với thể lệ sẽ bị loại.<br />\r\n• Ảnh dự thi không được chắp ghép. Khi cần Ban Tổ chức cuộc thi có thể yêu cầu tác giả nộp file gốc để xác minh.</p>', '<p>• Tác giả điền đơn tham dự và gửi ảnh trực tiếp lên trang website: https://aptech.cusc.vn<br />\r\n• Ban Tổ chức cuộc thi không nhận ảnh gửi với bất kỳ hình thức nào khác (qua: Email, USB, CD...).<br />\r\n* Ảnh được giải được tính theo tiêu chuẩn điểm cấp tỉnh của Hội Nghệ sĩ Nhiếp ảnh Việt Nam.</p>', '<p>• Cuộc thi mở rộng cho tất cả các đối tượng trong và ngoài nước.<br />\r\n(Thành viên Ban tổ chức và Hội đồng Giám khảo không dự thi).</p>', '<p>• 01 Giải Nhất:1,000 USD/ giải.</p>\r\n\r\n<p>• 02 Giải Nhì: 700 USD/ giải.</p>\r\n\r\n<p>• 02 Giải Ba: 500 USD/ giải.</p>\r\n\r\n<p>• 02 Giải Ấn tượng (*): 500 USD/ giải.</p>\r\n\r\n<p>• 05 Giải Khuyến khích: 300 USD/ giải</p>', 1, '2019-09-20 11:29:05', '2019-09-20 11:29:05'),
	(2, 'CUỘC THI ẢNH LOGISTICS LẦN THỨ II', '2019-09-19', '2019-09-29', '2019-10-10', '<p>• Ảnh dự thi là những bức ảnh có giá trị về mặt nội dung và nghệ thuật phản ánh về các hoạt động trong lĩnh vực logistics tại Việt Nam hoặc các nước trong khu vực Đông Nam Á. Bao gồm các hoạt động sau:<br />\r\n- Hạ tầng logistics: cầu, đường; Cảng hàng không, cảng biển, cửa khẩu, cảng cạn (ICD); Trung tâm logistics…<br />\r\n- Thể chế, chính sách phục vụ phát triển ngành logistics: Hoạt động nghiên cứu; đào tạo, hội thảo; Công tác truyền thông; Các bộ luật, văn bản liên quan đến ngành.<br />\r\n- Mỗi tác giả gửi tối đa 10 ảnh dự thi.<br />\r\n- Mỗi tác giả chỉ được lấy một tên dự thi (ghi rõ họ và tên có dấu), nếu dùng nghệ danh phải ghi kèm tên chính thức như trên CMND hoặc hộ chiếu.</p>', '<p>• Tham gia cuộc thi đồng nghĩa với việc tác giả chấp thuận những quy định của cuộc thi.<br />\r\n• Không ghi chú thích, chữ ký trên ảnh, ảnh có dấu hiệu nhận dạng tác giả sẽ bị loại trực tiếp mà không phải thông báo.<br />\r\n• Ban Tổ chức cuộc thi được phép sử dụng hình ảnh dự thi để phục vụ cho công tác quảng bá, tuyên truyền liên quan đến cuộc thi mà không phải trả bất kỳ khoản nhuận bút nào khác ngoài nhuận ảnh dự treo (nếu có).<br />\r\n• Ban Tổ chức không chịu trách nhiệm các trường hợp mất mát, thất lạc nếu tác giả không gửi đúng quy định.<br />\r\n• Tác giả có ảnh đoạt giải hoặc trưng bày triển lãm sẽ được yêu cầu gửi file ảnh có dung lượng lớn, phù hợp với việc in ấn và trưng bày triển lãm, tối thiểu 5MB trở lên.<br />\r\n• Tác giả phải chịu trách nhiệm về bản quyền tác phẩm của mình. Ban tổ chức không chịu trách nhiệm về bất cứ tranh chấp nào liên quan tới bản quyền tác phẩm.</p>', '<p>• Tham gia cuộc thi đồng nghĩa với việc tác giả chấp thuận những quy định của cuộc thi.<br />\r\n• Không ghi chú thích, chữ ký trên ảnh, ảnh có dấu hiệu nhận dạng tác giả sẽ bị loại trực tiếp mà không phải thông báo.</p>', '<p>- Trung Tâm Trung tâm Công nghệ phần mềm Đại học Cần Thơ.<br />\r\n- Trung Tâm Đào tạo Lập trình viên Quốc tế Aptech&lt;/p&gt;</p>', '<p>• Thạc sĩ, Nguyễn Hùng Dũng - Trưởng Bộ môn, Trung tâm Công nghệ phần mềm ĐHCT.<br />\r\n• Tiến sĩ, Lưu Tiến Đạo - Phó Bộ phận đào tạo, Trung tâm Công nghệ phần mềm ĐHCT.</p>', '<p>• Ảnh được tải lên website cuộc thi: https://arena.cusc.vn<br />\r\n• Ảnh dự thi dưới dạng kỹ thuật số, file ảnh có định dạng jpg. Kích thước của chiều dài nhất tối thiểu 1920 pixel, độ phân giải 300 dpi.<br />\r\n• Đặt tên tác phẩm với với ký tự Alphabet (chữ hoa hoặc chữ thường), không sử dụng ký tự lạ như æ, ø, å… không dùng tên riêng và địa chỉ đặt tên tác phẩm.<br />\r\n• Ảnh dự thi chưa từng đoạt giải hoặc trưng bày triển lãm ở các cuộc thi quốc tế có ký hiệu VN (…) hoặc cuộc thi cấp quốc gia do Hội Nghệ sĩ Nhiếp ảnh Việt Nam tổ chức hoặc phối hợp tổ chức tại Việt Nam trước đây.<br />\r\n• Ảnh không phù hợp với thể lệ sẽ bị loại.<br />\r\n• Ảnh dự thi không được chắp ghép. Khi cần Ban Tổ chức cuộc thi có thể yêu cầu tác giả nộp file gốc để xác minh.</p>', '<p>• Tác giả điền đơn tham dự và gửi ảnh trực tiếp lên trang website: https://arena.cusc.vn<br />\r\n• Ban Tổ chức cuộc thi không nhận ảnh gửi với bất kỳ hình thức nào khác (qua: Email, USB, CD...).<br />\r\n* Ảnh được giải được tính theo tiêu chuẩn điểm cấp tỉnh của Hội Nghệ sĩ Nhiếp ảnh Việt Nam.</p>', '<p>• Cuộc thi mở rộng cho tất cả các đối tượng trong và ngoài nước.<br />\r\n(Thành viên Ban tổ chức và Hội đồng Giám khảo không dự thi).</p>', '<p>01 Giải Nhất:2,000 USD/ giải.</p>\r\n\r\n<p>02 Giải Nhì: 1000 USD/ giải.</p>\r\n\r\n<p>02 Giải Ba: 800 USD/ giải.</p>\r\n\r\n<p>02 Giải Ấn tượng (*): 700 USD/ giải.</p>\r\n\r\n<p>05 Giải Khuyến khích: 500 USD/ giải</p>', 0, '2019-09-18 16:41:32', '2019-09-18 16:41:32');
/*!40000 ALTER TABLE `contest` ENABLE KEYS */;

-- Dumping structure for table competition.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table competition.migrations: ~2 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table competition.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table competition.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table competition.result
CREATE TABLE IF NOT EXISTS `result` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Hang` int(11) NOT NULL DEFAULT 0,
  `id_tacpham` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `id_contest` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_result_contest` (`id_contest`),
  CONSTRAINT `FK_result_contest` FOREIGN KEY (`id_contest`) REFERENCES `contest` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table competition.result: ~0 rows (approximately)
/*!40000 ALTER TABLE `result` DISABLE KEYS */;
/*!40000 ALTER TABLE `result` ENABLE KEYS */;

-- Dumping structure for table competition.slide
CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Noidung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'trangchu',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `id_contest` int(10) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `FK_slide_contest` (`id_contest`),
  CONSTRAINT `FK_slide_contest` FOREIGN KEY (`id_contest`) REFERENCES `contest` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table competition.slide: ~9 rows (approximately)
/*!40000 ALTER TABLE `slide` DISABLE KEYS */;
REPLACE INTO `slide` (`id`, `Ten`, `Hinh`, `Noidung`, `link`, `created_at`, `updated_at`, `id_contest`) VALUES
	(1, 'Slide 1', 'HG_20197167340.jpg', 'Nội dung 1', 'trangchu', '2019-09-22 14:16:56', '2019-09-22 14:16:56', 1),
	(2, 'Slide 2', 'HG_20197167349.jpg', 'Nội dung 2', 'trangchu', '2019-09-22 14:17:03', '2019-09-22 14:17:03', 1),
	(3, 'Slide 3', 'HG_201971673356.jpg', 'Nội dung 3', 'trangchu', '2019-09-22 14:17:08', '2019-09-22 14:17:08', 1),
	(4, 'Slide 4', 'HG_201971673421.jpg', 'Nội dung 4', 'trangchu', '2019-09-22 14:17:13', '2019-09-22 14:17:13', 1),
	(5, 'Slide 5', 'HG_201971673428.jpg', 'Nội dung 5', 'trangchu', '2019-09-22 14:17:16', '2019-09-22 14:17:16', 1),
	(8, 'Slide 1', 'iyRk_HG_201971673428.jpg', 'Nội dung 1', 'trangchu', '2019-09-22 14:17:20', '2019-09-22 14:17:20', 2),
	(9, 'Slide 2', 'Q4wQ_HG_201971673421.jpg', NULL, 'trangchu', '2019-09-22 14:17:23', '2019-09-22 14:17:23', 2),
	(10, 'Slide 3', 'NTpy_HG_201971673356.jpg', NULL, 'trangchu', '2019-09-22 14:17:28', '2019-09-22 14:17:28', 2),
	(11, 'Slide 4', 'FiTj_HG_20197167349.jpg', NULL, 'trangchu', '2019-09-22 14:17:31', '2019-09-22 14:17:31', 2);
/*!40000 ALTER TABLE `slide` ENABLE KEYS */;

-- Dumping structure for table competition.tacpham
CREATE TABLE IF NOT EXISTS `tacpham` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `File` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_File` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Noidung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_user` bigint(20) unsigned DEFAULT NULL,
  `id_contest` int(10) unsigned DEFAULT NULL,
  `id_theloai` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `FK_tacpham_contest` (`id_contest`),
  KEY `FK_tacpham_users` (`id_user`),
  KEY `FK_tacpham_theloai` (`id_theloai`),
  CONSTRAINT `FK_tacpham_contest` FOREIGN KEY (`id_contest`) REFERENCES `contest` (`id`),
  CONSTRAINT `FK_tacpham_theloai` FOREIGN KEY (`id_theloai`) REFERENCES `theloai` (`id`),
  CONSTRAINT `FK_tacpham_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table competition.tacpham: ~5 rows (approximately)
/*!40000 ALTER TABLE `tacpham` DISABLE KEYS */;
REPLACE INTO `tacpham` (`id`, `Ten`, `File`, `link_File`, `Noidung`, `id_user`, `id_contest`, `id_theloai`, `created_at`, `updated_at`) VALUES
	(2, 'Forest Larch', 'PaXM_Forest_Larch.jpg', NULL, 'Rừng cây hùng vĩ, tạo nên một cảnh đẹp mạnh mẽ!', 2, 1, 3, '2019-09-19 23:28:38', '2019-09-19 23:28:38'),
	(3, 'Hawaii Creek', 'Nf95_Hawaii_Creek.jpg', NULL, 'Cảnh suối Hawaii Creek, cảnh thơ mộng, nơi ngồi thư giãn khi được nghe tiếng nước chảy róc rách.', 3, 1, 4, '2019-09-19 23:28:52', '2019-09-19 23:28:52'),
	(5, 'LAGO_LACAR Mountain', 'kr2z_LAGO_LACAR.jpg', NULL, 'Cảnh sông nước chảy len lỏi qua các ngọn núi hùng vĩ, một khung cảnh tuyệt đẹp', 4, 1, 3, '2019-09-22 20:11:54', '2019-09-22 20:11:54'),
	(6, 'Tác phẩm thêm', 'Forest_Larch.jpg', NULL, '<p>Đây là tác phẩm về Nhân vật game 3D<br />\r\n&nbsp;</p>', 2, 1, 3, '2019-09-22 20:41:46', '2019-09-22 20:41:46'),
	(7, 'Tác phẩm phim ngắn', 'Hawaii_Creek.jpg', NULL, '<p>Đây là Tác phẩm Phim ngắn tham gia cuộc thi<br />\r\n&nbsp;</p>', 2, 1, 4, '2019-09-22 20:41:50', '2019-09-22 20:41:50'),
	(8, 'Tác phẩm Web Contest', 'yEGC_btc.jpg', NULL, '<p>Đây là website đăng ký thi online tùy chỉnh nội dung, cùng admin để quản lý một cách dễ dàng.<br />\r\n&nbsp;</p>', 2, 1, 1, '2019-09-22 20:40:31', '2019-09-22 20:40:31');
/*!40000 ALTER TABLE `tacpham` ENABLE KEYS */;

-- Dumping structure for table competition.theloai
CREATE TABLE IF NOT EXISTS `theloai` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Ten_chude` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Thele_pdf` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Banner` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mucdich` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Doituong` text COLLATE utf8_unicode_ci NOT NULL,
  `Noidung` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Thele` text COLLATE utf8_unicode_ci NOT NULL,
  `Thele_tomtat` text COLLATE utf8_unicode_ci NOT NULL,
  `Quydinh` text COLLATE utf8_unicode_ci NOT NULL,
  `Tieuchi` text COLLATE utf8_unicode_ci NOT NULL,
  `Giaithuong` text COLLATE utf8_unicode_ci NOT NULL,
  `Giaithuong_tomtat` text COLLATE utf8_unicode_ci NOT NULL,
  `Quycach` text COLLATE utf8_unicode_ci NOT NULL,
  `Phuongthuc` text COLLATE utf8_unicode_ci NOT NULL,
  `Bantochuc` text COLLATE utf8_unicode_ci NOT NULL,
  `Bangiamkhao` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `id_contest` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_theloai_contest` (`id_contest`),
  CONSTRAINT `FK_theloai_contest` FOREIGN KEY (`id_contest`) REFERENCES `contest` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table competition.theloai: ~3 rows (approximately)
/*!40000 ALTER TABLE `theloai` DISABLE KEYS */;
REPLACE INTO `theloai` (`id`, `Ten`, `Ten_chude`, `Thele_pdf`, `Banner`, `Mucdich`, `Doituong`, `Noidung`, `Thele`, `Thele_tomtat`, `Quydinh`, `Tieuchi`, `Giaithuong`, `Giaithuong_tomtat`, `Quycach`, `Phuongthuc`, `Bantochuc`, `Bangiamkhao`, `created_at`, `updated_at`, `id_contest`) VALUES
	(1, 'Web App Challenge', 'Web App Challenge', 'Web_App_Challenge.pdf', NULL, '<p>- Tạo sân chơi cho các sinh viên CUSC yêu thích lập trình và cũng là dịp để CUSC tìm ra nhóm sinh viên Lập trình viên xuất sắc;<br />\r\n- Cuộc thi còn là dịp để sinh viên vận dụng kiến thức chuyên môn vào sản xuất một sản phẩm phần mềm thực tế có tính sáng tạo và vận dụng được vào thực tiễn đời sống;<br />\r\n- Nhằm chọn lọc được các sản phẩm tốt, những ý tưởng thiết kế phần mềm hay để tham gia các cuộc thi trong và ngoài nước.</p>', '<p>- Sinh viên đã và đang học tập tại CUSC.<br />\r\n- Sinh viên có thể dự thi theo nhóm hoặc cá nhân.</p>', '<p>- Cuộc thi dành cho các sinh viên yêu thích lập trình với chủ đề: "Web App Challenge".<br />\r\n- Ứng dụng CNTT vào cuộc sống thực tiễn như: học tập, giảng dạy, giải trí, thương mại…<br />\r\n- Liên quan đến những vấn đề thời sự của ngành công nghệ thông tin, an toàn thực phẩm, bảo vệ môi trường, đô thị thông minh, nông nghiệp thông minh,…</p>', '<p>Có 2 loại sản phẩm dự thi là front-end web và back-end web. Sinh viên có thể sử dụng bất kỳ công nghệ, nền tảng nào để xây dựng sản phẩm. Ví dụ:<br />\r\n- Front-end web:<br />\r\n&nbsp;+ HTML5, CSS3, Javascript, AngularJS, ...<br />\r\n&nbsp;+ Framework: Bootstrap, jQuery, VueJS, ...<br />\r\n- Back-end web<br />\r\n&nbsp;+ Ứng dụng web với Java: Servlet, JSP, Spring, ...<br />\r\n&nbsp;+Ứng dụng web với .Net: ASP.Net, ASP.Net MVC, ...<br />\r\n&nbsp;+ Ứng dụng web với PHP: PHP, PHP Laravel framework, ...</p>', '<p>Có 2 loại sản phẩm dự thi là front-end web và back-end web. Sinh viên có thể sử dụng bất kỳ công nghệ, nền tảng nào để xây dựng sản phẩm.</p>', '<p>- Tham gia cuộc thi đồng nghĩa với việc tác giả chấp thuận những quy định của cuộc thi.<br />\r\n- Ban tổ chức cuộc thi được phép sử dụng các hình ảnh và sản phẩm dự thi để phục vụ cho công tác quảng bá, truyền thông liên quan đến cuộc thi.<br />\r\n- Tác giả phải chịu trách nhiệm về bản quyền sản phẩm của mình. Ban tổ chức không chịu trách nhiệm về bất cứ tranh chấp nào liên quan tới bản quyền sản phẩm.<br />\r\n- Các sản phẩm đã đạt giải nhất, nhì, ba ở bất kỳ cuộc thi nào khác trong và ngoài Trung tâm đều không được tham gia dự thi.<br />\r\n- Sinh viên phải viết thuyết minh và trình bày sản phẩm dự thi cho hội đồng chấm thi.</p>', '<p>- Sản phẩm tham gia dự thi được đánh giá, chấm điểm dựa trên ba tiêu chí chính là <strong>tính hoàn thiện</strong>, <strong>tính công nghệ/ kỹ thuật</strong> và <strong>tính sáng tạo/thẩm mỹ</strong>, tỉ trọng đánh giá cho từng tiêu chí:<br />\r\n&nbsp;+ <u>Tính hoàn thiện</u>: 40%<br />\r\n&nbsp;+ <u>Tính công nghệ/ kỹ thuật</u>: 30%<br />\r\n&nbsp;+ <u>Tính sáng tạo/ thẩm mỹ</u>: 30%</p>', '<p>- Giải cho <em>Front-end</em> web:<br />\r\n&nbsp;o Giải 1: 1.200.000 đồng.<br />\r\n&nbsp;o Giải 2: 900.000 đồng.<br />\r\n&nbsp;o Giải 3: 600.000 đồng.<br />\r\n&nbsp;o 2 giải Khuyến khích, mỗi giải: 300.000 đồng.<br />\r\n- Giải cho <em>Back-end</em> web:<br />\r\n&nbsp;o Giải 1: 1.500.000 đồng.<br />\r\n&nbsp;o Giải 2: 1.000.000 đồng.<br />\r\n&nbsp;o Giải 3: 800.000 đồng.<br />\r\n&nbsp;o 2 giải Khuyến khích, mỗi giải: 300.000 đồng.</p>', '<p><em>Front-end</em> web &amp; <em>Backend</em> web:<br />\r\n&nbsp;o Giải 1: Từ 1.2 - 1.5 triệu VNĐ.<br />\r\n&nbsp;o Giải 2: Từ 900 nghìn - 1 triệu VNĐ.<br />\r\n&nbsp;o Giải 3: Từ 600 - 800 nghìn VNĐ.<br />\r\n&nbsp;o 2 giải Khuyến khích, mỗi giải: 300 nghìn VNĐ.</p>', '<p>* Tài liệu thuyết minh (Biểu mẫu Thuyết minh sản phẩm):<br />\r\n&nbsp;- Tổng quan về hiện trạng của lĩnh vực mà sản phẩm dự thi đang hướng đến.<br />\r\n&nbsp;- Mục tiêu, ý nghĩa và tính cấp thiết của sản phẩm dự thi.<br />\r\n&nbsp;- Khả năng ứng dụng của sản phẩm dự thi.<br />\r\n* Tài liệu và sản phẩm:<br />\r\n&nbsp;- Thiết kế của ứng dụng (giao diện và giải thuật xử lý, đặc biệt là các chức năng về xử lý nghiệp vụ của ứng dụng).<br />\r\n&nbsp;- Mã nguồn website, cơ sở dữ liệu, tài nguyên có liên quan đến website, website đã được biên dịch.</p>', '<p>* Đăng ký dự thi và nộp sản phẩm trực tuyến tại website:<br />\r\n<a href="https://aptech.cusc.vn/webappchallenge2019.html">https://aptech.cusc.vn/webappchallenge2019.html</a></p>', '<p>* Trưởng ban tổ chức: thầy Nguyễn Hùng Dũng - Trưởng Bộ môn KTPM&amp;ĐPT</p>', '<p>1. Trương Xuân Việt - Trưởng ban.<br />\r\n2. Nguyễn Hùng Dũng - thành viên.<br />\r\n3. Đại diện hiệp hội CNTT Cần Thơ - thành viên.</p>', '2019-09-22 20:52:21', '2019-09-22 20:52:21', 1),
	(3, 'Be a Super Hero', 'Sáng tạo nhân vật Game – Be a Super Hero', 'TheLe_NhanVatGame_v3.pdf', NULL, '<p>- Nhằm để tạo sân chơi, tạo môi trường học thuật và nghiên cứu trong sinh viên, hướng dẫn sinh viên sáng tạo các sản phẩm thực tế.<br />\r\n- Tạo môi trường rèn luyện kỹ năng sáng tạo và tạo nền tảng để sinh viên tham dự các cuộc thi khác trong và ngoài nước.<br />\r\n- Nằm trong chuỗi các cuộc thi để xét duyệt trao giải <strong>CUSC’s Creative Cup 2020 </strong>của nhánh Mỹ thuật Đa phương tiện.<br />\r\n- Khuyến khích sự đam mê và yêu thích công việc sáng tạo nhân vật trong sinh viên.<br />\r\n- Tiếp cận với quy trình thiết kế nhân vật hiện nay.</p>', '<p>* Sinh viên đang học tập tại CUSC.</p>', '<p>Chủ đề:<strong>&nbsp; “Be a Super Hero</strong>”.</p>\r\n\r\n<p>Thể loại:&nbsp; Mô hình thiết kế: nhân vật siêu anh hùng (Game 3D).</p>', '<p>* Nhân vật: Sinh viên có thể chọn bất kỳ nhân vật nào mà mình yêu thích (nhân vật tưởng tượng, nhân vật trong truyện, nhân vật lịch sử…)</p>\r\n\r\n<p>* Công cụ thể hiện: Các phần mềm dựng mô hình 3D: Autodesk 3Ds Max, Autodesk Maya, Zbrush…</p>', '<p>Nhân vật: Sinh viên có thể chọn bất kỳ nhân vật nào mà mình yêu thích (nhân vật tưởng tượng, nhân vật trong truyện, nhân vật lịch sử…)</p>', '<p>* Sinh viên cần thể hiện bản phác thảo tay nhân vật, và nhân vật render (kết xuất).<br />\r\n&nbsp;+ Bài dự thi cần được đặt tên và mô tả cho nhân vật của mình (không quá 300 từ).<br />\r\n&nbsp;+ Tác phẩm gửi cho BTC là các tập tin ảnh *.jpg hoặc *.pdf với khổ giấy A4 (2480 x 3508 px), độ phân giải từ 150 – 300 dpi.<br />\r\n&nbsp;+ Tác phẩm dự thi chưa tham gia cuộc thi khác.<br />\r\n&nbsp;+ Mỗi sản phẩm dự thi khi nộp cho BTC phải đảm bảo có nội dung lành mạnh, phù hợp thuần phong mỹ tục và phải đảm bảo bản quyền tác giả, không sao chép.<br />\r\n&nbsp;+ Sinh viên phải nộp các nội dung kèm theo mô tả về sản phẩm của mình đáp ứng yêu cầu của BTC cuộc thi.<br />\r\n&nbsp;+ Mỗi nhóm dự thi phải hoàn thành việc báo cáo sản phẩm của nhóm mình. Nếu không sẽ không công nhận kết quả dự thi của nhóm đó.<br />\r\n* Trung tâm được quyền sử dụng kết quả của sản phẩm dự thi cho các hoạt động của Trung tâm.</p>', '<p>* Sản phẩm tham gia dự thi được đánh giá, chấm điểm dựa trên 4 tiêu chí: <strong>Sự sáng tạo</strong>, <strong>Kỹ thuật (công nghệ)</strong>, <strong>Nghệ thuật (thẩm mỹ)</strong> và <strong>tính Hoàn thiện</strong>, tỉ trọng đánh giá cho từng tiêu chí:<br />\r\n&nbsp;+ <u>Sự sáng tạo</u>: 40%<br />\r\n&nbsp;+ <u>Kỹ thuật (công nghệ)</u>: 20%<br />\r\n&nbsp;+ <u>Nghệ thuật (thẩm mỹ)</u>: 20%<br />\r\n&nbsp;+ <u>Tính hoàn thiện</u>: 20%</p>', '<p>- Giải Nhất:&nbsp;1,200,000&nbsp;đồng.<br />\r\n- Giải Nhì:&nbsp;900,000&nbsp;đồng.<br />\r\n- Giải Ba:&nbsp;600,000 đồng.<br />\r\n- Giải Khuyến khích:&nbsp;300.000 đồng.</p>', '<p>- Giải Nhất:&nbsp;1,200,000&nbsp;đồng.<br />\r\n- Giải Nhì:&nbsp;900,000&nbsp;đồng.<br />\r\n- Giải Ba:&nbsp;600,000 đồng.<br />\r\n- Giải Khuyến khích:&nbsp;300.000 đồng.</p>', '<p>- Số lượng sản phẩm dự thi theo cá nhận hoặc nhóm: không hạn chế.<br />\r\n- Sản phẩm dự thi bao gồm:<br />\r\n&nbsp;+ Ảnh sản phẩm (*.jpg hoặc *.pdf).<br />\r\n&nbsp;+ Tài liệu tác phẩm (*.pdf).<br />\r\n&nbsp;+ Thí sinh nộp bài thi trực tiếp vào website: <a href="https://arena.cusc.vn/cuocthiphim_tknv2019.html"><em>https://arena.cusc.vn/cuocthiphim_tknv2019.html</em></a></p>', '<p>Dự thi theo nhóm hoặc cá nhân.</p>', '<p>* Trưởng ban tổ chức: thầy <strong>Nguyễn Hùng Dũng</strong> – Trưởng Bộ môn KTPM&amp;ĐPT</p>', '<p>* Những thầy/cô có nhiều kinh nghiệm trong các lĩnh vực Đa phương tiện:</p>\r\n\r\n<ol>\r\n	<li>Thầy <strong>Nguyễn Hoàng Việt</strong> – Trưởng ban.</li>\r\n	<li>Thầy <strong>Nguyễn Trung Kiên</strong> – Thành viên.</li>\r\n	<li>Thầy <strong>Võ Duy Anh</strong> – Thành viên.</li>\r\n</ol>', '2019-09-21 03:30:21', '2019-09-21 03:30:21', 1),
	(4, 'Be a Good One', 'Phim ngắn – Be a Good One', 'TheLe_PhimNgan.pdf', NULL, '<p>- Nhằm để tạo sân chơi, tạo môi trường học thuật và nghiên cứu trong sinh viên, hướng dẫn sinh viên sáng tạo các sản phẩm thực tế.<br />\r\n- Tạo môi trường rèn luyện kỹ năng sáng tạo và tạo nền tảng để sinh viên tham dự các cuộc thi khác trong và ngoài nước.<br />\r\n- Nằm trong chuỗi các cuộc thi để xét duyệt trao giải <strong>CUSC’s Creative Cup 2020 </strong>của nhánh Mỹ thuật Đa phương tiện.<br />\r\n- Khuyến khích sự đam mê và yêu thích công việc làm phim trong sinh viên.<br />\r\n- Tiếp cận với quy trình làm phim chuyên nghiệp.</p>', '<p>* Sinh viên đang học tập tại CUSC.</p>', '<p><strong>*Chủ đề: </strong></p>\r\n\r\n<p><strong>&nbsp; “Be a Good One</strong>”.</p>\r\n\r\n<p>&nbsp;- Nội dung sáng tác: đề cao được lối sống và đạo đức tốt của nhân vật trong nhà trường hoặc ngoài xã hội.</p>\r\n\r\n<p>*<strong> Thể loại:</strong></p>\r\n\r\n<p>- Tác phẩm dự thi là một trong các thể loại: phim ngắn, phim kỹ xảo, phim hoạt hình.</p>', '<p>- Số lượng sản phẩm dự thi theo nhóm hoặc cá nhân: không hạn chế.<br />\r\n- Sinh viên phải nộp các nội dung kèm theo hồ sơ dự thi để mô tả về sản phẩm của mình đáp ứng yêu cầu của Ban tổ chức cuộc thi.<br />\r\n- Mỗi nhóm dự thi phải hoàn thành việc báo cáo sản phẩm của nhóm mình. Nếu không sẽ không công nhận kết quả dự thi của nhóm đó.</p>', '<p>- Số lượng sản phẩm dự thi theo nhóm hoặc cá nhân: không hạn chế.<br />\r\n- Sinh viên phải nộp các nội dung kèm theo hồ sơ dự thi để mô tả về sản phẩm của mình đáp ứng yêu cầu của Ban tổ chức cuộc thi.</p>', '<p>- Các sản phẩm là đồ án môn học (project, assignment) hoặc các tác phẩm đã đạt giải trong và ngoài Trung tâm đều không được tham gia dự thi.<br />\r\n- Mỗi sản phẩm dự thi khi nộp cho BTC phải đảm bảo có nội dung lành mạnh, phù hợp thuần phong mỹ tục và phải đảm bảo bản quyền tác giả, không sao chép.<br />\r\n- Sinh viên phải nộp các nội dung kèm theo hồ sơ dự thi để mô tả về sản phẩm của mình đáp ứng yêu cầu của Ban tổ chức cuộc thi.<br />\r\n- Mỗi nhóm dự thi phải hoàn thành việc báo cáo sản phẩm của nhóm mình. Nếu không sẽ không công nhận kết quả dự thi của nhóm đó.<br />\r\n- Trung tâm được quyền sử dụng kết quả của sản phẩm dự thi cho các hoạt động của Trung tâm.</p>', '<p>* Sản phẩm tham gia dự thi được đánh giá, chấm điểm dựa trên 4 tiêu chí: <strong>Kịch bản</strong>, <strong>Kỹ thuật (công nghệ)</strong>, <strong>Nghệ thuật (thẩm mỹ)</strong> và<strong> tính Hoàn thiện</strong>, tỉ trọng đánh giá cho từng tiêu chí:</p>\r\n\r\n<p>+ <u>Kịch bản</u>: 25%<br />\r\n+ <u>Kỹ thuật (công nghệ)</u>: 25%<br />\r\n+ <u>Nghệ thuật (thẩm mỹ)</u>: 25%<br />\r\n+ <u>Tính hoàn thiện</u>: 25%</p>', '<p>- 01 Giải Nhất:&nbsp;1.500.000&nbsp;đồng.</p>\r\n\r\n<p>- 01 Giải Nhì:&nbsp;1.000.000&nbsp;đồng.</p>\r\n\r\n<p>- 01 Giải Ba:&nbsp;800.000 đồng.</p>\r\n\r\n<p>- 02 Giải Khuyến khích:&nbsp;300.000 đồng/giải.</p>', '<p>- 01 Giải Nhất:&nbsp;1.500.000&nbsp;đồng.</p>\r\n\r\n<p>- 01 Giải Nhì:&nbsp;1.000.000&nbsp;đồng.</p>\r\n\r\n<p>- 01 Giải Ba:&nbsp;800.000 đồng.</p>\r\n\r\n<p>- 02 Giải Khuyến khích:&nbsp;300.000 đồng/giải.</p>', '<p>- Số lượng sản phẩm dự thi theo nhóm hoặc cá nhân: không hạn chế.</p>\r\n\r\n<p>- Sản phẩm dự thi bao gồm:<br />\r\n&nbsp;+ Sản phẩm Phim (*.mp4)<br />\r\n&nbsp;+ Tài liệu dự án (*.pdf hoặc *.doc)</p>\r\n\r\n<p>&nbsp;</p>', '<p>* Thí sinh nộp bài thi trực tiếp vào website: <a href="https://arena.cusc.vn/cuocthiphim_tknv2019.html"><em>https://arena.cusc.vn/cuocthiphim_tknv2019.html</em></a></p>', '<p>* Trưởng ban tổ chức: thầy <strong>Nguyễn Hùng Dũng</strong> – Trưởng Bộ môn KTPM&amp;ĐPT.</p>', '<p>* Những thầy/cô có nhiều kinh nghiệm trong các lĩnh vực Đa phương tiện:<br />\r\n&nbsp;1. Thầy <strong>Nguyễn Hoàng Việt</strong> – Trưởng ban.<br />\r\n&nbsp;2. Thầy <strong>Nguyễn Trung Kiên</strong> – Thành viên.<br />\r\n&nbsp;3. Thầy <strong>Võ Duy Anh</strong> – Thành viên.</p>', '2019-09-21 03:30:57', '2019-09-21 03:30:57', 1);
/*!40000 ALTER TABLE `theloai` ENABLE KEYS */;

-- Dumping structure for table competition.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table competition.users: ~4 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `Ten`, `Diachi`, `email`, `email_verified_at`, `password`, `quyen`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Châu Duy Anh', 'Q. Ninh Kiều - TPCT', 'admin@competition.vn', NULL, '$2y$10$t05GryqrMxk25u8EZRV0/OvdylW8OvVAztLie/JEWEE6zAQkuebJO', 1, NULL, '2019-09-12 20:32:00', '2019-09-12 22:44:00'),
	(2, 'Duy Anh', 'P. Tân An - Q. Ninh Kiều - TP. Cần Thơ', 'cdanha18037@cusc.ctu.edu.vn', NULL, '$2y$10$4dRuXSbRIoZWVbsi.SeeQ.n..mc2uo6yXymKSEjjTViAcKcV5ZNNu', 0, NULL, '2019-09-12 20:34:42', '2019-09-17 01:33:21'),
	(3, 'Châu Anh', 'An Hội - Ninh Kiều - TPCT', 'duyanh.bchqs@gmail.com', NULL, '$2y$10$n.ckmgAvGAnc/LZdzfY0WOnEZTEhp4TokpfKFlJP6Or.e5/hdXQpa', 0, NULL, '2019-09-17 02:05:40', '2019-09-17 02:05:40'),
	(4, 'Châu Duy', 'Tân An, Ninh Kiều, TP.Cần Thơ', 'freemask79@gmail.com', NULL, '$2y$10$DwmKF7uONTLo4dlEgyosLeVDpMYTdS8ouQzqhqyE1tYxkt.hEZA8G', 0, NULL, '2019-09-17 02:11:56', '2019-09-17 02:11:56');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
