<x-layout>
  <x-slot name="title">RSU Sebening Kasih - Beranda | Melayani dengan Sepenuh Hati</x-slot>
    <!-- Carousels Slideshow -->
    <div id="darkCarousel" class="carousel carousel-dark slide shadow-sm" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#darkCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#darkCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#darkCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#darkCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#darkCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="7000">
          <img src="{{ asset('img/carousel1.png') }}" class="d-block w-100" alt="RSBK Slide 1">
        </div>
        <div class="carousel-item" data-bs-interval="7000">
          <img src="{{ asset('img/carousel2.png') }}" class="d-block w-100" alt="RSBK Slide 2">
        </div>
        <div class="carousel-item" data-bs-interval="7000">
          <img src="{{ asset('img/carousel3.png') }}" class="d-block w-100" alt="RSBK Slide 3">
        </div>
        <div class="carousel-item" data-bs-interval="7000">
          <img src="{{ asset('img/carousel4.png') }}" class="d-block w-100" alt="RSBK Slide 4">
        </div>
        <div class="carousel-item" data-bs-interval="7000">
          <img src="{{ asset('img/carousel5.png') }}" class="d-block w-100" alt="RSBK Slide 5">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#darkCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#darkCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Navigation Cards -->
    <section>
      <div class="container">
        <div class="row my-5 justify-content-center">
          <div class="col-lg-3 my-1">
            <a href="https://sebeningkasih.epizy.com/kuesioner" target="_blank" class="text-decoration-none">
              <div class="card h-100 bg-light rounded-2 shadow">
                <div class="card-body">
                  <p class="text-center fs-1"><i class="fa-regular fa-flag"></i></p>
                  <h5 class="card-title text-dark text-center">Survei Kepuasan</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 my-1">
            {{-- GANTI HREF PENDAFTARAN ONLINE --}}
            <a href="https://pendaftaran.rsusebeningkasih.com" target="_blank" class="text-decoration-none">
              <div class="card h-100 bg-light rounded-0 shadow">
                <div class="card-body">
                  <p class="text-center fs-1"><i class="fa-solid fa-globe"></i></p>
                  <h5 class="card-title text-dark text-center">Pendaftaran Online</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 my-1">
            <a href="jadwal-dokter" class="text-decoration-none">
              <div class="card h-100 bg-light rounded-0 shadow">
                <div class="card-body">
                  <p class="text-center fs-1"><i class="fa-regular fa-calendar"></i></p>
                  <h5 class="card-title text-dark text-center">Jadwal Dokter</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
</x-layout>
