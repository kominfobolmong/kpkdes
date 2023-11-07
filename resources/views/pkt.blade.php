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
                <a data-id="0" href="/pkt" class="btn {{ $item->id ? 'btn-outline-info' : 'btn-info' }} text-white mb-2 mr-2">Semua</a>
                @foreach($desas as $desa)
                <a href="/pkt/{{ $desa->id }}" class="btn {{ $item->id == $desa->id ? 'btn-info' : 'btn-outline-info' }} text-white mb-2 mr-2">{{ $desa->nama ?? null }}</a>
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
                <h1 class="text-center h4 text-uppercase mb-4 mt-4">Padat Karya Tunai</h1>
                <table class="table" id="data-table">
                    <thead>
                        <tr>
                            <th>Kecamatan</th>
                            <th>Desa</th>
                            <th>Item Pekerjaan</th>
                            <th>Anggaran</th>
                            <th>Target<br />Tenaga Kerja</th>
                            <th>Realisasi<br />Tenaga Kerja</th>
                            <th>Prosentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->desa->kecamatan->nama ?? null }}</td>
                            <td>{{ $item->desa->nama ?? null }}</td>
                            <td>{{ $item->nama ?? null }}</td>
                            <td>{{ number_format($item->anggaran) ?? null }}</td>
                            <td>{{ $item->target ?? null }}</td>
                            <td>{{ $item->tenaga_kerja->count() ?? null }}</td>
                            <td>{{ (($item->tenaga_kerja->count()/$item->target)*0.1) }}%</td>
                        </tr>
                    @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</section>
@endsection