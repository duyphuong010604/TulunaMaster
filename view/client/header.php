<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="<?= $ROOT_URL ?>/routerClient.php?act=home"><img src="<?= $UPLOAD_IMG_URL ?>/images-logo/TULUNA PK.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    
                    <form class="d-flex" action="<?= $ROOT_URL ?>/routerClient.php?act=timkiemsanpham" method='post'>
                        <input class="genric-btn border circle" type="search" placeholder="Tìm kiếm &amp; nhấn enter" name='search'>
                        
                    </form>
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item "><a class="nav-link" href="<?= $ROOT_URL ?>/routerClient.php?act=home">Trang chủ</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="<?= $ROOT_URL ?>/routerClient.php?act=sanpham">Tất cả sản
                                        phẩm</a></li>
                                        <?php
                                        $categoryList = $category->get_list_client();
                                        foreach($categoryList as $categoryRow):
                                            extract($categoryRow);
                                        ?>
                                <li class="nav-item"><a class="nav-link" href="<?= $ROOT_URL ?>/routerClient.php?act=sanphamtheomuc&categoryId=<?=$categoryId?>"><?=$name?>
                                        Thao</a></li>
                                        <?endforeach;?>
                               
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="./index.php?act=chitiet-sp" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Trang</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="<?= $ROOT_URL ?>/routerClient.php?act=gioithieu">Giới thiệu</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?= $ROOT_URL ?>/routerClient.php?act=chinhsach">Chính sách</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?= $ROOT_URL ?>/routerClient.php?act=gopy">Góp ý</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="<?= $ROOT_URL ?>/routerClient.php?act=giohang" class="nav-link"><i class="fa-solid fa-bag-shopping"></i> Giỏ hàng</a></li>
                    </ul>
                    <!-- <ul class="nav navbar-nav navbar-right ">
                            
                        </ul> -->
                    <ul class='nav navbar-nav menu_nav ml-auto'>
                        <li class="nav-item submenu dropdown ">
                            <?php if (isset($_SESSION['userId'])) : ?>
                                <a class="nav-link">
                                    <?php
                                    $userList = $user->getByuserId($_SESSION['userId']);
                                    extract($userList);
                                    ?>
                                    <?php if (isset($image)) : ?>
                                        <img src="<?= $UPLOAD_IMG_URL ?>/users/<?= $image ?>" alt="user-avatar" width="30px" height="30px">
                                    <?php else : ?>
                                        <img src="<?= $UPLOAD_IMG_URL ?>/users/matdinh.jpg" alt="user-avatar" width="30px" height="30px" />
                                    <?php endif; ?>
                                    
                                    <span>
                                        <?= $_SESSION['username'] ?>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?= $ROOT_URL ?>/routerClient.php?act=quanly-tk">Quản lý tài khoản</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="<?= $ROOT_URL ?>/routerClient.php?act=lichsu">Lịch sử đặt hàng</a>
                                    </li>

                                    <li class="nav-item"><a class="nav-link" href="<?= $ROOT_URL ?>/routerClient.php?act=dangxuat">Đăng xuất</a></li>
                                </ul>
                            <?php else : ?>
                                <a href="<?= $ROOT_URL ?>/routerClient.php?act=login" class="genric-btn danger-border circle">Đăng nhập</a>
                            <? endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</header>