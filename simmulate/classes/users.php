<?php
 require 'database.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users
 *
 * @author Lcver
 */

class users extends database {
    public $notification="";
      
    public function signup_user($field=[]){
        $count = count($field);
        $data_account = $field;
//        $value = implode(",", $data_acccount);
//        $key = implode(",", array_keys($data_account));
        
            if($count != 0 ){
                if(!empty($data_account['username_user'])){
                    if(!empty($data_account['password_user'])){
//                        $data = "keys = ".$key." values = ".$value;
//                        return print_r($data);
                        $this->insertData('dt_user',$data_account);
                    }else{
                        echo $notification = "Password is empty";
                        $notification = "Password is empty";
                    }
                }else{
                    echo $notification = "Username is empty";
                    $notification = "Username is empty";
                }
            }else{
                echo $notification = "Fill in the form";
                $notification = "Fill in the form";
            }
        return $notification;
    }
    
    public function signin_user($field=[]){
        $username = $this->readData('dt_user', 'username_user', $field['username_user']);
        $password = $this->readData('dt_user', 'password_user',$field['password_user']);
        if(!empty($username)){
            if(!empty($password)){
                $_SESSION['WHOIS'] = $username['username_user'];
                $notification = "";
            }else{
                echo $notification = "Password incorect";
                $notification = "Password incorect";
            }
        }else{
            echo $notification = "Username is not registered";
            $notification = "Username is not registered";
        }
        return $notification;
    }
    
}
$users_class = new users();