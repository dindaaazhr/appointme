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
            $activeMenu = 'data-dokter';
        @endphp
        @include('navbar-sidebar')
    </div>      
    <div class="main_container">
        <div class="container">
            <h1>Data Dokter</h1>
        <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">
                + Dokter
            </button>
            <form action="{{ route('dokter.index') }}" method="GET" class="form-inline" style="float: right;">
                <div class="form-group mr-2">
                    <select name="poli" id="filterPoli" class="form-control">
                        <option value="">Semua Poli</option>
                        @foreach($polis as $poli)
                            <option value="{{ $poli->id_poli }}" {{ request('poli') == $poli->id_poli ? 'selected' : '' }}>{{ $poli->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-dark">Filter</button>
            </form>
            <table class="table mt-3">
                <?php $no = 1;?>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Poli</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Jam Buka</th>
                        <th>Jam Tutup</th>
                        <th>Jumlah Antrean</th>
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
                        <td>{{ $dokter->polis ? $dokter->polis->nama : '-' }}</td>
                        <td>{{ $dokter->nama }}</td>
                        <td>{{ $dokter->no_hp }}</td>
                        <td>{{ $dokter->alamat }}</td>
                        <td>{{ $dokter->jam_buka }}</td>
                        <td>{{ $dokter->jam_tutup }}</td>
                        <td>{{ $jumlahAntrean[$dokter->id_dokter] }}</td>
                        <td class="d-flex align-items-center">
                        <a href="{{ route('dokter.detail', $dokter->id_dokter) }}" class="btn btn-info mr-2">Detail</a>
                        <button type="button" class="btn btn-success btn-edit mr-2" data-toggle="modal" data-target="#editModal{{ $dokter->id_dokter }}">Edit</button>
                        <form action="{{ route('dokter.destroy', $dokter->id_dokter) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return hapus()">Hapus</button>
                        </form>                        
                        </td>
                        </tr>
                        @empty
                        <li>Belum ada Dokter.</li>
                    @endforelse
                </tbody>
            </table>
        </div>
    
        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahModalLabel">Tambah Dokter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('dokter.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="id_poli">Nama Poli</label>
                                <select name="id_poli" id="idPoliDropdown" class="form-control">
                                    @forelse($polis as $poli) 
                                    <option value="{{ $poli->id_poli }}">{{ $poli->nama }}</option>
                                    @empty
                                    <li>Belum ada Poli.</li>
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="jam_buka">Jam Buka</label>
                                <input type="time" class="form-control" id="jam_buka" name="jam_buka" required>
                            </div>
                            <div class="form-group">
                                <label for="jam_tutup">Jam Tutup</label>
                                <input type="time" class="form-control" id="jam_tutup" name="jam_tutup" required>
                            </div>
                            <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        @foreach($dokters as $dokter)
<div class="modal fade" id="editModal{{ $dokter->id_dokter }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $dokter->id_dokter }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $dokter->id_dokter }}">Edit Dokter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('dokter.update', $dokter->id_dokter) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="id_poli{{ $dokter->id_dokter }}">Poli</label>
                        <select name="id_poli" id="idPoliDropdown{{ $dokter->id_dokter }}" class="form-control" value="{{ $dokter->id_dokter }}">
                            @forelse($polis as $poli) 
                            <option value="{{ $poli->id_poli }}">{{ $poli->nama }}</option>
                            @empty
                            <li>Belum ada Poli</li>
                            @endforelse
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama{{ $dokter->id_dokter }}">Nama</label>
                        <input type="text" class="form-control" id="nama{{ $dokter->id_dokter }}" name="nama" value="{{ $dokter->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label for="no_hp{{ $dokter->id_dokter }}">No HP</label>
                        <input type="text" class="form-control" id="no_hp{{ $dokter->id_dokter }}" name="no_hp" value="{{ $dokter->no_hp }}" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat{{ $dokter->id_dokter }}">Alamat</label>
                        <textarea class="form-control" id="alamat{{ $dokter->id_dokter }}" name="alamat" required>{{ $dokter->alamat }}</textarea>
                    </div>                    
                    <div class="form-group">
                        <label for="jam_buka{{ $dokter->id_dokter}}">Jam Buka</label>
                        <input type="time" class="form-control" id="jam_buka{{ $dokter->id_dokter }}" name="jam_buka" value="{{ $dokter->jam_buka }}" required>
                    </div>
                    <div class="form-group">
                        <label for="jam_tutup{{ $dokter->id_dokter }}">Jam Tutup</label>
                        <input type="time" class="form-control" id="jam_tutup{{ $dokter->id_dokter}}" name="jam_tutup" value="{{ $dokter->jam_tutup }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
    </div>
</div>	

<!-- Memuat Bootstrap JS dan dependensi jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    function hapus() {
        if (confirm("Apakah Anda yakin ingin menghapus ini?")) {
            alert("Data berhasil dihapus");
            return true;
        } else {
            alert("Data tidak dihapus");
            return false;
        }
    }
</script>

</body>
</html>