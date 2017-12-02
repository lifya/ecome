<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>Payment Confirmation</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> <!-- Complete CSS --> 
                                                                                                         <!-- Jenis huruf berubah -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!-- JQuery -->     
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Complete JavaScript -->      
    </head>
    <body>
        <?php $this->load->view('layout/top_menu') ?> <!-- meng akses view "top_menu" yang tersimpan pada folder layout -->
                        
        <div><?=validation_errors()?></div> <!-- menampilkan pesan "validation error/ required | alpha numeric" -->
        <div><?=$this->session->flashdata('error')?></div> <!-- menampilkan pesan "('error','Wrong Username / Password')" -->
        
        <?=form_open('customer/payment_confirmation/', ['class'=>'form-horizontal'])?> 
        <!-- meng akses controller "customer" ke function "payment_confirmation" -->
        <div class="container-fluid">
            <div class="form-group"> <!-- style pelengkap -->
              <label for="inputEmail3" class="col-sm-2 control-label">Invoice ID</label>
              <!-- menampilkan "Invoice ID" disamping kotak inputannya dengan style pelengkap -->
              <div class="col-sm-10"> <!-- style pelengkap, yang membuat kotak inputan sejajar dengan ket input -->
                <input type="text" class="form-control" name="invoice_id2" value="<?=($invoice_id2 != 0?$invoice_id2:'')?>">
                <!-- type "text" adalah type inputan adalah text -->
                <!-- name="invoice_id2" diibaratkan variabel input -->
              </div>
            </div>
        
            <div class="form-group"> <!-- style pelengkap -->
              <label for="inputPassword3" class="col-sm-2 control-label">Amount Tranfered</label>
              <!-- menampilkan "Amount Tranfered" disamping kotak inputannya dengan style pelengkap -->
              <div class="col-sm-10"> <!-- style pelengkap, yang membuat kotak inputan sejajar dengan ket input -->
                <input type="text" class="form-control" name="amount2">
                <!-- type "text" adalah type inputan adalah text -->
                <!-- name="amount2" diibaratkan variabel input -->
              </div>
            </div>
        
            <div class="form-group"> <!-- style pelengkap -->
              <div class="col-sm-offset-2 col-sm-10"> <!-- style pelengkap button, yang membuat sejajar vertikal-
                                                           -dengan input, kotak lain -->
                <button type="submit" class="btn btn-default">Confirm My Payment</button>
                <!-- membuat button/input tulisan "Confirm My Payment" dengan kotak/button -->
              </div>
            </div>
        </div>
          </form>
    </body>
</html>