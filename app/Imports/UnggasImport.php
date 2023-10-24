<?php

namespace App\Imports;

use App\Models\Kecamatan;
use App\Models\Unggas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Validators\Failure;

class UnggasImport implements
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
        return new Unggas([
            'id_opd' => $this->id_opd,
            'id_kecamatan' => $this->getKecamatan(trim($row['kdkec'])),
            'id_jenis' => $this->id_jenis,
            'tahun' => $this->tahun,
            'jumlah_penduduk' => $row['jumlah_penduduk'],
            'populasi_ayam_petelur' => $row['populasi_ayam_petelur'],
            'prod_telur_ayam_petelur' => $row['prod_telur_ayam_petelur'],
            'jlh_siap_potong_ayam_ptlr' => $row['jlh_siap_potong_ayam_ptlr'],
            'jlh_prod_daging_ayam_ptlrthn' => $row['jlh_prod_daging_ayam_ptlrthn'],
            'jumlah_itik_petelur' => $row['jumlah_itik_petelur'],
            'produksi_telur_itik' => $row['produksi_telur_itik'],
            'total_produksi_telur' => $row['total_produksi_telur'],
            'jlh_siap_potong_itik_ptlr' => $row['jlh_siap_potong_itik_ptlr'],
            'jlh_prod_daging_itik_ptlrthn' => $row['jlh_prod_daging_itik_ptlrthn'],
            'jumlah_itik_manila' => $row['jumlah_itik_manila'],
            'jlh_siap_potong_itik_manila' => $row['jlh_siap_potong_itik_manila'],
            'jlh_prod_daging_itik_manilathn' => $row['jlh_prod_daging_itik_manilathn'],
            'total_itikthn' => $row['total_itikthn'],
            'total_prod_daging_itik_manilathn' => $row['total_prod_daging_itik_manilathn'],
            'total_itik_siap_potong' => $row['total_itik_siap_potong'],
            'ayam_daging' => $row['ayam_daging'],
            'jlh_siap_potong_ayam_daging' => $row['jlh_siap_potong_ayam_daging'],
            'jlh_prod_daging_ayam_pedagingthn' => $row['jlh_prod_daging_ayam_pedagingthn'],
            'ayam_buras' => $row['ayam_buras'],
            'produksi_telur_ayam_buras' => $row['produksi_telur_ayam_buras'],
            'jlh_siap_potong_ayam_buras' => $row['jlh_siap_potong_ayam_buras'],
            'jlh_prod_daging_ayam_burasthn' => $row['jlh_prod_daging_ayam_burasthn'],
            'total_ayam' => $row['total_ayam'],
            'total_ayam_siap_potong' => $row['total_ayam_siap_potong'],
            'total_prod_daging_ayamthn' => $row['total_prod_daging_ayamthn'],
            'total_unggas_penghasil_daging' => $row['total_unggas_penghasil_daging'],
            'total_unggas_siap_potong' => $row['total_unggas_siap_potong'],
            'total_prod_daging_unggasthn' => $row['total_prod_daging_unggasthn'],
            'keb_kons_daging_thn' => $row['keb_kons_daging_thn'],
            'jlh_kons_dagingthn' => $row['jlh_kons_dagingthn']
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
