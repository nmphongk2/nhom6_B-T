<?php
require '../../global.php';
require '../../dao/hang-hoa.php';


// Sử dụng $_GET để lấy giá trị của tham số 'ma_hh' từ URL
$ma_hh = isset($_GET['ma_hh']) ? $_GET['ma_hh'] : 0;


if (isset($ma_hh) && $ma_hh > 0) {
    // Sử dụng hàm select_by_ma_hh thay vì select_by_id, vì giả sử 'ma_hh' là khóa chính của bảng
    $items = hang_hoa_select_by_id($ma_hh);

    // Kiểm tra nếu sản phẩm tồn tại
    if ($items && isset($items['ma_hh'])) {
        $don_gia = $items['don_gia'];
        $giam_gia = $items['giam_gia'];
        $ten_hh = $items['ten_hh'];

        if (isset($_SESSION['cart'])) {
            if (isset($_SESSION['cart'][$ma_hh]['so_luong'])) {
                $_SESSION['cart'][$ma_hh]['so_luong'] += 1;
            } else {
                $_SESSION['cart'][$ma_hh]['so_luong'] = 1;
            }

            $_SESSION['cart'][$ma_hh]['ma_hh'] = $ma_hh;
            $_SESSION['cart'][$ma_hh]['ten_hh'] = $ten_hh;
            // $_SESSION['cart'][$ma_hh]['hinh'] = $hinh; // Nếu không có trường 'hinh' trong bảng, bạn có thể bỏ qua
            $_SESSION['cart'][$ma_hh]['don_gia'] = $don_gia;
            $_SESSION['cart'][$ma_hh]['giam_gia'] = $giam_gia;

            $total = array_sum(array_column($_SESSION['cart'], 'so_luong'));
            echo $total;
        } else {
            $_SESSION['cart'][$ma_hh]['so_luong'] = 1;
            $_SESSION['cart'][$ma_hh]['ma_hh'] = $ma_hh;
            $_SESSION['cart'][$ma_hh]['ten_hh'] = $ten_hh;
            // $_SESSION['cart'][$ma_hh]['hinh'] = $hinh; // Nếu không có trường 'hinh' trong bảng, bạn có thể bỏ qua
            $_SESSION['cart'][$ma_hh]['gia'] = $gia;
            $_SESSION['cart'][$ma_hh]['giam_gia'] = $giam_gia;

            $total = array_sum(array_column($_SESSION['cart'], 'so_luong'));
            echo $total;
        }

        $_SESSION['total_cart'] = $total;

        header("location:" . $SITE_URL . "/cart/list-cart.php");
        exit;
    }
}
?>
