@extends('layouts.backend.app')
@push('addon-script')
<script>
    $(function() {
        $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: '/admin/realisasi_anggaran/get_data',
            columns: [{
                    data: 'id',
                    name: 'realisasi_anggaran.id',
                    visible: false
                },
                {
                    data: 'created_at',
                    name: 'realisasi_anggaran.created_at'
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
                    name: 'realisasi_anggaran.tahun'
                },
                {
                    data: 'kode',
                    name: 'realisasi_anggaran.kode'
                },
                {
                    data: 'uraian',
                    name: 'realisasi_anggaran.uraian'
                },
                {
                    data: 'anggaran',
                    name: 'realisasi_anggaran.anggaran'
                },
                {
                    data: 'realisasi',
                    name: 'realisasi_anggaran.realisasi'
                },
                {
                    data: 'lebih_kurang',
                    name: 'realisasi_anggaran.lebih_kurang'
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
                url: "/admin/realisasi_anggaran/" + id,
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
                        <h3 class="card-title">REALISASI ANGGARAN</h3>
                        <div class="card-tools">
                            @can('realisasi_anggaran-create')
                            <a href="{{ route('realisasi_anggaran.create') }}" class="btn btn-primary">
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
                                    <th>Desa/Kelurahan</th>
                                    <th>Tahun</th>
                                    <th>Kode</th>
                                    <th>Uraian</th>
                                    <th>Anggaran</th>
                                    <th>Realisasi</th>
                                    <th>Kurang/Lebih</th>
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
                                    <th>Kode</th>
                                    <th>Uraian</th>
                                    <th>Anggaran</th>
                                    <th>Realisasi</th>
                                    <th>Kurang/Lebih</th>
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
