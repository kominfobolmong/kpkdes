<?php

namespace App\Imports;

use App\Models\Babi;
use App\Models\Kecamatan;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BabiImport implements ToModel, WithHeadingRow
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
        dd($row);
        return new Babi([
            'id_opd' => $this->id_opd,
            'id_kecamatan' => $this->getKecamatan($row['kdkec']),
            'id_jenis' => $this->id_jenis,
            'tahun' => $this->tahun,
            'jumlah_penduduk' => $row['jumlah_penduduk'],
            'konversi_jlh' => $row['konversi_jlh'],
            'jantan' => $row['jantan'],
            'betina' => $row['betina'],
            'jumlah_ekor' => $row['jumlah_ekor'],
            'jlh_siap_potong' => $row['jlh_siap_potong'],
            'jlh_prod_dagingthn' => $row['jlh_prod_dagingthn'],
            'keb_kons_dagingthn' => $row['keb_kons_dagingthn'],
            'jlh_kons_daging_thn' => $row['jlh_kons_daging_thn']
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
}
