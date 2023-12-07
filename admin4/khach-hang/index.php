<?php
require_once "../../dao/pdo.php";
require_once "../../dao/nguoi_dung.php";
require "../../global.php";
check_login();

extract($_REQUEST);
if (exist_param("btn_list")) {

    //show dữ liệu
    $items = nguoi_dung_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    #lấy dữ liệu từ form
    $ma_tk = $_POST['ma_tk'];
    $ten_kh = $_POST['ho_ten'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $dia_chi = $_POST['dia_chi'];
    $ngay_sinh = $_POST['ngay_sinh'];
    $mat_khau = md5($_POST['mat_khau']);
    $gioi_tinh = $_POST['gioi_tinh'];
    $kich_hoat = $_POST['kich_hoat'];
    $vai_tro = $_POST['vai_tro_id'];
    // Upload file lên host
    $hinh = save_file('hinh', "$UPLOAD_URL/users");
    //insert vào db
    nguoi_dung_insert($ma_tk, $mat_khau, $ho_ten, $ngay_sinh, $dia_chi, $email, $hinh, $sdt, $kich_hoat, $vai_tro_id);

    //show dữ liệu
    $items = nguoi_dung_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    #lấy dữ liệu từ form
    $ma_kh = $_REQUEST['ma_tk'];
    $nguoi_dung_info = nguoi_dung_select_by_id($ma_kh);
    extract($nguoi_dung_info);

    //show dữ liệu
    $items = nguoi_dung_selectall();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $ma_tk = $_REQUEST['ma_tk'];
    nguoi_dung_delete($ma_tk);
    //hiển thị danh sách

    $items = nguoi_dung_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $arr_ma_kh = $_POST['ma_tk'];
        nguoi_dung_delete($arr_ma_tk);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = nguoi_dung_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $ma_tk = $_POST['ma_tk'];

    $ho_ten = $_POST['ho_ten'];

    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $dia_chi = $_POST['dia_chi'];
    $ngay_sinh = $_POST['ngay_sinh'];
    $mat_khau = md5($_POST['mat_khau']);

    $gioi_tinh = $_POST['$gioi_tinh'];
    $kich_hoat = $_POST['kich_hoat'];
    $vai_tro = $_POST['vai_tro'];


    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;

    nguoi_dung_update($ma_tk, $mat_khau, $ho_ten, $email, $ngay_sinh, $dia_chi, $gioi_tinh, $hinh, $sdt, $kich_hoat);
    // khach_hang_update();
    //hiển thị danh sách

    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php";