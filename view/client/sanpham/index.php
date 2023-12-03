<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Tất cả sản phẩm</h1>
                <nav class="d-flex align-items-center">
                    <a href="#">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Sản phẩm<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Tất cả sản phẩm</a>
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
                    <li class="main-nav-list"><a href="#"><span class="lnr lnr-arrow-right"></span>
                            Tất cả các sản phẩm<span class="number"></span>
                            <?php
                            $categoryList = $category->get_list_client();
                            foreach ($categoryList as $categoryRow):
                                extract($categoryRow);
                                ?>
                        <li class="main-nav-list"><a href="<?= $ROOT_URL ?>/routerClient.php?act=sanphamtheomuc&categoryId=<?=$categoryId?>"><span class="lnr lnr-arrow-right"></span>
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
                    $productList = $product->get_list_client();
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

