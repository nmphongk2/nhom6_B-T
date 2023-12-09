


    <!-- Add your site or application content here -->
 
    <!--pos page start-->
    <div class="pos_page">
        <div class="container">
            <!--pos page inner-->
            <div class="pos_page_inner">
                <!--header area -->
                <div class="header_area">
                    <!--header top-->
                    <div class="header_top">

                    </div>
                    <!--header top end-->

                    <!--header middel-->

                    <!--header middel end-->

                    <!--header end -->
                    <!--breadcrumbs area start-->
                    <div class="breadcrumbs_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="breadcrumb_content">
                                    <ul>
                                        <li><a href="index.html">Trang chủ</a></li>
                                        <li><i class="fa fa-angle-right"></i></li>
                                        <li>Chi tiết</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--breadcrumbs area end-->


                    <!--product wrapper start-->
                    <div class="product_details">
                        <div class="row">
                            <div class="col-lg-15 col-md-16">
                                <div class="product_tab fix">

                                    <div class="tab-content produc_tab_a">
                                        <div class="tab-pane fade show active" id="p_tab1" role="tabpanel">
                                            <div class="modal_img">
                                                <img src="<?= $UPLOAD_URL . "/products/" . $hang['hinh']  ?>">




                                                <div class="view_img">
                                                    <a class="large_view" href="<?= $UPLOAD_URL . "/products/" . $hang['hinh']  ?>">
                                                    <i class="fa fa-search-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="p_tab2" role="tabpanel">
                                            <div class="modal_img">

                                                <div class="img_icone">
                                                    <img src="assets\img\cart\span-new.png" alt="">
                                                </div>
                                                <div class="view_img">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="p_tab3" role="tabpanel">
                                            <div class="modal_img">
                                                <a href="#"><img src="assets\img\product\product15.jpg" alt=""></a>
                                                <div class="img_icone">
                                                    <img src="assets\img\cart\span-new.png" alt="">
                                                </div>
                                                <div class="view_img">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="product_d_right">
                                    <h1>
                                    <?php echo $hang['ten_hh']; ?>
                                    </h1>

                                    <div class="product_ratting mb-10">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"> Write a review </a></li>
                                        </ul>
                                    </div>
                                    <div class="product_desc">
                                        <p>
                                            <?php echo substr($hang['mo_ta'], 0, 200); ?>
                                        </p>
                                    </div>


                                    <div class="content_price mb-15">
                                        <span>
                                        <?= number_format($hang['don_gia']) ?> VNĐ
                                        </span>
                                        <span class="old-price">

                                        </span>
                                    </div>
                                    <div class="box_quantity mb-20">
                                        <form action="#">
                                            <label>Số Lượng</label>
                                            <input min="0" max="100" value="1" type="number">
                                        </form>
                                        <button type="submit"><i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ Hàng</button>
                                        <a href="#" title="add to wishlist"><i class="fa fa-heart"
                                                aria-hidden="true"></i></a>
                                    </div>
                                    

                                    <div class="sidebar_widget color">
                                        <h2>Chi Tiết Sản Phẩm</h2>
                                       
                                    </div>

                                    <div class="product_stock mb-80">
                                     
                                    <p>Mã Sản Phẩm:  <?php echo $hang['ma_hh']; ?></p>
                                    </div>
                                    <div class="product_stock mb-80">
                                        <p>Kho:  <?php echo number_format($hang['so_luong']); ?></p>
                                        <span> Loại: <?php echo $hang['ma_loai']; ?> </span>
                                    </div>
                                    <div class="wishlist-share">
                                        <h4>Lượt Xem: <?php echo $hang['luot_xem']; ?></h4>
                                      
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--product details end-->


                    <!--product info start-->
                    <div class="product_d_info">
                        <div class="row">
                            <div class="col-12">
                                <div class="product_d_inner">
                                    <div class="product_info_button">
                                        <ul class="nav" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#info" role="tab"
                                                    aria-controls="info" aria-selected="false">Mô Tả</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                                    aria-selected="false">Thông Tin</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                                    aria-selected="false">Bình Luận</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="info" role="tabpanel">
                                            <div class="product_info_content">
                                                <p>
                                                    <?php echo $hang['mo_ta']; ?>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="sheet" role="tabpanel">
                                            <div class="product_d_table">
                                                <form action="#">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="first_child">Ngày Nhập</td>
                                                                <td>
                                                                    <?php echo $hang['ngay_nhap']; ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="first_child">Số Lượng</td>
                                                                <td>
                                                                    <?php echo number_format($hang['so_luong']); ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="first_child">Mã Hàng</td>
                                                                <td>
                                                                    <?php echo $hang['ma_hh']; ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="first_child">Loai</td>
                                                                <td>
                                                                    <?php echo $hang['ma_loai']; ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                            <div class="product_info_content">

                                        
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                                            <div class="product_info_content">
                                                
                                            </div>


                                            <?php
                                            $ma_hh = isset($_GET['id']) ? $_GET['id'] : null;
                                            // Chuẩn bị câu lệnh SQL SELECT bình luận theo mã hàng hóa
                                            $sql_binh_luan = "SELECT * FROM binh_luan WHERE ma_hh = :ma_hh";
                                            $stmt_binh_luan = $conn->prepare($sql_binh_luan);
                                            $stmt_binh_luan->bindParam(':ma_hh', $hang_id);
                                            $stmt_binh_luan->execute();

                                            // Kiểm tra xem có bình luận nào không
                                            if ($stmt_binh_luan->rowCount() > 0) {
                                                // Hiển thị từng bình luận
                                                while ($row_binh_luan = $stmt_binh_luan->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>


                                                    <div class="product_info_inner">
                                                        <div class="product_ratting mb-5">
                                                            <strong>Mã</strong>
                                                            <p><?php echo $row_binh_luan['ma_hh']; ?></p>
                                                        </div>
                                                        <div class="product_ratting col-3 mb-5">
                                                            <strong>Ngày</strong>
                                                            <p><?php echo $row_binh_luan['ngay_lap']; ?></p>
                                                        </div>
                                                        <div class="product_demo">
                                                            <strong><?php echo $row_binh_luan['ma_tk']; ?></strong>
                                                            <p><?php echo $row_binh_luan['noi_dung']; ?></p>
                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <?php
                                                }
                                            } else {
                                                echo "Chưa có bình luận nào cho sản phẩm này.";
                                            }

                                            ?>

                                            <div class="product_review_form">
                                                <form action="../hang-hoa/binh-luan.php" method="post">
                                                    <hr>
                                                    <h2>Đánh giá </h2>
                                                  
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="review_comment">Nội dung</label>
                                                            <textarea name="noi_dung" id="review_comment"></textarea>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="author">Khách hàng</label>
                                                            <input id="author" name="ma_tk" type="text"
                                                                   value='<?php echo isset($_SESSION['user']['ma_tk']) ? $_SESSION['user']['ma_tk'] : "Chưa đăng nhập"; ?>'
                                                                   readonly>

                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="email">Mã Hàng Hóa </label>
                                                            <input id="text" name="ma_hh" type="text"
                                                                value='<?php echo $ma_hh; ?>'readonly>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="date">Ngày </label>
                                                            <input id="date" name="ngay_lap" type="datetime-local"
                                                                readonly value="<?php echo date('Y-m-d H:i:s'); ?>">
                                                        </div>

                                                        <ul class="pagination justify-content-center">
                
                                                    </div>
                                                    <button type="submit">Gửi</button>
                                                </form>
                                             

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--product info end-->


                    <!--new product area start-->
                    <div class="new_product_area product_page">
                        <div class="row">
                            <div class="col-12">
                            </div>             
                     
                           <?php
                           include'../trang-chinh/top10.php';
                           ?>
                           </div>
                                </div>
                            </div>
                        </div>
              
                



            </div>
            <!--pos page inner end-->
        </div>
    </div>


    <!-- all js here -->
    <script src="assets\js\vendor\jquery-1.12.0.min.js"></script>
    <script src="assets\js\popper.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\js\ajax-mail.js"></script>
    <script src="assets\js\plugins.js"></script>
    <script src="assets\js\main.js"></script>
</body>

</html>