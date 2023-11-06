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
        return view('pages.excel.create');
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
        $fillable = "'id_opd', 'id_jenis', 'id_kecamatan', 'tahun', ";
        $model = '
        \'id_opd\' => $this->id_opd,<br />
        \'id_kecamatan\' => $this->getKecamatan(trim($row[\'kdkec\'])),<br />
        \'id_jenis\' => $this->id_jenis,<br />
        \'tahun\' => $this->tahun,<br />
        \'jenis\' => $this->jenis,<br />
        ';
        $migration = '
            $table->id();<br />
            $table->foreignId(\'id_opd\');<br />
            $table->foreignId(\'id_kecamatan\');<br />
            $table->foreignId(\'id_jenis\');<br />
            $table->integer(\'tahun\');<br />
        ';
        $select = '
        \'sekolahs.id\',
        \'sekolahs.created_at\',
        \'kecamatan.nama as kecamatan\',
        \'sekolahs.tahun\',
        ';
        $columns = '';
        $th = '';
        $item = '';
        $sum = '';
        $arr = '\'id_opd\' => $this->id_opd,<br />\'id_kecamatan\' => $this->getKecamatan($row[\'\']),<br />\'id_jenis\' => $this->id_jenis,<br />\'tahun\' => $this->tahun,<br />';
        foreach ($headings[0] as $heading) {
            foreach ($heading as $h) {
                $fillable .= "'$h', ";
                $migration .= '$table->string(\'' . $h . '\')->nullable();<br />';
                $arr .= '\'' . $h . '\' => $row[\'' . $h . '\'],<br />';
                $select .= '\'sekolahs.' . $h . '\', ';
                $sum .= 'sum(' . $h . ') as ' . $h . ', ';

                $model .= '
                \'' . $h . '\' => $row[\'' . $h . '\'],<br />
                ';
                $columns .= '
                {<br />
                    data: \'' . $h . '\',<br />
                    name: \'sekolahs.' . $h . '\'<br />
                },<br />
                ';

                $th .= htmlentities('<th>' . ucwords(str_replace('_', ' ', $h)) . '</th>');
                $item .= htmlentities('<td>{{ $item->' . $h . ' ?? null }}</td>') . '<br />';
                $th .= '<br />';
            }
        }
        $migration .= '$table->timestamps();<br />';
        echo '<br />' . $fillable . '<br />';
        echo '<br /><br />' . $migration;
        echo $arr;
        echo $sum . '<br /><br />';
        echo $select . '<br /><br />';
        echo $columns . '<br />';
        echo $th . '<br />';
        echo $item . '<br />';
        echo $model . '<br />';
        // dd($request->id_jenis == "1");
        if ($data['id_jenis'] == "1") {
            // (new PendudukImport($data['id_opd'], $data['id_jenis'], $data['tahun']))->import(request()->file('excel_file'));
        }
        if ($data['id_jenis'] == "2") {
            // (new KiaImport($data['id_opd'], $data['id_jenis'], $data['tahun']))->import(request()->file('excel_file'));
        }
        if ($data['id_jenis'] == "3") {
            // (new KtpImport($data['id_opd'], $data['id_jenis'], $data['tahun']))->import(request()->file('excel_file'));
        }
        if ($data['id_jenis'] == "4") {
            // (new PariwisataImport($data['id_opd'], $data['id_jenis'], $data['tahun']))->import(request()->file('excel_file'));
        }
        if ($data['id_jenis'] == "5") {
            // (new AktaImport($data['id_opd'], $data['id_jenis'], $data['tahun']))->import(request()->file('excel_file'));
        }
        if ($data['id_jenis'] == "6") {
            // (new KelompokUmurImport($data['id_opd'], $data['id_jenis'], $data['tahun']))->import(request()->file('excel_file'));
        }
        if ($data['id_jenis'] == "7") {
            // (new JumlahKepalaKeluargaImport($data['id_opd'], $data['id_jenis'], $data['tahun']))->import(request()->file('excel_file'));
        }
        if ($data['id_jenis'] == "8") {
            // (new BudidayaIkanImport($data['id_opd'], $data['id_jenis'], $data['tahun']))->import(request()->file('excel_file'));
        }
        if ($data['id_jenis'] == "9") {
            // (new PertanianImport($data['id_opd'], $data['id_jenis'], $data['tahun'], $data['jenis']))->import(request()->file('excel_file'));
        }
        if ($data['id_jenis'] == "10") {
            // (new PerkebunanImport($data['id_opd'], $data['id_jenis'], $data['tahun'], $data['jenis']))->import(request()->file('excel_file'));
        }

        if ($data['id_jenis'] == "12") {
            // (new UnggasImport($data['id_opd'], $data['id_jenis'], $data['tahun'], $data['jenis']))->import(request()->file('excel_file'));
        }

        if ($data['id_jenis'] == "14") {
            // (new BabiImport($data['id_opd'], $data['id_jenis'], $data['tahun'], $data['jenis']))->import(request()->file('excel_file'));
        }

        if ($data['id_jenis'] == "15") {
            // (new DagingImport($data['id_opd'], $data['id_jenis'], $data['tahun'], $data['jenis']))->import(request()->file('excel_file'));
        }

        if ($data['id_jenis'] == "16") {
            // (new PuskesmasImport($data['id_opd'], $data['id_jenis'], $data['tahun'], $data['jenis']))->import(request()->file('excel_file'));
        }

        if ($data['id_jenis'] == "17") {
            // (new NakesImport($data['id_opd'], $data['id_jenis'], $data['tahun'], $data['jenis']))->import(request()->file('excel_file'));
        }

        if ($data['id_jenis'] == "18") {
            (new SekolahImport($data['id_opd'], $data['id_jenis'], $data['tahun'], $data['jenis']))->import(request()->file('excel_file'));
        }

        if ($data['id_jenis'] == "19") {
            // (new PaudImport($data['id_opd'], $data['id_jenis'], $data['tahun'], $data['jenis']))->import(request()->file('excel_file'));
        }
        if ($data['id_jenis'] == "20") {
            (new RekapitulasiPendidikImport($data['id_opd'], $data['id_jenis'], $data['tahun'], $data['jenis']))->import(request()->file('excel_file'));
        }

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
