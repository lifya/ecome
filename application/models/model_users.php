<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Model_users extends CI_Model { //Model "Model_users"
    
    public function check_credential() //function "check_credential/pemeriksaan"
    {
        $username = set_value('username2'); //memasukkan variabel "$username" dari input kotak yang nama-
                                            //-"username2" pada form_login tadi
        $password = set_value('password2'); //memasukkan variabel "$password" dari input kotak yang nama-
                                            //-"password2" pada form_login tadi
        
        $hasil = $this->db->where('username2', $username) 
                            //meng akses database, dimana "username2" data pada database dan, "$username" data-
                            //-pada input form_login
                          ->where('password2', $password)
                            //meng akses database, dimana "password2" data pada database dan, "$password" data-
                            //-pada input form_login
                          ->limit(1) //adalah satu metode yang digunakan untuk membatasi jumlah baris yang-
                                     //-tampil dari hasil query SQL.
                          ->get('users2'); //berfungsi untuk menampilkan semua isi tabel "users2"
        
        if($hasil->num_rows() > 0){ //jika variabel "$hasil" mengakses menampilkan jumlah baris hasil dari query-
                                    //-lebih besar dari 0 maka :->
            return $hasil->row(); //mengembalikan nilai baris
        } else {
            return array(); //mengembalikan nilai (return) dalam bentuk array
        }
    }
}