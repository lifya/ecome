<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page | View All Invoices</title>
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
                            <th>Invoice ID</th>
                            <th>Date</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                            <!-- menampilkan "Invoice ID, Date, Due Date, Status, Actions" pada heading/kepala kolom -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(!empty($invoices2)) :
                            foreach($invoices2 as $invoice) : ?> <!-- untuk setiap "$invoices2" sebagai "$invoice" -->
                                                                   <!-- table "$invoices2" dapat di akses oleh variabel "$invoice" -->
                                                                   <!-- sehingga variabel "$invoice" dapat mengakses data data-
                                                                        -yang ada tersimpan di database, table "$invoices2" -->
                        <tr>                                       
                            <td><?=$invoice->id2?></td> 
                            <td><?=$invoice->date2?></td>
                            <td><?=$invoice->due_date2?></td>
                            <td><?=$invoice->status2?></td>
                            <!-- menampilkan data pada database/table/head "id2, date2, due_date2, status2" yang diset kedalam variabel "$invoice" -->
                            <td>
                                <?=anchor(  'admin/invoices/detail/' . $invoice->id2, 
                                //menampilkan data database/table/head "id2" yang di set kedalam variabel "$invoice"-
                                //-dengan fungsi kelanjutan yang menuju ke function "detail" dari controller "invoices" yang tersimpan pada folder "admin"
                                            'Details',
                                            ['class'=>'btn btn-default btn-sm'])
                                            //style
                                ?>
                            </td>
                        </tr>
                        <?php endforeach; ?> <!-- penutup sintax perulangan "foreach" pada php -->
                        <?php endif; ?>
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