<?php
require_once 'pdo.php';
function nguoi_dung_insert($ma_tk, $mat_khau, $ho_ten, $ngay_sinh, $dia_chi, $email, $hinh, $sdt, $kich_hoat, $vai_tro_id)
{
    $sql = "INSERT INTO nguoi_dung(ma_tk,mat_khau,ho_ten,ngay_sinh,dia_chi,email,hinh,sdt,kich_hoat,vai_tro_id) VALUES(?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $ma_tk, $mat_khau, $ho_ten, $ngay_sinh, $dia_chi == 'ko', $email, $hinh, $sdt == 0, $kich_hoat == 1, $vai_tro_id);
}

function nguoi_dung_update($ma_tk, $mat_khau, $ten_kh, $email, $ngay_sinh, $dia_chi, $gioi_tinh, $hinh, $sdt, $kich_hoat)
{
    $sql = "UPDATE nguoi_dung SET mat_khau=?, ten_kh=?, email=?, ngay_sinh=?,dia_chi=?, gioi_tinh=?, hinh=?,sdt=?, kich_hoat=? WHERE ma_tk=?";
    pdo_execute($sql, $mat_khau, $ten_kh, $email, $ngay_sinh, $dia_chi, $gioi_tinh, $hinh, $sdt, $kich_hoat, $ma_tk);
}

function nguoi_dung_select_by_id($ma_tk)
{
    $sql = "SELECT * FROM nguoi_dung WHERE ma_tk=?";
    return pdo_query_one($sql, $ma_tk);
}

function nguoi_dung_delete($ma_tk)
{
    $sql = "DELETE FROM nguoi_dung WHERE ma_tk=?";
    if (is_array($ma_tk)) {
        foreach ($ma_tk as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_tk);
    }
}

function nguoi_dung_selectall()
{
    $sql = "SELECT * FROM nguoi_dung";
    return pdo_query($sql);
}

function nguoi_dung_exist($ma_tk)
{
    $sql = "SELECT count(*) FROM nguoi_dung WHERE ma_tk=?";
    return pdo_query_value($sql, $ma_tk) > 0;
}

function nguoi_dung_exist_email($email)
{
    $sql = "SELECT count(*) FROM nguoi_dung WHERE email=?";
    return pdo_query_value($sql, $email) > 0;
}

function nguoi_dung_change_password($ma_tk, $mat_khau_moi)
{

    $sql = "UPDATE nguoi_dung SET mat_khau=? WHERE ma_tk=?";
    pdo_execute($sql, $mat_khau_moi, $ma_tk);
}