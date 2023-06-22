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
            $activeMenu = 'data-pasien';
        @endphp
        @include('navbar-sidebar')
    </div>      
    <div class="main_container">
        <div class="container">
            <h1>Detail Pasien</h1> <br>
            <p>Nama: {{ $pasien->nama }}</p>
            <p>Nama: {{ $pasien->email }}</p>
            <p>Jenis Kelamin: {{ $pasien->jenis_kelamin == 0 ? 'Pria' : 'Wanita' }}</p>
            <p>Tempat Lahir: {{ $pasien->tempat_lahir }}</p>
            <p>Tanggal Lahir: {{ $pasien->tanggal_lahir }}</p>
            <p>Alamat: {{ $pasien->alamat }}</p>
        <br>
        <h3>Daftar Janji Temu</h3>
            <table class="table mt-3">
                <?php $no = 1;?>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama Pasien</th>
                        <th>Nama Dokter</th>
                        <th>Poli</th>
                        <th>Jam Temu</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($antreans as $antrean) 
                    <tr>
                        <?php
                        echo "<td>".$no."</td>";
                        $no++;
                        ?>
                        <td>{{ $antrean->id_antrean }}</td>
                        <td>{{ $antrean->pasiens ? $antrean->pasiens->nama : '-' }}</td>
                        <td>{{ $antrean->dokters ? $antrean->dokters->nama : '-' }}</td>
                        <td>{{ $antrean->polis ? $antrean->polis->nama : '-' }}</td>
                        <td>{{ $antrean->jam_temu }}</td>
                        <td>{{ $antrean->status }}</td>
                        <td class="d-flex align-items-center">
                            <a href="{{ route('dokter.detail', ['id_dokter' => $antrean->dokters->id_dokter]) }}" class="btn btn-info mr-2">Detail</a>
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