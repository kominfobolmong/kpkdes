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
                    <form method="post" action="{{ route('apbd_rekening.store') }}" enctype="multipart/form-data">
                        @csrf
                        @include('pages.apbd_rekening.partials.form-control')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection