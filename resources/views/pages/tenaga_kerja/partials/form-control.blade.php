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
    <div class="error-mesage mt-2 mb-2 text-danger"></div>

    <div class="row">
        <div class="col-2">
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="tahun" value="{{ old('tahun') ?? $item->tahun }}">
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
                <label for="id_apbd_rekening">APBD</label>
                <select class="form-control select2" name="id_apbd_rekening" style="width: 100%;">
                    
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="id_item_pekerjaan">Item Pekerjaan</label>
                <select class="form-control select2" name="id_item_pekerjaan" style="width: 100%;">
                    
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="id_penduduk">Pekerja/Tenaga Kerja</label>
        <select class="form-control select2" name="id_penduduk" style="width: 100%;">
            
        </select>
    </div>
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary create">{{ $submit ?? 'Create' }}</button>
</div>