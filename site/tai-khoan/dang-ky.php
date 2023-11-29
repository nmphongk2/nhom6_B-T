<?php
require '../../global.php';
require '../../dao/khach_hang.php';

// Kiểm tra xem người dùng đã đăng nhập chưa
if (isset($_SESSION['user']['ma_kh'])) {
    // Nếu người dùng đã đăng nhập, hãy chuyển hướng họ đến trang khác hoặc hiển thị thông báo
    header("Location: ../index.php"); // Chuyển hướng đến trang khác
    exit();
}
extract($_REQUEST);
$VIEW_NAME = "tai-khoan/dang-ky-form.php";

if (exist_param("btn_register")) {
    if ($mat_khau != $mat_khau2) {
        $MESSAGE = "Mật khẩu phải trùng nhau";
    } elseif (khach_hang_exist($ma_kh)) {
        $MESSAGE = "Tên đăng nhập đã tồn tại";
    } elseif (khach_hang_exist($email)) {
        $MESSAGE = "Email đã tồn tại";
    } else {
        $mat_khau = md5($mat_khau); // Mã hóa mật khẩu bằng MD5
        $file_name = save_file("up_hinh", "$UPLOAD_URL/users/");
        $hinh = $file_name ? $file_name : "";

        // Đặt vai_tro_id mặc định là 0
        $vai_tro_id = 0;
        // Đặt vai_tro_id mặc định là 0
        $sdt = 0;

        try {
            khach_hang_insert($ma_kh, $mat_khau, $ten_kh, $ngay_sinh, $dia_chi, $email, $hinh, $sdt, $kich_hoat, $vai_tro_id);
            $MESSAGE = "Đăng ký thành viên thành công!";
            $VIEW_NAME = "dang-nhap-form.php";
        } catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại! Lỗi: " . $exc->getMessage();
        }
    }
} else {
    global $ma_kh, $mat_khau, $ten_kh, $email, $hinh, $sdt, $kich_hoat, $mat_khau2;
    $VIEW_NAME = "tai-khoan/dang-ky-form.php";
}

require '../layout.php';
?>
