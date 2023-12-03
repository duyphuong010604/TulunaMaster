<!-- start banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class="active-banner-slider owl-carousel">
                    <!-- single-slide -->
                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1>Nike New <br>Bộ sưu tập mới!</h1>
                                <p>Dòng sản phẩm mới nhất đến từ nhà Nike cho các Baller. Kênh phân phối độc
                                    quyền các mẫu giày bóng rổ Nike tại Việt Nam.</p>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-btn" href="<?= $ROOT_URL ?>/routerClient.php?act=sanpham"><span
                                            class="fa-solid fa-arrow-right"></span></a>
                                    <span class="add-text text-uppercase">Đến với trang sản phẩm ngay</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="<?= $CONTENT_URL ?>/client/img/banner/banner-img.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <!-- single-slide -->
                    <?php
                    $bannerList = $banner->get_list_client();
                    foreach ($bannerList as $bannerRow):
                        extract($bannerRow);
                        ?>
                        <div class="row single-slide">
                            <div class="col-lg-5">
                                <div class="banner-content">
                                    <h1>
                                        <?= $title ?> <br>Qúa Hot
                                    </h1>
                                    <p>
                                        <?= $content ?>
                                    </p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href="<?= $ROOT_URL ?>/routerClient.php?act=sanpham"><span
                                                class="fa-solid fa-arrow-right"></span></a>
                                        <span class="add-text text-uppercase">Đến với trang sản phẩm ngay</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="banner-img">
                                    <img class="img-fluid" src="<?= $UPLOAD_IMG_URL ?>/banners/<?= $image ?>" alt="">
                                </div>
                            </div>
                        </div>
                    <? endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- start features Area -->
<section class="features-area section_gap">
    <div class="container">
        <div class="row features-inner">
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="<?= $CONTENT_URL ?>/client/img/features/f-icon1.png" alt="">
                    </div>
                    <h6>Giao hàng miễn phí</h6>
                    <p>Vận chuyển miễn phí cho mọi đơn hàng.</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="<?= $CONTENT_URL ?>/client/img/features/f-icon2.png" alt="">
                    </div>
                    <h6>Chính sách hoàn trả</h6>
                    <p>Được áp dụng đúng với chính sách đã giao với tất cả mọi đơn hàng</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="<?= $CONTENT_URL ?>/client/img/features/f-icon3.png" alt="">
                    </div>
                    <h6>24/7 Hỗ trợ</h6>
                    <p>Hộ trợ khách hàng một cách tối đa</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="<?= $CONTENT_URL ?>/client/img/features/f-icon4.png" alt="">
                    </div>
                    <h6>Thanh toán đa dạng</h6>
                    <p>Thanh toán đa dạng và dễ dàng </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end features Area -->
<!-- Hiển thị mục sản phẩm -->
<!-- Start category Area -->
<section class="category-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="<?= $CONTENT_URL ?>/client/img/category/c1.jpg" alt="">
                            <a href="<?= $CONTENT_URL ?>/client/img/category/c1.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Giày cho thể thao</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="<?= $CONTENT_URL ?>/client/img/category/c2.jpg" alt="">
                            <a href="<?= $CONTENT_URL ?>/client/img/category/c2.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Giày cho thể thao</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="<?= $CONTENT_URL ?>/client/img/category/c3.jpg" alt="">
                            <a href="<?= $CONTENT_URL ?>/client/img/category/c3.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Giày cho thể thao</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="<?= $CONTENT_URL ?>/client/img/category/c4.jpg" alt="">
                            <a href="<?= $CONTENT_URL ?>/client/img/category/c4.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Giày cho thể thao</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-deal">
                    <div class="overlay"></div>
                    <img class="img-fluid w-100" src="<?= $CONTENT_URL ?>/client/img/category/c5.jpg" alt="">
                    <a href="<?= $CONTENT_URL ?>/client/img/category/c5.jpg" class="img-pop-up" target="_blank">
                        <div class="deal-details">
                            <h6 class="deal-title">Nhiều khuyến mãi hấp dẫn.</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End category Area -->
<!-- Hiển thị sản phẩm theo danh mục -->
<!-- start product Area -->
<section class="owl-carousel active-product-area section_gap">
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Tất cả các sản phẩm</h1>
                        <p>Toàn bộ sản phẩm đều đảm bảo hàng chính hảng.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Nơi hiển thị sản phẩm theo danh mục -->
                <!-- single product -->
                <?php
                $productList = $product->get_list_client_home();
                foreach ($productList as $productRow):
                    extract($productRow);
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="<?= $UPLOAD_IMG_URL ?>/products/<?= $image ?>" alt="">
                            <div class="product-details">
                                <h6>
                                    <?= $name ?>
                                </h6>
                                <div class="price">
                                    <h6>
                                        <?= number_format($price) ?> VNĐ
                                    </h6>

                                </div>
                                <div class="prd-bottom">

                                    <a href="" class="social-info">
                                        <span class="ti-bag"></span>
                                        <form action="<?= $ROOT_URL?>/routerClient.php?act=giohang" method='post'>
                                            <input type="hidden" name='productId' value='<?=$productId?>'>
                                            <input type="hidden" name='name' value='<?=$name?>'>
                                            <input type="hidden" name='price' value='<?=$price?>'>
                                            <input type="hidden" name='image' value='<?=$image?>'>
                                            <button type="submit" class="btn hover-text btn-warning" name='giohang'>+Giỏ hàng</button>
                                        </form>      
                                    </a>
                                    
                                    <a href="<?= $ROOT_URL ?>/routerClient.php?act=chitiet-sp&productId=<?=$productId?>" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">Xem chi tiết</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Các sản phẩm được quan tâm nhiều nhất</h1>
                        <p>Toàn bộ sản phẩm đều đảm bảo hàng chính hảng.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Nơi hiển thị sản phẩm theo danh mục -->
                <!-- single product -->
                <?php
                $productListView = $product->get_list_topView();
                foreach ($productListView as $productRow):
                    extract($productRow);
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="<?= $UPLOAD_IMG_URL ?>/products/<?= $image ?>" alt="">
                            <div class="product-details">
                                <h6>
                                    <?= $name ?>
                                </h6>
                                <div class="price">
                                    <h6>
                                        <?= number_format($price) ?> VNĐ
                                    </h6>

                                </div>
                                <div class="prd-bottom">

                                    <a href="" class="social-info">
                                        <span class="ti-bag"></span>
                                        <form action="<?= $ROOT_URL?>/routerClient.php?act=giohang" method='post'>
                                            <input type="hidden" name='productId' value='<?=$productId?>'>
                                            <input type="hidden" name='name' value='<?=$name?>'>
                                            <input type="hidden" name='price' value='<?=$price?>'>
                                            <input type="hidden" name='image' value='<?=$image?>'>
                                            <button type="submit" class="btn hover-text btn-warning" name='giohang'>+Giỏ hàng</button>
                                        </form>      
                                    </a>
                                    
                                    <a href="<?= $ROOT_URL ?>/routerClient.php?act=chitiet-sp&productId=<?=$productId?>" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">Xem chi tiết</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- end product Area -->

<!-- Start exclusive deal Area -->
<section class="exclusive-deal-area">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 no-padding exclusive-left">
                <div class="row clock_sec clockdiv" id="clockdiv">
                    <div class="col-lg-12">
                        <h1>Khuyến mãi Hot cho khách hàng</h1>
                        <p>Các mã khuyến mãi đang chờ đợi khách hàng.</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="row text-white">
                            <div class="col-lg-4">
                                <h4 class='text-white'>Mã khuyến mãi</h4>
                            </div>
                            <div class="col-lg-4">
                                <h4 class='text-white'>Ngày bất đầu</h4>
                            </div>
                            <div class="col-lg-4">
                                <h4 class='text-white'>Ngày kết thúc</h4>
                            </div>
                            <?php
                            $promotionList = $promotion->get_list_client();
                            foreach ($promotionList as $promotionRow):
                                extract($promotionRow);
                                ?>
                                <div class="col-lg-4">
                                    <h4 class='text-white'>
                                        <?= $name ?>
                                    </h4>
                                </div>
                                <div class="col-lg-4">
                                    <h4 class='text-white'>
                                        <?= $starTime ?>
                                    </h4>
                                </div>
                                <div class="col-lg-4">
                                    <h4 class='text-white'>
                                        <?= $endTime ?>
                                    </h4>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- <div class="row clock-wrap">
                            <div class="col clockinner1 clockinner">
                                <h1 class="days">150</h1>
                                <span class="smalltext">Days</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="hours">23</h1>
                                <span class="smalltext">Hours</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="minutes">47</h1>
                                <span class="smalltext">Mins</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="seconds">59</h1>
                                <span class="smalltext">Secs</span>
                            </div>
                        </div> -->

                    </div>
                </div>
                <a href="<?= $ROOT_URL ?>/routerClient.php?act=sanpham" class="primary-btn">Mua hàng ngay</a>
            </div>
            <div class="col-lg-6 no-padding exclusive-right">
                <div class="active-exclusive-product-slider">
                    <!-- single exclusive carousel -->
                    <?php
                    $productList = $product->get_list_client();
                    foreach ($productList as $productRow):
                        extract($productRow);
                        ?>
                        <div class="single-exclusive-slider">
                            <img class="img-fluid" src="<?= $UPLOAD_IMG_URL ?>/products/<?= $image ?>" alt="">
                            <div class="product-details">
                                <div class="price">
                                    <h6><?=number_format($price)?> VNĐ</h6>
                                    
                                </div>
                                <h4><?=$name?></h4>
                                <div class="add-bag d-flex align-items-center justify-content-center">
                                    
                                    <form action="<?= $ROOT_URL?>/routerClient.php?act=giohang" method='post'>
                                            <input type="hidden" name='productId' value='<?=$productId?>'>
                                            <input type="hidden" name='name' value='<?=$name?>'>
                                            <input type="hidden" name='price' value='<?=$price?>'>
                                            <input type="hidden" name='image' value='<?=$image?>'>
                                            <button type="submit" class="btn hover-text btn-warning" name='giohang'>Mua ngay</button>
                                        </form>      
                                </div>
                            </div>
                        </div>
                    <? endforeach; ?>
                    <!-- single exclusive carousel -->
                    <!-- <div class="single-exclusive-slider">
                        <img class="img-fluid" src="<?= $CONTENT_URL ?>/client/img/product/e-p1.png" alt="">
                        <div class="product-details">
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <h4>addidas New Hammer sole
                                for Sports person</h4>
                            <div class="add-bag d-flex align-items-center justify-content-center">
                                <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                <span class="add-text text-uppercase">Add to Bag</span>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End exclusive deal Area -->

<!-- Start brand Area -->
<section class="brand-area section_gap">
    <div class="container">
        <div class="row">
            <?php
            $brandList = $brand->get_list_client();
            foreach($brandList as $brandRow):
                extract($brandRow);
            ?>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="<?= $UPLOAD_IMG_URL ?>/brands/<?= $image ?>" alt="">
            </a>
            <?endforeach;?>
        </div>
    </div>
</section>
<!-- End brand Area -->
