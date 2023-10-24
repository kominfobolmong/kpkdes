<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bidang;
use App\Models\Desa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BidangController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:bidang-list|bidang-create|bidang-edit|bidang-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:bidang-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:bidang-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:bidang-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.bidang.index');
    }

    public function getData()
    {

        $items = Bidang::select(['bidang.*', 'desa.nama as desa'])
            ->join('desa', 'bidang.id_desa', '=', 'desa.id')
            ->orderBy('bidang.id', 'desc');

        return DataTables::of($items)
            ->addColumn('action', function ($row) {
                $btn = '';
                $btn .= '<a href="/admin/bidang/' . $row->id . '/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a> ';
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
        $item = new Bidang();
        $desas = Desa::get();
        return view('pages.bidang.create', compact('item', 'desas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Bidang::create($data);
        session()->flash('success', 'Item was created.');
        return redirect()->route('bidang.create');
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
        $item = Bidang::findOrFail($id);
        $desas = Desa::get();
        return view('pages.bidang.edit', compact('item', 'desas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Bidang::findOrFail($id);
        $item->update($data);
        session()->flash('success', 'Item was updated.');
        return redirect()->route('bidang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Bidang::findOrFail($id);
        $item->delete();
        return response()->json(['success' => 'Item was deleted successfully']);
    }
}
