<?php
require '../../global.php';
require '../../dao/khach_hang.php';

extract($_REQUEST);
$VIEW_NAME = "tai-khoan/dang-nhap-form.php";
function nhan_vien_select_by_id($ma_nv)
{
    $sql = "SELECT * FROM nhan_vien WHERE ma_nv=?";
    return pdo_query_one($sql, $ma_nv);
}

function nhan_vien_select_by_vt($ma_nv)
{
    $sql = "SELECT nhan_vien.*, vai_tro.ten_VT AS ten_VT
            FROM nhan_vien
            JOIN vai_tro ON nhan_vien.vai_tro_id = vai_tro.vai_tro_id
            WHERE nhan_vien.ma_nv=?";
    return pdo_query_one($sql, $ma_nv);
}


function khach_hang_select_by_id($ma_kh)
{
    $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
    return pdo_query_one($sql, $ma_kh);
}

if (exist_param("btn_login")) {
    $user = nhan_vien_select_by_id($ma_kh); // Thử đăng nhập như là nhân viên trước

    if (!$user) {
        // Nếu không phải nhân viên, thử đăng nhập như là khách hàng
        $user = khach_hang_select_by_id($ma_kh);
    }

    if ($user) {
        $hashed_password = md5($mat_khau);

        if ($user['kich_hoat'] == 1 && $user['mat_khau'] == $hashed_password) {
            if (exist_param('ghi_nho')) {
                add_cookie("ma_kh", $ma_kh, 30);
                add_cookie("mat_khau", $hashed_password, 30);
            } else {
                delete_cookie("ma_kh");
                delete_cookie("mat_khau");
            }

            $_SESSION["user"] = $user;

            $vai_tro_id = isset($user['vai_tro_id']) ? $user['vai_tro_id'] : null;

            if ($vai_tro_id !== null) {
                $ten_VT = isset($user['ten_VT']) ? $user['ten_VT'] : "Không xác định";

                // Sử dụng $ten_vai_tro trong thông báo và chuyển hướng
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

    $ma_kh = get_cookie("ma_kh");
    $mat_khau = get_cookie("mat_khau");
}

require '../layout.php';
?>
