<header class="navbar navbar-expand-md navbar-light sticky-top d-print-none" style="border-bottom: 2px solid black;">
  <div class="container-xl">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
      <a href=".">
        Pengaduan.com
      </a>
    </h1>
    <div class="navbar-nav flex-row order-md-last">
      <div class="nav-item d-none d-md-flex me-3">
        <div class="btn-list">
          <a href="{{ route('register') }}" class="btn" style="border: 2px solid black;" rel="noreferrer">
            Register
          </a>
          <a href="{{ route('login') }}" class="btn" style="border: 2px solid black;" rel="noreferrer">
            Login
          </a>
        </div>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbar-menu">
      <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('tampilkan-semua-laporan') }}">
              <span class="nav-link-title">
                Public
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>