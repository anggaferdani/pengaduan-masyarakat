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
        <form action="./" method="get" autocomplete="off" novalidate>
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" placeholder="your@email.com" autocomplete="off">
          </div>
          <div class="mb-2">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Your password" autocomplete="off">
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