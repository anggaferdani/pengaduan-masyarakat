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
    <a href="{{ route('user.create') }}" class="btn btn-primary">
      <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-at" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
        <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
     </svg>
      Buat Laporan Pengaduan
    </a>
  </div>
</div>
@endsection
@section('content')
<ul class="nav nav-bordered mb-4">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('user.hanya-pengaduan-mu') }}">Hanya Pengaduanmu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('user.semua') }}">Semua</a>
  </li>
</ul>
<div class="row row-cards">
  @foreach ($pengaduan as $pengaduans)
    @if($pengaduans->status_publikasi == 1 or $pengaduans->created_by == auth()->user()->id)
    <div class="col-md-6 col-lg-3">
      <a href="{{ route('user.pengaduan', $pengaduans->id) }}">
        <div class="card bg-primary h-100 text-primary-fg">
          <div class="card-stamp">
            <div class="card-stamp-icon bg-white text-primary">
              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
            </div>
          </div>
          <div class="card-body">
            <p>{{ $pengaduans->tanggal_pengaduan }}</p>
            <h3 class="card-title">{{ $pengaduans->judul }}</h3>
          </div>
          <div class="card-footer card-footer-transparent">
            {{ $pengaduans->alamat_email_pelapor }}
          </div>
        </div>
      </a>
    </div>
    @endif
  @endforeach
</div>
@endsection