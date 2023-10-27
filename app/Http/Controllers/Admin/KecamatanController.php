<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\KecamatanRequest;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Pekerjaan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class KecamatanController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:kecamatan-list|kecamatan-create|kecamatan-edit|kecamatan-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:kecamatan-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:kecamatan-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:kecamatan-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.kecamatan.index');
    }

    public function getData()
    {
        $items = Kecamatan::select(['kecamatan.*', 'kabupaten.nama as kabupaten'])
            ->leftJoin('kabupaten', 'kecamatan.id_kabupaten', '=', 'kabupaten.id');

        return DataTables::of($items)
            ->addColumn('action', function ($row) {
                $btn = '<a href="/admin/kecamatan/' . $row->id . '/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a> <a href="javascript:void(0)" title="Hapus" onclick="delete_data(' . "'" . $row->id . "'" . ')" class="btn btn-danger"><i class="fas fa-trash"></i></a>';
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
        $item = new Kecamatan();
        $kabupatens = Kabupaten::get();
        return view('pages.kecamatan.create', compact('item', 'kabupatens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KecamatanRequest $request)
    {
        $data = $request->all();
        Kecamatan::create($data);
        session()->flash('success', 'Item was created.');
        return redirect()->route('kecamatan.create');
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
        $item = Kecamatan::findOrFail($id);
        $kabupatens = Kabupaten::get();
        return view('pages.kecamatan.edit', compact('item', 'kabupatens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KecamatanRequest $request, $id)
    {
        $data = $request->all();
        $item = Kecamatan::findOrFail($id);
        $item->update($data);
        session()->flash('success', 'Item was updated.');
        return redirect()->route('kecamatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Kecamatan::findOrFail($id);
        $item->delete();
        return response()->json(['success' => 'Item was deleted successfully']);
    }
}
