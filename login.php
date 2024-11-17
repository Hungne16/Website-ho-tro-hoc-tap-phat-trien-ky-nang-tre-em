<?php
session_start();

// Khai báo tên tài khoản và mật khẩu cho Lan
$valid_username = "Lan";
$valid_password = "123";
$valid_role = 2;

// Khởi tạo biến thông báo lỗi
$error_message = "";

// Kiểm tra thông tin đăng nhập nếu form đã được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị từ form đăng nhập
    $role = $_POST['role'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($role) && empty($username) && empty($password)) {
        $error_message = "<p class='text-center text-danger'>Vui lòng lựa chọn vai trò, nhập tên người dùng và mật khẩu.</p>";
    } elseif (empty($role)) {
        $error_message = "<p class='text-center text-danger'>Vui lòng lựa chọn vai trò.</p>";
    } elseif (empty($username)) {
        $error_message = "<p class='text-center text-danger'>Vui lòng nhập tên người dùng.</p>";
    } elseif (empty($password)) {
        $error_message = "<p class='text-center text-danger'>Vui lòng nhập mật khẩu.</p>";
    } elseif ($role == $valid_role && $username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $_POST['username'];
        header("Location: index.php");
        exit();
    } else {
        $error_message = "<p class='text-center text-danger'>Sai tài khoản hoặc mật khẩu hoặc vai trò.</p>";
    }
}

?>


<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập tài khoản của bạn | Herculis</title>
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
                    <img src="img/draw2.webp" class="img-fluid" alt="Ảnh">
                </div>

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <p class="lead fw-normal mb-0 me-3">Đăng nhập tài khoản</p>
                        </div>

                        <div class="divider d-flex align-items-center my-4"></div>
                        
                        <!-- CHỌN VAI TRÒ -->
                        <p>Chọn vai trò của bạn:</p>
                        <select name="role" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option value="0">Nhấn để lựa chọn</option>
                            <option value="1">Học sinh</option>
                            <option value="2">Giáo viên</option>
                        </select> 

                        <!-- NHẬP EMAIL -->
                        <br>
                        <p>Nhập Email:</p>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input name="username" type="text" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Email" />
                        </div>

                        <!-- NHẬP MẬT KHẨU -->
                        <p>Nhập mật khẩu:</p>
                        <div data-mdb-input-init class="form-outline mb-3">
                            <input name="password" type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Mật khẩu" />
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- GHI NHỚ TÀI KHOẢN -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">Ghi nhớ tài khoản</label>
                            </div>

                            <a href="reset-password.php" class="text-body">Quên mật khẩu?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <!-- HIỆN THÔNG BÁO LỖI -->
                            <?php
                                echo $error_message;
                            ?>
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng
                                nhập</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Bạn chưa có tài khoản? <a href="signup.php"
                                    class="link-danger">Đăng ký ngay!</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>