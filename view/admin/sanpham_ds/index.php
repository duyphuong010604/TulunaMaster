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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí sản phẩm /</span>
                        Danh sách sản phẩm</h4>

                    <!-- Bootstrap Table with Header - Footer -->
                    <div class="card">
                        <h5 class="card-header">Danh sách sản phẩm</h5>
                        <div class="table-responsive text-nowrap p-1">
                            <table id="example" class="table mb-3">
                                <thead>
                                    <tr>
                                        <th>ID sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy chọn</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $productList = $product->get_list();
                                    foreach ($productList as $row):
                                        extract($row);
                                        $detailProduct = "routerAdmin.php?act=sanpham_chitiet&productId=" . $productId;
                                        $editProduct = "routerAdmin.php?act=sanpham_sua&productId=" . $productId;
                                        ?>
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                                                    <?= $productId ?>
                                                </strong></td>
                                            <td>
                                                <?php
                                                if (!empty($image)):
                                                    ?>
                                                    <img src="<?= $UPLOAD_IMG_URL ?>/products/<?= $image ?>" alt=""
                                                        width="50px" height="50px">
                                                <? else: ?>
                                                    Không có ảnh đại diện
                                                <? endif; ?>
                                            </td>
                                            <td>
                                                <?= $name ?>
                                            </td>
                                            <th>
                                                <?php
                                                echo number_format($price)
                                                    ?> VND
                                            </th>
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
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?= $detailProduct ?>"><i
                                                                class='bx bx-detail me-1'></i>Chi tiết</a>
                                                        <a class="dropdown-item" href="<?= $editProduct ?>"><i
                                                                class="bx bx-edit-alt me-1"></i>Chỉnh sửa</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                <? endforeach; ?>
                                <tfoot class="table-border-bottom-0">

                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- Bootstrap Table with Header - Footer -->


                </div>
                <!-- / Content -->




            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->

</div>