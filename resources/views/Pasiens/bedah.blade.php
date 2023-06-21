<!DOCTYPE html>
<html lang="zxx">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
<meta name="author" content="themefisher.com">

<title>Mahadi- Health & Care Medical template</title>

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

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
					<a class="nav-link" href="{{route('pasiens.home')}}" style="scroll-behavior: smooth;">Beranda</a>
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
	


<section class="page-title bg-1">
<div class="overlay"></div>
<div class="container">
	<div class="row">
	<div class="col-md-12">
		<div class="block text-center">
		<span class="text-white">Detail Poli</span>
		<h1 class="text-capitalize mb-5 text-lg">POLI BEDAH</h1>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="pagination_link">
				<a href="{{ route('pasiens.home') }}" class="text-white" >Beranda</a>
				<span>/</span>
				<a href="{{ route('pasiens.bedah') }}" class="text-white-50">Penyakit bedah</a>
			</div>
		</div>
	</div>
</div>
</section>


<section class="section department-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="department-img">
					<img src="images/service/bg-1.jpg" alt="" class="img-fluid rounded">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="department-content mt-5">
					<h3 class="text-md">Selamat datang di Poli Bedah Kami!</h3>
					<div class="divider my-4"></div>
					<p class="lead">Poli Bedah adalah fasilitas medis yang menangani berbagai jenis prosedur bedah yang berkaitan dengan berbagai sistem tubuh.</p>
					<p>Poli Bedah menyediakan konsultasi dengan dokter spesialis bedah untuk mengevaluasi kondisi medis Anda. Mereka akan meninjau riwayat medis Anda, melakukan pemeriksaan fisik, dan mungkin memerintahkan tes tambahan untuk membuat diagnosis yang akurat.</p>


					<h3 class="mt-5 mb-4">Layanan Poli</h3>
					<div class="divider my-4"></div>
					<ul class="list-unstyled department-service">
						<li><i class="icofont-check mr-2"></i>Konsultasi dan Evaluasi</li>
						<li><i class="icofont-check mr-2"></i>Persiapan Pra-Bedah</li>
						<li><i class="icofont-check mr-2"></i>Operasi Rutin</li>
						<li><i class="icofont-check mr-2"></i>Operasi Minor</li>
						<li><i class="icofont-check mr-2"></i>Prosedur Endoskopi</li>
						<li><i class="icofont-check mr-2"></i>Perawatan Pascabedah</li>
					</ul>

					<a href="{{ route('pasiens.janji') }}" class="btn btn-main-2 btn-round-full">Buat Janji<i class="icofont-simple-right ml-2  "></i></a>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar-widget schedule-widget mt-5 ">
					<h5 class="mb-4">Jam Buka Poli</h5>

					<ul class="list-unstyled">
					<li class="d-flex justify-content-between align-items-center">
						<a href="#">Senin - Jumat</a>
						<span>9:00 - 17:00</span>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<a href="#">Sabtu</a>
						<span>9:00 - 16:00</span>
					</li>
					<li class="d-flex justify-content-between align-items-center">
						<a href="#">Minggu</a>
						<span>Tutup</span>
					</li>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0">Darurat</p>
						<a href="tel:4565">
							<h3>+6289-4565-65768</h3>
						</a>
					</div>
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
					<h4 class="text-capitalize mb-3">Poli</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">ANAK DAN TUMBUH KEMBANG </a></li>
						<li><a href="#">MATA</a></li>
						<li><a href="#">PENYAKIT DALAM</a></li>
						<li><a href="#">OBGYN</a></li>
						<li><a href="#">BEDAH</a></li>
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
						&copy; Create by <br> ADINDA FATIMAH AZ-ZAHRA 2151502011110XX<br> AMIRA GHINA NURFANSEPTA 2151502011110XX <br> TSABITA MUTHIA AYU PRAMESTI 21515020111070 <a href="https://github.com/mahadidev7?tab=repositories" target="_blank"></a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="subscribe-form text-lg-right mt-5 mt-lg-0">
						<form action="#" class="subscribe">
							<input type="text" class="form-control" placeholder="Your Email address">
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

</body>
</html>
