<?php
require '../../global.php';
//require '../../dao/khach_hang.php';
require '../../dao/nguoi_dung.php';
extract($_REQUEST);
$VIEW_NAME = "tai-khoan/dang-nhap-form.php";



if (exist_param("btn_login")) {
    $user = nguoi_dung_by_id($ma_tk);

    if ($user) {
        $hashed_password = md5($mat_khau);

        if ($user['kich_hoat'] == 1 && $user['mat_khau'] == $hashed_password) {
            if (exist_param('ghi_nho')) {
                add_cookie("ma_tk", $ma_tk, 30);
                add_cookie("mat_khau", $hashed_password, 30);
            } else {
                delete_cookie("ma_tk");
                delete_cookie("mat_khau");
            }

            $_SESSION["user"] = $user;

            $vai_tro_id = isset($user['vai_tro_id']) ? $user['vai_tro_id'] : null;

            if ($vai_tro_id !== null) {
                $ten_VT = isset($user['ten_VT']) ? $user['ten_VT'] : "Không xác định";

                // Sử dụng $ten_VT trong thông báo và chuyển hướng
                echo "<script>
                     alert('Đăng nhập tài khoản $ten_VT thành công!'); 
                     location.href='http://localhost:/" . $ROOT_URL . "';
                  </script>";
            } else {
                // Xử lý trường hợp vai_tro_id không tồn tại trong $user
                echo "Vai trò không xác định";
            }
        } else {
            $MESSAGE = "Sai mật khẩu hoặc tài khoản chưa được kích hoạt!";
        }
    } else {
        $MESSAGE = "Sai tên đăng nhập!";
    }

} else {
    if (exist_param("btn_logout")) {
        unset($_SESSION['user']);
        $_SESSION['name_page'] = 'trang_chu';
    }

    $ma_tk = get_cookie("ma_tk");
    $mat_khau = get_cookie("mat_khau");
}

require '../layout.php';
?>
