<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SumberDanaRequest;
use App\Models\SumberDana;
use Carbon\Carbon;
use Yajra\DataTables\DataTables;

class SumberDanaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:sumber_dana-list|sumber_dana-create|sumber_dana-edit|sumber_dana-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:sumber_dana-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:sumber_dana-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:sumber_dana-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.sumber_dana.index');
    }

    public function getData()
    {
        $items = SumberDana::select(['sumber_dana.*'])
            ->orderBy('sumber_dana.id', 'desc');

        return DataTables::of($items)
            ->addColumn('action', function ($row) {
                $btn = '<a href="/admin/sumber_dana/' . $row->id . '/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a> <a href="javascript:void(0)" title="Hapus" onclick="delete_data(' . "'" . $row->id . "'" . ')" class="btn btn-danger"><i class="fas fa-trash"></i></a>';
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
        $item = new SumberDana();
        return view('pages.sumber_dana.create', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SumberDanaRequest $request)
    {
        $data = $request->all();
        SumberDana::create($data);
        session()->flash('success', 'Item was created.');
        return redirect()->route('sumber_dana.create');
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
        $item = SumberDana::findOrFail($id);
        return view('pages.sumber_dana.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SumberDanaRequest $request, $id)
    {
        $data = $request->all();
        $item = SumberDana::findOrFail($id);
        $item->update($data);
        session()->flash('success', 'Item was updated.');
        return redirect()->route('sumber_dana.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = SumberDana::findOrFail($id);
        $item->delete();
        return response()->json(['success' => 'Item was deleted successfully']);
    }
}
