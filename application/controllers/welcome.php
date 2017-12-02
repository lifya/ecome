<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller { //controller "Welcome"
    
    public function __construct() //function default
    {
        parent::__construct(); //Konstruktor berguna jika Anda perlu menetapkan beberapa nilai default, 
                               //atau menjalankan proses default saat kelas Anda diinisiasi
        $this->load->model('model_products'); //menjalankan model "model_products"
    }
    
    public function index() //function "index/default" 
    {
        $data['products'] = $this->model_products->all(); //memasukkan nilai varialbel "$data" dari data "model_product" pada model function "all"
	$this->load->view('welcome_message', $data); //meng akses view "wlcome_message" dengan membawa nilai variabel "$data"
    }
    
    public function add_to_cart($product_id) //function "add_to_cart" dengan parameter "$product_id" pada no primary barang yang di beli 
    {
        $product = $this->model_products->find($product_id); //mengisi nilai pada variabel "$product"-
                                                             //-dari meng akses model "model_products"-
                                                             //-pada function "find" dengan tujuan mencari-
                                                             //-data dari primari id database barang yang dibeli
        $data = array(
                        'id'      => $product->id2, //menyimpankan data "id2" pada variabel database yang dicari tadi
                        'qty'     => 1,             //nilai keranjang akan bertambah setiap klik, jika klik 1 barang-
                                                    //-maka total belanja barang dalam keranjang = 1
                        'price'   => $product->price2, //menyimpankan data "price2" pada variabel database yang dicari tadi 
                        'name'    => $product->name2 //menyimpankan data "name2" pada variabel database yang dicari tadi
                     );

        $this->cart->insert($data); //meng akses cart untuk menginputkan data yang terdapat pada variabel "$data"
        redirect(base_url()); //pengalihan "base_url"
    }
    
    public function cart(){
        //displays what currently inside the cart
        //Menampilkan apa yang saat ini ada di dalam gerobak
        //print_r($this->cart->contents());
        $this->load->view('show_cart'); //meng akses view "show_cart"
    }
    
    public function clear_cart()
    {
        $this->cart->destroy(); //meng akses keranjang untuk di hapus
        redirect(base_url()); //pengalihan "base_url"
                              //merestart/mengkosongkan(kalu)
    }
}
