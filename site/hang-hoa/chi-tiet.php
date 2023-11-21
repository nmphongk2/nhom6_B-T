<?php
require '../../global.php';
require '../../dao/hang-hoa.php';
require '../../dao/binh-luan.php';
require '../../dao/khach_hang.php';
//-------------------------------//

$conn = pdo_get_connection();
// Kiểm tra xem biến $ma_hh đã được truyền qua chưa
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Đặt múi giờ thành múi giờ của Việt Nam




// Sử dụng hàm để tăng lượt xem

if (isset($_GET['id'])) {
    $hang_id = $_GET['id'];
    
    // Tăng số lượt xem
    hang_hoa_tang_so_luot_xem($hang_id);
    // Lấy thông tin sản phẩm từ cơ sở dữ liệu
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $hang_id);
    $stmt->execute();
    $hang = $stmt->fetch(PDO::FETCH_ASSOC);

    // Kiểm tra xem mã sản phẩm có tồn tại không
}




$VIEW_NAME = "hang-hoa/chitiet_sp.php";

require '../layout.php';  
