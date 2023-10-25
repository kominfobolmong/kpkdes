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
        <label for="id_bidang">Bidang</label>
        <select class="form-control select2" name="id_bidang" style="width: 100%;">
            <option value="" selected disabled>Pilih satu</option>
            @foreach($bidangs as $bidang)
            <option @if($item->id_bidang == $bidang->id || old('id_bidang') == $bidang->id) selected @endif value="{{ $bidang->id }}">{{ $bidang->nama }}</option>
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