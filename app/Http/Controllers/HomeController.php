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
use App\Models\RealisasiAnggaran;
use App\Models\RekapitulasiPendidik;
use App\Models\Sekolah;
use App\Models\TenagaKerja;
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
        $items = RealisasiAnggaran::select(['realisasi_anggaran.anggaran', 'realisasi_anggaran.realisasi', 'realisasi_anggaran.lebih_kurang', 'kecamatan.nama as kecamatan', 'desa.nama as desa'])
            ->join('desa', 'realisasi_anggaran.id_desa', '=', 'desa.id')
            ->join('kecamatan', 'desa.id_kecamatan', '=', 'kecamatan.id')
            ->orderBy('realisasi_anggaran.id', 'desc')
            ->get();

        return view('home', compact('items'));
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

    public function getGrafikPkt()
    {
        $items = ItemPekerjaan::selectRaw('desa.nama as desa, count(item_pekerjaan.id) as jml')
            ->join('desa', 'item_pekerjaan.id_desa', '=', 'desa.id')
            ->groupBy('item_pekerjaan.id_desa')
            ->get();
        return response()->json(['result' => $items]);
    }
    public function getGrafikTenagaKerja()
    {
        $items = TenagaKerja::selectRaw('desa.nama as desa, count(tenaga_kerja.id) as jml')
            ->join('desa', 'tenaga_kerja.id_desa', '=', 'desa.id')
            ->groupBy('tenaga_kerja.id_desa')
            ->get();
        return response()->json(['result' => $items]);
    }
}
