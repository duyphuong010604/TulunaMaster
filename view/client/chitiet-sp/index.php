<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Chi tiết sản phẩm</h1>
                <nav class="d-flex align-items-center">
                    <a href="#">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Sản phẩm<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Chi tiết sản phẩm</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Single Product Area =================-->
<?php
$productId = $_GET['productId'];
$productDetail = $product->getByproductId_detail($productId);
extract($productDetail);


?>
<div class="product_image_area">

    <div class="container">
        <h4 class="text-success">
            
        </h4>
        <div class="row s_product_inner">
            <div class="col-lg-4">

                <div class="single-prd-item">
                    <img class="img-fluid" src="<?= $UPLOAD_IMG_URL ?>/products/<?=$anhSanPham?>" alt="">
                </div>


            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="s_product_text">
                    <h1 class='text-danger'>
                        <?= $name ?>
                    </h1>
                    <h2>
                        <?= number_format($price) ?> VNĐ
                    </h2>
                    <ul class="list">
                        <li><a class="active" href="#"><span>Loại</span> :
                                <?= $nameCategory ?>
                            </a></li>
                        <li><a href="#"><span>Thương hiệu</span> :
                                <?= $nameBrand ?>
                            </a></li>
                    </ul>
                    <p>
                        <?= $description ?>
                    </p>
                    <form action="<?= $ROOT_URL?>/routerClient.php?act=giohang" method='post'>
                        <div class="product_count">
                            <label for="quantity">Số lượng:</label>
                            <input type="number" name="quantity" min=1 max=10 value="1" name="quantity"
                                class="input-text qty">
                            <input type="hidden" name='productId' value='<?= $productId ?>'>
                            <input type="hidden" name='name' value='<?= $name ?>'>
                            <input type="hidden" name='price' value='<?= $price ?>'>
                            <input type="hidden" name='image' value='<?= $anhSanPham ?>'>
                            <input type="hidden" name="giohang">
                        </div>
                        <div class="card_area d-flex align-items-center">
                            <button type="submit" class=" btn primary-btn " name="giohang" >Thêm vào giỏ hàng</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Mô tả sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">Thông tin chi tiết</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                    aria-controls="contact" aria-selected="false">Bình luận</a>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p>
                    <?= $description ?>
                </p>

            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <h5>Size: </h5>
                                </td>
                                <td>
                                    <h5>
                                        <?= $size ?>
                                    </h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Ngày nhập sản phẩm:</h5>
                                </td>
                                <td>
                                    <h5>
                                        <?= $dateUpdate ?>
                                    </h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Xuất xứ:</h5>
                                </td>
                                <td>
                                    <h5>
                                        <?= $origin ?>
                                    </h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Hảng sản xuất:</h5>
                                </td>
                                <td>
                                    <h5>
                                        <?= $nameBrand ?>
                                    </h5>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="comment_list">
                            <?php
                            $productId = $_GET["productId"];
                            $commentList = $comment->get_list_client($productId);

                            foreach ($commentList as $commentRow):
                                extract($commentRow);

                                ?>
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <?php if (isset($image)): ?>
                                                <img src="<?= $UPLOAD_IMG_URL ?>/users/<?= $image ?>" alt="user-avatar"
                                                    width="60px" height="60px">
                                            <?php else: ?>
                                                <img src="<?= $UPLOAD_IMG_URL ?>/users/matdinh.jpg" alt="user-avatar"
                                                    width="60px" height="60px" />
                                            <?php endif; ?>
                                        </div>

                                        <div class="media-body">
                                            <h4>
                                                <?= $username ?>
                                            </h4>
                                            <h5>
                                                <?= $dataUpdate ?>
                                            </h5>
                                            <!-- <a class="reply_btn" href="#">Reply</a> -->
                                        </div>
                                    </div>
                                    <p>
                                        <?= $content ?>
                                    </p>
                                </div>
                                <?php if (isset($replyContent)): ?>
                                    <div class="review_item reply">
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="<?= $CONTENT_URL ?>/client/img/product/review-2.png" alt=""
                                                    width="60px" height="60px">
                                            </div>
                                            <div class="media-body">
                                                <h4>Admin</h4>
                                                <h5>Trả lời</h5>
                                            </div>
                                        </div>
                                        <p>
                                            <?= $replyContent ?>
                                        </p>
                                    </div>
                                <? endif; ?>
                            <? endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="mt-5 mb-5">
            <a class="primary-btn text-white" data-toggle="modal" data-target=" 
            <?php
            if (isset($_SESSION['userId'])) {
                echo "#plusCommentModal";
            } else {
                echo "#loginModal";
            }
            ?> ">
                Thêm bình luận mới
            </a>
            <?php if (isset($_SESSION['meesageComment']))
                echo "<br><span  style='color: red;'>" . $_SESSION['meesageComment'] . "</span><br>"; ?>

            <!-- Modal -->
            <div class="modal fade" id="plusCommentModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Bình luận sản phẩm:
                                <?= $name ?>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= $ROOT_URL ?>/routerClient.php?act=binhluan&productId=<?= $productId ?>"
                            method="post">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-8 offset-2">
                                        <img src="<?= $UPLOAD_IMG_URL ?>/products/<?= $image ?>"
                                            class="rounded mx-auto d-block " height="120px" alt="...">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class=" col-12 mb-3">
                                        <label for="noidung_bl" class="form-label">Nội dung đánh
                                            giá</label>
                                        <textarea class="form-control" id="content" name='content' rows="3"
                                            name="content"></textarea>
                                        <input type="hidden" name='productId' value='<?= $productId ?>'>
                                        <input type="hidden" name='userId' value="<?= $_SESSION['userId'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="primary-btn" name='gui'>Gửi bình luận</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal login -->

            <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
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
                                    <a href="<?= $ROOT_URL ?>/routerClient.php?act=login"
                                        class='primary-btn text-center mx-auto'>
                                        Đăng nhập tài khoản
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Button trigger modal -->



<!--================End Product Description Area =================-->

<!-- Để các sp Hot -->