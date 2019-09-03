<?php include '../config/init.php'; require '../classes/database.php';

if(!isset($_SESSION['status_lvl'])==2){
    header('Location'.$base_url.'index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Seller Page</title>
        <?php include '../CSSstyle/index.php'; ?>
    </head>
    <body>        
        <?php include '../views/heading_views.php' ?>
        <div class="container">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modal-add" >Tambah Barang</button>
            <div class="list-product">
                <h3>Daftar Barang Jualan</h3>
                
                <?php $i=0; $datas=$db->readData('tb_product','',''); foreach ($datas as $x): ?>
                
                    <div class="col-md-3">
                        <a href="<?= $base_url ?>page/product_page.php?idProduct=<?= $x['id_product'] ?>">
                            <div class="box-product">
                                <div class="image-product">
                                    <img class="img-thumbnail" src="../assets/product-image/<?= $x['gambar_product'] ?>">
                                </div>
                                <div class="brand-product">
                                    <h5><?= $x['nama_product'] ?></h5>
                                </div>
                                <div class="price-product">
                                    <p>Rp. <?= number_format($x['harga_product'], '0', '.','.'); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                
                <?php endforeach; ?>
            </div>
        </div>
        <?php include '../views/modal.php' ?>
        <?php include '../JSscript/index.php' ?>
    </body>
</html>

