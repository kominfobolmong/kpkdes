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

        $(document).on('change', '[name=id_apbd_rekening]', function() {
            var val = $(this).val();

            $.ajax({
                url: '/admin/item_pekerjaan/get_list_item_pekerjaan/' + val,
                type: "GET",
                dataType: "text",
                success: function(response) {
                    $("[name=id_item_pekerjaan]").html(response);
                }
            });

        });

        $(document).on('change', '[name=id_desa]', function() {
            var val = $(this).val();
            var tahun = $('[name=tahun]').val();

            $.ajax({
                url: '/admin/apbd_rekening/get_apbd_rekening/' + val + '/' + tahun,
                type: "GET",
                dataType: "text",
                success: function(response) {
                    $("[name=id_apbd_rekening]").html(response);
                }
            });

            $.ajax({
                url: '/admin/penduduk/get_penduduk/' + val,
                type: "GET",
                dataType: "text",
                success: function(response) {
                    $("[name=id_penduduk]").html(response);
                }
            });

        });

        $('.create').click(function(e) {
            e.preventDefault();
            // alert('ok');
            $('.error-mesage').html("");
            $.ajax({
                url: "{{ route('tenaga_kerja.store') }}/",
                type: "POST",
                data: $('#form').serialize(),
                dataType: "json",
                success: function(response) {
                    if (response.status) {
                        alert('Sukses')
                        // window.location.href = '/admin/invoice/' + id_invoice + '/print';
                    } else {
                        for (var key in response.error) {
                            $('.error-mesage').append(response.error[key] + "<br />");
                        }
                        if (response.message) {
                            $('.error-mesage').append(response.message + "<br />");
                        }

                    }
                },
                error: function(response_error) {
                    console.log(response_error);
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
                        <h3 class="card-title">Tenaga Kerja PKT</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('tenaga_kerja.store') }}" id="form" enctype="multipart/form-data">
                        @csrf
                        @include('pages.tenaga_kerja.partials.form-control')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection