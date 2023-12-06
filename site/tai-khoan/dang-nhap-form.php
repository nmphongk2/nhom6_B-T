
<!-- ============================ COMPONENT LOGIN   ================================= -->
<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
    <div class="card-body">
        <h4 class="card-title mb-4">Đăng nhập</h4>

        <form action="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php" method="POST" id="form_login">

            <div class="form-group">
                <label for="loai_nguoi_dung" class="form-label">Loại người dùng</label>
                <select name="loai_nguoi_dung" class="form-control">
                    <option value="khach_hang">Khách hàng</option>
                    <option value="nhan_vien">Nhân viên</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Tài khoản</label>
                <input name="ma_kh" class="form-control" placeholder="Username" type="text" value="<?= $ma_kh ?>">
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input name="mat_khau" class="form-control" placeholder="Password" type="password"
                       value="<?= $mat_khau ?>">
                <i class="text-danger text-center"><?= $MESSAGE ?></i>
            </div>

            <div class="form-group">
                <a href="<?= $SITE_URL ?>/tai-khoan/quen-mk.php" class="float-right">Quên mật khẩu?</a>

                <label class="float-left custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="ghi_nho" checked>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"> Ghi nhớ tài khoản </span>
                </label>
            </div>

            <div class="form-group">
                <button type="submit" name="btn_login" class="btn btn-success btn-block"> Đăng nhập</button>
            </div>
        </form>
        <div class="panel panel-default">

        </div>
        <button onclick="redirectToGoogle()" class="btn btn-success  btn-block"> Đăng nhập Google</button>

            </div> 
            <div class="g-signin2" data-onsuccess="onSignIn"></div>
        </form>

    </div>
</div>

<p class="text-center mt-4">Bạn chưa có tài khoản? <a href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php">Đăng ký</a></p>
<br>

</body>
</html>


<head>
  <title>Google OAuth2 Login</title>
 
  <meta name="google-signin-client_id" content="963908178951-dvi2bcd563fa6pm3rjegc8rduee2cg3g.apps.googleusercontent.com">
</head>


<body>

</body>
</html>