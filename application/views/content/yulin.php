<!DOCTYPE html>
<html>
<head>

	<title>More</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylesheet1.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="aboutmore.html"> 
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation" id="myNavbar">
	<div class="container">
		<div class="nabar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button> 

			<a href="#Home" class="navbar-brand">COSMIC</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="portfolio5.php">Home</a></li>
				<li><a href="portfolio5.php">About Group</a></li>
				<li><a href="portfolio5.php">Product</a></li>
				<li><a href="portfolio5.php" onclick="tubes()">Tugas Besar</a></li>
				<li><a href="portfolio5.php" data-toggle="modal" data-target='#modal'>Contact</a></li>
			</ul>
		</div>
	</div>
</div>
	<header class="header">
    <div class="container">
      <div class="teacher-name">
        <div class="row">
        <div class="col-sm-9">
          <h2><strong>Yulinda Ramadhana</strong></h2>
        </div>
        </div>
      </div>

      <div class="row" style="margin-top:20px;">
        <div class="col-sm-3"> 
        <a href="#"><img src="<?php echo base_url()?>assets/images/yulinda.jpg" /> </a>
        </div>

        <div class="col-sm-6" style="margin-top: 30px;"> 
          <h5>Student of University Sriwijaya 15',</h5>
          <p>Informatic Engineering</p>
          <p>Motto of Life "Suffer today, Enjoy tommorow :)"</p>
        </div>

        <div class="col-sm-3 text-center social" style="margin-top: 30px;">
          <p>Phone:<strong>+628 5840350804</strong></p>
          <p>Email:<strong>yulinda.ramadhana@gmail.com</strong></p>
            <a href="#">
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x" ></i>
              <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="#">
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="#">
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="#">
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            </span></a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
  <div class="row">
        <div class="col-sm-12">
          <div class="card card-block text-xs-left">
            <h5><i class="fa fa-user fa-fw"></i>Biography</h5>
              <p>Name           : Yulinda Ramadhana<br>
                 Date of birth  : Palembang, 10 January 1998<br>
                 Address        : Palembang</p>
          </div>
        </div>
      </div>
  <div class="row">
    <div class="col-sm-12">
        <div class="card card-block">
          <h5><i class="fa fa-rocket fa-fw"></i>Interests</h5>
          <ul class="list-group" style="margin-top:15px;margin-bottom:15px;">
            <li class="list-group-item">Eat</li>
            <li class="list-group-item">Web Developer</li>
          </ul>
        </div>
    </div>
  </div>
</div>

<!--Footer-->
	<div class="footer" id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<h4><b>Contact Us</b></h4>
					<p><i class="fa fa-home" aria-hidden="true"></i> jalan inderalaya, Sumatera Selatan, Indonesia</p>
					<p><i class="fa fa-envelope-o" aria-hidden="true"></i> cosmic@gmail.com</p>
					<p><i class="fa fa-phone" aria-hidden="true"></i> 0711-30132</p>
					<p><i class="fa fa-globe" aria-hidden="true"></i> www.cosmic.com</p>
				</div>
				<div class="col-lg-4 col-md-4">
					<h4><b>About</b></h4>
					<p><i class="fa fa-square-o" aria-hidden="true"></i> About Us</p>
					<p><i class="fa fa-square-o" aria-hidden="true"></i> Privacy</p>
					<p><i class="fa fa-square-o" aria-hidden="true"></i> Term & Condition</p>
				</div>
				<div class="col-lg-4 col-md-4">
					<h4><b>Keep In Touch</b></h4>
					<i class="social fa fa-facebook-official" aria-hidden="true"></i>
					<i class="social fa fa-twitter" aria-hidden="true"></i>
					<i class="social fa fa-instagram" aria-hidden="true"></i>
					<i class="social fa fa-youtube-square" aria-hidden="true"></i>
					<i class="social fa fa-linkedin" aria-hidden="true"></i>
					<i class="social fa fa-pinterest-square" aria-hidden="true"></i>
					<i class="social fa fa-github" aria-hidden="true"></i><br>
					<input type="email" placeholder=" Subscribe For Updates" name="email"><button class="btn btn-success">SUBSCRIBE</button>
				</div>	
			</div>
		</div>
	</div>

	<!-- <script type="text/javascript">
		$('#Home').click(function()){
			window.location.href='portfolio.php';
		});
	</script> -->
</body>
</html>