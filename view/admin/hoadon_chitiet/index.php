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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí hóa đơn /
                            Danh sách hóa đơn </span>/ Thông tin chi tiết hóa đơn</h4>


                    <hr class="my-5" />

                    <!-- Bootstrap Table with Header - Footer -->
                    <div class="card">
                        <h5 class="card-header">Thông tin chi tiết hóa đơn </h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Thông tin</th>
                                        <th>Thông tin hóa đơn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $billId = $_GET['billId'];
                                    $billDetail = $bill->getById($billId);
                                    extract($billDetail);
                                    ?>
                                    <tr>
                                        <td>Tên người mua</td>
                                        <td>
                                            <?= $username ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ</td>
                                        <td>
                                            <?= $address ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Số điện thoại</td>
                                        <td>
                                            <?= $phone ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Số lượng sản phẩm</td>
                                        <td>
                                            <table class='table table-bordered'>
                                                <thead>

                                                    <tr>
                                                        <th>Tên sản phẩm</th>
                                                        <th>Số lượng</th>
                                                        <th>Giá</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <? $productInBill = $bill->get_list_productInBill($billId);
                                                    foreach ($productInBill as $item):
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?= $item['name'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $item['quantity'] ?>
                                                            </td>
                                                            <td>
                                                                <?= number_format($item['price']) ?> VNĐ
                                                            </td>
                                                        </tr>
                                                    <? endforeach; ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Tổng số lượng</th>
                                                        <th colspan="2" class="text-end">
                                                            <?= $quantity ?>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mã khuyến mãi</td>
                                        <td>
                                            <?= $fk_promotionId ?> - <?=$MA?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Số tiền được giảm</td>
                                        <td>
                                            <?= number_format($priceReduced) ?> VNĐ
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tổng giá trị hóa đơn</td>
                                        <td>
                                            <?= number_format($totalBill) ?> VNĐ
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Ngày xuất hóa đơn
                                        </td>
                                        <td>
                                            <?= $dateCreated ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Phương thức thanh toán</td>
                                        <td><span class="badge bg-label-primary me-1">
                                                <?php
                                                if ($paymentType == 1)
                                                    echo 'Thanh toán tiền mặt';
                                                if ($paymentType == 9)
                                                    echo 'Thanh toán chuyển khoản';
                                                ?>
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>
                                <tfoot class="table-border-bottom-0 bg-secondary opacity-75 text-white fw-bold">

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