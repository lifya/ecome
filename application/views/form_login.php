<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page | Add New Product</title>
        <!-- Load JQuery dari CDN -->

        <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script> <!-- menampilkan; datatables-->
        
        <!-- Load DataTables dan Bootstrap dari CDN -->
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script> <!-- menampilkan; datatables-->
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script> <!-- melengkapi; datatables-->
	
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"> <!-- merubah; jenis huruf, desain table class, melengkapi datables-->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
     <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylesheet.css">
     <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
   <!-- melengkapi; datatables-->        
    </head>
    <body>
        <?php $this->load->view('layout/top_menu') ?> <!-- meng akses view "top_menu" yang tersimpan pada folder layout -->
        <!-- dalam div row harus ada col yang maksimum nilainya 12 -->
        <div class="row"> <!-- HTML <div> element dapat dijadikan "wadah" untuk menempatkan beberapa 
                          elemen menjadi satu bagian, yang penggunaannya ditujukan untuk 
                          mempermudah aplikasi style dengan CSS -->
            <div class="col-md-1"></div> <!-- membuat blok sisi kiri ("class="col-md-1">kiri</div>")-->
            <div class="col-md-10">
                <h1>Login</h1> <!-- "h1" adalah ukuran huruf terbesar dan menampilkan tulisan "Add New Product" -->
                <div><?= validation_errors() ?></div> <!-- mengaktifkan form validasi dari controller form validation "function create" -->
                <div><?=$this->session->flashdata('error')?></div>
                
                <?php if($this->session->flashdata('errorr')):?>                  
                    <?=$this->session->flashdata('errorr')?>
                    <?=anchor('register','Register')?>                       
                <?php endif; ?>
                
                <?=form_open('login', ['class'=>'form-horizontal'])?> <!-- meng akses controller "login" untuk melakukan validation form -->
                    <div class="form-group"> <!-- style pelengkap -->
                      <label for="inputUsername3" class="col-sm-2 control-label">Username</label> 
                      <!-- menampilkan "Username" disamping kotak inputan -->
                      <div class="col-sm-10"> <!-- style pelengkap, yang membuat kotak inputan sejajar dengan ket input -->
                        <input type="text" class="form-control" name="username2">
                        <!-- type "text" adalah type inputan adalah text -->
                        <!-- name="username2" diibaratkan variabel input dalam penerapannya di validation_form-->
                      </div>
                    </div>
                    <div class="form-group"> <!-- style pelengkap -->
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                      <!-- menampilkan "Password" disamping kotak inputan -->
                      <div class="col-sm-10"> <!-- style pelengkap, yang membuat kotak inputan sejajar dengan ket input -->
                        <input type="password" class="form-control" name="password2">
                        <!-- type "password" adalah type inputan adalah password/huruf inputan disamarkan -->
                        <!-- name="password2" diibaratkan variabel input dalam penerapannya di validation_form-->
                      </div>
                    </div>            
                    <div class="form-group"> <!-- style pelengkap -->
                      <div class="col-sm-offset-2 col-sm-10"> <!-- style pelengkap button, yang membuat sejajar vertikal-
                                                                   -dengan input, kotak lain -->
                        <button type="submit" class="btn btn-default">Sign in</button> 
                        <!-- membuat button/input tulisan "Sign in" dengan kotak/button -->
                      </div>
                    </div>
                </form>
            </div> <!-- membuat blok sisi tengah ("class="col-md-10">tengah</div>")-->
            <div class="col-md-1"></div> <!-- membuat blok sisi kanan ("class="col-md-1">kanan</div>")-->
        </div>
        
        <script>
            $(document).ready(function(){  <!-- menampilkan; datatables-->
                $('#myTable').DataTable(); <!-- menampilkan; datatables-->
            });                            <!-- menampilkan; datatables-->
        </script> <!-- "Script" adalah bahasa yang digunakan untuk menerjemahkan 
                       setiap perintah dalam situs yang pada saat di akses -->
    </body>        
</html>