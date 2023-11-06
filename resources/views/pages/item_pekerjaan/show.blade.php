@extends('layouts.backend.app')
@push('addon-script')
<script>
    $(function() {
        $('#data-table').DataTable();
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
                        <h3 class="card-title">Item Pekerjaan</h3>
                        <div class="card-tools">
                            @can('item_pekerjaan-create')
                            <a href="/admin/item_pekerjaan/create?id_apbd_rekening={{ $item->id }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Create
                            </a>
                            @endcan
                        </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif

                        <div class="p-4 mb-4 bg-info rounded">
                            <div>
                                <div class="text-bold">Kecamatan</div>
                                <div>{{ $item->desa->kecamatan->nama ?? null }}</div>
                            </div>
    
                            <div>
                                <div class="text-bold">Desa/Kelurahan</div>
                                <div>{{ $item->desa->nama ?? null }}</div>
                            </div>
                        </div>
                        
                        <table class="table table-striped" id="data-table">
                            <thead>
                                <tr>
                                    <th>Uraian/Item Pekerjaan</th>
                                    <th>Anggaran</th>
                                    <th>--</th>
                                </tr>
                                <tr>
                                    <th>{{ $item->uraian ?? null }}</th>
                                    <th>{{ number_format($item->anggaran) ?? null }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                
                                @foreach($item->item_pekerjaan as $item_pekerjaan)
                                <tr>
                                    <td>{{ $item_pekerjaan->nama ?? null }}</td>
                                    <td>{{ number_format($item_pekerjaan->anggaran) ?? null }}</td>
                                    <td><a href="/admin/item_pekerjaan/{{ $item_pekerjaan->id }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                            <tfoot>
                                
                            </tfoot>
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