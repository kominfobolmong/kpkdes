<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Desa;
use App\Models\Kecamatan;
use App\Http\Requests\Admin\DesaRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DesaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:desa-list|desa-create|desa-edit|desa-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:desa-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:desa-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:desa-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.desa.index');
    }

    public function getData()
    {

        $items = Desa::select(['desa.*', 'kecamatan.nama as kecamatan'])
            ->join('kecamatan', 'desa.id_kecamatan', '=', 'kecamatan.id')
            ->orderBy('desa.id', 'desc');

        return DataTables::of($items)
            ->addColumn('action', function ($row) {
                $btn = '';
                $btn .= '<a href="/admin/desa/' . $row->id . '/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a> ';
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
        $item = new Desa();
        $kecamatans = Kecamatan::get();
        return view('pages.desa.create', compact('item', 'kecamatans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DesaRequest $request)
    {
        $data = $request->all();
        Desa::create($data);
        session()->flash('success', 'Item was created.');
        return redirect()->route('desa.create');
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
        $item = Desa::findOrFail($id);
        $kecamatans = Kecamatan::get();
        return view('pages.desa.edit', compact('item', 'kecamatans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DesaRequest $request, $id)
    {
        $data = $request->all();
        $item = Desa::findOrFail($id);
        $item->update($data);
        session()->flash('success', 'Item was updated.');
        return redirect()->route('desa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Desa::findOrFail($id);
        $item->delete();
        return response()->json(['success' => 'Item was deleted successfully']);
    }
}
