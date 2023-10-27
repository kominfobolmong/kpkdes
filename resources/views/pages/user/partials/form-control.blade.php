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
        <div class="col">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') ?? $item->name }}">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="telpon">Telpon</label>
                <input type="number" class="form-control" id="telpon" name="telpon" placeholder="Telpon" value="{{ old('telpon') ?? $item->telpon }}">
            </div>

        </div>
        <div class="col">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{ old('email') ?? $item->email }}">
            </div>

        </div>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{ old('alamat') ?? $item->alamat }}">
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="username" value="{{ old('username') ?? $item->username }}">
            </div>

        </div>
        <div class="col">
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{ old('password') ?? null }}">
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group fg-role">
                <label for="roles">Roles</label>
                {!! Form::select('roles[]', $roles, $userRole ?? [], array('class' => 'form-control select2','multiple')) !!}
            </div>

        </div>
        <div class="col">
            @can('desa-create')
            <div class="form-group">
                <label for="desa">Desa</label>
                <select class="select2" name="id_desa[]" multiple="multiple" data-placeholder="Pilih beberapa" style="width: 100%;">
                    @foreach($item->desa as $desa)
                    <option selected value="{{ $desa->id }}">{{ $desa->nama }}</option>
                    @endforeach
                    @foreach($desas as $desa)
                    <option @if($item->id_desa == $desa->id) selected @endif value="{{ $desa->id }}" value="{{ $desa->id }}">{{ $desa->nama }}</option>
                    @endforeach
                </select>
            </div>
            @endcan
        </div>
    </div>
    
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{ $submit ?? 'Create' }}</button>
</div>