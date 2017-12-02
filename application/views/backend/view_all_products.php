<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page | View All Products</title>
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
        <?php $this->load->view('backend/admin_menu') ?> <!-- meng akses view "admin_menu" pada folder backend -->
        
        <div class="row">
            <div class="col-md-1"></div> <!-- membuat blok sisi kiri ("class="col-md-1">kiri</div>")-->
            <div class="col-md-10">                
                <table id="myTable" class="table table-striped table-bordered table-hover"> <!-- menampilkan; datatables (id="myTable")-->
                    <thead>
                        <tr>
                            <th>#</th> <!-- menampilkan "#" pada heading/kepala kolom -->
                            <th>Product Name</th> <!-- menampilkan "Product Name" pada heading/kepala kolom -->
                            <th>product Image</th> <!-- menampilkan "product Image" pada heading/kepala kolom -->
                            <th>Price</th> <!-- menampilkan "Price" pada heading/kepala kolom -->
                            <th>Stock</th> <!-- menampilkan "Stock" pada heading/kepala kolom -->
                            <th>                                
                                <?=anchor(  'admin/products/create',
                                            'Add Product',
                                            ['class'=>'btn btn-primary btn-sm'])
                                ?> <!-- meng eksekusi perintah controller ke function "create" dengan cara "('admin/products/create')" -->
                                   <!-- menuliskan/memunculkan tulisan "('Add Product',)" -->
                                   <!-- menambah isi table Add Product yang dapat berfungsi kelanjutan -->
                                   <!-- memberi warna table Add Product "['class'=>'btn btn-primary btn-sm']" -->
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($products2 as $product) : ?> <!-- untuk setiap "$products2" sebagai "$product" -->
                                                                   <!-- table "products2" dapat di akses oleh variabel "$product" -->
                                                                   <!-- sehingga variabel "$product" dapat mengakses data data-
                                                                        -yang ada tersimpan di database, table "products2" -->
                        <tr>                                       
                            <td><?=$product->id2?></td> <!-- menampilkan isi dari kolom baris id2,name2,price2,stock2 (lihat di database)- -->
                            <td><?=$product->name2?></td> <!-- -pada database-table yang di gunakan yang di tampung pada variabel "$product" -->
                            <td><?php
                                $product_image = [  'src'   => 'uploads/' . $product->image2,
                                                    'height' => '50' //menggunakan "height" berfungsi sebagai ukuran tinggi gambar yang ditampilkan
                                                    ];
                                echo img($product_image) //menampilkan gambar, dari database yang ditampung dalam variabel "$product_image"
                            ?></td> 
                            <td><?=$product->price2?></td>
                            <td><?=$product->stock2?></td>
                            <td>
                                <?=anchor(  'admin/products/update/' . $product->id2, 
                                            'Edit',
                                            ['class'=>'btn btn-default btn-sm'])
                                ?> <!-- menambah isi baris "Edit" dari table Add Product yang dapat berfungsi kelanjutan -->
                                   <!-- memberi warna table Add Product "['class'=>'btn btn-default btn-sm']" -->
                                <?=anchor(  'admin/products/delete/' . $product->id2, 
                                            'Delete',
                                            ['class'=>'btn btn-danger btn-sm',
                                                'onclick'=>'return confirm(\'Apakah Anda Yakin?\')' //menampilkan pesan "Apakah Anda Yakin?" jika menklik-
                                                                                                    //-delete untuk memastikan admin untuk mendelete
                                            ])
                                ?> <!-- menambah isi baris "Delete" dari table Add Product yang dapat berfungsi kelanjutan -->
                                   <!-- memberi warna table Add Product "['class'=>'btn btn-danger btn-sm']" -->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div> <!-- membuat blok sisi tengah ("class="col-md-10">tengah</div>")-->
            <div class="col-md-1"></div> <!-- membuat blok sisi kanan ("class="col-md-1">kanan</div>")-->
        </div>
        
        <script>
            $(document).ready(function(){  <!-- menampilkan; datatables-->
                $('#myTable').DataTable(); <!-- menampilkan; datatables-->
            });                            <!-- menampilkan; datatables-->
        </script>
    </body>        
</html>