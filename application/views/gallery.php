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
                                                                  <li><a href="<?php echo base_url('berita/berita') ?>">Berita</a></li>
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->
                                          </div>
                                    </div>
                              </div>
                        </nav>
    </div> 
    <section id="gallery" class="home-section text-center bg-gray">

			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
						<h2>Our photo gallery</h2>
					</div>
					</div>
				</div>
			</div>
			</div>

		<div class="container">
      <div class="row">
            <?php foreach($photo as $u){?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                 <a href="<?=base_url()?>gambar/<?=$u->photo;?>" data-lightbox-gallery="gallery1"><img src="<?=base_url()?>gambar/<?=$u->photo;?>" width="400" height="400" class="img-responsive" alt="img"></a>
              </div>
            </div>
                <?php } ?>
          </div>
		</div>
	</section>
	<!-- /Section: services -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<p>&copy;Copyright 2014 . Alice Lonely . design by <a href="http://bootstraptaste.co">Bootstrap Themes</a></p>
				</div>
                <!-- 
                    All links in the footer should remain intact. 
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Lonely
                -->
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    
