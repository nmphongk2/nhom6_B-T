<?php



if (isset($_SESSION['name_page'])) {
  $name_page = $_SESSION['name_page'];
}

if (isset($_SESSION["ma_kh"])) {
$ma_kh = $_SESSION["ma_kh"];
}
if (isset($_SESSION['total_cart'])) {
echo $_SESSION['total_cart'];
} else {
}





?>


<nav class="navbar navbar-expand-md navbar-light bg-light">
<div class="container-fluid ">
<a class="navbar-brand" href="<?=$ADMIN_URL?>/trang-chinh?btn_list/">Trang chủ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?=$ADMIN_URL?>/loai-hang/index.php?btn_list" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Loại hàng</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="index.php">Thêm mới</a></li>
        </ul>
      </li>
    </ul>

    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?=$ADMIN_URL?>/khach-hang/index.php?btn_list" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Khách hàng</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="<?=$ADMIN_URL?>/khach-hang/index.php">Thêm mới</a></li>
        </ul>
      </li>
    </ul>

    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?=$ADMIN_URL?>/hang-hoa/index.php?btn_list" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Hàng hóa</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="<?=$ADMIN_URL?>/hang-hoa/index.php">Thêm mới</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
        </ul>
      </li>
    </ul>

    <ul class="navbar-nav">
      <li >
        <a class="nav-link " href="<?=$ADMIN_URL?>/binh-luan/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bình luận</a>
      </li>
    </ul>

    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?=$ADMIN_URL?>/thong-ke/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Thống kê</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="<?=$ADMIN_URL?>/thong-ke/index.php?chart">Xem biểu đồ</a></li>
        </ul>
      </li>
    </ul>
 
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Xin chào,<?= $ten_kh ?></a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <li><a class="dropdown-item" href="<?= $SITE_URL?>">Trang chính</a></li>
          <li><a class="dropdown-item" href="<?= $SITE_URL . '/tai-khoan/dang-nhap.php?btn_logout' ?>t">Đăng xuất</a></li>
        </ul>
      </li>
    </ul>

  </div>
 </div>
</nav>

<style>
.navbar-nav li:hover > ul.dropdown-menu {
    display: block;
}
.dropdown-submenu {
    position:relative;
}
.dropdown-submenu>.dropdown-menu {
    top:0;
    left:100%;
    margin-top:-6px;
}

/* rotate caret on hover */
.dropdown-menu > li > a:hover:after {
    text-decoration: underline;
    transform: rotate(-90deg);
} 
</style>


