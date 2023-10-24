@extends('layouts.frontend.app')
@push('addon-script')
<script src="/template/backend/plugins/chart.js/Chart.min.js"></script>
<script>
    $(function() {

        var id = '{{ $item->id ?? 0 }}';
        getPerkebunan(id);
    })

    function getPerkebunan(id = "") {
        $.ajax({
            url: "/get_perkebunan/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(response) {
                var labels1 = [];
                var data1 = [];
                var backgroundColor1 = ['#ff2000', '#eedd11', '#ff880d', '#fc22f6', '#aa55dd', '#b6f0ef', '#7aacfe'];
                var donutChartCanvas = $('#donutChart7').get(0).getContext('2d');
                $.each(response.result, function(k, v) {
                    labels1.push(v.jenis);
                    data1.push(v.produksi_semester_laporan_ton);
                });
                var donutData = {
                    labels: labels1,
                    datasets: [{
                        data: data1,
                        backgroundColor: backgroundColor1,
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
</script>
@endpush
@section('content')
<section class="bg-secondary pt-4 pb-4">
    <div class="container">
        <p>&nbsp;</p>
        <div class="text-center mt-4 mb-4">
            <h1 class="h2">PERKEBUNAN {{ $item->nama ? 'KEC.'.$item->nama : '' }}</h1>
        </div>
        <p>&nbsp;</p>
        <div class="row">
            <div class="col text-sm">
                <a data-id="0" href="{{ route('perkebunan') }}" class="btn {{ $item->id ? 'btn-outline-info' : 'btn-info' }} text-white mb-2 mr-2">Semua</a>
                @foreach($kecamatans as $kecamatan)
                <a href="{{ route('perkebunan', $kecamatan->slug) }}" class="btn {{ $item->id == $kecamatan->id ? 'btn-info' : 'btn-outline-info' }} text-white mb-2 mr-2">{{ $kecamatan->nama ?? null }}</a>
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
                        <h3 class="card-title text-sm">Produksi Perkebunan</h3>

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
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="row">
            <div class="col text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DATA PERKEBUNAN</h3>
                    </div>
                    <div class="card-body p-0 table-responsive">
                        <table class="table table-hover text-nowrap" style="width: 100%;">
                            <tr>
                                <th>Kdkec</th>
                                <th>Kecamatan</th>
                                <th>Jenis</th>
                                <th>Tanam Akhir Semester Laporan</th>
                                <th>Produksi Semester Laporan Ton</th>
                            </tr>
                            @foreach($perkebunans as $item)
                            <tr>
                                <td>{{ $item->kecamatan->kode ?? null }}</td>
                                <td>{{ $item->kecamatan->nama ?? null }}</td>
                                <td>{{ $item->jenis ?? null }}</td>
                                <td>{{ $item->tanam_akhir_semester_laporan ?? null }}</td>
                                <td>{{ $item->produksi_semester_laporan_ton ?? null }}</td>
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