@extends('layouts.backend.app')
@push('addon-script')
<script>
    $(function() {
        $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: '/admin/hubungan/get_data',
            columns: [{
                    data: 'id',
                    name: 'hubungan.id',
                    visible: false
                },
                {
                    data: 'created_at',
                    name: 'hubungan.created_at'
                },
                {
                    data: 'nama',
                    name: 'hubungan.nama'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });
    });

    function delete_data(id) {

        if (confirm('Are you sure delete this  data?')) {

            $.ajax({
                url: "/admin/hubungan/" + id,
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
                        <h3 class="card-title">Hubungan</h3>
                        <div class="card-tools">
                            @can('hubungan-create')
                            <a href="{{ route('hubungan.create') }}" class="btn btn-primary">
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
                                    <th>No</th>
                                    <th>Tanggal Entri</th>
                                    <th>Hubungan</th>
                                    <th>--</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Entri</th>
                                    <th>Hubungan</th>
                                    <th>--</th>
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