<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>Front-EndToko Online by Kursus-PHP.com</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> <!-- Complete CSS --> 
                                                                                                         <!-- Jenis huruf berubah -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!-- JQuery -->   
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Complete JavaScript -->
    </head>
    <body>
        <?php $this->load->view('layout/top_menu') ?> <!-- meng akses view "top_menu" yang tersimpan pada folder layout -->        
        <!-- Tampilkan semua produk -->
        <div class="container-fluid">
        <div class="row"> <!-- thumbnail label / http://getbootstrap.com/components/#thumbnails-->
        <!-- looping products -->
            <?php foreach($products as $product) : ?> <!-- untuk setiap "$products2" sebagai "$product" -->
                                                       <!-- table "products2" dapat di akses oleh variabel "$product" -->
                                                       <!-- sehingga variabel "$product" dapat mengakses data data-
                                                            -yang ada tersimpan di database, table "products2" -->
                                                       <!-- belum tau kenapa tidak "$products2" pada "foreach($products as $product)" -->
            <div class="col-sm-3 col-md-3"> <!-- thumbnail label, "col-md-3" untuk ukuran samping-->
                <div class="thumbnail"> <!-- thumbnail label -->
                    <?=img([
                        'src'       => 'uploads/' . $product->image2, //menampilkan gambar, dari "image2" database yang ditampung dalam variabel "$product"
                        'style'     => 'max-width: 100%; max-height:100%; height:250px' //ketentuan menampilkan gambar dengan batasan format tersebut
                    ])?>
                    <div class="caption"> <!-- thumbnail label -->
                        <h3 style="min-height:60px;"><?=$product->name2?></h3> <!-- thumbnail label, menampilkan isi dari kolom baris "name2" database- -->
                                                                               <!-- -table yang di gunakan yang di tampung pada variabel "$product" -->
                            <!-- "style="min-height:60px" digunakan untuk ukuran jarak tinggi antara name2 dengan description2 -->
                        <p><?=$product->description2?></p> <!-- thumbnail label == penjelasan pada baris sebelumnya (name) -->
                        <p>                             
                            <?=anchor('welcome/add_to_cart/' . $product->id2, 'Buy' , [ //menampilkan button "buy" dengan fungsi kelanjutan
                            //menjalankan controller "welcome" pada function "add_to_cart"-
                            //-yang nantinya untuk menginputkan semua data pada satu/suatu, buy/pembelian-
                            //salah satu penerapannya jumlah nilai yang muncul pada keranjang pojok kanan/"inside cart ..."
                                'class' => 'btn btn-primary',
                                'role'  => 'button'
                            ])?>
                        </p> <!-- thumbnail label -->
                    </div> <!-- thumbnail label -->
                </div> <!-- thumbnail label -->
            </div> <!-- thumbnail label -->
            <?php endforeach; ?>
        <!-- end looping -->
        </div> <!-- thumbnail label -->
        </div>
        <?php $this->load->view('element/footer'); ?>
    </body>
</html>