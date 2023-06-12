<!DOCTYPE html>
<html>
  <head>
    <title>AppointMe</title>
    <!-- Panggil file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <br> <br>
      <h1>Data Pasien</h1>
      <div class="text-right">
        <a href="" class="btn btn-primary">+ Data Pasien</a> 
      </div>
      <br/>
      <!-- Tampilkan tabel -->
        <table class="table">
          <?php $no = 1;?>
            <thead>
            <tr>
            <th>No</th>
            <th>ID Pasien</th>
            <th>Email</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Action</th>
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
                        <td>{{ $pasien->jenis_kelamin }}</td>
                        <td>{{ $pasien->tempat_lahir }}</td>
                        <td>{{ $pasien->tanggal_lahir }}</td>
                        <td>{{ $pasien->alamat }}</td>
                        <td class="d-flex align-items-center">
                        <a href="" class="btn btn-success mr-1">Edit</a>
                        <form action="" method="POST">
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
    <!-- Panggil file JavaScript Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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