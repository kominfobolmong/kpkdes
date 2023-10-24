<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ApbdRekeningRequest;
use App\Models\ApbdRekening;
use App\Models\Rekening;
use App\Models\Desa;
use App\Models\SumberDana;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ApbdRekeningController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:apbd_rekening-list|apbd_rekening-create|apbd_rekening-edit|apbd_rekening-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:apbd_rekening-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:apbd_rekening-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:apbd_rekening-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.apbd_rekening.index');
    }

    public function getData()
    {
        $items = ApbdRekening::select(['apbd_rekening.*', 'rekening.kode', 'rekening.nama as rekening', 'desa.nama as desa', 'sumber_dana.nama as sumber_dana'])
            ->join('rekening', 'apbd_rekening.id_rekening', '=', 'rekening.id')
            ->join('desa', 'apbd_rekening.id_desa', '=', 'desa.id')
            ->join('sumber_dana', 'apbd_rekening.id_sumber_dana', '=', 'sumber_dana.id')
            ->orderBy('apbd_rekening.id', 'desc');

        return DataTables::of($items)
            ->addColumn('action', function ($row) {
                // $btn = '<button disabled class="btn btn-outline-dark">--</button>';
                $btn = '<a href="/admin/abpd_rekening/' . $row->id . '/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a> <a href="javascript:void(0)" title="Hapus" onclick="delete_data(' . "'" . $row->id . "'" . ')" class="btn btn-danger"><i class="fas fa-trash"></i></a>';
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
        $item = new ApbdRekening();
        $rekenings = Rekening::get();
        $desas = Desa::get();
        $sumber_danas = SumberDana::get();
        return view('pages.apbd_rekening.create', compact('item', 'rekenings', 'desas', 'sumber_danas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApbdRekeningRequest $request)
    {
        $data = $request->all();
        ApbdRekening::create($data);
        session()->flash('success', 'Item was created.');
        return redirect()->route('apbd_rekening.create');
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
        $item = ApbdRekening::findOrFail($id);
        $rekenings = Rekening::get();
        $desas = Desa::get();
        $sumber_danas = SumberDana::get();
        return view('pages.apbd_rekening.edit', compact('item', 'rekenings', 'desa', 'sumber_danas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ApbdRekeningRequest $request, $id)
    {
        $data = $request->all();
        $item = ApbdRekening::findOrFail($id);
        $item->update($data);
        session()->flash('success', 'Item was updated.');
        return redirect()->route('apbd_rekening.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ApbdRekening::findOrFail($id);
        $item->delete();
        return response()->json(['success' => 'Item was deleted successfully']);
    }
}
