@extends('back.templates.pages')
@section('title')
@section('header')
<div class="row g-2 align-items-center">
  <div class="col">
    <h2 class="page-title">
      Pengaduan
    </h2>
  </div>
  <!-- Page title actions -->
  <div class="col-auto ms-auto d-print-none">
    <a href="#" onclick="history.go(-1)" class="btn btn-primary">
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

    <form class="card" action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-header">
        <h3 class="card-title">Pengaduan</h3>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <label class="form-label required">Judul</label>
          <input type="text" name="judul" class="form-control" placeholder="Masukan judul">
          <p class="text-danger">@error('judul'){{ $message }}@enderror</p>
        </div>
        <div class="mb-3">
          <label class="form-label required">Keterangan</label>
          <textarea name="keterangan" required class="form-control" rows="4" placeholder="Masukan Keterangan"></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label required">Tanggal Pengaduan</label>
          <input type="date" name="tanggal_pengaduan" class="form-control" placeholder="Masukan tanggal pengaduan">
          <p class="text-danger">@error('tanggal_pengaduan'){{ $message }}@enderror</p>
        </div>
        <div class="mb-3">
          <label class="form-label">Lampiran</label>
          <input type="file" name="lampiran" class="form-control" placeholder="Masukan lampiran">
        </div>
        <label class="form-label required">Status Publikasi</label>
        <div class="form-selectgroup-boxes row mb-3">
          <div class="col-lg-6">
            <label class="form-selectgroup-item">
              <input type="radio" name="status_publikasi" value="1" class="form-selectgroup-input" checked="">
              <span class="form-selectgroup-label d-flex align-items-center p-3">
                <span class="me-3">
                  <span class="form-selectgroup-check"></span>
                </span>
                <span class="form-selectgroup-label-content">
                  <span class="form-selectgroup-title strong mb-1">Private</span>
                  <span class="d-block text-muted">Hanya petugas yang dapat melihat laporan pengaduan yang dibuat</span>
                </span>
              </span>
            </label>
          </div>
          <div class="col-lg-6">
            <label class="form-selectgroup-item">
              <input type="radio" name="status_publikasi" value="2" class="form-selectgroup-input">
              <span class="form-selectgroup-label d-flex align-items-center p-3">
                <span class="me-3">
                  <span class="form-selectgroup-check"></span>
                </span>
                <span class="form-selectgroup-label-content">
                  <span class="form-selectgroup-title strong mb-1">Public</span>
                  <span class="d-block text-muted">Semua orang dapat melihat laporan pengaduan yang dibuat</span>
                </span>
              </span>
            </label>
          </div>
        </div>
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Ketentuan penulisan laporan pengaduan</h3>
      </div>
    </div>
  </div>
</div>
@endsection