@extends('layouts.frontend.app')
@section('content')
<section class="bg-secondary pt-4 pb-4">
    <div class="container">
        <p>&nbsp;</p>
        <div class="text-center mt-4 mb-4">
            <h1 class="h2">PARIWISATA {{ $item->nama ? 'KEC.'.$item->nama : '' }}</h1>
        </div>
        <p>&nbsp;</p>

        <div class="row">
            <div class="col text-sm">
                <a data-id="0" href="{{ route('pariwisata') }}" class="btn {{ $item->id ? 'btn-outline-info' : 'btn-info' }} text-white mb-2 mr-2">Semua</a>
                @foreach($kecamatans as $kecamatan)
                <a href="{{ route('pariwisata', $kecamatan->slug) }}" class="btn {{ $item->id == $kecamatan->id ? 'btn-info' : 'btn-outline-info' }} text-white mb-2 mr-2">{{ $kecamatan->nama ?? null }}</a>
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

        <div class="row mt-4">
            @foreach($pariwisatas as $pariwisata)
            <div class="col-md-6">
                <!-- Box Comment -->
                <div class="card card-widget">
                    <div class="card-header">
                        <div class="user-block">
                            <span><a href="#" class="text-dark text-bold h5">{{ $pariwisata->nama_usaha_wisata ?? null }}</a></span>
                            <div class="text-sm">{{ $pariwisata->alamat ?? null }}</div>
                        </div>
                        <!-- /.user-block -->
                        <div class="card-tools">
                            <a target="_blank" href="http://www.google.com/maps/place/{{ $pariwisata->latitude ?? null }},{{ $pariwisata->longitude ?? null }}" class="btn btn-tool">
                                <i class="fas fa-map text-xl text-dark"></i>
                            </a>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if(Storage::disk('public')->exists($pariwisata->gambar))
                        <img class="img-fluid pad" src="{{ Storage::url($pariwisata->gambar) }}" alt="Photo" style="height:350px; object-fit:cover; object-position:center;">
                        @else
                        <img class="img-fluid pad" src="/no-image.jpg" alt="Photo" style="height:350px; object-fit:cover; object-position:center;">
                        @endif

                    </div>
                </div>
                <!-- /.card -->
            </div>
            @endforeach
            <div>
                {{ $pariwisatas->links() }}
            </div>
        </div>
    </div>
</section>
<section>
    &nbsp;
</section>
@endsection