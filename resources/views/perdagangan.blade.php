@extends('layouts.frontend.app')
@section('content')
<section class="bg-secondary pt-4 pb-4">
    <div class="container">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="text-center mt-4 mb-4">
            <h1 class="h2">PERDAGANGAN {{ $item->nama ? 'KEC.'.$item->nama : '' }}</h1>
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
        <h1 class="h4 text-center mt-4 mb-4">PASAR</h1>
        <div class="row mt-4">
            @foreach($pasars as $item)
            <div class="col-md-6">
                <!-- Box Comment -->
                <div class="card card-widget">
                    <div class="card-header">
                        <div class="user-block">
                            <span><a href="#" class="text-dark text-bold h5">{{ $item->nama_pasar ?? null }}</a></span>
                            <div class="text-sm">{{ $item->status ?? null }}</div>
                        </div>
                        <!-- /.user-block -->
                        <div class="card-tools">

                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if(Storage::disk('public')->exists($item->gambar))
                        <img class="img-fluid pad" src="{{ Storage::url($item->gambar) }}" alt="Photo" style="height:350px; object-fit:cover; object-position:center;">
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
    <div class="container">
        <h1 class="h4 text-center mt-4 mb-4">PANAS BUMI</h1>
        <div class="row mt-4">
            @foreach($panas_bumis as $item)
            <div class="col-md-6">
                <!-- Box Comment -->
                <div class="card card-widget">
                    <div class="card-header">
                        <div class="user-block">
                            <span><a href="#" class="text-dark text-bold h5">{{ $item->panas_bumi ?? null }}</a></span>
                            <div class="text-sm">{{ $item->keterangan ?? null }}</div>
                        </div>
                        <!-- /.user-block -->
                        <div class="card-tools">

                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if(Storage::disk('public')->exists($item->gambar))
                        <img class="img-fluid pad" src="{{ Storage::url($item->gambar) }}" alt="Photo" style="height:350px; object-fit:cover; object-position:center;">
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