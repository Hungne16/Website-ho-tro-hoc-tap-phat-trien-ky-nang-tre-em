<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo lại mật khẩu mới | Herculis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/"> <!-- Tạo icon -->
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- HEADER -->
    <header class="p-3 bg-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <p>Herculis</p>
                </a>


                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

                </ul>

                <div class="text-end">
                    <a href="login.php" class="btn btn-outline-primary me-2">Đăng nhập</a>
                    <a href="feedback.php" class="btn btn-default">Góp ý</a>
                </div>
            </div>
        </div>
    </header>

    <!-- FORM ĐĂNG NHẬP -->
    <section>
        <!-- HÌNH ẢNH -->
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="img/quenMatKhau.jpg" class="img-fluid" alt="Ảnh">
                </div>

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <p class="lead fw-normal mb-0 me-3">Thay đổi mật khẩu</p>
                        </div>

                        <div class="divider d-flex align-items-center my-4"></div>


                        <!-- NHẬP EMAIL -->
                        <br>
                        <p>Nhập Email hoặc Số điện thoại của bạn:</p>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input name="username" type="text" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Email/Số điện thoại" />
                        </div>

                        

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Tiếp tục</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>