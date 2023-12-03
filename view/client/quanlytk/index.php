<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Quản lý tài khoản</h1>
                <nav class="d-flex align-items-center">
                    <a href="#">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Quản lý tài khoản</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">

        <div class="row mb-3">
            <div class="col-8">
                <h3 class="text-star fw-bold">Quản lý tài khoản</h3>

            </div>
        </div>
        <div class="row mb-3">

            <div class="col-8 mx-auto">
                <div class="row">
                    <?php
                    $userList = $user->getByuserId($_SESSION['userId']);
                    extract($userList);

                    ?>
                    <div class="col-md-12">

                        <div class="card mb-4">
                            <h5 class="card-header bg-warning text-white">Thông tin cá nhân</h5>
                            <!-- Account -->
                            <div class="card-body">
                                <form id="formAccountSettings" action="<?= $ROOT_URL ?>/routerClient.php?act=quanly-tk"
                                    method="POST" enctype="multipart/form-data">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        <?php if (isset($image)): ?>
                                            <img src="<?= $UPLOAD_IMG_URL ?>/users/<?= $image ?>" alt="user-avatar"
                                                class="d-block rounded me-5" height="100" width="100" id="uploadedAvatar" />
                                        <?php else: ?>
                                            <img src="<?= $UPLOAD_IMG_URL ?>/users/matdinh.jpg" alt="user-avatar"
                                                class="d-block rounded me-5" height="100" width="100" id="uploadedAvatar" />

                                        <?php endif; ?>
                                        <div class="button-wrapper ms-5 m-5 ">
                                            <label for="upload" class="btn btn-primary  mb-4" tabindex="0">
                                                <span class="d-none d-sm-block">Tải lên ảnh mới</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" id="upload" class="account-file-input" hidden
                                                    name='image' />
                                                <input type="hidden" class="account-file-input" name='imageOld'
                                                    value="<?= $image ?>" />
                                            </label>
                                            <button type="submit" name="gui"
                                                class="btn btn-outline-success account-image-reset mb-4">
                                                <i class="bx bx-reset d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Gửi</span>
                                            </button>
                                            <?php if (isset($image)): ?>
                                                <p class="text-muted mb-0 ">Ảnh đại diện hiện tại.</p>
                                            <?php else: ?>
                                                <p class="text-muted mb-0 ">Tải ảnh đại diện cho tài khoản.</p>
                                            <?php endif; ?>
                                            <?php if (isset($Note['true']))
                                                echo "<br><span class='text-star' style='color: green;' >" . $Note['true'] . "</span><br>"; ?>
                                            <?php if (isset($Note['false']))
                                                echo "<br><span class='text-star' style='color: green;' >" . $Note['false'] . "</span><br>"; ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <hr class="my-0" />

                            <div class="card-body">
                                <form id="formAccountSettings" action="<?= $ROOT_URL ?>/routerClient.php?act=quanly-tk"
                                    method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="username" class="form-label">Tên đăng nhập</label>
                                            <input class="form-control" type="text" id="username" name="username"
                                                value="<?= $username ?>" autofocus />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="fullname" class="form-label">Họ và tên</label>
                                            <input class="form-control" type="text" name="fullname" id="fullname"
                                                value="<?= $fullname ?>" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="email" class="form-label">E-mail</label>
                                            <input class="form-control" type="text" id="email" name="email"
                                                value="<?= $email ?>" placeholder="john.doe@example.com" />
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="phone">Số điện thoại</label>
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">VN (+84)</span>
                                                <input type="text" id="phone" name="phone" value="<?= $phone ?>"
                                                    class="form-control" placeholder="202 555 0111" />
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label for="address" class="form-label">Địa chỉ</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="Address" value='<?= $address ?>' />
                                        </div>
                                        <div class="mb-3 col-md-6 d-flex align-items-center">
                                            <div class="mt-4 pt-1">
                                                <button type="submit" class="btn btn-outline-success me-2"
                                                    name='luu'>Lưu thông
                                                    tin</button>
                                                <?php if (isset($Note['message']))
                                                    echo "<br><span class='text-star' style='color: green;' >" . $Note['message'] . "</span><br>"; ?>
                                                    <?php if (isset($Note['message_username']))
                                                    echo "<br><span class='text-star' style='color: red;' >" . $Note['message_username'] . "</span><br>"; ?>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- /Account -->
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="card mb-4">
                            <h5 class="card-header bg-warning text-white">Đổi mật khẩu</h5>
                            <hr class='my-0' />
                            <div class="card-body">
                                <form action="<?= $ROOT_URL ?>/routerClient.php?act=quanly-tk" method="POST">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="passwordOld" class="form-label">Mật khẩu cũ</label>
                                            <input class="form-control" type="text" id="passwordOld"
                                                name="passwordOld" />
                                            <?php if (isset($Note['message_mk']))
                                                echo "<br><span class='text-star' style='color: red;' >" . $Note['message_mk'] . "</span><br>"; ?>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="passwordNew" class="form-label">Mật khẩu mới</label>
                                            <input class="form-control" type="text" id="passwordNew"
                                                name="passwordNew" />
                                            <?php if (isset($Note['message_mk_new']))
                                                echo "<br><span class='text-star' style='color: red;' >" . $Note['message_mk_new'] . "</span><br>"; ?>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-outline-danger me-2"
                                            name='thaydoimatkhau'>Thay đổi mật
                                            khẩu</button>
                                        <?php if (isset($Note['message_mk_true']))
                                            echo "<br><span class='text-star' style='color: green;' >" . $Note['message_mk_true'] . "</span><br>"; ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->