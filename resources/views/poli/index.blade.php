@include('guest')
@include('pasiens')
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
            $activeMenu = 'data-poli';
        @endphp
        @include('navbar-sidebar')
    </div>      
    <div class="main_container">
        <div class="container">
            <h1>Data Poli</h1>
        <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">
                + Poli
            </button>
            <table class="table mt-3">
                <?php $no = 1;?>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Kepala</th>
                        <th>Jumlah Dokter</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($polis as $poli) 
                    <tr>
                        <?php
                        echo "<td>".$no."</td>";
                        $no++;
                        ?>
                        <td>{{ $poli->id_poli }}</td>
                        <td>{{ $poli->nama }}</td>
                        <td>{{ $poli->kepala }}</td>
                        <td>{{ $jumlahDokter[$poli->id_poli] }}</td>
                        <td class="d-flex align-items-center">
                            <a href="{{ route('poli.detail', $poli->id_poli) }}" class="btn btn-info mr-2">Detail</a>
                        <button type="button" class="btn btn-success btn-edit mr-2" data-toggle="modal" data-target="#editModal{{ $poli->id_poli }}">Edit</button>
                        <form action="{{ route('poli.destroy', $poli->id_poli) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return hapus()">Hapus</button>
                        </form>                        
                        </td>
                        </tr>
                        @empty
                        <li>Belum ada Poli.</li>
                    @endforelse
                </tbody>
            </table>
        </div>
    
        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahModalLabel">Tambah Poli</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('poli.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="kepala">Kepala</label>
                                <input type="text" class="form-control" id="kepala" name="kepala" required>
                            </div>
                            <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        @foreach($polis as $poli)
<div class="modal fade" id="editModal{{ $poli->id_poli }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $poli->id_poli}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $poli->id_poli }}">Edit Poli</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('poli.update', $poli->id_poli) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama{{ $poli->id_poli }}">Nama</label>
                        <input type="text" class="form-control" id="nama{{ $poli->id_poli }}" name="nama" value="{{ $poli->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label for="kepala{{ $poli->id_poli }}">Kepala</label>
                        <input type="text" class="form-control" id="kepala{{ $poli->id_poli }}" name="kepala" value="{{ $poli->kepala }}" required>
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