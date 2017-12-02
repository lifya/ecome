<!-- menampilkan halaman ketika klik "Inside Cart" pada pojok kanan-
     -untuk menampilkan data data pada suatu belanjaan yaitu; #, Product, Qty, Price, Subtotal -->
     
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>ORDER</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> <!-- Complete CSS --> 
                                                                                                         <!-- Jenis huruf berubah -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!-- JQuery -->   
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Complete JavaScript -->
    </head>
    <body>
        <?php $this->load->view('layout/top_menu') ?> <!-- meng akses view "top_menu" yang tersimpan pada folder layout -->        
        <div class="container-fluid">
        <table class="table table-bordered table-striped table-hover"> <!-- class="t.../style pada table -->
            <thead> <!-- bagian head/kepala table --> 
                <tr> <!-- kepanjangan dari table row, digunakan untuk mendefiniskan baris pada tabel -->
                     <!-- yang artinya dalam lingkup ini untuk 1 baris -->
                    <th>#</th> <!-- kepanjangan dari table heading, digunakan untuk membuat judul-
                                    -sebuah table seperti No, dan nama. biasanya di tanda dengan-
                                    -hurufnya menjadi bold -->
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody> <!-- bagian badan/isi table -->
                <?php
                    $i=0; //nilai awal yang menjadi penomeran/"#" pada table heading
                    foreach ($this->cart->contents() as $items) :
                    $i++; //nilai kelanjutan bertambah tiap 1 pada satu table data yang dimulai "1" karena nilai awal = 0
                ?>
                <tr> <!-- kepanjangan dari table row, digunakan untuk mendefiniskan baris pada tabel -->
                     <!-- yang artinya dalam lingkup ini untuk 1 baris -->
                    <td><?= $i ?></td> <!-- kepanjangan dari table data, digunakan untuk membuat isi dari-
                                            -th atau baris atau kalau di MS.excel seperti cell. -->
                    <td><?= $items['name'] ?></td>
                    <td><?= $items['qty'] ?></td>
                    <td align="right"><?= number_format($items['price'],0,',','.') ?></td>
                    <!-- "(align="right")" yang befungsi menempatkan posisi tampilan dalam baris yang paling kanan -->
                    <!-- "<= number_format(...,0,',','.'); ?>" berfungsi untuk memformat angka menjadi angka yang mudah-
                         -dibaca nilai nya dengan menampilkan titik pada bilangan tersebut sesuai format yang di atur -->
                    <td align="right"><?= number_format($items['subtotal'],0,',','.') ?></td>
                    <!-- "(align="right")" yang befungsi menempatkan posisi tampilan dalam baris yang paling kanan -->
                    <!-- "<= number_format(...,0,',','.'); ?>" berfungsi untuk memformat angka menjadi angka yang mudah-
                         -dibaca nilai nya dengan menampilkan titik pada bilangan tersebut sesuai format yang di atur -->
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot> <!-- Elemen HTML <tfoot> mendefinisikan satu baris yang merangkum kolom tabel. -->
                <tr> <!-- tr penjelasan = seperti diatas -->
                    <td align="right" colspan="4">Total </td> <!-- td penjelasan = seperti diatas -->
                    <!-- menampilkan "Total" baris baru paling bawah di kolom "Price" -->
                    <!-- "(align="right")" yang befungsi menempatkan posisi tampilan dalam baris yang paling kanan -->
                    <td align="right"><?= number_format($this->cart->total(),0,',','.'); ?></td>
                    <!-- "(align="right")" yang befungsi menempatkan posisi tampilan dalam baris yang paling kanan -->
                    <!-- "<= number_format(...,0,',','.'); ?>" berfungsi untuk memformat angka menjadi angka yang mudah-
                         -dibaca nilai nya dengan menampilkan titik pada bilangan tersebut sesuai format yang di atur -->
                    <!-- "<=$this->cart->total()?>" berfungsi untuk menampilkan nilai total dari subtotal belanjaan -->
                </tr>
            </tfoot>
        </table>
        <div align="center" > <!-- div dalam cakupannya berfungsi untuk mengelompokkan perintah-
                                  -menjadi satu kesatuan/satu perintah tujuan -->
            <?= anchor('welcome/clear_cart','Clear Cart',['class'=>'btn btn-danger']) ?>
            <!-- "<= anchor('welcome/clear_cart'", berfungsi menyediakan fungsi kelanjutan-
                 -yang nanti di arahkan ke controller "welcome" pada function "clear_cart" -->
            <!-- "Clear Cart" menampilkan tulisan tersebut -->
            <!-- "['class'=>'btn btn-danger']" menambahkan kotak berwarna "merah"-
                 -pada tulisan yang berfungsi berkelanjutan -->
            <?= anchor(base_url(),'Continue Shopping',['class'=>'btn btn-primary']) ?>
            <!-- "<= anchor(base_url()", berfungsi menyediakan fungsi kelanjutan-
                 -yang nanti di arahkan ke "base_url()" yang di set yaitu http://localhost/toko-online2/ -->
            <!-- "Continue Shopping" menampilkan tulisan tersebut -->
            <!-- "['class'=>'btn btn-primary']" menambahkan kotak berwarna "biru"-
                 -pada tulisan yang berfungsi berkelanjutan -->
            <?= anchor('order','Check Out',['class'=>'btn btn-success']) ?>
            <!-- "<= anchor('order'", berfungsi menyediakan fungsi kelanjutan-
                 -yang nanti di arahkan ke controller "order" -->
            <!-- "Check Out" menampilkan tulisan tersebut -->
            <!-- "['class'=>'btn btn-success']" menambahkan kotak berwarna "hijau"-
                 -pada tulisan yang berfungsi berkelanjutan -->
        </div>
        </div>
    </body>
</html>