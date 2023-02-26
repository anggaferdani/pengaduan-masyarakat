@extends('back.templates.authentications')
@section('title')
@section('content')
<div class="page page-center">
  <div class="container container-tight py-4">
    <div class="text-center mb-4">
      <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('back/static/logo.svg') }}" height="36" alt=""></a>
    </div>
    <div class="card card-md">
      <div class="card-body">
        <h2 class="h2 text-center mb-4">Login to your account</h2>

        @if(Session::get('success'))
        <div class="alert alert-success" role="alert">
          <div class="text-muted">{{ Session::get('success') }}</div>
        </div>
        @endif

        @if(Session::get('fail'))
        <div class="alert alert-danger" role="alert">
          <div class="text-muted">{{ Session::get('fail') }}</div>
        </div>
        @endif

        <form action="{{ route('postlogin') }}" method="POST" novalidate>
          @csrf
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" name="email" required class="form-control" placeholder="your@email.com" autocomplete="off">
            <p class="text-danger">@error('email'){{ $message }}@enderror</p>
          </div>
          <div class="mb-2">
            <label class="form-label">Password</label>
            <input type="password" name="password" required class="form-control" placeholder="Your password" autocomplete="off">
            <p class="text-danger">@error('password'){{ $message }}@enderror</p>
          </div>
          <div class="mb-2">
            <label class="form-check">
              <input type="checkbox" class="form-check-input"/>
              <span class="form-check-label">Remember me on this device</span>
            </label>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">Sign in</button>
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