@extends('layouts.backend.app')
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
                                <form action="{{ route('customer.index') }}" method="get" class="d-inline">
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
                    <div class="card-body p-0">
                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Telpon</th>
                                    <th>Roles</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($items as $item)
                                <tr>
                                    <td>{{ $items->count() * ($items->currentPage() - 1) + $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>@foreach($item->jenis_pelanggan as $jenis_pelanggan)
                                        {{ $jenis_pelanggan->nama }}
                                        @endforeach
                                    </td>
                                    <td>{{ $item->telpon }}</td>
                                    <td>
                                        @if(!empty($item->getRoleNames()))
                                        @foreach($item->getRoleNames() as $v)
                                        <label class="badge badge-success">{{ $v }}</label>
                                        @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        @can('kendaraan-list')
                                        <form name="form-kendaraan" action="{{route('kendaraan.index') }}" method="get" class="d-inline">
                                            <input type="hidden" name="id_user" value="{{ $item->id }}" />
                                            <button type="submit" class="btn btn-success"><i class="fas fa-eye"></i></button>
                                        </form>
                                        @endcan
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3">Empty</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection