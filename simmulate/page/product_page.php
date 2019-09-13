<?php include '../config/init.php'; require '../classes/database.php';
if(!isset($_GET['idProduct'])): header('Location:'.$base_url.'index.php');
else:   
    $id = $_GET['idProduct'];
    $x=$db->readData('tb_product','id_product',$id);
//    var_dump($datas);die();    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php include '../CSSstyle/index.php' ?>
        <title><?=$x['nama_product']; ?> | Maujual</title>
    </head>
    <body>
        <?php include '../views/heading_views.php' ?>
        <div class="container">
            <div class="row box-product-page">
                <div class="col-md-4">
                    <img class="img-thumbnail" src="../assets/product-image/<?= $x['gambar_product'] ?>" >
                </div>
                <div class="col-md-4 product">
                        <h1><?= $x['nama_product'] ?></h1>
                        <p>Rp. <?= number_format($x['harga_product'], '0', '.','.') ?></p>
                        <form action="../function/users.php" method="post">
                            <input name="idP" value="<?= $_GET['idProduct'] ?>" hidden="hidden">
                            <input name="idU" value="<?= $_SESSION['idUser'] ?>" hidden="hidden">
                            <button class="btn btn-success" disabled="disabled">Beli Sekarang</button>
                            <button class="btn btn-primary" name="add-to-cart">Tambah ke Keranjang</button>
                        </form>
                    <div class="deskripsi-product">
                        <h3>Deskripsi:</h3>
                        <p><?= $x['deskripsi_product'] ?></p>
                    </div>
                </div>
                <?php if(isset($_SESSION['status_lvl'])) : if($_SESSION['status_lvl']==2): ?>
                <div class="col-md-4">
                    <a href="edit_product_page.php?idPrdct=<?= $x['id_product'] ?>" class="btn btn-primary">Edit Barang</a>
                    <a name="del-data-product" href="../function/seller.php?idPrdct=<?= $x['id_product'] ?>&pict=<?= $x['gambar_product'] ?>" class="btn btn-danger" >Hapus</a>
                </div>
                <?php endif; endif; ?>
            </div>
        </div>
        
        
        <?php include '../JSscript/index.php' ?>
    </body>
</html>
<?php endif; ?>