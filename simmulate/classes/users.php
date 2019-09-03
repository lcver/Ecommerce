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
                        $this->insertData('tb_users',$data_account);
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
        $username = $this->readData('tb_users', 'username_user', $field['username_user']);
        $password = $this->readData('tb_users', 'password_user',$field['password_user']);
        if(!empty($username)){
            if(!empty($password)){
                $_SESSION['idUser'] = $username['id_user'];
                $_SESSION['status_lvl'] = $username['id_level'];
                $_SESSION['WHOIS'] = $username['username_user'];
                $notification = "";
            }else{
                $notification = "Password incorect";
            }
        }else{
            $notification = "Username is not registered";
        }
        return $notification;
    }
    
    public function addOrder($idProduct,$idUser,$jml=1){
        $pack = array(
                    'id_product' => $idProduct,
                    'id_user'    => $idUser,
                    'jml_barang' => $jml
                );
        $check = $this->readData('tb_troli', 'id_product', $idProduct);
        if($check['jml_barang'] > 0){
            $jml = $check['jml_barang'] +=1;
            $pack = array(
                    'id_product' => $idProduct,
                    'id_user'    => $idUser,
                    'jml_barang' => $jml
                );
            $this->updateData('tb_troli', $pack, 'id_product', $idProduct);
            $notif = "update";
        }else{
            $this->insertData('tb_troli',$pack);
            $notif = "nambah";
        }
        return $notif;
    }
    
    public function totalingProduct($id,$code){
        $d = $this->readData('tb_troli', 'id_product', $id);
            if($code=='m1'){
                if($d['jml_barang'] == 1 || $d['jml_barang'] < 1){
                    $this->deleteData('tb_troli','id_product',$id);
                }else{
                    $data = array(
                            'id_product' => $d['id_product'],
                            'id_user'    => $d['id_user'],
                            'jml_barang' => $d['jml_barang'] -= 1
                        );
                }
            }
            else if($code=='p1'){
                $data = array(
                            'id_product' => $d['id_product'],
                            'id_user'    => $d['id_user'],
                            'jml_barang' => $d['jml_barang'] += 1
                        );
            }
            $this->updateData('tb_troli', $data, 'id_product', $id);
    }
    
    public function deleteOrder($value){
        $this->deleteData('tb_troli','id_product',$value);
    }
    
    public function readKeranjang($idUser){
        $dataTroli=$this->readData('tb_troli','id_user',$idUser);
        if($dataTroli<>NULL){
            $result=$this->joinData('tb_troli','tb_product','id_user',$idUser,'id_product','id_product');
        }else{
            $result = NULL;
        }
        return $result;
    }
    public function totalPrice($price,$amount){
        $total=0;
        $subTotal = $price * $amount;
        $total = $subTotal + $total;
        var_dump($total);
        return $total;
    }
}
$users_class = new users();