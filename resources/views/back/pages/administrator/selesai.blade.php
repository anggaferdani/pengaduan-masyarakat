@extends('back.templates.pages')
@section('header')
<div class="row g-2 align-items-center">
  <div class="col">
    <h2 class="page-title">
      Pengaduan
    </h2>
  </div>
  <!-- Page title actions -->
  
</div>
@endsection
@section('content')
<ul class="nav nav-bordered mb-4">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="{{ route('administrator.semua') }}">Semua</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('administrator.diproses') }}">Laporan yang sedang diproses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ route('administrator.selesai') }}">Selesai</a>
  </li>
</ul>
<div class="row row-cards">
  @foreach ($pengaduan as $pengaduans)
    @if($pengaduans->status_laporan_pengaduan == 'Selesai')
      @if($pengaduans->status_aktif == 1)
      <div class="col-md-6 col-lg-3">
        <a href="{{ route('administrator.tanggapan', $pengaduans->id) }}">
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
    @endif
  @endforeach
</div>
@endsection