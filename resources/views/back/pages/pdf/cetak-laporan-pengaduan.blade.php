<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <title>Laporan Pengaduan</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="text-center mt-4 mb-4">
        <h4>Cetak Laporan Pengaduan</h4>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Pengaduan</th>
            <th>Tanggal</th>
            <th>Pelapor</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pengaduan as $pengaduans)
            @if($pengaduans->status_laporan_pengaduan == 'Selesai')
              <tr>
                <td>{{ $pengaduans->judul }}</td>
                <td>{{ $pengaduans->created_at }}</td>
                <td>{{ $pengaduans->alamat_email_pelapor }}</td>
              </tr>
              <br>
            @endif
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>