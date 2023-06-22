@include('guest')
@include('pasiens')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo-icon.png" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        @php
            $activeMenu = 'data-poli';
        @endphp
        @include('navbar-sidebar')
    </div>      
    <div class="main_container">
        <div class="container">
            <h1>Detail Poli</h1> <br>
            <p>Nama: {{ $poli->nama }}</p>
            <p>Kepala: {{ $poli->kepala }}</p>
            <p>Jumlah Dokter: {{ $jumlahDokter }}</p>
            <br>
            <h3>Daftar Dokter</h3>
            <table class="table mt-3">
                <?php $no = 1;?>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Jam Buka</th>
                        <th>Jam Tutup</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dokters as $dokter) 
                    <tr>
                        <?php
                        echo "<td>".$no."</td>";
                        $no++;
                        ?>
                        <td>{{ $dokter->id_dokter }}</td>
                        <td>{{ $dokter->nama }}</td>
                        <td>{{ $dokter->no_hp }}</td>
                        <td>{{ $dokter->alamat }}</td>
                        <td>{{ $dokter->jam_buka }}</td>
                        <td>{{ $dokter->jam_tutup }}</td>
                        <td class="d-flex align-items-center">
                            <a href="{{ route('dokter.detail', ['id_dokter' => $dokter->id_dokter]) }}" class="btn btn-info mr-2">Detail</a>
                        </td>
                    </tr>
                    @empty
                        <li>Tidak ada antrean yang tersedia.</li>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>    

<!-- Memuat Bootstrap JS dan dependensi jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>