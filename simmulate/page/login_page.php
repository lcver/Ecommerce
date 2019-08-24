<?php       require '../config/init.php';     require '../classes/users.php';

if(!isset($notifikasi)):$notifikasi = ''; endif;
if (isset($_POST['sign-data-user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $data = array(
        'username_user' => $username,
        'password_user' => $password);
    $notifikasi = $users_class->signin_user($data);
//    if($notification == ''): header('Location:'.$base_url.'index.php'); endif;
    if(!isset($_SESSION['WHOIS'])){
//        header('Location:'.$base_url.'index.php');
        echo "gagal login";
    }else{
        if(!isset($_SESSION['status_lvl'])){
            echo 'tidak ada status';
        }else{
            if ($_SESSION['status_lvl']==1) : header('Location:'.$base_url.'index.php');
                elseif ($_SESSION['status_lvl']==2) : header('Location:'.$base_url.'page/seller_page.php');
                    endif;
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php include '../CSSstyle/index.php' ?>
        <title>login</title>
    </head>
    <body>
        <div class="container">
            <div class="col-md-4 col-lg-offset-4 login-box">
                <form action="" method="post">
                    <h3>Sign in</h3>
                    <span class="notifikasi" ><?= $notifikasi  ?></span>
                    <div class="form-group">
                        <input type="text" name="username" placeholder="username" class="form-control">
                        <input type="password" name="password" placeholder="password" class="form-control">
                    </div>
                    <div class="form-inline">
                        <button class="btn btn-primary" type="submit" name="sign-data-user">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
        <?php include '../JSscript/index.php'; ?>
    </body>
</html>
