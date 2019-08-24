<?php include '../config/init.php'; require '../classes/database.php';

if(!isset($_GET['idPrdct'])): header('Location:'.$base_url.'page/seller_page.php');
else:   
    $id = $_GET['idPrdct'];
    $x=$db->readData('tb_product','id_product',$id);
//    var_dump($datas);die();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>(edit product) <?=$x['nama_product']; ?> | Maujual</title>
        <?php include '../CSSstyle/index.php' ?>
    </head>
    <body>
        <?php include '../views/heading_views.php' ?>
        <div class="container">
            <form action="../function/seller.php" method="post" enctype="multipart/form-data" id="formUpdate">
                <div class="col-md-5">
                    <div class="row">
                        <img class="img-thumbnail" src="../assets/product-image/<?= $x['gambar_product'] ?>">
                    </div>
                    <div class="row">
                        <label for="file" >Ganti Gambar:</label>
                        <input type="text" name="last_pict" hidden value="<?= $x['gambar_product'] ?>">
                        <input id="file" type="file" name="gambar_produk" draggable="true">
                    </div>
                </div>
                <div class="col-md-7">
                    <input type="text" name="id_produk" value="<?= $x['id_product'] ?>" hidden>
                    <div class="edit-form">
                        <input type="text" class="form-control half-form" name="nama_produk" value="<?= $x['nama_product'] ?>">
                        <fieldset>
                            <span class="label-harga">Rp.</span>
                            <input type="text" class="form-control harga" name="harga_produk" value="<?= $x['harga_product'] ?>">
                        </fieldset>
                        <textarea name="deskripsi_produk" class="form-control" form="formUpdate"><?= $x['deskripsi_product']?></textarea>
                    </div>
                    <div class="edit-foot-btn">
                        <a class="btn btn-danger" href="product_page.php?idProduct=<?= $x['id_product'] ?>">Batal</a>
                        <button type="submit" name="edit-data-product" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
        
        
        <?php include '../JSscript/index.php' ?>
    </body>
</html>
<?php endif;  ?>