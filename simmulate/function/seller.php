<?php require '../config/init.php'; require '../classes/seller.php';

    if(isset($_POST['send-data-product'])){
        $seller_class->addProduct(); echo "send" ;
        header('Location:'.$base_url.'page/seller_page.php');
    }
    
    elseif(isset($_GET['idPrdct'])){
        $seller_class->delProduct($_GET['idPrdct'], $_GET['pict']); echo "delete";
        header('Location:'.$base_url.'page/seller_page.php');
    }
    
    elseif(isset($_POST['edit-data-product'])){
        echo $seller_class->editProduct();
        header('Location:'.$base_url.'page/seller_page.php');
    }