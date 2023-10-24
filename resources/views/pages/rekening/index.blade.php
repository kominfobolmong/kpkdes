@extends('layouts.backend.app')
@push('addon-script')
<script>
    $(function() {
        $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: '/admin/rekening/get_data/',
            columns: [{
                    data: 'id',
                    name: 'rekening.id',
                    visible: false
                },
                {
                    data: 'created_at',
                    name: 'rekening.created_at'
                },
                {
                    data: 'kode',
                    name: 'rekening.kode'
                },
                {
                    data: 'uraian',
                    name: 'rekening.uraian'
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
                url: "/admin/rekening/" + id,
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
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">rekening</h3>
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
                                    <th>Tanggal</th>
                                    <th>Kecamatan</th>
                                    <th>Tahun</th>
                                    <th>0 18 Tahun</th>
                                    <th>Memiliki rekening</th>
                                    <th>Persentase Memiliki rekening</th>
                                    <th>Belum Memiliki rekening</th>
                                    <th>Persentase Belum Memiliki rekening</th>
                                    <th>--</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Kecamatan</th>
                                    <th>Tahun</th>
                                    <th>0 18 Tahun</th>
                                    <th>Memiliki rekening</th>
                                    <th>Persentase Memiliki rekening</th>
                                    <th>Belum Memiliki rekening</th>
                                    <th>Persentase Belum Memiliki rekening</th>
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