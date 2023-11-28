<?php
ob_start();

?>
<!-- Controller chuyển trang được cung cấp layout từ view -->
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../../contents/admin/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>ADMIN</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../uploads/images-logo/ADMIN.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../../contents/admin/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../../contents/admin/assets/vendor/css/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../../contents/admin/assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../../contents/admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../../contents/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../../../contents/admin/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../../contents/admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../../contents/admin/assets/js/config.js"></script>
</head>

<body>
    <main class="mt-5 mb-5">
        <div class="row mx-auto">
            <div class="col-md-4 col-sm-8 mx-auto p-5 ">

                <div class="row mb-3">
                    <div class="top-image col-12 d-flex justify-content-center align-items-center">
                        <img src="<?=$UPLOAD_IMG_URL?>/images-logo/ADMIN.png" alt="">
                        <p class='ms-2 text-login-admin text-dark fw-bold'>
                            Quên mật khẩu đăng nhập
                        </p>
                        
                    </div>
                    <?php
                        if (isset($True['message']))
                            echo "<br><span class='text-center mx-auto' style='color: green;'>" . $True['message'] . "</span><br>"; ?>
                    <?php
                        if (isset($Note['message']))
                            echo "<br><span class='text-center mx-auto' style='color: red;'>" . $Note['message'] . "</span><br>"; ?>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form class='row' action="<?= $ROOT_URL ?>/routerAdmin.php?pg=quenmatkhau" method="post">
                            <div class="mb-3 col-12">
                                <label for="username" class="form-label fw-bold ">Tên đăng nhập</label>
                                <input type="text" class="form-control" id="username" name="username">
                                <?php
                                if (isset($errors['username']))
                                    echo "<br><span style='color: red;'>" . $errors['username'] . "</span><br>"; ?>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="email" class="form-label fw-bold ">Email đăng nhập</label>
                                <input type="email" class="form-control" id="email" name="email">
                                <?php
                                if (isset($errors['email']))
                                    echo "<br><span style='color: red;'>" . $errors['email'] . "</span><br>"; ?>
                            </div>

                            <div class="button-login col-12 mb-3">
                                <button type="submit" class="container btn btn-success" name="xacnhan">Xác
                                    nhận</button>
                            </div>
                            <div class="col-12 mb-3">
                                <a href="../../../../Admin_DUAN1/routerAdmin.php?pg=dangnhap">
                                    <p class="text-center text-primary">Đăng nhập</p>
                                </a>
                            </div>


                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../../contents/admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../../contents/admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="../../../contents/admin/assets/vendor/js/bootstrap.js"></script>
    <script src="../../../contents/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../../contents/admin/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../../contents/admin/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../../contents/admin/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../../contents/admin/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
<?php ob_end_flush(); ?>