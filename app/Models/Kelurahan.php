<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokUmur extends Model
{
    use HasFactory;
    protected $table = 'kelompok_umurs';
    protected $fillable = [
        'id_opd', 'id_jenis', 'id_kecamatan', 'tahun', 'l_00_04', 'p_00_04', 'jlh_00_04', 'l_05_09', 'p_05_09', 'jlh_05_09', 'l10_14', 'p10_14', 'jlh_10_14', 'l_15_19', 'p_15_19', 'jlh_15_19', 'l_20_24', 'p_20_24', 'jlh_20_24', 'l_25_29', 'p_25_29', 'jlh_25_29', 'l_30_34', 'p_30_34', 'jlh_30_34', 'l_35_39', 'p_35_39', 'jlh_35_39', 'l_40_44', 'p_40_44', 'jlh_40_44', 'l_45_49', 'p_45_49', 'jlh_45_49', 'l_50_54', 'p_50_54', 'jlh_50_54', 'l_55_59', 'p_55_59', 'jlh_55_59', 'l_60_64', 'p_60_64', 'jlh_60_64', 'l_65_69', 'p_65_69', 'jlh_65_69', 'l_70_74', 'p_70_74', 'jlh_70_74', 'l_75_up', 'p_75_up', 'jlh_75_up'
    ];

    protected $hidden = [];

    public function opd()
    {
        return $this->belongsTo(Opd::class, 'id_opd', 'id');
    }

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'id_jenis', 'id');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan', 'id');
    }
}
