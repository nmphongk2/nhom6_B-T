<?php
// Kết nối với cơ sở dữ liệu
// Thay đổi thông tin kết nối để phản ánh thông tin cụ thể của cơ sở dữ liệu của bạn
require_once '../../dao/binh-luan.php';
try {
    if (isset($_POST['ma_kh']) && isset($_POST['ma_hh']) && isset($_POST['noi_dung']) && isset($_POST['ngay_lap'])) {
        // Lấy dữ liệu từ form
        $ma_kh = $_POST['ma_kh'];
        $ma_hh = $_POST['ma_hh'];
        $noi_dung = $_POST['noi_dung'];
        $ngay_lap = $_POST['ngay_lap'];

        // Gọi hàm để thêm bình luận vào cơ sở dữ liệu
        binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_lap);

        // Chuyển hướng về trang chitiet_sp.php với id của sản phẩm hiện tại sau khi bình luận thành công
        header("Location: ../hang-hoa/chi-tiet.php?id=" . $ma_hh);
        exit();
    } else {
        echo "Vui lòng điền đầy đủ thông tin bình luận!";
    }
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

// Ngắt kết nối
$conn = null;
?>
