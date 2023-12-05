<?php
require '../../global.php';
require '../../dao/khach_hang.php';

check_login();
// ... (Các đoạn mã khác)

extract($_SESSION['user']);
$hinh = isset($hinh) ? $hinh : ''; // Thêm dòng này để đảm bảo biến được khởi tạo

// ... (Các đoạn mã khác)

extract($_REQUEST);
$ngay_sinh = isset($ngay_sinh) ? $ngay_sinh : '';

// Bắt lỗi nhập số điện thoại không đúng định dạng
if (!empty($sdt) && !preg_match('/^\d{9}$/', $sdt)) {
    $MESSAGE = "Số điện thoại không hợp lệ. Vui lòng nhập 9 số.";
} else {
    if (exist_param("btn_update")) {
        $file_name = save_file("up_hinh", "$UPLOAD_URL/users/");
        $hinh = $file_name ? $file_name : $hinh;

        try {
            khach_hang_update($ma_kh, $mat_khau, $ten_kh, $email, $ngay_sinh, $dia_chi, $gioi_tinh, $hinh, $sdt, $kich_hoat);

            $MESSAGE = "Cập nhật thành công!";
            $_SESSION['user'] = khach_hang_select_by_id($ma_kh);
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bại!";
        }
    } else {
        extract($_SESSION['user']);
    }
}

$VIEW_NAME = "tai-khoan/cap-nhat-tk-form.php";
require '../layout.php';

?>
