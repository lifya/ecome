<!-- link websitenya http://getbootstrap.com/components/#navbar -->
<!-- Navbar default, Navbar adalah komponen meta responsif yang-
     -berfungsi sebagai "header navigasi/kepala halaman yang berfungsi kelanjutan"-
     -untuk aplikasi atau situs Anda. Mereka mulai runtuh (dan dapat diganti-
     -dalam tampilan seluler dan menjadi horizontal karena lebar viewport yang-
     -tersedia meningkat -->
<nav class="navbar navbar-default"> 
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display/
         Merek dan toggle dikelompokkan untuk tampilan mobile yang lebih baik -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class=navbar-brand>Toko Online</div> 
      <!-- menampilkan "Toko Online" yang terletak di sisi paling kanan --> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling/
         Kumpulkan link nav, form, dan konten lainnya untuk Toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
    <?php if($this->session->userdata('username2')) : ?> 
    <!-- kondisi yang meng akses variabel sementara untuk di tampilkan/digunakan(user_data), data yang terdapat-
         -pada "username2" -->   
      <ul class="nav navbar-nav navbar-left"> <!-- style membuat tampilan yang dimunculkan di letakkan sebelah kiri -->
          <li><?=anchor('admin/products','Products')?></li> 
          <!-- menampilkan "Products" dengan fungsi kelanjutan menuju ke-controller-
               -"products" yang tersimpan pada folder "admin" -->
          <li><?=anchor('admin/invoices','Invoices')?></li>   
          <!-- menampilkan "Invoices" dengan fungsi kelanjutan menuju ke-controller-
               -"invoices" yang tersimpan pada folder "admin" -->
      </ul>
      <ul class="nav navbar-nav navbar-right"> <!-- membuat tampilan yang muncul diletakkan di pojok kanan -->      
        <li>
            <span style="line-height:50px;"> <!-- style spasi vertikal dengan pixel "50px" dari atas -->
                <?php echo 'You Are: ' . $this->session->userdata('username2');?>
                <!-- menampilkan "You Are: " & "username2" dari input view "form_login" -->
            </span>
        </li>
        <li>
            <?php echo anchor('logout', 'Logout');?> <!-- menampilkan "Logout" dengan fungsi kelanjutan-
                                                          -yang menuju controller "logout" -->
        </li>
      </ul>
    <?php endif; ?>
        
    </div><!-- /.navbar-collapse/Navbar-runtuh -->
  </div><!-- /.container-fluid/Wadah-cairan -->
</nav>