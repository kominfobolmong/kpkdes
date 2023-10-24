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
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') ?? $item->name }}">
    </div>
    <div class="form-group">
        <label for="telpon">Telpon</label>
        <input type="number" class="form-control" id="telpon" name="telpon" placeholder="Telpon" value="{{ old('telpon') ?? $item->telpon }}">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{ old('alamat') ?? $item->alamat }}">
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="username" value="{{ old('username') ?? $item->username }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{ old('email') ?? $item->email }}">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{ old('password') ?? null }}">
    </div>
    <div class="form-group fg-role">
        <label for="roles">Roles</label>
        {!! Form::select('roles[]', $roles, $userRole ?? [], array('class' => 'form-control select2','multiple')) !!}
    </div>
    @can('opd-create')
    <div class="form-group">
        <label for="opd">OPD</label>
        <select class="select2" name="id_opd[]" multiple="multiple" data-placeholder="Pilih beberapa" style="width: 100%;">
            @foreach($item->opd as $opd)
            <option selected value="{{ $opd->id }}">{{ $opd->nama }}</option>
            @endforeach
            @foreach($opds as $opd)
            <option @if($item->id_opd == $opd->id) selected @endif value="{{ $opd->id }}" value="{{ $opd->id }}">{{ $opd->nama }}</option>
            @endforeach
        </select>
    </div>
    @endcan
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{ $submit ?? 'Create' }}</button>
</div>