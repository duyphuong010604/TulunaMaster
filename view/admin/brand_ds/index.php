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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí thương hiệu
                            /</span> Danh
                        sách thương hiệu</h4>

                    <!-- Bootstrap Table with Header - Footer -->
                    <div class="card ">
                        <h5 class="card-header">Danh sách thương hiệu</h5>
                        <div class=" p-2 table-responsive text-nowrap">

                            <table class="table mb-2" id="example">
                                <thead>
                                    <tr>
                                        <th>ID thương hiệu</th>
                                        <th>Tên thương hiệu</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy chọn</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $brandList = $brand->get_list();
                                    foreach ($brandList as $row):
                                        extract($row);
                                        $detailBrand = "routerAdmin.php?act=brand_chitiet&brandId=" . $brandId;
                                        $editBrand = "routerAdmin.php?act=brand_sua&brandId=" . $brandId;
                                        $deleteBrand = "routerAdmin.php?act=brand_xoa&brandId=" . $brandId;
                                        ?>
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                                                    <?= $brandId ?>
                                                </strong></td>
                                            <td>
                                                <?= $name ?>
                                            </td>

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
                                                        <a class="dropdown-item" href="<?= $detailBrand ?>"><i
                                                                class='bx bx-detail me-1'></i>Chi tiết</a>
                                                        <a class="dropdown-item" href="<?= $editBrand ?>"><i
                                                                class="bx bx-edit-alt me-1"></i>Sửa</a>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                    <? endforeach; ?>
                                </tbody>
                                <tfoot class="table-border-bottom-0">

                                </tfoot>
                            </table>
                        </div>
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