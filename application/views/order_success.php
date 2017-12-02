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
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylesheet.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    </head>
    <body>
        <?php $this->load->view('layout/top_menu') ?> <!-- meng akses view "top_menu" yang tersimpan pada folder layout -->        
        
        <p style="color: white;">Thank you, your order is being processed..</p> 
        <!-- menampilkan kalimat tersebut yang berarti,-
             -Terima kasih, pesanan anda sedang diproses.. -->
        
    </body>
</html>