@extends('app')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Login</title>
        <style>
            body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            /* background-image: src; */
            background-image: url('/images/login_register.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
            }
            .login-container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            }
            
            .login-container input[id="email"],
            .login-container input[id="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            }
            
            .login-container a {
            color: cornflowerblue;
            text-decoration: none;
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
                    <h3 id="loginHeading" style="text-align: center; color: #1f3e5c; margin-bottom: 20px;">Login to AppointMe!</h3>
                    <script>
                        // Mengambil elemen dengan ID 'loginHeading'
                        const loginHeading = document.getElementById('loginHeading');
                
                        // Menambahkan efek animasi saat halaman dimuat
                        window.addEventListener('DOMContentLoaded', () => {
                            loginHeading.style.opacity = 0; // Mengatur opasitas teks ke 0
                
                            // Menganimasikan peningkatan opasitas teks menjadi 1 dalam 1 detik
                            let opacity = 0;
                            const fadeInInterval = setInterval(() => {
                                opacity += 0.1;
                                loginHeading.style.opacity = opacity;
                                if (opacity >= 1) {
                                    clearInterval(fadeInInterval); // Menghentikan interval setelah mencapai opasitas 1
                                }
                            }, 100);
                        });
                    </script>
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        <p>{{ $err }}</p>
                        @endforeach
                    </div>
                    @endif
                    <div class="login-container">
                        <form action="{{ route('login.action') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required />
                            </div>
                            <div class="mb-3">
                                <label for="password">Password <span class="text-danger">*</span></label>
                                <input id="password" class="form-control" type="password" name="password" required />
                            </div>
                            <div class="mb-3" style="margin-top: 30px;">
                                <button class="btn btn-primary" style="background-color: #4d6a9d;">Login</button>
                                <button class="btn btn-danger" href="{{ route('pasiens.home') }}">Back</a>
                            </div>
                        </form>
                        <p>Belum punya akun? <a href="{{ route('register') }}">Daftar disini</a></p>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        
    </body>
</html>
