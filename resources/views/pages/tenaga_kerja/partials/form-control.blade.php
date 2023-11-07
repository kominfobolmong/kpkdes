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

    @php
    $id_desa = auth()->user()->desa[0]->id ?? null;
    @endphp
    <div class="row">
        <div class="{{ $id_desa == null ? 'col-2' : 'col' }}">
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="tahun" value="{{ old('tahun') ?? $item->tahun }}">
            </div>
        </div>
        @if($id_desa == null)
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
        @endif
    </div>
    

    @if($id_desa == null)
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
    @else
    
    <input type="hidden" name="id_desa" value="{{ $id_desa }}" />
    @endif
    
    
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="id_apbd_rekening">APBD @if($id_desa != null) [<input type="checkbox" name="ambil_data" class="ambil_data" value="1" /> Ambil Data] @endif</label>
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