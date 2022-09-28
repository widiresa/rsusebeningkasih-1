  <header class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img alt="RSU Sebening Kasih" src="img/logo.png" height="56">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item me-2">
            <a class="nav-link fw-semibold {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
          </li>
          <li class="nav-item dropdown me-2">
            <a class="nav-link fw-semibold {{ request()->is('tentang-kami') ? 'active' : '' }}" href="/tentang-kami">Tentang Kami</a>
          </li>
          <li class="nav-item dropdown me-2">
            <a class="nav-link fw-semibold {{ request()->is('layanan') ? 'active' : '' }}" href="/layanan">Layanan</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link fw-semibold {{ request()->is('jadwal-dokter') ? 'active' : '' }}" href="jadwal-dokter">Jadwal Dokter</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link fw-semibold {{ request()->is('kontak') ? 'active' : '' }}" href="kontak">Kontak</a>
          </li>
          <li class="nav-item me-2">
            {{-- GANTI HREF PENDAFTARAN ONLINE --}}
            <a class="nav-link fw-semibold" href="https://pendaftaran.rsusebeningkasih.com" target="_blank">Pendaftaran Online</a>
          </li>
        </ul>
      </div>
    </div>
  </header>