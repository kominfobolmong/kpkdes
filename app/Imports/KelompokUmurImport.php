<?php

namespace App\Imports;

use App\Models\Kecamatan;
use App\Models\KelompokUmur;
use App\Models\Kia;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Validators\Failure;

class KelompokUmurImport implements
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
        return new KelompokUmur(['id_opd' => $this->id_opd,
            'id_kecamatan' => $this->getKecamatan($row['kdkec']),
            'id_jenis' => $this->id_jenis,
            'tahun' => $this->tahun,
            // 'kdkec' => $row['kdkec'],
            'kecamatan' => $row['kecamatan'],
            'l_00_04' => $row['l_00_04'],
            'p_00_04' => $row['p_00_04'],
            'jlh_00_04' => $row['jlh_00_04'],
            'l_05_09' => $row['l_05_09'],
            'p_05_09' => $row['p_05_09'],
            'jlh_05_09' => $row['jlh_05_09'],
            'l10_14' => $row['l10_14'],
            'p10_14' => $row['p10_14'],
            'jlh_10_14' => $row['jlh_10_14'],
            'l_15_19' => $row['l_15_19'],
            'p_15_19' => $row['p_15_19'],
            'jlh_15_19' => $row['jlh_15_19'],
            'l_20_24' => $row['l_20_24'],
            'p_20_24' => $row['p_20_24'],
            'jlh_20_24' => $row['jlh_20_24'],
            'l_25_29' => $row['l_25_29'],
            'p_25_29' => $row['p_25_29'],
            'jlh_25_29' => $row['jlh_25_29'],
            'l_30_34' => $row['l_30_34'],
            'p_30_34' => $row['p_30_34'],
            'jlh_30_34' => $row['jlh_30_34'],
            'l_35_39' => $row['l_35_39'],
            'p_35_39' => $row['p_35_39'],
            'jlh_35_39' => $row['jlh_35_39'],
            'l_40_44' => $row['l_40_44'],
            'p_40_44' => $row['p_40_44'],
            'jlh_40_44' => $row['jlh_40_44'],
            'l_45_49' => $row['l_45_49'],
            'p_45_49' => $row['p_45_49'],
            'jlh_45_49' => $row['jlh_45_49'],
            'l_50_54' => $row['l_50_54'],
            'p_50_54' => $row['p_50_54'],
            'jlh_50_54' => $row['jlh_50_54'],
            'l_55_59' => $row['l_55_59'],
            'p_55_59' => $row['p_55_59'],
            'jlh_55_59' => $row['jlh_55_59'],
            'l_60_64' => $row['l_60_64'],
            'p_60_64' => $row['p_60_64'],
            'jlh_60_64' => $row['jlh_60_64'],
            'l_65_69' => $row['l_65_69'],
            'p_65_69' => $row['p_65_69'],
            'jlh_65_69' => $row['jlh_65_69'],
            'l_70_74' => $row['l_70_74'],
            'p_70_74' => $row['p_70_74'],
            'jlh_70_74' => $row['jlh_70_74'],
            'l_75_up' => $row['l_75_up'],
            'p_75_up' => $row['p_75_up'],
            'jlh_75_up' => $row['jlh_75_up']
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
