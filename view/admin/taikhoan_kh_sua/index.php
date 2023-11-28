<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">


        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
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
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="../../../contents/admin/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="../../../contents/admin/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
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
                            dùng / Danh sách tài khoản người dùng </span>/ Sửa tài khoản người dùng</h4>

                    <!-- Basic Layout & Basic with Icons -->
                    <div class="row">

                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Chỉnh sửa tài khoản người dùng</h5>
                                    <small class="text-muted float-end">Nhập vào ô bên dưới</small>
                                </div>
                                <div class="card-body">
                                    <?php
                                    $userId = $_GET['userId'];
                                    $userEdit = $user->getByuserId($userId);
                                    extract($userEdit);
                                    $editUser = "routerAdmin.php?act=taikhoan_kh_sua&userId=" . $userId;
                                    ?>
                                    <form action="<?= $editUser ?>" method="post" enctype="multipart/form-data">

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="userId">ID Khách
                                                hàng</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="userId" class="input-group-text"><i class='bx bx-id-card'></i></span>
                                                    <input type="text" class="form-control" id="userId" aria-describedby="userId" required readonly name="userId" value="<?= $userId ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="username">User Name</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="username" class="input-group-text"><i class="bx bx-user"></i></span>
                                                    <input type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập" name="username" value="<?= $username ?>" required readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="image">Ảnh đại diện</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="loaisp" class="input-group-text"><i class='bx bx-image-alt'></i></span>
                                                    <input type="file" class="form-control" id="image" name="image" />

                                                </div>
                                                <div class="image mt-3 d-flex align-items-center">
                                                    <img src="<?= $UPLOAD_IMG_URL ?>/users/<?= $image ?>" alt="" height="80px">
                                                    <p class="ps-2">Ảnh hiện tại
                                                        <?php if (isset($errors["image"]))
                                                            echo "<br><span style='color: red;'>" . $errors["image"] . "</span><br>"; ?>
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="password">Password</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i class='bx bx-text'></i></span>
                                                    <input type="password" class="form-control" id="password" placeholder="Mật khẩu" name="password" value="<?= $password ?>" required />
                                                    <span id="icon-hidden" class="input-group-text">
                                                        <i class='bx bx-show' id="cu" onclick="changeTypePassword()"></i>
                                                    </span>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="fullname">Họ và tên </label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="fullname" class="input-group-text"><i class='bx bx-user-circle'></i></span>
                                                    <input type="text" class="form-control" id="fullname" placeholder="Họ và tên đệm" name="fullname" value="<?= $fullname ?>" required />
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="imageOld" value="<?= $image ?>">
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="address">Địa chỉ</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="address" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                                    <input type="text" id="address" class="form-control" placeholder="ACME Inc." aria-label="ACME Inc." aria-describedby="address" name="address" value="<?= $address ?>" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="email">Email</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                                    <input type="text" id="email" class="form-control" placeholder="email" aria-label="email" aria-describedby="email" name="email" value="<?= $email ?>" required />
                                                    <span id="email" class="input-group-text">@example.com</span>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="phone">Số điện
                                                thoại</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="phone" class="input-group-text"><i class="bx bx-phone"></i></span>
                                                    <input type="number" minlength="10" maxlength="10" id="phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="phone" name="phone" value="<?= $phone ?>" required />
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="date">Ngày sinh</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="sdt" class="input-group-text"><i
                                                            class='bx bx-calendar'></i></span>
                                                    <input type="date" name='date' placeholder='Ngày sinh'
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="status">Trạng
                                                thái</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="status" class="input-group-text"><i class='bx bx-list-ul'></i></span>
                                                    <select name="status" id="status" class="form-control form-select ">
                                                        <option selected disabled>Chọn</option>
                                                        <option class="form-control" value=1 <? if ($status == 1)
                                                                                                    echo "selected" ?>>Cho phép
                                                        </option>
                                                        <option class="form-control" value=9 <? if ($status == 9)
                                                                                                    echo "selected" ?>>Chặn</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-end">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary" name="luu">Lưu</button>

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

                <div class="content-backdrop fade"></div>
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