<?php require '../config/init.php'; require '../classes/users.php';

    if(isset($_POST['regist-data-user'])){
        $nama = $_POST['nama_user'];
        $user = $_POST['username_user'];
        $pass = $_POST['password_user'];
        
        $data = array(
            'nama_user'     => $nama,
            'username_user' => $user,
            'password_user' => $pass
        );
        $notification = $users_class->signup_user($data);
        
    }
    elseif(isset($_POST['sign-data-user'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data = array(
            'username_user' => $username,
            'password_user' => $password);
        $notifikasi = $users_class->signin_user($data);
        if($notifikasi == ''): header('Location:'.$base_url.'index.php');
        else: 
            echo $notifikasi;
        endif;
    }
    elseif(isset($_POST['add-to-cart'])){
        if($_POST['idU']==0): header('Location:'.$base_url.'page/login_page.php');
            else:
            $idP = $_POST['idP'];
            $idU = $_POST['idU'];
            $users_class->addOrder($idP,$idU);
            header('Location:'.$base_url.'page/product_page.php?idProduct='.$idP);
        endif;
    }
    elseif(isset($_POST['delete-in-cart'])){
        $id = $_POST['idBarang'];
        $users_class->deleteOrder($id);
        header('Location:'.$base_url.'page/cart_page.php');
    }
    elseif(isset($_POST['reducing-product'])){
        $id = $_POST['idP'];
        $users_class->totalingProduct($id,'m1');
        header('Location:'.$base_url.'page/cart_page.php');
    }
    elseif(isset($_POST['adding-product'])){
        $id = $_POST['idP'];
        $users_class->totalingProduct($id,'p1');
        header('Location:'.$base_url.'page/cart_page.php');
    }