<main class="mt-5 mb-5 ">
    <div class="row mx-auto ">
        <div class="col-md-4 col-sm-8 mx-auto p-5 backgound-login border border-info rounded ">
            <div class="row mb-3">
                <div class="top-image col-12 d-flex justify-content-center align-items-center">
                    <img src="<?= $UPLOAD_IMG_URL ?>/images-logo/ADMIN.png" alt="">
                    <p class='ms-2 text-login-admin'>
                        Đăng nhập
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <form method="post" action="<?=$ROOT_URL?>/routerAdmin.php?pg=dangnhap">

                        <div class="mb-3">
                            <label for="username" class="form-label">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="username" name="username">
                            <?php
                            if (isset($errors['username']))
                                echo "<br><span style='color: red;'>" . $errors['username'] . "</span><br>"; ?>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <?php
                            if (isset($errors['password']))
                                echo "<br><span style='color: red;'>" . $errors['password'] . "</span><br>"; ?>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="dongy" name="dongy">
                            <label class="form-check-label" for="dongy">Đồng ý với điều khoản</label>
                            <?php
                            if (isset($errors['dongy']))
                                echo "<br><span style='color: red;'>" . $errors['dongy'] . "</span><br>"; ?>
                        </div>
                        <div class="button-login">
                            <a href="<?= $ROOT_URL ?>/routerAdmin.php?pg=quenmatkhau"><button type="submit" class="btn btn-primary" name="quenmatkhau">Quên mật khẩu</button></a>
                            <button type="submit" class="btn btn-success" name="dangnhap">Đăng nhập</button>
                        </div>
                        <?php
                        if (isset($Note['message']))
                            echo "<br><span style='color: red;'>" . $Note['message'] . "</span><br>"; ?>
                    </form>
                    
                </div>

            </div>
        </div>
    </div>
</main>