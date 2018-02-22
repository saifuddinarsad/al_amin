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
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/flexslider.css">
<link rel="stylesheet" href="../css/jquery.fancybox.css">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/responsive.css">
<link rel="stylesheet" href="../css/font-icon.css">
<link rel="stylesheet" href="../css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header" class="fixed">
    <div class="header-content clearfix"> <a class="logo" href="index.html"><img src="../images/logo.ico" class="mr-1"> YAYASAN AL-AMIN
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
		    <!-- <li><a href="../">Beranda</a></li> -->
          <li>
              <a href="#login">
                <?php
                  if($_SESSION['id'] != null){
                    echo $_SESSION['user'];
                  }else{
                    header("location:../");
                  }
                ?>
              </a>
          </li>
          <li><a href="../php/Logout.php">Logout</a></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
</section>
<!-- header section --> 
<!-- contact section -->
<section id="contact" class="section">
  <div class="container">
      <div class="section-header">
        <h2 class="wow fadeInDown animated">Formulir Pendaftaran</h2>
        <h2 class="wow fadeInDown animated">SMP AL - AMIN</h2>
        <p class="wow fadeInDown animated">Isi formulir dengan benar dan lengkap. <br> Selamt mengisi.</p>
      </div>
      <form id="form1" runat="server">
         
      </form>
    <div class="row">
      <div class="col-md-8 conForm">
        <div id="message"></div>
        <form method="POST" action="../php/insert_smp.php" id="form_insert">
          <div class="form-group">
            <label for="name">Nama Lengkap :</label>
            <input name="nama" class="form-control" type="text" placeholder="Nama Lengkap" >
          </div>
          <div class="form-group">
            <label for="email">Alamat :</label>
            <input name="alamat" class="form-control" type="text" placeholder="Alamat" >
          </div>
          <div class="form-group">
            <label for="nisn">NSIN :</label>
            <input name="nisn" class="form-control" type="number" placeholder="NISN" >
          </div>
          <!-- <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Message..."></textarea> -->
          <input onclick="insert();" class="btn btn-outline" value="submit">
          <div id="simple-msg"></div>
        </form>
      </div>
      <div class="col-md-4">
        <form>
          <div class="form-group">
            <img id="blah" src="../images/profile.png" alt="your image" width="200" height="300" style="margin-left: 50px;" />
            <input class="form-control" type='file' id="imgInp" style="margin-top: 10px;" />
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- contact section --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.flexslider-min.js"></script>
<script src="../js/jquery.fancybox.pack.js"></script>
<script src="../js/modernizr.js"></script>
<script src="../js/main.js"></script>
<script type="text/javascript" src="../js/jquery.contact.js"></script>
<script type="text/javascript" src="../js/jquery.devrama.slider.min-0.9.4.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$('.slider-banner').DrSlider({
				'transition': 'fade',
				showNavigation: false,
				progressColor: "#339999"
			});
		});

    window.insert = function(){
      var data = $("#form_insert").serialize();
      $.ajax({
        type: "POST",
        url: "../php/insert_smp.php",
        data: data,
        success: function(res){
          console.log(res);
          alert("Data Berhasil Disimpan");
        }
      });
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
	</script>
</body>
</html>