<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản mới | Herculis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/"> <!-- Tạo icon -->
    <link href="fontawesome-free-6.6.0-web/css/all.css" rel="stylesheet" />
    <style>
        .back-link {
            font-size: 0.9rem;
            color: #007bff;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 1rem;
        }

        /* .back-link:hover {

        } */
    </style>
</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">

                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <a href="index.php" class="back-link">&larr; Quay lại trang chủ</a>
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng ký tài khoản</p>

                                    <form class="mx-1 mx-md-4">
                                        <p>&bull; Thông tin cá nhân</p>
                                        <!-- HỌ VÀ TÊN -->
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control" placeholder="Họ và tên" required />
                                            </div>
                                        </div>

                                        <!-- NGÀY SINH -->
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fa-solid fa-cake-candles"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="date" id="form3Example1c" class="form-control" required />
                                            </div>
                                        </div>

                                        <!--TRƯỜNG HỌC VÀ LỚP -->
                                        <div class="row">
                                            <div class="col-md-6 mb-4 pb-2">
                                                <i class="fa-solid fa-school"></i>
                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev2" class="form-control form-control-lg" placeholder="Trường học" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4 pb-2">

                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="form3Examplev3" class="form-control form-control-lg" placeholder="Lớp" />
                                                </div>
                                            </div>
                                        </div>

                                        <p>&bull; Thông tin tài khoản</p>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example3c" class="form-control" placeholder="Email hoặc số điện thoại" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4c" class="form-control" placeholder="Mật khẩu" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" class="form-control" placeholder="Nhập lại mật khẩu" />
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                                Tôi đồng ý với <a href="#!">Điều khoản và Điều kiện.</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Đăng ký</button>
                                            <p class="small fw-bold mt-2 pt-1 mb-0">Đã có tài khoản? <a href="login.php"
                                                    class="link-danger">Đăng nhập ngay!</a></p>
                                        </div>

                                    </form>

                                </div>
                                <!-- CHỌN VAI TRÒ -->
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <p>&bull; Chọn vai trò:</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>