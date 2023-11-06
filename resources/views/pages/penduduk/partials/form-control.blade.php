<div class="card-body">
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
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="id_kabupaten">Kabupaten</label>
                <select class="form-control select2" name="id_kabupaten" style="width: 100%;">
                    <option value="" selected>Pilih satu</option>
                    @foreach($kabupatens as $kabupaten)
                    <option @if($item->id_kabupaten == $kabupaten->id || old('id_kabupaten') == $kabupaten->id) selected @endif value="{{ $kabupaten->id }}">{{ $kabupaten->nama }}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <div class="col">
            <div class="form-group">
                <label for="id_kecamatan">Kecamatan</label>
                <select class="form-control select2" name="id_kecamatan" style="width: 100%;">
                    
                </select>
            </div>

        </div>
        <div class="col">
            <div class="form-group">
                <label for="id_desa">Desa/Kelurahan</label>
                <select class="form-control select2" name="id_desa" style="width: 100%;">
                    
                </select>
            </div>

        </div>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{ old('alamat') ?? $item->alamat }}">
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="dusun">Dusun</label>
                <input type="text" class="form-control" id="dusun" name="dusun" placeholder="Dusun" value="{{ old('dusun') ?? $item->dusun }}">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="rt">RT</label>
                <input type="text" class="form-control" id="rt" name="rt" placeholder="RT" value="{{ old('rt') ?? $item->rt }}">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="rw">RW</label>
                <input type="text" class="form-control" id="rw" name="rw" placeholder="R" value="{{ old('rw') ?? $item->rw }}">
            </div>
        </div>
    </div>
    
    
    
    
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="no_kk">No KK</label>
                <input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="No KK" value="{{ old('no_kk') ?? $item->no_kk }}">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="{{ old('nik') ?? $item->nik }}">
            </div>

        </div>
        <div class="col">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ old('nama') ?? $item->nama }}">
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="tempat_lahir">Tempat lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir" value="{{ old('tempat_lahir') ?? $item->tempat_lahir }}">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="tgl_lahir">Tgl lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="tgl_lahir" value="{{ old('tgl_lahir') ?? $item->tgl_lahir }}">
            </div>
        </div>
        <div class="col">

            <div class="form-group">
                <label for="nama_ibu_kandung">Nama Ibu Kandung</label>
                <input type="text" class="form-control" id="nama_ibu_kandung" name="nama_ibu_kandung" placeholder="Nama ibu kandung" value="{{ old('nama_ibu_kandung') ?? $item->nama_ibu_kandung }}">
            </div>
        </div>
    </div>
    
    
    <div class="form-group">
        <label for="jenis_kelamin">Perempuan/Laki-laki</label>
        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" {{ old('jenis_kelamin') || $item->jenis_kelamin == 'Perempuan' ? 'checked' : '' }} value="Perempuan"> Perempuan
        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" {{ old('jenis_kelamin') || $item->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }} value="Laki-laki"> Laki-laki
    </div>
    <div class="form-group">
        <label for="id_pekerjaan">Pekerjaan</label>
        <select class="form-control select2" name="id_pekerjaan" style="width: 100%;">
            <option value="" selected disabled>Pilih satu</option>
            @foreach($pekerjaans as $pekerjaan)
            <option @if($item->id_pekerjaan == $pekerjaan->id || old('id_pekerjaan') == $pekerjaan->id) selected @endif value="{{ $pekerjaan->id }}">{{ $pekerjaan->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="id_hubungan">Hubungan</label>
        <select class="form-control select2" name="id_hubungan" style="width: 100%;">
            <option value="" selected disabled>Pilih satu</option>
            @foreach($hubungans as $hubungan)
            <option @if($item->id_hubungan == $hubungan->id || old('id_hubungan') == $hubungan->id) selected @endif value="{{ $hubungan->id }}">{{ $hubungan->nama }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="keterangan_padan">PADAN/TIDAK PADAN</label>
        <input type="radio" id="keterangan_padan" name="keterangan_padan" {{ old('keterangan_padan') || $item->keterangan_padan == 'Perempuan' ? 'checked' : '' }} value="PADAN"> PADAN
        <input type="radio" id="keterangan_padan" name="keterangan_padan" {{ old('keterangan_padan') || $item->keterangan_padan == 'Laki-laki' ? 'checked' : '' }} value="TIDAK PADAN"> TIDAK PADAN
    </div>
    <div class="form-group">
        <label for="bansos_bpnt">Bansos BPNT</label>
        <input type="radio" id="bansos_bpnt" name="bansos_bpnt" {{ old('bansos_bpnt') || $item->bansos_bpnt == 'Y' ? 'checked' : '' }} value="Y"> Y
        <input type="radio" id="bansos_bpnt" name="bansos_bpnt" {{ old('bansos_bpnt') || $item->bansos_bpnt == 'N' ? 'checked' : '' }} value="N"> N
    </div>
    
    <div class="form-group">
        <label for="bansos_pkh">Bansos PKH</label>
        <input type="radio" id="bansos_pkh" name="bansos_pkh" {{ old('bansos_pkh') || $item->bansos_pkh == 'Y' ? 'checked' : '' }} value="Y"> Y
        <input type="radio" id="bansos_pkh" name="bansos_pkh" {{ old('bansos_pkh') || $item->bansos_pkh == 'N' ? 'checked' : '' }} value="N"> N
    </div>
    
    <div class="form-group">
        <label for="bansos_bpnt_ppkm">Bansos BPNT PPKM</label>
        <input type="radio" id="bansos_bpnt_ppkm" name="bansos_bpnt_ppkm" {{ old('bansos_bpnt_ppkm') || $item->bansos_bpnt_ppkm == 'Y' ? 'checked' : '' }} value="Y"> Y
        <input type="radio" id="bansos_bpnt_ppkm" name="bansos_bpnt_ppkm" {{ old('bansos_bpnt_ppkm') || $item->bansos_bpnt_ppkm == 'N' ? 'checked' : '' }} value="N"> N
    </div>

    <div class="form-group">
        <label for="pbi_jkn">PBI JKN</label>
        <input type="radio" id="pbi_jkn" name="pbi_jkn" {{ old('pbi_jkn') || $item->pbi_jkn == 'Y' ? 'checked' : '' }} value="Y"> Y
        <input type="radio" id="pbi_jkn" name="pbi_jkn" {{ old('pbi_jkn') || $item->pbi_jkn == 'N' ? 'checked' : '' }} value="N"> N
    </div>
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{ $submit ?? 'Create' }}</button>
</div>