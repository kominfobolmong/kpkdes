<?php

namespace App\Imports;

use App\Models\Kecamatan;
use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Validators\Failure;

class PendudukImport implements
    ToModel,
    WithHeadingRow,
    SkipsOnFailure,
    SkipsOnError,
    WithCalculatedFormulas
{
    use Importable;

    public function __construct($id_opd, $id_jenis, $tahun)
    {
        $this->id_opd = $id_opd;
        $this->id_jenis = $id_jenis;
        $this->tahun = $tahun;
    }

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($this->id_opd);
        return new Penduduk([
            'id_opd' => $this->id_opd,
            'id_kecamatan' => $this->getKecamatan(trim($row['kdkec'])),
            'id_jenis' => $this->id_jenis,
            'tahun' => $this->tahun,
            'laki' => $row['laki'],
            'peremp' => $row['peremp'],
            'blm_kwn' => $row['blm_kwn'],
            'kwn' => $row['kwn'],
            'cr_hdp' => $row['cr_hdp'],
            'cr_mati' => $row['cr_mati'],
            'blm_sklh' => $row['blm_sklh'],
            'tdk_tm_sd' => $row['tdk_tm_sd'],
            'tm_sd' => $row['tm_sd'],
            'sltp' => $row['sltp'],
            'slta' => $row['slta'],
            'dip_ii' => $row['dip_ii'],
            'dip_iii' => $row['dip_iii'],
            'str_i' => $row['str_i'],
            'str_ii' => $row['str_ii'],
            'str_iii' => $row['str_iii'],
            'belum_tidak_bekerja' => $row['belum_tidak_bekerja'],
            'mengurus_rumah_tangga' => $row['mengurus_rumah_tangga'],
            'pelajar_mahasiswa' => $row['pelajar_mahasiswa'],
            'pensiunan' => $row['pensiunan'],
            'pegawai_negeri_sipil' => $row['pegawai_negeri_sipil'],
            'tentara_nasional_indonesia' => $row['tentara_nasional_indonesia'],
            'kepolisian_ri' => $row['kepolisian_ri'],
            'perdagangan' => $row['perdagangan'],
            'petani_pekebun' => $row['petani_pekebun'],
            'peternak' => $row['peternak'],
            'nelayan_perikanan' => $row['nelayan_perikanan'],
            'industri' => $row['industri'],
            'konstruksi' => $row['konstruksi'],
            'transportasi' => $row['transportasi'],
            'karyawan_swasta' => $row['karyawan_swasta'],
            'karyawan_bumn' => $row['karyawan_bumn'],
            'karyawan_bumd' => $row['karyawan_bumd'],
            'karyawan_honorer' => $row['karyawan_honorer'],
            'buruh_harian_lepas' => $row['buruh_harian_lepas'],
            'buruh_tani_perkebunan' => $row['buruh_tani_perkebunan'],
            'buruh_nelayan_perikanan' => $row['buruh_nelayan_perikanan'],
            'buruh_peternakan' => $row['buruh_peternakan'],
            'pembantu_rumah_tangga' => $row['pembantu_rumah_tangga'],
            'tukang_cukur' => $row['tukang_cukur'],
            'tukang_listrik' => $row['tukang_listrik'],
            'tukang_batu' => $row['tukang_batu'],
            'tukang_kayu' => $row['tukang_kayu'],
            'tukang_sol_sepatu' => $row['tukang_sol_sepatu'],
            'tukang_las_pandai_besi' => $row['tukang_las_pandai_besi'],
            'tukang_jahit' => $row['tukang_jahit'],
            'tukang_gigi' => $row['tukang_gigi'],
            'penata_rias' => $row['penata_rias'],
            'penata_busana' => $row['penata_busana'],
            'penata_rambut' => $row['penata_rambut'],
            'mekanik' => $row['mekanik'],
            'seniman' => $row['seniman'],
            'tabib' => $row['tabib'],
            'paraji' => $row['paraji'],
            'perancang_busana' => $row['perancang_busana'],
            'penterjemah' => $row['penterjemah'],
            'imam_mesjid' => $row['imam_mesjid'],
            'pendeta' => $row['pendeta'],
            'pastor' => $row['pastor'],
            'wartawan' => $row['wartawan'],
            'ustadz_mubaligh' => $row['ustadz_mubaligh'],
            'juru_masak' => $row['juru_masak'],
            'promotor_acara' => $row['promotor_acara'],
            'anggota_dpr_ri' => $row['anggota_dpr_ri'],
            'anggota_dpd' => $row['anggota_dpd'],
            'anggota_bpk' => $row['anggota_bpk'],
            'presiden' => $row['presiden'],
            'wakil_presiden' => $row['wakil_presiden'],
            'anggota_mahkamah_konstitusi' => $row['anggota_mahkamah_konstitusi'],
            'anggota_kabinet_kementerian' => $row['anggota_kabinet_kementerian'],
            'duta_besar' => $row['duta_besar'],
            'gubernur' => $row['gubernur'],
            'wakil_gubernur' => $row['wakil_gubernur'],
            'bupati' => $row['bupati'],
            'wakil_bupati' => $row['wakil_bupati'],
            'walikota' => $row['walikota'],
            'wakil_walikota' => $row['wakil_walikota'],
            'anggota_dprd_provinsi' => $row['anggota_dprd_provinsi'],
            'anggota_dprd_kabupaten_kota' => $row['anggota_dprd_kabupaten_kota'],
            'dosen' => $row['dosen'],
            'guru' => $row['guru'],
            'pilot' => $row['pilot'],
            'pengacara' => $row['pengacara'],
            'notaris' => $row['notaris'],
            'arsitek' => $row['arsitek'],
            'akuntan' => $row['akuntan'],
            'konsultan' => $row['konsultan'],
            'dokter' => $row['dokter'],
            'bidan' => $row['bidan'],
            'perawat' => $row['perawat'],
            'apoteker' => $row['apoteker'],
            'psikiater_psikolog' => $row['psikiater_psikolog'],
            'penyiar_televisi' => $row['penyiar_televisi'],
            'penyiar_radio' => $row['penyiar_radio'],
            'pelaut' => $row['pelaut'],
            'peneliti' => $row['peneliti'],
            'sopir' => $row['sopir'],
            'pialang' => $row['pialang'],
            'paranormal' => $row['paranormal'],
            'pedagang' => $row['pedagang'],
            'perangkat_desa' => $row['perangkat_desa'],
            'kepala_desa' => $row['kepala_desa'],
            'biarawati' => $row['biarawati'],
            'wiraswasta' => $row['wiraswasta'],
            'lainnya' => $row['lainnya'],
            'jml_duk' => $row['jml_duk']
        ]);
    }

    public function getKecamatan($val)
    {
        $kecamatan = Kecamatan::where('kode', $val)->first();
        if ($kecamatan) {
            return $kecamatan->id;
        } else {
            return null;
        }
    }

    public function onFailure(Failure ...$failures)
    {
        // Handle the failures how you'd like.
    }

    public function onError(\Throwable $e)
    {
        // Handle the exception how you'd like.
    }
}
