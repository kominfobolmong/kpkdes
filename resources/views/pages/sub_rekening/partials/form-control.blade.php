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
    @if(!$rekening)
    <div class="form-group">
        <label for="id_rekening">Rekening</label>
        <select class="form-control select2" name="id_rekening" style="width: 100%;">
            <option value="" selected disabled>Pilih satu</option>
            @foreach($rekenings as $rekening)
            <option @if($item->id_rekening == $rekening->id || old('id_rekening') == $rekening->id) selected @endif value="{{ $rekening->id }}">{{ $rekening->nama }}</option>
            @endforeach
        </select>
    </div>
    @else
    <input type="hidden" name="id_rekening" value="{{ $rekening->id ?? null }}" />
    <div class="mb-2">
        <div>Kode</div>
        <div class="text-bold">{{ $rekening->kode ?? null }}</div>
    </div>
    <div class="mb-2">
        <div>Rekening</div>
        <div class="text-bold">{{ $rekening->nama ?? null }}</div>
    </div>
    @endif
    <div class="form-group mt-4">
        <label for="kode">Kode</label>
        <input type="text" class="form-control" id="kode" name="kode" placeholder="kode" value="{{ old('kode') ?? $item->kode }}">
    </div>
    <div class="form-group">
        <label for="nama">Uraian</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="{{ old('nama') ?? $item->nama }}">
    </div>

    
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{ $submit ?? 'Create' }}</button>
</div>