@extends('layouts.backend.app')
@push('addon-script')
<script>
    $(function() {
        bsCustomFileInput.init();
        $('.select2').select2();
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
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
                        <h3 class="card-title">Import Excel</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('excel.store') }}" enctype="multipart/form-data">
                        @csrf
                        @include('pages.excel.partials.form-control', ['submit' => 'Import'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection