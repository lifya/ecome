<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoices extends CI_Controller { //controller "Products"
    
    public function __construct() //function default
    {
        parent::__construct(); //Konstruktor berguna jika Anda perlu menetapkan beberapa nilai default, 
                               //atau menjalankan proses default saat kelas Anda diinisiasi
        $this->load->view('element/footer.php');
        if($this->session->userdata('group2') != '1'){ 
        //perkondisian yang meng akses variabel sementara/session, untuk digunakan/ditampilkan/userdata,-
        //-data yang tersimpan pada variabel/database/table/users2 "group2", jika "group2" tidak sama-
        //-dengan "1" maka :->
        //terjadi pada saat kita belum login untuk membeli atau mengelola namun kita mengakses link yang
        //-mengarahkan untuk membeli/mengelola maka akan menampilkan pesa "Sorry, you are not logged in!
        //-/Maaf, kamu belum login
            $this->session->set_flashdata('error','Sorry, you are not logged in!');
            //meng akses variabel sementara/session, untuk mennyimpan data/set_flashdata,-
            //-"Sorry, you are not logged in!" pada variabel sementara "error"
            redirect('login'); //mengakses controller "login" yang menampilkan view "form_login"
        }
        //load model -> model_products
        $this->load->model('model_orders'); //menjalankan model "model_products"
    }
    
    public function index() //function "index/default" 
    {
        $data['invoices2'] = $this->model_orders->all(); 
        //memasukkan nilai varialbel "$data" dari data "model_product" pada model function "all"
        $this->load->view('backend/view_all_invoices', $data); 
        //meng akses view "view_all_products" pada folder "backend" dan memanggil nilai dari variabel "$data"
    }
    
    public function detail($invoice_id) //function "detail" dengan parameter "$invoice_id"
    {
        $data['invoice2'] = $this->model_orders->get_invoice_by_id($invoice_id);
                            //meng akses model "model_orders" ke function "get_invoice_by_id" dengan-
                            //-parameter ($invoice_id) untuk di set ke dalam variabel "invoice2" pada-
                            //-jembatani $data
        $data['orders2'] = $this->model_orders->get_orders_by_invoice($invoice_id);
                            //meng akses model "model_orders" ke function "get_orders_by_invoice" dengan-
                            //-parameter ($invoice_id) untuk di set ke dalam variabel "orders2" pada-
                            //-jembatani $data
	$this->load->view('backend/view_invoice_detail', $data);
        //meng akses view "view_invoice_detail" yang terletak di folder "backend" dengan membawa nilai dari $data
    }
}