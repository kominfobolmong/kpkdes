<?php

namespace App\Imports;

use App\Models\Kecamatan;
use App\Models\Penduduk;
use App\Models\Pertanian;
use App\Models\Peternakan;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Validators\Failure;

class PeternakanImport implements
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
        return new Peternakan([
            'id_opd' => $this->id_opd,
            'id_kecamatan' => $this->getKecamatan(trim($row['kdkec'])),
            'id_jenis' => $this->id_jenis,
            'tahun' => $this->tahun,
            'jenis' => $this->jenis,
            'luas_tanam' => $row['luas_tanam'],
            'luas_panen' => $row['luas_panen'],
            'provitas' => $row['provitas'],
            'produksi' => $row['produksi']
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
