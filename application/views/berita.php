 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ash Shiddiq Islamic Boarding School</title>

    <!-- CSS -->
    <link href="<?php echo base_url() ?>assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assets/assets/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/assets/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url() ?>assets/assets/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="<?php echo base_url() ?>assets/assets/css/owl.theme.css" rel="stylesheet" media="screen" /> 
  <link href="<?php echo base_url() ?>assets/assets/css/animate.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/assets/css/maps.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/assets/color/default.css" rel="stylesheet">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <!-- Preloader -->
    <div id="preloader">
      <div id="load"></div>
    </div>

    <!-- Section: intro -->
    <section id="intro" class="intro">
    
        <div class="slogan">
            <a href="#"><img src="<?php echo base_url() ?>assets/assets/img/logo.jpg" width="150px" alt="" /></a>
        </div>
        <div class="page-scroll">
            <a href="#about">
                <i class="fa fa-angle-down fa-5x animated"></i>
            </a>
        </div>
    </section>
    <!-- /Section: intro -->
    
    <!-- Navigation -->
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
                              <div class="container">
                                    <div class="row">
                                          <div class="col-md-12">
                         
                                          <!-- Brand and toggle get grouped for better mobile display -->
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <!-- Collect the nav links, forms, and other content for toggling -->
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav">
                                                                  <li class="active"><a href="<?php echo base_url('v_index') ?>#intro">Beranda</a></li>
                                                                  <li><a href="<?php echo base_url('v_index#about') ?>">Tentang</a></li>
                                                                  <li><a href="<?php echo base_url('v_index#gallery') ?>">Gallery</a></li>
                                                                  <li><a href="<?php echo base_url('v_index#contact') ?>">Kontak</a></li>
                                                                  <li><a href="#">Berita</a></li>
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->
                                          </div>
                                    </div>
                              </div>
                        </nav>
    </div> 
<section id="gallery" class="home-section text-left bg-gray">
<div class="container">
   <div class="content-wrapper">
            <div class="col-md-8">
              <?php foreach($berita as $u){?>
                  <span class="bg-red">
                    <?php echo $u->date ?>
                  </span>
                    <h3 class="timeline-header"><a href="#"><?php echo $u->judul ?></a></h3>
                     <img src="<?=base_url()?>gambar/<?=$u->gambar;?>" width="400" height="400" class="img-responsive" alt="img">
                    <p>
                      <?php echo $u->isi ?>
                    </p>
                    <hr>
              <?php } ?>
            </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <p>&copy;Copyright 2014 . Alice Lonely . design by <a href="http://bootstraptaste.co">Bootstrap Themes</a></p>
        </div>
      </div>  
    </div>
  </footer>

    <!-- Core JavaScript Files -->
    
