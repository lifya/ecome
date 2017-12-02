<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller { //controller "Products"
    
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
        $this->load->model('model_products'); //menjalankan model "model_products"
    }
    
    public function index() //function "index/default" 
    {
        $data['products2'] = $this->model_products->all(); //memasukkan nilai varialbel "$data" dari data "model_product" pada model function "all"
        $this->load->view('backend/view_all_products', $data); //meng akses view "view_all_products" pada folder "backend" dan memanggil nilai dari variabel "$data"
    }
    
    public function create(){ //function "create"
        //form validation sebelum mengeksekusi QUERY INSERT
        $this->form_validation->set_rules('name2', 'Product Name', 'required'); //'name' adalah variabel/kolom kepala, yang ditampilkan keterangan berupa "Product Name"
        //                                                                     //ditampilkan "Product Name" menandakan keterangan kepunyaan kotak isian 
                                                                               //ditampilkan "required" menandakan isian belum diisi
        $this->form_validation->set_rules('description2', 'Product Description', 'required');
	$this->form_validation->set_rules('price2', 'Product Price', 'required|integer'); //menggunakan integer tidak numeric 
                                                                                         //karena numerik bisa di masukkan 
                                                                                         //bil pecahan/koma sedangkan tidak 
                                                                                         //ada stock berupa bil koma
	$this->form_validation->set_rules('stock2', 'Available Stock', 'required|integer');
        //$this->form_validation->set_rules('userfile', 'Product Image', 'required'); 
        //tidak menggunakan validasi karena tidak diperlukan ada pesan yang menyatakan input belum di isi-
        //-karena dari bawakan input button image telah tersedia pesan bawakan yang menyatakan input belum diisi atau sudah
        
        if($this->form_validation->run() == FALSE) //jika form validation benar atau ada pesan kesalahan        
        {
            $this->load->view('backend/form_tambah_product'); //meng akses view "form_tambah_product" pada folder "backend"
        }
        else //jika form validation salah atau tidak ada pesan kesalahan
             //semua input telah diisi dan benar maka dilanjutkan proses "save button"
        {
            //load uploading file library
            $config['upload_path'] = './uploads/'; //semua gambar di simpan di folder "uploads" sebanding folder aplication
            $config['allowed_types'] = 'jpg|png';
            $config['max_size']	= '300'; //MB
            $config['max_width']  = '2000'; //pixels
            $config['max_height']  = '2000'; //pixels
            // ketentuan dalam meng upload gambar diantaranya : gambar max 300 mb,format gambar jpg, dll

            $this->load->library('upload', $config); //meng akses library untuk menyimpan data variabel "$config"-
                                                     //ke dalam "upload" / mengupload $config
            
            if ( ! $this->upload->do_upload()) //kondisi dimana tidak mengakses upload/gagal uploade karena ketentuan diatas
            {
                //file gagal diupload -> kembali ke form tambah
                $this->load->view('backend/form_tambah_product'); //meng akses view "form_tambah_product" yang terletak di-
                                                                  //- dalam folder backend
            } 
            else //kondisi dimana mengakses upload/upload berhasil karena ketentuan diatas
            {
                //file berhasil diupload -> lanjutkan ke query INSERT
                //eksekusi query INSERT
                $gambar = $this ->upload->data(); //$gambar selain menampung nama file, juga kapasitas dan data data dari gambar tersebut
                $data_product = array //array berupa data inputan tadi di tampung/diisikan ke dalam variabel "$data_product"
                (
                    'name2'          => set_value('name2'), //meng inputkan yang di input dalam kotak isian
                    'description2'   => set_value('description2'), //meng inputkan yang di input dalam kotak isian
                    'price2'         => set_value('price2'), //meng inputkan yang di input dalam kotak isian
                    'stock2'         => set_value('stock2'), //meng inputkan yang di input dalam kotak isian
                    'image2'         => $gambar['file_name'] //meng inputkan yang di input dalam button isian
                );
                $this->model_products->create($data_product); //meng akses model "model_products" pada function "create($data_product)"
                redirect('admin/products'); //menjalankan controller "products" dari folder "admin" /reset
            }
        }
    }
    
    public function update($id){ //function "update"
        $this->form_validation->set_rules('name2', 'Product Name', 'required'); //'name' adalah variabel/kolom kepala, yang ditampilkan keterangan berupa "Product Name"
        //                                                                     //ditampilkan "Product Name" menandakan keterangan kepunyaan kotak isian 
                                                                               //ditampilkan "required" menandakan isian belum diisi
        $this->form_validation->set_rules('description2', 'Product Description', 'required');
	$this->form_validation->set_rules('price2', 'Product Price', 'required|integer'); //menggunakan integer tidak numeric 
                                                                                         //karena numerik bisa di masukkan 
                                                                                         //bil pecahan/koma sedangkan tidak 
                                                                                         //ada stock berupa bil koma
	$this->form_validation->set_rules('stock2', 'Available Stock', 'required|integer');
        
        if($this->form_validation->run() == FALSE) //jika form validation benar atau ada pesan kesalahan        
        {
            $data['product'] = $this->model_products->find($id); //memasukkan nilai varialbel "$data" dari data "model_products" pada model function "find"
                                                                 //diperlukan ada karena data edit ada dalam di db maka- 
                                                                 //-dimunculkan untuk melihat isi yang belum di edit dan-
                                                                 //-yang mau di edit apa dari tampilan yang di tampilkan
            $this->load->view('backend/form_edit_product', $data); //meng akses view "form_edit_product" pada folder "backend" dan memanggil nilai dari variabel "$data"
        }
        else
        {
            if($_FILES['userfile']['name'] != '') //kondisi dimana semua data di inputkan tanpa terkecuali/ 
                                                  //gambar juga di inputkan, maka gambar di tampilkan 
                                                  //sesuai gambar yang di inputkan
            {
                //form submit dengan gambar diisi
                //load uploading file library
                $config['upload_path'] = './uploads/'; //semua gambar di simpan di folder "uploads" sebanding folder aplication
                $config['allowed_types'] = 'jpg|png';
                $config['max_size']	= '300'; //MB
                $config['max_width']  = '2000'; //pixels
                $config['max_height']  = '2000'; //pixels
                //ketentuan dalam meng upload gambar diantaranya : gambar max 300 mb,format gambar jpg, dll

                $this->load->library('upload', $config); //meng akses library untuk menyimpan data variabel "$config"-
                                                         //ke dalam "upload" / mengupload $config
            
            
                if ( ! $this->upload->do_upload()) //kondisi dimana tidak mengakses upload/gagal uploade karena ketentuan diatas
                {
                    $data['product'] = $this->model_products->find($id); //memasukkan nilai varialbel "$data" dari data "model_products" pada model function "find"
                                                                     //diperlukan ada karena data edit ada dalam di db maka- 
                                                                     //-dimunculkan untuk melihat isi yang belum di edit dan-
                                                                     //-yang mau di edit apa dari tampilan yang di tampilkan
                    $this->load->view('backend/form_edit_product', $data); //meng akses view "form_edit_product" pada folder "backend" dan memanggil nilai dari variabel "$data"
                }
                else //kondisi dimana mengakses upload/upload berhasil karena ketentuan diatas
                {                
                    $gambar = $this ->upload->data(); //$gambar selain menampung nama file, juga kapasitas dan data data dari gambar tersebut
                    $data_product = array //array berupa data inputan tadi di tampung/diisikan ke dalam variabel "$data_product"
                    (
                        'name2'          => set_value('name2'), //meng inputkan yang di input dalam kotak isian
                        'description2'   => set_value('description2'), //meng inputkan yang di input dalam kotak isian
                        'price2'         => set_value('price2'), //meng inputkan yang di input dalam kotak isian
                        'stock2'         => set_value('stock2'), //meng inputkan yang di input dalam kotak isian
                        'image2'         => $gambar['file_name'] //meng inputkan yang di input dalam button isian
                    );
                    $this->model_products->update($id, $data_product); //meng akses model "model_products" pada function "update($id, $data_product)"
                    redirect('admin/products'); //menjalankan controller "products" dari folder "admin" /reset
                }
            }
            else //kondisi apabila Semuanya di inputkan pada kotak input- 
                 //-namun button gambar tidak di input jadi gambar dikosongkan- 
                 //-dengan data yang lain tetap tersimpan kecuali foto yaitu kosong
            {
                //form submit dengan gambar dikosongkan
                $data_product = array //array berupa data inputan tadi di tampung/diisikan ke dalam variabel "$data_product"
                (
                    'name2'          => set_value('name2'), //meng inputkan yang di input dalam kotak isian
                    'description2'   => set_value('description2'), //meng inputkan yang di input dalam kotak isian
                    'price2'         => set_value('price2'), //meng inputkan yang di input dalam kotak isian
                    'stock2'         => set_value('stock2'), //meng inputkan yang di input dalam kotak isian
                    //'image2'         => $gambar['file_name'] //meng inputkan yang di input dalam button isian
                    //tidak menggunakan image karena setiap edit choose button- 
                    //-input gambar selalu dalam keadaan kosong maka untuk tidak-
                    //-merepotkan jika yang di edit adalah bukan foto, maka dari- 
                    //-itu tidak di pasang image config supaya hendak di save dia- 
                    //-tetap menyimpan gambar yang pernah kita set sebelumnya
                    //apabila di masukkan config image maka setiap klik edit-
                    //-selalu memasukkan foto padahal kita tidak men edit foto-
                    //-karena default set kita tadi image tidak ada oleh karena-
                    //-itu di buang config image supaya tidak membuang foto-
                    //-sebelumnya karena default button selalu kosong
                );
                $this->model_products->update($id, $data_product); //meng akses model "model_products" pada function "update($id, $data_product)"
                redirect('admin/products'); //menjalankan controller "products" dari folder "admin" /reset
            }
        }
    }
    
    public function delete($id){ //function "delete"
        $this->model_products->delete($id); //meng akses model "model_products" pada function "delete($id)"
        redirect('admin/products'); //menjalankan controller "products" dari folder "admin" /reset
    }
}