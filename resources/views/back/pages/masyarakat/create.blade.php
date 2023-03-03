@extends('back.templates.pages')
@section('title')
@section('header')
<div class="row g-2 align-items-center">
  <div class="col">
    <h2 class="page-title">
      Pengaduan
    </h2>
  </div>
</div>
@endsection
@section('content')
<div class="row justify-content-center">
  <div class="col-8">

    @if(Session::get('success'))
    <div class="alert alert-success" role="alert">
      <div class="text-muted">{{ Session::get('success') }}</div>
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
          <input type="text" name="judul" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
          <label class="form-label required">Keterangan</label>
          <textarea name="keterangan" required class="form-control" rows="4" placeholder=""></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label required">Tanggal Pengaduan</label>
          <input type="date" name="tanggal_pengaduan" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
          <label class="form-label required">Lampiran</label>
          <input type="file" name="lampiran" class="form-control" placeholder="">
        </div>
        <p class="card-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis perferendis nisi minus repudiandae vel debitis ipsam atque quam eligendi officia, provident voluptate deleniti nostrum similique, quibusdam veritatis voluptatum quidem. Voluptatum?</p>
        <label class="form-label">Yang dapat melihat laporan</label>
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
                  <span class="d-block text-muted">Provide only basic data needed for the report</span>
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
                  <span class="d-block text-muted">Insert charts and additional advanced analyses to be inserted in the report</span>
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
</div>
@endsection