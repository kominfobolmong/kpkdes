@extends('layouts.backend.app')
@push('addon-script')
<script>
    $(function() {
        $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: '/admin/tenaga_kerja/get_data',
            columns: [{
                    data: 'id',
                    name: 'tenaga_kerja.id',
                    visible: false
                },
                {
                    data: 'created_at',
                    name: 'tenaga_kerja.created_at'
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
                    data: 'tahun',
                    name: 'apbd_rekening.tahun'
                },
                {
                    data: 'item_pekerjaan',
                    name: 'item_pekerjaan.nama'
                },
                {
                    data: 'penduduk',
                    name: 'penduduk.nama'
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
                url: "/admin/tenaga_kerja/" + id,
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
                        <h3 class="card-title">Tenaga Kerja</h3>
                        <div class="card-tools">
                            @can('tenaga_kerja-create')
                            <a href="{{ route('tenaga_kerja.create') }}" class="btn btn-primary">
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
                        <div class="table-responsive">
                            <table class="table table-striped" id="data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Entri</th>
                                        <th>Kecamatan</th>
                                        <th>Desa/Kelurahan</th>
                                        <th>Tahun</th>
                                        <th>Uraian</th>
                                        <th>Tenaga Kerja</th>
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
                                        <th>Desa/Kelurahan</th>
                                        <th>Tahun</th>
                                        <th>Uraian</th>
                                        <th>Tenaga Kerja</th>
                                        <th>--</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
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