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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí khuyến mãi
                            /</span> Danh
                        sách khuyến mãi</h4>

                    <!-- Bootstrap Table with Header - Footer -->
                    <div class="card ">
                        <h5 class="card-header">Danh sách khuyến mãi</h5>
                        <div class=" p-2 table-responsive text-nowrap">

                            <table class="table mb-2" id="example">
                                <thead>
                                    <tr>
                                        <th>ID khuyến mãi</th>
                                        <th>Tên khuyến mãi</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy chọn</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $promotionList = $promotion->get_list();
                                    foreach ($promotionList as $row):
                                        extract($row);
                                        $detailPromotion = "routerAdmin.php?act=khuyenmai_chitiet&promotionId=" . $promotionId;
                                        $editPromotion = "routerAdmin.php?act=khuyenmai_sua&promotionId=" . $promotionId;
                                        $deletePromotion = "routerAdmin.php?act=khuyenmai_xoa&promotionId=" . $promotionId;
                                        ?>
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                                                    <?= $promotionId ?>
                                                </strong></td>
                                            <td>
                                                <?= $name ?>
                                            </td>

                                            <td><span class="badge 
                                                <? if ($row['status'] == 1)
                                                    echo 'bg-label-success';
                                                if ($row['status'] == 9)
                                                    echo 'bg-label-secondary';
                                                ?> me-1">
                                                    <? if ($row['status'] == 1)
                                                        echo 'Cho phép';
                                                    if ($row['status'] == 9)
                                                        echo 'Chặn'; ?>
                                                </span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?=$detailPromotion?>"><i
                                                                class='bx bx-detail me-1'></i>Chi tiết</a>
                                                        <a class="dropdown-item" href="<?=$editPromotion?>"><i
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

                
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->

</div>