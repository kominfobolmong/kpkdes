<?php

namespace App\Imports;

use App\Models\JumlahKepalaKeluarga;
use App\Models\Kecamatan;
use App\Models\Kia;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Validators\Failure;

class JumlahKepalaKeluargaImport implements
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
        return new JumlahKepalaKeluarga([
            'id_opd' => $this->id_opd,
            'id_kecamatan' => $this->getKecamatan($row['kdkec']),
            'id_jenis' => $this->id_jenis,
            'tahun' => $this->tahun,
            'lk' => $row['lk'],
            'pr' => $row['pr'],
            'jumlah_penduduk' => $row['jumlah_penduduk'],
            'jumlah_kepala_keluarga' => $row['jumlah_kepala_keluarga'],
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
