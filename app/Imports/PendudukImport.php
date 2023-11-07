<?php

namespace App\Imports;

use App\Models\Hubungan;
use App\Models\Kecamatan;
use App\Models\Pekerjaan;
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

    public function __construct($id_desa)
    {
        $this->id_desa = $id_desa;
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
            'id_desa' => $this->id_desa,
            'id_hubungan' => $this->getHubungan(trim($row['hub_keluarga'])),
            'id_pekerjaan' => $this->getPekerjaan(trim($row['pekerjaan'])),
            'alamat' => $row['alamat'],
            'dusun' => $row['dusun'],
            'rt' => $row['rt'],
            'rw' => $row['rw'],
            'no_kk' => $row['nokk'],
            'nik' => $row['nik'],
            'nama' => $row['nama'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tgl_lahir' => $row['tanggal_lahir'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'nama_ibu_kandung' => $row['nama_ibu_kandung'],
            'keterangan_padan' => $row['keterangan_padan'],
            'bansos_bpnt' => $row['bansos_bpnt'] == 'YA' ? 'Y' : 'N',
            'bansos_pkh' => $row['bansos_pkh'] == 'YA' ? 'Y' : 'N',
            'bansos_bpnt_ppkm' => $row['bansos_bpnt_ppkm'] == 'YA' ? 'Y' : 'N',
            'pbi_jkn' => $row['pbi_jkn'] == 'YA' ? 'Y' : 'N'
        ]);
    }

    public function getHubungan($val)
    {
        $hubungan = Hubungan::where('nama', $val)->first();
        if ($hubungan) {
            return $hubungan->id;
        } else {
            $hubungan = Hubungan::create([
                'nama' => $val
            ]);
            return $hubungan->id;
        }
    }

    public function getPekerjaan($val)
    {
        $pekerjaan = Pekerjaan::where('nama', $val)->first();
        if ($pekerjaan) {
            return $pekerjaan->id;
        } else {
            $pekerjaan = Pekerjaan::create([
                'nama' => $val
            ]);
            return $pekerjaan->id;
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
