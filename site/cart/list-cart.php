<?php
require '../../global.php';
require '../../dao/hang-hoa.php';
require '../../dao/nguoi_dung.php';
//-------------------------------//
extract($_REQUEST);

//die;
if (exist_param("form_invoice")) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        $nd = nguoi_dung_select_by_id($id['ma_tk']);
        extract($nd);
        $VIEW_NAME = "../cart/form-invoice.php";
    } else {
        header("location:" . $SITE_URL . "/tai-khoan/dang-nhap.php");
    }
} else {
    $VIEW_NAME = "../cart/cart.php";
}
require '../layout.php';