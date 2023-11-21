<?php
require_once "../../dao/pdo.php";
require_once "../../dao/khach_hang.php";
require "../../global.php";


extract($_REQUEST);
if (exist_param("btn_list")) {

    //show dữ liệu
    $items = khach_hang_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    #lấy dữ liệu từ form
    $ma_kh = $_POST['ma_kh'];
    $mat_khau = md5($_POST['mat_khau']);
    $ten_kh = $_POST['ten_kh'];
  
    $email = $_POST['email'];
    $hinh = save_file('hinh', "$UPLOAD_URL/users/");
    
    $kich_hoat = $_POST['kich_hoat'];
    $vai_tro = $_POST['vai_tro'];

    // Upload file lên host
   
    //insert vào db
    khach_hang_insert($ma_kh, $mat_khau, $ten_kh, $email, $hinh, $kich_hoat, $vai_tro);

    //show dữ liệu
    $items = khach_hang_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    #lấy dữ liệu từ form
    $ma_kh = $_REQUEST['ma_kh'];
    $khach_hang_info = khach_hang_select_by_id($ma_kh);
    extract($khach_hang_info);

    //show dữ liệu
    $items = khach_hang_selectall();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $ma_kh = $_REQUEST['ma_kh'];
    khach_hang_delete($ma_kh);
    //hiển thị danh sách

    $items = khach_hang_selectall();
$VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        if (isset($_POST['ma_kh'])) {
            $arr_ma_kh = $_POST['ma_kh'];
            khach_hang_delete($arr_ma_kh);
            $MESSAGE = "Xóa thành công!";
        } else {
            $MESSAGE = "Mã khách hàng không được tìm thấy!";
        }
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }

    $items = khach_hang_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $ma_kh = $_POST['ma_kh'];
    $ten_kh = $_POST['ten_kh'];
    $mat_khau = md5($_POST['mat_khau']);
    $email = $_POST['email'];
    $kich_hoat = $_POST['kich_hoat'];
    $vai_tro = $_POST['vai_tro'];


    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;

    khach_hang_update($ma_kh, $mat_khau, $ten_kh, $email, $hinh, $kich_hoat,$vai_tro);
    // khach_hang_update();
    //hiển thị danh sách

    $items = khach_hang_selectall();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php";