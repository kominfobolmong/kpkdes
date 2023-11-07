<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ExcelRequest;
use App\Imports\AktaImport;
use App\Imports\BabiImport;
use App\Imports\BudidayaIkanImport;
use App\Imports\JumlahKepalaKeluargaImport;
use App\Imports\KelompokUmurImport;
use App\Imports\KiaImport;
use App\Imports\KtpImport;
use App\Imports\PariwisataImport;
use App\Imports\PendudukImport;
use App\Imports\PerkebunanImport;
use App\Imports\PertanianImport;
use App\Imports\dagingsImport;
use App\Imports\DagingImport;
use App\Imports\NakesImport;
use App\Imports\sekolahsImport;
use App\Imports\PaudImport;
use App\Imports\PuskesmasImport;
use App\Imports\RekapitulasiPendidikImport;
use App\Imports\SekolahImport;
use App\Imports\UnggasImport;
use App\Models\Desa;
use App\Models\Jenis;
use App\Models\Opd;
use Illuminate\Http\Request;
use Maatwebsite\Excel\HeadingRowImport;

class ExcelController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:excel-list|excel-create|excel-edit|excel-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:excel-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:excel-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:excel-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desas = Desa::all();
        return view('pages.excel.create', compact('desas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExcelRequest $request)
    {
        $data = $request->all();
        // dd($data);

        $headings = (new HeadingRowImport())->toArray(request()->file('excel_file'));
        // dd($headings);

        (new PendudukImport($data['id_desa']))->import(request()->file('excel_file'));


        // session()->flash('success', 'Excel was imported.');
        // return redirect()->route('excel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExcelRequest $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function search()
    {
    }
}
