<?php

namespace App\Http\Controllers;

use App\Models\Akta;
use App\Models\Babi;
use App\Models\BudidayaIkan;
use App\Models\Daging;
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
        // $kecamatans = Kecamatan::get();
        // $jeniss = Jenis::get();
        // $item = new Kecamatan();
        // $penduduks = Penduduk::where(function ($query) use ($item) {
        //     return $item->id ?
        //         $query->where('id_kecamatan', $item->id) : '';
        // })->get();
        // $aktas = Akta::where(function ($query) use ($item) {
        //     return $item->id ?
        //         $query->where('id_kecamatan', $item->id) : '';
        // })->get();
        // $kias = Kia::where(function ($query) use ($item) {
        //     return $item->id ?
        //         $query->where('id_kecamatan', $item->id) : '';
        // })->get();
        // $kks = JumlahKepalaKeluarga::where(function ($query) use ($item) {
        //     return $item->id ?
        //         $query->where('id_kecamatan', $item->id) : '';
        // })->get();
        // $active = 'kependudukan';
        // return view('home', compact(
        //     'kecamatans',
        //     'jeniss',
        //     'item',
        //     'penduduks',
        //     'aktas',
        //     'kias',
        //     'kks',
        //     'active'
        // ));
    }
}
