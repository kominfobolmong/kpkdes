@extends('layouts.frontend.app')
@section('content')
<section style="background-color: #ededed;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-1">
                <div class="d-flex flex-column justify-content-center align-items-center" style="height: 300px;">
                    <h1 class="text-bold text-center">Survei Kepuasan Masyarakat</h1>
                    <p><a href="/" class="text-success">BERANDA</a> / HALAMAN SURVEI</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #ffffff;">
    <div class="container">
        <div class="row p-4">
            <div class="col-lg-6 col-sm-12 col-md-1">
                <p class="text-center text-secondary h4 mt-4 mb-4 text-dark">KUESIONER SURVEI KEPUASAN MASYARAKAT (SKM)</p>
                <p>&nbsp;</p>
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('kirim-survei') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="opd">Tujuan SKPD/Unit Layanan</label>
                        <select name="id_opd" id="id_opd" class="form-control form-control-lg">
                            <option value="">Pilih salah satu</option>
                            @foreach($opds as $opd)
                            <option @if(old('id_opd') == $opd->id) selected @endif value="{{ $opd->id ?? null }}">{{ $opd->nama ?? null }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6 col-sm-12 col-md-1">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control form-control-lg form-control-color" placeholder="Nama Anda" value="{{ old('nama') ?? null }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-md-1">
                            <div class="form-group">
                                <label for="opd">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-lg">
                                    <option value="">Pilih salah satu</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6 col-sm-12 col-md-1">
                            <div class="form-group">
                                <label for="pendidikan">Pendidikan</label>
                                <select name="id_pendidikan" id="id_pendidikan" class="form-control form-control-lg">
                                    <option value="">Pilih salah satu</option>
                                    @foreach($pendidikans as $pendidikan)
                                    <option @if(old('id_pendidikan') == $pendidikan->id) selected @endif value="{{ $pendidikan->id ?? null }}">{{ $pendidikan->nama ?? null }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-md-1">
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <select name="id_pekerjaan" id="id_pekerjaan" class="form-control form-control-lg">
                                    <option value="">Pilih salah satu</option>
                                    @foreach($pekerjaans as $pekerjaan)
                                    <option @if(old('id_pekerjaan') == $pekerjaan->id) selected @endif value="{{ $pekerjaan->id ?? null }}">{{ $pekerjaan->nama ?? null }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6 col-sm-12 col-md-1">
                            <div class="form-group">
                                <label for="usia">Kelompok Usia</label>
                                <select name="id_usia" id="id_usia" class="form-control form-control-lg">
                                    <option value="">Pilih salah satu</option>
                                    @foreach($usias as $usia)
                                    <option @if(old('id_usia') == $usia->id) selected @endif value="{{ $usia->id ?? null }}">{{ $usia->nama ?? null }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-md-1">
                            <div class="form-group">
                                <label for="waktu">Waktu Survei</label>
                                <select name="id_waktu" id="id_waktu" class="form-control form-control-lg">
                                    <option value="">Pilih salah satu</option>
                                    @foreach($waktus as $waktu)
                                    <option @if(old('id_waktu') == $waktu->id) selected @endif value="{{ $waktu->id ?? null }}">{{ $waktu->nama ?? null }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_layanan">Jenis layanan yang diteirma</label>
                        <textarea name="jenis_layanan" id="jenis_layanan" cols="30" rows="5" class="form-control form-control-lg" placeholder="Misal: KTP, Akta, Sertifikat, Pili Umum, Dll">{{ old('jenis_layanan') }}</textarea>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6 col-sm-12 col-md-1">
                            <div class="form-group">
                                <label for="kesesuaian">* 1. Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya. </label>
                                <select name="kesesuaian" id="kesesuaian" class="form-control form-control-lg">
                                    <option value="">Pilih salah satu</option>
                                    <option value="1">Tidak sesuai</option>
                                    <option value="2">Kurang sesuai</option>
                                    <option value="3">Sesuai</option>
                                    <option value="4">Sangat sesuai</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-md-1">
                            <div class="form-group">
                                <label for="kemudahan">* 2. Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini. </label>
                                <select name="kemudahan" id="kemudahan" class="form-control form-control-lg">
                                    <option value="">Pilih salah satu</option>
                                    <option value="1">Tidak mudah</option>
                                    <option value="2">Sangat mudah</option>
                                    <option value="3">Mudah</option>
                                    <option value="4">Sangat mudah</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6 col-sm-12 col-md-1">
                            <div class="form-group">
                                <label for="kecepatan">* 3. Bagaiamana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan. </label>
                                <select name="kecepatan" id="kecepatan" class="form-control form-control-lg">
                                    <option value="">Pilih salah satu</option>
                                    <option value="1">Tidak cepat</option>
                                    <option value="2">Kurang cepat</option>
                                    <option value="3">Cepat</option>
                                    <option value="4">Sangat cepat</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-md-1">
                            <div class="form-group">
                                <label for="kewajaran">* 4. Bagaimana pendapat Saudara tentang kewajaran biaya / tarif dalam pelayanan. </label>
                                <select name="kewajaran" id="kewajaran" class="form-control form-control-lg">
                                    <option value="">Pilih salah satu</option>
                                    <option value="1">Tidak wajar</option>
                                    <option value="2">Kurang wajar</option>
                                    <option value="3">Wajar</option>
                                    <option value="4">Sangat Wajar</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hasil">* 5. Bagaiamana pendapat Saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang di berikan. </label>
                        <select name="hasil" id="hasil" class="form-control form-control-lg">
                            <option value="">Pilih salah satu</option>
                            <option value="1">Tidak sesuai</option>
                            <option value="2">Kurang sesuai</option>
                            <option value="3">Sesuai</option>
                            <option value="4">Sangat sesuai</option>
                        </select>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6 col-sm-12 col-md-1">
                            <div class="form-group">
                                <label for="kompetensi">* 6. Bagaimana pendapat Saudara tentang kompetensi / kemampuan petugas dalam pelayanan. </label>
                                <select name="kompetensi" id="kompetensi" class="form-control form-control-lg">
                                    <option value="">Pilih salah satu</option>
                                    <option value="1">Tidak kompeten</option>
                                    <option value="2">Kurang kompeten</option>
                                    <option value="3">Kompeten</option>
                                    <option value="4">Sangat kompeten</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-md-1">
                            <div class="form-group">
                                <label for="perilaku">* 7. Bagaiamana pendapat Saudara perilaku petugas dalam pelayanan terkait kesopanan dan keramahan. </label>
                                <select name="perilaku" id="perilaku" class="form-control form-control-lg">
                                    <option value="">Pilih salah satu</option>
                                    <option value="1">Tidak baik</option>
                                    <option value="2">Kurang baik</option>
                                    <option value="3">Baik</option>
                                    <option value="4">Sangat baik</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6 col-sm-12 col-md-1">
                            <div class="form-group">
                                <label for="kualitas">* 8. Bagaimana pendapat Saudara tentang kualitas sarana <br />dan prasarana. </label>
                                <select name="kualitas" id="kualitas" class="form-control form-control-lg">
                                    <option value="">Pilih salah satu</option>
                                    <option value="1">Tidak baik</option>
                                    <option value="2">Kurang baik</option>
                                    <option value="3">Baik</option>
                                    <option value="4">Sangat baik</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-md-1">
                            <div class="form-group">
                                <label for="penanganan">* 9. Bagaiamana pendapat Saudara tentang penanganan pengaduan pengguna layanan. </label>
                                <select name="penanganan" id="penanganan" class="form-control form-control-lg">
                                    <option value="">Pilih salah satu</option>
                                    <option value="1">Tidak baik</option>
                                    <option value="2">Kurang baik</option>
                                    <option value="3">Baik</option>
                                    <option value="4">Sangat baik</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 mb-4">
                        <button type="submit" class="btn btn-success">KIRIM SURVEI</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection