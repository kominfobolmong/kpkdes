@extends('layouts.frontend.app')
@push('addon-script')
<script src="/template/backend/plugins/chart.js/Chart.min.js"></script>
<script>

    $(function() {
        getPkt();

        getTk();
    })

    function getPkt() {
        $.ajax({
            url: "/get_grafik_pkt",
            type: "GET",
            dataType: "JSON",
            success: function(response) {
                var labels = [];
                var data = [];
                var backgroundColor = ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'];

                $.each(response.result, function(k, v) {
                    labels.push(v.desa);
                    data.push(v.jml);
                    console.log(`${v.desa} ${v.jml}`);
                });

                var donutData = {
                    labels: labels,
                    datasets: [
                        {
                        data: data,
                        backgroundColor : backgroundColor,
                        }
                    ]
                }

                var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
                var pieData = donutData;
                var pieOptions = {
                    maintainAspectRatio : false,
                    responsive : true,
                }

                new Chart(pieChartCanvas, {
                    type: 'pie',
                    data: pieData,
                    options: pieOptions
                })
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(`${errorThrown}`)
            }
        });
    }

    function getTk() {
        $.ajax({
            url: "/get_grafik_tenaga_kerja",
            type: "GET",
            dataType: "JSON",
            success: function(response) {
                var labels = [];
                var data = [];
                var backgroundColor = ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'];

                $.each(response.result, function(k, v) {
                    labels.push(v.desa);
                    data.push(v.jml);
                    console.log(`${v.desa} ${v.jml}`);
                });

                var donutData = {
                    labels: labels,
                    datasets: [
                        {
                        data: data,
                        backgroundColor : backgroundColor,
                        }
                    ]
                }

                var pieChartCanvas = $('#pieChart2').get(0).getContext('2d')
                var pieData = donutData;
                var pieOptions = {
                    maintainAspectRatio : false,
                    responsive : true,
                }

                new Chart(pieChartCanvas, {
                    type: 'pie',
                    data: pieData,
                    options: pieOptions
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
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('banner1.png') }}" alt="BOLMONG HEBAT">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('banner2.png') }}" alt="BOLMONG HEBAT">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section>
    <div class="container mt-4 mb-4">
        <h1 class="text-center h2 mb-5 mt-5 text-uppercase" style="color: red;">PENDAPATAN DAN REALISASI ANGGARAN PER DESA</h1>
        <div class="row text-center">
            @foreach ($items as $item)
            <div class="col-4">
                <div class="">
                    <h5 class="text-bold">{{ $item->kecamatan }}</h5>
                    <h4 class="text-bold">{{ $item->desa }}</h4>
                    <div class="small-box bg-info">
                        <a href="#" class="small-box-footer">Pendapatan Transfer</a>
                        <div class="inner">
                          <p>Anggaran (Rp)</p>
                          <h3>Rp{{ number_format($item->anggaran) }}</h3>
                        </div>
                        <div class="inner">
                            <p>Realisasi (Rp)</p>
                            <h3>Rp{{ number_format($item->realisasi) }}</h3>
                          </div>
                          <div class="inner">
                            <p>Lebih/(Kurang)Rp</p>
                            @if ($item->realisasi > $item->anggaran)
                            <h3 style="color: rgb(255, 63, 63);">Rp{{ number_format($item->lebih_kurang) }}</h3>
                            @else
                            <h3>Rp{{ number_format($item->lebih_kurang) }}</h3>
                            @endif
                          </div>
                      </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-dark pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="h2 text-bold text-uppercase">Program Padat Karya (Cash for Work) Untuk Serap Tenaga Kerja</h1>
                <p class="text-left">Padat karya merupakan kegiatan pembangunan yang lebih banyak menggunakan tenaga manusia jika dibandingkan dengan tenaga mesin. Tujuan utama dari program padat karya adalah untuk membuka lapangan kerja bagi masyarakat, terutama yang mengalami kehilangan penghasilan atau pekerjaan tetap.</p>
                <p class="text-left">Penciptaan lapangan kerja yang lebih besar diperlukan untuk menyerap pengangguran. Oleh karena itu pada tahun 2015 lalu, Presiden Joko Widodo (Jokowi) telah meluncurkan program dengan nama 'Investasi Padat Karya Menciptakan Lapangan Kerja'.</p>
                <p class="text-left">
                    Jenis Kegiatan padat karya dapat dilakukan melalui:
                    <ul class="text-left">
                        <li>Pembangunan dan/atau rehabilitasi sarana prasarana perdesaan sesuai dengan daftar kewenangan Desa, antara lain: perbaikan alur sungai dan irigasi, pembangunan dan/atau perbaikan jalan dan jembatan skala Desa, tambatan perahu;
                        </li>
                        <li>pemanfaatan lahan tidur untuk meningkatkan produksi pertanian, perkebunan, peternakan, dan perikanan; atau
                        </li>
                        <li>kegiatan produktif lainnya yg memberikan nilai tambah kepada masyarakat dengan memanfaatkan dan mengoptimalkan sumber daya lokal yang ada dan sifatnya berkelanjutan.
                        </li>
                        <li>Pemberdayaan Masyarakat, antara lain: Pengelolaan sampah; Pengelolaan limbah; Pengelolaan lingkungan pemukiman; Pengembangan energi terbarukan; Penyediaan dan pendistribusian makanan tambahan bagi anak (bayi dan balita).
                        </li>
                    </ul>
                    </p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-4 mb-4">
        <h1 class="text-center h2 mb-4 text-uppercase">Dengan adanya Padat Karya!!!</h1>
        <div class="row">
            <div class="col">
                <div class="">
                    <h1 class="h5 text-bold">Percepatan Pemulihan Perekonomian Masyarakat</h1>
                <p>"Sesuai arahan Pak Presiden, program padat karya merupakan janji Pemerintah yang akan terus membantu masyarakat yang terdampak pandemi Covid-19 dalam rangka mempercepat pemulihan ekonomi nasional,"</p>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <h1 class="h5 text-bold">Membantu Masyarakat<br />Kecil</h1>
                <p>Padat Karya meningkatkan pendapatan warga miskin seputar lokasi/desa. Hal tersebut terbukti dengan adanya penyerapan tenaga kerja dalam pelaksanaan padat karya yang bersifat sementara.</p>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <h1 class="h5 text-bold">Jadi Solusi dari Bagian Masalah Bangsa</h1>
                <p>Padat karya merupakan penerapan tata nilai keistimewaan. Selain itu akan berdampak pada ekonomi masyarakat. Padat karya penunjang program dana desa khusus pemberdayaan masyarakat di desa melalui program padat karya cash</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col">
                <!-- PIE CHART -->
            <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Grafik PKT per Desa/Kelurahan</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <div class="col">
                <!-- PIE CHART -->
            <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Grafik serapan tenaga kerja per desa</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="pieChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<section>
    &nbsp;
</section>
@endsection
