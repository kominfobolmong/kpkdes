<?php

namespace App\Imports;

use App\Models\Akta;
use App\Models\Kecamatan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Validators\Failure;

class AktaImport implements
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
        return new Akta([
            'id_opd' => $this->id_opd,
            'id_kecamatan' => $this->getKecamatan($row['kdkec']),
            'id_jenis' => $this->id_jenis,
            'tahun' => $this->tahun,
            'kecamatan' => $row['kecamatan'],
            'jumlah_anak_0_18_tahun' => $row['jumlah_anak_0_18_tahun'],
            'jumlah_anak_memiliki_akta' => $row['jumlah_anak_memiliki_akta'],
            'persentase_jumlah_anak_memiliki_akta' => $row['persentase_jumlah_anak_memiliki_akta'],
            'jumlah_anak_belum_memiliki_akta' => $row['jumlah_anak_belum_memiliki_akta'],
            'persentase_anak_belum_memiliki_akta' => $row['persentase_anak_belum_memiliki_akta']
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
