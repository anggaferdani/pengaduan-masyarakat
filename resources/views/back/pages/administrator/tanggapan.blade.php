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
    <form class="card" action="{{ route('user.simpan-perubahan', $pengaduan->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="card-header">
        <h3 class="card-title">Pengaduan</h3>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <label class="form-label required">Judul</label>
          <input readonly type="text" name="judul" value="{{ $pengaduan->judul }}" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
          <label class="form-label required">Keterangan</label>
          <textarea readonly name="keterangan" required class="form-control" rows="4" placeholder="">{{ $pengaduan->keterangan }}</textarea>
        </div>
        <p class="card-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis perferendis nisi minus repudiandae vel debitis ipsam atque quam eligendi officia, provident voluptate deleniti nostrum similique, quibusdam veritatis voluptatum quidem. Voluptatum?</p>
        <div class="mb-3">
          <label class="form-label required">Tanggal Pengaduan</label>
          <input readonly type="date" name="tanggal_pengaduan" value="{{ $pengaduan->tanggal_pengaduan }}" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
          <label class="form-label">Lampiran</label>
          <img src="/lampiran/{{ $pengaduan->lampiran }}" class="card-img-top">
        </div>
        <p>dibuat oleh {{ $pengaduan->alamat_email_pelapor }}</p>
      </div>
    </form>
  </div>
  <div class="col-lg-4">

    @if(Session::get('success'))
    <div class="alert alert-important alert-primary" role="alert">
      {{ Session::get('success') }}
    </div>
    @endif

    <div class="row row-cards">
      <div class="col-12">
        <div class="card">
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
      </div>
      <div class="col-12">
        @if(auth()->user()->level == 1)
        <form class="card" action="{{ route('administrator.simpan-tanggapan', $pengaduan->id) }}" method="POST">
        @endif
        @if(auth()->user()->level == 2)
        <form class="card" action="{{ route('petugas.simpan-tanggapan', $pengaduan->id) }}" method="POST">
        @endif
          @csrf
          @method('PUT')
          <div class="card-header">
            <h3 class="card-title">Tanggapan</h3>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label">Status Laporan Pengaduan</label>
              @if($pengaduan->status_laporan_pengaduan == 'Pending')
              <input readonly type="text" name="status_laporan_pengaduan" value="Diproses" class="form-control" placeholder="">
              @endif
              @if($pengaduan->status_laporan_pengaduan == 'Diproses')
              <input readonly type="text" name="status_laporan_pengaduan" value="Selesai" class="form-control" placeholder="">
              @endif
              @if($pengaduan->status_laporan_pengaduan == 'Selesai')
              <input readonly type="text" name="status_laporan_pengaduan" value="Selesai" class="form-control" placeholder="">
              @endif
            </div>
            <div class="mb-3">
              <label class="form-label required">Tanggapan</label>
              <textarea required name="tanggapan" @if($pengaduan->status_laporan_pengaduan == 'Selesai'){{ 'readonly' }}@endif class="form-control" rows="4" placeholder=""></textarea>
            </div>
          </div>
          <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">Kirim</button>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection