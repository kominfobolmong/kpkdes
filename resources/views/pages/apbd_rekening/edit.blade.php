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
        var id_kecamatan = '{{ $item->desa->id_kecamatan ?? null }}';
        var id_kabupaten = '{{ $item->desa->kecamatan->id_kabupaten ?? null }}';
        var id_sub_bidang = '{{ $item->id_sub_bidang ?? null }}';
        var id_sumber_dana = '{{ $item->id_sumber_dana ?? null }}';
        var id_bidang = '{{ $item->sub_bidang->id_bidang ?? null }}';
        var id_sub_bidang = '{{ $item->id_sub_bidang ?? null }}';

        $('[name=id_kabupaten]').val(id_kabupaten).change();
        $('[name=id_bidang]').val(id_bidang).change();

        if (id_bidang != null) {
            $.ajax({
                url: '/admin/sub_bidang/get_list_sub_bidang/' + id_bidang,
                type: "GET",
                dataType: "text",
                success: function(response) {
                    $("[name=id_sub_bidang]").html(response);
                    $('[name=id_sub_bidang]').val(id_sub_bidang).change();
                }
            });
        }

        if (id_kabupaten != null){
            $.ajax({
                url: '/admin/kecamatan/get_list_kecamatan/' + id_kabupaten,
                type: "GET",
                dataType: "text",
                success: function(response) {
                    $("[name=id_kecamatan]").html(response);
                    $('[name=id_kecamatan]').val(id_kecamatan).change();
                }
            });
        }

        if(id_kecamatan != null) {
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

        $(document).on('change', '[name=id_bidang]', function() {
            var val = $(this).val();

            $.ajax({
                url: '/admin/sub_bidang/get_list_sub_bidang/' + val,
                type: "GET",
                dataType: "text",
                success: function(response) {
                    $("[name=id_sub_bidang]").html(response);
                }
            });

        });

        $('[name=id_desa]').val(id_desa).change();
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
                        <h3 class="card-title">APBD</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('apbd_rekening.update', $item->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        @include('pages.apbd_rekening.partials.form-control', ['submit' => 'Update'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection