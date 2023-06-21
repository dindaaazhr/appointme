@include('guest')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
            <h1>Data Pasien</h1>
        <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">
                + Pasien
            </button>
            <table class="table mt-3">
                <?php $no = 1;?>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pasiens as $pasien) 
                    <tr>
                        <?php
                        echo "<td>".$no."</td>";
                        $no++;
                        ?>
                        <td>{{ $pasien->id_pasien }}</td>
                        <td>{{ $pasien->email }}</td>
                        <td>{{ $pasien->nama }}</td>
                        <td>{{ $pasien->jenis_kelamin == 0 ? 'Pria' : 'Wanita' }}</td>
                        <td>{{ $pasien->tempat_lahir }}</td>
                        <td>{{ $pasien->tanggal_lahir }}</td>
                        <td>{{ $pasien->alamat }}</td>
                        <td class="d-flex align-items-center">
                            <a href="{{ route('pasien.detail', $pasien->id_pasien) }}" class="btn btn-info mr-2">Detail</a>
                        <button type="button" class="btn btn-success btn-edit mr-2" data-toggle="modal" data-target="#editModal{{ $pasien->id_pasien }}">Edit</button>
                        <form action="{{ route('pasien.destroy', $pasien->id_pasien) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return hapus()">Hapus</button>
                        </form>                        
                        </td>
                        </tr>
                        @empty
                        <li>Belum ada Pasien.</li>
                    @endforelse
                </tbody>
            </table>
        </div>
    
        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahModalLabel">Tambah Pasien</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('pasien.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jkDropdown" class="form-control">
                                    <option value="0">Pria</option>
                                    <option value="1">Wanita</option>
                                </select>                                
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        @foreach($pasiens as $pasien)
<div class="modal fade" id="editModal{{ $pasien->id_pasien }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $pasien->id_pasien }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $pasien->id_pasien }}">Edit Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('pasien.update', $pasien->id_pasien) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="email{{ $pasien->id_pasien }}">Email</label>
                        <input type="email" class="form-control" id="email{{ $pasien->id_pasien }}" name="email" value="{{ $pasien->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="password{{ $pasien->id_pasien }}">Password</label>
                        <input type="password" class="form-control" id="password{{ $pasien->id_pasien }}" name="password" value="{{ $pasien->password }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama{{ $pasien->id_pasien }}">Nama</label>
                        <input type="text" class="form-control" id="nama{{ $pasien->id_pasien }}" name="nama" value="{{ $pasien->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin{{ $pasien->id_pasien }}">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jkDropdown{{ $pasien->id_pasien }}" class="form-control" value="{{ $pasien->jenis_kelamin }}">
                            <option value="0">Pria</option>
                            <option value="1">Wanita</option>
                        </select>                                
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir{{ $pasien->id_pasien }}">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir{{ $pasien->id_pasien }}" name="tempat_lahir" value="{{ $pasien->tempat_lahir }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir{{ $pasien->id_pasien }}">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir{{ $pasien->id_pasien }}" name="tanggal_lahir" value="{{ $pasien->tanggal_lahir }}" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat{{ $pasien->id_pasien }}">Alamat</label>
                        <textarea class="form-control" id="alamat{{ $pasien->id_pasien }}" name="alamat" required>{{ $pasien->alamat }}</textarea>
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