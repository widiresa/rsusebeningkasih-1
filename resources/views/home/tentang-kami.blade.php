<x-layout>
  <x-slot name="title">Tentang Kami</x-slot>
    <div class="container py-4">
        <div class="row g-5">
          <div class="col-md-9">
            <h3 class="h3 pb-4 mb-4 border-bottom">Tentang Kami</h3>
            <x-tentang-kami.article />
            </div>
          <div class="col-md-3">
            <div class="position-sticky bg-light p-3 p-md-4" style="top: 7rem;">
              <h5>Daftar Isi</h5>
              <x-tentang-kami.daftarisi />
            </div>
          </div>
        </div>
      </div>
</x-layout>