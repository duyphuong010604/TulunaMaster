<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Đăng nhập/Đăng ký</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Đăng nhập <span class="lnr lnr-arrow-right"></span></a>
                    <a href="">Quên mật khẩu</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area section_gap ">
    <div class="container ">
        <div class="row">
            <div class="col-md-8 mx-auto col-12">
                <div class="login_form_inner">
                    <h3>Quên mật khẩu</h3>
                    <form class="row login_form mb-5" action="<?= $CONTROLLER_URL?>/client/index.php?atc=quenmatkhau" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="username" placeholder="Tên tài khoản"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                                <?php  if (isset($errors['username']))    
                                    echo "<br><span class='text-star' style='color: red;'>" . $errors['username'] . "</span><br>"; ?>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="email" placeholder=" Email"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                                <?php  if (isset($errors['email']))    
                                    echo "<br><span class='text-star' style='color: red;'>" . $errors['email'] . "</span><br>"; ?>
                        </div>

                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn" name="quenmatkhau">Lấy lại mật khẩu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->