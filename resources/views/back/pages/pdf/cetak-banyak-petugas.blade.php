<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <title>Petugas</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="text-center mt-4 mb-4">
        <h4>Cetak Petugas</h4>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nama Panjang</th>
            <th>Tanggal Lahir</th>
            <th>Telepon</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($petugas_dari_controller as $petugas)
            @if($petugas->level == 2)
              @if($petugas->status_aktif == 1)
              <tr>
                <td>{{ $petugas->nama_panjang }}</td>
                <td>{{ $petugas->tanggal_lahir }}</td>
                <td>{{ $petugas->telepon }}</td>
                <td>{{ $petugas->email }}</td>
              </tr>
              <br>
              @endif
            @endif
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>