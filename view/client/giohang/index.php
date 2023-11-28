<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <section class="banner-area organic-breadcrumb">
            <div class="container">
                <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                    <div class="col-first">
                        <h1>Giỏ hàng</h1>
                        <nav class="d-flex align-items-center">
                            <a href="">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                            <a href="">Giỏ hàng</a>
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
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="<?=$CONTENT_URL?>/client/img/cart.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Cửa hàng tối giản để sử dụng đa năng</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>360.000đ</h5>
                                    </td>
                                    <td>
                                        <div class="product_count">
                                            <input type="text" name="qty" id="sst" maxlength="12" value="1"
                                                title="Quantity:" class="input-text qty">
                                            <button
                                                onclick="var result = document.getElementById('sst'); var sst = result.value;"
                                                class="increase items-count" type="button"><i
                                                    class="lnr lnr-chevron-up"></i></button>
                                            <button
                                                onclick="var result = document.getElementById('sst'); var sst = result.value;"
                                                class="reduced items-count" type="button"><i
                                                    class="lnr lnr-chevron-down"></i></button>
                                        </div>
                                    </td>

                                    <td>
                                        <h5>720.000</h5>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start">
                                            <button type="button" class="btn btn-outline-danger">Xóa</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="img/cart.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Cửa hàng tối giản để sử dụng đa năng</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>$360.00</h5>
                                    </td>
                                    <td>
                                        <div class="product_count">
                                            <input type="text" name="qty" id="sst" maxlength="12" value="1"
                                                title="Quantity:" class="input-text qty">
                                            <button onclick="var result = document.getElementById('sst');"
                                                class="increase items-count" type="button"><i
                                                    class="lnr lnr-chevron-up"></i></button>
                                            <button onclick="var result = document.getElementById('sst');"
                                                class="reduced items-count" type="button"><i
                                                    class="lnr lnr-chevron-down"></i></button>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>$720.00</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="img/cart.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Cửa hàng tối giản để sử dụng đa năng</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>$360.00</h5>
                                    </td>
                                    <td>
                                        <div class="product_count">
                                            <input type="text" name="qty" id="sst" maxlength="12" value="1"
                                                title="Quantity:" class="input-text qty">
                                            <button onclick="var result = document.getElementById('sst');"
                                                class="increase items-count" type="button"><i
                                                    class="lnr lnr-chevron-up"></i></button>
                                            <button onclick="var result = document.getElementById('sst');"
                                                class="reduced items-count" type="button"><i
                                                    class="lnr lnr-chevron-down"></i></button>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>$720.00</h5>
                                    </td>
                                </tr>

                                <tr>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <h5>Tổng hóa đơn</h5>
                                    </td>
                                    <td>
                                        <h5>$2160.00</h5>
                                    </td>
                                </tr>
                                <tr class="shipping_area">
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <h5>Mã khuyến mãi</h5>
                                    </td>
                                    <td>
                                        <form action="">
                                            <input type="text" class="form-control"
                                                placeholder="Nhập mã khuyến mãi nếu có">
                                        </form>
                                    </td>

                                </tr>

                                <tr>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <h5>Thành tiền</h5>
                                    </td>
                                    <td>
                                        12000 VNĐ
                                    </td>

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
                                            <a class="gray_btn " href="./index.php?atc=sanpham">Tiếp tục mua sắm</a>
                                            <a class="primary-btn" href="./index.php?atc=thanhtoan">Thanh toán</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Cart Area =================-->
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>