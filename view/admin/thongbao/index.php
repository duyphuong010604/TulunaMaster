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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
                        </span> Danh
                        sách thông báo</h4>


                    <!-- Bootstrap Table with Header - Footer -->
                    <div class="card">
                        <h5 class="card-header">Danh sách thông báo</h5>
                        <p class="ms-4">Bình luận sản phẩm</p>
                        <div class=" p-2 table-responsive text-nowrap">
                            <div class="card text-end border-info border" style="width: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title">Bình luận mới</h5>
                                    <p class="card-text">Nội dung bình luận: hahaahahahahahahaha</p>
                                    <a href="#" class="btn btn-outline-primary">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>



                        <p class="ms-4">Khách hàng góp ý</p>

                        <?php
                        $tbFeedback = $feedback->get_list_chua_trl();
                        foreach ($tbFeedback as $feedbackRow):
                            extract($feedbackRow);
                            $feedbackList = "routerAdmin.php?act=gopy"
                                ?>
                            <div class=" p-2 table-responsive text-nowrap">
                                <div class="card  border-warning border" style="width: 100%;">
                                   
                                    <div class="card-body text-end">
                                        <h5 class="card-title">Khách hàng góp ý</h5>
                                        <p class="card-text">Trạng thái:
                                            <?= ($status==1)?"Đã trả lời":"Chưa trả lời"; ?>
                                        </p>
                                        <p class="card-text">Nội dung:
                                            <?= $content ?>
                                        </p>
                                        <a href="<?= $feedbackList ?>" class="btn btn-outline-warning">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
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