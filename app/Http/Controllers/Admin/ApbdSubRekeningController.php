<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ApbdSubRekeningRequest;
use App\Models\ApbdSubRekening;
use App\Models\Desa;
use App\Models\Rekening;
use App\Models\SubRekening;
use App\Models\SumberDana;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ApbdSubRekeningController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:abpd_sub_rekening-list|abpd_sub_rekening-create|abpd_sub_rekening-edit|abpd_sub_rekening-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:abpd_sub_rekening-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:abpd_sub_rekening-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:abpd_sub_rekening-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.apbd_sub_rekening.index');
    }

    public function getData()
    {
        $items = ApbdSubRekening::select(['apbd_sub_rekening.*', 'rekening.nama as rekening', 'sub_rekening.nama as sub_rekening', 'desa.nama as desa', 'sumber_dana.nama as sumber_dana'])
            ->join('sub_rekening', 'apbd_sub_rekening.id_sub_rekening', '=', 'sub_rekening.id')
            ->join('desa', 'apbd_sub_rekening.id_desa', '=', 'desa.id')
            ->join('sumber_dana', 'apbd_sub_rekening.id_sumber_dana', '=', 'sumber_dana.id')
            ->orderBy('apbd_sub_rekening.id', 'desc');

        return DataTables::of($items)
            ->addColumn('action', function ($row) {
                $btn = '<a href="/admin/apbd_sub_rekening/' . $row->id . '/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a> <a href="javascript:void(0)" title="Hapus" onclick="delete_data(' . "'" . $row->id . "'" . ')" class="btn btn-danger"><i class="fas fa-trash"></i></a>';
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
        $item = new ApbdSubRekening();
        $rekenings = Rekening::get();
        $desas = Desa::get();
        $sumber_danas = SumberDana::get();
        return view('pages.apbd_sub_rekening.create', compact('item', 'rekenings', 'desas', 'sumber_danas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApbdSubRekeningRequest $request)
    {
        $data = $request->all();
        ApbdSubRekening::create($data);
        session()->flash('success', 'Item was created.');
        return redirect()->route('apbd_sub_rekening.create');
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
        $item = ApbdSubRekening::findOrFail($id);
        $rekenings = Rekening::get();
        $desas = Desa::get();
        $sumber_danas = SumberDana::get();
        return view('pages.apbd_sub_rekening.edit', compact('item', 'rekenings', 'desas', 'sumber_danas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ApbdSubRekeningRequest $request, $id)
    {
        $data = $request->all();
        $item = ApbdSubRekening::findOrFail($id);
        $item->update($data);
        session()->flash('success', 'Item was updated.');
        return redirect()->route('apbd_sub_rekening.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ApbdSubRekening::findOrFail($id);
        $item->delete();
        return response()->json(['success' => 'Item was deleted successfully']);
    }
}
