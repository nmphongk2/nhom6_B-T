<?php
require '../../global.php';
require '../../dao/khach_hang.php';

extract($_REQUEST);
$VIEW_NAME = "tai-khoan/dang-nhap-form.php";

if (exist_param("btn_login")) {
    $user = khach_hang_select_by_id($ma_kh);
    if ($user) {
        $hashed_password = md5($mat_khau); // Băm mật khẩu trước khi so sánh với mật khẩu trong cơ sở dữ liệu
        if ($user) {
            if ($user['kich_hoat'] == 1) {
        if ($user['mat_khau'] == $hashed_password) {

            if (exist_param('ghi_nho')) {
                add_cookie("ma_kh", $ma_kh, 30);
                add_cookie("mat_khau", $hashed_password, 30); // Lưu mật khẩu đã mã hóa
            } else {
                delete_cookie("ma_kh");
                delete_cookie("mat_khau");
            }
            $_SESSION["user"] = $user;

            $ten_vai_tro =  $user['vai_tro'] == 0 ? "" : "nhân viên ";
            echo "<script>
                     alert('Đăng nhập tài khoản " . $ten_vai_tro . "thành công!'); 
                     location.href='http://localhost:/" . $ROOT_URL . "';
                </script>";
        } else {
            $MESSAGE = "Sai mật khẩu!";
        }
    } else {
        $MESSAGE = "Tài khoản chưa được kích hoạt! Vui lòng liên hệ quản trị viên.";
    }}
    } else {
        $MESSAGE = "Sai tên đăng nhập!";
    }
} else {

    if (exist_param("btn_logout")) {
        unset($_SESSION['user']);
        $_SESSION['name_page'] = 'trang_chu';
    }
    $ma_kh = get_cookie("ma_kh");
    $mat_khau = get_cookie("mat_khau");
}
require '../layout.php';
?>
