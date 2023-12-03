<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <?php
                $categoryId = $_GET['categoryId'];
                $categoryName = $category->getById($categoryId);
                extract($categoryName);
                ?>
                <h1>
                    <?= $name ?>
                </h1>
                <nav class="d-flex align-items-center">
                    <a href="#">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="<?= $ROOT_URL ?>/routerClient.php?act=sanpham">Sản phẩm<span class="lnr lnr-arrow-right"></span></a>

                    <a href="#">
                        <?= $name ?>
                    </a>

                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="container mt-5">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
            <div class="sidebar-categories mt-4">
                <div class="head">Danh mục sản phẩm</div>
                <ul class="main-categories">
                    <li class="main-nav-list"><a href="<?= $ROOT_URL ?>/routerClient.php?act=sanpham"><span class="lnr lnr-arrow-right"></span>
                            Tất cả các sản phẩm<span class="number"></span>
                            <?php
                            $categoryList = $category->get_list_client();
                            foreach ($categoryList as $categoryRow):
                                extract($categoryRow);
                                ?>
                        <li class="main-nav-list"><a
                                href="<?= $ROOT_URL ?>/routerClient.php?act=sanphamtheomuc&categoryId=<?= $categoryId ?>"><span
                                    class="lnr lnr-arrow-right"></span>
                                <?= $name ?><span class="number"></span>
                            </a>
                        </li>
                    <?php endforeach; ?>


                </ul>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">

            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <?php
                    $categoryId = $_GET['categoryId'];
                    $productList = $product->get_list_client_category($categoryId);
                    foreach ($productList as $productRow):
                        extract($productRow);
                        ?>
                        <!-- single product -->
                        <div class="col-lg-4 col-md-6">
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

                                        <a class="social-info">
                                            <span class="ti-bag"></span>
                                            <form action="<?= $ROOT_URL ?>/routerClient.php?act=giohang" method='post'>
                                                <input type="hidden" name='productId' value='<?= $productId ?>'>
                                                <input type="hidden" name='name' value='<?= $name ?>'>
                                                <input type="hidden" name='price' value='<?= $price ?>'>
                                                <input type="hidden" name='image' value='<?= $image ?>'>
                                                <button type="submit" class="btn hover-text btn-warning"
                                                    name='giohang'>+Giỏ hàng</button>
                                            </form>
                                        </a>

                                        <a href="<?= $ROOT_URL ?>/routerClient.php?act=chitiet-sp&productId=<?= $productId ?>"
                                            class="social-info">
                                            <span class="lnr lnr-move"></span>
                                            <p class="hover-text">Xem chi tiết</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endforeach; ?>
                    <!-- single product -->

                </div>
            </section>

        </div>
    </div>
</div>

<!-- Start related-product Area -->
<!-- <section class="related-product-area section_gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h1>Sản phẩm Hot</h1>
                    <p>Danh sách các sản phẩm khuyến mãi giảm giá.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r1.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r2.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r3.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r5.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r6.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r7.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r9.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r10.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="<?= $CONTENT_URL ?>/client/img/r11.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ctg-right">
                    <a href="#" target="_blank">
                        <img class="img-fluid d-block mx-auto" src="<?= $CONTENT_URL ?>/client/img/category/c5.jpg"
                            alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End related-product Area -->