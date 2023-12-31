@extends('layouts.backend.app')
@push('addon-script')
<script>
    $(function() {
        $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: '/admin/item_pekerjaan/get_data/',
            columns: [{
                    data: 'id',
                    name: 'item_pekerjaan.id',
                    visible: false
                },
                {
                    data: 'created_at',
                    name: 'item_pekerjaan.created_at'
                },
                {
                    data: 'kecamatan',
                    name: 'kecamatan.nama'
                },
                {
                    data: 'desa',
                    name: 'desa.nama'
                },
                {
                    data: 'kode',
                    name: 'apbd_rekening.kode'
                },
                {
                    data: 'uraian',
                    name: 'apbd_rekening.uraian'
                },
                {
                    data: 'nama',
                    name: 'item_pekerjaan.nama'
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
                url: "/admin/item_pekerjaan/" + id,
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
                        <h3 class="card-title">Item Pekerjaan</h3>
                        <div class="card-tools">
                            @can('item_pekerjaan-create')
                            <a href="{{ route('item_pekerjaan.create') }}" class="btn btn-primary">
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
                                    <th>Kecamatan</th>
                                    <th>Desa</th>
                                    <th>Kode</th>
                                    <th>Uraian</th>
                                    <th>Item Pekerjaan</th>
                                    <th>--</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Entri</th>
                                    <th>Kecamatan</th>
                                    <th>Desa</th>
                                    <th>Kode</th>
                                    <th>Uraian</th>
                                    <th>Item Pekerjaan</th>
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