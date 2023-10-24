<?php

namespace App\Imports;

use App\Models\Kecamatan;
use App\Models\Pariwisata;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Validators\Failure;

class PariwisataImport implements
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
        return new Pariwisata([
            'id_opd' => $this->id_opd,
            'id_kecamatan' => $this->getKecamatan($row['kdkec']),
            'id_jenis' => $this->id_jenis,
            'tahun' => $this->tahun,
            'nama_usaha_wisata' => $row['nama_usaha_wisata'],
            'pemilik_pengusaha' => $row['pemilik_pengusaha'],
            'luas_area_m2' => $row['luas_area_m2'],
            'jenis_kegiatan_usaha' => $row['jenis_kegiatan_usaha'],
            'kdkec' => $row['kdkec'],
            'alamat' => $row['alamat'],
            'latitude' => $row['latitude'],
            'longitude' => $row['longitude'],
            'catatan' => $row['catatan'],
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
