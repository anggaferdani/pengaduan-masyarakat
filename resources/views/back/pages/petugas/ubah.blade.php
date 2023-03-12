@extends('back.templates.pages')
@section('header')
<div class="row g-2 align-items-center">
  <div class="col">
    <h2 class="page-title">
      Pengaduan
    </h2>
  </div>
  <!-- Page title actions -->
  <div class="col-auto ms-auto d-print-none">
    <a href="{{ route('administrator.petugas') }}" class="btn btn-primary">
      <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l14 0"></path><path d="M5 12l6 6"></path><path d="M5 12l6 -6"></path></svg>
      Kembali
    </a>
  </div>
</div>
@endsection
@section('content')
<div class="row row-cards">
  <div class="col-lg-8">

    @if(Session::get('success'))
    <div class="alert alert-important alert-primary" role="alert">
      {{ Session::get('success') }}
    </div>
    @endif

    <div class="row row-cards">
      <div class="col-12">
        <form class="card" action="{{ route('administrator.simpan-perubahan-petugas', $petugas->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="card-header">
            <h3 class="card-title">Tanggapan</h3>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label required">Nama Panjang</label>
              <input type="text" name="nama_panjang" value="{{ $petugas->nama_panjang }}" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
              <label class="form-label required">Telepon</label>
              <input type="number" name="telepon" value="{{ $petugas->telepon }}" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
              <label class="form-label required">Email</label>
              <input type="email" name="email" value="{{ $petugas->email }}" class="form-control" placeholder="">
            </div>
            <p class="card-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis perferendis nisi minus repudiandae vel debitis ipsam atque quam eligendi officia, provident voluptate deleniti nostrum similique, quibusdam veritatis voluptatum quidem. Voluptatum?</p>
            <div class="mb-3">
              <label class="form-label required">Status</label>
              <div>
                <label class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status_akun_yang_digunakan" value="1" @if($petugas->status_akun_yang_digunakan == 1){{ 'checked' }}@endif>
                  <span class="form-check-label">Enable</span>
                </label>
                <label class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status_akun_yang_digunakan" value="2" @if($petugas->status_akun_yang_digunakan == 2){{ 'checked' }}@endif>
                  <span class="form-check-label">Disable</span>
                </label>
              </div>
            </div>
          </div>
          <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">Kirim</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis perferendis nisi minus repudiandae vel debitis ipsam atque quam eligendi officia, provident voluptate deleniti nostrum similique, quibusdam veritatis voluptatum quidem. Voluptatum?</p>
          <form action="{{ route('administrator.hapus-petugas', $petugas->id) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-danger w-100">Hapus</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection