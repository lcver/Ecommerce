<?php
session_start();

//$_SESSION['WHOIS'] = '';
//unset($_SESSION['WHOIS']);
session_unset();
session_destroy();
header('Location:../index.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

