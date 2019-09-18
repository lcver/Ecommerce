<?php include '../config/init.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--link css-->
        <?php include '../CSSstyle/index.php' ?>
        <title>Maujual | Models</title>
    </head>
    <body>
        <!--navigasi header-->
        <?php include '../views/navigasi-header-view.php'; ?>
        
        <div class="sign-field-wrapper">
            <div class="left-field">
                <div class="field-form">
                    <form>
                        <div class="user-form">
                            <label>Email atau Username</label>
                            <input type="text">
                        </div>
                        <div class="pass-form">
                            <label>Password</label>
                            <input type="password">
                        </div>
                        <div class="submit-form">
                            <button>Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="right-field">
                <div class="other-sign">
                    <div class="sign-facebook sign">
                        <span>
                            <i class="icofont-facebook"></i>
                        </span>
                        <button>Sign with Facebook</button>
                    </div>
                    <div class="sign-googlep sign">
                        <span>
                            <i class="icofont-google-plus"></i>
                        </span>
                        <button>Sign with Google+</button>
                    </div>
                </div>
                <div class="account-detail">
                    <span class="create-account">Belum punya akun? <a href="">Buat akun</a></span>
                    <span class="forgot-password"><a href="">lupa password?</a></span>
                </div>
            </div>
        </div>
        
        <!--navigasi footer-->
        <?php include '../views/navigasi-footer-view.php' ?>
        
        <!--script-->
        <?php include '../JSscript/index.php' ?>
    </body>
</html>
