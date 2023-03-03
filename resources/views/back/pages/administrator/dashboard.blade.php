@extends('back.templates.pages')
@section('title')
@section('header')
<div class="row g-2 align-items-center">
  <div class="col">
    <h2 class="page-title">
      Tabler Inc. Tasks
    </h2>
  </div>
  <!-- Page title actions -->
  <div class="col-auto ms-auto d-print-none">
    <a href="#" class="btn btn-primary">
      <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
      Add board
    </a>
  </div>
</div>
@endsection
@section('content')
<ul class="nav nav-bordered mb-4">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Hanya Pengaduanmu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Semua</a>
  </li>
</ul>
<div class="row row-cards">
  <div class="col-md-6 col-lg-3">
    <div class="card bg-primary text-primary-fg">
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
    <div class="card bg-primary text-primary-fg">
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
    <div class="card bg-primary text-primary-fg">
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
    <div class="card bg-primary text-primary-fg">
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
@endsection