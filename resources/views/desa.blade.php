@extends('layouts.frontend.app')
@push('addon-style')
    <link rel="stylesheet" href="/template/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/template/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/template/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    
@endpush
@push('addon-script')
<!-- DataTables  & Plugins -->
<script src="/template/backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/template/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/template/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/template/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/template/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/template/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/template/backend/plugins/jszip/jszip.min.js"></script>
<script src="/template/backend/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/template/backend/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/template/backend/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/template/backend/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/template/backend/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
    $(function() {
        $('#data-table').DataTable();
    });
</script>
@endpush
@section('content')
<section class="bg-secondary pt-4 pb-4">
    <div class="container">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="row">
            <div class="col text-sm">
                <a data-id="0" href="/desa" class="btn {{ $item->id ? 'btn-outline-info' : 'btn-info' }} text-white mb-2 mr-2">Semua</a>
                @foreach($kecamatans as $kecamatan)
                <a href="/desa/{{ $kecamatan->id }}" class="btn {{ $item->id == $kecamatan->id ? 'btn-info' : 'btn-outline-info' }} text-white mb-2 mr-2">{{ $kecamatan->nama ?? null }}</a>
                @endforeach
            </div>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="row">
            <div class="col">
                
            </div>
            
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center h4 text-uppercase mb-4 mt-4">Daftar Desa/Kelurahan</h1>
                <table class="table" id="data-table">
                    <thead>
                        <tr>
                            <th>Kecamatan</th>
                            <th>Desa</th>
                            <th>PKT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->kecamatan->nama ?? null }}</td>
                            <td>{{ $item->nama ?? null }}</td>
                            <td>{{ $item->pkt($tahun) ?? 0 }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</section>
@endsection