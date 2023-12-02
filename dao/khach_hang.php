<?php
require_once 'pdo.php';
function khach_hang_insert($ma_kh, $mat_khau, $ten_kh, $ngay_sinh, $dia_chi, $email, $hinh, $sdt, $kich_hoat, $vai_tro_id)
{
    $sql = "INSERT INTO khach_hang(ma_kh,mat_khau,ten_kh,ngay_sinh,dia_chi,email,hinh,sdt,kich_hoat,vai_tro_id) VALUES(?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $ma_kh, $mat_khau, $ten_kh, $ngay_sinh, $dia_chi == 'ko', $email, $hinh, $sdt == 0, $kich_hoat == 1, $vai_tro_id);
}

function khach_hang_update($ma_kh, $mat_khau, $ten_kh, $email, $ngay_sinh, $dia_chi, $gioi_tinh, $hinh, $sdt, $kich_hoat)
{
    $sql = "UPDATE khach_hang SET mat_khau=?, ten_kh=?, email=?, ngay_sinh=?,dia_chi=?, gioi_tinh=?, hinh=?,sdt=?, kich_hoat=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau, $ten_kh, $email, $ngay_sinh, $dia_chi, $gioi_tinh, $hinh, $sdt, $kich_hoat, $ma_kh);
}

function khach_hang_select_by_id($ma_kh)
{
    $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
    return pdo_query_one($sql, $ma_kh);
}
function khach_hang_delete($ma_kh)
{
    $sql = "DELETE FROM khach_hang WHERE ma_kh=?";
    if (is_array($ma_kh)) {
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_kh);
    }
}
function khach_hang_selectall()
{
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}

function khach_hang_exist($ma_kh)
{
    $sql = "SELECT count(*) FROM khach_hang WHERE ma_kh=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}

function khach_hang_exist_email($email)
{
    $sql = "SELECT count(*) FROM khach_hang WHERE email=?";
    return pdo_query_value($sql, $email) > 0;
}

function khach_hang_change_password($ma_kh, $mat_khau_moi)
{

    $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}