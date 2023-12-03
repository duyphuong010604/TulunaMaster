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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
                        </span> Danh
                        sách thông báo</h4>
                    <?php
                    $tbComment = $comment->get_list_chua_trl();
                    foreach ($tbComment as $commentRow) :
                        extract($commentRow);
                        $editComment = "routerAdmin.php?act=binhluan_sua&commentId=" . $commentId;
                    ?>

                        <!-- Bootstrap Table with Header - Footer -->
                        <div class="card">
                            <h5 class="card-header">Danh sách thông báo</h5>
                            <p class="ms-4">Bình luận sản phẩm</p>
                            <div class=" p-2 table-responsive text-nowrap">
                                <div class="card text-end border-info border" style="width: 100%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Bình luận mới</h5>
                                        <p class="card-text">Nội dung bình luận:
                                            <?= $content ?>
                                        </p>
                                        <a href="<?= $editComment ?>" class="btn btn-outline-primary">Trả lời & chỉnh sửa</a>
                                    </div>
                                </div>
                            </div>


                        <?php endforeach; ?>


                        <?php
                        $tbFeedback = $feedback->get_list_chua_trl();
                        foreach ($tbFeedback as $feedbackRow) :
                            extract($feedbackRow);
                            $feedbackList = "routerAdmin.php?act=gopy"
                        ?>
                            <p class="ms-4">Khách hàng góp ý</p>
                            <div class=" p-2 table-responsive text-nowrap">
                                <div class="card  border-warning border" style="width: 100%;">

                                    <div class="card-body text-end">
                                        <h5 class="card-title">Khách hàng góp ý</h5>
                                        <p class="card-text">Trạng thái:
                                            <?= ($status == 1) ? "Đã trả lời" : "Chưa trả lời"; ?>
                                        </p>
                                        <p class="card-text">Nội dung:
                                            <?= $content ?>
                                        </p>
                                        <a href="<?= $feedbackList ?>" class="btn btn-outline-warning">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                        <!-- Bootstrap Table with Header - Footer -->


                </div>
                <!-- / Content -->

                <!-- Footer -->

                <!-- / Footer -->


            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->

</div>