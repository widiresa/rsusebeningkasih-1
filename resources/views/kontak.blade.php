@extends('partials/main')

@section('main')
    <div class="container my-4">
        <h3 class="h3 pb-4 mb-4 border-bottom">Kontak</h3>
        <div class="row">
            <div class="col-lg text-center">
                <a href="tel:+622954150645" class="py-3 text-decoration-none">
                    <i class="fa-solid fa-phone fa-3x"></i>
                </a>
                <h4 class="mt-4 mb-0">Telepon</h4>
                <p class="mb-0">Anda bisa menghubungi pada nomor berikut:</p>
                <p>(0295) 4150645</p>
            </div>
            <div class="col-lg text-center">
                <i class="fa-solid fa-fax fa-3x"></i>
                <h4 class="mt-4 mb-0">Faximile</h4>
                <p class="mb-0">Anda bisa kirim dokumen pada nomor fax berikut:</p>
                <p>(0295) 4546012</p>
            </div>
            <div class="col-lg text-center">
                <a href="tel:+6285219683631" class="py-3 text-decoration-none">
                    <i class="fa-solid fa-truck-medical fa-3x"></i>
                </a>
                <h4 class="mt-4 mb-0">IGD</h4>
                <p class="mb-0">Layanan setiap hari 24 jam</p>
                <p>0852-1968-3631</p>
            </div>
        </div>
    </div>
@endsection