<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealisasiAnggaran extends Model
{
    use HasFactory;
    protected $table = 'realisasi_anggaran';
    protected $fillable = [
        'id_desa', 'id_sumber_dana', 'tahun', 'kode', 'uraian', 'anggaran', 'realisasi', 'lebih_kurang'
    ];

    protected $hidden = [];

    public function sumber_dana()
    {
        return $this->belongsTo(SumberDana::class, 'id_sumber_dana', 'id');
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'id_desa', 'id');
    }
}
