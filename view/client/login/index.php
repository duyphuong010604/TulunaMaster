

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Đăng nhập/Đăng ký</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Đăng nhập</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Login Box Area =================-->
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="<?=$CONTENT_URL?>/client/img/login.jpg" alt="">
                        <div class="hover">
                            <p>Đăng ký tài khoảng để có thể mua hàng một cách nhanh chóng!</p>
                            <a class="primary-btn" href="../../view/client/index.php?atc=register">Tạo tài khoản</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Đăng Nhập</h3>
                        <form class="row login_form" action="<?= $CONTROLLER_URL?>/client/index.php?atc=login" method="post" id="contactForm"
                            novalidate="novalidate">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="username"
                                    placeholder="Tên tài khoản" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Username'">
                                    <p class='text-star'><?php  if (isset($errors['username']))    
                                    echo "<br><span  style='color: red;'>" . $errors['username'] . "</span><br>"; ?></p>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="password" placeholder="Mật khẩu"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                                    <?php  if (isset($errors['password']))    
                                    echo "<br><span class='text-star' style='color: red;'>" . $errors['password'] . "</span><br>"; ?>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="dongy">
                                    <?php  if (isset($errors['dongy']))    
                                    echo "<br><span class='text-star' style='color: red;'>" . $errors['dongy'] . "</span><br>"; ?>
                                    <label for="f-option2">Đồng ý với điều khoản</label>

                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn" name='dangnhap'>Đăng Nhập</button>
                                <a href="../../view/client/index.php?atc=quenmatkhau">Quên mật khẩu?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->

    