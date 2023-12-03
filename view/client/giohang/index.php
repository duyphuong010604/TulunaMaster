<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Giỏ hàng</h1>
                <nav class="d-flex align-items-center">
                    <a href="#">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Giỏ hàng</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                            <th scope="col">Tùy chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // unset($_SESSION['myCart']);
                        $totalBill = 0;
                        $i = 0;
                        $tongtienthanhtoan = 0;
                        if(!isset($_SESSION['promotionId'])) : $_SESSION['promotionId'] =0; endif;
                        if(!isset($_SESSION['discount'])) : $_SESSION['discount'] =0; endif;
                        if(!isset($_SESSION['conditionDiscount'])) : $_SESSION['conditionDiscount'] = 0;endif;
                        foreach ($_SESSION['myCart'] as $cart) :
                            $totalPrice = $cart[2] * $cart[4];
                            $totalBill += $totalPrice;

                            $xoasp = '<a href="' . $ROOT_URL . '/routerClient.php?act=delCart&cartId=' . $i . '"><button type="button" class="btn btn-outline-danger" value="xoa">Xóa</button></a>';
                            if ($totalBill <= $_SESSION['conditionDiscount']) :
                                $Note['makhuyenmai'] = 'Tổng hóa đơn phải đủ điện kiện từ ' . number_format($_SESSION['conditionDiscount']) . ' VNĐ trở lên!';
                                $_SESSION['promotionId'] = 2;
                                $_SESSION['discount'] = 0;
                                $_SESSION['conditionDiscount'] = 0;
                            endif;
                        ?>
                            <tr>
                                <td>
                                    <?= (1 + $i) ?>
                                    <div class="media">
                                        <div class="d-flex">

                                            <img src="<?= $UPLOAD_IMG_URL ?>/products/<?= $cart[3] ?>" alt="" width='80px' height='80px'>
                                        </div>
                                        <div class="media-body">
                                            <p>
                                                <?= $cart[1] ?>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>
                                        <?= number_format($cart[2]) ?> VNĐ
                                    </h5>
                                </td>
                                <td>
                                    <h5>
                                        <?= $cart[4] ?>
                                    </h5>
                                </td>

                                <td>
                                    <h5>
                                        <?= number_format($totalPrice) ?> VNĐ
                                    </h5>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-start">
                                        <?= $xoasp ?>
                                    </div>
                                </td>
                            </tr>
                        <?php
                            $tongtienthanhtoan = $totalBill - $_SESSION['discount'];
                            $i += 1;
                        endforeach; ?>


                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Tổng hóa đơn</h5>
                            </td>
                            <td>
                                <h5>
                                    <?= number_format($totalBill) ?> VNĐ
                                </h5>
                            </td>
                        </tr>


                        <?php
                        if ($_SESSION['conditionDiscount'] != 0 && $_SESSION['discount'] != 0) :
                            if ($totalBill >= $_SESSION['conditionDiscount']) :
                        ?>

                                <tr>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <th>
                                        <h5>Giá giảm</h5>
                                    </th>
                                    <th>
                                        <?= number_format($_SESSION['discount']) ?> VNĐ
                                    </th>

                                </tr>

                        <? endif;

                        endif; ?>




                        <tr class="shipping_area">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Mã khuyến mãi</h5>
                            </td>
                            <td>
                                <form action="<?= $ROOT_URL ?>/routerClient.php?act=giohang" method="post">
                                    <input type="text" class="form-control" name='makhuyenmai' placeholder="Nhập mã khuyến mãi nếu có &amp; nhấn enter">
                                </form>
                                <?php if (isset($Note['makhuyenmai']))
                                    echo "<br><span class='text-star' style='color: red;'>" . $Note['makhuyenmai'] . "</span><br>"; ?>
                            </td>

                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <th>
                                <h5>Thành tiền</h5>
                            </th>
                            <th>
                                <?php if ($tongtienthanhtoan <= 0)
                                    $tongtienthanhtoan = 0; ?>
                                <?= number_format($tongtienthanhtoan) ?> VNĐ
                            </th>

                        </tr>

                        <tr class="out_button_area">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center ">
                                    <a class="gray_btn " href="<?= $ROOT_URL ?>/routerClient.php?act=sanpham">Tiếp
                                        tục mua sắm</a>
                                    <a class="primary-btn" href="<?= $ROOT_URL ?>/routerClient.php?act=<? if ($tongtienthanhtoan >= 1000) {
                                                                                                            echo "thanhtoan";
                                                                                                        } else {
                                                                                                            echo "giohang";
                                                                                                            $Note['tren1k'] = 'Tiền thanh toán phải từ 1000 VNĐ trở lên!';
                                                                                                        } ?>" <?php
                                                                                                                if (!isset($_SESSION['userId'])) {
                                                                                                                    echo 'data-toggle="modal" data-target="#loginModal"';
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>>Thanh toán</a>
                                    <?php if (isset($Note['tren1k']))
                                        echo "<br><span class='text-star ms-3' style='color: red;'>" .  $Note['tren1k'] . "</span><br>"; ?>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal login -->

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yêu cầu đăng nhập tài khoản</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 offset-3">
                            <a href="<?= $ROOT_URL ?>/routerClient.php?act=login" class='primary-btn text-center mx-auto'>
                                Đăng nhập tài khoản
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>