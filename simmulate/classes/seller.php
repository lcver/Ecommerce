<?php require 'database.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of seller
 *
 * @author Lcver
 */

class seller extends database{
    
    public function addProduct(){
             $name = $_POST['nama_produk'];
        $desc = $_POST['deskripsi_produk'];
            $price= $_POST['harga_produk'];
        
        $nama_file  = $_FILES['gambar_produk']['name']; // img adalah name dari tombol input pada form
        $file_tmp   = $_FILES['gambar_produk']['tmp_name']; // Membuat file upload temporary/ sementara
        $location   = 'C:\xampp\htdocs\eCommerce\simmulate\assets\product-image\\'.$nama_file;
        $data = array(
                    'nama_product' => $name,
                    'deskripsi_product' => $desc,
                    'gambar_product' => $nama_file,
                    'harga_product' => $price
                );
        if(move_uploaded_file($file_tmp, $location)){
//            print_r($data);
            $this->insertData('tb_product', $data);
        }else{
//            print_r($data);
        }
    }
    
    public function editProduct(){
                 $key = $_POST['id_produk'];
             $name = $_POST['nama_produk'];
            $price= $_POST['harga_produk'];
          $last_file = $_POST['last_pict'];
        $desc = $_POST['deskripsi_produk'];
        
        $file_tmp   = $_FILES['gambar_produk']['tmp_name']; // Membuat file upload temporary/ sementara
        $nama_file  = $_FILES['gambar_produk']['name']; // img adalah name dari tombol input pada form
        $location   = 'C:\xampp\htdocs\eCommerce\simmulate\assets\product-image\\';
//        if(unlink($pict)){
        if ($nama_file != '') {
            $file = $location.$last_file;
            if(unlink($file)){
                $file = $location.$nama_file;
                if(move_uploaded_file($file_tmp, $file)){
                    $data = array(
                        'nama_product' => $name,
                        'deskripsi_product' => $desc,
                        'gambar_product' => $nama_file,
                        'harga_product' => $price
                    );
                    echo $this->updateData('tb_product',$data,'id_product',$key);
                }
            }
        }else{
            $data = array(
                    'nama_product' => $name,
                    'deskripsi_product' => $desc,
                    'gambar_product' => $last_file,
                    'harga_product' => $price
                );
            $this->updateData('tb_product',$data,'id_product',$key);
        }
    }
    
    public function delProduct($value, $pict){
        $file = 'C:\xampp\htdocs\eCommerce\simmulate\assets\product-image\\'.$pict;
        unlink($file);
        $this->deleteData('tb_product','id_product',$value);
    }
    
    public function nameProduct($string){
        $c = array (' ');
        $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
        $string = str_replace($d, '', $string); // Hilangkan karakter yang telah disebutkan di array $d
        $string = strtolower(str_replace($c, '-', $string)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
        return $string;
    }
    

}

$seller_class = new seller();