<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pekerjaan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\PekerjaanRequest;
use Yajra\DataTables\DataTables;

class PekerjaanController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:pekerjaan-list|pekerjaan-create|pekerjaan-edit|pekerjaan-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:pekerjaan-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:pekerjaan-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:pekerjaan-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.pekerjaan.index');
    }

    public function getData()
    {

        $items = Pekerjaan::select([
            'pekerjaan.*'
        ])
            ->orderBy('pekerjaan.id', 'desc');

        return DataTables::of($items)
            ->addColumn('action', function ($row) {
                $btn = '';
                $btn .= '<a href="/admin/pekerjaan/' . $row->id . '/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a> ';
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
        $item = new Pekerjaan();
        return view('pages.pekerjaan.create', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PekerjaanRequest $request)
    {
        $data = $request->all();
        Pekerjaan::create($data);
        session()->flash('success', 'Item was created.');
        return redirect()->route('pekerjaan.create');
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
        $item = Pekerjaan::findOrFail($id);
        return view('pages.pekerjaan.edit', compact('item', 'kecamatans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PekerjaanRequest $request, $id)
    {
        $data = $request->all();
        $item = Pekerjaan::findOrFail($id);
        $item->update($data);
        session()->flash('success', 'Item was updated.');
        return redirect()->route('pekerjaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pekerjaan::findOrFail($id);
        $item->delete();
        return response()->json(['success' => 'Item was deleted successfully']);
    }
}
