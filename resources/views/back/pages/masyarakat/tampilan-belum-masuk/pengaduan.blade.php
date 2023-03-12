@extends('back.templates.masyarakat')
@section('header')
<div class="row g-2 align-items-center">
  <div class="col">
    <h2 class="page-title">
      Pengaduan
    </h2>
  </div>
  <!-- Page title actions -->
  <div class="col-auto ms-auto d-print-none">
    <a href="{{ route('tampilkan-semua-laporan') }}" class="btn" style="border: 2px solid black;">
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

    <form class="card" action="{{ route('user.simpan-perubahan', $pengaduan->id) }}" style="border: 2px solid black; border-radius: 15px;" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="card-header">
        <h3 class="card-title">Pengaduan</h3>
      </div>
      <div class="card-body">
        <p>Pelapor : {{ $pengaduan->alamat_email_pelapor }}</p>
        <div class="mb-3">
          <label class="form-label required">Judul</label>
          <input readonly type="text" name="judul" value="{{ $pengaduan->judul }}" class="form-control" style="border: 2px solid black;" placeholder="">
        </div>
        <div class="mb-3">
          <label class="form-label required">Keterangan</label>
          <textarea readonly name="keterangan" class="form-control" rows="4" style="border: 2px solid black;" placeholder="">{{ $pengaduan->keterangan }}</textarea>
        </div>
        <p class="card-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis perferendis nisi minus repudiandae vel debitis ipsam atque quam eligendi officia, provident voluptate deleniti nostrum similique, quibusdam veritatis voluptatum quidem. Voluptatum?</p>
        <div class="mb-3">
          <label class="form-label required">Tanggal Pengaduan</label>
          <input readonly type="date" name="tanggal_pengaduan" value="{{ $pengaduan->tanggal_pengaduan }}" class="form-control" style="border: 2px solid black;" placeholder="">
        </div>
        <div class="mb-3">
          <label class="form-label">Lampiran</label>
          <img src="/lampiran/{{ $pengaduan->lampiran }}" style="border: 2px solid black; border-radius: 15px;" class="card-img-top">
        </div>
      </div>
    </form>
  </div>
  <div class="col-lg-4">
    <div class="row row-cards">
      <col-12>
        <div class="card" style="border: 2px solid black; border-radius: 15px;">
          <div class="card-body">
            <h3 class="card-title">Tanggapan</h3>
            <ul class="steps steps-vertical">
              <li class="step-item">
                <div class="h4 m-0">Pending</div>
                <div class="text-muted">Laporan pengaduanmu berhasil ditambahkan. tunggu untuk petugas memberi tanggapan</div>
              </li>
              @foreach($pengaduan->tanggapans as $tanggapans)
              <li class="step-item">
                <div class="h4 m-0">{{ $tanggapans->status_laporan_pengaduan }}</div>
                <div class="text-muted">{{ $tanggapans->tanggapan }}</div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </col-12>
    </div>
  </div>
</div>
@endsection