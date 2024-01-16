<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wedding &mdash; Rizky &amp; Aditya</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Designed by gstechnology.id" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<!--<nav class="fh5co-nav" role="navigation">-->
		<!--<div class="container">-->
		<!--	<div class="row">-->
		<!--		<div class="col-xs-2">-->
		<!--			<div id="fh5co-logo"><a href="index.php">Wedding<strong>.</strong></a></div>-->
		<!--		</div>-->
		<!--		<div class="col-xs-10 text-right menu-1">-->
		<!--			<ul>-->
						<!--<li class="active"><a href="index.html">Home</a></li>-->
						<!--<li><a href="#">Story</a></li>-->
						<!--<li class="has-dropdown">-->
						<!--	<a href="#">Services</a>							-->
						<!--</li>-->
						<!--<li class="has-dropdown">-->
						<!--	<a href="#">Gallery</a>-->
						<!--</li>-->
						<!--<li><a href="#">Contact</a></li>-->
		<!--			</ul>-->
		<!--		</div>-->
		<!--	</div>-->
			
		<!--</div>-->
	<!--</nav>-->

	<!--<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/couple-1.jpg);" data-stellar-background-ratio="0.5">-->
	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/couple-1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>R &amp; A</h1>
							<?php if(isset($_GET['kpd'])):?>
    							<h2 style="margin-bottom: 0px;">Kepada Yth.</h2>
    							<h2 style="font-size: 30px;font-weight: 700;"><?php echo $_GET['kpd']?></h2>
    						<?php else :?>
    						    <h2>Kami Mengundang Anda ke Pernikahan Kami</h2>
							<?php endif;?>
							<div class="simply-countdown simply-countdown-one"></div>
							<!--<p><a href="#fh5co-couple" class="btn btn-default btn-sm">BUKA UNDANGAN</a></p>-->
							<audio id="myAudio">
                              <source src="audio/song.mp3" type="audio/mpeg">
                            </audio>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Undangan Pernikahan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
          <?php if(isset($_GET['kpd'])):?>
          Kepada Yth. <br>
          <?php echo $_GET['kpd']?><br>
        Mohon maaf apabila ada kesalahan penulisan nama/gelar<br>
    						<?php else :?>
    						    <h2>Kami Mengundang Anda ke Pernikahan Kami</h2>
							<?php endif;?>
          
      </div>
      <div class="modal-footer text-center">
        <button type="button" id="buka_undangan" class="btn btn-primary" data-dismiss="modal">BUKA UNDANGAN</button>
      </div>
    </div>
  </div>
</div>

	<div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Asalamu'alaikum Warahmatullahi Wabarakatuh</h2>
					<h3>We invited you to celebrate our wedding</h3>
					<!--<p>We invited you to celebrate our wedding</p>-->
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="images/couple-1.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>R S.Kom </h3>
						<p>Putri kedua dari Bapak Drs.B & Ibu P, SH</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="images/couple-1.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>A, A.Md</h3>
						<p>Putra Kedua dari Bapak H, SH & Ibu Hj. Wati</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--<div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/couple-1.jpg);">-->
	<div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/couple-1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Our Special Events</span>
					<h2>Wedding Events</h2>
				</div>
			</div>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Akad Nikah</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>08:00 WIB</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Sabtu 11</span>
										<span>November, 2023</span>
									</div>
									<p>Bertempat di<br> Indonesia</p>
									<br>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Resepsi Pernikahan</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>18:30 - 21:00 WIB</span>
										
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Sabtu 11</span>
										<span>November, 2023</span>
									</div>
									<p>Bertempat di <br> Indonesia</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-gallery" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<span>Our Memories</span>
						<h2>Wedding Gallery</h2>
					</div>
				</div>
				<div class="row row-bottom-padded-md">
					<div class="col-md-12">
						<ul id="fh5co-gallery-list">

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/couple-1.jpg); ">
								<a href="images/couple-1.jpg">
									<div class="case-studies-summary">
									</div>
								</a>
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/couple-1.jpg); ">
								<a href="images/couple-1.jpg" class="color-2">
									<div class="case-studies-summary">
									</div>
								</a>
							</li>


							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/couple-1.jpg); ">
								<a href="images/couple-1.jpg" class="color-3">
									<div class="case-studies-summary">
									</div>
								</a>
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/couple-1.jpg); ">
								<a href="images/couple-1.jpg" class="color-4">
									<div class="case-studies-summary">
									</div>
								</a>
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/couple-1.jpg); ">
								<a href="images/couple-1.jpg" class="color-3">
									<div class="case-studies-summary">
									</div>
								</a>
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/couple-1.jpg); ">
								<a href="images/couple-1.jpg" class="color-4">
									<div class="case-studies-summary">
									
										
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	

	<!--<div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url(images/couple-1.jpg);">-->
	<!--	<div class="overlay"></div>-->
	<!--	<div class="container">-->
	<!--		<div class="row">-->
	<!--			<div class="display-t">-->
	<!--				<div class="display-tc">-->
	<!--					<div class="col-md-3 col-sm-6 animate-box">-->
	<!--						<div class="feature-center">-->
	<!--							<span class="icon">-->
	<!--								<i class="icon-users"></i>-->
	<!--							</span>-->
								<!-- ganti data-to nya -->
	<!--							<span class="counter js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>-->
	<!--							<span class="counter-label">Estimated Guest</span>-->

	<!--						</div>-->
	<!--					</div>-->
	<!--					<div class="col-md-3 col-sm-6 animate-box">-->
	<!--						<div class="feature-center">-->
	<!--							<span class="icon">-->
	<!--								<i class="icon-user"></i>-->
	<!--							</span>-->

	<!--							<span class="counter js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>-->
	<!--							<span class="counter-label">We Catter</span>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--					<div class="col-md-3 col-sm-6 animate-box">-->
	<!--						<div class="feature-center">-->
	<!--							<span class="icon">-->
	<!--								<i class="icon-calendar"></i>-->
	<!--							</span>-->
	<!--							<span class="counter js-counter" data-from="0" data-to="200" data-speed="5000" data-refresh-interval="50">1</span>-->
	<!--							<span class="counter-label">Events Done</span>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--					<div class="col-md-3 col-sm-6 animate-box">-->
	<!--						<div class="feature-center">-->
	<!--							<span class="icon">-->
	<!--								<i class="icon-clock"></i>-->
	<!--							</span>-->

	<!--							<span class="counter js-counter" data-from="0" data-to="2345" data-speed="5000" data-refresh-interval="50">1</span>-->
	<!--							<span class="counter-label">Hours Spent</span>-->

	<!--						</div>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->

	<div id="fh5co-testimonial">
		<div class="container">
			<div class="row">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<!--<span>Best Wishes</span>-->
						<h2>Amplop Online</h2>
						<span>Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Dan jika memberi adalah ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless.</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="wrap-testimony">

							    <div class="row animate-box">
									<div class="col-md-8 col-md-offset-2 text-center ">
										<br>
									
										
										<p>	No.Rekening <br> <figure> <img src="foto/jatim.png" alt="bank Jatim" height="57" width="240"></figure> <br>
										 12345678 <br> A/N  abcdef </p>
									</div>
							    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-services" class="fh5co-section-gray">
			<div class="container">

				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Lokasi Acara</h2>
						<p>Indonesia</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center fh5co-heading">
					  <div class="mapouter">
						<div class="gmap_canvas">
						  <iframe src="https://maps.google.com/maps?q=636+5th+Ave%2C+New+York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			</div>
		</div>

	


	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/couple-1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Salam Aditya Rizky</h2>
					<p>Cinta sejati tidak pernah memandang waktu dan tempat. Itu terjadi tiba-tiba, dalam sekejap, sesingkat kedipan mata dan denyut nadi.</p>
				</div>
			</div>
			<!--<div class="row animate-box">-->
			<!--	<div class="col-md-10 col-md-offset-1">-->
			<!--		<form class="form-inline">-->
			<!--			<div class="col-md-4 col-sm-4">-->
			<!--				<div class="form-group">-->
			<!--					<label for="name" class="sr-only">Name</label>-->
			<!--					<input type="name" class="form-control" id="name" placeholder="Name">-->
			<!--				</div>-->
			<!--			</div>-->
			<!--			<div class="col-md-4 col-sm-4">-->
			<!--				<div class="form-group">-->
			<!--					<label for="email" class="sr-only">Email</label>-->
			<!--					<input type="email" class="form-control" id="email" placeholder="Email">-->
			<!--				</div>-->
			<!--			</div>-->
			<!--			<div class="col-md-4 col-sm-4">-->
			<!--				<button type="submit" class="btn btn-default btn-block">I am Attending</button>-->
			<!--			</div>-->
			<!--		</form>-->
			<!--	</div>-->
			<!--</div>-->
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2023. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="https://www.gstechnology.id/" target="_blank">gstechnology.id</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<!--<li><a href="#"><i class="icon-twitter"></i></a></li>-->
							<!--<li><a href="#"><i class="icon-facebook"></i></a></li>-->
							<!--<li><a href="#"><i class="icon-linkedin"></i></a></li>-->
							<!--<li><a href="#"><i class="icon-dribbble"></i></a></li>-->
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
	var aux = document.getElementById("myAudio"); 
	
	$( document ).ready(function() {
        $('#exampleModal').modal('show');
        aux.play(); 
        $("#buka_undangan").click(function(){
           aux.play();
        });
        $("#exampleModal").click(function(){
           aux.play();
        });
    });
    // var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);
    var d = new Date(2023, 12, 11);
    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth(),
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 0,
        day: d.getDate(),
        enableUtc: false
    });
</script>

	</body>
</html>

