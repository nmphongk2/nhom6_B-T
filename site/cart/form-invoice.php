<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Hide the additional fields initially
        $("#ngan_hang_fields, #momo_fields").hide();

        // Show or hide fields based on the selected payment method
        $("#phuong_thuc_tt").change(function () {
            var selectedOption = $(this).val();

            // Hide all additional fields
            $("#ngan_hang_fields, #momo_fields").hide();

            // Show fields based on the selected option
            if (selectedOption == "1") {
                $("#ngan_hang_fields").show();
            } else if (selectedOption == "2") {
                $("#momo_fields").show();
            }
        });
    });
</script>


<h5 class="alert-secondary mb-3 pt-3 pb-3 pl-sm-4 shadow-sm text-center text-sm-center text-md-center text-lg-center text-xl-center"
    style="margin-top: 5rem; margin-bottom: 0rem">Thông tin nhận hàng </h5>
<div class="row m-1 pb-5">
    <form action="<?= $SITE_URL . '/cart/invoice.php' ?>" method="POST" class="col-6 m-auto" id="invoice"
          enctype="multipart/form-data">
        <div class="form-group form">
            <label for="">Họ và tên</label>
            <input type="text" name="ho_ten" id="" class="form-control rounded-pill" value="<?= $ho_ten ?>"
                   aria-describedby="helpId">
        </div>
        <div class="form-group">
            <!-- <label for="">Tên đăng nhập</label> -->
            <input type="hidden" name="ma_tk" id="" class="form-control rounded-pill" value="<?= $ma_tk ?>"
                   aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ email</label>
            <input type="text" name="email" id="" class="form-control rounded-pill" value="<?= $email ?>"
                   aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Số điện thoại</label>
            <input type="text" name="sdt" id="" class="form-control rounded-pill" placeholder="" value="<?= $sdt ?>"
                   aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ nhận hàng</label>
            <input type="text" name="sdt" id="" class="form-control rounded-pill" placeholder="" value="<?= $dia_chi ?>"
                   aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="phuong_thuc_tt">Phương thức thanh toán</label>
            <br>
            <select name="phuong_thuc_tt" id="phuong_thuc_tt" class="form-control">
                <option value="0" selected>Tiền mặt</option>
                <option value="1">Chuyển khoản ngân hàng</option>
                <option value="2">Ví điện tử</option>
            </select>
        </div>

        <!-- Additional fields for Chuyển khoản ngân hàng -->
        <div id="ngan_hang_fields" class="form-group">
            <label for="ten_ngan_hang">Tên ngân hàng</label>
            <input type="text" name="ten_ngan_hang" id="ten_ngan_hang" value="MB Bank" class="form-control" readonly>
            <label for="so_tai_khoan">Số tài khoản</label>
            <input type="text" name="so_tai_khoan" id="so_tai_khoan" value="788878888" class="form-control" readonly>
            <label for="so_tai_khoan">Họ Tên</label>
            <input type="text" name="ho_ten" id="ho_ten" value="NGUYEN MINH PHONG" class="form-control" readonly>
            <label for="so_tai_khoan">Nội Dung</label>
            <input type="text" name="so_tai_khoan" id="so_tai_khoan" value="<?= $ma_tk ?>" class="form-control"
                   readonly>
        </div>

        <!-- Additional fields for Ví điện tử -->
        <div id="momo_fields" class="form-group">
            <label for="ten_vi_momo">Tên ví Momo</label>
            <input type="text" name="ten_vi_momo" id="ten_vi_momo" value="MoMo" class="form-control" readonly>
            <label for="so_dien_thoai">Số Tài Khoản</label>
            <input type="text" name="so_dien_thoai" id="so_dien_thoai" value="0353339503" class="form-control" readonly>
            <label for="ho_ten_momo">Họ tên</label>
            <input type="text" name="ho_ten_momo" id="ho_ten_momo" value="Nguyễn Minh Phong" class="form-control"
                   readonly>
            <label for="so_tai_khoan">Nội Dung</label>
            <input type="text" name="so_tai_khoan" id="so_tai_khoan" value="<?= $ma_tk ?>" class="form-control"
                   readonly>


        </div>
        <br>
        <br>
        <input type="hidden" name="trang_thai" value="0">

        <div class="form-group">
            <label for="">Ghi chú</label>

            <textarea name="ghi_chu" class="form-control" id=""></textarea>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" name="btn_thanh_toan" class="btn btn-success btn-block pt-2 pb-2 rounded-pill">Xác
                nhận
            </button>
        </div>
    </form>

</div>