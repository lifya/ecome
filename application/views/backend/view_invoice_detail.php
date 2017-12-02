<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page | View Invoice Detail</title>
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
                
                <h3>Items Ordered in Invoice #<?=$invoice2->id2?></h3> 
                <!-- menampilkan "Items Ordered in Invoice #" dan menampilkan data dari database "id2" pada-
                     -nilai yang dibawa/diakses oleh "$invoice2" -->
                <table id="myTable" class="table table-striped table-bordered table-hover"> <!-- menampilkan; datatables (id="myTable")-->
                    <thead> <!-- bagian head/kepala table --> 
                        <tr> <!-- kepanjangan dari table row, digunakan untuk mendefiniskan baris pada tabel -->
                             <!-- yang artinya dalam lingkup ini untuk 1 baris -->
                            <th>Product ID</th>
                            <!-- kepanjangan dari table heading, digunakan untuk membuat judul sebuah table seperti No,-
                                 -dan nama. biasanya di tanda dengan hurufnya menjadi bold -->
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody> <!-- bagian badan/isi table -->
                        <?php //source code php    
                            if(!empty($orders2)) : //kondisi untuk mengatasi error vailed pada funsi perulangan "foreach"
                            $total = 0;
                            foreach($orders2 as $order) : //perulangan "foreach ($nama_array as $key => $value"                         
                            $subtotal = $order->qty2 * $order->price2;
                            $total += $subtotal;                                                            
                        ?><
                            <tr>                                       
                                <td><?=$order->product_id2?></td> <!-- menampilkan data dari database/table/head "product_id" -->
                                <td><?=$order->product_name2?></td> <!-- menampilkan data dari database/table/head "product_name2" -->
                                <td><?=$order->qty2?></td> <!-- menampilkan data dari database/table/head "qty2" -->
                                <td><?=$order->price2?></td> <!-- menampilkan data dari database/table/head "price2" -->
                                <td><?=$subtotal?></td> <!-- menampilkan data dari "$subtotal" -->
                            </tr>
                        <?php endforeach; ?> <!-- penutup sintax perulangan foreach pada php -->
                        <?php endif; ?> <!-- penutup sintax perkondisian if pada php -->                                                                          
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" align="right">Total</td>
                            <td><?=$total?></td>
                        </tr>
                    </tfoot>
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