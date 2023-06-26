@extends('app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: Arial, sans-serif;
        background-image: url('/images/aes.jpg');
        background-repeat: repeat;
        background-size: cover;
        background-position: center;
        background-attachment: scroll;
        }
        
    </style>
    <link rel="stylesheet" href="css/style.css">
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
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $err)
                                <li>{{ $err }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <h3 id="registerHeading" style="text-align: center; color: #1f3e5c; margin-bottom: 20px;">Register to AppointMe!</h3>
                        <script>
                            // Mengambil elemen dengan ID 'loginHeading'
                            const registerHeading = document.getElementById('registerHeading');
                    
                            // Menambahkan efek animasi saat halaman dimuat
                            window.addEventListener('DOMContentLoaded', () => {
                                registerHeading.style.opacity = 0; // Mengatur opasitas teks ke 0
                    
                                // Menganimasikan peningkatan opasitas teks menjadi 1 dalam 1 detik
                                let opacity = 0;
                                const fadeInInterval = setInterval(() => {
                                    opacity += 0.1;
                                    registerHeading.style.opacity = opacity;
                                    if (opacity >= 1) {
                                        clearInterval(fadeInInterval); // Menghentikan interval setelah mencapai opasitas 1
                                    }
                                }, 100);
                            });
                        </script>
                        <div class="register-container" style="margin-top: 30px;">
                            <form action="{{ route('register.action') }}" method="POST" name="register-container">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama">Nama <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="nama" name="nama"/>
                                </div>
                                <div class="mb-3">
                                    <label for="jk">Jenis Kelamin <span class="text-danger">*</span></label>
                                    <select name="jenis_kelamin" id="jkDropdown" class="form-control">
                                        <option value="0">Pria</option>
                                        <option value="1">Wanita</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="tl">Tempat Lahir <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="tempat_lahir" name="tempat_lahir" />
                                </div>
                                <div class="mb-3">
                                    <label for="tgl">Tanggal Lahir <span class="text-danger">*</span></label>
                                    <input class="form-control" type="date" id="tanggal_lahir" name="tanggal_lahir" />
                                </div>
                                <div class="mb-3">
                                    <label for="alamat">Alamat <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="alamat" name="alamat" />
                                </div>
                                <div class="mb-3">
                                    <input type="hidden" id="role" name="role" value="0">
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="password">Password <span class="text-danger">*</span></label>
                                    <input class="form-control" type="password" id="password" name="password" />
                                </div>
                                <div class="mb-3">
                                    <label for="password_confirm">Password Confirmation <span class="text-danger">*</span></label>
                                    <input class="form-control" type="password" id="password_confirm" name="password_confirm" />
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary" style="background-color: #4d6a9d;" >Register</button>
                                    <a class="btn btn-danger" href="{{ route('login') }}">Back</a>
                                </div>
                            </form>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

</body>
</html>
