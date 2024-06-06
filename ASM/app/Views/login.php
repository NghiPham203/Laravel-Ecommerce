<!-- <form action="" method="post">
        <div class="boxcenter">
                <?php if(isset($_SESSION['canhbao'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?=$_SESSION['canhbao']?>
                    </div>
                <?php endif; unset($_SESSION['canhbao']); ?>
                <h1><a href="">Đăng Nhập</a></h1>
                <form action="">
                    <div class="form-input">
                        <div class="form__login">
                            <input type="text" name="Email" id="Email" placeholder="Nhập email của bạn!"><i class="fa-regular fa-envelope" style="color: #7FAD39;"></i>
                        </div>
                        <div class="form__login">
                            <input type="password" name="MatKhau" id="MatKhau" placeholder="Nhập mật khẩu"><i class="fa-solid fa-lock" style="color: #7FAD39;"></i>
                        </div>
                        
                    <input type="submit"  onclick="return kiemtra_dn()" value="Đăng nhập" class="submit">
                    </div>
                </form>
                <div id="alert-login" class="baoloi_dangky" ></div>
                <div class="form-bot-1">
                    <a href="">Quên mật khẩu</a>
                </div>
                <div class="form-bot-2">
                    <a href="index.php?route=register" class="chtk">Chưa có tài khoản?</a><a href="index.php?route=registe">Đăng kí tại khoản</a>
                </div>
                <?php if(isset($_SESSION['loi'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?=$_SESSION['loi']?>
                    </div>
                <?php endif; unset($_SESSION['loi']); ?>
        </div>
    </form> -->