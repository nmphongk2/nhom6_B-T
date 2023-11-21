
<div class="container">
    <div class="page-title">
    <h4 class="card-header text-center bg-success text-white text-uppercase">Danh Sách Loại Hàng</h4>
    </div>
    <?php
        if (isset($MESSAGE) && (strlen($MESSAGE) > 0)) {
            echo '<h5 class="alert alert-danger ">' . $MESSAGE . '</h5>';
        }
        ?>
    <hr>
    <div class="box box-primary">
        <div class="box-body">
            <form action="?btn_delete_all" method="post" class="table-responsive">
               
            <table width="100%" class="table table-hover table-bordered text-center">
    <thead class="thead-dark">
        <tr>
            <th>
          
                    <input class="form-check-input" type="checkbox" id="select-all" onclick="toggleAllCheckboxes()">
                    

            </th>
            <th>Mã loại</th>
            <th>Tên loại</th>
            <th>
                <a href="index.php" class="btn btn-success text-white">Thêm mới
                    <i class="fas fa-plus-circle"></i>
                </a>
            </th>
        </tr>
    </thead>
    <tbody>
                        <?php

                        foreach ($items as $item) {
                            extract($item);
                            $suadm = "index.php?btn_edit&ma_loai=" . $ma_loai;
                            $xoadm = "index.php?btn_delete&ma_loai=" . $ma_loai;

                        ?>
                        <tr>
                            <td><input type="checkbox" class="form-check-input" name="ma_loai[]" value="<?= $ma_loai ?>"></td>
                            <td><?= $ma_loai ?></td>
                            <td><?= $ten_loai ?></td>
                            <td class="text-center">
                                <a href="<?= $suadm ?>" class="btn btn-outline-success btn-rounded">Sửa</a>
                                <a href="<?= $xoadm ?>" class="btn btn-outline-danger btn-rounded"
                                    onclick="return checkDelete()">Xóa</a>
                            </td>
                        </tr>
                        <?php
                        }

                        ?>
                    </tbody>
                 
                </table>
    
                <button type="submit" class="btn btn-success mb-1" id="deleteAll" onclick="return checkDelete()">
                    Xóa mục đã chọn</button>
            </form>
        </div>
    </div>
</div>
<script>
    function toggleAllCheckboxes() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach((checkbox) => {
            if (checkbox.id !== 'select-all') {
                checkbox.checked = document.getElementById('select-all').checked;
            }
        });
    }
</script>