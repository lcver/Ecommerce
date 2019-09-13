<?php require 'config/init.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--link css-->
        <?php include 'CSSstyle/index.php' ?>
        <title>Maujual | Models</title>
    </head>
    <body>        
        <!--navigasi header-->
        <?php include 'views/navigasi-header-view.php'; ?>
        
        <!--slider-->
        <div class="sliding-pict-wrapper">
            <?php include 'views/carousel-slider-view.php' ?>
        </div>
        
        <!--navigasi category-->
        <?php include 'views/navigasi-category-view.php' ?>
        
        
        <!--product card-->
        <?php include 'views/product-card-view.php'; ?>
        
        <!--navigasi footer-->
        <?php include 'views/navigasi-footer-view.php' ?>
        
        <!--script-->
        <?php include 'JSscript/index.php' ?>
    </body>
</html>
