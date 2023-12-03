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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí khuyến mãi / Danh sách
                            khuyến mãi</span>/
                        Sửa thông tin khuyến mãi</h4>

                    <!-- Basic Layout & Basic with Icons -->
                    <div class="row">

                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Chỉnh sửa thông tin khuyến mãi</h5>
                                    <small class="text-muted float-end">Nhập vào ô bên dưới</small>
                                </div>
                                <div class="card-body">
                                    <?php
                                    $promotionId = $_GET['promotionId'];
                                    $promotionEdit = $promotion->getBypromotionId($promotionId);
                                    extract($promotionEdit);
                                    ?>
                                    <form action="" method="post" >
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="promotionId">ID Mã khuyến mãi</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="loaisp" class="input-group-text"><i
                                                            class='bx bx-category'></i></span>
                                                    <input type="text" class="form-control" id="promotionId" required
                                                        readonly name="promotionId" value="<?= $promotionId ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="name">Tên khuyến
                                                mãi</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="name" class="input-group-text"><i
                                                            class='bx bx-purchase-tag'></i></span>
                                                    <input type="text" class="form-control" id="name"
                                                        aria-describedby="name" name="name" value="<?= $name ?>"
                                                        readonly />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="discount">Giá giảm</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="discount" class="input-group-text"><i
                                                            class='bx bx-dollar-circle'></i></span>
                                                    <input type="number" class="form-control" id="discount"
                                                        name="discount" value="<?= $discount ?>" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="conditionDiscount">Điều kiện
                                                giảm</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="conditionDiscount" class="input-group-text"><i
                                                            class='bx bx-text'></i></span>
                                                    <input type="text" id="conditionDiscount" class="form-control "
                                                        name="conditionDiscount" value="<?= $conditionDiscount ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="promotionType">Giảm theo</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="promotionType" class="input-group-text"><i
                                                            class='bx bx-list-ul'></i></span>
                                                    <select name="promotionType" id="promotionType"
                                                        class="form-control form-select">
                                                        <option disabled>Chọn</option>
                                                        <option class="form-control" value=1 <? if ($promotionType == 1)
                                                            echo "selected" ?>>
                                                                VNĐ</option>
                                                            <option class="form-control" value=9 <? if ($promotionType == 9)
                                                            echo "selected" ?>>%</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="starTime">Ngày
                                                    bất đầu</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span id="starTime" class="input-group-text"><i
                                                                class='bx bxs-calendar-event'></i></span>
                                                        <input type="text" id="starTime" class="form-control "
                                                            aria-describedby="starTime" name="starTime" readonly
                                                            value="<?= $starTime ?>" />
                                                </div>
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
                                                        aria-describedby="endTime" name="endTime" 
                                                        value="<?= date($endTime) ?>" required />
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
                                                    <button type="submit" class="btn btn-primary " name="luu">Lưu</button>
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