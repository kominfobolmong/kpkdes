@extends('layouts.backend.app')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Excel
                        </div>

                        <div class="card-tools">
                            <div class="d-flex justify-content-between">
                                <form action="{{ route('excel.search') }}" method="get">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <select class="form-control float-right" name="finance_id">
                                            <option value="" selected disabled>Choose One</option>
                                            @foreach($finances as $finance)
                                            <option value="{{ $finance->id }}">{{ $finance->name }}</option>
                                            @endforeach
                                        </select>

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <a href="{{ route('excel.create') }}" class="btn btn-primary btn-sm ml-2 mt-n1">
                                    <i class="fas fa-plus"></i> Upload Excel
                                </a>
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
                                    <th>Date</th>
                                    <th>Jumlah Data</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($items as $item)
                                <tr>
                                    <td>{{ $item->created_at ?? null }}</td>
                                    <!-- <td>{{ $item->finance->name ?? null }}</td> -->
                                    <td>{{ number_format($item->vehicle->count()) ?? 0 }}</td>
                                    <td>
                                        @can('vehicle-list')
                                        <a href="{{ route('excel.show', $item->id) }}" class="btn btn-info">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        @endcan
                                        <form action="{{route('excel.destroy', $item->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">Empty</td>
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