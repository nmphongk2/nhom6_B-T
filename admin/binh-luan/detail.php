<div class="container">
    <div class="page-title">

        <h4 class="card-header text-center bg-success text-white text-uppercase">Chi tiết bình luận</h4>
    </div>
    <?php
        if (isset($MESSAGE) && (strlen($MESSAGE) > 0)) {
            echo '<h5 class="alert alert-danger ">' . $MESSAGE . '</h5>';
        }
        ?>
    <hr>
    <div class="box box-success">
        <div class="box-body">
            <form action="?btn_delete_all" method="post" class="table-responsive">

               
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th><input class="form-check-input" type="checkbox" id="select-all"></th>
                         
                            <th>Nội dung</th>
                            <th>Ngày BL</th>
                            <th>Người BL</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($items as $item) {
                            extract($item);

                        ?>
                        <tr>
                            <td><input type="checkbox" class="form-check-input" name="ma_bl[]" value="<?= $ma_bl ?>"></td>
                           
                            <td><?= $noi_dung ?></td>
                            <td><?= $ngay_lap ?></td>
                            <td><?= $ma_kh ?></td>
                            <td class="text-end">
                                <a href="index.php?btn_delete&ma_bl=<?= $ma_bl ?>&ma_hh=<?= $ma_hh ?>"
                                    class="btn btn-outline-success btn-rounded bi bi-trash3-fill " onclick="return checkDelete()"><i
                                        class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        }

                        ?>
                    </tbody>

                </table>
                <button type="submit" class="btn btn-success mb-1" id="deleteAll" onclick="return checkDelete()">
                    Xóa mục đã chọn</button> <i class="ml-5">hàng hóa: <b><?= $items[0]['ten_hh'] ?></b></i>
                <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>">
                <div class="mt-3" width="100%">
                    <ul class="pagination justify-content-center">
                        <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?>

                        <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                            <a class="page-link" href="?ma_hh=<?= $ma_hh ?>&page=<?= $i ?>"><?= $i ?></a>
                        </li>

                        <?php } ?>

                    </ul>
                </div>
                <a class="btn btn-success" href="index.php">Quay lại</a>
            </form>
        </div>
    </div>
</div>