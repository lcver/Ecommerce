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
        //var_dump($query); // checking query
    }
    
    public function readData($table,$key,$value,$key2='',$value2=''){
        
        if($key == '' && $value == ''){
            $sql = "select * from $table";
            //print_r($sql);  // checking sql
            //die();
            $query = mysqli_query($this->conn, $sql);
            
                while($data = mysqli_fetch_array($query)){
                    $result[] = $d;
                }
                return $result;
        }else{
            if(!empty($key2) && !empty($value2)){
                $sql = "select * from $table where $key = '$value' and $key2 = '$value2' ";
                //print_r($sql);  // checking sql
                //die();
                $query = mysqli_query($this->conn, $sql);
                $data = mysqli_fetch_array($query);
                return $data;
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
    
    private function updateData(){
        
    }
    
    private function deleteData(){
        
    }
    
}