@extends('layouts.frontend.app')
@push('addon-script')
<script src="/template/backend/plugins/chart.js/Chart.min.js"></script>
<script>
    $(function() {
        var id = '{{ $item->id ?? null }}';
        getNakes(id);
    })

    function getNakes(id = "") {
        $.ajax({
            url: "/get_nakes/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(response) {
                // dokter
                var labels = ['PNS', 'PTT', 'NSI', 'SUKARELA'];
                var data = [];
                var backgroundColor = ['#f56954', '#00a65a', '#f39c12', '#00c0ef'];
                var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
                var data2 = [];
                var donutChartCanvas2 = $('#donutChart2').get(0).getContext('2d');
                var data3 = [];
                var donutChartCanvas3 = $('#donutChart3').get(0).getContext('2d');
                var data4 = [];
                var donutChartCanvas4 = $('#donutChart4').get(0).getContext('2d');
                var data5 = [];
                var donutChartCanvas5 = $('#donutChart5').get(0).getContext('2d');
                var data6 = [];
                var donutChartCanvas6 = $('#donutChart6').get(0).getContext('2d');
                var data7 = [];
                var donutChartCanvas7 = $('#donutChart7').get(0).getContext('2d');
                var data8 = [];
                var donutChartCanvas8 = $('#donutChart8').get(0).getContext('2d');
                var data9 = [];
                var donutChartCanvas9 = $('#donutChart9').get(0).getContext('2d');
                var data10 = [];
                var donutChartCanvas10 = $('#donutChart10').get(0).getContext('2d');
                var data11 = [];
                var donutChartCanvas11 = $('#donutChart11').get(0).getContext('2d');

                $.each(response.result, function(k, v) {
                    data.push(v.pns_dokter);
                    data.push(v.ptt_dokter);
                    data.push(v.nsi_dokter);
                    data.push(v.sukarela_dokter);

                    data2.push(v.pns_dokter_gigi);
                    data2.push(v.ptt_dokter_gigi);
                    data2.push(v.nsi_dokter_gigi);
                    data2.push(v.sukarela_dokter_gigi);

                    data3.push(v.pns_perawat);
                    data3.push(v.ptt_perawat);
                    data3.push(v.nsi_perawat);
                    data3.push(v.sukarela_perawat);

                    data4.push(v.pns_perawat_gigi);
                    data4.push(v.ptt_perawat_gigi);
                    data4.push(v.nsi_perawat_gigi);
                    data4.push(v.sukarela_perawat_gigi);

                    data5.push(v.pns_bidan);
                    data5.push(v.ptt_bidan);
                    data5.push(v.nsi_bidan);
                    data5.push(v.sukarela_bidan);

                    data6.push(v.pns_lab);
                    data6.push(v.ptt_lab);
                    data6.push(v.nsi_lab);
                    data6.push(v.sukarela_lab);

                    data7.push(v.pns_promkes);
                    data7.push(v.ptt_promkes);
                    data7.push(v.nsi_promkes);
                    data7.push(v.sukarela_promkes);

                    data8.push(v.pns_kesling);
                    data8.push(v.ptt_kesling);
                    data8.push(v.nsi_kesling);
                    data8.push(v.sukarela_kesling);

                    data9.push(v.pns_apoteker);
                    data9.push(v.ptt_apoteker);
                    data9.push(v.nsi_apoteker);
                    data9.push(v.sukarela_apoteker);

                    data10.push(v.pns_kefarmasian);
                    data10.push(v.ptt_kefarmasian);
                    data10.push(v.nsi_kefarmasian);
                    data10.push(v.sukarela_kefarmasian);

                    data11.push(v.pns_gizi);
                    data11.push(v.ptt_gizi);
                    data11.push(v.nsi_gizi);
                    data11.push(v.sukarela_gizi);

                });
                var donutData = {
                    labels: labels,
                    datasets: [{
                        data: data,
                        backgroundColor: backgroundColor,
                    }]
                }
                var donutData2 = {
                    labels: labels,
                    datasets: [{
                        data: data2,
                        backgroundColor: backgroundColor,
                    }]
                }
                var donutData3 = {
                    labels: labels,
                    datasets: [{
                        data: data3,
                        backgroundColor: backgroundColor,
                    }]
                }
                var donutData4 = {
                    labels: labels,
                    datasets: [{
                        data: data4,
                        backgroundColor: backgroundColor,
                    }]
                }
                var donutData5 = {
                    labels: labels,
                    datasets: [{
                        data: data5,
                        backgroundColor: backgroundColor,
                    }]
                }
                var donutData6 = {
                    labels: labels,
                    datasets: [{
                        data: data6,
                        backgroundColor: backgroundColor,
                    }]
                }
                var donutData7 = {
                    labels: labels,
                    datasets: [{
                        data: data7,
                        backgroundColor: backgroundColor,
                    }]
                }
                var donutData8 = {
                    labels: labels,
                    datasets: [{
                        data: data8,
                        backgroundColor: backgroundColor,
                    }]
                }
                var donutData9 = {
                    labels: labels,
                    datasets: [{
                        data: data9,
                        backgroundColor: backgroundColor,
                    }]
                }
                var donutData10 = {
                    labels: labels,
                    datasets: [{
                        data: data10,
                        backgroundColor: backgroundColor,
                    }]
                }
                var donutData11 = {
                    labels: labels,
                    datasets: [{
                        data: data11,
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
                new Chart(donutChartCanvas2, {
                    type: 'doughnut',
                    data: donutData2,
                    options: donutOptions
                })
                new Chart(donutChartCanvas3, {
                    type: 'doughnut',
                    data: donutData3,
                    options: donutOptions
                })
                new Chart(donutChartCanvas4, {
                    type: 'doughnut',
                    data: donutData4,
                    options: donutOptions
                })
                new Chart(donutChartCanvas5, {
                    type: 'doughnut',
                    data: donutData5,
                    options: donutOptions
                })
                new Chart(donutChartCanvas6, {
                    type: 'doughnut',
                    data: donutData6,
                    options: donutOptions
                })
                new Chart(donutChartCanvas7, {
                    type: 'doughnut',
                    data: donutData7,
                    options: donutOptions
                })
                new Chart(donutChartCanvas8, {
                    type: 'doughnut',
                    data: donutData8,
                    options: donutOptions
                })
                new Chart(donutChartCanvas9, {
                    type: 'doughnut',
                    data: donutData9,
                    options: donutOptions
                })
                new Chart(donutChartCanvas10, {
                    type: 'doughnut',
                    data: donutData10,
                    options: donutOptions
                })
                new Chart(donutChartCanvas11, {
                    type: 'doughnut',
                    data: donutData11,
                    options: donutOptions
                })
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
        <p>&nbsp;</p>
        <div class="text-center mt-4 mb-4">
            <h1 class="h2">KESEHATAN {{ $item->nama ? 'KEC.'.$item->nama : '' }}</h1>
        </div>
        <div class="row">
            <div class="col text-sm">
                <a data-id="0" href="{{ route('kesehatan') }}" class="btn {{ $item->id ? 'btn-outline-info' : 'btn-info' }} text-white mb-2 mr-2">Semua</a>
                @foreach($kecamatans as $kecamatan)
                <a href="{{ route('kesehatan', $kecamatan->slug) }}" class="btn {{ $item->id == $kecamatan->id ? 'btn-info' : 'btn-outline-info' }} text-white mb-2 mr-2">{{ $kecamatan->nama ?? null }}</a>
                @endforeach
            </div>
        </div>
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
        <p>&nbsp;</p>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-6 text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Dokter</h3>

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
                        <h3 class="card-title text-sm">Dokter Gigi</h3>

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
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-6 text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Perawat</h3>

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
            <div class="col-6 text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Perawat Gigi</h3>

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
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-6 text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Bidan</h3>

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
            <div class="col-6 text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Lab</h3>

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
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-6 text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Promkes</h3>

                        <div class="card-tools">
                            <a href=""><i class="fa fa-download text-danger"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart7" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-6 text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Kesling</h3>

                        <div class="card-tools">
                            <a href=""><i class="fa fa-download text-danger"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart8" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
            <div class="col-4 text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Apoteker</h3>

                        <div class="card-tools">
                            <a href=""><i class="fa fa-download text-danger"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart9" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-4 text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Kefarmasian</h3>

                        <div class="card-tools">
                            <a href=""><i class="fa fa-download text-danger"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart10" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-4 text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Gizi</h3>

                        <div class="card-tools">
                            <a href=""><i class="fa fa-download text-danger"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart11" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
            <div class="col text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Nakes</h3>

                        <div class="card-tools">
                            <!-- <a href=""><i class="fa fa-download text-danger"></i></a> -->
                        </div>
                    </div>
                    <div class="card-body p-0 table-responsive">
                        <table class="table table-hover text-nowrap">
                            <tr>
                                <th>Kdkec</th>
                                <th>Puskesmas</th>
                                <th>Jumlah Desa/Kel</th>
                                <th>Pns Dokter</th>
                                <th>Ptt Dokter</th>
                                <th>Nsi Dokter</th>
                                <th>Sukarela Dokter</th>
                                <th>Jml Dokter</th>
                                <th>Pns Dokter Gigi</th>
                                <th>Ptt Dokter Gigi</th>
                                <th>Nsi Dokter Gigi</th>
                                <th>Sukarela Dokter Gigi</th>
                                <th>Jml Dokter Gigi</th>
                                <th>Pns Perawat</th>
                                <th>Ptt Perawat</th>
                                <th>Nsi Perawat</th>
                                <th>Sukarela Perawat</th>
                                <th>Jml Perawat</th>
                                <th>Pns Perawat Gigi</th>
                                <th>Ptt Perawat Gigi</th>
                                <th>Nsi Perawat Gigi</th>
                                <th>Sukarela Perawat Gigi</th>
                                <th>Jml Perawat Gigi</th>
                                <th>Pns Bidan</th>
                                <th>Ptt Bidan</th>
                                <th>Nsi Bidan</th>
                                <th>Sukarela Bidan</th>
                                <th>Jml Bidan</th>
                                <th>Pns Lab</th>
                                <th>Ptt Lab</th>
                                <th>Nsi Lab</th>
                                <th>Sukarela Lab</th>
                                <th>Jml Lab</th>
                                <th>Pns Promkes</th>
                                <th>Ptt Promkes</th>
                                <th>Nsi Promkes</th>
                                <th>Sukarela Promkes</th>
                                <th>Jml Promkes</th>
                                <th>Pns Kesling</th>
                                <th>Ptt Kesling</th>
                                <th>Nsi Kesling</th>
                                <th>Sukarela Kesling</th>
                                <th>Jml Kesling</th>
                                <th>Pns Apoteker</th>
                                <th>Ptt Apoteker</th>
                                <th>Nsi Apotoker</th>
                                <th>Sukarela Apoteker</th>
                                <th>Jml Apoteker</th>
                                <th>Pns Kefarmasian</th>
                                <th>Ptt Kefarmasian</th>
                                <th>Nsi Kefarmasian</th>
                                <th>Sukarela Kefarmasian</th>
                                <th>Jml Kefarmasian</th>
                                <th>Pns Gizi</th>
                                <th>Ptt Gizi</th>
                                <th>Nis Gizi</th>
                                <th>Sukarela Gizi</th>
                                <th>Jml Gizi</th>

                            </tr>
                            @foreach($nakes as $item)
                            <tr>
                                <td>{{ $item->kecamatan->nama ?? null }}</td>
                                <td>{{ $item->jumlah_desa ?? null }}</td>
                                <td>{{ $item->jumlah_penduduk ?? null }}</td>
                                <td>{{ $item->pns_dokter ?? null }}</td>
                                <td>{{ $item->ptt_dokter ?? null }}</td>
                                <td>{{ $item->nsi_dokter ?? null }}</td>
                                <td>{{ $item->sukarela_dokter ?? null }}</td>
                                <td>{{ $item->jml_dokter ?? null }}</td>
                                <td>{{ $item->pns_dokter_gigi ?? null }}</td>
                                <td>{{ $item->ptt_dokter_gigi ?? null }}</td>
                                <td>{{ $item->nsi_dokter_gigi ?? null }}</td>
                                <td>{{ $item->sukarela_dokter_gigi ?? null }}</td>
                                <td>{{ $item->jml_dokter_gigi ?? null }}</td>
                                <td>{{ $item->pns_perawat ?? null }}</td>
                                <td>{{ $item->ptt_perawat ?? null }}</td>
                                <td>{{ $item->nsi_perawat ?? null }}</td>
                                <td>{{ $item->sukarela_perawat ?? null }}</td>
                                <td>{{ $item->jml_perawat ?? null }}</td>
                                <td>{{ $item->pns_perawat_gigi ?? null }}</td>
                                <td>{{ $item->ptt_perawat_gigi ?? null }}</td>
                                <td>{{ $item->nsi_perawat_gigi ?? null }}</td>
                                <td>{{ $item->sukarela_perawat_gigi ?? null }}</td>
                                <td>{{ $item->jml_perawat_gigi ?? null }}</td>
                                <td>{{ $item->pns_bidan ?? null }}</td>
                                <td>{{ $item->ptt_bidan ?? null }}</td>
                                <td>{{ $item->nsi_bidan ?? null }}</td>
                                <td>{{ $item->sukarela_bidan ?? null }}</td>
                                <td>{{ $item->jml_bidan ?? null }}</td>
                                <td>{{ $item->pns_lab ?? null }}</td>
                                <td>{{ $item->ptt_lab ?? null }}</td>
                                <td>{{ $item->nsi_lab ?? null }}</td>
                                <td>{{ $item->sukarela_lab ?? null }}</td>
                                <td>{{ $item->jml_lab ?? null }}</td>
                                <td>{{ $item->pns_promkes ?? null }}</td>
                                <td>{{ $item->ptt_promkes ?? null }}</td>
                                <td>{{ $item->nsi_promkes ?? null }}</td>
                                <td>{{ $item->sukarela_promkes ?? null }}</td>
                                <td>{{ $item->jml_promkes ?? null }}</td>
                                <td>{{ $item->pns_kesling ?? null }}</td>
                                <td>{{ $item->ptt_kesling ?? null }}</td>
                                <td>{{ $item->nsi_kesling ?? null }}</td>
                                <td>{{ $item->sukarela_kesling ?? null }}</td>
                                <td>{{ $item->jml_kesling ?? null }}</td>
                                <td>{{ $item->pns_apoteker ?? null }}</td>
                                <td>{{ $item->ptt_apoteker ?? null }}</td>
                                <td>{{ $item->nsi_apotoker ?? null }}</td>
                                <td>{{ $item->sukarela_apoteker ?? null }}</td>
                                <td>{{ $item->jml_apoteker ?? null }}</td>
                                <td>{{ $item->pns_kefarmasian ?? null }}</td>
                                <td>{{ $item->ptt_kefarmasian ?? null }}</td>
                                <td>{{ $item->nsi_kefarmasian ?? null }}</td>
                                <td>{{ $item->sukarela_kefarmasian ?? null }}</td>
                                <td>{{ $item->jml_kefarmasian ?? null }}</td>
                                <td>{{ $item->pns_gizi ?? null }}</td>
                                <td>{{ $item->ptt_gizi ?? null }}</td>
                                <td>{{ $item->nis_gizi ?? null }}</td>
                                <td>{{ $item->sukarela_gizi ?? null }}</td>
                                <td>{{ $item->jml_gizi ?? null }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row mt-4">
            @foreach($puskesmas as $item)
            <div class="col-md-6">
                <!-- Box Comment -->
                <div class="card card-widget">
                    <div class="card-header">
                        <div class="user-block">
                            <span><a href="#" class="text-dark text-bold h5">{{ $item->puskesmas ?? null }}</a></span>
                            <div class="text-sm">{{ $item->kemampuan_pelayanan ?? null }}</div>
                        </div>
                        <!-- /.user-block -->
                        <div class="card-tools">

                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if(Storage::disk('public')->exists($item->gambar))
                        <img class="img-fluid pad" src="{{ Storage::url($item->gambar) }}" alt="Photo" style="height:350px; width:100%; object-fit:cover; object-position:center;">
                        @else
                        <img class="img-fluid pad" src="/no-image.jpg" alt="Photo" style="height:350px; object-fit:cover; object-position:center;">
                        @endif

                    </div>
                </div>
                <!-- /.card -->
            </div>
            @endforeach
        </div>
    </div>
</section>
<section>
    &nbsp;
</section>
@endsection