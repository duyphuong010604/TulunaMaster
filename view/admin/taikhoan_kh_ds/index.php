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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí tài khoản người
                            dùng /</span> Danh sách quản lí tài khoản người dùng</h4>


                    <hr class="my-5" />

                    <!-- Bootstrap Table with Header - Footer -->
                    <div class="card">
                        <h5 class="card-header">Danh sách quản lí tài khoản người dùng</h5>
                        <div class="table-responsive text-nowrap p-1">
                            <table id="example" class="table mb-3">
                                <thead>
                                    <tr>
                                        <th>ID tài khoản</th>
                                        <th>User name</th>
                                        <th>Họ và tên</th>
                                        <th>Số điện thoại</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $userList = $user->get_list();
                                    foreach ($userList as $row):
                                        extract($row);
                                        $detailUser = "routerAdmin.php?act=taikhoan_kh_chitiet&userId=" . $userId;
                                        $editUser = "routerAdmin.php?act=taikhoan_kh_sua&userId=" . $userId;
                                        $deleteUser = "routerAdmin.php?act=taikhoan_kh_xoa&userId=" . $userId;
                                        ?>
                                        <tr>
                                            <td>
                                                <?= $userId ?>
                                            </td>
                                            <td>
                                                <?= $username ?>
                                            </td>
                                            <td>
                                                <?= $fullname ?>
                                            </td>
                                            <td>
                                                <?= $phone ?>
                                            </td>


                                            <td><span class="badge 
                                                <? if ($status == 1)
                                                    echo 'bg-label-success';
                                                if ($status == 9)
                                                    echo 'bg-label-secondary';
                                                ?> me-1">
                                                    <? if ($status == 1)
                                                        echo 'Cho phép';
                                                    if ($status == 9)
                                                        echo 'Chặn'; ?>
                                                </span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?=$detailUser?>"><i
                                                                class='bx bx-detail me-1'></i>Chi tiết</a>
                                                        <a class="dropdown-item" href="<?=$editUser?>"><i
                                                                class="bx bx-edit-alt me-1"></i>Chỉnh sửa</a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <? endforeach; ?>
                                </tbody>
                                <tfoot class="table-border-bottom-0">

                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- Bootstrap Table with Header - Footer -->
                </div>
                <!-- / Content -->




            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->

</div>