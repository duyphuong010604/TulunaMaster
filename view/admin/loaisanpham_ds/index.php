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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí loại sản phẩm
                            /</span> Danh
                        sách loại sản phẩm</h4>

                    <!-- Bootstrap Table with Header - Footer -->
                    <div class="card ">
                        <h5 class="card-header">Danh sách loại sản phẩm</h5>
                        <div class=" p-2 table-responsive text-nowrap">

                            <table class="table mb-2" id="example">
                                <thead>
                                    <tr>
                                        <th>ID loại sản phẩm</th>
                                        <th>Tên loại sản phẩm</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy chọn</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $categoryList = $category->get_list();
                                    foreach ($categoryList as $row):
                                        extract($row);
                                        $detailCategory = "routerAdmin.php?act=loaisanpham_chitiet&categoryId=" . $categoryId;
                                        $editCategory = "routerAdmin.php?act=loaisanpham_sua&categoryId=" . $categoryId;
                                        $deleteCategory = "routerAdmin.php?act=loaisanpham_xoa&categoryId=" . $categoryId;
                                        ?>
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                                                    <?= $row['categoryId'] ?>
                                                </strong></td>
                                            <td>
                                                <?= $row['name'] ?>
                                            </td>
                                            <td>
                                                <span class="badge 
                                                <? if ($row['status'] == 1)
                                                    echo 'bg-label-success';
                                                if ($row['status'] == 9)
                                                    echo 'bg-label-secondary';
                                                ?> me-1">
                                                    <? if ($row['status'] == 1)
                                                        echo 'Hiển thị';
                                                    if ($row['status'] == 9)
                                                        echo 'Ẩn'; ?>
                                                </span>

                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?= $detailCategory ?>"><i
                                                                class='bx bx-detail me-1'></i>Chi tiết</a>
                                                        <a class="dropdown-item" href="<?= $editCategory ?>"><i
                                                                class="bx bx-edit-alt me-1"></i>Sửa</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                    <?php endforeach; ?>
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

                <!-- Modal -->
         
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->

</div>