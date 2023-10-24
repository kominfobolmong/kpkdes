@extends('layouts.frontend.app')
@push('addon-script')
<script src="/template/backend/plugins/chart.js/Chart.min.js"></script>
<script>
    $(function() {
        var id = '{{ $item->id ?? 0 }}';
        getSdn(id);
        getSmpn(id);
    })

    function getSdn(id = "") {
        $.ajax({
            url: "/get_sekolah/" + id + "/SDN",
            type: "GET",
            dataType: "JSON",
            success: function(response) {
                // dokter
                var labels = ['NEGERI', 'SWASTA'];
                var data = [];
                var backgroundColor = ['#f56954', '#00a65a'];
                var donutChartCanvas = $('#donutChart1').get(0).getContext('2d')

                $.each(response.result, function(k, v) {
                    data.push(v.jumlah);
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

    function getSmpn(id = "") {
        $.ajax({
            url: "/get_sekolah/" + id + "/SMPN",
            type: "GET",
            dataType: "JSON",
            success: function(response) {
                // dokter
                var labels = ['NEGERI', 'SWASTA'];
                var data = [];
                var backgroundColor = ['#f56954', '#00a65a'];
                var donutChartCanvas = $('#donutChart2').get(0).getContext('2d')

                $.each(response.result, function(k, v) {
                    data.push(v.jumlah);
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
</script>
@endpush
@section('content')
<section class="bg-secondary pt-4 pb-4">
    <div class="container">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="text-center mt-4 mb-4">
            <h1 class="h2">PENDIDIKAN {{ $item->nama ? 'KEC.'.$item->nama : '' }}</h1>
        </div>
        <div class="row">
            <div class="col text-sm">
                <a data-id="0" href="{{ route('pendidikan') }}" class="btn {{ $item->id ? 'btn-outline-info' : 'btn-info' }} text-white mb-2 mr-2">Semua</a>
                @foreach($kecamatans as $kecamatan)
                <a href="{{ route('pendidikan', $kecamatan->slug) }}" class="btn {{ $item->id == $kecamatan->id ? 'btn-info' : 'btn-outline-info' }} text-white mb-2 mr-2">{{ $kecamatan->nama ?? null }}</a>
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
                        <h3 class="card-title text-sm">SDN</h3>

                        <div class="card-tools">
                            <a href=""><i class="fa fa-download text-danger"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart1" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-6 text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">SMPN</h3>

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
            <div class="col text-center mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-sm">Rekapitulasi Data ASN dan Non ASN per kecamatan</h3>

                        <div class="card-tools">
                            <!-- <a href=""><i class="fa fa-download text-danger"></i></a> -->
                        </div>
                    </div>
                    <div class="card-body p-0 table-responsive">
                        <table class="table table-hover text-nowrap">
                            <tr>
                                <th>Kecamatan</th>
                                <th>JENJANG</th>
                                <th>Pendidik ASN (S1)</th>
                                <th>Pendidikan ASN (Non S1)</th>
                                <th>Pendidik NON ASN (S1)</th>
                                <th>Pendidik NON ASN (Non S1)</th>
                                <th>Administrasi ASN (S1)</th>
                                <th>Administrasian ASN (Non S1)</th>
                                <th>Administrasi NON ASN (S1)</th>
                                <th>Administrasi NON ASN (Non S1)</th>
                            </tr>
                            @foreach($rekapitulasi_pendidiks as $item)
                            <tr>
                                <td>{{ $item->kecamatan->nama ?? null }}</td>
                                <td>{{ $item->jenjang ?? null }}</td>
                                <td>{{ $item->pendidik_asn_s1 ?? null }}</td>
                                <td>{{ $item->pendidik_asn_non_s1 ?? null }}</td>
                                <td>{{ $item->pendidik_non_asn_s1 ?? null }}</td>
                                <td>{{ $item->pendidik_non_asn_non_s1 ?? null }}</td>
                                <td>{{ $item->administrasi_asn_s1 ?? null }}</td>
                                <td>{{ $item->administrasi_asn_non_s1 ?? null }}</td>
                                <td>{{ $item->administrasi_non_asn_s1 ?? null }}</td>
                                <td>{{ $item->administrasi_non_asn_non_s1 ?? null }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        {{ $rekapitulasi_pendidiks->links() }}
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
                        <h3 class="card-title text-sm">Sekolah</h3>

                        <div class="card-tools">
                            <!-- <a href=""><i class="fa fa-download text-danger"></i></a> -->
                        </div>
                    </div>
                    <div class="card-body p-0 table-responsive">
                        <table class="table table-hover text-nowrap">
                            <tr>
                                <th>Kecamatan</th>
                                <th>Nama Sekolah</th>
                                <th>Alamat</th>
                                <th>Jenis</th>
                                <th>Keterangan</th>

                            </tr>
                            @foreach($sekolahs as $item)
                            <tr>
                                <td>{{ $item->kecamatan->nama ?? null }}</td>
                                <td>{{ $item->nama_sekolah ?? null }}</td>
                                <td>{{ $item->alamat ?? null }}</td>
                                <td>{{ $item->jenis ?? null }}</td>
                                <td>{{ $item->keterangan ?? null }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        {{ $sekolahs->links() }}
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
                        <h3 class="card-title text-sm">PAUD</h3>

                        <div class="card-tools">
                            <!-- <a href=""><i class="fa fa-download text-danger"></i></a> -->
                        </div>
                    </div>
                    <div class="card-body p-0 table-responsive">
                        <table class="table table-hover text-nowrap">
                            <tr>
                                <th>Kecamatan</th>
                                <th>Nama PAUD</th>
                                <th>Alamat</th>
                            </tr>
                            @foreach($pauds as $item)
                            <tr>
                                <td>{{ $item->kecamatan->nama ?? null }}</td>
                                <td>{{ $item->nama_paud ?? null }}</td>
                                <td>{{ $item->alamat ?? null }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        {{ $pauds->links() }}
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