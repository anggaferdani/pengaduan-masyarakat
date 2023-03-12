@extends('back.templates.authentications')
@section('title')
@section('content')
<div class="page page-center">
  <div class="container container-tight py-4">
    <div class="text-center mb-2">
      <a href="{{ route('index') }}" class="navbar-brand navbar-brand-autodark"><h1>pengaduan.com</h1></a>
    </div>
    <div class="card card-md">
      <div class="card-body">
        <h2 class="card-title text-center mb-4">Login</h2>

        @if(Session::get('success'))
        <div class="alert alert-important alert-primary" role="alert">
          {{ Session::get('success') }}
        </div>
        @endif

        @if(Session::get('fail'))
        <div class="alert alert-important alert-danger" role="alert">
          {{ Session::get('fail') }}
        </div>
        @endif

        <form action="{{ route('postlogin') }}" method="POST" novalidate>
          @csrf
          <div class="mb-3">
            <label class="form-label required">Email</label>
            <input type="email" name="email" required class="form-control" placeholder="Masukan email" autocomplete="off">
            <p class="text-danger">@error('email'){{ $message }}@enderror</p>
          </div>
          <div class="mb-2">
            <label class="form-label required">Password</label>
            <input type="password" name="password" required class="form-control" placeholder="Masukan password" autocomplete="off">
            <p class="text-danger">@error('password'){{ $message }}@enderror</p>
          </div>
          <div class="mb-2">
            <label class="form-check">
              <input type="checkbox" class="form-check-input"/>
              <span class="form-check-label">Ingat saya di perangkat ini</span>
            </label>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">Masuk</button>
          </div>
        </form>
      </div>
    </div>
    <div class="text-center text-muted mt-3">
      Belum punya akun? <a href="{{ route('register') }}" tabindex="-1">Register</a>
    </div>
  </div>
</div>
@endsection