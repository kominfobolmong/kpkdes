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
    <div class="mb-2">
        <div class="text-bold">Tahun</div>
        <div>{{ $apbd_rekening->tahun ?? null }}</div>
    </div>
    <div class="mb-2">
        <div class="text-bold">Kecamatan</div>
        <div>{{ $apbd_rekening->desa->kecamatan->nama ?? null }}</div>
    </div>
    <div class="mb-2">
        <div class="text-bold">Desa/Kelurahan</div>
        <div>{{ $apbd_rekening->desa->nama ?? null }}</div>
    </div>
    <div class="mb-2">
        <div class="text-bold">Uraian</div>
        <div>{{ $apbd_rekening->kode ?? null }} {{ $apbd_rekening->uraian ?? null }}</div>
    </div>
    <div class="mb-2">
        <div class="text-bold">Anggaran</div>
        <div>{{ number_format($apbd_rekening->anggaran) ?? null }}</div>
    </div>
    <p>&nbsp;</p>
    <input type="hidden" name="id_apbd_rekening" value="{{ $apbd_rekening->id ?? null }}" />
    <input type="hidden" name="id_desa" value="{{ $apbd_rekening->id_desa ?? null }}" />
    <div class="form-group">
        <label for="nama">Item Pekerjaan</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="{{ old('nama') ?? $item->nama }}">
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="anggaran">Anggaran</label>
                <input type="text" class="form-control" id="anggaran" name="anggaran" placeholder="0" value="{{ old('anggaran') ?? $item->anggaran }}">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="target">Target (Target penyerapan tenaga kerja)</label>
                <input type="text" class="form-control" id="target" name="target" placeholder="0" value="{{ old('target') ?? $item->target }}">
            </div>
        </div>
    </div>
    
    
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{ $submit ?? 'Create' }}</button>
</div>