@extends('layouts.backend.app')
@push('addon-script')
<script>
    $(document).ready(function() {
        var interval = setInterval(function() {
            var momentNow = moment();
            $('#date-part').html(momentNow.format('YYYY MMMM DD') + ' ' +
                momentNow.format('dddd')
                .substring(0, 3).toUpperCase());
            $('#time-part').html(momentNow.format('A hh:mm:ss'));
        }, 100);
    });
</script>
@endpush
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">KPKDES</div>
                    <div class="card-body">
Welcome {{ auth()->user()->name }}
{{-- {{  auth()->user()->desa[0]->id }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection