<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RekeningRequest;
use App\Models\Rekening;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class rekeningController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:rekening-list|rekening-create|rekening-edit|rekening-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:rekening-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:rekening-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:rekening-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.rekening.index');
    }

    public function getData()
    {

        $items = rekening::select(['rekening.*'])
            ->orderBy('rekening.id', 'desc');

        return DataTables::of($items)
            ->addColumn('action', function ($row) {
                $btn = '<a href="/admin/rekening/' . $row->id . '/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a> ';
                $btn .= '<a href="javascript:void(0)" title="Hapus" onclick="delete_data(' . "'" . $row->id . "'" . ')" class="btn btn-danger"><i class="fas fa-trash"></i></a>';
                return $btn;
            })
            ->editColumn('nama', function ($row) {
                return $row->nama ? '<a href="/admin/sub_rekening/' . $row->id . '" class="text-dark text-bold">' . $row->nama . '</a>' : '';
            })
            ->editColumn('created_at', function ($row) {
                return $row->created_at ? with(new Carbon($row->created_at))->format('m/d/Y') : '';
            })
            ->rawColumns(['action', 'nama'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new Rekening();
        return view('pages.rekening.create', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RekeningRequest $request)
    {
        $data = $request->all();
        Rekening::create($data);
        session()->flash('success', 'Item was created.');
        return redirect()->route('rekening.create');
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
        $item = Rekening::findOrFail($id);
        return view('pages.rekening.edit', compact('item', 'kecamatans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RekeningRequest $request, $id)
    {
        $data = $request->all();
        $item = Rekening::findOrFail($id);
        $item->update($data);
        session()->flash('success', 'Item was updated.');
        return redirect()->route('rekening.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Rekening::findOrFail($id);
        $item->delete();
        return response()->json(['success' => 'Item was deleted successfully']);
    }
}
