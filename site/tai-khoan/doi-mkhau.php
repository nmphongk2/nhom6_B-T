<?php
require '../../global.php';
require '../../dao/nguoi_dung.php';
check_login();
extract($_REQUEST);


if (exist_param('btn_change')) {
    // Kiểm tra xem ma_tk có tồn tại trong $_REQUEST hay không
    if (isset($ma_tk)) {
        if ($mat_khau2 !== $mat_khau3) {
            $MESSAGE = "Xác nhận mật khẩu mới không đúng";
        } else {
            $user = nguoi_dung_select_by_id($ma_tk);
            if ($user) {
                if ($user['mat_khau'] === md5($mat_khau)) {
                    try {
                        $new_password_md5 = md5($mat_khau2);
                        nguoi_dung_change_password($ma_tk, $new_password_md5);
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
    } else {
        $MESSAGE = "Mã đăng nhập không tồn tại";
    }
}

$VIEW_NAME = 'tai-khoan/doi-mk-form.php';
require '../layout.php';
?>
