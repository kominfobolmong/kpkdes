<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hubungan;
use Carbon\Carbon;
use App\Http\Requests\Admin\HubunganRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class HubunganController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:hubungan-list|hubungan-create|hubungan-edit|hubungan-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:hubungan-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:hubungan-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:hubungan-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.hubungan.index');
    }

    public function getData()
    {

        $items = Hubungan::select(['hubungan.*'])
            ->orderBy('hubungan.id', 'desc');

        return DataTables::of($items)
            ->addColumn('action', function ($row) {
                $btn = '';
                $btn .= '<a href="/admin/hubungan/' . $row->id . '/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a> ';
                $btn .= '<a href="javascript:void(0)" title="Hapus" onclick="delete_data(' . "'" . $row->id . "'" . ')" class="btn btn-danger"><i class="fas fa-trash"></i></a>';
                return $btn;
            })
            ->editColumn('created_at', function ($row) {
                return $row->created_at ? with(new Carbon($row->created_at))->format('m/d/Y') : '';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        $item = new Hubungan();
        return view('pages.hubungan.create', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HubunganRequest $request)
    {
        $data = $request->all();
        Hubungan::create($data);
        session()->flash('success', 'Item was created.');
        return redirect()->route('hubungan.create');
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
        $item = Hubungan::findOrFail($id);
        return view('pages.hubungan.edit', compact('item', 'kecamatans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HubunganRequest $request, $id)
    {
        $data = $request->all();
        $item = Hubungan::findOrFail($id);
        $item->update($data);
        session()->flash('success', 'Item was updated.');
        return redirect()->route('hubungan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Hubungan::findOrFail($id);
        $item->delete();
        return response()->json(['success' => 'Item was deleted successfully']);
    }
}
