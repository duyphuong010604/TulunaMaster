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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí thương hiệu /
                            Thêm mới thương hiệu </span> / Thêm mới thương hiệu</h4>

                    <!-- Basic Layout & Basic with Icons -->
                    <div class="row">

                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Thêm mới thương hiệu</h5>
                                    <small class="text-muted float-end">Nhập vào ô bên dưới</small>
                                </div>
                                <div class="card-body">
                                    <form action="<?= $ROOT_URL ?>/routerAdmin.php?act=brand_them" method="post" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="name">Tên thương hiệu</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="name" class="input-group-text"><i
                                                            class='bx bxl-product-hunt'></i></span>
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="Tên thương hiệu" name="name" required />
                                                </div>
                                                <?php
                                                if (isset($errors['name']))
                                                    echo "<br><span style='color: red;'>" . $errors['name'] . "</span><br>"; ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="origi">Xuất xứ của thương
                                                hiệu</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="loaisp" class="input-group-text"><i
                                                            class='bx bxs-plane-alt'></i></span>
                                                    <input type="text" class="form-control" id="origin"
                                                        placeholder="Xuất xứ thương hiệu" value="" name="origin" />

                                                </div>
                                                <?php
                                                if (isset($errors['origin']))
                                                    echo "<br><span style='color: red;'>" . $errors['origin'] . "</span><br>"; ?>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="image">Logo thương hiệu</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="loaisp" class="input-group-text"><i
                                                            class='bx bx-image-alt'></i></span>
                                                    <input type="file" class="form-control" id="image" value=""
                                                        name="image" />
                                                </div>
                                            </div>
                                        </div>

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
                                                        <option class="form-control" value=1>Hiển thị
                                                        </option>
                                                        <option class="form-control" value=9>Ẩn</option>
                                                    </select>
                                                </div>
                                                <?php
                                                if (isset($errors['status']))
                                                    echo "<br><span style='color: red;'>" . $errors['status'] . "</span><br>"; ?>
                                            </div>

                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary" name='them'>Thêm
                                                    mới</button>
                                                    <?php
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

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->

</div>