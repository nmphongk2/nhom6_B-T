<div class="container">
    <div class="page-title">
    <h4 class="card-header text-center bg-success text-white text-uppercase">Danh sách khách hàng</h4>
    </div>
    <?php
        if (isset($MESSAGE) && (strlen($MESSAGE) > 0)) {
            echo '<h5 class="alert alert-danger ">' . $MESSAGE . '</h5>';
        }
        ?>
    <div class="box box-primary">
        <div class="box-body">
            <form action="?btn_delete_all" method="post" class="table-responsive">
                
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                       <th><input class="form-check-input" type="checkbox" id="select-all" onclick="toggleAllCheckboxes()">
                       </th> 
                      
                            <th>Mã KH</th>
                            <th>Họ và tên</th>
                            <th>Địa chỉ email</th>
                            <th>Ảnh</th>
                            <th>Vai trò</th>
                            <th>Kích hoạt</th>
                            <th><a href="index.php" class="btn btn-success text-white">Thêm mới
                                    <i class="fas fa-plus-circle"></i></a></th>
                        </tr>
                    </thead>
                    <tbody?>
                        <?php

                        foreach ($items as $item) {
                            extract($item);
                            $suakh = "index.php?btn_edit&ma_kh=" . $ma_kh;
                            $xoakh = "index.php?btn_delete&ma_kh=" . $ma_kh;
                            $img_path = $UPLOAD_URL . '/users/' . $hinh;
                            if (is_file($img_path)) {
                                $img = "<img src='$img_path' height='50' width='50' class='rounded-circle object-fit-cover'>";
                            } else {
                                $img = "no photo";
                            }

                        ?>
                        <tr>
                            <td><input type="checkbox" class="form-check-input" name="ma_kh[]" value="<?= $ma_kh ?>"></td>
                            <td><?= $ma_kh ?></td>
                            <td><?= $ten_kh ?></td>
                            <td><?= $email ?></td>
                            <td><?= $img ?></td>
                            <td><?= ($vai_tro == 1) ? "Nhân viên" : "Khách hàng"; ?></td>
                            <td><?= ($kich_hoat == 1) ? "Rồi" : "Chưa"; ?></td>
                            <td class="text-center">
                                <a href="<?= $suakh ?>" class="btn btn-outline-success btn-rounded">Sửa</a>
                                <a href="<?= $xoakh ?>" class="btn btn-outline-danger btn-rounded"
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