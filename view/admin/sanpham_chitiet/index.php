<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">


        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                                aria-label="Search..." />
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="../../../contents/admin/assets/img/avatars/1.png" alt
                                        class="w-px-40 h-auto rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="../../../contents/admin/assets/img/avatars/1.png" alt
                                                        class="w-px-40 h-auto rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block">John Doe</span>
                                                <small class="text-muted">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">Thông tin tài khoản</span>
                                    </a>
                                </li>


                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Đăng xuất</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí sảm phẩm / Danh
                            sách quản lí sảm phẩm </span>/ Thông tin chi tiết sản phẩm</h4>
                    <hr class="my-5" />

                    <!-- Bootstrap Table with Header - Footer -->
                    <div class="card">
                        <h5 class="card-header">Thông tin chi tiết sản phẩm </h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">

                                <thead>
                                    <tr>
                                        <th>Thông tin</th>
                                        <th>Thông tin sản phẩm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $productId = $_GET['productId'];
                                    $productDetail = $product->getByproductId($productId);
                                    extract($productDetail);
                                    $editProduct = "routerAdmin.php?act=sanpham_sua&productId=" . $productId;
                                    $deleteProduct = "routerAdmin.php?act=sanpham_xoa&productId=" . $productId;
                                    ?>
                                    <tr>
                                        <td>ID sản phẩm</td>
                                        <td><?=$productId?></td>
                                    </tr>
                                    <tr>
                                        <td>Tên sản phẩm</td>
                                        <td><?=$name?></td>
                                    </tr>

                                    <tr>
                                        <td>Hình ảnh</td>
                                        <td>
                                        <?php
                                            if (!empty($image)):
                                                ?>
                                                <img src="<?= $UPLOAD_IMG_URL ?>/products/<?= $image ?>" alt=""
                                                    width="200px" height="150px">
                                            <? else: ?>
                                                Không có ảnh đại diện
                                            <? endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Thương hiệu</td>
                                        <td><?=$fk_brandId?></td>
                                    </tr>
                                    <tr>
                                        <td>Loại sản phẩm</td>
                                        <td><?=$fk_categoryId?></td>
                                    </tr>
                                    <tr>
                                        <td>Giá</td>
                                        <td><?=number_format($price)?> VNĐ</td>

                                    </tr>
                                   

                                    <tr>
                                        <td>Kích thước</td>
                                        <td><?=$size?></td>
                                    </tr>
                                    <tr>
                                        <td>Số lượng lượt xem</td>
                                        <td><?=$view?></td>
                                    </tr>
                                    <tr>
                                        <td>Mô tả</td>
                                        <td><?=$description?></td>
                                    </tr>

                                    <tr>
                                        <td>Ngày nhập</td>
                                        <td><?=$dateUpdate?></td>
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
                                            <a href="<?=$editProduct?>">
                                                <button class="btn btn-outline-success"><i
                                                        class='bx bx-message-square-edit'></i></button>
                                            </a>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal-xoasp">
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


                <!-- Modal -->
                <div class="modal fade" id="exampleModal-xoasp" tabindex="-1" aria-labelledby="exampleModalLabel-xoasp"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Xóa sản phẩm</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3 col-12 mb-0">
                                            <div class="alert alert-warning">
                                                <h6 class="alert-heading fw-bold mb-1">Bạn chắc chắn muốn
                                                    xóa
                                                    sản phẩm?</h6>
                                                <p class="mb-0">Nếu chắc chắn hãy tích vào ô bên dưới.
                                                </p>
                                            </div>
                                        </div>
                                        <form id="formAccountDeactivation" action='<?=$deleteProduct?>' method="post" >
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" name="accountActivation"
                                                    id="accountActivation" required/>
                                                <label class="form-check-label" for="accountActivation">Tôi
                                                    đồng ý
                                                    xóa !</label>
                                            </div>
                                            <button type="submit" class="btn btn-danger deactivate-account" name="xoa">Xóa
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->

</div>