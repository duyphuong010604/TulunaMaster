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
    <link rel="stylesheet" href="../../contents/client/css/linearicons.css">
    <link rel="stylesheet" href="../../contents/client/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../contents/client/css/themify-icons.css">
    <link rel="stylesheet" href="../../contents/client/css/bootstrap.css">
    <link rel="stylesheet" href="../../contents/client/css/owl.carousel.css">
    <link rel="stylesheet" href="../../contents/client/css/nice-select.css">
    <link rel="stylesheet" href="../../contents/client/css/nouislider.min.css">
    <link rel="stylesheet" href="../../contents/client/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="../../contents/client/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="../../contents/client/css/magnific-popup.css">
    <link rel="stylesheet" href="../../contents/client/css/main.css">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body></body>

<?php

include("./header.php");


if (isset($_GET["atc"])):
    switch ($_GET['atc']) {
        case 'login':
            include("login/index.php");
            break;

        case 'register':
            include("../../view/client/dangky/index.php");
            break;

        case 'sanpham':
            include("sanpham/index.php");
            break;

        case 'chitiet-sp':
            include("chitiet-sp/index.php");
            break;

        case 'home':
            include("home/index.php");
            break;

        case 'gopy':
            include("goy/index.php");
            break;
        case 'quanly-tk':
            include("quanlytk/index.php");
            break;
        case 'gioithieu':
            include("gioithieu/index.php");
            break;
        case 'chinhsach':
            include("chinhsach/index.php");
            break;
        case 'quenmatkhau':
            include("quenmatkhau/index.php");
            break;
        case 'giohang':
            include("giohang/index.php");
            break;
        case 'thanhtoan':
            include("thanhtoan/index.php");
            break;





        default:
            include("home/index.php");
            break;
    }

else:
    include("home/index.php");
endif;

include("./footer.php");

?>



<script src="../../contents/client/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.../../contents/client/js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
<script src="../../contents/client/js/vendor/bootstrap.min.js"></script>
<script src="../../contents/client/js/jquery.ajaxchimp.min.js"></script>
<script src="../../contents/client/js/jquery.nice-select.min.js"></script>
<script src="../../contents/client/js/jquery.sticky.js"></script>
<script src="../../contents/client/js/nouislider.min.js"></script>
<script src="../../contents/client/js/countdown.js"></script>
<script src="../../contents/client/js/jquery.magnific-popup.min.js"></script>
<script src="../../contents/client/js/owl.carousel.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="../../contents/client/js/gmaps.min.js"></script>
<script src="../../contents/client/js/main.js"></script>
<!-- Fontawesome -->
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
    integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
    crossorigin="anonymous"></script>

</body>

</html>