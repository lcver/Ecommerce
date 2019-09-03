<?php require '../config/init.php'; require '../classes/users.php';

    if (isset($_POST['sign-data-user'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data = array(
            'username_user' => $username,
            'password_user' => $password);

        $users_class->signin_user($data);
    //    if($notification != false): header('Location:../index.php'); endif;
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