
</div>
<div class="new_product_area product_page">
                        <div class="row">
                            <div class="col-12">
                                <div class="block_title">
                                    <h3> Top 10 Sản Phẩm</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="single_p_active owl-carousel">
                                <?php
                                $top10 = hang_hoa_select_top10();

                                if (!empty($top10)) {
                                foreach ($top10

                                as $hang) {
                                extract($hang); // Chỉ extract thông tin của mỗi sản phẩm trong vòng lặp này

                                // Tính toán phần trăm giảm giá
                                $percent_discount = ($don_gia > 0) ? number_format($giam_gia / $don_gia * 100) : 0;
                                ?>

                                <div class="col-lg-3">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                <a href="../hang-hoa/chi-tiet.php?id=<?= $hang['ma_hh'] ?>">

<img  src="<?= $UPLOAD_URL . '/products/' . $hang['hinh']?>" alt="Ảnh sản phẩm"></a>
            <div class="img_icone">
                <img src="<?= $CONTENT_URL ?>/img/cart/span-new.png" width="60px" height="60px" alt="">
                <!-- <img src="assets\img\cart\span-hot.png" alt=""> -->
            </div>
                                                    <form action="<?= $SITE_URL . "/cart/add-cart.php" ?>" method="GET">
                                                    <div class="product_action">

                                                            <input type="hidden" name="ma_hh" value="<?= $hang['ma_hh'] ?>">
                                                        <a href="<?= $SITE_URL . "/cart/add-cart.php?ma_hh=" . $hang['ma_hh'] ?>"
                                                           class="add-to-cart-link"
                                                                data-id="<?= $hang['ma_hh'] ?>">
                                                                <i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ Hàng
                                                            </a>

                                                    </div>
                                                    </form>
                                                </div>

                                                <div class="product_content">
                                                    <span class="product_price">
                                                   <?= number_format($don_gia - $giam_gia) ?> VNĐ
 VNĐ
                                                    </span>
                                                    <h3 class="product_title"><a href="single-product.html">
                                                            <?= $hang['ten_hh'] ?>
                                                        </a></h3>
                                                    <p class="product_title"><a href="single-product.html">
                                                            <?= substr($hang['mo_ta'], 0, 130) ?>
                                                        </a></p>
                                                </div>
                                                <form action="wishlist-action.php" method="post">
                                                    <div class="product_info">
                                                        <ul>
                                                            <input type="hidden" name="ma_hh" value="<?= $hang['ma_hh'] ?>">
                                                            <li><a href="#" <?= $hang['ma_hh'] ?> title="Add to Wishlist">Yêu
                                                                    Thích</a></li>
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
                                    // Xử lý trường hợp khi $top10 là rỗng
                                }
                                ?>


                        </div>
                    </div>
