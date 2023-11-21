<?php
require '../../global.php';
require '../../dao/khach_hang.php';
check_login();
extract($_REQUEST);

if (exist_param('btn_change')) {
    if ($mat_khau2 !== $mat_khau3) {
        $MESSAGE = "Xác nhận mật khẩu mới không đúng";
    } else {
        $user = khach_hang_select_by_id($ma_kh);
        if ($user) {
            if ($user['mat_khau'] === md5($mat_khau)) {
                try {
                    $new_password_md5 = md5($mat_khau2);
                    khach_hang_change_password($ma_kh, $new_password_md5);
                    $MESSAGE = 'Cập nhật mật khẩu thành công';
                } catch (Exception $exc) {
                    $MESSAGE = 'Thất bại';
                }
            } else {
                $MESSAGE = 'Mật khẩu cũ không đúng';
            }
        } else {
            $MESSAGE = "Sai mã đăng nhập";
        }
    }
}

$VIEW_NAME = 'tai-khoan/doi-mk-form.php';
require '../layout.php';
?>
