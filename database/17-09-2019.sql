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

-- Dumping structure for table competition.bantochuc
CREATE TABLE IF NOT EXISTS `bantochuc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ThanhphanBTC` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `ThanhphanGK` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `id_contest` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_bantochuc_contest` (`id_contest`),
  CONSTRAINT `FK_bantochuc_contest` FOREIGN KEY (`id_contest`) REFERENCES `contest` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table competition.bantochuc: ~2 rows (approximately)
/*!40000 ALTER TABLE `bantochuc` DISABLE KEYS */;
REPLACE INTO `bantochuc` (`id`, `ThanhphanBTC`, `ThanhphanGK`, `created_at`, `updated_at`, `id_contest`) VALUES
	(1, '<p>- Trung Tâm Đào tạo Lập trình viên Quốc tế Aptech.<br />\r\n- Trung Tâm Đào tạo Mỹ thuật Đa phương tiện Arena.</p>', '<p>• Thạc sĩ, Nguyễn Hoàng Việt - Giám đốc Trung tâm Công nghệ phần mềm ĐHCT.<br />\r\n• Thạc sĩ, Nguyễn Hùng Dũng - Trưởng Bộ môn, Trung tâm Công nghệ phần mềm ĐHCT.<br />\r\n• Tiến sĩ, Trương Xuân Việt - Phó Giám đốc Trung tâm Công nghệ phần mềm ĐHCT.<br />\r\n• Kỹ sư Tin học, Nguyễn Trung Kiên - Phụ trách giảng dạy và hướng dẫn thực tập thực tế</p>', '2019-09-17 07:24:08', '2019-09-17 07:24:08', 1),
	(4, '<p>- Trung Tâm Trung tâm Công nghệ phần mềm Đại học Cần Thơ.</p>\r\n\r\n<p>- Trung Tâm Đào tạo Lập trình viên Quốc tế Aptech</p>', '<p>• Thạc sĩ, Nguyễn Hùng Dũng - Trưởng Bộ môn, Trung tâm Công nghệ phần mềm ĐHCT.<br />\r\n• Tiến sĩ, Lưu Tiến Đạo - Phó Bộ phận đào tạo, Trung tâm Công nghệ phần mềm ĐHCT.</p>', '2019-09-16 01:04:45', '2019-09-16 01:04:45', 2);
/*!40000 ALTER TABLE `bantochuc` ENABLE KEYS */;

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
REPLACE INTO `contest` (`id`, `Ten`, `Date_begin`, `Date_end`, `Date_result`, `Noidung`, `Thele`, `Thele_tomtat`, `Quycach`, `Phuongthuc`, `Doituong`, `Giaithuong`, `Active`, `created_at`, `updated_at`) VALUES
	(1, 'CUỘC THI ẢNH LOGISTICS QUỐC TẾ LẦN THỨ I', '2019-07-16', '2019-10-16', '2019-10-25', '<p>• Ảnh dự thi là những bức ảnh có giá trị về mặt nội dung và nghệ thuật phản ánh về các hoạt động trong lĩnh vực logistics tại Việt Nam hoặc các nước trong khu vực Đông Nam Á. Bao gồm các hoạt động sau:<br />\r\n- Bên sử dụng dịch vụ: Doanh nghiệp xuất nhập khẩu, các chủ hàng…<br />\r\n- Bên cung cấp dịch logistics: Đại lý hải quan; dịch vụ vận tải đa phương thức:đường biển, đường bộ, hàng không, thủy nội địa, vận tải xuyên biên giới; dịch vụ kho bãi; Giao hàng chặng cuối; Thương mại điện tử.<br />\r\n- Mỗi tác giả gửi tối đa 20 ảnh dự thi.<br />\r\n- Mỗi tác giả chỉ được lấy một tên dự thi (ghi rõ họ và tên có dấu), nếu dùng nghệ danh phải ghi kèm tên chính thức như trên CMND hoặc hộ chiếu.</p>', '<p>• Tham gia cuộc thi đồng nghĩa với việc tác giả chấp thuận những quy định của cuộc thi. • Không ghi chú thích, chữ ký trên ảnh, ảnh có dấu hiệu nhận dạng tác giả sẽ bị loại trực tiếp mà không phải thông báo.<br />\r\n• Ban Tổ chức cuộc thi được phép sử dụng hình ảnh dự thi để phục vụ cho công tác quảng bá, tuyên truyền liên quan đến cuộc thi mà không phải trả bất kỳ khoản nhuận bút nào khác ngoài nhuận ảnh dự treo (nếu có).<br />\r\n• Ban Tổ chức không chịu trách nhiệm các trường hợp mất mát, thất lạc nếu tác giả không gửi đúng quy định.<br />\r\n• Tác giả có ảnh đoạt giải hoặc trưng bày triển lãm sẽ được yêu cầu gửi file ảnh có dung lượng lớn, phù hợp với việc in ấn và trưng bày triển lãm, tối thiểu 5MB trở lên.<br />\r\n• Tác giả phải chịu trách nhiệm về bản quyền tác phẩm của mình. Ban tổ chức không chịu trách nhiệm về bất cứ tranh chấp nào liên quan tới bản quyền tác phẩm.</p>', '<p>• Tham gia cuộc thi đồng nghĩa với việc tác giả chấp thuận những quy định của cuộc thi.<br />\r\n• Không ghi chú thích, chữ ký trên ảnh, ảnh có dấu hiệu nhận dạng tác giả sẽ bị loại trực tiếp mà không phải thông báo.</p>', '<p>• Ảnh được tải lên website cuộc thi: www.affalogisticsphotocontest.com<br />\r\n• Ảnh dự thi dưới dạng kỹ thuật số, file ảnh có định dạng jpg. Kích thước của chiều dài nhất tối thiểu 1920 pixel, độ phân giải 300 dpi.<br />\r\n• Đặt tên tác phẩm với với ký tự Alphabet (chữ hoa hoặc chữ thường), không sử dụng ký tự lạ như æ, ø, å… không dùng tên riêng và địa chỉ đặt tên tác phẩm.<br />\r\n• Ảnh dự thi chưa từng đoạt giải hoặc trưng bày triển lãm ở các cuộc thi quốc tế có ký hiệu VN (…) hoặc cuộc thi cấp quốc gia do Hội Nghệ sĩ Nhiếp ảnh Việt Nam tổ chức hoặc phối hợp tổ chức tại Việt Nam trước đây.<br />\r\n• Ảnh không phù hợp với thể lệ sẽ bị loại.<br />\r\n• Ảnh dự thi không được chắp ghép. Khi cần Ban Tổ chức cuộc thi có thể yêu cầu tác giả nộp file gốc để xác minh.</p>', '<p>• Tác giả điền đơn tham dự và gửi ảnh trực tiếp lên trang website: https://aptech.cusc.vn<br />\r\n• Ban Tổ chức cuộc thi không nhận ảnh gửi với bất kỳ hình thức nào khác (qua: Email, USB, CD...).<br />\r\n* Ảnh được giải được tính theo tiêu chuẩn điểm cấp tỉnh của Hội Nghệ sĩ Nhiếp ảnh Việt Nam.</p>', '<p>• Cuộc thi mở rộng cho tất cả các đối tượng trong và ngoài nước.<br />\r\n(Thành viên Ban tổ chức và Hội đồng Giám khảo không dự thi).</p>', '<p>• 01 Giải Nhất:1,000 USD/ giải.</p>\r\n\r\n<p>• 02 Giải Nhì: 700 USD/ giải.</p>\r\n\r\n<p>• 02 Giải Ba: 500 USD/ giải.</p>\r\n\r\n<p>• 02 Giải Ấn tượng (*): 500 USD/ giải.</p>\r\n\r\n<p>• 05 Giải Khuyến khích: 300 USD/ giải</p>', 1, '2019-09-16 02:38:18', '2019-09-16 02:38:18'),
	(2, 'CUỘC THI ẢNH LOGISTICS LẦN THỨ II', '2019-09-19', '2019-09-29', '2019-10-10', '<p>• Ảnh dự thi là những bức ảnh có giá trị về mặt nội dung và nghệ thuật phản ánh về các hoạt động trong lĩnh vực logistics tại Việt Nam hoặc các nước trong khu vực Đông Nam Á. Bao gồm các hoạt động sau:<br />\r\n- Hạ tầng logistics: cầu, đường; Cảng hàng không, cảng biển, cửa khẩu, cảng cạn (ICD); Trung tâm logistics…<br />\r\n- Thể chế, chính sách phục vụ phát triển ngành logistics: Hoạt động nghiên cứu; đào tạo, hội thảo; Công tác truyền thông; Các bộ luật, văn bản liên quan đến ngành.<br />\r\n- Mỗi tác giả gửi tối đa 20 ảnh dự thi.<br />\r\n- Mỗi tác giả chỉ được lấy một tên dự thi (ghi rõ họ và tên có dấu), nếu dùng nghệ danh phải ghi kèm tên chính thức như trên CMND hoặc hộ chiếu.</p>', '<p>• Tham gia cuộc thi đồng nghĩa với việc tác giả chấp thuận những quy định của cuộc thi.<br />\r\n• Không ghi chú thích, chữ ký trên ảnh, ảnh có dấu hiệu nhận dạng tác giả sẽ bị loại trực tiếp mà không phải thông báo.<br />\r\n• Ban Tổ chức cuộc thi được phép sử dụng hình ảnh dự thi để phục vụ cho công tác quảng bá, tuyên truyền liên quan đến cuộc thi mà không phải trả bất kỳ khoản nhuận bút nào khác ngoài nhuận ảnh dự treo (nếu có).<br />\r\n• Ban Tổ chức không chịu trách nhiệm các trường hợp mất mát, thất lạc nếu tác giả không gửi đúng quy định.<br />\r\n• Tác giả có ảnh đoạt giải hoặc trưng bày triển lãm sẽ được yêu cầu gửi file ảnh có dung lượng lớn, phù hợp với việc in ấn và trưng bày triển lãm, tối thiểu 5MB trở lên.<br />\r\n• Tác giả phải chịu trách nhiệm về bản quyền tác phẩm của mình. Ban tổ chức không chịu trách nhiệm về bất cứ tranh chấp nào liên quan tới bản quyền tác phẩm.</p>', '<p>• Tham gia cuộc thi đồng nghĩa với việc tác giả chấp thuận những quy định của cuộc thi.<br />\r\n• Không ghi chú thích, chữ ký trên ảnh, ảnh có dấu hiệu nhận dạng tác giả sẽ bị loại trực tiếp mà không phải thông báo.</p>', '<p>• Ảnh được tải lên website cuộc thi: https://arena.cusc.vn<br />\r\n• Ảnh dự thi dưới dạng kỹ thuật số, file ảnh có định dạng jpg. Kích thước của chiều dài nhất tối thiểu 1920 pixel, độ phân giải 300 dpi.<br />\r\n• Đặt tên tác phẩm với với ký tự Alphabet (chữ hoa hoặc chữ thường), không sử dụng ký tự lạ như æ, ø, å… không dùng tên riêng và địa chỉ đặt tên tác phẩm.<br />\r\n• Ảnh dự thi chưa từng đoạt giải hoặc trưng bày triển lãm ở các cuộc thi quốc tế có ký hiệu VN (…) hoặc cuộc thi cấp quốc gia do Hội Nghệ sĩ Nhiếp ảnh Việt Nam tổ chức hoặc phối hợp tổ chức tại Việt Nam trước đây.<br />\r\n• Ảnh không phù hợp với thể lệ sẽ bị loại.<br />\r\n• Ảnh dự thi không được chắp ghép. Khi cần Ban Tổ chức cuộc thi có thể yêu cầu tác giả nộp file gốc để xác minh.</p>', '<p>• Tác giả điền đơn tham dự và gửi ảnh trực tiếp lên trang website: https://arena.cusc.vn<br />\r\n• Ban Tổ chức cuộc thi không nhận ảnh gửi với bất kỳ hình thức nào khác (qua: Email, USB, CD...).<br />\r\n* Ảnh được giải được tính theo tiêu chuẩn điểm cấp tỉnh của Hội Nghệ sĩ Nhiếp ảnh Việt Nam.</p>', '<p>• Cuộc thi mở rộng cho tất cả các đối tượng trong và ngoài nước.<br />\r\n(Thành viên Ban tổ chức và Hội đồng Giám khảo không dự thi).</p>', '<p>01 Giải Nhất:2,000 USD/ giải.</p>\r\n\r\n<p>02 Giải Nhì: 1000 USD/ giải.</p>\r\n\r\n<p>02 Giải Ba: 800 USD/ giải.</p>\r\n\r\n<p>02 Giải Ấn tượng (*): 700 USD/ giải.</p>\r\n\r\n<p>05 Giải Khuyến khích: 500 USD/ giải</p>', 0, '2019-09-16 02:38:18', '2019-09-16 02:38:18');
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
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
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
	(1, 'Slide 1', 'HG_20197167340.jpg', 'Nội dung 1', 'liên kết 1', '2019-09-14 21:22:30', '2019-09-14 21:22:30', 1),
	(2, 'Slide 2', 'HG_20197167349.jpg', 'Nội dung 2', 'liên kết 2', '2019-09-14 21:18:11', '2019-09-14 21:18:12', 1),
	(3, 'Slide 3', 'HG_201971673356.jpg', 'Nội dung 3', 'liên kết 3', '2019-09-14 21:20:44', '2019-09-14 21:20:44', 1),
	(4, 'Slide 4', 'HG_201971673421.jpg', 'Nội dung 4', 'liên kết 4', '2019-09-15 01:39:13', '2019-09-15 01:39:13', 1),
	(5, 'Slide 5', 'HG_201971673428.jpg', 'Nội dung 5', 'liên kết 5', '2019-09-14 21:22:34', '2019-09-14 21:22:34', 1),
	(8, 'Slide 1', 'iyRk_HG_201971673428.jpg', 'Nội dung 1', 'liên kết 1', '2019-09-15 01:35:07', '2019-09-15 01:35:07', 2),
	(9, 'Slide 2', 'Q4wQ_HG_201971673421.jpg', NULL, NULL, '2019-09-15 01:14:00', '2019-09-15 01:14:00', 2),
	(10, 'Slide 3', 'NTpy_HG_201971673356.jpg', NULL, NULL, '2019-09-15 01:14:21', '2019-09-15 01:14:21', 2),
	(11, 'Slide 4', 'FiTj_HG_20197167349.jpg', NULL, NULL, '2019-09-15 01:14:42', '2019-09-15 01:14:42', 2);
/*!40000 ALTER TABLE `slide` ENABLE KEYS */;

-- Dumping structure for table competition.tacpham
CREATE TABLE IF NOT EXISTS `tacpham` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_Hinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Noidung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_user` bigint(20) unsigned DEFAULT NULL,
  `id_contest` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `FK_tacpham_contest` (`id_contest`),
  KEY `FK_tacpham_users` (`id_user`),
  CONSTRAINT `FK_tacpham_contest` FOREIGN KEY (`id_contest`) REFERENCES `contest` (`id`),
  CONSTRAINT `FK_tacpham_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table competition.tacpham: ~5 rows (approximately)
/*!40000 ALTER TABLE `tacpham` DISABLE KEYS */;
REPLACE INTO `tacpham` (`id`, `Ten`, `Hinh`, `link_Hinh`, `Noidung`, `id_user`, `id_contest`, `created_at`, `updated_at`) VALUES
	(1, 'Hopetoun natural falls', 'Hopetoun_falls.jpg', NULL, 'Hình thác nước Hopetoun, tạo nên một cảnh thiên nhiên tuyệt  đẹp', 1, 1, '2019-09-17 03:48:15', '2019-09-17 03:48:15'),
	(2, 'Forest Larch', 'PaXM_Forest_Larch.jpg', NULL, 'Rừng cây hùng vĩ, tạo nên một cảnh đẹp mạnh mẽ!', 2, 2, '2019-09-17 04:30:46', '2019-09-17 04:30:46'),
	(3, 'Hawaii Creek', 'Nf95_Hawaii_Creek.jpg', NULL, 'Cảnh suối Hawaii Creek, cảnh thơ mộng, nơi ngồi thư giãn khi được nghe tiếng nước chảy róc rách.', 3, 1, '2019-09-17 04:41:37', '2019-09-17 04:41:37'),
	(4, 'Mountain LAGO_LACAR', 'n1L0_LAGO_LACAR.jpg', NULL, 'Một khung cảnh núi non xen lẫn sông nước, tạo nên khung cảnh thơ mộng', 1, 1, '2019-09-17 05:39:57', '2019-09-17 05:39:57'),
	(5, 'LAGO_LACAR Mountain', 'kr2z_LAGO_LACAR.jpg', NULL, 'Cảnh sông nước chảy len lỏi qua các ngọn núi hùng vĩ, một khung cảnh tuyệt đẹp', 4, 2, '2019-09-17 05:44:44', '2019-09-17 05:44:44');
/*!40000 ALTER TABLE `tacpham` ENABLE KEYS */;

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
