@extends('back.templates.pages')
@section('header')
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
          <label class="form-label required">Lampiran</label>
          <input type="file" name="lampiran" class="form-control" placeholder="">
        </div>
      </div>
      <div class="card-footer card-footer-transparent">
        This is transparent card footer
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