<x-layout>
  <x-slot name="title">Layanan</x-slot>
    <div class="container py-4">
        <h3 class="h3 pb-3 mb-2 text-center">Layanan</h3>
        <ul class="nav nav-tabs justify-content-center">
          <li class="nav-item">
            <a class="nav-link active" href="#rawatinap" type="button" data-bs-toggle="tab" data-bs-target="#rawatinap">Rawat Inap</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#rawatjalan" type="button" data-bs-toggle="tab" data-bs-target="#rawatjalan">Rawat Jalan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#penunjang" type="button" data-bs-toggle="tab" data-bs-target="#penunjang">Penunjang</a>
          </li>
      </ul>
      <div class="tab-content">
        {{-- Rawat Inap --}}
        <x-layanan.ranap />
        {{-- Rawat Jalan --}}
        <x-layanan.rajal />
        {{-- Penunjang --}}
        <x-layanan.penunjang />
      </div>
    </div>
</x-layout>