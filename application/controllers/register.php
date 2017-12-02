<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller { //controller "Products"
    
    public function __construct() //function default
    {
        parent::__construct(); //Konstruktor berguna jika Anda perlu menetapkan beberapa nilai default, 
                               //atau menjalankan proses default saat kelas Anda diinisiasi        
        //load model -> model_products
        $this->load->model('model_register'); //menjalankan model "model_products"
    }
    
    public function index(){ //function "create"
        //form validation sebelum mengeksekusi QUERY INSERT
        $this->form_validation->set_rules('username2', 'Usernamae', 'required'); //'name' adalah variabel/kolom kepala, yang ditampilkan keterangan berupa "Product Name"
        //                                                                     //ditampilkan "Product Name" menandakan keterangan kepunyaan kotak isian 
                                                                               //ditampilkan "required" menandakan isian belum diisi        
	$this->form_validation->set_rules('email2', 'Email', 'required'); //menggunakan integer tidak numeric 
                                                                                         //karena numerik bisa di masukkan 
                                                                                         //bil pecahan/koma sedangkan tidak 
                                                                                         //ada stock berupa bil koma
	$this->form_validation->set_rules('password2', 'Password', 'required');
        //$this->form_validation->set_rules('userfile', 'Product Image', 'required'); 
        //tidak menggunakan validasi karena tidak diperlukan ada pesan yang menyatakan input belum di isi-
        //-karena dari bawakan input button image telah tersedia pesan bawakan yang menyatakan input belum diisi atau sudah
        
        if($this->form_validation->run() == FALSE) //jika form validation benar atau ada pesan kesalahan        
        {            
            $this->load->view('backend/form_tambah_register'); //meng akses view "form_tambah_product" pada folder "backend"
        }
        else //jika form validation salah atau tidak ada pesan kesalahan
             //semua input telah diisi dan benar maka dilanjutkan proses "save button"
        {           
            $this->session->set_flashdata('error','Register is successfully');
            $this->session->set_flashdata('errorrr','You already have an account to shop please');
            $this->load->view('backend/form_tambah_register');
            //file berhasil diupload -> lanjutkan ke query INSERT
            //eksekusi query INSERT            
            $data_product = array //array berupa data inputan tadi di tampung/diisikan ke dalam variabel "$data_product"
            (
                'username2'         => set_value('username2'), //meng inputkan yang di input dalam kotak isian                
                'email2'            => set_value('email2'), //meng inputkan yang di input dalam kotak isian
                'password2'         => set_value('password2'), //meng inputkan yang di input dalam kotak isian                
                'group2'            => 2
            );
            $this->model_register->create($data_product); //meng akses model "model_products" pada function "create($data_product)"
            redirect('register'); //menjalankan controller "products" dari folder "admin" /reset
        }
    }
}