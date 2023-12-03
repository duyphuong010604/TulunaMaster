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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí khuyến mãi </span>/
                        Thêm mới khuyến mãi</h4>

                    <!-- Basic Layout & Basic with Icons -->
                    <div class="row">

                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Thêm mới khuyến mãi</h5>
                                    <small class="text-muted float-end">Nhập vào ô bên dưới</small>
                                </div>
                                <div class="card-body">
                                    <form action="<?=$ROOT_URL?>/routerAdmin.php?act=khuyenmai_them"
                                        method="post" enctype="multipart/form-data">


                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="name">Tên khuyến
                                                mãi</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="name" class="input-group-text"><i
                                                            class='bx bx-purchase-tag'></i></span>
                                                    <input type="text" class="form-control" id="name"
                                                        aria-describedby="name" name="name" value=""
                                                        placeholder="Tên khuyến mãi" />
                                                </div>
                                                <?php
                                                if (isset($errors['name']))
                                                    echo "<br><span style='color: red;'>" . $errors['name'] . "</span><br>"; ?>
                                            </div>

                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="discount">Giá giảm</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="discount" class="input-group-text"><i
                                                            class='bx bx-dollar-circle'></i></span>
                                                    <input type="number" class="form-control" id="discount"
                                                        name="discount" placeholder="Gía giảm" />
                                                </div>
                                                <?php
                                                if (isset($errors['discount']))
                                                    echo "<br><span style='color: red;'>" . $errors['discount'] . "</span><br>"; ?>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="conditionDiscount">Điều kiện
                                                giảm</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="conditionDiscount" class="input-group-text"><i
                                                            class='bx bx-text'></i></span>
                                                    <input type="text" id="conditionDiscount" class="form-control"
                                                        name="conditionDiscount" 
                                                        placeholder="Điều kiện giá so với giá hóa đơn" />
                                                </div>
                                                <?php
                                                if (isset($errors['conditionDiscount']))
                                                    echo "<br><span style='color: red;'>" . $errors['conditionDiscount'] . "</span><br>"; ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="promotionType">Giảm
                                                theo</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="promotionType" class="input-group-text"><i
                                                            class='bx bx-list-ul'></i></span>
                                                    <select name="promotionType" id="promotionType"
                                                        class="form-control form-select">
                                                        <option disabled>Chọn</option>
                                                        <option class="form-control" value=1>
                                                            VNĐ</option>
                                                        <option class="form-control" value=9>%</option>
                                                    </select>
                                                </div>
                                                <?php
                                                if (isset($errors['promotionType']))
                                                    echo "<br><span style='color: red;'>" . $errors['promotionType'] . "</span><br>"; ?>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="starTime">Ngày
                                                bất đầu</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="starTime" class="input-group-text"><i
                                                            class='bx bxs-calendar-event'></i></span>
                                                    <input type="date" id="starTime" class="form-control "
                                                        aria-describedby="starTime" name="starTime" />
                                                </div>
                                                <?php
                                                if (isset($errors['starTime']))
                                                    echo "<br><span style='color: red;'>" . $errors['starTime'] . "</span><br>"; ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="endTime">Ngày
                                                kết thúc</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="endTime" class="input-group-text"><i
                                                            class='bx bxs-calendar-event'></i></span>
                                                    <input type="date" id="endTime" class="form-control "
                                                        aria-describedby="endTime" name="endTime" />
                                                </div>
                                                <?php
                                                if (isset($errors['endTime']))
                                                    echo "<br><span style='color: red;'>" . $errors['endTime'] . "</span><br>"; ?>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="status">Trạng
                                                thái</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="status" class="input-group-text"><i
                                                            class='bx bx-list-ul'></i></span>
                                                    <select name="status" id="status" class="form-control form-select">
                                                        <option disabled>Chọn</option>
                                                        <option class="form-control" value=1>
                                                            Cho phép</option>
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
                                                <button type="submit" class="btn btn-primary " name="them">Thêm
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

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->

</div>