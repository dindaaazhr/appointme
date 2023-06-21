@include('guest')
<!DOCTYPE html>
	<html lang="zxx">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">

	<title>AppointMe</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/logo-icon.png" />

	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<!-- Icon Font Css -->
	<link rel="stylesheet" href="plugins/icofont/icofont.min.css">
	<!-- Slick Slider  CSS -->
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	</head>

	<body id="top">

		<header>
			<div class="header-top-bar">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<ul class="top-bar-info list-inline-item pl-0 mb-0">
								<li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>support@appointme.com</a></li>
								<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Soekarno-Hatta St. 65141, Indonesia</li>
							</ul>
						</div>

						<div class="col-lg-6">
							<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
								<a href="tel:+23-345-67890" >
									<span>Call Now : </span>
									<span class="h4">(0341)574006</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<nav class="navbar navbar-expand-lg navigation" id="navbar">
				<div class="container">
					<a class="navbar-brand" href="{{ route('pasiens.home') }}">
						<img src="images/logo.png" alt="" class="img-fluid">
					</a>

					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icofont-navigation-menu"></span>
				</button>
			
				<div class="collapse navbar-collapse" id="navbarmain">
					<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#beranda" style="scroll-behavior: smooth;">Beranda</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="{{ route('pasiens.poli') }}">Poli</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dokter<i class="icofont-thin-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropdown03">
							<li><a class="dropdown-item" href="{{ route('pasiens.doctor') }}">Dokter</a></li>
							<li><a class="dropdown-item" href="{{ route('pasiens.janji') }}">Buat Janji</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="{{route('pasiens.profil')}}">Profil</a></li>
					<li class="nav-item"><a class="nav-link" href="{{route('pasiens.kontak')}}">Kontak</a></li>
					</ul>
				</div>
				</div>
			</nav>
		</header>
	
<!-- Slider Start -->
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing "> A P P O I N T M E</span>
					<h1 class="mb-3 mt-3">Nikmati Kemudahan Pendaftaran Online Antrian Dokter</h1>
					
					<p class="mb-4 pr-5">Selamat datang di layanan antrian dokter online kami! Kami memahami betapa berharganya waktu Anda dan kami berkomitmen untuk menyediakan pengalaman antrian yang efisien dan nyaman bagi Anda.</p>
					<div class="btn-container ">
						<a href="{{ route('pasiens.janji') }}"  class="btn btn-main-2 btn-icon btn-round-full">Buat Janji Sekarang <i class="icofont-simple-right ml-2 "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>Akses layanan 24 jam!</span>
						<h4 class="mb-3">Antrian Online Dokter</h4>
						<p class="mb-4">Nikmati kemudahan mengatur janji temu dengan dokter favorit Anda melalui website kami</p>
						<a href="{{ route('pasiens.janji') }}" class="btn btn-main btn-round-full">Buat janji</a>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span>Jadwal Layanan Poli</span>
						<h4 class="mb-3">Poli</h4>
						<ul class="w-hours list-unstyled">
							<li class="d-flex justify-content-between">OBGYN  <span>8:00 - 17:00</span></li>
							<li class="d-flex justify-content-between">ANAK        <span>9:00 - 17:00</span></li>
							<li class="d-flex justify-content-between">PENYAKIT DALAM       <span>10:00 - 17:00</span></li>
							<li class="d-flex justify-content-between">BEDAH UMUM                     <span>10:00 - 17:00</span></li>
							<li class="d-flex justify-content-between">MATA 						  <span>10:00 - 17:00</span></li>
						</ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Panggilan Ambulance</span>
						<h4 class="mb-3">1-800-700-6200</h4>
						<p>Ketika setiap detik berharga, kami memberikan respon cepat untuk kebutuhan medis mendesak Anda</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6 circle__position" >
				<div class="about-img">
					<img src="images/about/img-1.jpg" alt="" class="img-fluid">
					<img src="images/about/img-2.jpg" alt="" class="img-fluid mt-4">
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img mt-4 mt-lg-0">
					<img src="images/about/img-3.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<h2 class="title-color">Poli <br>kami</h2>
					<p class="mt-4 mb-5">Di Poli Rumah Sakit kami, kesehatan Anda adalah prioritas utama. Kami menyediakan layanan medis yang komprehensif dan berkualitas tinggi untuk memenuhi kebutuhan Anda dan keluarga Anda.</p>

					<a href="{{ route('pasiens.poli') }}" class="btn btn-main-2 btn-round-full btn-icon">Selengkapnya<i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3">5</span>
						<p>Poliklinik</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3">200</span>++
						<p>Antrean</p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-badge"></i>
						<span class="h3">20</span>++
						<p>Dokter Spesialis</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-globe"></i>
						<span class="h3">137</span>++
						<p>Pasien</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- service starts -->

<section class="section service gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>Layanan Rumah Sakit</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Kami adalah rumah sakit yang berkomitmen untuk memberikan perawatan medis berkualitas tinggi kepada pasien kami. Kami memiliki tim medis yang terlatih, peralatan medis modern, dan fasilitas yang nyaman untuk memastikan pengalaman perawatan yang optimal.</p>
				</div>
			</div>
		</div>

		<div class="row mb-4">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4 border-bottom border-info">
					<div class="icon d-flex align-items-center">
						<i class="icofont-laboratory text-lg"></i>
						<h4 class="mt-3 mb-3">Laboraturium</h4>
					</div>

					<div class="content">
						<p class="mb-4">Kami adalah laboratorium terkemuka yang menawarkan berbagai layanan uji dan analisis untuk memenuhi kebutuhan Anda</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-heart-beat-alt text-lg"></i>
						<h4 class="mt-3 mb-3">Imunisasi</h4>
					</div>
					<div class="content">
						<p class="mb-4">Tim kami terdiri dari profesional medis yang terlatih dan berpengalaman dalam memberikan imunisasi kepada anak-anak dan dewasa.</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4 border-bottom border-info">
					<div class="icon d-flex align-items-center">
						<i class="icofont-tooth text-lg"></i>
						<h4 class="mt-3 mb-3">Praktek Dokter</h4>
					</div>
					<div class="content">
						<p class="mb-4">Kami menggunakan teknologi medis terkini dan metode perawatan terbaru untuk memberikan diagnosis yang akurat dan memberikan perawatan yang efektif. </p>
					</div>
				</div>
			</div>


			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-crutch text-lg"></i>
						<h4 class="mt-3 mb-3">Bedah</h4>
					</div>

					<div class="content">
						<p class="mb-4">Kami menggunakan teknologi dan peralatan medis terkini untuk memastikan prosedur bedah yang akurat dan minim invasif, sehingga meminimalkan risiko dan waktu pemulihan pasien.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4 border-bottom border-info">
					<div class="icon d-flex align-items-center">
						<i class="icofont-brain-alt text-lg"></i>
						<h4 class="mt-3 mb-3">CT scan & USG</h4>
					</div>
					<div class="content">
						<p class="mb-4">Dilengkapi dengan peralatan canggih dan tenaga medis yang berpengalaman, kami menghadirkan teknologi terkini dalam CT Scan dan USG untuk membantu dokter dan pasien dalam memahami kondisi kesehatan dengan lebih baik.</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-dna-alt-1 text-lg"></i>
						<h4 class="mt-3 mb-3">Ginekologi</h4>
					</div>
					<div class="content">
						<p class="mb-4">Dipimpin oleh dokter spesialis ginekologi yang berpengalaman, kami menyediakan pemeriksaan rutin, penanganan masalah kesehatan reproduksi, serta konsultasi yang berfokus pada kebutuhan individu setiap pasien.</p>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>


<!-- testimonial start -->
<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Kami telah melayani lebih dari 200++ pasien</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Kami berkominten untuk menjaga kepuasan dan kepercayaan pasien dengan legalitas dokter dan kepastian antrian yang real-time.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">
				<div class="testimonial-block style-2 gray-bg">
					<i class="icofont-quote-right"></i>

					<div class="testimonial-thumb">
						<img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info ">
						<h4>Amazing service!</h4>
						<span>John Partho</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/team/test-thumb2.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Expert doctors!</h4>
						<span>Mullar Sarth</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/team/test-thumb3.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Good Support!</h4>
						<span>Kolis Mullar</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/team/test-thumb4.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Nice Environment!</h4>
						<span>Partho Sarothi</span>
						<p class="mt-4">
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Modern Service!</h4>
						<span>Kolis Mullar</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- testimonial endt -->

<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Partner kami</h2>
					<div class="divider mx-auto my-4"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo">
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/1.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/2.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/3.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/4.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/5.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/6.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/3.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/4.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/5.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/6.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="images/logo.png" alt="" class="img-fluid">
					</div>
					<p>Kami memahami betapa berharganya waktu Anda dan kami berkomitmen untuk menyediakan pengalaman antrian yang efisien dan nyaman bagi Anda.</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">POLI</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="{{ route('pasiens.anak') }}">ANAK DAN TUMBUH KEMBANG </a></li>
						<li><a href="{{ route('pasiens.mata') }}">MATA</a></li>
						<li><a href="{{ route('pasiens.dalam') }}">PENYAKIT DALAM</a></li>
						<li><a href="{{ route('pasiens.obgyn') }}">OBGYN</a></li>
						<li><a href="{{ route('pasiens.bedah') }}">BEDAH</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Support</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Company Support </a></li>
						<li><a href="#">FAQuestions</a></li>
						<li><a href="#">Company Licence</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Hubungi kami</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Layanan 24 jam</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">hubungikami@appointme.com</a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Senin - Jumat : 08:30 - 18:00</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Create by <br> ADINDA FATIMAH AZ-ZAHRA 215150201111058 <br> AMIRA GHINA NURFANSEPTA 215150201111026 <br> TSABITA MUTHIA AYU PRAMESTI 21515020111070 <a href="https://github.com/tsabitamuthia/appointme" target="_blank"></a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="subscribe-form text-lg-right mt-5 mt-lg-0">
						<form action="#" class="subscribe">
							<input type="text" class="form-control" placeholder="Email Anda">
							<a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>
						</form>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>


	<!-- 
	Essential Scripts
	=====================================-->

	
	<!-- Main jQuery -->
	<script src="plugins/jquery/jquery.js"></script>
	<!-- Bootstrap 4.3.2 -->
	<script src="plugins/bootstrap/js/popper.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="plugins/counterup/jquery.easing.js"></script>
	<!-- Slick Slider -->
	<script src="plugins/slick-carousel/slick/slick.min.js"></script>
	<!-- Counterup -->
	<script src="plugins/counterup/jquery.waypoints.min.js"></script>
	
	<script src="plugins/shuffle/shuffle.min.js"></script>
	<script src="plugins/counterup/jquery.counterup.min.js"></script>
	<!-- Google Map -->
	<script src="plugins/google-map/map.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
	
	<script src="js/script.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/aweSomeSlider.js"></script>

</body>
</html>
