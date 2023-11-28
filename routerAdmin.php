<?php
ob_start();
include "global.php";
include "controller/admin/adminController.php";
$validation = new adminValidation();
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
?>
<!-- Controller chuyển trang được cung cấp layout từ view -->
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="<?= $CONTENT_URL ?>/admin/assets/" data-template="vertical-menu-template-free">

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
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/admin/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/admin/assets/vendor/css/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/admin/assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="<?= $CONTENT_URL ?>/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/admin/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?= $CONTENT_URL ?>/admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= $CONTENT_URL ?>/admin/assets/js/config.js"></script>
</head>

<body>

    <?php
    if (!isset($_SESSION['admin'])) {
        $_GET['act'] = "";
    }
    ?>
    <?php

    if (isset($_GET['act']) && $_GET['act']) {
        include "view/admin/header.php";
        switch ($_GET['act']) {
            case 'home':
                include "view/admin/home/index.php";
                break;
            case 'taikhoan_kh_ds':
                include "view/admin/taikhoan_kh_ds/index.php";
                break;
            case 'taikhoan_kh_chitiet':
                include "view/admin/taikhoan_kh_chitiet/index.php";
                break;
            case 'taikhoan_kh_xoa':
                $userId = $_GET['userId'];
                $result = $user->delete($userId);
                if ($result) {
                    header("Location: $ROOT_URL/routerAdmin.php?act=taikhoan_kh_ds");
                } else {
                    //404
                }
                break;
            case 'taikhoan_kh_sua':
                if (isset($_POST['luu'])) {
                    $userId = $_POST['userId'];
                    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
                    $fullname = isset($_POST['fullname']) ? trim($_POST['fullname']) : '';
                    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
                    $address = isset($_POST['address']) ? trim($_POST['address']) : '';
                    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
                    $status = isset($_POST['status']) ? trim($_POST['status']) : '';
                    $image = trim($_FILES['image']['name']);
                    $image1 = trim($_FILES['image']['tmp_name']);
                    $imageOld = $_POST['imageOld'];

                    if (strlen($image) >= 4) {
                        $imageUpload = $user->upload();

                        $result = $user->update($userId, $username, $password, $email, $fullname, $imageUpload, $phone, $status, $address);
                        if ($result) {

                            header("Location: $ROOT_URL/routerAdmin.php?act=taikhoan_kh_ds");
                        } else {

                            $Note['message'] = 'Đã có lỗi xảy ra!';
                        }
                    } else {
                        $result = $user->update($userId, $username, $password, $email, $fullname, $imageOld, $phone, $status, $address);
                        if ($result) {
                            $errors['image'] = "Không cập nhật ảnh mới!";
                        } else {
                            $Note['message'] = 'Đã có lỗi xảy ra!';
                        }
                    }
                }
                include "view/admin/taikhoan_kh_sua/index.php";
                break;
            case 'taikhoan_kh_them':
                if (isset($_POST['them'])) {
                    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
                    $fullname = isset($_POST['fullname']) ? trim($_POST['fullname']) : '';
                    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
                    $address = isset($_POST['address']) ? trim($_POST['address']) : '';
                    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
                    $status = isset($_POST['status']) ? trim($_POST['status']) : '';

                    $errors = $validation->validation_taikhoan_kh($username, $password, $fullname, $address, $email, $phone, $status);
                    if ($errors === 1) {
                        if ($errors === 1) {
                            if ($user->CheckName($username)) {
                                $Note['message'] = 'Đã có lỗi xảy ra có thể tên đăng nhập đã có từ trước!';
                            } else {
                                $imageUpload = $user->upload();
                                $result = $user->add($username, $password, $email, $fullname, $imageUpload, $phone, $status, $address);
                                if ($result) {
                                    header("Location: $ROOT_URL/routerAdmin.php?act=taikhoan_kh_ds");
                                } else {
                                    $Note['message'] = 'Đã có lỗi xảy ra!';
                                }
                            }
                        }
                    }
                }
                include "view/admin/taikhoan_kh_them/index.php";
                break;

            case 'brand_ds':
                include "view/admin/brand_ds/index.php";
                break;
            case 'brand_them':
                if (isset($_POST['them'])) {
                    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
                    $status = isset($_POST['status']) ? trim($_POST['status']) : '';
                    $origin = isset($_POST['origin']) ? trim($_POST['origin']) : '';
                    $errors = $validation->validation_brands($name, $status, $origin);
                    if ($errors === 1) {
                        if ($brand->CheckName($name)) {
                            $Note['message'] = 'Đã có lỗi xảy ra có thể tên loại sản phẩm đã có từ trước!';
                        } else {
                            $imageUpload = $brand->upload();

                            $result = $brand->add($name, $status, $imageUpload, $origin);
                            if ($result) {
                                header("Location: $ROOT_URL/routerAdmin.php?act=brand_ds");
                            } else {
                                $Note['message'] = 'Đã có lỗi xảy ra có thể tên loại sản phẩm đã có từ trước';
                            }
                        }
                    }
                }
                include "view/admin/brand_them/index.php";
                break;
            case 'brand_chitiet':

                include "view/admin/brand_chitiet/index.php";
                break;
            case 'brand_xoa':

                $brandId = $_GET['brandId'];
                $result = $brand->delete($brandId);
                if ($result) {
                    header("Location: $ROOT_URL/routerAdmin.php?act=brand_ds");
                } else {
                    //404
                }

                break;
            case 'brand_sua':
                if (isset($_POST['luu'])) {
                    $brandId = $_POST['brandId'];
                    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
                    $status = isset($_POST['status']) ? trim($_POST['status']) : '';
                    $origin = isset($_POST['origin']) ? trim($_POST['origin']) : '';
                    $image = trim($_FILES['image']['name']);
                    $image1 = trim($_FILES['image']['tmp_name']);
                    $imageOld = $_POST['imageOld'];

                    if (strlen($image) >= 4) {
                        $imageUpload = $brand->upload();
                        $result = $brand->update($brandId, $name, $status, $imageUpload, $origin);
                        if ($result) {
                            header("Location: $ROOT_URL/routerAdmin.php?act=brand_ds");
                        } else {
                            $Note['message'] = 'Đã có lỗi xảy ra!';
                        }
                    } else {
                        $result = $brand->update($brandId, $name, $status, $imageOld, $origin);
                        if ($result) {
                            $errors['image'] = "Không cập nhật ảnh mới cho Logo thương hiệu!";
                        } else {
                            $Note['message'] = 'Đã có lỗi xảy ra!';
                        }
                    }
                }
                include "view/admin/brand_sua/index.php";
                break;

            case 'loaisanpham_ds':
                include "view/admin/loaisanpham_ds/index.php";
                break;
            case 'loaisanpham_them':
                if (isset($_POST['them'])) {
                    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
                    $status = isset($_POST['status']) ? trim($_POST['status']) : '';
                    $image = $_FILES['image']['name'];
                    $image1 = $_FILES['image']['tmp_name'];
                    $errors = $validation->validation_towElement($name, $status);

                    if ($errors === 1) {
                        if ($category->CheckName($name)) {
                            $Note['message'] = 'Đã có lỗi xảy ra có thể tên loại sản phẩm đã có từ trước!';
                        } else {
                            $imageUpload = $category->upload();
                            $result = $category->add($name, $status, $imageUpload);
                            if ($result) {
                                header("Location: $ROOT_URL/routerAdmin.php?act=loaisanpham_ds");
                            } else {
                                $Note['message'] = 'Đã có lỗi xảy!';
                            }
                        }
                    }
                }
                include "view/admin/loaisanpham_them/index.php";
                break;
            case 'loaisanpham_chitiet':
                include "view/admin/loaisanpham_chitiet/index.php";
                break;
            case 'loaisanpham_sua':
                if (isset($_POST['luu'])) {
                    $categoryId = $_POST['categoryId'];
                    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
                    $status = isset($_POST['status']) ? trim($_POST['status']) : '';
                    $image = trim($_FILES['image']['name']);
                    $image1 = trim($_FILES['image']['tmp_name']);
                    $imageOld = $_POST['imageOld'];

                    if (strlen($image) >= 4) {
                        $imageUpload = $category->upload();
                        $result = $category->update($categoryId, $name, $status, $imageUpload);
                        if ($result) {
                            header("Location: $ROOT_URL/routerAdmin.php?act=loaisanpham_ds");
                        } else {
                            $Note['message'] = 'Đã có lỗi xảy ra!';
                        }
                    } else {
                        $result = $category->update($categoryId, $name, $status, $imageOld);
                        if ($result) {
                            header("Location: $ROOT_URL/routerAdmin.php?act=loaisanpham_ds");
                            $errors['image'] = "Không cập nhật ảnh mới cho loại sản phẩm";
                        } else {
                            $Note['message'] = 'Đã có lỗi xảy ra!';
                        }
                    }
                }
                include "view/admin/loaisanpham_sua/index.php";
                break;
            case 'loaisanpham_xoa':
                if (isset($_POST['xoa'])) {
                    $categoryId = $_GET['categoryId'];
                    $result = $category->delete($categoryId);
                    if ($result) {
                        header("Location: $ROOT_URL/routerAdmin.php?act=loaisanpham_ds");
                    } else {
                        //404
                    }
                }
                break;
            case 'sanpham_ds':
                include "view/admin/sanpham_ds/index.php";
                break;
            case 'sanpham_chitiet':
                include "view/admin/sanpham_chitiet/index.php";
                break;
            case 'sanpham_sua':
                if (isset($_POST['luu'])) {
                    $productId = $_POST['productId'];
                    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
                    $category = isset($_POST['category']) ? trim($_POST['category']) : '';
                    $price = isset($_POST['price']) ? trim($_POST['price']) : '';
                    $size = isset($_POST['size']) ? trim($_POST['size']) : '';
                    $description = isset($_POST['description']) ? trim($_POST['description']) : "";
                    $dateUpdate = isset($_POST['dateUpdate']) ? trim($_POST['dateUpdate']) : '';
                    $status = isset($_POST['status']) ? trim($_POST['status']) : '';
                    $view = $_POST['view'];
                    $fk_categoryId = $_POST['fk_categoryId'];
                    $fk_brandId = $_POST['fk_brandId'];
                    $image = trim($_FILES['image']['name']);
                    $image1 = trim($_FILES['image']['tmp_name']);
                    $imageOld = $_POST['imageOld'];

                    if (strlen($image) >= 4) {
                        $imageUpload = $product->upload();
                        $result = $product->update($productId, $name, $imageUpload, $view, $price, $status, $fk_categoryId, $fk_brandId, $size, $description);
                        if ($result) {
                            header("Location: $ROOT_URL/routerAdmin.php?act=sanpham_ds");
                        } else {
                            $Note['message'] = 'Đã có lỗi xảy ra!';
                        }
                    } else {
                        $result = $product->update($productId, $name, $imageOld, $view, $price, $status, $fk_categoryId, $fk_brandId, $size, $description);
                        if ($result) {
                            header("Location: $ROOT_URL/routerAdmin.php?act=sanpham_ds");
                            $errors['image'] = "Không cập nhật ảnh mới cho sản phẩm";
                        } else {
                            $Note['message'] = 'Đã có lỗi xảy ra!';
                        }
                    }
                }
                include "view/admin/sanpham_sua/index.php";
                break;
            case 'sanpham_xoa':
                if (isset($_POST['xoa'])) {
                    $productId = $_GET['productId'];
                    $result = $product->delete($productId);
                    if ($result) {
                        header("Location: $ROOT_URL/routerAdmin.php?act=sanpham_ds");
                    } else {
                        echo "loi";
                    }
                }
                break;
            case 'sanpham_them':
                if (isset($_POST['them'])) {
                    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
                    $category = isset($_POST['category']) ? trim($_POST['category']) : '';
                    $price = isset($_POST['price']) ? trim($_POST['price']) : '';
                    $size = isset($_POST['size']) ? trim($_POST['size']) : '';
                    $description = isset($_POST['description']) ? trim($_POST['description']) : "";
                    $dateUpdate = isset($_POST['dateUpdate']) ? trim($_POST['dateUpdate']) : '';
                    $status = isset($_POST['status']) ? trim($_POST['status']) : '';
                    $fk_categoryId = isset($_POST['fk_categoryId']) ? trim($_POST['fk_categoryId']) : "";
                    $fk_brandId = isset($_POST['fk_brandId']) ? trim($_POST['fk_brandId']) : "";
                    $view = 1;
                    $errors = $validation->validation_product(
                        $name,
                        $price,
                        $size,
                        $description,
                        $dateUpdate,
                        $status,
                        $fk_categoryId,
                        $fk_brandId
                    );

                    if ($errors === 1) {
                        if ($product->CheckName($name)) {
                            $Note['message'] = 'Đã có lỗi xảy ra có thể tên loại sản phẩm đã có từ trước!';
                        } else {
                            $imageUpload = $product->upload();
                            $result = $product->add($name, $imageUpload, $view, $price, $status, $fk_categoryId, $fk_brandId, $size, $description, $dateUpdate);
                            if ($result) {
                                header("Location: $ROOT_URL/routerAdmin.php?act=sanpham_ds");
                            } else {
                                $Note['message'] = 'Đã có lỗi xảy ra!';
                            }
                        }
                    }
                }

                include "view/admin/sanpham_them/index.php";
                break;
            case 'binhluan_ds':
                include "view/admin/binhluan_ds/index.php";
                break;
            case 'hoadon_ds':
                include "view/admin/hoadon_ds/index.php";
                break;
            case 'banner_ds':
                include "view/admin/banner_ds/index.php";
                break;
            case 'banner_chitiet':
                include "view/admin/banner_chitiet/index.php";
                break;
            case 'banner_sua':
                if (isset($_POST['luu'])) {
                    $bannerId = $_POST['bannerId'];
                    $title = isset($_POST['title']) ? trim($_POST['title']) : "";
                    $content = isset($_POST['content']) ? trim($_POST['content']) : "";
                    $status = isset($_POST['status']) ? trim($_POST['status']) : '';
                    $errors = $validation->validation_banner($title, $status, $content);
                    $image = trim($_FILES['image']['name']);
                    $image1 = trim($_FILES['image']['tmp_name']);
                    $imageOld = $_POST['imageOld'];

                    if (strlen($image) >= 4) {
                        $imageUpload = $banner->upload();
                        $result = $banner->update($bannerId, $title, $status, $imageUpload, $content);
                        if ($result) {
                            header("Location: $ROOT_URL/routerAdmin.php?act=banner_ds");
                        } else {
                            $Note['message'] = 'Đã có lỗi xảy ra!';
                        }
                    } else {
                        $result = $banner->update($bannerId, $title, $status, $imageOld, $content);
                        if ($result) {
                            header("Location: $ROOT_URL/routerAdmin.php?act=banner_ds");
                            $errors['image'] = "Không cập nhật ảnh mới cho sản phẩm";
                        } else {
                            $Note['message'] = 'Đã có lỗi xảy ra!';
                        }
                    }
                }


                include "view/admin/banner_sua/index.php";
                break;
            case 'banner_xoa':
                if (isset($_POST['xoa'])) {
                    $bannerId = $_GET['bannerId'];
                    $result = $banner->delete($bannerId);
                    if ($result) {
                        header("Location: $ROOT_URL/routerAdmin.php?act=banner_ds");
                    } else {
                        echo "loi";
                    }
                }
                break;
            case 'banner_them':
                if (isset($_POST['them'])) {
                    $title = isset($_POST['title']) ? trim($_POST['title']) : "";
                    $content = isset($_POST['content']) ? trim($_POST['content']) : "";
                    $status = isset($_POST['status']) ? trim($_POST['status']) : '';
                    $errors = $validation->validation_banner($title, $status, $content);
                    if ($errors === 1) {
                        $imageUpload = $banner->upload();
                        $result = $banner->add($title, $status, $imageUpload, $content);
                        if ($result) {
                            header("Location: $ROOT_URL/routerAdmin.php?act=banner_ds");
                        } else {
                            $Note['message'] = 'Đã có lỗi xảy ra!';
                        }
                    }
                }
                include "view/admin/banner_them/index.php";
                break;
            case 'khuyenmai_ds':
                include "view/admin/khuyenmai_ds/index.php";
                break;
            case 'khuyenmai_chitiet':
                include "view/admin/khuyenmai_chitiet/index.php";
                break;
            case 'khuyenmai_sua':
                if (isset($_POST['luu'])) {
                    $promotionId = $_POST['promotionId'];
                    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
                    $discount = isset($_POST['discount']) ? trim($_POST['discount']) : "";
                    $conditionDiscount = isset($_POST['conditionDiscount']) ? trim($_POST['conditionDiscount']) : "";
                    $promotionType = isset($_POST['promotionType']) ? trim($_POST['promotionType']) : "";
                    $starTime = isset($_POST['starTime']) ? trim($_POST['starTime']) : "";
                    $endTime = isset($_POST['endTime']) ? trim($_POST['endTime']) : "";
                    $status = isset($_POST['status']) ? trim($_POST['status']) : "";
                    
                    $result = $promotion->update($promotionId,$name, $discount, $conditionDiscount, $starTime, $endTime, $promotionType, $status);
                    if ($result) {
                        header("Location: $ROOT_URL/routerAdmin.php?act=khuyenmai_ds");
                    } else {
                        $Note['message'] = 'Đã có lỗi xảy ra!';
                    }

                }

                include "view/admin/khuyenmai_sua/index.php";
                break;
            case 'khuyenmai_xoa':
                if (isset($_POST['xoa'])) {
                    $promotionId = $_GET['promotionId'];
                    $result = $promotion->delete($promotionId);
                    if ($result) {
                        header("Location: $ROOT_URL/routerAdmin.php?act=khuyenmai_ds");
                    } else {
                        echo "loi";
                    }
                }
                break;
            case 'khuyenmai_them':
                if (isset($_POST['them'])) {
                    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
                    $discount = isset($_POST['discount']) ? trim($_POST['discount']) : "";
                    $conditionDiscount = isset($_POST['conditionDiscount']) ? trim($_POST['conditionDiscount']) : "";
                    $promotionType = isset($_POST['promotionType']) ? trim($_POST['promotionType']) : "";
                    $starTime = isset($_POST['starTime']) ? trim($_POST['starTime']) : "";
                    $endTime = isset($_POST['endTime']) ? trim($_POST['endTime']) : "";
                    $status = isset($_POST['status']) ? trim($_POST['status']) : "";
                    $errors = $validation->validation_maKhuyenMai($name, $discount, $conditionDiscount, $promotionType, $starTime, $endTime, $status);
                    if ($errors === 1) {
                        if ($promotion->CheckName($name)) {
                            $Note['message'] = 'Đã có lỗi xảy ra có thể tên khuyến mãi đã có từ trước!';
                        } else {
                            $result = $promotion->add($name, $discount, $conditionDiscount, $starTime, $endTime, $promotionType, $status);
                            if ($result) {
                                header("Location: $ROOT_URL/routerAdmin.php?act=khuyenmai_ds");
                            } else {
                                $Note['message'] = 'Đã có lỗi xảy ra!';
                            }
                        }

                    }
                }
                include "view/admin/khuyenmai_them/index.php";
                break;
            case 'thongke':
                include "view/admin/thongke/index.php";
                break;
            case 'gopy':
                if(isset($_POST['luu'])){
                   $feedbackId = $_POST['feedbackId'];
                   $status = $_POST['status'];
                   $result = $feedback->update($feedbackId, $status);
                   if($result){
                    $Note['true'] = 'Đã thay đổi trạng thái!';
                   }else{
                    $Note['false'] = 'Thay đổi trạng thái không thành công!';
                   }
                }
                include "view/admin/gopy/index.php";
                break;
            case 'thongbao':
                include "view/admin/thongbao/index.php";
                break;
            case 'quanlytaikhoan':
                include "view/admin/quanly-taikhoan/index.php";
                break;

            case 'dangxuat':
                unset($_SESSION['admin']);
                header('Location: routerAdmin.php');
                exit;
            default:
                include "view/admin/home/index.php";
                break;
        }
        include "view/admin/footer.php";
    } else {

        if (!isset($_GET['pg'])) {
            $_GET['pg'] = "dangnhap";
        }

        if (isset($_GET['pg']) && $_GET['pg']) {
            switch ($_GET['pg']) {
                case 'dangnhap':
                    if (isset($_POST['dangnhap'])) {
                        $username = isset($_POST['username']) ? trim($_POST['username']) : "";
                        $password = isset($_POST['password']) ? trim($_POST['password']) : "";
                        $dongy = isset($_POST['dongy']) ? $_POST['dongy'] : '';
                        $errors = $validation->validation_dangnhap($username, $password, $dongy);
                        if ($errors === 1) {
                            if ($dangnhap->checkUser($username, $password)) {
                                $result = $dangnhap->userid($username, $password);
                                $_SESSION['admin'] = $username;
                                header('Location: routerAdmin.php?act=home');
                            } else {
                                $Note['message'] = 'Không tìm thấy tài khoản trong hệ thống!';
                            }
                        }
                    }
                    if (isset($_POST['quenmatkhau'])) {
                        header("Location: $ROOT_URL/routerAdmin.php?pg=quenmatkhau");
                    }

                    include "view/admin/login/index.php";
                    break;
                case 'quenmatkhau':
                    if (isset($_POST['xacnhan'])) {
                        $username = isset($_POST['username']) ? trim($_POST['username']) : "";
                        $email = isset($_POST['email']) ? trim($_POST['email']) : "";
                        $errors = $validation->validation_quenmatkhau($username, $email);
                        if ($errors === 1) {
                            $result = $dangnhap->checkEmail_User($username, $email);
                            if ($result) {
                                $True['message'] = 'Chúng tôi sẽ gửi mật khẩu mới qua email trên hệ thống!';
                                $matkhaumoi = substr(md5(rand(0, 99999999)), 0, 11);
                                $Qmk_checkid = $dangnhap->Checkuserid($username, $email);
                                $sql = "UPDATE admin SET password = ? where email= ? AND adminId =" . $Qmk_checkid;
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
                                $Note['message'] = 'Không tìm thấy tài khoản trong hệ thống!';
                            }
                        }
                    }
                    include "view/admin/quenmatkhau/index.php";
                    break;
            }
        }
    }

    ?>






    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= $CONTENT_URL ?>/admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= $CONTENT_URL ?>/admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= $CONTENT_URL ?>/admin/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= $CONTENT_URL ?>/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= $CONTENT_URL ?>/admin/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= $CONTENT_URL ?>/admin/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?= $CONTENT_URL ?>/admin/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= $CONTENT_URL ?>/admin/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
<?php ob_end_flush(); ?>