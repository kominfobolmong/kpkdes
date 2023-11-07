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
            <option @if(old('id_desa') == $desa->id) selected @endif value="{{ $desa->id }}">{{ $desa->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="image">Excel(CSV,XLS,XLSX)</label>
        <div>
            <input type="file" id="excel_file" name="excel_file">
        </div>
    </div>
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{ $submit ?? 'Create' }}</button>
</div>