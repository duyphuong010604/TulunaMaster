<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">


        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

          

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí loại bình luận /
                            Danh sách bình luận </span>/ Thông tin chi tiết bình luận</h4>


                    <hr class="my-5" />

                    <!-- Bootstrap Table with Header - Footer -->
                    <div class="card">
                        <h5 class="card-header">Thông tin chi tiết bình luận </h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Thông tin</th>
                                        <th>Thông tin bình luận</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $commentId = $_GET["commentId"];
                                    $commentDetailList = $comment->get_list_admin($commentId);
                                    
                                    foreach ($commentDetailList as $item):
                                        extract($item);
                                        $editComment = "routerAdmin.php?act=binhluan_sua&commentId=" . $commentId;
                                        ?>
                                        <tr>
                                            <td>Tên sản phẩm</td>
                                            <td>
                                                <?= $name ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hình ảnh sản phẩm</td>
                                            <td>
                                                <?php
                                                if (!empty($image)):
                                                    ?>
                                                    <img src="<?= $UPLOAD_IMG_URL ?>/products/<?= $image ?>" alt=""
                                                        width="150px" height="150px">
                                                <? else: ?>
                                                    Không có ảnh đại diện
                                                <? endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tên tài khoản bình luận</td>
                                            <td>
                                                <?= $username ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Nội dung bình luận</td>
                                            <td>
                                                <?= $content ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Trả lời</td>
                                            <td>
                                                <?= $traloi ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Trạng thái</td>
                                            <td><span class="badge 
                                                <? if ($status == 1)
                                                    echo 'bg-label-success';
                                                if ($status == 9)
                                                    echo 'bg-label-secondary';
                                                ?> me-1">
                                                    <? if ($status == 1)
                                                        echo 'Hiển thị';
                                                    if ($status == 9)
                                                        echo 'Ẩn'; ?>
                                                </span>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot class="table-border-bottom-0 bg-secondary opacity-75 text-white fw-bold">
                                    <tr>
                                        <td>Tùy chọn</td>
                                        <td>
                                            <a href="<?=$editComment?>">
                                                <button class="btn btn-outline-success"><i
                                                        class='bx bx-message-square-edit me-2'></i>Trả lời bình luận & thay đổi trạng thái</button>
                                            </a>

                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- Bootstrap Table with Header - Footer -->
                </div>
                <!-- / Content -->


                <!-- Footer -->

                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->

</div>