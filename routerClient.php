<?php
ob_start();
include("global.php");
include("controller/client/clientController.php");
$clientController = new clientValidation();
include "model/pdo.php";
$dp = new connect();
include "model/admin.php";
$dangnhap = new Admin();
include "model/caterogys.php";
$category = new category();
include "model/brands.php";
$brand = new brand();
include "model/products.php";
$product = new product();
include "model/users.php";
$user = new user();
include "model/banners.php";
$banner = new banner();
include "model/promotions.php";
$promotion = new promotion();
include "model/feedbacks.php";
$feedback = new feedback();
include "model/comments.php";
$comment = new comment();
include "model/bills.php";
$bill = new bill();


if (!isset($_SESSION['myCart'])) {
    $_SESSION['myCart'] = [];
}
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="uploads/images-logo/logo 50x (1).png">
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
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/client/css/linearicons.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/client/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/client/css/themify-icons.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/client/css/bootstrap.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/client/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/client/css/nice-select.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/client/css/nouislider.min.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/client/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/client/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/client/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/client/css/main.css">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php

    include("view/client/header.php");

    if (isset($_GET["act"])) {
        switch ($_GET['act']) {
            case 'login':
                if (isset($_POST['dangnhap'])) {
                    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
                    $dongy = $_POST['dongy'] ?? '';
                    $errors = $clientController->validation_dangnhap($username, $password, $dongy);

                    if ($errors == 1) {
                        $result = $user->checkUser($username, $password);
                        if ($result) {
                            $listUser = $user->userid_login($username, $password);
                            if ($listUser) {
                                extract($listUser);
                                $_SESSION['username'] = $username;
                                $_SESSION['userId'] = $userId;
                                header("Location: routerClient.php?act=home");
                            } else {
                                $Note['message'] = "Tài khoản của bạn hiện tại đã bị chặn bởi quản trị viên chặn!";
                            }

                        } else {
                            $Note['message'] = "Tài khoản chưa được đăng ký!";
                        }
                    }
                }
                include("view/client/login/index.php");
                break;

            case 'register':
                if (isset($_POST['dangki'])) {
                    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
                    $dongy = $_POST['dongy'] ?? '';
                    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
                    $errors = $clientController->validation_dangki($username, $password, $dongy, $email);
                    if ($errors == 1) {
                        if ($user->CheckName($username)) {
                            $Note['message'] = "Tên tài khoản đã được đăng kí!";
                        } else {
                            $result = $user->add_client($username, $password, $email, 1);
                            $listUser = $user->userid($username, $password, $email);
                            extract($listUser);
                            if ($result) {
                                $_SESSION['username'] = $username;
                                $_SESSION['userId'] = $userId;
                                header("Location: routerClient.php?act=home");
                            } else {
                                echo "Tb";
                            }
                        }
                    }
                }
                include("view/client/dangky/index.php");
                break;
            case 'dangxuat':
                unset($_SESSION['username']);
                unset($_SESSION['userId']);
                unset ($_SESSION['discount']) ;
                unset ($_SESSION['conditionDiscount']) ;
                unset ($_SESSION['promotionId']) ;
                unset($_SESSION['myCart']);
                header('Location: routerClient.php');
                exit;

            case 'sanpham':
                include("view/client/sanpham/index.php");
                break;
                case 'timkiemsanpham':
                    $timkiem = $_POST['search'];
                    include("view/client/timkiemsanpham/index.php");
                    break;

            case 'chitiet-sp':

                $productId = $_GET['productId'];
                $plusView = $product->update_view($productId);
                include("view/client/chitiet-sp/index.php");
                break;

            case 'home':
                include("view/client/home/index.php");
                break;

            case 'gopy':
                if (isset($_POST['gopy'])) {
                    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
                    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
                    $content = isset($_POST['content']) ? trim($_POST['content']) : '';
                    $errors = $clientController->validation_gopy($name, $email, $content);
                    if ($errors == 1) {
                        $result = $feedback->add($email, $name, 9, $content);
                        if ($result) {
                            $Note['message_gopy_true'] = "Gửi thành công.";
                        } else {
                            $Note['message_gopy_false'] = "Đã có lỗi xảy ra.";
                        }
                    }
                }
                include("view/client/goy/index.php");
                break;
            case 'quanly-tk':
                if (isset($_POST['gui'])) {
                    $image = trim($_FILES['image']['name']);
                    $imageOld = $_POST['imageOld'];
                    if (strlen($image) >= 4) {
                        $imageUpload = $user->upload();
                        $result = $user->update_image($_SESSION['userId'], $imageUpload);
                        if ($result) {
                            $Note['true'] = 'Thay đổi ảnh đại diện thành công.';
                        } else {
                            $Note['false'] = 'Thay đổi ảnh đại diện thất bại.';
                        }
                    } else {
                        $result = $user->update_image($_SESSION['userId'], $imageOld);
                        if ($result) {
                            $Note['true'] = 'Ảnh đại diện chưa có thay đổi mới.';
                        } else {
                            $Note['false'] = 'Đã có lỗi xảy ra.';
                        }
                    }
                }
                if (isset($_POST['luu'])) {
                    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                    $fullname = isset($_POST['fullname']) ? trim($_POST['fullname']) : '';
                    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
                    $address = isset($_POST['address']) ? trim($_POST['address']) : '';
                    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
                    if ($user->CheckName($username)) {
                        $Note['message_username'] = 'Đã có lỗi xảy ra có thể tên đăng nhập đã có từ trước!';
                    } else {
                        $result = $user->update_ql_tk($_SESSION['userId'], $username, $email, $fullname, $phone, $address);
                        if ($result) {
                            $Note['message'] = 'Cập nhật thành công thông tin!';
                        } else {
                            $Note['message'] = 'Đã có lỗi xảy ra!';
                        }
                    }

                }
                if (isset($_POST['thaydoimatkhau'])) {
                    $passwordOld = isset($_POST['passwordOld']) ? trim($_POST['passwordOld']) : '';
                    $passwordNew = isset($_POST['passwordNew']) ? trim($_POST['passwordNew']) : '';
                    if ($user->checkPassword($_SESSION['userId'], $passwordOld)) {
                        if (strlen($passwordNew) <= 6 || empty($passwordNew)) {
                            $Note['message_mk_new'] = 'Vui lòng không để tróng và mật khẩu mới phải từ 6 kí tự!';
                        } else {
                            $result = $user->update_ql_tk_password($_SESSION['userId'], $passwordNew);
                            $Note['message_mk_true'] = 'Cập nhật mật khẩu mới thành công!';
                        }
                    } else {
                        $Note['message_mk'] = 'Mật khẩu cũ không đúng!';
                    }
                }
                include("view/client/quanlytk/index.php");
                break;
            case 'gioithieu':
                include("view/client/gioithieu/index.php");
                break;

            case 'sanphamtheomuc':
                include("view/client/sanphamtheomuc/index.php");
                break;
            case 'chinhsach':
                include("view/client/chinhsach/index.php");
                break;
            case 'quenmatkhau':
                if (isset($_POST['quenmatkhau'])) {
                    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
                    $errors = $clientController->validation_quenmatkhau($username, $email);
                    if ($errors == 1) {
                        if ($user->checkUser_quenmatkhau($username, $email)) {
                            $True['message'] = 'Chúng tôi sẽ gửi mật khẩu mới qua email trên hệ thống!';
                            $matkhaumoi = substr(md5(rand(0, 99999999)), 0, 11);
                            $Qmk_checkid = $user->Checkuserid_quenmatkhau($username, $email);
                            $sql = "UPDATE users SET password = ? where email= ? AND userId =" . $Qmk_checkid;
                            $conn = $dp->pdo_get_connection();
                            $stmt = $conn->prepare($sql);
                            $stmt->execute([$matkhaumoi, $email]);
                            require "PHPMailer-master/src/PHPMailer.php";
                            require "PHPMailer-master/src/SMTP.php";
                            require 'PHPMailer-master/src/Exception.php';
                            $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
                            try {
                                $mail->SMTPDebug = 0; //0,1,2: chế độ debug
                                $mail->isSMTP();
                                $mail->CharSet = "utf-8";
                                $mail->Host = 'smtp.gmail.com'; //SMTP servers
                                $mail->SMTPAuth = true; // Enable authentication
                                $mail->Username = 'voduyphuong13@gmail.com'; // SMTP username
                                $mail->Password = 'dvggfcuwdrryrgao'; // SMTP password
                                $mail->SMTPSecure = 'ssl'; // encryption TLS/SSL 
                                $mail->Port = 465; // port to connect to                
                                $mail->setFrom('voduyphuong13@gmail.com', 'TULUNAPK SHOP');
                                $mail->addAddress($email, 'TênNgườiNhận');
                                $mail->isHTML(true); // Set email format to HTML
                                $mail->Subject = 'Tôi xin gửi mail này cho bạn về Mật Khẩu Mới';
                                $noidungthu = 'Mật khẩu hiện tại của tài khoản của bạn:' . '' . $matkhaumoi;
                                $mail->Body = $noidungthu;
                                $mail->smtpConnect(
                                    array(
                                        "ssl" => array(
                                            "verify_peer" => false,
                                            "verify_peer_name" => false,
                                            "allow_self_signed" => true
                                        )
                                    )
                                );
                                $mail->send();
                            } catch (Exception $e) {
                                $mail->ErrorInfo;
                            }
                        } else {
                            $Note['message'] = 'Tài khoản chưa được đăng kí!';
                        }
                    }
                }
                include("view/client/quenmatkhau/index.php");
                break;
            case 'binhluan':
                $productId = $_GET['productId'];
                if (isset($_POST['gui'])) {

                    $content = $_POST['content'];
                    $productId = $_POST['productId'];
                    $userId = $_POST['userId'];
                    $errors = $clientController->validation_binhluan($content);
                    if ($errors == 1) {
                        unset($_SESSION['meesageComment']);
                        $result = $comment->add_comment($content, $userId);
                        if ($result) {
                            $moreSuccess = $comment->getById_commentId_first();
                            extract($moreSuccess);
                            $moreDetailComment = $comment->add_comment_Detail_client($commentId, $productId);
                            if ($moreDetailComment) {
                                $_SESSION['meesageComment_Success'] = 'Thêm bình luận thành công';
                                header('Location: routerClient.php?act=chitiet-sp&productId=' . $productId);
                            }
                        }
                    } else {
                        $_SESSION['meesageComment'] = 'Bình luận chưa được thêm mới do không có nội dung hoặc nội dung quá nhắn!';
                        header('Location: routerClient.php?act=chitiet-sp&productId=' . $productId);
                    }
                }

                break;
            case 'giohang':
                if (isset($_POST['giohang'])) {
                    $productId = $_POST['productId'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $image = $_POST['image'];
                    if (isset($_POST['quantity']) && $_POST['quantity'] > 0) {
                        $quantity = $_POST['quantity'];
                    } else {
                        $quantity = 1;
                    }
                    $totalPrice = $price * $quantity;
                    $fg = 0;
                    $i = 0;
                    foreach ($_SESSION['myCart'] as $item) {
                        if ($item[0] == $productId) {
                            $quantityNew = $item[4] + $quantity;
                            $_SESSION['myCart'][$i][4] = $quantityNew;
                            $fg = 1;
                            break;
                        }
                        $i++;
                    }

                    if ($fg == 0) {
                        $productCart = [$productId, $name, $price, $image, $quantity, $totalPrice];
                        $_SESSION['myCart'][] = $productCart;
                    }
                    $_SESSION['promotionId'] = 2;

                    header("Location:routerClient.php?act=giohang");
                }
                if (isset($_POST['makhuyenmai'])) {

                    $makhuyenmai = $_POST['makhuyenmai'];
                    $xetMaKm = $promotion->CheckName($makhuyenmai);
                    if ($xetMaKm) {
                        extract($xetMaKm);
                        $layHang = $promotion->getBypromotionName($name);
                        extract($layHang);
                        $xetNgay = $promotion->getBypromotionToday($promotionId);
                        extract($xetNgay);
                        if ($starTime <= $Today && $Today <= $endTime) {
                            $_SESSION['promotionId'] = $promotionId;
                            $_SESSION['discount'] = $discount;
                            $_SESSION['conditionDiscount'] = $conditionDiscount;
                        } else {
                            $Note['makhuyenmai'] = 'Mã khuyến mãi đã quá hạn!';
                            $_SESSION['discount'] = 0;
                            $_SESSION['conditionDiscount'] = 0;
                            $_SESSION['promotionId'] = 2;

                        }

                    } else {
                        $Note['makhuyenmai'] = 'Không tìm thấy mã khuyến mãi!';
                        $_SESSION['discount'] = 0;
                        $_SESSION['conditionDiscount'] = 0;
                        $_SESSION['promotionId'] = 2;

                    }
                }


                include "view/client/giohang/index.php";
                break;
            case 'thanhtoan':
                if (isset($_POST['dathang'])) {
                    $fk_userId = $_POST['fk_userId'];
                    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
                    $address = isset($_POST['address']) ? trim($_POST['address']) : '';
                    $note = trim($_POST['note']);
                    $priceReduced = $_POST['priceReduced'];
                    $fk_promotionId = trim($_POST['fk_promotionId']);
                    $totalBill = $_POST['totalBill'];
                    $paymentType = $_POST['paymentType'];
                    $dongy = isset($_POST['dongy']) ? $_POST['dongy'] : '';
                    $errors = $clientController->validation_dathang($username, $address, $dongy, $phone);

                    if ($errors == 1) {
                        $result = $bill->add($username, $phone, $address, $priceReduced, $totalBill, $paymentType, $fk_userId, $fk_promotionId);
                        if ($result) {
                            if (isset($_SESSION['myCart']) && count($_SESSION['myCart']) > 0) {
                                foreach ($_SESSION['myCart'] as $item) {
                                    $billDetail = $bill->add_billDetail($result, $item[0], $item[4], $item[2], $note);
                                }
                                unset ($_SESSION['discount']) ;
                                unset ($_SESSION['conditionDiscount']) ;
                                unset ($_SESSION['promotionId']) ;
                                unset($_SESSION['myCart']);
                                header('Location: routerClient.php?act=lichsu');
                            }
                        } else {
                            echo "tb";
                        }
                    } 

                }
                include("view/client/thanhtoan/index.php");
                break;

            case 'dathang':

                include("view/client/thanhtoan/index.php");
                break;

                case 'lichsu':

                    include("view/client/lichsu/index.php");
                    break;

            case 'delCart':
                if (isset($_GET['cartId'])) {
                    array_splice($_SESSION['myCart'], $_GET['cartId'], 1);
                } else {
                    $_SESSION['myCart'] = [];
                }
                header("Location: routerClient.php?act=giohang");
                break;

            default:
                include("view/client/home/index.php");
                break;
        }
    } else {
        include "view/client/home/index.php";
    }



    include("view/client/footer.php");

    ?>



    <script src="<?= $CONTENT_URL ?>/client/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.<?= $CONTENT_URL ?>/client/js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="<?= $CONTENT_URL ?>/client/js/vendor/bootstrap.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/client/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/client/js/jquery.nice-select.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/client/js/jquery.sticky.js"></script>
    <script src="<?= $CONTENT_URL ?>/client/js/nouislider.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/client/js/countdown.js"></script>
    <script src="<?= $CONTENT_URL ?>/client/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/client/js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="<?= $CONTENT_URL ?>/client/js/gmaps.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/client/js/main.js"></script>
    <!-- Fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
        crossorigin="anonymous"></script>

</body>

</html>
<?php
ob_end_flush();
?>