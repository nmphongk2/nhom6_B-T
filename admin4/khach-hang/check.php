<?php
require '../../global.php';
require '../../dao/nguoi_dung.php';
if (isset($_GET['ma_kh'])) {

    $result = nguoi_dung_exist($_GET['ma_tk']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}
if (isset($_GET['email'])) {
    $result = nguoi_dung_exist_email($_GET['email']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}
if (isset($_POST['ma_tk'])) {
    # code...
    $result = nguoi_dung_exist($_POST['ma_tk']);
    if ($result == true) {
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }
}