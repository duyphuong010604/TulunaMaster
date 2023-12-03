<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Thanh toán</h1>
                <nav class="d-flex align-items-center">
                    <a href="#">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Giỏ hàng <span class="lnr lnr-arrow-right"></span></a>
                    <a href="">Thanh toán</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
        <form class="row contact_form" action="<?= $ROOT_URL ?>/routerClient.php?act=thanhtoan" method="post"
            novalidate="novalidate">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <?php

                        if (isset($_SESSION['userId'])) {
                            $userListInfor = $user->getByuserId($_SESSION['userId']);
                            extract($userListInfor);
                        } else {
                            echo '';
                        }
                        ?>
                        <h3>Thông tin địa chỉ đặt hàng</h3>

                        <input type="hidden" name='fk_userId' value='<?= $_SESSION['userId'] ?>'>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="username" name="username"
                                value='<?= $username ?>' placeholder='Tên người nhận'>
                            <?php if (isset($errors['username']))
                                echo "<br><span class='text-star' style='color: red;'>" . $errors['username'] . "</span><br>"; ?>
                        </div>

                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="address" name="address" value='<?= $address ?>'
                                placeholder="Địa chỉ nhận hàng">
                            <?php if (isset($errors['address']))
                                echo "<br><span class='text-star' style='color: red;'>" . $errors['address'] . "</span><br>"; ?>

                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="phone" name="phone" value='<?= $phone ?>'
                                placeholder='Số điện thoại'>
                            <?php if (isset($errors['phone']))
                                echo "<br><span class='text-star' style='color: red;'>" . $errors['phone'] . "</span><br>"; ?>

                        </div>


                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <h3>Chi tiết đơn hàng</h3>
                            </div>
                            <textarea class="form-control" name="note" id="note" rows="1"
                                placeholder="Lời nhắn cho đơn hàng"></textarea>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">

                            <h2>Hóa đơn đặt hàng</h2>
                            <ul class="list">

                                <li><a href="#">Sản phẩm <span>Gía tiền</span></a></li>
                                <?php

                                $totalBill = 0;
                                $i = 0;

                                foreach ($_SESSION['myCart'] as $cart):
                                    $totalPrice = $cart[2] * $cart[4];
                                    $totalBill += $totalPrice;
                                    $tongtienthanhtoan = $totalBill - $_SESSION['discount'];
                                    ?>
                                    <li><a href="#">
                                            <?= $cart[1] ?> <span class="middle">x
                                                <?= $cart[4] ?>
                                            </span> <span class="last">
                                                <?= number_format($cart[2]) ?> VNĐ
                                            </span>
                                        </a></li>

                                    <? $i += 1;
                                endforeach; ?>
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Tổng tiền hàng <span>
                                            <?= number_format($totalBill) ?> VNĐ
                                        </span></a></li>
                                <li><a href="#">Mã khuyến mãi giảm <span>
                                
                                <?= $_SESSION['promotionId'] ?>
                                <?= $_SESSION['discount'] ?> VNĐ
                                            <input type="hidden" name='priceReduced'
                                                value='<?= $_SESSION['discount'] ?>'>
                                            <input type="hidden" name='fk_promotionId'
                                                value='<?= $_SESSION['promotionId'] ?>'>
                                        </span></a></li>
                                <li><a href="#">Tổng hóa đơn <span>
                                            <?= number_format($tongtienthanhtoan) ?> VNĐ
                                            <input type="hidden" name='totalBill' value='<?= $tongtienthanhtoan ?>'>
                                        </span></a></li>
                            </ul>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="paymentType" value=1 checked>
                                    <label for="f-option5">Thanh toán khi nhận hàng</label>
                                    <div class="check"></div>
                                </div>
                                <p>Vui lòng chọn</p>
                            </div>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" value=9 name="paymentType">
                                    <label for="f-option6">Chuyển khoản</label>
                                    <img src="img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                                <p>Thanh toán với phương thức chuyển khoản.</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="dongy">
                                <label for="f-option4">Đồng ý với tất cả mọi chính sách từ shop </label>
                                <a href="#">Chính sách đặt hàng*</a>
                                <?php if (isset($errors['dongy']))
                                    echo "<br><span class='text-star' style='color: red;'>" . $errors['dongy'] . "</span><br>"; ?>
                            </div>
                            <button class="btn primary-btn" name='dathang'>Đặt hàng</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</section>