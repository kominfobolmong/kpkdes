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
        $kecamatans = Kecamatan::get();
        $jeniss = Jenis::get();
        $item = new Kecamatan();
        $penduduks = Penduduk::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();
        $aktas = Akta::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();
        $kias = Kia::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();
        $kks = JumlahKepalaKeluarga::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();
        $active = 'kependudukan';
        return view('home', compact(
            'kecamatans',
            'jeniss',
            'item',
            'penduduks',
            'aktas',
            'kias',
            'kks',
            'active'
        ));
    }

    public function kependudukan(Request $request)
    {
        $kecamatans = Kecamatan::get();
        $jeniss = Jenis::get();
        if ($request->slug) {
            $item = Kecamatan::where('slug', $request->slug)
                ->first();
        } else {
            $item = new Kecamatan();
        }

        $active = 'kependudukan';
        $penduduks = Penduduk::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();
        $aktas = Akta::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();
        $kias = Kia::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();
        $kks = JumlahKepalaKeluarga::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();
        return view('kependudukan', compact(
            'kecamatans',
            'jeniss',
            'penduduks',
            'aktas',
            'kias',
            'kks',
            'item',
            'active'
        ));
    }

    public function perkebunan(Request $request)
    {
        $kecamatans = Kecamatan::get();
        $jeniss = Jenis::get();
        if ($request->slug) {
            $item = Kecamatan::where('slug', $request->slug)
                ->first();
        } else {
            $item = new Kecamatan();
        }
        $perkebunans = Perkebunan::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();
        $active = 'perkebunan';
        return view('perkebunan', compact(
            'kecamatans',
            'jeniss',
            'perkebunans',
            'item',
            'active'
        ));
    }

    public function getPerkebunan(Request $request)
    {
        $items = Perkebunan::select(DB::raw(
            'jenis, sum(tanam_akhir_semester_laporan) as tanam_akhir_semester_laporan,
            sum(produksi_semester_laporan_ton) as produksi_semester_laporan_ton'
        ))->where(function ($query) use ($request) {
            return $request->id && $request->id != 0 ?
                $query->where('id_kecamatan', $request->id) : '';
        })->where(function ($query) use ($request) {
            return $request->jenis ?
                $query->where('jenis', $request->jenis) : '';
        })->groupBy('jenis')->get();
        return response()->json(['result' => $items]);
    }

    public function pertanian(Request $request)
    {
        $kecamatans = Kecamatan::get();
        $jeniss = Jenis::get();
        if ($request->slug) {
            $item = Kecamatan::where('slug', $request->slug)
                ->first();
        } else {
            $item = new Kecamatan();
        }

        $pertanians = Pertanian::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();

        $active = 'pertanian';
        return view('pertanian', compact(
            'kecamatans',
            'jeniss',
            'pertanians',
            'item',
            'active'
        ));
    }

    public function getPertanian(Request $request)
    {
        $items = Pertanian::select(DB::raw('jenis, sum(luas_tanam) as luas_tanam, sum(luas_panen) as luas_panen, sum(provitas) as provitas, sum(produksi) as produksi'))
            ->where(function ($query) use ($request) {
                return $request->id && $request->id != 0 ?
                    $query->where('id_kecamatan', $request->id) : '';
            })->where(function ($query) use ($request) {
                return $request->jenis ?
                    $query->where('jenis', $request->jenis) : '';
            })->groupBy('jenis')->get();
        return response()->json(['result' => $items]);
    }

    public function perikanan(Request $request)
    {
        $kecamatans = Kecamatan::get();
        $jeniss = Jenis::get();
        if ($request->slug) {
            $item = Kecamatan::where('slug', $request->slug)
                ->first();
        } else {
            $item = new Kecamatan();
        }
        $budidaya_ikans = BudidayaIkan::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();
        $active = 'perikanan';
        return view('perikanan', compact(
            'kecamatans',
            'jeniss',
            'budidaya_ikans',
            'item',
            'active'
        ));
    }

    public function getBudidayaIkan(Request $request)
    {
        $items = BudidayaIkan::select(DB::raw('sum(ikan_nila) as ikan_nila, sum(ikan_mas) as ikan_mas, sum(udang_vaname) as udang_vaname, sum(ikan_bandeng) as ikan_bandeng'))
            ->where(function ($query) use ($request) {
                return $request->id && $request->id != 0 ?
                    $query->where('id_kecamatan', $request->id) : '';
            })->get();
        return response()->json(['result' => $items]);
    }

    public function peternakan(Request $request)
    {
        $kecamatans = Kecamatan::get();
        $jeniss = Jenis::get();
        if ($request->slug) {
            $item = Kecamatan::where('slug', $request->slug)
                ->first();
        } else {
            $item = new Kecamatan();
        }

        $unggas = Unggas::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();
        $babis = Babi::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();
        $active = 'peternakan';
        return view('peternakan', compact(
            'kecamatans',
            'jeniss',
            'unggas',
            'babis',
            'item',
            'active'
        ));
    }

    public function getUnggas(Request $request)
    {
        $items = Unggas::select(DB::raw('sum(populasi_ayam_petelur) as populasi_ayam_petelur, sum(prod_telur_ayam_petelur) as prod_telur_ayam_petelur, sum(jlh_siap_potong_ayam_ptlr) as jlh_siap_potong_ayam_ptlr, sum(jlh_prod_daging_ayam_ptlrthn) as jlh_prod_daging_ayam_ptlrthn, sum(jumlah_itik_petelur) as jumlah_itik_petelur, sum(produksi_telur_itik) as produksi_telur_itik, sum(total_produksi_telur) as total_produksi_telur, sum(jlh_siap_potong_itik_ptlr) as jlh_siap_potong_itik_ptlr, sum(jlh_prod_daging_itik_ptlrthn) as jlh_prod_daging_itik_ptlrthn, sum(jumlah_itik_manila) as jumlah_itik_manila, sum(jlh_siap_potong_itik_manila) as jlh_siap_potong_itik_manila, sum(jlh_prod_daging_itik_manilathn) as jlh_prod_daging_itik_manilathn, sum(total_itikthn) as total_itikthn, sum(total_prod_daging_itik_manilathn) as total_prod_daging_itik_manilathn, sum(total_itik_siap_potong) as total_itik_siap_potong, sum(ayam_daging) as ayam_daging, sum(jlh_siap_potong_ayam_daging) as jlh_siap_potong_ayam_daging, sum(jlh_prod_daging_ayam_pedagingthn) as jlh_prod_daging_ayam_pedagingthn, sum(ayam_buras) as ayam_buras, sum(produksi_telur_ayam_buras) as produksi_telur_ayam_buras, sum(jlh_siap_potong_ayam_buras) as jlh_siap_potong_ayam_buras, sum(jlh_prod_daging_ayam_burasthn) as jlh_prod_daging_ayam_burasthn, sum(total_ayam) as total_ayam, sum(total_ayam_siap_potong) as total_ayam_siap_potong, sum(total_prod_daging_ayamthn) as total_prod_daging_ayamthn, sum(total_unggas_penghasil_daging) as total_unggas_penghasil_daging, sum(total_unggas_siap_potong) as total_unggas_siap_potong, sum(total_prod_daging_unggasthn) as total_prod_daging_unggasthn, sum(keb_kons_daging_thn) as keb_kons_daging_thn, sum(jlh_kons_dagingthn) as jlh_kons_dagingthn'))
            ->where(function ($query) use ($request) {
                return $request->id && $request->id != 0 ?
                    $query->where('id_kecamatan', $request->id) : '';
            })->get();
        return response()->json(['result' => $items]);
    }

    public function getBabi(Request $request)
    {
        $items = Babi::select(DB::raw('sum(jlh_prod_dagingthn) as jlh_prod_dagingthn, sum(keb_kons_dagingthn) as keb_kons_dagingthn, sum(jlh_kons_daging_thn) as jlh_kons_daging_thn'))
            ->where(function ($query) use ($request) {
                return $request->id && $request->id != 0 ?
                    $query->where('id_kecamatan', $request->id) : '';
            })->get();
        return response()->json(['result' => $items]);
    }

    public function pariwisata(Request $request)
    {
        $kecamatans = Kecamatan::get();
        $jeniss = Jenis::get();
        if ($request->slug) {
            $item = Kecamatan::where('slug', $request->slug)
                ->first();
            $pariwisatas = Pariwisata::where('id_kecamatan', $item->id)
                ->latest()
                ->paginate(8);
        } else {
            $item = new Kecamatan();
            $pariwisatas = Pariwisata::latest()->paginate(8);
        }
        $active = 'pariwisata';
        return view('pariwisata', compact('kecamatans', 'jeniss', 'item', 'active', 'pariwisatas'));
    }

    public function kesehatan(Request $request)
    {
        $kecamatans = Kecamatan::get();
        $jeniss = Jenis::get();
        if ($request->slug) {
            $item = Kecamatan::where('slug', $request->slug)
                ->first();
        } else {
            $item = new Kecamatan();
        }
        $active = 'kesehatan';

        $puskesmas = Puskesmas::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();

        $nakes = Nakes::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();

        return view('kesehatan', compact(
            'kecamatans',
            'jeniss',
            'puskesmas',
            'nakes',
            'item',
            'active'
        ));
    }

    public function pendidikan(Request $request)
    {
        $kecamatans = Kecamatan::get();
        $jeniss = Jenis::get();
        if ($request->slug) {
            $item = Kecamatan::where('slug', $request->slug)
                ->first();
        } else {
            $item = new Kecamatan();
        }
        $active = 'pendidikan';

        $sekolahs = Sekolah::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->paginate(10, ['*'], 'sekolahs');

        $pauds = Paud::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->paginate(10, ['*'], 'pauds');

        $rekapitulasi_pendidiks = RekapitulasiPendidik::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->paginate(10, ['*'], 'rekapitulasi_pendidiks');

        return view('pendidikan', compact(
            'kecamatans',
            'jeniss',
            'item',
            'active',
            'pauds',
            'sekolahs',
            'rekapitulasi_pendidiks'
        ));
    }

    public function getSekolah(Request $request)
    {
        $items = Sekolah::select(DB::raw('count(id) as jumlah'), 'jenis', 'keterangan')->where(function ($query) use ($request) {
            return $request->id ?
                $query->where('id_kecamatan', $request->id) : '';
        })->where(function ($query) use ($request) {
            return $request->jenis ?
                $query->where('jenis', $request->jenis) : '';
        })->groupBy('jenis', 'keterangan')->get();
        return response()->json(['result' => $items]);
    }

    public function perdagangan(Request $request)
    {
        $kecamatans = Kecamatan::get();
        $jeniss = Jenis::get();
        if ($request->slug) {
            $item = Kecamatan::where('slug', $request->slug)
                ->first();
        } else {
            $item = new Kecamatan();
        }
        $active = 'perdagangan';

        $panas_bumis = PanasBumi::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();

        $pasars = Pasar::where(function ($query) use ($item) {
            return $item->id ?
                $query->where('id_kecamatan', $item->id) : '';
        })->get();

        return view('perdagangan', compact(
            'kecamatans',
            'jeniss',
            'item',
            'active',
            'panas_bumis',
            'pasars'
        ));
    }

    public function getNakes(Request $request)
    {
        $items = Nakes::select(DB::raw(
            'sum(pns_dokter) as pns_dokter, sum(ptt_dokter) as ptt_dokter, sum(nsi_dokter) as nsi_dokter, sum(sukarela_dokter) as sukarela_dokter, sum(jml_dokter) as jml_dokter, sum(pns_dokter_gigi) as pns_dokter_gigi, sum(ptt_dokter_gigi) as ptt_dokter_gigi, sum(nsi_dokter_gigi) as nsi_dokter_gigi, sum(sukarela_dokter_gigi) as sukarela_dokter_gigi, sum(jml_dokter_gigi) as jml_dokter_gigi, sum(pns_perawat) as pns_perawat, sum(ptt_perawat) as ptt_perawat, sum(nsi_perawat) as nsi_perawat, sum(sukarela_perawat) as sukarela_perawat, sum(jml_perawat) as jml_perawat, sum(pns_perawat_gigi) as pns_perawat_gigi, sum(ptt_perawat_gigi) as ptt_perawat_gigi, sum(nsi_perawat_gigi) as nsi_perawat_gigi, sum(sukarela_perawat_gigi) as sukarela_perawat_gigi, sum(jml_perawat_gigi) as jml_perawat_gigi, sum(pns_bidan) as pns_bidan, sum(ptt_bidan) as ptt_bidan, sum(nsi_bidan) as nsi_bidan, sum(sukarela_bidan) as sukarela_bidan, sum(jml_bidan) as jml_bidan, sum(pns_lab) as pns_lab, sum(ptt_lab) as ptt_lab, sum(nsi_lab) as nsi_lab, sum(sukarela_lab) as sukarela_lab, sum(jml_lab) as jml_lab, sum(pns_promkes) as pns_promkes, sum(ptt_promkes) as ptt_promkes, sum(nsi_promkes) as nsi_promkes, sum(sukarela_promkes) as sukarela_promkes, sum(jml_promkes) as jml_promkes, sum(pns_kesling) as pns_kesling, sum(ptt_kesling) as ptt_kesling, sum(nsi_kesling) as nsi_kesling, sum(sukarela_kesling) as sukarela_kesling, sum(jml_kesling) as jml_kesling, sum(pns_apoteker) as pns_apoteker, sum(ptt_apoteker) as ptt_apoteker, sum(nsi_apotoker) as nsi_apotoker, sum(sukarela_apoteker) as sukarela_apoteker, sum(jml_apoteker) as jml_apoteker, sum(pns_kefarmasian) as pns_kefarmasian, sum(ptt_kefarmasian) as ptt_kefarmasian, sum(nsi_kefarmasian) as nsi_kefarmasian, sum(sukarela_kefarmasian) as sukarela_kefarmasian, sum(jml_kefarmasian) as jml_kefarmasian, sum(pns_gizi) as pns_gizi, sum(ptt_gizi) as ptt_gizi, sum(nis_gizi) as nis_gizi, sum(sukarela_gizi) as sukarela_gizi, sum(jml_gizi) as jml_gizi'
        ))->where(function ($query) use ($request) {
            return $request->id ?
                $query->where('id_kecamatan', $request->id) : '';
        })->get();
        return response()->json(['result' => $items]);
    }

    public function getPenduduk(Request $request)
    {
        $items = Penduduk::select(DB::raw(
            'sum(laki) as laki,
            sum(peremp) as peremp,
            sum(blm_kwn) as blm_kwn,
            sum(kwn) as kwn,
            sum(cr_hdp) as cr_hdp,
            sum(cr_mati) as cr_mati,
            sum(blm_sklh) as blm_sklh,
            sum(tdk_tm_sd) as tdk_tm_sd,
            sum(tm_sd) as tm_sd,
            sum(sltp) as sltp,
            sum(slta) as slta,
            sum(belum_tidak_bekerja) as belum_tidak_bekerja,
            sum(mengurus_rumah_tangga) as mengurus_rumah_tangga,
            sum(pelajar_mahasiswa) as pelajar_mahasiswa,
            sum(pensiunan) as pensiunan,
            sum(pegawai_negeri_sipil) as pegawai_negeri_sipil,
            sum(tentara_nasional_indonesia) as tentara_nasional_indonesia,
            sum(kepolisian_ri) as kepolisian_ri,
            sum(perdagangan) as perdagangan,
            sum(petani_pekebun) as petani_pekebun,
            sum(peternak) as peternak,
            sum(nelayan_perikanan) as nelayan_perikanan,
            sum(industri) as industri,
            sum(konstruksi) as konstruksi,
            sum(transportasi) as transportasi,
            sum(karyawan_swasta) as karyawan_swasta,
            sum(karyawan_bumn) as karyawan_bumn,
            sum(karyawan_bumd) as karyawan_bumd,
            sum(karyawan_honorer) as karyawan_honorer'
        ))->where(function ($query) use ($request) {
            return $request->id ?
                $query->where('id_kecamatan', $request->id) : '';
        })->get();
        return response()->json(['result' => $items]);
    }

    public function getAkta(Request $request)
    {
        $items = Akta::select(DB::raw('sum(jumlah_anak_memiliki_akta) as jumlah_anak_memiliki_akta, sum(jumlah_anak_belum_memiliki_akta) as jumlah_anak_belum_memiliki_akta'))
            ->where(function ($query) use ($request) {
                return $request->id ?
                    $query->where('id_kecamatan', $request->id) : '';
            })->get();
        return response()->json(['result' => $items]);
    }

    public function getKelompokUmur(Request $request)
    {
        $items = KelompokUmur::select(DB::raw('sum(l_00_04) as l_00_04, sum(p_00_04) as p_00_04, sum(jlh_00_04) as jlh_00_04, sum(l_05_09) as l_05_09, sum(p_05_09) as p_05_09, sum(jlh_05_09) as jlh_05_09, sum(l10_14) as l10_14, sum(p10_14) as p10_14, sum(jlh_10_14) as jlh_10_14, sum(l_15_19) as l_15_19, sum(p_15_19) as p_15_19, sum(jlh_15_19) as jlh_15_19, sum(l_20_24) as l_20_24, sum(p_20_24) as p_20_24, sum(jlh_20_24) as jlh_20_24, sum(l_25_29) as l_25_29, sum(p_25_29) as p_25_29, sum(jlh_25_29) as jlh_25_29, sum(l_30_34) as l_30_34, sum(p_30_34) as p_30_34, sum(jlh_30_34) as jlh_30_34, sum(l_35_39) as l_35_39, sum(p_35_39) as p_35_39, sum(jlh_35_39) as jlh_35_39, sum(l_40_44) as l_40_44, sum(p_40_44) as p_40_44, sum(jlh_40_44) as jlh_40_44, sum(l_45_49) as l_45_49, sum(p_45_49) as p_45_49, sum(jlh_45_49) as jlh_45_49, sum(l_50_54) as l_50_54, sum(p_50_54) as p_50_54, sum(jlh_50_54) as jlh_50_54, sum(l_55_59) as l_55_59, sum(p_55_59) as p_55_59, sum(jlh_55_59) as jlh_55_59, sum(l_60_64) as l_60_64, sum(p_60_64) as p_60_64, sum(jlh_60_64) as jlh_60_64, sum(l_65_69) as l_65_69, sum(p_65_69) as p_65_69, sum(jlh_65_69) as jlh_65_69, sum(l_70_74) as l_70_74, sum(p_70_74) as p_70_74, sum(jlh_70_74) as jlh_70_74, sum(l_75_up) as l_75_up, sum(p_75_up) as p_75_up, sum(jlh_75_up) as jlh_75_up'))
            ->where(function ($query) use ($request) {
                return $request->id ?
                    $query->where('id_kecamatan', $request->id) : '';
            })->get();
        return response()->json(['result' => $items]);
    }

    public function getKepalaKeluarga(Request $request)
    {
        $items = JumlahKepalaKeluarga::select(DB::raw('sum(lk) as lk, sum(pr) as pr, sum(jumlah_penduduk) as jumlah_penduduk, sum(jumlah_kepala_keluarga) as jumlah_kepala_keluarga'))
            ->where(function ($query) use ($request) {
                return $request->id ?
                    $query->where('id_kecamatan', $request->id) : '';
            })->get();
        return response()->json(['result' => $items]);
    }

    public function getKia(Request $request)
    {
        $items = Kia::select(DB::raw('sum(wajib_kia) as wajib_kia, sum(yang_memiliki_kia) as yang_memiliki_kia'))
            ->where(function ($query) use ($request) {
                return $request->id ?
                    $query->where('id_kecamatan', $request->id) : '';
            })->get();
        return response()->json(['result' => $items]);
    }
}
