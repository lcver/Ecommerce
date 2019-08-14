<?php

require '../classes/users.php';

if (isset($_POST['sign-data-user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $data = array(
        'username_user' => $username,
        'password_user' => $password);
    
    $users_class->signin_user($data);
    if($notification != false): header('Location:../index.php'); endif;
}