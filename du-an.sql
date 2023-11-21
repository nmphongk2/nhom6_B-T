-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2023 lúc 08:42 PM
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
-- Cơ sở dữ liệu: `duan_mau2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ma_kh` varchar(20) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ngay_lap` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_kh`, `ma_hh`, `ngay_lap`) VALUES
(185, 'đếsản phẩm tốt\r\n', '10diem', 47, '2023-10-21 23:43:36'),
(190, 'Mua 10 năm rồi mà không được bảo hành', 'khach2', 29, '2023-10-25 18:20:46'),
(191, 'Ship đâu cũng được', 'khach2', 48, '2023-10-25 20:25:19'),
(193, 'khi nào giảm 90%', 'khach1', 50, '2023-10-25 20:29:43'),
(194, 'ujjj', 'khach2', 57, '2023-10-25 23:10:29'),
(195, 'Sản Phẩm Tốt\r\n', 'khach2', 27, '2023-10-26 01:04:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(30) NOT NULL,
  `don_gia` double NOT NULL,
  `giam_gia` int(2) NOT NULL,
  `hinh` varchar(225) NOT NULL,
  `mo_ta` text NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `dac_biet` tinyint(1) NOT NULL DEFAULT 0,
  `so_luong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `mo_ta`, `ma_loai`, `luot_xem`, `ngay_nhap`, `dac_biet`, `so_luong`) VALUES
(27, 'XIAOMI MI11', 7900000, 6900000, '20231008182728.webp', 'Xiaomi Redmi 12 mẫu điện thoại mới nhất được nhà Xiaomi tung ra vào tháng 06/2023 khiến cho cộng đồng đam mê công nghệ vô cùng thích thú. Máy khoác lên mình một vẻ ngoài cá tính, màn hình lớn đem đến trải nghiệm đã mắt cùng một hiệu năng ổn định với mọi tác vụ.\r\nVẻ ngoài đơn giản\r\nThiết kế của Xiaomi Redmi 12 4GB được lấy cảm hứng từ sự tối giản khi mặt lưng được làm từ kính bóng bẩy đi cùng với thân máy khá mỏng nhẹ mang đến vẻ ngoài thời trang, trẻ trung cùng khả năng cầm nắm tốt hơn khi sử dụng trong thời gian dài. \r\n\r\nThiết kế đẹp mắt - Xiaomi Redmi 12 4GB\r\n\r\nMặt trước của điện thoại thiết kế kiểu nốt ruồi, đồng thời các viền xung quanh được hãng tối ưu khá mỏng hứa hẹn mang đến cho bạn góc nhìn rộng hơn giúp việc giải trí trở nên trọn vẹn.\r\n\r\nMàn hình lớn giải trí vui\r\nVới mong muốn đem lại sự thư giãn sau giờ làm việc căng thẳng hoặc một góc nhìn rõ ràng sắc nét hơn. Xiaomi đã trang bị tấm nền IPS LCD với kích thước lên đến 6.79 inch cùng độ phân giải Full HD+ (1080 x 2460 Pixels) giúp bạn xem các nội dung trên YouTube hoặc Netflix tốt hơn. Màn hình này cho chất lượng hiển thị tốt, màu sắc chân thực, độ tương phản cao và góc nhìn rộng.\r\n\r\nMàn hình sắc nét - Xiaomi Redmi 12 4GB\r\n\r\nRedmi 12 hiển thị hình ảnh khá tốt khi ở ngoài trời nắng, không bị mờ khi máy có độ sáng tối đa lên đến 550 nits một con số ổn trong phân khúc. Ngoài ra, màn hình này còn được hỗ trợ tần số quét 90 Hz giúp cho các thao tác vuốt chạm trên máy được diễn ra mượt mà và nhanh chóng hơn.\r\n\r\nTrải nghiệm ổn định với các tác vụ thường ngày\r\nCung cấp sức mạnh cho máy là chip xử lý Helio G88 đến từ nhà MediaTek, có tốc độ xử lý 2.0 GHz cho khả năng xử lý khá ổn định và mượt mà với các tác vụ lướt web, nghe nhạc, xem phim, chỉnh sửa ảnh,… thậm chí bạn có thể chơi với các tựa game như: Liên Quân Mobile, PUBG Mobile ở mức cấu hình tầm trung.\r\n\r\nHiệu năng mượt mà - Xiaomi Redmi 12\r\n\r\nĐiện thoại RAM 4 GB tuy mức RAM không quá cao nhưng hãng cũng đã tích hợp tính năng mở rộng RAM nên vấn đề đa nhiệm trên máy không còn quá bận tâm nữa. Khi các thao tác chuyển đổi qua lại giữa tab không phải đợi load lại cũng như gặp hiện tượng giật lag.\r\n\r\nCụm camera chất lượng để trải nghiệm\r\nCụm camera sau của Redmi 12 bao gồm camera chính 50 MP, 2 camera phụ 8 MP và 2 MP, hỗ trợ quay phim và chụp ảnh chất lượng cao với các hiệu ứng làm đẹp thông minh, cân bằng tốt màu sắc và ánh sáng cho bức ảnh chân thực, có độ nét cao.\r\n\r\nCamera chụp ảnh sắc nét - Xiaomi Redmi 12\r\n\r\nPhía trước điện thoại bạn sẽ có ngay camera selfie với độ phân giải 8 MP đi cùng với nhiều tính năng như: làm đẹp, bộ lọc màu,... giúp bạn có những bức ảnh tự sướng đẹp mắt mà không cần dùng đến ứng dụng bên thứ 3.\r\n\r\nViên pin 5000 mAh thoải mái dùng cả ngày\r\nMột chi tiết đáng chú ý khác của Xiaomi Redmi 12 là viên pin lớn 5000 mAh, điện thoại có thể dễ dàng cung cấp đủ năng lượng để giữ cho thiết bị hoạt động suốt cả ngày, ngay cả khi sử dụng nhiều. \r\n\r\nViên pin lớn - Xiaomi Redmi 12 4GB\r\n\r\nBên cạnh đó, máy cũng hỗ trợ sạc nhanh 18 W, vì vậy bạn có thể nhanh chóng lấp đầy dung lượng của thiết bị mà không cần phải mất quá nhiều thời gian chờ đợi.\r\n\r\nXiaomi Redmi 12 sẽ là sự lựa chọn phù hợp với những bạn đang có nhu cầu tìm kiếm một chiếc điện thoại có vẻ ngoài đẹp mắt, màn hình lớn cho hình ảnh sắc nét cùng một hiệu năng ổn định với các tác vụ hằng ngày.\r\nTwitter, Inc.', 4, 329, '2023-10-20', 0, 509),
(29, 'GALAXY S23 UTRA', 25000000, 20, '20231008182903.webp', 'Samsung Galaxy S23+ 5G 256GB là chiếc điện thoại thuộc dòng cao cấp nhất của Samsung được giới thiệu vào tháng 02/2023. Máy sở hữu một vài điểm ấn tượng như camera có khả năng quay video 8K, cùng với đó là con chip Snapdragon 8 Gen 2 mạnh mẽ hàng đầu giới điện thoại Android.\r\nVẻ ngoài đẳng cấp xứng danh flagship\r\nẤn tượng đầu tiên của mình khi trên tay chiếc Galaxy S23+ là cái nhìn vuông vắn sang trọng, tổng thể máy được hoàn thiện từ các loại chất liệu cao cấp giúp mang đến trải nghiệm cầm nắm đầm tay hơn. \r\n\r\nThiết kế vuông vắn - Samsung Galaxy S23+ 5G 256GB\r\n\r\nHơn thế, bộ khung nhôm và mặt lưng kính cường lực cũng mang đến cho máy khả năng kháng xước tốt hay hạn chế được rủi ro nứt, vỡ mỗi khi máy có gặp va chạm ngoài ý muốn. \r\n\r\nVề kiểu hoàn thiện thì khung máy được làm theo kiểu nhẵn bóng giúp mang đến cái nhìn bắt mắt và sang trọng hơn, cùng với đó là mặt lưng làm nhám nhằm giảm thiểu hiện tượng bám dấu vân tay và mồ hôi mỗi khi sử dụng, ngoài ra các vết xước nhẹ cũng được giảm thiểu đối với mặt lưng của chiếc máy này.\r\n\r\nKhung viền nhôm chắc chắn - Samsung Galaxy S23+ 5G 256GB\r\n\r\nThoạt nhìn thì ở phiên bản Galaxy S23+ có lẽ sẽ không có quá nhiều sự đổi mới so với thế hệ tiền nhiệm, tuy nhiên điểm mà ta có thể dễ dàng nhận thấy và phân biệt được hai mẫu máy giữa đời trước và đời sau là nằm ở phần cụm camera.\r\n\r\nSẽ không còn đặt chung cụm nữa, mà thay vào đó camera trên Galaxy S23+ đều được bố trí theo cách riêng lẻ, vừa mang đến điểm nhấn mới lạ xong cũng đem lại điểm nhận diện đặc trưng cho dòng máy này.\r\n\r\nCụm camera riêng biệt - Samsung Galaxy S23+ 5G 256GB\r\n\r\nCòn về nguyên lý thiết kế phần màn hình thì Galaxy S23+ cũng không có quá nhiều điều khác biệt, vẫn sẽ là màn hình phẳng với các viền siêu mỏng bao bọc xung quanh, cùng với đó là hình notch dạng đục lỗ chứa camera được làm nhỏ để tối ưu diện tích hiển thị.\r\n\r\nViền màn hình mỏng - Samsung Galaxy S23+ 5G 256GB\r\n\r\nBứt phá mọi giới hạn với chip Snapdragon 8 Gen 2 for Galaxy\r\nVào mỗi dịp ra mắt, hãng điện thoại Samsung sẽ trang bị những con chip mạnh mẽ nhất được ra mắt cùng thời gian đó, và tới thời điểm hiện tại thì vi xử lý Snapdragon 8 Gen 2 for Galaxy là cái tên đã xuất hiện trên Galaxy S23+ với hiệu năng mang lại là vô cùng ấn tượng.\r\n\r\nTrang bị Snapdragon 8 Gen 2 - Samsung Galaxy S23+ 5G 256GB\r\n\r\nTheo thông số của chip được cung cấp bởi hãng thì Snapdragon 8 Gen 2 for Galaxy có thể hoạt động với hiệu suất tối đa đạt được là 3.36 GHz, đây là con số rất lớn trên những mẫu điện thoại Android khi khá ít thiết bị đạt được ngưỡng hiệu năng trên.\r\n\r\nNgoài ra thì mình cũng đã kiểm chứng sức mạnh của máy thêm một lần nữa, thao tác này được thực hiện thông qua hai phần mềm đo hiệu năng thường dùng và kết quả có được như sau: 1449 (đơn nhân), 4565 (đa nhân) trên Benchmark và 15211 trên PCMark.\r\n\r\nĐiểm đánh giá hiệu năng - Samsung Galaxy S23+ 5G 256GB\r\n\r\nVề trải nghiệm thực tế ra sao thì mình cũng đã dành ra hai tuần trải nghiệm Galaxy S23+, và những gì mình cảm nhận được là một độ mượt rất ổn định mà máy đã mang lại. Mọi nhu cầu sử dụng cơ bản hàng ngày đều được xử lý nhanh chóng và mình cũng không hề cảm thấy giật lag hay chậm đơ.\r\n\r\nHiệu năng mạnh mẽ - Samsung Galaxy S23+ 5G 256GB\r\n\r\nVới những tín đồ về game thì Snapdragon 8 Gen 2 for Galaxy là cái tên thu hút được nhiều sự chú ý đến từ người dùng, khi đây được xem là mẫu chip mạnh mẽ bậc nhất dòng điện thoại Android hiện nay.\r\n\r\nThực tế thì mình đã dùng Galaxy S23+ để chơi game Liên Quân Mobile trong lúc trải nghiệm máy, cấu hình cụ thể mà mình cài đặt ở đây là gần như tối đa cho mọi thông số, điều này nhằm khai thác được tối đa hiệu năng trên chip để thử xem máy mạnh mẽ tới đâu.', 1, 230, '2023-10-11', 1, 589),
(47, 'IPhone 14 Pro', 26000000, 5, '20231008183111.webp', 'Samsung Galaxy S23+ 5G 256GB là chiếc điện thoại thuộc dòng cao cấp nhất của Samsung được giới thiệu vào tháng 02/2023. Máy sở hữu một vài điểm ấn tượng như camera có khả năng quay video 8K, cùng với đó là con chip Snapdragon 8 Gen 2 mạnh mẽ hàng đầu giới điện thoại Android.\r\nVẻ ngoài đẳng cấp xứng danh flagship\r\nẤn tượng đầu tiên của mình khi trên tay chiếc Galaxy S23+ là cái nhìn vuông vắn sang trọng, tổng thể máy được hoàn thiện từ các loại chất liệu cao cấp giúp mang đến trải nghiệm cầm nắm đầm tay hơn. \r\n\r\nThiết kế vuông vắn - Samsung Galaxy S23+ 5G 256GB\r\n\r\nHơn thế, bộ khung nhôm và mặt lưng kính cường lực cũng mang đến cho máy khả năng kháng xước tốt hay hạn chế được rủi ro nứt, vỡ mỗi khi máy có gặp va chạm ngoài ý muốn. \r\n\r\nVề kiểu hoàn thiện thì khung máy được làm theo kiểu nhẵn bóng giúp mang đến cái nhìn bắt mắt và sang trọng hơn, cùng với đó là mặt lưng làm nhám nhằm giảm thiểu hiện tượng bám dấu vân tay và mồ hôi mỗi khi sử dụng, ngoài ra các vết xước nhẹ cũng được giảm thiểu đối với mặt lưng của chiếc máy này.\r\n\r\nKhung viền nhôm chắc chắn - Samsung Galaxy S23+ 5G 256GB\r\n\r\nThoạt nhìn thì ở phiên bản Galaxy S23+ có lẽ sẽ không có quá nhiều sự đổi mới so với thế hệ tiền nhiệm, tuy nhiên điểm mà ta có thể dễ dàng nhận thấy và phân biệt được hai mẫu máy giữa đời trước và đời sau là nằm ở phần cụm camera.\r\n\r\nSẽ không còn đặt chung cụm nữa, mà thay vào đó camera trên Galaxy S23+ đều được bố trí theo cách riêng lẻ, vừa mang đến điểm nhấn mới lạ xong cũng đem lại điểm nhận diện đặc trưng cho dòng máy này.\r\n\r\nCụm camera riêng biệt - Samsung Galaxy S23+ 5G 256GB\r\n\r\nCòn về nguyên lý thiết kế phần màn hình thì Galaxy S23+ cũng không có quá nhiều điều khác biệt, vẫn sẽ là màn hình phẳng với các viền siêu mỏng bao bọc xung quanh, cùng với đó là hình notch dạng đục lỗ chứa camera được làm nhỏ để tối ưu diện tích hiển thị.\r\n\r\nViền màn hình mỏng - Samsung Galaxy S23+ 5G 256GB\r\n\r\nBứt phá mọi giới hạn với chip Snapdragon 8 Gen 2 for Galaxy\r\nVào mỗi dịp ra mắt, hãng điện thoại Samsung sẽ trang bị những con chip mạnh mẽ nhất được ra mắt cùng thời gian đó, và tới thời điểm hiện tại thì vi xử lý Snapdragon 8 Gen 2 for Galaxy là cái tên đã xuất hiện trên Galaxy S23+ với hiệu năng mang lại là vô cùng ấn tượng.\r\n\r\nTrang bị Snapdragon 8 Gen 2 - Samsung Galaxy S23+ 5G 256GB\r\n\r\nTheo thông số của chip được cung cấp bởi hãng thì Snapdragon 8 Gen 2 for Galaxy có thể hoạt động với hiệu suất tối đa đạt được là 3.36 GHz, đây là con số rất lớn trên những mẫu điện thoại Android khi khá ít thiết bị đạt được ngưỡng hiệu năng trên.\r\n\r\nNgoài ra thì mình cũng đã kiểm chứng sức mạnh của máy thêm một lần nữa, thao tác này được thực hiện thông qua hai phần mềm đo hiệu năng thường dùng và kết quả có được như sau: 1449 (đơn nhân), 4565 (đa nhân) trên Benchmark và 15211 trên PCMark.\r\n\r\nĐiểm đánh giá hiệu năng - Samsung Galaxy S23+ 5G 256GB\r\n\r\nVề trải nghiệm thực tế ra sao thì mình cũng đã dành ra hai tuần trải nghiệm Galaxy S23+, và những gì mình cảm nhận được là một độ mượt rất ổn định mà máy đã mang lại. Mọi nhu cầu sử dụng cơ bản hàng ngày đều được xử lý nhanh chóng và mình cũng không hề cảm thấy giật lag hay chậm đơ.\r\n\r\nHiệu năng mạnh mẽ - Samsung Galaxy S23+ 5G 256GB\r\n\r\nVới những tín đồ về game thì Snapdragon 8 Gen 2 for Galaxy là cái tên thu hút được nhiều sự chú ý đến từ người dùng, khi đây được xem là mẫu chip mạnh mẽ bậc nhất dòng điện thoại Android hiện nay.\r\n\r\nThực tế thì mình đã dùng Galaxy S23+ để chơi game Liên Quân Mobile trong lúc trải nghiệm máy, cấu hình cụ thể mà mình cài đặt ở đây là gần như tối đa cho mọi thông số, điều này nhằm khai thác được tối đa hiệu năng trên chip để thử xem máy mạnh mẽ tới đâu.', 2, 100, '2023-10-11', 1, 567),
(48, 'OPPO RENO 8', 12900000, 0, '20231008183304.webp', 'Samsung Galaxy S23+ 5G 256GB là chiếc điện thoại thuộc dòng cao cấp nhất của Samsung được giới thiệu vào tháng 02/2023. Máy sở hữu một vài điểm ấn tượng như camera có khả năng quay video 8K, cùng với đó là con chip Snapdragon 8 Gen 2 mạnh mẽ hàng đầu giới điện thoại Android.\r\nVẻ ngoài đẳng cấp xứng danh flagship\r\nẤn tượng đầu tiên của mình khi trên tay chiếc Galaxy S23+ là cái nhìn vuông vắn sang trọng, tổng thể máy được hoàn thiện từ các loại chất liệu cao cấp giúp mang đến trải nghiệm cầm nắm đầm tay hơn. \r\n\r\nThiết kế vuông vắn - Samsung Galaxy S23+ 5G 256GB\r\n\r\nHơn thế, bộ khung nhôm và mặt lưng kính cường lực cũng mang đến cho máy khả năng kháng xước tốt hay hạn chế được rủi ro nứt, vỡ mỗi khi máy có gặp va chạm ngoài ý muốn. \r\n\r\nVề kiểu hoàn thiện thì khung máy được làm theo kiểu nhẵn bóng giúp mang đến cái nhìn bắt mắt và sang trọng hơn, cùng với đó là mặt lưng làm nhám nhằm giảm thiểu hiện tượng bám dấu vân tay và mồ hôi mỗi khi sử dụng, ngoài ra các vết xước nhẹ cũng được giảm thiểu đối với mặt lưng của chiếc máy này.\r\n\r\nKhung viền nhôm chắc chắn - Samsung Galaxy S23+ 5G 256GB\r\n\r\nThoạt nhìn thì ở phiên bản Galaxy S23+ có lẽ sẽ không có quá nhiều sự đổi mới so với thế hệ tiền nhiệm, tuy nhiên điểm mà ta có thể dễ dàng nhận thấy và phân biệt được hai mẫu máy giữa đời trước và đời sau là nằm ở phần cụm camera.\r\n\r\nSẽ không còn đặt chung cụm nữa, mà thay vào đó camera trên Galaxy S23+ đều được bố trí theo cách riêng lẻ, vừa mang đến điểm nhấn mới lạ xong cũng đem lại điểm nhận diện đặc trưng cho dòng máy này.\r\n\r\nCụm camera riêng biệt - Samsung Galaxy S23+ 5G 256GB\r\n\r\nCòn về nguyên lý thiết kế phần màn hình thì Galaxy S23+ cũng không có quá nhiều điều khác biệt, vẫn sẽ là màn hình phẳng với các viền siêu mỏng bao bọc xung quanh, cùng với đó là hình notch dạng đục lỗ chứa camera được làm nhỏ để tối ưu diện tích hiển thị.\r\n\r\nViền màn hình mỏng - Samsung Galaxy S23+ 5G 256GB\r\n\r\nBứt phá mọi giới hạn với chip Snapdragon 8 Gen 2 for Galaxy\r\nVào mỗi dịp ra mắt, hãng điện thoại Samsung sẽ trang bị những con chip mạnh mẽ nhất được ra mắt cùng thời gian đó, và tới thời điểm hiện tại thì vi xử lý Snapdragon 8 Gen 2 for Galaxy là cái tên đã xuất hiện trên Galaxy S23+ với hiệu năng mang lại là vô cùng ấn tượng.\r\n\r\nTrang bị Snapdragon 8 Gen 2 - Samsung Galaxy S23+ 5G 256GB\r\n\r\nTheo thông số của chip được cung cấp bởi hãng thì Snapdragon 8 Gen 2 for Galaxy có thể hoạt động với hiệu suất tối đa đạt được là 3.36 GHz, đây là con số rất lớn trên những mẫu điện thoại Android khi khá ít thiết bị đạt được ngưỡng hiệu năng trên.\r\n\r\nNgoài ra thì mình cũng đã kiểm chứng sức mạnh của máy thêm một lần nữa, thao tác này được thực hiện thông qua hai phần mềm đo hiệu năng thường dùng và kết quả có được như sau: 1449 (đơn nhân), 4565 (đa nhân) trên Benchmark và 15211 trên PCMark.\r\n\r\nĐiểm đánh giá hiệu năng - Samsung Galaxy S23+ 5G 256GB\r\n\r\nVề trải nghiệm thực tế ra sao thì mình cũng đã dành ra hai tuần trải nghiệm Galaxy S23+, và những gì mình cảm nhận được là một độ mượt rất ổn định mà máy đã mang lại. Mọi nhu cầu sử dụng cơ bản hàng ngày đều được xử lý nhanh chóng và mình cũng không hề cảm thấy giật lag hay chậm đơ.\r\n\r\nHiệu năng mạnh mẽ - Samsung Galaxy S23+ 5G 256GB\r\n\r\nVới những tín đồ về game thì Snapdragon 8 Gen 2 for Galaxy là cái tên thu hút được nhiều sự chú ý đến từ người dùng, khi đây được xem là mẫu chip mạnh mẽ bậc nhất dòng điện thoại Android hiện nay.\r\n\r\nThực tế thì mình đã dùng Galaxy S23+ để chơi game Liên Quân Mobile trong lúc trải nghiệm máy, cấu hình cụ thể mà mình cài đặt ở đây là gần như tối đa cho mọi thông số, điều này nhằm khai thác được tối đa hiệu năng trên chip để thử xem máy mạnh mẽ tới đâu.', 17, 48, '2023-10-11', 1, 456),
(49, 'OPPO T8', 8800000, 0, '20231008183441.webp', 'Samsung Galaxy S23+ 5G 256GB là chiếc điện thoại thuộc dòng cao cấp nhất của Samsung được giới thiệu vào tháng 02/2023. Máy sở hữu một vài điểm ấn tượng như camera có khả năng quay video 8K, cùng với đó là con chip Snapdragon 8 Gen 2 mạnh mẽ hàng đầu giới điện thoại Android.\r\nVẻ ngoài đẳng cấp xứng danh flagship\r\nẤn tượng đầu tiên của mình khi trên tay chiếc Galaxy S23+ là cái nhìn vuông vắn sang trọng, tổng thể máy được hoàn thiện từ các loại chất liệu cao cấp giúp mang đến trải nghiệm cầm nắm đầm tay hơn. \r\n\r\nThiết kế vuông vắn - Samsung Galaxy S23+ 5G 256GB\r\n\r\nHơn thế, bộ khung nhôm và mặt lưng kính cường lực cũng mang đến cho máy khả năng kháng xước tốt hay hạn chế được rủi ro nứt, vỡ mỗi khi máy có gặp va chạm ngoài ý muốn. \r\n\r\nVề kiểu hoàn thiện thì khung máy được làm theo kiểu nhẵn bóng giúp mang đến cái nhìn bắt mắt và sang trọng hơn, cùng với đó là mặt lưng làm nhám nhằm giảm thiểu hiện tượng bám dấu vân tay và mồ hôi mỗi khi sử dụng, ngoài ra các vết xước nhẹ cũng được giảm thiểu đối với mặt lưng của chiếc máy này.\r\n\r\nKhung viền nhôm chắc chắn - Samsung Galaxy S23+ 5G 256GB\r\n\r\nThoạt nhìn thì ở phiên bản Galaxy S23+ có lẽ sẽ không có quá nhiều sự đổi mới so với thế hệ tiền nhiệm, tuy nhiên điểm mà ta có thể dễ dàng nhận thấy và phân biệt được hai mẫu máy giữa đời trước và đời sau là nằm ở phần cụm camera.\r\n\r\nSẽ không còn đặt chung cụm nữa, mà thay vào đó camera trên Galaxy S23+ đều được bố trí theo cách riêng lẻ, vừa mang đến điểm nhấn mới lạ xong cũng đem lại điểm nhận diện đặc trưng cho dòng máy này.\r\n\r\nCụm camera riêng biệt - Samsung Galaxy S23+ 5G 256GB\r\n\r\nCòn về nguyên lý thiết kế phần màn hình thì Galaxy S23+ cũng không có quá nhiều điều khác biệt, vẫn sẽ là màn hình phẳng với các viền siêu mỏng bao bọc xung quanh, cùng với đó là hình notch dạng đục lỗ chứa camera được làm nhỏ để tối ưu diện tích hiển thị.\r\n\r\nViền màn hình mỏng - Samsung Galaxy S23+ 5G 256GB\r\n\r\nBứt phá mọi giới hạn với chip Snapdragon 8 Gen 2 for Galaxy\r\nVào mỗi dịp ra mắt, hãng điện thoại Samsung sẽ trang bị những con chip mạnh mẽ nhất được ra mắt cùng thời gian đó, và tới thời điểm hiện tại thì vi xử lý Snapdragon 8 Gen 2 for Galaxy là cái tên đã xuất hiện trên Galaxy S23+ với hiệu năng mang lại là vô cùng ấn tượng.\r\n\r\nTrang bị Snapdragon 8 Gen 2 - Samsung Galaxy S23+ 5G 256GB\r\n\r\nTheo thông số của chip được cung cấp bởi hãng thì Snapdragon 8 Gen 2 for Galaxy có thể hoạt động với hiệu suất tối đa đạt được là 3.36 GHz, đây là con số rất lớn trên những mẫu điện thoại Android khi khá ít thiết bị đạt được ngưỡng hiệu năng trên.\r\n\r\nNgoài ra thì mình cũng đã kiểm chứng sức mạnh của máy thêm một lần nữa, thao tác này được thực hiện thông qua hai phần mềm đo hiệu năng thường dùng và kết quả có được như sau: 1449 (đơn nhân), 4565 (đa nhân) trên Benchmark và 15211 trên PCMark.\r\n\r\nĐiểm đánh giá hiệu năng - Samsung Galaxy S23+ 5G 256GB\r\n\r\nVề trải nghiệm thực tế ra sao thì mình cũng đã dành ra hai tuần trải nghiệm Galaxy S23+, và những gì mình cảm nhận được là một độ mượt rất ổn định mà máy đã mang lại. Mọi nhu cầu sử dụng cơ bản hàng ngày đều được xử lý nhanh chóng và mình cũng không hề cảm thấy giật lag hay chậm đơ.\r\n\r\nHiệu năng mạnh mẽ - Samsung Galaxy S23+ 5G 256GB\r\n\r\nVới những tín đồ về game thì Snapdragon 8 Gen 2 for Galaxy là cái tên thu hút được nhiều sự chú ý đến từ người dùng, khi đây được xem là mẫu chip mạnh mẽ bậc nhất dòng điện thoại Android hiện nay.\r\n\r\nThực tế thì mình đã dùng Galaxy S23+ để chơi game Liên Quân Mobile trong lúc trải nghiệm máy, cấu hình cụ thể mà mình cài đặt ở đây là gần như tối đa cho mọi thông số, điều này nhằm khai thác được tối đa hiệu năng trên chip để thử xem máy mạnh mẽ tới đâu.', 17, 7, '2023-10-08', 0, 56),
(50, 'iPhone 13 ', 18900000, 20, '20231008185031.webp', 'Samsung Galaxy S23+ 5G 256GB là chiếc điện thoại thuộc dòng cao cấp nhất của Samsung được giới thiệu vào tháng 02/2023. Máy sở hữu một vài điểm ấn tượng như camera có khả năng quay video 8K, cùng với đó là con chip Snapdragon 8 Gen 2 mạnh mẽ hàng đầu giới điện thoại Android.\r\nVẻ ngoài đẳng cấp xứng danh flagship\r\nẤn tượng đầu tiên của mình khi trên tay chiếc Galaxy S23+ là cái nhìn vuông vắn sang trọng, tổng thể máy được hoàn thiện từ các loại chất liệu cao cấp giúp mang đến trải nghiệm cầm nắm đầm tay hơn. \r\n\r\nThiết kế vuông vắn - Samsung Galaxy S23+ 5G 256GB\r\n\r\nHơn thế, bộ khung nhôm và mặt lưng kính cường lực cũng mang đến cho máy khả năng kháng xước tốt hay hạn chế được rủi ro nứt, vỡ mỗi khi máy có gặp va chạm ngoài ý muốn. \r\n\r\nVề kiểu hoàn thiện thì khung máy được làm theo kiểu nhẵn bóng giúp mang đến cái nhìn bắt mắt và sang trọng hơn, cùng với đó là mặt lưng làm nhám nhằm giảm thiểu hiện tượng bám dấu vân tay và mồ hôi mỗi khi sử dụng, ngoài ra các vết xước nhẹ cũng được giảm thiểu đối với mặt lưng của chiếc máy này.\r\n\r\nKhung viền nhôm chắc chắn - Samsung Galaxy S23+ 5G 256GB\r\n\r\nThoạt nhìn thì ở phiên bản Galaxy S23+ có lẽ sẽ không có quá nhiều sự đổi mới so với thế hệ tiền nhiệm, tuy nhiên điểm mà ta có thể dễ dàng nhận thấy và phân biệt được hai mẫu máy giữa đời trước và đời sau là nằm ở phần cụm camera.\r\n\r\nSẽ không còn đặt chung cụm nữa, mà thay vào đó camera trên Galaxy S23+ đều được bố trí theo cách riêng lẻ, vừa mang đến điểm nhấn mới lạ xong cũng đem lại điểm nhận diện đặc trưng cho dòng máy này.\r\n\r\nCụm camera riêng biệt - Samsung Galaxy S23+ 5G 256GB\r\n\r\nCòn về nguyên lý thiết kế phần màn hình thì Galaxy S23+ cũng không có quá nhiều điều khác biệt, vẫn sẽ là màn hình phẳng với các viền siêu mỏng bao bọc xung quanh, cùng với đó là hình notch dạng đục lỗ chứa camera được làm nhỏ để tối ưu diện tích hiển thị.\r\n\r\nViền màn hình mỏng - Samsung Galaxy S23+ 5G 256GB\r\n\r\nBứt phá mọi giới hạn với chip Snapdragon 8 Gen 2 for Galaxy\r\nVào mỗi dịp ra mắt, hãng điện thoại Samsung sẽ trang bị những con chip mạnh mẽ nhất được ra mắt cùng thời gian đó, và tới thời điểm hiện tại thì vi xử lý Snapdragon 8 Gen 2 for Galaxy là cái tên đã xuất hiện trên Galaxy S23+ với hiệu năng mang lại là vô cùng ấn tượng.\r\n\r\nTrang bị Snapdragon 8 Gen 2 - Samsung Galaxy S23+ 5G 256GB\r\n\r\nTheo thông số của chip được cung cấp bởi hãng thì Snapdragon 8 Gen 2 for Galaxy có thể hoạt động với hiệu suất tối đa đạt được là 3.36 GHz, đây là con số rất lớn trên những mẫu điện thoại Android khi khá ít thiết bị đạt được ngưỡng hiệu năng trên.\r\n\r\nNgoài ra thì mình cũng đã kiểm chứng sức mạnh của máy thêm một lần nữa, thao tác này được thực hiện thông qua hai phần mềm đo hiệu năng thường dùng và kết quả có được như sau: 1449 (đơn nhân), 4565 (đa nhân) trên Benchmark và 15211 trên PCMark.\r\n\r\nĐiểm đánh giá hiệu năng - Samsung Galaxy S23+ 5G 256GB\r\n\r\nVề trải nghiệm thực tế ra sao thì mình cũng đã dành ra hai tuần trải nghiệm Galaxy S23+, và những gì mình cảm nhận được là một độ mượt rất ổn định mà máy đã mang lại. Mọi nhu cầu sử dụng cơ bản hàng ngày đều được xử lý nhanh chóng và mình cũng không hề cảm thấy giật lag hay chậm đơ.\r\n\r\nHiệu năng mạnh mẽ - Samsung Galaxy S23+ 5G 256GB\r\n\r\nVới những tín đồ về game thì Snapdragon 8 Gen 2 for Galaxy là cái tên thu hút được nhiều sự chú ý đến từ người dùng, khi đây được xem là mẫu chip mạnh mẽ bậc nhất dòng điện thoại Android hiện nay.\r\n\r\nThực tế thì mình đã dùng Galaxy S23+ để chơi game Liên Quân Mobile trong lúc trải nghiệm máy, cấu hình cụ thể mà mình cài đặt ở đây là gần như tối đa cho mọi thông số, điều này nhằm khai thác được tối đa hiệu năng trên chip để thử xem máy mạnh mẽ tới đâu.', 2, 15, '2023-10-11', 1, 4523),
(51, 'iPhone 14 Pro Max', 29000000, 10, '20231010192748.webp', 'hag dac biet ne dung', 2, 16, '2023-10-10', 1, 5),
(57, 'Samsung Galaxy Z Fold5', 15900000, 30, '20231019210715.webp', 'gdsfgs', 1, 23, '2023-10-22', 1, 543),
(59, 'nmphong45', 29000000, 9000000, 'galaxy-z-fold-5-xam-1.webp', '', 2, 2, '2023-10-25', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hd` int(11) NOT NULL,
  `ma_kh` varchar(11) NOT NULL,
  `ma_nv` varchar(20) NOT NULL,
  `ten_kh` varchar(30) NOT NULL,
  `dia_chi` varchar(100) NOT NULL,
  `sdt` varchar(12) NOT NULL,
  `ngay_lap` date NOT NULL,
  `pttt` bit(1) NOT NULL DEFAULT b'0',
  `tinh_trang` int(1) NOT NULL DEFAULT 0,
  `tong_tien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `ma_cthd` int(11) NOT NULL,
  `ma_hd` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `size` varchar(5) NOT NULL,
  `don_gia` double NOT NULL,
  `so_luong` int(11) NOT NULL,
  `giam_gia` int(3) NOT NULL,
  `thanh_tien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(11) NOT NULL,
  `ten_kh` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(12) NOT NULL,
  `dia_chi` varchar(100) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `mat_khau` varchar(55) NOT NULL,
  `hinh` varchar(225) NOT NULL,
  `gioi_tinh` bit(1) NOT NULL DEFAULT b'0',
  `kich_hoat` bit(1) NOT NULL DEFAULT b'0',
  `vai_tro` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ten_kh`, `email`, `sdt`, `dia_chi`, `ngay_sinh`, `mat_khau`, `hinh`, `gioi_tinh`, `kich_hoat`, `vai_tro`) VALUES
('10diem', 'Tấm Cám', 'bestxayda7@gmail.com', '', '', '0000-00-00', '611864f3c4b85a4da043bfe6195627ae', 'galaxy-z-fold-5-xam-1.webp', b'1', b'1', b'0'),
('bekem123', 'Minh Phong', 'bekem123@gmail.com', '', '', '0000-00-00', 'a7592a019e00c74b678064ef1e4356be', 'jennie9.jpg', b'0', b'1', b'0'),
('khach1', 'Võ thị ', 'bestxayda77@gmail.com', '', '', '0000-00-00', '50d25ceee6f203926768fe7450f924a7', 'quang-cao-my-pham-chan-thuc-nhu-rose-nhin-lan-da-cang-bong-la-biet-chi-dung-duong-65c-5676721.jpg', b'0', b'1', b'0'),
('khach2', 'Nguyệt Nga', 'bestxayda97@gmail.com', '', '', '0000-00-00', '496e396cb50410a33d6fd2a464e2d009', 'photo-1636025852946-1636025853597217987592.jpg', b'0', b'1', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_hang`
--

CREATE TABLE `loai_hang` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_hang`
--

INSERT INTO `loai_hang` (`ma_loai`, `ten_loai`) VALUES
(1, 'Sam súng'),
(2, 'APPLE'),
(4, 'XIAOMI'),
(17, 'OPPO'),
(18, 'Nokia'),
(22, 'ASUS');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `ma_nv` varchar(20) NOT NULL,
  `ten_nv` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(12) NOT NULL,
  `dia_chi` varchar(100) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `mat_khau` varchar(40) NOT NULL,
  `hinh` varchar(225) NOT NULL,
  `gioi_tinh` bit(1) NOT NULL DEFAULT b'0',
  `kich_hoat` bit(1) NOT NULL DEFAULT b'0',
  `vai_tro` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`ma_nv`, `ten_nv`, `email`, `sdt`, `dia_chi`, `ngay_sinh`, `mat_khau`, `hinh`, `gioi_tinh`, `kich_hoat`, `vai_tro`) VALUES
('admin', 'NMPhong', 'anhnn@gmail.com', '113313345', 'PT', '2021-12-17', 'e10adc3949ba59abbe56e057f20f883e', 'ANTTK204-3-400x600.jpg', b'1', b'1', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_hoi_binh_luan`
--

CREATE TABLE `phan_hoi_binh_luan` (
  `ma_phbl` int(11) NOT NULL,
  `ma_bl` int(11) NOT NULL,
  `ma_nv` varchar(20) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `phan_hoi` text NOT NULL,
  `ngay_them` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phan_hoi_binh_luan`
--

INSERT INTO `phan_hoi_binh_luan` (`ma_phbl`, `ma_bl`, `ma_nv`, `ma_hh`, `phan_hoi`, `ngay_them`) VALUES
(21, 150, 'admin1', 27, 'Không tốt', '2021-12-10 15:06:31'),
(22, 153, 'admin1', 0, 'lan nay sai em xin bo hoc', '2021-12-10 15:26:50'),
(23, 154, 'admin1', 0, 'Cháu chịu', '2021-12-10 15:28:27'),
(24, 155, 'admin1', 0, 'EM SAI RỒI  SQL ƠI', '2021-12-10 15:53:17'),
(25, 157, 'admin1', 0, 'lan nay sai em xin bo hoc', '2021-12-11 05:13:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `ma_size` int(11) NOT NULL,
  `size` varchar(5) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `so_luong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `ma_slide` int(11) NOT NULL,
  `tieu_de` varchar(30) NOT NULL,
  `noi_dung` text NOT NULL,
  `duong_dan` varchar(225) NOT NULL,
  `hinh_anh` varchar(225) NOT NULL,
  `ngay_them` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `fk_binhluan_khachhang` (`ma_kh`),
  ADD KEY `fk_binhluan_hanghoa` (`ma_hh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `fk_hanghoa_loaihang` (`ma_loai`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hd`);

--
-- Chỉ mục cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD PRIMARY KEY (`ma_cthd`),
  ADD KEY `hoa_don_chi_tiet_ibfk_1` (`ma_hd`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`ma_nv`);

--
-- Chỉ mục cho bảng `phan_hoi_binh_luan`
--
ALTER TABLE `phan_hoi_binh_luan`
  ADD PRIMARY KEY (`ma_phbl`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`ma_size`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`ma_slide`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2146647625;

--
-- AUTO_INCREMENT cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  MODIFY `ma_cthd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `phan_hoi_binh_luan`
--
ALTER TABLE `phan_hoi_binh_luan`
  MODIFY `ma_phbl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `ma_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `ma_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_binhluan_hanghoa` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE NO ACTION,
  ADD CONSTRAINT `fk_binhluan_khachhang` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `fk_hanghoa_loaihang` FOREIGN KEY (`ma_loai`) REFERENCES `loai_hang` (`ma_loai`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_1` FOREIGN KEY (`ma_hd`) REFERENCES `hoa_don` (`ma_hd`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
