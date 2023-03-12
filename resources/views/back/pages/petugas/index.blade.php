@extends('back.templates.pages')
@section('title')
@section('header')
<div class="row g-2 align-items-center">
  <div class="col">
    <h2 class="page-title">
      Petugas
    </h2>
  </div>
  <!-- Page title actions -->
  <div class="col-auto ms-auto d-print-none">
    <a href="{{ route('user.create') }}" class="btn btn-primary">
      Tambah
    </a>
  </div>
</div>
@endsection
@section('content')
<div class="row row-cards">
  <div class="col-lg-4">

    @if(Session::get('success'))
    <div class="alert alert-important alert-primary" role="alert">
      {{ Session::get('success') }}
    </div>
    @endif
    
    <form class="card" action="{{ route('administrator.postpetugas') }}" method="POST">
      @csrf
      <div class="card-header">
        <h3 class="card-title">Tambah</h3>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <label class="form-label required">Nama Panjang</label>
          <input type="text" name="nama_panjang" class="form-control" placeholder="">
        </div>
        <div class="row">
          <div class="mb-3 col-md-6">
            <label class="form-label required">Telepon</label>
            <input type="number" name="telepon" class="form-control" placeholder="">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label required">Email</label>
            <input type="email" name="email" class="form-control" placeholder="">
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label required">Password</label>
          <input type="text" name="password" class="form-control" placeholder="">
        </div>
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </form>
  </div>
  <div class="col-lg-8">

    @if(Session::get('fail'))
    <div class="alert alert-important alert-danger" role="alert">
      {{ Session::get('fail') }}
    </div>
    @endif

    <div class="row row-cards">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Petugas</h3>
          </div>
          <div class="list-group list-group-flush overflow-auto" style="max-height: 20rem">
            @foreach ($petugas_dari_controller as $petugas)
            @if($petugas->level == 2)
              @if($petugas->status_aktif == 1)
              <div class="list-group-item">
                <div class="row">
                  <div class="col-auto">
                    <a href="#">
                      <span class="avatar" style="background-image: url(./static/avatars/023f.jpg)"></span>
                    </a>
                  </div>
                  <div class="col text-truncate">
                    <a href="{{ route('administrator.ubah', $petugas->id) }}" class="text-body d-block">{{ $petugas->nama_panjang }}</a>
                    <div class="text-muted text-truncate mt-n1">{{ $petugas->email }}</div>
                  </div>
                </div>
              </div>
              @endif
            @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection