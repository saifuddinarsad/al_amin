<?php 
  include "../php/connection.php";
  session_start(); 
?>
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
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
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
        <h2 class="wow fadeInDown animated">Admin Panel</h2>
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item active">
            <a class="nav-link active" data-toggle="tab" href="#tab_smp">DATA SMP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab_smk">DATA SMK</a>
          </li>
        </ul>
      </div>

      <!-- Tab panes -->
      <div class="tab-content">
        <div id="tab_smp" class="container tab-pane active"><br>
          <table id="table_smp" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>NAMA</th>
                      <th>NISN</th>
                      <th>ALAMAT</th>
                      <th>STATUS</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th>ID</th>
                      <th>NAMA</th>
                      <th>NISN</th>
                      <th>ALAMAT</th>
                      <th>STATUS</th>
                  </tr>
              </tfoot>
              <tbody>
                <?php
                    $result = mysqli_query($link, "SELECT id, nama, nisn, alamat, status FROM tb_smp");
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['nama']; ?></td>
                      <td><?php echo $row['nisn']; ?></td>
                      <td><?php echo $row['alamat']; ?></td>
                      <?php if($row['status'] == 'TL'){ ?>
                        <td class="bg-danger">
                          TIDAK LULUS
                        </td>
                      <?php } else { ?>
                        <td class="bg-success">
                          LULUS
                        </td>
                      <?php } ?>
                  </tr>
                  <?php $no++; } ?>
              </tbody>
          </table>
        </div>
        <div id="tab_smk" class="container tab-pane fade"><br>
          <table id="table_smk" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>NAMA</th>
                      <th>NISN</th>
                      <th>ALAMAT</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th>ID</th>
                      <th>NAMA</th>
                      <th>NISN</th>
                      <th>ALAMAT</th>
                  </tr>
              </tfoot>
              <tbody>
                <?php
                    $result = mysqli_query($link, "SELECT id, nama, nisn, alamat FROM tb_smk");
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['nama']; ?></td>
                      <td><?php echo $row['nisn']; ?></td>
                      <td><?php echo $row['alamat']; ?></td>
                  </tr>
                  <?php $no++; } ?>
              </tbody>
          </table>
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
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $('.slider-banner').DrSlider({
        'transition': 'fade',
        showNavigation: false,
        progressColor: "#339999"
      });
      $('#table_smp').DataTable({
        "iDisplayLength": 30,
        dom: 'Bfrtip',
        buttons: [
             'print','excel', 'pdf'
        ]
      });

      $('#table_smk').DataTable({
        "iDisplayLength": 30,
        dom: 'Bfrtip',
        buttons: [
             'print','excel', 'pdf'
        ]
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
  </script>
</body>
</html>