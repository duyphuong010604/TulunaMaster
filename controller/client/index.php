<?php
ob_start();
include("../../global.php");
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../../uploads/images-logo/logo 50x (1).png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!--Tiêu đề-->
    <title>Trang Chủ - TULUNA PK SHOP</title>
    <!--
        CSS chung
        ============================================= -->
    <link rel="stylesheet" href=" <?= $CONTENT_URL ?> /client/css/linearicons.css">
    <link rel="stylesheet" href=" <?= $CONTENT_URL ?> /client/css/font-awesome.min.css">
    <link rel="stylesheet" href=" <?= $CONTENT_URL ?> /client/css/themify-icons.css">
    <link rel="stylesheet" href=" <?= $CONTENT_URL ?> /client/css/bootstrap.css">
    <link rel="stylesheet" href=" <?= $CONTENT_URL ?> /client/css/owl.carousel.css">
    <link rel="stylesheet" href=" <?= $CONTENT_URL ?> /client/css/nice-select.css">
    <link rel="stylesheet" href=" <?= $CONTENT_URL ?> /client/css/nouislider.min.css">
    <link rel="stylesheet" href=" <?= $CONTENT_URL ?> /client/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href=" <?= $CONTENT_URL ?> /client/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href=" <?= $CONTENT_URL ?> /client/css/magnific-popup.css">
    <link rel="stylesheet" href=" <?= $CONTENT_URL ?> /client/css/main.css">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php

    include("../../view/client/header.php");
    include("clientController.php");
    $client = new client(); //phuong thuc

    if (isset($_GET["atc"])):
        switch ($_GET['atc']) {
            case 'login':
                if (isset($_POST['dangnhap'])) {
                    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
                    $dongy = $_POST['dongy']??'';
                    $errors = $client->validation_dangnhap($username,$password, $dongy);
                   
                }
                include("../../view/client/login/index.php");
                break;

            case 'register':
                if (isset($_POST['dangki'])) {
                    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
                    $dongy = $_POST['dongy']??'';
                    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
                    $errors = $client->validation_dangki($username,$password, $dongy, $email);
                   
                }
                include("../../view/client/dangky/index.php");
                break;

            case 'sanpham':
                include("../../view/client/sanpham/index.php");
                break;

            case 'chitiet-sp':
                include("../../view/client/chitiet-sp/index.php");
                break;

            case 'home':
                include("../../view/client/home/index.php");
                break;

            case 'gopy':
                if (isset($_POST['gopy'])) {
                    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
                    
                    $errors = $client->validation_gopy($username,$email );
                   
                }
                include("../../view/client/goy/index.php");
                break;
            case 'quanly-tk':
                include("../../view/client/quanlytk/index.php");
                break;
            case 'gioithieu':
                include("../../view/client/gioithieu/index.php");
                break;
            case 'chinhsach':
                include("../../view/client/chinhsach/index.php");
                break;
            case 'quenmatkhau':
                if (isset($_POST['quenmatkhau'])) {
                    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
                    
                    $errors = $client->validation_quenmatkhau($username,$email );
                   
                }
                include("../../view/client/quenmatkhau/index.php");
                break;
            case 'giohang':
                include("../../view/client/giohang/index.php");
                break;
            case 'thanhtoan':
                include("../../view/client/thanhtoan/index.php");
                break;





            default:
                include("home/index.php");
                break;
        }

    else:
        include("../../view/client/home/index.php");
    endif;

    include("../../view/client/footer.php");

    ?>



    <script src=" <?= $CONTENT_URL ?> /client/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper. <?= $CONTENT_URL ?> /client/js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src=" <?= $CONTENT_URL ?> /client/js/vendor/bootstrap.min.js"></script>
    <script src=" <?= $CONTENT_URL ?> /client/js/jquery.ajaxchimp.min.js"></script>
    <script src=" <?= $CONTENT_URL ?> /client/js/jquery.nice-select.min.js"></script>
    <script src=" <?= $CONTENT_URL ?> /client/js/jquery.sticky.js"></script>
    <script src=" <?= $CONTENT_URL ?> /client/js/nouislider.min.js"></script>
    <script src=" <?= $CONTENT_URL ?> /client/js/countdown.js"></script>
    <script src=" <?= $CONTENT_URL ?> /client/js/jquery.magnific-popup.min.js"></script>
    <script src=" <?= $CONTENT_URL ?> /client/js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src=" <?= $CONTENT_URL ?> /client/js/gmaps.min.js"></script>
    <script src=" <?= $CONTENT_URL ?> /client/js/main.js"></script>
    <!-- Fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
        crossorigin="anonymous"></script>

</body>

</html>
<?php 
ob_end_flush();
?>