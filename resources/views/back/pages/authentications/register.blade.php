@extends('back.templates.authentications')
@section('title')
@section('content')
<div class="page page-center mt-5">
  <div class="container container-narrow py-4 mt-5">
    <div class="text-center mb-2" style="margin-top: 280px;">
      <a href="{{ route('index') }}" class="navbar-brand navbar-brand-autodark"><h1>pengaduan.com</h1></a>
    </div>
    <div class="card card-md">
      <div class="card-body">
        <h2 class="card-title text-center mb-4">Register</h2>
        <form action="{{ route('postregister') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label required">NIK</label>
            <input type="text" name="nik" required class="form-control" placeholder="Masukan nik" autocomplete="off">
            <p class="text-danger">@error('nik'){{ $message }}@enderror</p>
          </div>
          <p class="card-subtitle">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique provident sapiente omnis eum in odit itaque, molestiae quis dignissimos rerum, quasi alias, praesentium illum adipisci quisquam cum inventore nemo voluptatibus!</p>
          <div class="mb-3">
            <label class="form-label required">Nama Panjang</label>
            <input type="text" name="nama_panjang" required class="form-control" placeholder="Masukan nama panjang" autocomplete="off">
            <p class="text-danger">@error('nama_panjang'){{ $message }}@enderror</p>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label required">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" required class="form-control" placeholder="Masukan tanggal lahir" autocomplete="off">
              <p class="text-danger">@error('tanggal_lahir'){{ $message }}@enderror</p>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label required">Jenis Kelamin</label>
              <select name="jenis_kelamin" required class="form-select">
                <option value="" selected>Select</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
              <p class="text-danger">@error('jenis_kelamin'){{ $message }}@enderror</p>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label required">Alamat</label>
            <textarea name="alamat" required class="form-control" rows="4" placeholder="Masukan alamat"></textarea>
            <p class="text-danger">@error('alamat'){{ $message }}@enderror</p>
          </div>
          <div class="mb-3">
            <label class="form-label required">Telepon</label>
            <input type="number" name="telepon" required class="form-control" placeholder="Masukan telepon" autocomplete="off">
            <p class="text-danger">@error('telepon'){{ $message }}@enderror</p>
          </div>
          <div class="mb-3">
            <label class="form-label required">Email</label>
            <input type="email" name="email" required class="form-control" placeholder="Masukan email" autocomplete="off">
            <p class="text-danger">@error('email'){{ $message }}@enderror</p>
          </div>
          <div class="mb-2">
            <label class="form-label required">Password</label>
            <input type="text" name="password" required class="form-control" placeholder="Masukan password" autocomplete="off">
            <p class="text-danger">@error('password'){{ $message }}@enderror</p>
          </div>
          <div class="mb-2">
            <label class="form-check">
              <input type="checkbox" class="form-check-input"/>
              <span class="form-check-label">Ingat saya di perangkat ini</span>
            </label>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">Register</button>
          </div>
        </form>
      </div>
    </div>
    <div class="text-center text-muted mt-3">
      Sudah punya akun? <a href="{{ route('login') }}" tabindex="-1">Login</a>
    </div>
  </div>
</div>
@endsection