<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TenagaKerjaRequest;
use App\Models\TenagaKerja;
use App\Models\Desa;
use App\Models\Kabupaten;
use App\Models\Rekening;
use App\Models\SubRekening;
use App\Models\SumberDana;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;

class TenagaKerjaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:tenaga_kerja-list|tenaga_kerja-create|tenaga_kerja-edit|tenaga_kerja-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:tenaga_kerja-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:tenaga_kerja-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:tenaga_kerja-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.tenaga_kerja.index');
    }

    public function getData()
    {
        $items = TenagaKerja::select(['tenaga_kerja.*', 'item_pekerjaan.nama as item_pekerjaan', 'penduduk.nama as penduduk', 'desa.nama as desa', 'kecamatan.nama as kecamatan'])
            ->join('item_pekerjaan', 'tenaga_kerja.id_item_pekerjaan', '=', 'item_pekerjaan.id')
            ->join('desa', 'tenaga_kerja.id_desa', '=', 'desa.id')
            ->join('kecamatan', 'desa.id_kecamatan', '=', 'kecamatan.id')
            ->join('penduduk', 'tenaga_kerja.id_penduduk', '=', 'penduduk.id')
            ->orderBy('tenaga_kerja.id', 'desc');

        return DataTables::of($items)
            ->addColumn('action', function ($row) {
                $btn = '<a href="/admin/apbd_sub_rekening/' . $row->id . '/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a> <a href="javascript:void(0)" title="Hapus" onclick="delete_data(' . "'" . $row->id . "'" . ')" class="btn btn-danger"><i class="fas fa-trash"></i></a>';
                return $btn;
            })
            ->editColumn('created_at', function ($row) {
                return $row->created_at ? with(new Carbon($row->created_at))->format('d M Y') : '';
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
        $item = new TenagaKerja();
        $kabupatens = Kabupaten::get();
        return view('pages.tenaga_kerja.create', compact('item', 'kabupatens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_item_pekerjaan' => 'required|integer|exists:item_pekerjaan,id',
            'id_desa' => 'required|integer|exists:desa,id',
            'id_penduduk' => 'required|integer|exists:penduduk,id'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'error' => $validator->errors()->all()]);
        }

        $cek = TenagaKerja::where('id_item_pekerjaan', $request->id_item_pekerjaan)
            ->where('id_penduduk', $request->id_penduduk)
            ->first();

        if ($cek) {
            return response()->json(['status' => false, 'error' => ['Sudah ditambahkan sebelumnya']]);
        }

        $data = $request->all();
        TenagaKerja::create($data);
        return response()->json(['status' => true]);
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
        $item = TenagaKerja::findOrFail($id);
        $kabupatens = Kabupaten::get();
        return view('pages.tenaga_kerja.edit', compact('item', 'kabupatens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TenagaKerjaRequest $request, $id)
    {
        $data = $request->all();
        $item = TenagaKerja::findOrFail($id);
        $item->update($data);
        session()->flash('success', 'Item was updated.');
        return redirect()->route('tenaga_kerja.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TenagaKerja::findOrFail($id);
        $item->delete();
        return response()->json(['success' => 'Item was deleted successfully']);
    }
}
