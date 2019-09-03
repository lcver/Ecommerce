<?php require 'config/init.php'; require 'classes/users.php' ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php include 'CSSstyle/index.php'; ?>
        <title>Maujual</title>
    </head>
    <body>
       
        <?php include 'views/heading_views.php' ?>
        <div class="container-fluid produk-bag-one">
            <h3>Product</h3>
            <table>                        
                    <?php $i=0; $datas=$db->readData('tb_product','',''); foreach ($datas as $x): $i+=2 ?>
                        <div class="col-md-3 box-home-product">
                            <a href="<?= $base_url ?>page/product_page.php?idProduct=<?= $x['id_product'] ?>">
                                <div class="wrap-product">
                                    <div class="image-product">
                                        <img class="img-thumbnail" src="assets/product-image/<?= $x['gambar_product'] ?>">
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
            </table>
            </div>
        
        </div>
        
        
        <?php include 'JSscript/index.php'; ?>
    </body>
</html>
