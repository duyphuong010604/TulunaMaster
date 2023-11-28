
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

                                        <tr>
                                            <td>Tên người mua</td>
                                            <td>
                                                nguyen văn a
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Địa chỉ</td>
                                            <td>AAAA</td>
                                        </tr>
                                        <tr>
                                            <td>Số điện thoại</td>
                                            <td>0123456789</td>
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
                                                        <tr>
                                                            <td>Áo</td>
                                                            <td>3</td>
                                                            <td>430000 vnd</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Tổng số lượng</th>
                                                            <th colspan="2" class="text-end">3</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mã khuyến mãi</td>
                                            <td>Không</td>
                                        </tr>
                                        <tr>
                                            <td>Số tiền được giảm</td>
                                            <td>1000VNĐ</td>
                                        </tr>
                                        <tr>
                                            <td>Tổng giá trị hóa đơn</td>
                                            <td>
                                                23333444 VNĐ
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Ngày xuất hóa đơn
                                            </td>
                                            <td>01/01/2023 11:20</td>
                                        </tr>

                                        <tr>
                                            <td>Phương thức thanh toán</td>
                                            <td><span class="badge bg-label-primary me-1">
                                                Chuyển khoản
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

    