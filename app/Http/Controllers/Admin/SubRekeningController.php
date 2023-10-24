<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rekening;
use App\Models\SubRekening;
use App\Http\Requests\SubRekeningRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class SubRekeningController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:sub_rekening-list|sub_rekening-create|sub_rekening-edit|sub_rekening-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:sub_rekening-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:sub_rekening-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:sub_rekening-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.sub_rekening.index');
    }

    public function getData()
    {

        $items = SubRekening::select(['sub_rekening.*', 'rekening.nama as rekening', 'rekening.kode as kode_rekening'])
            ->join('rekening', 'sub_rekening.id_rekening', '=', 'rekening.id')
            ->orderBy('sub_rekening.id', 'desc');

        return DataTables::of($items)
            ->addColumn('action', function ($row) {
                // $btn = '';
                $btn = '<a href="/admin/rekening/' . $row->id . '/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a> ';
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
        $item = new SubRekening();
        $rekenings = Rekening::get();
        return view('pages.sub_bidang.create', compact('item', 'rekenings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubRekeningRequest $request)
    {
        $data = $request->all();
        SubRekening::create($data);
        session()->flash('success', 'Item was created.');
        return redirect()->route('sub_bidang.create');
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
        $item = SubRekening::findOrFail($id);
        $rekenings = Rekening::get();
        return view('pages.sub_bidang.edit', compact('item', 'rekenings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubRekeningRequest $request, $id)
    {
        $data = $request->all();
        $item = SubRekening::findOrFail($id);
        $item->update($data);
        session()->flash('success', 'Item was updated.');
        return redirect()->route('sub_bidang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = SubRekening::findOrFail($id);
        $item->delete();
        return response()->json(['success' => 'Item was deleted successfully']);
    }
}
