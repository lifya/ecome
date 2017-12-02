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
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css"> <!-- melengkapi; datatables-->        
    </head>
    <body>
        <!-- dalam div row harus ada col yang maksimum nilainya 12 -->
        <div class="row"> <!-- HTML <div> element dapat dijadikan "wadah" untuk menempatkan beberapa 
                          elemen menjadi satu bagian, yang penggunaannya ditujukan untuk 
                          mempermudah aplikasi style dengan CSS -->
            <div class="col-md-1"></div> <!-- membuat blok sisi kiri ("class="col-md-1">kiri</div>")-->
            <div class="col-md-10">
                <h1>Add New Product</h1> <!-- "h1" adalah ukuran huruf terbesar dan menampilkan tulisan "Add New Product" -->
                <div><?= validation_errors() ?></div> <!-- mengaktifkan form validasi dari controller form validation "function create" -->
                <?= form_open_multipart('admin/products/create', ['class'=>'form-horizontal']) ?> <!-- pembuka style pelengkap tunggal keseluruan -->
                <!-- "_multipart" membuat formulir upload -->
                    
                        <div class="form-group"> <!-- style pelengkap -->
                          <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label> <!-- menampilkan tulisan Product Name dengan style nya -->
                          <div class="col-sm-10"> <!-- style supaya nama "Product Name" dengan "input kotak" sejajar -->
                            <input type="text" class="form-control" name="name2" placeholder="" value="<?= set_value('name2') ?>"> <!-- Menyediakan kotak inputan "Product Name" -->
                                                                                                                                   <!-- value="<?= set_value('name2') ?> memasukkan data dari kolom yang kosong -->
                          </div>
                        </div>
                
                        <div class="form-group"> <!-- style pelengkap -->
                          <label for="inputPassword3" class="col-sm-2 control-label">Description</label> <!-- menampilkan tulisan Description dengan style nya -->
                          <div class="col-sm-10"> <!-- style supaya nama "Description" dengan "input kotak" sejajar -->
                            <textarea class="form-control" name="description2"><?= set_value('description2') ?></textarea> <!-- Menyediakan kotak inputan "Description" -->
                          </div>
                        </div>
                
                        <div class="form-group"> <!-- style pelengkap -->
                          <label for="inputPassword3" class="col-sm-2 control-label">Price</label> <!-- menampilkan tulisan Price dengan style nya -->
                          <div class="col-sm-10"> <!-- style supaya nama "Price" dengan "input kotak" sejajar -->
                            <input type="text" class="form-control" name="price2" placeholder="" value="<?= set_value('price2') ?>"> <!-- Menyediakan kotak inputan "Price" -->
                          </div>
                        </div>
                
                        <div class="form-group"> <!-- style pelengkap -->
                          <label for="inputPassword3" class="col-sm-2 control-label">Available Stock</label> <!-- menampilkan tulisan Available Stock dengan style nya -->
                          <div class="col-sm-10"> <!-- style supaya nama "Available Stock" dengan "input kotak" sejajar -->
                            <input type="text" class="form-control" name="stock2" placeholder="" value="<?= set_value('stock2') ?>"> <!-- Menyediakan kotak inputan "Available Stock" -->
                          </div>
                        </div>
                
                        <div class="form-group"> <!-- style pelengkap -->
                          <label for="inputPassword3" class="col-sm-2 control-label">Product Image</label> <!-- menampilkan tulisan Product Image dengan style nya -->
                          <div class="col-sm-10"> <!-- style supaya nama "Product Image" dengan "input kotak" sejajar -->
                              <input type="file" class="form-control" name="userfile" > <!-- Menyediakan button inputan "Choose File" dengan keterangan- 
                                                                                             -disamping button "belum/sudah di inputkan file" -->
                          </div>
                        </div>
                        
                        <div class="form-group"> <!-- style pelengkap -->
                          <div class="col-sm-offset-2 col-sm-10"> <!-- style pelengkap -->
                            <button type="submit" class="btn btn-default">Save</button> <!-- membuat input berupa button "Save" -->
                          </div>
                        </div>
                     
                <?= form_close() ?> <!-- penutup style pelengkap tunggal keseluruan -->
                                    <!-- "Horizontal form" dari getbootstrap.com/css/#forms/ tampilan setelah 
                                          mengklik "Add Product" dari Tampilan "Products Table" -->
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