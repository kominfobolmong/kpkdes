@extends('layouts.frontend.app')
@push('addon-script')
<script src="/template/backend/plugins/chart.js/Chart.min.js"></script>
<script>
    $(function() {

        var id = '{{ $item->id ?? null }}';
        getPenduduk(id);
        getAkta(id);
        getKepalaKelaurga(id);
        getKia(id);
        getKelompokUmur(id);
    })

    function getPenduduk(id = "") {
        $.ajax({
            url: "/get_penduduk/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(response) {
                var labels = [];
                var data = [];
                var backgroundColor = ['#f56954', '#00a65a'];
                var donutChartCanvas = $('#donutChart').get(0).getContext('2d')

                var labels2 = [];
                var data2 = [];
                var backgroundColor2 = ['#f56954', '#00a65a', '#f39c12', '#00c0ef'];
                var donutChartCanvas2 = $('#donutChart2').get(0).getContext('2d');

                var labels3 = [];
                var data3 = [];
                var backgroundColor3 = ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'];
                var donutChartCanvas3 = $('#donutChart3').get(0).getContext('2d');

                $.each(response.result, function(k, v) {
                    labels.push(`Laki-laki`);
                    labels.push(`Perempuan`);
                    data.push(v.laki);
                    data.push(v.peremp);

                    labels2.push(`Belum Kawin`);
                    labels2.push(`Kawin`);
                    labels2.push(`Cerai Hidup`);
                    labels2.push(`Cerai mati`);
                    data2.push(v.blm_kwn);
                    data2.push(v.kwn);
                    data2.push(v.cr_hdp);
                    data2.push(v.cr_mati);

                    labels3.push(`Belum Sekolah`);
                    labels3.push(`Tidak Tamat SD`);
                    labels3.push(`Tamat SD`);
                    labels3.push(`SLTP`);
                    labels3.push(`SLTA`);
                    data3.push(v.blm_sklh);
                    data3.push(v.tdk_tm_sd);
                    data3.push(v.tm_sd);
                    data3.push(v.sltp);
                    data3.push(v.slta);

                });
                var donutData = {
                    labels: labels,
                    datasets: [{
                        data: data,
                        backgroundColor: backgroundColor,
                    }]
                }
                var donutOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                }
                new Chart(donutChartCanvas, {
                    type: 'doughnut',
                    data: donutData,
                    options: donutOptions
                })

                var donutData2 = {
                    labels: labels2,
                    datasets: [{
                        data: data2,
                        backgroundColor: backgroundColor2,
                    }]
                }
                new Chart(donutChartCanvas2, {
                    type: 'doughnut',
                    data: donutData2,
                    options: donutOptions
                })

                var donutData3 = {
                    labels: labels3,
                    datasets: [{
                        data: data3,
                        backgroundColor: backgroundColor3,
                    }]
                }
                new Chart(donutChartCanvas3, {
                    type: 'doughnut',
                    data: donutData3,
                    options: donutOptions
                })


                let labels4 = [];
                let data4 = [];

                $.each(response.result, function(k, v) {
                    labels4.push(`Belum tidak bekerja`);
                    labels4.push(`Mengurus rumah tangga`);
                    labels4.push(`Pelajar mahasiswa`);
                    labels4.push(`Pensiunan`);
                    labels4.push(`Pegawai negeri sipil`);
                    labels4.push(`Tentara nasional indonesia`);
                    labels4.push(`Kepolisian ri`);

                    labels4.push(`Perdagangan`);
                    labels4.push(`Petani pekebun`);
                    labels4.push(`Peternak`);
                    labels4.push(`Nelayan perikanan`);
                    labels4.push(`Industri`);

                    labels4.push(`Konstruksi`);
                    labels4.push(`Transportasi`);
                    labels4.push(`Karyawan swasta`);
                    labels4.push(`Karyawan bumn`);
                    labels4.push(`Karyawan bumd`);
                    labels4.push(`Karyawan honorer`);

                    data4.push(v.belum_tidak_bekerja);
                    data4.push(v.mengurus_rumah_tangga);
                    data4.push(v.pelajar_mahasiswa);
                    data4.push(v.pensiunan);
                    data4.push(v.pegawai_negeri_sipil);
                    data4.push(v.tentara_nasional_indonesia);
                    data4.push(v.kepolisian_ri);
                    data4.push(v.perdagangan);
                    data4.push(v.petani_pekebun);

                    data4.push(v.peternak);
                    data4.push(v.nelayan_perikanan);
                    data4.push(v.industri);

                    data4.push(v.konstruksi);
                    data4.push(v.transportasi);
                    data4.push(v.karyawan_swasta);
                    data4.push(v.karyawan_bumn);
                    data4.push(v.karyawan_bumd);
                    data4.push(v.karyawan_honorer);
                });

                let backgroundColor4 = [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ];
                let borderColor4 = [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ];

                const ctx = document.getElementById('myChart2').getContext('2d');
                const myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels4,
                        datasets: [{
                            label: '# Jumlah berdasarkan pekerjaan',
                            data: data4,
                            backgroundColor: backgroundColor4,
                            borderColor: borderColor4,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(`${errorThrown}`)
            }
        });
    }

    function getAkta(id = "") {
        $.ajax({
            url: "/get_akta/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(response) {
                var labels = [];
                var data = [];
                var backgroundColor = ['#f56954', '#00a65a'];
                var donutChartCanvas = $('#donutChart4').get(0).getContext('2d');

                $.each(response.result, function(k, v) {
                    labels.push(`Memiliki Akta : ${v.jumlah_anak_memiliki_akta}`);
                    labels.push(`Belum Memimiliki Akta : ${v.jumlah_anak_belum_memiliki_akta}`);
                    data.push(v.jumlah_anak_memiliki_akta);
                    data.push(v.jumlah_anak_belum_memiliki_akta);
                });
                var donutData = {
                    labels: labels,
                    datasets: [{
                        data: data,
                        backgroundColor: backgroundColor,
                    }]
                }

                var donutOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                }

                new Chart(donutChartCanvas, {
                    type: 'doughnut',
                    data: donutData,
                    options: donutOptions
                })
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(`${errorThrown}`)
            }
        });
    }

    function getKia(id = "") {
        $.ajax({
            url: "/get_kia/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(response) {
                var labels = [];
                var data = [];
                var backgroundColor = ['#f56954', '#00a65a'];
                var donutChartCanvas = $('#donutChart5').get(0).getContext('2d');

                $.each(response.result, function(k, v) {
                    labels.push(`Wajib Kia`);
                    labels.push(`Memiliki Kia`);
                    data.push(v.wajib_kia);
                    data.push(v.yang_memiliki_kia);
                });
                var donutData = {
                    labels: labels,
                    datasets: [{
                        data: data,
                        backgroundColor: backgroundColor,
                    }]
                }

                var donutOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                }

                new Chart(donutChartCanvas, {
                    type: 'doughnut',
                    data: donutData,
                    options: donutOptions
                })
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(`${errorThrown}`)
            }
        });
    }

    function getKepalaKelaurga(id = "") {
        $.ajax({
            url: "/get_kepala_keluarga/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(response) {
                var labels = [];
                var data = [];
                var backgroundColor = ['#f56954', '#00a65a'];
                var donutChartCanvas = $('#donutChart6').get(0).getContext('2d');

                $.each(response.result, function(k, v) {
                    labels.push(`Jumlah Penduduk`);
                    labels.push(`Jumlah Kepala Kelaurga`);
                    data.push(v.jumlah_penduduk);
                    data.push(v.jumlah_kepala_keluarga);
                });
                var donutData = {
                    labels: labels,
                    datasets: [{
                        data: data,
                        backgroundColor: backgroundColor,
                    }]
                }

                var donutOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                }

                new Chart(donutChartCanvas, {
                    type: 'doughnut',
                    data: donutData,
                    options: donutOptions
                })
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(`${errorThrown}`)
            }
        });
    }

    function getKelompokUmur(id = "") {
        $.ajax({
            url: "/get_kelompok_umur/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(response) {
                let labels = [];
                let data = [];

                $.each(response.result, function(k, v) {
                    labels.push(`L 0 s/d 4`);
                    labels.push(`P 0 s/d 4`);
                    labels.push(`L 5 s/d 9`);
                    labels.push(`P 5 s/d 9`);
                    labels.push(`L 10 s/d 14`);
                    labels.push(`P 10 s/d 14`);

                    labels.push(`L 15 s/d 19`);
                    labels.push(`P 15 s/d 19`);
                    labels.push(`L 20 s/d 24`);
                    labels.push(`P 20 s/d 24`);
                    labels.push(`L 25 s/d 29`);
                    labels.push(`P 25 s/d 29`);

                    labels.push(`L 30 s/d 34`);
                    labels.push(`P 30 s/d 34`);
                    labels.push(`L 35 s/d 39`);
                    labels.push(`P 35 s/d 39`);
                    labels.push(`L 40 s/d 44`);
                    labels.push(`P 40 s/d 44`);

                    data.push(v.l_00_04);
                    data.push(v.p_00_04);
                    data.push(v.l_05_09);
                    data.push(v.p_05_09);
                    data.push(v.l10_14);
                    data.push(v.p10_14);

                    data.push(v.l_15_19);
                    data.push(v.p_15_19);
                    data.push(v.l_20_24);
                    data.push(v.p_20_24);
                    data.push(v.l_25_29);
                    data.push(v.p_25_29);

                    data.push(v.l_30_34);
                    data.push(v.p_30_34);
                    data.push(v.l_35_39);
                    data.push(v.p_35_39);
                    data.push(v.l_40_44);
                    data.push(v.p_40_44);
                });

                let backgroundColor = [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ];
                let borderColor = [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ];

                const ctx = document.getElementById('myChart').getContext('2d');
                const myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: '# Jumlah berdasarkan rentang usia',
                            data: data,
                            backgroundColor: backgroundColor,
                            borderColor: borderColor,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(`${errorThrown}`)
            }
        });
    }
</script>
@endpush
@section('content')
<section class="bg-secondary pt-4 pb-4">
    <div class="container">
        <p>&nbsp;</p>
        <div class="text-center mt-4 mb-4">
            <h1 class="h2">KEPENDUDUKAN {{ $item->nama ? 'KEC. '.$item->nama : '' }}</h1>
        </div>
        <p>&nbsp;</p>
        <div class="row">
            <div class="col text-sm">
                <a data-id="0" href="{{ route('kependudukan') }}" class="btn {{ $item->id ? 'btn-outline-info' : 'btn-info' }} text-white mb-2 mr-2">Semua</a>
                @foreach($kecamatans as $kecamatan)
                <a href="{{ route('kependudukan', $kecamatan->slug) }}" class="btn {{ $item->id == $kecamatan->id ? 'btn-info' : 'btn-outline-info' }} text-white mb-2 mr-2">{{ $kecamatan->nama ?? null }}</a>
                @endforeach
            </div>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        @if(collect($item)->isNotEmpty())
        <div class="row">
            @if(Storage::disk('public')->exists($item->gambar))
            <div class="col-8">
                <img src="{{ Storage::url($item->gambar) }}" class="img-thumbnail" />
            </div>
            @endif
            @if($item->sebelah_utara != "" || $item->sebelah_timur != "" || $item->sebelah_barat != "" || $item->sebelah_selatan != "")
            <div class="col">
                <h1 class="h4">KEC. {{ $item->nama ?? null }}</h1>
                <span class="text-bold">Sebelah Utara :</span>
                <p>{{ $item->sebelah_utara ?? null }}</p>
                <span class="text-bold">Sebelah Timur :</span>
                <p>{{ $item->sebelah_timur ?? null }}</p>
                <span class="text-bold">Sebelah Barat :</span>
                <p>{{ $item->sebelah_barat ?? null }}</p>
                <span class="text-bold">Sebelah Selatan :</span>
                <p>{{ $item->sebelah_selatan ?? null }}</p>
            </div>
            @endif
        </div>
        @endif
    </div>
</section>
<section>
    <div class="container">

        <div class="row">
            <div class="col-6 text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Chart Laki-laki dan Perempuan</h3>

                        <div class="card-tools">
                            <a href=""><i class="fa fa-download text-danger"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-6 text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Chart Kawin, Belum Kawin, Cerai Hidup, Cerai Mati</h3>

                        <div class="card-tools">
                            <a href=""><i class="fa fa-download text-danger"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-4">
            <div class="col text-center">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Chart Pekerjaan</h3>

                        <div class="card-tools">
                            <a href=""><i class="fa fa-download text-danger"></i></a>
                        </div>

                    </div>
                    <div class="card-body">
                        <canvas id="myChart2" style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Chart Belum Sekolah, Tidak Tamat SD, Tamat SD, SLTP, SLTA</h3>

                        <div class="card-tools">
                            <a href=""><i class="fa fa-download text-danger"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TABLE AKTA -->
<section>
    <div class="container">
        <div class="row">
            <div class="col text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Chart Akta</h3>

                        <div class="card-tools">
                            <a href=""><i class="fa fa-download text-danger"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart4" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Akta</h3>
                    </div>
                    <div class="card-body p-0 table-responsive">
                        <table class="table table-hover text-nowrap">
                            <tr>
                                <th>Kdkec</th>
                                <th>Kecamatan</th>
                                <th>Jumlah Anak 0 18 Tahun</th>
                                <th>Jumlah Anak Memiliki Akta</th>
                                <th>Persentase Jumlah Anak Memiliki Akta</th>
                                <th>Jumlah Anak Belum Memiliki Akta</th>
                                <th>Persentase Anak Belum Memiliki Akta</th>
                            </tr>
                            @foreach($aktas as $item)
                            <tr>
                                <td>{{ $item->kecamatan->kode ?? null }}</td>
                                <td>{{ $item->kecamatan->nama ?? null }}</td>
                                <td>{{ $item->jumlah_anak_0_18_tahun ?? null }}</td>
                                <td>{{ $item->jumlah_anak_memiliki_akta ?? null }}</td>
                                <td>{{ $item->persentase_jumlah_anak_memiliki_akta ?? null }}</td>
                                <td>{{ $item->jumlah_anak_belum_memiliki_akta ?? null }}</td>
                                <td>{{ $item->persentase_anak_belum_memiliki_akta ?? null }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TABLE KIA -->
<section>
    <div class="container">
        <div class="row">
            <div class="col text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Chart KIA</h3>

                        <div class="card-tools">
                            <a href=""><i class="fa fa-download text-danger"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart5" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">KIA</h3>
                    </div>
                    <div class="card-body p-0 table-responsive">
                        <table class="table table-hover text-nowrap">
                            <tr>
                                <th>Kdkec</th>
                                <th>Kecamatan</th>
                                <th>Wajib Kia</th>
                                <th>Yang Memiliki Kia</th>
                                <th>Persentase</th>
                            </tr>
                            @foreach($kias as $item)
                            <tr>
                                <td>{{ $item->kecamatan->kode ?? null }}</td>
                                <td>{{ $item->kecamatan->nama ?? null }}</td>
                                <td>{{ $item->wajib_kia ?? null }}</td>
                                <td>{{ $item->yang_memiliki_kia ?? null }}</td>
                                <td>{{ $item->persentase ?? null }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TABLE KK -->
<section>
    <div class="container">
        <div class="row">
            <div class="col text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Chart KK</h3>

                        <div class="card-tools">
                            <a href=""><i class="fa fa-download text-danger"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart6" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">KEPALA KELUARGA</h3>
                    </div>
                    <div class="card-body p-0 table-responsive">
                        <table class="table table-hover text-nowrap">
                            <tr>
                                <th>Kdkec</th>
                                <th>Kecamatan</th>
                                <th>Lk</th>
                                <th>Pr</th>
                                <th>Jumlah Penduduk</th>
                                <th>Jumlah Kepala Keluarga</th>
                            </tr>
                            @foreach($kks as $item)
                            <tr>
                                <td>{{ $item->kecamatan->kode ?? null }}</td>
                                <td>{{ $item->kecamatan->nama ?? null }}</td>
                                <td>{{ $item->lk ?? null }}</td>
                                <td>{{ $item->pr ?? null }}</td>
                                <td>{{ $item->jumlah_penduduk ?? null }}</td>
                                <td>{{ $item->jumlah_kepala_keluarga ?? null }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col text-center">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Chart Jumlah Berdasarkan Rentang Usia (L & P)</h3>

                        <div class="card-tools">
                            <a href=""><i class="fa fa-download text-danger"></i></a>
                        </div>

                    </div>
                    <div class="card-body">
                        <canvas id="myChart" style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Penduduk</h3>
                    </div>
                    <div class="card-body p-0 table-responsive">
                        <table class="table table-hover text-nowrap">
                            <tr>
                                <th>Kdkec</th>
                                <th>Nama Kec</th>
                                <th>Laki</th>
                                <th>Peremp</th>
                                <th>Blm Kwn</th>
                                <th>Kwn</th>
                                <th>Cr Hdp</th>
                                <th>Cr Mati</th>
                                <th>Blm Sklh</th>
                                <th>Tdk Tm Sd</th>
                                <th>Tm Sd</th>
                                <th>Sltp</th>
                                <th>Slta</th>
                                <th>Dip Ii</th>
                                <th>Dip Iii</th>
                                <th>Str I</th>
                                <th>Str Ii</th>
                                <th>Str Iii</th>
                                <th>Belum Tidak Bekerja</th>
                                <th>Mengurus Rumah Tangga</th>
                                <th>Pelajar Mahasiswa</th>
                                <th>Pensiunan</th>
                                <th>Pegawai Negeri Sipil</th>
                                <th>Tentara Nasional Indonesia</th>
                                <th>Kepolisian Ri</th>
                                <th>Perdagangan</th>
                                <th>Petani Pekebun</th>
                                <th>Peternak</th>
                                <th>Nelayan Perikanan</th>
                                <th>Industri</th>
                                <th>Konstruksi</th>
                                <th>Transportasi</th>
                                <th>Karyawan Swasta</th>
                                <th>Karyawan Bumn</th>
                                <th>Karyawan Bumd</th>
                                <th>Karyawan Honorer</th>
                                <th>Buruh Harian Lepas</th>
                                <th>Buruh Tani Perkebunan</th>
                                <th>Buruh Nelayan Perikanan</th>
                                <th>Buruh Peternakan</th>
                                <th>Pembantu Rumah Tangga</th>
                                <th>Tukang Cukur</th>
                                <th>Tukang Listrik</th>
                                <th>Tukang Batu</th>
                                <th>Tukang Kayu</th>
                                <th>Tukang Sol Sepatu</th>
                                <th>Tukang Las Pandai Besi</th>
                                <th>Tukang Jahit</th>
                                <th>Tukang Gigi</th>
                                <th>Penata Rias</th>
                                <th>Penata Busana</th>
                                <th>Penata Rambut</th>
                                <th>Mekanik</th>
                                <th>Seniman</th>
                                <th>Tabib</th>
                                <th>Paraji</th>
                                <th>Perancang Busana</th>
                                <th>Penterjemah</th>
                                <th>Imam Mesjid</th>
                                <th>Pendeta</th>
                                <th>Pastor</th>
                                <th>Wartawan</th>
                                <th>Ustadz Mubaligh</th>
                                <th>Juru Masak</th>
                                <th>Promotor Acara</th>
                                <th>Anggota Dpr Ri</th>
                                <th>Anggota Dpd</th>
                                <th>Anggota Bpk</th>
                                <th>Presiden</th>
                                <th>Wakil Presiden</th>
                                <th>Anggota Mahkamah Konstitusi</th>
                                <th>Anggota Kabinet Kementerian</th>
                                <th>Duta Besar</th>
                                <th>Gubernur</th>
                                <th>Wakil Gubernur</th>
                                <th>Bupati</th>
                                <th>Wakil Bupati</th>
                                <th>Walikota</th>
                                <th>Wakil Walikota</th>
                                <th>Anggota Dprd Provinsi</th>
                                <th>Anggota Dprd Kabupaten Kota</th>
                                <th>Dosen</th>
                                <th>Guru</th>
                                <th>Pilot</th>
                                <th>Pengacara</th>
                                <th>Notaris</th>
                                <th>Arsitek</th>
                                <th>Akuntan</th>
                                <th>Konsultan</th>
                                <th>Dokter</th>
                                <th>Bidan</th>
                                <th>Perawat</th>
                                <th>Apoteker</th>
                                <th>Psikiater Psikolog</th>
                                <th>Penyiar Televisi</th>
                                <th>Penyiar Radio</th>
                                <th>Pelaut</th>
                                <th>Peneliti</th>
                                <th>Sopir</th>
                                <th>Pialang</th>
                                <th>Paranormal</th>
                                <th>Pedagang</th>
                                <th>Perangkat Desa</th>
                                <th>Kepala Desa</th>
                                <th>Biarawati</th>
                                <th>Wiraswasta</th>
                                <th>Lainnya</th>
                                <th>Jml Duk</th>
                            </tr>
                            @foreach($penduduks as $item)
                            <tr>
                                <td>{{ $item->kecamatan->kode ?? null }}</td>
                                <td>{{ $item->kecamatan->nama ?? null }}</td>
                                <td>{{ $item->laki ?? null }}</td>
                                <td>{{ $item->peremp ?? null }}</td>
                                <td>{{ $item->blm_kwn ?? null }}</td>
                                <td>{{ $item->kwn ?? null }}</td>
                                <td>{{ $item->cr_hdp ?? null }}</td>
                                <td>{{ $item->cr_mati ?? null }}</td>
                                <td>{{ $item->blm_sklh ?? null }}</td>
                                <td>{{ $item->tdk_tm_sd ?? null }}</td>
                                <td>{{ $item->tm_sd ?? null }}</td>
                                <td>{{ $item->sltp ?? null }}</td>
                                <td>{{ $item->slta ?? null }}</td>
                                <td>{{ $item->dip_ii ?? null }}</td>
                                <td>{{ $item->dip_iii ?? null }}</td>
                                <td>{{ $item->str_i ?? null }}</td>
                                <td>{{ $item->str_ii ?? null }}</td>
                                <td>{{ $item->str_iii ?? null }}</td>
                                <td>{{ $item->belum_tidak_bekerja ?? null }}</td>
                                <td>{{ $item->mengurus_rumah_tangga ?? null }}</td>
                                <td>{{ $item->pelajar_mahasiswa ?? null }}</td>
                                <td>{{ $item->pensiunan ?? null }}</td>
                                <td>{{ $item->pegawai_negeri_sipil ?? null }}</td>
                                <td>{{ $item->tentara_nasional_indonesia ?? null }}</td>
                                <td>{{ $item->kepolisian_ri ?? null }}</td>
                                <td>{{ $item->perdagangan ?? null }}</td>
                                <td>{{ $item->petani_pekebun ?? null }}</td>
                                <td>{{ $item->peternak ?? null }}</td>
                                <td>{{ $item->nelayan_perikanan ?? null }}</td>
                                <td>{{ $item->industri ?? null }}</td>
                                <td>{{ $item->konstruksi ?? null }}</td>
                                <td>{{ $item->transportasi ?? null }}</td>
                                <td>{{ $item->karyawan_swasta ?? null }}</td>
                                <td>{{ $item->karyawan_bumn ?? null }}</td>
                                <td>{{ $item->karyawan_bumd ?? null }}</td>
                                <td>{{ $item->karyawan_honorer ?? null }}</td>
                                <td>{{ $item->buruh_harian_lepas ?? null }}</td>
                                <td>{{ $item->buruh_tani_perkebunan ?? null }}</td>
                                <td>{{ $item->buruh_nelayan_perikanan ?? null }}</td>
                                <td>{{ $item->buruh_peternakan ?? null }}</td>
                                <td>{{ $item->pembantu_rumah_tangga ?? null }}</td>
                                <td>{{ $item->tukang_cukur ?? null }}</td>
                                <td>{{ $item->tukang_listrik ?? null }}</td>
                                <td>{{ $item->tukang_batu ?? null }}</td>
                                <td>{{ $item->tukang_kayu ?? null }}</td>
                                <td>{{ $item->tukang_sol_sepatu ?? null }}</td>
                                <td>{{ $item->tukang_las_pandai_besi ?? null }}</td>
                                <td>{{ $item->tukang_jahit ?? null }}</td>
                                <td>{{ $item->tukang_gigi ?? null }}</td>
                                <td>{{ $item->penata_rias ?? null }}</td>
                                <td>{{ $item->penata_busana ?? null }}</td>
                                <td>{{ $item->penata_rambut ?? null }}</td>
                                <td>{{ $item->mekanik ?? null }}</td>
                                <td>{{ $item->seniman ?? null }}</td>
                                <td>{{ $item->tabib ?? null }}</td>
                                <td>{{ $item->paraji ?? null }}</td>
                                <td>{{ $item->perancang_busana ?? null }}</td>
                                <td>{{ $item->penterjemah ?? null }}</td>
                                <td>{{ $item->imam_mesjid ?? null }}</td>
                                <td>{{ $item->pendeta ?? null }}</td>
                                <td>{{ $item->pastor ?? null }}</td>
                                <td>{{ $item->wartawan ?? null }}</td>
                                <td>{{ $item->ustadz_mubaligh ?? null }}</td>
                                <td>{{ $item->juru_masak ?? null }}</td>
                                <td>{{ $item->promotor_acara ?? null }}</td>
                                <td>{{ $item->anggota_dpr_ri ?? null }}</td>
                                <td>{{ $item->anggota_dpd ?? null }}</td>
                                <td>{{ $item->anggota_bpk ?? null }}</td>
                                <td>{{ $item->presiden ?? null }}</td>
                                <td>{{ $item->wakil_presiden ?? null }}</td>
                                <td>{{ $item->anggota_mahkamah_konstitusi ?? null }}</td>
                                <td>{{ $item->anggota_kabinet_kementerian ?? null }}</td>
                                <td>{{ $item->duta_besar ?? null }}</td>
                                <td>{{ $item->gubernur ?? null }}</td>
                                <td>{{ $item->wakil_gubernur ?? null }}</td>
                                <td>{{ $item->bupati ?? null }}</td>
                                <td>{{ $item->wakil_bupati ?? null }}</td>
                                <td>{{ $item->walikota ?? null }}</td>
                                <td>{{ $item->wakil_walikota ?? null }}</td>
                                <td>{{ $item->anggota_dprd_provinsi ?? null }}</td>
                                <td>{{ $item->anggota_dprd_kabupaten_kota ?? null }}</td>
                                <td>{{ $item->dosen ?? null }}</td>
                                <td>{{ $item->guru ?? null }}</td>
                                <td>{{ $item->pilot ?? null }}</td>
                                <td>{{ $item->pengacara ?? null }}</td>
                                <td>{{ $item->notaris ?? null }}</td>
                                <td>{{ $item->arsitek ?? null }}</td>
                                <td>{{ $item->akuntan ?? null }}</td>
                                <td>{{ $item->konsultan ?? null }}</td>
                                <td>{{ $item->dokter ?? null }}</td>
                                <td>{{ $item->bidan ?? null }}</td>
                                <td>{{ $item->perawat ?? null }}</td>
                                <td>{{ $item->apoteker ?? null }}</td>
                                <td>{{ $item->psikiater_psikolog ?? null }}</td>
                                <td>{{ $item->penyiar_televisi ?? null }}</td>
                                <td>{{ $item->penyiar_radio ?? null }}</td>
                                <td>{{ $item->pelaut ?? null }}</td>
                                <td>{{ $item->peneliti ?? null }}</td>
                                <td>{{ $item->sopir ?? null }}</td>
                                <td>{{ $item->pialang ?? null }}</td>
                                <td>{{ $item->paranormal ?? null }}</td>
                                <td>{{ $item->pedagang ?? null }}</td>
                                <td>{{ $item->perangkat_desa ?? null }}</td>
                                <td>{{ $item->kepala_desa ?? null }}</td>
                                <td>{{ $item->biarawati ?? null }}</td>
                                <td>{{ $item->wiraswasta ?? null }}</td>
                                <td>{{ $item->lainnya ?? null }}</td>
                                <td>{{ $item->jml_duk ?? null }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    &nbsp;
</section>
@endsection