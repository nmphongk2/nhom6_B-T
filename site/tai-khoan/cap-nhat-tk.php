<?php
require '../../global.php';

require '../../dao/nguoi_dung.php';
check_login();
// ... (Các đoạn mã khác)

extract($_SESSION['user']);
$hinh = isset($hinh) ? $hinh : ''; // Thêm dòng này để đảm bảo biến được khởi tạo

// ... (Các đoạn mã khác)

// Trích xuất giá trị từ request
extract($_REQUEST);
$ngay_sinh = isset($ngay_sinh) ? $ngay_sinh : '';

// Bắt lỗi nhập số điện thoại không đúng định dạng
if (!empty($sdt) && !preg_match('/^\d{10}$/', $sdt)) {
    $MESSAGE = "Số điện thoại không hợp lệ. Vui lòng nhập 10 số.";
} elseif (!in_array($gioi_tinh, ['Nam', 'Nữ'])) {
    $MESSAGE = "Vui lòng chọn giới tính là Nam hoặc Nữ.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $MESSAGE = "Địa chỉ email không hợp lệ.";
} else {
    if (exist_param("btn_update")) {
        $file_name = save_file("up_hinh", "$UPLOAD_URL/users/");
        $hinh = $file_name ? $file_name : $hinh;

        try {
            // Chuyển định dạng ngày sinh để tránh lỗi
            $ngay_sinh = date('Y-m-d', strtotime($ngay_sinh));

            nguoi_dung_update($ma_tk, $mat_khau, $ho_ten, $email, $ngay_sinh, $dia_chi, $gioi_tinh, $hinh, $sdt, $kich_hoat, $vai_tro_id);
            $MESSAGE = "Cập nhật thành công!";
            $_SESSION['user'] = nguoi_dung_select_by_id($ma_tk);
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
