<?php include '../config/init.php'; require '../classes/users.php';
    $error='';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php include '../CSSstyle/index.php' ?>
        <title>Keranjang | Maujual</title>
    </head>
    <body>
        <?php include '../views/heading_views.php' ?>
        
        <div class="container-fluid">
            <div class="col-lg-7 cart-list">                
                <?php
                    $datas=$users_class->readKeranjang($_SESSION['idUser']);
                    if($datas==NULL) : $error="Keranjang Kosong";
                    else:
                        foreach ($datas as $x):
                ?>
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <img class="img-thumbnail" src="../assets/product-image/<?= $x['gambar_product'] ?>">
                            </div>
                            <div class="col-md-3">
                                <h4><b><?= $x['nama_product'] ?></b></h4>
                            </div>
                            <div class="col-md-3">
                                <p>Rp <?= number_format($x['harga_product'], '0', '.','.'); ?></p>
                            </div>
                            <div class="col-md-2">
                                <form action="../function/users.php" method="post">
                                    <input type="text" name="idP" value="<?= $x['id_product'] ?>" hidden="hidden">
                                    <button type="submit" name="reducing-product">-</button>
                                    <span><?= $x['jml_barang'] ?></span>
                                    <button type="submit" name="adding-product">+</button>
                                </form>
                            </div>
                            <div class="col-md-1">
                                <form action="../function/users.php" method="post">
                                    <input name="idBarang" value="<?= $x['id_product'] ?>" hidden="hidden">
                                    <button type="submit" name="delete-in-cart">hapus</button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <div class="col-md-8 col-md-offset-4">
                    <h1><?= $error ?></h1>
                </div>
                
            </div>
            <div class="col-md-4 col-md-offset-1 checkout-nav">
                <div class="col-md-12 top-checkout-nav">
                    <?php //if($datas!=NULL):
//                        foreach ($datas as $x) :
//
//                            $total = $users_class->totalPrice($x['harga_product'],$x['jml_barang']);
//                            var_dump($total);
                        
//                        endforeach;
//                    else:  
//                        $total=0;
//                    endif;
                    $sql = "select * from tb_troli A JOIN tb_product B where a.id_user = $_SESSION[idUser] AND b.id_product = a.id_product";
                    $result = mysqli_query($users_class->conn, $sql);
                    $total=0;
                    while ($d=mysqli_fetch_array($result)) {
                        $subtotal = $d['harga_product'] * $d['jml_barang'];
                        $total = $subtotal + $total;
                    }
                    
                    ?>
                    <p>Total : <span>Rp <?= number_format($total, '0', '.','.'); ?></span></p>
                </div>
                <div class="col-md-12 bottom bottom-checkout-nav">
                    <button class="btn btn-success">CheckOut</button>
                </div>
            </div>
        </div>
        
        <?php include '../JSscript/index.php' ?>
    </body>
</html>
