<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Quản lý tài khoản</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Quản lý tài khoản</a>
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
                    <div class="col-md-12">

                        <div class="card mb-4">
                            <h5 class="card-header bg-warning text-white">Thông tin cá nhân</h5>
                            <!-- Account -->
                            <div class="card-body">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <img src="<?=$CONTENT_URL?>/client/img/cart.jpg" alt="user-avatar"
                                        class="d-block rounded me-5" height="100" width="100" id="uploadedAvatar" />
                                    <div class="button-wrapper ms-5 m-5 ">
                                        <label for="upload" class="btn btn-primary  mb-4" tabindex="0">
                                            <span class="d-none d-sm-block">Tải lên ảnh mới</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="upload" class="account-file-input" hidden
                                                accept="image/png, image/jpeg" />
                                        </label>
                                        <button type="button"
                                            class="btn btn-outline-secondary account-image-reset mb-4">
                                            <i class="bx bx-reset d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Reset</span>
                                        </button>

                                        <p class="text-muted mb-0 ">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <form id="formAccountSettings" method="POST">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="firstName" class="form-label">Tên đăng nhập</label>
                                            <input class="form-control" type="text" id="firstName" name="firstName"
                                                value="John" autofocus />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="lastName" class="form-label">Họ và tên</label>
                                            <input class="form-control" type="text" name="lastName" id="lastName"
                                                value="Doe" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="email" class="form-label">E-mail</label>
                                            <input class="form-control" type="text" id="email" name="email"
                                                value="john.doe@example.com" placeholder="john.doe@example.com" />
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="phoneNumber">Số điện thoại</label>
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">VN (+84)</span>
                                                <input type="text" id="phoneNumber" name="phoneNumber"
                                                    class="form-control" placeholder="202 555 0111" />
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="address" class="form-label">Địa chỉ</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="Address"/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="date" class="form-label">Ngày sinh</label>
                                            <input type="date" class="form-control" id="date" name="date" value="11/11/2022"
                                                placeholder="Ngày sinh" />
                                        </div>

                                        <div class="mb-3 col-md-6 d-flex align-items-center">
                                            <div class="mt-4 pt-1">
                                                <button type="submit" class="btn btn-primary me-2">Lưu thông
                                                    tin</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
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
                                        <form action="">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="firstName" class="form-label">Mật khẩu cũ</label>
                                                    <input class="form-control" type="text" id="firstName"
                                                        name="firstName" value="John" autofocus />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="firstName" class="form-label">Mật khẩu mới</label>
                                                    <input class="form-control" type="text" id="firstName"
                                                        name="firstName" value="John" autofocus />
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-success me-2">Thay đổi mật
                                                    khẩu</button>
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