<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_products extends CI_Model { //model "Model_products"
    
    public function all() //function dengan nama all
    {
        //query semua record di table products
        $hasil = $this->db->get('products2'); //memasukkan nilai variabel $hasil dari database/table "products2
        if($hasil->num_rows() > 0) //jika variabel "$hasil" mengakses menampilkan jumlah baris hasil dari query lebih besar dari 0 maka :->
        {
            return $hasil->result(); //mengembalikan nilai (return) dalam bentuk object array "result"
        } 
        else 
        {
            return array(); //mengembalikan nilai (return) dalam bentuk array
        }
    }
    
    public function find($id) //function dengan nama "find($id)"
    {
        //Query mencari record berdasarkan ID-nya
        $hasil = $this->db->where('id2', $id) //meng akses variabel default query primary no "$id" dari baris yang di klik untuk diedit
                          ->limit(1)
                          ->get('products2'); //mengambil data dari table "products2" yang diambil berdasarkan no baris variabel "$id" tadi
        if($hasil->num_rows() > 0) //jika variabel "$hasil" mengakses menampilkan jumlah baris hasil dari query lebih besar dari 0 maka :->
        {
            return $hasil->row(); //mengembalikan nilai berupa perbaris dari database
        } 
        else 
        {
            return array(); //mengembalikan nilai (return) dalam bentuk array
        }
    }
    
    public function create($data_products) //function dengan nama "create($data_products)"
    {
        //Query INSERT INTO
        $this->db->insert('products2', $data_products); //meng akses database lalu memasukkan data variabel-
        //                                             //-"$data_products" kedalam tabel "products2"
    }
    
    public function update($id, $data_products) //function dengan nama "update($id, $data_products)"
    {
        //Query UPDATE FROM ... WHERE id=...
        $this->db->where('id2', $id) //meng akses variabel default query primary "$id" sebagai nomor-
                 ->update('products2', $data_products); //-baris yang selanjutnya di perbaharui- 
                 //                                    //-oleh data dari variabel "$data_products" 
    }
    
    public function delete($id) //function dengan nama "delete($id)"
    {
        //Query DELETE ... WHERE id=...
        $this->db->where('id2', $id) //meng akses variabel default query primary "$id" sebagai nomor-
                 ->delete('products2'); //-baris yang selanjutnya di hapus pada delete tabel dari "products"
    }
}