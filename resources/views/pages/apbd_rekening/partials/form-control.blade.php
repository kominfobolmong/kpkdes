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
        <div class="col-2">
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" value="{{ old('tahun') ?? $item->tahun }}">
            </div>
        </div>
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
    </div>
    
    <div class="row">
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


    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="id_bidang">Bidang</label>
                <select class="form-control select2" name="id_bidang" style="width: 100%;">
                    <option value="" selected>Pilih satu</option>
                    @foreach($bidangs as $bidang)
                    <option @if($item->id_bidang == $bidang->id || old('id_bidang') == $bidang->id) selected @endif value="{{ $bidang->id }}">{{ $bidang->kode }} {{ $bidang->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="id_sub_bidang">Sub bidang</label>
                <select class="form-control select2" name="id_sub_bidang" style="width: 100%;">
                    
                </select>
            </div>
        </div>
    </div>

    
   

    <div class="row">
        <div class="col-2">
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode" placeholder="kode" value="{{ old('kode') ?? $item->kode }}">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="uraian">Uraian</label>
                <input type="text" class="form-control" id="uraian" name="uraian" placeholder="uraian" value="{{ old('uraian') ?? $item->uraian }}">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="anggaran">Anggaran</label>
                <input type="text" class="form-control" id="anggaran" name="anggaran" placeholder="anggaran" value="{{ old('anggaran') ?? $item->anggaran }}">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="id_sumber_dana">Sumber dana</label>
                <select class="form-control select2" name="id_sumber_dana" style="width: 100%;">
                    <option value="" selected>Pilih satu</option>
                    @foreach($sumber_danas as $sumber_dana)
                    <option @if($item->id_sumber_dana == $sumber_dana->id || old('id_sumber_dana') == $sumber_dana->id) selected @endif value="{{ $sumber_dana->id }}">{{ $sumber_dana->kode }} {{ $sumber_dana->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    

    
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{ $submit ?? 'Create' }}</button>
</div>