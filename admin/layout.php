<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <!-- Favicon icon -->
   
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   
    <!-- Custom CSS -->

    
    
</head>

  <body>
  <?php
    

    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['vai_tro'] == 1) {
            $ten_kh = $_SESSION['user']['ten_kh'];
        } else {
            // Nếu không phải là nhân viên, chuyển hướng đến trang chủ
            header("Location: " . $SITE_URL . "/index.php");
            exit();
        }
    } else {
        // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
        header("Location: " . $SITE_URL . "/tai-khoan/dang-nhap.php");
        exit();
    }
?>
    <?php
    require "menu.php";
    
    
    ?>
     <?php include $VIEW_NAME; ?>
     <script>
    // =============Check delete=================//
    function checkDelete() {
        var x = confirm("Bạn chắc muốn xóa chứ?")
        if (x) {
            return true;
        } else {
            return false;
        }

    }
    // =============Auto resize textarea=================//

    function expandTextarea(id) {
        document.getElementById(id).addEventListener('keyup', function() {
            this.style.overflow = 'hidden';
            this.style.minHeight = '106.8px';
            this.style.height = 0;
            this.style.height = this.scrollHeight + 'px';
        }, false);
    }
    expandTextarea('txtarea');
    </script>


    <!-- Toast message -->
    <script>
    $(document).ready(function() {
        $('.toast').toast('show');
    });
    </script>

    <!--  chọn và bỏ chọn các loại trên trang list.php. -->
    <script>
    $(document).ready(function() {
        var checkboxItem = ":checkbox";
        $("#select-all").click(function() {
            if (this.checked) {
                $(checkboxItem).each(function() {
                    this.checked = true;
                });
            } else {
                $(checkboxItem).each(function() {
                    this.checked = false;
                });
            }
        });

        $("#deleteAll").click(function() {
            if ($(":checked").length === 0) {
                alert("Vui lòng chọn ít nhất một mục!");
                return false;
            }
        })
    });
    </script>
<?php
require "footer.php";
   ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>