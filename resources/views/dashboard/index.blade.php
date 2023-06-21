@include('guest')
@include('pasiens')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .card {
            background-color: #12305C;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        @php
            $activeMenu = 'dashboard';
        @endphp
        @include('navbar-sidebar')
    </div>      
    <div class="main_container">
        <div class="container">
            <h1 style="color:#12305C; border-bottom: 2px solid #EB0050; font-weight: bold;">Selamat Datang di Website Admin AppointMe</h1> <br>
            <p>Website Admin AppointMe merupakan website yang digunakan oleh Admin
                AppointMe untuk melakukan manajemen data yang diperlukan dalam
                operasional website AppointMe. AppointMe adalah sebuah website dalam bidang 
                kesehatan yang berfokus pada reservasi dokter. AppointMe memudahkan
                pasien dalam membuat janji temu karena tidak perlu datang ke rumah sakit.
                Reservasi hanya perlu dilakukan menggunakan web AppointMe.
            </p> <br>
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('antrean.index') }}" class="card text-white text-center">
                        <div class="card-body">
                            <h5>Jumlah Antrean: {{ $jumlahAntrean }}</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('pasien.index') }}" class="card text-white text-center">
                        <div class="card-body">
                            <h5>Jumlah Pasien: {{ $jumlahPasien }}</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mt-4 justify-content-center">
                <div class="col-md-6">
                    <a href="{{ route('dokter.index') }}" class="card text-white text-center">
                        <div class="card-body">
                            <h5>Jumlah Dokter: {{ $jumlahDokter }}</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('poli.index') }}" class="card text-white text-center">
                        <div class="card-body">
                            <h5>Jumlah Poli: {{ $jumlahPoli }}</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div> 
    </div>
</div>	

<!-- Memuat Bootstrap JS dan dependensi jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>