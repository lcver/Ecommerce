<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author Lcver
 */
class database {
    
    public function __construct() {
        $this->conn = mysqli_connect('localhost', 'root', '', 'maujualan');
    }
    
    public function insertData($table,$field=[]){
        $wrap_keys=[];
        foreach ($field as $key => $value) {
            if(!is_int($value)){
                $wrap_keys[] = "'".$value."'";
            }else{
                $wrap_keys[] = $value;
            }
        }
        $value = implode(",", $wrap_keys);
        $column = implode(",", array_keys($field));
        $sql = "insert into $table ($column) values ($value)";
        //print_r($sql);  // checking sql
        //die();
        $query = mysqli_query($this->conn, $sql);
    }
    
    public function readData($table,$key,$value,$key2='',$value2=''){
        
        if($key == '' && $value == ''){
            $sql = "select * from $table";
            //print_r($sql);  // checking sql
            //die();
            $query = mysqli_query($this->conn, $sql);
            
                while($data = mysqli_fetch_array($query)){
                    $result[] = $data;
                }
                return $result;
        }else{
            if(!empty($key2) && !empty($value2)){
                $sql = "select * from $table where $key = '$value' and $key2 = '$value2' ";
                //print_r($sql);  // checking sql
                //die();
                $query = mysqli_query($this->conn, $sql);
                while($data = mysqli_fetch_array($query)){
                    $result[] = $data;
                }
                return $result;
            } else{
                $sql = "select * from $table where $key = '$value'";
                //print_r($sql);  // checking sql
                //die();
                $query = mysqli_query($this->conn, $sql);
                $data = mysqli_fetch_array($query);
                return $data;
            }
        }
        
    }
    
    public function updateData($table,$field=[],$idField,$idData){
        $wrap_keys=[];
        foreach ($field as $key => $value) {
            if(!is_int($value)){
                $wrap_keys[] = $key."='".$value."'";
            }else{
                $wrap_keys[] = $key."=".$value;
            }
        }
        $value = implode(",", $wrap_keys);
        $sql = "update $table set $value where $idField = '$idData'";
        //print_r($sql);  // checking sql
        //die();
        $query = mysqli_query($this->conn, $sql);
    }
    
    public function deleteData($table, $key, $value){
        $sql = "delete from $table where $key = '$value'";
        //print_r($sql);  // checking sql
        //die();
        $query = mysqli_query($this->conn, $sql);
    }
    
}
$db = new database();