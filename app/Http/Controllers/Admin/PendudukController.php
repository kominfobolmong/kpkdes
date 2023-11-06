<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PendudukRequest;
use App\Models\Pekerjaan;
use App\Models\Hubungan;
use App\Models\Desa;
use App\Models\Kabupaten;
use App\Models\Penduduk;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class PendudukController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:penduduk-list|penduduk-create|penduduk-edit|penduduk-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:penduduk-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:penduduk-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:penduduk-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.penduduk.index');
    }

    public function getData()
    {

        $items = Penduduk::select('penduduk.*', 'desa.nama as desa', 'kecamatan.nama as kecamatan', 'kabupaten.nama as kabupaten')
            ->join('desa', 'penduduk.id_desa', '=', 'desa.id')
            ->join('kecamatan', 'desa.id_kecamatan', '=', 'kecamatan.id')
            ->join('kabupaten', 'kecamatan.id_kabupaten', '=', 'kabupaten.id')
            ->orderBy('penduduk.id', 'desc');

        return DataTables::of($items)
            ->addColumn('action', function ($row) {
                // $btn = '';
                $btn = '<a href="/admin/penduduk/' . $row->id . '/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a> ';
                $btn .= '<a href="javascript:void(0)" title="Hapus" onclick="delete_data(' . "'" . $row->id . "'" . ')" class="btn btn-danger"><i class="fas fa-trash"></i></a>';
                return $btn;
            })
            ->editColumn('created_at', function ($row) {
                return $row->created_at ? with(new Carbon($row->created_at))->format('m/d/Y') : '';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(auth()->user()->pekerjaan()->name);
        $item = new Penduduk();
        $pekerjaans = Pekerjaan::get();
        $hubungans = Hubungan::get();
        $kabupatens = Kabupaten::get();
        return view('pages.penduduk.create', compact('item', 'pekerjaans', 'hubungans', 'kabupatens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PendudukRequest $request)
    {
        $data = $request->all();
        Penduduk::create($data);
        session()->flash('success', 'Item was created.');
        return redirect()->route('penduduk.create');
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
        $item = Penduduk::findOrFail($id);
        $pekerjaans = Pekerjaan::get();
        $hubungans = Hubungan::get();
        $kabupatens = Kabupaten::get();
        return view('pages.penduduk.edit', compact('item', 'pekerjaans', 'hubungans', 'kabupatens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PendudukRequest $request, $id)
    {
        $data = $request->all();
        $item = Penduduk::findOrFail($id);
        $item->update($data);
        session()->flash('success', 'Item was updated.');
        return redirect()->route('penduduk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Penduduk::findOrFail($id);
        $item->delete();
        return response()->json(['success' => 'Item was deleted successfully']);
    }

    public function getPenduduk($id)
    {
        $items = Penduduk::where('id_desa', $id)->get();
        $html = '<option>Choose One</option>';
        foreach ($items as $item) {
            $html .= '<option value="' . $item->id . '">' . $item->nama . '</option>';
        }
        echo $html;
    }
}
