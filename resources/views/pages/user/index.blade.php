@extends('layouts.backend.app')
@push('addon-script')
<script>
    $(function() {
        $('.table').DataTable();
    });
</script>
@endpush
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">User</h3>
                            <div class="card-tools d-flex justify-content-between">
                                <form action="{{ route('user.index') }}" method="get" class="d-inline">
                                    <div class="input-group input-group-sm">

                                        <input type="text" name="nama" class="form-control" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                @can('user-create')
                                <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm ml-2">
                                    <i class="fas fa-plus"></i> Create
                                </a>
                                @endcan
                            </div>

                        </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($items as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        @if(!empty($item->getRoleNames()))
                                        @foreach($item->getRoleNames() as $v)
                                        <label class="badge badge-success">{{ $v }}</label>
                                        @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        @can('user-edit')
                                        <a href="{{ route('user.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        @endcan
                                        @can('user-delete')
                                        <form action="{{route('user.destroy', $item->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                        @endcan
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">Empty</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection