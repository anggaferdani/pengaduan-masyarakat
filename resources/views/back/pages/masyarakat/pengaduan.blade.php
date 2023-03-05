@extends('back.templates.pages')
@section('header')
<div class="row g-2 align-items-center">
  <div class="col">
    <h2 class="page-title">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11"></path><path d="M8 8l4 0"></path><path d="M8 12l4 0"></path><path d="M8 16l4 0"></path></svg>
      Pengaduan
    </h2>
  </div>
  <!-- Page title actions -->
  <div class="col-auto ms-auto d-print-none">
    <a href="#" onclick="history.go(-1)" class="btn btn-primary">
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
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Pengaduan</h3>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <label class="form-label required">Judul</label>
          <input type="text" name="judul" value="{{ $pengaduan->judul }}" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
          <label class="form-label required">Keterangan</label>
          <textarea name="keterangan" required class="form-control" rows="4" placeholder="">{{ $pengaduan->keterangan }}</textarea>
        </div>
        <p class="card-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis perferendis nisi minus repudiandae vel debitis ipsam atque quam eligendi officia, provident voluptate deleniti nostrum similique, quibusdam veritatis voluptatum quidem. Voluptatum?</p>
        <div class="mb-3">
          <label class="form-label required">Tanggal Pengaduan</label>
          <input type="date" name="tanggal_pengaduan" value="{{ $pengaduan->tanggal_pengaduan }}" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
          <label class="form-label">Lampiran</label>
          <img src="/lampiran/{{ $pengaduan->lampiran }}" class="card-img-top">
        </div>
      </div>
      <div class="card-footer card-footer-transparent">
        dibuat oleh {{ $pengaduan->alamat_email_pelapor }}
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Tanggapan</h3>
        <ul class="steps steps-vertical">
          <li class="step-item">
            <div class="h4 m-0">Order received</div>
            <div class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus culpa cum expedita ipsam laborum nam ratione reprehenderit sed sint tenetur!</div>
          </li>
          <li class="step-item">
            <div class="h4 m-0">Order received</div>
            <div class="text-muted">Lorem ipsum dolor sit amet.</div>
          </li>
          <li class="step-item active">
            <div class="h4 m-0">Out for delivery</div>
            <div class="text-muted">Lorem ipsum dolor sit amet.</div>
          </li>
          <li class="step-item">
            <div class="h4 m-0">Finalized</div>
            <div class="text-muted">Lorem ipsum dolor sit amet.</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection