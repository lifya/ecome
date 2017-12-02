<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>Shopping History</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> <!-- Complete CSS --> 
                                                                                                         <!-- Jenis huruf berubah -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!-- JQuery -->    
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Complete JavaScript -->     
    </head>
    <body>
        <?php $this->load->view('layout/top_menu') ?> <!-- meng akses view "top_menu" yang tersimpan pada folder layout -->
        
        <?php if($history2 != false) : ?>
        <?= $this->session->flashdata('message')?>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Invoice ID #</th> 
                    <th>Invoice Date</th>
                    <th>Due Date</th>
                    <th>Total Amout</th>
                    <th>Status</th> 
                    <!-- menampilkan pada head table "Invoice ID, Invoice Date, Due Date, Total Amount, Status -->
                </tr>
            </thead>
            <tbody>
                <?php
                    if(!empty($history2)) :
                    foreach ($history2 as $row) :
                ?>
                    <tr>
                        <td><?= $row->id2 ?></td> <!-- menampilkan data/nilai/variabel "$row" pada database/table/head "id2" -->
                        <td><?= $row->date2 ?></td> <!-- menampilkan data/nilai/variabel "$row" pada database/table/head "date2" -->
                        <td><?= $row->due_date2 ?></td> <!-- menampilkan data/nilai/variabel "$row" pada database/table/head "due_date2" -->  
                        <td><?= $row->total?></td> <!-- menampilkan data/nilai/variabel "$row" pada database/table/head "total" -->
                        <td>
                            <?= $row->status2 ?>
                            <?php
                                if($row->status2 == 'unpaid'){
                                anchor('customer/payment_confirmation/'.$row->id2,'Confirm Payment',
                                        array('class'=>'btn btn-primary btn-xs')
                                     );
                                }
                        ?>
                    </td>
                    </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <?php else : ?>
        <p align="center">There are no shopping history for you.. <?=anchor('/','Shop now')?></p>
                        <!-- Tidak ada sejarah belanja untuk Anda.. Belanja Sekarang -->
        <?php endif; ?>
    </body>
</html>