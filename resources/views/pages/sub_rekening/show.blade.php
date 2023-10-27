@extends('layouts.backend.app')
@push('addon-script')
<script>
    $(function() {
        $('#data-table').DataTable();
    });

    function delete_data(id) {

        if (confirm('Are you sure delete this  data?')) {

            $.ajax({
                url: "/admin/sub_rekening/" + id,
                type: "DELETE",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id
                },
                success: function(data) {
                    $('#data-table').DataTable().ajax.reload();
                },
                error: function(xhr, status, error) {
                    $('#data-table').DataTable().ajax.reload();
                }
            });
        }
    }
</script>
@endpush
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Rekening</h3>
                        <div class="card-tools">
                            @can('sub_rekening-create')
                            <a href="/admin/sub_rekening/create?id_rekening={{ $item->id }}" class="btn btn-primary">
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
                        <table class="table table-striped" id="data-table">
                            <thead>
                                <tr>
                                    <th>Tanggal Entri</th>
                                    <th>Kode</th>
                                    <th>Uraian</th>
                                </tr>
                                <tr class="text-bold">
                                    <td>{{ $item->created_at ?? null }}</td>
                                    <td>{{ $item->kode ?? null }}</td>
                                    <td><a href="/admin/rekening" class="text-bold text-dark">{{ $item->nama ?? null }}</a></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($item->sub_rekening as $sub_rekening)
                                <tr>
                                    <td>{{ $sub_rekening->created_at ?? null }}</td>
                                    <td>{{ $sub_rekening->kode ?? null }}</td>
                                    <td>{{ $sub_rekening->nama ?? null }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Tanggal Entri</th>
                                    <th>Kode</th>
                                    <th>Uraian</th>
                                </tr>
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