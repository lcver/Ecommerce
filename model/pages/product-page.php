<?php include '../config/init.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Black Diamond | Maujual</title>
        <?php include '../CSSstyle/index.php' ?>
    </head>
    <body>
        <?php include '../views/navigasi-header-view.php' ?>
        
        <div class="product-page-wrapper">
            <div class="product-page">
                <div class="product-image">
                    <img class="img-thumbnail" src="../assets/img/pict3.jpg">
                </div>
                <div class="product-desc">
                    <div class="product-title">Brown Mountain</div>
                    <div class="product-price">
                        <div class="before">
                            <span class="currency">Rp</span>
                            <span class="price">50.000.000</span>
                        </div>
                        <div class="after">
                            <span class="currency">Rp</span>
                            <span class="price">2.310.000</span>
                        </div>
                    </div>
                    <div class="product-quantity">
                        <label>Kuantitas</label>
                        <button>-</button>
                        <span>3</span>
                        <button>+</button>
                    </div>
                    <div class="product-add-to-cart">
                        <button class="buynow">Beli Sekarang</button>
                        <button class="addcart">Tambah ke Keranjang</button>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include '../views/navigasi-footer-view.php' ?>
        
        <?php include '../JSscript/index.php' ?>
    </body>
</html>
