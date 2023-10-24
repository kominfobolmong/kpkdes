<?php

namespace App\Imports;

use App\Models\Kecamatan;
use App\Models\Nakes;
use App\Models\Penduduk;
use App\Models\Pertanian;
use App\Models\Peternakan;
use App\Models\Puskesmas;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Validators\Failure;

class NakesImport implements
    ToModel,
    WithHeadingRow,
    SkipsOnFailure,
    SkipsOnError,
    WithCalculatedFormulas
{
    use Importable;

    public function __construct($id_opd, $id_jenis, $tahun, $jenis)
    {
        $this->id_opd = $id_opd;
        $this->id_jenis = $id_jenis;
        $this->tahun = $tahun;
        $this->jenis = $jenis;
    }

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        dd($row);
        // dd($this->id_opd);
        return new Nakes([
            'id_opd' => $this->id_opd,
            'id_kecamatan' => $this->getKecamatan($row['kdkec']),
            'id_jenis' => $this->id_jenis,
            'tahun' => $this->tahun,
            'jenis' => 'PUSKESMAS RI',
            'jumlah_desa' => $row['jumlah_desa'],
            'jumlah_penduduk' => $row['jumlah_penduduk'],
            'pns_dokter' => $row['pns_dokter'],
            'ptt_dokter' => $row['ptt_dokter'],
            'nsi_dokter' => $row['nsi_dokter'],
            'sukarela_dokter' => $row['sukarela_dokter'],
            'jml_dokter' => $row['jml_dokter'],
            'pns_dokter_gigi' => $row['pns_dokter_gigi'],
            'ptt_dokter_gigi' => $row['ptt_dokter_gigi'],
            'nsi_dokter_gigi' => $row['nsi_dokter_gigi'],
            'sukarela_dokter_gigi' => $row['sukarela_dokter_gigi'],
            'jml_dokter_gigi' => $row['jml_dokter_gigi'],
            'pns_perawat' => $row['pns_perawat'],
            'ptt_perawat' => $row['ptt_perawat'],
            'nsi_perawat' => $row['nsi_perawat'],
            'sukarela_perawat' => $row['sukarela_perawat'],
            'jml_perawat' => $row['jml_perawat'],
            'pns_perawat_gigi' => $row['pns_perawat_gigi'],
            'ptt_perawat_gigi' => $row['ptt_perawat_gigi'],
            'nsi_perawat_gigi' => $row['nsi_perawat_gigi'],
            'sukarela_perawat_gigi' => $row['sukarela_perawat_gigi'],
            'jml_perawat_gigi' => $row['jml_perawat_gigi'],
            'pns_bidan' => $row['pns_bidan'],
            'ptt_bidan' => $row['ptt_bidan'],
            'nsi_bidan' => $row['nsi_bidan'],
            'sukarela_bidan' => $row['sukarela_bidan'],
            'jml_bidan' => $row['jml_bidan'],
            'pns_lab' => $row['pns_lab'],
            'ptt_lab' => $row['ptt_lab'],
            'nsi_lab' => $row['nsi_lab'],
            'sukarela_lab' => $row['sukarela_lab'],
            'jml_lab' => $row['jml_lab'],
            'pns_promkes' => $row['pns_promkes'],
            'ptt_promkes' => $row['ptt_promkes'],
            'nsi_promkes' => $row['nsi_promkes'],
            'sukarela_promkes' => $row['sukarela_promkes'],
            'jml_promkes' => $row['jml_promkes'],
            'pns_kesling' => $row['pns_kesling'],
            'ptt_kesling' => $row['ptt_kesling'],
            'nsi_kesling' => $row['nsi_kesling'],
            'sukarela_kesling' => $row['sukarela_kesling'],
            'jml_kesling' => $row['jml_kesling'],
            'pns_apoteker' => $row['pns_apoteker'],
            'ptt_apoteker' => $row['ptt_apoteker'],
            'nsi_apotoker' => $row['nsi_apotoker'],
            'sukarela_apoteker' => $row['sukarela_apoteker'],
            'jml_apoteker' => $row['jml_apoteker'],
            'pns_kefarmasian' => $row['pns_kefarmasian'],
            'ptt_kefarmasian' => $row['ptt_kefarmasian'],
            'nsi_kefarmasian' => $row['nsi_kefarmasian'],
            'sukarela_kefarmasian' => $row['sukarela_kefarmasian'],
            'jml_kefarmasian' => $row['jml_kefarmasian'],
            'pns_gizi' => $row['pns_gizi'],
            'ptt_gizi' => $row['ptt_gizi'],
            'nis_gizi' => $row['nis_gizi'],
            'sukarela_gizi' => $row['sukarela_gizi'],
            'jml_gizi' => $row['jml_gizi'],
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
        dd($failures);
        // Handle the failures how you'd like.
    }

    public function onError(\Throwable $e)
    {
        dd($e);
        // Handle the exception how you'd like.
    }
}
