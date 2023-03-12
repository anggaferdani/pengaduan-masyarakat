@extends('back.templates.masyarakat')
@section('content')
<div class="row row-cards justify-content-center" style="position: relative; overflow: hidden;">
  <div class="col-lg-10 col-xl-9">
    <h1 class="text-center mt-1 mb-4" style="font-size: 45px; font-weight: bold;">Layanan Aspirasi dan Pengaduan Online Masyarakat</h1>
    <p class="text-center mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero eum illum atque officia repellat quidem aut similique aliquid. Nobis est autem dolorum. Veniam quidem beatae repellat iste sit, ratione amet.</p>
    <p class="text-center">Lorem ipsum dolor sit amet consectetur</p>
    <img src="{{ asset('gambar-panah-penunjuk-login.png') }}" width="80px" alt="" style="position: absolute; z-index: 1; transform: translate(830px, -220px);">
    <img src="{{ asset('amsasdasaa.png') }}" width="120px" alt="" style="position: absolute; z-index: 1; transform: translate(-130px, -70px);">
    <div class="hr-text hr-text-center">
      <span>Lorem, ipsum dolor.</span>
    </div>
    <div class="alert alert-important alert-info alert-dismissible" style="border: 2px solid black; border-radius: 15px;" role="alert">
      <div>Sebaiknya sebelum membuat laporan pengaduan alangkah baiknya login terlebih dahulu</div>
    </div>
    <div class="card" style="border: 2px solid black; border-radius: 15px;">
      <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
          <h3 class="card-title">Pengaduan</h3>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <label class="form-label required">Judul</label>
            <input type="text" name="judul" class="form-control" style="border: 2px solid black" placeholder="Masukan judul">
            <p class="text-danger">@error('judul'){{ $message }}@enderror</p>
          </div>
          <div class="mb-3">
            <label class="form-label required">Keterangan</label>
            <textarea name="keterangan" required class="form-control" style="border: 2px solid black" rows="4" placeholder="Masukan Keterangan"></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label required">Tanggal Pengaduan</label>
            <input type="date" name="tanggal_pengaduan" class="form-control" style="border: 2px solid black" placeholder="Masukan tanggal pengaduan">
            <p class="text-danger">@error('tanggal_pengaduan'){{ $message }}@enderror</p>
          </div>
          <div class="mb-3">
            <label class="form-label">Lampiran</label>
            <input type="file" name="lampiran" class="form-control" style="border: 2px solid black" placeholder="Masukan lampiran">
          </div>
          <p class="card-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis perferendis nisi minus repudiandae vel debitis ipsam atque quam eligendi officia, provident voluptate deleniti nostrum similique, quibusdam veritatis voluptatum quidem. Voluptatum?</p>
          <label class="form-label required">Status Publikasi</label>
          <div class="form-selectgroup-boxes row mb-3 g-1">
            <div class="col-lg-6">
              <label class="form-selectgroup-item">
                <input type="radio" name="status_publikasi" value="1" class="form-selectgroup-input" checked="">
                <span class="form-selectgroup-label d-flex align-items-center p-3" style="border: 2px solid black">
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
                <span class="form-selectgroup-label d-flex align-items-center p-3" style="border: 2px solid black">
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
        <div class="card-footer card-footer-transparent text-end">
          <a href="{{ route('login') }}" class="btn" style="border: 2px solid black">Kirim</a>
        </div>
      </form>
    </div>
    <ul class="steps steps-green steps-counter my-4">
      <li class="step-item active">Pending</li>
      <li class="step-item">Diproses</li>
      <li class="step-item">Selesai</li>
    </ul>
    <div class="hr-text hr-text-center">
      <span>Lorem, ipsum dolor.</span>
    </div>
    <p class="text-center mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero eum illum atque officia repellat quidem aut similique aliquid. Nobis est autem dolorum. Veniam quidem beatae repellat iste sit, ratione amet.</p>
  </div>
</div>
<div class="row row-cards justify-content-center">
  <div class="col-md-6 col-lg-3">
    <div class="card bg-primary text-primary-fg" style="border: 2px solid black; border-radius: 15px;">
      <div class="card-stamp">
        <div class="card-stamp-icon bg-white text-primary">
          <!-- Download SVG icon from http://tabler-icons.io/i/star -->
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
        </div>
      </div>
      <div class="card-body">
        <h3 class="card-title">Card with background and icon</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi nostrum recusandae reiciendis saepe.</p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="card bg-primary text-primary-fg" style="border: 2px solid black; border-radius: 15px;">
      <div class="card-stamp">
        <div class="card-stamp-icon bg-white text-primary">
          <!-- Download SVG icon from http://tabler-icons.io/i/star -->
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
        </div>
      </div>
      <div class="card-body">
        <h3 class="card-title">Card with background and icon</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi nostrum recusandae reiciendis saepe.</p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="card bg-primary text-primary-fg" style="border: 2px solid black; border-radius: 15px;">
      <div class="card-stamp">
        <div class="card-stamp-icon bg-white text-primary">
          <!-- Download SVG icon from http://tabler-icons.io/i/star -->
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
        </div>
      </div>
      <div class="card-body">
        <h3 class="card-title">Card with background and icon</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi nostrum recusandae reiciendis saepe.</p>
      </div>
    </div>
  </div>
</div>
<div class="row row-cards justify-content-center">
  <div class="col-lg-10 col-xl-9">
    <div class="hr-text hr-text-center">
      <span>Lorem, ipsum dolor.</span>
    </div>
  </div>
</div>
@endsection