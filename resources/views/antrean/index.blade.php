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
            $activeMenu = 'data-antrean';
        @endphp
        @include('navbar-sidebar')
    </div>      
    <div class="main_container">
        <div class="container">
            <h1>Data Antrean</h1>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">
                <link rel="shortcut icon" type="image/x-icon" href="images/logo-icon.png" />
                + Antrean
            </button>
            <div class="btn-group mb-3" style="float: right;" role="group">
                <a href="{{ route('antrean.index') }}" class="btn btn-light mr-2 rounded">Semua</a>
                <a href="{{ route('antrean.index', ['status' => 'Selesai']) }}" class="btn btn-secondary mr-2 rounded">Selesai</a>
                <a href="{{ route('antrean.index', ['status' => 'Dalam Antrean']) }}" class="btn btn-dark rounded">Dalam Antrean</a>
            </div>
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
                        <td>{{ $antrean->dokters ? $antrean->dokters->polis->nama : '-' }}</td>
                        <td>{{ $antrean->jam_temu }}</td>
                        <td>{{ $antrean->status }}</td>
                        <td class="d-flex align-items-center">
                        {{-- <a href="" class="btn btn-primary mr-1">Edit</a> --}}
                        <button type="button" class="btn btn-success btn-edit mr-2" data-toggle="modal" data-target="#editModal{{ $antrean->id_antrean }}">Edit</button>
                        <form action="{{ route('antrean.destroy', $antrean->id_antrean) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return hapus()">Hapus</button>
                        </form>                        
                        </td>
                        </tr>
                        @empty
                        <li>Belum ada Antrean.</li>
                    @endforelse
                </tbody>
            </table>
        </div>
    
        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahModalLabel">Tambah Antrean</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('antrean.store') }}">
                            @csrf
                            <div class=form-group>
                                <label for="id_pasien">Nama Pasien</label>
                                <select name="id_pasien" id="idPasienDropdown" class="form-control">
                                    @forelse($pasiens as $pasien) 
                                    <option value="{{ $pasien->id_pasien }}">{{ $pasien->nama }}</option>
                                    @empty
                                    <li>Belum ada Antrean.</li>
                                    @endforelse
                                </select>
                            </div>
                            <div class=form-group>
                                <label for="id_dokter">Nama Dokter</label>
                                <select name="id_dokter" id="idDokterDropdown" class="form-control">
                                    @forelse($dokters as $dokter) 
                                    <option value="{{ $dokter->id_dokter }}">{{ $dokter->nama }}</option>
                                    @empty
                                    <li>Belum ada Antrean.</li>
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jam_temu">Jam Temu</label>
                                <input type="datetime-local" class="form-control" id="jam_temu" name="jam_temu" required>
                            </div>
                            <div class=form-group>
                                <label for="status">Status</label>
                                <select name="status" id="statusDropdown" class="form-control">
                                    <option value="Dalam Antrean">Dalam Antrean</option>
                                    <option value="Selesai">Selesai</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        @foreach($antreans as $antrean)
<div class="modal fade" id="editModal{{ $antrean->id_antrean }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $antrean->id_antrean }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $antrean->id_antrean }}">Edit Antrean</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('antrean.update', $antrean->id_antrean) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="id_pasien{{ $antrean->id_antrean }}">Nama Pasien</label>
                        <select name="id_pasien" id="idPasienDropdown{{ $antrean->id_antrean }}" class="form-control" value="{{ $antrean->id_pasien }}">
                            @forelse($pasiens as $pasien) 
                            <option value="{{ $pasien->id_pasien }}">{{ $pasien->nama }}</option>
                            @empty
                            <li>Belum ada Antrean.</li>
                            @endforelse
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_dokter{{ $antrean->id_antrean }}">Nama Dokter</label>
                        <select name="id_dokter" id="idDokterDropdown{{ $antrean->id_antrean }}" class="form-control" value="{{ $antrean->id_dokter }}">
                            @forelse($dokters as $dokter) 
                            <option value="{{ $dokter->id_dokter }}">{{ $dokter->nama }}</option>
                            @empty
                            <li>Belum ada Antrean.</li>
                            @endforelse
                        </select>
                    </div>               
                    <div class="form-group">
                        <label for="jam_temu{{ $antrean->id_antrean }}">Jam Temu</label>
                        <input type="datetime-local" class="form-control" id="jam_temu{{ $antrean->id_antrean }}" name="jam_temu" value="{{ $antrean->jam_temu }}" required>
                    </div>
                    <div class="form-group">
                        <label for="status{{ $antrean->id_antrean }}">Status</label>
                        <select name="status" id="statusDropdown{{ $antrean->id_antrean }}" class="form-control" value="{{ $antrean->status }}">
                            <option value="Dalam Antrean">Dalam Antrean</option>
                            <option value="Selesai">Selesai</option>
                        </select>
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