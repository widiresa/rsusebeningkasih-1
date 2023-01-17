<x-layout>
    <x-slot name="title">Jadwal Dokter</x-slot>
    {{-- <div class="container pt-4">
        <h3 class="h3 pb-4 mb-4 border-bottom">Jadwal Dokter</h3>
    </div>
    <div class="container-fluid pb-4">
        <div class="text-center">
            <img src="https://drive.google.com/uc?export=view&id=1gHE_0W-jCTf7Wf2ILYhS-E3ka7aQRzT_" alt="rsbk" class="img-fluid">
        </div>
    </div> --}}
    <div class="container py-4">
        <h3 class="h3 pb-4 mb-4 border-bottom">Jadwal Dokter</h3>
        <div class="table-responsive">
            <table class="table text-center table-hover table-bordered align-middle w-100">
                <thead class="table-info">
                    <tr>
                        <th>NO.</th>
                        <th>KLINIK</th>
                        <th>DOKTER</th>
                        <th>HARI</th>
                        <th>WAKTU</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="8">1</th>
                        <th rowspan="8">KANDUNGAN</th>
                        <tr>
                            <td>dr. Hendra D. Julianto, Sp. OG</td>
                            <td>Senin - Sabtu</td>
                            <td>
                                <p class="mb-0">
                                    10.30 - 13.00 WIB
                                </p>
                                <p class="mb-0">
                                    16.30 - 19.00 WIB
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>dr. Tansya Sushan P, Sp. OG</td>
                            <td>Senin - Sabtu</td>
                            <td>05.30 - 09.00 WIB</td>
                        </tr>
                        <tr>
                            <td rowspan="2">dr. Aji Patriajati, Sp. OG</td>
                                <td>Senin - Jumat</td>
                                <td>14.00 - 16.00 WIB</td>
                            <tr>
                                <td>Sabtu</td>
                                <td>13.00 - 15.30 WIB</td>
                            </tr>
                        </tr>
                        <tr>
                            <td rowspan="2">dr. Ratih Kumalasari, Sp. OG</td>
                            <td>Senin - Sabtu</td>
                            <td>
                                <p class="mb-0">
                                    09.00 - 11.00 WIB
                                </p>
                                <p class="mb-0">
                                    18.30 - 21.00 WIB
                                </p>
                            </td>
                            <tr>
                                <td> Minggu ke 1 dan 3 </td>
                                <td> 10.00 - 12.00 WIB </td>
                            </tr>
                        </tr>
                    </tr>
                    <tr>
                    <tr>
                        <th rowspan="4">2</th>
                        <th rowspan="4">DALAM</th>
                        <td rowspan="3">dr. Eko Sugihanto, Sp. PD</td>
                        <tr>
                            <td>Senin - Jumat</td>
                            <td>14.15 - 16.15 WIB</td>
                        </tr>
                        <tr>
                            <td>Selasa, Kamis, Sabtu</td>
                            <td>05.30 -  07.00 WIB</td>
                        </tr>
                    </tr>
                    <tr>
                            <td>dr. Dwi Adhi Nugraha, Sp. PD</td>
                            <td>Senin - Jumat</td>
                            <td>15.30 - 17.30 WIB</td>
                        </tr>
                    <tr>
                        <th>3</th>
                        <th>ANAK</th>
                        <td>dr. Timtri Dili Murwati, Sp. A</td>
                        <td>Senin - Sabtu</td>
                        <td>05.30 - 06.30 WIB</td>
                    </tr>
                    <tr>
                        <th rowspan="3">4</th>
                        <th rowspan="3">BEDAH</th>
                        <tr>
                            <td>dr. Mario Pohan S, Sp. B</td>
                            <td>Senin, Rabu, Jumat</td>
                            <td>17.00 - 20.00 WIB</td>
                        </tr>
                        <tr>
                            <td>dr. Widi Antono, Sp. B</td>
                            <td>Selasa, Kamis, Sabtu</td>
                            <td>17.00 - 20.00 WIB</td>
                        </tr>
                    </tr>
                    <tr>
                        <th>5</th>
                        <th>ORTOPEDI</th>
                        <td>dr. William Limoa, Sp. OT</td>
                        <td>Senin, Rabu, Jumat</td>
                        <td>13.15 - 16.00 WIB</td>
                    </tr>
                    <tr>
                        <th rowspan="2">6</th>
                        <th rowspan="2">SARAF</th>
                        <td>dr. Tomy Nugroho, Sp. N</td>
                            <td>Senin - Jumat</td>
                            <td>14.15 - 16.15 WIB</td>
                    </tr>
                    <tr>
                            <td>dr. Ike Retno Yolanda, Sp. N</td>
                            <td>Selasa & Kamis</td>
                            <td>14.00 - 16.00 WIB</td>
                    </tr>
                    <tr>
                        <th rowspan="3">7</th>
                        <th rowspan="3">MATA</th>
                        <td rowspan="3">dr. Dyah Mustika Kumiatri, MMR, Sp. M</td>
                        <tr>
                            <td>Senin & Rabu</td>
                            <td>13.30 - 16.30 WIB</td>
                        </tr>
                        <tr>
                            <td>Kamis</td>
                            <td>08.00 - 11.00 WIB</td>
                        </tr>
                    </tr>
                    <tr>
                        <th>8</th>
                        <th>RADIOLOGI</th>
                        <td>dr. Adnan Adityawan, Sp. Rad</td>
                        <td>Senin, Selasa, Kamis</td>
                        <td>16.00 WIB - Selesai</td>
                    </tr>
                    <tr>
                        <th>9</th>
                        <th>PSIKOLOGI</th>
                        <td>Siti Fatkhurrohmah, S.Psi Psikologi</td>
                        <td>Senin, Selasa, Rabu</td>
                        <td>15.00 - 17.00 WIB</td>
                    </tr>
                    <tr>
                        <th rowspan="3">10</th>
                        <th rowspan="3">KEDOKTERAN FISIK DAN REHABILITASI</th>
                        <td rowspan="3">dr. Andriaz Kurniawan, Sp. KFR</td>
                        <tr>
                            <td>Jumat</td>
                            <td>17.00 - 20.00 WIB</td>
                        </tr>
                        <tr>
                            <td>Sabtu</td>
                            <td>09.00 - 15.00 WIB</td>
                        </tr>
                    </tr>
                    <tr>
                        <th>11</th>
                        <th colspan="2">FISIOTERAPI UMUM</th>
                        <td>Senin - Sabtu</td>
                        <td>07.00 - 14.00 WIB</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>