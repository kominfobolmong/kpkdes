<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApbdRekening extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_rekening', 'anggaran', 'id_sumber_dana', 'tahun', 'anggaran', 'id_desa'
    ];

    protected $hidden = [];

    public function rekening()
    {
        return $this->belongsTo(Rekening::class, 'id_rekening', 'id');
    }

    public function sumber_dana()
    {
        return $this->belongsTo(SumberDana::class, 'id_sumber_dana', 'id');
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'id_desa', 'id');
    }
}
