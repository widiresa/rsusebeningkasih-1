@extends('partials/main')

@section('main')
    <div class="container py-4">
        <h3 class="h3 pb-3 mb-2 text-center">Layanan</h3>
        <ul class="nav nav-tabs justify-content-center">
            {{-- <li class="nav-item">
              <a class="nav-link active" href="#" type="button" data-bs-toggle="tab" data-bs-target="#unggulan">Unggulan</a>
            </li> --}}
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
          {{-- Unggulan
          <div class="tab-pane fade show active" id="unggulan">
            <h3 class="h3 text-primary mt-4">Unggulan</h3>
            <div class="my-4">
            </div>
          </div> --}}
          {{-- Rawat Inap --}}
          <div class="tab-pane fade show active" id="rawatinap">
            <h3 class="h3 text-primary mt-4">Rawat Inap</h3>
            <div class="my-4">
              <div class="accordion" id="accordionRanap">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOneRanap">
                    <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneRanap" aria-expanded="true" aria-controls="collapseOneRanap">
                      VIP (Aquamarine, Topaz, Intan, Mutiara)
                    </button>
                  </h2>
                  <div id="collapseOneRanap" class="accordion-collapse collapse show" aria-labelledby="headingOneRanap" data-bs-parent="#accordionRanap">
                    <div class="accordion-body">
                      <p class="mb-0">Jumlah Tempat Tidur: 4</p>
                      <p>Fasilitas :
                        <ul>
                          <li>Satu Pasien dalam Satu Ruangan</li>
                          <li>AC</li>
                          <li>TV Full Channel</li>
                          <li>Kulkas</li>
                          <li>Sofa</li>
                          <li>Kamar Mandi Dalam menggunakan Water Heater</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwoRanap">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoRanap" aria-expanded="false" aria-controls="collapseTwoRanap">
                      Kelas I (Kecubung 1, Kecubung 2, dan Kecubung 3)
                    </button>
                  </h2>
                  <div id="collapseTwoRanap" class="accordion-collapse collapse" aria-labelledby="headingTwoRanap" data-bs-parent="#accordionRanap">
                    <div class="accordion-body">
                      <p class="mb-0">Jumlah Tempat Tidur: 6</p>
                      <p>Fasilitas :
                        <ul>
                          <li>Dua Pasien dalam Satu Ruangan</li>
                          <li>AC</li>
                          <li>TV</li>
                          <li>Kamar Mandi Dalam</li>
                          <li>Hotspot Area</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThreeRanap">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeRanap" aria-expanded="false" aria-controls="collapseThreeRanap">
                      Kelas II (Mirah Delima 1, Mirah Delima 2, Mirah Delima 3, Mirah Delima 4, dan Mirah Delima 5)
                    </button>
                  </h2>
                  <div id="collapseThreeRanap" class="accordion-collapse collapse" aria-labelledby="headingThreeRanap" data-bs-parent="#accordionRanap">
                    <div class="accordion-body">
                      <p class="mb-0">Jumlah Tempat Tidur: 14</p>
                      <p>Fasilitas :
                        <ul>
                          <li>Dua sampai Tiga Pasien dalam Satu Ruangan</li>
                          <li>AC</li>
                          <li>TV</li>
                          <li>Kamar Mandi Luar</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFourRanap">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourRanap" aria-expanded="false" aria-controls="collapseFourRanap">
                      Kelas III (Berlian 1, Berlian 2, Berlian 3, Berlian 4, Berlian 5, dan Berlian 6)
                    </button>
                  </h2>
                  <div id="collapseFourRanap" class="accordion-collapse collapse" aria-labelledby="headingFourRanap" data-bs-parent="#accordionRanap">
                    <div class="accordion-body">
                      <p class="mb-0">Jumlah Tempat Tidur: 18</p>
                      <p>Fasilitas :
                        <ul>
                          <li>Tiga Pasien dalam Satu Ruangan</li>
                          <li>AC</li>
                          <li>Kamar Mandi Dalam</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- Rawat Jalan --}}
          <div class="tab-pane fade" id="rawatjalan">
            <h3 class="h3 text-primary mt-4">Rawat Jalan</h3>
            <div class="my-4">
              <div class="accordion" id="accordionRajal">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOneRajal">
                    <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneRajal" aria-expanded="true" aria-controls="collapseOneRajal">Dokter Umum</button>
                  </h2>
                  <div id="collapseOneRajal" class="accordion-collapse collapse show" aria-labelledby="headingOneRajal" data-bs-parent="#accordionRajal">
                    <div class="accordion-body">
                      <p class="mb-0">Daftar Dokter :
                        <ul>
                          <li>dr. Rumisih</li>
                          <li>dr. Kurmin Hadi</li>
                          <li>dr. Nisa Nurul Alam</li>
                          <li>dr. Wangsit Widi Astuti</li>
                          <li>dr. Arief Turwadi</li>
                          <li>dr. Ita Purwanti</li>
                          <li>dr. Arif Patriana</li>
                          <li>dr. Lutfi Reza Aditya</li>
                          <li>dr. Rendi Aji Ariawan</li>
                          <li>dr. Brahmantya Agung Utariya</li>
                          <li>dr. Jesslyn Elvina Kristantio</li>
                          <li>dr. Maya Elok Faridatin</li>
                          <li>dr. Diyo Isworo Tunggal Kurniawan</li>
                          <li>dr. Mayday Finisha</li>
                          <li>dr. Asrina Enggarela</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwoRajal">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoRajal" aria-expanded="false" aria-controls="collapseTwoRajal">Poliklinik Spesialis</button>
                  </h2>
                  <div id="collapseTwoRajal" class="accordion-collapse collapse" aria-labelledby="headingTwoRajal" data-bs-parent="#accordionRajal">
                    <div class="accordion-body">
                      <p class="mb-0 fw-semibold">Penyakit Dalam</p>
                      <p class="mb-0">Daftar Dokter :
                        <ul>
                          <li>dr. Eko Sugihanto, Sp. PD, FINASIM</li>
                        </ul>
                      </p>
                      <p class="mb-0 fw-semibold">Bedah Umum</p>
                      <p class="mb-0">Daftar Dokter :
                        <ul>
                          <li>dr. Mario Pohan S, Sp.B</li>
                          <li>dr. Widi Antono, Sp.B</li>
                        </ul>
                      </p>
                      <p class="mb-0 fw-semibold">Orthopaedi dan Traumatologi</p>
                      <p class="mb-0">Daftar Dokter :
                        <ul>
                          <li>dr. William Limoa, Sp.OT, FICS, AIFO-K</li>
                        </ul>
                      </p>
                      <p class="mb-0 fw-semibold">Anak</p>
                      <p class="mb-0">Daftar Dokter :
                        <ul>
                          <li>dr. Timtri Dilli Mirawati, Sp. A</li>
                        </ul>
                      </p>
                      <p class="mb-0 fw-semibold">Kebidanan dan Kandungan</p>
                      <p class="mb-0">Daftar Dokter :
                        <ul>
                          <li>dr. Tansya Sushan Purnaningrum, Sp.OG</li>
                          <li>dr. Hendra Daniel Julianto L Batu, Sp.OG</li>
                          <li>dr. Aji Patriajati, Sp.OG</li>
                        </ul>
                      </p>
                      <p class="mb-0 fw-semibold">Gigi</p>
                      <p class="mb-0">Daftar Dokter :
                        <ul>
                          <li>drg. Karina Wayne S</li>
                        </ul>
                      </p>
                      <p class="mb-0 fw-semibold">Radiologi</p>
                      <p class="mb-0">Daftar Dokter :
                        <ul>
                          <li>dr. Adnan Adityawan, Sp. Rad</li>
                        </ul>
                      </p>
                      <p class="mb-0 fw-semibold">Anestesi</p>
                      <p class="mb-0">Daftar Dokter :
                        <ul>
                          <li>dr. Joko Padwanto S, Sp. An</li>
                          <li>dr. Heni Handayani, Sp. An</li>
                        </ul>
                      </p>
                      <p class="mb-0 fw-semibold">Patologi Klinik</p>
                      <p class="mb-0">Daftar Dokter :
                        <ul>
                          <li>dr. Enny Rohmawati, Sp.PK</li>
                        </ul>
                      </p>
                      <p class="mb-0 fw-semibold">Fisioterapi</p>
                      <p class="mb-0 fw-semibold">Psikologi</p>
                    </div>
                  </div>
                </div>
              </div>
              {{-- <ul class="list-group">
                <li class="list-group-item">Dokter Umum</li>
                <li class="list-group-item">Penyakit Dalam</li>
                <li class="list-group-item">Bedah Umum</li>
                <li class="list-group-item">Orthopaedi dan Traumatologi</li>
                <li class="list-group-item">Anak</li>
                <li class="list-group-item">Kebidanan dan Kandungan</li>
                <li class="list-group-item">Gigi</li>
                <li class="list-group-item">Psikologi</li>
                <li class="list-group-item">Fisioterapi</li>
              </ul> --}}
            </div>
          </div>
          {{-- Penunjang --}}
          <div class="tab-pane fade" id="penunjang">
            <h3 class="h3 text-primary mt-4">Penunjang</h3>
            <div class="my-4">
              <div class="accordion" id="accordionPnnjg">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOnePnnjg">
                    <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOnePnnjg" aria-expanded="true" aria-controls="collapseOnePnnjg">Isolasi Airborne</button>
                  </h2>
                  <div id="collapseOnePnnjg" class="accordion-collapse collapse show" aria-labelledby="headingOnePnnjg" data-bs-parent="#accordionPnnjg">
                    <div class="accordion-body">
                      <p class="mb-0">Isolasi untuk pasien yang terpapar penyakit yang menyebar lewat udara.</p>
                      <p>Fasilitas :
                        <ul>
                          <li>Dua Tempat Tidur</li>
                          <li>Kamar Mandi Dalam</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwoPnnjg">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoPnnjg" aria-expanded="false" aria-controls="collapseTwoPnnjg">Isolasi Imunosupresi</button>
                  </h2>
                  <div id="collapseTwoPnnjg" class="accordion-collapse collapse" aria-labelledby="headingTwoPnnjg" data-bs-parent="#accordionPnnjg">
                    <div class="accordion-body">
                      <p class="mb-0">Isolasi dengan tekanan posisif untuk pasien imunosupresi yang sangat berisiko tertular infeksi.</p>
                      <p>Fasilitas :
                        <ul>
                          <li>Dua Tempat Tidur</li>
                          <li>AC</li>
                          <li>Kamar Mandi Luar</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThreePnnjg">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreePnnjg" aria-expanded="false" aria-controls="collapseThreePnnjg">Perinatal</button>
                  </h2>
                  <div id="collapseThreePnnjg" class="accordion-collapse collapse" aria-labelledby="headingThreePnnjg" data-bs-parent="#accordionPnnjg">
                    <div class="accordion-body">
                      <p class="mb-0">Jumlah Tempat Tidur: 8</p>
                      <p>Fasilitas :
                        <ul></li>
                          <li>Infant Inkubator</li>
                          <li>Infant Warmer</li>
                          <li>CPAP</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFourPnnjg">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourPnnjg" aria-expanded="false" aria-controls="collapseFourPnnjg">ICU</button>
                  </h2>
                  <div id="collapseFourPnnjg" class="accordion-collapse collapse" aria-labelledby="headingFourPnnjg" data-bs-parent="#accordionPnnjg">
                    <div class="accordion-body">
                      <p class="mb-0">Ruang perawatan intensif untuk pasien yang memerlukan pengobatan dan perawatan khusus, guna mencegah dan mengobati terjadinya kegagalan organ-organ vital.</p>
                      <p>Fasilitas :
                        <ul>
                          <li>Empat Tempat Tidur</li>
                          <li>Syringe Pump</li>
                          <li>Infus Pump</li>
                          <li>Suction</li>
                          <li>Ventilator</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFivePnnjg">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFivePnnjg" aria-expanded="false" aria-controls="collapseFivePnnjg">PICU</button>
                  </h2>
                  <div id="collapseFivePnnjg" class="accordion-collapse collapse" aria-labelledby="headingFivePnnjg" data-bs-parent="#accordionPnnjg">
                    <div class="accordion-body">
                      <p class="mb-0">Ruang perawatan intensif untuk pasien anak-anak yang memerlukan pengobatan dan perawatan khusus, guna mencegah dan mengobati terjadinya kegagalan organ-organ vital.</p>
                      <p>Fasilitas :
                        <ul>
                          <li>Satu Tempat Tidur</li>
                          <li>CPAP</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSixPnnjg">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixPnnjg" aria-expanded="false" aria-controls="collapseSixPnnjg">NICU</button>
                  </h2>
                  <div id="collapseSixPnnjg" class="accordion-collapse collapse" aria-labelledby="headingSixPnnjg" data-bs-parent="#accordionPnnjg">
                    <div class="accordion-body">
                      <p class="mb-0">Ruang perawatan intensif untuk pasien bayi (sampai usia 28 hari) yang memerlukan pengobatan dan perawatan khusus, guna mencegah dan mengobati terjadinya kegagalan organ-organ vital.</p>
                      <p>Fasilitas :
                        <ul>
                          <li>Satu Tempat Tidur</li>
                          <li>Syringe Pump</li>
                          <li>Infus Pump</li>
                          <li>Suction</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSevenPnnjg">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSevenPnnjg" aria-expanded="false" aria-controls="collapseSevenPnnjg">Lainnya</button>
                  </h2>
                  <div id="collapseSevenPnnjg" class="accordion-collapse collapse" aria-labelledby="headingSevenPnnjg" data-bs-parent="#accordionPnnjg">
                    <div class="accordion-body">
                      <p>
                        <ul class="fw-semibold">
                          <li>Instalasi Gawat Darurat (IGD)</li>
                          <li>Instalasi Kamar Bersalin (IKB)</li>
                          <li>Instalasi Gizi</li>
                          <li>Instalasi Hemodialisa</li>
                          <li>Instalasi Bedah Sentral (IBS)</li>
                          <li>USG (2 Dimensi dan 4 Dimensi)</li>
                          <li>EKG</li>
                          <li>CTG</li>
                          <li>Laboratorium</li>
                          <li>Apotek</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection