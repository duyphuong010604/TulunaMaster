<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Lịch sửa đặt hàng</h1>
                <nav class="d-flex align-items-center">
                    <a href="#">Trang chủ<span class="lnr lnr-arrow-right"></span></a>

                    <a href="#">Lịch sửa đặt hàng</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="container mt-5">
    <div class="row">

        <div class="col-xl-12 col-lg-8 col-md-6 ">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Mã hóa đơn</th>
                        <th scope="col">Tổng tiền hóa đơn</th>
                        <th scope="col">Số tiền được giảm</th>
                        <th scope="col">Số lượng sản phẩm</th>
                        <th scope="col">Địa chỉ nhận hàng</th>
                        <th scope="col">Ngày đặt hàng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $billList_user = $bill->getById_lichsu($_SESSION['userId']);
                    
                    foreach($billList_user as $item):
                        extract($item);
                    ?>
                    <tr>
                        <th><?=$billId?></th>
                        <td><?=number_format($totalBill)?> VNĐ</td>
                        <td><?=number_format($priceReduced)?> VNĐ</td>
                        <td><?=$TONGSOLUONG?></td>
                        <td><?=$address?></td>
                        <td><?=$dateCreated?></td>
                    </tr>
                   <?php endforeach;?>
                </tbody>
            </table>

        </div>
    </div>
</div>