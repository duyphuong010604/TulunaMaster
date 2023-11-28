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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí tài khoản người
                            dùng/ </span> Thêm mới tài khoản người dùng</h4>

                    <!-- Basic Layout & Basic with Icons -->
                    <div class="row">

                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Thêm mới tài khoản người dùng</h5>
                                    <small class="text-muted float-end">Nhập vào ô bên dưới</small>
                                </div>
                                <div class="card-body">
                                    <form action="<?= $ROOT_URL ?>/routerAdmin.php?act=taikhoan_kh_them" method="post"
                                        enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="username">User Name</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="username" class="input-group-text"><i
                                                            class="bx bx-user"></i></span>
                                                    <input type="text" class="form-control" id="username"
                                                        placeholder="Nhập tên đăng nhập" aria-describedby="username"
                                                        name="username" required />
                                                </div>
                                                <?php
                                                if (isset($errors['username']))
                                                    echo "<br><span style='color: red;'>" . $errors['username'] . "</span><br>"; ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="password">Password</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="password" class="input-group-text"><i
                                                            class='bx bx-text'></i></span>
                                                    <input type="password" class="form-control" id="password"
                                                        placeholder="Mật khẩu" name="password" required />
                                                    <span id=" icon-hidden" class="input-group-text">
                                                        <i class='bx bx-show' onclick="changeTypePassword()"></i>
                                                    </span>
                                                </div>
                                                <?php
                                                if (isset($errors['password']))
                                                    echo "<br><span style='color: red;'>" . $errors['password'] . "</span><br>"; ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="image">Hình ảnh</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="" class="input-group-text"><i
                                                            class='bx bx-image-alt'></i></span>
                                                    <input type="file" class="form-control" id="image" name="image" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="fullname">Họ và tên </label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="fullname" class="input-group-text"><i
                                                            class='bx bx-user-circle'></i></span>
                                                    <input type="text" class="form-control" id="fullname"
                                                        placeholder="Họ và tên " name="fullname" required />
                                                </div>
                                                <?php
                                                if (isset($errors['fullname']))
                                                    echo "<br><span style='color: red;'>" . $errors['fullname'] . "</span><br>"; ?>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="address">Địa chỉ</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="address" class="input-group-text"><i
                                                            class="bx bx-buildings"></i></span>
                                                    <input type="text" id="address" class="form-control"
                                                        placeholder="Địa chỉ." aria-label="Địa chỉ."
                                                        aria-describedby="address" name="address" required />
                                                </div>
                                                <?php
                                                if (isset($errors['address']))
                                                    echo "<br><span style='color: red;'>" . $errors['address'] . "</span><br>"; ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="email">Email</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                                    <input type="text" id="email" class="form-control"
                                                        placeholder="email" aria-label="email" aria-describedby="email"
                                                        name="email" required />
                                                    <span id="email" class="input-group-text">@example.com</span>
                                                </div>
                                                <?php
                                                if (isset($errors['email']))
                                                    echo "<br><span style='color: red;'>" . $errors['email'] . "</span><br>"; ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="phone">Số điện
                                                thoại</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="phone" class="input-group-text"><i
                                                            class="bx bx-phone"></i></span>
                                                    <input type="number" minlength="10" maxlength="10" id="phone"
                                                        class="form-control phone-mask" placeholder="0388 925 209"
                                                        aria-label="0388 925 209" aria-describedby="phone" name="phone"
                                                        required />
                                                </div>
                                                <?php
                                                if (isset($errors['phone']))
                                                    echo "<br><span style='color: red;'>" . $errors['phone'] . "</span><br>"; ?>
                                            </div>
                                        </div>

                                        <!-- <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="date">Ngày sinh</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="date" class="input-group-text"><i
                                                            class='bx bx-calendar'></i></span>
                                                    <input type="date" name='date' placeholder='Ngày sinh'
                                                        class="form-control" id="date">
                                                </div>
                                                
                                            </div>
                                        </div> -->


                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="status">Trạng
                                                thái</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="status" class="input-group-text"><i
                                                            class='bx bx-list-ul'></i></span>
                                                    <select name="status" id="status" class="form-control form-select"
                                                        required>
                                                        <option selected disabled>Chọn</option>
                                                        <option class="form-control" value=1>Cho phép</option>
                                                        <option class="form-control" value=9>Chặn</option>
                                                    </select>
                                                </div>
                                                <?php
                                                if (isset($errors['status']))
                                                    echo "<br><span style='color: red;'>" . $errors['status'] . "</span><br>"; ?>
                                            </div>
                                        </div>

                                        <div class="row justify-content-end">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary" name="them">Thêm
                                                    mới</button>
                                                <?
                                                if (isset($Note['message']))
                                                    echo "<br><span style='color: red;'>" . $Note['message'] . "</span><br>"; ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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

<script>
    function changeTypePassword() {
        document.getElementById('password').type = document.getElementById('password').type == 'text' ? 'password' : 'text';

    }
</script>