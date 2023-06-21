<!DOCTYPE html>
<html>
<head>
    <title>404 - Page Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            max-width: 800px;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            color: #777;
        }

        a {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404 - Page Not Found</h1>
        <p>Halaman yang Anda cari tidak ditemukan.</p>
        <p>Cek kembali laman URL atau kembali ke <a href="{{ route('pasiens.home') }}">Beranda AppointMe</a>.</p>
    </div>
</body>
</html>
