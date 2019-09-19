<?php include '../config/init.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--link css-->
        <?php include '../CSSstyle/index.php' ?>
        <title>Maujual</title>
    </head>
    <body>
        <!--navigasi header-->
        <?php include '../views/navigasi-header-view.php'; ?>
        
        <div class="sign-field-wrapper">
            <div class="left-field">
                
                <div class="field-form">
                    <form>
                        <div class="user-form">
                            <label>Username</label>
                            <input type="text">
                        </div>
                        <div class="pass-form">
                            <label>Kata sandi</label>
                            <input type="text">
                        </div>
                        <div class="pass-form">
                            <label>Konfirmasi kata sandi</label>
                            <input type="text">
                        </div>
                    </form>
                </div>
            </div>
            <div class="right-field">
                <div class="field-form">
                    <div class="name-form">
                        <label>Nama Lengkap</label>
                        <input type="text">
                    </div>
                    <div class="submit-form">
                        <button>Daftar</button>
                    </div>
                </div>
                <div class="other-regist-label">
                    <span>Daftar dengan</span>
                </div>
                <div class="other-regist">
                    <div class="sign-facebook regist">
                        <span>
                            <i class="icofont-facebook"></i>
                        </span>
                        <button>Facebook</button>
                    </div>
                    <div class="sign-googlep regist">
                        <span>
                            <i class="icofont-google-plus"></i>
                        </span>
                        <button>Google+</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!--navigasi footer-->
        <?php include '../views/navigasi-footer-view.php' ?>
        
        <!--script-->
        <?php include '../JSscript/index.php' ?>
    </body>
</html>
