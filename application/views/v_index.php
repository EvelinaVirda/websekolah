
    <!-- /Navigation -->  

	<!-- Section: about -->
    <section id="about" class="home-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					
						<div class="section-heading text-center">
						<div class="wow bounceInDown" data-wow-delay="0.2s">
							<h2>Ash Shiddiq Islamic Boarding School</h2>
						</div>
						<p class="wow bounceInUp" data-wow-delay="0.3s"></p>
						</div>
					
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
				
				<img src="<?php echo base_url() ?>assets/assets/img/img1.jpg" class="img-responsive img-rounded" alt="" />
				</div>		
				<div class="col-md-6">
					<?php foreach($profile_sekolah as $u){?>
					<p><strong><?php echo $u->judul_profile ?></strong></p>
					<p>
					<?php echo $u->isi_profile ?>
					</p>
					<blockquote>
					<?php echo $u->sub_isi_profile ?>
					</blockquote>
					<?php } ?>
				</div>
			</div>		
		</div>
	</section>
	<!-- /Section: about -->
	
	<!-- Section: separator -->
    <section id="separator" class="home-section parallax text-center" data-stellar-background-ratio="0.5">
		
		<div class="container">
			<div class="row">
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="align-center txt-shadow">
							<div class="icon">
								<i class="fa fa-smile-o  fa-5x"></i>
							</div>
						<a href=""><span class="color-white"> Taman Kanak-Kanak <br> TK </span></a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="align-center txt-shadow">
							<div class="icon">
								<i class="fa  fa-child fa-5x"></i>
							</div>
						<a href=""><span class="color-white">Sekolah Dasar <br> SD</span></a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="align-center txt-shadow">
							<div class="icon">
								<i class="fa  fa-users fa-5x"></i>
							</div>
						<a href=""><span class="color-white">Sekolah Menengah Pertama<br> SMP</span></a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="align-center txt-shadow">
							<div class="icon">
								<i class="fa  fa-institution fa-5x"></i>
							</div>
						<a href=""><span class="color-white">Pesantren</span></a>
						</div>
					</div>
			</div>		
		</div>
	</section>
	<!-- /Section: separator -->
	
	
	<!-- Section: gallery -->
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
                <div class="col-sm-12 col-md-12 col-lg-12" >
					<div class="wow bounceInUp" data-wow-delay="0.4s">
                    <div id="owl-works" class="owl-carousel">
                        <div class="item"><a href="<?php echo base_url() ?>assets/assets/img/gallery/1.jpg" data-lightbox-gallery="gallery1"><img src="<?php echo base_url() ?>assets/assets/img/gallery/1.jpg" width="900px" class="img-responsive" alt="img"></a></div>
                        <div class="item"><a href="<?php echo base_url() ?>assets/assets/img/gallery/2.jpg"  data-lightbox-gallery="gallery1"><img src="<?php echo base_url() ?>assets/assets/img/gallery/2.jpg" class="img-responsive" alt="img"></a></div>
                        <div class="item"><a href="<?php echo base_url() ?>assets/assets/img/gallery/3.jpg" data-lightbox-gallery="gallery1"><img src="<?php echo base_url() ?>assets/assets/img/gallery/3.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="<?php echo base_url() ?>assets/assets/img/gallery/4.jpg" data-lightbox-gallery="gallery1"><img src="<?php echo base_url() ?>assets/assets/img/gallery/4.jpg" class="img-responsive" alt="img"></a></div>
                        <div class="item"><a href="<?php echo base_url() ?>assets/assets/img/gallery/5.jpg"  data-lightbox-gallery="gallery1"><img src="<?php echo base_url() ?>assets/assets/img/gallery/5.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="<?php echo base_url() ?>assets/assets/img/gallery/6.jpg" data-lightbox-gallery="gallery1"><img src="<?php echo base_url() ?>assets/assets/img/gallery/6.jpg" class="img-responsive " alt="img"></a></div>
                    </div>
					</div>
					<a href="<?php echo base_url('gallery') ?>" class="btn btn-primary btn-lg btn-scroll">See Our Photos</a>
                </div>
            </div>
		</div>
	</section>
	<!-- /Section: services -->
	

	

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-offset-2">
					
					<div class="section-heading">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<h2>Hubungi Kami</h2>
					</div>
					<div class="text-center">
					<p class="lead"><i class="fa fa-phone"></i>0812-9542-2265</p>
			</div>
					<p class="wow lightSpeedIn" data-wow-delay="0.3s"></p>
					</div>
					
				</div>
			</div>
			</div>
		</div>
		<div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-offset-2">
            <div class="form-wrapper marginbot-50">
            	<form id="contact-form" method="POST" action="<?php echo site_url('kontak/proses_kontak');?>">
                <div class="row">
    
                        <div class="form-group">
                            <label for="name">
                                Nama</label>
                            <input type="text" class="form-control" name="nama" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email / Phone</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email or phone" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <input type="text" class="form-control" name="subjek" id="Subject" placeholder="Subject" required="required" />
                        </div>
          
             
                        <div class="form-group">
                            <label for="name">
                                Pesan</label>
                            <textarea id="message" class="form-control" name="pesan" rows="9" cols="25" required="required"
                                placeholder="Pesan"></textarea>
                        </div>
       
           				<input class="btn btn-primary btn-block" type="submit" name="submit" value="SEND" id="btnContactUs">

                </div>
                </form>
            </div>
			
        </div>
    </div>	
		</div>
<div class="container">
	<div class="row">
				<div class="col-lg-8 col-md-offset-2">
					
					<div class="section-heading">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<h2>Maps</h2>
					</div>
					<p class="wow lightSpeedIn" data-wow-delay="0.3s"></p>
					</div>
					
				</div>
			</div>
		<div class="maps">
			<div id="map">
				<div class="map-responsive">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63464.576206470556!2d106.9652406!3d-6.1927778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x235ce2ebf9121fc7!2sAsh+Shiddiq+Islamic+Boarding+School!5e0!3m2!1sid!2svi!4v1551253017070" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
	</div>
	</div>
	</section>


	<!-- /Section: contact -->

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
    
