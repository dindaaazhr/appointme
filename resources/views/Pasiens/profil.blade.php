@include('guest')
@auth
<!DOCTYPE html>
<html lang="zxx">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>AppointMe</title>

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
					<a class="navbar-brand" href="index.html">
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
					<li class="nav-item"><a class="nav-link" href="{{route('pasiens.poli')}}">Poli</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dokter<i class="icofont-thin-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropdown03">
							<li><a class="dropdown-item" href="{{ route('pasiens.doctor') }}">Dokter</a></li>
							<li><a class="dropdown-item" href="{{ route('pasiens.janji') }}">Buat Janji</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="{{route('pasiens.profil', Auth::user()->id_pasien)}}">Profil</a></li>
					<li class="nav-item"><a class="nav-link" href="{{route('pasiens.kontak')}}">Kontak</a></li>
					</ul>
                    <a class="btn btn-danger" href="{{ route('logout') }}" style="margin-left: 30px;">Logout</a>
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
                    <span class="text-white">Profil</span>
                    <h1 class="text-capitalize mb-5 text-lg">Profil Pasien</h1>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="pagination_link">
                            <a href="{{route('pasiens.home')}}" class="text-white" >Home</a>
                            <span>/</span>
                            <a href="{{route('pasiens.profil', Auth::user()->id_pasien)}}" class="text-white-50">Profil</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                <!-- portfolio -->
                <section class="section doctors">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="section-title">
                                <h2>Profil Anda</h2>
                                <div class="divider mx-auto my-4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="profile-description">
                                <div class="form-group row">
                                    <label for="id_pasien" class="col-sm-4 col-form-label">ID Pasien</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="id_pasien" value="{{ Auth::user()->id_pasien }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nama" value="{{ Auth::user()->nama }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="jenis_kelamin" value="{{ Auth::user()->jenis_kelamin ==0? 'Pria':'Wanita' }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tempat_lahir" value="{{ Auth::user()->tempat_lahir }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="tanggal_lahir" value="{{ Auth::user()->tanggal_lahir }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                    <div class="col-sm-8">
                                        <input type="alamat" class="form-control" id="alamat" value="{{ Auth::user()->alamat }}" readonly>
                                    </div>
                                </div>

                                <!-- Edit -->

                                <div class="text-right" style="margin-bottom: 30px;">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editStudentModal" style="background-color: #4d6a9d;">Edit Profil</button>
                                    <form action="{{ route('pasiens.antreans') }}" style="display: inline-block;">
                                        <button type="submit" class="btn btn-info">Lihat Antrean</button>
                                    </form>
                                </div>                                

                                <!-- Edit Student Modal -->
                                <div class="modal fade" id="editStudentModal" tabindex="-1" role="dialog" aria-labelledby="editStudentModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editStudentModalLabel">Edit Profil</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="editForm" action="{{ route('pasiens.update', Auth::user()->id_pasien) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="editNama">Nama</label>
                                                        <input type="text" class="form-control" id="editNama" name="nama" value="{{ Auth::user()->nama }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editJenisKelamin">Jenis Kelamin</label>
                                                        <select class="form-control" id="editJenisKelamin" name="jenis_kelamin">
                                                            <option value="0" {{ Auth::user()->jenis_kelamin == 0 ? 'selected' : '' }}>Pria</option>
                                                            <option value="1" {{ Auth::user()->jenis_kelamin == 1 ? 'selected' : '' }}>Wanita</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editTempatLahir">Tempat Lahir</label>
                                                        <input type="text" class="form-control" id="editTempatLahir" name="tempat_lahir" value="{{ Auth::user()->tempat_lahir }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editTanggalLahir">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" id="editTanggalLahir" name="tanggal_lahir" value="{{ Auth::user()->tanggal_lahir }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editAlamat">Alamat</label>
                                                        <input type="text" class="form-control" id="editAlamat" name="alamat" value="{{ Auth::user()->alamat }}">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    // Set action URL dynamically based on the current pasien ID
                                    $('#editStudentModal').on('show.bs.modal', function(event) {
                                        var button = $(event.relatedTarget); // Button that triggered the modal
                                        var pasienId = button.data('pasienid'); // Extract pasien ID from data attribute
                                        var form = $('#editForm');
                                        var actionUrl = form.attr('action'); // Get the initial action URL
                                        form.attr('action', actionUrl + '/' + pasienId); // Set the new action URL with the pasien ID
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endauth
