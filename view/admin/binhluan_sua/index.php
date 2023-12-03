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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí bình luận / Danh
                            sách bình luận </span>/ Trả lời bình luận & thay đổi trạng thái</h4>

                    <!-- Basic Layout & Basic with Icons -->
                    <div class="row">

                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Trả lời bình luận & thay đổi trạng thái</h5>
                                    <small class="text-muted float-end">Nhập vào ô bên dưới</small>
                                </div>
                                <div class="card-body">
                                    <?php
                                    $commentId = $_GET['commentId'];
                                    $editComment = "routerAdmin.php?act=binhluan_sua&commentId=" . $commentId;
                                    $commentEdit = $comment->getById_editAdmin($commentId);
                                    extract($commentEdit);
                                    ?>
                                    <form action="<?=$editComment?>" method='post'>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="content">Nội dung bình
                                                luận</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="content" class="input-group-text"><i
                                                            class='bx bx-text'></i></span>
                                                    <input type="text" class="form-control" id="content"
                                                        placeholder="Nhập nội dung" name="content" value="<?=$content?>"
                                                        readonly />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="replyContent">Trả lời bình
                                                luận</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">

                                                    <span id="replyContent" class="input-group-text"><i
                                                            class='bx bx-text'></i></span>
                                                    <input type="text" class="form-control" id="replyContent"
                                                        placeholder="Nhập nội dung trả lời" name="replyContent"
                                                        value="<?=$replyContent?>" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="status">Trạng
                                                thái</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="status" class="input-group-text"><i
                                                            class='bx bx-list-ul'></i></span>
                                                    <select name="status" id="status" class="form-control form-select ">
                                                        <option selected disabled>Chọn</option>
                                                        <option class="form-control" value=1 <? if ($status == 1)
                                                            echo "selected" ?>>Hiển thị
                                                            </option>
                                                            <option class="form-control" value=9 <? if ($status == 9)
                                                            echo "selected" ?>>Ẩn</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row justify-content-end">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary" name='luu'>Lưu</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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