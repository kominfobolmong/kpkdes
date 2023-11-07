<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rekening;
use App\Models\ItemPekerjaan;
use App\Http\Requests\ItemPekerjaanRequest;
use App\Models\ApbdRekening;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class ItemPekerjaanController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:item_pekerjaan-list|item_pekerjaan-create|item_pekerjaan-edit|item_pekerjaan-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:item_pekerjaan-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:item_pekerjaan-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:item_pekerjaan-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.item_pekerjaan.index');
    }

    public function getData()
    {

        auth()->user()->hasRole(['Admin']) ?
            $items = ItemPekerjaan::select([
                'item_pekerjaan.*', 'apbd_rekening.uraian', 'kecamatan.nama as kecamatan',
                'desa.nama as desa', 'apbd_rekening.kode'
            ])->join('rekening', 'item_pekerjaan.id_rekening', '=', 'rekening.id')
            ->orderBy('item_pekerjaan.id', 'desc') : $items = ItemPekerjaan::select([
                'item_pekerjaan.*', 'apbd_rekening.uraian', 'kecamatan.nama as kecamatan',
                'desa.nama as desa', 'apbd_rekening.kode'
            ])->join('rekening', 'item_pekerjaan.id_rekening', '=', 'rekening.id')
            ->where('item_pekerjaan.id_desa', auth()->user()->desa[0]->id)
            ->orderBy('item_pekerjaan.id', 'desc');

        return DataTables::of($items)
            ->addColumn('action', function ($row) {
                // $btn = '';
                $btn = '<a href="/admin/item_pekerjaan/' . $row->id . '/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a> ';
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
        $apbd_rekening = new ApbdRekening();
        if (request('id_apbd_rekening')) {
            $apbd_rekening = ApbdRekening::findOrFail(request('id_apbd_rekening'));
        }
        $item = new ItemPekerjaan();
        return view('pages.item_pekerjaan.create', compact('item', 'apbd_rekening'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemPekerjaanRequest $request)
    {
        $data = $request->all();
        ItemPekerjaan::create($data);
        session()->flash('success', 'Item was created.');
        return redirect('admin/item_pekerjaan/' . $data['id_apbd_rekening']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = ApbdRekening::findOrFail($id);
        return view('pages.item_pekerjaan.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = ItemPekerjaan::findOrFail($id);
        $apbd_rekening = ApbdRekening::findOrFail($item->id_apbd_rekening);
        return view('pages.item_pekerjaan.edit', compact('item', 'apbd_rekening'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ItemPekerjaanRequest $request, $id)
    {
        $data = $request->all();
        $item = ItemPekerjaan::findOrFail($id);
        $item->update($data);
        session()->flash('success', 'Item was updated.');
        return redirect('/admin/item_pekerjaan/' . $data['id_apbd_rekening']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ItemPekerjaan::findOrFail($id);
        $item->delete();
        return response()->json(['success' => 'Item was deleted successfully']);
    }

    public function getList($id)
    {
        $items = ItemPekerjaan::where('id_apbd_rekening', $id)->get();
        $html = '<option>Choose One</option>';
        foreach ($items as $item) {
            $html .= '<option value="' . $item->id . '">' . $item->kode . ' ' . $item->nama . '</option>';
        }
        echo $html;
    }
}
