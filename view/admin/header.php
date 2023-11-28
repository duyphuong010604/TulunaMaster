<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="<?=$ROOT_URL?>/routerAdmin.php?act=home" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img class="img" src="<?=$UPLOAD_IMG_URL?>/images-logo/ADMIN.png" alt="logo" width="42px" height="42px">
            </span>
            <div class="text-logo">
                <span class="app-brand-text demo menu-text fw-bolder ms-2">TULUNA PK</span>
                <span class=" text-admin ps-1">Admin</span>
            </div>
        </a>
    </div>
    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="<?=$ROOT_URL?>/routerAdmin.php?act=home" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Bảng điều khiển</div>
            </a>
        </li>
        <!-- Quản lí -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Quản lí</span>
        </li>
        <!-- Layouts -->
        <li class="menu-item">
            <a href="<?=$ROOT_URL?>/routerAdmin.php?act=#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Tài khoản người dùng</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?=$ROOT_URL?>/routerAdmin.php?act=taikhoan_kh_ds" class="menu-link">
                        <div data-i18n="Tables">Danh sách tài khoản</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?=$ROOT_URL?>/routerAdmin.php?act=taikhoan_kh_them" class="menu-link">
                        <div data-i18n="Tables">Thêm mới tài khoản</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="<?=$ROOT_URL?>/routerAdmin.php?act=#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Tables">Loại sản phẩm</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?=$ROOT_URL?>/routerAdmin.php?act=loaisanpham_ds" class="menu-link">
                        <div data-i18n="Tables">Danh sách loại sản phẩm</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?=$ROOT_URL?>/routerAdmin.php?act=loaisanpham_them" class="menu-link">
                        <div data-i18n="Tables">Thêm mới loại sản phẩm</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="<?=$ROOT_URL?>/routerAdmin.php?act=" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Tables">Thương hiệu</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?=$ROOT_URL?>/routerAdmin.php?act=brand_ds" class="menu-link">
                        <div data-i18n="Tables">Danh sách thương hiệu</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?=$ROOT_URL?>/routerAdmin.php?act=brand_them" class="menu-link">
                        <div data-i18n="Tables">Thêm mới thương hiệu</div>
                    </a>
                </li>
            </ul>
        </li>


        <li class="menu-item">
            <a href="<?=$ROOT_URL?>/routerAdmin.php?act=" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Tables">Sản phẩm</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?=$ROOT_URL?>/routerAdmin.php?act=sanpham_ds" class="menu-link">
                        <div data-i18n="Tables">Danh sách sản phẩm</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?=$ROOT_URL?>/routerAdmin.php?act=sanpham_them" class="menu-link">
                        <div data-i18n="Tables">Thêm mới sản phẩm</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="<?=$ROOT_URL?>/routerAdmin.php?act=" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Tables">Bình luận </div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?=$ROOT_URL?>/routerAdmin.php?act=binhluan_ds" class="menu-link">
                        <div data-i18n="Tables">Danh sách bình luận</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="<?=$ROOT_URL?>/routerAdmin.php?act=" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Hóa đơn</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?=$ROOT_URL?>/routerAdmin.php?act=hoadon_ds" class="menu-link">
                        <div data-i18n="Tables">Danh sách hóa đơn</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item">
            <a href="<?=$ROOT_URL?>/routerAdmin.php?act=" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Banner</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?=$ROOT_URL?>/routerAdmin.php?act=banner_ds" class="menu-link">
                        <div data-i18n="Tables">Danh sách Banner</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?=$ROOT_URL?>/routerAdmin.php?act=banner_them" class="menu-link">
                        <div data-i18n="Tables">Thêm mới Banner</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item">
            <a href="<?=$ROOT_URL?>/routerAdmin.php?act=" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Mã khuyến mãi</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?=$ROOT_URL?>/routerAdmin.php?act=khuyenmai_ds" class="menu-link">
                        <div data-i18n="Tables">Danh sách mã khuyến mãi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?=$ROOT_URL?>/routerAdmin.php?act=khuyenmai_them" class="menu-link">
                        <div data-i18n="Tables">Thêm mới mã khuyến mãi</div>
                    </a>
                </li>

            </ul>
        </li>

        <!-- Thống kê  -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Thống kê</span>
        </li>

        <li class="menu-item">
            <a href="<?=$ROOT_URL?>/routerAdmin.php?act=thongke" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Thống kê</div>
            </a>
        </li>

        <!-- Góp ý -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Góp ý</span>
        </li>

        <li class="menu-item">
            <a href="<?=$ROOT_URL?>/routerAdmin.php?act=gopy" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Danh sách góp ý từ khách hàng</div>
            </a>
        </li>

        <!-- Thông báo -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Thông báo</span>
        </li>

        <li class="menu-item">
            <a href="<?=$ROOT_URL?>/routerAdmin.php?act=thongbao" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Danh sách thông báo</div>
            </a>
        </li>


    </ul>
</aside>
<!-- / Menu -->