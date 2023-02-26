@extends('back.templates.authentications')
@section('title')
@section('content')
<div class="page page-center mt-5">
  <div class="container container-narrow py-4 mt-5">
    <div class="text-center mb-4 mt-5">
      <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('back/static/logo.svg') }}" height="36" alt=""></a>
    </div>
    <div class="card card-md">
      <div class="card-body">
        <h2 class="h2 text-center mb-4">Register</h2>
        <form action="{{ route('postregister') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label">NIK</label>
            <input type="text" name="nik" required class="form-control" placeholder="" autocomplete="off">
          </div>
          <p class="card-subtitle">The version of Node.js that is used in the Build Step and for Serverless Functions.
            A new Deployment is required for your changes to take effect.</p>
          <div class="mb-3">
            <label class="form-label">Nama Panjang</label>
            <input type="text" name="nama_panjang" required class="form-control" placeholder="" autocomplete="off">
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" required class="form-control" placeholder="" autocomplete="off">
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Jenis Kelamin</label>
              <select name="jenis_kelamin" required class="form-select">
                <option value="" selected>Select</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" required class="form-control" rows="4" placeholder=""></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Telepon</label>
            <input type="number" name="telepon" required class="form-control" placeholder="" autocomplete="off">
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" required class="form-control" placeholder="your@email.com" autocomplete="off">
          </div>
          <div class="mb-2">
            <label class="form-label">Password</label>
            <input type="text" name="password" required class="form-control" placeholder="" autocomplete="off">
          </div>
          <div class="mb-2">
            <label class="form-check">
              <input type="checkbox" class="form-check-input"/>
              <span class="form-check-label">Remember me on this device</span>
            </label>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <div class="text-center text-muted mt-3">
      Dont have account yet? <a href="./sign-up.html" tabindex="-1">Sign up</a>
    </div>
  </div>
</div>
@endsection