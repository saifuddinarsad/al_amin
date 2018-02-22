<?php session_start(); ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Yayasan Al - Amin</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
</head>

<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header" class="fixed">
    <div class="header-content clearfix"> <a class="logo" href="index.html"><img src="images/logo.ico" class="mr-1"> YAYASAN AL-AMIN</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
		      <li><a href="#content-3-10">Beranda</a></li>
          <li><a href="#prosedur">Prosedur</a></li>
          <li><a href="#services">Pendaftaran</a></li>
          <li><a href="#login" id="login_status">Login</a></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
</section>
<!-- header section --> 
<!--About-->
<section id="content-3-10" class="content-block data-section nopad content-3-10">
	<div class="image-container col-sm-6 col-xs-12 pull-left">
		<div class="background-image-holder">

		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
				<div class="editContent" style="margin-top: -50px">
					<h3>YAYASAN PENDIDIKAN AL - AMIN</h3>
				</div>
				<div class="editContent">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					<p>Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				</div>
				<a href="#gallery" class="btn btn-outline btn-outline outline-dark">Selengkapnya</a>
			</div>
		</div><!-- /.row-->
	</div><!-- /.container -->
</section>

<!-- pendaftaran section -->
<section id="services" class="services service-section">
  <div class="container">
    <div class="section-header">
        <h2 class="wow fadeInDown animated">Pendaftaran</h2>
        <p class="wow fadeInDown animated">Pendaftaran periode 2018 telah dibuka. Segera bergabung dengan kami.</p>
    </div>
<div class="container"> 
    <div class="row">  
        <div id="content24" data-section="content-24" class="data-section"> 
        <div class="col-md-6">
        <h3 class="eidtContent">Prosedur Pendaftaran</h3>
        <p class="eidtContent">1. Pilih salah satu tingkat pendaftaran SMP / SMK disamping</p>
        <p class="editContent">2. Klik tombol "FORMULIR" untuk mengisi formulir sesuai dengan tingkatan</p>
        <p class="editContent">3. Jika perintah LogIn muncul, login saja terlebih dahulu sesuai alur</p>
        </div>
      <div class="col-md-6">
        <div class="row">
      <div class="col-md-12 services text-center"> <span class="icon icon-briefcase"></span>
        <div class="services-content">
          <h5>SMP</h5>
          <p>Segera isi formulir, dengan menekan tombol dibawah.</p>
          <!-- <a class="btn btn-outline" onclick="validate();">Formulir</a> -->
          <a class="btn btn-outline" href="#login">Formulir</a>
        </div>
      </div>
      <div class="col-md-12 services text-center"> <span class="icon icon-tools"></span>
        <div class="services-content">
          <h5>SMK</h5>
          <p>Segera isi formulir, dengan menekan tombol dibawah.</p>
          <!-- <a class="btn btn-outline" onclick="validate();">Formulir</a> -->
          <a class="btn btn-outline" href="#login">Formulir</a>
        </div>
      </div>
    </div>
      </div> 
      </div>
      </div><!-- end row -->
  </div>
  </div>
</section>
<!-- pendaftaran section -->

<!-- intro section -->
<section id="login" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="text-center">
        <h3>Mau mendaftar ? Silahkan login dahulu</h3>
        <p>Masukkan user name dan password sesuai dengan yang tertera pada PIN yang telah di beri panitia</p>
      </div>
      <form action="php/login_proses.php" method="post">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="form_user" name="username">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="form_pass" name="password">
        </div>
        <button type="submit" class="submitBnt">Submit</button>
      </form>
    </div>
  </div>
</section>
<!-- intro section -->
<!-- Footer section -->
<footer class="footer">
<div class="container-fluid">
<div id="map-row" class="row">
	 <div class="col-sm-4">
			<h2 style="margin-top:0;color:#fff;">Hubungi Kami</h2>
    		<address style="color:#fff;">
    			<strong>Yayasan Pendidikan Al - Amin</strong><br>
    			1234 Street Dr.<br>
    			Vancouver, BC<br>
    			Canada<br>
    			V6G 1G9<br>
    			<abbr title="Phone">Tel:</abbr> (604) 555-4321
    		</address>
			  © 2018 Company Name. Template by <a target="_blank" href="http://webthemez.com/interior-design/" title="Bootstrap Themes and HTML Templates">WebThemez.com</a>
	 </div>
	 </div>
</div>
</footer>
<!-- Footer section --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script>  
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script> 
<script type="text/javascript" src="js/jquery.devrama.slider.min-0.9.4.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$('.slider-banner').DrSlider({
				'transition': 'fade',
				showNavigation: false,
				progressColor: "#339999"
			});
		});

    window.validate = function(){
        if($("#login_status").val() == 'Login' || $("#login_status").val() == 'LOGIN'){
          $("#login_status").click();
        } else {
          if (tingkat == 'smp') {
            window.location.href = "views/formulir_smp";
          }else{
            window.location.href = "views/formulir_smk";
          }
        }

    };
	</script> 
</body>
</html>