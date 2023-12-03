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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí hóa đơn /</span>
                        Danh sách hóa đơn</h4>

                    <!-- Bootstrap Table with Header - Footer -->
                    <div class="card">
                        <h5 class="card-header">Danh sách hóa đơn</h5>
                        <div class="table-responsive text-nowrap p-1">
                            <table id="example" class="table mb-3">
                                <thead>
                                    <tr>
                                        <th>Mã hóa đơn</th>
                                        <th>Tổng tiền hóa đơn</th>
                                        <th>Số lượng sản phẩm hóa đơn</th>
                                        <th>Ngày xuất hóa đơn</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $billList = $bill->get_list();
                                    foreach ($billList as $row):
                                        extract($row);
                                        ?>
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?=$billId?></strong>
                                            </td>
                                            <td>
                                                <?=number_format($totalBill)?> VNĐ
                                            </td>
                                            <td><?=$TONGSOLUONG?></td>
                                            <td><?=$dateCreated?></td>

                                            
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="routerAdmin.php?act=hoadon_chitiet&billId=<?=$billId?>"><i
                                                                class='bx bx-detail me-1'></i>Chi tiết</a>
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