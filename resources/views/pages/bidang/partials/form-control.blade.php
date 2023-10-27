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
    <div class="form-group">
        <label for="id_desa">Desa</label>
        <select class="form-control select2" name="id_desa" style="width: 100%;">
            <option value="" selected disabled>Pilih satu</option>
            @foreach($desas as $desa)
            <option @if($item->id_desa == $desa->id || old('id_desa') == $desa->id) selected @endif value="{{ $desa->id }}">{{ $desa->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ old('nama') ?? $item->nama }}">
    </div>
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{ $submit ?? 'Create' }}</button>
</div>