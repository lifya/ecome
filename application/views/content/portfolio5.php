<!DOCTYPE html>
<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <meta charset="utf-8">
    <title>Cosmics Group</title>
     <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylesheet.css">
     <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  </head>

<body class="portfolio">
<div class="navbar navbar-default navbar-fixed-top" role="navigation" id="myNavbar">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button> 
      <a href="#Home" class="navbar-brand">COSMIC</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#Home">Home</a></li>
				<li><a href="#About">About Group</a></li>
				<li><a href="#recent_work">Product</a></li>
				<li><a href="#tubes">Project</a></li>
				<li><a href="#" data-toggle="modal" data-target='#modal'>Contact</a></li>
			</ul>
		</div>
	</div>
</div>

<!--Home-->
	<section id="Home" class="header">
   		<div class="jumbotron frosted">
        <center><img src="assets/images/logo.png"></center>
   			<h1>Computer Science Informatic</h1>
   			<h2>We are Cosmic Group</h2>
   		</div>
      <a href="<?php echo base_url() ?>C_sumary" class="btn btn-lg btn-success">View Detail</a>
   </section>
<!--Home-->

<!--About-->
<div id="About" class="container-fluid">
<h1 id="AboutGroup" class="text-primary" style="color:white;">Our Profile</h1>
  <div class="col-sm-6 article-wrapper">
    <article>
      <a href="<?php echo base_url() ?>C_about" class="more">more</a>
        <div class="img-wrapper"><img src="assets/images/elin.jpg" alt="" /></div>
        <h1>Elin Darnela</h1>
        <p>Informatic Engineering 15'</p>
    </article>
  </div>
  <div class="col-sm-6 article-wrapper">
    <article>
      <a href="<?php echo base_url() ?>C_about/lifya" class="more">more</a>
        <div class="img-wrapper"><img src="assets/images/lifya.jpg" alt="" /></div>
        <h1>Lifya Fitriani</h1>
        <p>Informatic Engineering 15'</p>
    </article>
  </div>
  <div class="col-sm-6 article-wrapper">
    <article>
      <a href="<?php echo base_url() ?>C_about/pipit" class="more">more</a>
        <div class="img-wrapper"><img src="assets/images/pipit.jpg" alt="" /></div>
        <h1>Pipit KurniaSari</h1>
        <p>Informatic Engineering 15'</p>
    </article>
  </div>
  <div class="col-sm-6 article-wrapper">
    <article>
      <a href="<?php echo base_url() ?>C_about/yulin" class="more">more</a>
        <div class="img-wrapper"><img src="assets/images/yulinda.jpg" alt="" /></div>
        <h1>Yulinda Ramadhana</h1>
        <p>Informatic Engineering 15'</p>  
    </article>
  </div>
</div>
<!--About--> 


<!--Recent Work-->
     <section id="recent_work">
     	<div class="container" id="container1">
          <div class="row">
            <div class="col-lg-12 page-header text-center">
              <h2 style="color:white;"><b>SOME OF OUR WORK</b></h2>
            </div>
          </div>
        </div>

        <div class="container" id="Portf">
            <div class="row Hd" id="rowPortf">
                <div class="col-lg-12 text-center">
                      <!--carousel-->
                      <div id="carousel" class="carousel slide">
                      <!-- carousel indicators-->
                          <ol class="carousel-indicators">
                            <li class="active" data-target="#carousel" data-slide-to="0"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <li data-target="#carousel" data-slide-to="2"></li>
                            <li data-target="#carousel" data-slide-to="3"></li>
                            <li data-target="#carousel" data-slide-to="4"></li>
                          </ol>
                      <div class="carousel-inner">
                        <!--item active-->
                             <div class="devices item active">
                              <div class="desktop">
                                  <a href="#" target="_blank">
                                     <img src="assets/images/gambar5.jpg"  >
                                 </a>
                              </div>
                              <div class="tablet">
                                 <a href="#" target="_blank">
                                     <img src="assets/images/gambar5.jpg" >
                                 </a>
                              </div>
                              <div class="mobile">
                                 <a href="#" target="_blank">
                                     <img src="assets/images/gambar5.jpg"  >
                                 </a>
                              </div>
                            </div>
                          <!--item active-->
                          <!--item2-->
                          <div class="devices item">
                              <div class="desktop">
                                    <a href="#" target="_blank">
                                      <img src="assets/images/work_pipit.png"  alt="yellow">
                                   </a>
                                </div>
                                <div class="tablet">
                                   <a href="#" target="_blank">
                                     <img src="assets/images/work_pipit.png"  alt="yellow">
                                  </a>
                                </div>
                                <div class="mobile">
                                   <a href="#" target="_blank">
                                      <img src="assets/images/work_pipit.png"  alt="yellow">
                                  </a>
                                </div>
                              </div>
                            <!--item2-->
                            <!--item3-->
                            <div class="devices item">
                              <div class="desktop">
                                  <a href="#" target="_blank">
                                      <img src="assets/images/work_yulinda.jpg" alt="shi">
                                  </a>
                              </div>
                              <div class="tablet">
                                  <a href="#" target="_blank">
                                    <img src="assets/images/work_yulinda.jpg" alt="shi">
                                  </a>
                              </div>
                              <div class="mobile">
                                 <a href="#" target="_blank">
                                    <img src="assets/images/work_yulinda.jpg" alt="shi">
                                  </a>
                              </div>
                            </div>
                            <!--item3-->
                            <!--item4-->
                             <div class="devices item">
                              <div class="desktop">
                                  <a href="#" target="_blank">
                                     <img src="assets/images/work_elin.jpg"   alt="Calculator">
                                 </a>
                              </div>
                              <div class="tablet">
                                 <a href="#" target="_blank">
                                     <img src="assets/images/work_elin.jpg"   alt="Calculator">
                                 </a>
                              </div>
                              <div class="mobile">
                                 <a href="#" target="_blank">
                                     <img src="assets/images/work_elin.jpg"   alt="Calculator">
                                 </a>
                              </div>
                            </div>
                        <!--item4-->

                        <!--item5-->
                             <div class="devices item">
                              <div class="desktop">
                                  <a href="#" target="_blank">
                                     <img src="assets/images/lipstyik.jpg"   alt="Calculator">
                                 </a>
                              </div>
                              <div class="tablet">
                                 <a href="#" target="_blank">
                                     <img src="assets/images/lipstyik.jpg"   alt="Calculator">
                                 </a>
                              </div>
                              <div class="mobile">
                                 <a href="#" target="_blank">
                                     <img src="assets/images/lipstyik.jpg"   alt="Calculator">
                                 </a>
                              </div>
                            </div>
                        <!--item5-->
                        
                       </div><!--carousel inner-->
                       <!--control-->
                       <a href="#carousel" class="carousel-control left" data-slide="prev">
                        <span class="gluphicon gluphicon-chevron-left"></span></a>
                        <a href="#carousel" class="carousel-control right" data-slide="next">
                        <span class="gluphicon gluphicon-chevron-right"></span></a>
                  </div>
            </div>
         </div>
    </section>

<!--TUBES-->
<div class="container" id="tubes" >
  <div class="row" id="baris" style="margin-top: 10%;">
    <div class="col-lg-8">
        <p class="ThumbnailText">
            <b><h3 style="color: white">DESCRIPTION</h3></b>
            <hr>
            <div class="row">
              <div class="col-sm-6">
                <b><h3>text summerization?</h3></b>
                <p>Peringkasan teks dokumen merupakan sebuah cara dalam menyingkat dokumen ke dalam sebuah ringkasan dengan mengambil informasi-informasi penting yang mewakili dokumen asli,</p>
              </div>
              <div class="col-sm-6">
                <b><h3>genetic algorithm?</h3></b>
                <ul type="circle" style="font-size: 20px;">
                  <li>Algoritma genetika adalah algoritma komputasi yang diinspirasi teori evolusi yang kemudian diadopsi menjadi algoritma komputasi untuk mencari solusi suatu permasalahan dengan cara yang lebih “alamiah”.</li><br>
                  <li>Algoritma genetika menggunakan teknik yang terinspirasi oleh biologi evolusioner seperti warisan, mutasi, seleksi alam dan rekombinasi.</li>
                </ul>
              </div>
            </div>
        </p>   
    </div>
    <div class="col-lg-4" id="gambar1">
        <img class="img-circle" src="assets/images/genetic.jpg" data-holder-rendered="true">
    </div>
  </div>

  <div class="row" id="baris">
    <div class="col-lg-7" id="gambar2">
        <img class="img-circle" src="assets/images/SR.jpg" data-holder-rendered="true">
    </div>
    <div class="col-lg-5">
        <p class="ThumbnailText">
            <b><h3 style="color: white">FUNGSIONAL <br>NON-FUNGSIONAL REQUIREMENT</h3></b>
            <hr>
            <p>
              <ol style="font-size: 20px;"><u>Fungsional Requirement:</u>
                <li>perangkat lunak dapat melakukan prapengolahan</li>
                <li>perangkat lunak dapat melakukan peringkasan teks</li>
              </ol><br>
              <ol style="font-size: 20px;"><u>Non-Fungsional Requirement:</u>
                <li>Usability : Perangkat Lunak memiliki tampilan yang sederhana dan mudah digunakan oleh user</li>
                <li>Portability : Pengaksesan sistem mudah dilakukan oleh user, di os manapun bisa digunakan</li>
              </ol>
            </p>
        </p>
    </div>
  </div>

  <div class="row" id="baris">
    <div class="col-lg-6">
        <p class="ThumbnailText">
            <b><h3 style="color: white">USE CASE</h3></b>
            <hr>
            <p>
              Meringkas teks
            </p>
        </p>
    </div>
    <div class="col-lg-6" id="gambar1">
        <img class="img-circle" src="assets/images/usecase.png" data-holder-rendered="true">
    </div>
  </div>
  
  <div class="row" id="baris">
    <div class="col-lg-7" id="gambar2">
        <img class="img-circle" src="assets/images/DB.png" data-holder-rendered="true">
    </div>
    <div class="col-lg-5">
        <p class="ThumbnailText">
            <b><h3 style="color: white">ENTITY RELATIONSHIP DIAGRAM</h3></b>
            <hr>
            <p>
              <img src="assets/images/erd.jpg">
            </p>
        </p>
    </div>
  </div>
</div>

<!--contact-->
	<div id="modal" class="modal fade">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	          <button data-dismiss="modal" class='pull-right'><i class="fa fa-close"></i></button>
	           <h4 class='modal-title'>Contact information:</h4>
	      </div>
	      <div class="modal-body">
	        <img src="assets/images/gambar-coklat.jpg">
	         <div class="carousel-caption">
	            <h3>idline: @153jkl</h3>
	            <p>Email: cosmics@gmail.com</p>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button class="btn btn-success " data-dismiss="modal">Close</button>
	  	  </div>
	    </div>
	  </div>
	</div>
