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
        <label for="jenis">Data</label>
        <select class="form-control select2" name="id_jenis" style="width: 100%;">
            <option value="" selected disabled>Choose One</option>
            @foreach($jeniss as $jenis)
            <option @if(old('id_jenis')==$jenis->id) selected @endif value="{{ $jenis->id }}">{{ $jenis->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="opd">OPD</label>
        <select class="form-control select2" name="id_opd" style="width: 100%;">
            <option value="" selected disabled>Choose One</option>
            @foreach($opds as $opd)
            <option @if(old('id_opd')==$opd->id) selected @endif value="{{ $opd->id }}">{{ $opd->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="jenis">Jenis</label>
        <select class="form-control select2" name="jenis" style="width: 100%;">
            <option value="" selected disabled>Choose One</option>
            @foreach($arrs as $arr)
            <option @if(old('jenis')==$arr) selected @endif value="{{ $arr }}">{{ $arr }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="tahun">Tahun</label>
        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="tahun" value="">
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