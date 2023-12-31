<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubBidang;
use App\Models\Bidang;
use Carbon\Carbon;
use App\Http\Requests\SubBidangRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SubBidangController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:sub_bidang-list|sub_bidang-create|sub_bidang-edit|sub_bidang-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:sub_bidang-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:sub_bidang-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:sub_bidang-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.sub_bidang.index');
    }

    public function getData()
    {

        $items = SubBidang::select(['sub_bidang.*', 'bidang.nama as bidang', 'desa.nama as desa'])
            ->join('bidang', 'sub_bidang.id_bidang', '=', 'bidang.id')
            ->join('desa', 'bidang.id_desa', '=', 'desa.id')
            ->orderBy('sub_bidang.id', 'desc');

        return DataTables::of($items)
            ->addColumn('action', function ($row) {
                // $btn = '';
                $btn = '<a href="/admin/sub_bidang/' . $row->id . '/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a> ';
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
        $bidang = new Bidang();
        if (request('id_bidang')) {
            $bidang = Bidang::findOrFail(request('id_bidang'));
        }
        $item = new SubBidang();
        $bidangs = Bidang::get();
        return view('pages.sub_bidang.create', compact('item', 'bidangs', 'bidang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubBidangRequest $request)
    {
        $data = $request->all();
        SubBidang::create($data);
        session()->flash('success', 'Item was created.');
        return redirect('admin/sub_bidang/' . $data['id_bidang']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Bidang::findOrFail($id);
        return view('pages.sub_bidang.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item = SubBidang::findOrFail($id);
        $bidang = Bidang::findOrFail($item->id_bidang);
        $bidangs = Bidang::get();
        return view('pages.sub_bidang.edit', compact('item', 'bidangs', 'bidang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubBidangRequest $request, $id)
    {
        $data = $request->all();
        $item = SubBidang::findOrFail($id);
        $item->update($data);
        session()->flash('success', 'Item was updated.');
        return redirect('/admin/sub_bidang/' . $item->id_bidang);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = SubBidang::findOrFail($id);
        $item->delete();
        return response()->json(['success' => 'Item was deleted successfully']);
    }

    public function getList($id)
    {
        $items = SubBidang::where('id_bidang', $id)->get();
        $html = '<option>Choose One</option>';
        foreach ($items as $item) {
            $html .= '<option value="' . $item->id . '">' . $item->kode . ' ' . $item->nama . '</option>';
        }
        echo $html;
    }
}
