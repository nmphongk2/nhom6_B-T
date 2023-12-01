<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    include "../layout/menu.php";
    ?>
    <section class="resume-section p-4 p-lg-5 text-center" id="contact">
        <div class="container">
            <div class="my-auto">
                <h2 class="mb-4 primary-color">Thông tin liên hệ </h2>

                <ul class="fa-ul mb-4 ml-0">
                    <li id="mail-address">
                        <!--               Replace with your email address -->
                        <i class="fas fa-envelope-open mr-2 contact-icons"></i>thaiphu2004@gmail.com</a>
                    </li>
                    <li>
                        <i class="fas fa-mobile-alt mr-2 contact-icons"></i>0798934010
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt mr-2 contact-icons"></i> Nguyễn Văn Linh, phường An Khánh, quận Ninh Kiều, TP.Cần Thơ
                    </li>
                </ul>
                <form class="contact-form d-flex flex-column align-items-center" action="https://formspree.io/youremail@mail.com" method="POST">
                    <div class="form-group w-75">
                        <input type="name" class="form-control" placeholder="Tên" name="name" required />
                    </div>
                    <div class="form-group w-75">
                        <input type="email" class="form-control" placeholder="Email" name="name" required />
                    </div>

                    <div class="form-group w-75">
                        <textarea class="form-control" type="text" placeholder="Ghi chú..." rows="7" name="name" required></textarea>
                    </div>

                    <button type="submit" class="btn bg-primary btn-info w-75">Gửi</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>