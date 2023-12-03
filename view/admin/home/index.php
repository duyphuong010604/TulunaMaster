<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">


        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="../../../../ADMIN_DUAN1/contents/admin/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="<?= $ROOT_URL ?>/routerAdmin.php?act=quanlytaikhoan">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="../../../../ADMIN_DUAN1/contents/admin/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
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
                                    <a class="dropdown-item" href="<?= $ROOT_URL ?>/routerAdmin.php?act=quanlytaikhoan">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">Thông tin tài khoản</span>
                                    </a>
                                </li>


                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= $ROOT_URL ?>/routerAdmin.php?act=dangxuat">
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
                    <div class="row">
                        <div class="col-lg-8 mb-4 order-0">
                            <div class="card">
                                <div class="d-flex align-items-end row">
                                    <div class="col-sm-7">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary">Chào mừng bạn trở lại! 🎉</h5>
                                            <p class="mb-4">
                                                Hãy cùng xem <span class="fw-bold">hôm nay</span> việc kinh doanh
                                                của bạn như thế nào.
                                                Tại trang quản lý.
                                                Hay đến với website
                                            </p>

                                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">Xem
                                                website</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-center text-sm-left">
                                        <div class="card-body pb-0 px-0 px-md-4">
                                            <img src="../../../../ADMIN_DUAN1/contents/admin/assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 order-1">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../../../../ADMIN_DUAN1/contents/admin/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                        <a class="dropdown-item" href="javascript:void(0);">Xem chi
                                                            tiết</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <span class="fw-semibold d-block mb-1">Doanh thu</span>
                                            <?php
                                                $billSumTotal = $bill->getBy_SumTotalBill();
                                            ?>
                                            <h4 class="card-title mb-2"><?= number_format($billSumTotal)?> VNĐ</h4>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../../../../ADMIN_DUAN1/contents/admin/assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                        <a class="dropdown-item" href="javascript:void(0);">Xem chi
                                                            tiết</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <span class="fw-semibold d-block mb-1">Số sản phẩm đã bán</span>
                                            <?php
                                            $billSumQuantity = $bill->getBy_SumQuantity();
                                           
                                            ?>
                                            <h4 class="card-title mb-1"><?= $billSumQuantity?></h4>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Total Revenue -->
                        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                            <div class="card">
                                <div class="row row-bordered g-0">
                                    <div class="col-md-12">
                                        <h5 class="card-header m-0 me-2 pb-3">Các sản phẩm được quan tâm</h5>
                                        <table class="table table-Info">
                                            <thead>

                                                <tr>
                                                    <th>Top</th>
                                                    <th scope="col">Hình ảnh</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Số lượt truy cập</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?
                                                $productTopList = $product->get_list_topView();
                                                $i = 0;
                                                foreach ($productTopList as $item) :
                                                    extract($item);
                                                ?>
                                                    <tr>
                                                        <th><?php echo $i + 1 ?></th>
                                                        <th scope="row">
                                                            
                                                                <img class="mr-3" src="<?= $UPLOAD_IMG_URL ?>/products/<?= $image ?>" alt="Hình ảnh ản phẩm" width="60px" height='60px'>
                                                           
                                                        </th>
                                                        <td colspan="3"><?= $name?></td>
                                                        <td><?=$view?> Lượt xem</td>
                                                    </tr>
                                                <? $i++;
                                                endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--/ Total Revenue -->
                        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                            <div class="row">
                                
                                <div class="col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                                    <div class="card-title">
                                                        <h5 class="text-nowrap mb-2">Khách hàng hàng đầu</h5>
                                                        <?php $TotalUser = $bill->getBy_TopTotalBill_user();
                                                        foreach ($TotalUser as $item) :
                                                            extract($item);
                                                        ?>
                                                        <span class="badge bg-label-warning rounded-pill"><?=$username?></span>
                                                    </div>
                                                    <div class="mt-sm-auto">
                                                        
                                                        <h3 class="mb-0">Tổng số tiền mua hàng <?=number_format($TONGCUAUSER)?> VNĐ</h3>
                                                        <?endforeach?>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
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