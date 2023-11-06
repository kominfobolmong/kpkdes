@extends('layouts.backend.app')
@push('addon-script')
<!-- bs-custom-file-input -->
<script src="/template/backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
    $(function() {
        bsCustomFileInput.init();
        $('.select2').select2();
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        });

        var id_desa = '{{ $item->id_desa ?? null }}';
        // alert(id_desa);
        var id_kecamatan = '{{ $item->desa->id_kecamatan ?? null }}';
        var id_kabupaten = '{{ $item->desa->kecamatan->id_kabupaten ?? null }}';
        $('[name=id_kabupaten]').val(id_kabupaten).change();

        if (id_kabupaten != null) {
            $.ajax({
                url: '/admin/kecamatan/get_list_kecamatan/' + id_kabupaten,
                type: "GET",
                dataType: "text",
                success: function(response) {
                    $("[name=id_kecamatan]").html(response);
                    $('[name=id_kecamatan]').val(id_kecamatan).change();
                    // $("[name=id_kecamatan]").val(id_kecamatan);
                }
            });
        }

        if (id_kecamatan != null) {
            $.ajax({
                url: '/admin/desa/get_list_desa/' + id_kecamatan,
                type: "GET",
                dataType: "text",
                success: function(response) {
                    $("[name=id_desa]").html(response);
                    $('[name=id_desa]').val(id_desa).change();
                }
            });
        }

        

        $(document).on('change', '[name=id_kabupaten]', function() {
            var val = $(this).val();

            $.ajax({
                url: '/admin/kecamatan/get_list_kecamatan/' + val,
                type: "GET",
                dataType: "text",
                success: function(response) {
                    $("[name=id_kecamatan]").html(response);
                }
            });

        });

        $(document).on('change', '[name=id_kecamatan]', function() {
            var val = $(this).val();

            $.ajax({
                url: '/admin/desa/get_list_desa/' + val,
                type: "GET",
                dataType: "text",
                success: function(response) {
                    $("[name=id_desa]").html(response);
                }
            });
        });
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
                        <h3 class="card-title">Change Penduduk</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('penduduk.update', $item->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        @include('pages.penduduk.partials.form-control', ['submit' => 'Update'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection