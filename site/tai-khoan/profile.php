<style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #f6d365;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
    }
</style>

<section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items" style="height: 650px">
            <div class="col-lg-10 mb-4 mb-lg-0">
                <div class="card" style="border-radius: .5rem;">
                    <div class="row no-gutters">
                        <div class="col-md-4 gradient-custom text-center text-white"
                             style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                            <?php
                            if (isset($_SESSION['user']) && $_SESSION['user']['hinh'] != "") { ?>
                                <img src="<?= $UPLOAD_URL . "/users/" . $_SESSION['user']['hinh'] ?>"
                                     alt="Avatar" class="img-fluid my-5" style="width: 250px;"/>

                                <h5><?php echo isset($_SESSION['user']['ho_ten']) ? $_SESSION['user']['ho_ten'] : "Chưa đăng nhập"; ?></h5>
                                <p>Năm
                                    Sinh: <?php echo isset($_SESSION['user']['ngay_sinh']) ? $_SESSION['user']['ngay_sinh'] : "Chưa đăng nhập"; ?></p>

                                <li><a href="<?= $SITE_URL . '/tai-khoan/cap-nhat-tk.php' ?>"><i
                                                class="bi bi-pencil-square"></i></a></li>

                            <?php } ?> <!-- Missing closing brace for the if statement -->
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <h3>THÔNG TIN</h3>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h6>Email</h6>
                                        <p class="text-muted"><?php echo isset($_SESSION['user']['email']) ? $_SESSION['user']['email'] : "Chưa đăng nhập"; ?></p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Số Điện Thoại</h6>
                                        <p class="text-muted"><?php echo isset($_SESSION['user']['sdt']) ? $_SESSION['user']['sdt'] : "Chưa đăng nhập"; ?></p>
                                    </div>
                                </div>

                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h6>Họ Tên</h6>
                                        <p class="text-muted"><?php echo isset($_SESSION['user']['ho_ten']) ? $_SESSION['user']['ho_ten'] : "Chưa đăng nhập"; ?></p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Địa Chỉ</h6>
                                        <p class="text-muted"><?php echo isset($_SESSION['user']['dia_chi']) ? $_SESSION['user']['dia_chi'] : "Chưa đăng nhập"; ?></p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <a href="#"><i class="bi bi-facebook col-lg-1 "></i></a>
                                    <a href="#"><i class="bi bi-twitter "></i></a>
                                    <a href="#"><i class="bi bi-instagram col-lg-1 "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
