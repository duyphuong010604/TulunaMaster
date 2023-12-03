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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí loại sảm phẩm /
                            Danh sách quản lí loại sảm phẩm </span>/ Thông tin chi tiết loại sản phẩm</h4>


                    <hr class="my-5" />

                    <!-- Bootstrap Table with Header - Footer -->
                    <div class="card">
                        <h5 class="card-header">Thông tin chi tiết loại sản phẩm </h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>

                                    <tr>
                                        <th>Thông tin</th>
                                        <th>Thông tin loại sản phẩm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $categoryId = $_GET['categoryId'];
                                    $categoryDetail = $category->getById($categoryId);
                                    extract($categoryDetail);
                                    $editCategory = "routerAdmin.php?act=loaisanpham_sua&categoryId=" . $categoryId;
                                    $deleteCategory = "routerAdmin.php?act=loaisanpham_xoa&categoryId=" . $categoryId;

                                    ?>
                                    <tr>
                                        <td>ID loại sản phẩm</td>
                                        <td>
                                            <?= $categoryId ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tên loại sản phẩm</td>
                                        <td>
                                            <?= $name ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ảnh đại diện</td>
                                        <td>
                                            <?php
                                            if (!empty($image)):
                                                ?>
                                                <img src="<?= $UPLOAD_IMG_URL ?>/categorys/<?= $image ?>" alt=""
                                                    width="150px" height="150px">
                                            <? else: ?>
                                                Không có ảnh đại diện
                                            <? endif; ?>
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
                                            </span></td>
                                    </tr>

                                </tbody>
                                <tfoot class="table-border-bottom-0 bg-secondary opacity-75 text-white fw-bold">
                                    <tr>
                                        <td>Tùy chọn</td>
                                        <td>
                                            <a href="<?= $editCategory ?>">
                                                <button class="btn btn-outline-success"><i
                                                        class='bx bx-message-square-edit'></i></button>
                                            </a>
                                            <a href="<?= $deleteCategory ?>" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal-xoalsp">
                                                <button class="btn btn-outline-danger"><i
                                                        class='bx bx-message-square-x'></i></button>
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
                <!-- Modal -->
                <div class="modal fade" id="exampleModal-xoalsp" tabindex="-1"
                    aria-labelledby="exampleModalLabel-xoalsp" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Xóa loại sản phẩm</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3 col-12 mb-0">
                                            <div class="alert alert-warning">
                                                <h6 class="alert-heading fw-bold mb-1">Bạn chắc chắn muốn xóa
                                                    loại sản phẩm?</h6>
                                                <p class="mb-0">Nếu chắc chắn hãy tích vào ô bên dưới.</p>
                                            </div>
                                        </div>
                                        <form id="formAccountDeactivation" action="<?= $deleteCategory ?>" method="post">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" name="accountActivation"
                                                    id="accountActivation" required />
                                                <label class="form-check-label" for="accountActivation">Tôi đồng ý
                                                    xóa !</label>
                                            </div>
                                            <button type="submit" class="btn btn-danger deactivate-account"
                                                name="xoa">Xóa
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Footer -->


            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->

</div>