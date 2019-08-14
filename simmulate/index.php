<?php require 'config/init.php'; ?>
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
        <title></title>
    </head>
    <body>
       
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">MauJual</a>
                </div>
                <div class="navbar-right">
                    <?php if(!isset($_SESSION['WHOIS'])): ?>
                    <p class="navbar-text" ><a href="page/login.php" class="navbar-link">login</a></p>
                    <?php else : ?>
                    <p class="navbar-text"><?= $_SESSION['WHOIS'] ?> | <a href="page/logout.php" class="navbar-link">logout</a></p>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            
            <div class="produk-bag-one bg-info ">
                <div class="container-fluid">
                    <h3>Product</h3>
                    <table>
                            <tr class="row">
                                <?php $i=0; while($i < 6) : $i++;?>
                                <td class="col-md-2">
                                    <div class="image-product">
                                        <img class="img-thumbnail" src="assets/img/pict<?= $i ?>.jpg">
                                    </div>
                                    <div class="brand-product">
                                        <h5>
                                            Chess On board (FREE 3 QUEEN FOR 200 FIRST)
                                        </h5>
                                    </div>
                                    <div class="price-product">
                                        <p>Rp 2000.000</p>
                                    </div>
                                </td>
                                <?php endwhile; ?>
                            </tr>
                            <tr class="row">
                                <?php $i=5; while($i < 11) : $i++;?>
                                <td class="col-md-2">
                                    <div class="image-product">
                                        <img class="img-thumbnail" src="assets/img/pict<?= $i ?>.jpg">
                                    </div>
                                    <div class="brand-product">
                                        <h5>
                                            Chess On board (FREE 3 QUEEN FOR 200 FIRST)
                                        </h5>
                                    </div>
                                    <div class="price-product">
                                        <p>Rp 2000.000</p>
                                    </div>
                                </td>
                                <?php endwhile; ?>
                            </tr>
                    </table>
                </div>
            </div>
        
        </div>
        
        
        <?php include 'JSscript/index.php'; ?>
    </body>
</html>
