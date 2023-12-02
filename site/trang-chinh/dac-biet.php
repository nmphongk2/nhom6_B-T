

<div class="new_product_area product_page">
<div class="row">
    <div class="col-12">
        <div class="block_title">
            <h3> Sản Phẩm Đặc Biệt</h3>
        </div>
        <div class="row">
            <div class="single_p_active owl-carousel">
              
            <?php
             

         

                $dac_biet = hang_hoa_select_dac_biet();
                if (!empty($dac_biet)) {
                    foreach ($dac_biet as $hang) {
                        
                        ?>

                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    
                                <a href="../hang-hoa/chi-tiet.php?id=<?= $hang['ma_hh'] ?>">

                        <img  src="<?= $UPLOAD_URL . '/products/' . $hang['hinh']?>" alt="Ảnh sản phẩm"></a>
                                    <div class="img_icone">
                                        <img src="<?= $CONTENT_URL ?>/img/cart/dacbiet.gif" width="60px" height="60px" alt="">
                                        <!-- <img src="assets\img\cart\span-hot.png" alt=""> -->
                                    </div>

                                    <div class="product_action">
                                        <form action="giohang-xuly.php" method="post">
                                            <input type="hidden" name="ma_hh" value="<?= $hang['ma_hh'] ?>">
                                            <a href="#" class="add-to-cart-link" data-id="<?= $hang['ma_hh'] ?>">
                                                <i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ Hàng
                                            </a>
                                        </form>
                                    </div>
                                </div>

                                <div class="product_content">
                                    <?= number_format($hang['don_gia']) ?> VNĐ
                                    <h3 class="product_title"><a href="single-product.html"><?= $hang['ten_hh'] ?></a></h3>
                                    <p class="product_title"><a href="single-product.html"><?= substr($hang['mo_ta'], 0, 130) ?></a></p>
                                </div>
                                <form action="wishlist-action.php" method="post">
                                    <div class="product_info">
                                        <ul>
                                            <input type="hidden" name="ma_hh" value="<?= $hang['ma_hh'] ?>">
                                            <li><a href="#" <?= $hang['ma_hh'] ?> title="Add to Wishlist">Yêu Thích</a></li>
                                    </form>
                                    <li><a href="../hang-hoa/chi-tiet.php?id=<?= $hang['ma_hh'] ?>" 
                                                        >Xem Sản Phẩm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    
           
                } else {
                    // Xử lý trường hợp không có dữ liệu
                    echo "Không có sản phẩm đặc biệt.";
                }
                ?>
            </div>
        </div>
 
    
<!--banner area start-->
<div class="banner_area banner_two">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_banner">
                                            <a href="#"><img src="<?= $CONTENT_URL ?>/img/banner/banner7.jpg" alt=""></a>
                                            <div class="banner_title">
                                                <p>Up to <span> 40%</span> off</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_banner">
                                            <a href="#"><img src="<?= $CONTENT_URL ?>/img/banner/banner8.jpg" alt=""></a>
                                            <div class="banner_title title_2">
                                                <p>sale off <span> 30%</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_banner">
                                            <a href="#"><img src="<?= $CONTENT_URL ?>/img/banner/banner11.jpg" alt=""></a>
                                            <div class="banner_title title_3">
                                                <p>sale off <span> 30%</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>       </div>
                            <!--banner area end--> 




