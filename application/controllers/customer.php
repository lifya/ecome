<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller { //controller "Welcome"
    
    public function __construct() //function default
    {
        parent::__construct(); //Konstruktor berguna jika Anda perlu menetapkan beberapa nilai default, 
                               //atau menjalankan proses default saat kelas Anda diinisiasi
        $this->load->model('model_customer'); //menjalankan model "model_products"
    }
    
    public function index() //function "index/default" 
    {
        //nothing on index (yet)
    }
    
    public function payment_confirmation($invoice_id = 0) //function "payment_confirmation" dengan parameter pembawa data/nilai-
                                                          //variabel "$invoice_id = 0"
    {
        $this->form_validation->set_rules('invoice_id2','Invoice ID','required|integer');
        $this->form_validation->set_rules('amount2','Amount Transfered','required|integer');
        //'invoice_id2' adalah variabel/kolom kepala, yang ditampilkan keterangan berupa "Invoice ID"
        //ditampilkan "Invoice ID" menandakan keterangan kepunyaan kotak isian 
        //ditampilkan "required" menandakan isian belum diisi
        
        //menggunakan integer tidak numeric 
        //karena numerik bisa di masukkan 
        //bil pecahan/koma sedangkan tidak 
        //ada stock berupa bil koma
        
        if($this->form_validation->run() == FALSE) //kondisi jika mengakses "form_validation"-
                                                    //-lalu menjalankannya sama dengan FALSE/-
                                                    //-salah/ada pesan kesalahan maka :->
        {
            if($this->input->post('invoice_id2')){ 
                $data['invoice_id2'] = set_value('invoice_id2');
                //menyimpan data/nilai yang dimasukkan kedalam "$invoice_id" kedalam penjembatani "$data"-
                //-dengan variabelnya "invoice_id2"
            } else {
                $data['invoice_id2'] = $invoice_id;
                //menyimpan data/nilai "$invoice_id" kedalam penjembatani "$data" dengan variabelnya "invoice_id2"
            }
            $this->load->view('customer/form_payment_confirmation', $data);
            //meng akses view "form_payment_confirmation" yang terimpan dalam folder "customer"-
            //-dengan membawa data/nilai "$data"
        } else { 
            //proceed to mark the record on database table
            $isValid = $this->model_customer->mark_invoice_confirmed(set_value('invoice_id2'), set_value('amount2'));
                       //meng akses model "model_customer" ke function "mark_invoice_confirmed"-
                       //-dengan memasukkan nilai "invoice_id2", dan "amount2" kedalam varibel "$isValid"
            
            if($isValid){ //kondisi jika benar ada/membawa/terisi variabel "$isValid" maka :->
                $this->session->set_flashdata('message','Thank you.. We will check on your payment confirmation');
                //meng akses variabel sementara/session, memasukkan data "Thank you.. We will check on your payment confirmation"-
                //-ke dalam variabel/sejenis penampung data dengan nama "message"
                redirect('customer/shopping_history'); //meng akses controller "customer" ke function "shopping_hostory"
            } else {
                $this->session->set_flashdata('error','Wrong amount or invoice ID, please try again');
                //meng akses variabel sementara/session, memasukkan data "Wrong amount or invoice ID,-
                //-please try again" ke dalam variabel/sejenis penampung data dengan nama "error"
                redirect('customer/payment_confirmation/'.set_value('invoice_id2'));
                //meng akses controller "customer" ke function "payment_confirmation" dengan membawa-
                //-database/table/nilai/data "invoice_id2"
            }
        }       
    }
    
    public function shopping_history() //function "shopping_history"
    {
        $user = $this->session->userdata('username2'); 
                //meng akses variabel sementara/session untuk digunakan/ditampilkan dari database/table/head-
                //-"username2" yang disimpan ke dalam variabel "$user"
        $data['history2'] = $this->model_customer->get_shopping_history($user);
                            //meng akses model "model_customer" ke function "get_shopping_history" dengan
                            //-membawa parameter vaiabel "$user" lalu di simpan kedalam variabel "$history,penerapannya"
                            //$data berfungsi menjembatani untuk perintah yang menggunakannya
        $this->load->view('customer/shopping_history_list', $data);
        //meng akses view "shopping_history_list" yang tersimpan dalam folder "customer" dengan membawa-
        //-nilai data variabel "$data"
    } 
}
