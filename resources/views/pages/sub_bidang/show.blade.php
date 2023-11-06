@extends('layouts.backend.app')
@push('addon-script')
<script>
    $(function() {
        $('#data-table').DataTable();
    });

    function delete_data(id) {

        if (confirm('Are you sure delete this  data?')) {

            $.ajax({
                url: "/admin/sub_bidang/" + id,
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
                        <h3 class="card-title">Sub Bidang</h3>
                        <div class="card-tools">
                            @can('sub_bidang-create')
                            <a href="/admin/sub_bidang/create?id_bidang={{ $item->id }}" class="btn btn-primary">
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
                                    <th>Kode</th>
                                    <th>Bidang/Sub bidang</th>
                                    <th></th>
                                </tr>
                                <tr class="text-bold">
                                    <td>{{ $item->kode?? null }}</td>
                                    <td><a href="/admin/bidang" class="text-dark">{{ $item->nama ?? null }}</a></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($item->sub_bidang as $sub_bidang)
                                <tr>
                                    <td>{{ $sub_bidang->kode ?? null }}</td>
                                    <td>{{ $sub_bidang->nama ?? null }}</td>
                                    <th><a href="/admin/sub_bidang/{{ $sub_bidang->id }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a></th>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Kode</th>
                                    <th>Bidang/Sub b idang</th>
                                    <th></th>
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