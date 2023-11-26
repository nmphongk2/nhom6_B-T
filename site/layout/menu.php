
<!-- Add your site or application content here -->
<?php
 // Đảm bảo rằng session_start() được gọi trước bất kỳ dữ liệu đầu ra nào

 
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
            <!--pos page start-->
            <div class="pos_page">
                <div class="container">
                   <!--pos page inner-->
                    <div class="pos_page_inner">  
                       <!--header area -->
                        <div class="header_area">
                               <!--header top--> 
                                <div class="header_top">
                                   <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6">
                                           <div class="switcher">
                                                <ul>
                                                    <li class="languages"><a href="#"><img src="<?= $CONTENT_URL?>/img/logo/vn.png" style="width: 35px" alt=""> Tiếng Việt <i class=""></i></a>
                                                        <ul class="dropdown_languages">
                                                            <li><a href="#"><img src="<?= $CONTENT_URL?>/img/logo/fontlogo.jpg" alt=""> English</a></li>
                                                            <li><a href="#"><img src="<?= $CONTENT_URL?>/img/logo/fontlogo2.jpg" alt=""> French </a></li>
                                                        </ul>   
                                                    </li> 

                                                    <li class="currency"><a href="#"> Loại Tiền : VNĐ <i class="fa fa-angle-down"></i></a>
                                                        <ul class="dropdown_currency">
                                                            <li><a href="#"> Dollar (USD)</a></li>
                                                            <li><a href="#"> VNĐ (đ)  </a></li>
                                                        </ul> 
                                                    </li> 
                                                </ul>
                                            </div>
                                        </div>
                   
                                        <div class="col-lg-6 col-md-6">
                                            <div class="header_links">
                                                <ul>
                                                    <li><a href="contact.php" title="Contact">Hỗ Trợ</a></li>
                                                    <li><a href="wishlist.php" title="wishlist">Yêu Thích</a></li>
                                               
                                                 <li><a href="giohang.php" title="My cart">Giỏ Hàng</a></li>
<li><a href="../tai-khoan/khach-hang.php" title="My account">Tài Khoản</a></li>
  <!-- User -->
  <div class="dropdown widget-header icontext">
                    <a href="#" class="icon icon-sm rounded-circle border" id="dropdownMenu1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?php
                        if (isset($_SESSION['user']) && $_SESSION['user']['hinh'] != "") { ?>
                       <img src="<?= $UPLOAD_URL . "/users/" . $_SESSION['user']['hinh'] ?>" class="rounded-circle" width="50" height="50" alt="Avatar"
                            class="mb-2 object-fit-cover" alt="">
                        <?php } else { ?>
                        <i class="fa fa-user primary-color"></i>
                        <?php }  ?>
                    </a>
      <div class="text">
          <span class="text-dark">Xin chào!</span>
          <?php
          if (isset($_SESSION['user'])) {
              $user = $_SESSION['user'];

              // Kiểm tra loại người dùng (nếu có)
              if (isset($user['ten_kh'])) {
                  // Nếu là khách hàng
                  $ten_nguoi_dung = $user['ten_kh'];
              } elseif (isset($user['ten_nv'])) {
                  // Nếu là nhân viên
                  $ten_nguoi_dung = $user['ten_nv'];
              } else {
                  // Trường hợp khác (nếu có)
                  $ten_nguoi_dung = "Không xác định";
              }

              echo '<div class="text-dark text-info">' . $ten_nguoi_dung . '</div>';
          } else { ?>

              <a href="<?= $SITE_URL . '/tai-khoan/dang-nhap.php' ?>" class="d-block text-info">Đăng nhập</a>
                     
                        <?php }  ?>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <?php
                            if (isset($_SESSION['user'])) { ?>

                                <?php if ($_SESSION['user']['vai_tro_id'] == 1) { ?>
                            <a class="dropdown-item pl-3 py-2" href="<?= $ADMIN_URL . "/trang-chinh/" ?>">Quản trị
                                admin</a>
                            <?php }  ?>

                            <a class="dropdown-item pl-3 py-2"
                                href="<?= $SITE_URL . '/tai-khoan/cap-nhat-tk.php' ?>">Cập nhật tài khoản</a>
                            <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/doi-mkhau.php' ?>">Đổi mật
                                khẩu</a>
                            <a class="dropdown-item pl-3 py-2"
                                href="<?= $SITE_URL . '/tai-khoan/dang-nhap.php?btn_logout' ?>">Đăng xuất</a>


                            <?php } else { ?>

                            <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/dang-nhap.php' ?>">Đăng
                                nhập</a>
                            <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/dang-ky.php' ?>">Đăng
                                ký</a>

                            <?php }  ?>
                            </div>
                    </div>
                </div>     </div>
                    </div>
                </div>
                                   </div> 
                                </div> 
                                <!--header top end-->
                                  <!--header middel--> 
                                  <div class="header_middel">
                                    <div class="row align-items-center">
                                       <!--logo start-->
                                        <div class="col-lg-3 col-md-3">
                                            <div class="logo">
                                                <a href="index.php"><img src="<?= $CONTENT_URL?>/img/logo/logo.png" alt=""></a>
                                            </div>
                                        </div>
                                        <!--logo end-->
                                        <div class="col-lg-9 col-md-9">
                                            <div class="header_right_info">
                                                <div class="search_bar">
                                                <form  action="<?= $SITE_URL ?>/hang-hoa/liet-ke.php"  method="POST">
                                                        <input placeholder="Search..." type="text" name="kyw">
                                                        <button type="submit" name="timkiem"><i class="fa fa-search"></i></button>
                                                    </form>
                                                </div>
                                                <div class="shopping_cart">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i> 2Items - $209.44 <i class="fa fa-angle-down"></i></a>

                                                    <!--mini cart-->
                                                    <div class="mini_cart">
                                                        <div class="cart_item">
                                                           <div class="cart_img">
                                                               <a href="#"><img src="<?= $CONTENT_URL ?>/img/cart/cart.jpg" alt=""></a>
                                                           </div>
                                                            <div class="cart_info">
                                                                <a href="#">lorem ipsum dolor</a>
                                                                <span class="cart_price">$115.00</span>
                                                                <span class="quantity">Qty: 1</span>
                                                            </div>
                                                            <div class="cart_remove">
                                                                <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="cart_item">
                                                           <div class="cart_img">
                                                               <a href="#"><img src="<?= $CONTENT_URL ?>/img/cart/cart2.jpg" alt=""></a>
                                                           </div>
                                                            <div class="cart_info">
                                                                <a href="#">Quisque ornare dui</a>
                                                                <span class="cart_price">$105.00</span>
                                                                <span class="quantity">Qty: 1</span>
                                                            </div>
                                                            <div class="cart_remove">
                                                                <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="shipping_price">
                                                            <span> Shipping </span>
                                                            <span>  $7.00  </span>
                                                        </div>
                                                        <div class="total_price">
                                                            <span> total </span>
                                                            <span class="prices">  $227.00  </span>
                                                        </div>
                                                        <div class="cart_button">
                                                            <a href="checkout.php"> Check out</a>
                                                        </div>
                                                    </div>
                                                    <!--mini cart end-->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>     
                                <!--header middel end-->      
                            <div class="header_bottom">
                                <div class="row">
                                        <div class="col-12">
                                            <div class="main_menu_inner">
                                                <div class="main_menu d-none d-lg-block">
                                                <nav>
                                                        <ul>
                                                            <li
                                                            <?= $name_page == 'trang_chu' ? 'active' : '' ?>
                                                             class="active"><a href="<?= $SITE_URL ?>/trang-chinh/">Trang Chủ</a>
                                                            
                                                            </li>

                                                          
                                                            <li  <?= $name_page == 'san_pham' ? 'active' : '' ?>><a href="<?= $SITE_URL ?>/hang-hoa/liet-ke.php">Sản Phẩm</a>
                                                                <div class="mega_menu jewelry">
                                                                    <div class="mega_items jewelry">
                                                                        <ul>
                                                                            <li <?= $name_page == 'Dien_thoai' ? 'active' : '' ?>><a href="<?= $SITE_URL ?>/shop-fullwidth.php">Điện Thoại</a></li>
                                                                            <li <?= $name_page == 'Lap_top' ? 'active' : '' ?>><a href="<?= $SITE_URL ?>/shop-fullwidth.php">LapTop</a></li>
                                                                            <li <?= $name_page == 'Tivi' ? 'active' : '' ?>><a href="<?= $SITE_URL ?>/shop-fullwidth.php">Tivi</a></li>
                                                                            <li <?= $name_page == 'Am_thanh' ? 'active' : '' ?>><a href="<?= $SITE_URL ?>/shop-fullwidth.php">Am_thanh</a></li>
                                                                         
                                                                 

                                                                        </ul>
                                                                    </div>
                                                                </div>  
                                                            </li>
                                                            <li <?= $name_page == 'phu_kien' ? 'active' : '' ?>><a href="<?= $SITE_URL ?>/shop-fullwidth.php">Phụ Kiện</a></li>
                                                            
                                                            </li>
                                                            <li <?= $name_page == 'Hang_cu' ? 'active' : '' ?>><a href="<?= $SITE_URL ?>/shop-fullwidth.php">Hàng Cũ</a></li>
                                                            <li <?= $name_page == 'Lien_he' ? 'active' : '' ?>><a href="<?= $SITE_URL ?>/shop-fullwidth.php">Liên Hệ</a></li>
                                                             
                                                            </li>
                                                           
                                                            
                                                            <li <?= $name_page == 'tin_tuc' ? 'active' : '' ?>><a href="<?= $SITE_URL ?>/shop-fullwidth.php">Tin Tức</a></li>
                                                               
                                                            </li>
                                                           

                                                        </ul>
                                                    </nav>
                                                    
                                              

                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            
                        <!--header end -->
                                             
                                                          <!--header end --><script>
  var isLoggedIn = <?php echo isset($ma_kh) ? 'true' : 'false'; ?>;
  if (isLoggedIn) {
    document.getElementById('logged-in').style.display = 'block';
    document.getElementById('logged-out').style.display = 'none';
  } else {
    document.getElementById('logged-in').style.display = 'none';
    document.getElementById('logged-out').style.display = 'block';
  }
</script>


















