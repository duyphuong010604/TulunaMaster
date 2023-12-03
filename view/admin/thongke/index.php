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
                    <div class="row">
                        <div class="col-12 col-sm-4 pt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/chart-success.png"
                                                alt="chart success" class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>

                                        </div>
                                    </div>
                                    <span class="fw-bold d-block mb-1">Doanh thu</span>
                                    <?php
                                    $billSumTotal = $bill->getBy_SumTotalBill();
                                    ?>
                                    <h3 class="card-title mb-2">
                                        <?= number_format($billSumTotal) ?> VNĐ
                                    </h3>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-4 pt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/wallet-info.png"
                                                alt="Credit Card" class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>

                                        </div>
                                    </div>
                                    <span class="fw-bold d-block mb-1">Số sản phẩm đã bán</span>
                                    <?php
                                    $billSumQuantity = $bill->getBy_SumQuantity();

                                    ?>
                                    <h3 class="card-title mb-1">
                                        <?= $billSumQuantity ?>
                                    </h3>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-4 pt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/loinhuan.png"
                                                alt="Credit Card" class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>

                                        </div>
                                    </div>
                                    <span class="fw-bold d-block mb-1">Doanh thu trung bình hàng ngày</span>
                                    <?php
                                    $CountbillDay = $bill->get_CountBillDay();
                                    extract($CountbillDay);
                                    ?>
                                    <h3 class="card-title mb-2">
                                        <?= number_format($billSumTotal / $TONGSONGAY) ?>
                                    </h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 pt-2">
                            <div class="card">
                                <div class="card-header header-elements">
                                    <h5 class="card-title mb-0">Biểu đồ thống kê</h5>
                                </div>
                                <!-- dứ liệu -->
                                <?php

                                $dataPoints1 = array(

                                );

                                $bangcot = $bill->get_bangcot();
                                foreach ($bangcot as $key) {
                                    $value = array("y" => $key['TONGTIEN'], "label" => $key['NGAY']);
                                    array_push($dataPoints1, $value);
                                }

                                ?>
                                <div class="card-body pt-2">
                                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <?php
                        $DEMUSER = $thongke->SOUSER();
                        $DEMPRODUCT = $thongke->SOPRODUCT();
                        $DEMCATEGORY = $thongke->SOCATEGORY();
                        $DEMBRAND = $thongke->SOBRAND();
                        ?>
                        <div class="col-12 col-sm-3 pt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/group.png"
                                                alt="chart success" class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </button>
                                        </div>
                                    </div>
                                    <span class="fw-bold d-block mb-1">Số lượng tài khoảng </span>
                                    <h3 class="card-title mb-2">
                                        <?= $DEMUSER ?> tài khoản
                                    </h3>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-3 pt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/box (1).png"
                                                alt="chart success" class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </button>
                                        </div>
                                    </div>
                                    <span class="fw-bold d-block mb-1">Số lượng sản phẩm</span>
                                    <h3 class="card-title mb-2">
                                        <?= $DEMPRODUCT ?> sản phẩm
                                    </h3>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-3 pt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/carousel.png"
                                                alt="chart success" class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </button>
                                        </div>
                                    </div>
                                    <span class="fw-bold d-block mb-1">Số lượng loại sản phẩm</span>
                                    <h3 class="card-title mb-2">
                                        <?= $DEMCATEGORY ?> loại sản phẩm
                                    </h3>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-3 pt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/blogger.png"
                                                alt="chart success" class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </button>
                                        </div>
                                    </div>
                                    <span class="fw-bold d-block mb-1">Số lượng thương hiệu</span>
                                    <h3 class="card-title mb-2">
                                        <?= $DEMBRAND ?> thương hiệu
                                    </h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 ">
                        <div class="col-12 pt-2">
                            <div class="card">
                                <div class="card-header header-elements">
                                    <h5 class="card-title mb-0">Biểu đồ thống kê phần trăm loại sản phẩm</h5>
                                </div>
                                <!-- dứ liệu -->
                                <?php
                                
                                
                                $dataPoints = array(
                                   
                                );

                                $BANGTRON = $thongke->BANGTRON();
                                foreach($BANGTRON as $key){
                                    extract($key);
                                    $value = array("label" => "$name", "y" => ($SOSANPHAM/$DEMCATEGORY)*100);
                                    array_push($dataPoints, $value);
                                }
                                

                                    ?>
                                <div class="card-body pt-2">
                                    <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <?php
                        $GIAMIN = $thongke ->GIAMIN();
                        $GIAMAX = $thongke ->GIAMAX();
                        $GIATB = $thongke ->GIATB();
                        ?>
                        <div class="col-12 col-sm-4 pt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/sigma.png"
                                                alt="chart success" class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fw-bold d-block mb-1">Giá sản phẩm trung bình</span>
                                    <h3 class="card-title mb-2"><?=number_format($GIATB['GIA'])?> VNĐ</h3>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-4 pt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/sigma1.png"
                                                alt="chart success" class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </button>
                                        </div>
                                    </div>
                                    <span class="fw-bold d-block mb-1">Giá sản phẩm cao nhất</span>
                                    <h3 class="card-title mb-2"><?=number_format($GIAMAX['GIA'])?> VNĐ</h3>
                                    <span>Tên sản phẩm: <?=$GIAMAX['name']?></span>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-4 pt-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="<?= $CONTENT_URL ?>/admin/assets/img/icons/unicons/sigma1.png"
                                                alt="chart success" class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </button>
                                        </div>
                                    </div>
                                    <span class="fw-bold d-block mb-1">Giá sản phẩm thấp nhất</span>
                                    <h3 class="card-title mb-2"><?=number_format($GIAMIN['GIA'])?> VNĐ</h3>
                                    <span>Tên sản phẩm: <?=$GIAMIN['name']?></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->



            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
</div>



<!-- Place this tag in your head or just before your close body tag. -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

<script>
    window.onload = function () {


        var chart1 = new CanvasJS.Chart("chartContainer1", {
            animationEnabled: true,
            title: {
                text: "Tỷ lệ các loại sản phẩm"
            },
            subtitles: [{
                text: "Sản phẩm hiện tại được hiển thị"
            }],
            data: [{
                type: "pie",
                yValueFormatString: "#,##0.00\"%\"",
                indexLabel: "{label} ({y})",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart1.render();


        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2",
            title: {
                text: "Số lượt mua hàng"
            },
            axisY: {
                title: ""
            },
            data: [{
                type: "column",
                yValueFormatString: "#,##0.## VNĐ",
                dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
            }]
        });

        chart.render();

        function toggleDataSeries(e) {
            if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
            }
            else {
                e.dataSeries.visible = true;
            }
            chart.render();
        }

    }
</script>