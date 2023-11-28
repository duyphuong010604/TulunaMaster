<header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?=$ROOT_URL?>/routerClient.php?atc=home"><img
                            src="<?=$UPLOAD_IMG_URL?>/images-logo/TULUNA PK.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <!-- <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item">
                                <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                            </li>
                            <li class="search-rela nav-item">
                                <div class="search_input" id="search_input_box">
                                    <form class="d-flex justify-content-between">
                                        <input type="text" class="form-control" id="search_input"
                                            placeholder="Tìm kiếm sản phẩm">
                                        <button type="submit" class="btn"></button>
                                        <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                                    </form>
                                </div>
                            </li>
                        </ul> -->
                        <form class="d-flex">
                            <input class="genric-btn border circle" type="search" placeholder="Tìm kiếm" aria-label="Search">
                            <button class="genric-btn primary-border circle" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="<?=$ROOT_URL?>/routerClient.php?atc=home">Trang chủ</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?=$ROOT_URL?>/routerClient.php?atc=sanpham">Tất cả sản
                                            phẩm</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-product.html">Giày Thể
                                            Thao</a></li>
                                    <li class="nav-item"><a class="nav-link" href="checkout.html">Giày Bóng Đá</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="cart.html">Giày Bóng Rổ</a></li>
                                    <li class="nav-item"><a class="nav-link" href="confirmation.html">Giày Cầu
                                            long</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="./index.php?atc=chitiet-sp" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Trang</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?=$ROOT_URL?>/routerClient.php?atc=gioithieu">Giới thiệu</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?=$ROOT_URL?>/routerClient.php?atc=chinhsach">Chính sách</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?=$ROOT_URL?>/routerClient.php?atc=gopy">Góp ý</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="<?=$ROOT_URL?>/routerClient.php?atc=giohang" class="nav-link"><i class="fa-solid fa-bag-shopping"></i> Giỏ hàng</a></li>
                        </ul>
                        <!-- <ul class="nav navbar-nav navbar-right ">
                            
                        </ul> -->
                        <ul class='nav navbar-nav menu_nav ml-auto'>
                            <li class="nav-item submenu ">
                                <a class="nav-link" >
                                    <img src="<?=$UPLOAD_IMG_URL?>/images-logo/logo 50x (1).png" alt="" width="30px"
                                        height="30px">
                                    <span>
                                        Admin
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?=$ROOT_URL?>/routerClient.php?atc=quanly-tk">Quản lý tài khoản</a></li>
                                    
                                    <li class="nav-item"><a class="nav-link" href="#">Đăng xuất</a></li>
                                </ul>
                                <!-- <a href="<?=$ROOT_URL?>/routerClient.php?atc=login" class="genric-btn danger-border circle">Đăng nhập</a> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>