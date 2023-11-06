<?php

namespace App\Http\Controllers;

use App\Models\Akta;
use App\Models\Babi;
use App\Models\BudidayaIkan;
use App\Models\Daging;
use App\Models\Desa;
use App\Models\ItemPekerjaan;
use App\Models\Jenis;
use App\Models\JumlahKepalaKeluarga;
use App\Models\Kecamatan;
use App\Models\KelompokUmur;
use App\Models\Kia;
use App\Models\Nakes;
use App\Models\PanasBumi;
use App\Models\Pariwisata;
use App\Models\Pasar;
use App\Models\Paud;
use App\Models\Penduduk;
use App\Models\Perkebunan;
use App\Models\Pertanian;
use App\Models\Puskesmas;
use App\Models\RekapitulasiPendidik;
use App\Models\Sekolah;
use App\Models\Unggas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        return view('home');
    }

    public function pkt(Request $request)
    {

        $desas = Desa::all();
        $item = new Desa();
        if (request('id')) {
            $item = Desa::findOrFail(request('id'));
            $items = ItemPekerjaan::where('id_desa', request('id'))->get();
        } else {
            $items = ItemPekerjaan::get();
        }
        return view('pkt', compact('items', 'desas', 'item'));
    }

    public function desa(Request $request)
    {
        $kecamatans = Kecamatan::all();
        $item = new Kecamatan();
        if (request('id')) {
            $item = Kecamatan::findOrFail(request('id'));
            $items = Desa::where('id_kecamatan', request('id'))->get();
        } else {
            $items = Desa::get();
        }
        $tahun = "";
        if (request('tahun')) {
            $tahun = request('tahun');
        }
        return view('desa', compact('items', 'kecamatans', 'item', 'tahun'));
    }
}
