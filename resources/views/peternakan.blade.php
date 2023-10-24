@extends('layouts.frontend.app')
@push('addon-script')
<script src="/template/backend/plugins/chart.js/Chart.min.js"></script>
<script>
    $(function() {

        var id = '{{ $item->id ?? 0 }}';
        getUnggas(id);
        getBabi(id);
    })

    function getUnggas(id = "") {
        $.ajax({
            url: "/get_unggas/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(response) {
                var labels1 = ['Daging Ayam', 'Daging Itik', 'Daging Itik Manila', 'Daging Ayam Pedaging', 'Daging Ayam Buras'];
                var data1 = [];
                var backgroundColor1 = ['#ff2000', '#eedd11', '#ff880d', '#fc22f6', '#aa55dd'];
                var donutChartCanvas1 = $('#donutChart9').get(0).getContext('2d')

                var labels2 = ['Produksi', 'Kebutuhan'];
                var data2 = [];
                var backgroundColor2 = ['#ff2000', '#ff880d'];
                var donutChartCanvas2 = $('#donutChart10').get(0).getContext('2d')

                $.each(response.result, function(k, v) {
                    data1.push(v.jlh_prod_daging_ayam_ptlrthn);
                    data1.push(v.jlh_prod_daging_itik_ptlrthn);
                    data1.push(v.jlh_prod_daging_itik_manilathn);
                    data1.push(v.jlh_prod_daging_ayam_pedagingthn);
                    data1.push(v.jlh_prod_daging_ayam_burasthn);

                    data2.push(v.total_prod_daging_unggasthn);
                    data2.push(v.keb_kons_daging_thn);
                });

                var donutOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                }

                var donutData1 = {
                    labels: labels1,
                    datasets: [{
                        data: data1,
                        backgroundColor: backgroundColor1,
                    }]
                }

                new Chart(donutChartCanvas1, {
                    type: 'doughnut',
                    data: donutData1,
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
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(`${errorThrown}`)
            }
        });
    }

    function getBabi(id = "") {
        $.ajax({
            url: "/get_babi/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(response) {
                var labels2 = ['Produksi', 'Kebutuhan'];
                var data2 = [];
                var backgroundColor2 = ['#ff2000', '#ff880d'];
                var donutChartCanvas2 = $('#donutChart11').get(0).getContext('2d')

                $.each(response.result, function(k, v) {
                    data2.push(v.jlh_prod_dagingthn);
                    data2.push(v.keb_kons_dagingthn);
                });

                var donutOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                }

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
            <h1 class="h2">PETERNAKAN {{ $item->nama ? 'KEC.'.$item->nama : '' }}</h1>
        </div>
        <p>&nbsp;</p>
        <div class="row">
            <div class="col text-sm">
                <a data-id="0" href="{{ route('peternakan') }}" class="btn {{ $item->id ? 'btn-outline-info' : 'btn-info' }} text-white mb-2 mr-2">Semua</a>
                @foreach($kecamatans as $kecamatan)
                <a href="{{ route('peternakan', $kecamatan->slug) }}" class="btn {{ $item->id == $kecamatan->id ? 'btn-info' : 'btn-outline-info' }} text-white mb-2 mr-2">{{ $kecamatan->nama ?? null }}</a>
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
            <div class="col text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Perbandingan Produksi dan Kebutuhan Daging Unggas</h3>

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
            <div class="col text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Perbandingan Produksi dan Kebutuhan Daging Babi</h3>

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
        <div class="row">
            <div class="col text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Jumlah Produksi Daging Unggas</h3>

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
        </div>
    </div>
</section>

<section>
    <div class="container">

        <div class="row">
            <div class="col text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DATA UNGGAS</h3>
                    </div>
                    <div class="card-body p-0 table-responsive">
                        <table class="table table-hover text-nowrap" style="width: 100%;">
                            <tr>
                                <th>Kdkec</th>
                                <th>Kecamatan</th>
                                <th>Jumlah Penduduk</th>
                                <th>Populasi Ayam Petelur</th>
                                <th>Prod Telur Ayam Petelur</th>
                                <th>Jlh Siap Potong Ayam Ptlr</th>
                                <th>Jlh Prod Daging Ayam Ptlrthn</th>
                                <th>Jumlah Itik Petelur</th>
                                <th>Produksi Telur Itik</th>
                                <th>Total Produksi Telur</th>
                                <th>Jlh Siap Potong Itik Ptlr</th>
                                <th>Jlh Prod Daging Itik Ptlrthn</th>
                                <th>Jumlah Itik Manila</th>
                                <th>Jlh Siap Potong Itik Manila</th>
                                <th>Jlh Prod Daging Itik Manilathn</th>
                                <th>Total Itikthn</th>
                                <th>Total Prod Daging Itik Manilathn</th>
                                <th>Total Itik Siap Potong</th>
                                <th>Ayam Daging</th>
                                <th>Jlh Siap Potong Ayam Daging</th>
                                <th>Jlh Prod Daging Ayam Pedagingthn</th>
                                <th>Ayam Buras</th>
                                <th>Produksi Telur Ayam Buras</th>
                                <th>Jlh Siap Potong Ayam Buras</th>
                                <th>Jlh Prod Daging Ayam Burasthn</th>
                                <th>Total Ayam</th>
                                <th>Total Ayam Siap Potong</th>
                                <th>Total Prod Daging Ayamthn</th>
                                <th>Total Unggas Penghasil Daging</th>
                                <th>Total Unggas Siap Potong</th>
                                <th>Total Prod Daging Unggasthn</th>
                                <th>Keb Kons Daging Thn</th>
                                <th>Jlh Kons Dagingthn</th>
                            </tr>
                            @foreach($unggas as $item)
                            <tr>
                                <td>{{ $item->kecamatan->kode ?? null }}</td>
                                <td>{{ $item->kecamatan->nama ?? null }}</td>
                                <td>{{ $item->jumlah_penduduk ?? null }}</td>
                                <td>{{ $item->populasi_ayam_petelur ?? null }}</td>
                                <td>{{ $item->prod_telur_ayam_petelur ?? null }}</td>
                                <td>{{ $item->jlh_siap_potong_ayam_ptlr ?? null }}</td>
                                <td>{{ $item->jlh_prod_daging_ayam_ptlrthn ?? null }}</td>
                                <td>{{ $item->jumlah_itik_petelur ?? null }}</td>
                                <td>{{ $item->produksi_telur_itik ?? null }}</td>
                                <td>{{ $item->total_produksi_telur ?? null }}</td>
                                <td>{{ $item->jlh_siap_potong_itik_ptlr ?? null }}</td>
                                <td>{{ $item->jlh_prod_daging_itik_ptlrthn ?? null }}</td>
                                <td>{{ $item->jumlah_itik_manila ?? null }}</td>
                                <td>{{ $item->jlh_siap_potong_itik_manila ?? null }}</td>
                                <td>{{ $item->jlh_prod_daging_itik_manilathn ?? null }}</td>
                                <td>{{ $item->total_itikthn ?? null }}</td>
                                <td>{{ $item->total_prod_daging_itik_manilathn ?? null }}</td>
                                <td>{{ $item->total_itik_siap_potong ?? null }}</td>
                                <td>{{ $item->ayam_daging ?? null }}</td>
                                <td>{{ $item->jlh_siap_potong_ayam_daging ?? null }}</td>
                                <td>{{ $item->jlh_prod_daging_ayam_pedagingthn ?? null }}</td>
                                <td>{{ $item->ayam_buras ?? null }}</td>
                                <td>{{ $item->produksi_telur_ayam_buras ?? null }}</td>
                                <td>{{ $item->jlh_siap_potong_ayam_buras ?? null }}</td>
                                <td>{{ $item->jlh_prod_daging_ayam_burasthn ?? null }}</td>
                                <td>{{ $item->total_ayam ?? null }}</td>
                                <td>{{ $item->total_ayam_siap_potong ?? null }}</td>
                                <td>{{ $item->total_prod_daging_ayamthn ?? null }}</td>
                                <td>{{ $item->total_unggas_penghasil_daging ?? null }}</td>
                                <td>{{ $item->total_unggas_siap_potong ?? null }}</td>
                                <td>{{ $item->total_prod_daging_unggasthn ?? null }}</td>
                                <td>{{ $item->keb_kons_daging_thn ?? null }}</td>
                                <td>{{ $item->jlh_kons_dagingthn ?? null }}</td>
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

        <div class="row">
            <div class="col text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DATA BABI</h3>
                    </div>
                    <div class="card-body p-0 table-responsive">
                        <table class="table table-hover text-nowrap" style="width: 100%;">
                            <tr>
                                <th>Kdkec</th>
                                <th>Kecamatan</th>
                                <th>Jumlah Penduduk</th>
                                <th>Konversi Jlh</th>
                                <th>Jantan</th>
                                <th>Betina</th>
                                <th>Jumlah Ekor</th>
                                <th>Jlh Siap Potong</th>
                                <th>Jlh Prod Dagingthn</th>
                                <th>Keb Kons Dagingthn</th>
                                <th>Jlh Kons Daging Thn</th>
                            </tr>
                            @foreach($babis as $item)
                            <tr>
                                <td>{{ $item->kecamatan->kode ?? null }}</td>
                                <td>{{ $item->kecamatan->nama ?? null }}</td>
                                <td>{{ $item->jumlah_penduduk ?? null }}</td>
                                <td>{{ $item->konversi_jlh ?? null }}</td>
                                <td>{{ $item->jantan ?? null }}</td>
                                <td>{{ $item->betina ?? null }}</td>
                                <td>{{ $item->jumlah_ekor ?? null }}</td>
                                <td>{{ $item->jlh_siap_potong ?? null }}</td>
                                <td>{{ $item->jlh_prod_dagingthn ?? null }}</td>
                                <td>{{ $item->keb_kons_dagingthn ?? null }}</td>
                                <td>{{ $item->jlh_kons_daging_thn ?? null }}</td>
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