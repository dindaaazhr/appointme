@include('guest')
<!DOCTYPE html>
<html lang="zxx">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

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
					<a class="navbar-brand" href="index.html">
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
					<li class="nav-item"><a class="nav-link" href="{{route('pasiens.poli')}}">Poli</a></li>
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
                    <span class="text-white">Daftar antrean</span>
                    <h1 class="text-capitalize mb-5 text-lg">Detail Antrian Pasien</h1>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="pagination_link">
                            <a href="./" class="text-white" >Home</a>
                            <span>/</span>
                            <a href="./doctor.html" class="text-white-50">All Doctors</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- portfolio -->
        <section class="section doctors">
        <div class="container">

            <div class="col-12 text-center  mb-5">
                    <div class="btn-group btn-group-toggle " data-toggle="buttons">
                    <label class="btn ">
                        <input type="radio" name="shuffle-filter" value="cat1" />Kardiologi
                    </label>
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="cat2" />Gigi
                    </label>
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="cat3" />Saraf
                    </label>
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="cat4" />Pengobatan
                    </label>
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="cat5" />Anak
                    </label>
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="cat6" />Traumatologi
                    </label>
                    </div>
            </div>

            <table class="table">
            <thead>
                <tr>
                    <th>ID antrean</th>
                    <th>ID Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Poli</th>
                    <th>Jam Temu</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($antreans as $antrean)
                    @if ($antrean->id_pasien == Auth::user()->id_pasien)
                        <tr>
                            <td>{{ $antrean->id_antrean }}</td>
                            <td>{{ $antrean->id_dokter }}</td>
                            <td>{{ $antrean->dokters ? $antrean->dokters->nama : '-' }}</td>
                            <td>{{ $antrean->dokters ? $antrean->dokters->polis->nama : '-' }}</td>
                            <td>{{ $antrean->jam_temu }}</td>
                            <td>{{ $antrean->status }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>

        </table>

        </section>
        <!-- /portfolio -->
        <section class="section cta-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="cta-content">
                            <div class="divider mb-4"></div>
                            <h2 class="mb-5 text-lg">Kami dengan senang hati menawarkan Anda <span class="title-color">kesempatan untuk memiliki kesehatan yang baik</span></h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis aliquam architecto, provident et est dolorum nihil repudiandae accusamus quas quae excepturi ut deleniti! Tempora, labore nihil non accusantium minus voluptas?</p>
                            <a href="appoinment.html" class="btn btn-main-2 btn-round-full">Get appoinment<i class="icofont-simple-right  ml-2"></i></a>
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
                            <p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

                            <ul class="list-inline footer-socials mt-4">
                                <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="icofont-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget mb-5 mb-lg-0">
                            <h4 class="text-capitalize mb-3">Department</h4>
                            <div class="divider mb-4"></div>

                            <ul class="list-unstyled footer-menu lh-35">
                                <li><a href="#">Surgery </a></li>
                                <li><a href="#">Wome's Health</a></li>
                                <li><a href="#">Radiology</a></li>
                                <li><a href="#">Cardioc</a></li>
                                <li><a href="#">Medicine</a></li>
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
                            <h4 class="text-capitalize mb-3">Get in Touch</h4>
                            <div class="divider mb-4"></div>

                            <div class="footer-contact-block mb-4">
                                <div class="icon d-flex align-items-center">
                                    <i class="icofont-email mr-3"></i>
                                    <span class="h6 mb-0">Support Available for 24/7</span>
                                </div>
                                <h4 class="mt-2"><a href="tel:+23-345-67890">Support@email.com</a></h4>
                            </div>

                            <div class="footer-contact-block">
                                <div class="icon d-flex align-items-center">
                                    <i class="icofont-support mr-3"></i>
                                    <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
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
                                &copy; Create by <a href="https://github.com/mahadidev7?tab=repositories" target="_blank">mahadidev7</a>
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