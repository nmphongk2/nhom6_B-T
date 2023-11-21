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
    } else {
        $mat_khau_md5 = md5($mat_khau); // Mã hóa mật khẩu bằng MD5
        $file_name = save_file("up_hinh", "$UPLOAD_URL/users/");
        $hinh = $file_name ? $file_name : "";
        try {
            khach_hang_insert($ma_kh, $mat_khau_md5, $ten_kh, $email, $hinh, $kich_hoat, $vai_tro);
            $MESSAGE = "Đăng ký thành viên thành công!";
            $VIEW_NAME = "dang-nhap-form.php";
        } catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!";
        }
    }
} else {
    global $ma_kh, $mat_khau, $ten_kh, $email, $hinh, $kich_hoat, $mat_khau2;
    $VIEW_NAME = "tai-khoan/dang-ky-form.php";
}

require '../layout.php';
?>
