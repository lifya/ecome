<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_orders extends CI_Model { //model "model_orders"
    
    public function process() //fuunction "process"
    {
        //create new invoice
        $invoice = array(
            'date2'      => date('Y-m-d H:i:s'),
            //date = awal tanggal mulai
            //meng inputkan data "(tahun-bulan-tanggal) | (jam-menit-detik)" ke variabel table "due_date2"
            'due_date2'  => date('Y-m-d H:i:s', mktime( date('H'),date('i'),date('s'),date('m'),date('d') + 1,date('Y'))),
            //"due_date = Batas tanggal terakhir
            //meng inputkan data "(tahun-bulan-tanggal) | (jam-menit-detik)" ke variabel table "due_date2"
            'user_id2'   => $this->get_logged_user_id(),
            'status2'    => 'unpaid' //menginputkan data "unpaid" ke variabel table "status2"
        ); //meng inputkan data array kedalam variabel "$invoice"
        $this->db->insert('invoices2', $invoice); 
        //meng akses database untuk meng inputkan variabel data "$invoice" kedalam database-table "invoice2" 
        $invoice_id = $this->db->insert_id();
                      //"$this->db->insert_id()" adalah fungsi ci yang berguna untuk mengambil nilai-
                      //-yang baru saja dimasukkan ke dalam tabel dari field AUTO INCREMENT
        
        // put ordered items in orders table
        // Letakkan barang pesanan di meja pesanan
        foreach($this->cart->contents() as $item){
            $data = array(
                'invoice_id2'        => $invoice_id,
                'product_id2'        => $item['id'],
                'product_name2'      => $item['name'],
                'qty2'               => $item['qty'],
                'price2'             => $item['price']
            );
            $this->db->insert('orders2', $data); 
            //meng akses databse untuk memasukkan nilai data variabel "$data" kedalam database-table-
            //-"orders2"
        }
        
        return TRUE; //mengembalikan nilai "TRUE/benar"
    }
    
    public function all() //function "all"
    {
        //get all invoices from Invoices table
        $hasil = $this->db->get('invoices2'); //mengambil data dari table head "invoices2"
        if($hasil->num_rows() > 0){ //jika variabel "$hasil" mengakses menampilkan jumlah baris hasil dari query lebih besar dari 0 maka :->
            return $hasil->result(); //mengembalikan nilai (return) dalam bentuk object array "result"
        } else {
            return false; //mengembalikan nilai "false/salah"
        }
    }
    
    public function get_invoice_by_id($invoice_id) //function "get_invoice_by_id" dengan parameter "$invoice_id"
    {
        $hasil = $this->db
                        ->where('id2',$invoice_id)
                        ->limit(1) //meng akses/menggunakan/memunculkan 1 baris
                        ->get('invoices2'); //mengambil data dari table head "invoices2" yang diambil berdasarkan no baris variabel "$id,$invoice_id" tadi
        if($hasil->num_rows() > 0){ //jika variabel "$hasil" mengakses menampilkan jumlah baris hasil dari query lebih besar dari 0 maka :->
            return $hasil->row(); //mengembalikan nilai berupa perbaris dari database
        } else {
            return false; //mengembalikan nilai "false/salah"
        }
    }
    
    public function get_orders_by_invoice($invoice_id) //function "get_orders_by_invoice" dengan parameter "$invoice_id"
    {
        $hasil = $this->db
                        ->where('invoice_id2',$invoice_id) 
                        ->get('orders2'); //mengambil data dari table head "orders2" yang diambil berdasarkan no baris variabel "'invoice_id2',$invoice_id" tadi
        if($hasil->num_rows() > 0){ //jika variabel "$hasil" mengakses menampilkan jumlah baris hasil dari query lebih besar dari 0 maka :->
            return $hasil->result(); //mengembalikan nilai (return) dalam bentuk object array "result"
        } else {
            return false; //mengembalikan nilai "false/salah"
        }
    }
    
    public function get_logged_user_id() //function "get_logged_user_id"/Mendapatkan login user id
    {
        $hasil = $this->db
                        ->select('id2')
                        ->where('username2',
                 $this->session
                        ->userdata('username2'))
                        ->limit(1) //meng akses/menggunakan/memunculkan 1 baris
                        ->get('users2'); //mengambil data dari table head "users2" yang diambil berdasarkan no baris variabel "$id" tadi
        if($hasil->num_rows() > 0){ //jika variabel "$hasil" mengakses menampilkan jumlah baris hasil dari query lebih besar dari 0 maka :->
            return $hasil->row()->id2; //mengembalikan nilai berupa perbaris pada bagian kolom "id2" saja dari database
        } else {
            return 0; //mengembalikan nilai "0"
        }
    }
}