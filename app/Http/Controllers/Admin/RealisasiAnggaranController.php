<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ApbdRekeningRequest;
use App\Http\Requests\Admin\RealisasiAnggaranRequest;
use App\Models\ApbdRekening;
use App\Models\Bidang;
use App\Models\Rekening;
use App\Models\Desa;
use App\Models\Kabupaten;
use App\Models\RealisasiAnggaran;
use App\Models\SumberDana;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class RealisasiAnggaranController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:realisasi_anggaran-list|realisasi_anggaran-create|realisasi_anggaran-edit|realisasi_anggaran-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:realisasi_anggaran-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:realisasi_anggaran-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:realisasi_anggaran-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.realisasi_anggaran.index');
    }

    public function getData()
    {

        if (auth()->user()->hasRole(['Admin'])) {
            $items = RealisasiAnggaran::select(['realisasi_anggaran.*', 'kecamatan.nama as kecamatan', 'desa.nama as desa', 'sumber_dana.nama as sumber_dana'])
                ->join('desa', 'realisasi_anggaran.id_desa', '=', 'desa.id')
                ->join('kecamatan', 'desa.id_kecamatan', '=', 'kecamatan.id')
                ->join('sumber_dana', 'realisasi_anggaran.id_sumber_dana', '=', 'sumber_dana.id')
                ->orderBy('realisasi_anggaran.id', 'desc');
        } else {
            $items = RealisasiAnggaran::select(['realisasi_anggaran.*', 'kecamatan.nama as kecamatan', 'desa.nama as desa', 'sumber_dana.nama as sumber_dana'])
                ->join('desa', 'realisasi_anggaran.id_desa', '=', 'desa.id')
                ->join('kecamatan', 'desa.id_kecamatan', '=', 'kecamatan.id')
                ->join('sumber_dana', 'realisasi_anggaran.id_sumber_dana', '=', 'sumber_dana.id')
                ->where('realisasi_anggaran.id_desa', auth()->user()->desa[0]->id)
                ->orderBy('realisasi_anggaran.id', 'desc');
        }


        return DataTables::of($items)
            ->addColumn('action', function ($row) {
                $btn = '';
                auth()->user()->can(['realisasi_anggaran-edit']) ? $btn .= '<a href="/admin/realisasi_anggaran/' . $row->id . '/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a> ' : '';
                auth()->user()->can(['realisasi_anggaran-delete']) ? $btn .= '<a href="javascript:void(0)" title="Hapus" onclick="delete_data(' . "'" . $row->id . "'" . ')" class="btn btn-danger"><i class="fas fa-trash"></i></a>' : '';
                return $btn;
            })
            ->editColumn('created_at', function ($row) {
                return $row->created_at ? with(new Carbon($row->created_at))->format('m/d/Y') : '';
            })
            // ->editColumn('uraian', function ($row) {
            //     return $row->uraian ? '<a href="/admin/item_pekerjaan/' . $row->id . '" class="text-bold text-dark">' . Str::limit($row->uraian, 20) . '</a>' : '';
            // })

            ->editColumn('anggaran', function ($row) {
                return $row->anggaran ? number_format($row->anggaran) : '';
            })
            ->editColumn('realisasi', function ($row) {
                return $row->realisasi ? number_format($row->realisasi) : '';
            })
            ->editColumn('lebih_kurang', function ($row) {
                return $row->lebih_kurang ? number_format($row->lebih_kurang) : '';
            })
            // ->rawColumns(['action', 'uraian'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new RealisasiAnggaran();
        $kabupatens = Kabupaten::get();
        $sumber_danas = SumberDana::get();
        return view('pages.realisasi_anggaran.create', compact('item', 'kabupatens', 'sumber_danas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RealisasiAnggaranRequest $request)
    {
        $data = $request->all();
        RealisasiAnggaran::create($data);
        session()->flash('success', 'Item was created.');
        return redirect()->route('realisasi_anggaran.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $item = RealisasiAnggaran::findOrFail($id);
        $kabupatens = Kabupaten::get();
        $sumber_danas = SumberDana::get();
        return view('pages.realisasi_anggaran.edit', compact('item', 'kabupatens', 'sumber_danas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RealisasiAnggaranRequest $request, $id)
    {
        $data = $request->all();
        $item = RealisasiAnggaran::findOrFail($id);
        $item->update($data);
        session()->flash('success', 'Item was updated.');
        return redirect()->route('realisasi_anggaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = RealisasiAnggaran::findOrFail($id);
        $item->delete();
        return response()->json(['success' => 'Item was deleted successfully']);
    }

    // public function getApbdRekening(Request $request)
    // {
    //     $items = ApbdRekening::where('id_desa', $request->id)
    //         ->where('tahun', $request->tahun)->get();
    //     $html = '<option>Choose One</option>';
    //     foreach ($items as $item) {
    //         $html .= '<option value="' . $item->id . '">' . $item->uraian . '</option>';
    //     }
    //     echo $html;
    // }
}
