<?php include '../config/init.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include '../CSSstyle/index.php' ?>
        <title>Register</title>
    </head>
    <body>
        <?php include '../views/heading_views.php' ?>
        
        <div class="container">
            <div class="col-md-6 col-md-offset-3 regist-box">
                <form action="<?= $base_url ?>function/users.php" method="post">
                    <h3>Sign up</h3>
                    <div class="form-group">
                        <input type="text" name="nama_user" placeholder="Nama Lengkap" class="form-control">
                        <input type="text" name="username_user" placeholder="Username" class="form-control">
                        <input type="password" name="password_user" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-inline">
                        <button class="btn btn-primary" type="submit" name="regist-data-user">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
    
    <?php include '../JSscript/index.php' ?>
</html>
