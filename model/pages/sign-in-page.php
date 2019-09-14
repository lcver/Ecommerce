<?php include '../config/init.php' ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--link css-->
        <?php include '../CSSstyle/index.php' ?>
        <title>Maujual | Models</title>
    </head>
    <body>
        <!--navigasi header-->
        <?php include '../views/navigasi-header-view.php'; ?>
        
        <div class="signin-fieldbox-wrapper">
            <div class="signin-fieldbox">
                <div class="signin-top">
                    <span>Masuk</span>
                </div>
                <div class="signin-form">
                    <form>
                        <div class="signin-user">
                            <label for="user-id">
                            <i class="icofont-user"></i>
                            <input type="text" placeholder="Email or Username" id="user-id">
                            </label>
                        </div>
                        <div class="signin-password">
                            <label for="user-password">
                            <i class="icofont-lock"></i>
                            <input type="password" placeholder="Password" id="user-password">
                            </label>
                        </div>
                        <div class="signin-submit">
                            <button>Masuk</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        
        <!--navigasi footer-->
        <?php include '../views/navigasi-footer-view.php' ?>
        
        <!--script-->
        <?php include '../JSscript/index.php' ?>
    </body>
</html>
