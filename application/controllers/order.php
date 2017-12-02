<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller { //controller "order"
    
    public function __construct() //function default
    {
        parent::__construct(); //Konstruktor berguna jika Anda perlu menetapkan beberapa nilai default, 
                               //atau menjalankan proses default saat kelas Anda diinisiasi
        if(!$this->session->userdata('username2')) 
        //perkondisian jika tidak meng akses variabel sementara/session, menampilkan/menggunakan/userdata-
        //-"username2" maka :->
        {
            $this->session->set_flashdata('errorr','You can not buy because not yet login account, if not have account please');            
            redirect('login'); //mengakses controller "login"
        }
        $this->load->model('model_orders'); //meng akses model "model_orders"
    }
    
    public function index() //function "index/default"
    {
        $is_processed = $this->model_orders->process();
        //menginputkan data, dari meng akses "model_orders" lalu "function process"
        if($is_processed){
            $this->cart->destroy(); //meng akses cart "untuk di hancurkan/dihapus/keranjang dikosongkan lagi"
            redirect('order/success'); //meng akses controller "order" lalu ke function "success"
        } else {
            $this->session->set_flashdata('error','Failed to processed your order, please try again');
            //meng akses variabel sementara/session untuk menginputkan/set_flasdata variabel "error" dari-
            //-data "Failed to processed your, please try again"
            redirect('welcome/cart'); //meng akses controller "welcome" lalu ke function "cart"
        }
    }
    
    public function success() //function "success"
    {
        $this->load->view('order_success'); //meng akses view "order_success"
    }
}