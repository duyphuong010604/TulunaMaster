<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Đăng nhập/Đăng ký</h1>
                <nav class="d-flex align-items-center">
                    <a href="#">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Đăng ký</a>
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
                <div class="login_form_inner">
                    <h3>Đăng kí</h3>
                    <form class="row login_form" action="<?= $ROOT_URL?>/routerClient.php?act=register" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="username" placeholder="Tên tài khoản"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'username'">
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
                                <label for="f-option2">Đồng ý với điều khoản*</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn" name="dangki">Đăng kí</button>
                            <?php  if (isset($Note['message']))    
                                    echo "<br><span class='text-star' style='color: red;'>" . $Note['message'] . "</span><br>"; ?>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="<?=$CONTENT_URL?>/client/img/login.jpg" alt="">
                    <div class="hover">
                        <p>Đăng nhập nếu quý khách đã có tài khoản từ trước</p>
                        <a class="primary-btn" href="<?= $ROOT_URL?>/routerClient.php?act=login">Đăng nhập</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->