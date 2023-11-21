<div class="container">
    <div class="cards row mt-5">
    <h3 class="card-header text-center bg-success text-white text-uppercase">TỔNG SỐ</h3>
    <hr>
        <div class="card-single col d-flex justify-content-around bg-primary text-white py-5 ml-3">
            <div>
                <h1 class="bi bi-tags-fill"> <?= $loai ?></h1>
                <span>Danh mục</span>
            </div>
            <div>
                <i class="fas fa-th-list" style="font-size: 80px;"></i>
            </div>
        </div>
        <div class="card-single col d-flex justify-content-around bg-danger text-white py-5 ml-3">
            <div>
                <h1 class="bi bi-box2-heart"> <?= $hang_hoa ?></h1>
                <span>Sản phẩm</span>
            </div>
            <div>
                <i class="fas fa-sitemap" style="font-size: 80px;"></i>
            </div>
        </div>
        <div class="card-single col d-flex justify-content-around bg-info text-white py-5 ml-3">
            <div>
                <h1 class="bi bi-person-square"> <?= $khach_hang ?></h1>
                <span>Khách hàng</span>
            </div>
            <div>
                <i class="fas fa-users" style="font-size: 80px;"></i>
            </div>
        </div>
        <div class="card-single col d-flex justify-content-around bg-warning text-white py-5 ml-3">
            <div>
                <h1 class="bi bi-chat-square-heart-fill"> <?= $binh_luan ?></h1>
                <span>Bình luận</span>
            </div>
            <div>
                <i class="fas fa-comments" style="font-size: 80px;"></i>
            </div>
        </div>
    </div>
</div>